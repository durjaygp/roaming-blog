<meta charset="utf-8"/>
<title><?php echo $__env->yieldContent('title'); ?></title>
<meta name="description" content="<?php echo e(Helper::GeneralSiteSettings("site_desc_".@Helper::currentLanguage()->code)); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
<link rel="apple-touch-icon" href="<?php echo e(asset('assets/dashboard/images/logo.png')); ?>">
<meta name="apple-mobile-web-app-title" content="Smartend">
<base href="<?php echo e(route("adminHome")); ?>">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<meta name="mobile-web-app-capable" content="yes">
<link rel="shortcut icon" sizes="196x196" href="<?php echo e(asset('assets/images/kelimelodi-kelime-bulucu-favicon.png')); ?>">
<?php echo $__env->yieldPushContent('before-styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/animate.css/animate.min.css')); ?>?v=<?php echo e(Helper::system_version()); ?>" type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/animate.css/animate.min.css')); ?>?v=<?php echo e(Helper::system_version()); ?>" type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/fonts/glyphicons/glyphicons.css')); ?>?v=<?php echo e(Helper::system_version()); ?>" type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/fonts/font-awesome/css/font-awesome.min.css')); ?>?v=<?php echo e(Helper::system_version()); ?>"
      type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/fonts/material-design-icons/material-design-icons.css')); ?>?v=<?php echo e(Helper::system_version()); ?>"
      type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/js/sweetalert/sweetalert.css')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/bootstrap/dist/css/bootstrap.min.css')); ?>?v=<?php echo e(Helper::system_version()); ?>"
      type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/app.css')); ?>?v=<?php echo e(Helper::system_version()); ?>" type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/font.css')); ?>?v=<?php echo e(Helper::system_version()); ?>" type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/topic.css')); ?>?v=<?php echo e(Helper::system_version()); ?>" type="text/css"/>

<?php if( @Helper::currentLanguage()->direction=="rtl"): ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/bootstrap-rtl/dist/bootstrap-rtl.css')); ?>?v=<?php echo e(Helper::system_version()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/app.rtl.css')); ?>?v=<?php echo e(Helper::system_version()); ?>">
<?php endif; ?>
<?php echo $__env->yieldPushContent('after-styles'); ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/layouts/head.blade.php ENDPATH**/ ?>