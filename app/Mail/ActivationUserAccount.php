<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivationUserAccount extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $tries = 5;
    public $user;
    public $code;

    public function __construct(\App\User $user ,$code)
    {
        $this->user=$user;
        $this->code=$code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('this is subject')->markdown('emails.active_user');
    }
}
