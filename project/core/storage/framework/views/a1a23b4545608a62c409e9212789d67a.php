<a href="#" title="<?php echo e(__('frontend.toTop')); ?>" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<script type="text/javascript">
    var page_dir = "<?php echo e(@Helper::currentLanguage()->direction); ?>";
</script>
<script src="<?php echo e(URL::asset('assets/frontend/js/jquery.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/jquery.easing.1.3.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/bootstrap.min.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/jquery.fancybox.pack.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/jquery.fancybox-media.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/google-code-prettify/prettify.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/portfolio/jquery.quicksand.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/portfolio/setting.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/jquery.flexslider.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/animate.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/custom.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/owl-carousel/owl.carousel.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/Chart.min.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>

<script src="<?php echo e(URL::asset('assets/frontend/js/bootstrap-select.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>

<script src="<?php echo e(URL::asset('assets/frontend/js/i18n/defaults.min.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/select2.min.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('assets/frontend/js/moment.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/dashboard/js/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')); ?>?v=<?php echo e(Helper::system_version()); ?>"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var buttonHeader = document.getElementById('buttonHeaderMobile');
        var navbarCollapse = document.getElementById('collapseHeader');
        var isOpen = false;
        function toggleMenu() {
            isOpen = !isOpen;
            if (isOpen === true) {
                navbarCollapse.style.setProperty('display', 'block', 'important');
            } else {
                navbarCollapse.style.setProperty('display', 'none', 'important');
            }
            // Add an event listener for the window resize event
            window.addEventListener('resize', function () {
                // Check the window width
                if (window.innerWidth >= 768) {
                    navbarCollapse.style.setProperty('display', 'block', 'important');
                }else {
                    navbarCollapse.style.setProperty('display', 'none', 'important');
                }
            });
        }
        buttonHeader.addEventListener('click', toggleMenu);
    });

    $(".select2").select2();
    $(".select2-multiple").select2({
        tags: true
    });
    $(function () {
        $('.date').datetimepicker({
            format: 'YYYY-MM-DD',
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            },
            allowInputToggle: true
        });
        $('.dateTime').datetimepicker({
            format: 'YYYY-MM-DD hh:mm A',
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            },
            allowInputToggle: true
        });
    });
</script>

<?php if(Helper::GeneralSiteSettings("style_subscribe")): ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            "use strict";

            //Subscribe
            $('form.subscribeForm').submit(function () {

                var f = $(this).find('.form-group'),
                    ferror = false,
                    emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

                f.children('input').each(function () { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'email':
                                if (!emailExp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'checked':
                                if (!i.attr('checked')) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'regexp':
                                exp = new RegExp(exp);
                                if (!exp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html('<i class=\"fa fa-info\"></i> &nbsp;' + ( ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '' )).show();
                        !ierror ? i.next('.validation').hide() : i.next('.validation').show();
                    }
                });
                if (ferror) return false;
                else var str = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route("subscribeSubmit")); ?>",
                    data: str,
                    success: function (msg) {
                        if (msg == 'OK') {
                            $("#subscribesendmessage").addClass("show");
                            $("#subscribeerrormessage").removeClass("show");
                            $("#subscribe_name").val('');
                            $("#subscribe_email").val('');
                        }
                        else {
                            $("#subscribesendmessage").removeClass("show");
                            $("#subscribeerrormessage").addClass("show");
                            $('#subscribeerrormessage').html(msg);
                        }

                    }
                });
                return false;
            });

        });
    </script>
<?php endif; ?>


<?php if(@$WebmasterSettings->google_tags_status && @$WebmasterSettings->google_tags_id !=""): ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=<?php echo @$WebmasterSettings->google_tags_id; ?>"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php endif; ?>
<?php if(@$WebmasterSettings->google_analytics_code !=""): ?>
    <?php echo @$WebmasterSettings->google_analytics_code; ?>

<?php endif; ?>


<?php
if (@$PageTitle == "") {
    $PageTitle = Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code);
}
?>
<?php echo Helper::SaveVisitorInfo($PageTitle); ?>

<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/includes/foot.blade.php ENDPATH**/ ?>