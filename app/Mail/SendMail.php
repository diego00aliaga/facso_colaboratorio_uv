<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

	public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
                // El 'from' debe seguir siendo el oficial para que Gmail no lo bloquee
                from: new Address('investigacion.facso@uv.cl', 'Web Colaboratorio'),
                
                // 1. AGREGA ESTO: Permite responder directamente al usuario
                replyTo: [
                    new Address($this->data['email'], $this->data['name']),
                ],
                
                // 2. MODIFICA ESTO: El asunto ahora te dice quién es sin abrir el mail
                subject: 'Contacto Web Colaboratorio: ' . $this->data['name'] . ' - ' . ($this->data['subject'] ?? 'Consulta Web'),
            );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'contacto.send',
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
