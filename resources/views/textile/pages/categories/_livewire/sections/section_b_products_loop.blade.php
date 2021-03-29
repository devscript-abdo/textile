<div class="products mb-3">
    {{--@if($loading)
    <div class="d-flex justify-content-center">
        <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    @endif--}}
    @foreach($products as $product)
      
        <div class="product product-list">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <figure class="product-media">
                        {{--<span class="product-label label-new">New</span>--}}
                        <a href="{{route('products.single',$product->slug)}}">
                            <img src="{{$product->image}}" alt="{{$product->field('name')}}" class="product-image">
                        </a>
                    </figure>
                </div>

                <div class="col-6 col-lg-3 order-lg-last">
                    <div class="product-list-action">
                        <div class="product-price">
                           {{-- {{$product->price}} | {{$product->type}} --}}

                            {{__('shop.shop_type')}} : {{$product->type}}
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 20%;"></div>
                            </div>
                            <span class="ratings-text">( 2 {{__('shop.shop_reviews')}} )</span>
                        </div>

                        {{--<div class="product-action">
                            <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                        </div><--}}

                        {{--<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
                        {{--<livewire:cart.add-to-cart-button :product-id="$product->id" :key="time().$product->id" />--}}
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="product-body product-action-inner">
                        {{--<a href="#" class="btn-product btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>--}}
                        <div class="product-cat">
                            <a href="{{$product->getCategory('slug')}}">{{$product->getCategory('name')}}</a>
                        </div>
                        <h3 class="product-title"><a title="{{$product->field('name')}}" href="{{route('products.single',$product->slug)}}">{{$product->field('name')}}</a></h3>

                        <div class="product-content">
                            <p>{{$product->excerpt}} </p>
                        </div>
                        @if($product->all_photos)
                            <div class="product-nav product-nav-thumbs">
                                @foreach($product->all_photos as $photo)
                                    <a href="{{route('products.single',$product->slug)}}" class="{{$loop->first ? 'active' : ''}}">
                                        <img src="{{$product->singlePhoto($photo)}}" alt="product desc">
                                    </a>
                                @endforeach
        
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>