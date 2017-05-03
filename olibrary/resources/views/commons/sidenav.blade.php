<!-- debut de la sidenav  -->
<div id="sidenav" class="indigo lighten-5 hide-on-med-and-down">

  @if(Auth::check())
    <div id="sidenavImg">
      <ul id="listImg">
        <li><img src="{{ Auth::user()->picture_path }}"></li>
        <li style="margin-top: 60px;">Bonjour, {{ Auth::user()->first_name }}</li>
      </ul>
    </div>
    <!-- liens naviguation  -->
    <div id="sideLink">
      <ul>
        <li><a href="{{route('artworks.index')}}" class="waves-effect center-align valign-wrapper">Catalogue</a></li>
        <li><a href="/user/{{ Auth::user()->id }}" class="waves-effect center-align">Espace Personnel</a></li>
        <li><a href="#" class="waves-effect center-align">Emprunts</a></li>
        <li><a href="/logout" class="waves-effect center-align">Déconnexion</a></li>
      </ul>
    </div>
  @endif

  <!-- partie checkbox + radiobutton  -->
  <div id="sidenavRadioCheckbox">
    <div id="sidenavRadio">
      <p class="center-align">Trié par :</p>
      <ul class="left" id="sideRadio">
        <li>
          <input class="with-gap" type="radio" id="option1" />
          <label for="option1" class="black-text">Option 1</label>
        </li>
        <li>
          <input class="with-gap" type="radio"  id="option2" />
          <label for="option2" class="black-text">Option 2</label>
        </li>
        <li>
          <input class="with-gap" type="radio" id="option3" />
          <label for="option3" class="black-text">Option 3</label>
        </li>
        <li>
          <input class="with-gap" type="radio" id="option4" />
          <label for="option4" class="black-text">Option 4</label>
        </li>
      </ul>
    </div>

    <div id="sidenavCheckbox">
      <ul class="left section" id="sideCheckbox">
        <li>
          <input type="checkbox" id="alphabetique" />
          <label for="alphabetique" class="black-text">Alphabétique</label>
        </li>
        <li>
          <input type="checkbox" id="auteur" />
          <label for="auteur" class="black-text">Auteur</label>
        </li>
        <li>
          <input type="checkbox" id="disponibilite" />
          <label for="disponibilite" class="black-text">Disponibilité</label>
        </li>
      </ul>
    </div>
  </div>

</div>
<!-- fin de la sidenav  -->
