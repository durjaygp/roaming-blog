<nav class="header">

    <h1 class="text-lg px-6"> <?php echo e(__('backend.control')); ?></h1>

    <ul class="flex-grow justify-end pr-2">
        <li>
            <a href="<?php echo e(route('languages.index')); ?>" class="<?php echo e(set_active('')); ?><?php echo e(set_active('/create')); ?>">
                <?php echo $__env->make('translation::icons.globe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo e(__('translation.languages')); ?>

            </a>
        </li>
        <li>
            <a href="<?php echo e(route('languages.translations.index', config('app.locale'))); ?>" class="<?php echo e(set_active('*/translations')); ?>">
                <?php echo $__env->make('translation::icons.translate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo e(__('translation.translations')); ?>

            </a>
        </li>
    </ul>

</nav>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/vendor/translation/nav.blade.php ENDPATH**/ ?>