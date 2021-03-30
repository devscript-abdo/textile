<div class="row mt-5">
    <div class="col-md-4">
        <div class="contact-box text-center">
            <h3>{{__('contact.address')}}</h3>
            <address>
                {!!setting('contact.contact_address')!!}
            </address>
        </div><!-- End .contact-box -->
    </div><!-- End .col-md-4 -->

    <div class="col-md-4">
        <div class="contact-box text-center">
            <h3>{{__('contact.address_message')}}</h3>

            <div><a href="mailto:#">{{setting('contact.contact_email')}}</a></div>
            <div><a href="tel:#">{{setting('contact.contact_tel')}}</a></div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="contact-box text-center">
            <h3>{{__('home.shop_social')}}</h3>
            <div class="social-icons social-icons-color justify-content-center">
                <a href="{{setting('social.facebook')}}" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                <a href="{{setting('social.twitter')}}" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                <a href="{{setting('social.instagram')}}" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                <a href="{{setting('social.youtube')}}" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                {{--<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>--}}
            </div>
        </div>
    </div>
</div>
<hr class="mt-3 mb-5 mt-md-1">