<?php

namespace App\Repository\Cart;

interface CartInterface
{
    
    public function all();

    public function add(int $id, int $qty);
    
    public function getCurrentQty(int $id);

    public function remove(int $id);

   
}
