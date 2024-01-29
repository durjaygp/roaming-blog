@extends('theme.master')
@section('title')
    {{$blog->name}}
@endsection
@section('content')
    <!-- Intro post-->
    <section class="section intro intro-post bg-image context-dark overlay-dark-08 novi-background" style="background-image: url( {{asset('images/RYPEC.png')}} )" data-preset='{"title":"Intro Post","category":"intro, blog","reload":false,"id":"intro-post-2"}'>
        <div class="container">
            <!-- Breadcrumb-->
{{--            <ul class="breadcrumb">--}}
{{--                <li class="breadcrumb-item"><a class='breadcrumb-link' href='index.html'>Home</a></li>--}}
{{--                <li class="breadcrumb-item"><a class="breadcrumb-link" href="resources.html">Resources</a></li>--}}
{{--                <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Solar Price Match Guarantee</span></li>--}}
{{--            </ul>--}}
            <div class="row justify-content-center intro-content novi-disabled ">
                <div class="col-md-8 col-xl-6">
                    <div class="post-meta mt-5">
                        <div class="post-meta-item"><a class="post-meta-link post-meta-linkbox post-meta-linkbox-primary" href="#">Learn</a></div>
                    </div>
                    <h2 class="intro-title">{{$blog->name}}</h2>
                    <div class="post-meta intro-meta">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Post single intro-->
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Post Single Intro","category":"blog","reload":true,"id":"post-single-intro"}'>
        <div class="container">
            <div class="row row-40 novi-disabled">


                <!-- Menu -->
                <div class="col-md-8">
                    <div class="blog-article clearfix">
                        <img src="{{asset($blog->image)}}" alt="" class="img-fluid">
                        <h2>{{$blog->name}}</h2>
                        <p>{{$blog->description}}</p>
                        <p>{!! $blog->main_content !!}</p>

                        <hr class="divider divider-sm post-single-divider">

                        <hr class="divider divider-sm post-single-divider">


                    </div>

                    @if(auth()->check())
                <!-- contact-area -->
                    <section class="contact-area pt-120 pb-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="pl-45">
                                        <div class="mb-20 section-title title-style-three">
                                            <h4>LEAVE A <span>COMMENT</span></h4>
                                        </div>
                                        <form action="{{ route('comment.save') }}" class="comment-form" method="post">
                                            @csrf
                                            <div class="contact-form">
                                                <section style="padding:0px !important;"
                                                         class="hl_form-builder--main-full hl_form-builder--main">
                                                    <!---->
                                                    <div style="max-width:1000px;margin-bottom:0 !important;" class="ghl-form-wrap">
                                                        <div id="_builder-form"
                                                             style="background-color:#FFFFFFFF;color:#undefined;border:0px dashed #CDE0EC;border-radius:20px;max-width:1000px;width:100%;margin-top:;border-color:#CDE0EC;padding-top:0px;padding-bottom:0px;padding-left:20px;padding-right:20px;box-shadow:0px 0px 0px 0px #FFFFFF;"
                                                             name="builder-form" class="form-builder--wrap-full form-builder--wrap">
                                                            <div class="builder-inline fields-container row"><!--[-->
                                                                <div class="menu-field-wrap col-sm-12 col-12">
                                                                    <div class="f-even form-field-container">
                                                                        <div>
                                                                            <div class="field-container">
                                                                                <div id="form-full_name" class="form-builder--item">
                                                                                    <!----><label>Your Comment<span>*</span></label>
                                                                                    <textarea name="comment" id="comment-message" placeholder="Your Comment" class="form-control"></textarea>
                                                                                    <!----><!----></div>
                                                                            </div>
                                                                        </div><!---->
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                                                                <div class="m-2 mb-5 col-12 menu-field-wrap">
                                                                    <div class="f-odd form-field-container"><!---->
                                                                        <div class="form-builder--item form-builder--btn-submit"
                                                                             style="text-align:left;margin-top:15px;">
                                                                            <div style="width:100%;display:inline-block;position:relative;">
                                                                                <button type="submit" class="btn btn-dark button-element"
                                                                                        style="background-color:#f2b410;border:2px solid #024D90FF;border-radius:40px;padding:11px 11px 11px 11px;
                                                                    width:100%;white-space:normal;box-shadow:0px 0px 0px 0px #FFFFFF;">
                                                                                    <div
                                                                                        style="color:#FFFFFF;font-size:16px;font-weight:600;font-family:roboto;">
                                                                                        <p style="color:#FFFFFF;"> Comment </p>
                                                                                    </div><!---->
                                                                                </button>
                                                                                <div style="display:none;position:absolute;left:50%;transform:translate(-50%, -50%);top:50%;"
                                                                                     class="loader-submit">
                                                                                    <div class="v-spinner" style="display: none;">
                                                                                        <div class="v-moon v-moon1"
                                                                                             style="height: 15px; width: 15px; border-radius: 100%;">
                                                                                            <div class="v-moon v-moon2"
                                                                                                 style="height: 2.14286px; width: 2.14286px; border-radius: 100%; top: 6.42857px; background-color: rgb(24, 139, 246);">
                                                                                            </div>
                                                                                            <div class="v-moon v-moon3"
                                                                                                 style="height: 15px; width: 15px; border-radius: 100%; border: 2.14286px solid rgb(24, 139, 246);">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!---->
                                                        </div><!---->
                                                    </div>
                                                </section>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="col-md-3"></div>

                            </div>
                        </div>
                    </section>
                    <!-- contact-area-end -->
                    @else
                        <div class="comment-reply-box" style="margin-bottom: 150px!important;">
                            <div class="sidebar-widget-title blog-details-title mb-35">
                                <h4>Please <a href="{{ route('login') }}"><span>Login</span></a> for <span>COMMENT</span></h4>
                            </div>
                        </div>
                    @endauth
                    <div class="blog-comment mb-75">
                        <div class="sidebar-widget-title blog-details-title mb-35">
                            <h4>COMMENTS <span>({{$comments->count()}})</span></h4>
                        </div>
                        <ul>
                            @foreach($comments as $row)
                                <li>

                                    <div class="comment-avatar-thumb">
                                        <img src="{{asset('images/image-01-554x453.jpg')}}" class="img-fluid" width="80px" height="80px" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <div class="comment-avatar-info">
                                            <h6 class="text-black"><a href="#">{{$row->user->name}}</a></h6>
                                                <span class="comment-time">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('M d, Y h:i A')}}</span>
                                        </div>
                                        <p>{{$row->comment}}</p>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div>


                <div class="col-md-4 col-xxl-3 ">
                    <!-- Menu -->

                    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" /><style>#accordian * {margin: 0;padding: 0;}#accordian::-webkit-scrollbar {width: 5px;height: 8px;}#accordian::-webkit-scrollbar-track {border-radius: 10px;background-color: #e4e4e4;}#accordian::-webkit-scrollbar-thumb {border-radius: 10px;transition: 0.5s;}#accordian::-webkit-scrollbar-thumb:hover {background: #d5b14c;transition: 0.5s;}#accordian {background: #fff;width: 250px;padding: 10px;float: left;}#accordian i {margin-right: 10px;}#accordian li {list-style-type: none;}#accordian ul li a {color: #000000;text-decoration: none;font-weight: 500;font-size: 15px;display: block;/* line-height: 34px; */padding: 12px 15px;transition: all 0.15s;position: relative;border-radius: 3px;}#accordian ul li a:hover {color: #EF8608;font-weight: 600;text-decoration: none;font-size: 15px;display: block;/* line-height: 34px; */padding: 12px 15px;transition: all 0.15s;position: relative;border-radius: 3px;}#accordian>ul>li>ul,#accordian>ul>li>ul>li>ul,#accordian>ul>li>ul>li>ul>li>ul,#accordian>ul>li>ul>li>ul>li>ul>li>ul {display: none;}#accordian>ul>li.active>ul.show-dropdown,#accordian>ul>li>ul>li.active>ul.show-dropdown,#accordian>ul>li>ul>li>ul>li.active>ul.show-dropdown,#accordian>ul>li>ul>li>ul>li>ul>li.active>ul.show-dropdown {display: block;}#accordian>ul>li>ul,#accordian>ul>li>ul>li>ul,#accordian>ul>li>ul>li>ul>li>ul,#accordian>ul>li>ul>li>ul>li>ul>li>ul {padding-left: 20px;}#accordian a:not(:only-child):after {content: "\f105";position: absolute;right: 0px;top: 14px;font-size: 15px;font-family: "Font Awesome 5 Free";display: none;padding-right: 3px;vertical-align: middle;font-weight: 900;transition: 0.5s;}#accordian .active>a:not(:only-child):after {transform: rotate(90deg);}</style>

                      @include('frontend.pages.sidebar')
                    </div>

                    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
                    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script><script>$(document).ready(function () {$("#accordian a").click(function () {var link = $(this);var closest_ul = link.closest("ul");var parallel_active_links = closest_ul.find(".active")var closest_li = link.closest("li");var link_status = closest_li.hasClass("active");var count = 0;closest_ul.find("ul").slideUp(function () {if (++count == closest_ul.find("ul").length) {parallel_active_links.removeClass("active");parallel_active_links.children("ul").removeClass("show-dropdown");}});if (!link_status) {closest_li.children("ul").slideDown().addClass("show-dropdown");closest_li.parent().parent("li.active").find('ul').find("li.active").removeClass("active");link.parent().addClass("active");}})});jQuery(document).ready(function ($) {var path = window.location.pathname.split("/").pop();if (path == '') {path = 'index.html';}var target = $('#accordian li a[href="' + path + '"]');target.parents("li").addClass('active');target.parents("ul").addClass("show-dropdown");});</script>
                </div>

            </div>
        </div>
    </section>



@endsection
