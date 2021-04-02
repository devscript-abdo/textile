<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Color;
use App\Models\Page;
use App\Models\Post;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Subscription;
use App\Models\Team;
use App\Models\Testimonial;
use App\Observers\CategoryObserver;
use App\Observers\ClientObserver;
use App\Observers\ColorObserver;
use App\Observers\PageObserver;
use App\Observers\PostObserver;
use App\Observers\ProductObserver;
use App\Observers\SliderObserver;
use App\Observers\SubscriptionObserver;
use App\Observers\TeamObserver;
use App\Observers\TestimonialObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        Post::observe(PostObserver::class);
        Client::observe(ClientObserver::class);
        Team::observe(TeamObserver::class);
        Slider::observe(SliderObserver::class);
        Category::observe(CategoryObserver::class);
        Testimonial::observe(TestimonialObserver::class);
        Page::observe(PageObserver::class);
        Subscription::observe(SubscriptionObserver::class);
        Product::observe(ProductObserver::class);
        Color::observe(ColorObserver::class);
    }
}
