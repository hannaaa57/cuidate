<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Correo de CuidaTe',
            'body' => 'Se ha reportado una emergencia'
        ];

        Mail::to('santillan.itc@gmail.com')->send(new DemoMail($mailData));

        dd("Email is sent successfully.");
    }
}
