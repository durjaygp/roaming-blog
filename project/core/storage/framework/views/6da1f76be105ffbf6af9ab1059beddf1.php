<?php $__env->startSection('title', __('backend.visitorsAnalyticsVisitorsHistory')); ?>
<?php $__env->startPush("after-styles"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("assets/dashboard/css/flags.css")); ?>"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><?php echo e(__('backend.visitorsAnalyticsVisitorsHistory')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                    <a href=""><?php echo e(__('backend.visitorsAnalytics')); ?></a>
                </small>
            </div>


            <div class="table-responsive">
                <table class="table table-bordered m-a-0">
                    <thead class="dker">
                    <tr>
                        <th class="text-center"><?php echo e(__('backend.topicDate')); ?></th>
                        <th class="text-center"><?php echo e(__('backend.ip')); ?></th>
                        <th class="text-center"><?php echo e(__('backend.visitorsAnalyticsByCity')); ?></th>
                        <th class="text-center"><?php echo e(__('backend.visitorsAnalyticsByCountry')); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $ii = 1;
                    ?>
                    <?php $__currentLoopData = $AnalyticsVisitors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Analytic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center">
                                <small><?php echo e(Helper::formatDate($Analytic->date)); ?>

                                    &nbsp; <?php echo e(date('h:i A', strtotime($Analytic->time))); ?></small>
                            </td>
                            <td class="text-center dker text-info"><a
                                    href="<?php echo e(route("visitorsIP",$Analytic->ip)); ?>"><?php echo e($Analytic->ip); ?></a></td>
                            <td class="text-center"><?php echo e($Analytic->city); ?></td>
                            <?php
                            $flag = "";
                            $country_code = strtolower($Analytic->country_code);
                            if ($country_code != "unknown") {
                                $flag = "<div class='flag flag-$country_code' style='display: inline-block'></div> ";
                            }
                            ?>
                            <td class="text-center"><?php echo $flag; ?> &nbsp;<?php echo e($Analytic->country); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
                <br>
                <div class="text-center">
                    <?php echo $AnalyticsVisitors->links(); ?>

                </div>
                <br>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/analytics/visitors.blade.php ENDPATH**/ ?>