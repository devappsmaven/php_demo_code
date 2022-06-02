<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\StandarEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use App\Mail\OpenCarts;


class SendOpenCartEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $email;
 
    
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle($email)
    {
        $opencartemail = new OpenCarts($email,null);
        Mail::to('admin@vividcustoms.com')->send($opencartemail);
    }
}
