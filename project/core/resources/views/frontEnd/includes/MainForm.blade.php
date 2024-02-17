<style>
    #content {
        overflow-x: clip;
    }

    header .navbar-collapse ul.navbar-nav{
        position: relative;
        z-index: 100;
    }
    .input-group .form-control {
        float: none !important;
    }
    .form-control:focus {
        color: black !important;
        background-color: transparent !important;
        border-color: #66afe9;
        outline: none;
    }
    .form-control {
        text-transform: uppercase;
    }
    @media (max-width: 767.99px) {
        .mt-40 {
            margin-top: 10px;
        }
        .site-top {
            display: none;
        }
        .br_hidden{
            display: none;
        }
        #content{
            padding: 0;
            margin: 0;
        }
    }
    .popover-body{
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }
    li{
        list-style-type: disc;
    }
    .dropdown-menu li{
        list-style-type: none;
    }
    .dropdown-menu{
        margin-top: -3% !important;
    }
    .btn-block+.btn-block {
        margin-top: 2px !important;
    }
</style>
<div id="content">
    <div class="slider-block style-one">
        <div class="container">
            <div class="row row-gap-32 justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <div class="text-center">
                        <div>

                            <h1 class="heading4" id="headingCustumized">
                                @if(isset($title))
                                    {{$title }}
                                @else
                                    {{__('frontend.homeHeader') }}
                                @endif
                            </h1>
                        </div>
                        <div class="body2 mt-16">{{ __('frontend.homeSubHeader') }}</div>
                        <br>
                        <form action="{{ route('kelimebulucu')}}" method="get" id="myform">
                            <!-- @csrf -->
                            <div class="input-group">
                                <input class="form-control  rounded-pill input-mysize" type="search" id="searchInput" name="harfler" minlength="2" placeholder="{{ __('frontend.Enter_Letters') }}" id="example-search-input" autocomplete="off" style="text-align: center;  color: #000000; font-weight:bold; height:60px; " >
                                <span class="input-group-append">
                                            <button class="btn bg-white rounded-pill ms-n5" id="searchButtonIcon" type="button" aria-label="searchButtonIcon"
                                                    style="z-index: 10; border: 1px solid hsl(28, 12%, 76%); height:60px; width:60px; display: flex; align-items: center; justify-content: center;">
                                                <i class="fa-solid fa-magnifying-glass" style="font-size: 1.75em;z-index: 1000;"></i>
                                            </button>
                                        </span>
                            </div>
                            <div class="br_hidden">
                                <br><br>
                            </div>
                            <div class="row justify-content-center">
                                <div>
                                    <div class="row mx-3 mt-2">
                                        <div class="col-md-3 col-sm-6 col-6 mt-2">
                                            <div class="input-group">
                                                <div class="form-floating form-floating-group flex-grow-1">
                                                    <input class="form-control turkish-english-input rounded" type="search" name="baslayan"  placeholder="A"  id="startInput"
                                                           style="text-align: center;  color: #000000; font-weight:bold; height:60px; "
                                                           autocomplete="off"
                                                    >
                                                    <label for="baslayan" class="text-uppercase" style="color: black">{{ __('frontend.starts') }}</label>
                                                </div>
                                                <span class="input-group-append">
                                                            <button class="btn bg-white ms-n4 btn-ss popover-trigger" type="button" style=" height:55px; margin-top:2px; width:10px; display: flex; align-items: center; justify-content: center;" aria-label="startIcon"
                                                                    data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0">{{ __('frontend.startsDetails') }}</p>' >
                                                              <i class="fa-regular fa-circle-question"></i>
                                                            </button>
                                                      </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-6 mt-2">
                                            <div class="input-group">
                                                <div class="form-floating form-floating-group flex-grow-1">
                                                    <input class="form-control turkish-english-input rounded" type="search" name="iceren" placeholder="A_B"  id="containInput" autocomplete="off" style="text-align: center;  color: #000000; font-weight:bold; height:60px;">
                                                    <label for="iceren" class="text-uppercase" style="color: black">{{ __('frontend.contains') }}</label>
                                                </div>
                                                <span class="input-group-append">
                                                          <button class="btn bg-white ms-n4 btn-ss popover-trigger" type="button" style="height:55px; margin-top:2px; width:10px; display: flex; align-items: center; justify-content: center;" aria-label="containsIcon"
                                                                  data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0">{{ __('frontend.containsDetails') }}</p>' >
                                                            <i class="fa-regular fa-circle-question"></i>
                                                          </button>
                                                      </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-6 mt-2">
                                            <div class="input-group">
                                                <div class="form-floating form-floating-group flex-grow-1">
                                                    <input class="form-control turkish-english-input rounded" type="search" name="biten" placeholder="B" aria-label="endIcon"  id="endInput" autocomplete="off" style="text-align: center;  color: #000000; font-weight:bold; height:60px;">
                                                    <label for="biten" class="text-uppercase" style="color: black">{{ __('frontend.ends') }}</label>
                                                </div>
                                                <span class="input-group-append">
                                                          <button class="btn bg-white ms-n4 btn-ss popover-trigger" type="button" style="height:55px; margin-top:2px; width:10px; display: flex; align-items: center; justify-content: center;" aria-label="endIcon"
                                                                  data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0">{{ __('frontend.endsDetails') }}</p>' >
                                                            <i class="fa-regular fa-circle-question"></i>
                                                          </button>
                                                        </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-6 mt-2">
                                            <div class="input-group">
                                                <div class="form-floating form-floating-group flex-grow-1">
                                                    <input class="form-control rounded" type="number" name="uzunluk" min="2" max="70" placeholder="LENGTH"  id="lengthInput" pattern="\d{1,2}" autocomplete="off" style="text-align: center;  color: #000000; font-weight:bold; height:60px;">
                                                    <label for="uzunluk" class="text-uppercase" style="color: black">{{ __('frontend.lenght') }}</label>
                                                </div>
                                                <span class="input-group-append">
                                                            <button class="btn bg-white ms-n4 btn-ss popover-trigger" type="button" style="height:55px; margin-top:2px; width:10px; display: flex; align-items: center; justify-content: center;" aria-label="lengthIcon"
                                                                    data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<p class="text-grey col pr-0">{{ __('frontend.lenghtDetails') }}</p>' >
                                                              <i class="fa-regular fa-circle-question"></i>
                                                            </button>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row justify-content-center">

                                <div class=" d-flex">

                                    <div class="mt-40 ms-auto me-auto">
                                        <button type="submit" id="searchButton" class="btn btn-success btn-lg btn-block btnsearch fw-bold">{{ __('frontend.search') }}</button>

                                        <button type="reset" id="resetButton"  class="btn btn-warning btn-lg btn-block btnreset ms-2 fw-bold" >X</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="{{ asset('js/search.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var popoverTriggers = document.querySelectorAll('.popover-trigger');

        popoverTriggers.forEach(function(trigger) {
            var popover = new bootstrap.Popover(trigger, {
                content: '<div class="row">' + trigger.getAttribute('data-bs-content') + '<a class="col-1 close-popover float-end heading6 d-flex flex-row justify-content-center pl-0">&times;</a>'
                    + '</div>',
                html: true
            });

            trigger.addEventListener('inserted.bs.popover', function() {
                var closeButtons = document.querySelectorAll('.close-popover');
                closeButtons.forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        popover.hide();
                    });
                });
            });
        });
    });
    var searchButtonIcon = document.getElementById('searchButtonIcon');
    searchButtonIcon.addEventListener("click", function () {
        var formToSubmit = document.getElementById('myform'); // Replace 'yourFormId' with the actual id of your form
        if (formToSubmit) {
            formToSubmit.submit();
        }
    });
</script>
