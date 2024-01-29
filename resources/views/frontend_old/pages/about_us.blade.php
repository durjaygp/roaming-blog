@extends('frontend.master')
@section('title')
    About Us - RYPEC Solar
@endsection
@section('content')
    <!-- Intro-->
    <section class="section section-sm section-layer context-dark pb-1" data-preset='{"title":"Intro","category":"intro","reload":false,"id":"intro-4"}'>
        <div class="bg-layer bg-image overlay-dark overlay-dark-08 novi-background" style="bottom: 9.4%; background-image: url({{asset('images/RYPEC-2.png')}})"></div>
        <div class="container">
            <!-- Breadcrumb-->
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">About us</span></li>
            </ul>
            <h4>About Us</h4>
            <div class="row row-30 mt-4">
                <div class="col-xs-10 col-sm-5" style="padding-top: 8.6%;">
                    <h2>Providing green energy to New England</h2>
                </div>
                <div class="col-xs-10 col-sm-7"><img src="{{asset('images/RYPEC-1.png')}}" alt="" width="730" height="730"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Vision-->
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Vision","category":"content box","reload":false,"id":"vision"}'>
        <div class="container">
            <div class="row row-30 novi-disabled">
                <div class="col-md-5">
                    <h4>About Us</h4>
                </div>
                <div class="col-md-7">
                    <p>RYPEC Solar is a trusted name in solar.   As locals in your area, we hold a deep passion for our community's growth.  We are a locally owned business with roots in Rhode Island but we offer services across all of Southern New England, including Rhode Island, Massachusetts, and Connecticut.  If you're looking for a break from national chains and high-pressure sales tactics, give us a call.</p>
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
    <!-- Values-->
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Values","category":"content box","reload":false,"id":"values"}'>
        <div class="container">
            <div class="row row-30 novi-disabled">
                <div class="col-md-5">
                    <h4>Areas We Service</h4>
                    <p>We provide solar and roofing services throughout Southern New England.</p>
                </div>
                <div class="col-md-7">
                    <ol class="list h3 h3-small">
                        <li class="list-item">Rhode Island</li>
                        <li class="list-item">Massachusetts</li>
                        <li class="list-item">Connecticut</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Partners-->
    <section class="section section-lg bg-200 novi-background" data-preset='{"title":"Partners","category":"partner","reload":false,"id":"partners-4"}'>
        <div class="container">
            <div class="row row-30 novi-disabled">
                <div class="col-md-5 col-xl-4">
                    <h4>Our partners</h4>
                    <p>Check out some of our trusted partners.</p>
                </div>
                <div class="col-md-7 col-xl-6 offset-xl-1">
                    <div class="row row-30 row-lg-40">
                        <div class="col-6">
                            <div class="partner"><img class="partner-image" src="{{asset('images/RYPEC-Construction.jpg')}}" alt="" width="290" height="120"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="partner"><img class="partner-image" src="{{asset('images/Advantax.jpg')}}" alt="" width="290" height="120"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facts & statistics--
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Facts & Statistics","category":"infographics","reload":true,"id":"facts-statistics"}'>
      <div class="container">
        <h4>By the numbers</h4>
        <div class="row row-30 row-offset-md">
          <div class="col-6 col-md-3">
                  <!-- Counter--
                  <div class="counter">
                    <div class="counter-body">
                      <div class="counter-value h2"><span data-counter="">72</span><span class="counter-postfix">+</span>
                      </div>
                      <p class="counter-title">Team members</p>
                    </div>
                  </div>
          </div>
          <div class="col-6 col-md-3">
                  <!-- Counter--
                  <div class="counter">
                    <div class="counter-body">
                      <div class="counter-value h2"><span data-counter="">2013</span>
                      </div>
                      <p class="counter-title">Year founded</p>
                    </div>
                  </div>
          </div>
          <div class="col-6 col-md-3">
                  <!-- Counter--
                  <div class="counter">
                    <div class="counter-body">
                      <div class="counter-value h2"><span data-counter="">15</span><span class="counter-postfix">K</span>
                      </div>
                      <p class="counter-title">Users</p>
                    </div>
                  </div>
          </div>
          <div class="col-6 col-md-3">
                  <!-- Counter--
                  <div class="counter">
                    <div class="counter-body">
                      <div class="counter-value h2"><span class="counter-prefix">$</span><span data-counter="">25</span><span class="counter-postfix">M</span>
                      </div>
                      <p class="counter-title">Annual revenue</p>
                    </div>
                  </div>
          </div>
        </div>
      </div>
    </section>
    <!-- In the press--
    <section class="section section-lg bg-800 context-dark novi-background" data-preset='{"title":"Reviews","category":"quote","reload":true,"id":"reviews"}'>
      <div class="container">
        <h2>In the press</h2>
        <!-- Owl Carousel--
        <div class="owl-carousel" data-owl="{&quot;dots&quot;:true}" data-items="1" data-md-items="2" data-xl-items="3">
                <!-- Review--
                <article class="review">
                  <div class="review-text h4">
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</q>
                  </div>
                  <div class="review-info">
                    <div class="review-author-name h6">EcoLogic</div>
                    <div class="review-time">
                      <time datetime="2020-05-16">May 16, 2020</time>
                    </div>
                  </div>
                </article>
                <!-- Review--
                <article class="review">
                  <div class="review-text h4">
                    <q>Urna id volutpat lacus laoreet non curabitur gravida. Quam adipiscing vitae proin sagittis nisl. Amet dictum </q>
                  </div>
                  <div class="review-info">
                    <div class="review-author-name h6">ESCO</div>
                    <div class="review-time">
                      <time datetime="2020-06-16">June 16, 2020</time>
                    </div>
                  </div>
                </article>
                <!-- Review--
                <article class="review">
                  <div class="review-text h4">
                    <q>Orci ac auctor augue mauris augue neque gravida. Ultricies mi eget mauris pharetra et ultrices. Id velit ut tortor</q>
                  </div>
                  <div class="review-info">
                    <div class="review-author-name h6">InnoEnergy</div>
                    <div class="review-time">
                      <time datetime="2020-07-16">July 16, 2020</time>
                    </div>
                  </div>
                </article>
                <!-- Review--
                <article class="review">
                  <div class="review-text h4">
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</q>
                  </div>
                  <div class="review-info">
                    <div class="review-author-name h6">EcoLogic</div>
                    <div class="review-time">
                      <time datetime="2020-05-16">May 16, 2020</time>
                    </div>
                  </div>
                </article>
                <!-- Review--
                <article class="review">
                  <div class="review-text h4">
                    <q>Urna id volutpat lacus laoreet non curabitur gravida. Quam adipiscing vitae proin sagittis nisl. Amet dictum </q>
                  </div>
                  <div class="review-info">
                    <div class="review-author-name h6">ESCO</div>
                    <div class="review-time">
                      <time datetime="2020-06-16">June 16, 2020</time>
                    </div>
                  </div>
                </article>
                <!-- Review--
                <article class="review">
                  <div class="review-text h4">
                    <q>Orci ac auctor augue mauris augue neque gravida. Ultricies mi eget mauris pharetra et ultrices. Id velit ut tortor</q>
                  </div>
                  <div class="review-info">
                    <div class="review-author-name h6">InnoEnergy</div>
                    <div class="review-time">
                      <time datetime="2020-07-16">July 16, 2020</time>
                    </div>
                  </div>
                </article>
        </div>
      </div>
    </section>
    <!-- Our founders--
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Our Founders","category":"person","reload":false,"id":"our-founders"}'>
      <div class="container">
        <h4>Our team</h4>
        <div class="row row-30 row-offset-sm">
          <div class="col-xs-6 col-md-4">
                  <!-- Person--
                  <div class="person person-lg"><a class="person-img-link" href="team-member.html"><img class="person-img" src="images/persons/person-04-400x400.jpg" alt="" width="400" height="400"/></a>
                    <div class="h4 h4-small person-title"><a href="team-member.html">John Williams</a></div>
                    <div class="person-subtitle text-primary">Chief executive officer, founder</div>
                    <div class="person-social"><a class="person-icon icon-social novi-icon int-twitter" href="#"></a>
                    </div>
                  </div>
          </div>
          <div class="col-xs-6 col-md-4">
                  <!-- Person--
                  <div class="person person-lg"><a class="person-img-link" href="team-member.html"><img class="person-img" src="images/persons/person-05-400x400.jpg" alt="" width="400" height="400"/></a>
                    <div class="h4 h4-small person-title"><a href="team-member.html">Edward Johnson</a></div>
                    <div class="person-subtitle text-primary">Head of R&amp;D</div>
                    <div class="person-social"><a class="person-icon icon-social novi-icon int-twitter" href="#"></a>
                    </div>
                  </div>
          </div>
          <div class="col-xs-6 col-md-4">
                  <!-- Person--
                  <div class="person person-lg"><a class="person-img-link" href="team-member.html"><img class="person-img" src="images/persons/person-06-400x400.jpg" alt="" width="400" height="400"/></a>
                    <div class="h4 h4-small person-title"><a href="team-member.html">Peter Smith</a></div>
                    <div class="person-subtitle text-primary">Project manager</div>
                    <div class="person-social"><a class="person-icon icon-social novi-icon int-twitter" href="#"></a>
                    </div>
                  </div>
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
    <!-- Team demographics--
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Team Demographics","category":"content box","reload":true,"id":"team-demographics"}'>
      <div class="container">
        <div class="row row-30 justify-content-lg-between novi-disabled">
          <div class="col-md-4">
            <h4>Team demographics</h4>
            <p>Urna porttitor rhoncus dolor purus non enim. Facilisi cras fermentum odio eu feugiat pretium nibh.</p>
          </div>
          <div class="col-md-8 col-lg-7">
            <div>
              <div class="row">
                <div class="col-6 col-xs-5 col-md-6 col-xl-5">
                        <!-- Counter--
                        <div class="counter">
                          <div class="counter-body">
                            <div class="counter-value h2"><span data-counter="">57</span><span class="counter-postfix">%</span>
                            </div>
                            <p class="counter-title">Men</p>
                          </div>
                        </div>
                </div>
                <div class="col-6 col-xs-5 col-md-6 col-xl-5">
                        <!-- Counter--
                        <div class="counter">
                          <div class="counter-body">
                            <div class="counter-value h2"><span data-counter="">43</span><span class="counter-postfix">%</span>
                            </div>
                            <p class="counter-title">Women</p>
                          </div>
                        </div>
                </div>
              </div>
            </div>
            <hr class="divider divider-sm">
            <p class="small">
              A condimentum vitae sapien pellentesque habitant.<br class="d-none d-xs-block">
              Nunc congue nisi vitae suscipit.
            </p>
            <div class="offset-sm group-30 d-flex align-items-center flex-wrap flex-xs-nowrap">
              <h3 class="h3-small">Want to help build the future of renewable energy?</h3>
              <div class="flex-shrink-0"><a class="btn btn-lg btn-primary" href="#">Learn More</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
            <!-- temp review off

    <!-- Section divider--
    <section class="section novi-background" data-preset='{"title":"Divider Section","category":"content box","reload":false,"id":"divider-section"}'>
      <div class="container">
        <hr class="divider divider-sm">
      </div>
    </section>
    <!-- Users--
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Users","category":"counter, call to action","reload":false,"id":"users"}'>
      <div class="container">
        <div class="text-center" data-animate='{"class":"fadeInUp"}'>
          <h2>New Englands #1 solar & roofing company</h2></h2>
          <p>Take a look at the latest testimonials from our clients.</p><a class="btn btn-lg btn-primary" href="#">See All Reviews</a>
        </div>
      </div>
    </section>
    <!-- Quote default--
    <section class="section section-lg bg-transparent novi-background" data-preset='{"title":"Quote Default","category":"quote","reload":false,"id":"quote-default"}'>
      <div class="container">
        <div class="row row-40 row-md-50 novi-disabled" data-animate='{"class":"fadeInUp"}'>
          <div class="col-sm-6 col-lg-4">
                  <!-- Quote--
                  <article class="quote">
                          <div class="rating quote-rating">
                            <div class="rating-body">
                              <div class="rating-empty"><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span>
                              </div>
                              <div class="rating-fill" style="width: 90%"><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span>
                              </div>
                            </div>
                          </div>
                    <div class="quote-text">
                      <q>RYPEC Solar's advice was perfectly tailored. Highly recommend them!</q>
                    </div>
                          <!-- Quote author--
                          <div class="quote-author">
                            <div class="media media-md align-items-center">
                              <div class="media-body">
                                <div class="quote-author-name">Adam W</div>
                                <div class="quote-author-position">New Haven, CT</div>
                              </div>
                            </div>
                          </div>
                  </article>
          </div>
          <div class="col-sm-6 col-lg-4">
                  <!-- Quote--
                  <article class="quote">
                          <div class="rating quote-rating">
                            <div class="rating-body">
                              <div class="rating-empty"><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span>
                              </div>
                              <div class="rating-fill" style="width: 90%"><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span>
                              </div>
                            </div>
                          </div>
                    <div class="quote-text">
                      <q>RYPEC Solar's storm damage repair was exceptional. Quick, effective, and they helped with insurance.</q>
                    </div>
                          <!-- Quote author--
                          <div class="quote-author">
                            <div class="media media-md align-items-center">
                              <div class="media-body">
                                <div class="quote-author-name">John B</div>
                                <div class="quote-author-position">Burlington, VT</div>
                              </div>
                            </div>
                          </div>
                  </article>
          </div>
          <div class="col-sm-6 col-lg-4">
                  <!-- Quote--
                  <article class="quote">
                          <div class="rating quote-rating">
                            <div class="rating-body">
                              <div class="rating-empty"><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span>
                              </div>
                              <div class="rating-fill" style="width: 90%"><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span><span class="int-star"></span>
                              </div>
                            </div>
                          </div>
                    <div class="quote-text">
                      <q>RYPEC Solar's large-scale solar solutions are transformative. Highly recommended!</q>
                    </div>
                          <!-- Quote author--
                          <div class="quote-author">
                            <div class="media media-md align-items-center">
                              <div class="media-body">
                                <div class="quote-author-name">Mike F</div>
                                <div class="quote-author-position">Boston, MA</div>
                              </div>
                            </div>
                          </div>
                  </article>
          </div>
        </div>
      </div>
    </section>
    <!-- temp review off -->
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
