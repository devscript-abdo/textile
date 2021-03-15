<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Subscription;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Testimonial;
use App\Observers\CategoryObserver;
use App\Observers\ClientObserver;
use App\Observers\CommentObserver;
use App\Observers\PageObserver;
use App\Observers\PostObserver;
use App\Observers\ProjectObserver;
use App\Observers\ServiceObserver;
use App\Observers\SliderObserver;
use App\Observers\SubscriptionObserver;
use App\Observers\TagObserver;
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
        Service::observe(ServiceObserver::class);
        Post::observe(PostObserver::class);
        Project::observe(ProjectObserver::class);
        Client::observe(ClientObserver::class);
        Team::observe(TeamObserver::class);
        Tag::observe(TagObserver::class);
        Slider::observe(SliderObserver::class);
        Category::observe(CategoryObserver::class);
        Comment::observe(CommentObserver::class);
        Testimonial::observe(TestimonialObserver::class);
        Page::observe(PageObserver::class);
        Subscription::observe(SubscriptionObserver::class);
    }
}
