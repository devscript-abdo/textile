<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Carbon\Carbon;

class Post extends Model implements Feedable, Searchable
{
    use HasFactory;


    public function category()
    {

        return $this->belongsTo('App\Models\Category');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'post_tag', 'post_id', 'tag_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function scopeActive($query)
    {
        return $query->whereStatus('PUBLISHED')
            ->with('tags')
            ->get();
    }

    public function scopeGetPaginated($query)
    {
        return $query->whereStatus('PUBLISHED')
            ->with('tags')
            ->paginate(6);
    }

    public function getPhotoAttribute()
    {
        $image  = Voyager::image($this->image);
        return $image;
    }

    public function getFullDateAttribute()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);
        return "<span><i>{$date->format('d')}</i>{$date->format('F')} </span>";
    }

    public function getFullDateSingleAttribute()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);

        return "<span class='num'> {$date->format('d')} </span> <span> {$date->format('F')} </span>";
    }


    /*****RSS FEED */

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->excerpt)
            ->updated($this->updated_at)
            ->link(route('blog.single', $this->slug))
            ->author('haymacproduction');
    }

    public static function getFeedItems()
    {
        return self::all();
    }

    /******Search  */

    public function getSearchResult(): SearchResult
    {

        $url = route('blog.single', $this->slug);
        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url

        );
    }
    /***** */

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
