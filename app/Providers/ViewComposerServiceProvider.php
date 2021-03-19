<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Repository\Category\CategoryInterface;
use App\Repository\Page\PageInterface;
use App\Repository\Product\ProductInterface;

class ViewComposerServiceProvider extends ServiceProvider
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
        $pages = [
            // 'about' => Page::whereSlug('a-propos-de-nous')->whereStatus('active')->first(),
            'about' => app(PageInterface::class)->getPage('a-propos-de-nous'),
            'service' => app(PageInterface::class)->getPage('nos-services'),
        ];
        $viewsPages = [
            'dark.pages.home.*',
            'dark.pages.about.*',
            'dark.pages.services.*'
        ];

        $viewsCategories = [
            'textile.layouts.*',
            'textile.pages.categories.*'
        ];

        View::composer($viewsPages, function ($view) use ($pages) {
            $view->with('pages', $pages);
        });

        $categories = app(CategoryInterface::class)->query()->with('childrens')->select(['id', 'parent_id', 'slug', 'name'])->get();
        $products = app(ProductInterface::class)->showInNav();

        View::composer($viewsCategories, function ($view) use ($categories, $products) {
            $view->with('categories', $categories);
            $view->with('productsNav', $products);
        });
    }
}
