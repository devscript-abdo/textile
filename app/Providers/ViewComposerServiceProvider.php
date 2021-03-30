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
            'partner' => app(PageInterface::class)->getPage('devenir-partenaire'),
            'magazine' => app(PageInterface::class)->getPage('nos-magazines'),
            'politique' => app(PageInterface::class)->getPage('politique-de-confidentialite'),
            'termes' => app(PageInterface::class)->getPage('termes-et-conditions'),
            'faq' => app(PageInterface::class)->getPage('faq'),


        ];
        $viewsPages = [
            'textile.pages.*',
            'textile.layouts.sections.Footer'
        ];

        $viewsCategories = [
            'textile.layouts.*',
            'textile.pages.categories.*'
        ];

        $viewsCart = [
            'textile.layouts.sections.cart.*',
            //'textile.pages.cart.*'
        ];

        View::composer($viewsPages, function ($view) use ($pages) {
            $view->with('pages', $pages);
        });

        $categories = app(CategoryInterface::class)->getWithChildrens();
        $products = app(ProductInterface::class)->showInNav();

        View::composer($viewsCategories, function ($view) use ($categories, $products) {
            $view->with('categories', $categories);
            $view->with('productsNav', $products);
        });

        $productsCart = \ShoppingCart::all();
        View::composer($viewsCart, function ($view) use ($productsCart) {
            $view->with('productsCart', $productsCart);
        });

        $footerPages = app(PageInterface::class)->getFooters();

        View::composer('textile.layouts.sections.Footer', function ($view) use ($footerPages) {
            $view->with('footerPages', $footerPages);
        });
    }
}
