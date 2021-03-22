<div class="intro-slider-container">
    <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":false, "dots": false, "loop": false}'>
        @foreach($sliders as $slider)
            <div class="intro-slide" style="background-image: url({{Voyager::image($slider->image)}});">
                <div class="container intro-content text-center">
                    <h3 class="intro-subtitle">{{$slider->field('description')}}</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">{{$slider->field('title')}}</h1><!-- End .intro-title -->

                    <a href="{{$slider->button_link ?? request()->url()}}" class="btn btn-outline-primary-2 scroll-to">
                        <span>{{$slider->field('button_text')}}</span>
                        <i class="icon-long-arrow-down"></i>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
        @endforeach
    </div><!-- End .intro-slider owl-carousel owl-simple -->

    <span class="slider-loader text-white"></span><!-- End .slider-loader -->
</div><!-- End .intro-slider-container -->