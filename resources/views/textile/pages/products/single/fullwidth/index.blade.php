@extends('textile.layouts.app')

@section('content')

    @include('textile.pages.products.single.fullwidth.section_a_nav')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                @include('textile.pages.products.single.fullwidth.section_b_detail_top')
                @include('textile.pages.products.single.fullwidth.section_c_sidebar')
            </div>
        </div>
    </div>
@endsection