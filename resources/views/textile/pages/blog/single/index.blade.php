@extends('textile.layouts.app')

@section('content')
@include('textile.pages.blog.single.section_a_top')
    <div class="page-content">
        <div class="container">
            <div class="row">
                @include('textile.pages.blog.single.section_b_content')
                {{--@include('textile.pages.blog.single.section_c_sidebar')--}}
            </div>
        </div>
    </div>
@endsection