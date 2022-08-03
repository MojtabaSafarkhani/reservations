<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckHostOkMiddleware;
use App\Models\Hotel;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HOstOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckHostOkMiddleware::class);
    }

    public function index()
    {

        $hotelsId = Hotel::withTrashed()->where('host_id', auth()->user()->host->id)->pluck('id');

        $orders = Order::query()->whereIn('hotel_id', $hotelsId)->orderBy('id')->paginate(4);

        return view('client.hostOrders.index', [
            'orders' => $orders
        ]);
    }

    public function reject(Order $order)
    {
        Gate::authorize('JustOneTimeToChangeStatusOfOrder', $order);
        $order->update([
            'status' => 'nok',
        ]);

        return redirect(route('host.orders.index'));
    }

    public function accept(Order $order)
    {
        Gate::authorize('JustOneTimeToChangeStatusOfOrder', $order);
        $order->update([
            'status' => 'ok',
        ]);
        /*
         * route to reserve after status is ok but reserve not implement
         * */
        return redirect(route('host.orders.index'));
    }
}
