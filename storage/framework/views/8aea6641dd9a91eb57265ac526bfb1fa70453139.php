<?php $__env->startSection('title', 'détails d\'un jeu'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo e($game->name); ?></h1>
            <div>
                <p>
                    Développé par <?php echo e($game->developper->name); ?> <br>
                    Disponible sur <?php echo e($game->platforms->pluck('name')->implode(', ')); ?>

                </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\resources\views/pages/game_details.blade.php ENDPATH**/ ?>