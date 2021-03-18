<?php

namespace App\Repository\Category;

interface CategoryInterface
{

    public function all();

    public function query();

    public function activeItems();

}
