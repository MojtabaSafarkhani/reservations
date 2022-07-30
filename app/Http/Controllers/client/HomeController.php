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

        $cities = City::query()->where('city_id', '=', null)->limit(10)->get();

        $hotels = Hotel::query()->where('is_published', 'ok')
            ->orderByDesc('id')->limit(10)->get();

        $hotelWithMostLiked = $this->getHotelWithMostLiked();

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

        $hotelsInSameCategory = $this->getHotelsInSameCategory($hotel);

        return view('client.hotels.show', [
            'hotel' => $hotel,
            'hotelsInSameCategory' => $hotelsInSameCategory,
        ]);

    }


    public function categoryShowAll(Category $category)
    {


        $hotels = $category->hotels()->paginate(6);

        return view('client.showAll.categories.index', [
            'hotels' => $hotels,
            'category' => $category,
        ]);

    }

    public function CityShowAll(City $city)
    {


        $ids = $city->where('city_id', $city->id)->orWhere('id', $city->id)->pluck('id');

        $hotels = Hotel::query()->whereIn('city_id', $ids)->paginate(6);

        return view('client.showAll.cities.index', [
            'hotels' => $hotels,
            'city' => $city,
        ]);


    }

    /**
     * @param Hotel $hotel
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getHotelsInSameCategory(Hotel $hotel)
    {
        return Hotel::query()
            ->where('id', '!=', $hotel->id)
            ->where('category_id', $hotel->category_id)->take(3)->get();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getHotelWithMostLiked(): \Illuminate\Support\Collection
    {
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
        $hotelWithMostLiked = collect($hotelWithMostLiked)->sortBy('hotel_rating', SORT_DESC, true);
        return $hotelWithMostLiked;
    }
}
