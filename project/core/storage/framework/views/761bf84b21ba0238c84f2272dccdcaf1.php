<div class="tab-pane <?php echo e(( Session::get('active_tab') == 'systemUpdate') ? 'active' : ''); ?>"
     id="tab-13">
    <div class="p-a-md"><h5><?php echo __('backend.systemLicenseAndUpdate'); ?></h5></div>
    <div class="p-a-md col-md-12">

        <?php if(Helper::GeneralWebmasterSettings("license") && Helper::GeneralWebmasterSettings("purchase_code")!=""): ?>
            <div id="system_updates"></div>
        <?php else: ?>
            <h5><?php echo __('backend.activateLicenceForUpdate'); ?></h5>
            <hr>
            <div class="form-group">
                <label><?php echo __('backend.domainName'); ?></label>
                <?php echo Form::text('domain',@$_SERVER['SERVER_NAME'], array('disabled' => '','class' => 'form-control', 'dir'=>trans('backLang.ltr'))); ?>

            </div>

            <div class="form-group">
                <label><?php echo __('backend.purchaseCode'); ?></label>
                <?php echo Form::textarea('purchase_code',"", array('id' => 'purchase_code','class' => 'form-control', 'dir'=>'ltr','rows'=>'3')); ?>

                <div class="m-t-xs">
                    <a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-"
                       target="_blank"><i class="material-icons">&#xe88f;</i> <?php echo __('backend.howToGetPurchaseCode'); ?></a>
                </div>
            </div>

            <button type="button" class="btn primary" id="purchase_btn"><i class="material-icons">&#xe31b;</i> <?php echo e(__('backend.activateNow')); ?></button>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/dashboard/webmaster/settings/update.blade.php ENDPATH**/ ?>