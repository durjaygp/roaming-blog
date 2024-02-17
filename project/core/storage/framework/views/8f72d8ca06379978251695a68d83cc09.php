<?php $__env->startSection('title', __('backend.adsBannersSettings')); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><?php echo e(__('backend.adsBannersSettings')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                    <?php echo e(__('backend.webmasterTools')); ?> /
                    <a href=""><?php echo e(__('backend.adsBannersSettings')); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="btn btn-fw primary" href="<?php echo e(route("WebmasterBannersCreate")); ?>">
                            <i class="material-icons">&#xe02e;</i>
                            &nbsp; <?php echo e(__('backend.addNewBannerType')); ?></a>
                    </li>
                </ul>
            </div>
            <?php if($WebmasterBanners->total() == 0): ?>
                <div class="row p-a">
                    <div class="col-sm-12">
                        <div class=" p-a text-center light ">
                            <?php echo e(__('backend.noData')); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($WebmasterBanners->total() > 0): ?>
                <?php echo e(Form::open(['route'=>'WebmasterBannersUpdateAll','method'=>'post'])); ?>

                <div class="table-responsive">
                    <table class="table table-bordered m-a-0">
                        <thead  class="dker">
                        <tr>
                            <th class="width20 dker">
                                <label class="ui-check m-a-0">
                                    <input id="checkAll" type="checkbox"><i></i>
                                </label>
                            </th>
                            <th class="text-center w-64">ID</th>
                            <th><?php echo e(__('backend.bannerTitle')); ?></th>
                            <th class="text-center"><?php echo e(__('backend.sectionType')); ?></th>
                            <th class="text-center"><?php echo e(__('backend.size')); ?></th>
                            <th class="text-center"><?php echo e(__('backend.bannerCode')); ?></th>
                            <th class="text-center" style="width:50px;"><?php echo e(__('backend.status')); ?></th>
                            <th class="text-center" style="width:200px;"><?php echo e(__('backend.options')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $title_var = "title_" . @Helper::currentLanguage()->code;
                        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                        ?>
                        <?php $__currentLoopData = $WebmasterBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WebmasterBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            if ($WebmasterBanner->$title_var != "") {
                                $title = $WebmasterBanner->$title_var;
                            } else {
                                $title = $WebmasterBanner->$title_var2;
                            }
                            ?>
                            <tr>
                                <td class="dker"><label class="ui-check m-a-0">
                                        <input type="checkbox" name="ids[]" value="<?php echo e($WebmasterBanner->id); ?>"><i
                                            class="dark-white"></i>
                                        <?php echo Form::hidden('row_ids[]',$WebmasterBanner->id, array('class' => 'form-control row_no')); ?>

                                    </label>
                                </td>
                                <td class="text-center"><?php echo e($WebmasterBanner->id); ?></td>
                                <td class="h6">
                                    <?php echo Form::text('row_no_'.$WebmasterBanner->id,$WebmasterBanner->row_no, array('class' => 'form-control row_no','id'=>'row_no')); ?>

                                    <?php echo $title; ?></td>
                                <td class="text-center"><?php echo ($WebmasterBanner->type==2) ? "<span class='label red'><i class='material-icons'>&#xe63a;</i>  ".__('backend.sectionTypeVideo')."</span>":""; ?>

                                    <?php echo ($WebmasterBanner->type==1) ? "<span class='label green'><i class='material-icons'>&#xe251;</i>  ".__('backend.sectionTypePhoto')."</span>":""; ?>

                                    <?php echo ($WebmasterBanner->type==0) ? "<span class='label'><i class='material-icons'>&#xe86f;</i>  ".__('backend.sectionTypeCode')."</span>":""; ?>

                                </td>
                                <td class="text-center"><?php echo e($WebmasterBanner->width); ?>* <?php echo e($WebmasterBanner->height); ?></td>
                                <td class="text-center">
                                    <textarea dir="ltr" rows="2" class="form-control" readonly><?php echo e("@"."include('frontEnd.includes.banners'".',["BannersSettingsId"=>'.$WebmasterBanner->id.'])'); ?></textarea>
                                </td>
                                <td class="text-center">
                                    <i class="fa <?php echo e(($WebmasterBanner->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm success"
                                       href="<?php echo e(route("WebmasterBannersEdit",["id"=>$WebmasterBanner->id])); ?>">
                                        <small><i class="material-icons">&#xe3c9;</i> <?php echo e(__('backend.edit')); ?>

                                        </small>
                                    </a>

                                    <button class="btn btn-sm warning" data-toggle="modal"
                                            data-target="#m-<?php echo e($WebmasterBanner->id); ?>" ui-toggle-class="bounce"
                                            ui-target="#animate">
                                        <small><i class="material-icons">&#xe872;</i> <?php echo e(__('backend.delete')); ?>

                                        </small>
                                    </button>


                                </td>
                            </tr>
                            <!-- .modal -->
                            <div id="m-<?php echo e($WebmasterBanner->id); ?>" class="modal fade" data-backdrop="true">
                                <div class="modal-dialog" id="animate">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                                        </div>
                                        <div class="modal-body text-center p-lg">
                                            <p>
                                                <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                                                <br>
                                                <strong>[ <?php echo e($title); ?> ]</strong>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark-white p-x-md"
                                                    data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                                            <a href="<?php echo e(route("WebmasterBannersDestroy",["id"=>$WebmasterBanner->id])); ?>"
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

                            <select name="action" id="action" class="form-control c-select w-sm inline v-middle"
                                    required>
                                <option value=""><?php echo e(__('backend.bulkAction')); ?></option>
                                <option value="order"><?php echo e(__('backend.saveOrder')); ?></option>
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
                        </div>

                        <div class="col-sm-3 text-center">
                            <small
                                class="text-muted inline m-t-sm m-b-sm"><?php echo e(__('backend.showing')); ?> <?php echo e($WebmasterBanners->firstItem()); ?>

                                -<?php echo e($WebmasterBanners->lastItem()); ?> <?php echo e(__('backend.of')); ?>

                                <strong><?php echo e($WebmasterBanners->total()); ?></strong> <?php echo e(__('backend.records')); ?>

                            </small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            <?php echo $WebmasterBanners->links(); ?>

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

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/webmaster/banners/list.blade.php ENDPATH**/ ?>