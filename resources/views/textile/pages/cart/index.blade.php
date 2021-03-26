@extends('textile.layouts.app')

@section('content')

   @include('textile.pages.cart.section_a_top')
   <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    {{--@include('textile.pages.cart.section_b_products')--}}
                    @include('textile.pages.cart.section_b_products_livewire')
                    
                </div>
            </div>
        </div>
   </div>
@endsection


@section('categoriesJs')
<script>
  function getProductId(){
     return document.getElementById('productauto').value;
  }
  console.log(getProductId());
</script>
@endsection
