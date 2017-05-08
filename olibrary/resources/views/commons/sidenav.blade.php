<!-- debut de la sidenav  -->
<ul id="slide-out" class="side-nav">
  @if(Auth::check())
    <li id="sidenav-profil"><div class="userView">
      <!-- <div class="background"> -->
      <!--   <img src="images/office.jpg"> -->
      <!-- </div> -->
      <a href="/user/{{ Auth::user()->id }}"><img class="circle" src="{{ Auth::user()->picture_path }}"></a>
      <a href="#!name"><span class="black-text name">{{ Auth::user()->first_name }}</span></a>
      <a href="#!email"><span class="black-text email">{{ Auth::user()->email }}</span></a>
    </div></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="#">Emprunts</a></li>
    <li><a class="waves-effect" href="/artworks">Catalogue</a></li>
    <li><a class="waves-effect" href="/logout">Deconnexion</a></li>
  @else
    <li><a href="/login"><i class="material-icons">cloud</i>Connexion</a></li>
    <li><a href="/register">Inscription</a></li>
  @endif
</ul>
<!-- fin de la sidenav  -->

