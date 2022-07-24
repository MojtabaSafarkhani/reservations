<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Hotel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->filled('hotel') || $request->filled('city') || $request->filled('category')) {

            $name = $request->get('hotel');
            $city = $request->get('city');
            $category = $request->get('category');

            $cityCollect = City::query()->where('name', $city)->first();

            $ids = [0];
            if ($cityCollect && $cityCollect->towns->count() > 0) {


                $ids = $cityCollect->towns->pluck('id');

                $hotels = Hotel::query()->where('is_published', 'ok')
                    ->join('cities', 'hotels.city_id', '=', 'cities.id')
                    ->join('categories', 'hotels.category_id', '=', 'categories.id')
                    ->where(function ($query) use ($ids, $name, $category, $city) {
                        $query->where('hotels.name', "like", "%$name%")
                            ->where('categories.title', "like", "%$category%")
                            ->whereIn('hotels.city_id', $ids);
                    })->select('hotels.*')->paginate(6);

            } else {
                $hotels = Hotel::query()->where('is_published', 'ok')
                    ->join('cities', 'hotels.city_id', '=', 'cities.id')
                    ->join('categories', 'hotels.category_id', '=', 'categories.id')
                    ->where(function ($query) use ($name, $category, $city) {
                        $query->where('hotels.name', "like", "%$name%")
                            ->where('categories.title', "like", "%$category%")
                            ->where('cities.name', "like", "%$city%");
                    })->select('hotels.*')->paginate(6);
            }

            /* $hotels = Hotel::query()->where('is_published', 'ok')
                 ->join('cities', 'hotels.city_id', '=', 'cities.id')
                 ->join('categories', 'hotels.category_id', '=', 'categories.id')
                 ->where('hotels.name', "like", "%$name%")
                 ->where('categories.title', "like", "%$category%")
                 ->where('cities.name', "like", "%$city%")->orWhereIn('hotels.city_id', $ids)
                 ->select('hotels.*')->paginate(6);*/

            return view('client.searchs.index', [
                'hotels' => $hotels,
            ]);

        } else {
            return redirect()->back()->withErrors(['error' => 'پر کردن حداقل يک فيلد الزامي ميباشد!']);
        }


    }
}
