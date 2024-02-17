<?php if(Session::get('fieldST') == "edit"): ?>
    <div>
        <?php echo e(Form::open(['route'=>['webmasterFieldsUpdate',$WebmasterSections->id,Session::get('WebmasterSectionField')->id],'method'=>'POST'])); ?>


        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ActiveLanguage->box_status): ?>
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.topicName'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('title_'.@$ActiveLanguage->code,Session::get('WebmasterSectionField')->{'title_'.@$ActiveLanguage->code}, array('placeholder' =>'','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="form-group row">
            <label for="type0"
                   class="col-sm-2 form-control-label"><?php echo __('backend.customFieldsType'); ?></label>
            <div class="col-sm-3">
                <div class="radio">
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','0',(Session::get('WebmasterSectionField')->type==0) ? true : false, array('id' => 'type0','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType0')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','1',(Session::get('WebmasterSectionField')->type==1) ? true : false, array('id' => 'type1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType1')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','2',(Session::get('WebmasterSectionField')->type==2) ? true : false, array('id' => 'type2','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType2')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','3',(Session::get('WebmasterSectionField')->type==3) ? true : false, array('id' => 'type3','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType3')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','4',(Session::get('WebmasterSectionField')->type==4) ? true : false, array('id' => 'type4','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType4')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','5',(Session::get('WebmasterSectionField')->type==5) ? true : false, array('id' => 'type5','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType5')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','6',(Session::get('WebmasterSectionField')->type==6) ? true : false, array('id' => 'type6','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType6')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','13',(Session::get('WebmasterSectionField')->type==13) ? true : false, array('id' => 'type13','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType13')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','7',(Session::get('WebmasterSectionField')->type==7) ? true : false, array('id' => 'type7','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType7')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','14',(Session::get('WebmasterSectionField')->type==14) ? true : false, array('id' => 'type14','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType14')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','8',(Session::get('WebmasterSectionField')->type==8) ? true : false, array('id' => 'type8','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType8')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','9',(Session::get('WebmasterSectionField')->type==9) ? true : false, array('id' => 'type9','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType9')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','10',(Session::get('WebmasterSectionField')->type==10) ? true : false, array('id' => 'type10','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType10')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','11',(Session::get('WebmasterSectionField')->type==11) ? true : false, array('id' => 'type11','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType11')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','12',(Session::get('WebmasterSectionField')->type==12) ? true : false, array('id' => 'type12','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType12')); ?>

                        </label>
                    </div>
                </div>
            </div>

            <div class="col-sm-7">

                <div id="options"
                     style="display: <?php echo e((Session::get('WebmasterSectionField')->type==6 || Session::get('WebmasterSectionField')->type==7 || Session::get('WebmasterSectionField')->type==13) ? "inline" : "none"); ?>">
                    <div class="row">
                        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($ActiveLanguage->box_status): ?>
                                <div class="col-sm-3 col-xs-5">
                                    <div class="m-b-sm">
                                        <?php echo __('backend.customFieldsOptions'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                                        :
                                    <?php echo Form::textarea('details_'.@$ActiveLanguage->code,Session::get('WebmasterSectionField')->{'details_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control', 'dir'=>@$ActiveLanguage->direction,'rows'=>'12','style'=>'white-space: nowrap;')); ?>

                                    </div>
                                </div>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <small>
                        <i class="material-icons">&#xe8fd;</i> <?php echo __('backend.customFieldsOptionsHelp'); ?>

                    </small>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="required1"
                   class="col-sm-2 form-control-label"><?php echo __('backend.customFieldsRequired'); ?></label>
            <div class="col-sm-10">
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('required','0',(Session::get('WebmasterSectionField')->required==0) ? true : false, array('id' => 'required2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.customFieldsOptional')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('required','1',(Session::get('WebmasterSectionField')->required==1) ? true : false, array('id' => 'required1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.customFieldsRequired')); ?> (*)
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="in_table1"
                   class="col-sm-2 form-control-label"><?php echo __('backend.showFieldInTable'); ?></label>
            <div class="col-sm-10">
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_table','1',(Session::get('WebmasterSectionField')->in_table==1) ? true : false, array('id' => 'in_table1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.yes')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_table','0',(Session::get('WebmasterSectionField')->in_table==0) ? true : false, array('id' => 'in_table2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.no')); ?>

                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="in_search1"
                   class="col-sm-2 form-control-label"><?php echo __('backend.showFieldInSearch'); ?></label>
            <div class="col-sm-10">
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_search','1',(Session::get('WebmasterSectionField')->in_search==1) ? true : false, array('id' => 'in_search1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.yes')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_search','0',(Session::get('WebmasterSectionField')->in_search==0) ? true : false, array('id' => 'in_search2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.no')); ?>

                    </label>
                </div>
            </div>
        </div>

        <?php if($WebmasterSections->type != 4): ?>
            <div class="form-group row">
                <label for="in_listing1"
                       class="col-sm-2 form-control-label"><?php echo __('backend.showFieldInListing'); ?></label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('in_listing','1',(Session::get('WebmasterSectionField')->in_listing==1) ? true : false, array('id' => 'in_listing1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.yes')); ?>

                        </label>
                        &nbsp; &nbsp;
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('in_listing','0',(Session::get('WebmasterSectionField')->in_listing==0) ? true : false, array('id' => 'in_listing2','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.no')); ?>

                        </label>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="form-group row">
            <label for="in_page1"
                   class="col-sm-2 form-control-label"><?php echo __('backend.showFieldInPage'); ?></label>
            <div class="col-sm-10">
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_page','1',(Session::get('WebmasterSectionField')->in_page==1) ? true : false, array('id' => 'in_page1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.yes')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_page','0',(Session::get('WebmasterSectionField')->in_page==0) ? true : false, array('id' => 'in_page2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.no')); ?>

                    </label>
                </div>
            </div>
        </div>
        <div
            class="form-group row  in_statics_div <?php echo e((Session::get('WebmasterSectionField')->type==6 || Session::get('WebmasterSectionField')->type==7)?"":"displayNone"); ?>">
            <label for="in_statics1"
                   class="col-sm-2 form-control-label"><?php echo __('backend.showStatics'); ?></label>
            <div class="col-sm-10">
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_statics','1',(Session::get('WebmasterSectionField')->in_statics==1) ? true : false, array('id' => 'in_statics2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.yes')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_statics','0',(Session::get('WebmasterSectionField')->in_statics==0) ? true : false, array('id' => 'in_statics1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.no')); ?>

                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row" id="default_val"
             style="display: <?php echo e((Session::get('WebmasterSectionField')->type==8 || Session::get('WebmasterSectionField')->type==9 || Session::get('WebmasterSectionField')->type==10) ? "none" : "block"); ?>">
            <label for="default_value"
                   class="col-sm-2 form-control-label"><?php echo __('backend.customFieldsDefault'); ?>

            </label>
            <div class="col-sm-10">
                <?php echo Form::text('default_value',Session::get('WebmasterSectionField')->default_value, array('placeholder' => '','class' => 'form-control','id'=>'default_value')); ?>

            </div>
        </div>

        <div class="form-group row">
            <label for="lang_code"
                   class="col-sm-2 form-control-label"><?php echo __('backend.language'); ?>

            </label>
            <div class="col-sm-10">
                <select name="lang_code" id="lang_code" class="form-control c-select">
                    <option
                        value="all" <?php echo e((Session::get('WebmasterSectionField')->lang_code=="all")?"selected='selected'":""); ?>><?php echo e(__('backend.customFieldsForAllLang')); ?></option>
                    <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ActiveLanguage->box_status): ?>
                            <option
                                value="<?php echo e($ActiveLanguage->code); ?>" <?php echo e((Session::get('WebmasterSectionField')->lang_code==$ActiveLanguage->code)?"selected='selected'":""); ?>><?php echo e($ActiveLanguage->title); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="css_class"
                   class="col-sm-2 form-control-label"> CSS Class </label>
            <div class="col-sm-10">
                <div class="input-group">
                    <?php echo Form::text('css_class',Session::get('WebmasterSectionField')->css_class, array('placeholder' => '','class' => 'form-control','id'=>'css_class')); ?>

                    <span class="input-group-btn">
            <button class="btn white" type="button" data-toggle="modal" data-target="#predefined_css_classes"
                    ui-toggle-class="bounce" ui-target="#animate"><?php echo __('backend.predefinedCssClasses'); ?></button>
          </span>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="css_class"
                   class="col-sm-2 form-control-label"> <?php echo __('backend.viewPermission'); ?></label>
            <div class="col-sm-10">
                <?php
                $view_permission_groups = [];
                if (Session::get('WebmasterSectionField')->view_permission_groups != "") {
                    $view_permission_groups = explode(",", Session::get('WebmasterSectionField')->view_permission_groups);
                }
                ?>
                <select name="view_permission_groups[]"
                        class="form-control select2-multiple" multiple
                        ui-jp="select2"
                        ui-options="{theme: 'bootstrap'}">
                    <option
                        value="0" <?php echo (in_array(0,$view_permission_groups)?"selected":""); ?>><?php echo __('backend.all'); ?></option>
                    <?php $__currentLoopData = $PermissionsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PermissionItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option
                            value="<?php echo e($PermissionItem->id); ?>" <?php echo (in_array($PermissionItem->id,$view_permission_groups)?"selected":""); ?>><?php echo $PermissionItem->name; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="css_class"
                   class="col-sm-2 form-control-label"> <?php echo __('backend.addPermission'); ?></label>
            <div class="col-sm-10">
                <?php
                $add_permission_groups = [];
                if (Session::get('WebmasterSectionField')->add_permission_groups != "") {
                    $add_permission_groups = explode(",", Session::get('WebmasterSectionField')->add_permission_groups);
                }
                ?>
                <select name="add_permission_groups[]"
                        class="form-control select2-multiple" multiple
                        ui-jp="select2"
                        ui-options="{theme: 'bootstrap'}">
                    <option
                        value="0" <?php echo (in_array(0,$add_permission_groups)?"selected":""); ?>><?php echo __('backend.all'); ?></option>
                    <?php $__currentLoopData = $PermissionsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PermissionItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option
                            value="<?php echo e($PermissionItem->id); ?>" <?php echo (in_array($PermissionItem->id,$add_permission_groups)?"selected":""); ?>><?php echo $PermissionItem->name; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="css_class"
                   class="col-sm-2 form-control-label"> <?php echo __('backend.editPermission'); ?></label>
            <div class="col-sm-10">
                <?php
                $edit_permission_groups = [];
                if (Session::get('WebmasterSectionField')->edit_permission_groups != "") {
                    $edit_permission_groups = explode(",", Session::get('WebmasterSectionField')->edit_permission_groups);
                }
                ?>
                <select name="edit_permission_groups[]"
                        class="form-control select2-multiple" multiple
                        ui-jp="select2"
                        ui-options="{theme: 'bootstrap'}">
                    <option
                        value="0" <?php echo (in_array(0,$edit_permission_groups)?"selected":""); ?>><?php echo __('backend.all'); ?></option>
                    <?php $__currentLoopData = $PermissionsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PermissionItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option
                            value="<?php echo e($PermissionItem->id); ?>" <?php echo (in_array($PermissionItem->id,$edit_permission_groups)?"selected":""); ?>><?php echo $PermissionItem->name; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="link_status"
                   class="col-sm-2 form-control-label"><?php echo __('backend.status'); ?></label>
            <div class="col-sm-10">
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('status','1',(Session::get('WebmasterSectionField')->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.active')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('status','0',(Session::get('WebmasterSectionField')->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.notActive')); ?>

                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row m-t-md">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary m-t"><i
                        class="material-icons">
                        &#xe31b;</i> <?php echo __('backend.update'); ?></button>
                <a href="<?php echo e(route('webmasterFields',[$WebmasterSections->id])); ?>"
                   class="btn btn-default m-t"><i class="material-icons">
                        &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
            </div>
        </div>

        <?php echo e(Form::close()); ?>

    </div>
    <?php echo $__env->make('dashboard.webmaster.sections.fields.css_classes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/webmaster/sections/fields/edit.blade.php ENDPATH**/ ?>