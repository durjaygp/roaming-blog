@extends('frontend.master')
@section('title')
    RYPEC Solar - Free Quote
@endsection
@section('content')
    <section class="section section-sm bg-transparent novi-background" data-preset='{"title":"Breadcrumb","category":"breadcrumb","reload":false,"id":"breadcrumb-6"}'>
        <div class="container">
            <!-- Breadcrumb-->
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Free Quote</span></li>
            </ul>
        </div>
    </section>
    <!-- Project gallery 3-->
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Users","category":"counter, call to action","reload":false,"id":"users"}'>
        <div class="container">
            <div class="text-center">
                <h2>Get Your Free Quote</h2>
                <p>Please leave your name and phone number below and we'll reach out to you shortly.</p>
                <iframe
                    src="https://api.leadconnectorhq.com/widget/form/0tNOHr6OOJbjdzczGSY5"
                    style="width:100%;height:100%;border:none;border-radius:20px"
                    id="inline-0tNOHr6OOJbjdzczGSY5"
                    data-layout="{'id':'INLINE'}"
                    data-trigger-type="alwaysShow"
                    data-trigger-value=""
                    data-activation-type="alwaysActivated"
                    data-activation-value=""
                    data-deactivation-type="neverDeactivate"
                    data-deactivation-value=""
                    data-form-name="Schedule Consultation Form"
                    data-height="558"
                    data-layout-iframe-id="inline-0tNOHr6OOJbjdzczGSY5"
                    data-form-id="0tNOHr6OOJbjdzczGSY5"
                    title="Schedule Consultation Form"
                >
                </iframe>
                <script src="https://link.msgsndr.com/js/form_embed.js"></script>
            </div>
        </div>
    </section>
    <!-- Call to action-->
@endsection
