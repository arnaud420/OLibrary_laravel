@extends('commons.default')

@section('title', 'Back Admin - ajout autoritée')

@section('content')
    <h2 class="center grey white-text">Ajout d'autoritée</h2>

    <div class="row">
        <div class="col s12 m8 offset-m2">
            {!! Form::open(['route' => ['adminauthorities.store']]) !!}

            <div class="input-field col s12">
                {!! Form::label('authority_name',  'Nom : ') !!}
                {!! Form::text('authority_name', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s12">
                {!! Form::label('authority_email', 'Email : ') !!}
                {!! Form::email('authority_email', null, ['class' => 'validate']) !!}
            </div>

            <div class="input-field col s12">
                {!! Form::label('authority_phone', 'Téléphone : ') !!}
                {!! Form::number('authority_phone', null, ['class' => 'validate']) !!}
            </div>

            <div class="col s12">
                {!! Form::label('families_id', 'Famille d autoritée : ') !!}
                {!! Form::select('families_id', $families) !!}
            </div>
            <div class="col s12">
                {!! Form::submit('Ajouter', ['class' => 'waves-effect waves-light btn-large green accent-3 right']) !!}
            </div>
            {!! Form::close() !!}
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