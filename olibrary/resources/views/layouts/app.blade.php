@extends('commons.default')

@section('title', 'Acceuil')

@section('styles')
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/artworks.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
@endsection

@section('content')
    <div class="row">
      @foreach($artworks as $artwork)
      <div class="col s12 m3 l2">
        <div class="card hoverable" id="bookCard">
          <div class="card-image waves-effect waves-block waves-light">
            <img id="bookImg" class="activator responsive-img" src="http://lelivrequifaitdireoui.quebec/resources/livre.png">
          </div>
          <div class="card-content">
            <span class="card-title activator center-align" id="bookTitle">{{ $artwork->artwork_title }}</span>
            <p class="center" id="bookAuthor">{{ $artwork->author->last_name }}, {{ $artwork->author->first_name }}</p>
          </div>
          <div class="card-reveal">
            <span class="card-title left-align">Résumé<i class="material-icons right hide-on-med-only">close</i></span>
            <p id="bookResume">{{ $artwork->resume }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="row">
      <div class="center-align">
        {!! $artworks->render() !!}
      </div>
    </div>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
@endsection
