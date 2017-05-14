@extends('commons.default')

@section('title', 'Profile')

@section('styles')
  <link rel="stylesheet" href="/css/profile.css">
  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
@endsection

@section('content')
  <div class="container" id="content-wrapper">
    <h1 class="center">Edition du profile</h1>
    <div id="edit-profile-form">
        {!! Form::model($user, ['route' => ['user.update', $user, 'novalidate' => 'novalidate'] ]) !!}
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="input-field col s6">
                    {!! Form::label('last_name', 'Nom : ') !!}
                    {!! Form::text('last_name', $user->last_name) !!}
                </div>
                <div class="input-field col s6">
                    {!! Form::label('first_name', 'Prénom : ') !!}
                    {!! Form::text('first_name', $user->first_name) !!}
                </div>
                <div class="input-field col s12">
                    {!! Form::label('address', 'Adresse : ') !!}
                    {!! Form::text('address', $user->address) !!}
                </div>
                <div class="input-field col s6">
                    {!! Form::label('city', 'Ville : ') !!}
                    {!! Form::text('city', $user->city) !!}
                </div>
                <div class="input-field col s6">
                    {!! Form::label('postal_code', 'Code postal : ') !!}
                    {!! Form::text('postal_code', $user->postal_code) !!}
                </div>
                <div class="input-field col s12">
                    {!! Form::label('phone', 'Téléphone : ') !!}
                    {!! Form::text('phone', $user->phone) !!}
                </div>
                <div class="col s12">
                    {!! Form::submit('Modifier', ['class' => 'waves-effe"ct waves-light btn-large red right']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div
  </div>
@endsection
