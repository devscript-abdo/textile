<?php

namespace App\Http\Livewire\Cart;

use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class Cart extends Component
{

    public $visible = false;

    public $cart = [];

    public $productsCart = [];

    public $total = 0.00;


    protected $listeners = [
        'cartUpdated' => 'hydrate',
        'toggleCart' => 'toggle'
    ];

    public function render()
    {
        return view('livewire.cart.cart');
    }

    public function toggle()
    {
        $this->visible = !$this->visible;
    }

    public function hydrate()
    {

        $this->cart = \Mailletex::myCart()->all();
        $this->productsCart = tap(
            $this->products(),
            fn (Collection $products) => $this->total = \Mailletex::int_to_decimal($products->sum('total'))
        )->toArray();
    }

    private function products()
    {
        if (empty($this->cart)) {
            return new Collection();
        }
        return Product::whereIn('id', array_keys($this->cart))
            ->get()
            ->map(function (Product $product) {
                return (object)[
                    'id' => $product->id,
                    'name' => $product->field('name'),
                    'url' => $product->slug,
                    'price' => $product->price ?? 0,
                    //'formated_price' => $product->formated_price,
                    'qty' => $qty = $this->cart[$product->id],
                    'total' => $product->price * $qty,
                    /***************************** */
                    'image' => $product->image,
                ];
            });
    }

    public function remove(int $id)
    {
        \Mailletex::myCart()->remove($id);
        $this->update();
    }

    public function update()
    {
        $this->emit('cartUpdated');
    }

    public function increase()
    {
    }
}
