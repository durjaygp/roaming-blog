<?php if($WebmasterSection->multi_images_status): ?>
    <div class="tab-pane  <?php echo e($tab_3); ?>" id="tab_photos">

        <div class="box-body">

            <div>
                <?php echo e(Form::open(['route'=>['topicsPhotosEdit',"webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id],'method'=>'POST','class'=>'dropzone white', 'files' => true])); ?>

                <div class="dz-message" ui-jp="dropzone"
                     ui-options="{ url: '<?php echo e(route("topicsPhotosEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id])); ?>' }">
                    <h4 class="m-t-lg m-b-md"><?php echo e(__('backend.topicDropFiles')); ?></h4>
                    <span class="text-muted block m-b-lg">( <?php echo e(__('backend.topicDropFiles2')); ?>

                                        )</span>
                </div>
                <?php echo e(Form::close()); ?>

                <br>
            </div>
            <?php if(count($Topics->photos)>0): ?>
                <div class="row">
                    <?php echo e(Form::open(['route'=>['topicsPhotosUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                    <?php $__currentLoopData = $Topics->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="box p-a-xs">
                                <div class="pull-right">
                                    <?php echo Form::text('row_no_'.$photo->id,$photo->row_no, array('class' => 'pull-left form-control row_no','id'=>'row_no','style'=>'margin:0;margin-bottom:5px')); ?>

                                </div>
                                <label class="ui-check m-a-0 p-a-0">
                                    <input type="checkbox" name="ids[]" value="<?php echo e($photo->id); ?>"><i
                                        class="dark-white"></i>
                                    <?php echo Form::hidden('row_ids[]',$photo->id, array('class' => 'form-control row_no')); ?>

                                </label>
                                <img src="<?php echo e(asset('uploads/topics/'.$photo->file)); ?>"
                                     alt="<?php echo e($photo->title); ?>" title="<?php echo e($photo->title); ?>"
                                     style="height: 150px"
                                     class="img-responsive">
                                <div class="p-a-sm">
                                    <div class="text-ellipsis">
                                        <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                            <button class="btn btn-sm warning pull-right"
                                                    data-toggle="modal"
                                                    data-target="#mx-<?php echo e($photo->id); ?>"
                                                    ui-toggle-class="bounce"
                                                    ui-target="#animate"
                                                    title="<?php echo e(__('backend.delete')); ?>"
                                                    style="padding: 0 5px 2px;">
                                                <small><i class="material-icons">&#xe872;</i></small>
                                            </button>
                                        <?php endif; ?>
                                        <a style="display: block;overflow: hidden;"
                                           href="<?php echo e(asset('uploads/topics/'.$photo->file)); ?>"
                                           target="_blank">
                                            <small><?php echo e(($photo->title !="") ? $photo->title:$photo->file); ?></small>
                                        </a>
                                    </div>
                                </div>

                                <!-- .modal -->
                                <div id="mx-<?php echo e($photo->id); ?>" class="modal fade" data-backdrop="true">
                                    <div class="modal-dialog" id="animate">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                                            </div>
                                            <div class="modal-body text-center p-lg">
                                                <p>
                                                    <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                                                    <br>
                                                    <strong>[ <?php echo e(($photo->title !="") ? $photo->title:$photo->file); ?>

                                                        ]</strong>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn dark-white p-x-md"
                                                        data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                                                <a href="<?php echo e(route("topicsPhotosDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"photo_id"=>$photo->id])); ?>"
                                                   class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div>
                                </div>
                                <!-- / .modal -->
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <!-- .modal -->
                        <div id="mx-all" class="modal fade" data-backdrop="true">
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

                        <label class="ui-check m-a-0">
                            <input id="checkAll"
                                   type="checkbox"><i></i> <?php echo e(__('backend.checkAll')); ?>

                        </label>
                        <div class="pull-right">
                            <select name="action" id="action"
                                    class="form-control c-select w-sm inline v-middle" required>
                                <option value=""><?php echo e(__('backend.bulkAction')); ?></option>
                                <option value="order"><?php echo e(__('backend.saveOrder')); ?></option>
                                <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                    <option value="delete"><?php echo e(__('backend.deleteSelected')); ?></option>
                                <?php endif; ?>
                            </select>
                            <button type="submit" id="submit_all"
                                    class="btn white"><?php echo e(__('backend.apply')); ?></button>
                            <button id="submit_show_msg" class="btn white" data-toggle="modal"
                                    style="display: none"
                                    data-target="#mx-all" ui-toggle-class="bounce"
                                    ui-target="#animate"><?php echo e(__('backend.apply')); ?>

                            </button>
                        </div>
                    </div>

                    <?php echo e(Form::close()); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/topics/tabs/photos.blade.php ENDPATH**/ ?>