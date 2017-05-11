@extends('commons.default')

@section('title', "Back Admin - ajout type d'oeuvre")

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <h2 class="center grey white-text">Ajout type d'oeuvre</h2>

    <div class="row">
        <div class="col s12 m8 offset-m2">
            {!! Form::open(['route' => ['admintype.store']]) !!}

            <div class="input-field col s12">
                {!! Form::label('type_name',  "Nom du type d'oeuvre : ") !!}
                {!! Form::text('type_name', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s12">
                {!! Form::label('type_theme',  "Théme du type d'oeuvre : ") !!}
                {!! Form::text('type_theme', null, ['class' => 'validate']) !!}
            </div>

            <div class="col s12">
                {!! Form::submit('Ajouter', ['class' => 'waves-effect waves-light btn-large green accent-3 right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection