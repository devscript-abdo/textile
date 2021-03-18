<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function scopeShowInNavbar($query){
        return $query->where('show_in_nav', true)
            ->inRandomOrder()
            ->limit(8)
            ->get();
    }
}
