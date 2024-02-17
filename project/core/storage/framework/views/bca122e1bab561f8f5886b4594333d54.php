<?php $__env->startSection('title', __('backend.usersPermissions')); ?>
<?php $__env->startSection('content'); ?>
    <?php if(@Auth::user()->permissionsGroup->webmaster_status): ?>
        <?php echo $__env->make('dashboard.permissions.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <div class="padding">
        <div class="box">

            <div class="box-header dker">
                <h3><?php echo e(__('backend.users')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                    <a href=""><?php echo e(__('backend.settings')); ?></a>
                </small>
            </div>

            <?php if($Users->total() >0): ?>
                <?php if(@Auth::user()->permissionsGroup->webmaster_status): ?>
                    <div class="row p-a pull-right" style="margin-top: -70px;">
                        <div class="col-sm-12">
                            <a class="btn btn-fw primary" href="<?php echo e(route("usersCreate")); ?>">
                                <i class="material-icons">&#xe7fe;</i>
                                &nbsp; <?php echo e(__('backend.newUser')); ?>

                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php if($Users->total() == 0): ?>
                <div class="row p-a">
                    <div class="col-sm-12">
                        <div class=" p-a text-center ">
                            <?php echo e(__('backend.noData')); ?>

                            <br>
                            <?php if(@Auth::user()->permissionsGroup->webmaster_status): ?>
                                <br>
                                <a class="btn btn-fw primary" href="<?php echo e(route("usersCreate")); ?>">
                                    <i class="material-icons">&#xe7fe;</i>
                                    &nbsp; <?php echo e(__('backend.newUser')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($Users->total() > 0): ?>
                <?php echo e(Form::open(['route'=>'usersUpdateAll','method'=>'post'])); ?>

                <div class="table-responsive">
                    <table class="table table-bordered m-a-0">
                        <thead class="dker">
                        <tr>
                            <th  class="width20 dker">
                                <label class="ui-check m-a-0">
                                    <input id="checkAll" type="checkbox"><i></i>
                                </label>
                            </th>
                            <th><?php echo e(__('backend.fullName')); ?></th>
                            <th><?php echo e(__('backend.loginEmail')); ?></th>
                            <th><?php echo e(__('backend.Permission')); ?></th>
                            <th class="text-center" style="width:50px;"><?php echo e(__('backend.status')); ?></th>
                            <th class="text-center" style="width:200px;"><?php echo e(__('backend.options')); ?></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="dker"><label class="ui-check m-a-0">
                                        <input type="checkbox" name="ids[]" value="<?php echo e($User->id); ?>"><i
                                            class="dark-white"></i>
                                        <?php echo Form::hidden('row_ids[]',$User->id, array('class' => 'form-control row_no')); ?>

                                    </label>
                                </td>
                                <td class="h6">
                                    <?php echo $User->name; ?>

                                </td>

                                <td>
                                    <small><?php echo $User->email; ?></small>
                                </td>
                                <td>
                                    <small><?php echo e(@$User->permissionsGroup->name); ?></small>
                                </td>
                                <td class="text-center">
                                    <i class="fa <?php echo e(($User->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm success"
                                       href="<?php echo e(route("usersEdit",["id"=>$User->id])); ?>">
                                        <small><i class="material-icons">&#xe3c9;</i> <?php echo e(__('backend.edit')); ?>

                                        </small>
                                    </a>
                                    <?php if(@Auth::user()->permissionsGroup->webmaster_status): ?>
                                        <button class="btn btn-sm warning" data-toggle="modal"
                                                data-target="#m-<?php echo e($User->id); ?>" ui-toggle-class="bounce"
                                                ui-target="#animate">
                                            <small><i class="material-icons">&#xe872;</i> <?php echo e(__('backend.delete')); ?>

                                            </small>
                                        </button>
                                    <?php endif; ?>


                                </td>
                            </tr>
                            <!-- .modal -->
                            <div id="m-<?php echo e($User->id); ?>" class="modal fade" data-backdrop="true">
                                <div class="modal-dialog" id="animate">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                                        </div>
                                        <div class="modal-body text-center p-lg">
                                            <p>
                                                <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                                                <br>
                                                <strong>[ <?php echo e($User->name); ?> ]</strong>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark-white p-x-md"
                                                    data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                                            <a href="<?php echo e(route("usersDestroy",["id"=>$User->id])); ?>"
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
                <footer class="dker p-a">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
                            <!-- .modal -->
                            <div id="m-all" class="modal fade" data-backdrop="true">
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
                            <?php if(@Auth::user()->permissionsGroup->webmaster_status): ?>
                                <select name="action" id="action" class="form-control c-select w-sm inline v-middle"
                                        required>
                                    <option value=""><?php echo e(__('backend.bulkAction')); ?></option>
                                    <option value="activate"><?php echo e(__('backend.activeSelected')); ?></option>
                                    <option value="block"><?php echo e(__('backend.blockSelected')); ?></option>
                                    <option value="delete"><?php echo e(__('backend.deleteSelected')); ?></option>
                                </select>
                                <button type="submit" id="submit_all"
                                        class="btn white"><?php echo e(__('backend.apply')); ?></button>
                                <button id="submit_show_msg" class="btn white" data-toggle="modal"
                                        style="display: none"
                                        data-target="#m-all" ui-toggle-class="bounce"
                                        ui-target="#animate"><?php echo e(__('backend.apply')); ?>

                                </button>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-3 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm"><?php echo e(__('backend.showing')); ?> <?php echo e($Users->firstItem()); ?>

                                -<?php echo e($Users->lastItem()); ?> <?php echo e(__('backend.of')); ?>

                                <strong><?php echo e($Users->total()); ?></strong> <?php echo e(__('backend.records')); ?></small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            <?php echo $Users->links(); ?>

                        </div>
                    </div>
                </footer>
                <?php echo e(Form::close()); ?>

            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush("after-scripts"); ?>
    <script type="text/javascript">
        $("#checkAll").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action").change(function () {
            if (this.value == "delete") {
                $("#submit_all").css("display", "none");
                $("#submit_show_msg").css("display", "inline-block");
            } else {
                $("#submit_all").css("display", "inline-block");
                $("#submit_show_msg").css("display", "none");
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/users/list.blade.php ENDPATH**/ ?>