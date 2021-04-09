<div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-3 mb-lg-0">
                <h2 class="title">{{__('home.about_title')}}</h2><!-- End .title -->
                {{--<p class="lead text-primary mb-3">
                      Pellentesque odio nisi, euismod pharetra a ultricies
                     <br>in diam. Sed arcu. Cras consequat
                </p>--}}
                <p class="mb-2">
                    {{$pages['about']->excerpt}}
                </p>

                <a href="{{route('about')}}" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                    <span>Lire plus</span>
                    <i class="icon-long-arrow-right"></i>
                </a>
            </div><!-- End .col-lg-5 -->

            <div class="col-lg-6 offset-lg-1">
                <div class="about-images">
                    <img 
                        src="{{$pages['about']->photo}}" alt="Mailletex"
                        class="about-img-front"
                        width="276"
                        height="320"
                        loading="lazy"
                     >
                    {{--<img src="assets/images/about/img-2.jpg" alt="" class="about-img-back">--}}
                </div><!-- End .about-images -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .bg-light-2 pt-6 pb-6 -->
