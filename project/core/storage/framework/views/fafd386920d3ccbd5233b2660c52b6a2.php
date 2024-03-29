<?php $__env->startSection('content'); ?>
    <style>
        body{
            background: #f0f0f0;
            font-family: "Roboto", "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-align: center;
            margin: 0;
            color: #666;
        }
        h1{
            font-size: 130px;
            margin: 0;
        }
        .p-y-md{
            padding: 30px 0;
        }
        .app-body{
            width: 100%;
            height: calc(100vh - 520px);
            min-height: 400px;
            position: relative;
        }
        .error{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

<div class="app-body bg-auto w-full">
    <div class="text-center pos-rlt p-y-md error">
        <h1 class="text-shadow  text-4x">
            <span class="text-2x font-bold block m-t-lg">404</span>
        </h1>
        <h3><?php echo e(__('backend.notFound')); ?>.</h3>
        <button class="btn btn-success btn-lg btn-block mt-3" style="max-width:250px"><a style="color: white" href="<?php echo e(url('/')); ?>"><?php echo e(__('backend.returnHomePage')); ?></a></button>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/errors/404.blade.php ENDPATH**/ ?>