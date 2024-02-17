<?php if(count($WebmasterSections->allCustomFields)>0): ?>
    <div class="row p-a">
        <a class="btn btn-fw primary"
           href="<?php echo e(route("webmasterFieldsCreate",[$WebmasterSections->id])); ?>">
            <i class="material-icons">&#xe02e;</i>
            &nbsp; <?php echo e(__('backend.customFieldsNewField')); ?>

        </a>
    </div>
<?php endif; ?>
<?php if(count($WebmasterSections->allCustomFields) == 0): ?>
    <div class="row">
        <div class="col-sm-12">
            <div class=" p-y-2 p-x text-center light b-a h6 m-a-0">
                <div class="text-muted m-b"><i class="fa fa-laptop fa-4x"></i></div>
                <?php echo e(__('backend.noData')); ?>

                <br>
                <br>
                <a class="btn btn-fw primary"
                   href="<?php echo e(route("webmasterFieldsCreate",[$WebmasterSections->id])); ?>">
                    <i class="material-icons">&#xe02e;</i>
                    &nbsp; <?php echo e(__('backend.customFieldsNewField')); ?>

                </a>

            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(count($WebmasterSections->allCustomFields)>0): ?>
    <?php echo e(Form::open(['route'=>['webmasterFieldsUpdateAll',$WebmasterSections->id],'method'=>'post'])); ?>

    <div>
        <table class="table table-bordered">
            <thead class="dker">
            <tr>
                <th class="width20 dker">
                    <label class="ui-check m-a-0">
                        <input id="checkAll4" type="checkbox"><i></i>
                    </label>
                </th>
                <th class="text-center w-64">ID</th>
                <th><?php echo e(__('backend.customFieldsTitle')); ?></th>
                <th><?php echo e(__('backend.customFieldsType')); ?></th>
                <th class="text-center"
                    style="width:120px;"><?php echo e(__('backend.customFieldsRequired')); ?></th>
                <th class="text-center"
                    style="width:100px;"><?php echo e(__('backend.language')); ?></th>
                <th class="text-center"
                    style="width:120px;"><?php echo e(__('backend.status')); ?></th>
                <th class="text-center"
                    style="width:200px;"><?php echo e(__('backend.options')); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $title_var = "title_" . @Helper::currentLanguage()->code;
            $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
            ?>
            <?php $__currentLoopData = $WebmasterSections->allCustomFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                if ($customField->$title_var != "") {
                    $field_title = $customField->$title_var;
                } else {
                    $field_title = $customField->$title_var2;
                }

                $type_var = "customFieldsType" . $customField->type;
                ?>
                <tr>
                    <td class="<?php echo $customField->css_class; ?> dker"><label class="ui-check m-a-0">
                            <input type="checkbox" name="ids[]"
                                   value="<?php echo e($customField->id); ?>"><i
                                class="dark-white"></i>
                            <?php echo Form::hidden('row_ids[]',$customField->id, array('class' => 'form-control row_no')); ?>

                        </label>
                    </td>

                    <td class="text-center"><?php echo e($customField->id); ?></td>
                    <td class="h6 <?php echo $customField->css_class; ?>">
                        <?php echo Form::text('row_no_'.$customField->id,$customField->row_no, array('class' => 'form-control row_no','id'=>'row_no')); ?>

                        <?php echo $field_title; ?></td>
                    <td class="<?php echo $customField->css_class; ?>">

                        <?php if($customField->in_statics): ?>
                            <i class="material-icons pull-right m-x-xs" data-toggle="tooltip"
                               data-original-title="<i class='material-icons'>&#xe5ca;</i> <?php echo e(__('backend.showStatics')); ?>">&#xe24b;</i>
                        <?php endif; ?>
                        <?php if($customField->in_page): ?>
                            <i class="material-icons pull-right m-x-xs" data-toggle="tooltip"
                               data-original-title="<i class='material-icons'>&#xe5ca;</i> <?php echo e(__('backend.showFieldInPage')); ?>">&#xe86d;</i>
                        <?php endif; ?>
                        <?php if($customField->in_listing): ?>
                            <i class="material-icons pull-right m-x-xs" data-toggle="tooltip"
                               data-original-title="<i class='material-icons'>&#xe5ca;</i> <?php echo e(__('backend.showFieldInListing')); ?>">&#xe23e;</i>
                        <?php endif; ?>
                        <?php if($customField->in_search): ?>
                            <i class="material-icons pull-right m-x-xs" data-toggle="tooltip"
                               data-original-title="<i class='material-icons'>&#xe5ca;</i> <?php echo e(__('backend.showFieldInSearch')); ?>">&#xe8d9;</i>
                        <?php endif; ?>
                        <?php if($customField->in_table): ?>
                            <i class="material-icons pull-right m-x-xs" data-toggle="tooltip"
                               data-original-title="<i class='material-icons'>&#xe5ca;</i> <?php echo e(__('backend.showFieldInTable')); ?>">&#xe3ec;</i>
                        <?php endif; ?>
                        <small>
                            <?php echo e(__('backend.'.$type_var)); ?>

                        </small>
                    </td>
                    <td class="text-center <?php echo $customField->css_class; ?>">
                        <small>
                            <?php echo e(($customField->required==1) ? __('backend.customFieldsRequired')."(*)":__('backend.customFieldsOptional')); ?>

                        </small>
                    </td>

                    <td class="text-center <?php echo $customField->css_class; ?>">
                        <small>
                            <?php echo e($customField->lang_code); ?>

                        </small>
                    </td>
                    <td class="text-center <?php echo $customField->css_class; ?>">
                        <i class="fa <?php echo e(($customField->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                    </td>
                    <td class="text-center <?php echo $customField->css_class; ?>">
                        <a class="btn btn-sm success"
                           href="<?php echo e(route("webmasterFieldsEdit",["webmasterId"=>$WebmasterSections->id,"field_id"=>$customField->id])); ?>">
                            <small><i class="material-icons">
                                    &#xe3c9;</i> <?php echo e(__('backend.edit')); ?></small>
                        </a>
                        <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                            <button class="btn btn-sm warning" data-toggle="modal"
                                    data-target="#mf-<?php echo e($customField->id); ?>"
                                    ui-toggle-class="bounce"
                                    ui-target="#animate">
                                <small><i class="material-icons">
                                        &#xe872;</i> <?php echo e(__('backend.delete')); ?>

                                </small>
                            </button>
                        <?php endif; ?>

                    </td>
                </tr>
                <!-- .modal -->
                <div id="mf-<?php echo e($customField->id); ?>" class="modal fade" data-backdrop="true">
                    <div class="modal-dialog" id="animate">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                            </div>
                            <div class="modal-body text-center p-lg">
                                <p>
                                    <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                                    <br>
                                    <strong>[ <?php echo $field_title; ?> ]</strong>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark-white p-x-md"
                                        data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                                <a href="<?php echo e(route("webmasterFieldsDestroy",["webmasterId"=>$WebmasterSections->id,"field_id"=>$customField->id])); ?>"
                                   class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></a>
                            </div>
                        </div><!-- /.modal-content -->
                    </div>
                </div>
                <!-- / .modal -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

    </div>
    <div class="row">
        <div class="col-sm-3 hidden-xs">
            <!-- .modal -->
            <div id="mf-all" class="modal fade" data-backdrop="true">
                <div class="modal-dialog" id="animate">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                        </div>
                        <div class="modal-body text-center p-lg">
                            <p>
                                <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn dark-white p-x-md"
                                    data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                            <button type="submit"
                                    class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></button>
                        </div>
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <!-- / .modal -->

            <select name="action" id="action4"
                    class="form-control c-select w-sm inline v-middle" required>
                <option value=""><?php echo e(__('backend.bulkAction')); ?></option>
                <option value="order"><?php echo e(__('backend.saveOrder')); ?></option>
                <option value="activate"><?php echo e(__('backend.activeSelected')); ?></option>
                <option value="block"><?php echo e(__('backend.blockSelected')); ?></option>
                <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                    <option value="delete"><?php echo e(__('backend.deleteSelected')); ?></option>
                <?php endif; ?>
            </select>
            <button type="submit" id="submit_all4"
                    class="btn white"><?php echo e(__('backend.apply')); ?></button>
            <button id="submit_show_msg4" class="btn white" data-toggle="modal"
                    style="display: none"
                    data-target="#mf-all" ui-toggle-class="bounce"
                    ui-target="#animate"><?php echo e(__('backend.apply')); ?>

            </button>
        </div>
    </div>
    <?php echo e(Form::close()); ?>

<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/webmaster/sections/fields/list.blade.php ENDPATH**/ ?>