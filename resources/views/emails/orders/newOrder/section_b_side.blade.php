<aside class="col-lg-6">
    <div class="summary summary-cart">
        <h3 class="">{{__('form.form_devie_title')}}</h3>

        <form method="post" action="" class="contact-form mb-3">
            <div class="row">
                <div class="col-sm-6">
                    
                    <label for="cname" class="sr-only">Nom</label>
                    <input readonly type="text" value="{{$data->nom}}" class="form-control" id="cname">
                 
                </div>
    
                <div class="col-sm-6">
                    <label for="clname" class="sr-only">Prénom</label>
                    <input readonly type="text" value="{{$data->prenom}}" class="form-control" id="clname">
                 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="cadresse" class="sr-only">Adresse</label>
                    <input readonly type="text"  value="{{$data->adresse}}" class="form-control" id="cadresse" >
              
                </div>
    
                <div class="col-sm-6">
                    <label for="ctelephone" class="sr-only">Télephone</label>
                    <input readonly type="text" value="{{$data->telephone}}" class="form-control" id="ctelephone" >
                 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="cemail" class="sr-only">E-mail</label>
                    <input  readonly type="email" value="{{$data->email}}"  class="form-control" id="cemail">
                  
                </div>
    
                <div class="col-sm-6">
                    <label for="cprofession" class="sr-only">Profession</label>
                    <input readonly type="text" value="{{$data->profession}}"  class="form-control" id="cprofession">
                 
                </div>
                <div class="col-sm-12">
                    <label for="centreprise" class="sr-only">Entreprise</label>
                    <input readonly type="text" value="{{$data->entreprise}}"  class="form-control" id="centreprise">
                  
                </div>
            </div>
            <label for="cmessage" class="sr-only">Message</label>
            <textarea readonly  class="form-control" cols="30" rows="4" id="cmessage" >
                {{$data->message}}
            </textarea>
        </form>

    </div>

    <a href="{{route('home')}}" class="btn btn-outline-dark-2 btn-block mb-3">
        <span>www.mailletex.ma</span>
    </a>

</aside>