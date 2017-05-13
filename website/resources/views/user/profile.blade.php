@extends('commons.default')

@section('title', 'Profile')

@section('styles')
  <link rel="stylesheet" href="/css/profile.css">
  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
@endsection

@section('content')
  <div class="container" id="content-wrapper">
    <h1 class="center">Profile</h1>

    <div id="list-info-wrapper">
      <div id="list-info" class="list">
        <div class="list-item row">
          <div class="col s12 m3">
            Prénom
          </div>
          <div class="info-item col s12 m3">
            {{ $user->first_name }}
          </div>
          <div class="col s12 m3">
            Nom
          </div>
          <div class="info-item col s12 m3 right">
            {{ $user->last_name }}
          </div>
        </div>

        <div class="list-item row">
          <div class="col s12 m6">
            Email
          </div>
          <div class="info-item col s12 m6 right">
            {{ $user->email }}
          </div>
        </div>
        <div class="list-item row">
          <div class="col s12 m6">
            Téléphone
          </div>
          <div class="info-item col s12 m6 right">
            {{ $user->phone }}
          </div>
        </div>

        <div class="list-item row">
          <div class="col s12 m3">
            Adresse
          </div>
          <div class="info-item col s12 m9 right">
            {{ $user->address }}
          </div>
        </div>
        <div class="list-item row">
          <div class="col s12 m6">
            Code Postale.Ville
          </div>
          <div class="info-item col s12 m6 right">
            {{ $user->postal_code }}.{{ $user->city }}
          </div>
        </div>
      </div>
    </div>

    <div class="row center">
      <a class="waves-effect waves-light btn-large red" href="{{route('user.edit', compact('user'))}}">Modifier le profil</a>
    </div>
  </div>
@endsection

