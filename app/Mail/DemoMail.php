<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
  
class DemoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
  
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

public function build()
{
    return $this->subject('Mail from laravel project')
                ->view('emails.demoMail');
}

}


  