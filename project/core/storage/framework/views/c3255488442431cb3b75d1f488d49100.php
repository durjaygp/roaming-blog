<!DOCTYPE html>
<html lang="<?php echo e(@Helper::currentLanguage()->code); ?>" dir="<?php echo e(@Helper::currentLanguage()->direction); ?>">
<head>
    <?php echo $__env->make('dashboard.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="auth_app_bg">
<div class="app auth_app" id="app">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo $__env->make('dashboard.layouts.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/layouts/auth.blade.php ENDPATH**/ ?>