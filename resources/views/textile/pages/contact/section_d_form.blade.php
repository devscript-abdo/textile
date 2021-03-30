<div class="touch-container row justify-content-center">
    <div class="col-md-9 col-lg-7">
        {{--<div class="text-center">
        <h2 class="title mb-1">Get In Touch</h2><!-- End .title mb-2 -->
        <p class="lead text-primary">
            We collaborate with ambitious brands and people; we’d love to build something great together.
        </p><!-- End .lead text-primary -->
        <p class="mb-3">Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
        </div>--}}

        <form action="{{route('contactPost')}}" method="post" class="contact-form mb-3">
            <div class="row">
                @csrf
                @honeypot
                <div class="col-sm-6">
                    <label for="cname" class="sr-only">{{__('form.form_partner_name')}}</label>
                    <input type="text" name="nom" class="form-control" id="cname" placeholder="{{__('form.form_partner_name')}} *" required>
                </div>
    
                <div class="col-sm-6">
                    <label for="cemail" class="sr-only">{{__('form.form_partner_email')}}</label>
                    <input type="email" name="email" class="form-control" id="cemail" placeholder="{{__('form.form_partner_email')}} *" required>
                </div>
            </div>
    
            <div class="row">
                <div class="col-sm-12">
                    <label for="cphone" class="sr-only">{{__('form.form_partner_phone')}}</label>
                    <input type="tel" name="telephone" class="form-control" id="cphone" placeholder="{{__('form.form_partner_phone')}}">
                </div>
    
                {{--<div class="col-sm-6">
                    <label for="csubject" class="sr-only">{{__('form.form_partner_subject')}}</label>
                    <input type="text" name="subject" class="form-control" id="csubject" placeholder="{{__('form.form_partner_subject')}}">
                </div>--}}
            </div>
    
            <label for="cmessage" class="sr-only">{{__('form.form_partner_message')}}</label>
            <textarea name="message" class="form-control" cols="30" rows="4" id="cmessage"  placeholder="{{__('form.form_partner_message')}} *">
            </textarea>
    
            <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                <span>{{__('form.form_partner_button')}}</span>
                <i class="icon-long-arrow-right"></i>
            </button>
        </form>
    </div><!-- End .col-md-9 col-lg-7 -->
</div><!-- End .row -->