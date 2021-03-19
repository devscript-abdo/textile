@extends('textile.layouts.app')

@section('content')

   @include('textile.pages.categories._livewire.section_a_top')
   @include('textile.pages.categories._livewire.section_b_nav')
   <div class="page-content">
        <div class="container">

            <livewire:product.products />

        </div>
   </div>

@endsection

@section('categoriesJs')
<script>
    Livewire.on('filterCategory', () => {
      //  alert('A post was added with the id of: ');
    })
</script>
@endsection