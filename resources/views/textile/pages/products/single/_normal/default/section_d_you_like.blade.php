<div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                        @foreach($products as $product)
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    {{--<span class="product-label label-new">New</span>--}}
                                    <a href="{{route('products.single',$product->slug)}}">
                                        <img 
                                            src="{{$product->image}}" 
                                            alt="{{$product->field('name')}}" 
                                            class="product-image"
                                            width="276"
                                            height="345"
                                            loading="lazy"
                                        >
                                    </a>

                                    {{--<div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    </div>--}}

                                    {{--<div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>--}}
                                    <div class="product-action">
                                        <a href="{{route('products.single',$product->slug)}}" class="btn-product btn-cart"><span>{{__('buttons.add_to_cart')}}</span></a>
                                    </div>
                                </figure>

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="{{$product->getCategory('slug')}}">{{$product->getCategory('name')}}</a>
                                    </div>
                                    <h3 class="product-title"><a href="{{route('products.single',$product->slug)}}">{{$product->field('name')}}</a></h3>
                                    {{--<div class="product-price">
                                        $60.00
                                    </div>--}}
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div>
                                        </div>
                                        <span class="ratings-text">( 2 {{__('shop.shop_reviews')}} )</span>
                                    </div>

                                    <div class="product-nav product-nav-thumbs">
                                        @if($product->all_photos)
                                            @foreach($product->all_photos as $photo)
                                                <a href="#" class="{{$loop->first ? 'active':''}}">
                                                    <img 
                                                        src="{{$product->singlePhoto($photo)}}" 
                                                        alt="{{$product->field('name')}}"
                                                        width="40"
                                                        height="50"
                                                        loading="lazy"
                                                    >
                                                </a>
                                            @endforeach
                                        @endif
                          
                                    </div>
                                </div>
                            </div>
                        @endforeach
                
                    </div>