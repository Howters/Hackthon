<?php

namespace App\Mail;

use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    
    public $email;
    public $subject;
    public $messages;

    public function __construct($email,$subject,$messages)
    {
        //
        // $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->messages = $messages;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail')->from($this->email)->subject($this->subject)->with([
            'message' => $this->messages
        ]);
    }
}