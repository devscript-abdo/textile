<div class="product-details-tab">
    <ul class="nav nav-pills justify-content-center" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">{{__('shop.shop_single_description')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">{{__('shop.shop_reviews')}} (2)</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
            <div class="product-desc-content">
              {!! $product->description !!}
            </div>
        </div>
      
        <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
            <div class="reviews">
                <h3>Reviews ({{count($product->reviews)}})</h3>
        
                @foreach($product->reviews as $review)
                    <div class="review">
                        <div class="row no-gutters">
                            <div class="col-auto">
                                <h4><a href="#">{{$review->name}}</a></h4>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                    </div>
                                </div>
                                {{--<span class="review-date">5 days ago</span>--}}
                            </div><!-- End .col -->
                            <div class="col">
                                {{--<h4>Very good</h4>--}}

                                <div class="review-content">
                                    <p> {{$review->content}}</p>
                                </div>

                                {{--<div class="review-action">
                                    <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                    <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                @endforeach

                <livewire:review.add-review :product-id="$product->id"/> 
            </div>
        </div>
    </div>
</div>