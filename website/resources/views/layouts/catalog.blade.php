@extends('commons.default')

@section('title', 'Catalogue')

@section('styles')
  <link rel="stylesheet" href="/css/artworks.css">
@endsection

@section('content')
  <div class="container" id="content-wrapper">
    <div class="" id="search-engine">
      <div class="search-wrapper auth-form container">
        <form class="col s12" method="POST" action="/artworks/search">
          {{ csrf_field() }}
          <div class="row">
            <div class="input-field col s9">
              <input id="search-input" type="text" class="validate" name="value">
              <label for="search-input">Rechercher parmi les oeuvres</label>
            </div>
            <button type="submit" class="btn btn-primary indigo darken-1 col s3">Rechercher</button>
          </div>
        </form>
      </div>
    </div>
    <div id="catalog-wrapper">
      @foreach($artworks as $artwork)
        <div id="artwork-{{ $artwork->id }}" class="artwork-card card indigo darken-1">
          <div class="cover-carousel">
            @foreach($artwork->exemplaires as $exemplaire)
              <img class="exemplaire-picture responsive-img" src="{{ $exemplaire->exemplaire_picture_path }}">
            @endforeach
          </div>
          <div class="card-content grey-text text-lighten-3">
            <span class="card-title">{{ $artwork->artwork_title }}</span>
            <p class="artwork-resume">{{ $artwork->resume }}</p>
            <p class="artwork-author">{{ $artwork->author->first_name." ".$artwork->author->last_name }}</p>
          </div>
          <div class="card-action">
            <a href="/artworks/{{ $artwork->id }}">Emprunter</a>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row">
      <div class="col s12 center-align">
        {{ $artworks->links() }}
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="/js/catalog.js"></script>
@endsection
