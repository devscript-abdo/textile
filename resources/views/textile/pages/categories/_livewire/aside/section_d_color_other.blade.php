<div class="widget widget-collapsible">
    <h3 class="widget-title">
        <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true" aria-controls="widget-3">
            Colour
        </a>
    </h3><!-- End .widget-title -->

    <div class="collapse show" id="widget-3">
        <div class="widget-body">
            <div class="filter-items">

                <div class="filter-item">
                    <div class="custom-control ">
                        <input
                            wire:click="$emit('filterType')"
                            wire:model="type" type="radio"
                            value="ff"
                            class="custom-control-input typeChecker"
                            id="fff"
                            style="background: #b87145; !important"
                        >
                        <label class="custom-control-label" for="ff">M²</label>
                    </div><!-- End .custom-checkbox -->
                </div><!-- End .filter-item -->

                <div class="filter-item">
                    <div class="custom-control">
                        <input wire:click="$emit('filterType')" wire:model="type" type="radio" value="kg" class="custom-control-input typeChecker" id="kg">
                        <label class="custom-control-label" for="kg">KG</label>
                    </div><!-- End .custom-checkbox -->
                </div><!-- End .filter-item -->

            </div><!-- End .filter-items -->
        </div><!-- End .widget-body -->
    </div><!-- End .collapse -->
</div><!-- End .widget -->
