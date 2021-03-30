<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('navbar.home')}}</a></li>
            {{--<li class="breadcrumb-item"><a href="#">{{__('na')}}</a></li>--}}
            <li class="breadcrumb-item active" aria-current="page">{{$pages['magazine']->field('title')}}</li>
        </ol>
    </div>
</nav>