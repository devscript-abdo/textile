<div>
    <form>
        <div class="form-group custom-font">
            @csrf
            @honeypot
            <input type="email" name="email" wire:model.defer="email" placeholder="E-mail"
             class="form-control @error('email') is-invalid @enderror"
             required>
             @error('email')
        
                <span class="invalid-feedback" role="alert" >
                    <strong style="color:white !important">{{ $message }}</strong>
                </span>
            @enderror
            <button 
                class="cursor-pointer"
                wire:click.prevent="submit()"
                onclick="this.disabled = true;this.setAttribute('style', 'background: #B3D6CB !important')"
            >
                Subscribe
            </button>

        </div>

    </form>
</div>
