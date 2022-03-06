<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Resources\ClientResource;

class ClientController extends Controller
{
    public function __construct() {
        request()->headers->set('Accept', 'application/json');
    }

    public function index()
    {
        return ClientResource::collection(Client::paginate(20));
    }
}
