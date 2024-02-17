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
        <div class="box m-b-0">
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
                <h3><i class="material-icons">&#xe3c9;</i> <?php echo e(__('backend.categoryEdit')); ?></h3>
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

        </div>

        <?php
        $tab_1 = "active";
        $tab_2 = "";
        if (Session::has('activeTab')) {
            if (Session::get('activeTab') == "seo") {
                $tab_1 = "";
                $tab_2 = "active";
            }
        }
        ?>
        <div class="box nav-active-border b-info">
            <ul class="nav nav-md">
                <li class="nav-item inline">
                    <a class="nav-link <?php echo e($tab_1); ?>" href data-toggle="tab" data-target="#tab_details">
                        <span class="text-md"><i class="material-icons">
                                &#xe31e;</i> <?php echo e(__('backend.topicTabCategory')); ?></span>
                    </a>
                </li>
                <?php if(Helper::GeneralWebmasterSettings("seo_status")): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_2); ?>" href data-toggle="tab" data-target="#tab_seo">
                    <span class="text-md"><i class="material-icons">
                            &#xe8e5;</i> <?php echo e(__('backend.seoTabTitle')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="tab-content clear b-t">
                <div class="tab-pane  <?php echo e($tab_1); ?>" id="tab_details">
                    <div class="box-body">
                        <?php echo e(Form::open(['route'=>['categoriesUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Sections->id],'method'=>'POST', 'files' => true])); ?>


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
                                            <option
                                                value="<?php echo e($fatherSection->id); ?>" <?php echo e(($fatherSection->id == $Sections->father_id) ? "selected='selected'":""); ?>><?php echo e($title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                            </div>
                        <?php else: ?>
                            <?php echo Form::hidden('father_id',$Sections->father_id); ?>

                        <?php endif; ?>

                        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($ActiveLanguage->box_status): ?>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-2 form-control-label"><?php echo __('backend.categoryName'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('title_'.@$ActiveLanguage->code,$Sections->{'title_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="form-group row">
                            <label for="photo"
                                   class="col-sm-2 form-control-label"><?php echo __('backend.sectionIcon'); ?></label>
                            <div class="col-sm-10">
                                <?php if($Sections->photo!=""): ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="section_photo" class="col-sm-4 box p-a-xs">
                                                <a target="_blank"
                                                   href="<?php echo e(asset('uploads/sections/'.$Sections->photo)); ?>"><img
                                                        src="<?php echo e(asset('uploads/sections/'.$Sections->photo)); ?>"
                                                        class="img-responsive">
                                                    <?php echo e($Sections->photo); ?>

                                                </a>
                                                <br>
                                                <a onclick="document.getElementById('section_photo').style.display='none';document.getElementById('photo_delete').value='1';document.getElementById('undo').style.display='block';"
                                                   class="btn btn-sm btn-default"><?php echo __('backend.delete'); ?></a>
                                            </div>
                                            <div id="undo" class="col-sm-4 p-a-xs" style="display: none">
                                                <a onclick="document.getElementById('section_photo').style.display='block';document.getElementById('photo_delete').value='0';document.getElementById('undo').style.display='none';">
                                                    <i class="material-icons">
                                                        &#xe166;</i> <?php echo __('backend.undoDelete'); ?></a>
                                            </div>

                                            <?php echo Form::hidden('photo_delete','0', array('id'=>'photo_delete')); ?>

                                        </div>
                                    </div>

                                <?php endif; ?>
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

                        <div class="form-group row">
                            <label for="link_status"
                                   class="col-sm-2 form-control-label"><?php echo __('backend.status'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','1',($Sections->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(__('backend.active')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','0',($Sections->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(__('backend.notActive')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <?php if($WebmasterSection->section_icon_status): ?>
                            <div class="form-group row">
                                <label for="icon"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.sectionIcon'); ?></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <?php echo Form::text('icon',$Sections->icon, array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'icon', 'data-placement'=>'bottomRight')); ?>

                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group row m-t-md">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                        &#xe31b;</i> <?php echo __('backend.update'); ?></button>
                                <a href="<?php echo e(route('categories',$WebmasterSection->id)); ?>"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
                            </div>
                        </div>

                        <?php echo e(Form::close()); ?>

                    </div>
                </div>

                <?php echo $__env->make('dashboard.categories.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

        // Js Slug
        function slugify(string) {
            return string
                .toString()
                .trim()
                .toLowerCase()
                .replace(/\s+/g, "-")
                .replace(/[^\w\-]+/g, "")
                .replace(/\-\-+/g, "-")
                .replace(/^-+/, "")
                .replace(/-+$/, "");
        }

        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($ActiveLanguage->box_status): ?>
        $("#seo_title_<?php echo e(@$ActiveLanguage->code); ?>").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#title_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text($(this).val());
            } else {
                $("#title_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text("<?php echo $Sections->{'title_' . @$ActiveLanguage->code}; ?>");
            }
        });
        $("#seo_description_<?php echo e(@$ActiveLanguage->code); ?>").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#desc_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text($(this).val());
            } else {
                $("#desc_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text("<?php echo Helper::GeneralSiteSettings("site_desc_" . @$ActiveLanguage->code); ?>");
            }
        });
        $("#seo_url_slug_<?php echo e(@$ActiveLanguage->code); ?>").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#url_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text("<?php echo url(''); ?>/" + slugify($(this).val()));
            } else {
                $("#url_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text("<?php echo Helper::categoryURL($Sections->id, @$ActiveLanguage->code); ?>");
            }
        });
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/categories/edit.blade.php ENDPATH**/ ?>