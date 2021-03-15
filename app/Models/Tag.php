<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Tag extends Model
{
    use HasFactory;

    public function projects()
    {
        return $this->belongsToMany('App\Models\Project', 'project_tag', 'tag_id', 'project_id');
    }

    public function scopeActive($query)
    {
        return $query->where('active', true)->get();
     
    }

    public function getDefaultLogoAttribute()
    {
        return Voyager::image($this->logo ? $this->logo : setting('tags.default_logo'));
    }

    /*public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }*/
}
