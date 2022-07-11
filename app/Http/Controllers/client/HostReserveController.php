<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Reserve;
use Illuminate\Http\Request;

class HostReserveController extends Controller
{
    public function index()
    {
        $hotelIds = auth()->user()->host->hotels->pluck('id');

        $orderIds = Order::query()->whereIn('hotel_id', $hotelIds)->pluck('id');

        $reserves=Reserve::query()->whereIn('order_id', $orderIds)->with('order')->paginate(4);

        return view('client.HostReserves.index', [
            'reserves' => $reserves,
        ]);
    }
}
