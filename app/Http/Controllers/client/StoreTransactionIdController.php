<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class StoreTransactionIdController extends Controller
{
    public function createInvoice(Order $order)
    {
        $invoice = (new Invoice)->amount($order->total_cost);

        Payment::purchase($invoice, function ($driver, $transactionId) use ($order) {

            $order->reserves()->create([
                'transaction_id' => $transactionId,
                'total_cost' => $order->total_cost,
                'status' => 'wait',
                'u_string' => Str::random(16),
            ]);


        });

        return redirect(route('host.orders.accept', $order));


    }
}
