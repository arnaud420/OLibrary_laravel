@extends('commons.default')

@section('title', 'Login')

@section('styles')
  <link rel="stylesheet" href="/css/auth.css">
@endsection

@section('content')
  <div id="login-form" class="auth-form container">
    <h2 class="auth-title">Connexion</h2>
    <div class="row">
      <form class="col s12 m8 offset-m2" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s12">
            <input id="login_email" type="email" class="validate" name="email" required>
            <label for="login_email">Adresse email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="login_password" type="password" class="validate" name="password" required>
            <label for="login_password">Mot de passe</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12 center-text">
            <button type="submit" class="btn btn-primary indigo darken-1">
              Login
            </button>
            <a class="btn btn-link indigo darken-1" href="{{ route('password.request') }}">
              Mot de passe oublié ?
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function(){
      $(".button-collapse").sideNav();
    });
  </script>
@endsection
