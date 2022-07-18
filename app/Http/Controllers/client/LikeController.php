<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Hotel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LikeController extends Controller
{
    /*   public function __construct()
       {
           $this->middleware('auth');
       }*/

    public function index()
    {
        $hotelsIds = auth()->user()->likes->pluck('id');

        $hotels = Hotel::query()->whereIn('id', $hotelsIds)->paginate(6);

        return view('client.likes.index', [

            'hotels' => $hotels,

        ]);
    }

    public function store(Hotel $hotel)
    {

        Gate::authorize('HotelIsPublishedForLike', $hotel);

        auth()->user()->likeHotel($hotel);


        return response(['liked_count' => auth()->user()->likes()->count()], 200);
    }

    public function destroy(Hotel $hotel)
    {
        auth()->user()->likes()->detach($hotel);

        return back();
    }
}
