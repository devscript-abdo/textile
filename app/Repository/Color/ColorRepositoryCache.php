<?php

namespace App\Repository\Color;

use App\Models\Color;

use Illuminate\Cache\CacheManager;

class ColorRepositoryCache  implements ColorInterface
{

    protected $model;

    protected $cache;

    public function __construct(Color $model, CacheManager $cache)
    {
        $this->cache = $cache;

        $this->model = $model;
    }

    public function query()
    {
        return $this->model->query();
    }

    public function all()
    {
        return $this->cache->remember('colors_cache', $this->timeToLive(), function () {
            return $this->model->all();
        });
    }


    public function active()
    {
        return $this->cache->remember('colors_cache_active', $this->timeToLive(), function () {
            return $this->model->active();
        });
    }

    private function timeToLive()
    {

        return \Carbon\Carbon::now()->addDays(30);
    }
}
