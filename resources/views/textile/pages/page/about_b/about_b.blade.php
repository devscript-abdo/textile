@extends('textile.layouts.app')
@section('content')

    @include('textile.pages.about.about_b.section_a_top') 
    @include('textile.pages.about.about_b.section_b_nav')

    <div class="page-content pb-3">
        @include('textile.pages.about.about_b.section_c_who')
        @include('textile.pages.about.about_b.section_d_happy')
        @include('textile.pages.about.about_b.section_e_team')
        @include('textile.pages.about.about_b.section_f_client')
    </div>


@endsection