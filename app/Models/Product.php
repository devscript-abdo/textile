<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function scopeShowInNavbar($query)
    {
        return $query->where('show_in_nav', true)
            ->inRandomOrder()
            ->limit(8)
            ->get();
    }

    public function scopeActive($query)
    {
        return $query->where('active', true)
            ->with(['category'])
            ->get();
    }

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
