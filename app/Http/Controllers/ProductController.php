<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cart\AddToCartRequest;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use App\Traits\InterfaceHandler;

class ProductController extends Controller
{
    use InterfaceHandler;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->Product()->activeItems();

        $colors = $this->Color()->active();

        return view('textile.pages.categories._normal.index', compact('products', 'colors'));
    }


    public function indexWithFilters()
    {

        if (request()->has('mailletexFilter') && request()->filled('mailletexFilter')) {

            // dd(request()->mailltexFilter['GetCategory']);

            /* $slug = request()->mailltexFilter['GetCategory'];

            $category = $this->Category()->model()->whereSlug($slug)->firstOrFail()->id;*/

            $products = QueryBuilder::for($this->Product()->model())

                ->allowedFilters([

                    //AllowedFilter::exact('GetCategory', 'filters_category'),
                    AllowedFilter::scope('GetCategory', 'filters_category'),
                    AllowedFilter::scope('GetColor', 'filters_color'),

                ])
                ->with(['category', 'translations'])
                //->paginate(1)
                // ->appends(request()->query());
                ->get();
        } else {
            $products = $this->Product()->activeItems();
        }

        $colors = $this->Color()->active();

        return view('textile.pages.categories._normal.index', compact('products', 'colors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($product)
    {

        $product = $this->Product()->getProduct($product, ['category', 'colors', 'reviews']);

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

        $exists =  \MailletexCart::all()->firstWhere('name', $product->field('name'));

        if (!$exists) {
            \MailletexCart::add(
                $product->id,
                $product->field('name'),
                $request->quantity,
                0,
                [

                    'colors' => $request->colors ?? [],
                    'product' => (object)[

                        'unite' => $product->type,
                        'image' => $product->image,
                        'url' => $product->url,

                    ],

                ]
            );

            return redirect()->route('cart');
        }

        return redirect()->back()->with('isExiste', 'Ce produis et deja exit dans le panier');
    }
}
