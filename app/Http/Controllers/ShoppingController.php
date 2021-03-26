<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    //

    public function cart()
    {

        return view('textile.pages.cart.index');
    }
}
