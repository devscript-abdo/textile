<div>
    <form class="contact-form mb-3">
        <div class="row">
            @csrf
            @honeypot
            <div class="col-sm-6">
                <label for="cname" class="sr-only">{{__('form.form_partner_name')}}</label>
                <input type="text" wire:model.defer="fields.nom" name="nom" class="form-control" id="cname" placeholder="{{__('form.form_partner_name')}} *" required>
            </div>

            <div class="col-sm-6">
                <label for="cemail" class="sr-only">{{__('form.form_partner_email')}}</label>
                <input type="email" wire:model.defer="fields.email" name="email" class="form-control" id="cemail" placeholder="{{__('form.form_partner_email')}} *" required>
            </div>
        </div>

        <label for="cmessage" class="sr-only">{{__('form.form_partner_message')}}</label>
        <textarea wire:model.defer="fields.content" name="content" class="form-control" cols="30" rows="4" id="cmessage"  placeholder="{{__('form.form_partner_message')}} *" required>
        </textarea>

        <button wire:click.prevent="submit()" class="btn btn-outline-primary-2 btn-minwidth-sm">
            <span>envoyer</span>
            <i class="icon-long-arrow-right"></i>
        </button>
    </form>
</div>
