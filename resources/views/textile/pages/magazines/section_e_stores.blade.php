<div class="stores mb-4 mb-lg-5">
    <h2 class="title text-center mb-3">{{__('magazine.ou_magazines_title')}}</h2>

    <div class="row">
        @foreach($magazines as $magazine)
            <div class="col-lg-6">
                <div class="store">
                    <div class="row">
                        <div class="col-sm-5 col-xl-6">
                            <figure class="store-media mb-2 mb-lg-0">
                                <img src="{{$magazine->photo}}" alt="{{$magazine->field('name')}}">
                            </figure>
                        </div>
                        <div class="col-sm-7 col-xl-6">
                            <div class="store-content">
                                <h3 class="store-title">{{$magazine->field('name')}}</h3>
                                <address>{{$magazine->field('address')}}</address>
                                <div><a href="tel:{{$magazine->tele}}">{{$magazine->tele}}</a></div>

                                <h4 class="store-subtitle">{{__('magazine.hours')}}</h4>

                                {!! $magazine->hours !!}

                                <a href="{{$magazine->googlemap}}" class="btn btn-link" target="_blank"><span>{{__('magazine.view_map')}}</span><i class="icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div><!-- End .row -->
</div><!-- End .stores -->
