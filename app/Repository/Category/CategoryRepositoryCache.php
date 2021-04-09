<?php

namespace App\Repository\Category;

use App\Models\Category;

use Illuminate\Cache\CacheManager;

class CategoryRepositoryCache  implements CategoryInterface
{

    protected $model;

    protected $cache;

    public function __construct(Category $model, CacheManager $cache)
    {
        $this->cache = $cache;

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
        return $this->cache->remember('categories_cache', $this->timeToLive(), function () {
            return $this->model->all();
        });
    }

    public function activeItems()
    {
        return $this->cache->remember('categories_cache_active', $this->timeToLive(), function () {
            return $this->model->active();
        });
    }


    public function getCategory($slug)
    {
        $sluger = json_encode($slug);

        return $this->cache->remember("categorie_cache_{$sluger}", $this->timeToLive(), function () use ($slug) {
            return $this->model->whereSlug($slug)
                ->with(['products'])
                ->firstOrFail();
        });
    }

    public function getWithChildrens()
    {
        return $this->cache->remember('categories_cache_childrens', $this->timeToLive(), function () {
            return $this->query()->with('childrens')->select(['id', 'parent_id', 'slug', 'name'])->get();
        });
    }

    public function randomsHome()
    {
        return $this->model->randoms();
    }
    private function timeToLive()
    {

        return \Carbon\Carbon::now()->addDays(30);
    }
}
