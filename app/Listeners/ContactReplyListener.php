<?php

namespace App\Listeners;

use App\Events\ContactReplyEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\ContactReplyMail;

class ContactReplyListener
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
     * @param  ContactReplyEvent  $event
     * @return void
     */
    public function handle(ContactReplyEvent $event)
    {
        dd($event->request);
        Mail::to($event->request)->send(new ContactReplyMail($event->request));
    }
}
