<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class reclamo extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('bnb104@noreply.com', 'bnb104'),
            subject: 'Grazie per il feedback',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.reclamo',
        );
    }

    
    public function attachments(): array
    {
        return [];
    }
}
