<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'googleMapsTab') ? 'active' : ''); ?>"
     id="tab-10">
    <div class="p-a-md"><h5><?php echo __('backend.googleMaps'); ?></h5></div>


    <div class="p-a-md col-md-12">
        <div class="form-group">
            <label><?php echo e(__('backend.googleMapsStatus')); ?> : </label>
            <div class="radio">
                <div>
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('google_maps_status','0',(env("GOOGLE_MAPS_KEY","") !="") ? false : true , array('id' => 'google_maps_status2','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.notActive')); ?>

                    </label>
                </div>
                <div style="margin-top: 5px;">
                    <label class="ui-check ui-check-md">
                        <?php echo Form::radio('google_maps_status','1',(env("GOOGLE_MAPS_KEY","") !="") ? true : false , array('id' => 'google_maps_status1','class'=>'has-value')); ?>

                        <i class="dark-white"></i>
                        <?php echo e(__('backend.active')); ?>

                    </label>
                </div>
            </div>
        </div>

        <div
            id="google_maps_div" <?php echo ( env("GOOGLE_MAPS_KEY","") =="") ? "style='display:none'":""; ?>>

            <div class="form-group">
                <label><?php echo __('backend.googleMapsKey'); ?></label>
                <?php echo Form::text('google_maps_key',env("GOOGLE_MAPS_KEY",""), array('placeholder' => '','class' => 'form-control','id' => 'google_maps_key', 'dir'=>'ltr')); ?>

            </div>

        </div>

        <a href="https://developers.google.com/maps/documentation/javascript/get-api-key"
           style="text-decoration: underline" target="_blank">
            <small><i
                    class="material-icons">&#xe8fd;</i> Google Maps</small>
        </a>

    </div>
</div>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/webmaster/settings/maps.blade.php ENDPATH**/ ?>