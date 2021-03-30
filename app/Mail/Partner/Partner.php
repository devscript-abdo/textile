<?php

namespace App\Mail\Partner;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Partner extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('noreplay@' . request()->getHost(), 'mailletex.ma')
            ->subject('nouvelle demande de partenariat')
            ->view('emails.partner.index')
            ->with('data', (object)$this->data);
    }
}
