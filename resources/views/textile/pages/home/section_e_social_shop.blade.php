<div class="container-fluid">
    <div class="cta cta-separator">
        <div class="row">
            <div class="col-lg-6">
                <div class="cta-wrapper cta-text text-center">
                    <h3 class="cta-title">{{__('home.shop_social')}}</h3>
                    <p class="cta-desc">{{__('home.shop_social_description')}} </p>

                    <div class="social-icons social-icons-colored justify-content-center">
                        <a href="{{setting('social.facebook')}}" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                        {{--<a href="{{setting('social.twitter')}}" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>--}}
                        <a href="{{setting('social.instagram')}}" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                        <a href="{{setting('social.linkedin')}}" class="social-icon social-linkedin" title="linkedin" target="_blank"><i class="icon-linkedin"></i></a>
                        {{--<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="cta-wrapper text-center">
                    <h3 class="cta-title mb-2">{{__('home.testimonials')}}</h3>

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
                                <p>“ {{$testimonial->field('content')}} ”</p>

                                <cite>
                                    {{$testimonial->name}},
                                    <span>{{$testimonial->field('post')}}</span>
                                </cite>
                            </blockquote>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-7"></div>
