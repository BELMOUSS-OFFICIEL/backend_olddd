<?php

namespace App\Mail;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class virefierMail extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   */
  public function __construct(private User $user ,private Profile $profile)
  {
    //
  }

  /**
   * Get the message envelope.
   */
  public function envelope(): Envelope
  {
    return new Envelope(
      subject: 'Virefier Email',
    );
  }

  /**
   * Get the message content definition.
   */
  public function content(): Content
  {
    $date=$this->user->created_at;
    $id=$this->user->id;
    $href=base64_encode($date."///".$id);
    return new Content(
      view: 'emails.inscription',
      with: [
        'nom' => $this->profile->nom,
        'email' => $this->user->email,
        'href' => $href
        
      ]
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
