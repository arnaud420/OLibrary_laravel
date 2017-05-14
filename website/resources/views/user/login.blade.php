@extends('commons.default')

@section('title', 'Connexion')

@section('content')
  <div class=container>
    <div class="row">
      <form class="col s12" method="POST">
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