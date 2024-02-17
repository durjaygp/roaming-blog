<?php $__env->startSection('content'); ?>
    <!-- start Home Slider -->
    <?php echo $__env->make('frontEnd.includes.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end Home Slider -->
    <head>
    </head>

    <?php echo $__env->make('frontEnd.includes.MainForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(!empty($HomePage)): ?>
        <?php if(@$HomePage->{"details_" . @Helper::currentLanguage()->code} !=""): ?>
            <section class="content-row-no-bg home-welcome">
                <div class="container">

                    <?php
                        echo $HomePage->{"details_" . @Helper::currentLanguage()->code}
                    ?>
                </div>
            </section>
        <?php endif; ?>
    <?php endif; ?>

    <?php if(count($TextBanners)>0): ?>
        <?php $__currentLoopData = $TextBanners->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TextBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                try {
                    $TextBanner_type = $TextBanner->webmasterBanner->type;
                } catch (Exception $e) {
                    $TextBanner_type = 0;
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

            $col_width = 12;
            if (count($TextBanners) == 2) {
                $col_width = 6;
            }
            if (count($TextBanners) == 3) {
                $col_width = 4;
            }
            if (count($TextBanners) > 3) {
                $col_width = 3;
            }
            ?>
        <section class="content-row-no-bg p-b-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" style="margin-bottom: 0;">
                            <?php $__currentLoopData = $TextBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TextBanner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    if ($TextBanner->$title_var != "") {
                                        $BTitle = $TextBanner->$title_var;
                                    } else {
                                        $BTitle = $TextBanner->$title_var2;
                                    }
                                    if ($TextBanner->$details_var != "") {
                                        $BDetails = $TextBanner->$details_var;
                                    } else {
                                        $BDetails = $TextBanner->$details_var2;
                                    }
                                    if ($TextBanner->$file_var != "") {
                                        $BFile = $TextBanner->$file_var;
                                    } else {
                                        $BFile = $TextBanner->$file_var2;
                                    }
                                    ?>
                                <div class="col-lg-<?php echo e($col_width); ?>">
                                    <div class="box">
                                        <div class="box-gray aligncenter">
                                            <?php if($TextBanner->code !=""): ?>
                                                <?php echo $TextBanner->code; ?>

                                            <?php else: ?>
                                                <?php if($TextBanner->icon !=""): ?>
                                                    <div class="icon">
                                                        <i class="fa <?php echo e($TextBanner->icon); ?> fa-3x"></i>
                                                    </div>
                                                <?php elseif($BFile !=""): ?>
                                                    <img src="<?php echo e(URL::to('uploads/banners/'.$BFile)); ?>"
                                                         alt="<?php echo e($BTitle); ?>"/>
                                                <?php endif; ?>
                                                <h4><?php echo $BTitle; ?></h4>
                                                <?php if($BDetails !=""): ?>
                                                    <p><?php echo nl2br($BDetails); ?></p>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                        </div>
                                        <?php if($TextBanner->link_url !=""): ?>
                                            <div class="box-bottom">
                                                <a href="<?php echo $TextBanner->link_url; ?>"><?php echo e(__('frontend.moreDetails')); ?></a>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if(count($HomeTopics)>0): ?>
        <section class="content-row-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-row-head">
                            <h2 class="heading"><?php echo e(__('frontend.homeContents1Title')); ?></h2>
                            <small><?php echo e(__('frontend.homeContents1desc')); ?></small>
                        </div>
                        <div id="owl-slider" class="owl-carousel owl-theme listing">
                                <?php
                                $title_var = "title_" . @Helper::currentLanguage()->code;
                                $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                $details_var = "details_" . @Helper::currentLanguage()->code;
                                $details_var2 = "details_" . env('DEFAULT_LANGUAGE');
                                $section_url = "";
                                ?>
                            <?php $__currentLoopData = $HomeTopics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HomeTopic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    if ($HomeTopic->$title_var != "") {
                                        $title = $HomeTopic->$title_var;
                                    } else {
                                        $title = $HomeTopic->$title_var2;
                                    }
                                    if ($HomeTopic->$details_var != "") {
                                        $details = $details_var;
                                    } else {
                                        $details = $details_var2;
                                    }
                                    if ($section_url == "") {
                                        $section_url = Helper::sectionURL($HomeTopic->webmaster_id);
                                    }
                                    ?>
                                <div class="item">
                                    <h4>
                                        <?php if($HomeTopic->icon !=""): ?>
                                            <i class="fa <?php echo $HomeTopic->icon; ?> "></i>&nbsp;
                                        <?php endif; ?>
                                        <?php echo e($title); ?>

                                    </h4>
                                    <?php if($HomeTopic->photo_file !=""): ?>
                                        <img src="<?php echo e(URL::to('uploads/topics/'.$HomeTopic->photo_file)); ?>"
                                             alt="<?php echo e($title); ?>"/>
                                    <?php endif; ?>

                                    
                                    <?php if(count($HomeTopic->webmasterSection->customFields->where("in_listing",true)) >0): ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                        <?php
                                                        $cf_title_var = "title_" . @Helper::currentLanguage()->code;
                                                        $cf_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                                        ?>
                                                    <?php $__currentLoopData = $HomeTopic->webmasterSection->customFields->where("in_listing",true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                            // check permission
                                                            $view_permission_groups = [];
                                                            if ($customField->view_permission_groups != "") {
                                                                $view_permission_groups = explode(",", $customField->view_permission_groups);
                                                            }
                                                        if (in_array(0, $view_permission_groups) || $customField->view_permission_groups == "") {
                                                            // have permission & continue
                                                            ?>
                                                        <?php if($customField->in_listing): ?>
                                                                <?php
                                                                if ($customField->$cf_title_var != "") {
                                                                    $cf_title = $customField->$cf_title_var;
                                                                } else {
                                                                    $cf_title = $customField->$cf_title_var2;
                                                                }


                                                                $cf_saved_val = "";
                                                                $cf_saved_val_array = array();
                                                                if (count($HomeTopic->fields) > 0) {
                                                                    foreach ($HomeTopic->fields as $t_field) {
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

                                                            <?php if(($cf_saved_val!="" || count($cf_saved_val_array) > 0) && ($customField->lang_code == "all" || $customField->lang_code == @Helper::currentLanguage()->code)): ?>
                                                                <?php if($customField->type ==12): ?>
                                                                    
                                                                <?php elseif($customField->type ==11): ?>
                                                                    
                                                                <?php elseif($customField->type ==10): ?>
                                                                    
                                                                <?php elseif($customField->type ==9): ?>
                                                                    
                                                                <?php elseif($customField->type ==8): ?>
                                                                    
                                                                <?php elseif($customField->type ==7): ?>
                                                                    
                                                                    <div class="row field-row">
                                                                        <div class="col-lg-3">
                                                                            <?php echo $cf_title; ?> :
                                                                        </div>
                                                                        <div class="col-lg-9">
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
                                                                                <?php if(in_array($line_num,$cf_saved_val_array)): ?>
                                                                                    <span class="badge">
                                                            <?php echo $cf_details_line; ?>

                                                        </span>
                                                                                <?php endif; ?>
                                                                                    <?php
                                                                                    $line_num++;
                                                                                    ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </div>
                                                                    </div>
                                                                <?php elseif($customField->type ==14): ?>
                                                                    
                                                                    <div class="row field-row">
                                                                        <div class="col-lg-12">
                                                                            <?php echo (($cf_saved_val == 1) ? "&check;" : "&#x2A09;"); ?> <?php echo $cf_title; ?>

                                                                        </div>
                                                                    </div>
                                                                <?php elseif($customField->type ==6 || $customField->type ==13): ?>
                                                                    
                                                                    <div class="row field-row">
                                                                        <div class="col-lg-3">
                                                                            <?php echo $cf_title; ?> :
                                                                        </div>
                                                                        <div class="col-lg-9">
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
                                                                                <?php if($line_num == $cf_saved_val): ?>
                                                                                    <?php echo $cf_details_line; ?>

                                                                                <?php endif; ?>
                                                                                    <?php
                                                                                    $line_num++;
                                                                                    ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </div>
                                                                    </div>
                                                                <?php elseif($customField->type ==5): ?>
                                                                    
                                                                    <div class="row field-row">
                                                                        <div class="col-lg-3">
                                                                            <?php echo $cf_title; ?> :
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <?php echo date('Y-m-d H:i:s', strtotime($cf_saved_val)); ?>

                                                                        </div>
                                                                    </div>
                                                                <?php elseif($customField->type ==4): ?>
                                                                    
                                                                    <div class="row field-row">
                                                                        <div class="col-lg-3">
                                                                            <?php echo $cf_title; ?> :
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <?php echo date('Y-m-d', strtotime($cf_saved_val)); ?>

                                                                        </div>
                                                                    </div>
                                                                <?php elseif($customField->type ==3): ?>
                                                                    
                                                                    <div class="row field-row">
                                                                        <div class="col-lg-3">
                                                                            <?php echo $cf_title; ?> :
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <?php echo $cf_saved_val; ?>

                                                                        </div>
                                                                    </div>
                                                                <?php elseif($customField->type ==2): ?>
                                                                    
                                                                    <div class="row field-row">
                                                                        <div class="col-lg-3">
                                                                            <?php echo $cf_title; ?> :
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <?php echo $cf_saved_val; ?>

                                                                        </div>
                                                                    </div>
                                                                <?php elseif($customField->type ==1): ?>
                                                                    
                                                                <?php else: ?>
                                                                    
                                                                    <div class="row field-row">
                                                                        <div class="col-lg-3">
                                                                            <?php echo $cf_title; ?> :
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <?php echo Helper::ParseLinks($cf_saved_val); ?>

                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                            <?php
                                                        }
                                                            ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <p class="text-justify"><?php echo mb_substr(strip_tags($HomeTopic->$details),0, 300)."..."; ?>

                                        &nbsp; <a
                                                href="<?php echo e(Helper::topicURL($HomeTopic->id)); ?>"><?php echo e(__('frontend.readMore')); ?>

                                            <i
                                                    class="fa fa-caret-<?php echo e(@Helper::currentLanguage()->right); ?>"></i></a>
                                    </p>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="more-btn">
                            <a href="<?php echo e(url($section_url)); ?>" class="btn btn-theme"><i
                                        class="fa fa-angle-left"></i>&nbsp; <?php echo e(__('frontend.viewMore')); ?>

                                &nbsp;<i
                                        class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    <?php endif; ?>

    <?php if(count($HomePhotos)>0): ?>
        <section class="content-row-no-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-row-head">
                            <h2 class="heading"><?php echo e(__('frontend.homeContents2Title')); ?></h2>
                            <small><?php echo e(__('frontend.homeContents2desc')); ?></small>
                        </div>
                        <div class="row">
                            <section id="projects">
                                <ul id="thumbs" class="portfolio">
                                        <?php
                                        $title_var = "title_" . @Helper::currentLanguage()->code;
                                        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                        $details_var = "details_" . @Helper::currentLanguage()->code;
                                        $details_var2 = "details_" . env('DEFAULT_LANGUAGE');
                                        $section_url = "";
                                        $ph_count = 0;
                                        ?>
                                    <?php $__currentLoopData = $HomePhotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HomePhoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if ($HomePhoto->$title_var != "") {
                                                $title = $HomePhoto->$title_var;
                                            } else {
                                                $title = $HomePhoto->$title_var2;
                                            }

                                            if ($section_url == "") {
                                                $section_url = Helper::sectionURL($HomePhoto->webmaster_id);
                                            }
                                            ?>
                                        <?php $__currentLoopData = $HomePhoto->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($ph_count<12): ?>
                                                <li class="col-lg-2 design" data-id="id-0" data-type="web">
                                                    <div class="relative">
                                                        <div class="item-thumbs">
                                                            <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                                               title="<?php echo e($title); ?>"
                                                               href="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>">
                                                                <span class="overlay-img"></span>
                                                                <span class="overlay-img-thumb"><i
                                                                            class="fa fa-search-plus"></i></span>
                                                            </a>
                                                            <!-- Thumb Image and Description -->
                                                            <img src="<?php echo e(URL::to('uploads/topics/'.$photo->file)); ?>"
                                                                 alt="<?php echo e($title); ?>">
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                                <?php
                                                $ph_count++;
                                                ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </section>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="more-btn">
                                    <a href="<?php echo e(url($section_url)); ?>" class="btn btn-theme"><i
                                                class="fa fa-angle-left"></i>&nbsp; <?php echo e(__('frontend.viewMore')); ?>

                                        &nbsp;<i
                                                class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if(count($HomePartners)>0): ?>
        <section class="content-row-no-bg top-line">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-row-head">
                            <h2 class="heading"><?php echo e(__('frontend.partners')); ?></h2>
                            <small><?php echo e(__('frontend.partnersMsg')); ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="partners_carousel slide" id="myCarousel" style="direction: ltr">
                        <div class="carousel-inner">
                            <div class="item active">
                                <ul class="thumbnails">
                                        <?php
                                        $ii = 0;
                                        $title_var = "title_" . @Helper::currentLanguage()->code;
                                        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                        $details_var = "details_" . @Helper::currentLanguage()->code;
                                        $details_var2 = "details_" . env('DEFAULT_LANGUAGE');
                                        $section_url = "";
                                        ?>

                                    <?php $__currentLoopData = $HomePartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HomePartner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if ($HomePartner->$title_var != "") {
                                                $title = $HomePartner->$title_var;
                                            } else {
                                                $title = $HomePartner->$title_var2;
                                            }

                                            if ($section_url == "") {
                                                $section_url = Helper::sectionURL($HomePartner->webmaster_id);
                                            }
                                            $URL = "";
                                            if (count($HomePartner->fields) > 0) {
                                                foreach ($HomePartner->fields as $t_field) {
                                                    if ($t_field->field_value != "") {
                                                        if (@filter_var($t_field->field_value, FILTER_VALIDATE_URL)) {
                                                            $URL = $t_field->field_value;
                                                        }
                                                    }
                                                }
                                            }

                                            if ($ii == 6) {
                                                echo "
                                                    </ul>
                                </div><!-- /Slide -->
                                <div class='item'>
                                    <ul class='thumbnails'>
                                                    ";
                                                $ii = 0;
                                            }
                                            ?>
                                        <li class="col-sm-2">
                                            <div>
                                                <div class="thumbnail">
                                                    <?php if($URL !=""): ?>
                                                        <a href="<?php echo e($URL); ?>" target="_blank">
                                                            <img
                                                                    src="<?php echo e(URL::to('uploads/topics/'.$HomePartner->photo_file)); ?>"
                                                                    data-placement="bottom" title="<?php echo e($title); ?>"
                                                                    alt="<?php echo e($title); ?>">
                                                        </a>
                                                    <?php else: ?>
                                                        <img
                                                                src="<?php echo e(URL::to('uploads/topics/'.$HomePartner->photo_file)); ?>"
                                                                data-placement="bottom" title="<?php echo e($title); ?>"
                                                                alt="<?php echo e($title); ?>">
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                        </li>
                                            <?php
                                            $ii++;
                                            ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div><!-- /Slide -->
                        </div>
                        <nav>
                            <ul class="control-box pager">
                                <li><a data-slide="prev" href="#myCarousel" class=""><i
                                                class="fa fa-angle-left"></i></a></li>
                                
                                
                                <li><a data-slide="next" href="#myCarousel" class=""><i
                                                class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                        <!-- /.control-box -->

                    </div><!-- /#myCarousel -->
                </div>

            </div>

        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontEnd.layoutFront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/home.blade.php ENDPATH**/ ?>