<?php

namespace App\Http\Livewire\Product;

use App\Repository\Product\ProductInterface;

use Livewire\Component;

class Single extends Component
{
    public $product;

    public $products;

    /******** */

    public $quantity;

    public $designs;

    public $selectedcolors = [];

    protected $listeners = ['addColor'];

    public function render()
    {
        return view('livewire.product.single');
    }

    public function mount($product, $products)
    {
        $this->product = $product;

        $this->products = $products;
    }

    public function updatedQuantity()
    {
        //  dd($this->quantity);
        $this->emit('qteAdded', $this->quantity);
    }
    /*public function updatedSelectedcolors()
    {
        dd($this->selectedcolors);
    }*/
    public function addColor($color)
    {
        array_push($this->selectedcolors, $color);

        $this->emit('logColor', $this->selectedcolors);
    }

    public function hydrate()
    {
        
        
    }
}
