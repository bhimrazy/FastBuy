<?php

namespace App\Listeners;

use App\Events\LogHandlerEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreatedContentListener
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
     * @param  LogHandlerEvent  $event
     * @return void
     */
    public function handle(LogHandlerEvent $event)
    {
        //
    }
}
