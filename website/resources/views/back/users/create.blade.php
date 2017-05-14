@extends('commons.default')

@section('title', 'Back Admin - ajout utilisateur')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <div class="container" id="content-wrapper">
        <h2 class="center indigo darken-1 white-text">Ajout d'utilisateur</h2>

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

                <div class="input-field col s12">
                    <select name="admin">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                    </select>
                    <label for="admin">Admin</label>
                </div>

                <div class="col s12">
                    {!! Form::submit('Ajouter', ['class' => 'waves-effect waves-light btn-large green accent-3 right']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('select').material_select();
        });
    </script>
@endsection