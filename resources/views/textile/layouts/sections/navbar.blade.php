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
                            <a href="{{route('home')}}">{{__('navbar.home')}}</a>

                             {{--@include('textile.layouts.sections.megaNavbar.homeMega')--}}
                        </li>
                        <li class="{{request()->routeIs('about') ?'active':''}}">
                            <a href="{{route('about')}}">{{__('navbar.about')}}</a>

                            {{--@include('textile.layouts.sections.megaNavbar.productMega')--}}
                        </li>
                        <li class="megamenu-container {{request()->routeIs('products') ?'active':''}}">
                            <a href="{{route('products')}}">{{__('navbar.shope')}}</a>

                             @include('textile.layouts.sections.megaNavbar.categoryMega')
                        </li>
                        <li class="{{request()->routeIs('partner') ?'active':''}}">
                            <a href="{{route('partner')}}">{{__('navbar.partner')}}</a>

                            {{--@include('textile.layouts.sections.megaNavbar.productMega')--}}
                        </li>
                        <li class="{{request()->routeIs('magazines') ?'active':''}}">
                            <a href="{{route('magazines')}}">{{__('navbar.magazine')}}</a>

                            {{--@include('textile.layouts.sections.megaNavbar.productMega')--}}
                        </li>
                        <li class="{{request()->routeIs('contact') ?'active':''}}">
                            <a href="{{route('contact')}}">{{__('navbar.contact')}}</a>

                            {{--@include('textile.layouts.sections.megaNavbar.productMega')--}}
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="header-right">
                {{--@include('textile.layouts.sections.searchProduct')--}}
                
                <a href="wishlist.html" class="wishlist-link">
                    <i class="icon-heart-o"></i>
                </a>

                <div class="dropdown cart-dropdown">
              
                    {{--<livewire:cart.cart-button/>
                    <livewire:cart.cart/>--}}
                    @include('textile.layouts.sections.cart.cartButton')
                    @include('textile.layouts.sections.cart.cart')
                    
                </div>
            </div>
        </div>
    </div>
</header>