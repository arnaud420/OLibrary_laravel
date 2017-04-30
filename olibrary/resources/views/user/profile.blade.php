@extends('commons.default')

@section('title', 'Profile')

@section('styles')
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
@endsection

@section('content')
  <h1>Profile</h1>
  <p>Firstname: {{ $user->first_name }}</p>
  <p>Lastname: {{ $user->last_name }}</p>
  <p>Email: {{ $user->email }}</p>
  <p>Phone: {{ $user->phone }}</p>
  <p>Address: {{ $user->address }}</p>
  <p>City: {{ $user->city }}</p>
  <p>Postal code: {{ $user->postal_code }}</p>
  <p>picture_path: {{ $user->picture_path }}</p>
@endsection

@section('scripts')
@endsection

