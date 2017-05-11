@extends('commons.default')

@section('title', "Back Admin - ajout famille d'autorité")

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <h2 class="center grey white-text">Ajout famille d'autorité</h2>

    <div class="row">
        <div class="col s12 m8 offset-m2">
            {!! Form::open(['route' => ['adminfamilyauthoritie.store']]) !!}

            <div class="input-field col s12">
                {!! Form::label('family_name',  "Nom de la famille d'autorité : ") !!}
                {!! Form::text('family_name', null, ['class' => 'validate']) !!}
            </div>

            <div class="col s12">
                {!! Form::submit('Ajouter', ['class' => 'waves-effect waves-light btn-large green accent-3 right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection