
<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'googleTagsTab') ? 'active' : ''); ?>"
     id="tab-9">
    <div class="p-a-md"><h5><?php echo __('backend.googleTags'); ?></h5></div>


    <div class="p-a-md col-md-12">
        <div class="form-group">
            <label><?php echo e(__('backend.googleTagsStatus')); ?> : </label>
            <div class="radio">
                <div>
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('google_tags_status','0',$WebmasterSetting->google_tags_status ? false : true , array('id' => 'google_tags_status2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.notActive')); ?>

                    </label>
                </div>
                <div style="margin-top: 5px;">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('google_tags_status','1',$WebmasterSetting->google_tags_status ? true : false , array('id' => 'google_tags_status1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.active')); ?>

                    </label>
                </div>
            </div>
        </div>

        <div
            id="google_tags_div" <?php echo ( !$WebmasterSetting->google_tags_status) ? "style='display:none'":""; ?>>

            <div class="form-group">
                <label><?php echo __('backend.googleTagsContainerId'); ?></label>
                <?php echo Form::text('google_tags_id',$WebmasterSetting->google_tags_id, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')); ?>

            </div>

        </div>


        <div class="form-group">
            <label><?php echo __('backend.googleTagsCode'); ?></label>
            <?php echo Form::textarea('google_analytics_code',$WebmasterSetting->google_analytics_code, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr','rows'=>'7')); ?>

        </div>
        <a href="https://www.google.com/analytics/tag-manager/"
           style="text-decoration: underline" target="_blank"><small><i
                    class="material-icons">&#xe8fd;</i> Google Tag Manager</small></a> &nbsp; <a
            href="https://analytics.google.com/"
            style="text-decoration: underline" target="_blank"><small><i
                    class="material-icons">&#xe8fd;</i> Google Analytics</small></a>

    </div>
</div>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/webmaster/settings/tags.blade.php ENDPATH**/ ?>