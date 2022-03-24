<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {

        return view('client.hotels.index', [
            'hotels' => auth()->user()->host->hotels
        ]);
    }
}
