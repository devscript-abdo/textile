@extends('textile.layouts.app')

@section('content')

    <div class="page-content">
       @include('textile.pages.products.single.gallery.section_a_detail_top')
       @include('textile.pages.products.single.gallery.section_b_detail_taps')
       @include('textile.pages.products.single.gallery.section_c_you_like')
    </div>
@endsection