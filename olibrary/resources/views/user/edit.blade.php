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
                   {!! Form::label('nom', 'Nom : ') !!}
                   {!! Form::text('nom', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('prenom', 'Prenom : ') !!}
                   {!! Form::text('prenom', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('email', 'Email : ') !!}
                   {!! Form::email('email', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('tel', 'Téléphone : ') !!}
                   {!! Form::number('tel', null) !!}
               </div>

               <div class="input-field col s12">
                   {!! Form::label('adresse', 'Adresse : ') !!}
                   {!! Form::text('adresse', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('ville', 'Ville : ') !!}
                   {!! Form::text('ville', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('code', 'Code postal : ') !!}
                   {!! Form::number('code', null) !!}
               </div>

               <div class="input-field col s6">
                   {!! Form::label('avatar', 'Avatar :') !!}
                   {!! Form::file('avatar', null) !!}
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
