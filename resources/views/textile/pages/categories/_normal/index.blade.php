@extends('textile.layouts.app')

@section('content')

   @include('textile.pages.categories._normal.section_a_top')
   @include('textile.pages.categories._normal.section_b_nav')
   <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    @include('textile.pages.categories._normal.sections.section_a_toolbox')
               
                    @include('textile.pages.categories._normal.sections.section_b_products')
                    
                    @include('textile.pages.categories._normal.sections.section_c_pagination')
                </div>
                <aside class="col-lg-3 order-lg-first">
                    <div class="sidebar sidebar-shop">
                        @include('textile.pages.categories._normal.aside.section_a_filters')
                        @include('textile.pages.categories._normal.aside.section_b_categories')
                        {{--@include('textile.pages.categories._normal.aside.section_c_size')--}}
                        @include('textile.pages.categories._normal.aside.section_d_color')
                        {{--@include('textile.pages.categories._normal.aside.section_e_brand')--}}
                        {{--@include('textile.pages.categories._normal.aside.section_f_price')--}}
                    </div>
                </aside>
            </div>
        </div>
   </div>

@endsection

@section('categoriesJs')

<script>

    function sendUrl(value){

        let filter = value;
        window.location = `{{route('products')}}?filter[GetCategory]=${value}`;
    }

</script>

@endsection