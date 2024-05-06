<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class AlertUser extends Mailable
{
    use Queueable, SerializesModels;

    public $userName;
    public $userLastname;
    public $title;
    public $textAlertUser;
    


    public function __construct($userName, $userLastname,$title, $textAlertUser)
    {
        $this->userName=$userName;
        $this->userLastname=$userLastname;
        $this->title=$title;
        $this->textAlertUser=$textAlertUser;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Alert User',
            from: new Address('nerdesto.it@noreply.com', 'Nerdesto'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.alertUser',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
