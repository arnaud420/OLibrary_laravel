@extends('commons.default')

@section('title', 'Exemplaire')

@section('styles')
  <link rel="stylesheet" href="/css/artworks.css">
  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
@endsection

@section('content')
  <div class="container" id="content-wrapper">
    <div class="col s12" id="artwork-card">
      <div id="artwork-card-wrapper" class="card horizontal">
        <div class="card-image">
          @foreach($artwork->exemplaires as $exemplaire)
            <img id="art-picture-{{ $exemplaire->id }}" class="artwork-picture responsive-img" src="{{ $exemplaire->exemplaire_picture_path }}">
          @endforeach
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <h4 id="artwork-card-title">{{ $artwork->artwork_title }}</h4>
            <p id="artwork-resume">{{ $artwork->resume }}</p>
            <ul id="artwork-info" class="collection">
              <li class="collection-item">
                <div>
                Collection: 
                <a class="artwork-info-item secondary-content">
                  {{ $artwork->collection }}
                </a>
                </div>
              </li>
              </>
              <li class="collection-item">
                Auteur: 
                <a class="artwork-info-item secondary-content">
                  {{ $artwork->author->last_name }}, 
                  {{ $artwork->author->first_name }}
                </a>
              </p>
              <li class="collection-item">
                Data de parution: 
                <a class="artwork-info-item secondary-content">
                  {{ $artwork->artwork_date }}
                </a>
              </li>
            </ul>
            <div id="select-exemplaire">
              <p>Selectionner un exemplaire : </p>
              <div id="artwork-carousel">
                @foreach($artwork->exemplaires as $exemplaire)
                  <img exemplaire-id="{{ $exemplaire->id }}" class="artwork-carousel-item" src="{{ $exemplaire->exemplaire_picture_path }}">
                @endforeach
              </div>
            </div>
          </div>
          <div class="card-action">
            <a class="waves-effect waves-light btn-large indigo darken-1" id="artwork-btn">Emprunter</a>
          </div>
        </div>
      </div>
    </div>
  @endsection

  @section('scripts')
    <script src="/js/artwork.js"></script>
  @endsection

