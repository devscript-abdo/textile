<div class="display-row" style="background-color: #f2f2f2;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner banner-light banner-overlay">
                    <a href="{{$categorie->url}}" title="{{$categorie->field('name')}}">
                        <img 
                            src="{{$categorie->photo}}" 
                            alt="{{$categorie->field('name')}}"
                          
                            loading="lazy"
                        >
                    </a>

                    <div class="banner-content women">
                        <h2 class="banner-title">{{$categorie->field('name')}}</h2>

                        {{--<h3 class="banner-subtitle text-darkblack">IN THIS LOOK</h3>--}}


                        {{--<ul>

                            <li>Light grey linen shirt dress</li>

                        </ul>--}}
                        <p>{{$categorie->field('description')}}</p>

                        {{--<div class="banner-text text-darkblack">$20.00 - $96.00</div>--}}
                        <a href="{{$categorie->url}}" class="btn btn-outline-primary-2"><span>{{__('buttons.see_all_products')}}</span><i class="icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="heading text-center">
                    <h2 class="title">{{__('home.categories')}}</h2>
                    {{--<p class="title-desc">{{__('home.categories_description')}}</p>--}}
                    <p class="title-desc">{{$categorie->field('description')}}</p>
                </div>

                <div class="row">
                    @foreach ($categorie->products as $product )
                        <div class="col-6 col-md-4">
                            <div class="product product-4">
                                <figure class="product-media">
                                    <a href="{{route('products.single',$product->slug)}}">
                                        <img 
                                        src="{{$product->image}}" 
                                        alt="{{$product->field('name')}}" 
                                        class="product-image"
                                        width="279"
                                        height="349"
                                        loading="lazy"
                                        >
                                        {{--<img src="assets/images/demos/demo-15/products/product-3-2.jpg" alt="Product image" class="product-image-hover">--}}
                                    </a>

                                    {{--<div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    </div>--}}

                                    <div class="product-action">
                                        <a href="{{route('products.single',$product->slug)}}" class="btn-product btn-cart"><span>{{__('buttons.add_to_cart')}}</span></a>
                                    </div>
                                    {{--<livewire:cart.add-to-cart-button :product-id="$product->id" />--}}
                                </figure>

                                <div class="product-body">
                                    <h3 class="product-title"><a href="{{route('products.single',$product->slug)}}">{{$product->field('name')}}</a></h3>
                                    {{--<div class="product-price">
                                        $92.00
                                    </div>--}}
                                </div>
                                {{--<div class="product-nav product-nav-dots">
                                    @foreach($product->colors as $color)
                                        <a href="#" class="" style="background: {{$color->code}};"><span class="sr-only">{{$color->name}}</span></a>

                                    @endforeach
                                </div>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
