<?php if(Helper::GeneralSiteSettings("style_subscribe")): ?>
    <div class="col-lg-<?php echo e($bx4w); ?>">
        <div class="widget">
            <h4 class="widgetheading"><i class="fa fa-envelope-open"></i>&nbsp; <?php echo e(__('frontend.newsletter')); ?></h4>
            <p><?php echo e(__('frontend.subscribeToOurNewsletter')); ?></p>
            <div id="subscribesendmessage"><i class="fa fa-check-circle"></i> &nbsp;<?php echo e(__('frontend.subscribeToOurNewsletterDone')); ?></div>
            <div id="subscribeerrormessage"><?php echo e(__('frontend.youMessageNotSent')); ?></div>

            <?php echo e(Form::open(['route'=>['Home'],'method'=>'POST','class'=>'subscribeForm'])); ?>

            <div class="form-group">
                <?php echo Form::text('subscribe_name',"", array('placeholder' => __('frontend.yourName'),'class' => 'form-control','id'=>'subscribe_name', 'data-msg'=> __('frontend.enterYourName'),'data-rule'=>'minlen:4')); ?>

                <div class="alert alert-warning validation"></div>
            </div>
            <div class="form-group">
                <?php echo Form::email('subscribe_email',"", array('placeholder' => __('frontend.yourEmail'),'class' => 'form-control','id'=>'subscribe_email', 'data-msg'=> __('frontend.enterYourEmail'),'data-rule'=>'email')); ?>

                <div class="validation"></div>
            </div>
            <button type="submit" class="btn btn-info"><?php echo e(__('frontend.subscribe')); ?></button>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/includes/subscribe.blade.php ENDPATH**/ ?>