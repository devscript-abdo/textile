<?php

namespace App\Repository\Category;

use App\Models\Category;

class CategoryRepository  implements CategoryInterface
{

    protected $model;

    public function __construct(Category $model)
    {

        $this->model = $model;
    }


    public function query()
    {
        return $this->model->query();
    }

    public function all()
    {
        return $this->model->all();
    }

    public function activeItems()
    {
        return $this->model->active();
    }

}
