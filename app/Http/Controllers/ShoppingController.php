<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    //

    public function cart()
    {
        $productsCart = \MailletexCart::all();
        return view('textile.pages.cart.index', compact('productsCart'));
    }

    public function cartUpdate(Request $request)
    {

        // dd($request->productId);
        \MailletexCart::update($request->productId, $request->quantity);
        // \MailletexCart::update($request->productId, ['name' => 'New item name']);
        return redirect()->back();
    }

    public function cartDelete(Request $request)
    {
        //dd($request);
        \MailletexCart::remove($request->id);
    }
}
