@extends('textile.layouts.app')

@section('content')
    @include('textile.pages.products.single.sidebar.section_a_nav')

    <div class="page-content">
        
         <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    @include('textile.pages.products.single.sidebar.section_b_detail_top')
                    @include('textile.pages.products.single.sidebar.section_c_detail_taps')
                    <h2 class="title text-center mb-4">You May Also Like</h2>
                    @include('textile.pages.products.single.sidebar.section_d_you_like')
                </div>
                <aside class="col-lg-3">
                    @include('textile.pages.products.single.sidebar.section_e_sidebar')
                </aside>
              
            </div>
        </div>
    </div>

@endsection

@section('singleProductJs')

@endsection