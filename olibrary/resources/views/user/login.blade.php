@extends('commons.default')

@section('title', 'Connexion')

@section('styles')
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
@endsection

@section('content')
  <div class=container>
    <div class="row">
      <form class="col s12">
        <div class="row">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="row">
          <input id="password" type="password" class="validate">
          <label for="password">Mot de passe</label>
        </div>
        <input type="submit" value="Connexion">
      </form>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
@endsection
