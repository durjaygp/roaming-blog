
<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'restfulAPITab') ? 'active' : ''); ?>"
     id="tab-6">
    <div class="p-a-md"><h5><?php echo __('backend.restfulAPI'); ?></h5></div>

    <div class="p-a-md col-md-12">

        <div class="form-group">
            <label><?php echo e(__('backend.APIStatus')); ?> : </label>
            <div class="radio">
                <div>
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('api_status','0',$WebmasterSetting->api_status ? false : true , array('id' => 'api_status2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.notActive')); ?>

                    </label>
                </div>
                <div style="margin-top: 5px;">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('api_status','1',$WebmasterSetting->api_status ? true : false , array('id' => 'api_status1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.active')); ?>

                    </label>
                </div>
            </div>
        </div>

        <div class="form-group" id="api_key_div"
             style="display: <?php echo e(($WebmasterSetting->api_status==1)?"block":"none"); ?>">
            <label><?php echo __('backend.apiURL'); ?> : </label>
            <?php echo Form::text('api_url',route("apiURL"), array('readonly'=>'','class' => 'form-control','dir' => 'ltr')); ?>

            <br>
            <label><?php echo __('backend.APIKey'); ?> : </label>
            <?php echo Form::text('api_key',$WebmasterSetting->api_key, array('id' => 'api_key','readonly'=>'','class' => 'form-control')); ?>

            <a href="javascript:void(0)" onclick="generate_key()">
                <small><?php echo __('backend.APIKeyGenerate'); ?></small>
            </a>
            <br><br>
            <label><?php echo __('backend.apiDocs'); ?> : </label>
            <div class="form-control">
                <a href="http://smartfordesign.net/smartend/documentation/api.html"
                   class="text-info" target="_blank">http://smartfordesign.net/smartend/documentation/api.html</a>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/webmaster/settings/api.blade.php ENDPATH**/ ?>