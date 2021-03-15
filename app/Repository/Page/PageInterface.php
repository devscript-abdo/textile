<?php

namespace App\Repository\Page;

interface PageInterface
{


    public function all();

    public function query();


    public function getPage($slug);

    // more
}
