<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Subscriber as Members;

class Subscribers extends Mailable
{
    use Queueable, SerializesModels;

    protected $subscriber;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Members $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.subscriber')
        ->with([
            'subscriber' => $this->subscriber,
        ]);
    }
}
