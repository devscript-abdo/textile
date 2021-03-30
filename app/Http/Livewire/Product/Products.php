<?php

namespace App\Http\Livewire\Product;

use App\Repository\Category\CategoryInterface;
use App\Repository\Color\ColorInterface;
use App\Repository\Product\ProductInterface;
use Livewire\Component;

class Products extends Component
{
    public $products;

    public $category = [];

    public $loading = false;

    public $type;

    public $colors;

    protected $listeners = ['filterCategory', 'filterType', 'filterColor', 'reRender' => 'mount'];

    public function mount(ProductInterface $productsInterface, ColorInterface $colorInterface, CategoryInterface $categoryInterface)
    {
        $url = request()->route();

        if ($url->getName() === 'categories.single') {
            $categorie =  $categoryInterface->getCategory($url->parameter('category'))->id;
            //dd( $categorie);
            $this->products = $productsInterface->model()
                ->whereCategoryId($categorie)
                ->orWhere('category_parent',$categorie)
                //->firstOrFail()
                ->with(['category'])
                ->get();
        } else {
            $this->products = $productsInterface->activeItems();
        }

        $this->colors =   $colorInterface->active();
    }
    public function render()
    {
        return view('livewire.product.products');
    }

    public function updated()
    {
        // dd($this->colors);
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

    public function filterType(ProductInterface $productsInterface)
    {
        if (isset($this->type)) {

            $this->products = $productsInterface->model()
                ->where('type', $this->type)
                ->get();
        } else {
            $this->products = $productsInterface->active();
        }
    }

    public function filterColor(ProductInterface $productsInterface, $id)
    {

        $this->products = $productsInterface->model()
            ->whereHas('colors', function ($query) use ($id) {
                $query->where('color_id', $id);
            })
            ->get();
    }
}
