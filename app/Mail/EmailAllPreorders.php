<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailAllPreorders extends Mailable
{
    use Queueable, SerializesModels;

    public $preorders;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($preorders)
    {
        $this->preorders = $preorders;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.all-preorders');
    }
}
