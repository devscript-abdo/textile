@extends('textile.layouts.app')

@section('content')

   @include('textile.pages.contact.section_a_top')
   @include('textile.pages.contact.section_b_nav')
   
   <div class="page-content">
    <div id="map" class="mb-5"></div><!-- End #map -->
     <div class="container">
        @include('textile.pages.contact.section_c_info')
        @include('textile.pages.contact.section_d_form')
     </div>
   </div>

@endsection