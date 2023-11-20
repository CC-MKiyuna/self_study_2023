<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $name = 'test_user';
        $email = 'test@example.com';
//引数の順番重要
        Mail::send(new TestMail($email, $name));

        return view('mail_result');
    }
}