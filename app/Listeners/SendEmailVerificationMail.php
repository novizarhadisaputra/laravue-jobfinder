<?php

namespace App\Listeners;

use App\Events\CustomRegistered;
use App\Mail\VerificationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailVerificationMail
{

    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  CustomRegistered  $event
     * @return void
     */
    public function handle(CustomRegistered $event)
    {
        Mail::to($event->user->email)->send(new VerificationMail($event->user));
    }
}
