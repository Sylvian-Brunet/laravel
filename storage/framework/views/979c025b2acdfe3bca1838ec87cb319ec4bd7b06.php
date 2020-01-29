<?php $__env->startSection('title', 'Liste des développeurs'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des développeurs</h1>
            <div>
                <ul>
                    <?php $__currentLoopData = $developpers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            Jeux développer par <?php echo e($dev->name); ?> :
                            <ul>
                                <?php $__currentLoopData = $dev->games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(route('game_details', ['game_id' => $game->id])); ?>"><?php echo e($game->name); ?></a>
                                        disponible sur <?php echo e($game->platforms->pluck('name')->implode(', ')); ?>

                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\resources\views/pages/developpers.blade.php ENDPATH**/ ?>