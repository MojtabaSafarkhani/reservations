<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $name = $request->get('name');
        $city = $request->get('city');
        $category = $request->get('category');

        $hotels = Hotel::query()->where('is_published', 'ok')
            ->join('cities', 'hotels.city_id', '=', 'cities.id')
            ->join('categories', 'hotels.category_id', '=', 'categories.id')
            ->where('cities.name', "like", "%$city%")
            ->where('hotels.name', 'like', "%$name%")
            ->where('categories.title', 'like', "%$category%")
            ->select('hotels.*')->get();


        return view('client.searchs.index', [
            'hotels' => $hotels,
        ]);


    }
}
