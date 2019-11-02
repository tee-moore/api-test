<?php

namespace App\Listeners;

use App\Events\PreorderCreated;
use App\Mail\EmailPreorderNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailPreorderNotification implements ShouldQueue
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
     * @param  PreorderCreated  $event
     * @return void
     */
    public function handle(PreorderCreated $event)
    {
        $email = $event->preorder->email;
        Mail::to($email)->send(new EmailPreorderNotification($event->preorder));
    }
}
