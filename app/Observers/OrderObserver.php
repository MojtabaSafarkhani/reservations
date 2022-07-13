<?php

namespace App\Observers;

use App\Mail\TransactionMail;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     *
     * @param \App\Models\Order $order
     * @return void
     */
    public function created(Order $order)
    {
        //
    }

    /**
     * Handle the Order "updated" event.
     *
     * @param \App\Models\Order $order
     * @return void
     */
    public function updated(Order $order)
    {

        if ($order->status === 'ok') {
            Mail::to($order->user->email)->send(new TransactionMail($order->reserves->last()));
        }
    }

    /**
     * Handle the Order "deleted" event.
     *
     * @param \App\Models\Order $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     *
     * @param \App\Models\Order $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     *
     * @param \App\Models\Order $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
