<div class="intro-slider-container mb-4">
    <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "responsive": {
                            "992": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>

        @foreach($sliders as $slider)
            <div class="intro-slide" style="background-image: url({{Voyager::image($slider->image)}});">
                <div class="container intro-content">
                    <h3 class="intro-subtitle text-primary">{{$slider->description}}</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">{{$slider->title}}</h1><!-- End .intro-title -->

                    <a href="{{$slider->button_link ?? request()->url()}}" class="btn btn-outline-primary-2 min-width-sm">
                        <span>{{$slider->button_text}}</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
        @endforeach

    </div><!-- End .intro-slider owl-carousel owl-simple -->

    <span class="slider-loader"></span><!-- End .slider-loader -->
</div><!-- End .intro-slider-container -->
