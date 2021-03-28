<?php

namespace App\Repository\Product;

use App\Models\Product;

use Illuminate\Cache\CacheManager;

class ProductRepositoryCache  implements ProductInterface
{

    protected $model;

    protected $cache;

    public function __construct(Product $model, CacheManager $cache)
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
        return $this->cache->remember('products_cache', $this->timeToLive(), function () {
            return $this->model->all();
        });
    }

    public function showInNav()
    {
        return $this->cache->remember('products_cache_navbar', $this->timeToLive(), function () {
            return $this->model->showInNavbar();
        });
    }

    public function getProduct($slug)
    {
        $sluger = json_encode($slug);

        return $this->cache->remember("product_cache_{$sluger}", $this->timeToLive(), function () use ($slug) {
            return $this->model->whereSlug($slug)->whereActive(true)
                ->with(['category', 'colors'])
                ->firstOrFail();
        });
    }

    public function activeItems()
    {
        return $this->cache->remember('products_cache_active', $this->timeToLive(), function () {
            return $this->model->active();
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
