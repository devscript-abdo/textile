<?php

namespace App\Repository\Product;

use App\Models\Product;

class ProductRepository  implements ProductInterface
{

    protected $model;

    public function __construct(Product $model)
    {

        $this->model = $model;
    }

    public function model(){

        return $this->model;
        
    }
    public function query()
    {
        return $this->model->query();
    }

    public function all()
    {
        return $this->model->all();
    }

    public function showInNav()
    {
        return $this->model->showInNavbar();
    }

    public function getProduct($slug)
    {
        return $this->model->whereSlug($slug)->whereActive(true)
            ->with(['category'])
            ->firstOrFail();
    }

    public function active()
    {
        return $this->model->active();
    }
}
