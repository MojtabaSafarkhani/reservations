<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Order;
use App\Models\Reserve;
use Illuminate\Http\Request;

class HostReserveController extends Controller
{
    public function index()
    {
        $hotelIds = Hotel::withTrashed()->where('host_id', auth()->user()->host->id)->pluck('id');

        $orderIds = Order::query()->whereIn('hotel_id', $hotelIds)->pluck('id');

        $reserves=Reserve::query()->whereIn('order_id', $orderIds)->with('order')->paginate(4);

        return view('client.HostReserves.index', [
            'reserves' => $reserves,
        ]);
    }
}
