<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
        $orderIds = auth()->user()->orders->pluck('id');

        $reserves = Reserve::query()->whereIn('order_id', $orderIds)->with('order')->paginate(4);


        return view('client.reserves.index', [
            'reserves' => $reserves,
        ]);
    }
}
