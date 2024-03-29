<?php $__env->startSection('title', __('backend.visitorsAnalyticsIPInquiry')); ?>
<?php $__env->startPush("after-styles"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("assets/dashboard/css/flags.css")); ?>"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <?php
    $visitor_loc_0 = "";
    $visitor_loc_1 = "";
    ?>
    <div class="padding p-b-0">
        <div class="box">
            <?php if($ip_code!=""): ?>
                <div class="box-header dker">
                    <div class="row">
                        <div class="col-sm-9">
                            <h3><?php echo e(__('backend.visitorsAnalyticsIPInquiry')); ?></h3>
                            <small>
                                <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                                <a href=""><?php echo e(__('backend.visitorsAnalytics')); ?></a>
                            </small>
                        </div>
                        <div class="col-sm-3">
                            <div class="btn-group pull-right">
                                <?php echo e(Form::open(['route'=>['visitorsSearch'],'method'=>'POST'])); ?>

                                <div class="input-group input-group-sm">
                                    <?php echo Form::text('ip',$ip_code, array('placeholder' => __('backend.ip')."...",'class' => 'form-control','id'=>'name','required'=>'')); ?>

                                    <span class="input-group-btn">
                <button class="btn btn-default b-a no-shadow" type="submit"><i class="fa fa-search"></i></button>
              </span>
                                </div>
                                <?php echo e(Form::close()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="box-header dker">
                    <div class="row">
                        <div class="text-center">
                            <br>
                            <h3><?php echo e(__('backend.visitorsAnalyticsIPInquiry')); ?></h3>
                            <small>
                                <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                                <a href=""><?php echo e(__('backend.visitorsAnalytics')); ?></a>
                            </small>
                            <div class="btn-group p-a w-lg">
                                <?php echo e(Form::open(['route'=>['visitorsSearch'],'method'=>'POST'])); ?>

                                <div class="input-group input-group-sm">
                                    <?php echo Form::text('ip',$ip_code, array('placeholder' => __('backend.ip')."...",'class' => 'form-control','id'=>'name','required'=>'')); ?>

                                    <span class="input-group-btn">
                <button class="btn btn-default b-a no-shadow" type="submit"><i class="fa fa-search"></i></button>
              </span>
                                </div>
                                <?php echo e(Form::close()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($ip_code!=""): ?>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="table-responsive">
                                <table class="table  table-striped b-a">
                                    <tbody>
                                    <?php
                                    $lmt = 0;
                                    ?>
                                    <?php $__currentLoopData = $AnalyticsVisitors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AnalyticsVisitor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($lmt==0): ?>
                                            <?php
                                            $visitor_loc_0 = $AnalyticsVisitor->location_cor1;
                                            $visitor_loc_1 = $AnalyticsVisitor->location_cor2;

                                            $flag = "";
                                            $country_code = strtolower($AnalyticsVisitor->country_code);
                                            if ($country_code != "unknown") {
                                                $flag = "<div class='flag flag-$country_code' style='display: inline-block'></div> ";
                                            }

                                            ?>
                                            <tr>
                                                <td class="dker"><?php echo e(__('backend.visitorsAnalyticsByCountry')); ?>:
                                                </td>
                                                <td><?php echo $flag; ?> &nbsp;<?php echo e($AnalyticsVisitor->country); ?></td>
                                            </tr>

                                            <tr>
                                                <td class="dker"><?php echo e(__('backend.visitorsAnalyticsByCity')); ?> :</td>
                                                <td><?php echo e($AnalyticsVisitor->city); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="dker"><?php echo e(__('backend.visitorsAnalyticsByRegion')); ?>:
                                                </td>
                                                <td><?php echo e($AnalyticsVisitor->region); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="dker"><?php echo e(__('backend.continent')); ?>:
                                                </td>
                                                <td><?php echo e($AnalyticsVisitor->hostname); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="dker"><?php echo e(__('backend.timezone')); ?>

                                                    :
                                                </td>
                                                <td><?php echo e($AnalyticsVisitor->org); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="dker"><?php echo e(__('backend.visitorsAnalyticsLastVisit')); ?>:
                                                </td>
                                                <td><?php echo e(Helper::formatDate($AnalyticsVisitor->date)); ?>

                                                    &nbsp; <?php echo e(date('h:i A', strtotime($AnalyticsVisitor->time))); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="dker"><?php echo e(__('backend.visitorsAnalyticsByOperatingSystem')); ?>

                                                    :
                                                </td>
                                                <td><?php echo e($AnalyticsVisitor->os); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="dker"><?php echo e(__('backend.visitorsAnalyticsByBrowser')); ?>:
                                                </td>
                                                <td><?php echo e($AnalyticsVisitor->browser); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="dker"><?php echo e(__('backend.visitorsAnalyticsByScreenResolution')); ?>

                                                    :
                                                </td>
                                                <td><?php echo e($AnalyticsVisitor->resolution); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="dker"><?php echo e(__('backend.visitorsAnalyticsByReachWay')); ?>:
                                                </td>
                                                <td><?php echo e($AnalyticsVisitor->referrer); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php
                                        $lmt++
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div id="ipmap" class="b-a" style="height: 460px;"></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if($ip_code!=""): ?>
        <div class="padding">
            <h5><?php echo e(__('backend.activitiesHistory')); ?></h5>
            <div class="box">
                <div class="table-responsive">
                    <table class="table table-striped  b-t">
                        <thead class="dker">
                        <tr>
                            <th class="text-center"><?php echo e(__('backend.topicDate')); ?></th>
                            <th><?php echo e(__('backend.activity')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $ii = 1;
                        ?>
                        <?php
                        foreach($AnalyticsVisitors as $AnalyticsVisitor){
                        foreach($AnalyticsVisitor->vPages as $page){
                        if ($ii > 100) {
                            break 2;
                        }
                        ?>
                        <tr>
                            <td class="text-center dker" style="width: 200px">
                                <small><?php echo e(Helper::formatDate($page->date)); ?>

                                    &nbsp; <?php echo e(date('h:i A', strtotime($page->time))); ?></small>
                            </td>
                            <td class="text-info"><a href="<?php echo e($page->query); ?>" target="_blank"><?php echo $page->title; ?></a>
                            </td>
                        </tr>

                        <?php
                        $ii++;

                        }
                        }
                        ?>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush("after-scripts"); ?>
    <?php
    if ($visitor_loc_0 != "unknown" && $visitor_loc_1 != "unknown") {
    ?>
    <script type="text/javascript"
            src="//maps.google.com/maps/api/js?key=<?php echo e(env("GOOGLE_MAPS_KEY")); ?>&language=<?php echo e(@Helper::currentLanguage()->code); ?>"></script>
    <script type="text/javascript">
        function initialize() {
            var latlng = new google.maps.LatLng(<?php echo $visitor_loc_0; ?>, <?php echo $visitor_loc_1; ?>);
            var myOptions = {
                zoom: 9,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("ipmap"), myOptions);

            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                title: '<?php echo $ip_code; ?>'
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <?php
    }
    ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/analytics/ip.blade.php ENDPATH**/ ?>