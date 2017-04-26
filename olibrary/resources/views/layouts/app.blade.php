@extends('commons.default')

@section('title', 'Acceuil')

@section('styles')
  <!-- import default head -->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
@endsection

@section('sidebar')
  <!-- sidebar -->
  <nav id="sidebar" class="indigo darken-1">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">OLibrary</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Profil</a></li>
        <li><a href="#">Emprunts</a></li>
        <li><a href="#">Catalogue</a></li>
      </ul>
    </div>
  </nav>
@endsection

@section('sidenav')
  <!-- sidenav -->
  <div id="sidenav" class="indigo lighten-3">
    <div id="sidenav-wrapper" class="container">
      Sidenav
    </div>
  </div>
@endsection

@section('footer')
  <!-- default footer section -->
  <footer class="page-footer indigo darken-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Projet OLibrary</h5>
          <p class="grey-text text-lighten-4">Projet réalisée dans le cadre de la première année d'étude à l'école Ingésup Bordeaux</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Equipe</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Antoine Chiny</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Paul-Michel Garzaro</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Thomas Bichon</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Arnaud Lafon</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2017 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>
@endsection

@section('scripts')
  <!-- Import scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
@endsection
