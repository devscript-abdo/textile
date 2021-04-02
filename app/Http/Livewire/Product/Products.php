<?php

namespace App\Http\Livewire\Product;

use App\Repository\Category\CategoryInterface;
use App\Repository\Color\ColorInterface;
use App\Repository\Product\ProductInterface;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $products;

    public $category = [];

    public $categoriee;

    public $loading = false;

    public $type;

    public $colors;

    protected $listeners = ['filterCategory', 'filterType', 'filterColor', 'reRender' => 'mount'];

    protected $paginationTheme = 'bootstrap';

    public function mount(ProductInterface $productsInterface, ColorInterface $colorInterface, CategoryInterface $categoryInterface)
    {
        $url = request()->route();

        if ($url->getName() === 'categories.single') {
            $categorie =  $categoryInterface->getCategory($url->parameter('category'));
            $this->categoriee = $categorie->field('name');
            $this->products = $productsInterface->model()
                ->whereCategoryId($categorie->id)
                ->orWhere('category_parent', $categorie->id)
                //->firstOrFail()
                ->with(['category'])
                //->paginate(10);
                ->get();
            // dd('Here 1');
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
                //->paginate(10);
                ->get();
        } else {
            $this->products = $productsInterface->activeItems();
        }
    }

    public function filterType(ProductInterface $productsInterface)
    {
        if (isset($this->type)) {

            $this->products = $productsInterface->model()
                ->where('type', $this->type)
                //->paginate(10);
                ->get();
        } else {
            $this->products = $productsInterface->activeItems();
        }
    }

    public function filterColor(ProductInterface $productsInterface, $id)
    {

        $this->products = $productsInterface->model()
            ->whereHas('colors', function ($query) use ($id) {
                $query->where('color_id', $id);
            })
            //->paginate(10);
            ->get();
    }
}
