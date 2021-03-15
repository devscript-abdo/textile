<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    public function projects()
    {
        return $this->belongsToMany('App\Models\Project', 'project_category', 'category_id', 'project_id');
    }

    public function services()
    {
        return $this->belongsToMany('App\Models\Service', 'service_category', 'category_id', 'service_id');
    }
}
