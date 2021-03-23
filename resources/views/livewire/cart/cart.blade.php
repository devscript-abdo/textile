<div>
    @if($visible)
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-cart-products">

                @forelse($productsCart as $product)
                    <div class="product">
                        <div class="product-cart-details">
                            <h4 class="product-title">
                                <a href="{{route('products.single',$product->url)}}">{{$product->name}}</a>
                            </h4>

                            <span class="cart-product-info">
                                <span class="cart-product-qty">{{$product->qty}}</span>
                                x {{$product->price}}
                            </span>
                        </div><!-- End .product-cart-details -->

                        <figure class="product-image-container">
                            <a href="{{route('products.single',$product->url)}}" class="product-image">
                                <img src="{{$product->image}}" alt="product">
                            </a>
                        </figure>
                        <a href="#" wire:click="remove({{$product->id}})" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                    </div>
                @empty
                   <p>Nos product in the cart</p>
                @endforelse

            </div>

            <div class="dropdown-cart-total">
                <span>Total</span>

                <span class="cart-total-price">{{$total}}</span>
            </div>

            <div class="dropdown-cart-action">
                <a href="cart.html" class="btn btn-primary">View Cart</a>
                <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
            </div>
        </div>
    @endif
</div>
