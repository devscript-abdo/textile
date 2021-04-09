<div class="col-lg-6 mt-5">
    <h2 class="title mb-1">{{__('form.form_partner_title')}}</h2><!-- End .title mb-2 -->
    <p class="mb-2">{{__('form.form_partner_title_description')}}</p>

    <form action="{{route('partnerPost')}}" method="post" class="contact-form mb-3">
        <div class="row">
            @csrf
            @honeypot

            <div class="col-sm-12">
                <label for="cname" class="sr-only">{{__('form.form_partner_name')}}</label>
                <input type="text" name="nom" class="form-control" id="cname" placeholder="{{__('form.form_partner_name')}} *" required>
            </div>
            <div class="col-sm-12">
                <label for="cname" class="sr-only">{{__('form.form_partner_profession')}}</label>
                <input type="text" name="profession" class="form-control" id="cname" placeholder="{{__('form.form_partner_profession')}} *" required>
            </div>

            <div class="col-sm-12">
                <label for="cphone" class="sr-only">{{__('form.form_partner_phone')}}</label>
                <input type="tel" name="telephone" class="form-control" id="cphone" placeholder="{{__('form.form_partner_phone')}}">
            </div>

            <div class="col-sm-12">
                <label for="cville" class="sr-only">{{__('form.form_partner_ville')}}</label>
                <input type="text" name="ville" class="form-control" id="cville" placeholder="{{__('form.form_partner_ville')}}">
            </div>

        </div>

        {{--<div class="row">

            <div class="col-sm-6">
                <label for="cemail" class="sr-only">{{__('form.form_partner_email')}}</label>
                <input type="email" name="email" class="form-control" id="cemail" placeholder="{{__('form.form_partner_email')}} *" required>
            </div>
        </div>--}}

        <label for="cmessage" class="sr-only">{{__('form.form_partner_message')}}</label>
        <textarea name="message" class="form-control" cols="30" rows="4" id="cmessage">
        {{__('form.form_partner_message')}}
        </textarea>

        <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
            <span>{{__('form.form_partner_button')}}</span>
            <i class="icon-long-arrow-right"></i>
        </button>
    </form>
</div>