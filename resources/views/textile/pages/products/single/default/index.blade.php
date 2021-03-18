@extends('textile.layouts.app')

@section('content')
  @include('textile.pages.products.single.default.section_a_nav')
    <div class="page-content">
        <div class="container">
           @include('textile.pages.products.single.default.section_b_detail_top')
           @include('textile.pages.products.single.default.section_c_detail_taps')
           <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
           @include('textile.pages.products.single.default.section_d_you_like')
        </div>
    </div>
@endsection