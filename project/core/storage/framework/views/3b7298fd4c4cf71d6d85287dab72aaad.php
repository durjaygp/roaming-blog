<?php if(Helper::GeneralWebmasterSettings("header_menu_id") >0): ?>
    <?php
    // Get list of footer menu links by group Id
    $HeaderMenuLinks = Helper::MenuList(Helper::GeneralWebmasterSettings("header_menu_id"));
    ?>
    <?php if(count($HeaderMenuLinks)>0): ?>

        <?php
        // Current Full URL
        $fullPagePath = Request::url();
        // Char Count of Backend folder Plus 1
        $envAdminCharCount = strlen(env('BACKEND_PATH')) + 1;
        // URL after Root Path EX: admin/home
        $urlAfterRoot = substr($fullPagePath, strpos($fullPagePath, env('BACKEND_PATH')) + $envAdminCharCount);
        ?>
        <?php
        $category_title_var = "title_" . @Helper::currentLanguage()->code;
        $category_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
        $slug_var = "seo_url_slug_" . @Helper::currentLanguage()->code;
        $slug_var2 = "seo_url_slug_" . env('DEFAULT_LANGUAGE');
        ?>
        <div class="navbar-collapse collapse" id="collapseHeader">
            <ul class="nav navbar-nav">
                <?php $__currentLoopData = $HeaderMenuLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HeaderMenuLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    if ($HeaderMenuLink->$category_title_var != "") {
                        $link_title = $HeaderMenuLink->$category_title_var;
                    } else {
                        $link_title = $HeaderMenuLink->$category_title_var2;
                    }
                    ?>
                    <?php if($HeaderMenuLink->type==3): ?>
                        <?php
                        // Section with drop list
                        ?>
                        <li class="dropdown">
                            <a href="javascript:void(0)"><?php echo e($link_title); ?> <i
                                    class="fa fa-angle-down"></i></a>

                            <?php if(count($HeaderMenuLink->webmasterSection->sections) >0): ?>
                                
                                <ul class="dropdown-menu">
                                    <?php $__currentLoopData = $HeaderMenuLink->webmasterSection->sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $MnuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($MnuCategory->father_id ==0): ?>
                                            <?php if($MnuCategory->status): ?>
                                                <?php
                                                if ($MnuCategory->$category_title_var != "") {
                                                    $category_title = $MnuCategory->$category_title_var;
                                                } else {
                                                    $category_title = $MnuCategory->$category_title_var2;
                                                }
                                                ?>
                                                <li>
                                                    <a href="<?php echo e(Helper::categoryURL($MnuCategory->id)); ?>">
                                                        <?php if($MnuCategory->icon !=""): ?>
                                                            <i class="fa <?php echo e($MnuCategory->icon); ?>"></i> &nbsp;
                                                        <?php endif; ?>
                                                        <?php echo e($category_title); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php elseif(count($HeaderMenuLink->webmasterSection->topics) >0): ?>
                                
                                <ul class="dropdown-menu">
                                    <?php $__currentLoopData = $HeaderMenuLink->webmasterSection->topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $MnuTopic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($MnuTopic->status): ?>
                                            <?php if($MnuTopic->expire_date =='' || ($MnuTopic->expire_date !='' && $MnuTopic->expire_date >= date("Y-m-d"))): ?>
                                                <?php
                                                if ($MnuTopic->$category_title_var != "") {
                                                    $category_title = $MnuTopic->$category_title_var;
                                                } else {
                                                    $category_title = $MnuTopic->$category_title_var2;
                                                }
                                                ?>
                                                <li>
                                                    <a href="<?php echo e(Helper::topicURL($MnuTopic->id)); ?>">
                                                        <?php if($MnuTopic->icon !=""): ?>
                                                            <i class="fa <?php echo e($MnuTopic->icon); ?>"></i> &nbsp;
                                                        <?php endif; ?>
                                                        <?php echo e($category_title); ?></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>

                        </li>
                    <?php elseif($HeaderMenuLink->type==2): ?>
                        <?php
                        // Section Link
                        ?>
                        <li>
                            <a href="<?php echo e(Helper::sectionURL($HeaderMenuLink->cat_id)); ?>"><?php echo e($link_title); ?></a>
                        </li>
                    <?php elseif($HeaderMenuLink->type==1): ?>
                        <?php
                        // Direct Link
                        $this_link_url = "";
                        if ($HeaderMenuLink->link != "") {
                            if (@Helper::currentLanguage()->code != env('DEFAULT_LANGUAGE')) {
                                $f3c = mb_substr($HeaderMenuLink->link, 0, 3);
                                if ($f3c == "htt" || $f3c == "www") {
                                    $this_link_url = $HeaderMenuLink->link;
                                } else {
                                    $this_link_url = url(@Helper::currentLanguage()->code . "/" . $HeaderMenuLink->link);
                                }
                            } else {
                                $this_link_url = url($HeaderMenuLink->link);
                            }
                        }
                        ?>
                        <li><a href="<?php echo e($this_link_url); ?>"><?php echo e($link_title); ?></a></li>
                    <?php else: ?>
                        <?php
                        // Main title ( have drop down menu )
                        ?>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown"
                               data-hover="dropdown"
                               data-delay="0" data-close-others="true"><?php echo e($link_title); ?></a>
                            <?php if(count($HeaderMenuLink->subMenus) >0): ?>
                                <ul class="dropdown-menu">
                                    <?php $__currentLoopData = $HeaderMenuLink->subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        if ($subMenu->$category_title_var != "") {
                                            $subMenu_title = $subMenu->$category_title_var;
                                        } else {
                                            $subMenu_title = $subMenu->$category_title_var2;
                                        }
                                        ?>
                                        <?php if($subMenu->type==3): ?>
                                            <?php
                                            // sub menu - Section will drop list
                                            ?>
                                            <li><a href="javascript:void(0)" class="dropdown-toggle"
                                                   data-toggle="dropdown"
                                                   data-hover="dropdown" data-delay="0"
                                                   data-close-others="true"><?php echo e($subMenu_title); ?></a>
                                                <?php
                                                // make list
                                                // - check is categories list
                                                // - or pages list
                                                ?>

                                                <?php if(count($subMenu->webmasterSection->sections) >0): ?>
                                                    
                                                    <ul class="dropdown-menu">
                                                        <?php $__currentLoopData = $subMenu->webmasterSection->sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SubMnuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($SubMnuCategory->father_id ==0): ?>
                                                                <?php if($SubMnuCategory->status): ?>
                                                                    <?php
                                                                    if ($SubMnuCategory->$category_title_var != "") {
                                                                        $SubMnuCategory_title = $SubMnuCategory->$category_title_var;
                                                                    } else {
                                                                        $SubMnuCategory_title = $SubMnuCategory->$category_title_var2;
                                                                    }
                                                                    ?>
                                                                    <li>
                                                                        <a href="<?php echo e(Helper::categoryURL($SubMnuCategory->id)); ?>">
                                                                            <?php if($SubMnuCategory->icon !=""): ?>
                                                                                <i class="fa <?php echo e($SubMnuCategory->icon); ?>"></i>
                                                                                &nbsp;
                                                                            <?php endif; ?>
                                                                            <?php echo e($SubMnuCategory_title); ?></a>
                                                                    </li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php elseif(count($subMenu->webmasterSection->topics) >0): ?>
                                                    
                                                    <ul class="dropdown-menu">
                                                        <?php $__currentLoopData = $subMenu->webmasterSection->topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SubMnuTopic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($SubMnuTopic->status): ?>
                                                                <?php if($SubMnuTopic->expire_date =='' || ($SubMnuTopic->expire_date !='' && $SubMnuTopic->expire_date >= date("Y-m-d"))): ?>
                                                                    <?php
                                                                    if ($SubMnuTopic->$category_title_var != "") {
                                                                        $SubMnuTopic_title = $SubMnuTopic->$category_title_var;
                                                                    } else {
                                                                        $SubMnuTopic_title = $SubMnuTopic->$category_title_var2;
                                                                    }
                                                                    ?>
                                                                    <li>
                                                                        <a href="<?php echo e(Helper::topicURL($SubMnuTopic->id)); ?>"><?php echo e($SubMnuTopic_title); ?></a>
                                                                    </li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php endif; ?>

                                            </li>
                                        <?php elseif($subMenu->type==2): ?>
                                            <?php
                                            // sub menu - Section Link
                                            ?>
                                            <li>
                                                <a href="<?php echo e(Helper::sectionURL($subMenu->cat_id)); ?>"><?php echo e($subMenu_title); ?></a>
                                            </li>
                                        <?php elseif($subMenu->type==1): ?>
                                            <?php
                                            // sub menu - Direct Link
                                            $this_link_url = "";
                                            if ($subMenu->link != "") {
                                                if (@Helper::currentLanguage()->code != env('DEFAULT_LANGUAGE')) {
                                                    $f3c = mb_substr($subMenu->link, 0, 3);
                                                    if ($f3c == "htt" || $f3c == "www") {
                                                        $this_link_url = $subMenu->link;
                                                    } else {
                                                        $this_link_url = url(@Helper::currentLanguage()->code . "/" . $subMenu->link);
                                                    }
                                                } else {
                                                    $this_link_url = url($subMenu->link);
                                                }
                                            }
                                            ?>
                                            <li><a href="<?php echo e($this_link_url); ?>"><?php echo e($subMenu_title); ?></a>
                                            </li>
                                        <?php else: ?>
                                            <?php
                                            // sub menu - Main title ( have drop down menu )
                                            ?>
                                            <li><a href="javascript:void(0)"><?php echo e($subMenu_title); ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/includes/menu.blade.php ENDPATH**/ ?>