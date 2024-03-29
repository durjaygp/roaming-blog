<!DOCTYPE html>
<html lang="{{ @Helper::currentLanguage()->code }}" dir="{{ @Helper::currentLanguage()->direction }}">
<head>
    @include('frontEnd.includes.headFrontEnd')
    @include('frontEnd.includes.colors')
    @include('frontEnd.includes.keliheader')
    @include('frontEnd.includes.kelifooter')
</head>
<?php
$bdy_class = "";
$bdy_bg_color = "";
$bdy_bg_image = "";
if (Helper::GeneralSiteSettings("style_type")) {
    $bdy_class = "boxed-layout";
    if (Helper::GeneralSiteSettings("style_bg_type") == 0) {
        $bdy_bg_color = "background-color: #000;";
        if (Helper::GeneralSiteSettings("style_bg_color") != "") {
            $bdy_bg_color = "background-attachment: fixed;background-color: " . Helper::GeneralSiteSettings("style_bg_color") . ";";
        }
        $bdy_bg_image = "";
    } elseif (Helper::GeneralSiteSettings("style_bg_type") == 1) {
        $bdy_bg_color = "";
        $bdy_bg_image = "background-attachment: fixed;background-image:url(" . URL::to('uploads/pattern/' . Helper::GeneralSiteSettings("style_bg_pattern")) . ")";
    } elseif (Helper::GeneralSiteSettings("style_bg_type") == 2) {
        $bdy_bg_color = "";
        $bdy_bg_image = "background-attachment: fixed;background-image:url(" . URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_bg_image")) . ")";
    }
}
?>

<body class="js {!!  $bdy_class !!}" style=" {!!  $bdy_bg_color !!} {!! $bdy_bg_image !!}">
<div id="wrapper">
    <!-- start header -->
    @include('frontEnd.includes.header')

    <!-- end header -->

    <!-- Content Section -->
    <div class="contents">
        @yield('content')
    </div>
    <!-- end of Content Section -->

    <!-- start footer -->
    @include('frontEnd.includes.footer')
    <!-- end footer -->
</div>
@include('frontEnd.includes.foot')
@yield('footerInclude')

@if(Helper::GeneralSiteSettings("style_preload"))
    <div id="preloader"></div>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#preloader').fadeOut('slow', function () {
                $(this).remove();
            });
        });
    </script>
@endif
@if(Helper::GeneralSiteSettings("style_header"))
    <script type="text/javascript">
        window.onscroll = function () {
            myFunction()
        };
        var header = document.getElementsByTagName("header")[0];
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
@endif
<script>
    document.body.style.padding = "0 0 " + document.getElementById('footer').offsetHeight + "px";
    document.getElementById('footer').style.position = 'absolute';
    document.getElementById('footer').style.bottom = '0px';
    document.getElementById('footer').style.width = '100%';
</script>
<script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/e664aaeabe4fa867f795dcdaaab2e15c.js"></script>
<script>
    window.onload = setTimeout(function() {
        $('<script async src="https://www.googletagmanager.com/gtag/js?id=G-6JFJKF0QCK"></' + 'script>').appendTo(document.body);
    },8000);
</script>
<script>
    window.onload = setTimeout(function() {
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-6JFJKF0QCK');
    },8000);
</script>


</body>
</html>
