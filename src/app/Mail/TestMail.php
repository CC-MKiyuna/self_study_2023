<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$name)
    {    
        // メール送信に必要な情報を設定
        $this->name = $name;
        $this->email = $email;    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('[15年-----]保証書の申請が届きました。')
        ->view('mail')
        ->to($this->email)
        ->with([
            'name' => $this->name,   
        ]);
    }
}
