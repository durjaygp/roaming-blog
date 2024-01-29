<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description"
          content="RYPEC Solar offers roofing services, solar installation, and financing for solar systems. Save money on your monthly energy bill with our guaranteed savings.">
    <meta name="keywords"
          content="solar, roofing, solar energy costs, solar paneling, costs for solar panels, roof shingle solar, solar and solar, solar generators, solar systems, solar panels" />
    <meta property="og:title" content="RYPEC Solar - Reduce Your Property's Energy Costs">
    <meta property="og:description"
          content="RYPEC Solar offers roofing services, solar installation, and financing for solar systems. Save money on your monthly energy bill with our guaranteed savings.">
    <meta property="og:image" content="https://www.rypecsolar.com/images/Group 553.png">
    <meta property="og:url" content="https://www.rypecsolar.com">
    <link rel="icon" href="images/Group 553.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('components/base/base.css') }}">
    <script src="{{ asset('components/base/core.min.js') }} "></script>
    <script src="{{ asset('components/base/script.js') }} "></script>

    <!-- Godaddy SSL Code -->
    <span id="siteseal">
        <script async type="text/javascript"
                src="https://seal.godaddy.com/getSeal?sealID=1pMXzv47aASqWWCTYfOeW5c4YT3zM3WJXbjl8jqbFTkGlg1kZe1uhISxl93K"></script>
    </span>
    <!-- End Godaddy SSL Code -->

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }
        (window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '186414690782510');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=186414690782510&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5HQ03RTSQZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-5HQ03RTSQZ');
    </script>
    <!-- End Google tag (gtag.js) -->

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "name": "RYPEC Solar",
        "address": {
            "@type": "400 Warwick Ave, Warwick, RI 02888, USA",
            "streetAddress": "400 Warwick Ave",
            "addressLocality": "Warwick",
            "addressRegion": "RI",
            "postalCode": "02888",
            "addressCountry": "USA"
        },
        "telephone": "+1 401-515-5333",
        "image": "https://www.rypecsolar.com/images/Group 553.png",
        "description": "RYPEC Solar specializes in solar installation and roofing services, providing cost-effective energy solutions in New England."
    }
    </script>

    <!-- Additional Meta Tags -->
    <meta name="author" content="RYPEC Solar">
    <meta name="copyright" content="Copyright © 2023 RYPEC Solar">
    <meta name="theme-color" content="#ffffff"> <!-- Replace with your brand color -->


</head>

<body>
<div class="page">
    <!--RD Navbar-->
    @include('frontend.include.header')

    @yield('content')



    @include('frontend.include.footer')
</div>

<div class="page-loader context-dark">
    <div class="page-loader-container"><img class="page-loader-logo" src="{{asset('images/Group-552.png')}}" alt="RYPEC"
                                            width="167" height="49" />
        <!--svg.page-loader-progress( x='0px', y='0px', width='100', height='100', viewBox='0 0 100 100', style='visibility: hidden;' )-->
        <!--	circle.page-loader-circle.clipped( cx='50', cy='50', r='48' )-->
    </div>
</div>
</body>
</html>
