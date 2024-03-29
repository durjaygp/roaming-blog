<?php $__env->startSection('title', Helper::GeneralSiteSettings("site_title_".@Helper::currentLanguage()->code)); ?>
<?php $__env->startPush("after-styles"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/dashboard/css/flags.css')); ?>" type="text/css"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding p-b-0">
        <div class="margin">
            <h5 class="m-b-0 _300"><?php echo e(__('backend.hi')); ?> <span
                    class="text-primary"><?php echo e(Auth::user()->name); ?></span>, <?php echo e(__('backend.welcomeBack')); ?>

            </h5>
        </div>
        <?php if(@Auth::user()->permissionsGroup->home_status): ?>
            <?php if(@Auth::user()->permissionsGroup->{'home_details_'. @Helper::currentLanguage()->code} !=""): ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box p-a">
                            <?php echo @Auth::user()->permissionsGroup->{'home_details_'. @Helper::currentLanguage()->code}; ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(@Auth::user()->permissionsGroup->home_links !=""): ?>
                <?php
                try {
                $home_links = json_decode(@Auth::user()->permissionsGroup->home_links);
                } catch (\Exception $e) {
                $home_links = [];
                }
                ?>
                <div class="row">
                    <?php if(count($home_links) >0): ?>
                        <?php $__currentLoopData = $home_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$home_link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <a href="<?php echo e(@$home_link->btn_link); ?>"
                                   <?php echo e((@$home_link->btn_target)?"target=\"_blank\"":""); ?>

                                   class="m-b w-100 <?php echo @$home_link->btn_class; ?>"><?php echo @$home_link->{'btn_title_'. @Helper::currentLanguage()->code}; ?></a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="row">
                <?php
                    if (env('GEOIP_STATUS', false)){
                        $ik_limit = 4;
                        $b_cls = 6;
                        $r_cls = "col-sm-12 col-md-5 col-lg-4";
                        }else{
                        $ik_limit = 8;
                        $b_cls = 3;
                        $r_cls = "col-sm-12 col-md-12 col-lg-12";
                        }
                    ?>
                    <div class="<?php echo $r_cls; ?>">
                        <div class="row">
                            <?php
                            $data_sections_arr = explode(",", Auth::user()->permissionsGroup->data_sections);
                            $clr_ary = array("info", "danger", "success", "accent",);
                            $ik = 0;
                            $mnu_title_var = "title_" . @Helper::currentLanguage()->code;
                            $mnu_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                            ?>
                            <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $headerWebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(in_array($headerWebmasterSection->id,$data_sections_arr)): ?>
                                    <?php if($ik<$ik_limit): ?>
                                        <?php
                                        if ($headerWebmasterSection->$mnu_title_var != "") {
                                            $GeneralWebmasterSectionTitle = $headerWebmasterSection->$mnu_title_var;
                                        } else {
                                            $GeneralWebmasterSectionTitle = $headerWebmasterSection->$mnu_title_var2;
                                        }
                                        $LiIcon = "&#xe2c8;";
                                        if ($headerWebmasterSection->type == 3) {
                                            $LiIcon = "&#xe050;";
                                        }
                                        if ($headerWebmasterSection->type == 2) {
                                            $LiIcon = "&#xe63a;";
                                        }
                                        if ($headerWebmasterSection->type == 1) {
                                            $LiIcon = "&#xe251;";
                                        }
                                        if ($headerWebmasterSection->type == 0) {
                                            $LiIcon = "&#xe2c8;";
                                        }
                                        if ($headerWebmasterSection->id == 1) {
                                            $LiIcon = "&#xe3e8;";
                                        }
                                        if ($headerWebmasterSection->id == 7) {
                                            $LiIcon = "&#xe02f;";
                                        }
                                        if ($headerWebmasterSection->id == 2) {
                                            $LiIcon = "&#xe540;";
                                        }
                                        if ($headerWebmasterSection->id == 3) {
                                            $LiIcon = "&#xe307;";
                                        }
                                        if ($headerWebmasterSection->id == 8) {
                                            $LiIcon = "&#xe8f6;";
                                        }

                                        ?>
                                        <div class="col-xs-<?php echo e($b_cls); ?>">
                                            <div class="box p-a" style="cursor: pointer"
                                                 onclick="location.href='<?php echo e(route('topics',$headerWebmasterSection->id)); ?>'">
                                                <a href="<?php echo e(route('topics',$headerWebmasterSection->id)); ?>">
                                                    <div class="pull-left m-r">
                                                        <i class="material-icons  text-2x text-<?php echo e(@$clr_ary[$ik]); ?> m-y-sm"><?php echo $LiIcon; ?></i>
                                                    </div>
                                                    <div class="clear">
                                                        <div
                                                            class="text-muted"><?php echo e($GeneralWebmasterSectionTitle); ?></div>
                                                        <h4 class="m-a-0 text-md _600"><?php echo e($headerWebmasterSection->topics->count()); ?></h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                        $ik++
                                        ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if(env('GEOIP_STATUS', false)): ?>
                                <div class="col-xs-12">
                                    <div class="row-col box-color text-center primary">
                                        <div class="row-cell p-a">
                                            <?php echo e(__('backend.visitors')); ?>

                                            <h4 class="m-a-0 text-md _600"><a href><?php echo e($TodayVisitors); ?></a></h4>
                                        </div>
                                        <div class="row-cell p-a dker">
                                            <?php echo e(__('backend.pageViews')); ?>

                                            <h4 class="m-a-0 text-md _600"><a href><?php echo e($TodayPages); ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if(env('GEOIP_STATUS', false)): ?>
                        <div class="col-sm-12 col-md-7 col-lg-8">
                            <div class="row-col box bg">
                                <div class="col-sm-8">
                                    <div class="box-header">
                                        <h3><?php echo e(__('backend.visitors')); ?></h3>
                                        <small><?php echo e(__('backend.lastFor7Days')); ?></small>
                                    </div>
                                    <div class="box-body">
                                        <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
			              [
			                {
			                  data: [
                  <?php
                                        $ii = 1;
                                        ?>
                                        <?php $__currentLoopData = $Last7DaysVisitors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php if($ii<=10): ?>
                                        <?php if($ii!=1): ?>
                                            ,
<?php endif; ?>
                                        <?php
                                        $i2 = 0;
                                        ?>
                                        <?php $__currentLoopData = $id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if ($i2 == 1) {
                                        ?>
                                            [<?php echo e($ii); ?>, <?php echo e($val); ?>]
                                <?php
                                        }
                                        $i2++;
                                        ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        <?php $ii++;?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            ],
                                          points: { show: true, radius: 0},
                                          splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 }
                                        },
                                        {
                                          data: [
<?php
                                        $ii = 1;
                                        ?>
                                        <?php $__currentLoopData = $Last7DaysVisitors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php if($ii<=10): ?>
                                        <?php if($ii!=1): ?>
                                            ,
<?php endif; ?>
                                        <?php
                                        $i2 = 0;
                                        ?>
                                        <?php $__currentLoopData = $id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if ($i2 == 2) {
                                        ?>
                                            [<?php echo e($ii); ?>, <?php echo e($val); ?>]
                                <?php
                                        }
                                        $i2++;
                                        ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        <?php $ii++;?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            ],
              points: { show: true, radius: 0},
              splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 }
            }
            ],
            {
            colors: ['#0cc2aa','#fcc100'],
            series: { shadowSize: 3 },
            xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
            yaxis:{ show: true, font: { color: '#ccc' }},
            grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
            tooltip: true,
            tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
            }
