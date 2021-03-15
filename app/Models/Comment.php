<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'commenter',
    ];

    public function post()
    {

        return $this->belongTo('App\Models\Post');
    }

    public function getFullDateAttribute()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);

        return "<span> {$date->format('d')} {$date->format('F')} {$date->format('Y')}</span>";
    }
}
