<?php $__env->startSection('title', 'Ajouter un jeu'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <h2>Ajouter un jeu : </h2>
            <form action="<?php echo e(route('game_add_post')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php if($errors->has('name')): ?>
                    <small style="color: red"><?php echo e($errors->first('name')); ?></small>
                <?php endif; ?>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend"><div class="input-group-text">Nom du jeu : </div></div>
                    <input type="text" name="name" class="form-control" id="name" value="<?php echo e(old('name')); ?>">
                </div>
                <?php if($errors->has('pegi')): ?>
                    <small style="color: red"><?php echo e($errors->first('pegi')); ?></small>
                <?php endif; ?>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend"><div class="input-group-text">PEGI : </div></div>
                    <input type="text" name="pegi" class="form-control" id="pegi" value="<?php echo e(old('pegi')); ?>">
                </div>
                <?php if($errors->has('developper_id')): ?>
                    <small style="color: red"><?php echo e($errors->first('developper_id')); ?></small>
                <?php endif; ?>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend"><div class="input-group-text">Développeur : </div></div>
                    <select class="form-control" name="developper_id">
                        <option value="">--</option>
                        <?php $__currentLoopData = $developpers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($dev->id); ?>" <?php if(old('developper_id') == $dev->id): ?> selected <?php endif; ?>>
                                <?php echo e($dev->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>


                <div class="form-check">
                    <input class="form-check-input" name="physical_release" type="checkbox" id="physical_release" value="1">
                    <label class="form-check-label" for="physical_release">
                        Sortie Physique
                    </label>
                </div>
                <input type="submit" value="Ajouter" class="btn btn-success">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\resources\views/pages/game_add.blade.php ENDPATH**/ ?>