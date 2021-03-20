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
                        <span class="product-label label-new">New</span>
                        <a href="{{route('products.single','prouct-alpha')}}">
                            <img src="{{$product->image}}" alt="{{$product->name}}" class="product-image">
                        </a>
                    </figure><!-- End .product-media -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-6 col-lg-3 order-lg-last">
                    <div class="product-list-action">
                        <div class="product-price">
                            {{$product->price}} | {{$product->type}}
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 2 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-action">
                            <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                        </div><!-- End .product-action -->

                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-list-action -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-lg-6">
                    <div class="product-body product-action-inner">
                        <a href="#" class="btn-product btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                        <div class="product-cat">
                            <a href="{{$product->getCategory('slug')}}">{{$product->getCategory('name')}}</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="{{route('products.single',$product->slug)}}">{{$product->name}}</a></h3><!-- End .product-title -->

                        <div class="product-content">
                            <p>{{$product->excerpt}} </p>
                        </div><!-- End .product-content -->
                        @if($product->all_photos)
                            <div class="product-nav product-nav-thumbs">
                                @foreach($product->all_photos as $photo)
                                    <a href="#" class="{{$loop->first?'active':''}}">
                                        <img src="{{$product->singlePhoto($photo)}}" alt="product desc">
                                    </a>
                                @endforeach
        
                            </div>
                        @endif
                    </div><!-- End .product-body -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div>
    @endforeach

</div>