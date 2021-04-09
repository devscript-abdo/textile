<div class="col-lg-12">
                            <article class="entry single-entry">
                                <figure class="entry-media">
                                    <img src="{{$post->photo}}" alt="image desc">
                                </figure>

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <span class="entry-author">
                                            <a href="{{route('home')}}">Mailletex</a>
                                        </span>
                                        <span class="meta-separator">|</span>
                                        <a href="{{route('blog.single',$post->slug)}}">
                                            {!! $post->full_date !!}
                                        </a>
                                        {{-- <span class="meta-separator">|</span>
                                           <a href="#">2 Comments</a>--}}
                                    </div>

                                    <h2 class="entry-title">
                                        {{$post->field('title')}}
                                    </h2>

                                    {{--<div class="entry-cats">
                                        in <a href="#">Lifestyle</a>,
                                        <a href="#">Shopping</a>
                                    </div>--}}

                                    <div class="entry-content editor-content">

                                      <p>{!!$post->field('body')!!}</p>
                                    </div>

                                    <div class="entry-footer row no-gutters flex-column flex-md-row">
                                        {{--<div class="col-md">
                                            <div class="entry-tags">
                                                <span>Tags:</span> <a href="#">photography</a> <a href="#">style</a>
                                            </div>
                                        </div>--}}

                                        <div class="col-md-auto mt-2 mt-md-0">
                                            <div class="social-icons social-icons-color">
                                                <span class="social-label">Share this post:</span>
                                                <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                <a href="#" class="social-icon social-instagram" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" class="social-icon social-linkedin" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

               
                            </article>

                            {{--<nav class="pager-nav" aria-label="Page navigation">
                                <a class="pager-link pager-link-prev" href="#" aria-label="Previous" tabindex="-1">
                                    Previous Post
                                    <span class="pager-link-title">Cras iaculis ultricies nulla</span>
                                </a>

                                <a class="pager-link pager-link-next" href="#" aria-label="Next" tabindex="-1">
                                    Next Post
                                    <span class="pager-link-title">Praesent placerat risus</span>
                                </a>
                            </nav>--}}

                            {{--@include('textile.pages.blog.single.section_b_content_related')
                            @include('textile.pages.blog.single.section_b_content_comments')
                            @include('textile.pages.blog.single.section_b_content_comments_replay')--}}

                            
                            
                		</div>