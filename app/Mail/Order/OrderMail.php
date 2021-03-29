<?php

namespace App\Mail\Order;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    private $productsCart;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $productsCart)
    {
        $this->data = $data;

        $this->productsCart = $productsCart;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        //dd($this->data,'-----------------',$this->commands);
        return $this->from('noreplay@' . request()->getHost(), 'mailletex.ma')
            ->subject('Nouveau message depuis le site web')
            ->view('emails.orders.newOrder.index')
            ->with('data', $this->data)
            ->with('productsCart', $this->productsCart);
    }
}
