<div class="widget widget-collapsible">
    <h3 class="widget-title">
        <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true" aria-controls="widget-3">
            {{__('shop.shop_color')}}
        </a>
    </h3>

    <div class="collapse show" id="widget-3">
        <div class="widget-body">
            <div class="filter-colors">
                @foreach($colors as $color)
                    <a href="#"
                        style="background: {{$color->code}};"
                        class="colorsChecker "
                        title="{{$color->name}}"
                        onclick="filterColor('{{$color->slug}}');this.classList.add('selected')"
                    >
                      <span class="sr-only">{{$color->name}}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
