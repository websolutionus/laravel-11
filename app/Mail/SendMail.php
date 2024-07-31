<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use function Laravel\Prompts\form;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailBody;

    /**
     * Create a new message instance.
     */
    public function __construct($mailBody)
    {
        $this->mailBody = $mailBody;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('laravelmail@gmail.com', 'Admin'),
            subject: 'Laravel Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.demo-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('uploads/1_BuLDBIovfqIwm2swvYid0A.png'))
            ->as('image.jpg')
        ];
    }
}
