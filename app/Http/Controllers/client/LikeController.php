<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class LikeController extends Controller
{
 /*   public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        return view('client.likes.index', [

            'hotels' => auth()->user()->likes,

        ]);
    }

    public function store(Hotel $hotel)
    {

        auth()->user()->likeHotel($hotel);


        return response(['liked_count' => auth()->user()->likes()->count()], 200);
    }

    public function destroy(Hotel $hotel)
    {
        auth()->user()->likes()->detach($hotel);

        return back();
    }
}
