@extends('master.layout')

@section('container')

     <!-- Component One -->

     <div class="container-fluid  banner">
        <h2>Contactez-nous </h2>
    </div>
    <hr>

    <!-- // end of component one -->

    <!-- Component Two -->

    <div class="container-fluid" style="padding: 2rem">
        <div class="container  ">
            <div class="row" >
                <div class="col-md-6 " >
                    <h2 style="padding: 2rem" class="text-color">Laissez-nous un message !</h2>
                    <form action="">
                        <div class="form-group">
                            <input type="text" placeholder="Nom et prénoms" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="E-mail" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Numéro de téléphone" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="" id="" placeholder="Votre message... " cols="75" rows="10"></textarea>
                        </div>
                        <button class="btn btn-warning">Envoyez</button>
                    </form>
                </div>
                <div class="col-md-6  about-case">
                    <img src="../img/4287306.jpg" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- // end of component two -->
    <br><br>
@endsection
