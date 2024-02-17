<?php if(@Auth::check()): ?>
    <?php if(!Helper::GeneralSiteSettings("site_status")): ?>
        <div class="text-center bg-warning">
            <div class="row m-b-0">
                <div class="h6">
                    <?php echo e(__('backend.websiteClosedForVisitors')); ?>

                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
<header>
    <div class="site-top">
        <div class="container">
            <div>
                <div class="pull-right">
                    <!-- <?php if(Helper::GeneralWebmasterSettings("dashboard_link_status")): ?>
                        <?php if(Auth::check()): ?>
                            <div class="btn-group header-dropdown">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i> <?php echo e(Auth::user()->name); ?> <i class="fa fa-angle-down"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                       href="<?php echo e(route("adminHome")); ?>"> <i
                                            class="fa fa-cog"></i> <?php echo e(__('frontend.dashboard')); ?></a>
                                    <?php if(Auth::user()->permissions ==0 || Auth::user()->permissions ==1): ?>
                                        <a class="dropdown-item"
                                           href="<?php echo e(route('usersEdit',Auth::user()->id)); ?>"> <i
                                                class="fa fa-user"></i> <?php echo e(__('backend.profile')); ?></a>
                                    <?php endif; ?>
                                    <?php if(Helper::GeneralWebmasterSettings("inbox_status")): ?>
                                        <?php if(@Auth::user()->permissionsGroup->inbox_status): ?>
                                            <a href="<?php echo e(route('webmails')); ?>" class="dropdown-item">
                                                <i class="fa fa-envelope"></i> <?php echo e(__('backend.siteInbox')); ?>

                                            </a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <a class="dropdown-item" href="<?php echo e(url('/logout')); ?>"><i
                                            class="fa fa-sign-out"></i> <?php echo e(__('backend.logout')); ?></a>
                                </div>
                            </div>
                        <?php else: ?>
                            <strong>
                                <a href="<?php echo e(route("adminHome")); ?>"><i
                                        class="fa fa-cog"></i> <?php echo e(__('frontend.dashboard')); ?>

                                </a>
                            </strong>
                        <?php endif; ?>
                    <?php endif; ?> -->
                    <?php if(count(Helper::languagesList()) >1): ?>
                        <div class="btn-group header-dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <?php if(@Helper::currentLanguage()->icon !=""): ?>
                                    <img
                                        src="<?php echo e(asset('assets/dashboard/images/flags/'.@Helper::currentLanguage()->icon.".svg")); ?>"
                                        alt="">
                                <?php endif; ?>
                                <?php echo e(@Helper::currentLanguage()->title); ?> <i class="fa fa-angle-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(URL::to('lang/'.$ActiveLanguage->code)); ?>" class="dropdown-item" aria-label="Kelimelodi">
                                        <?php if($ActiveLanguage->icon !=""): ?>
                                            <img
                                                src="<?php echo e(asset('assets/dashboard/images/flags/'.$ActiveLanguage->icon.".svg")); ?>"
                                                alt="">
                                        <?php endif; ?>
                                        <?php echo e($ActiveLanguage->title); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- <div class="pull-left">
                    <?php if(Helper::GeneralSiteSettings("contact_t3") !=""): ?>
                        <i class="fa fa-phone"></i> &nbsp;<a
                            href="tel:<?php echo e(Helper::GeneralSiteSettings("contact_t5")); ?>"><span
                                dir="ltr"><?php echo e(Helper::GeneralSiteSettings("contact_t5")); ?></span></a>
                    <?php endif; ?>
                    <?php if(Helper::GeneralSiteSettings("contact_t6") !=""): ?>
                        <span class="top-email">
                        &nbsp; | &nbsp;
                    <i class="fa fa-envelope"></i> &nbsp;<a
                                href="mailto:<?php echo e(Helper::GeneralSiteSettings("contact_t6")); ?>"><?php echo e(Helper::GeneralSiteSettings("contact_t6")); ?></a>
                    </span>
                    <?php endif; ?>
                </div> -->
            </div>
        </div>
    </div>
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" id="buttonHeaderMobile" class="navbar-toggle" name="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(route("Home")); ?>" aria-label="Kelimelodi">
                    <?php if(Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code) !=""): ?>
                        <img alt=""
                             src="<?php echo e(URL::to('uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code))); ?>">
                    <?php else: ?>
                        <img alt="" src="<?php echo e(URL::to('uploads/settings/nologo.png')); ?>">
                    <?php endif; ?>

                </a>
            </div>
            <?php echo $__env->make('frontEnd.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</header>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/includes/header.blade.php ENDPATH**/ ?>