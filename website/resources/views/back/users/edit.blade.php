@extends('commons.default')

@section('title', 'Back Admin - Edition utilisateur')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection
@section('content')
    <div class="container" id="content-wrapper">
        <h2 class="center indigo darken-2 white-text">Edition du profile</h2>

        <div class="row">
            <div class="col s12">
                {!! Form::open(['route' => ['adminusers.update', $user->id], 'method' => 'put']) !!}

                <div class="input-field col m6 s12">
                    {!! Form::label('last_name', '* Nom : ') !!}
                    {!! Form::text('last_name', null, ['class' => 'validate']) !!}
                </div>

                <div class="input-field col s12 m6">
                    {!! Form::label('first_name', '* Prenom : ') !!}
                    {!! Form::text('first_name', null, ['class' => 'validate']) !!}
                </div>

                <div class="input-field col s12 m6">
                    {!! Form::label('email', '* Email : ') !!}
                    {!! Form::email('email', null, ['class' => 'validate']) !!}
                </div>

                <div class="input-field col s12 m6">
                    {!! Form::label('phone', 'Téléphone : ') !!}
                    {!! Form::number('phone', null, ['class' => 'validate']) !!}
                </div>

                <div class="input-field col s12">
                    {!! Form::label('address', 'Adresse : ') !!}
                    {!! Form::text('address', null, ['class' => 'validate']) !!}
                </div>

                <div class="input-field col s12 m6">
                    {!! Form::label('city', 'Ville : ') !!}
                    {!! Form::text('city', null, ['class' => 'validate']) !!}
                </div>

                <div class="input-field col s12 m6">
                    {!! Form::label('postal_code', 'Code postal : ') !!}
                    {!! Form::number('postal_code', null, ['class' => 'validate']) !!}
                </div>

                <div class="col s12">
                    {!! Form::submit('Modifier', ['class' => 'waves-effect waves-light btn-large red right']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
