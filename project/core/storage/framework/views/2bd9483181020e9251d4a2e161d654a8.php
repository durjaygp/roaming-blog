<?php
$title_var = "title_" . @Helper::currentLanguage()->code;
$title_var2 = "title_" . env('DEFAULT_LANGUAGE');
if ($WebmasterSection->$title_var != "") {
    $WebmasterSectionTitle = $WebmasterSection->$title_var;
} else {
    $WebmasterSectionTitle = $WebmasterSection->$title_var2;
}
?>
<?php $__env->startSection('title', $Topics->{"title_" . @Helper::currentLanguage()->code}); ?>
<?php $__env->startPush("after-styles"); ?>
    <link href="<?php echo e(asset("assets/dashboard/js/iconpicker/fontawesome-iconpicker.min.css")); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <div class="box m-b-0">
            <div class="box-header dker">
                <?php
                $title_var = "title_" . @Helper::currentLanguage()->code;
                $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                if ($WebmasterSection->$title_var != "") {
                    $WebmasterSectionTitle = $WebmasterSection->$title_var;
                } else {
                    $WebmasterSectionTitle = $WebmasterSection->$title_var2;
                }
                ?>
                <h3><i class="material-icons">
                        &#xe3c9;</i> <?php echo e(__('backend.topicEdit')); ?> <?php echo $WebmasterSectionTitle; ?>

                </h3>
                <small>
                    <a href="<?php echo e(route('adminHome')); ?>"><?php echo e(__('backend.home')); ?></a> /
                    <a><?php echo $WebmasterSectionTitle; ?></a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline dropdown">

                        <a class="btn white b-a nav-link" data-toggle="dropdown">
                            <i class="material-icons md-18">&#xe5d3;</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                            <a class="dropdown-item" href="<?php echo e(route('topics',$WebmasterSection->id)); ?>"><i
                                    class="material-icons">&#xe31b;</i> <?php echo e(__('backend.back')); ?></a>
                            <a class="dropdown-item"
                               href="<?php echo e(((@$Topics->webmasterSection->type == 4 || @$Topics->webmasterSection->type == 6) ? route("topicView", ["webmasterId" => @$Topics->webmasterSection->id, "id" => $Topics->id]) : Helper::topicURL($Topics->id))); ?>" <?php echo ((@$Topic->webmasterSection->type == 4 || @$Topic->webmasterSection->type == 6) ? "" : "target='_blank'"); ?>><i
                                    class="material-icons">&#xe8f4;</i> <?php echo e(__('backend.preview')); ?></a>
                            <div class="dropdown-divider"></div>
                            <?php if(@Auth::user()->permissionsGroup->delete_status): ?>
                                <a class="dropdown-item text-danger" onclick="DeleteTopic('<?php echo e($Topics->id); ?>')"><i
                                        class="material-icons">&#xe872;</i> <?php echo e(__('backend.delete')); ?></a>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <?php
        $tab_1 = "active";
        $tab_2 = "";
        $tab_3 = "";
        $tab_4 = "";
        $tab_5 = "";
        $tab_6 = "";
        $tab_7 = "";
        if (Session::has('activeTab')) {
            if (Session::get('activeTab') == "seo") {
                $tab_1 = "";
                $tab_2 = "active";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
            }
            if (Session::get('activeTab') == "photos") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "active";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
            }
            if (Session::get('activeTab') == "comments") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "active";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
            }
            if (Session::get('activeTab') == "maps") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "active";
                $tab_6 = "";
                $tab_7 = "";
            }
            if (Session::get('activeTab') == "files") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "active";
                $tab_7 = "";
            }
            if (Session::get('activeTab') == "related") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "active";
            }
        }
        ?>
        <div class="box nav-active-border b-info">
            <ul class="nav nav-md">
                <li class="nav-item inline">
                    <a class="nav-link <?php echo e($tab_1); ?>" href data-toggle="tab" data-target="#tab_details">
                        <span class="text-md"><i class="material-icons">
                                &#xe31e;</i> <?php echo e(__('backend.topicTabDetails')); ?></span>
                    </a>
                </li>

                <?php if($WebmasterSection->multi_images_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_3); ?>" href data-toggle="tab" data-target="#tab_photos">
                    <span class="text-md"><i class="material-icons">
                            &#xe251;</i>
                        <?php echo e(__('backend.topicAdditionalPhotos')); ?>

                        <?php if(count($Topics->photos)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->photos)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if($WebmasterSection->extra_attach_file_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_6); ?>" href data-toggle="tab" data-target="#tab_files">
                    <span class="text-md"><i class="material-icons">
                            &#xe226;</i> <?php echo e(__('backend.additionalFiles')); ?>

                        <?php if(count($Topics->attachFiles)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->attachFiles)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($WebmasterSection->comments_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_4); ?>" href data-toggle="tab" data-target="#tab_comments">
                    <span class="text-md"><i class="material-icons">
                            &#xe0b9;</i> <?php echo e(__('backend.comments')); ?>

                        <?php if(count($Topics->comments)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->comments)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if($WebmasterSection->maps_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_5); ?>" id="mapTabLink" href data-toggle="tab"
                           data-target="#tab_maps">
                    <span class="text-md"><i class="material-icons">
                            &#xe0c8;</i> <?php echo e(__('backend.topicGoogleMaps')); ?>

                        <?php if(count($Topics->maps)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->maps)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($WebmasterSection->related_status): ?>
                    <li class="nav-item inline">
                        <a class="nav-link  <?php echo e($tab_7); ?>" href data-toggle="tab" data-target="#tab_related">
                    <span class="text-md"><i class="material-icons">
                            &#xe867;</i> <?php echo e(__('backend.relatedTopics')); ?>

                        <?php if(count($Topics->relatedTopics)>0): ?>
                            <span class="label rounded"><?php echo e(count($Topics->relatedTopics)); ?></span>
                        <?php endif; ?>
                    </span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($WebmasterSection->type != 4): ?>
                    <?php if(Helper::GeneralWebmasterSettings("seo_status")): ?>
                        <li class="nav-item inline">
                            <a class="nav-link  <?php echo e($tab_2); ?>" href data-toggle="tab" data-target="#tab_seo">
                    <span class="text-md"><i class="material-icons">
                            &#xe8e5;</i> <?php echo e(__('backend.seoTabTitle')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

            </ul>
            <div class="tab-content clear b-t">
                <div class="tab-pane  <?php echo e($tab_1); ?>" id="tab_details">
                    <div class="box-body">
                        <?php echo e(Form::open(['route'=>['topicsUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id],'method'=>'POST', 'files' => true])); ?>


                        <?php if($WebmasterSection->date_status): ?>
                            <div class="form-group row">
                                <label for="date"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.topicDate'); ?>

                                </label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                format: '<?php echo e(Helper::jsDateFormat()); ?>',
                icons: {
                  time: 'fa fa-clock-o',
                  date: 'fa fa-calendar',
                  up: 'fa fa-chevron-up',
                  down: 'fa fa-chevron-down',
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-screenshot',
                  clear: 'fa fa-trash',
                  close: 'fa fa-remove'
                },
            allowInputToggle: true,
              }">
                                            <?php echo Form::text('date',Helper::formatDate($Topics->date), array('placeholder' => '','class' => 'form-control','id'=>'date','required'=>'')); ?>

                                            <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php else: ?>
                            <?php echo Form::hidden('date',$Topics->date, array('placeholder' => '','class' => 'form-control','id'=>'date')); ?>

                        <?php endif; ?>


                        <?php if($WebmasterSection->expire_date_status): ?>
                            <div class="form-group row">
                                <label for="date"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.expireDate'); ?>

                                </label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                format: '<?php echo e(Helper::jsDateFormat()); ?>',
                icons: {
                  time: 'fa fa-clock-o',
                  date: 'fa fa-calendar',
                  up: 'fa fa-chevron-up',
                  down: 'fa fa-chevron-down',
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-screenshot',
                  clear: 'fa fa-trash',
                  close: 'fa fa-remove'
                },
            allowInputToggle: true,
              }">
                                            <?php echo Form::text('expire_date',Helper::formatDate($Topics->expire_date), array('placeholder' => '','class' => 'form-control','id'=>'expire_date')); ?>

                                            <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($WebmasterSection->sections_status!=0): ?>
                            <div class="form-group row">
                                <label for="section_id"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.categories'); ?> </label>
                                <div class="col-sm-10">
                                    <select name="section_id[]" id="section_id" class="form-control select2-multiple"
                                            multiple
                                            ui-jp="select2"
                                            ui-options="{theme: 'bootstrap'}" required>
                                        <?php
                                        $title_var = "title_" . @Helper::currentLanguage()->code;
                                        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');

                                        $t_arrow = "&raquo;";

                                        $categories = array();
                                        foreach ($Topics->categories as $category) {
                                            $categories[] = $category->section_id;
                                        }
                                        ?>
                                        <?php $__currentLoopData = $fatherSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fatherSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if ($fatherSection->$title_var != "") {
                                                $ftitle = $fatherSection->$title_var;
                                            } else {
                                                $ftitle = $fatherSection->$title_var2;
                                            }
                                            ?>
                                            <option
                                                value="<?php echo e($fatherSection->id); ?>" <?php echo e((in_array($fatherSection->id,$categories)) ? "selected='selected'":""); ?>><?php echo e($ftitle); ?></option>
                                            <?php $__currentLoopData = $fatherSection->fatherSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subFatherSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                if ($subFatherSection->$title_var != "") {
                                                    $title = $subFatherSection->$title_var;
                                                } else {
                                                    $title = $subFatherSection->$title_var2;
                                                }
                                                ?>
                                                <option
                                                    value="<?php echo e($subFatherSection->id); ?>" <?php echo e((in_array($subFatherSection->id,$categories)) ? "selected='selected'":""); ?>> <?php echo $ftitle; ?> <?php echo $t_arrow; ?> <?php echo $title; ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        <?php else: ?>
                            <?php echo Form::hidden('section_id',$Topics->section_id); ?>

                        <?php endif; ?>

                        <?php if($WebmasterSection->title_status): ?>
                            <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($ActiveLanguage->box_status): ?>
                                    <div class="form-group row">
                                        <label
                                            class="col-sm-2 form-control-label"><?php echo __('backend.topicName'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                                        </label>
                                        <div class="col-sm-10">
                                            <?php echo Form::text('title_'.@$ActiveLanguage->code,$Topics->{'title_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>


                        <?php if($WebmasterSection->longtext_status): ?>

                            <?php if($WebmasterSection->editor_status): ?>

                                <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($ActiveLanguage->box_status): ?>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <label
                                                    class="form-control-label"><?php echo __('backend.bannerDetails'); ?></label>
                                                <?php echo @Helper::languageName($ActiveLanguage); ?>


                                                <a class="btn btn-outline b-a m-y-sm  light dk w-full"
                                                   href="<?php echo e(route("keditor",$Topics->id)); ?>?lang=<?php echo e(@$ActiveLanguage->code); ?>"
                                                   target="_blank" style="white-space: normal;">
                                                    <i class="material-icons text-lg text-primary">&#xe434;</i><br>
                                                    <small><?php echo __('backend.clickToUseDragAndDropEditor'); ?></small>
                                                </a>
                                                <br>
                                                <small class="text-muted">
                                                    <i class="fa fa-info-circle"></i> <small><?php echo __('backend.refreshAfterKEdit'); ?>.</small>
                                                </small>
                                            </div>
                                            <div class="col-sm-10">
                                                <?php if(Helper::GeneralWebmasterSettings("text_editor") == 2): ?>
                                                    <div>
                                                        <?php echo Form::textarea('details_'.@$ActiveLanguage->code,$Topics->{'details_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control ckeditor', 'dir'=>@$ActiveLanguage->direction)); ?>

                                                    </div>
                                                <?php elseif(Helper::GeneralWebmasterSettings("text_editor") == 1): ?>
                                                    <div>
                                                        <?php echo Form::textarea('details_'.@$ActiveLanguage->code,$Topics->{'details_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control tinymce', 'dir'=>@$ActiveLanguage->direction)); ?>

                                                    </div>
                                                <?php else: ?>
                                                    <div class="box p-a-xs">
                                                        <?php echo Form::textarea('details_'.@$ActiveLanguage->code,$Topics->{'details_'.@$ActiveLanguage->code}, array('ui-jp'=>"summernote",'placeholder' => '','class' => 'form-control summernote_' . @$ActiveLanguage->code, 'dir'=>@$ActiveLanguage->direction,'ui-options'=>'{height: 300,callbacks: {
                        onImageUpload: function(files, editor, welEditable) {
                            sendFile(files[0], editor, welEditable,"'.@$ActiveLanguage->code.'");
                        }
                    }}')); ?>

                                                    </div>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>

                                <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($ActiveLanguage->box_status): ?>
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-2 form-control-label"><?php echo __('backend.bannerDetails'); ?> <?php echo @Helper::languageName($ActiveLanguage); ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::textarea('details_'.@$ActiveLanguage->code,$Topics->{'details_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control', 'dir'=>@$ActiveLanguage->direction,'rows'=>'5')); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        <?php endif; ?>


                        <?php if($WebmasterSection->type==2): ?>
                            <div class="form-group row">
                                <label for="video_type"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.bannerVideoType'); ?></label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('video_type','0',($Topics->video_type==0) ? true : false, array('id' => 'video_type1','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="block";document.getElementById("youtube_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(__('backend.bannerVideoType1')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('video_type','1',($Topics->video_type==1) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="block";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("youtube_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(__('backend.bannerVideoType2')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('video_type','2',($Topics->video_type==2) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="block";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("vimeo_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            <?php echo e(__('backend.bannerVideoType3')); ?>

                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            <?php echo Form::radio('video_type','3',($Topics->video_type==3) ? true : false, array('id' => 'video_type3','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="block";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("embed_link").value=""')); ?>

                                            <i class="dark-white"></i>
                                            Embed
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div id="files_div" style="display: <?php echo e(($Topics->video_type ==0) ? "block" : "none"); ?>">
                                <div class="form-group row">
                                    <label for="video_file"
                                           class="col-sm-2 form-control-label"><?php echo __('backend.topicVideo'); ?></label>
                                    <div class="col-sm-10">
                                        <?php if($Topics->video_type==0 && $Topics->video_file!=""): ?>
                                            <div class="box p-a-xs">

                                                <video width="380" height="230" controls>
                                                    <source src="<?php echo e(asset('uploads/topics/'.$Topics->video_file)); ?>"
                                                            type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <br>
                                                <a target="_blank"
                                                   href="<?php echo e(asset('uploads/topics/'.$Topics->video_file)); ?>">
                                                    <?php echo e($Topics->video_file); ?> </a>
                                            </div>
                                        <?php endif; ?>
                                        <?php echo Form::file('video_file', array('class' => 'form-control','id'=>'video_file','accept'=>'*')); ?>

                                    </div>
                                </div>

                                <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                    <div class="offset-sm-2 col-sm-10">
                                        <small>
                                            <i class="material-icons">&#xe8fd;</i>
                                            <?php echo __('backend.videoTypes'); ?>

                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="youtube_link_div"
                                 style="display: <?php echo e(($Topics->video_type==1) ? "block" : "none"); ?>">
                                <label for="youtube_link"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.bannerVideoUrl'); ?></label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('youtube_link',$Topics->video_file, array('placeholder' => 'https://www.youtube.com/watch?v=JQs4QyKnYMQ','class' => 'form-control','id'=>'youtube_link', 'dir'=>'ltr')); ?>

                                </div>
                            </div>
                            <div class="form-group row" id="vimeo_link_div"
                                 style="display: <?php echo e(($Topics->video_type ==2) ? "block" : "none"); ?>">
                                <label for="youtube_link"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.bannerVideoUrl2'); ?></label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('vimeo_link',$Topics->video_file, array('placeholder' => 'https://vimeo.com/131766159','class' => 'form-control','id'=>'vimeo_link', 'dir'=>'ltr')); ?>

                                </div>
                            </div>

                            <div class="form-group row" id="embed_link_div"
                                 style="display: <?php echo e(($Topics->video_type ==3) ? "block" : "none"); ?>">
                                <label for="embed_link"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.bannerVideoUrl2'); ?></label>
                                <div class="col-sm-10">
                                    <?php echo Form::textarea('embed_link',$Topics->video_file, array('placeholder' => '','class' => 'form-control','id'=>'embed_link', 'dir'=>'ltr','rows'=>'3')); ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($WebmasterSection->type==3): ?>
                            <div class="form-group row">
                                <label for="audio_file"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.topicAudio'); ?></label>
                                <div class="col-sm-10">
                                    <?php if($Topics->audio_file!=""): ?>
                                        <div class="box p-a-xs">
                                            <audio controls>
                                                <source src="<?php echo e(asset('uploads/topics/'.$Topics->audio_file)); ?>"
                                                        type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <br>
                                            <a target="_blank"
                                               href="<?php echo e(asset('uploads/topics/'.$Topics->audio_file)); ?>"> <?php echo e($Topics->audio_file); ?> </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php echo Form::file('audio_file', array('class' => 'form-control','id'=>'audio_file','accept'=>'audio/*')); ?>

                                </div>
                            </div>

                            <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                <div class="offset-sm-2 col-sm-10">
                                    <small>
                                        <i class="material-icons">&#xe8fd;</i>
                                        <?php echo __('backend.audioTypes'); ?>

                                    </small>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($WebmasterSection->photo_status): ?>
                            <div class="form-group row">
                                <label for="photo_file"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.topicPhoto'); ?></label>
                                <div class="col-sm-10">
                                    <?php if($Topics->photo_file!=""): ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="topic_photo" class="col-sm-4 box p-a-xs">
                                                    <a target="_blank"
                                                       href="<?php echo e(asset('uploads/topics/'.$Topics->photo_file)); ?>"><img
                                                            src="<?php echo e(asset('uploads/topics/'.$Topics->photo_file)); ?>"
                                                            class="img-responsive">
                                                        <?php echo e($Topics->photo_file); ?>

                                                    </a>
                                                    <br>
                                                    <a onclick="document.getElementById('topic_photo').style.display='none';document.getElementById('photo_delete').value='1';document.getElementById('undo').style.display='block';"
                                                       class="btn btn-sm btn-default"><?php echo __('backend.delete'); ?></a>
                                                </div>
                                                <div id="undo" class="col-sm-4 p-a-xs" style="display: none">
                                                    <a onclick="document.getElementById('topic_photo').style.display='block';document.getElementById('photo_delete').value='0';document.getElementById('undo').style.display='none';">
                                                        <i class="material-icons">
                                                            &#xe166;</i> <?php echo __('backend.undoDelete'); ?></a>
                                                </div>

                                                <?php echo Form::hidden('photo_delete','0', array('id'=>'photo_delete')); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php echo Form::file('photo_file', array('class' => 'form-control','id'=>'photo_file','accept'=>'image/*')); ?>


                                </div>
                            </div>
                            <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                <div class="offset-sm-2 col-sm-10">
                                    <small>
                                        <i class="material-icons">&#xe8fd;</i>
                                        <?php echo __('backend.imagesTypes'); ?>

                                    </small>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($WebmasterSection->icon_status): ?>
                            <div class="form-group row">
                                <label for="icon"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.sectionIcon'); ?></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <?php echo Form::text('icon',$Topics->icon, array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'icon', 'data-placement'=>'bottomRight')); ?>

                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($WebmasterSection->attach_file_status): ?>
                            <div class="form-group row">
                                <label for="attach_file"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.topicAttach'); ?></label>
                                <div class="col-sm-10">
                                    <?php if($Topics->attach_file!=""): ?>
                                        <div id="topic_attach" class="col-sm-4 box p-a-xs">
                                            <a target="_blank"
                                               href="<?php echo e(asset('uploads/topics/'.$Topics->attach_file)); ?>"> <?php echo e($Topics->attach_file); ?> </a>
                                            <br>
                                            <a onclick="document.getElementById('topic_attach').style.display='none';document.getElementById('attach_delete').value='1';document.getElementById('undo2').style.display='block';"
                                               class="btn btn-sm btn-default"><?php echo __('backend.delete'); ?></a>
                                        </div>
                                        <div id="undo2" class="col-sm-4 p-a-xs" style="display: none">
                                            <a onclick="document.getElementById('topic_attach').style.display='block';document.getElementById('attach_delete').value='0';document.getElementById('undo2').style.display='none';">
                                                <i class="material-icons">
                                                    &#xe166;</i> <?php echo __('backend.undoDelete'); ?></a>
                                        </div>
                                        <?php echo Form::hidden('attach_delete','0', array('id'=>'attach_delete')); ?>

                                    <?php endif; ?>
                                    <?php echo Form::file('attach_file', array('class' => 'form-control','id'=>'attach_file')); ?>

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
                        <?php endif; ?>


                        
                        <?php if(count($WebmasterSection->customFields) >0): ?>
                            <?php
                            $cf_title_var = "title_" . @Helper::currentLanguage()->code;
                            $cf_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                            ?>
                            <?php $__currentLoopData = $WebmasterSection->customFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                // check permission
                                $edit_permission_groups = [];
                                if ($customField->edit_permission_groups != "") {
                                    $edit_permission_groups = explode(",", $customField->edit_permission_groups);
                                }
                                if (in_array(Auth::user()->permissions_id, $edit_permission_groups) || in_array(0, $edit_permission_groups) || $customField->edit_permission_groups == "") {
                                // have permission & continue
                                if ($customField->$cf_title_var != "") {
                                    $cf_title = $customField->$cf_title_var;
                                } else {
                                    $cf_title = $customField->$cf_title_var2;
                                }

                                // check field language status
                                $cf_land_identifier = "";
                                $cf_land_active = false;
                                $cf_land_dir = @Helper::currentLanguage()->direction;
                                if ($customField->lang_code != "all") {
                                    $ct_language = @Helper::LangFromCode($customField->lang_code);
                                    $cf_land_identifier = @Helper::languageName($ct_language);
                                    $cf_land_dir = $ct_language->direction;
                                    if ($ct_language->box_status) {
                                        $cf_land_active = true;
                                    }
                                }
                                if ($customField->lang_code == "all") {
                                    $cf_land_active = true;
                                }
                                // required Status
                                $cf_required = "";
                                if ($customField->required) {
                                    $cf_required = "required";
                                }

                                $cf_saved_val = "";
                                $cf_saved_val_array = array();
                                if (count($Topics->fields) > 0) {
                                    foreach ($Topics->fields as $t_field) {
                                        if ($t_field->field_id == $customField->id) {
                                            if ($customField->type == 7) {
                                                // if multi check
                                                $cf_saved_val_array = explode(", ", $t_field->field_value);
                                            } else {
                                                $cf_saved_val = $t_field->field_value;
                                            }
                                        }
                                    }
                                }


                                ?>

                                <?php if($cf_land_active): ?>
                                    <?php if($customField->type ==12): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?> <i class="fa fa-vimeo"></i>
                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::text('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>'ltr')); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==11): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?> <i class="fa fa-youtube"></i>
                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::text('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>'ltr')); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==10): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?></label>
                                            <div class="col-sm-10">
                                                <?php if($cf_saved_val !=""): ?>
                                                    <?php
                                                    $file_name_id = 'topic_file_' . $customField->id;
                                                    $file_del_id = 'file_delete_' . $customField->id;
                                                    $file_old_id = 'file_old_' . $customField->id;
                                                    $file_undo_id = 'undo_' . $customField->id;
                                                    ?>
                                                    <div id="<?php echo e($file_name_id); ?>" class="col-sm-4 box p-a-xs">
                                                        <video width="380" height="230" controls>
                                                            <source src="<?php echo e(asset('uploads/topics/'.$cf_saved_val)); ?>"
                                                                    type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                        <a target="_blank"
                                                           href="<?php echo e(asset('uploads/topics/'.$cf_saved_val)); ?>">
                                                            <?php echo e($cf_saved_val); ?>

                                                        </a>
                                                        <br>
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='none';document.getElementById('<?php echo e($file_del_id); ?>').value='1';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='block';"
                                                           class="btn btn-sm btn-default"><?php echo __('backend.delete'); ?></a>
                                                    </div>
                                                    <div id="<?php echo e($file_undo_id); ?>" class="col-sm-4 p-a-xs"
                                                         style="display: none">
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='block';document.getElementById('<?php echo e($file_del_id); ?>').value='0';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='none';">
                                                            <i class="material-icons">
                                                                &#xe166;</i> <?php echo __('backend.undoDelete'); ?></a>
                                                    </div>

                                                    <?php echo Form::hidden($file_del_id,'0', array('id'=>$file_del_id)); ?>

                                                    <?php echo Form::hidden($file_old_id,$cf_saved_val, array('id'=>$file_old_id)); ?>

                                                <?php endif; ?>
                                                <?php echo Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'*')); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==9): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?></label>
                                            <div class="col-sm-10">
                                                <?php if($cf_saved_val !=""): ?>
                                                    <?php
                                                    $file_name_id = 'topic_file_' . $customField->id;
                                                    $file_del_id = 'file_delete_' . $customField->id;
                                                    $file_old_id = 'file_old_' . $customField->id;
                                                    $file_undo_id = 'undo_' . $customField->id;
                                                    ?>
                                                    <div id="<?php echo e($file_name_id); ?>" class="col-sm-4 box p-a-xs">
                                                        <a target="_blank"
                                                           href="<?php echo e(asset('uploads/topics/'.$cf_saved_val)); ?>">
                                                            <?php echo e($cf_saved_val); ?>

                                                        </a>
                                                        <br>
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='none';document.getElementById('<?php echo e($file_del_id); ?>').value='1';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='block';"
                                                           class="btn btn-sm btn-default"><?php echo __('backend.delete'); ?></a>
                                                    </div>
                                                    <div id="<?php echo e($file_undo_id); ?>" class="col-sm-4 p-a-xs"
                                                         style="display: none">
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='block';document.getElementById('<?php echo e($file_del_id); ?>').value='0';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='none';">
                                                            <i class="material-icons">
                                                                &#xe166;</i> <?php echo __('backend.undoDelete'); ?></a>
                                                    </div>

                                                    <?php echo Form::hidden($file_del_id,'0', array('id'=>$file_del_id)); ?>

                                                    <?php echo Form::hidden($file_old_id,$cf_saved_val, array('id'=>$file_old_id)); ?>

                                                <?php endif; ?>
                                                <?php echo Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'*')); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==8): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?></label>
                                            <div class="col-sm-10">
                                                <?php if($cf_saved_val !=""): ?>
                                                    <?php
                                                    $file_name_id = 'topic_file_' . $customField->id;
                                                    $file_del_id = 'file_delete_' . $customField->id;
                                                    $file_old_id = 'file_old_' . $customField->id;
                                                    $file_undo_id = 'undo_' . $customField->id;
                                                    ?>
                                                    <div id="<?php echo e($file_name_id); ?>" class="col-sm-4 box p-a-xs">
                                                        <a target="_blank"
                                                           href="<?php echo e(asset('uploads/topics/'.$cf_saved_val)); ?>"><img
                                                                src="<?php echo e(asset('uploads/topics/'.$cf_saved_val)); ?>"
                                                                class="img-responsive">
                                                            <?php echo e($cf_saved_val); ?>

                                                        </a>
                                                        <br>
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='none';document.getElementById('<?php echo e($file_del_id); ?>').value='1';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='block';"
                                                           class="btn btn-sm btn-default"><?php echo __('backend.delete'); ?></a>
                                                    </div>
                                                    <div id="<?php echo e($file_undo_id); ?>" class="col-sm-4 p-a-xs"
                                                         style="display: none">
                                                        <a onclick="document.getElementById('<?php echo e($file_name_id); ?>').style.display='block';document.getElementById('<?php echo e($file_del_id); ?>').value='0';document.getElementById('<?php echo e($file_undo_id); ?>').style.display='none';">
                                                            <i class="material-icons">
                                                                &#xe166;</i> <?php echo __('backend.undoDelete'); ?></a>
                                                    </div>

                                                    <?php echo Form::hidden($file_del_id,'0', array('id'=>$file_del_id)); ?>

                                                    <?php echo Form::hidden($file_old_id,$cf_saved_val, array('id'=>$file_old_id)); ?>

                                                <?php endif; ?>

                                                <?php echo Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'image/*')); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==13): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?></label>
                                            <div class="col-sm-10">
                                                <?php
                                                $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                                $cf_details_var2 = "details_" . env('DEFAULT_LANGUAGE');
                                                if ($customField->$cf_details_var != "") {
                                                    $cf_details = $customField->$cf_details_var;
                                                } else {
                                                    $cf_details = $customField->$cf_details_var2;
                                                }
                                                $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                                $line_num = 1;
                                                ?>
                                                <?php $__currentLoopData = $cf_details_lines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cf_details_line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="m-t-sm">
                                                        <label class="md-check">
                                                            <input type="radio" value="<?php echo e($line_num); ?>"
                                                                   name="<?php echo e('customField_'.$customField->id); ?>"
                                                                   <?php echo e($cf_required); ?>

                                                                   id="<?php echo e('customField_'.$customField->id); ?>_<?php echo e($line_num); ?>"
                                                                   <?php echo e(($cf_saved_val == $line_num) ? "checked":""); ?> class="has-value">
                                                            <i class="blue"></i>
                                                            <?php echo e($cf_details_line); ?>

                                                        </label>
                                                    </div>
                                                    <?php
                                                    $line_num++;
                                                    ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==14): ?>
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-10">
                                                <label class="md-check">
                                                    <input type="checkbox" name="<?php echo e('customField_'.$customField->id); ?>" <?php echo e(($cf_saved_val == 1) ? "checked":""); ?> value="1"
                                                           id="<?php echo e('customField_'.$customField->id); ?>" class="has-value">
                                                    <i class="blue"></i>
                                                    <?php echo $cf_title; ?>

                                                    <?php echo $cf_land_identifier; ?>

                                                </label>
                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==7): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?></label>
                                            <div class="col-sm-10">
                                                <select name="<?php echo e('customField_'.$customField->id); ?>[]"
                                                        id="<?php echo e('customField_'.$customField->id); ?>"
                                                        class="form-control select2-multiple" multiple
                                                        ui-jp="select2"
                                                        ui-options="{theme: 'bootstrap'}" <?php echo e($cf_required); ?>>
                                                    <?php
                                                    $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                                    $cf_details_var2 = "details_" . env('DEFAULT_LANGUAGE');
                                                    if ($customField->$cf_details_var != "") {
                                                        $cf_details = $customField->$cf_details_var;
                                                    } else {
                                                        $cf_details = $customField->$cf_details_var2;
                                                    }
                                                    $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                                    $line_num = 1;
                                                    ?>
                                                    <?php $__currentLoopData = $cf_details_lines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cf_details_line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            value="<?php echo e($line_num); ?>" <?php echo e((in_array($line_num,$cf_saved_val_array)) ? "selected='selected'":""); ?>><?php echo e($cf_details_line); ?></option>
                                                        <?php
                                                        $line_num++;
                                                        ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==6): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?></label>
                                            <div class="col-sm-10">
                                                <select name="<?php echo e('customField_'.$customField->id); ?>"
                                                        id="<?php echo e('customField_'.$customField->id); ?>"
                                                        class="form-control c-select" <?php echo e($cf_required); ?>>
                                                    <option value="">- - <?php echo $cf_title; ?> - -</option>
                                                    <?php
                                                    $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                                    $cf_details_var2 = "details_" . env('DEFAULT_LANGUAGE');
                                                    if ($customField->$cf_details_var != "") {
                                                        $cf_details = $customField->$cf_details_var;
                                                    } else {
                                                        $cf_details = $customField->$cf_details_var2;
                                                    }
                                                    $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                                    $line_num = 1;
                                                    ?>
                                                    <?php $__currentLoopData = $cf_details_lines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cf_details_line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            value="<?php echo e($line_num); ?>" <?php echo e(($cf_saved_val == $line_num) ? "selected='selected'":""); ?>><?php echo e($cf_details_line); ?></option>
                                                        <?php
                                                        $line_num++;
                                                        ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==5): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <div>
                                                    <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                format: '<?php echo e(Helper::jsDateFormat()); ?> hh:mm A',
                icons: {
                  time: 'fa fa-clock-o',
                  date: 'fa fa-calendar',
                  up: 'fa fa-chevron-up',
                  down: 'fa fa-chevron-down',
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-screenshot',
                  clear: 'fa fa-trash',
                  close: 'fa fa-remove'
                },
            allowInputToggle: true,
              }">
                                                        <?php echo Form::text('customField_'.$customField->id,Helper::formatDate($cf_saved_val)." ".date("h:i A", strtotime($cf_saved_val)), array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)); ?>

                                                        <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==4): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                format: '<?php echo e(Helper::jsDateFormat()); ?>',
                icons: {
                  time: 'fa fa-clock-o',
                  date: 'fa fa-calendar',
                  up: 'fa fa-chevron-up',
                  down: 'fa fa-chevron-down',
                  previous: 'fa fa-chevron-left',
                  next: 'fa fa-chevron-right',
                  today: 'fa fa-screenshot',
                  clear: 'fa fa-trash',
                  close: 'fa fa-remove'
                },
            allowInputToggle: true,
              }">
                                                        <?php echo Form::text('customField_'.$customField->id,Helper::formatDate($cf_saved_val), array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)); ?>

                                                        <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
              </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==3): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::email('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)); ?>

                                            </div>
                                        </div>

                                    <?php elseif($customField->type ==2): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::number('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','min'=>0, 'dir'=>$cf_land_dir)); ?>

                                            </div>
                                        </div>
                                    <?php elseif($customField->type ==1): ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::textarea('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control',$cf_required=>'', 'dir'=>$cf_land_dir,'rows'=>'5')); ?>

                                            </div>
                                        </div>
                                    <?php else: ?>
                                        
                                        <div class="form-group row">
                                            <label for="<?php echo e('customField_'.$customField->id); ?>"
                                                   class="col-sm-2 form-control-label"><?php echo $cf_title; ?>

                                                <?php echo $cf_land_identifier; ?>

                                            </label>
                                            <div class="col-sm-10">
                                                <?php echo Form::text('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php
                                }
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        

                        <?php if($WebmasterSection->type ==0): ?>
                            <div class="form-group row">
                                <label for="link_status"
                                       class="col-sm-2 form-control-label"><?php echo __('backend.pageCustomForm'); ?></label>
                                <div class="col-sm-10">
                                    <select name="page_form_id" class="form-control c-select">
                                        <option value="">- - <?php echo __('backend.none'); ?> - -</option>
                                        <?php $__currentLoopData = $GeneralWebmasterSections->where("type",6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $FWebmasterSection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                value="<?php echo e($FWebmasterSection->id); ?>" <?php echo e(($FWebmasterSection->id == $Topics->form_id) ? "selected='selected'":""); ?>><?php echo $FWebmasterSection->{"title_".@$ActiveLanguage->code}; ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(@Auth::user()->permissionsGroup->active_status): ?>
                            <?php if($WebmasterSection->case_status): ?>
                                <div class="form-group row">
                                    <label for="link_status"
                                           class="col-sm-2 form-control-label"><?php echo __('backend.status'); ?></label>
                                    <div class="col-sm-10">
                                        <div class="radio">
                                            <label class="ui-check ui-check-md">
                                                <?php echo Form::radio('status','1',($Topics->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')); ?>

                                                <i class="dark-white"></i>
                                                <?php echo e(__('backend.active')); ?>

                                            </label>
                                            &nbsp; &nbsp;
                                            <label class="ui-check ui-check-md">
                                                <?php echo Form::radio('status','0',($Topics->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')); ?>

                                                <i class="dark-white"></i>
                                                <?php echo e(__('backend.notActive')); ?>

                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>


                        <div class="form-group row m-t-md">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                        &#xe31b;</i> <?php echo __('backend.update'); ?></button>
                                <a href="<?php echo e(route('topics',$WebmasterSection->id)); ?>"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> <?php echo __('backend.cancel'); ?></a>
                            </div>
                        </div>

                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
                <?php echo $__env->make('dashboard.topics.tabs.photos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('dashboard.topics.tabs.comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('dashboard.topics.tabs.files', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('dashboard.topics.tabs.related', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('dashboard.topics.tabs.maps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('dashboard.topics.tabs.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <!-- .modal -->
    <div id="delete-topic" class="modal fade" data-backdrop="true">
        <div class="modal-dialog" id="animate">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('backend.confirmation')); ?></h5>
                </div>
                <div class="modal-body text-center p-lg">
                    <h6>
                        <?php echo e(__('backend.confirmationDeleteMsg')); ?>

                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark-white p-x-md"
                            data-dismiss="modal"><?php echo e(__('backend.no')); ?></button>
                    <button type="button" id="topic_delete_btn" row-id=""
                            class="btn danger p-x-md"><?php echo e(__('backend.yes')); ?></button>
                </div>
            </div><!-- /.modal-content -->
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

        $("#checkAll2").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#checkAll4").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action2").change(function () {
            if (this.value == "delete") {
                $("#submit_all2").css("display", "none");
                $("#submit_show_msg2").css("display", "inline-block");
            } else {
                $("#submit_all2").css("display", "inline-block");
                $("#submit_show_msg2").css("display", "none");
            }
        });

        $("#action4").change(function () {
            if (this.value == "delete") {
                $("#submit_all4").css("display", "none");
                $("#submit_show_msg4").css("display", "inline-block");
            } else {
                $("#submit_all4").css("display", "inline-block");
                $("#submit_show_msg4").css("display", "none");
            }
        });

        $("#checkAll3").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action3").change(function () {
            if (this.value == "delete") {
                $("#submit_all3").css("display", "none");
                $("#submit_show_msg3").css("display", "inline-block");
            } else {
                $("#submit_all3").css("display", "inline-block");
                $("#submit_show_msg3").css("display", "none");
            }
        });

        $("#mapDivNew").click(function () {
            $("#mapDiv").css("display", "block");
            $("#mapDivBtns").css("display", "none");
        });

    </script>

    <script src="<?php echo e(asset("assets/dashboard/js/iconpicker/fontawesome-iconpicker.js")); ?>"></script>
    <script>
        $(function () {
            $('.icp-auto').iconpicker({placement: '<?php echo e((@Helper::currentLanguage()->direction=="rtl")?"topLeft":"topRight"); ?>'});
        });

        // Js Slug
        function slugify(string) {
            return string
                .toString()
                .trim()
                .toLowerCase()
                .replace(/\s+/g, "-")
                .replace(/[^\w\-]+/g, "")
                .replace(/\-\-+/g, "-")
                .replace(/^-+/, "")
                .replace(/-+$/, "");
        }

        <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($ActiveLanguage->box_status): ?>
        $("#seo_title_<?php echo e(@$ActiveLanguage->code); ?>").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#title_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text($(this).val());
            } else {
                $("#title_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text("<?php echo $Topics->{'title_' . @$ActiveLanguage->code}; ?>");
            }
        });
        $("#seo_description_<?php echo e(@$ActiveLanguage->code); ?>").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#desc_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text($(this).val());
            } else {
                $("#desc_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text("<?php echo Helper::GeneralSiteSettings("site_desc_" . @$ActiveLanguage->code); ?>");
            }
        });
        $("#seo_url_slug_<?php echo e(@$ActiveLanguage->code); ?>").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#url_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text("<?php echo url(''); ?>/" + slugify($(this).val()));
            } else {
                $("#url_in_engines_<?php echo e(@$ActiveLanguage->code); ?>").text("<?php echo Helper::topicURL($Topics->id, @$ActiveLanguage->code); ?>");
            }
        });
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        function DeleteTopic(id) {
            $("#topic_delete_btn").attr("row-id", id);
            $("#delete-topic").modal("show");
        }

        $("#topic_delete_btn").click(function () {
            $(this).html("<img src=\"<?php echo e(asset('assets/dashboard/images/loading.gif')); ?>\" style=\"height: 25px\"/> <?php echo __('backend.yes'); ?>");
            var row_id = $(this).attr('row-id');
            if (row_id != "") {
                $.ajax({
                    type: "GET",
                    url: "<?php echo route("topicsDestroy", ["webmasterId" => $WebmasterSection->id]); ?>/" + row_id,
                    success: function (result) {
                        location.href = "<?php echo e(route('topics',$WebmasterSection->id)); ?>";
                    }
                });
            }
        });
    </script>
    <?php echo $__env->make('dashboard.layouts.editor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/topics/edit.blade.php ENDPATH**/ ?>