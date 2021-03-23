<?php

namespace App\Repository\Cart;

use Illuminate\Contracts\Session\Session;

class CartRepository  implements CartInterface
{


    private $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function add(int $id, int $qty)
    {
        $this->session->put($this->identity($id), $qty);
    }

    private function identity(int $id): string
    {

        return 'cart.' . $id;
    }

    public function getCurrentQty(int $id)
    {
        return $this->session->get($this->identity($id), 0);
    }

    public function all()
    {
        return $this->session->get('cart', []);
    }

    public function remove(int $id){
        $this->session->remove($this->identity($id));
    }
}
