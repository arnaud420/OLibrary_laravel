@extends('commons.default')

@section('title', 'Back Admin - Artwork exemplaires show')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <div class="container" id="content-wrapper">
        <p>vue show exemplaires</p>
        <p>{{$exemplaire->exemplaire_quantity}}</p>
        <p></p>
    </div>

@endsection