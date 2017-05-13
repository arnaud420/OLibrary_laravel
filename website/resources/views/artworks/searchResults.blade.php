@extends('commons.default')

@section('title', 'Résultat de la recherche')

@section('styles')
  <link rel="stylesheet" href="/css/borrows.css">
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
    <div id="borrow-list">
      @foreach($results as $artwork)
        <div class="row borrow-item">
          <div class="borrow-info">
            <h3 class="title">{{ $artwork->artwork_title }}</h3>
            <p>{{ $artwork->resume }}</p>
            <p>{{ $artwork->id }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection

@section('scripts')
  <!-- <script src="/js/catalog.js"></script> -->
@endsection

