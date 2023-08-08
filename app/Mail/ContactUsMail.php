<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(public $name, public $email, public $phone, public $userMessage)
    {
        //
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Us Mail',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mails.contact-us-mail',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
