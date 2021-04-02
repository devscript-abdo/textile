<?php

namespace App\Http\Controllers;

use App\Repository\Category\CategoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function show()
    {
        $url = request()->route();
        $categorie =  app(CategoryInterface::class)->getCategory($url->parameter('category'));
        $categoriee = $categorie->field('name');
        return view('textile.pages.categories._livewire.index', compact('categoriee'));
    }
}
