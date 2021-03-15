<?php

namespace App\Repository\Project;

use App\Models\Project;

class ProjectRepository  implements ProjectInterface
{

    protected $model;

    public function __construct(Project $model)
    {

        $this->model = $model;
    }

   /* public function __call($name, $args)
    {
        return $this->model->$name;
    }*/

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

    public function getProject($slug)
    {
        return $this->model->whereSlug($slug)->whereActive(true)
            ->with(['tags', 'category'])
            ->firstOrFail();
    }

    public function getSolutions()
    {
        return $this->model->solutions();
    }
}
