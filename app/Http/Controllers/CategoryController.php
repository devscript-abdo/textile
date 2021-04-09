<?php

namespace App\Http\Controllers;

use App\Repository\Category\CategoryInterface;

use Illuminate\Http\Request;

use App\Traits\InterfaceHandler;

class CategoryController extends Controller
{
    //

    use InterfaceHandler;

    public function show($category)
    {

        $categorie =  app(CategoryInterface::class)->getCategory($category);

        $categoriee = $categorie->field('name');

        $products = $categorie->products()->active();

        $colors = $this->Color()->active();

        return view('textile.pages.categories._normal.index', compact('categoriee', 'products','colors'));
    }
}
