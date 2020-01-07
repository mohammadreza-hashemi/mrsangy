<?php

namespace App\Listeners;

use App\Events\ActivationCode;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ActivationUserAccount;
class SendEmailVerificatio
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ActivationCode  $event
     * @return void
     */
    public function handle(ActivationCode $event)
    {
       \Mail::to($event->user)->send(new ActivationUserAccount($event->user,$event->activecode));
    }
}
