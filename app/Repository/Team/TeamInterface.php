<?php

namespace App\Repository\Team;

interface TeamInterface
{

    public function all();

    public function query();

    public function activeItems();
}
