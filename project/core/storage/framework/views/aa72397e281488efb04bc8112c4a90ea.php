<div class="col-lg-4">
    <aside class="right-sidebar">
        <div class="widget">
            <?php echo e(Form::open(['route'=>['searchTopics'],'method'=>'GET','class'=>'form-search'])); ?>

            <div class="input-group input-group-sm">
                <?php echo Form::text('search_word',@$search_word, array('placeholder' => __('frontend.search'),'class' => 'form-control','id'=>'search_word','required'=>'')); ?>

                <input type="hidden" name="section" value="<?php echo e(@$WebmasterSection->id); ?>">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-theme"><i class="fa fa-search"></i></button>
                </span>
            </div>

            <?php echo e(Form::close()); ?>

        </div>

        <?php if(count($Categories)>0): ?>
            <?php
            $title_var = "title_" . @Helper::currentLanguage()->code;
            $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
            $category_title_var = "title_" . @Helper::currentLanguage()->code;
            $slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
            $slug_var2 = "seo_url_slug_" . env('DEFAULT_LANGUAGE');
            ?>
            <div class="widget">
                <h5 class="widgetheading"><?php echo e(__('frontend.categories')); ?></h5>
                <ul class="cat">
                    <?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $active_cat = ""; ?>
                        <?php if($CurrentCategory!="none"): ?>
                            <?php if(!empty($CurrentCategory)): ?>
                                <?php if($Category->id == $CurrentCategory->id): ?>
                                    <?php $active_cat = "class=active"; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php
                        if ($Category->$title_var != "") {
                            $Category_title = $Category->$title_var;
                        } else {
                            $Category_title = $Category->$title_var2;
                        }
                        $ccount = $category_and_topics_count[$Category->id];
                        ?>
                        <li>
                            <?php if($Category->icon !=""): ?>
                                <i class="fa <?php echo e($Category->icon); ?>"></i> &nbsp;
                            <?php endif; ?>
                            <a <?php echo e($active_cat); ?> href="<?php echo e(Helper::categoryURL($Category->id)); ?>"><?php echo e($Category_title); ?></a><span
                                class="pull-right">(<?php echo e($ccount); ?>)</span></li>
                        <?php $__currentLoopData = $Category->fatherSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $MnuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $active_cat = ""; ?>
                            <?php if($CurrentCategory!="none"): ?>
                                <?php if(!empty($CurrentCategory)): ?>
                                    <?php if($MnuCategory->id == $CurrentCategory->id): ?>
                                        <?php $active_cat = "class=active"; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php
                            if ($MnuCategory->$title_var != "") {
                                $MnuCategory_title = $MnuCategory->$title_var;
                            } else {
                                $MnuCategory_title = $MnuCategory->$title_var2;
                            }
                            $ccount = $category_and_topics_count[$MnuCategory->id];
                            ?>
                            <li> &nbsp; &nbsp; &nbsp;
                                <?php if($MnuCategory->icon !=""): ?>
                                    <i class="fa <?php echo e($MnuCategory->icon); ?>"></i> &nbsp;
                                <?php endif; ?>
                                <a <?php echo e($active_cat); ?>  href="<?php echo e(Helper::categoryURL($MnuCategory->id)); ?>"><?php echo e($MnuCategory_title); ?></a><span
                                    class="pull-right">(<?php echo e($ccount); ?>)</span></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

        <?php endif; ?>
        <?php if(count($TopicsMostViewed)>0): ?>
            <?php
            $side_title_var = "title_" . @Helper::currentLanguage()->code;
            $side_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
            $slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
            $slug_var2 = "seo_url_slug_" . env('DEFAULT_LANGUAGE');
            ?>
            <div class="widget">
                <h5 class="widgetheading"><?php echo e(__('frontend.mostViewed')); ?></h5>
                <ul class="recent">
                    <?php $__currentLoopData = $TopicsMostViewed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TopicMostViewed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($TopicMostViewed->$side_title_var != "") {
                            $side_title = $TopicMostViewed->$side_title_var;
                        } else {
                            $side_title = $TopicMostViewed->$side_title_var2;
                        }
                        $topic_link_url = Helper::topicURL($TopicMostViewed->id);
                        ?>
                        <li>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="<?php echo e($topic_link_url); ?>">
                                        <?php if($TopicMostViewed->photo_file !=""): ?>
                                            <img src="<?php echo e(URL::to('uploads/topics/'.$TopicMostViewed->photo_file)); ?>"
                                                 class="pull-left" alt="<?php echo e($side_title); ?>"/>
                                        <?php elseif($TopicMostViewed->webmasterSection->type==2 && $TopicMostViewed->video_file!=""): ?>
                                            <?php if($TopicMostViewed->video_type ==1): ?>
                                                <?php
                                                $Youtube_id = Helper::Get_youtube_video_id($TopicMostViewed->video_file);
                                                ?>
                                                <?php if($Youtube_id !=""): ?>
                                                    <img src="//img.youtube.com/vi/<?php echo e($Youtube_id); ?>/0.jpg"
                                                         class="pull-left" alt="<?php echo e($side_title); ?>"/>
                                                <?php endif; ?>
                                            <?php elseif($TopicMostViewed->video_type ==2): ?>
                                                <?php
                                                $Vimeo_id = Helper::Get_vimeo_video_id($TopicMostViewed->video_file);
                                                ?>
                                                <?php if($Vimeo_id !=""): ?>
                                                    <?php
                                                    $hash = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$Vimeo_id.php"));
                                                    ?>

                                                    <img src="<?php echo e($hash[0]['thumbnail_large']); ?>"
                                                         class="pull-left" alt="<?php echo e($side_title); ?>"/>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </a>
                                    <h6>
                                        <a href="<?php echo e($topic_link_url); ?>"><?php echo e($side_title); ?></a>
                                    </h6>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php echo $__env->make('frontEnd.includes.banners',["BannersSettingsId"=>Helper::GeneralWebmasterSettings("side_banners_section_id")], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </aside>
</div>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/includes/side.blade.php ENDPATH**/ ?>