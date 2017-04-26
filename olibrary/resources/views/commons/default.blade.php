<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>OLibrary - @yield('title')</title>
  @yield('styles')
</head>
<body>
  @yield('sidebar')
  @yield('sidenav')
  <div id="content-wrapper">
    Contenu
    @yield('content')
  </div>
  @yield('footer')
  @yield('scripts')
</body>
</html>
