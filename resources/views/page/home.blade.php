@extends('master.layout')

@section('container')



<!-- Component One // Two faces -->

  <div class="container-fluid">
    <div class="row">
        <!-- first pannel to register your request -->
        <div class="col-md-6 ">
            <!-- design text -->
            <div class="h-text-pannel ">
               <h1 class="text-color">Trouvez votre</h1>
               <h1 class="text-color"> maison de rêve</h1>
            </div>
            <!-- form -->
            <div class="form-pannel">
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Nom complet*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Adresse e-mail*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Numéro de téléphone*">
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label choice" for="inlineRadio1">Abidjan  </label>
                            <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label choice" for="inlineRadio2">Autres</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          </div>
                    </div>
                    <div class="form-group" id="OthersCity">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                        <option >Choisir la ville de la maison souhaitée*</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    </div>
                    <div class="form-group" id="Commune">
                        <input type="text" class="form-control form-control-lg" placeholder="Nom de la commune*">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3" placeholder="Laissez un peu plus de détails...."></textarea>
                    </div> <br>
                    <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;">Envoyez</button>
                </form>
            </div>
        </div>
        <!-- second pannel to image -->
        <div class="col-md-6 ">
            <img src="img/4251607.jpg" width="100%" alt="">
        </div>
    </div>
</div>

<!-- // end of component one -->

<!-- Component two -->

<div class="container-fluid " style="background-color:rgba(247, 244, 244, 0.596)">
    <!-- title of parts -->
    <div class="title-pannel-2" align="center">
        <h1>
            Pourquoi nous choisir ?
        </h1>
    </div>
    <!-- three pannel-->
    <div class="container ">
        <div class="row">
            <div class="col-md-4 area" align="center">
                <i class="large material-icons">access_time</i>
                <p><strong>Ultra Rapide</strong></p>
                <span>
                    Votre demande sera reçu et traiter par notre équipe, dans des délais très abordables !
                </span>
            </div>
            <div class="col-md-4 area bd-middle" align="center">
                <i class="large material-icons">insert_emoticon</i>
                <p><strong>100% Satisfait</strong></p>
                <span>
                    Nous sommes a votre écoute, H24, pour vous fournir les logements dont vous rêvez !
                </span>
            </div>
            <div class="col-md-4 area" align="center">
                <i class="large material-icons">money_off</i>
                <p><strong>Moins chère</strong></p>
                <span>
                    Nos services, qui vous aideront à trouver votre chez vous, sont à des prix très abordables !
                </span>
            </div>
        </div>
    </div>
    <br><br><br>
</div>

<!-- // end of component two -->

<!-- Component Intercept -->

<div class="container-fluid" >
    <div class="container">
        <div class="title-props" align="center">
            <h1 class="text-color">Témoignage des clients</h1>
        </div>
        <div class="row" style="padding: 4rem;">
            <div class="container client">
                <div class="row">
                    <div class="col-md-4" align="center">
                        <img src="{{ asset('img/human.png') }}" width="80%" height="200" alt="">
                    </div>
                    <div class="col-md-8 high">
                        <span class="appreciate">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem tempora alias reiciendis officiis, et maiores necessitatibus fuga accusantium ea fugit vero molestiae numquam molestias. Aut illum dolor possimus quod doloremque!
                        </span>
                        <p class="client_name">
                            Nom du client <br> <span class="emploi">Emploi du client</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- // end of component intercept -->


<!-- Component Three -->

<div class="container-fluid esp" style="background-color:rgba(247, 244, 244, 0.596)">
    <div class="container " align="center" style="padding:4rem">
        <h1>Qui sommes-nous ?</h1>
        <br>
        <span>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero architecto nobis nihil quam cupiditate iure. Fugiat, totam, repellendus rem eos quibusdam, nam ea in expedita quis autem eaque impedit incidunt?
        </span>
        <br><br>
        <button type="submit" class="btn btn-warning btn-lg" style="width:50%;">Voir Plus</button>
    </div>
    <br><br><br>
</div>

<!-- // end of component three -->


@endsection
