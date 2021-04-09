<div class="page-header text-center"

    @if(setting('pages.background_cover'))
       style="background-image: url('{{Voyager::image(setting('pages.background_cover'))}}')"
    @endif
    
>
    <div class="container">
        <h1 class="page-title">
            
               @php 
                $url = request()->route();
                @endphp
               @if($url->getName() === 'categories.single')

                    {{$categoriee}}

               @else
                   {{__('shop.shop_title')}}
               @endif

            {{--<span>Shop</span>--}}
        </h1>
    </div>
</div>