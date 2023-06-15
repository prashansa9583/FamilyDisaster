<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FERCMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private string $filename;
    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('fercmailmarkdown')
                    ->attach(public_path($this->filename), [
                        'as' => $this->filename,
                        'mime' => 'application/pdf',
                    ]);
    }
}
