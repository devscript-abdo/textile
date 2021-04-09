<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use App\Traits\Language;
class Testimonial extends Model
{
    use HasFactory, Translatable, Language;

    protected $translatable = ['post', 'content'];

    public function scopeActive($query)
    {
        return $query->where('active', true)->get();
    }

    public function getDefaultAvatarAttribute()
    {
        return Voyager::image($this->avatar !== null ? $this->avatar : setting('testimonials.avatar'));
    }
}
