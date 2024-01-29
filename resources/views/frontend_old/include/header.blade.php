<header class="section rd-navbar-wrap"
        data-preset='{"title":"Navbar Event","category":"header","reload":true,"id":"navbar-event"}'>
    <nav class="rd-navbar navbar-event" data-rd-navbar='{"responsive":{"1200":{"stickUpOffset":"60px"}}}'>
        <div class="navbar-section navbar-non-stuck">
            <div class="navbar-container">
                <div class="navbar-cell flex-grow-1">
                    <div class="navbar-subpanel">
                        <div class="navbar-subpanel-item">
                            <button class="navbar-button navbar-info-button mdi-dots-vertical novi-icon"
                                    data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-info-active","isolate":"[data-multi-switch]"}'></button>
                            <div class="navbar-info"><a class="navbar-info-link" href="#"><span
                                        class="navbar-info-icon int-marker novi-icon"></span> 400 Warwick Ave,
                                    Warwick, RI 02888</a><a class="navbar-info-link" href="tel:#"><span
                                        class="navbar-info-icon int-phone novi-icon"></span> +1
                                    401-515-5333</a><a class="btn btn-sm btn-dark button-navbar-fixed"
                                                       href="{{route('home.contact')}}">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-section">
            <div class="navbar-container">
                <div class="navbar-cell">
                    <div class="navbar-panel">
                        <button class="navbar-switch int-hamburger novi-icon"
                                data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}'></button>
                        <div class="navbar-logo"><a class="navbar-logo-link" href="{{route('home')}}"><img
                                    class="navbar-logo-default" src="{{asset('images/Group-552.png')}}" alt="rypec"
                                    width="167" height="49" /><img class="navbar-logo-inverse"
                                                                   src="{{asset('images/logo-default-167x49.svg')}}" alt="rypec" width="167"
                                                                   height="49" /></a></div>
                    </div>
                </div>
                <div class="navbar-cell navbar-spacer"></div>
                <div class="navbar-cell navbar-sidebar">
                    <ul class="navbar-navigation rd-navbar-nav">
                        <li class="navbar-navigation-root-item active"><a class="navbar-navigation-root-link"
                                                                          href="{{route('home')}}">Home</a>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link"
                                                                   href="{{route('home.about')}}">About us</a>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link"
                                                                   href="{{route('home.services')}}">Services</a>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link"
                                                                   href="{{route('home.resources')}}">Resources</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-cell">
                    <div class="navbar-subpanel button-navbar-fullwidth"><a class="btn btn-sm btn-dark"
                                                                            href="{{route('home.contact')}}">Contact Us</a></div>
                </div>
            </div>
        </div>
    </nav>
</header>
