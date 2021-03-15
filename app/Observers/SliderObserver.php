<?php

namespace App\Observers;

use App\Models\Slider;

class SliderObserver
{
    /**
     * Handle the Slider "created" event.
     *
     * @param  \App\Models\Slider  $slider
     * @return void
     */
    public function created(Slider $slider)
    {
        cache()->pull('sliders_cache');
        cache()->pull('sliders_cache_active');
    }

    /**
     * Handle the Slider "updated" event.
     *
     * @param  \App\Models\Slider  $slider
     * @return void
     */
    public function updated(Slider $slider)
    {
        cache()->pull('sliders_cache');
        cache()->pull('sliders_cache_active');
    }

    /**
     * Handle the Slider "deleted" event.
     *
     * @param  \App\Models\Slider  $slider
     * @return void
     */
    public function deleted(Slider $slider)
    {
        cache()->pull('sliders_cache');
        cache()->pull('sliders_cache_active');
    }

    /**
     * Handle the Slider "restored" event.
     *
     * @param  \App\Models\Slider  $slider
     * @return void
     */
    public function restored(Slider $slider)
    {
        //
    }

    /**
     * Handle the Slider "force deleted" event.
     *
     * @param  \App\Models\Slider  $slider
     * @return void
     */
    public function forceDeleted(Slider $slider)
    {
        //
    }
}
