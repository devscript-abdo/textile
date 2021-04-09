<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use App\Traits\Language;
class Magazine extends Model
{
    use HasFactory, Translatable, Language;

    protected $translatable = ['name', 'address','hours'];

    public function scopeActive($query)
    {
        return $query->whereActive(true)
        ->with(['translations'])
        ->get();
    }

    public function getPhotoAttribute()
    {
        $image  = Voyager::image($this->image);
        return $image;
    }
}
