<?php

namespace App\Repository\Slider;

use App\Models\Slider;

use App\Repository\Slider\SliderInterface;

class SliderRepository  implements SliderInterface
{

    protected $model;

    public function __construct(Slider $model)
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
