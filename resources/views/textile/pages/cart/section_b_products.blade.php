
    <div class="col-lg-8">
        <table class="table table-cart table-mobile">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Colors </th>
                    <th>unité de mesure</th>
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
                                <td class="">
									<div class="cart-product-quantity">

                                        {{$product['product']->unite}}
                                      
									</div>
                                
								</td>
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
    <aside class="col-lg-4">
        <div class="summary summary-cart">
            <h3 class="">{{__('form.form_devie_title')}}</h3>
    
            <form method="post" action="{{route('cartSend')}}" class="contact-form mb-3">
                <div class="row">
                    <div class="col-sm-12">
                        
                        <label for="cname" class="sr-only">{{__('form.name')}}</label>
                        <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" id="cname" placeholder="{{__('form.name')}} *">
                        @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
                    <div class="col-sm-12">
                        <label for="clname" class="sr-only">{{__('form.lname')}}</label>
                        <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" id="clname" placeholder="{{__('form.lname')}} *" >
                        @error('prenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="cadresse" class="sr-only">{{__('form.adresse')}}</label>
                        <input type="text" name="adresse" class="form-control @error('adresse') is-invalid @enderror" id="cadresse" placeholder="{{__('form.adresse')}} *" >
                        @error('adresse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
                    <div class="col-sm-12">
                        <label for="ctelephone" class="sr-only">{{__('form.telephone')}}</label>
                        <input type="text" name="telephone" class="form-control  @error('telephone') is-invalid @enderror" id="ctelephone" placeholder="{{__('form.telephone')}} *" >
                        @error('telephone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="cemail" class="sr-only">{{__('form.email')}}</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="cemail" placeholder="{{__('form.email')}}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        
                    <div class="col-sm-12">
                        <label for="cprofession" class="sr-only">{{__('form.profession')}}</label>
                        <input type="text" name="profession" class="form-control @error('profession') is-invalid @enderror" id="cprofession" placeholder="{{__('form.profession')}}" >
                        @error('profession')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-sm-12">
                        <label for="centreprise" class="sr-only">{{__('form.entreprise')}}</label>
                        <input type="text" name="entreprise" class="form-control @error('entreprise') is-invalid @enderror" id="centreprise" placeholder="{{__('form.entreprise')}}">
                        @error('entreprise')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="haymacproduction.ma get ChackerAlpha">
                       @csrf
                        @honeypot
                </div>
        
                <label for="cmessage" class="sr-only">{{__('form.message')}}</label>
                <textarea name="message" class="form-control @error('message') is-invalid @enderror" cols="30" rows="4" id="cmessage"  placeholder="{{__('form.message')}} "></textarea>
                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                    <span>{{__('form.form_devie_button')}}</span>
                    <i class="icon-long-arrow-right"></i>
                </button>
            </form>
    
        </div>
    
        <a href="{{route('products')}}" class="btn btn-outline-dark-2 btn-block mb-3">
            <span>{{__('cart.cart_back_to_shop')}}</span><i class="icon-refresh"></i>
        </a>

    </aside>

