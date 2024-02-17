<?php if($WebmasterSection->comments_status): ?>
    <div class="tab-pane  <?php echo e($tab_4); ?>" id="tab_comments">

        <div class="box-body">
            <?php if(Session::has('commentST')): ?>
                <?php if(Session::get('commentST') == "create"): ?>

                    <div>
                        <?php echo e(Form::open(['route'=>['topicsCommentsStore',$WebmasterSection->id,$Topics->id],'method'=>'POST', 'files' => true ])); ?>



                        <div class="form-group row">
                            <label for="name"
                                   class="col-sm-2 form-control-label"><?php echo __('backend.topicCommentName'); ?>

                            </label>
                            <div class="col-sm-10">
                                <?php echo Form::text('name','', array('placeholder' => '','class' => 'form-control','id'=>'name','required'=>'')); ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email"
                                   class="col-sm-2 form-control-label"><?php echo __('backend.topicCommentEmail'); ?>

                            </label>
                            <div class="col-sm-10">
                                <?php echo Form::email('email','', array('placeholder' => '','class' => 'form-control','id'=>'email','required'=>'')); ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comment"
                                   class="col-sm-2 form-control-label"><?php echo __('backend.topicComment'); ?>

                            </label>
                            <div class="col-sm-10">
                                <?php echo Form::textarea('comment','', array('placeholder' => '','class' => 'form-control','id'=>'comment','required'=>'','rows'=>'5')); ?>

                            </div>
                        </div>


                        <div class="form-group row m-t-md">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary m-t"><i
                                        class="material-icons">
                                        &#xe31b;</i> <?php echo __('backend.add'); ?></button>
                                <a href="<?php echo e(route('topicsComments',[$WebmasterSection->id,$Topics->id])); ?>"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
                            </div>
                        </div>

                        <?php echo e(Form::close()); ?>

                    </div>

                <?php endif; ?>

                <?php if(Session::get('commentST') == "edit"): ?>
                    <div>
                        <?php echo e(Form::open(['route'=>['topicsCommentsUpdate',$WebmasterSection->id,$Topics->id,Session::get('Comment')->id],'method'=>'POST', 'files' => true ])); ?>



                        <div class="form-group row">
                            <label for="name"
                                   class="col-sm-2 form-control-label"><?php echo __('backend.topicCommentName'); ?>

                            </label>
                            <div class="col-sm-10">
                                <?php echo Form::text('name',Session::get('Comment')->name, array('placeholder' => '','class' => 'form-control','id'=>'name','required'=>'')); ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email"
                                   class="col-sm-2 form-control-label"><?php echo __('backend.topicCommentEmail'); ?>

                            </label>
                            <div class="col-sm-10">
                                <?php echo Form::email('email',Session::get('Comment')->email, array('placeholder' => '','class' => 'form-control','id'=>'email','required'=>'')); ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comment"
                                   class="col-sm-2 form-control-label"><?php echo __('backend.topicComment'); ?>

                            </label>
                            <div class="col-sm-10">
                                <?php echo Form::textarea('comment',Session::get('Comment')->comment, array('placeholder' => '','class' => 'form-control','id'=>'comment','required'=>'','rows'=>'5')); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="link_status"
                                   class="col-sm-2 form-control-label"><?php echo __('backend.status'); ?></label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','1',(Session::get('Comment')->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                        <i class="dark-white"></i>
                                        <?php echo e(__('backend.active')); ?>

                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        <?php echo Form::radio('status','0',(Session::get('Comment')->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

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
                                <a href="<?php echo e(route('topicsComments',[$WebmasterSection->id,$Topics->id])); ?>"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
                            </div>
                        </div>

                        <?php echo e(Form::close()); ?>

                    </div>
                <?php endif; ?>
            <?php else: ?>

                <?php if(count($Topics->comments)>0): ?>
                    <div class="row m-b">
                        <div class="col-sm-12">
                            <a class="btn btn-fw primary"
                               href="<?php echo e(route("topicsCommentsCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                <i class="material-icons">&#xe02e;</i>
                                &nbsp; <?php echo e(__('backend.topicNewComment')); ?>

                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(count($Topics->comments) == 0): ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class=" p-y-2 p-x text-center light b-a h6 m-a-0">
                                <div class="text-muted m-b"><i class="fa fa-laptop fa-4x"></i></div>
                                <?php echo e(__('backend.noData')); ?>

                                <br>
                                <br>
                                <a class="btn btn-fw primary"
                                   href="<?php echo e(route("topicsCommentsCreate",[$WebmasterSection->id,$Topics->id])); ?>">
                                    <i class="material-icons">&#xe02e;</i>
                                    &nbsp; <?php echo e(__('backend.topicNewComment')); ?>

                                </a>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(count($Topics->comments)>0): ?>
                    <?php echo e(Form::open(['route'=>['topicsCommentsUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                    <table class="table table-bordered">
                        <thead class="dker">
                        <tr>
                            <th class="width20 dker">
                                <label class="ui-check m-a-0">
                                    <input id="checkAll2" type="checkbox"><i></i>
                                </label>
                            </th>
                            <th><?php echo e(__('backend.topicCommentName')); ?></th>
                            <th><?php echo e(__('backend.topicComment')); ?></th>
                            <th class="text-center"
                                style="width:50px;"><?php echo e(__('backend.status')); ?></th>
                            <th class="text-center"
                                style="width:200px;"><?php echo e(__('backend.options')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $Topics->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="dker"><label class="ui-check m-a-0">
                                        <input type="checkbox" name="ids[]"
                                               value="<?php echo e($comment->id); ?>"><i
                                            class="dark-white"></i>
                                        <?php echo Form::hidden('row_ids[]',$comment->id, array('class' => 'form-control row_no')); ?>

                                    </label>
                                </td>
                                <td>
                                    <?php echo Form::text('row_no_'.$comment->id,$comment->row_no, array('class' => 'pull-left form-control row_no','id'=>'row_no2')); ?>

                                    <?php echo e($comment->name); ?>

                                    <div>
                                        <small>
                                            <?php echo e($comment->email); ?>

                                        </small>
                                    </div>
                                </td>
                                <td>
                                    <small><?php echo e($comment->date); ?></small>
                                    <div>
                                        <small><?php echo e($comment->comment); ?></small>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <i class="fa <?php echo e(($comment->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm success"
                                       href="<?php echo e(route("topicsCommentsEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"comment_id"=>$comment->id])); ?>">
                                        <small><i class="material-icons">
                                                &#xe3c9;</i> <?php echo e(__('backend.edit')); ?></small>
                                    </a>
                                    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                        <button class="btn btn-sm warning" data-toggle="modal"
                                                data-target="#mc-<?php echo e($comment->id); ?>"
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
                            <div id="mc-<?php echo e($comment->id); ?>" class="modal fade" data-backdrop="true">
                                <div class="modal-dialog" id="animate">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                                        </div>
                                        <div class="modal-body text-center p-lg">
                                            <p>
                                                <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                                                <br>
                                                <strong>[ <?php echo $comment->name; ?> ]</strong>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark-white p-x-md"
                                                    data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                                            <a href="<?php echo e(route("topicsCommentsDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"comment_id"=>$comment->id])); ?>"
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
                            <div id="mc-all" class="modal fade" data-backdrop="true">
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

                            <select name="action" id="action2"
                                    class="form-control c-select w-sm inline v-middle" required>
                                <option value=""><?php echo e(__('backend.bulkAction')); ?></option>
                                <option value="order"><?php echo e(__('backend.saveOrder')); ?></option>
                                <option value="activate"><?php echo e(__('backend.activeSelected')); ?></option>
                                <option value="block"><?php echo e(__('backend.blockSelected')); ?></option>
                                <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                    <option value="delete"><?php echo e(__('backend.deleteSelected')); ?></option>
                                <?php endif; ?>
                            </select>
                            <button type="submit" id="submit_all2"
                                    class="btn white"><?php echo e(__('backend.apply')); ?></button>
                            <button id="submit_show_msg2" class="btn white" data-toggle="modal"
                                    style="display: none"
                                    data-target="#mc-all" ui-toggle-class="bounce"
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
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/topics/tabs/comments.blade.php ENDPATH**/ ?>