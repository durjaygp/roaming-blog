<div class="padding">
    <div class="box">


        <div class="box-header dker">
            <h3><?php echo e(__('backend.permissions')); ?></h3>
            <small>
                <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                <a href=""><?php echo e(__('backend.settings')); ?></a>
            </small>
        </div>
        <?php if(count($Permissions) >0): ?>
            <div class="row p-a pull-right" style="margin-top: -70px;">
                <div class="col-sm-12">
                    <a class="btn btn-fw danger" href="<?php echo e(route("permissionsCreate")); ?>">
                        <i class="material-icons">&#xe03b;</i>
                        &nbsp; <?php echo e(__('backend.newPermissions')); ?>

                    </a>
                </div>
            </div>
        <?php endif; ?>

        <?php if(count($Permissions)  == 0): ?>
            <div class="row p-a">
                <div class="col-sm-12">
                    <div class=" p-a text-center ">
                        <?php echo e(__('backend.noData')); ?>

                        <br>
                        <br>
                        <a class="btn btn-fw primary" href="<?php echo e(route("permissionsCreate")); ?>">
                            <i class="material-icons">&#xe03b;</i>
                            &nbsp; <?php echo e(__('backend.newPermissions')); ?>

                        </a>

                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if(count($Permissions) > 0): ?>
            <div class="table-responsive">
                <table class="table table-bordered m-a-0">
                    <thead class="dker">
                    <tr>
                        <th><?php echo e(__('backend.title')); ?></th>
                        <th><?php echo e(__('backend.permissions')); ?></th>
                        <th class="text-center" style="width:50px;"><?php echo e(__('backend.status')); ?></th>
                        <th class="text-center" style="width:200px;"><?php echo e(__('backend.options')); ?></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $Permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="h6">
                                <?php echo $Permission->name; ?></td>
                            <td>
                                <small>
                                    <small>
                                        <?php if($Permission->add_status==1): ?>
                                            <i class="fa fa-check text-success inline"></i> <?php echo e(__('backend.perAdd')); ?>

                                            &nbsp;
                                        <?php endif; ?>
                                        <?php if($Permission->edit_status==1): ?>
                                            <i class="fa fa-check text-success inline"></i> <?php echo e(__('backend.perEdit')); ?>

                                            &nbsp;
                                        <?php endif; ?>
                                        <?php if($Permission->delete_status==1): ?>
                                            <i class="fa fa-check text-success inline"></i> <?php echo e(__('backend.perDelete')); ?>

                                            &nbsp;
                                        <?php endif; ?>

                                        <?php if($Permission->add_status==0 && $Permission->edit_status==0 && $Permission->delete_status==0): ?>
                                            <?php echo e(__('backend.viewOnly')); ?>

                                            &nbsp;
                                        <?php endif; ?>

                                        <br>
                                        <?php if($Permission->analytics_status==1): ?>
                                            <?php echo e(__('backend.visitorsAnalytics')); ?>,
                                        <?php endif; ?>
                                        <?php if($Permission->newsletter_status==1): ?>
                                            <?php echo e(__('backend.newsletter')); ?>,
                                        <?php endif; ?>
                                        <?php if($Permission->inbox_status==1): ?>
                                            <?php echo e(__('backend.siteInbox')); ?>,
                                        <?php endif; ?>
                                        <?php if($Permission->calendar_status==1): ?>
                                            <?php echo e(__('backend.calendar')); ?>,
                                        <?php endif; ?>
                                        <?php if($Permission->banners_status==1): ?>
                                            <?php echo e(__('backend.adsBanners')); ?>,
                                        <?php endif; ?>
                                        <?php if($Permission->settings_status==1): ?>
                                            <?php echo e(__('backend.generalSettings')); ?>,
                                        <?php endif; ?>
                                        <?php if($Permission->webmaster_status==1): ?>
                                            <?php echo e(__('backend.webmasterTools')); ?>,
                                        <?php endif; ?>

                                        <br>
                                        <?php $i = 0; ?>
                                        <?php $__currentLoopData = $GeneralWebmasterSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            $data_sections_arr = explode(",", $Permission->data_sections);
                                            ?>
                                            <?php if(in_array($WebmasterSection->id,$data_sections_arr) && $i!=0): ?>
                                                ,
                                            <?php endif; ?>
                                            <?php echo (in_array($WebmasterSection->id,$data_sections_arr)) ? $WebmasterSection->{"title_" . @Helper::currentLanguage()->code}:""; ?>


                                            <?php $i++; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </small>
                                </small>

                            </td>
                            <td class="text-center">
                                <i class="fa <?php echo e(($Permission->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-sm success"
                                   href="<?php echo e(route("permissionsEdit",["id"=>$Permission->id])); ?>">
                                    <small><i class="material-icons">&#xe3c9;</i> <?php echo e(__('backend.edit')); ?>

                                    </small>
                                </a>

                                <button class="btn btn-sm danger" data-toggle="modal"
                                        data-target="#p-<?php echo e($Permission->id); ?>" ui-toggle-class="bounce"
                                        ui-target="#animate">
                                    <small><i class="material-icons">&#xe872;</i> <?php echo e(__('backend.delete')); ?>

                                    </small>
                                </button>


                            </td>
                        </tr>
                        <!-- .modal -->
                        <div id="p-<?php echo e($Permission->id); ?>" class="modal fade" data-backdrop="true">
                            <div class="modal-dialog" id="animate">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                                    </div>
                                    <div class="modal-body text-center p-lg">
                                        <p>
                                            <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                                            <br>
                                            <strong>[ <?php echo e($Permission->name); ?> ]</strong>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn dark-white p-x-md"
                                                data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                                        <a href="<?php echo e(route("permissionsDestroy",["id"=>$Permission->id])); ?>"
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

        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/permissions/list.blade.php ENDPATH**/ ?>