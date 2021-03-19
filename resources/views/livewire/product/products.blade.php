<div>
    <div class="row">

        <div class="col-lg-9">
            @include('textile.pages.categories._livewire.sections.section_a_toolbox')
       
            @include('textile.pages.categories._livewire.sections.section_b_products_loop')

            @include('textile.pages.categories._livewire.sections.section_c_pagination')
            
        </div>
        <aside class="col-lg-3 order-lg-first">
            <div class="sidebar sidebar-shop">
                @include('textile.pages.categories._livewire.aside.section_a_filters')
                @include('textile.pages.categories._livewire.aside.section_b_categories')
                @include('textile.pages.categories._livewire.aside.section_c_size')
                @include('textile.pages.categories._livewire.aside.section_d_color')
                @include('textile.pages.categories._livewire.aside.section_e_brand')
                @include('textile.pages.categories._livewire.aside.section_f_price')
            </div>
        </aside>
    </div>
</div>
