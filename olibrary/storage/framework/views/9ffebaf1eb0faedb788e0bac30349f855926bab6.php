<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title><?php echo $__env->yieldContent('titre'); ?>OLibrary</title>
</head>
<body>

<header>
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo left">OLibrary</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
                <ul class="side-nav" id="mobile-demo">
                    <li class="item"><a href="">Profil</a></li>
                    <li class="item"><a href="">Catalogue</a></li>
                    <li class="item"><a href="">Espace Personnel</a></li>
                    <li class="item"><a href="">Emprunts</a></li>
                    <li class="item"><a href="">Déconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- left menu -->
    <ul class="side-nav fixed">
        <li class="logo">
            <a href="#" class="brand-logo">
                <img id="front-page-logo" src="">
            </a>
        </li>
        <li class="item"><a href="">Profil</a></li>
        <li class="item"><a href="">Catalogue</a></li>
        <li class="item"><a href="">Espace Personnel</a></li>
        <li class="item"><a href="">Emprunts</a></li>
        <li class="item"><a href="">Déconnexion</a></li>
    </ul>
</header>



<div class="container">
    <?php echo $__env->yieldContent('contenu'); ?>
</div>


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>