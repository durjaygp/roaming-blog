<?php $__env->startSection('title', Helper::GeneralSiteSettings("site_title_".@Helper::currentLanguage()->code)); ?>
<?php $__env->startSection('content'); ?>
    <div class="padding">
        <?php echo e(Form::open(['route'=>['adminFind'],'method'=>'POST', 'class' => "m-b-md" ])); ?>


        <div class="input-group input-group-lg">
            <input type="text" name="q" value="<?php echo e($search_word); ?>" class="form-control"
                   placeholder="<?php echo e(__('backend.search')); ?>..." required>
            <span class="input-group-btn">
        <button class="btn b-a no-shadow white" type="submit"><?php echo e(__('backend.search')); ?></button>
      </span>
        </div>
        <?php echo e(Form::close()); ?>

        <p class="m-b-md">
            <strong><?php echo e($totalcount = count($Topics) + count($Sections) + count($Contacts) + count($Events) + count($Webmails)); ?></strong> <?php echo e(__('backend.resultsFoundFor')); ?>

            : <strong><?php echo e($search_word); ?></strong></p>

        <ul class="nav nav-sm nav-pills nav-active-primary clearfix">
            <?php if(count($Topics)>0): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active_tab==1) ? "active":""); ?>" href data-toggle="tab"
                       data-target="#tab_1"> <?php echo e(__('backend.pages')); ?>

                        <span
                            class="label label-xs primary m-l-xs"><?php echo e(count($Topics)); ?></span></a>
                </li>
            <?php endif; ?>
            <?php if(count($Sections)>0): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active_tab==2) ? "active":""); ?>" href data-toggle="tab"
                       data-target="#tab_2"> <?php echo e(__('backend.categories')); ?>

                        <span
                            class="label label-xs primary m-l-xs"><?php echo e(count($Sections)); ?></span></a>
                </li>
            <?php endif; ?>
            <?php if(count($Contacts)>0): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active_tab==3) ? "active":""); ?>" href data-toggle="tab"
                       data-target="#tab_3"> <?php echo e(__('backend.newsletter')); ?>

                        <span
                            class="label label-xs primary m-l-xs"><?php echo e(count($Contacts)); ?></span></a>
                </li>
            <?php endif; ?>
            <?php if(count($Events)>0): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active_tab==4) ? "active":""); ?>" href data-toggle="tab"
                       data-target="#tab_4"> <?php echo e(__('backend.notesEvents')); ?>

                        <span
                            class="label label-xs primary m-l-xs"><?php echo e(count($Events)); ?></span></a>
                </li>
            <?php endif; ?>
            <?php if(count($Webmails)>0): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($active_tab==5) ? "active":""); ?>" href data-toggle="tab"
                       data-target="#tab_5"> <?php echo e(__('backend.inbox')); ?> <span
                            class="label label-xs primary m-l-xs"><?php echo e(count($Webmails)); ?></span></a>
                </li>
            <?php endif; ?>
        </ul>

        <div class="tab-content">
            <?php if(count($Topics)>0): ?>
                <div class="tab-pane p-v-sm  <?php echo e(($active_tab==1) ? "active":""); ?>" id="tab_1">

                    <?php
                    $title_var = "title_" . @Helper::currentLanguage()->code;
                    $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                    $details_var = "details_" . @Helper::currentLanguage()->code;
                    ?>
                    <?php $__currentLoopData = $Topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if ($Topic->$title_var != "") {
                            $title = $Topic->$title_var;
                        } else {
                            $title = $Topic->$title_var2;
                        }
                        $section = "";
                        try {
                            if ($Topic->webmasterSection->$title_var != "") {
                                $section = $Topic->webmasterSection->$title_var;
                            } else {
                                $section = $Topic->webmasterSection->$title_var2;
                            }
                        } catch (Exception $e) {
                            $section = "";
                        }
                        if (strlen(stripcslashes(strip_tags($Topic->$details_var))) > 300) {
                            $details = mb_substr(stripcslashes(strip_tags($Topic->$details_var)), 0, 300, 'UTF-8') . "...";
                        } else {
                            $details = stripcslashes(strip_tags($Topic->$details_var));
                        }
                        ?>
                        <div class="box m-t p-a-sm">
                            <ul class="list m-b-0">
                                <li class="list-item">
                                    <?php if($Topic->photo_file !=""): ?>
                                        <div class="pull-left pull-none-xs m-r m-b w p-a-xs b-a">
                                            <img src="<?php echo e(asset('uploads/topics/'.$Topic->photo_file)); ?>"
                                                 style="height: 40px" alt="<?php echo e($title); ?>" class="w-full">
                                        </div>
                                    <?php endif; ?>
                                    <div class="clear">
                                        <h5 class="m-a-0 m-b-sm text-primary"><a
                                                href="<?php echo e(route("topicsEdit",["webmasterId"=>$Topic->webmaster_id,"id"=>$Topic->id])); ?>"><?php echo e($title); ?></a>
                                        </h5>
                                        <p class="text-muted m-b-0"><?php echo $details; ?>.. <a href="<?php echo e(route("topicsEdit",["webmasterId"=>$Topic->webmaster_id,"id"=>$Topic->id])); ?>"><strong>[ <?php echo e(__("backend.viewDetails")); ?> ]</strong></a></p>
                                        <a href="<?php echo e(route('topics',$Topic->webmaster_id)); ?>" class="btn btn-xs light dk b-a m-t-sm"><?php echo $section; ?></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            <?php endif; ?>
            <?php if(count($Sections)>0): ?>
                <div class="tab-pane p-v-sm  <?php echo e(($active_tab==2) ? "active":""); ?>" id="tab_2">
                    <div class="box m-t p-a-sm">
                        <ul class="list m-b-0">
                            <?php
                            $title_var = "title_" . @Helper::currentLanguage()->code;
                            $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                            ?>
                            <?php $__currentLoopData = $Sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                if ($Section->$title_var != "") {
                                    $title = $Section->$title_var;
                                } else {
                                    $title = $Section->$title_var2;
                                }
                                ?>
                                <li class="list-item">
                                    <div class="clear">
                                        <h5 class="m-a-0 m-b-sm text-primary"><a
                                                href="<?php echo e(route("categoriesEdit",["webmasterId"=>$Section->webmaster_id,"id"=>$Section->id])); ?>"><?php echo e($title); ?></a>
                                        </h5>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(count($Contacts)>0): ?>
                <div class="tab-pane p-v-sm  <?php echo e(($active_tab==3) ? "active":""); ?>" id="tab_3">
                    <div class="m-t">
                        <div class="row row-sm">
                            <?php $__currentLoopData = $Contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xs-6 col-lg-4">
                                    <div class="list-item box r m-b">

                                        <a href="<?php echo e(route("contactsEdit",["id"=>$Contact->id])); ?>" class="list-left">
                                            <span class="w-40 avatar">
                                            <?php if($Contact->photo!=""): ?>
                                                    <img src="<?php echo e(asset('uploads/contacts/'.$Contact->photo)); ?>"
                                                         class="on b-white bottom">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('uploads/contacts/profile.jpg')); ?>"
                                                         class="on b-white bottom"
                                                         style="opacity: 0.5">
                                                <?php endif; ?>
                                            </span>
                                        </a>

                                        <div class="list-body">
                                            <div class="text-ellipsis"><a
                                                    href="<?php echo e(route("contactsEdit",["id"=>$Contact->id])); ?>"><?php echo e($Contact->first_name); ?> <?php echo e($Contact->last_name); ?></a>
                                            </div>
                                            <small class="text-muted text-ellipsis">
                                                <span dir="ltr"><?php echo e($Contact->phone); ?></span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(count($Events)>0): ?>
                <div class="tab-pane p-v-sm  <?php echo e(($active_tab==4) ? "active":""); ?>" id="tab_4">

                    <?php $__currentLoopData = $Events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="box m-t p-a-sm">
                            <ul class="list m-b-0">

                                <li class="list-item">
                                    <div class="clear">

                                        <h5 class="m-a-0 m-b-sm text-primary">
                                            <span class="label m-r" style="margin-bottom: 5px;">
                                                <?php if($Event->type ==3 || $Event->type ==2): ?>
                                                    <?php echo e(date('d M Y  h:i A', strtotime($Event->start_date))); ?>

                                                <?php else: ?>
                                                    <?php echo e(date('d M Y', strtotime($Event->start_date))); ?>

                                                <?php endif; ?>
                                            </span><br>
                                            <a
                                                href="<?php echo e(route("calendarEdit",["id"=>$Event->id])); ?>"><?php echo e($Event->title); ?></a>

                                        </h5>
                                        <p class="text-muted  m-b-0"><?php echo nl2br($Event->details); ?></p>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            <?php endif; ?>

            <?php if(count($Webmails)>0): ?>
                <div class="tab-pane p-v-sm  <?php echo e(($active_tab==5) ? "active":""); ?>" id="tab_5">

                    <?php $__currentLoopData = $Webmails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Webmail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        if (strlen(stripcslashes(strip_tags($Webmail->details))) > 300) {
                            $details = mb_substr(stripcslashes(strip_tags($Webmail->details)), 0, 300, 'UTF-8') . "...";
                        } else {
                            $details = stripcslashes(strip_tags($Webmail->details));
                        }
                        ?>
                        <div class="box m-t p-a-sm">
                            <ul class="list m-b-0">
                                <li class="list-item">
                                    <div class="clear"><span class="label m-r">
                                                    <?php echo e(date('d M Y', strtotime($Webmail->date))); ?>

                                            </span>

                                        <h5 class="m-a-0 m-b-sm text-primary"><a
                                                href="<?php echo e(route("webmailsEdit",["id"=>$Webmail->id])); ?>"><?php echo e($Webmail->title); ?></a>
                                        </h5>
                                        <p class="text-muted m-b-0"><?php echo $Webmail->details; ?></p>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            <?php endif; ?>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/search.blade.php ENDPATH**/ ?>