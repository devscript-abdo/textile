<?php

namespace App\Repository\Tag;

use App\Models\Tag;

class TagRepository  implements TagInterface
{

    protected $model;

    public function __construct(Tag $model)
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

    public function getTag($slug, $with = [])
    {
        if (isset($with) && is_array($with)) {
            
            return $this->model->whereSlug($slug)
                ->whereActive(true)
                ->with($with)
                ->firstOrFail();
        }
        return $this->model->whereSlug($slug)->whereActive(true)->first();
    }
}
