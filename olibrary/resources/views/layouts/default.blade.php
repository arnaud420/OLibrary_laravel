@extends('commons.default')

@section('title', 'Connexion')

@section('styles')
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/modal.css">
@endsection

@section('content')
@endsection

@section('scripts')
  <script>
    $(document).ready(function(){
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('#modal-login').modal();
      $('#modal-register').modal();
    });
  </script>
@endsection
