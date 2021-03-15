<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    { 
        $sluger = json_encode($post->slug);
        cache()->pull('posts_cache');
        cache()->pull("post_cache_{$sluger}");
        cache()->pull('posts_cache_paginated');
        cache()->pull('posts_cache_active');
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        $sluger = json_encode($post->slug);
        cache()->pull('posts_cache');
        cache()->pull("post_cache_{$sluger}");
        cache()->pull('posts_cache_paginated');
        cache()->pull('posts_cache_active');
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        $sluger = json_encode($post->slug);
        cache()->pull('posts_cache');
        cache()->pull("post_cache_{$sluger}");
        cache()->pull('posts_cache_paginated');
        cache()->pull('posts_cache_active');
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        $sluger = json_encode($post->slug);
        cache()->pull('posts_cache');
        cache()->pull("post_cache_{$sluger}");
        cache()->pull('posts_cache_paginated');
        cache()->pull('posts_cache_active');
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        $sluger = json_encode($post->slug);
        cache()->pull('posts_cache');
        cache()->pull("post_cache_{$sluger}");
        cache()->pull('posts_cache_paginated');
        cache()->pull('posts_cache_active');
    }
}
