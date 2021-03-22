<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Translatable;
use App\Traits\Language;

class Slider extends Model
{
    use HasFactory, Translatable, Language;

    protected $translatable = ['title', 'description', 'button_text', 'seo'];

    protected $with = ['translations'];
    
    public function scopeActive($query)
    {
        return $query->whereActive(true)->get();
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
