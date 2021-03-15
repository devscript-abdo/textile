<?php

namespace App\Repository\Client;

interface ClientInterface
{

    public function all();

    public function query();

    public function activeItems();

}
