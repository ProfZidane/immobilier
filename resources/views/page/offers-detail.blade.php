@extends('master.layout')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <h6><span class="badge badge-dark">Appart</span> &nbsp; <span class="badge badge-warning">Location</span></h6>
                    </div>
                    <div class="col-md-6">
                        <span style="position:relative;bottom:5px;font-size:small">
                            20/02/2001 &nbsp; |
                        </span>
                        <i class="tiny material-icons" style="font-size: 20px;margin-left:1rem">remove_red_eye
                        </i>
                        <span style="position:relative;bottom:5px;font-size:small">
                            365
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">

            </div>
            <div class="col-md-2 ">
                <span class="text-warning">Le démarcheur</span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-10">
                <div class="">
                    <h2>Maison Duplex Luxueux à Louer</h2>
                </div>
            </div>
            <div class="col-md-2">
                <h4 class="text-warning">150 000 FCFA</h4>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="container">
            <!--<img src="{{ asset('img/maison3.jpg') }}" width="100%" alt="">-->
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('img/maison3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Devanture de la maison</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/maison3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/maison3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>


        <div class="row">

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12" style="padding: 2rem">
                        <h2 class="text-color">Description</h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid architecto, vel consequuntur reprehenderit mollitia laborum quisquam id placeat saepe soluta debitis dolorem assumenda provident repellat blanditiis autem, accusamus esse laudantium?Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora perspiciatis inventore debitis veniam id, laudantium iure dolores facilis delectus non porro. Illo consectetur quaerat expedita sapiente animi recusandae ea! Quos.
                    </div>

                    <div class="col-md-12" style="padding: 2rem">
                        <h2 class="text-color">Caractéristique</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <span>nombre de piece</span>
                            </div>
                            <div class="col-md-6">
                                <span>localisation</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span>metre carré</span>
                            </div>
                            <div class="col-md-6">
                                <span>typee de logement</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding: 2rem">

                    </div>
                </div>
            </div>

            <div class="col-md-4" style="padding: 1.7rem; margin-top:2rem;box-shadow:4px 4px 18px rgba(170, 170, 170, 0.849)">
                <h3 class="text-color">Passer commande !</h3>
                <form action="" class="high">
                    <div class="">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control " placeholder="Nom complet*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " placeholder="Adresse e-mail*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " placeholder="Numéro de téléphone*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " disabled value="Maison Duplex Luxueux à Louer">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control " id="exampleFormControlTextarea1" rows="3" placeholder="Laissez un peu plus de détails...."></textarea>
                            </div> <br>
                            <button type="submit" class="btn btn-warning" style="width: 100%;">Envoyez</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>

    </div>



<br><br><br><br><br>
@endsection
