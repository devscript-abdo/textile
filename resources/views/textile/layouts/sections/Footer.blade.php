<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="widget widget-about">
                        <img src="{{Voyager::image(setting('site.logo_footer'))}}" class="footer-logo" alt="Mailletex" width="105" height="25">
                        <p>
                            dapibus, neque id cursus ucibus, tortor neque egestas augue,
                            eu vulputate magna eros eu erat. Aliquam erat volutpat.
                            Nam dui mi, tincidunt quis, accumsan porttitor,
                            facilisis luctus, metus. 
                        </p>
                        
                        <div class="widget-about-info">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <span class="widget-about-title">{{__('footer.footer_call_us')}}</span>
                                    <a href="tel:{{setting('contact.contact_tel')}}">{{setting('contact.contact_tel')}}</a>
                                </div>
                                {{--<div class="col-sm-6 col-md-8">
                                    <span class="widget-about-title">Payment Method</span>
                                    <figure class="footer-payments">
                                        <img src="{{asset('assets/images/payments.png')}}" alt="Payment methods" width="272" height="20">
                                    </figure>
                                </div>--}}
                            </div>
                        </div>
                    </div><
                </div>

                <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">{{__('footer.footer_useful_link')}}</h4>

                        <ul class="widget-list">
                            @foreach($footerPages as $page)
                              <li><a href="{{route('page',$page->slug)}}">{{$page->field('title')}}</a></li>
                            @endforeach
                           
                        </ul>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">{{__('footer.footer_pages')}}</h4>

                        <ul class="widget-list">
                            <li><a href="{{route('home')}}">{{__('navbar.home')}}</a></li>
                            <li><a href="{{route('about')}}">{{__('navbar.about')}}</a></li>
                            <li><a href="{{route('products')}}">{{__('navbar.shope')}}</a></li>
                            <li><a href="{{route('partner')}}">{{__('navbar.partner')}}</a></li>
                            <li><a href="{{route('magazines')}}">{{__('navbar.magazine')}}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">{{__('footer.footer_newslatter')}}</h4>

                        <p>{{__('footer.footer_newslatter_description')}}</p>
                        
                        <form action="#">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn btn-dark" type="submit"><i class="icon-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container-fluid">
            <p class="footer-copyright">
                Copyright © {{date('Y')}} Mailletex. All Rights Reserved.
                <span>powered by Haymacproduction</span>
            </p>

            <div class="social-icons social-icons-color">
                <span class="social-label">{{__('home.shop_social')}}</span>
                <a href="{{setting('social.facebook')}}" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                <a href="{{setting('social.twitter')}}" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                <a href="{{setting('social.instagram')}}" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                <a href="{{setting('social.youtube')}}" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
            </div>

        </div>
    </div>
</footer>