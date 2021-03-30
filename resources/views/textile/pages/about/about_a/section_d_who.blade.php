{{--<div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">--}}
<div class="">    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-3 mb-lg-0">
                {{--<h2 class="title">Who We Are</h2>--}}
                {{--<p class="lead text-primary mb-3">Pellentesque</p>--}}
                <p class="mb-2">
                   {!!$pages['about']->body!!}
                </p>

                <a href="{{route('products')}}" class="btn btn-sm btn-minwidth btn-outline-primary-2 mt-2">
                    <span>{{__('navbar.shope')}}</span>
                    <i class="icon-long-arrow-right"></i>
                </a>
            </div>

            {{--<div class="col-lg-4">
                <div class="about-images">
                    <img src="{{$pages['about']->photo}}" alt="{{$pages['about']->field('title')}}" class="about-img-front">
                    <img src="{{asset('assets/images/about/img-2.jpg')}}" alt="" class="about-img-back">
                </div>
            </div>--}}
        </div>
    </div>
</div>