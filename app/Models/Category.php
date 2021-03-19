<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use TCG\Voyager\Models\Category as Categories;

class Category extends Categories
{
    use HasFactory;


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
}
