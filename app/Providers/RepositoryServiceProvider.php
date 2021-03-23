<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repository\Cart\CartInterface;
use App\Repository\Cart\CartRepository;

class RepositoryServiceProvider extends ServiceProvider
{

   /* public $singletons = [

        CartInterface::class => CartRepository::class
    ];*/
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(
            'App\Repository\Cart\CartInterface',
            'App\Repository\Cart\CartRepository'
        );

        $this->app->bind(
            'App\Repository\Category\CategoryInterface',
            'App\Repository\Category\CategoryRepository'
        );
        $this->app->bind(
            'App\Repository\Product\ProductInterface',
            'App\Repository\Product\ProductRepository'
        );

        $this->app->bind(
            'App\Repository\Color\ColorInterface',
            'App\Repository\Color\ColorRepositoryCache'
        );

        $this->app->bind(
            'App\Repository\Slider\SliderInterface',
            'App\Repository\Slider\SliderRepository'
        );

        $this->app->bind(
            'App\Repository\Magazine\MagazineInterface',
            'App\Repository\Magazine\MagazineRepository'
        );

        $this->app->bind(
            'App\Repository\Page\PageInterface',
            'App\Repository\Page\PageRepository'
        );

        $this->app->bind(
            'App\Repository\Post\PostInterface',
            'App\Repository\Post\PostRepository'
        );

        $this->app->bind(
            'App\Repository\Service\ServiceInterface',
            'App\Repository\Service\ServiceRepository'
        );

        $this->app->bind(
            'App\Repository\Project\ProjectInterface',
            'App\Repository\Project\ProjectRepository'
        );

        $this->app->bind(
            'App\Repository\Client\ClientInterface',
            'App\Repository\Client\ClientRepository'
        );

        $this->app->bind(
            'App\Repository\Testimonial\TestimonialInterface',
            'App\Repository\Testimonial\TestimonialRepository'
        );

        $this->app->bind(
            'App\Repository\Team\TeamInterface',
            'App\Repository\Team\TeamRepository'
        );

        $this->app->bind(
            'App\Repository\Tag\TagInterface',
            'App\Repository\Tag\TagRepository'
        );

        $this->app->bind(
            'App\Repository\Comment\CommentInterface',
            'App\Repository\Comment\CommentRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
