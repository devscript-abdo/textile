<?php

namespace App\Repository\Comment;

use App\Models\Comment;

use Illuminate\Cache\CacheManager;

class CommentRepositoryCache  implements CommentInterface
{

    protected $model;

    protected $cache;

    const TTL = 1440; // TTL(Time To Live) 1440 = 1day

    public function __construct(Comment $model, CacheManager $cache)
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
        return $this->cache->remember('comments_cache', self::TTL, function () {
            return $this->model->all();
        });
    }


    public function activeItems()
    {
        return $this->cache->remember('comments_cache', self::TTL, function () {
            return $this->model->active();
        });
    }

    public function createComment($attributes)
    {
        return $this->model->create($attributes);
    }
}
