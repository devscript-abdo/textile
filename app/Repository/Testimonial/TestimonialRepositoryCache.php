<?php

namespace App\Repository\Testimonial;

use App\Models\Testimonial;

use Illuminate\Cache\CacheManager;

class TestimonialRepositoryCache  implements TestimonialInterface
{

    protected $model;

    protected $cache;

    const TTL = 1440; // TTL(Time To Live) 1440 = 1day

    public function __construct(Testimonial $model, CacheManager $cache)
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
        return $this->cache->remember('testimonials_cache', self::TTL, function () {
            return $this->model->all();
        });
    }

    public function activeItems()
    {
        return $this->cache->remember('testimonials_cache_active', self::TTL, function () {
            return $this->model->active();
        });
    }
}
