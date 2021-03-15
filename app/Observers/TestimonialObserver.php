<?php

namespace App\Observers;

use App\Models\Testimonial;

class TestimonialObserver
{
    /**
     * Handle the Testimonial "created" event.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return void
     */
    public function created(Testimonial $testimonial)
    {
       cache()->pull('testimonials_cache');
       cache()->pull('testimonials_cache_active');

    }

    /**
     * Handle the Testimonial "updated" event.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return void
     */
    public function updated(Testimonial $testimonial)
    {
        cache()->pull('testimonials_cache');
        cache()->pull('testimonials_cache_active');
    }

    /**
     * Handle the Testimonial "deleted" event.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return void
     */
    public function deleted(Testimonial $testimonial)
    {
        cache()->pull('testimonials_cache');
        cache()->pull('testimonials_cache_active');
    }

    /**
     * Handle the Testimonial "restored" event.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return void
     */
    public function restored(Testimonial $testimonial)
    {
        //
    }

    /**
     * Handle the Testimonial "force deleted" event.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return void
     */
    public function forceDeleted(Testimonial $testimonial)
    {
        //
    }
}
