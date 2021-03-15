<?php

namespace App\Repository\Service;

use App\Models\Service;

class ServiceRepository  implements ServiceInterface
{

    protected $model;

    public function __construct(Service $model)
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
    public function homeItems()
    {
        return $this->model->home();
    }
}
