@extends('frontend.master')
@section('title')
    RYPEC Solar - Reduce Your Property's Energy Costs
@endsection
@section('content')
    <!-- home slider-->
    <section class="section bg-gradient-blue-white novi-background position-relative overflow-hidden" data-preset='{"title":"Slider","category":"slider","reload":true,"id":"slider"}'>
        <div class="section-title-custom text-outline"></div>
        <div class="swiper-container swiper-vertical-nav" data-swiper="{&quot;simulateTouch&quot;:false,&quot;autoplay&quot;:true}">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-image min-vh-100 section-lg" style="background-image: url( images/SLIDERYPEC3.png )">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10 col-md-9 col-lg-7-custom col-xl-6-custom">
                                <h7>Reduce Your Property's Energy Costs</h7>
                                <p style="color: white;">See financing options for a lower monthly payment than your electric bill with $0 down.</p>
                                <div class="group-20 offset-md d-flex align-items-center" data-lightgallery="{&quot;selector&quot;:&quot;.btn-play&quot;}"><a class="btn btn-lg btn-primary" href="quote.html">Get a quote</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-image min-vh-100 section-lg" style="background-image: url( images/SLIDERYPEC2.png )">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10 col-md-9 col-lg-7-custom col-xl-6-custom">
                                <h7>Calculate Your Savings!</h7>
                                <p style="color: white;">Click the link below to see how much you can save with solar.</p>
                                <div class="group-20 offset-md d-flex align-items-center" data-lightgallery="{&quot;selector&quot;:&quot;.btn-play&quot;}"><a class="btn btn-lg btn-primary" href="https://sunroof.withgoogle.com/building/35.323807268070155/-119.0366075870179/#?f=buy">Calculate</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- about us-->
    <section class="section bg-white section-lg novi-background" data-preset='{"title":"About Us","category":"content","reload":true,"id":"about-us"}'>
        <div class="container">
            <div class="row row-50 justify-content-between align-items-center">
                <div class="col-lg-6" data-animate='{"class":"fadeInLeft"}'>
                    <div class="pr-xl-5">
                        <h5 class="text-primary">About Us</h5>
                        <h2>RYPEC Makes Solar Simple.</h2>
                        <p class="block block-sm">From designing your system and completing permits to installing your panels with precision, RYPEC has you covered. If you're looking for a break from national chains and high-pressure sales tactics, give us a call.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-animate='{"class":"fadeInRight"}'>
                    <div class="figure figure-with-counter"><img class="figure-with-counter-img" src="images/SLIDERYPEC4-_1_.avif" alt="" width="554" height="453"/>
                        <div class="figure-counter-box">
                            <!-- Counter-->
                            <div class="counter counter-boxed counter-boxed-dark">
                                <div class="counter-body">
                                    <div class="counter-value h2"><span data-counter="">2</span><span class="counter-postfix">k+</span>
                                    </div>
                                    <p class="counter-title">Installed Panels</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features-->
    <section class="section bg-transparent novi-background" data-preset='{"title":"Offer","category":"carousel","reload":false,"id":"offer"}'>
        <div class="container">
            <div class="row align-items-center slick-creative novi-disabled">
                <div class="col-md-7 col-xl-6 d-md-flex flex-md-row-reverse">
                    <div class="slick-slider slider-for slider-images" data-slick='{"arrows":false,"asNavFor":".slider-nav","adaptiveHeight":true}'>
                        <div class="text-right"><img src="images/Group 557 (3).png" alt="" width="930" height="779"/>
                        </div>
                        <div class="text-right"><img src="images/Roofer.png" alt="" width="930" height="779"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xl-6 pt-5" style="padding-bottom: 14.2%">
                    <div class="pl-4">
                        <h5 class="text-primary">Our Services</h5>
                        <div class="slick-slider slider-nav" data-slick='{"arrows":false,"asNavFor":".slider-for","autoplay":true,"autoplaySpeed":3000,"focusOnSelect":true,"variableWidth":true}'>
                            <div class="slick-dot">Solar Installation</div>
                            <div class="slick-dot">Roofing</div>
                        </div>
                    </div>
                    <div class="slick-slider slider-for" data-slick='{"arrows":false,"asNavFor":".slider-nav"}'>
                        <div class="slick-custom-slide">
                            <p>Our solar installations promise efficiency and maximum energy savings year-round.</p><a class="btn btn-lg btn-primary" href="quote.html">Get a Quote</a>
                        </div>
                        <div class="slick-custom-slide">
                            <p>New England's roofs, perfected. We offer superior craftsmanship for any structure.</p><a class="btn btn-lg btn-primary" href="quote.html">Get a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Why Choose Us","category":"content box","reload":false,"id":"why-choose-us"}'>
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-6">
                    <h5 class="text-primary">Why choose us?</h5>
                    <h3>We're dedicated to giving you the best service</h3>
                    <p>RYPEC is dedicated to giving you the best service possible by keeping our solutions simple and effective. We listen and communicate effectively to complete your project the right way.</p>
                </div>
                <div class="col-xs-10 col-md-8 col-lg-6"><img src="images/RYPEC5.avif" alt="" width="620" height="460"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Child themes-->
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Custom service","category":"content","reload":true,"id":"service"}'>
        <div class="container">
            <div class="row row-15 align-items-center flex-md-row-reverse">
                <div class="col-sm-6 col-md-5" data-animate='{"class":"fadeInRight"}'>
                    <h5 class="text-primary">Customer Service</h5>
                    <h2>Committed to customers’ satisfaction</h2>
                    <p class="block block-sm">Our team is aimed at providing the best level of service with every project.</p>
                </div>
                <div class="col-sm-6 col-md-7" data-animate='{"class":"fadeInLeft"}'><img src="images/Group 558.png" alt="" width="530" height="630"/>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Custom Map","category":"map","reload":false,"id":"custom-map"}'>
        <div class="container text-center">
            <div class="custom-map">
                <div class="map-inner">
                    <img src="images/us 1.png" alt="" width="967" height="625"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Users-->
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Users","category":"counter, call to action","reload":false,"id":"users"}'>
        <div class="container">
            <div class="text-center" data-animate='{"class":"fadeInUp"}'>
                <h2>New Englands #1 solar & roofing company</h2></h2>
            </div>
        </div>
    </section>
    <!-- Call to action-->
    <section class="section section-lg bg-gradient-blue-white text-center text-lg-left novi-background" data-preset='{"title":"Call To Action","category":"call to action","reload":false,"id":"call-to-action-7"}'>
        <div class="container">
            <div class="row row-30 align-items-lg-center justify-content-lg-between">
                <div class="col-lg-8" data-animate='{"class":"fadeInLeft"}'>
                    <h3>Reduce your property's energy costs</h3>
                    <p class="big font-weight-normal">Save on electric bills and improve your quality of life with RYPEC Solar.</p>
                </div>
                <div class="col-lg-auto" data-animate='{"class":"fadeInRight"}'><a class="btn btn-lg btn-secondary" href="quote.html">Get a Quote</a></div>
            </div>
        </div>
    </section>

@endsection
