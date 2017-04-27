@extends('commons.default')

@section('title', 'Acceuil')

@section('styles')
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
@endsection

@section('content')
  @foreach($artworks as $artwork)
    <p>{{ $artwork->artwork_title }}</p>
    <p>{{ $artwork->resume }}</p>
    <p>{{ $artwork->author }}</p>
  @endforeach
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
@endsection
