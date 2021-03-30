<div class="header-top">
    <div class="container">
        <div class="header-left">
            {{--<div class="header-dropdown">
                <a href="#">Usd</a>
                <div class="header-menu">
                    <ul>
                        <li><a href="/">MAD</a></li>
                      
                    </ul>
                </div><!-- End .header-menu -->
            </div>--}}
            <div class="header-dropdown">
                <a href="#">Lang ({{Mailletex::currentLocaleName()}})</a>
                <div class="header-menu">
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li> 
                                <a 
                                    rel="alternate" 
                                    hreflang="{{ $localeCode }}" 
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                    class="dropdown-item" 
                                >
                                 {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div><!-- End .header-menu -->
            </div><!-- End .header-dropdown -->
        </div><!-- End .header-left -->

        <div class="header-right">
            <ul class="top-menu">
                <li>
                    <a href="#"></a>
                    <ul>
                        <li><a href="tel:#"><i class="icon-phone"></i>{{setting('contact.contact_tel')}}</a></li>
                        {{--<li><a href="wishlist.html"><i class="icon-heart-o"></i>Wishlist <span>(3)</span></a></li>--}}
                        <li><a href="{{route('about')}}">{{__('navbar.about')}}</a></li>
                        <li><a href="{{route('contact')}}">{{__('navbar.contact')}}</a></li>
                            {{--<li>
                                <a href="#signin-modal" data-toggle="modal">
                                    <i class="icon-user"></i>Login
                                </a>
                            </li>--}}
                    </ul>
                </li>
            </ul><!-- End .top-menu -->
        </div><!-- End .header-right -->
    </div><!-- End .container -->
</div><!-- End .header-top -->