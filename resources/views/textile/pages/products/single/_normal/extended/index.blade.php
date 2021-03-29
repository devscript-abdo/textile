@extends('textile.layouts.app')

@section('content')
  @include('textile.pages.products.single.extended.section_a_nav')
    <div class="page-content">
        @include('textile.pages.products.single.extended.section_b_detail_top')
        @include('textile.pages.products.single.extended.section_c_detail_taps')
        @include('textile.pages.products.single.extended.section_d_you_like')
    </div>
@endsection