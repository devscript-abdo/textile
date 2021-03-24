<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class CartButton extends Component
{

    public $qty = 0;

    protected $listeners = ['cartUpdated' => 'update'];

    public function render()
    {
        return view('livewire.cart.cart-button');
    }

    public function mount()
    {

        $this->update();
    }
    public function update()
    {
        $this->qty = array_sum(\Mailletex::myCart()->all());
    }

    public function toggle(){
       $this->emit('toggleCart');
    }
}
