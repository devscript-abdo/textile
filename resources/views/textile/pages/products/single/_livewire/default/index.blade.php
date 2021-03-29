@extends('textile.layouts.app')

@section('content')
  @include('textile.pages.products.single._livewire.default.section_a_nav')
    <div class="page-content">
        <div class="container">

          <livewire:product.single :product="$product" :products="$products" />
    
        </div>
    </div>
@endsection
@section('categoriesJs')
<script>
  
    Livewire.on('logColor', colos => {
     // alert('A post was added with the id of: ' + colos);
    })


    let colors = document.getElementsByClassName('colorsMyChecker');
    console.log(colors);
    for (let item of colors) {
        item.addEventListener('click', function() {
          console.log('Oui item');
          item.classList.add("selected");

          window.livewire.emit('addColor',item.dataset.getcolor);
        });
     }
</script>
@endsection