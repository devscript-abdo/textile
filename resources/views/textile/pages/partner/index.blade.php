@extends('textile.layouts.app')

@section('content')
   @include('textile.pages.partner.section_a_nav')
   @include('textile.pages.partner.section_b_top')
   <div class="page-content pb-0">
    <div class="container">
        <div class="row">
            @include('textile.pages.partner.section_c_info')
            @include('textile.pages.partner.section_d_form')
        </div>
        <hr class="mt-4 mb-5">
        {{--@include('textile.pages.partner.section_e_stores')--}}
    </div>
   </div>
@endsection