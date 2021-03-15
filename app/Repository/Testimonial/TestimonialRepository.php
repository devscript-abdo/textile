<?php

namespace App\Repository\Testimonial;

use App\Models\Testimonial;

class TestimonialRepository  implements TestimonialInterface
{

    protected $model;

    public function __construct(Testimonial $model)
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
