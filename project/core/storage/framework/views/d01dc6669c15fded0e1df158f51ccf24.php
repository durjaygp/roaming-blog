<?php $__env->startSection('title', __('backend.siteSectionsSettings')); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe02e;</i> <?php echo e(__('backend.sectionNew')); ?></h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                    <?php echo e(__('backend.webmasterTools')); ?> /
                    <a href=""><?php echo e(__('backend.siteSectionsSettings')); ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="<?php echo e(route("WebmasterSections")); ?>">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <?php echo e(Form::open(['route'=>['WebmasterSectionsStore'],'method'=>'POST'])); ?>


                <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-group row">
                        <label
                            class="col-sm-2 form-control-label"><?php echo __('backend.sectionName'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                        </label>
                        <div class="col-sm-10">
                            <?php echo Form::text('title_'.@$ActiveLanguage->code,'', array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="form-group row">
                    <label for="type"
                           class="col-sm-2 form-control-label"><?php echo __('backend.sectionType'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio secs">
                            <div>
                                <label class="ui-check ui-check-md p-y-sm w-100 p-x-2 b-a">
                                    <?php echo Form::radio('type','0',true, array('id' => 'site_status1','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <span class="fa fa-file-text-o sec-icon pull-right"></span>
                                    <strong><?php echo e(__('backend.typeTextPages')); ?></strong>
                                    <div class="m-x-sm text-muted"><?php echo e(__('backend.generalDesc')); ?></div>
                                </label>
                            </div>
                            <div>
                                <label class="ui-check ui-check-md p-y-sm w-100 p-x-2 b-a">
                                    <?php echo Form::radio('type','1',false, array('id' => 'site_status2','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <span class="material-icons sec-icon pull-right">&#xe41d;</span>
                                    <strong><?php echo e(__('backend.typePhotos')); ?></strong>
                                    <div class="m-x-sm text-muted"><?php echo e(__('backend.photoDesc')); ?></div>
                                </label>
                            </div>
                            <div>
                                <label class="ui-check ui-check-md p-y-sm w-100 p-x-2 b-a">
                                    <?php echo Form::radio('type','2',false, array('id' => 'site_status3','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <span class="material-icons sec-icon pull-right">&#xe04b;</span>
                                    <strong><?php echo e(__('backend.typeVideos')); ?></strong>
                                    <div class="m-x-sm text-muted"><?php echo e(__('backend.videoDesc')); ?></div>
                                </label>
                            </div>
                            <div>
                                <label class="ui-check ui-check-md p-y-sm w-100 p-x-2 b-a">
                                    <?php echo Form::radio('type','3',false, array('id' => 'site_status4','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <span class="material-icons sec-icon pull-right">&#xe3a1;</span>
                                    <strong><?php echo e(__('backend.typeSounds')); ?></strong>
                                    <div class="m-x-sm text-muted"><?php echo e(__('backend.audioDesc')); ?></div>
                                </label>
                            </div>
                            <div>
                                <label class="ui-check ui-check-md p-y-sm w-100 p-x-2 b-a">
                                    <?php echo Form::radio('type','5',false, array('id' => 'site_status6','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <span class="fa fa-table sec-icon pull-right"></span>
                                    <strong><?php echo e(__('backend.tableView')); ?></strong>
                                    <div class="m-x-sm text-muted"><?php echo e(__('backend.tableDesc')); ?></div>
                                </label>
                            </div>
                            <div>
                                <label class="ui-check ui-check-md p-y-sm w-100 p-x-2 b-a">
                                    <?php echo Form::radio('type','4',false, array('id' => 'site_status5','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <span class="material-icons sec-icon pull-right">&#xe327;</span>
                                    <strong><?php echo e(__('backend.private')); ?></strong>
                                    <div class="m-x-sm text-muted"><?php echo e(__('backend.privateDesc')); ?></div>
                                </label>
                            </div>
                            <div>
                                <label class="ui-check ui-check-md p-y-sm w-100 p-x-2 b-a">
                                    <?php echo Form::radio('type','7',false, array('id' => 'site_status8','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <span class="material-icons sec-icon pull-right">&#xe880;</span>
                                    <strong><?php echo e(__('backend.private2')); ?></strong>
                                    <div class="m-x-sm text-muted"><?php echo e(__('backend.private2Desc')); ?></div>
                                </label>
                            </div>
                            <div>
                                <label class="ui-check ui-check-md p-y-sm w-100 p-x-2 b-a">
                                    <?php echo Form::radio('type','6',false, array('id' => 'site_status7','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <span class="material-icons sec-icon pull-right">&#xe31f;</span>
                                    <strong><?php echo e(__('backend.publicForm')); ?></strong>
                                    <div class="m-x-sm text-muted"><?php echo e(__('backend.publicFormDesc')); ?></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sections_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.hasCategories'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <div>
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('sections_status','0',true, array('id' => 'sections_status1','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <?php echo e(__('backend.withoutCategories')); ?>

                                </label>
                            </div>
                            <div>
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('sections_status','1',false, array('id' => 'sections_status2','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <?php echo e(__('backend.mainCategoriesOnly')); ?>

                                </label>
                            </div>
                            <div>
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('sections_status','2',false, array('id' => 'sections_status3','class'=>'has-value')); ?>

                                    <i class="dark-white"></i>
                                    <?php echo e(__('backend.mainAndSubCategories')); ?>

                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <br/>
                    <label><h5><i class="material-icons">&#xe1db;</i> <?php echo e(__('backend.optionalFields')); ?>

                        </h5></label>
                    <hr class="m-a-0">
                </div>
                <div class="form-group row">
                    <label for="title_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.titleField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('title_status','1',true, array('id' => 'title_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('title_status','0',false, array('id' => 'title_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="date_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.dateField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('date_status','1',false, array('id' => 'date_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('date_status','0',true, array('id' => 'date_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="expire_date_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.expireDateField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('expire_date_status','1',false, array('id' => 'expire_date_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('expire_date_status','0',true, array('id' => 'expire_date_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="longtext_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.longTextField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('longtext_status','1',false, array('id' => 'longtext_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('longtext_status','0',true, array('id' => 'longtext_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="editor_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.allowEditor'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('editor_status','1',false, array('id' => 'editor_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('editor_status','0',true, array('id' => 'editor_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="case_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.caseField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('case_status','1',false, array('id' => 'case_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('case_status','0',true, array('id' => 'case_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="visits_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.visitsField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('visits_status','1',false, array('id' => 'visits_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('visits_status','0',true, array('id' => 'visits_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="photo_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.photoField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('photo_status','1',false, array('id' => 'photo_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('photo_status','0',true, array('id' => 'photo_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="attach_file_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.attachFileField'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('attach_file_status','1',false, array('id' => 'attach_file_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('attach_file_status','0',true, array('id' => 'attach_file_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="section_icon_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.sectionIconPicker'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('section_icon_status','1',false, array('id' => 'section_icon_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('section_icon_status','0',true, array('id' => 'section_icon_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="icon_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.topicsIconPicker'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('icon_status','1',false, array('id' => 'icon_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('icon_status','0',true, array('id' => 'icon_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <br/>
                    <label><h5><i class="material-icons">&#xe8d8;</i> <?php echo e(__('backend.additionalTabs')); ?>

                        </h5></label>
                    <hr class="m-a-0">
                </div>
                <div class="form-group row">
                    <label for="multi_images_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.additionalImages'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('multi_images_status','1',false, array('id' => 'multi_images_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('multi_images_status','0',true, array('id' => 'multi_images_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="extra_attach_file_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.additionalFiles'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('extra_attach_file_status','1',false, array('id' => 'extra_attach_file_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('extra_attach_file_status','0',true, array('id' => 'extra_attach_file_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="maps_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.attachGoogleMaps'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('maps_status','1',false, array('id' => 'maps_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('maps_status','0',true, array('id' => 'maps_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="order_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.attachOrderForm'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('order_status','1', false, array('id' => 'order_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('order_status','0',true, array('id' => 'order_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="comments_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.reviewsAvailable'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('comments_status','1',false, array('id' => 'comments_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('comments_status','0',true, array('id' => 'comments_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="related_status1"
                           class="col-sm-2 form-control-label"><?php echo __('backend.relatedTopics'); ?></label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('related_status','1', false, array('id' => 'related_status1','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.yes')); ?>

                            </label>
                            &nbsp; &nbsp;
                            <label class="ui-check ui-check-md">
                                <?php echo Form::radio('related_status','0', true , array('id' => 'related_status2','class'=>'has-value')); ?>

                                <i class="dark-white"></i>
                                <?php echo e(__('backend.no')); ?>

                            </label>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="form-group row m-t-md">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> <?php echo __('backend.add'); ?></button>
                        <a href="<?php echo e(route("WebmasterSections")); ?>"
                           class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
                    </div>
                </div>

                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush("after-scripts"); ?>
    <script type="text/javascript">
        $(".secs input[type='radio']").click(function () {
            $("label").removeClass("sec-active");
            if ($(this).is(":checked")) {
                $(this).parent().addClass("sec-active");
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/webmaster/sections/create.blade.php ENDPATH**/ ?>