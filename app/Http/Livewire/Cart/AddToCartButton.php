<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class AddToCartButton extends Component
{
    public $isSingle = false;

    public $productId;

    public $quantity;

    public $colors = [];

    public $designs;

    public $currentQty = 0;

    //protected $listeners = ['qteAdded' => 'okk'];

    public function render()
    {
        return view('livewire.cart.add-to-cart-button');
    }

    public function mount(int $productId, int $quantity = null, $colors = [], $designs = null)
    {
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->colors = $colors;
        $this->designs = $designs;
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
        // dd($this->currentQty);
        $qty = $this->currentQty + (int) $this->quantity;

        if ($qty < 1) {
            return;
        }
        \Mailletex::myCart()->add($this->productId, [
            'qte' => $qty,
            'colors' => $this->colors,
            'designs' => $this->designs,
            'product' => $this->productId

        ]);
        $this->quantity = 1;
        $this->emit('cartUpdated');
    }
}
