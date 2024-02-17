
<?php if($WebmasterSection->extra_attach_file_status): ?>
    <div class="tab-pane  <?php echo e($tab_6); ?>" id="tab_files">

        <div class="box-body">
            <?php if(Session::has('fileST')): ?>
                <?php if(Session::get('fileST') == "create"): ?>
                    <div>
                        <?php echo e(Form::open(['route'=>['topicsFilesStore',$WebmasterSection->id,$Topics->id],'method'=>'POST', 'files' => true ])); ?>


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
                            <label for="files_file"
                                   class="col-sm-2 form-control-label"><?php echo __('backend.topicAttach'); ?></label>
                            <div class="col-sm-10">
                                <?php echo Form::file('file', array('class' => 'form-control','id'=>'attach_file','required'=>'')); ?>

                            </div>
                        </div>
                        <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                            <div class="offset-sm-2 col-sm-10">
                                <small>
                                    <i class="material-icons">&#xe8fd;</i>
                                    <?php echo __('backend.attachTypes'); ?>

                                </small>
                            </div>
                        </div>


                        <div class="form-group row m-t-md">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary m-t"><i
                                        class="material-icons">
                                        &#xe31b;</i> <?php echo __('backend.add'); ?></button>
                                <a href="<?php echo e(route('topicsFiles',[$WebmasterSection->id,$Topics->id])); ?>"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
                            </div>
                        </div>

                        <?php echo e(Form::close()); ?>

                    </div>
                <?php endif; ?>
                <?php if(Session::get('fileST') == "edit"): ?>
                    <div>
                        <?php echo e(Form::open(['route'=>['topicsFilesUpdate',$WebmasterSection->id,$Topics->id,Session::get('AttachFile')->id],'method'=>'POST', 'files' => true ])); ?>


                        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($ActiveLanguage->box_status): ?>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-2 form-control-label"><?php echo __('backend.topicName'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                                    </label>
                                    <div class="col-sm-10">
                                        <?php echo Form::text('title_'.@$ActiveLanguage->code,Session::get('AttachFile')->{'title_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group row">
                            <label for="files_file"
                                   class="col-sm-2 form-control-label"><?php echo __('backend.topicAttach'); ?></label>
                            <div class="col-sm-10">
                                <div class="col-sm-4 box p-a-xs">
                                    <a target="_blank"
                                       href="<?php echo e(asset('uploads/topics/'.Session::get('AttachFile')->file)); ?>"> <?php echo Helper::GetIcon(asset('uploads/topics/'),Session::get('AttachFile')->file); ?> <?php echo e(Session::get('AttachFile')->file); ?> </a>
                                </div>
                                <?php echo Form::file('file', array('class' => 'form-control','id'=>'files_file')); ?>

                            </div>
                        </div>
                        <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                            <div class="offset-sm-2 col-sm-10">
                                <small>
                                    <i class="material-icons">&#xe8fd;</i>
                                    <?php echo __('backend.attachTypes'); ?>

                                </small>
                            </div>
                        </div>

                        <div class="form-group row m-t-md">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary m-t"><i
                                        class="material-icons">
                                        &#xe31b;</i> <?php echo __('backend.update'); ?></button>
                                <a href="<?php echo e(route('topicsFiles',[$WebmasterSection->id,$Topics->id])); ?>"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
                            </div>
                        </div>

                        <?php echo e(Form::close()); ?>

                    </div>
                <?php endif; ?>
            <?php else: ?>

                <?php if(count($Topics->attachFiles)>0): ?>
                    <div class="row m-b">
                        <div class="col-sm-12">
                            <a class="btn btn-fw primary"
                               href="<?php echo e(route("topicsFilesCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                <i class="material-icons">&#xe02e;</i>
                                &nbsp; <?php echo e(__('backend.topicAttach')); ?>

                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(count($Topics->attachFiles) == 0): ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class=" p-y-2 p-x text-center light b-a h6 m-a-0">
                                <div class="text-muted m-b"><i class="fa fa-laptop fa-4x"></i></div>
                                <?php echo e(__('backend.noData')); ?>

                                <br>
                                <br>
                                <a class="btn btn-fw primary"
                                   href="<?php echo e(route("topicsFilesCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                    <i class="material-icons">&#xe02e;</i>
                                    &nbsp; <?php echo e(__('backend.topicAttach')); ?>

                                </a>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(count($Topics->attachFiles)>0): ?>
                    <?php echo e(Form::open(['route'=>['topicsFilesUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                    <table class="table table-bordered">
                        <thead class="dker">
                        <tr>
                            <th class="width20 dker">
                                <label class="ui-check m-a-0">
                                    <input id="checkAll4" type="checkbox"><i></i>
                                </label>
                            </th>
                            <th><?php echo e(__('backend.topicAttach')); ?></th>
                            <th><?php echo e(__('backend.topicName')); ?></th>
                            <th class="text-center"
                                style="width:200px;"><?php echo e(__('backend.options')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $title_var = "title_" . @Helper::currentLanguage()->code;
                        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                        ?>
                        <?php $__currentLoopData = $Topics->attachFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            if ($file->$title_var != "") {
                                $file_title = $file->$title_var;
                            } else {
                                $file_title = $file->$title_var2;
                            }
                            ?>
                            <tr>
                                <td class="dker"><label class="ui-check m-a-0">
                                        <input type="checkbox" name="ids[]"
                                               value="<?php echo e($file->id); ?>"><i
                                            class="dark-white"></i>
                                        <?php echo Form::hidden('row_ids[]',$file->id, array('class' => 'form-control row_no')); ?>

                                    </label>
                                </td>
                                <td>
                                    <?php echo Form::text('row_no_'.$file->id,$file->row_no, array('class' => 'pull-left form-control row_no')); ?>

                                    <a href="<?php echo e(asset('uploads/topics/'.$file->file)); ?>"
                                       target="_blank">
                                        <?php echo Helper::GetIcon(asset('uploads/topics/'),$file->file); ?>

                                        <?php echo e($file->file); ?></a>
                                </td>
                                <td>
                                    <small>
                                        <?php echo $file_title; ?>

                                    </small>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm success"
                                       href="<?php echo e(route("topicsFilesEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"file_id"=>$file->id])); ?>">
                                        <small><i class="material-icons">
                                                &#xe3c9;</i> <?php echo e(__('backend.edit')); ?></small>
                                    </a>
                                    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                        <button class="btn btn-sm warning" data-toggle="modal"
                                                data-target="#mf-<?php echo e($file->id); ?>"
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
                            <div id="mf-<?php echo e($file->id); ?>" class="modal fade" data-backdrop="true">
                                <div class="modal-dialog" id="animate">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                                        </div>
                                        <div class="modal-body text-center p-lg">
                                            <p>
                                                <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                                                <br>
                                                <strong>[ <?php echo $file_title; ?> ]</strong>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark-white p-x-md"
                                                    data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                                            <a href="<?php echo e(route("topicsFilesDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"file_id"=>$file->id])); ?>"
                                               class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div>
                            </div>
                            <!-- / .modal -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
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
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/topics/tabs/files.blade.php ENDPATH**/ ?>