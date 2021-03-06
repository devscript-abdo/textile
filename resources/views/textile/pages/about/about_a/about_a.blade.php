@extends('textile.layouts.app')
@section('content')
    @include('textile.pages.about.about_a.section_a_nav')
    @include('textile.pages.about.about_a.section_b_top')
    <div class="page-content pb-0">
        {{--@include('textile.pages.about.about_a.section_c_vision')--}}
        @include('textile.pages.about.about_a.section_d_who')
        @include('textile.pages.about.about_a.section_b_values')
         
        {{--@include('textile.pages.about.about_a.section_g_numbers')
        @include('textile.pages.about.about_a.section_e_team_client')--}}
        @include('textile.pages.about.about_a.section_f_customer_say')
    </div>
@endsection

@section('singleCss')
<link rel="stylesheet" href="{{asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
@endsection