<?php

namespace App\Repository\Tag;

interface TagInterface
{

    public function all();

    public function query();

    public function activeItems();

    public function getTag($slug, $with = []);
}
