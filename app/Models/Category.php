<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Category as Categories;
use TCG\Voyager\Traits\Translatable;
use App\Traits\Language;

class Category extends Categories
{
    use HasFactory, Language, Translatable;

    protected $translatable = ['name', 'description'];

    public function products()
    {

        return $this->hasMany('App\Models\Product');
    }

    public function childrens()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parents()
    {
        return $this->hasMany(self::class, 'id', 'parent_id');
    }

    public function getUrlAttribute()
    {
        return route('categories.single', $this->slug);
    }

    public function getPhotoAttribute()
    {
        $image  = Voyager::image($this->image);
        return $image;
    }

    public function scopeRandoms($query)
    {
        // return $query->with('products')->inRandomOrder()->get();
        return $query->with(['products' => fn ($q) => $q->where('inHome', true)
            ->with(['colors'])
            ->inRandomOrder()
            ->limit(3)])
            ->has('products')
            ->inRandomOrder()
            ->first();
    }
}
