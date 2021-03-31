@extends('textile.layouts.app')

@section('content')

   {{--@include('textile.pages.home.section_a_slider')--}}
   @include('textile.pages.home.section_a_slider_tow')
   @include('textile.pages.home.section_b_about')
   {{--@include('textile.pages.home.section_b_display_a')--}}
  @include('textile.pages.home.section_b_display_b')
   {{-- @include('textile.pages.home.section_b_category_mansory')--}}
   {{--@include('textile.pages.home.section_c_vedio_three')--}}
   @include('textile.pages.home.section_d_products_carousel')
   {{--@include('textile.pages.home.section_d_display_a')--}}
   {{--@include('textile.pages.home.section_d_display_b')--}}
   @include('textile.pages.home.section_e_social_shop')
   @include('textile.pages.home.section_f_blog')
   
@endsection

@section('homePageCss')
  <link rel="stylesheet" href="{{asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/demos/demo-15.css')}}">
@endsection