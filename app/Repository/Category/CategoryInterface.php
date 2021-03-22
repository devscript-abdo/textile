<?php

namespace App\Repository\Category;

interface CategoryInterface
{

    public function all();

    public function query();

    public function activeItems();

    public function getCategory($slug);

    public function getWithChildrens();

    public function randomsHome();

}
