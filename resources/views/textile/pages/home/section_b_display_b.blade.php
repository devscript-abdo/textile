<div class="display-row" style="background-color: #f2f2f2;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner banner-light banner-overlay">
                    <a href="#">
                        <img src="{{$categorie->photo}}" alt="{{$categorie->name}}">
                    </a>

                    <div class="banner-content women">
                        <h2 class="banner-title">{{$categorie->name}}</h2><!-- End .banner-title -->
                        {{--<h3 class="banner-subtitle text-darkblack">IN THIS LOOK</h3>--}}
                     

                        {{--<ul>
                            <li>Light grey linen shirt dress</li>
                
                        </ul>--}}
                        <p>{{$categorie->description}}</p>

                        {{--<div class="banner-text text-darkblack">$20.00 - $96.00</div>--}}
                        <a href="{{$categorie->url}}" class="btn btn-outline-primary-2"><span>Voir tous les produits</span><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-lg-6 -->

            <div class="col-lg-6">
                <div class="heading text-center">
                    <h2 class="title">{{__('home.categories')}}</h2><!-- End .title text-center -->
                    <p class="title-desc">{{__('home.categories_description')}}</p><!-- End .title-desc -->
                </div><!-- End .heading -->

                <div class="row">
                    @foreach ($categorie->products as $product )
                        <div class="col-6 col-md-4">
                            <div class="product product-4">
                                <figure class="product-media">
                                    <a href="{{route('products.single',$product->slug)}}">
                                        <img src="{{$product->image}}" alt="{{$product->field('name')}}" class="product-image">
                                        {{--<img src="assets/images/demos/demo-15/products/product-3-2.jpg" alt="Product image" class="product-image-hover">--}}
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    </div><!-- End .product-action -->

                                    {{--<div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>--}}
                                    <livewire:cart.add-to-cart-button :product-id="$product->id" />
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="{{route('products.single',$product->slug)}}">{{$product->field('name')}}</a></h3><!-- End .product-title -->
                                    {{--<div class="product-price">
                                        $92.00
                                    </div>--}}
                                </div><!-- End .product-body -->
                                <div class="product-nav product-nav-dots">
                                    @foreach($product->colors as $color)
                                        <a href="#" class="" style="background: {{$color->code}};"><span class="sr-only">{{$color->name}}</span></a>
                        
                                    @endforeach
                                </div><!-- End .product-nav -->
                            </div>
                        </div>
                    @endforeach
      

        
                </div>
            </div>
        </div>
    </div>
</div>