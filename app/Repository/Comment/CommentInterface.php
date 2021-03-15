<?php

namespace App\Repository\Comment;

interface CommentInterface
{


    public function all();

    public function query();

    public function activeItems();

    public function createComment($attributes);

    // more
}
