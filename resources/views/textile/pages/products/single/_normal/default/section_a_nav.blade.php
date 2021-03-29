            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('navbar.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('products')}}">{{__('navbar.shope')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$product->field('name')}}</li>
                    </ol>

                    <nav class="product-pager ml-auto" aria-label="Product">
                        <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                            <i class="icon-angle-left"></i>
                            <span>{{__('shop.shop_single_pagination_prev')}}</span>
                        </a>

                        <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                            <span>{{__('shop.shop_single_pagination_next')}}</span>
                            <i class="icon-angle-right"></i>
                        </a>
                    </nav>
                </div>
            </nav>