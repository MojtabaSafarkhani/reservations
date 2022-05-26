<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cities = City::all();
        $hotels = Hotel::query()->where('is_published', 'ok')->get();

        return view('home', [
            'cities' => $cities,
            'categories' => $categories,
            'hotels'=>$hotels,
        ]);
    }
}
