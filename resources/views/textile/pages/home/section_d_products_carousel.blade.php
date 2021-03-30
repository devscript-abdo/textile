<div class="container">

    <hr class="mt-2 mb-5">
    <h2 class="title text-center mb-3">{{__('home.products_carousel')}}</h2>
        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow product-4-carousel" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": false,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
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
                                            "items":5
                                        }
                                    }
                                }'>
                                @foreach($products as $product)
                                    <div class="product product-4 text-center {{$product->quantity ?'':'product-disabled'}}">
                                        <figure class="product-media">
                                            {{--<span class="product-label label-circle label-top">Top</span>--}}
                                            <a href="{{route('products.single',$product->slug)}}">
                                                <img src="{{$product->image}}" alt="{{$product->field('name')}}" class="product-image">
                                            </a>

                                            {{--<div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div>--}}

                                            {{--<livewire:cart.add-to-cart-button :product-id="$product->id" />--}}
                                                <div class="product-action">
                                                    <a href="{{route('products.single',$product->slug)}}" class="btn-product btn-cart"><span>{{__('buttons.add_to_cart')}}</span></a>
                                                </div>
                                        </figure>

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="{{route('products.single',$product->slug)}}">{{$product->field('name')}}</a></h3><!-- End .product-title -->
                                            {{--<div class="product-price">
                                                $299.00
                                            </div>--}}
                                        </div>
                                    </div>
                                @endforeach

                    
                            </div>
                </div>