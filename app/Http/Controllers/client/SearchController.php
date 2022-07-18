<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->filled('name') || $request->filled('city') || $request->filled('category')) {

            $name = $request->get('name');
            $city = $request->get('city');
            $category = $request->get('category');

            $hotels = Hotel::query()->where('is_published', 'ok')
                ->join('cities', 'hotels.city_id', '=', 'cities.id')
                ->join('categories', 'hotels.category_id', '=', 'categories.id')
                ->where('cities.name', "like", "%$city%")
                ->where('hotels.name', 'like', "%$name%")
                ->where('categories.title', 'like', "%$category%")
                ->select('hotels.*')->paginate(6);


            return view('client.searchs.index', [
                'hotels' => $hotels,
            ]);

        } else {
            return redirect()->back()->withErrors(['error' => 'پر کردن حداقل يک فيلد الزامي ميباشد!']);
        }


    }
}
