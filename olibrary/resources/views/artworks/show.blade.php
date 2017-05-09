@extends('commons.default')

@section('title', 'Artwork')

@section('styles')
  <link rel="stylesheet" href="/css/artworks.css">
@endsection

@section('content')
  <div class="container" id="content-wrapper">
    <div class="row" id="artDiv">
      <div class="col s12">
        <img id="artImg" src="{{ $artwork->exemplaires[0]->exemplaire_picture_path }}" style="height: 300px; width: 200px; float: left;">
        <h4 id="artTitle">{{$artwork->artwork_title}}</h4>
        <p>{{$artwork->resume}}</p>

        <div class="stars" data-stars="1">
          <svg height="25" width="23" class="star rating" data-rating="1">
            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
          </svg>
          <svg height="25" width="23" class="star rating" data-rating="2">
            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
          </svg>
          <svg height="25" width="23" class="star rating" data-rating="3">
            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
          </svg>
          <svg height="25" width="23" class="star rating" data-rating="4">
            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
          </svg>
          <svg height="25" width="23" class="star rating" data-rating="5">
            <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
          </svg>
        </div>
      </div>

      <div class="col m6 s12" id="artInfo">
        <p>Exemplaires disponibles : <span id="nbExemplaire">{{ $artwork->exemplaires[0]->exemplaire_quantity }}</span></p>
        <p>Collection : {{ $artwork->collection }}</p>
        <p>Auteur : {{$artwork->author->last_name}}, {{$artwork->author->first_name}}</p>
        <p>Date de parution : {{ $artwork->artwork_date }}</p>
      </div>

      <div class="col m4 offset-m1 s12">
        <p>Disponibilité :</p>
        <div class="col s12" id="artDispo"></div>
        <div id="exemplaires-combo" class="input-field col s12">
          <select>
            <option value="" disabled selected>Selectionner un exemplaire</option>
            @foreach($artwork->exemplaires as $exemplaire)
              <option value="1">{{ $exemplaire->exemplaire_name }}</option>
            @endforeach
          </select>
          <label>Version de l'oeuvre</label>
        </div>
        <a class="waves-effect waves-light btn-large indigo darken-1" id="artBtn">Emprunter</a>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="/js/artwork.js"></script>
@endsection

