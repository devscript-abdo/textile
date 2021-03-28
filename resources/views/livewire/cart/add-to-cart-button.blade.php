<div>
    @if($isSingle)
         <a wire:click="add" href="#" class="btn-product btn-cart"><span>{{__('buttons.add_to_cart')}}</span></a>
    @else
        <div class="product-action">
            <a wire:click="add" href="#" class="btn-product btn-cart"><span>{{__('buttons.add_to_cart')}}</span></a>
        </div>
    @endif
    {{--@dd(session()->all())--}}
</div>
