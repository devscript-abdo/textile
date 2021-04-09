<div class="page-header text-center" 
    @if(setting('pages.background_cover'))
      style="background-image: url('{{Voyager::image(setting('pages.background_cover'))}}')"
    @endif
>
    <div class="container">
        <h1 class="page-title">{{$post->field('title')}}
            {{--<span>Single Post</span>--}}
        </h1>
    </div><!-- End .container -->
</div><!-- End .page-header -->
<nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('navbar.home')}}</a></li>
            {{--<li class="breadcrumb-item"><a href="{{route('blog')}}">{{__('navbar.home')}}</a></li>--}}
            <li class="breadcrumb-item active" aria-current="page">{{$post->field('title')}}</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->