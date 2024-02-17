<?php if(count($SliderBanners)>0): ?>
    <section id="featured">
        <!-- start slider -->
        <!-- Slider -->
        <?php $__currentLoopData = $SliderBanners->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SliderBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            try {
                $SliderBanner_type = $SliderBanner->webmasterBanner->type;
            } catch (Exception $e) {
                $SliderBanner_type = 0;
            }
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php
        $title_var = "title_" . @Helper::currentLanguage()->code;
        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
        $details_var = "details_" . @Helper::currentLanguage()->code;
        $details_var2 = "details_" . env('DEFAULT_LANGUAGE');
        $file_var = "file_" . @Helper::currentLanguage()->code;
        $file_var2 = "file_" . env('DEFAULT_LANGUAGE');
        ?>
        <?php if($SliderBanner_type==0): ?>
            
            <div class="text-center">
                <?php $__currentLoopData = $SliderBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SliderBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    if ($SliderBanner->$details_var != "") {
                        $BDetails = $SliderBanner->$details_var;
                    } else {
                        $BDetails = $SliderBanner->$details_var2;
                    }
                    ?>
                    <?php if($BDetails !=""): ?>
                        <div><?php echo $BDetails; ?></div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php elseif($SliderBanner_type==1): ?>
            
            <div id="main-slider" class="flexslider">
                <ul class="slides">
                    <?php $__currentLoopData = $SliderBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SliderBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($SliderBanner->$title_var != "") {
                            $BTitle = $SliderBanner->$title_var;
                        } else {
                            $BTitle = $SliderBanner->$title_var2;
                        }
                        $BDetails = $SliderBanner->$details_var;
                        if ($SliderBanner->$file_var != "") {
                            $BFile = $SliderBanner->$file_var;
                        } else {
                            $BFile = $SliderBanner->$file_var2;
                        }
                        ?>
                        <li>
                            <img src="<?php echo e(URL::to('uploads/banners/'.$BFile)); ?>"
                                 alt="<?php echo e($BTitle); ?>"/>
                            <?php if($BDetails !="" || $SliderBanner->link_url!=""): ?>
                                <div class="flex-caption">
                                    <?php if($BTitle !=""): ?>
                                        <h3><?php echo $BTitle; ?></h3>
                                    <?php endif; ?>
                                    <?php if($BDetails !=""): ?>
                                        <p><?php echo nl2br($BDetails); ?></p>
                                    <?php endif; ?>
                                    <?php if($SliderBanner->link_url !=""): ?>
                                        <a href="<?php echo $SliderBanner->link_url; ?>"
                                           class="btn btn-theme"><?php echo e(__('frontend.moreDetails')); ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php else: ?>
            
            <div class="text-center">
                <?php $__currentLoopData = $SliderBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SliderBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    if ($SliderBanner->$title_var != "") {
                        $BTitle = $SliderBanner->$title_var;
                    } else {
                        $BTitle = $SliderBanner->$title_var2;
                    }
                    if ($SliderBanner->$details_var != "") {
                        $BDetails = $SliderBanner->$details_var;
                    } else {
                        $BDetails = $SliderBanner->$details_var2;
                    }
                    if ($SliderBanner->$file_var != "") {
                        $BFile = $SliderBanner->$file_var;
                    } else {
                        $BFile = $SliderBanner->$file_var2;
                    }
                    ?>
                    <?php if($SliderBanner->youtube_link !=""): ?>
                        <?php if($SliderBanner->video_type ==1): ?>
                            <?php
                            $Youtube_id = Helper::Get_youtube_video_id($SliderBanner->youtube_link);
                            ?>
                            <?php if($Youtube_id !=""): ?>
                                
                                <iframe width="100%" height="500" frameborder="0" allowfullscreen
                                        src="https://www.youtube.com/embed/<?php echo e($Youtube_id); ?>?autoplay=1&mute=1" allow="autoplay">
                                </iframe>
                            <?php endif; ?>
                        <?php elseif($SliderBanner->video_type ==2): ?>
                            <?php
                            $Vimeo_id = Helper::Get_vimeo_video_id($SliderBanner->youtube_link);
                            ?>
                            <?php if($Vimeo_id !=""): ?>
                                
                                <iframe width="100%" height="500" frameborder="0" allowfullscreen
                                        src="https://player.vimeo.com/video/<?php echo e($Vimeo_id); ?>?title=0&amp;byline=0">
                                </iframe>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if($SliderBanner->video_type ==0): ?>
                        <?php if($BFile !=""): ?>
                            
                            <video width="100%" height="500" controls autoplay>
                                <source src="<?php echo e(URL::to('uploads/banners/'.$BFile)); ?>"
                                        type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if($BDetails !=""): ?>
                        <div><?php echo $BDetails; ?></div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    <?php endif; ?>
    <!-- end slider -->
    </section>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/includes/slider.blade.php ENDPATH**/ ?>