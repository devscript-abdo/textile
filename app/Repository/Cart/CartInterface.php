<?php

namespace App\Repository\Cart;

interface CartInterface
{

    public function all();

    public function add(int $id,  $data);

    public function getCurrentQty(int $id);

    public function remove(int $id);
}
