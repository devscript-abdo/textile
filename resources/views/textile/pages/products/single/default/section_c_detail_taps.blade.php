<div class="product-details-tab">
    <ul class="nav nav-pills justify-content-center" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
            <div class="product-desc-content">
              {!! $product->description !!}
            </div><!-- End .product-desc-content -->
        </div><!-- .End .tab-pane -->
      
        <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
            <div class="reviews">
                <h3>Reviews (2)</h3>
                <div class="review">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <h4><a href="#">Samanta J.</a></h4>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                            </div><!-- End .rating-container -->
                            <span class="review-date">6 days ago</span>
                        </div><!-- End .col -->
                        <div class="col">
                            <h4>Good, perfect size</h4>

                            <div class="review-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p>
                            </div><!-- End .review-content -->

                            <div class="review-action">
                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                            </div><!-- End .review-action -->
                        </div><!-- End .col-auto -->
                    </div><!-- End .row -->
                </div><!-- End .review -->

                <div class="review">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <h4><a href="#">John Doe</a></h4>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                            </div><!-- End .rating-container -->
                            <span class="review-date">5 days ago</span>
                        </div><!-- End .col -->
                        <div class="col">
                            <h4>Very good</h4>

                            <div class="review-content">
                                <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium iste amet. Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum repellendus, blanditiis perspiciatis beatae!</p>
                            </div><!-- End .review-content -->

                            <div class="review-action">
                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                            </div><!-- End .review-action -->
                        </div><!-- End .col-auto -->
                    </div><!-- End .row -->
                </div><!-- End .review -->
            </div><!-- End .reviews -->
        </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->
</div><!-- End .product-details-tab -->