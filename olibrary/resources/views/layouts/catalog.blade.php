@extends('commons.default')

@section('title', 'Catalogue')

@section('styles')
  <link rel="stylesheet" href="/css/artworks.css">
@endsection

@section('content')
  <div class="container" id="content-wrapper">
    <div id="catalog-wrapper">
      @foreach($artworks as $artwork)
        <div id="artwork-{{ $artwork->id }}" class="artwork-card card indigo darken-1">
          <div class="card-content grey-text text-lighten-3">
            <span class="card-title">{{ $artwork->artwork_title }}</span>
            <p class="artwork-resume">{{ $artwork->resume }}</p>
            <p class="artwork-author">{{ $artwork->author->first_name." ".$artwork->author->last_name }}</p>
          </div>
          <div class="card-action">
            <div class="row">
              <div class="col s12">
                <a href="/artworks/{{ $artwork->id }}">Emprunter</a>
                <a href="#">Auteur</a>
            </div>
            </div>
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
  <script>
    $(document).ready(function(){
      $(".button-collapse").sideNav();
    });
  </script>
  <script src="/js/catalog.js"></script>
@endsection
