<?php $__env->startSection('title',  __("backend.fileManager")); ?>
<?php $__env->startPush("after-styles"); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link href="<?php echo e(asset('assets/file-manager/css/file-manager.css')); ?>" rel="stylesheet">
    <style>
        .fm-navbar div div div:last-child {
            display: none;
        }
        iframe{
            width: 100%;
            height: 700px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding" style="padding-bottom: 0">
        <div class="box"  style="padding-bottom: 0">
            <div class="box-header dker">
                <h3><?php echo __("backend.fileManager"); ?></h3>
            </div>
            <div class="white dk">
                <iframe src="<?php echo e(route("FilesManager")); ?>"></iframe>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/settings/files_manager.blade.php ENDPATH**/ ?>