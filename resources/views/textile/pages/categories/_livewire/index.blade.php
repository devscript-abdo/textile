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
          //  window.scrollTo(0, 0);
          } else {
            Livewire.emit('reRender')
           // console.log("Checkbox is not checked..");
          }
        });
     }

     let types = document.getElementsByClassName('typeChecker');
    //console.log(categories);
    for (let item of types) {
        item.addEventListener('click', function() {
          if (item.checked) {
          //  window.scrollTo(0, 0);
          } else {
            Livewire.emit('reRender')
           // console.log("Checkbox is not checked..");
          }
        });
    }

     let colors = document.getElementsByClassName('colorsChecker');
    //console.log(categories);
    for (let item of colors) {
        item.addEventListener('click', function() {
          item.classList.add("selected");
          window.livewire.emit('filterColor',item.dataset.getcolor);
        });
     }
</script>
@endsection

@section('livewireCss')

  @livewireStyles

@endsection

@section('livewireJs')

  @livewireScripts
  
@endsection