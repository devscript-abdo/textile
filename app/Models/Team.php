<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Team extends Model
{
    use HasFactory;

    public function scopeActive($query)
    {
        return $query->whereActive(true)->get();
    }

    public function getFullPhotoAttribute()
    {
        return Voyager::image($this->photo);
    }
}
