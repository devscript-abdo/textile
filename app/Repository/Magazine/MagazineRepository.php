<?php

namespace App\Repository\Magazine;

use App\Models\Magazine;

class MagazineRepository  implements MagazineInterface
{

    protected $model;

    public function __construct(Magazine $model)
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
