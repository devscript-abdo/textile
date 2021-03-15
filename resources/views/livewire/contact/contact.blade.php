<div>
    <form id="contact-form" method="post">
        @csrf
        @honeypot
        <div class="messages"></div>

        <div class="controls">

            <div class="form-group">
                <input id="form_name" type="text" name="name" wire:model.defer="fields.name" placeholder="Name"
                    required="required">
            </div>

            <div class="form-group">
                <input id="form_email" type="email" name="email" placeholder="Email"
                wire:model.defer="fields.email" 
                    required="required">
            </div>
            <div class="form-group">
                <input id="form_tele" type="text" name="tele" placeholder="tele"
                wire:model.defer="fields.tele" 
                    required="required">
            </div>
            <div class="form-group">
                <textarea id="form_message" name="message" placeholder="Message" rows="4"
                wire:model.defer="fields.message" 
                    required="required"></textarea>
            </div>

            <button type="submit" 
                class="btn-curve btn-lit"
                wire:click.prevent="submit()"
                onclick="this.disabled = true;this.setAttribute('style', 'background: #B3D6CB !important')"
            >
            <span>Envoyer</span>
        </button>
        </div>
    </form>
</div>
