@extends('commons.default')

@section('title', 'Catalogue')

@section('styles')
  <link rel="stylesheet" href="/css/artworks.css">
@endsection

@section('content')
  <div class="row">
    @foreach($artworks as $artwork)
      <div class="col s12 m3 l2">
        <div class="card hoverable" id="bookCard">
          <div class="card-image waves-effect waves-block waves-light" id="imgContent">
            <img id="bookImg" class="activator responsive-img" src="http://lelivrequifaitdireoui.quebec/resources/livre.png">
          </div>
          <div class="card-content">
            <span class="card-title center-align" id="bookTitle"><a href="{{route('artworks.show', $artwork)}}" id="bookLink">{{ $artwork->artwork_title }}</a></span>
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
<script>
    $(document).ready(function(){

    });
</script>
@endsection
