@extends('commons.default')

@section('title', 'Inscription')

@section('styles')
  <link rel="stylesheet" href="/css/auth.css">
@endsection

@section('content')
  <div id="register-form" class="auth-form container">
    <h2 class="auth-title">Inscription</h2>
    <div class="row">
      <form class="col s12 m8 offset-m2" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s6">
            <input id="register_firstname" type="text" class="validate" name="first_name" required>
            <label for="register_firstname">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="register_lastname" type="text" class="validate" name="last_name" required>
            <label for="register_lastname">Last Name</label>
          </div>
        </div>
        <div class="row">
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="register_email" type="email" class="validate" name="email" required>
            <label for="register_email">Adresse email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="register_password" type="password" class="validate" name="password" required>
            <label for="register_password">Mot de passe</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="register_comfirm_password" type="password" class="validate" name="password_confirmation" required>
            <label for="register_comfirm_password">Comfirmer Mot de passe</label>
          </div>
        </div>
        <div class="row">
          <div class="col s8 offset-s3 center-text">
            <button type="submit" class="btn btn-primary indigo darken-1">
              Inscription
            </button>
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
