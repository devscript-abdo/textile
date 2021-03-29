<div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="{{$product->image}}" data-zoom-image="{{$product->image}}" alt="{{$product->field('name')}}">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure>

                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                            @if($product->all_photos)
                                                @foreach($product->all_photos as $photo)
                                                    <a class="product-gallery-item active" href="#" data-image="{{$product->singlePhoto($photo)}}" data-zoom-image="{{$product->singlePhoto($photo)}}">
                                                        <img src="{{$product->singlePhoto($photo)}}" alt="{{$product->field('name')}}">
                                                    </a>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title">{{$product->field('name')}}</h1>

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div>
                                        </div>
                                        <a class="ratings-text" href="#product-review-link" id="review-link">( 2 {{__('shop.shop_reviews')}} )</a>
                                    </div>

                                    <div class="product-price">
                                        {{$product->price}}
                                    </div>

                                    <div class="product-content">
                                        <p> {{$product->field('excerpt')}} </p>
                                    </div>
                                    <form id="addToCartForm" action="{{route('products.single',$product->slug)}}" method="post">
                                        @csrf
                                        <input type="hidden" name="productData" value="{{$product->slug}}">
                                        @if(count($product->colors))
                                            <div class="">
                                                <div class="select-custom">
                                                    <select id="colors" class="form-control singleProductsColors" name="colors[]" multiple="multiple">
                                                        @foreach($product->colors as $color)
                                                            <option value="{{$color->slug}}" style="background: {{$color->code}};">
                                                                {{$color->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endif

                                        @if($product->designs)
                                            <div class="details-filter-row details-row-size">

                                                <div class="details-filter-row details-row-size">
                                                    <label for="qty">{{__('shop.shop_single_designs')}}:  ({{__('shop.shop_single_designs_photos')}})</label>
                                                    <div class="product-details-quantity">
                                                        <input type="number" name="designs" id="qty" class="form-control" value="1" min="1" max="{{$product->designs}}" step="1" data-decimals="0">
                                                    
                                                    </div>
                                                
                                                </div>
                                                <a href="#" class="size-guide">
                                                    <i class="icon-th-list"></i>{{__('shop.shop_single_designs_select')}}
                                                </a>
                                            </div>
                                        @endif

                                        <div class="details-filter-row details-row-size">
                                            <label for="qty">{{__('shop.shop_signle_qte')}}:  ({{$product->type}})</label>
                                            <div class="product-details-quantity">
                                                <input type="number" name="quantity" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                            
                                            </div>
                                        
                                        </div>

                                        <div class="product-details-action">
                                            <a href="#" class="btn-product btn-cart" onclick="document.getElementById('addToCartForm').submit();">
                                                <span>{{__('buttons.add_to_cart')}}</span>
                                            </a>
                                            {{--<livewire:cart.add-to-cart-button :is-single="true" :product-id="$product->id" :key="time().$product->id" />--}}

                                            {{--<div class="details-action-wrapper">
                                                <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                                <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                            </div>--}}
                                        </div>
                                    </form>

                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>{{__('shop.shop_single_category')}}:</span>

                                            <a href="{{$product->getCategory('slug')}}">
                                                {{$product->getCategory('name')}}
                                            </a>
                                    
                                        </div>

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">{{__('shop.shop_single_share')}}:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                          
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
</div>