<div class="container">

    <div class="page-header page-header text-center"

        @if(setting('pages.background_cover'))
          style="background-image: url('{{Voyager::image(setting('pages.background_cover'))}}')"
        @endif
    >
   
        <h1 class="page-title">

            {{$pages['magazine']->field('title')}}
            {{--<span class="text-white">{{__('home.about_title')}}</span>--}}
        </h1>
    </div>

</div>