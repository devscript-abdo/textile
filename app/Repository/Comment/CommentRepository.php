<?php

namespace App\Repository\Comment;

use App\Models\Comment;

class CommentRepository  implements CommentInterface
{

    protected $model;

    public function __construct(Comment $model)
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

    public function createComment($attributes)
    {
        return $this->model->create($attributes);
    }
}
