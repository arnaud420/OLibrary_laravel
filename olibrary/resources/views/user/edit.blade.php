@extends('commons.default')

@section('title', 'Profile')

@section('styles')
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
@endsection

@section('content')
    <h1 class="center">Edition du profile</h1>

    <div class="row">
       <div class="col s12">
               {!! Form::open(['route' => ['user.update', $user, 'novalidate' => 'novalidate',  'files' => true]]) !!}

               <div class="input-field col s6">
                   {!! Form::label('last_name', 'Nom : ') !!}
                   {!! Form::text('last_name', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('first_name', 'Prenom : ') !!}
                   {!! Form::text('first_name', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('email', 'Email : ') !!}
                   {!! Form::email('email', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('phone', 'Téléphone : ') !!}
                   {!! Form::number('phone', null) !!}
               </div>

               <div class="input-field col s12">
                   {!! Form::label('address', 'Adresse : ') !!}
                   {!! Form::text('address', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('city', 'Ville : ') !!}
                   {!! Form::text('city', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('postal_code', 'Code postal : ') !!}
                   {!! Form::number('postal_code', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('picture_path', 'Avatar :') !!}
                   {!! Form::file('picture_path', null) !!}
               </div>

               <div class="col s12">
                   {!! Form::submit('Modifier', ['class' => 'btn large right red']) !!}
               </div>
               {!! Form::close() !!}
       </div>
    </div>
@endsection

@section('scripts')
@endsection
