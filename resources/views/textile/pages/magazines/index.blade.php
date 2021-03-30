@extends('textile.layouts.app')

@section('content')


    @include('textile.pages.magazines.section_b_nav')
    @include('textile.pages.magazines.section_a_top')

    <div class="page-content pb-0">
        <div class="container">
            {{--<div class="row">

            </div>--}}
            <hr class="mt-4 mb-5">
            @include('textile.pages.magazines.section_e_stores')
        </div>
    </div>
@endsection
