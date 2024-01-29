@extends('frontend.master')
@section('title')
    RYPEC Solar - Services
@endsection
@section('content')

    <!-- Intro post-->
    <section class="section intro intro-post bg-image context-dark overlay-dark-08 novi-background" style="background-image: url( {{asset('images/RYPEC.png')}} )" data-preset='{"title":"Intro Post","category":"intro, blog","reload":false,"id":"intro-post-2"}'>
        <div class="container">
            <!-- Breadcrumb-->
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a class='breadcrumb-link' href='{{route('home')}}'>Home</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('home.resources')}}">Resources</a></li>
                <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Service and Warranty</span></li>
            </ul>
            <div class="row justify-content-center intro-content novi-disabled">
                <div class="col-md-8 col-xl-6">
                    <div class="post-meta">
                        <div class="post-meta-item"><a class="post-meta-link post-meta-linkbox post-meta-linkbox-primary" href="#">Learn</a></div>
                    </div>
                    <h2 class="intro-title">Service and Warranty</h2>
                    <div class="post-meta intro-meta">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Post single intro-->
    <!-- Post single intro-->
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Post Single Intro","category":"blog","reload":true,"id":"post-single-intro"}'>
        <div class="container">
            <div class="row row-40 novi-disabled">
                <!-- Menu -->
                <div class="col-md-12">
                    <div class="blog-article clearfix">
                        <h2>Service & Warranty</h2>
                        <p>RYPEC service teams are widely distributed across regions and local areas to ensure any issues you encounter can be addressed swiftly. As a solar customer, you'll benefit from RYPEC's top-tier warranties in the industry.</p>

                        <h3 id="#solar-warranty-purchased">Solar Warranty for Purchased Systems</h3>
                        <p>We prioritize your peace of mind regarding the installation of your solar panel system. RYPEC utilizes premium equipment and stands by you as a supportive partner to tackle any problems that may come up with your system.</p>

                        <h3 id="#performance-warranty">25-Year Panel Performance Warranty</h3>
                        <p>RYPEC guarantees that the solar panels provided by their manufacturers will maintain at least 80% of their rated power capacity for a minimum of 25 years. Should you need to make a claim, RYPEC will facilitate the process and cover any necessary labor costs.</p>

                        <h3 id="#warranty-faq">Frequently Asked Questions</h3>
                        <p>Equipped with robust solar panels and superior electrical components, RYPEC does not provide performance guarantees beyond the warranty term. Nonetheless, your solar panels are expected to efficiently generate renewable energy for many years.</p>

                        <p>RYPEC operates in-house teams throughout its service regions in the US. Many problems can be diagnosed and resolved through our technical support hotline. For onsite issues, you can arrange for a visit from a RYPEC technician or a certified subcontractor to get your system back in order.</p>

                        <p>Regular maintenance isn't necessary for RYPEC solar systems. If you choose, occasional cleaning of your solar panels can be beneficial for optimal energy production.</p>

                        <p>Should you opt to clean your solar system, you can simply spray the panels with water using a garden hose or gently clean them with soapy water and a soft sponge. An annual or bi-annual cleaning can potentially boost solar efficiency by 3% to 5%.</p>

                        <div class="tag-container">
                            <a class="tag tag-light" href="{{route('home.resources')}}">Learn</a>
                        </div>



                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Call to action-->
@endsection
