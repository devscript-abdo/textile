
    <div class="col-lg-9">
        <table class="table table-cart table-mobile">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Colors </th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @forelse($productsFullCart as $product)
                    <tr>
                        <td class="product-col">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="{{route('products.single',$product->url)}}">
                                        <img src="{{$product->image}}" alt="{{$product->name}}">
                                    </a>
                                </figure>

                                <h3 class="product-title">
                                    <a href="{{route('products.single',$product->url)}}">{{$product->name}}</a>
                                </h3><!-- End .product-title -->
                            </div><!-- End .product -->
                        </td>
                        <td class="price-col">{{$product->price}}</td>
                        <td class="quantity-col">
                            <div class="cart-product-quantity">
                                
                                <input type="number" class="form-control" value="{{$product->qty}}" min="1" max="100" step="1" data-decimals="0" required>
                                <!--------------------------------------->
                                <div class="input-group input-spinner">
                                    <div class="input-group-prepend">
                                       <button wire:click="decrease({{$product->id}})" style="min-width: 2.5rem" class="btn btn-decrement btn-outline-secondary" type="button"><strong>-</strong></button>
                                    </div>
                                    <input type="text" style="text-align: center" class="form-control"/>
                                    <div class="input-group-append">
                                        <button wire:click="increase({{$product->id}})" style="min-width: 2.5rem" class="btn btn-increment btn-outline-secondary" type="button"><strong>+</strong></button>
                                    </div>
                                </div>
                            </div>
                            
                        </td>
                        <td class="quantity-col">
                            @if(count($product->colors))
                                <div class="details-filter-row details-row-size">
                                    <label>{{__('shop.shop_color')}}</label>
                                    <div class="product-nav product-nav-dots">
                                        @foreach($product->colors as $color)
                                            <a href="#" class="" style="background: {{$color->code}};"><span class="sr-only">{{$color->name}}</span></a>
                            
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </td>
                        <td class="total-col">{{$product->total}}</td>
                        <td class="remove-col"><button wire:click="remove({{$product->id}})" class="btn-remove"><i class="icon-close"></i></button></td>
                    </tr>
                @empty
                   <tr>
                     <p>Nos product in the cart</p>
                   </tr>
                @endforelse

            </tbody>
        </table>

        <div class="cart-bottom">
            <div class="cart-discount">
                <form action="#">
                    <div class="input-group">
                        <input type="text" class="form-control" required placeholder="coupon code">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
        </div>
    </div>
    <!---------------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------->
    <aside class="col-lg-3">
        <div class="summary summary-cart">
            <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->
    
            <table class="table table-summary">
                <tbody>
                    <tr class="summary-subtotal">
                        <td>Subtotal:</td>
                        <td>$160.00</td>
                    </tr><!-- End .summary-subtotal -->
                    <tr class="summary-shipping">
                        <td>Shipping:</td>
                        <td>&nbsp;</td>
                    </tr>
    
                    <tr class="summary-shipping-row">
                        <td>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                                <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                            </div><!-- End .custom-control -->
                        </td>
                        <td>$0.00</td>
                    </tr><!-- End .summary-shipping-row -->
    
                    <tr class="summary-shipping-row">
                        <td>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
                                <label class="custom-control-label" for="standart-shipping">Standart:</label>
                            </div><!-- End .custom-control -->
                        </td>
                        <td>$10.00</td>
                    </tr><!-- End .summary-shipping-row -->
    
                    <tr class="summary-shipping-row">
                        <td>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
                                <label class="custom-control-label" for="express-shipping">Express:</label>
                            </div><!-- End .custom-control -->
                        </td>
                        <td>$20.00</td>
                    </tr><!-- End .summary-shipping-row -->
    
                    <tr class="summary-shipping-estimate">
                        <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
                        <td>&nbsp;</td>
                    </tr><!-- End .summary-shipping-estimate -->
    
                    <tr class="summary-total">
                        <td>Total:</td>
                        <td>{{$total}}</td>
                    </tr><!-- End .summary-total -->
                </tbody>
            </table><!-- End .table table-summary -->
    
            <a href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
        </div><!-- End .summary -->
    
        <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
    </aside><!-- End .col-lg-3 -->

