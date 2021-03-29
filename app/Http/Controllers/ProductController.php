<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cart\AddToCartRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Traits\InterfaceHandler;

class ProductController extends Controller
{
  use InterfaceHandler;

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //$products = $this->Product()->active();
    // $colors = $this->Color()->active();
    return view('textile.pages.categories._livewire.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function show($product)
  {

    $product = $this->Product()->getProduct($product);

    $products = $this->Product()
      ->model()
      ->whereNotIn('id', [$product->id])
      ->with(['category'])
      ->get();

    return view('textile.pages.products.single._normal.default.index', compact('product', 'products'));
  }

  public function addToCart(AddToCartRequest $request)
  {
    $product = $this->Product()->getProduct($request->productData);

    //dd($product);
    \MailletexCart::add(
      $product->id,
      $product->field('name'),
      $request->quantity,
      0,
      [

        'colors' => $request->colors ?? [],
        'product' => (object)[
          'image' => $product->image,
          'url' => $product->url,
        ],

      ]
    );

    return redirect()->route('cart');
  }
}
