<meta name="author" content="<?php echo e(URL::to('')); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="<?php echo e(URL::asset('assets/frontend/css/bootstrap.min.css')); ?>?v=<?php echo e(Helper::system_version()); ?>" rel="stylesheet"/>
<link href="<?php echo e(URL::asset('assets/frontend/css/style.css')); ?>?v=<?php echo e(Helper::system_version()); ?>" rel="stylesheet"/>

<?php if( @Helper::currentLanguage()->direction=="rtl"): ?>
    <link href="<?php echo e(URL::asset('assets/frontend/css/rtl.css')); ?>?v=<?php echo e(Helper::system_version()); ?>" rel="stylesheet"/>
<?php endif; ?>

<!-- Favicon and Touch Icons -->
<?php if(Helper::GeneralSiteSettings("style_fav") !=""): ?>
    <link href="<?php echo e(URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_fav"))); ?>" rel="shortcut icon"
          type="image/png">
<?php else: ?>
    <link href="<?php echo e(URL::asset('uploads/settings/nofav.png')); ?>" rel="shortcut icon" type="image/png">
<?php endif; ?>
<?php if(Helper::GeneralSiteSettings("style_apple") !=""): ?>
    <link href="<?php echo e(URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon">
    <link href="<?php echo e(URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon"
          sizes="72x72">
    <link href="<?php echo e(URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon"
          sizes="114x114">
    <link href="<?php echo e(URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>" rel="apple-touch-icon"
          sizes="144x144">
<?php else: ?>
    <link href="<?php echo e(URL::asset('uploads/settings/nofav.png')); ?>" rel="apple-touch-icon">
    <link href="<?php echo e(URL::asset('uploads/settings/nofav.png')); ?>" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php echo e(URL::asset('uploads/settings/nofav.png')); ?>" rel="apple-touch-icon" sizes="114x114">
    <link href="<?php echo e(URL::asset('uploads/settings/nofav.png')); ?>" rel="apple-touch-icon" sizes="144x144">
<?php endif; ?>

<?php if(@$Topic->photo_file !=""): ?>
    <meta property='og:image' content='<?php echo e(URL::asset('uploads/topics/'.@$Topic->photo_file)); ?>'/>
<?php elseif(Helper::GeneralSiteSettings("style_apple") !=""): ?>
    <meta property='og:image'
          content='<?php echo e(URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple"))); ?>'/>
<?php else: ?>
    <meta property='og:image'
          content='<?php echo e(URL::asset('uploads/settings/nofav.png')); ?>'/>
<?php endif; ?>
<meta property="og:site_name" content="<?php echo e(Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code)); ?>">
<meta property="og:url" content="<?php echo e(url()->full()); ?>"/>
<meta property="og:type" content="website"/>

<?php if(!empty($Topic)): ?>
    <link rel="canonical" href="<?php echo e(Helper::topicURL($Topic->id)); ?>">
<?php elseif(!empty($CurrentCategory)): ?>
    <link rel="canonical" href="<?php echo e(Helper::categoryURL(@$CurrentCategory->id)); ?>">
<?php elseif(Route::currentRouteName() == "HomePage"): ?>
    <link rel="canonical" href="<?php echo e(route("Home")); ?>">
<?php else: ?>
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
<?php endif; ?>

<?php if(Helper::GeneralSiteSettings("css")!=""): ?>
    <style type="text/css">
        <?php echo Helper::GeneralSiteSettings("css"); ?>

    </style>
<?php endif; ?>

<?php if(@$WebmasterSettings->google_tags_status && @$WebmasterSettings->google_tags_id !=""): ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?php echo @$WebmasterSettings->google_tags_id; ?>');</script>
    <!-- End Google Tag Manager -->
<?php endif; ?>
<?php /**PATH /var/www/vhosts/kelimelodi.com/new.kelimelodi.com/core/resources/views/frontEnd/includes/headResult.blade.php ENDPATH**/ ?>