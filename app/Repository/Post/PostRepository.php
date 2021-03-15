<?php

namespace App\Repository\Post;

use App\Models\Post;

class PostRepository  implements PostInterface
{

    protected $model;

    public function __construct(Post $model)
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

    public function getPost($slug, $with = [])
    {
        if (isset($with) && is_array($with)) {
            return $this->model->whereSlug($slug)->whereStatus('PUBLISHED')
                ->with($with)
                ->firstOrFail();
        }
        return $this->model->whereSlug($slug)->whereStatus('PUBLISHED')->first();
    }

    public function activeItems()
    {
        return $this->model->active();
    }

    public function activePaginated()
    {
        return $this->model->getPaginated();
    }
}
