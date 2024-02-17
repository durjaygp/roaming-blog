<?php $__env->startSection('title', "403"); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-body amber bg-auto" style="height: 100vh">
        <div class="text-center pos-rlt p-y-md">
            <h1 class="text-shadow m-a-0 text-white text-4x">
                <span class="text-2x font-bold block m-t-lg">403</span>
            </h1>
            <h2 class="h1 m-y-lg text-black"><?php echo e(__('backend.oops')); ?>!</h2>
            <p class="h5 m-y-lg text-u-c font-bold text-black"><?php echo e(__('backend.noPermission')); ?>.</p>
            <a href="<?php echo e(route("adminHome")); ?>" class="md-btn amber-700 md-raised p-x-md">
                <span class="text-white"><?php echo e(__('backend.returnTo')); ?> <i class="material-icons">&#xe5c4;</i></span>
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/errors/403.blade.php ENDPATH**/ ?>