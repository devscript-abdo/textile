<?php

namespace App\Repository\Magazine;

use App\Models\Magazine;

use Illuminate\Cache\CacheManager;

class MagazineRepositoryCache  implements MagazineInterface
{

    protected $model;

    protected $cache;

    public function __construct(Magazine $model, CacheManager $cache)
    {
        $this->model = $model;

        $this->cache = $cache;
    }


    public function query()
    {
        return $this->model->query();
    }

    public function all()
    {
        return $this->cache->remember('magazines_cache', $this->timeToLive(), function () {
            return $this->model->all();
        });
    }

    public function activeItems()
    {
        return $this->cache->remember('magazines_cache_active', $this->timeToLive(), function () {
            return $this->model->active();
        });
    }


    private function timeToLive()
    {

        return \Carbon\Carbon::now()->addDays(30);
    }
}
