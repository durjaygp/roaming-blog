<?php if(Session::get('fieldST') == "create"): ?>

    <div>
        <?php echo e(Form::open(['route'=>['webmasterFieldsStore',$WebmasterSections->id],'method'=>'POST'])); ?>


        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ActiveLanguage->box_status): ?>
                <div class="form-group row">
                    <label
                        class="col-sm-2 form-control-label"><?php echo __('backend.topicName'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                    </label>
                    <div class="col-sm-10">
                        <?php echo Form::text('title_'.@$ActiveLanguage->code,'', array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

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
                            <?php echo Form::radio('type','0',true, array('id' => 'type0','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType0')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','1',false, array('id' => 'type1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType1')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','2',false, array('id' => 'type2','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType2')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','3',false, array('id' => 'type3','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType3')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','4',false, array('id' => 'type4','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType4')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','5',false, array('id' => 'type5','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType5')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','6',false, array('id' => 'type6','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType6')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','13',false, array('id' => 'type13','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType13')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','7',false, array('id' => 'type7','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType7')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','14',false, array('id' => 'type14','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType14')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','8',false, array('id' => 'type8','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType8')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','9',false, array('id' => 'type9','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType9')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','10',false, array('id' => 'type10','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType10')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','11',false, array('id' => 'type11','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType11')); ?>

                        </label>
                    </div>
                    <div style="margin-bottom: 5px;">
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('type','12',false, array('id' => 'type12','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.customFieldsType12')); ?>

                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div id="options" style="display: none">
                    <div class="row">
                        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($ActiveLanguage->box_status): ?>
                                <div class="col-sm-3 col-xs-5">
                                    <div class="m-b-sm">
                                        <?php echo __('backend.customFieldsOptions'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                                        :
                                    <?php echo Form::textarea('details_'.@$ActiveLanguage->code,'', array('placeholder' => '','class' => 'form-control', 'dir'=>@$ActiveLanguage->direction,'rows'=>'12','style'=>'white-space: nowrap;')); ?>

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
                        <?php echo Form::radio('required','0',true, array('id' => 'required2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.customFieldsOptional')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('required','1',false, array('id' => 'required1','class'=>'has-value')); ?>

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
                        <?php echo Form::radio('in_table','1',true, array('id' => 'in_table1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.yes')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_table','0',false, array('id' => 'in_table2','class'=>'has-value')); ?>

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
                        <?php echo Form::radio('in_search','1',true, array('id' => 'in_search1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.yes')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_search','0',false, array('id' => 'in_search2','class'=>'has-value')); ?>

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
                            <?php echo Form::radio('in_listing','1',true, array('id' => 'in_listing1','class'=>'has-value')); ?>

                            <i class="dark-white"></i>
                            <?php echo e(__('backend.yes')); ?>

                        </label>
                        &nbsp; &nbsp;
                        <label class="ui-check ui-check-md">
                            <?php echo Form::radio('in_listing','0',false, array('id' => 'in_listing2','class'=>'has-value')); ?>

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
                        <?php echo Form::radio('in_page','1',true, array('id' => 'in_page1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.yes')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_page','0',false, array('id' => 'in_page2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.no')); ?>

                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row in_statics_div displayNone">
            <label for="in_statics1"
                   class="col-sm-2 form-control-label"><?php echo __('backend.showStatics'); ?></label>
            <div class="col-sm-10">
                <div class="radio">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_statics','1',false, array('id' => 'in_statics2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.yes')); ?>

                    </label>
                    &nbsp; &nbsp;
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('in_statics','0',true, array('id' => 'in_statics1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.no')); ?>

                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row" id="default_val">
            <label for="default_value"
                   class="col-sm-2 form-control-label"><?php echo __('backend.customFieldsDefault'); ?>

            </label>
            <div class="col-sm-10">
                <?php echo Form::text('default_value','', array('placeholder' => '','class' => 'form-control','id'=>'default_value')); ?>

            </div>
        </div>

        <div class="form-group row">
            <label for="lang_code"
                   class="col-sm-2 form-control-label"><?php echo __('backend.language'); ?>

            </label>
            <div class="col-sm-10">
                <select name="lang_code" id="lang_code" class="form-control c-select">
                    <option value="all"><?php echo e(__('backend.customFieldsForAllLang')); ?></option>
                    <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ActiveLanguage->box_status): ?>
                            <option
                                value="<?php echo e($ActiveLanguage->code); ?>"><?php echo e($ActiveLanguage->title); ?></option>
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
                    <?php echo Form::text('css_class','', array('placeholder' => '','class' => 'form-control','id'=>'css_class')); ?>

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

                <select name="view_permission_groups[]"
                        class="form-control select2-multiple" multiple
                        ui-jp="select2"
                        ui-options="{theme: 'bootstrap'}">
                    <option value="0" selected="selected"><?php echo __('backend.all'); ?></option>
                    <?php $__currentLoopData = $PermissionsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PermissionItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($PermissionItem->id); ?>"><?php echo $PermissionItem->name; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="css_class"
                   class="col-sm-2 form-control-label"> <?php echo __('backend.addPermission'); ?></label>
            <div class="col-sm-10">

                <select name="add_permission_groups[]"
                        class="form-control select2-multiple" multiple
                        ui-jp="select2"
                        ui-options="{theme: 'bootstrap'}">
                    <option value="0" selected="selected"><?php echo __('backend.all'); ?></option>
                    <?php $__currentLoopData = $PermissionsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PermissionItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($PermissionItem->id); ?>"><?php echo $PermissionItem->name; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="css_class"
                   class="col-sm-2 form-control-label"> <?php echo __('backend.editPermission'); ?></label>
            <div class="col-sm-10">

                <select name="edit_permission_groups[]"
                        class="form-control select2-multiple" multiple
                        ui-jp="select2"
                        ui-options="{theme: 'bootstrap'}">
                    <option value="0" selected="selected"><?php echo __('backend.all'); ?></option>
                    <?php $__currentLoopData = $PermissionsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PermissionItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($PermissionItem->id); ?>"><?php echo $PermissionItem->name; ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group row m-t-md">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary m-t"><i
                        class="material-icons">
                        &#xe31b;</i> <?php echo __('backend.add'); ?></button>
                <a href="<?php echo e(route('webmasterFields',[$WebmasterSections->id])); ?>"
                   class="btn btn-default m-t"><i class="material-icons">
                        &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
            </div>
        </div>

        <?php echo e(Form::close()); ?>

    </div>

    <?php echo $__env->make('dashboard.webmaster.sections.fields.css_classes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/webmaster/sections/fields/create.blade.php ENDPATH**/ ?>