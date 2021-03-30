<?php

namespace App\Http\Controllers;

use App\Http\Middleware\SeoChecker;
use App\Http\Requests\Partner\PartnerRequest;
use App\Http\Seo\BlogHandler;
use App\Models\Subscription;
use App\Traits\InterfaceHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

use App\Mail\Partner\Partner;

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

        return view('textile.pages.home.index', compact('sliders', 'categorie', 'products', 'testimonials', 'posts'));
    }

    public function about()
    {
        $testimonials = $this->Testimonial()->activeItems();

        $teams = $this->Team()->activeItems();

        $clients  = $this->Client()->activeItems();

        return view('textile.pages.about.index', compact('clients', 'teams', 'testimonials'));
    }


    public function partner()
    {
        return view('textile.pages.partner.index');
    }
    public function partnerPost(PartnerRequest $request)
    {
       // dd($request);
        $data = $request->except(['_token', 'valid_from']);

        $email = setting('contact.email_reciver') ?? 'contact@' . request()->getHost();

        if ($email) {

            Mail::to($email)->send(new Partner($data));

            return redirect()->route('partner')->with('isSent', 'merci pour votre message');
        }
    }

    public function magazines()
    {
        $magazines = $this->Magazine()->activeItems();

        return view('textile.pages.magazines.index', compact('magazines'));
    }



    public function blog()
    {
        $posts = $this->Post()->activePaginated();

        return view('dark.pages.blog.index', compact('posts'));
    }

    public function singleBlog($post)
    {
        $post = $this->Post()->getPost($post);

        return view('textile.pages.blog.single.index', compact('post'));
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
