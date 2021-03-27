<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="brands-text">
                <h2 class="title">{{__('about.clients_title')}}</h2>
                <p>{{__('about.clients_description')}}</p>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="brands-display">
                <div class="row justify-content-center">
                    @foreach($clients as $client)
                        <div class="col-6 col-sm-4">
                            <a href="{{$client->site_url ?? route('about')}}" class="brand">
                                <img src="{{$client->default_logo}}" alt="{{$client->name}}">
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <hr class="mt-4 mb-6">

    <h2 class="title text-center mb-4">{{__('about.teams_title')}}</h2><!-- End .title text-center mb-2 -->

    <div class="row">
        @foreach($teams as $team)
            <div class="col-md-4">
                <div class="member member-anim text-center">
                    <figure class="member-media">
                        <img src="{{$team->full_photo}}" alt="member photo">

                        <figcaption class="member-overlay">
                            <div class="member-overlay-content">
                                <h3 class="member-title">{{$team->name}}<span>{{$team->post}}</span></h3>
                                <p>{{$team->excerpt}}</p> 
                                <div class="social-icons social-icons-simple">
                                    <a href="{{$team->facebook ?? route('about')}}" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="{{$team->twitter ?? route('about')}}" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="{{$team->instagram ?? route('about')}}" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="member-content">
                        <h3 class="member-title">{{$team->name}}<span>{{$team->post}}</span></h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="mb-2"></div>