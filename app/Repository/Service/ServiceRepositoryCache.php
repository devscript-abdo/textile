<?php

namespace App\Repository\Service;

use App\Models\Service;

use Illuminate\Cache\CacheManager;

class ServiceRepositoryCache  implements ServiceInterface
{

    protected $model;

    protected $cache;

    const TTL = 1440; // TTL(Time To Live) 1440 = 1day

    public function __construct(Service $model, CacheManager $cache)
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
        return $this->cache->remember('services_cache', self::TTL, function () {
            return $this->model->all();
        });
    }

    public function activeItems()
    {
        return $this->cache->remember('services_cache_active', self::TTL, function () {
            return $this->model->active();
        });
    }

    public function homeItems()
    {
        return $this->cache->remember('services_cache_home', self::TTL, function () {
            return $this->model->home();
        });
    }
}
