<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
//use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class Newsletters extends Mailable //implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $email;
    public $filename;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request,$filename=null)
    {
        $this->email= $request;
        $this->filename= $filename;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {        
        if ($this->filename)
        {
            return $this->view('emails.newsletters')
                    ->subject($this->email->get('Subject'))
                    ->attach($this->filename);    
        }
        else
        {
            return $this->view('emails.newsletters')
                        ->subject($this->email->get('Subject'));
                    
        }
        
    }
}
