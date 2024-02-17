<?php if(Helper::GeneralWebmasterSettings("seo_status")): ?>
    <div class="tab-pane  <?php echo e($tab_2); ?>" id="tab_seo">

        <div class="box-body">
            <?php echo e(Form::open(['route'=>['categoriesSEOUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Sections->id],'method'=>'POST'])); ?>

            <?php $__currentLoopData = Helper::languagesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ActiveLanguage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($ActiveLanguage->box_status): ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div>
                                    <small><?php echo __('backend.topicSEOTitle'); ?></small> <?php echo @Helper::languageName($ActiveLanguage); ?>


                                    <?php echo Form::text('seo_title_'.@$ActiveLanguage->code,$Sections->{'seo_title_'.@$ActiveLanguage->code}, array('class' => 'form-control','id'=>'seo_title_'.@$ActiveLanguage->code,'maxlength'=>'65', 'dir'=>@$ActiveLanguage->direction)); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <small><?php echo __('backend.friendlyURL'); ?></small> <?php echo @Helper::languageName($ActiveLanguage); ?>


                                    <?php echo Form::text('seo_url_slug_'.@$ActiveLanguage->code,$Sections->{'seo_url_slug_'.@$ActiveLanguage->code}, array('class' => 'form-control','id'=>'seo_url_slug_'.@$ActiveLanguage->code, 'dir'=>@$ActiveLanguage->direction)); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <small><?php echo __('backend.topicSEODesc'); ?></small> <?php echo @Helper::languageName($ActiveLanguage); ?>


                                    <?php echo Form::textarea('seo_description_'.@$ActiveLanguage->code,$Sections->{'seo_description_'.@$ActiveLanguage->code}, array('class' => 'form-control','id'=>'seo_description_'.@$ActiveLanguage->code,'maxlength'=>'165', 'dir'=>@$ActiveLanguage->direction,'rows'=>'2')); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <small><?php echo __('backend.topicSEOKeywords'); ?></small> <?php echo @Helper::languageName($ActiveLanguage); ?>


                                    <?php echo Form::textarea('seo_keywords_'.@$ActiveLanguage->code,$Sections->{'seo_keywords_'.@$ActiveLanguage->code}, array('class' => 'form-control','id'=>'seo_keywords_'.@$ActiveLanguage->code, 'dir'=>@$ActiveLanguage->direction,'rows'=>'2')); ?>

                                </div>
                            </div>
                            <br>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            $seo_example_title = $Sections->{'title_' . @$ActiveLanguage->code};
                            $seo_example_desc = Helper::GeneralSiteSettings("site_desc_" . @$ActiveLanguage->code);
                            if ($Sections->{'seo_title_' . @$ActiveLanguage->code} != "") {
                                $seo_example_title = $Sections->{'seo_title_' . @$ActiveLanguage->code};
                            }
                            if ($Sections->{'seo_description_' . @$ActiveLanguage->code} != "") {
                                $seo_example_desc = $Sections->{'seo_description_' . @$ActiveLanguage->code};
                            }
                            $seo_example_url = Helper::categoryURL($Sections->id, @$ActiveLanguage->code);
                            ?>
                            <div class="form-group">
                                <div class="search-example-div">
                                    <?php echo @Helper::languageName($ActiveLanguage); ?>

                                    <div class="search-example" dir="<?php echo e(@$ActiveLanguage->direction); ?>">
                                        <a id="title_in_engines_<?php echo e(@$ActiveLanguage->code); ?>"
                                           href="<?php echo e($seo_example_url); ?>"
                                           target="_blank"><?php echo e($seo_example_title); ?></a>
                                        <span
                                            id="url_in_engines_<?php echo e(@$ActiveLanguage->code); ?>"><?php echo e($seo_example_url); ?></span>
                                        <div
                                            id="desc_in_engines_<?php echo e(@$ActiveLanguage->code); ?>"><?php echo e($seo_example_desc); ?>

                                            ...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <i class="material-icons">&#xe8fd;</i>
                                    <small><?php echo __('backend.seoTabSettings'); ?></small>
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="form-group">
                <div>
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
<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/categories/seo.blade.php ENDPATH**/ ?>