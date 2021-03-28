<div class="widget widget-collapsible">
    <h3 class="widget-title">
        <a data-toggle="collapse" href="#mailletex-catee" role="button" aria-expanded="true" aria-controls="mailletex-catee">
            {{__('shop.shop_category')}}
        </a>
    </h3>

    <div class="collapse show" id="mailletex-catee">
        <div class="widget-body">
            {{--<div>@json($category)</div>--}}
            <div class="filter-items filter-items-count">
                <div class="filter-item">
                    <div class="custom-control custom-checkbox">
                        <input wire:click="$emit('filterCategory')" wire:model="category"  type="checkbox" class="custom-control-input categoriesChecker" value="0" id="categorie-0">
                        <label class="custom-control-label" for="categorie-0">{{__('shop.shop_category_all')}}</label>
                    
                    </div>
                    {{--<span class="item-count">3</span>--}}
                </div>
                @foreach($categories as $categorie)
                
                    @if($categorie->parent_id === null && count($categorie->childrens))
                        <div class="filter-item">
                            <div class="custom-control custom-checkbox">
                                <input wire:click="$emit('filterCategory')" wire:model="category" type="checkbox" class="custom-control-input categoriesChecker" value="{{$categorie->id}}" id="categorie-{{$categorie->id}}">
                                <label class="custom-control-label" for="categorie-{{$categorie->id}}">{{$categorie->field('name')}}</label>
                                {{--<span class="item-count">3</span>--}}
                                @foreach ($categorie->childrens as $categoriee)
                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input  wire:click="$emit('filterCategory')" wire:model="category" type="checkbox" class="custom-control-input categoriesChecker" value="{{$categoriee->id}}" id="categorie--{{$categoriee->id}}">
                                            <label class="custom-control-label" for="categorie--{{$categoriee->id}}">{{$categoriee->field('name')}}</label>
                                        </div>
                                        {{--<span class="item-count">3</span>--}}
                                    </div>
                                @endforeach
                            </div>
                           
                        </div>
                    @elseif($categorie->parent_id ===null && $categorie->childrens()->count()===0)
                        <div class="filter-item">
                            <div class="custom-control custom-checkbox">
                                <input wire:click="$emit('filterCategory')" wire:model="category"  type="checkbox" class="custom-control-input categoriesChecker" value="{{$categorie->id}}" id="categorie-{{$categorie->id}}">
                                <label class="custom-control-label" for="categorie-{{$categorie->id}}">{{$categorie->field('name')}}</label>
                            
                            </div>
                            {{--<span class="item-count">3</span>--}}
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</div>