
    <div class="col-lg-8">
        <table class="table table-cart table-mobile">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Couleurs </th>
                    <th>Unité de mesure</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>

					@forelse($productsCart as $product)

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
                                <td class="quantity-col">
									<div class="cart-product-quantity">
                                     
                                       {{$product['product']->unite}}
                                      
									</div>
                                
								</td>
						</tr>
					
					@empty
					<tr>
						<p>Nos product in the cart</p>
					</tr>
					@endforelse
               
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


