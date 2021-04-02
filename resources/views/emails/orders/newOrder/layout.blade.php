<!DOCTYPE html>
<html lang="fr">
    <head>

        <link rel="stylesheet" href="https://static-files.mailletex.ma/assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://static-files.mailletex.ma/assets/css/style.css">

    </head>

    <body>
        
        <div class="page-wrapper">
        
            <main class="main">

                {{--@yield('contentMail')--}}

                <div class="page-header text-center" style="background-image: url('{{asset('assets/images/page-header-bg.jpg')}}')">
                    <div class="container">
                        <h1 class="page-title">nouvelle demande de devis</span></h1>
                    </div>
                </div>
            
                <div class="page-content">
                    <div class="cart">
                        <div class="container">
                            <div class="row">
            
                                {{--@include('emails.orders.newOrder.section_a_content')--}}
                                <div class="col-lg-12">
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
                                                            <a href="{{$product['product']->url}}" target="_blank">
                                                                <img src="{{$product['product']->image}}" alt="{{$product->name}}">
                                                            </a>
                                                        </figure>
            
                                                        <h3 class="product-title">
                                                            <a href="{{$product['product']->url}}" target="_blank">{{$product->name}}</a>
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
            
                                {{--@include('emails.orders.newOrder.section_b_side')--}}
            
                                <aside class="col-lg-12">
                                    <div class="summary summary-cart">
                                        <h3 class="">Informations </h3>
            
                                        <form method="post" action="" class="contact-form mb-3">
                                            <div class="row">
                                                <div class="col-sm-12">
            
                                                    <label for="cname" class="sr-only">Nom</label>
                                                    <input readonly type="text" value="Nom: {{$data->nom}}" class="form-control" id="cname">
            
                                                </div>
            
                                                <div class="col-sm-12">
                                                    <label for="clname" class="sr-only">Prénom</label>
                                                    <input readonly type="text" value="Prénom: {{$data->prenom}}" class="form-control" id="clname">
            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="cadresse" class="sr-only">Adresse</label>
                                                    <input readonly type="text"  value="Adresse: {{$data->adresse}}" class="form-control" id="cadresse" >
                                                </div>
            
                                                <div class="col-sm-12">
                                                    <label for="ctelephone" class="sr-only">Télephone</label>
                                                    <input readonly type="text" value="Télephone: {{$data->telephone}}" class="form-control" id="ctelephone" style="color: red; font-weight:bold" >
            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="cemail" class="sr-only">E-mail</label>
                                                    <input  readonly type="email" value="E-mail: {{$data->email}}"  class="form-control" id="cemail" style="color: red; font-weight:bold">
            
                                                </div>
            
                                                <div class="col-sm-12">
                                                    <label for="cprofession" class="sr-only">Profession</label>
                                                    <input readonly type="text" value="Profession: {{$data->profession}}"  class="form-control" id="cprofession">
            
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="centreprise" class="sr-only">Entreprise</label>
                                                    <input readonly type="text" value="Entreprise: {{$data->entreprise}}"  class="form-control" id="centreprise">
            
                                                </div>
                                            </div>
                                            <label for="cmessage" class="sr-only">Message</label>
                                            <textarea readonly  class="form-control" cols="30" rows="4" id="cmessage" >
                                                {{$data->message}}
                                            </textarea>
                                        </form>
            
                                    </div>
            
                                    <a href="{{route('home')}}" class="btn btn-outline-dark-2 btn-block mb-3">
                                        <span>www.mailletex.ma</span>
                                    </a>
            
                                </aside>
            
                            </div>
                        </div>
                    </div>
                </div>

            </main>

        </div>


        <!-------------------------Haymacproduction.ma-------------------------------->
    </body>

</html>