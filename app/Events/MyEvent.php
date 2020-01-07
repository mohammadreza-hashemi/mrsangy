<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MyEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    
    public $message;

    public function __construct($message)
    {
        $this->message=$message;
    }


    
    public function broadcastOn()
    {
        return new Channel('articles');
    }
    // public function broadcastAs()
    // {
    //     return 'my-event';
    // }

    public function broadcastWith(){

        return [
            'this is brodcast message'
            ];
    }

    //Privatew
    // public function broadcastOn()
    // {
    //     return new PrivateChannel('articles.admin');//hata mitoni baray id hay khas beferesti
    // }
}
