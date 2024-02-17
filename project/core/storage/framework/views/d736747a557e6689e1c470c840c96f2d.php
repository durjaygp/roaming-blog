<?php
$footer_style = "";
if (Helper::GeneralSiteSettings("style_footer_bg") != "") {
    $bg_file = URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_footer_bg"));
    $bg_color = Helper::GeneralSiteSettings("style_color1");
    $footer_style = "style='background: $bg_color url($bg_file) repeat-x center top'";
}
if (Helper::GeneralSiteSettings("style_footer") != 1) {
    $footer_style = "style=padding:0";
}
?>
<footer id="footer" <?php echo $footer_style; ?>>
    <?php if(Helper::GeneralSiteSettings("style_footer")==1): ?>
        <?php
        $bx1w = 3;
        $bx2w = 3;
        $bx3w = 3;
        $bx4w = 3;
        $News = [];
        if(@$LatestNews){
            $News = $LatestNews;
        }
        if (count($News) == 0 && Helper::GeneralSiteSettings("style_subscribe") == 0) {
            $bx1w = 6;
            $bx2w = 6;
            $bx3w = 6;
            $bx4w = 6;
        } elseif (count($News) == 0 || Helper::GeneralSiteSettings("style_subscribe") == 0) {
            $bx1w = 4;
            $bx2w = 4;
            $bx3w = 4;
            $bx4w = 4;
        }

        ?>
        <div class="container">
            <div class="row">



























                <?php if(count($News)>0): ?>
                    <?php
                    $footer_title_var = "title_" . @Helper::currentLanguage()->code;
                    $footer_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                    $slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
                    $slug_var2 = "seo_url_slug_" . env('DEFAULT_LANGUAGE');
                    ?>
                    <div class="col-lg-<?php echo e($bx2w); ?>">
                        <div class="widget">
                            <h4 class="widgetheading"><i
                                    class="fa fa-rss"></i>&nbsp; <?php echo e(__('frontend.latestNews')); ?>

                            </h4>
                            <ul class="link-list">
                                <?php $__currentLoopData = $News; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $LatestNew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    if ($LatestNew->$footer_title_var != "") {
                                        $LatestNew_title = $LatestNew->$footer_title_var;
                                    } else {
                                        $LatestNew_title = $LatestNew->$footer_title_var2;
                                    }
                                    ?>
                                    <li>
                                        <a href="<?php echo e(Helper::topicURL($LatestNew->id)); ?>"><?php echo e($LatestNew_title); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(Helper::GeneralWebmasterSettings("footer_menu_id") >0): ?>
                    <?php
                    // Get list of footer menu links by group Id
                    $FooterMenuLinks = Helper::MenuList(Helper::GeneralWebmasterSettings("footer_menu_id"));
                    ?>
                    <?php if(count($FooterMenuLinks)>0): ?>
                        <?php if(count($FooterMenuLinks)<3): ?>
                            <div class="col-lg-<?php echo e($bx3w); ?>">
                            <div class="widget">
                                <?php
                                $link_title_var = "title_" . @Helper::currentLanguage()->code;
                                $link_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                $slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
                                $slug_var2 = "seo_url_slug_" . env('DEFAULT_LANGUAGE');
                                ?>
                                <h4 class="widgetheading"><i
                                        class="fa fa-bookmark"></i>&nbsp; <?php echo e(__('frontend.quickLinks')); ?></h4>
                                <ul class="link-list">
                                    <?php $__currentLoopData = $FooterMenuLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $FooterMenuLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if ($FooterMenuLink->$link_title_var != "") {
                                            $link_title = $FooterMenuLink->$link_title_var;
                                        } else {
                                            $link_title = $FooterMenuLink->$link_title_var2;
                                        }
                                        ?>
                                        <?php if($FooterMenuLink->type==3 || $FooterMenuLink->type==2): ?>
                                             Get Section Name as a link
                                            <li>
                                                <a href="<?php echo e(Helper::sectionURL($FooterMenuLink->cat_id)); ?>"><?php echo e(__($link_title)); ?></a>
                                            </li>
                                        <?php elseif($FooterMenuLink->type==1): ?>
                                             Direct link
                                            <?php
                                            if (@Helper::currentLanguage()->code != env('DEFAULT_LANGUAGE')) {
                                                $f3c = mb_substr($FooterMenuLink->link, 0, 3);
                                                if ($f3c == "htt" || $f3c == "www") {
                                                    $this_link_url = $FooterMenuLink->link;
                                                } else {
                                                    $this_link_url = url(@Helper::currentLanguage()->code . "/" . $FooterMenuLink->link);
                                                }
                                            } else {
                                                $this_link_url = url($FooterMenuLink->link);
                                            }
                                            ?>
                                            <li>
                                                <a href="<?php echo e($this_link_url); ?>"><?php echo e(__($link_title)); ?></a>
                                            </li>
                                        <?php else: ?>
                                             No link
                                            <li><a><?php echo e(__($link_title)); ?></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <?php else: ?>
                            <?php $counter = 0; ?>

                            <div class="col">
                            <div class="widget">
                                    <?php
                                    $link_title_var = "title_" . @Helper::currentLanguage()->code;
                                    $link_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                    $slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
                                    $slug_var2 = "seo_url_slug_" . env('DEFAULT_LANGUAGE');
                                    ?>
                                <ul class="link-list">
                                    <?php $__currentLoopData = $FooterMenuLinks->chunk(ceil(count($FooterMenuLinks)/2))[$counter]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $FooterMenuLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if ($FooterMenuLink->$link_title_var != "") {
                                                $link_title = $FooterMenuLink->$link_title_var;
                                            } else {
                                                $link_title = $FooterMenuLink->$link_title_var2;
                                            }
                                            ?>
                                        <?php if($FooterMenuLink->type==3 || $FooterMenuLink->type==2): ?>
                                            
                                            <li>
                                                <a href="<?php echo e(Helper::sectionURL($FooterMenuLink->cat_id)); ?>"><?php echo e(__($link_title)); ?></a>
                                            </li>
                                        <?php elseif($FooterMenuLink->type==1): ?>
                                            
                                                <?php
                                                if (@Helper::currentLanguage()->code != env('DEFAULT_LANGUAGE')) {
                                                    $f3c = mb_substr($FooterMenuLink->link, 0, 3);
                                                    if ($f3c == "htt" || $f3c == "www") {
                                                        $this_link_url = $FooterMenuLink->link;
                                                    } else {
                                                        $this_link_url = url(@Helper::currentLanguage()->code . "/" . $FooterMenuLink->link);
                                                    }
                                                } else {
                                                    $this_link_url = url($FooterMenuLink->link);
                                                }
                                                ?>
                                            <li>
                                                <a href="<?php echo e($this_link_url); ?>"><?php echo e(__($link_title)); ?></a>
                                            </li>
                                        <?php else: ?>
                                            
                                            <li><a><?php echo e(__($link_title)); ?></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                            <?php $counter++; ?>

                        <div class="col">
                            <div class="widget">
                                    <?php
                                    $link_title_var = "title_" . @Helper::currentLanguage()->code;
                                    $link_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                    $slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
                                    $slug_var2 = "seo_url_slug_" . env('DEFAULT_LANGUAGE');
                                    ?>
                                <ul class="link-list">
                                    <?php $__currentLoopData = $FooterMenuLinks->chunk(ceil(count($FooterMenuLinks)/2))[$counter]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $FooterMenuLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if ($FooterMenuLink->$link_title_var != "") {
                                                $link_title = $FooterMenuLink->$link_title_var;
                                            } else {
                                                $link_title = $FooterMenuLink->$link_title_var2;
                                            }
                                            ?>
                                        <?php if($FooterMenuLink->type==3 || $FooterMenuLink->type==2): ?>
                                            
                                            <li>
                                                <a href="<?php echo e(Helper::sectionURL($FooterMenuLink->cat_id)); ?>"><?php echo e(__($link_title)); ?></a>
                                            </li>
                                        <?php elseif($FooterMenuLink->type==1): ?>
                                            
                                                <?php
                                                if (@Helper::currentLanguage()->code != env('DEFAULT_LANGUAGE')) {
                                                    $f3c = mb_substr($FooterMenuLink->link, 0, 3);
                                                    if ($f3c == "htt" || $f3c == "www") {
                                                        $this_link_url = $FooterMenuLink->link;
                                                    } else {
                                                        $this_link_url = url(@Helper::currentLanguage()->code . "/" . $FooterMenuLink->link);
                                                    }
                                                } else {
                                                    $this_link_url = url($FooterMenuLink->link);
                                                }
                                                ?>
                                            <li>
                                                <a href="<?php echo e($this_link_url); ?>"><?php echo e(__($link_title)); ?></a>
                                            </li>
                                        <?php else: ?>
                                            
                                            <li><a><?php echo e(__($link_title)); ?></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
                <?php echo $__env->make('frontEnd.includes.subscribe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        </div>
    <?php endif; ?>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <?php
                        $site_title_var = "site_title_" . @Helper::currentLanguage()->code;
                        ?>
                        &copy; <?php echo date("Y") ?> <?php echo e(__('frontend.AllRightsReserved')); ?>

                        . <span><?php echo e(Helper::GeneralSiteSettings($site_title_var)); ?></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <?php if(Helper::GeneralSiteSettings('social_link1')): ?>
                            <li><a href="<?php echo e(Helper::GeneralSiteSettings('social_link1')); ?>" data-placement="top" title="Facebook"
                                   target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if(Helper::GeneralSiteSettings('social_link2')): ?>
                            <li><a href="<?php echo e(Helper::GeneralSiteSettings('social_link2')); ?>" data-placement="top" title="Twitter"
                                   target="_blank"><i
                                        class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        <?php if(Helper::GeneralSiteSettings('social_link4')): ?>
                            <li><a href="<?php echo e(Helper::GeneralSiteSettings('social_link4')); ?>" data-placement="top" title="linkedin"
                                   target="_blank"><i
                                        class="fa fa-linkedin"></i></a></li>
                        <?php endif; ?>
                        <?php if(Helper::GeneralSiteSettings('social_link5')): ?>
                            <li><a href="<?php echo e(Helper::GeneralSiteSettings('social_link5')); ?>" data-placement="top" title="Youtube"
                                   target="_blank"><i
                                        class="fa fa-youtube-play"></i></a></li>
                        <?php endif; ?>
                        <?php if(Helper::GeneralSiteSettings('social_link6')): ?>
                            <li><a href="<?php echo e(Helper::GeneralSiteSettings('social_link6')); ?>" data-placement="top" title="Instagram"
                                   target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                        <?php endif; ?>
                        <?php if(Helper::GeneralSiteSettings('social_link7')): ?>
                            <li><a href="<?php echo e(Helper::GeneralSiteSettings('social_link7')); ?>" data-placement="top" title="Pinterest"
                                   target="_blank"><i
                                        class="fa fa-pinterest"></i></a></li>
                        <?php endif; ?>
                        <?php if(Helper::GeneralSiteSettings('social_link8')): ?>
                            <li><a href="<?php echo e(Helper::GeneralSiteSettings('social_link8')); ?>" data-placement="top" title="Tumblr"
                                   target="_blank"><i
                                        class="fa fa-tumblr"></i></a></li>
                        <?php endif; ?>
                        <?php if(Helper::GeneralSiteSettings('social_link9')): ?>
                            <li><a href="<?php echo e(Helper::GeneralSiteSettings('social_link9')); ?>" data-placement="top" title="Snapchat"
                                   target="_blank"><i
                                        class="fa fa-snapchat"></i></a></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php if(Helper::GeneralSiteSettings('social_link10')): ?>
<a href="https://wa.me/<?php echo e(Helper::GeneralSiteSettings('social_link10')); ?>" class="whatsapp_float" target="_blank" rel="noopener noreferrer">
    <i class="fa fa-whatsapp"></i>
</a>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/includes/footer.blade.php ENDPATH**/ ?>