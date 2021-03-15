<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Client extends Model
{
    use HasFactory;

    public function scopeActive($query)
    {
        return $query->where('active', true)->get();
    }
    public function getDefaultLogoAttribute()
    {
        return Voyager::image($this->logo);
    }
}
