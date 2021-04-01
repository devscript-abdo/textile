@extends('textile.layouts.app')

@section('content')
  @include('textile.pages.products.single._normal.default.section_a_nav')
    <div class="page-content">
        <div class="container">
         
            @include('textile.pages.products.single._normal.default.section_b_detail_top')
            @include('textile.pages.products.single._normal.default.section_c_detail_taps')
            <h2 class="title text-center mb-4">{{__('shop.shop_single_you_like')}}</h2>
            @include('textile.pages.products.single._normal.default.section_d_you_like')
        </div>
    </div>
@endsection

@section('livewireCss')

  @livewireStyles

@endsection

@section('livewireJs')

  @livewireScripts
  
@endsection



@section('singleCss')
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="{{asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
 <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
@endsection

@section('singleJs')
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

 <script>
   $(document).ready(function() {
      $('.singleProductsColors').select2();
  });
 </script>
@endsection