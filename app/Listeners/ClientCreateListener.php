<?php

namespace App\Listeners;

use App\Events\ClientCreateEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ClientCreateListener
{

    public function handle(ClientCreateEvent $event)
    {
        echo json_encode($event->message()->body);
        $event->message()->ack();
    }
}
