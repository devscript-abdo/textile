<?php

namespace App\Repository\Post;

interface PostInterface
{


    public function all();

    public function query();

    public function getPost($slug, $with = []);

    public function activeItems();

    public function activePaginated();

    // more
}
