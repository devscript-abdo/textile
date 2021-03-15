<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Page extends Model
{
    use HasFactory;

    public function getPhotoAttribute()
    {
        $image  = Voyager::image($this->image);
        return $image;
    }
}
