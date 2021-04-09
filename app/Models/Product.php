<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use App\Traits\Language;

use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory, Translatable, Language;

    protected $translatable = ['name', 'excerpt', 'description'];

    protected $casts = [
        //  'colors' => 'object',
    ];

    protected $with = ['translations'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function colors()
    {
        return $this->belongsToMany('App\Models\Color', 'color_product', 'product_id', 'color_id');
    }

    public function reviews()
    {

        return $this->hasMany('App\Models\Review')->where('active', true);
    }

    public function setCategoryIdAttribute($value)
    {
        // dd($value);
        $this->attributes['category_id'] = $value;

        $category = Category::find($value);

        $this->attributes['category_parent'] = $category->parent_id !== null ?  $category->parent_id : null;
    }

    /*public function setColorsAttribute($value)
    {

        $data = json_decode($value, true);

        $this->attributes['colors'] = $data;
    }*/
    public function scopeShowInNavbar($query)
    {
        return $query->where('show_in_nav', true)
            //->inRandomOrder()
            ->limit(8)
            ->get();
    }

    public function scopeActive($query)
    {

        return $query->where('active', true)
            ->with(['category', 'translations'])
            //->paginate(10);
            ->get();
    }

    public function scopeRandoms($query)
    {
        // return $query->with('colors')->inRandomOrder()->get();
        return $query
            ->with(['translations'])
            ->inRandomOrder()
            ->get();
    }

    /*******Filters */
    public function scopeFiltersCategory(Builder $query, $category)
    {
        $categoryy = Category::whereSlug($category)->firstOrFail()->id;

        return $query
            ->where('category_id', $categoryy)
            ->orWhere('category_parent', $categoryy);
    }

    /******end Filters */

    public function getImageAttribute()
    {
        $image  = Voyager::image($this->photo);
        return $image;
    }

    public function getFirstPhotoAttribute()
    {
        $images =  json_decode($this->photos);
        $image = isset($images);
        return Voyager::image($image ? array_shift($images) : setting('portfolio.portfolio_default_image'));
    }

    public function getUrlAttribute()
    {
        return route('products.single', $this->slug);
    }

    public function singlePhoto($value)
    {

        return Voyager::image($value);
    }

    public function getAllPhotosAttribute()
    {
        $images =  json_decode($this->photos);
        return $images;
    }

    public function getCategory($field)
    {
        if ($field === 'slug') {

            return route('categories.single', $this->category->slug);
        }
        return $this->category->{$field};
    }
}
