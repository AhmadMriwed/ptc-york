<?php

namespace App\Listeners;

use App\Events\SendNotificationEvent;
use App\Events\SendUserNotificationEvent;

class SendNotificationListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SendNotificationEvent $event): void
    {
        event(new SendUserNotificationEvent($event->requsetNotification->user_id,
        $event->requsetNotification->title,$event->requsetNotification->body));
    }
}
