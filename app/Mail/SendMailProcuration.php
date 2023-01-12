<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMailProcuration extends Mailable
{
    use Queueable, SerializesModels;

    public String $mail_from;
    public String $name_from;
    public String $copy_mailAgent;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail_from_Agent, $name_fromAgent, $copy_mailAgent,)
    {
        $this->mail_from = $mail_from_Agent;
        $this->name_from = $name_fromAgent;
        $this->copy_mailAgent = $copy_mailAgent;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address($this->mail_from, $this->name_from),
            subject: 'Procuration de mes gadgets',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.sendProcuration',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
