<div class="widget widget-collapsible">
    <h3 class="widget-title">
        <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
            Category
        </a>
    </h3><!-- End .widget-title -->

    <div class="collapse show" id="widget-1">
        <div class="widget-body">
            <div class="filter-items filter-items-count">
                @foreach($categories as $categorie)
                    @if($categorie->parent_id === null && count($categorie->childrens))
                        <div class="filter-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="categorie-{{$categorie->id}}">
                                <label class="custom-control-label" for="categorie-{{$categorie->id}}">{{$categorie->name}}</label>
                                <span class="item-count">3</span>
                                @foreach ($categorie->childrens as $categoriee)
                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="categorie-{{$categoriee->id}}">
                                            <label class="custom-control-label" for="categorie-{{$categoriee->id}}">{{$categoriee->name}}</label>
                                        </div><!-- End .custom-checkbox -->
                                        <span class="item-count">3</span>
                                    </div><!-- End .filter-item -->
                                @endforeach
                            </div><!-- End .custom-checkbox -->
                           
                        </div><!-- End .filter-item -->
                    @elseif($categorie->parent_id ===null && $categorie->childrens()->count()===0)
                        <div class="filter-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="categorie-{{$categorie->id}}">
                                <label class="custom-control-label" for="categorie-{{$categorie->id}}">{{$categorie->name}}</label>
                            
                            </div><!-- End .custom-checkbox -->
                            <span class="item-count">3</span>
                        </div><!-- End .filter-item -->
                    @endif
                @endforeach

            </div><!-- End .filter-items -->
        </div><!-- End .widget-body -->
    </div><!-- End .collapse -->
</div><!-- End .widget -->