@extends('textile.layouts.app')

@section('content')

   @include('textile.pages.cart.section_a_top')
   <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                     @include('textile.pages.cart.section_b_products')
                    {{--@include('textile.pages.cart.section_b_products_livewire')--}}

                </div>
            </div>
        </div>
   </div>
@endsection



@section('singleCartJs')

    <script type="text/javascript">
      
        $(".deleteProductFromCart").click(function (e) {
            e.preventDefault()
            console.log('OoOoO');
           
            var ele = $(this);
            //console.log(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{route('cartDelete')}}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-prodid")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>

@endsection
