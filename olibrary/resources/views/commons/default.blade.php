<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>OLibrary - @yield('title')</title>
  @yield('styles')
</head>
<body>
  @include('commons.sidebar')
  @include('commons.sidenav')
  <div id="content-wrapper">
    @yield('content')
  </div>

  @include('commons.footer')

  @yield('scripts')
</body>
</html>
