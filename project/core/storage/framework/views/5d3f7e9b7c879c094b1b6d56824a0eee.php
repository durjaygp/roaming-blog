<?php $__env->startSection('title', __('backend.siteMenus')); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe02e;</i> <?php echo e(__('backend.newLink')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                    <a href=""><?php echo e(__('backend.settings')); ?></a> /
                    <a href=""><?php echo e(__('backend.siteMenus')); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route("menus",["ParentMenuId"=>$ParentMenuId])); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <?php echo e(Form::open(['route'=>['menusStore',$ParentMenuId],'method'=>'POST', 'files' => true ])); ?>

                <?php echo Form::hidden('ParentMenuId',$ParentMenuId); ?>


                <div class="form-group row">
                    <label for="father_id"
                           class="col-sm-3 form-control-label"><?php echo __('backend.fatherSection'); ?> </label>
                    <div class="col-sm-9">
                        <select name="father_id" id="father_id" class="form-control c-select">
                            <option value="<?php echo e($ParentMenuId); ?>">- - <?php echo __('backend.sectionNoFather'); ?> - -
                            </option>
                            <?php
                            $title_var = "title_" . @Helper::currentLanguage()->code;
                            $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                            ?>
                            <?php $__currentLoopData = $FatherMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $FatherMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                if ($FatherMenu->$title_var != "") {
                                    $title = $FatherMenu->$title_var;
                                } else {
                                    $title = $FatherMenu->$title_var2;
                                }
                                ?>
                                <option value="<?php echo e($FatherMenu->id); ?>"><?php echo e($title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                </div>
                <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($ActiveLanguage->box_status): ?>
                        <div class="form-group row">
                            <label
                                class="col-sm-3 form-control-label"><?php echo __('backend.sectionTitle'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                            </label>
                            <div class="col-sm-9">
                                <?php echo Form::text('title_'.@$ActiveLanguage->code,'', array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="form-group row">
                    <label for="link_status"
                           class="col-sm-3 form-control-label"><?php echo __('backend.linkType'); ?></label>
                    <div class="col-sm-9">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','0',true, array('id' => 'status1','class'=>'has-value','onclick'=>'document.getElementById("link_div").style.display="none";document.getElementById("cat_div").style.display="none"')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.linkType1')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','1',false, array('id' => 'status2','class'=>'has-value','onclick'=>'document.getElementById("link_div").style.display="block";document.getElementById("cat_div").style.display="none"')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.linkType2')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','2',false, array('id' => 'status2','class'=>'has-value','onclick'=>'document.getElementById("link_div").style.display="none";document.getElementById("cat_div").style.display="block"')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.linkType3')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('type','3',false, array('id' => 'status2','class'=>'has-value','onclick'=>'document.getElementById("link_div").style.display="none";document.getElementById("cat_div").style.display="block"')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.linkType4')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div id="link_div" class="form-group row" style="display: none">
                    <label for="link"
                           class="col-sm-3 form-control-label"><?php echo __('backend.linkURL'); ?>

                    </label>
                    <div class="col-sm-9">
                        <?php echo Form::text('link','', array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

                    </div>
                </div>
                <div id="cat_div" class="form-group row" style="display: none">
                    <label for="link"
                           class="col-sm-3 form-control-label"><?php echo __('backend.linkSection'); ?>

                    </label>
                    <div class="col-sm-9">
                        <select name="cat_id" id="cat_id" class="form-control c-select">
                            <option value="<?php echo e($ParentMenuId); ?>">- - <?php echo __('backend.linkSection'); ?> - -
                            </option>
                            <?php
                            $title_var = "title_" . @Helper::currentLanguage()->code;
                            $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                            ?>
                            <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($WSection->type !=4): ?>
                                    <?php
                                    if ($WSection->$title_var != "") {
                                        $WSectionTitle = $WSection->$title_var;
                                    } else {
                                        $WSectionTitle = $WSection->$title_var2;
                                    }
                                    ?>
                                    <option
                                        value="<?php echo e($WSection->id); ?>"><?php echo $WSectionTitle; ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>


                <div class="form-group row m-t-md">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> <?php echo __('backend.add'); ?></button>
                        <a href="<?php echo e(route("menus",["ParentMenuId"=>$ParentMenuId])); ?>"
                           class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
                    </div>
                </div>

                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/menus/create.blade.php ENDPATH**/ ?>