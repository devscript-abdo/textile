<div class="blog-posts mb-9">
    <div class="container-fluid">
        <div class="heading text-center">
            <h2 class="title">{{__('home.blog')}}</h2><!-- End .title text-center -->
            <p class="title-desc">{{__('home.blog_description')}}</p><!-- End .title-desc -->
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
                    </figure>

                    <div class="entry-body text-center">
                        <div class="entry-meta">
                            <a href="{{route('blog.single',$post->slug)}}">

                                {!! $post->full_date !!}
                            </a>

                        </div>

                        <h3 class="entry-title">
                            <a href="{{route('blog.single',$post->slug)}}">{{$post->field('title')}}</a>
                        </h3>

                        <div class="entry-content">
                            <p>{{$post->field('excerpt')}} </p>
                            <a href="{{route('blog.single',$post->slug)}}" class="read-more">{{__('buttons.readmore')}}</a>
                        </div>
                    </div>
                </article>
            @endforeach()
        </div>
    </div>
</div>
