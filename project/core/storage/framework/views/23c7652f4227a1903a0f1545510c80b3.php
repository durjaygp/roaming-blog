<?php
// Current Full URL
$fullPagePath = Request::url();
// Char Count of Backend folder Plus 1
$envAdminCharCount = strlen(env('BACKEND_PATH')) + 1;
// URL after Root Path EX: admin/home
$urlAfterRoot = substr($fullPagePath, strpos($fullPagePath, env('BACKEND_PATH')) + $envAdminCharCount);
$mnu_title_var = "title_" . @Helper::currentLanguage()->code;
$mnu_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
?>

<div id="aside" class="app-aside modal fade folded md nav-expand">
    <div class="left navside dark dk" layout="column">
        <div class="navbar navbar-md no-radius">
            <!-- brand -->
            <a class="navbar-brand" href="<?php echo e(route('adminHome')); ?>">
                <img src="<?php echo e(asset('assets/images/kelimelodi-kelime-bulucu-favicon.png')); ?>" alt="Control">
                <span class="hidden-folded inline"><?php echo e(__('backend.control')); ?></span>
            </a>
            <!-- / brand -->
        </div>
        <div flex class="hide-scroll">
            <nav class="scroll nav-active-primary">

                <ul class="nav" ui-nav>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted"><?php echo e(__('backend.main')); ?></small>
                    </li>

                    <li>
                        <a href="<?php echo e(route('adminHome')); ?>" onclick="location.href='<?php echo e(route('adminHome')); ?>'">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3fc;</i>
                  </span>
                            <span class="nav-text"><?php echo e(__('backend.dashboard')); ?></span>
                        </a>
                    </li>


                    <?php if(env('GEOIP_STATUS', false)): ?>
                        <?php if(Helper::GeneralWebmasterSettings("analytics_status")): ?>
                            <?php if(@Auth::user()->permissionsGroup->analytics_status): ?>
                                <?php
                                $currentFolder = "analytics"; // Put folder name here
                                $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));

                                $currentFolder2 = "ip"; // Put folder name here
                                $PathCurrentFolder2 = substr($urlAfterRoot, 0, strlen($currentFolder2));

                                $currentFolder3 = "visitors"; // Put folder name here
                                $PathCurrentFolder3 = substr($urlAfterRoot, 0, strlen($currentFolder3));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$currentFolder || $PathCurrentFolder2==$currentFolder2  || $PathCurrentFolder3==$currentFolder3) ? 'class=active' : ''); ?>>
                                    <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                                        <span class="nav-icon">
                    <i class="material-icons">&#xe1b8;</i>
                  </span>
                                        <span class="nav-text"><?php echo e(__('backend.visitorsAnalytics')); ?></span>
                                    </a>
                                    <ul class="nav-sub">
                                        <li>
                                            <a onclick="location.href='<?php echo e(route('analytics', 'date')); ?>'">
                                            <span
                                                class="nav-text"><?php echo e(__('backend.visitorsAnalyticsBydate')); ?></span>
                                            </a>
                                        </li>

                                        <?php
                                        $currentFolder = "analytics/country"; // Put folder name here
                                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                        ?>
                                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                            <a onclick="location.href='<?php echo e(route('analytics', 'country')); ?>'">
                                            <span
                                                class="nav-text"><?php echo e(__('backend.visitorsAnalyticsByCountry')); ?></span>
                                            </a>
                                        </li>

                                        <?php
                                        $currentFolder = "analytics/city"; // Put folder name here
                                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                        ?>
                                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                            <a onclick="location.href='<?php echo e(route('analytics', 'city')); ?>'">
                                            <span
                                                class="nav-text"><?php echo e(__('backend.visitorsAnalyticsByCity')); ?></span>
                                            </a>
                                        </li>

                                        <?php
                                        $currentFolder = "analytics/os"; // Put folder name here
                                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                        ?>
                                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                            <a onclick="location.href='<?php echo e(route('analytics', 'os')); ?>'">
                                            <span
                                                class="nav-text"><?php echo e(__('backend.visitorsAnalyticsByOperatingSystem')); ?></span>
                                            </a>
                                        </li>

                                        <?php
                                        $currentFolder = "analytics/browser"; // Put folder name here
                                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                        ?>
                                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                            <a onclick="location.href='<?php echo e(route('analytics', 'browser')); ?>'">
                                            <span
                                                class="nav-text"><?php echo e(__('backend.visitorsAnalyticsByBrowser')); ?></span>
                                            </a>
                                        </li>

                                        <?php
                                        $currentFolder = "analytics/referrer"; // Put folder name here
                                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                        ?>
                                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                            <a onclick="location.href='<?php echo e(route('analytics', 'referrer')); ?>'">
                                            <span
                                                class="nav-text"><?php echo e(__('backend.visitorsAnalyticsByReachWay')); ?></span>
                                            </a>
                                        </li>
                                        <?php
                                        $currentFolder = "analytics/hostname"; // Put folder name here
                                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                        ?>
                                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                            <a onclick="location.href='<?php echo e(route('analytics', 'hostname')); ?>'">
                                            <span
                                                class="nav-text"><?php echo e(__('backend.visitorsAnalyticsByHostName')); ?></span>
                                            </a>
                                        </li>
                                        <?php
                                        $currentFolder = "analytics/org"; // Put folder name here
                                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                        ?>
                                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                            <a onclick="location.href='<?php echo e(route('analytics', 'org')); ?>'">
                                            <span
                                                class="nav-text"><?php echo e(__('backend.visitorsAnalyticsByOrganization')); ?></span>
                                            </a>
                                        </li>
                                        <?php
                                        $currentFolder = "visitors"; // Put folder name here
                                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                        ?>
                                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                            <a onclick="location.href='<?php echo e(route('visitors')); ?>'">
                                            <span
                                                class="nav-text"><?php echo e(__('backend.visitorsAnalyticsVisitorsHistory')); ?></span>
                                            </a>
                                        </li>
                                        <?php
                                        $currentFolder = "ip"; // Put folder name here
                                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                        ?>
                                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                            <a href="<?php echo e(route('visitorsIP')); ?>">
                                            <span
                                                class="nav-text"><?php echo e(__('backend.visitorsAnalyticsIPInquiry')); ?></span>
                                            </a>
                                        </li>


                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if(Helper::GeneralWebmasterSettings("newsletter_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->newsletter_status): ?>
                            <?php
                            $currentFolder = "contacts"; // Put folder name here
                            $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                            ?>
                            <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                <a href="<?php echo e(route('contacts')); ?>">
<span class="nav-icon">
<i class="material-icons">&#xe7ef;</i>
</span>
                                    <span class="nav-text"><?php echo e(__('backend.newsletter')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if(Helper::GeneralWebmasterSettings("inbox_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->inbox_status): ?>
                            <?php
                            $currentFolder = "webmails"; // Put folder name here
                            $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                            ?>
                            <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                <a href="<?php echo e(route('webmails')); ?>">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe156;</i>
                  </span>
                                    <span class="nav-text"><?php echo e(__('backend.siteInbox')); ?>

                                        <?php if( @$webmailsNewCount >0): ?>
                                            <badge class="label warn m-l-xs"><?php echo e(@$webmailsNewCount); ?></badge>
                                        <?php endif; ?>
                                    </span>

                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if(Helper::GeneralWebmasterSettings("calendar_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->calendar_status): ?>
                            <?php
                            $currentFolder = "calendar"; // Put folder name here
                            $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                            ?>
                            <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                <a href="<?php echo e(route('calendar')); ?>" onclick="location.href='<?php echo e(route('calendar')); ?>'">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;</i>
                  </span>
                                    <span class="nav-text"><?php echo e(__('backend.calendar')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted"><?php echo e(__('backend.siteData')); ?></small>
                    </li>

                    <?php
                    $data_sections_arr = explode(",", Auth::user()->permissionsGroup->data_sections);
                    ?>
                    <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $GeneralWebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(in_array($GeneralWebmasterSection->id,$data_sections_arr)): ?>
                            <?php
                            if ($GeneralWebmasterSection->$mnu_title_var != "") {
                                $GeneralWebmasterSectionTitle = $GeneralWebmasterSection->$mnu_title_var;
                            } else {
                                $GeneralWebmasterSectionTitle = $GeneralWebmasterSection->$mnu_title_var2;
                            }

                            $LiIcon = "&#xe2c8;";
                            if ($GeneralWebmasterSection->type == 3) {
                                $LiIcon = "&#xe050;";
                            }
                            if ($GeneralWebmasterSection->type == 2) {
                                $LiIcon = "&#xe63a;";
                            }
                            if ($GeneralWebmasterSection->type == 1) {
                                $LiIcon = "&#xe251;";
                            }
                            if ($GeneralWebmasterSection->type == 0) {
                                $LiIcon = "&#xe2c8;";
                            }
                            if ($GeneralWebmasterSection->id == 1) {
                                $LiIcon = "&#xe3e8;";
                            }
                            if ($GeneralWebmasterSection->id == 7) {
                                $LiIcon = "&#xe02f;";
                            }
                            if ($GeneralWebmasterSection->id == 2) {
                                $LiIcon = "&#xe540;";
                            }
                            if ($GeneralWebmasterSection->id == 3) {
                                $LiIcon = "&#xe307;";
                            }
                            if ($GeneralWebmasterSection->id == 8) {
                                $LiIcon = "&#xe8f6;";
                            }

                            // get 9 char after root url to check if is "webmaster"
                            $is_webmaster = substr($urlAfterRoot, 0, 9);
                            ?>
                            <?php if($GeneralWebmasterSection->sections_status > 0 && @Auth::user()->permissionsGroup->view_status == 0): ?>
                                <li <?php echo e(($GeneralWebmasterSection->id == @$WebmasterSection->id && $is_webmaster != "webmaster") ? 'class=active' : ''); ?>>
                                    <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                                        <span class="nav-icon">
                    <i class="material-icons"><?php echo $LiIcon; ?></i>
                  </span>
                                        <span
                                            class="nav-text"><?php echo $GeneralWebmasterSectionTitle; ?></span>
                                    </a>
                                    <ul class="nav-sub">
                                        <?php if($GeneralWebmasterSection->sections_status > 0): ?>

                                            <?php
                                            $currentFolder = "categories"; // Put folder name here
                                            $PathCurrentFolder = substr($urlAfterRoot,
                                                (strlen($GeneralWebmasterSection->id) + 1), strlen($currentFolder));
                                            ?>
                                            <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?> >
                                                <a href="<?php echo e(route('categories',$GeneralWebmasterSection->id)); ?>">
                                                    <span
                                                        class="nav-text"><?php echo e(__('backend.sectionsOf')); ?> <?php echo e($GeneralWebmasterSectionTitle); ?></span>
                                                </a>
                                            </li>
                                        <?php endif; ?>

                                        <?php
                                        $currentFolder = "topics"; // Put folder name here
                                        $PathCurrentFolder = substr($urlAfterRoot,
                                            (strlen($GeneralWebmasterSection->id) + 1), strlen($currentFolder));
                                        ?>
                                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?> >
                                            <a href="<?php echo e(route('topics',$GeneralWebmasterSection->id)); ?>">
                                                <span
                                                    class="nav-text"><?php echo $GeneralWebmasterSectionTitle; ?></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                            <?php else: ?>
                                <li <?php echo e(($GeneralWebmasterSection->id== @$WebmasterSection->id) ? 'class=active' : ''); ?>>
                                    <a href="<?php echo e(route('topics',$GeneralWebmasterSection->id)); ?>">
                  <span class="nav-icon">
                    <i class="material-icons"><?php echo $LiIcon; ?></i>
                  </span>
                                        <span
                                            class="nav-text"><?php echo $GeneralWebmasterSectionTitle; ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    <?php if(Helper::GeneralWebmasterSettings("banners_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->banners_status): ?>
                            <?php
                            $currentFolder = "banners"; // Put folder name here
                            $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                            ?>
                            <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?> >
                                <a href="<?php echo e(route('Banners')); ?>">
<span class="nav-icon">
<i class="material-icons">&#xe433;</i>
</span>
                                    <span class="nav-text"><?php echo e(__('backend.adsBanners')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if(Helper::GeneralWebmasterSettings("settings_status")): ?>
                        <?php if(@Auth::user()->permissionsGroup->settings_status): ?>
                            <li class="nav-header hidden-folded">
                                <small class="text-muted"><?php echo e(__('backend.settings')); ?></small>
                            </li>

                            <?php
                            $currentFolder = "settings"; // Put folder name here
                            $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));

                            $currentFolder2 = "menus"; // Put folder name here
                            $PathCurrentFolder2 = substr($urlAfterRoot, 0, strlen($currentFolder2));

                            $currentFolder3 = "users"; // Put folder name here
                            $PathCurrentFolder3 = substr($urlAfterRoot, 0, strlen($currentFolder3));

                            $currentFolder4 = "file-manager"; // Put folder name here
                            $PathCurrentFolder4 = substr($urlAfterRoot, 0, strlen($currentFolder4));
                            ?>
                            <li <?php echo e(($PathCurrentFolder==$currentFolder || $PathCurrentFolder2==$currentFolder2 || $PathCurrentFolder3==$currentFolder3 || $PathCurrentFolder4==$currentFolder4 ) ? 'class=active' : ''); ?>>
                                <a>
<span class="nav-caret">
<i class="fa fa-caret-down"></i>
</span>
                                    <span class="nav-icon">
<i class="material-icons">&#xe8b8;</i>
</span>
                                    <span class="nav-text"><?php echo e(__('backend.generalSiteSettings')); ?></span>
                                </a>
                                <ul class="nav-sub">
                                    <?php
                                    $currentFolder = "settings"; // Put folder name here
                                    $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                    ?>
                                    <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                        <a href="<?php echo e(route('settings')); ?>"
                                           onclick="location.href='<?php echo e(route('settings')); ?>'">
                                            <span class="nav-text"><?php echo e(__('backend.generalSettings')); ?></span>
                                        </a>
                                    </li>
                                    <?php
                                    $currentFolder = "menus"; // Put folder name here
                                    $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                    ?>
                                    <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                        <a href="<?php echo e(route('menus')); ?>">
                                            <span class="nav-text"><?php echo e(__('backend.siteMenus')); ?></span>
                                        </a>
                                    </li>
                                    <?php
                                    $currentFolder = "file-manager"; // Put folder name here
                                    $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                    ?>
                                    <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                        <a href="<?php echo e(route('FileManager')); ?>">
                                            <span class="nav-text"><?php echo e(__('backend.fileManager')); ?></span>
                                        </a>
                                    </li>
                                    <?php
                                    $currentFolder = "users"; // Put folder name here
                                    $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                                    ?>
                                    <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                                        <a href="<?php echo e(route('users')); ?>">
                                            <span class="nav-text"><?php echo e(__('backend.usersPermissions')); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>


                    <?php if(@Auth::user()->permissionsGroup->webmaster_status): ?>
                        <?php
                        $currentFolder = "webmaster"; // Put folder name here
                        $PathCurrentFolder = substr($urlAfterRoot, 0, strlen($currentFolder));
                        ?>
                        <li <?php echo e(($PathCurrentFolder==$currentFolder) ? 'class=active' : ''); ?>>
                            <a>
<span class="nav-caret">
<i class="fa fa-caret-down"></i>
</span>
                                <span class="nav-icon">
<i class="material-icons">&#xe8be;</i>
</span>
                                <span class="nav-text"><?php echo e(__('backend.webmasterTools')); ?></span>
                            </a>
                            <ul class="nav-sub">
                                <?php
                                $PathCurrentSubFolder = substr($urlAfterRoot, 0, (strlen($currentFolder) + 1));
                                ?>
                                <li <?php echo e(($PathCurrentFolder==$PathCurrentSubFolder) ? 'class=active' : ''); ?>>
                                    <a href="<?php echo e(route('webmasterSettings')); ?>"
                                       onclick="location.href='<?php echo e(route('webmasterSettings')); ?>'">
                                        <span class="nav-text"><?php echo e(__('backend.generalSettings')); ?></span>
                                    </a>
                                </li>
                                <?php
                                $currentSubFolder = "sections"; // Put folder name here
                                $PathCurrentSubFolder = substr($urlAfterRoot, (strlen($currentFolder) + 1),
                                    strlen($currentSubFolder));
                                ?>
                                <li <?php echo e(($PathCurrentSubFolder==$currentSubFolder) ? 'class=active' : ''); ?>>
                                    <a href="<?php echo e(route('WebmasterSections')); ?>">
                                        <span class="nav-text"><?php echo e(__('backend.siteSectionsSettings')); ?></span>
                                    </a>
                                </li>
                                <?php
                                $currentSubFolder = "banners"; // Put folder name here
                                $PathCurrentSubFolder = substr($urlAfterRoot, (strlen($currentFolder) + 1),
                                    strlen($currentSubFolder));
                                ?>
                                <li <?php echo e(($PathCurrentSubFolder==$currentSubFolder) ? 'class=active' : ''); ?>>
                                    <a href="<?php echo e(route('WebmasterBanners')); ?>">
                                        <span class="nav-text"><?php echo e(__('backend.adsBannersSettings')); ?></span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/layouts/menu.blade.php ENDPATH**/ ?>