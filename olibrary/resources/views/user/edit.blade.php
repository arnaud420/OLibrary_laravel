@extends('commons.default')

@section('title', 'Profile')

@section('content')
    <h1 class="center">Edition du profile</h1>

    <div class="row">
       <div class="col s12">
               {!! Form::open(['route' => ['user.update', $user, 'files' => true]]) !!}

               <div class="input-field col s6">
                   {!! Form::label('last_name', 'Nom : ') !!}
                   {!! Form::text('last_name', null, ['class' => 'validate']) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('first_name', 'Prenom : ') !!}
                   {!! Form::text('first_name', null, ['class' => 'validate']) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('email', 'Email : ') !!}
                   {!! Form::email('email', null, ['class' => 'validate']) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('phone', 'Téléphone : ') !!}
                   {!! Form::number('phone', null, ['class' => 'validate']) !!}
               </div>

               <div class="input-field col s12">
                   {!! Form::label('address', 'Adresse : ') !!}
                   {!! Form::text('address', null, ['class' => 'validate']) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('city', 'Ville : ') !!}
                   {!! Form::text('city', null, ['class' => 'validate']) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('postal_code', 'Code postal : ') !!}
                   {!! Form::number('postal_code', null, ['class' => 'validate']) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('picture_path', 'Avatar :') !!}
                   {!! Form::file('picture_path', null, ['class' => 'validate']) !!}
               </div>

               <div class="col s12">
                   {!! Form::submit('Modifier', ['class' => 'waves-effect waves-light btn-large red right']) !!}
               </div>
               {!! Form::close() !!}
       </div>
    </div>
@endsection
