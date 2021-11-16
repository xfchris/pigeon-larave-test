<?php

namespace App\Events;

use E4\Pigeon\AMQPMessageStructure;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ClientCreateEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        private AMQPMessageStructure $message
    ) {
    }

    public function message(): AMQPMessageStructure
    {
        return $this->message;
    }

  
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
