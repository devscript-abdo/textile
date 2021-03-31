
    <div class="container mt-5 mb-5">

        <div class="page-header page-header text-center"
    
             @if(setting('pages.background_cover'))
             style="background-image: url('{{Voyager::image(setting('pages.background_cover'))}}')"
            @endif
        >
    
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="count-container text-center">
                    <div class="count-wrapper text-black">
                        <span class="count" data-from="0" data-to="40" data-speed="3000" data-refresh-interval="50">0</span>k+
                    </div><!-- End .count-wrapper -->
                    <h3 class="count-title text-black">Happy Customer</h3><!-- End .count-title -->
                </div><!-- End .count-container -->
            </div><!-- End .col-6 col-md-3 -->

            <div class="col-6 col-md-3">
                <div class="count-container text-center">
                    <div class="count-wrapper text-black">
                        <span class="count" data-from="0" data-to="20" data-speed="3000" data-refresh-interval="50">0</span>+
                    </div><!-- End .count-wrapper -->
                    <h3 class="count-title text-black">Years in Business</h3><!-- End .count-title -->
                </div><!-- End .count-container -->
            </div><!-- End .col-6 col-md-3 -->

            <div class="col-6 col-md-3">
                <div class="count-container text-center">
                    <div class="count-wrapper text-black">
                        <span class="count" data-from="0" data-to="95" data-speed="3000" data-refresh-interval="50">0</span>%
                    </div><!-- End .count-wrapper -->
                    <h3 class="count-title text-black">Return Clients</h3><!-- End .count-title -->
                </div><!-- End .count-container -->
            </div><!-- End .col-6 col-md-3 -->

            <div class="col-6 col-md-3">
                <div class="count-container text-center">
                    <div class="count-wrapper text-black">
                        <span class="count" data-from="0" data-to="15" data-speed="3000" data-refresh-interval="50">0</span>
                    </div><!-- End .count-wrapper -->
                    <h3 class="count-title text-black">Awards Won</h3><!-- End .count-title -->
                </div><!-- End .count-container -->
            </div><!-- End .col-6 col-md-3 -->
        </div><!-- End .row -->
        </div>
    
    </div>
