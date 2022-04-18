<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelAdminController extends Controller
{
    public function index()
    {
        return view('admin.hotels.index', [

            'hotels' => Hotel::all(),

        ]);

    }

    public function accept(Request $request)
    {
        $hotel = Hotel::query()
            ->where('id', $request->get('hotelId'))->firstOrFail();

        $hotel->update([
            'is_published' => 'ok',
        ]);

        return response()->json([
            'message' => 'ok',
            'hotel' => $hotel
        ]);
    }

    public function reject(Request $request)
    {
        $hotel = Hotel::query()
            ->where('id', $request->get('hotelId'))->firstOrFail();

        $hotel->update([
            'is_published' => 'nok',
        ]);

        return response()->json([
            'message' => 'ok',
            'hotel' => $hotel
        ]);
    }
}
