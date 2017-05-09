<nav id="navbar" class="indigo darken-1">
  <div class="nav-wrapper">
    <a href="/" class="brand-logo">
      <img id="logo" src="/uploads/assets/open-book.svg">
    </a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      @if(!Auth::check())
        <li><a href="/login">Connexion</a></li>
        <li><a href="/register">Inscription</a></li>
      @else
        <li><a href="#">Emprunts</a></li>
        <li><a href="{{route('artworks.index')}}">Catalogue</a></li>
        <li><a href="/user/{{ Auth::user()->id }}">Profil</a></li>
        <li><a href="/logout">Deconnexion</a></li>
      @endif
    </ul>
    <!-- menu mobile tablette  -->
    @include('commons.sidenav')
    <a href="#" data-activates="slide-out" class="button-collapse right"><i class="material-icons">menu</i></a>
  </div>
</nav>
