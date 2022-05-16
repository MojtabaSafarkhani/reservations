<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cities = City::all();

        return view('home', [
            'cities' => $cities,
            'categories' => $categories,
        ]);
    }
}
