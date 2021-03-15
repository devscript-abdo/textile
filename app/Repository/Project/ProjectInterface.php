<?php

namespace App\Repository\Project;

interface ProjectInterface
{

   // public function __call($name, $args);

    public function all();

    public function query();

    public function activeItems();

    public function homeItems();

    public function getProject($slug);

    public function getSolutions();
}
