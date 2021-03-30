<?php

namespace App\Http\Controllers;

use App\Repository\Page\PageInterface;
use Illuminate\Http\Request;

class PageController extends Controller
{



    public function getPage($slug)
    {

        $page = app(PageInterface::class)->getPage($slug);

        return view('textile.pages.page.index', compact('page'));
    }
}
