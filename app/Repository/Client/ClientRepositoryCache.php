<?php

namespace App\Repository\Client;

use App\Models\Client;

use Illuminate\Cache\CacheManager;

class ClientRepositoryCache  implements ClientInterface
{

    protected $model;

    protected $cache;

    const TTL = 1440; // TTL(Time To Live) 1440 = 1day

    public function __construct(Client $model, CacheManager $cache)
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
        return $this->cache->remember('clients_cache', self::TTL, function () {
            return $this->model->all();
        });
    }

    public function activeItems()
    {
        return $this->cache->remember('clients_cache', self::TTL, function () {
            return $this->model->active();
        });
    }
}
