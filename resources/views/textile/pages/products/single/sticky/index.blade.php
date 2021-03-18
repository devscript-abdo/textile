@extends('textile.layouts.app')

@section('content')
    @include('textile.pages.products.single.sticky.section_a_nav')

    <div class="page-content">
        
         <div class="container">
            @include('textile.pages.products.single.sticky.section_b_detail_top')
            <hr class="mt-3 mb-5">
            <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
            @include('textile.pages.products.single.sticky.section_c_you_like')
        </div>
    </div>

@endsection

@section('singleProductJs')
<script src="{{asset('assets/js/jquery.sticky-kit.min.js')}}"></script>
@endsection