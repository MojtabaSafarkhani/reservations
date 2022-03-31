<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckHostOkMiddleware;
use App\Http\Requests\Client\Hotel\CreateHotelRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Host;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckHostOkMiddleware::class);
    }

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

    public function store(CreateHotelRequest $request)
    {
        /**
         * @var Host $host
         **/
        $host = auth()->user()->host;

        $host->hotels()->create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'category_id' => $request->get('category_id'),
            'city_id' => $request->get('city_id'),
            'cost' => $request->get('cost'),
            'description' => $request->get('description'),
            'address' => $request->get('address'),
            'capacity' => $request->get('capacity'),
        ]);

        return redirect(route('client.hotel.index'));
    }

    public function show(Hotel $hotel)
    {
        return view('client.hotels.show', [

            'hotel' => $hotel,
        ]);
    }
}
