<div class="widget widget-collapsible">
    <h3 class="widget-title">
        <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
            {{__('shop.shop_type')}}
        </a>
    </h3>

    <div class="collapse show" id="widget-2">
        <div class="widget-body">
            <div class="filter-items">

                <div class="filter-item">
                    <div class="custom-control ">
                        <input wire:click="$emit('filterType')" wire:model="type" type="radio" value="m²" class="custom-control-input typeChecker" id="m-2">
                        <label class="custom-control-label" for="m-2">M²</label>
                    </div>
                </div>

                <div class="filter-item">
                    <div class="custom-control">
                        <input wire:click="$emit('filterType')" wire:model="type" type="radio" value="kg" class="custom-control-input typeChecker" id="kg">
                        <label class="custom-control-label" for="kg">KG</label>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
