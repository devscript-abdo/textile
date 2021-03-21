<?php

namespace App\Http\Controllers;

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

    return view('textile.pages.products.single.default.index', compact('product'));
  }
}
