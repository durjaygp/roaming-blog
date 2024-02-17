<?php
$title_var = "title_" . @Helper::currentLanguage()->code;
$title_var2 = "title_" . env('DEFAULT_LANGUAGE');
if ($WebmasterSection->$title_var != "") {
    $WebmasterSectionTitle = $WebmasterSection->$title_var;
} else {
    $WebmasterSectionTitle = $WebmasterSection->$title_var2;
}
?>

<?php $__env->startSection('title', __('backend.sectionsOf')." ".$WebmasterSectionTitle); ?>
<?php $__env->startPush("after-styles"); ?>
    <link href="<?php echo e(asset("assets/dashboard/js/iconpicker/fontawesome-iconpicker.min.css")); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <?php
                $title_var = "title_" . @Helper::currentLanguage()->code;
                $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                if ($WebmasterSection->$title_var != "") {
                    $WebmasterSectionTitle = $WebmasterSection->$title_var;
                } else {
                    $WebmasterSectionTitle = $WebmasterSection->$title_var2;
                }
                ?>
                <h3><i class="material-icons">&#xe02e;</i> <?php echo e(__('backend.categoryNew')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                    <a><?php echo $WebmasterSectionTitle; ?></a> /
                    <a><?php echo e(__('backend.sectionsOf')); ?>  <?php echo $WebmasterSectionTitle; ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route('categories',$WebmasterSection->id)); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <?php echo e(Form::open(['route'=>['categoriesStore',$WebmasterSection->id],'method'=>'POST', 'files' => true ])); ?>


                <?php if($WebmasterSection->sections_status==2): ?>
                    <div class="form-group row">
                        <label for="father_id"
                               class="col-sm-2 form-control-label"><?php echo __('backend.categoryFather'); ?> </label>
                        <div class="col-sm-10">
                            <select name="father_id" id="father_id" class="form-control c-select">
                                <option value="0">- - <?php echo __('backend.categoryNoFather'); ?> - -</option>
                                <?php
                                $title_var = "title_" . @Helper::currentLanguage()->code;
                                $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                ?>
                                <?php $__currentLoopData = $fatherSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fatherSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    if ($fatherSection->$title_var != "") {
                                        $title = $fatherSection->$title_var;
                                    } else {
                                        $title = $fatherSection->$title_var2;
                                    }
                                    ?>
                                    <option value="<?php echo e($fatherSection->id); ?>"><?php echo e($title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                    </div>
                <?php else: ?>
                    <?php echo Form::hidden('father_id','0'); ?>

                <?php endif; ?>

                <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($ActiveLanguage->box_status): ?>
                        <div class="form-group row">
                            <label
                                class="col-sm-2 form-control-label"><?php echo __('backend.categoryName'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                            </label>
                            <div class="col-sm-10">
                                <?php echo Form::text('title_'.@$ActiveLanguage->code,'', array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="form-group row">
                    <label for="photo"
                           class="col-sm-2 form-control-label"><?php echo __('backend.bannerPhoto'); ?></label>
                    <div class="col-sm-10">
                        <?php echo Form::file('photo', array('class' => 'form-control','id'=>'photo','accept'=>'image/*')); ?>

                    </div>
                </div>

                <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                    <div class="offset-sm-2 col-sm-10">
                        <small>
                            <i class="material-icons">&#xe8fd;</i>
                            <?php echo __('backend.imagesTypes'); ?>

                        </small>
                    </div>
                </div>

                <?php if($WebmasterSection->section_icon_status): ?>
                    <div class="form-group row">
                        <label for="icon"
                               class="col-sm-2 form-control-label"><?php echo __('backend.sectionIcon'); ?></label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <?php echo Form::text('icon','', array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'icon', 'data-placement'=>'bottomRight')); ?>

                                <span class="input-group-addon"></span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


                <div class="form-group row m-t-md">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> <?php echo __('backend.add'); ?></button>
                        <a href="<?php echo e(route('categories',$WebmasterSection->id)); ?>"
                           class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
                    </div>
                </div>

                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush("after-scripts"); ?>
    <script src="<?php echo e(asset("assets/dashboard/js/iconpicker/fontawesome-iconpicker.js")); ?>"></script>
    <script>
        $(function () {
            $('.icp-auto').iconpicker({placement: '<?php echo e((@Helper::currentLanguage()->direction=="rtl")?"topLeft":"topRight"); ?>'});
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/categories/create.blade.php ENDPATH**/ ?>