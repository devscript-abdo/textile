@extends('emails.orders.layout')

@section('contentMail')

   @include('emails.orders.newOrder.section_a_a_top')

   <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">

                     @include('emails.orders.newOrder.section_a_content')

                     @include('emails.orders.newOrder.section_b_side')
                    
                </div>
            </div>
        </div>
   </div>
   
@endsection