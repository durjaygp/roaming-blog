<!DOCTYPE html>
<html lang="<?php echo e(@Helper::currentLanguage()->code); ?>" dir="<?php echo e(@Helper::currentLanguage()->direction); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(__('backend.languages')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/translation/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/translation/css/main.css')); ?>?v=<?php echo e(Helper::GeneralWebmasterSettings("system_version")); ?>">
    <?php if( @Helper::currentLanguage()->direction=="rtl"): ?>
        <link rel="stylesheet" href="<?php echo e(asset('/assets/translation/css/rtl.css')); ?>?v=<?php echo e(Helper::GeneralWebmasterSettings("system_version")); ?>">
    <?php endif; ?>
</head>
<body>

    <div id="app">

        <?php echo $__env->make('translation::nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('translation::notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('body'); ?>

    </div>
    <script>
        let _app_url = "<?php echo e(URL::to("")); ?>/";
    </script>
    <script src="<?php echo e(asset('/assets/translation/js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/vendor/translation/layout.blade.php ENDPATH**/ ?>