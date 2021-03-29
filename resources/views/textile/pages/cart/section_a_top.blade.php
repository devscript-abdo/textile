<div class="page-header text-center" style="background-image: url('{{asset('assets/images/page-header-bg.jpg')}}')">
    <div class="container">
        <h1 class="page-title">{{__('cart.cart_title')}}</span></h1>
    </div>
</div>
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('navbar.home')}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('products')}}">{{__('navbar.shope')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{__('cart.cart_title')}}</li>
        </ol>
    </div>
</nav>