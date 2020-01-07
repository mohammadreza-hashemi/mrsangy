<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\User;
use App\Mail\ActivationUserAccount;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
// define propertys

public $tries =5;

protected $user;
protected $code;





    public function __construct(User $user,$code)
    {
        $this->user=$user;
        $this->code=$code;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Mail::to($this->user)->send(new ActivationUserAccount($this->user,$this->code));
    }
}
