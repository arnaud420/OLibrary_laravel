@extends('commons.default')

@section('title', 'Emprunts')

@section('styles')
  <link rel="stylesheet" href="/css/borrows.css">
  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
@endsection

@section('content')
  <div class="container" id="content-wrapper">
    <div id="borrow-list">
      @foreach($borrows as $borrow)
        <div class="row borrow-item">
          <img class="responsive-img" id="borrow-picture" src="{{ $borrow->exemplaire_picture_path }}">
          <div class="borrow-info">
            <h3 class="title">{{ $borrow->artwork->artwork_title }}</h3>
            <p>{{ $borrow->artwork->resume }}</p>
            <p>Emprunté le : {{ $borrow->pivot->created_at }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection

