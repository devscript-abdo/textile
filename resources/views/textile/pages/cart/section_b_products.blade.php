
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
				<form method="post" action="{{route('cart')}}" id="cartFom">
                    
					@forelse($productsCart as $product)
												
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="productId" value="{{$product->rawId()}}">
						<tr>

				
								<td class="product-col">
									<div class="product">
										<figure class="product-media">
											<a href="{{$product['product']->url}}">
												<img src="{{$product['product']->image}}" alt="{{$product->name}}">
											</a>
										</figure>

										<h3 class="product-title">
											<a href="{{$product['product']->url}}">{{$product->name}}</a>
										</h3><!-- End .product-title -->
									</div><!-- End .product -->
								</td>
								<td class="price-col">{{$product->price}}</td>
								<td class="quantity-col">
									<div class="cart-product-quantity">
                                     
										<input type="text" name="quantity" class="form-control" value="{{$product->qty}}" min="1" max="100" step="1" data-decimals="0" readonly>
                                      
									</div>
                                
								</td>
								<td class="quantity-col">
									@if(is_array($product['colors']))
										<div class="details-filter-row details-row-size">
											{{--<label>{{__('shop.shop_color')}}</label>--}}
											<div class="product-nav product-nav-dots">
												@foreach($product['colors'] as $color)
													<a href="#" class="" style="background: {{$color}};"><span class="sr-only">{{$color}}</span></a>
									
												@endforeach
											</div>
										</div>
									@endif
								</td>
								<td class="total-col">{{$product->total}}</td>
								<td class="remove-col">
                                    <button data-prodid="{{$product->rawId()}}" class="btn-remove deleteProductFromCart">
                                        <i class="icon-close"></i>
                                    </button>
                                </td>
							
						</tr>
					
					@empty
					<tr>
						<p>Nos product in the cart</p>
					</tr>
					@endforelse
                </form>
            </tbody>
        </table>

        <div class="cart-bottom">
            {{--<div class="cart-discount">
                <form action="#">
                    <div class="input-group">
                        <input type="text" class="form-control" required placeholder="coupon code">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>--}}

            {{--<a href="#" class="btn btn-outline-dark-2" onclick="document.getElementById('cartFom').submit();">
				<span>UPDATE CART</span>
				<i class="icon-refresh"></i>
			</a>--}}
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
                        <td>1111100000</td>
                    </tr><!-- End .summary-total -->
                </tbody>
            </table><!-- End .table table-summary -->
    
            <a href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
        </div><!-- End .summary -->
    
        <a href="{{route('products')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
    </aside><!-- End .col-lg-3 -->

