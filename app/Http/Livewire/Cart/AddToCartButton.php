<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class AddToCartButton extends Component
{
    public $isSingle = false;
    
    public $qty = 1;

    public $productId;

    public $currentQty = 0;

    public function render()
    {
        return view('livewire.cart.add-to-cart-button');
    }

    public function mount(int $productId)
    {
        $this->productId = $productId;
    }

    public function hydrate()
    {
        $this->currentQty = \Mailletex::myCart()->getCurrentQty($this->productId);
    }
    /***
     * add product to Cart
     */
    public function add()
    {
        $qty = $this->currentQty + (int) $this->qty;

        if ($qty < 1) {
            return;
        }
        \Mailletex::myCart()->add($this->productId, $qty);
        $this->qty = 1;
        $this->emit('cartUpdated');
    }
}
