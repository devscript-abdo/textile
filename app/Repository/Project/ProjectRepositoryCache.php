<?php

namespace App\Repository\Project;

use App\Models\Project;

use Illuminate\Cache\CacheManager;

class ProjectRepositoryCache  implements ProjectInterface
{

    protected $model;

    protected $cache;

    const TTL = 1440; // TTL(Time To Live) 1440 = 1day

    public function __construct(Project $model, CacheManager $cache)
    {
        $this->cache = $cache;

        $this->model = $model;
    }

   /* public function __call($name, $args)
    {
        $this->model->{$name};
    }*/

    public function query()
    {
        return $this->model->query();
    }

    public function all()
    {
        return $this->cache->remember('projects_cache', self::TTL, function () {
            return $this->model->all();
        });
    }

    public function activeItems()
    {
        return $this->cache->remember('projects_cache_active', self::TTL, function () {
            return $this->model->active();
        });
    }

    public function homeItems()
    {
        return $this->cache->remember('projects_cache_home', self::TTL, function () {
            return $this->model->home();
        });
    }

    public function getProject($slug)
    {
        $sluger = json_encode($slug);

        return $this->cache->remember("project_cache_{$sluger}", self::TTL, function () use ($slug) {
            return $this->model->whereSlug($slug)->whereActive(true)
                ->with(['tags', 'category'])
                ->firstOrFail();
        });
    }

    public function getSolutions()
    {

        return $this->cache->remember('projects_solution_cache', self::TTL, function () {
            return $this->model->solutions();
        });
    }
}
