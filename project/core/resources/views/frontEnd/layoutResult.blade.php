<!DOCTYPE html>
<html lang="{{ @Helper::currentLanguage()->code }}" dir="{{ @Helper::currentLanguage()->direction }}">
<head>
    <meta charset="utf-8">
    @include('frontEnd.includes.headResult')
    @yield('metaHead')
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

</body>
</html>
