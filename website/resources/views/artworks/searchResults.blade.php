@extends('commons.default')

@section('title', 'Résultat de la recherche')

@section('styles')
  <link rel="stylesheet" href="/css/search.css">
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
              <label for="search-input">
                Rechercher parmi les oeuvres
              </label>
            </div>
            <button id="search-btn" type="submit" class="btn btn-primary indigo darken-1 col s3">
              Rechercher
            </button>
          </div>
        </form>
      </div>
    </div>
    <div id="searchResult-list">
      @if ($results != null)
        @foreach($results as $artwork)
          <div class="row searchResult-item">
            <div class="searchResult-info">
              <a href="/artworks/{{ $artwork->id }}">
                <h3 class="title">
                  {{ $artwork->artwork_title }}
                </h3>
              </a>
              <p>{{ $artwork->resume }}</p>
              <p>
                {{ $artwork->author->first_name }}
                {{ $artwork->author->last_name }}
              </p>
            </div>
          </div>
        @endforeach
      @else
        <h3 class="title">Aucun résultat.</h3>
      @endif
    </div>
  </div>
@endsection