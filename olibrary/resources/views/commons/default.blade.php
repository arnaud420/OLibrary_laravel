<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>OLibrary - @yield('title')</title>
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
  @yield('scripts')
</body>
</html>
