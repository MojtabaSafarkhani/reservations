<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckHostOkMiddleware;
use App\Http\Requests\Client\Features\FeatureAddRequest;
use App\Models\Feature;
use App\Models\Hotel;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckHostOkMiddleware::class);
    }

    public function create(Hotel $hotel)
    {
        return view('client.features.create', [

            'features' => Feature::all(),
            'hotel' => $hotel

        ]);
    }

    public function store(Hotel $hotel, FeatureAddRequest $request)
    {
        $hotel->features()->sync($request->get('features'));

        return redirect(route('features.hotel.create', $hotel));
    }
}
