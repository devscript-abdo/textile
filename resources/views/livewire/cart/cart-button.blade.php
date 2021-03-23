<div>
    <a wire:click="toggle" href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
        <i class="icon-shopping-cart"></i>
        @if($qty)
         <span class="cart-count">{{$qty}}</span>
        @endif
    </a>
</div>
