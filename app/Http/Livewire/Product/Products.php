<?php

namespace App\Http\Livewire\Product;

use App\Repository\Product\ProductInterface;
use Livewire\Component;

class Products extends Component
{
    public $products;
    public $category = [];
    public $loading = false;
    protected $listeners = ['filterCategory', 'reRender' => 'mount'];

    public function mount(ProductInterface $productsInterface)
    {
        if ($this->category === []) {
            $this->products = $productsInterface->active();
        }
    }
    public function render()
    {
        return view('livewire.product.products');
    }

    public function updated()
    {
        $this->loading = true;
    }

    public function filterCategory(ProductInterface $productsInterface)
    {

        if (isset($this->category) && is_array(array_filter($this->category))) {

            $this->products = $productsInterface->model()
            ->whereIn('category_id', array_filter($this->category))
            ->orWhereIn('category_parent', array_filter($this->category))
            ->get();
        } else {
            $this->products = $productsInterface->active();
        }
    }
}
