@extends('frontend.master')
@section('title')
    RYPEC Solar - Resources
@endsection
@section('content')
    <!-- Breadcrumb default-->
    <section class="bg-transparent section section-sm novi-background" data-preset='{"title":"Breadcrumb","category":"breadcrumb","reload":false,"id":"breadcrumb-6"}'>
        <div class="container">
            <!-- Breadcrumb-->
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.html">Home</a></li>
                <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Resources</span></li>
            </ul>
        </div>
    </section>
    <!-- Boxed layout with sidebar-->
    <section class="bg-transparent section section-lg novi-background" data-preset='{"title":"Blog Boxed","category":"blog","reload":true,"id":"blog-boxed-2"}'>
        <div class="container">
            <div class="row row-40 justify-content-lg-between">
                <div class="col-md-8 post-area">
                    <h2>Resources</h2>
                    <!-- Post boxed-->
                    @php
                        $blog = \App\Models\Blog::latest()->whereStatus(1)->get();
                    @endphp
                    @foreach($blog as $row)
                        <div class="post post-boxed">
                            <div class="img">
                                <img src="{{asset($row->image)}}" class="img-fluid" alt="">
                            </div>
                            <div class="post-meta post-meta-between">
                                <div class="post-meta-item"><a class="post-meta-link post-meta-linkbox post-meta-linkbox-dark" href="#">{{$row->category->name}}</a></div>
                            </div>
                            <h3 class="h3-small post-title"><a href="{{route('resources.details',$row->slug)}}">{{$row->name}}</a></h3>
                            <div class="post-text">{{\Illuminate\Support\Str::limit($row->description,150)}} </div>
                            <div class="post-meta post-meta-between post-meta-lg">
                                <div class="post-meta-item"><a class="btn btn-primary" href="{{route('resources.details',$row->slug)}}">Read more</a></div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-md-4 col-xxl-3 widget-area">
                    <!-- Menu -->

                    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" /><style>#accordian * {margin: 0;padding: 0;}#accordian::-webkit-scrollbar {width: 5px;height: 8px;}#accordian::-webkit-scrollbar-track {border-radius: 10px;background-color: #e4e4e4;}#accordian::-webkit-scrollbar-thumb {border-radius: 10px;transition: 0.5s;}#accordian::-webkit-scrollbar-thumb:hover {background: #d5b14c;transition: 0.5s;}#accordian {background: #fff;width: 250px;padding: 10px;padding-top: 25px;float: left;}#accordian i {margin-right: 10px;}#accordian li {list-style-type: none;}#accordian ul li a {color: #000000;text-decoration: none;font-weight: 500;font-size: 15px;display: block;/* line-height: 34px; */padding: 12px 15px;transition: all 0.15s;position: relative;border-radius: 3px;}#accordian ul li a:hover {color: #EF8608;font-weight: 600;text-decoration: none;font-size: 15px;display: block;/* line-height: 34px; */padding: 12px 15px;transition: all 0.15s;position: relative;border-radius: 3px;}#accordian>ul>li>ul,#accordian>ul>li>ul>li>ul,#accordian>ul>li>ul>li>ul>li>ul,#accordian>ul>li>ul>li>ul>li>ul>li>ul {display: none;}#accordian>ul>li.active>ul.show-dropdown,#accordian>ul>li>ul>li.active>ul.show-dropdown,#accordian>ul>li>ul>li>ul>li.active>ul.show-dropdown,#accordian>ul>li>ul>li>ul>li>ul>li.active>ul.show-dropdown {display: block;}#accordian>ul>li>ul,#accordian>ul>li>ul>li>ul,#accordian>ul>li>ul>li>ul>li>ul,#accordian>ul>li>ul>li>ul>li>ul>li>ul {padding-left: 20px;}#accordian a:not(:only-child):after {content: "\f105";position: absolute;right: 0px;top: 14px;font-size: 15px;font-family: "Font Awesome 5 Free";display: inline-block;padding-right: 3px;vertical-align: middle;font-weight: 900;transition: 0.5s;}#accordian .active>a:not(:only-child):after {transform: rotate(90deg);}</style>
                    @include('frontend.pages.sidebar')


                    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
                    <script>
                        // -------multilevel-accordian-menu---------
                        $(document).ready(function () {
                            $("#accordian a").click(function () {
                                var link = $(this);
                                var closest_ul = link.closest("ul");
                                var parallel_active_links = closest_ul.find(".active")
                                var closest_li = link.closest("li");
                                var link_status = closest_li.hasClass("active");
                                var count = 0;
                                closest_ul.find("ul").slideUp(function () {
                                    if (++count == closest_ul.find("ul").length) {
                                        parallel_active_links.removeClass("active");
                                        parallel_active_links.children("ul").removeClass("show-dropdown");
                                    }
                                });
                                if (!link_status) {
                                    closest_li.children("ul").slideDown().addClass("show-dropdown");
                                    closest_li.parent().parent("li.active").find('ul').find("li.active").removeClass("active");
                                    link.parent().addClass("active");
                                }
                            })
                        });
                        // --------for-active-class-on-other-page-----------
                        jQuery(document).ready(function ($) {
                            // Get current path and find target link
                            var path = window.location.pathname.split("/").pop();
                            // Account for home page with empty path
                            if (path == '') {
                                path = 'index.html';
                            }
                            var target = $('#accordian li a[href="' + path + '"]');
                            // Add active class to target link
                            target.parents("li").addClass('active');
                            target.parents("ul").addClass("show-dropdown");
                        });
                    </script>


                </div>
                <!-- Menu -->
            </div>
        </div>
        </div>
    </section>
    <!-- Call to action-->

@endsection
