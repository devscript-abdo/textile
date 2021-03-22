<?php

namespace App\Http\Controllers;

use App\Http\Middleware\SeoChecker;
use App\Http\Seo\BlogHandler;
use App\Models\Subscription;
use App\Traits\InterfaceHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SiteController extends Controller
{

    use InterfaceHandler;

    public function index()
    {
        $sliders  = $this->Slider()->activeItems();

        $categorie = $this->Category()->randomsHome();

        $products = $this->Product()->randomsHome();

        $testimonials = $this->Testimonial()->activeItems();

        $posts = $this->Post()->activeItems();

        /*$services = $this->Service()->homeItems();

        $projects = $this->Project()->homeItems();

        $clients  = $this->Client()->activeItems();

       */

        return view('textile.pages.home.index', compact('sliders', 'categorie', 'products', 'testimonials','posts'));
    }

    public function about()
    {
        $testimonials = $this->Testimonial()->activeItems();

        $services = $this->Service()->homeItems();

        $teams = $this->Team()->activeItems();

        $clients  = $this->Client()->activeItems();

        return view('textile.pages.about.index');
    }


    public function partner()
    {
        return view('textile.pages.partner.index');
    }

    public function magazines()
    {
        return view('textile.pages.magazines.index');
    }
    public function services()
    {

        $services = $this->Service()->activeItems();

        return view('dark.pages.services.index', compact('services'));
    }

    public function portfolio()
    {
        $projects = $this->Project()->activeItems();

        return view('dark.pages.portfolio.index', compact('projects'));
    }
    public function singlePortfolio($project)
    {

        $project = $this->Project()->getProject($project);

        return view('dark.pages.portfolio.single.index', compact('project'));
    }

    public function blog()
    {
        $posts = $this->Post()->activePaginated();

        return view('dark.pages.blog.index', compact('posts'));
    }

    public function singleBlog($post)
    {
        $post = $this->Post()->getPost($post, ['comments', 'tags']);

        return view('dark.pages.blog.single.index', compact('post'));
    }

    public function tags()
    {
        $tags = $this->Tag()->activeItems();

        return view('dark.pages.tags.index', compact('tags'));
    }
    public function singleTag($tag)
    {
        $tag = $this->Tag()->getTag($tag, ['projects']);

        return view('dark.pages.tags.single.index', compact('tag'));
    }

    public function solutions()
    {

        $project = $this->Project()->getSolutions();
        if ($project->exists()) {
            return view('dark.pages.portfolio.single.index', compact('project'));
        }
        return redirect()->route('portfolio');
    }

    public function subscribe(Request $request)
    {
        $request->validate(['email' => 'required|email|unique:subscriptions']);

        $item = Subscription::create($request->email);

        if ($item) {

            return true;
        }

        return false;
    }

    /********Textille.ma**************************************************************** */

    public function products()
    {
        return view('textile.pages.categories.index');
    }

    public function singleProduct($product)
    {

        // $product = $this->Product()->getProduct($product);

        return view('textile.pages.products.single.sticky.index');
    }
}
