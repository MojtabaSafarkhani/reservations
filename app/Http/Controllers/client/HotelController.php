<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {

        return view('client.hotels.index', [
            'hotels' => auth()->user()->host->hotels
        ]);
    }

    public function create()
    {
        return view('client.hotels.create', [
            'categories' => Category::all(),
            'cities' => City::all(),
        ]);
    }
}
