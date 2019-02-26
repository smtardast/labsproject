<?php

namespace App\Listeners;

use App\Events\ContactEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\ContactMail;

class ContactListener
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
     * @param  ContactEvent  $event
     * @return void
     */
    public function handle(ContactEvent $event)
    {
        Mail::to($event->request)->send(new ContactMail($event->request));
    }
}
