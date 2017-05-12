@extends('commons.default')

@section('title', 'Back Admin - profil utilisateur')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <div class="container" id="content-wrapper">
        <h2 class="center indigo darken-1 white-text">Profil utilisateur</h2>

        <div class="row">
            <div class="col s12 grey darken-3 white-text valign-wrapper card-panel">
                <div class="row col s12" style="padding: 25px 25px 25px 25px">
                    <div id="divShowUser">
                        <p>Nom : {{$user->first_name}}</p>
                        <p>Prénom : {{$user->last_name}}</p>
                        <p>Email : {{$user->email}}</p>
                        <p>Adresse : {{$user->address}} {{$user->postal_code}} {{$user->city}}</p>
                        <p><a class="waves-effect waves-light btn red" href="{{route('adminusers.edit', $user->id)}}">Modifier</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection