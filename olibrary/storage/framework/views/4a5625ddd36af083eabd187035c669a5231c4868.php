<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>OLibrary - <?php echo $__env->yieldContent('title'); ?></title>
  <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
  <?php echo $__env->yieldContent('sidebar'); ?>
  <?php echo $__env->yieldContent('sidenav'); ?>
  <div id="content-wrapper" class="container">
    Contenu
    <?php echo $__env->yieldContent('content'); ?>
  </div>
  <?php echo $__env->yieldContent('footer'); ?>
  <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
