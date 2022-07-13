<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class StoreTransactionIdController extends Controller
{
    public function createInvoice(Order $order)
    {
        $invoice = (new Invoice)->amount($order->total_cost);

        $u_string = Str::random(16);

        Payment::purchase($invoice, function ($driver, $transactionId) use ($order, $u_string) {

            Reserve::query()->create([
                'transaction_id' => $transactionId,
                'order_id' => $order->id,
                'total_cost' => $order->total_cost,
                'status' => 'wait',
                'u_string' => $u_string,
            ]);


        });

        $order->update([
            'status' => 'ok'
        ]);

        return redirect(route('host.orders.index'));


    }
}
