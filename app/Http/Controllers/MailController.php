<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        /*$data =[
        'email'=>$request->email,

        ];
        Mail::to("sargsyanromik6@gmail.com")->send(new SendMail($data));*/
    }
}
