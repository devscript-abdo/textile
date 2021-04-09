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

    public function activeItems()
    {
        return $this->model->active();
    }

    public function getCategory($slug)
    {
        return $this->model->whereSlug($slug)
            ->with(['products'])
            ->firstOrFail();
    }
    public function getWithChildrens()
    {
        return $this->query()->with('childrens')->select(['id', 'parent_id', 'slug', 'name'])->get();
    }
    public function randomsHome()
    {
        return $this->model->randoms();
    }
}
