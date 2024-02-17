<?php if(@$BannersSettingsId >0): ?>
    <?php
    // Get banners list array by settings ID (You can get settings ID from Webmaster >> Banners settings)
    $BannersList = Helper::BannersList($BannersSettingsId);
    ?>
    <?php if(count($BannersList)>0): ?>
        <div class="widget">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Slider -->
                    <?php
                    $SideBanner_type = 0;
                    ?>
                    <?php $__currentLoopData = $BannersList->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SideBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        try {
                            $SideBanner_type = $SideBanner->webmasterBanner->type;
                        } catch (Exception $e) {
                            $SideBanner_type = 0;
                        }
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $title_var = "title_" . @Helper::currentLanguage()->code;
                    $details_var = "details_" . @Helper::currentLanguage()->code;
                    $file_var = "file_" . @Helper::currentLanguage()->code;
                    ?>
                    <?php if($SideBanner_type==0): ?>
                        
                        <div class="text-center">
                            <?php $__currentLoopData = $BannersList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SideBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($SideBanner->code !=""): ?>
                                    <div><?php echo $SideBanner->code; ?></div>
                                <?php endif; ?>
                                <?php if($SideBanner->$details_var !=""): ?>
                                    <div><?php echo $SideBanner->$details_var; ?></div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php elseif($SideBanner_type==1): ?>
                        
                        <div class="text-center">
                            <?php $__currentLoopData = $BannersList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SideBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div>
                                    <?php if($SideBanner->link_url !=""): ?>
                                        <a href="<?php echo $SideBanner->link_url; ?>">
                                            <?php endif; ?>
                                            <?php if($SideBanner->$file_var !=""): ?>
                                                <img src="<?php echo e(URL::to('uploads/banners/'.$SideBanner->$file_var)); ?>"
                                                     alt="<?php echo e($SideBanner->$title_var); ?>"/>
                                            <?php endif; ?>
                                            <?php if($SideBanner->link_url !=""): ?>
                                        </a>
                                    <?php endif; ?>
                                    <?php if($SideBanner->$details_var !=""): ?>
                                        <p><?php echo nl2br($SideBanner->$details_var); ?></p>
                                    <?php endif; ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        
                        <div class="text-center">
                            <?php $__currentLoopData = $BannersList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SideBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($SideBanner->youtube_link !=""): ?>
                                    <?php if($SideBanner->video_type ==1): ?>
                                        <?php
                                        $Youtube_id = Helper::Get_youtube_video_id($SideBanner->youtube_link);
                                        ?>
                                        <?php if($Youtube_id !=""): ?>
                                            
                                            <iframe width="100%" height="500" frameborder="0" allowfullscreen
                                                    src="https://www.youtube.com/embed/<?php echo e($Youtube_id); ?>?autoplay=1&mute=1" allow="autoplay">
                                            </iframe>
                                        <?php endif; ?>
                                    <?php elseif($SideBanner->video_type ==2): ?>
                                        <?php
                                        $Vimeo_id = Helper::Get_vimeo_video_id($SideBanner->youtube_link);
                                        ?>
                                        <?php if($Vimeo_id !=""): ?>
                                            
                                            <iframe width="100%" height="500" frameborder="0" allowfullscreen
                                                    src="https://player.vimeo.com/video/<?php echo e($Vimeo_id); ?>?title=0&amp;byline=0">
                                            </iframe>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if($SideBanner->video_type ==0): ?>
                                    <?php if($SideBanner->$file_var !=""): ?>
                                        
                                        <video width="100%" height="500" controls>
                                            <source src="<?php echo e(URL::to('uploads/banners/'.$SideBanner->$file_var)); ?>"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if($SideBanner->$details_var !=""): ?>
                                    <div><?php echo $SideBanner->$details_var; ?></div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                <?php endif; ?>
                <!-- end slider -->
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/includes/banners.blade.php ENDPATH**/ ?>