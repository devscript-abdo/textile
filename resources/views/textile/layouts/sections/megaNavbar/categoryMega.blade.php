<div class="megamenu megamenu-md">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="menu-col">
                <div class="row">
                   
                        <div class="col-md-6">
                            @foreach($categories as $categorie)
                            @if($categorie->parent_id === null && count($categorie->childrens))
                                    <div class="menu-title">{{$categorie->name}}</div><!-- End .menu-title -->
                                        <ul>
                                            @foreach ($categorie->childrens as $categoriee)
                                                <li><a href="#">{{$categoriee->name}}</a></li>
            
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
                                <div class="menu-title">{{$categorie->name}}</div><!-- End .menu-title -->
                                @endif
                            @endforeach

                        </div><!-- End .col-md-6 -->
                   
                        <div class="col-md-6">

                            <div class="menu-title">Top Produits</div><!-- End .menu-title -->
                            <ul>
                                @foreach($productsNav as $product)
                                    <li>
                                        <a href="{{route('products.single',$product->slug)}}">
                                            <span>
                                                {{$product->name}}
                                                <span class="tip tip-new">
                                                    New
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                            {{--<div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                            <ul>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="dashboard.html">My Account</a></li>
                                <li><a href="#">Lookbook</a></li>
                            </ul>--}}
                        </div><!-- End .col-md-6 -->
                    
                </div><!-- End .row -->
            </div><!-- End .menu-col -->
        </div><!-- End .col-md-8 -->

        <div class="col-md-4">
            <div class="banner banner-overlay">
                <a href="category.html" class="banner banner-menu">
                    <img src="{{asset('assets/images/menu/banner-1.jpg')}}" alt="Banner">

                    <div class="banner-content banner-content-top">
                        <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                    </div><!-- End .banner-content -->
                </a>
            </div><!-- End .banner banner-overlay -->
        </div><!-- End .col-md-4 -->
    </div><!-- End .row -->
</div><!-- End .megamenu megamenu-md -->
