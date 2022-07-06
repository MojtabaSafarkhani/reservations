<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Reserve;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function callBack(Request $request)
    {
        $reserve = Reserve::query()->where('transaction_id', $request->get('Authority'))->first();

        $reserve->update(
            [
                'status' => $request->get('Status'),
            ]
        );

        return redirect(route('home'));
    }
}
