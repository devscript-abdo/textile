<div class="stores mb-4 mb-lg-5">
    <h2 class="title text-center mb-3">Our Stores</h2><!-- End .title text-center mb-2 -->

    <div class="row">
        @foreach($magazines as $magazine)
            <div class="col-lg-6">
                <div class="store">
                    <div class="row">
                        <div class="col-sm-5 col-xl-6">
                            <figure class="store-media mb-2 mb-lg-0">
                                <img src="{{$magazine->photo}}" alt="{{$magazine->name}}">
                            </figure><!-- End .store-media -->
                        </div><!-- End .col-xl-6 -->
                        <div class="col-sm-7 col-xl-6">
                            <div class="store-content">
                                <h3 class="store-title">{{$magazine->name}}</h3><!-- End .store-title -->
                                <address>{{$magazine->address}}</address>
                                <div><a href="tel:#">{{$magazine->tele}}</a></div>

                                <h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
                            
                                {!! $magazine->hours !!}

                                <a href="{{$magazine->googlemap}}" class="btn btn-link" target="_blank"><span>View Map</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .store-content -->
                        </div><!-- End .col-xl-6 -->
                    </div><!-- End .row -->
                </div><!-- End .store -->
            </div><!-- End .col-lg-6 -->
        @endforeach


    </div><!-- End .row -->
</div><!-- End .stores -->