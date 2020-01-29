<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(auth()->guard()->guest()): ?>
                        You're here as a visitor!
                    <?php endif; ?>

                    <?php if(auth()->guard()->check()): ?>
                        You are logged in!
                        <?php elseif(auth()->guard()->check()): ?>
                            You're not logged in!
                    <?php endif; ?>

                    <?php if (\Illuminate\Support\Facades\Blade::check('ifSylvian')): ?>
                        COUCOU CONNARD
                    <?php endif; ?>

                    <?php if(\Auth::check()): ?>
                            You're logged in as <?php echo e(Auth::user()->name); ?>!
                        <?php else: ?>
                            You're not logged in!
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\resources\views/home.blade.php ENDPATH**/ ?>