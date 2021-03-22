<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use App\Traits\Language;
class Page extends Model
{
    use HasFactory, Translatable, Language;

    protected $translatable = ['title', 'excerpt', 'body', 'meta_description','meta_keywords'];

    
    public function getPhotoAttribute()
    {
        $image  = Voyager::image($this->image);
        return $image;
    }
}
