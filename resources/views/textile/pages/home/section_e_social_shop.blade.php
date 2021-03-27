<div class="container-fluid">
    <div class="cta cta-separator">
        <div class="row">
            <div class="col-lg-6">
                <div class="cta-wrapper cta-text text-center">
                    <h3 class="cta-title">{{__('home.shop_social')}}</h3><!-- End .cta-title -->
                    <p class="cta-desc">{{__('home.shop_social_description')}} </p><!-- End .cta-desc -->
            
                    <div class="social-icons social-icons-colored justify-content-center">
                        <a href="{{setting('social.facebook')}}" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                        <a href="{{setting('social.twitter')}}" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="{{setting('social.instagram')}}" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                        <a href="{{setting('social.youtube')}}" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                        {{--<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>--}}
                    </div><!-- End .soial-icons -->
                </div><!-- End .cta-wrapper -->
            </div><!-- End .col-lg-6 -->

            <div class="col-lg-6">
                <div class="cta-wrapper text-center">
                    <h3 class="cta-title mb-2">{{__('home.testimonials')}}</h3><!-- End .cta-title -->

                    <div class="owl-carousel owl-simple owl-testimonials" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": true,
                            "responsive": {
                                "1500": {
                                    "nav": true
                                }
                            }
                        }'>
                        @foreach($testimonials as $testimonial)
                            <blockquote class="testimonial testimonial-icon text-center">
                                <p>“ {{$testimonial->content}} ”</p>

                                <cite>
                                    {{$testimonial->name}},
                                    <span>{{$testimonial->post}}</span>
                                </cite>
                            </blockquote>
                        @endforeach
                    </div><!-- End .testimonials-slider owl-carousel -->
                </div><!-- End .cta-wrapper -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->
    </div><!-- End .cta -->
</div><!-- End .container-fluid -->
<div class="mb-7"></div><!-- End .mb-7 -->