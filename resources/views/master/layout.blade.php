<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immbolier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent head-bar">
            <a class="navbar-brand" href="/" style="color: #051A28;">Le Démarcheur</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
              <ul class="navbar-nav mr-auto link-head">
                <li class="nav-item active">
                  <a class="nav-link bg-warning text-light" href="/">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="effect" href="/offer">Offres</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="effect" href="/about">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="effect" href="/contact">Contactez-nous</a>
                  </li>
              </ul>
            </div>
          </nav>

    </div>
    <hr>
    <!--// nav bar ending -->


   @yield('container')


    <!-- Component Four -->

  <footer>
    <div class="card text-center">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="card-title text-color">LE DEMARCHEUR</h2>
                    <p class="card-text">Faites-nous confiance et rejoingnez-nous !</p>
                </div>
                <div class="col-sm-6">
                    <h5 class="card-title">Rejoingnez-nous sur :</h5>
                    <ul style="list-style: none;">
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            Copyright © 2020 All Right Reserve -  Designed By <a href="">M-Z</a>
        </div>
      </div>
</footer>



   <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
