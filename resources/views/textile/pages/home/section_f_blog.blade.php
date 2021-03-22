<div class="blog-posts mb-9">
    <div class="container-fluid">
        <div class="heading text-center">
            <h2 class="title">From Our Blog</h2><!-- End .title text-center -->
            <p class="title-desc">Donec odio. Quisque volutpat mattis eros. <br>Nullam malesuada erat</p><!-- End .title-desc -->
        </div><!-- End .heading -->

        <div class="owl-carousel owl-simple" data-toggle="owl" 
            data-owl-options='{
                "nav": false, 
                "dots": true,
                "items": 3,
                "margin": 20,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":1
                    },
                    "520": {
                        "items":2
                    },
                    "768": {
                        "items":3
                    },
                    "992": {
                        "items":4
                    }
                }
            }'>
            @foreach($posts as $post)
                <article class="entry">
                    <figure class="entry-media">
                        <a href="{{route('blog.single',$post->slug)}}">
                            <img src="{{$post->photo}}" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body text-center">
                        <div class="entry-meta">
                            <a href="{{route('blog.single',$post->slug)}}">
                             
                                {!! $post->full_date !!}
                            </a>
                           
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="{{route('blog.single',$post->slug)}}">{{$post->field('title')}}</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content">
                            <p>{{$post->field('excerpt')}} </p>
                            <a href="{{route('blog.single',$post->slug)}}" class="read-more">Read More</a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article>
            @endforeach()
        </div><!-- End .owl-carousel -->
    </div><!-- End .container-fluid -->
</div><!-- End .blog-posts -->