<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo e(asset('/css/commons.css')); ?>" rel="stylesheet">

    <title><?php echo $__env->yieldContent('titre'); ?>OLibrary</title>
</head>
<body>

<?php echo $__env->make('commons.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
    <p>efzefzefezf</p>
</div>

<?php echo $__env->make('commons.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>