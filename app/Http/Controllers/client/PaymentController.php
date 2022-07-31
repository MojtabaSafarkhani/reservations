<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Reserve;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Payment\Facade\Payment;

class PaymentController extends Controller
{

    public function checkLink(Reserve $reserve)
    {

        $this->checkReserve($reserve);

        return redirect("https://sandbox.zarinpal.com/pg/transaction/pay/$reserve->transaction_id");
    }

    public function callBack(Request $request)
    {

        $reserve = Reserve::query()->where('transaction_id', $request->get('Authority'))->first();

        $this->checkReserve($reserve);

        $reserve->update(
            [
                'status' => $request->get('Status'),
            ]
        );

        if ($reserve->fresh()->status === 'nok') {

            $reserve->order()->update([
                'status' => 'nok'
            ]);

        }


        return redirect(route('client.show.callBack', [

            'reserve' => $reserve,

        ]));

    }

    public function show(Reserve $reserve)
    {
        return view('client.reserves.callBack', [

            'reserve' => $reserve
        ]);
    }

    /**
     * @param Reserve $reserve
     * @return void
     */
    public function checkReserve(Reserve $reserve): void
    {
        if ($reserve->status !== 'wait' || Carbon::now()->diffInMinutes($reserve->created_at) >= 20) {

            abort(403);
        }
    }
}
