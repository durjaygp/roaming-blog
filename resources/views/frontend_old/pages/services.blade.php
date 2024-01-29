@extends('frontend.master')
@section('title')
    RYPEC Solar - Services
@endsection
@section('content')


    <!-- Intro-->
    <section class="section section-sm section-layer context-dark pb-1" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-4"}'>
        <div class="bg-layer bg-image overlay-dark overlay-dark-08 novi-background" style="bottom: 9.4%; background-image: url({{asset('images/RYPEC-2.png')}})"></div>
        <div class="container">
            <!-- Breadcrumb-->
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Services</span></li>
            </ul>
            <h4>Our Services</h4>
            <div class="row row-30 mt-4">
                <div class="col-xs-10 col-sm-5" style="padding-top: 8.6%;">
                    <h2>Seamless solutions, superior service</h2>
                </div>
                <div class="col-xs-10 col-sm-7"><img src="{{asset('images/RYPEC-1.png')}}" alt="" width="730" height="730"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Residential Solar Services -->
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Residential Solar Services","category":"blurb","reload":false,"id":"residential-solar-services"}'>
        <div class="container">
            <h5 class="text-primary">Residential Solar Services</h5>
            <h3>Empowering Your Home with Sustainable Solar Energy</h3>
            <div class="row row-offset-lg row-30 row-md-40">
                <div class="col-sm-6 col-lg-4">
                    <!-- Energy Efficiency Consultation -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-chart-bars novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Energy Efficiency Consultation</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Providing advice on improving overall home energy efficiency in conjunction with solar installations.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Solar System Design -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-pencil-ruler novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Solar System Design</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Custom designing solar systems based on specific energy needs and roof layout.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Solar Panel Installation -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-sun novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Solar Panel Installation</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Installing photovoltaic (PV) panels on homes to harness solar energy.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Solar Panel Maintenance and Repair -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-wrench novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Solar Panel Maintenance and Repair</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Regular maintenance, cleaning, and repair services for solar panel systems.</div>
                    </article>
                </div>
                <!-- Additional services can be added in similar format -->
            </div>
        </div>
    </section>


    <!-- Residential Roofing Services -->
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Residential Roofing Services","category":"blurb","reload":false,"id":"residential-roofing-services"}'>
        <div class="container">
            <h5 class="text-primary">Residential Roofing Services</h5>
            <h3>Reliable and Durable Roofing Solutions for Your Home</h3>
            <div class="row row-offset-lg row-30 row-md-40">
                <div class="col-sm-6 col-lg-4">
                    <!-- Roof Inspection -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-magnifier novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Roof Inspection</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Conducting thorough inspections to assess roof condition, especially after severe weather events.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Roof Repair and Maintenance -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-hammer2 novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Roof Repair and Maintenance</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Repairing leaks, damage, and general wear and tear; providing regular roof maintenance.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Gutter Installation and Repair -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-rain novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Gutter Installation and Repair</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Installing and maintaining gutters and drainage systems to protect roofs and foundations.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Roof Replacement -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-sync novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Roof Replacement</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Replacing old, damaged, or inefficient roofing systems.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Storm Damage Repair -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-wind novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Storm Damage Repair</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Specialized services to repair roofs damaged by storms, including handling insurance claims.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Energy-Efficient and Cool Roofing Solutions -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-leaf novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Energy-Efficient and Cool Roofing Solutions</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Offering roofing solutions that enhance energy efficiency and reduce heat absorption.</div>
                    </article>
                </div>
            </div>
        </div>
    </section>


    <!-- Commercial Solar Services -->
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Commercial Solar Services","category":"blurb","reload":false,"id":"commercial-solar-services"}'>
        <div class="container">
            <h5 class="text-primary">Commercial Solar Services</h5>
            <h3>Transforming Businesses with Advanced Solar Energy Solutions</h3>
            <div class="row row-offset-lg row-30 row-md-40">
                <div class="col-sm-6 col-lg-4">
                    <!-- Commercial Solar Panel Installation -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-sun novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Commercial Solar Panel Installation</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Implementing large-scale solar solutions for businesses and industrial facilities.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Solar Energy System Design for Businesses -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-pencil-ruler novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Solar Energy System Design for Businesses</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Designing custom solar solutions based on business size and energy requirements.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Commercial Solar Financing and Incentives -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-chart-bars novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Commercial Solar Financing and Incentives</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Assisting businesses in accessing solar financing options and understanding government incentives.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Large-Scale Solar Maintenance and Repairs -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-wrench novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Large-Scale Solar Maintenance and Repairs</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Providing maintenance and repair services for large commercial solar installations.</div>
                    </article>
                </div>
                <!-- More services can be added here in a similar format -->
            </div>
        </div>
    </section>


    <!-- Commercial Roofing Services -->
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Commercial Roofing Services","category":"blurb","reload":false,"id":"commercial-roofing-services"}'>
        <div class="container">
            <h5 class="text-primary">Commercial Roofing Services</h5>
            <h3>Expert Roofing Solutions for Your Business</h3>
            <div class="row row-offset-lg row-30 row-md-40">
                <div class="col-sm-6 col-lg-4">
                    <!-- Commercial Roof Installation and Replacement -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-hammer2 novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Commercial Roof Installation and Replacement</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Installing and replacing roofing systems on commercial buildings, including flat and low-slope roofs.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Roof Maintenance Programs -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-calendar-check novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Roof Maintenance Programs</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Offering regular maintenance programs to prolong roof life and prevent major issues.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Commercial Roof Repair -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-wrench novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Commercial Roof Repair</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Addressing leaks, weather damage, and wear and tear on commercial roofs.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Roof Inspections and Audits -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-magnifier novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Roof Inspections and Audits</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Performing detailed inspections and audits for commercial roofing systems.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Green Roofing Solutions -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-leaf novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Green Roofing Solutions</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Implementing eco-friendly roofing options like green roofs or cool roofs.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Industrial Roofing Services -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-factory novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Industrial Roofing Services</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Specialized roofing services for industrial buildings, including warehouses and factories.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Emergency Roofing Services -->
                    <article class="blurb blurb-modern">
                        <div class="blurb-header">
                            <div class="blurb-embed"><span class="blurb-icon text-primary linearicons-siren novi-icon"></span></div>
                            <div class="blurb-title h4 h4-small">Emergency Roofing Services</div>
                        </div>
                        <hr class="blurb-divider divider divider-sm">
                        <div class="blurb-text">Providing rapid response services for emergency roof repairs due to unexpected damage.</div>
                    </article>
                </div>
            </div>
        </div>
    </section>


    <!-- Section divider-->
    <section class="section novi-background" data-preset='{"title":"Divider Section","category":"content box","reload":false,"id":"divider-section"}'>
        <div class="container">
            <hr class="divider divider-sm">
        </div>
    </section>


    <!-- Why choose us?--
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Why Choose Us","category":"content box","reload":false,"id":"why-choose-us"}'>
      <div class="container">
        <div class="row row-30">
          <div class="col-lg-6">
            <h5 class="text-primary">Why choose us?</h5>
            <h3>We're dedicated to giving you the best service</h3>
            <p>We're dedicated to giving you the best service possible by keeping our solutions friendly, simple and effective. If you don’t trust our word for it, feel free to read the testimonials on our website to learn more about various reasons why our clients choose InGreen.</p>
          </div>
          <div class="col-xs-10 col-md-8 col-lg-6"><img src="images/image-17-620x460.jpg" alt="" width="620" height="460"/>
          </div>
        </div>
      </div>
    </section>
    <!-- Section divider--
    <section class="section novi-background" data-preset='{"title":"Divider Section","category":"content box","reload":false,"id":"divider-section"}'>
      <div class="container">
        <hr class="divider divider-sm">
      </div>
    </section>
    <!-- Partners--
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Partners","category":"partner","reload":false,"id":"partners-5"}'>
      <div class="container">
        <div class="group-20 d-flex flex-wrap align-items-end justify-content-between">
          <h3>Our partners</h3>
          <p>Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec.</p>
        </div>
        <div class="row row-offset-lg row-30 row-lg-40">
          <div class="col-6 col-md-3">
            <div class="partner"><img class="partner-image" src="images/partners/partner-1-290x120.jpg" alt="" width="290" height="120"/>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="partner"><img class="partner-image" src="images/partners/partner-2-290x120.jpg" alt="" width="290" height="120"/>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="partner"><img class="partner-image" src="images/partners/partner-4-290x120.jpg" alt="" width="290" height="120"/>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="partner"><img class="partner-image" src="images/partners/partner-3-290x120.jpg" alt="" width="290" height="120"/>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Section divider-->
    <!-- Call to action-->
    <section class="section section-lg bg-gradient-blue-white text-center text-lg-left novi-background" data-preset='{"title":"Call To Action","category":"call to action","reload":false,"id":"call-to-action-7"}'>
        <div class="container">
            <div class="row row-30 align-items-lg-center justify-content-lg-between">
                <div class="col-lg-8" data-animate='{"class":"fadeInLeft"}'>
                    <h3>Reduce your property's energy costs</h3>
                    <p class="big font-weight-normal">Save on electric bills and improve your quality of life with RYPEC Solar.</p>
                </div>
                <div class="col-lg-auto" data-animate='{"class":"fadeInRight"}'><a class="btn btn-lg btn-secondary" href="{{route('home.quote')}}">Get a Quote</a></div>
            </div>
        </div>
    </section>

@endsection
