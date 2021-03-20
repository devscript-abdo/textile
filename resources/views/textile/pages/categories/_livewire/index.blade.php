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

    let categories = document.getElementsByClassName('categoriesChecker');
    //console.log(categories);
    for (let item of categories) {
        item.addEventListener('change', function() {
          if (item.checked) {
            //console.log("Checkbox is checked..");
          } else {
            Livewire.emit('reRender')
           // console.log("Checkbox is not checked..");
          }
        });
     }
</script>
@endsection