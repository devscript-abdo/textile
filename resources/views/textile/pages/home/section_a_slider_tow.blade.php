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
                    <h3 class="intro-subtitle text-primary">{{$slider->description}}</h3>
                    <h1 class="intro-title text-white">{{$slider->title}}</h1>

                    <a href="{{$slider->button_link ?? request()->url()}}" class="btn btn-outline-primary-2 min-width-sm">
                        <span>{{$slider->button_text}}</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        @endforeach

    </div>

    <span class="slider-loader"></span>
</div>
