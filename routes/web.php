<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
/*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {

            Route::get('/', [SiteController::class, 'index'])->name('home');

            Route::get('/produits', [ProductController::class, 'index'])->name('products');
            Route::get('/produits/{product}', [ProductController::class, 'show'])->name('products.single');
            Route::post('/produits/{product}', [ProductController::class, 'addToCart'])->name('products.single');

            Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
            Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.single');

            Route::get('/a-propos-de-nous', [SiteController::class, 'about'])->name('about');
            Route::get('/devenir-partenaire', [SiteController::class, 'partner'])->name('partner');

            Route::get('/nos-magazines', [SiteController::class, 'magazines'])->name('magazines');

            Route::get('/nos-services', [SiteController::class, 'services'])->name('services');

            Route::get('/nos-projets', [SiteController::class, 'portfolio'])->name('portfolio');
            Route::get('/nos-projets/{project}', [SiteController::class, 'singlePortfolio'])->name('portfolio.single');

            Route::get('/nos-solutions', [SiteController::class, 'solutions'])->name('solutions');

            Route::get('/blog', [SiteController::class, 'blog'])->name('blog');

            Route::get('/blog/{post}', [SiteController::class, 'singleBlog'])
                ->middleware(ProtectAgainstSpam::class)
                ->name('blog.single');

            Route::get('/tags', [SiteController::class, 'tags'])->name('tags');
            Route::get('/tags/{tag}', [SiteController::class, 'singleTag'])->name('tags.single');

            Route::get('/contactez-nous', [ContactController::class, 'index'])->name('contact');

            Route::get('/que-cherchez-vous', [SearchController::class, 'index'])->name('search');

            Route::get('/cart', [ShoppingController::class, 'cart'])->name('cart');
            Route::put('/cart', [ShoppingController::class, 'cartUpdate'])->name('cart');
            Route::delete('/cart', [ShoppingController::class, 'cartDelete'])->name('cartDelete');
            Route::post('/cart', [ShoppingController::class, 'cartSend'])->name('cartSend');
        });
    }
);

Route::feeds();

Route::group(['prefix' => 'theadmin'], function () {
    Voyager::routes();

    Route::group(['prefix' => 'dev'], function () {

        Route::get('/sitemap', function () {
            Artisan::call('sitemap:generate');
        });

        Route::get('/optimize', function () {
            Artisan::call('optimize');
        });

        Route::get('/cache-config', function () {
            Artisan::call('config:cache');
        });
        Route::get('/cache-route', function () {
            Artisan::call('route:cache');
        });
        Route::get('/cache-view', function () {
            Artisan::call('view:cache');
        });

        Route::get('/clear-config', function () {
            Artisan::call('config:clear');
        });
        Route::get('/clear-route', function () {
            Artisan::call('route:clear');
        });
        Route::get('/clear-view', function () {
            Artisan::call('view:clear');
        });
    });
});
