    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div>
    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            {{--<form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>--}}
            
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="{{request()->routeIs('home') ?'active':''}}">
                        <a href="{{route('home')}}">{{__('navbar.home')}}</a>
                    </li>
                    <li class="{{request()->routeIs('about') ?'active':''}}">
                        <a href="{{route('about')}}">{{__('navbar.about')}}</a>
                    </li>
                    <li class="{{request()->routeIs('products') ?'active':''}}">
                        <a href="{{route('products')}}">{{__('navbar.shope')}}</a>
                    </li>
                    <li class="{{request()->routeIs('partner') ?'active':''}}">
                        <a href="{{route('partner')}}">{{__('navbar.partner')}}</a>
                    </li>
                    <li class="{{request()->routeIs('magazines') ?'active':''}}">
                        <a href="{{route('magazines')}}">{{__('navbar.magazine')}}</a>
                    </li>
                    <li class="{{request()->routeIs('contact') ?'active':''}}">
                        <a href="{{route('contact')}}">{{__('navbar.contact')}}</a>
                    </li>
                </ul>
            </nav>

            <div class="social-icons">
                <a href="{{setting('social.facebook')}}" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                <a href="{{setting('social.twitter')}}" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                <a href="{{setting('social.instagram')}}" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                <a href="{{setting('social.youtube')}}" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
            </div>
        </div>
    </div>