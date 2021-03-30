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

    public function model()
    {

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

    public function getProduct($slug, $with = null)
    {
        if (isset($with) && is_array($with)) {
            return $this->model->whereSlug($slug)->whereActive(true)
                ->with($with)
                ->firstOrFail();
        }
        return $this->model->whereSlug($slug)->whereActive(true)
            ->firstOrFail();
    }

    public function activeItems()
    {
        return $this->model->active();
    }
    public function randomsHome()
    {
        return $this->model->randoms();
    }
}
