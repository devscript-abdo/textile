<div class="megamenu megamenu-md">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="menu-col">
                <div class="row">
                   
                        <div class="col-md-6">
                            @foreach($categories as $categorie)
                            @if($categorie->parent_id === null && count($categorie->childrens))
                                    <div class="menu-title">
                                        <a href="{{$categorie->url}}" style="color:#333333 !important">{{$categorie->field('name')}}</a>
                                    </div><!-- End .menu-title -->
                                        <ul>
                                            @foreach ($categorie->childrens as $categoriee)
                                                <li><a href="{{$categoriee->url}}">{{$categoriee->field('name')}}</a></li>
            
                                                {{--<li>
                                                    <a href="category-market.html">
                                                        <span>Shop Market
                                                            <span class="tip tip-new">New</span>
                                                        </span>
                                                    </a>
                                                </li>--}}
                                            @endforeach
                                        </ul>
                                @elseif($categorie->parent_id ===null && $categorie->childrens()->count()===0)
                                <div class="menu-title"><a href="{{$categorie->url}}" style="color:#333333 !important">{{$categorie->field('name')}}</a></div><!-- End .menu-title -->
                                @endif
                            @endforeach

                        </div>
                   
                        <div class="col-md-6">

                            <div class="menu-title">{{__('navbar.shope_category_products')}}</div>
                            <ul>
                                @foreach($productsNav as $product)
                                    <li>
                                        <a href="{{route('products.single',$product->slug)}}">
                                            <span>
                                                {{$product->field('name')}}
                                                {{--<span class="tip tip-new">
                                                    New
                                                </span>--}}
                                            </span>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                            {{--<div class="menu-title">Shop Pages</div>
                            <ul>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="dashboard.html">My Account</a></li>
                                <li><a href="#">Lookbook</a></li>
                            </ul>--}}
                        </div>
                    
                </div>
            </div>
        </div>
        @if(setting('promos.promos_image')) 
            <div class="col-md-4">
                <div class="banner banner-overlay">
                    <a href="{{setting('promos.promos_url')}}" class="banner banner-menu">
                        <img src="{{Voyager::image(setting('promos.promos_image'))}}" alt="promo du produit">

                        <div class="banner-content banner-content-top">
                            <div class="banner-title text-white">
                                
                                {!!setting('promos.promos_title')!!}

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endif

    </div>
</div>
