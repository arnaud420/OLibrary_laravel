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

                <div class="input-field col s6">
                    {!! Form::hidden('last_name', $user->last_name) !!}
                </div>

                <div class="input-field col s6">
                    {!! Form::hidden('first_name', $user->first_name) !!}
                </div>

                <div class="input-field col s6">
                    {!! Form::hidden('email', $user->email) !!}
                </div>

                <div class="input-field col s12">
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

                <div class="input-field col s12">
                    <select name="is_admin">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                    </select>
                    <label for="is_admin">Admin</label>
                </div>

                <div class="col s12">
                    {!! Form::submit('Modifier', ['class' => 'waves-effect waves-light btn-large red right']) !!}
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