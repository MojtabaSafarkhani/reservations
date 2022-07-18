<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cities = City::query()->orderByDesc('id')->limit(10)->get();
        $hotels = Hotel::query()->where('is_published', 'ok')
            ->orderByDesc('id')->limit(10)->get();
        $mostLikedHotel = Hotel::query()->where('is_published', 'ok')->get();

        $hotelWithMostLiked = [];
        foreach ($mostLikedHotel as $hotel) {

            if (count($hotelWithMostLiked) < 10) {
                $hotelWithMostLiked [] = $hotel->hotel_rating > 3.5 ? $hotel : null;
                $hotelWithMostLiked = array_filter($hotelWithMostLiked, function ($item) {

                    return $item !== null;

                });
            }

        }


        return view('home1', [
            'cities' => $cities,
            'categories' => $categories,
            'hotels' => $hotels,
            'mostLikeHotels' => $hotelWithMostLiked,
        ]);
    }

    public function showHotel(Hotel $hotel)
    {
        if ($hotel->is_published !== 'ok') {

            abort(403);
        }

        return view('client.hotels.show', [
            'hotel' => $hotel
        ]);

    }

    public function categoryShowAll(Request $request)
    {

    }
}
