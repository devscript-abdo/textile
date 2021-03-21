<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        $sluger = json_encode($product->slug);
        cache()->pull('products_cache');
        cache()->pull('products_cache_navbar');
        cache()->pull('products_cache_active');
        cache()->pull("product_cache_{$sluger}");
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        $sluger = json_encode($product->slug);
        cache()->pull('products_cache');
        cache()->pull('products_cache_navbar');
        cache()->pull('products_cache_active');
        cache()->pull("product_cache_{$sluger}");
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        $sluger = json_encode($product->slug);
        cache()->pull('products_cache');
        cache()->pull('products_cache_navbar');
        cache()->pull('products_cache_active');
        cache()->pull("product_cache_{$sluger}");
    }

    /**
     * Handle the Product "restored" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        $sluger = json_encode($product->slug);
        cache()->pull('products_cache');
        cache()->pull('products_cache_navbar');
        cache()->pull('products_cache_active');
        cache()->pull("product_cache_{$sluger}");
    }

    /**
     * Handle the Product "force deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        $sluger = json_encode($product->slug);
        cache()->pull('products_cache');
        cache()->pull('products_cache_navbar');
        cache()->pull('products_cache_active');
        cache()->pull("product_cache_{$sluger}");
    }
}
