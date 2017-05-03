<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>OLibrary - @yield('title')</title>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/modal.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('styles')
</head>
<body>
  <header>@include('commons.navbar')</header>
  <main>
    @include('commons.sidenav')
    <div id="content-wrapper" class="container">
      @yield('content')
    </div>
  </main>
  @include('commons.footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  <script>
      $(document).ready(function(){
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
          $('#modal-login').modal();
          $('#modal-register').modal();
      });
  </script>
  @yield('scripts')
</body>
</html>
