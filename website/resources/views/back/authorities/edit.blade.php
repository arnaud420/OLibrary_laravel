@extends('commons.default')

@section('title', 'Back Admin - Edition authorité')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection
@section('content')
<div class="container" id="content-wrapper">
    <h2 class="center indigo darken-2 white-text">Edition de l'autorité</h2>

    <div class="row">
        <div class="col s12 m8 offset-m2">
            {!! Form::open(['route' => ['adminauthorities.update', $authoritie->id], 'method' => 'put']) !!}

            <div class="input-field col s12">
                {!! Form::label('authority_name', "Nom de l'autorité : ") !!}
                {!! Form::text('authority_name', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s12">
                {!! Form::label('authority_phone', 'Numéro de téléphone : ') !!}
                {!! Form::number('authority_phone', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s12">
                {!! Form::label('authority_email', 'Adresse email : ') !!}
                {!! Form::email('authority_email', null, ['class' => 'validate']) !!}
            </div>

            <div class="col s12">
                {!! Form::submit('Modifier', ['class' => 'waves-effect waves-light btn-large red right']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
