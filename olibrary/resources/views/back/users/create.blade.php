@extends('commons.default')

@section('title', 'Back Admin - ajout utilisateur')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <h2 class="center grey white-text">Ajout d'utilisateur</h2>

    <div class="row">
        <div class="col s12 m8 offset-m2">
            {!! Form::open(['route' => ['adminusers.store']]) !!}

            <div class="input-field col s12">
                {!! Form::label('last_name',  'Nom : ') !!}
                {!! Form::text('last_name', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s12">
                {!! Form::label('first_name', 'Prenom : ') !!}
                {!! Form::text('first_name', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s12">
                {!! Form::label('email', 'Email : ') !!}
                {!! Form::email('email', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s12">
                {!! Form::label('password', 'password : ') !!}
                {!! Form::password('password', null, ['class' => 'validate']) !!}
            </div>

            <div class="col s12">
                {!! Form::submit('Ajouter', ['class' => 'waves-effect waves-light btn-large green accent-3 right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
