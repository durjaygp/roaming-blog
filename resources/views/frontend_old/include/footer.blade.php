<footer class="section footer bg-800 text-4001 context-dark novi-background mt-7"
        data-preset='{"title":"Footer Consulting","category":"footer","reload":false,"id":"footer-consulting"}'>
    <div class="container">
        <div class="row row-30 justify-content-xl-between novi-disabled">
            <div class="col-md-10 col-lg-6">
                <h4>Seamless solutions, superior service</h4>
                <p class="mt-3">At RYPEC, we provide end-to-end solar and roofing solutions for individuals
                    and businesses all over Southern New England.</p>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-5">
                <form class="rd-mailform form-inline group-20 mt-lg-3 novi-disabled"
                      data-form-output="footer-consulting-form-output" data-form-type="subscribe"
                      method="post" action="components/rd-mailform/rd-mailform.php">
                    <div class="form-inline-group">
                        {{-- <input class="form-control" type="email" name="email" placeholder="Enter your email address" data-constraints="@Email @Required"> --}}
                        <input class="form-control" type="email" name="email"
                               placeholder="Enter your email address" data-constraints="">
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Subscribe</button>
                </form>
                <div class="form-output snackbar snackbar-secondary" id="footer-consulting-form-output"></div>
            </div>
        </div>
        <hr class="divider footer-divider">
        <div class="row row-30 justify-content-xl-between novi-disabled">
            <div class="col-md-10 col-lg-6">
                <div class="row row-20">
                    <div class="col-auto col-sm-4">
                        <h6>Contact Information</h6>
                        <ul class="list list-xl small font-weight-normal">
                            <li class="list-item"><a class="list-link">(401) 515-5333</a></li>
                            <li class="list-item"><a class="list-link">Info@rypecri.com</a></li>
                            <li class="list-item"><a class="list-link">Rich@rypecri.com</a></li>
                            <li class="list-item"><a class="list-link">Sergio@rypecri.com</a></li>
                        </ul>
                    </div>
                    <div class="col-auto col-sm-4">
                        <h6>Location</h6>
                        <ul class="list list-xl small font-weight-normal">
                            <li class="list-item"><a class="list-link">400 Warwick Ave, Warwick, RI, 02888</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-auto col-sm-4">
                        <h6>Resources</h6>
                        <ul class="list list-xl small font-weight-normal">
                            <li class="list-item"><a class="list-link" href="{{route('home.resources')}}">Learn</a></li>
                            <li class="list-item"><a class="list-link"
                                                     href="{{route('home.warranty')}}">Service & Warranty</a></li>
                            <li class="list-item"><a class="list-link" href="{{route('privacy-policy')}}">Privacy
                                    Policy</a></li>
                            <li class="list-item"><a class="list-link" href="{{route('home.terms')}}">Terms of
                                    Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="post-inline-group post-area">
                    @php
                        $blogs = \App\Models\Blog::latest()->whereStatus(1)->take(2)->get();
                    @endphp
                    @foreach($blogs as $row)
                        <article class="post post-inline post-sm">
                            <div class="media media-lg flex-column flex-xs-row">
                                <div class="media-left"><a class="post-img-link" href="{{route('resources.details',$row->slug)}}"><img
                                            src="{{asset($row->image)}}" alt="" width="180"
                                            height="116" /></a></div>
                                <div class="media-body">
                                    <div class="post-title h4 h4-small"><a href="{{route('resources.details',$row->slug)}}">{{$row->name}}</a></div>
                                    <div class="post-meta">
                                        <div class="post-meta-item"><span
                                                class="post-meta-icon int-clock novi-icon"></span><a
                                                class="post-meta-link" href="{{route('resources.details',$row->slug)}}">{{$row->created_at}}</a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
        <hr class="divider footer-divider">
        <div class="row row-15 align-items-center justify-content-between footer-panel novi-disabled">
            <div class="col-auto">
                <!-- Copyright-->
                <p class="rights"><span>&copy; 2023&nbsp;</span><span>RYPEC Solar</span><span>. All rights
                                reserved.&nbsp;</span><a class="rights-link" href="{{route('privacy-policy')}}">Privacy
                        Policy</a></p>
            </div>
            <div class="col-auto">
                <div class="group-30 d-flex text-white"><a
                        class="icon icon-xs icon-social int-youtube novi-icon"
                        href="https://www.youtube.com/channel/UCOTypN6gel5imA7bbrnVDMw"></a><a
                        class="icon icon-xs icon-social int-facebook novi-icon"
                        href="https://www.facebook.com/RYPECNE/"></a><a
                        class="icon icon-xs icon-social int-instagram novi-icon"
                        href="https://www.instagram.com/rypecne/"></a><a
                        class="icon icon-xs icon-social int-twitter novi-icon"
                        href="https://twitter.com/RYPECNE"></a><a
                        class="icon icon-xs icon-social int-linkedin novi-icon"
                        href="https://www.linkedin.com/company/100360934/admin/feed/posts/"></a></div>
            </div>
        </div>
    </div>
</footer>
