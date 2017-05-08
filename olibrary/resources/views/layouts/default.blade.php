@extends('commons.default')

@section('title', 'Catalogue')

@section('styles')
  <link rel="stylesheet" href="/css/artworks.css">
@endsection

@section('content')
  @foreach($artworks as $artwork)
    <p>{{ $artwork->artwork_title }}</p>
    <p>{{ $artwork->resume }}</p>
  @endforeach
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
      $(".button-collapse").sideNav();
    });
</script>
@endsection
