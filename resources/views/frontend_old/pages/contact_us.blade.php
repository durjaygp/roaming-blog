@extends('frontend.master')
@section('title')
    RYPEC Solar - Contact Us
@endsection
@section('content')
    <!-- Breadcrumb default-->
    <section class="section section-lg bg-transparent pt-5 novi-background" data-preset='{"title":"Breadcrumb","category":"breadcrumb","reload":false,"id":"breadcrumb-5"}'>
        <div class="container">
            <!-- Breadcrumb-->
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Home</span></li>
            </ul>
            <h2>Contact us</h2>
        </div>
    </section>
    <!-- Contact us-->
    <section class="section section-md bg-transparent novi-background" data-preset='{"title":"Contact Us","category":"contacts","reload":true,"id":"contact-us-2"}'>
        <div class="container">
            <div class="row row-40">
                <div class="col-sm-10 col-md-6">
                    <div class="offset-md">
                        <div class="d-inline-flex align-items-center"><span class="icon icon-xs int-phone novi-icon mr-2"></span>
                            <div class="h5 h5-big"><a href="tel:#">(401) 515-5333</a></div>
                        </div>
                    </div>
                    <ul class="list list-xs small">
                        <li class="list-item">Monday-Friday: 8am - 5pm</li>
                        <li class="list-item">Saturday-Sunday: 10am - 5pm</li>
                        <li class="list-item">Holidays: closed</li>
                    </ul>
                    <ul class="list">
                        <li class="list-item"><a class="link link-primary" href="mailto:#info@rypecri.com">info@rypecri.com</a></li>
                        <li class="list-item"><a class="link link-primary" href="mailto:#rich@rypecri.com">rich@rypecri.com</a></li>
                        <li class="list-item"><a class="link link-primary" href="mailto:#sergio@rypecri.com">sergio@rypecri.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3 class="h3-small">Get in touch</h3><iframe
                        src="https://api.leadconnectorhq.com/widget/form/6Oy8NeA8Wh1d6pEd814E"
                        style="width:100%;height:100%;border:none;border-radius:20px"
                        id="inline-6Oy8NeA8Wh1d6pEd814E"
                        data-layout="{'id':'INLINE'}"
                        data-trigger-type="alwaysShow"
                        data-trigger-value=""
                        data-activation-type="alwaysActivated"
                        data-activation-value=""
                        data-deactivation-type="neverDeactivate"
                        data-deactivation-value=""
                        data-form-name="Contact Us Form"
                        data-height="400"
                        data-layout-iframe-id="inline-6Oy8NeA8Wh1d6pEd814E"
                        data-form-id="6Oy8NeA8Wh1d6pEd814E"
                        title="Contact Us Form"
                    >
                    </iframe>
                    <script src="https://link.msgsndr.com/js/form_embed.js"></script>
                    <div class="form-output snackbar snackbar-secondary" id="form-output-global"></div>
                </div>
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
                <div class="col-lg-auto" data-animate='{"class":"fadeInRight"}'><a class="btn btn-lg btn-secondary" href="{{route('home.quote')}}">Get a Quote</a></div>
            </div>
        </div>
    </section>

@endsection
