<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\HtmlString;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone_number;
    public $email;
    public $messageSubject;
    public $messageBody;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone_number,$email, $messageSubject, $messageBody)
    {
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->email = $email;
        $this->messageSubject = $messageSubject;
        $this->messageBody = new HtmlString($messageBody);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
            ->subject($this->messageSubject)
            ->view('send-email'); // Create a blade template at resources/views/emails/send-email.blade.php
    }
}
