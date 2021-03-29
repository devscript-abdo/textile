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

    public function add(int $id,  $data)
    {
       // $this->session->put($this->identity($id), $data);
        $this->session->push($this->identity($id), $data)['qte'];
    }

    private function identity(int $id): string
    {

        return 'cart.' . $id;
    }

    public function getCurrentQty(int $id)
    {
        $data =  $this->session->get($this->identity($id), 0);
        //dd($data['qte']);
         return $data;
       // return $this->session->get($this->identity($id), 0)['qte'];
    }

    public function all()
    {
        return $this->session->get('cart', []);
    }

    public function remove(int $id)
    {
        $this->session->remove($this->identity($id));
    }
}
