<div class="about-testimonials bg-light-2 pt-6 pb-6">
                    <div class="container">
                        <h2 class="title text-center mb-3">{{__('about.testimonials')}}</h2><!-- End .title text-center -->

                        <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "1200": {
                                        "nav": true
                                    }
                                }
                            }'>
                            @foreach($testimonials as $testimonial)
                                <blockquote class="testimonial text-center">
                                    <img src="{{asset('assets/images/testimonials/user-2.jpg')}}" alt="user">
                                    <p>“ {{$testimonial->content}} ”</p>

                                    <cite>
                                        {{$testimonial->name}},
                                        <span>{{$testimonial->post}}</span>
                                    </cite>
                                </blockquote>
                            @endforeach

                        </div><!-- End .testimonials-slider owl-carousel -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light-2 pt-5 pb-6 -->