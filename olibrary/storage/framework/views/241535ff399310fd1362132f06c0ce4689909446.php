<?php $__env->startSection('titre'); ?>
    Exemplaires
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <div class="row">
        <div class="col s12 m2">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" style="height: 150px; width: 150px; margin: 0 auto" src="http://lelivrequifaitdireoui.quebec/resources/livre.png">
                </div>
                <div class="card-content">
                    <span class="card-title activator center-align" id="titre-livre">Titre</span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Titre<i class="material-icons right">close</i></span>
                    <p class="center-align">Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>