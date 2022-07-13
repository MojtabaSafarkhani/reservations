<?php

namespace App\Observers;

use App\Mail\TransactionMail;
use App\Models\Reserve;
use Illuminate\Support\Facades\Mail;

class ReserveObserver
{
    /**
     * Handle the Reserve "created" event.
     *
     * @param \App\Models\Reserve $reserve
     * @return void
     */
    public function created(Reserve $reserve)
    {


    }

    /**
     * Handle the Reserve "updated" event.
     *
     * @param \App\Models\Reserve $reserve
     * @return void
     */
    public function updated(Reserve $reserve)
    {
        //
    }

    /**
     * Handle the Reserve "deleted" event.
     *
     * @param \App\Models\Reserve $reserve
     * @return void
     */
    public function deleted(Reserve $reserve)
    {
        //
    }

    /**
     * Handle the Reserve "restored" event.
     *
     * @param \App\Models\Reserve $reserve
     * @return void
     */
    public function restored(Reserve $reserve)
    {
        //
    }

    /**
     * Handle the Reserve "force deleted" event.
     *
     * @param \App\Models\Reserve $reserve
     * @return void
     */
    public function forceDeleted(Reserve $reserve)
    {
        //
    }
}
