@extends('commons.default')

@section('title', 'Back Admin - Creation d auteur')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
<div class="container" id="content-wrapper">
    <h2 class="center indigo darken-1 white-text">Ajouter un auteur</h2>

    <div class="row">
        <div class="col s12 m8 offset-m2">
            {!! Form::open(['route' => ['adminauthor.store']]) !!}
            <div class="input-field col s12 m6">
                {!! Form::label('last_name',  '*Nom de l auteur : ') !!}
                {!! Form::text('last_name', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s12 m6">
                {!! Form::label('first_name', '*Prénom de l auteur: ') !!}
                {!! Form::text('first_name', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s12 m6">
                {!! Form::label('birth_date', '*Date de naissance : (format 1984-07-16)') !!}
                {!! Form::text('birth_date', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s12 m6">
                {!! Form::label('nationality', '*Nationalité : ') !!}
                {!! Form::text('nationality', null, ['class' => 'validate']) !!}
            </div>

            <div class="col s12">
                {!! Form::submit('Ajouter', ['class' => 'waves-effect waves-light btn-large green accent-3 right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection