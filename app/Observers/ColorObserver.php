<?php

namespace App\Observers;

use App\Models\Color;

class ColorObserver
{
    /**
     * Handle the Color "created" event.
     *
     * @param  \App\Models\Color  $color
     * @return void
     */
    public function created(Color $color)
    {
        cache()->pull('colors_cache');
        cache()->pull('colors_cache_active');
    }

    /**
     * Handle the Color "updated" event.
     *
     * @param  \App\Models\Color  $color
     * @return void
     */
    public function updated(Color $color)
    {
        cache()->pull('colors_cache');
        cache()->pull('colors_cache_active');
    }

    /**
     * Handle the Color "deleted" event.
     *
     * @param  \App\Models\Color  $color
     * @return void
     */
    public function deleted(Color $color)
    {
        cache()->pull('colors_cache');
        cache()->pull('colors_cache_active');
    }

    /**
     * Handle the Color "restored" event.
     *
     * @param  \App\Models\Color  $color
     * @return void
     */
    public function restored(Color $color)
    {
        cache()->pull('colors_cache');
        cache()->pull('colors_cache_active');
    }

    /**
     * Handle the Color "force deleted" event.
     *
     * @param  \App\Models\Color  $color
     * @return void
     */
    public function forceDeleted(Color $color)
    {
        cache()->pull('colors_cache');
        cache()->pull('colors_cache_active');
    }
}
