<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckHostOkMiddleware;
use App\Models\Order;
use Illuminate\Http\Request;

class HOstOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckHostOkMiddleware::class);
    }

    public function index()
    {
        $hotelsId = auth()->user()->host->hotels->pluck('id');

        $orders = Order::query()->whereIn('hotel_id', $hotelsId)->get();

        return view('client.hostOrders.index', [
            'orders' => $orders
        ]);
    }
}
