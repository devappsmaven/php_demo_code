<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SaveShareDesign extends Mailable
{
    use Queueable, SerializesModels;
    public $design;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($design)
    {
        $this->design= $design;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.savesharedesign')
                    ->subject('Bring your design to life!')
                    ;
    }
}
