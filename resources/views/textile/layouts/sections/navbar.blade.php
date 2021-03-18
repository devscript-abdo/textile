<header class="header">
    @if(!request()->is('/'))
     @include('textile.layouts.sections.headerTop')
    @endif

    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="{{route('home')}}" class="logo">
                    <img src="{{asset('assets/images/demos/demo-15/logo.png')}}" alt="Molla Logo" width="105" height="25">
                </a>

                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container {{request()->routeIs('home') ?'active':''}}">
                            <a href="{{route('home')}}">Home</a>

                             {{--@include('textile.layouts.sections.megaNavbar.homeMega')--}}
                        </li>
                        <li class="{{request()->routeIs('about') ?'active':''}}">
                            <a href="{{route('about')}}">About US</a>

                            {{--@include('textile.layouts.sections.megaNavbar.productMega')--}}
                        </li>
                        <li class="megamenu-container {{request()->routeIs('products') ?'active':''}}">
                            <a href="{{route('products')}}">Boutique</a>

                             @include('textile.layouts.sections.megaNavbar.categoryMega')
                        </li>
                        <li class="{{request()->routeIs('partner') ?'active':''}}">
                            <a href="{{route('partner')}}">Partner</a>

                            {{--@include('textile.layouts.sections.megaNavbar.productMega')--}}
                        </li>
                        <li class="{{request()->routeIs('magazines') ?'active':''}}">
                            <a href="{{route('magazines')}}">Nos magazine</a>

                            {{--@include('textile.layouts.sections.megaNavbar.productMega')--}}
                        </li>
                        <li class="{{request()->routeIs('contact') ?'active':''}}">
                            <a href="{{route('contact')}}">Contact</a>

                            {{--@include('textile.layouts.sections.megaNavbar.productMega')--}}
                        </li>

                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-left -->

            <div class="header-right">
                {{--@include('textile.layouts.sections.searchProduct')--}}
                
                <a href="wishlist.html" class="wishlist-link">
                    <i class="icon-heart-o"></i>
                </a>

                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">2</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-cart-products">
                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Beige knitted elastic runner shoes</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $84.00
                                    </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{asset('assets/images/products/cart/product-1.jpg')}}" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div><!-- End .product -->

                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Blue utility pinafore denim dress</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $76.00
                                    </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{asset('assets/images/products/cart/product-2.jpg')}}" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div><!-- End .product -->
                        </div><!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                            <span>Total</span>

                            <span class="cart-total-price">$160.00</span>
                        </div><!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="cart.html" class="btn btn-primary">View Cart</a>
                            <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .dropdown-cart-total -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .cart-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container-fluid -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->