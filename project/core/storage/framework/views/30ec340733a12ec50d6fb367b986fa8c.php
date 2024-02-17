<?php $__env->startSection('title', __('backend.siteMenus')); ?>
<?php $__env->startSection('content'); ?>
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
                    <button type="button" onclick="document.getElementById('menusUpdateAll').submit()"
                            class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></button>
                </div>
            </div><!-- /.modal-content -->
        </div>
    </div>

    <?php $__currentLoopData = $ParentMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ParentMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="mg-<?php echo e($ParentMenu->id); ?>" class="modal fade"
             data-backdrop="true">
            <div class="modal-dialog" id="animate">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                    </div>
                    <div class="modal-body text-center p-lg">
                        <p>
                            <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                            <br>
                            <strong>[ <?php echo e($ParentMenu->{'title_'.Helper::currentLanguage()->code}); ?>

                                ]</strong>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn dark-white p-x-md"
                                data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                        <a href="<?php echo e(route("parentMenusDestroy",["id"=>$ParentMenu->id])); ?>"
                           class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></a>
                    </div>
                </div><!-- /.modal-content -->
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php
    try {
        $edt_id = $EditedMenu->id;
    } catch (Exception $e) {
        $edt_id = 0;
    }
    $edt_title = "";
    ?>
    <div class="row-col">
        <div class="col-sm ww-md w-auto-xs light lt bg-auto  hidden-print">
            <div class="padding pos-rlt">
                <div>
                    <div class="nav-active-white">
                        <ul class="nav nav-pills nav-stacked nav-sm b-b">
                            <li class="nav-item">
                                <ul class="list p-b-1" style="list-style: none;">
                                    <?php
                                    $title_var = "title_" . @Helper::currentLanguage()->code;
                                    $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                    ?>
                                    <?php $__currentLoopData = $ParentMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ParentMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if ($ParentMenu->$title_var != "") {
                                            $title = $ParentMenu->$title_var;
                                        } else {
                                            $title = $ParentMenu->$title_var2;
                                        }
                                        ?>
                                        <?php
                                        if ($ParentMenu->id == $edt_id) {
                                            $edt_title = $title;
                                        }
                                        ?>
                                        <li style="margin-bottom: 5px"
                                            onmouseover="document.getElementById('grpRow<?php echo e($ParentMenu->id); ?>').style.display='block'"
                                            onmouseout="document.getElementById('grpRow<?php echo e($ParentMenu->id); ?>').style.display='none'">
                                            <a href="<?php echo e(route("menus",["ParentMenuId"=>$ParentMenu->id])); ?>"
                                                <?php echo ($ParentMenu->id == $edt_id) ? " style='font-weight: bold;color:#0cc2aa'":""; ?> >
                                                <?php echo $title; ?>

                                            </a>

                                            <div id="grpRow<?php echo e($ParentMenu->id); ?>"
                                                 style="display: none"
                                                 class="pull-right">
                                                <a class="btn btn-sm success p-a-0 m-a-0"
                                                   title="<?php echo e(__('backend.edit')); ?>"
                                                   href="<?php echo e(route("parentMenusEdit",["id"=>$ParentMenu->id])); ?>">
                                                    <small>&nbsp;<i class="material-icons">&#xe3c9;</i>&nbsp;
                                                    </small>
                                                </a>

                                                <button class="btn btn-sm warning p-a-0 m-a-0"
                                                        data-toggle="modal"
                                                        data-target="#mg-<?php echo e($ParentMenu->id); ?>"
                                                        ui-toggle-class="bounce"
                                                        title="<?php echo e(__('backend.delete')); ?>"
                                                        ui-target="#animate">
                                                    <small>&nbsp;<i class="material-icons">&#xe872;</i>&nbsp;
                                                    </small>
                                                </button>


                                            </div>

                                        </li>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </li>
                        </ul>
                        <div class="p-y">
                            <?php if(Session::has('EditMenu')): ?>
                                <?php echo e(Form::open(['route'=>['parentMenusUpdate',"id"=>$EditedMenu->id,"ParentMenuId"=>"0"],'method'=>'POST'])); ?>

                                <div class="input-group input-group-sm">

                                    <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($ActiveLanguage->box_status): ?>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <?php echo Form::text('title_'.@$ActiveLanguage->code,$EditedMenu->{'title_'.@$ActiveLanguage->code}, array('placeholder' => $ActiveLanguage->title,'class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                    <span class="input-group-btn">
                <button class="btn btn-fw primary" type="submit"><?php echo __('backend.save'); ?></button>
              </span>
                                        </div>
                                    </div>
                                </div>
                                <?php echo e(Form::close()); ?>

                            <?php else: ?>
                                <?php echo e(Form::open(['route'=>['parentMenusStore',$edt_id],'method'=>'POST'])); ?>

                                <div class="input-group input-group-sm">
                                    <?php echo __('backend.newMenu'); ?> :

                                    <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($ActiveLanguage->box_status): ?>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <?php echo Form::text('title_'.@$ActiveLanguage->code,'', array('placeholder' =>$ActiveLanguage->title,'class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                    <span class="input-group-btn">
                <button class="btn btn-sm primary" type="submit"><?php echo __('backend.add'); ?></button>
              </span>
                                        </div>
                                    </div>
                                </div>
                                <?php echo e(Form::close()); ?>

                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm">
            <div ui-view class="padding">
                <div>
                    <div class="box">
                        <div class="box-header dker">
                            <h3><?php echo e($edt_title); ?></h3>
                            <small>
                                <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                                <a href=""><?php echo e(__('backend.settings')); ?></a> /
                                <a href=""><?php echo e(__('backend.siteMenus')); ?></a>

                            </small>
                        </div>
                        <?php if($Menus->total() >0): ?>
                            <div class="row p-a">
                                <div class="col-sm-12">
                                    <a class="btn btn-fw primary" href="<?php echo e(route("menusCreate",$edt_id)); ?>">
                                        <i class="material-icons">&#xe02e;</i>
                                        &nbsp; <?php echo e(__('backend.newLink')); ?>

                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($Menus->total() == 0): ?>
                            <div class="row p-a">
                                <div class="col-sm-12">
                                    <div class=" p-a text-center ">
                                        <?php echo e(__('backend.noData')); ?>

                                        <br>
                                        <?php if(count($ParentMenus)>0): ?>
                                            <br>
                                            <a class="btn btn-fw primary" href="<?php echo e(route("menusCreate",$edt_id)); ?>">
                                                <i class="material-icons">&#xe02e;</i>
                                                &nbsp; <?php echo e(__('backend.newLink')); ?>

                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($Menus->total() > 0): ?>
                            <?php echo e(Form::open(['route'=>'menusUpdateAll','id'=>'menusUpdateAll','method'=>'post'])); ?>

                            <?php echo Form::hidden('ParentMenuId',$edt_id); ?>

                            <div class="table-responsive">
                                <table class="table table-bordered m-a-0">
                                    <thead class="dker">
                                    <tr>
                                        <th  class="width20 dker">
                                            <label class="ui-check m-a-0">
                                                <input id="checkAll" type="checkbox"><i></i>
                                            </label>
                                        </th>
                                        <th><?php echo e(__('backend.linkURL')); ?></th>
                                        <th class="text-center" style="width:50px;"><?php echo e(__('backend.status')); ?></th>
                                        <th class="text-center"
                                            style="width:100px;"><?php echo e(__('backend.options')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $title_var = "title_" . @Helper::currentLanguage()->code;
                                    $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                    ?>
                                    <?php $__currentLoopData = $Menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if ($Menu->$title_var != "") {
                                            $title = $Menu->$title_var;
                                        } else {
                                            $title = $Menu->$title_var2;
                                        }
                                        ?>
                                        <tr>
                                            <td class="dker"><label class="ui-check m-a-0">
                                                    <input type="checkbox" name="ids[]" value="<?php echo e($Menu->id); ?>"><i
                                                        class="dark-white"></i>
                                                    <?php echo Form::hidden('row_ids[]',$Menu->id, array('class' => 'form-control row_no')); ?>

                                                </label>
                                            </td>
                                            <td  class="h6">
                                                <?php echo Form::text('row_no_'.$Menu->id,$Menu->row_no, array('class' => 'form-control row_no','id'=>'row_no')); ?>

                                                <?php echo $title; ?></td>
                                            <td class="text-center">
                                                <i class="fa <?php echo e(($Menu->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-sm success"
                                                   href="<?php echo e(route("menusEdit",["ParentMenuId"=>$edt_id,"id"=>$Menu->id])); ?>">
                                                    <small><i class="material-icons">
                                                            &#xe3c9;</i> <?php echo e(__('backend.edit')); ?>

                                                    </small>
                                                </a>

                                            </td>
                                        </tr>
                                        <?php $__currentLoopData = $Menu->subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if ($subMenu->$title_var != "") {
                                                $title = $subMenu->$title_var;
                                            } else {
                                                $title = $subMenu->$title_var2;
                                            }
                                            ?>
                                            <tr>
                                                <td><label class="ui-check m-a-0">
                                                        <input type="checkbox" name="ids[]"
                                                               value="<?php echo e($subMenu->id); ?>"><i
                                                            class="dark-white"></i>
                                                        <?php echo Form::hidden('row_ids[]',$subMenu->id, array('class' => 'form-control row_no')); ?>

                                                    </label>
                                                </td>
                                                <td>
                                                    <img
                                                        src="<?php echo e(asset('assets/dashboard/images/treepart_'.@Helper::currentLanguage()->direction.'.png')); ?>"
                                                        class="submenu_tree">
                                                    <?php echo Form::text('row_no_'.$subMenu->id,$subMenu->row_no, array('class' => 'form-control row_no','id'=>'row_no')); ?>

                                                    <?php echo $title; ?></td>
                                                <td class="text-center">
                                                    <i class="fa <?php echo e(($subMenu->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-sm success"
                                                       href="<?php echo e(route("menusEdit",["ParentMenuId"=>$edt_id,"id"=>$subMenu->id])); ?>">
                                                        <small><i class="material-icons">
                                                                &#xe3c9;</i> <?php echo e(__('backend.edit')); ?>

                                                        </small>
                                                    </a>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>

                            </div>
                            <footer class="dker p-a">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs">

                                        <select name="action" id="action"
                                                class="form-control c-select w-sm inline v-middle"
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
                                            class="text-muted inline m-t-sm m-b-sm"><?php echo e(__('backend.showing')); ?> <?php echo e($Menus->firstItem()); ?>

                                            -<?php echo e($Menus->lastItem()); ?> <?php echo e(__('backend.of')); ?>

                                            <strong><?php echo e($Menus->total()); ?></strong> <?php echo e(__('backend.records')); ?>

                                        </small>
                                    </div>
                                    <div class="col-sm-6 text-right text-center-xs">
                                        <?php echo $Menus->links(); ?>

                                    </div>
                                </div>
                            </footer>
                            <?php echo e(Form::close()); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
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

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/menus/list.blade.php ENDPATH**/ ?>