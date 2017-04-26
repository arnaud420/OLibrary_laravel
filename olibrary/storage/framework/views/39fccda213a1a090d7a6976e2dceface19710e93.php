<?php $__env->startSection('title', 'Acceuil'); ?>

<?php $__env->startSection('styles'); ?>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
  <nav id="sidebar" class="indigo darken-1">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">OLibrary</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Profil</a></li>
        <li><a href="#">Emprunts</a></li>
        <li><a href="#">Catalogue</a></li>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidenav'); ?>
  <!-- debut de la sidenav  -->
  <div id="sidenav" class="indigo lighten-5 hide-on-med-and-down">
    <div id="sidenavImg">
      <ul id="listImg">
        <li><img src=""></li>
        <li style="margin-top: 60px;">Nom, Prenom</li>
      </ul>
    </div>
    <!-- liens naviguation  -->
    <div id="sideLink">
      <ul>
        <li><a href="#" class="waves-effect center-align valign-wrapper">Catalogue</a></li>
        <li><a href="#" class="waves-effect center-align">Espace Personnel</a></li>
        <li><a href="#" class="waves-effect center-align">Emprunts</a></li>
        <li><a href="#" class="waves-effect center-align">Déconnexion</a></li>
      </ul>
    </div>

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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
  <footer class="page-footer indigo darken-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Projet OLibrary</h5>
          <p class="grey-text text-lighten-4">Projet réalisée dans le cadre de la première année d'étude à l'école Ingésup Bordeaux</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Equipe</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Antoine Chiny</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Paul-Michel Garzaro</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Thomas Bichon</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Arnaud Lafon</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2017 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('commons.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>