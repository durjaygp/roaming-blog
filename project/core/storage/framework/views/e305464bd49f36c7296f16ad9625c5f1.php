<?php if($WebmasterSection->maps_status): ?>
    <div class="tab-pane  <?php echo e($tab_5); ?>" id="tab_maps">

        <div class="box-body">

            <div class="row">
                <?php if(Session::has('mapST')): ?>

                    <?php if(Session::get('mapST') == "edit"): ?>
                        <div class="offset-sm-2 col-sm-8">
                            <br>
                            <?php echo e(Form::open(['route'=>['topicsMapsUpdate',$WebmasterSection->id,$Topics->id,Session::get('Map')->id],'method'=>'POST', 'files' => true ])); ?>



                            <div class="form-group row">
                                <label for="longitude"
                                       class="col-sm-3 form-control-label"><?php echo __('backend.topicMapLocation'); ?>

                                </label>
                                <div class="col-sm-5">
                                    <?php echo Form::text('longitude',Session::get('Map')->longitude, array('placeholder' => '','class' => 'form-control','id'=>'longitude','required'=>'')); ?>

                                </div>
                                <div class="col-sm-4">
                                    <?php echo Form::text('latitude',Session::get('Map')->latitude, array('placeholder' => '','class' => 'form-control','id'=>'latitude','required'=>'')); ?>

                                </div>
                            </div>


                            <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($ActiveLanguage->box_status): ?>
                                    <div class="form-group row">
                                        <label
                                            class="col-sm-3 form-control-label"><?php echo __('backend.topicMapTitle'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                                        </label>
                                        <div class="col-sm-9">
                                            <?php echo Form::text('title_'.@$ActiveLanguage->code,Session::get('Map')->{'title_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($ActiveLanguage->box_status): ?>
                                    <div class="form-group row">
                                        <label
                                            class="col-sm-3 form-control-label"><?php echo __('backend.topicMapDetails'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                                        </label>
                                        <div class="col-sm-9">
                                            <?php echo Form::textarea('details_'.@$ActiveLanguage->code,Session::get('Map')->{'details_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control','id'=>'details_'.@$ActiveLanguage->code,'rows'=>'3', 'dir'=>@$ActiveLanguage->direction)); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <div class="form-group row">
                                <label for="link_status"
                                       class="col-sm-3 form-control-label"><?php echo __('backend.topicMapIcon'); ?></label>
                                <div class="col-sm-9">
                                    <div class="radio">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('icon','0',true, array('id' => 'status1','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <img
                                                src="<?php echo e(asset('assets/dashboard/images/marker_0.png')); ?>"
                                                style="width: 25px;">
                                        </label>
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('icon','1',(Session::get('Map')->icon==1) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <img
                                                src="<?php echo e(asset('assets/dashboard/images/marker_1.png')); ?>"
                                                style="width: 25px;">
                                        </label>
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('icon','2',(Session::get('Map')->icon==2) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <img
                                                src="<?php echo e(asset('assets/dashboard/images/marker_2.png')); ?>"
                                                style="width: 25px;">
                                        </label>
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('icon','3',(Session::get('Map')->icon==3) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <img
                                                src="<?php echo e(asset('assets/dashboard/images/marker_3.png')); ?>"
                                                style="width: 25px;">
                                        </label>
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('icon','4',(Session::get('Map')->icon==4) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <img
                                                src="<?php echo e(asset('assets/dashboard/images/marker_4.png')); ?>"
                                                style="width: 25px;">
                                        </label>
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('icon','5',(Session::get('Map')->icon==5) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <img
                                                src="<?php echo e(asset('assets/dashboard/images/marker_5.png')); ?>"
                                                style="width: 25px;">
                                        </label>
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('icon','6',(Session::get('Map')->icon==6) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <img
                                                src="<?php echo e(asset('assets/dashboard/images/marker_6.png')); ?>"
                                                style="width: 25px;">
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="link_status"
                                       class="col-sm-3 form-control-label"><?php echo __('backend.status'); ?></label>
                                <div class="col-sm-9">
                                    <div class="radio">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('status','1',(Session::get('Map')->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(__('backend.active')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('status','0',(Session::get('Map')->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(__('backend.notActive')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row m-t-md">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary m-t"><i
                                            class="material-icons">
                                            &#xe31b;</i> <?php echo __('backend.update'); ?></button>
                                    <a href="<?php echo e(route('topicsMaps',[$WebmasterSection->id,$Topics->id])); ?>"
                                       class="btn btn-default m-t"><i class="material-icons">
                                            &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
                                </div>
                            </div>

                            <?php echo e(Form::close()); ?>

                        </div>
                    <?php endif; ?>

                <?php else: ?>
                    <div>
                        <div id="mmn-<?php echo e($Topics->id); ?>" class="modal fade"
                             data-backdrop="true">
                            <div class="modal-dialog" id="animate">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><?php echo e(__('backend.topicNewMap')); ?></h5>
                                    </div>
                                    <?php echo e(Form::open(['route'=>['topicsMapsStore',$WebmasterSection->id,$Topics->id],'method'=>'POST', 'files' => true ])); ?>

                                    <div class="modal-body p-lg">
                                        <div>

                                            <div class="form-group row">
                                                <label for="longitude"
                                                       class="col-sm-3 form-control-label"><?php echo __('backend.topicMapLocation'); ?>

                                                </label>
                                                <div class="col-sm-5">
                                                    <?php echo Form::text('longitude','', array('placeholder' => '','class' => 'form-control','id'=>'longitude','required'=>'')); ?>

                                                </div>
                                                <div class="col-sm-4">
                                                    <?php echo Form::text('latitude','', array('placeholder' => '','class' => 'form-control','id'=>'latitude','required'=>'')); ?>

                                                </div>
                                            </div>

                                            <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($ActiveLanguage->box_status): ?>
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-3 form-control-label"><?php echo __('backend.topicMapTitle'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                                                        </label>
                                                        <div class="col-sm-9">
                                                            <?php echo Form::text('title_'.@$ActiveLanguage->code,'', array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($ActiveLanguage->box_status): ?>
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-3 form-control-label"><?php echo __('backend.topicMapDetails'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                                                        </label>
                                                        <div class="col-sm-9">
                                                            <?php echo Form::textarea('details_'.@$ActiveLanguage->code,'', array('placeholder' => '','class' => 'form-control','id'=>'details_'.@$ActiveLanguage->code,'rows'=>'3', 'dir'=>@$ActiveLanguage->direction)); ?>

                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <div class="form-group row">
                                                <label for="link_status"
                                                       class="col-sm-3 form-control-label"><?php echo __('backend.topicMapIcon'); ?></label>
                                                <div class="col-sm-9">
                                                    <div class="radio">
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','0',true, array('id' => 'status1','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img
                                                                src="<?php echo e(asset('assets/dashboard/images/marker_0.png')); ?>"
                                                                style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','1',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img
                                                                src="<?php echo e(asset('assets/dashboard/images/marker_1.png')); ?>"
                                                                style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','2',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img
                                                                src="<?php echo e(asset('assets/dashboard/images/marker_2.png')); ?>"
                                                                style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','3',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img
                                                                src="<?php echo e(asset('assets/dashboard/images/marker_3.png')); ?>"
                                                                style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','4',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img
                                                                src="<?php echo e(asset('assets/dashboard/images/marker_4.png')); ?>"
                                                                style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','5',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img
                                                                src="<?php echo e(asset('assets/dashboard/images/marker_5.png')); ?>"
                                                                style="width: 25px;">
                                                        </label>
                                                        <label class="ui-check ui-check-md">
                                                            <?php echo Form::radio('icon','6',false, array('id' => 'status2','class'=>'has-value')); ?>

                                                            <i class="dark-white"></i>
                                                            <img
                                                                src="<?php echo e(asset('assets/dashboard/images/marker_6.png')); ?>"
                                                                style="width: 25px;">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button"
                                                class="btn dark-white p-x-md"
                                                data-dismiss="modal"><?php echo e(__('backend.cancel')); ?></button>
                                        <button type="submit"
                                                class="btn btn-primary p-x-md"><?php echo __('backend.add'); ?></button>
                                    </div>
                                    <?php echo e(Form::close()); ?>

                                </div><!-- /.modal-content -->
                            </div>
                        </div>
                        <div class="row p-a" style="display: none">
                            <div class="col-sm-12">
                                <button class="btn btn-fw primary" data-toggle="modal"
                                        data-target="#mmn-<?php echo e($Topics->id); ?>"
                                        ui-toggle-class="bounce" id="mapNew"
                                        ui-target="#animate">
                                    <i class="material-icons">&#xe02e;</i>
                                    &nbsp; <?php echo e(__('backend.topicNewMap')); ?>

                                </button>
                            </div>
                        </div>
                        <?php if(count($Topics->maps) == 0): ?>
                            <div id="mapDivBtns">
                                <div class="col-sm-12">
                                    <div class=" p-y-2 p-x text-center light b-a h6 m-a-0">
                                        <div class="text-muted m-b"><i class="fa fa-laptop fa-4x"></i></div>
                                        <?php echo e(__('backend.noData')); ?>

                                        <br>
                                        <br>
                                        <button type="button" class="btn btn-fw primary" id="mapDivNew">
                                            <i class="material-icons">&#xe02e;</i>
                                            &nbsp; <?php echo e(__('backend.topicNewMap')); ?>

                                        </button>

                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-sm-5">
                            <?php if(count($Topics->maps)>0): ?>
                                <?php echo e(Form::open(['route'=>['topicsMapsUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])); ?>

                                <div>
                                    <table class="table table-bordered">
                                        <thead class="dker">
                                        <tr>
                                            <th class="width20 dker">
                                                <label class="ui-check m-a-0">
                                                    <input id="checkAll3" type="checkbox"><i></i>
                                                </label>
                                            </th>
                                            <th><?php echo e(__('backend.topicCommentName')); ?></th>
                                            <th class="text-center"
                                                style="width:30px;"><?php echo e(__('backend.status')); ?></th>
                                            <th class="text-center"
                                                style="width:110px;"><?php echo e(__('backend.options')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $title_var = "title_" . @Helper::currentLanguage()->code;
                                        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                        ?>
                                        <?php $__currentLoopData = $Topics->maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if ($map->$title_var != "") {
                                                $title = $map->$title_var;
                                            } else {
                                                $title = $map->$title_var2;
                                            }
                                            ?>
                                            <tr>
                                                <td class="dker"><label class="ui-check m-a-0">
                                                        <input type="checkbox" name="ids[]"
                                                               value="<?php echo e($map->id); ?>"><i
                                                            class="dark-white"></i>
                                                        <?php echo Form::hidden('row_ids[]',$map->id, array('class' => 'form-control row_no')); ?>

                                                    </label>
                                                </td>
                                                <td>
                                                    <?php echo Form::text('row_no_'.$map->id,$map->row_no, array('class' => 'pull-left form-control row_no','id'=>'row_no3')); ?>

                                                    <img
                                                        src="<?php echo e(asset('assets/dashboard/images/marker_').$map->icon.".png"); ?>"
                                                        style="width: 20px;">
                                                    <?php if($title !=""): ?>
                                                        <small><?php echo $title; ?></small>
                                                    <?php else: ?>
                                                        <small>
                                                            <?php echo $map->longitude; ?>

                                                        </small>
                                                    <?php endif; ?>
                                                </td>

                                                <td class="text-center">
                                                    <i class="fa <?php echo e(($map->status==1) ? "fa-check text-success":"fa-times text-danger"); ?> inline"></i>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-sm success"
                                                       href="<?php echo e(route("topicsMapsEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"map_id"=>$map->id])); ?>">
                                                        <small><i class="material-icons">
                                                                &#xe3c9;</i></small>
                                                    </a>
                                                    <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                        <button class="btn btn-sm warning"
                                                                data-toggle="modal"
                                                                data-target="#mm-<?php echo e($map->id); ?>"
                                                                ui-toggle-class="bounce"
                                                                ui-target="#animate">
                                                            <small><i class="material-icons">
                                                                    &#xe872;</i></small>
                                                        </button>
                                                    <?php endif; ?>

                                                </td>
                                            </tr>
                                            <!-- .modal -->
                                            <div id="mm-<?php echo e($map->id); ?>" class="modal fade"
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
                                                                <strong><?php echo $title; ?></strong>
                                                                <br>
                                                                <small>[
                                                                    <?php echo $map->longitude; ?>

                                                                    , <?php echo $map->latitude; ?>

                                                                    ]
                                                                </small>

                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                    class="btn dark-white p-x-md"
                                                                    data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                                                            <a href="<?php echo e(route("topicsMapsDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"map_id"=>$map->id])); ?>"
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
                                    <div class="col-sm-12 hidden-xs">
                                        <!-- .modal -->
                                        <div id="mm-all" class="modal fade" data-backdrop="true">
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
                                                        <button type="button"
                                                                class="btn dark-white p-x-md"
                                                                data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                                                        <button type="submit"
                                                                class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div>
                                        </div>
                                        <!-- / .modal -->

                                        <select name="action" id="action3"
                                                class="form-control c-select w-sm inline v-middle"
                                                required>
                                            <option value=""><?php echo e(__('backend.bulkAction')); ?></option>
                                            <option value="order"><?php echo e(__('backend.saveOrder')); ?></option>
                                            <option
                                                value="activate"><?php echo e(__('backend.activeSelected')); ?></option>
                                            <option
                                                value="block"><?php echo e(__('backend.blockSelected')); ?></option>
                                            <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                                <option
                                                    value="delete"><?php echo e(__('backend.deleteSelected')); ?></option>
                                            <?php endif; ?>
                                        </select>
                                        <button type="submit" id="submit_all3"
                                                class="btn white"><?php echo e(__('backend.apply')); ?></button>
                                        <button id="submit_show_msg3" class="btn white"
                                                data-toggle="modal"
                                                style="display: none"
                                                data-target="#mm-all" ui-toggle-class="bounce"
                                                ui-target="#animate"><?php echo e(__('backend.apply')); ?>

                                        </button>
                                    </div>
                                </div>
                                <?php echo e(Form::close()); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                    $map_dsp = "style='display:none'";
                    $map_wds = "12";
                    if (count($Topics->maps) > 0) {
                        $map_dsp = "";
                        $map_wds = "7";
                    }
                    ?>
                    <div id="mapDiv" class="col-sm-<?php echo e($map_wds); ?>" <?php echo $map_dsp; ?>>
                        <div style="margin-bottom: 3px;">
                            <small>
                                <?php echo __('backend.topicMapClick'); ?> ,
                                <a data-toggle="modal"
                                   data-target="#mmn-<?php echo e($Topics->id); ?>"
                                   ui-toggle-class="bounce"
                                   ui-target="#animate">
                                    <u>
                                        <?php echo __('backend.topicMapORClick'); ?>

                                    </u>
                                </a>
                            </small>
                        </div>
                        <div id="map" style="height: 400px"></div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <?php $__env->startPush("after-scripts"); ?>
        <script type="text/javascript"
                src="//maps.google.com/maps/api/js?key=<?php echo e(env("GOOGLE_MAPS_KEY")); ?>&language=<?php echo e(@Helper::currentLanguage()->code); ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
                var iconURLPrefix = "<?php echo e(asset('assets/dashboard/images/')."/"); ?>";
                var icons = [
                    iconURLPrefix + 'marker_0.png',
                    iconURLPrefix + 'marker_1.png',
                    iconURLPrefix + 'marker_2.png',
                    iconURLPrefix + 'marker_3.png',
                    iconURLPrefix + 'marker_4.png',
                    iconURLPrefix + 'marker_5.png',
                    iconURLPrefix + 'marker_6.png'
                ]

                var map = new google.maps.Map($('#map')[0], {
                    zoom: 7,
                    <?php
                        if(count($Topics->maps) > 0){
                        ?>
                    center: new google.maps.LatLng(<?php echo $Topics->maps[0]->longitude; ?>, <?php echo $Topics->maps[0]->latitude; ?>),
                    <?php
                        }else{
                        ?>
                    center: new google.maps.LatLng(31.012773903012743, 30.208982467651367),
                    <?php
                        }
                        ?>
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                    <?php
                    $title_var = "title_" . @Helper::currentLanguage()->code;
                    $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                    if(count($Topics->maps) > 0){
                    foreach($Topics->maps as $map){
                    if ($map->$title_var != "") {
                        $title = $map->$title_var;
                    } else {
                        $title = $map->$title_var2;
                    }
                    ?>
                var latlng1 = new google.maps.LatLng(<?php echo $map->longitude; ?>, <?php echo $map->latitude; ?>);
                var marker = new google.maps.Marker({
                    position: latlng1,
                    icon: icons[<?php echo $map->icon; ?>],
                    title: "<?php echo $title; ?>"
                });
                marker.setMap(map);

                    <?php
                    }
                    }
                    ?>
                var geocoder = new google.maps.Geocoder();
                google.maps.event.addListener(map, 'click', function (e) {
                    var marker = new google.maps.Marker({
                        position: e["latLng"],
                        icon: icons[Math.floor(Math.random() * (6 - 0 + 1) + 0)],
                        title: "New Map"
                    });

                    geocoder.geocode({
                        'latLng': e.latLng
                    }, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($ActiveLanguage->box_status): ?>
                                $("#details_<?php echo e(@$ActiveLanguage->code); ?>").val(results[0].formatted_address);
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            }
                        }
                    });

                    marker.setMap(map);
                    $("#longitude").val(e.latLng.lat());
                    $("#latitude").val(e.latLng.lng());
                    $("#mapNew").click()
                });


                $("#mapTabLink").click(function () {
                    setTimeout(function () {
                        google.maps.event.trigger(map, 'resize');
                    }, 1000);
                });
                $("#mapDivNew").click(function () {
                    google.maps.event.trigger(map, 'resize');
                });


            });
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/topics/tabs/maps.blade.php ENDPATH**/ ?>