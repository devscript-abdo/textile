<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Traits\Language;
use TCG\Voyager\Traits\Translatable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Service extends Model  implements Searchable
{


    use HasFactory, Translatable, Language;

    protected $translatable = ['title', 'excerpt', 'description', 'seo_title', 'seo_description', 'seo_keywords'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'service_category', 'service_id', 'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('active', true)
            // ->with('translations')
            ->get();
    }

    public function scopeHome($query)
    {
        return $query->where('active', true)
            //->with('translations')
            ->inRandomOrder()
            ->limit(3)
            ->get();
    }

    /*public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }*/

    /******Search  */

    public function getSearchResult(): SearchResult
    {
       
        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            
        );
    }
}
