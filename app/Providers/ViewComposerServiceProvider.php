<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Repository\Page\PageInterface;

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
        View::composer($viewsPages, function ($view) use ($pages) {
            $view->with('pages', $pages);
        });
    }
}