" style="height:162px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 dker">
                                    <div class="box-header">
                                        <h3><?php echo e(__('backend.reports')); ?></h3>
                                    </div>
                                    <div class="box-body">
                                        <p class="text-muted">
                                            <?php echo e(__('backend.reportsDetails')); ?> : <br>
                                            <a href="<?php echo e(route('analytics', 'date')); ?>"><?php echo e(__('backend.visitorsAnalyticsBydate')); ?></a>,
                                            <a href="<?php echo e(route('analytics', 'country')); ?>"><?php echo e(__('backend.visitorsAnalyticsByCountry')); ?></a>,
                                            <a href="<?php echo e(route('analytics', 'city')); ?>"><?php echo e(__('backend.visitorsAnalyticsByCity')); ?></a>,
                                            <a href="<?php echo e(route('analytics', 'os')); ?>"><?php echo e(__('backend.visitorsAnalyticsByOperatingSystem')); ?></a>,
                                            <a href="<?php echo e(route('analytics', 'browser')); ?>"><?php echo e(__('backend.visitorsAnalyticsByBrowser')); ?></a>,
                                            <a href="<?php echo e(route('analytics', 'referrer')); ?>"><?php echo e(__('backend.visitorsAnalyticsByReachWay')); ?></a>,
                                            <a href="<?php echo e(route('analytics', 'hostname')); ?>"><?php echo e(__('backend.visitorsAnalyticsByHostName')); ?></a>,
                                            <a href="<?php echo e(route('analytics', 'org')); ?>"><?php echo e(__('backend.visitorsAnalyticsByOrganization')); ?></a>
                                        </p>
                                        <a href="<?php echo e(route('analytics', 'date')); ?>" style="margin-bottom: 5px;"
                                           class="btn btn-sm btn-outline rounded b-success"><?php echo e(__('backend.viewMore')); ?></a><br>
                                        <a href="<?php echo e(route('visitors')); ?>"
                                           class="btn btn-sm btn-outline rounded b-info"><?php echo e(__('backend.visitorsAnalyticsVisitorsHistory')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if(env('GEOIP_STATUS', false)): ?>
                    <div class="row">
                        <div class="col-md-12 col-xl-4">
                            <div class="box">
                                <div class="box-header b-b">
                                    <h3><?php echo e(__('backend.visitorsRate')); ?></h3>
                                    <small><?php echo e(__('backend.visitorsRateToday')." [ ".Helper::formatDate(date('Y-m-d'))." ]"); ?></small>
                                </div>
                                <div class="box-body">

                                    <div ui-jp="plot" ui-options="
              [
                {
                  data: [<?php echo $TodayVisitorsRate; ?>],
                  points: { show: true, radius: 5},
                  splines: { show: true, tension: 0.45, lineWidth: 0, fill: 0.4}
                }
              ],
              {
                colors: ['#0cc2aa'],
                series: { shadowSize: 3 },
                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                yaxis:{ show: true, font: { color: '#ccc' }, min:1},
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
                tooltip: true,
                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
              }
            " style="height:200px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="box" style="min-height: 300px">
                                <div class="box-header">
                                    <h3><?php echo e(__('backend.browsers')); ?></h3>
                                    <small><?php echo e(__('backend.browsersCalculated')); ?></small>
                                </div>

                                <?php if($TodayByBrowser1_val >0): ?>
                                    <div class="text-center b-t">
                                        <div class="row-col">
                                            <div class="row-cell p-a">
                                                <div class="inline m-b">
                                                    <div ui-jp="easyPieChart" class="easyPieChart"
                                                         ui-refresh="app.setting.color"
                                                         data-redraw='true' data-percent="55" ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#0cc2aa',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
                                                        <div>
                                                            <h5>
                                                                <?php
                                                                echo $perc1 = round(($TodayByBrowser1_val * 100) / ($TodayByBrowser1_val + $TodayByBrowser2_val)) . "%";
                                                                ?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <?php echo e($TodayByBrowser1); ?>

                                                    <small class="block m-b"><?php echo e($TodayByBrowser1_val); ?></small>
                                                    <a href="<?php echo e(route('analytics', 'browser')); ?>"
                                                       class="btn btn-sm white text-u-c rounded"><?php echo e(__('backend.more')); ?></a>
                                                </div>
                                            </div>
                                            <div class="row-cell p-a dker">
                                                <div class="inline m-b">
                                                    <div ui-jp="easyPieChart" class="easyPieChart"
                                                         ui-refresh="app.setting.color"
                                                         data-redraw='true' data-percent="45" ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#fcc100',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
                                                        <div>
                                                            <h5>
                                                                <?php
                                                                echo $perc1 = round(($TodayByBrowser2_val * 100) / ($TodayByBrowser1_val + $TodayByBrowser2_val)) . "%";
                                                                ?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <?php echo e($TodayByBrowser2); ?>

                                                    <small class="block m-b"><?php echo e($TodayByBrowser2_val); ?></small>
                                                    <a href="<?php echo e(route('analytics', 'browser')); ?>"
                                                       class="btn btn-sm white text-u-c rounded"><?php echo e(__('backend.more')); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="box light lt" style="min-height: 300px">
                                <div class="box-header">
                                    <h3> <?php echo e(__('backend.todayByCountry')); ?></h3>
                                </div>
                                <div class="box-tool">
                                    <ul class="nav">
                                        <li class="nav-item inline">
                                            <a href="<?php echo e(route('analytics', 'country')); ?>"
                                               class="btn btn-sm white text-u-c rounded"><?php echo e(__('backend.more')); ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <?php if(count($TodayByCountry) == 0): ?>
                                    <div class="text-center m-t-1" style="color:#bbb">
                                        <h1><i class="material-icons">&#xe1b7;</i></h1>
                                        <?php echo e(__('backend.noData')); ?></div>
                                <?php else: ?>
                                    <ul class="list no-border p-b">
                                        <?php
                                        $ii = 1;
                                        ?>
                                        <?php $__currentLoopData = $TodayByCountry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($ii<=4): ?>
                                                <li class="list-item">
                                                    <?php
                                                    $i2 = 0;
                                                    ?>

                                                    <?php
                                                    $flag = "";
                                                    $country_code = strtolower(@$id["code"]);
                                                    if ($country_code != "unknown") {
                                                        $flag = "<div class='flag flag-$country_code' style='display: inline-block'></div> ";
                                                    }
                                                    ?>

                                                    <a herf class="list-left">
	                  <span class="w-40 rounded dker">
		                  <span><?php echo e(@$id["code"]); ?></span>
		              </span>
                                                    </a>
                                                    <div class="list-body">
                                                        <div><?php echo $flag; ?> <?php echo e(@$id["name"]); ?></div>
                                                        <small class="text-muted text-ellipsis">
                                                            <?php echo e(__('backend.visitors')); ?> : <?php echo e(@$id["visits"]); ?>,
                                                            <?php echo e(__('backend.pageViews')); ?> : <?php echo e(@$id["pages"]); ?>

                                                        </small>
                                                    </div>


                                                </li>
                                            <?php endif; ?>
                                            <?php $ii++;?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                <?php endif; ?>
                <div class="row">
                    <?php
                    $col_count = 0;
                    if (Helper::GeneralWebmasterSettings("inbox_status")) {
                        if (Auth::user()->permissionsGroup->inbox_status) {
                            $col_count++;
                        }
                    }
                    if (Helper::GeneralWebmasterSettings("calendar_status")) {
                        if (Auth::user()->permissionsGroup->calendar_status) {
                            $col_count++;
                        }
                    }
                    if (Helper::GeneralWebmasterSettings("newsletter_status")) {
                        if (Auth::user()->permissionsGroup->newsletter_status) {
                            $col_count++;
                        }
                    }
                    $col_width = 12;
                    if ($col_count > 0) {
                        $col_width = 12 / $col_count;
                    }
                    ?>

                    <?php if(Helper::GeneralWebmasterSettings("inbox_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->inbox_status): ?>
                            <div class="col-md-12 col-xl-<?php echo e($col_width); ?>">
                                <div class="box m-b-0" style="min-height: 370px">
                                    <div class="box-header">
                                        <h3><?php echo e(__('backend.latestMessages')); ?></h3>
                                    </div>
                                    <div class="box-tool">
                                        <ul class="nav">
                                            <li class="nav-item inline dropdown">
                                                <a class="nav-link text-muted p-x-xs" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                    <a class="dropdown-item"
                                                       href="<?php echo e(route("webmails")); ?>"> <?php echo __('backend.inbox'); ?> </a>
                                                    <a class="dropdown-item"
                                                       href="<?php echo e(route("webmails",["group_id"=>"sent"])); ?>"><?php echo __('backend.sent'); ?></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php if(count($Webmails) == 0): ?>
                                        <div class="text-center m-t-1" style="color:#bbb">
                                            <h1><i class="material-icons">&#xe156;</i></h1>
                                            <?php echo e(__('backend.noData')); ?></div>
                                    <?php else: ?>
                                        <ul class="list-group no-border">
                                            <?php $__currentLoopData = $Webmails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Webmail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                $s4ds_current_date = date('Y-m-d', $_SERVER['REQUEST_TIME']);
                                                $day_mm = date('Y-m-d', strtotime($Webmail->date));
                                                if ($day_mm == $s4ds_current_date) {
                                                    $dtformated = date('h:i A', strtotime($Webmail->date));
                                                } else {
                                                    $dtformated = Helper::formatDate($Webmail->date);
                                                }

                                                try {
                                                    $groupColor = $Webmail->webmailsGroup->color;
                                                    $groupName = $Webmail->webmailsGroup->name;
                                                } catch (Exception $e) {
                                                    $groupColor = "";
                                                    $groupName = "";
                                                }

                                                $fontStyle = "";
                                                $unreadIcon = "&#xe151;";
                                                $unreadbg = "";
                                                $unreadText = "";
                                                if ($Webmail->status == 0) {
                                                    $fontStyle = "_700";
                                                    $unreadIcon = "&#xe0be;";
                                                    $unreadbg = "style=\"background: $groupColor \"";
                                                    $unreadText = "style=\"color: $groupColor \"";
                                                }
                                                ?>
                                                <li class="list-group-item">
                                                    <div class="pull-right">
                                                        <small><?php echo e($dtformated); ?></small>
                                                    </div>
                                                    <a href="<?php echo e(route("webmailsEdit",["id"=>$Webmail->id])); ?>"
                                                       class="pull-left w-40 m-r">
                                    <span class="w-40 rounded danger" style="background: <?php echo $groupColor; ?>">
		                  <i class="material-icons"><?php echo $unreadIcon; ?></i>
		                </span>
                                                    </a>
                                                    <div class="clear">
                                                        <a href="<?php echo e(route("webmailsEdit",["id"=>$Webmail->id])); ?>"
                                                           class="_500 block"><?php echo e($Webmail->from_name); ?></a>
                                                        <span class="text-muted"><?php echo e($Webmail->title); ?></span>
                                                    </div>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>

                                        <div class="box-footer">
                                            <a href="<?php echo e(route("webmails",["group_id"=>"create"])); ?>"
                                               class="btn btn-sm btn-outline b-primary rounded text-u-c pull-right"><?php echo e(__('backend.compose')); ?></a>
                                            <a href="<?php echo e(route("webmails")); ?>"
                                               class="btn btn-sm white text-u-c rounded"><?php echo e(__('backend.more')); ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if(Helper::GeneralWebmasterSettings("calendar_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->calendar_status): ?>
                            <div class="col-md-12 col-xl-<?php echo e($col_width); ?>">
                                <div class="box m-b-0" style="min-height: 370px">
                                    <div class="box-header">
                                        <h3><?php echo e(__('backend.notesEvents')); ?></h3>
                                    </div>
                                    <div class="box-tool">
                                        <ul class="nav">
                                            <li class="nav-item inline">
                                                <a href="<?php echo e(route("calendarCreate")); ?>"
                                                   class="btn btn-sm white text-u-c rounded"><?php echo e(__('backend.addNew')); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="box-body">
                                        <?php if(count($Events) == 0): ?>
                                            <div class="text-center m-t-1" style="color:#bbb">
                                                <h1><i class="material-icons">&#xe5c3;</i></h1>
                                                <?php echo e(__('backend.noData')); ?></div>
                                        <?php else: ?>
                                            <div class="streamline b-l m-l">
                                                <?php $__currentLoopData = $Events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                if ($Event->type == 3) {
                                                    $cls = "info";
                                                } elseif ($Event->type == 2) {
                                                    $cls = "danger";
                                                } elseif ($Event->type == 1) {
                                                    $cls = "success";
                                                } else {
                                                    $cls = "black";
                                                }
                                                ?>
                                                    <div class="sl-item  b-<?php echo e($cls); ?>">
                                                        <div class="sl-content">
                                                            <div class="sl-date text-muted">
                                                                <?php if($Event->type ==1 || $Event->type ==2): ?>
                                                                    <?php echo e(Helper::formatDate($Event->start_date)." ".date("h:i A", strtotime($Event->start_date))); ?>

                                                                <?php else: ?>
                                                                    <?php echo e(Helper::formatDate($Event->start_date)); ?>

                                                                <?php endif; ?>
                                                            </div>
                                                            <div>
                                                                <a href="<?php echo e(route("calendarEdit",["id"=>$Event->id])); ?>"><?php echo e($Event->title); ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if(Helper::GeneralWebmasterSettings("newsletter_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->newsletter_status): ?>
                            <div class="col-md-12 col-xl-<?php echo e($col_width); ?>">
                                <div class="box m-b-0" style="min-height: 370px">
                                    <div class="box-header">
                                        <h3><?php echo e(__('backend.latestContacts')); ?></h3>
                                    </div>
                                    <div class="box-tool">
                                        <ul class="nav">
                                            <li class="nav-item inline">
                                                <a href="<?php echo e(route("contacts")); ?>"
                                                   class="btn btn-sm white text-u-c rounded"><?php echo e(__('backend.addNew')); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php if(count($Contacts) == 0): ?>
                                        <div class="text-center m-t-1" style="color:#bbb">
                                            <h1><i class="material-icons">&#xe7ef;</i></h1>
                                            <?php echo e(__('backend.noData')); ?></div>
                                    <?php else: ?>
                                        <ul class="list no-border p-b">
                                            <?php $__currentLoopData = $Contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="list-item">
                                                    <a href="<?php echo e(route("contactsEdit",["id"=>$Contact->id])); ?>"
                                                       class="list-left">
	                	<span class="w-40 avatar">
                            <?php if($Contact->photo!=""): ?>
                                <img src="<?php echo e(asset('uploads/contacts/'.$Contact->photo)); ?>"
                                     alt="<?php echo e($Contact->first_name); ?> <?php echo e($Contact->last_name); ?>">
                            <?php else: ?>
                                <img src="<?php echo e(asset('uploads/contacts/profile.jpg')); ?>"
                                     alt="<?php echo e($Contact->first_name); ?> <?php echo e($Contact->last_name); ?>" style="opacity: 0.5">
                            <?php endif; ?>
	                    </span>
                                                    </a>
                                                    <div class="list-body">
                                                        <div>
                                                            <a href="<?php echo e(route("contactsEdit",["id"=>$Contact->id])); ?>"><?php echo e($Contact->first_name); ?> <?php echo e($Contact->last_name); ?></a>
                                                        </div>
                                                        <small class="text-muted text-ellipsis"><span
                                                                dir="ltr"><?php echo e($Contact->phone); ?></span></small>
                                                    </div>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/home.blade.php ENDPATH**/ ?>