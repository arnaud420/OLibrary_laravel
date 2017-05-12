@extends('commons.default')

@section('title', 'Profile')

@section('content')
  <div class="container" id="content-wrapper">
    <h1 class="center">Profile</h1>

    <div class="row">
      <div class="col s12">
        <img src="{{$user->picture_path}}" style="width: 200px; height: 180px; float: left; margin-right: 20px;">

        <p>Prénom : {{ $user->first_name }}</p>
        <p>Nom : {{ $user->last_name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Téléphone : {{ $user->phone }}</p>
      </div>

      <div class="col s12">
        <h4>Adresse</h4>
        <p>Rue : {{ $user->address }}</p>
        <p>Ville : {{ $user->city }}</p>
        <p>Code postal : {{ $user->postal_code }}</p>
      </div>
    </div>

    <div class="row center">
      <a class="waves-effect waves-light btn-large red" href="{{route('user.edit', compact('user'))}}">Modifier le profil</a>
    </div>
  </div>
@endsection

