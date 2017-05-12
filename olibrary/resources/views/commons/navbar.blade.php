<nav id="navbar" class="indigo darken-1">
  <div class="nav-wrapper">
    <object id="front-page-logo" class="responsive-img" width="50px" type="image/svg+xml" data="/uploads/assets/open-book.svg"></object>
    <a href="/" class="brand-logo">
      <span id="navbar-title">Olibrary</span>
    </a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      @if(!Auth::check())
        <li><a href="/login">Connexion</a></li>
        <li><a href="/register">Inscription</a></li>
      @else
        <li><a href="/user/borrows">Emprunts</a></li>
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
