<?php

namespace App\Listeners;

use App\Events\NewsletterEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\NewsletterMail;

class NewsletterListener
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
     * @param  NewsletterEvent  $event
     * @return void
     */
    public function handle(NewsletterEvent $event)
    {
        Mail::to($event->request)->send(new NewsletterMail($event->request));
    }
}
