<?php
namespace App\Mail;
namespace App\Http\Controllers;  
use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\Manager;


class MailController extends Controller
{

    public function index()
    {
        $mailData = [
            'title' => 'Mail from laravel project',
            'body' => 'This is for testing email using smtp.'
        ];
         
       Mail::to("anjuckuriyappan123@gmail.com")->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}