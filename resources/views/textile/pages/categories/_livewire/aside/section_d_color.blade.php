<div class="widget widget-collapsible">
    <h3 class="widget-title">
        <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true" aria-controls="widget-3">
            Colour
        </a>
    </h3><!-- End .widget-title -->

    <div class="collapse show" id="widget-3">
        <div class="widget-body">
            <div class="filter-colors">
                @foreach($colors as $color)
                    <a href="#" style="background: {{$color->code}};" class="colorsChecker " data-getColor="{{$color->id}}" title="{{$color->name}}"><span class="sr-only">{{$color->name}}</span></a>
                @endforeach
            </div><!-- End .filter-colors -->
        </div><!-- End .widget-body -->
    </div><!-- End .collapse -->
</div><!-- End .widget -->