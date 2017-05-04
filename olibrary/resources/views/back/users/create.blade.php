@extends('commons.default')

@section('title', 'Back Admin - ajout utilisateur')

@section('content')
    <h1 class="center">Ajout d'utilisateur</h1>

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
