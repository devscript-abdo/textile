<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;

use App\Traits\Language;

class Setting extends Model
{
    use HasFactory, Translatable, Language;

    protected $translatable = ['value'];
}
