<?php

namespace App\Services;

use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Spatie\Searchable\Search;

class SearchService extends Servicer
{

    public function runSearcher($q)
    {
        $searchResults = (new Search())
            ->registerModel(Project::class, ['title', 'excerpt', 'description'])
            ->registerModel(Service::class, ['title', 'excerpt'])
            ->registerModel(Post::class, ['title', 'excerpt', 'body'])
            ->search($q);

        return $searchResults;
    }
}
