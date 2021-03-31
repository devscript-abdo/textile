<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use App\Traits\Language;
class Color extends Model
{
    use HasFactory, Language, Translatable;

    protected $translatable = ['name'];

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'color_product', 'color_id', 'product_id');
    }

    public function scopeActive($query)
    {
        return $query->where('active', true)
            ->get();
    }


}
