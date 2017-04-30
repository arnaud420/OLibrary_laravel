<nav id="navbar" class="indigo darken-1">
  <div class="nav-wrapper">
    <a href="/" class="brand-logo">OLibrary</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="#">Emprunts</a></li>
      <li><a href="#">Catalogue</a></li>
      @if(!Auth::check())
        @include('auth.login')
        @include('auth.register')
        <li><a href="#modal-login">Connexion</a></li>
        <li><a href="#modal-register">Inscription</a></li>
      @else
        <li><a href="/user/{{ Auth::user()->id }}">Profil</a></li>
        <li><a href="/logout">Deconnexion</a></li>
      @endif
    </ul>


    <!-- menu mobile tablette  -->
    <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
    <ul class="side-nav" id="mobile-demo">
      <li class="item"><a href="">Profil</a></li>
      <li class="item"><a href="">Catalogue</a></li>
      <li class="item"><a href="">Espace Personnel</a></li>
      <li class="item"><a href="">Emprunts</a></li>
      <li class="item"><a href="">Déconnexion</a></li>
    </ul>
  </div>
</nav>
