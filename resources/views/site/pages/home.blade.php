@extends('site.layout.app')

@section('title', 'Home Page')

@section('content')
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/gallery/newpic.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <span class="title">The Source of the Nile</span>
                        <span class="title">Women in Agri-Business Summit & Expo</span>
                        <h2 class="p-0 m-0">Coming Soon </h2><br>
                        <ul class="info-list">
                            <li><strong>Main Theme:</strong> New Pathways for Inclusive Transformation in Africa</li>
                        </ul>
                        <ul class="info-list">
                            <li><strong>Subtheme:</strong> Partnerships for Investment and Economic Growth in
                                Communities
                            </li>
                        </ul>
                        <ul class="info-list">
                            <li><strong> Register here to attend in person or Virtually</strong></li>
                        </ul>
                        <div class="btn-box"><a href="{{ route('register') }}" class="theme-btn btn-style-two"><span
                                    class="btn-title">Register Now</span></a></div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->

            <div class="slide-item" style="background-image: url(images/gallery/newpic.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <span class="title">The Source of the Nile</span>
                        <span class="title">Women in Agri-Business Summit & Expo</span>
                        {{-- <h2 class="p-0 m-0">Event Date and Locations </h2><br> --}}
                        <ul class="info-list">
                            <li><strong> Event Details</strong></li>
                        </ul>
                        <ul class="info-list">
                            <li><strong>First Expo:</strong> 21st and 22nd November 2023 in Gulu City</li>
                        </ul>
                        
                        <ul class="info-list">
                            <li><strong>Second Expo:</strong> 7th and 8th December 2023 in Jinja City</li>
                        </ul>

                        <ul class="info-list">
                            <li><strong>Investment Summit:</strong>14th January 2024 at Serena Kigo Hotel in Kampala</li>
                        </ul>

                        <ul class="info-list">
                            <li><strong> Register here to attend in person or Virtually</strong></li>
                        </ul>
                        <div class="btn-box"><a href="register.html" class="theme-btn btn-style-two"><span
                            class="btn-title">Register Now</span></a></div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--End Banner Section -->

    <!-- Coming Soon -->
    <section class="coming-soon-section">

        <div class="auto-container">

            <div class="outer-box">

                <div class="time-counter">
                    <div class="time-countdown clearfix" data-countdown="10/20/2023"></div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Coming Soon -->

    <!-- About Section -->
    <section class="about-section">

        <div class="anim-icons full-width">

            <span class="icon icon-circle-blue wow fadeIn"></span>

            <span class="icon icon-dots wow fadeInleft"></span>

            <span class="icon icon-circle-1 wow zoomIn"></span>

        </div>

        <div class="auto-container">

            <div class="row">

                <!-- Content Column -->

                <div class="content-column col-lg-6 col-md-12 col-sm-12">

                    <div class="inner-column">

                        <div class="sec-title">

                            <h2>Our Focus</h2>
                            <br><br>
                            <span class="title">Why Women in Agribusiness</span>

                            <div class="text">
                                Agribusiness is a dynamic field that engages women from various backgrounds, including those in politics, the private sector, migrants, refugees, survivors of gender-based violence, young entrepreneurs, and those not in formal employment. Women play a pivotal role in food and income security at the household level, and their participation in agribusiness is crucial for climate resilience and economic growth.
                            </div>

                            <br>
                            
                            <span class="title">The Summit's Mission</span>

                            <div class="text">
                                Our Women in Agribusiness Summit and Expo aims to empower women in agriculture by providing them with the knowledge, financing, and technologies to become active participants in agro-processing, organic food exports, and more. Through networking, partnerships, and mentorship, we're accelerating women's transition from subsistence farming to commercial agriculture.

                            </div>

                        </div>

                        {{-- <ul class="list-style-one">

                            <li>Opening remarks and keynote speeches.</li>

                            <li>High-level panel discussion on un-tapped financing opportunities.</li>

                            <li>Launch of Expo Booths (for both women in agri-business & service
                                providers).
                            </li>

                            <li>Fireside business chats.</li>

                            <li>Roundtable on a gender-inclusive transition to agro-industrialization.</li>

                            <li>Roundtable on women’s access to regional and global markets.</li>

                            <li>Roundtable on transformative climate solutions for agri-business women.</li>

                            <li>Roundtable on agri-tech and inclusive digital economies.</li>
                            <li>Pitching and Deal Rooms.</li>

                        </ul> --}}

                        <div class="btn-box"><a href="register.html" class="theme-btn btn-style-three"><span
                                    class="btn-title">Register Now</span></a></div>

                    </div>

                </div>


                <!-- Image Column -->

                <div class="image-column col-lg-6 col-md-12 col-sm-12">

                    <div class="image-box">

                        <figure class="image wow fadeIn"><img src="images/resource/girl-summit.png" alt=""></figure>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--End About Section -->


    <!-- Features Section Two -->

    <section class="features-section">
        <div class="auto-container">
            <h2>Benefits for women in agribusiness</h2><br>
            <div class="anim-icons">
                <span class="icon icon-shape-3 wow fadeIn"></span>
                <span class="icon icon-line-1 wow fadeIn"></span>
            </div>
            <div class="row">
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-search"></span></div>
                        <div class="link-box"><a class="theme-btn">Create</a></div>
                        <br>
                        <div class="text">Create opportunities for women in agri-business to join domestic, regional and global value chains</div>
                    </div>

                </div>
                <!-- Feature Block -->

                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div>
                        <div class="link-box"><a class="theme-btn">Connect</a></div>
                        <br>
                        <div class="text">Connect with financiers, industry leaders, and Policy Makers.</div>
                    </div>

                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-success"></span></div>
                        <div class="link-box"><a class="theme-btn">Pitch</a></div>
                        <br><br>
                        <div class="text">Pitch their Business ideas and services</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-search"></span></div>
                        <div class="link-box"><a class="theme-btn">Explore</a></div>
                        <br>
                        <div class="text">Explore innovative financing partnership with the private sector, industry experts and government agencies.</div>
                    </div>

                </div>
                <!-- Feature Block -->

                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div>
                        <div class="link-box"><a class="theme-btn">Commit</a></div>
                        <br>
                        <div class="text">Commit to implimenting policy and financing mechanisms for supporting women in agri-businesses, including capacity-strengthening programs.</div>
                    </div>

                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-success"></span></div>
                        <div class="link-box"><a class="theme-btn">Network</a></div>
                        <br><br>
                        <div class="text">Networking,Engaging Sessions,Inspiring Speakers, Exhibitions and more </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--End Features Section -->


    <!-- Speakers Section -->
    <section class="speakers-section-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Speakers</h2><br><br>
                <span class="title">Our Distinguished Guests - Tentative</span>
            </div>
            <div class="row">
                <!-- Speaker Block -->
                <div class="speaker-block-one col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <!-- <div class="image-box"> -->
                        <figure class="image"><a><img src="images/resource/museveni.png" style="height: 245px" alt=""></a></figure>
                        <!-- </div> -->
                        <div class="info-box">
                            <strong><h4 class="name">His Excellency Yoweri Museveni</h4></strong>
                            <span class="designation">President of Uganda</span>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-one col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <!-- <div class="image-box"> -->
                        <figure class="image"><a><img src="images/resource/amina.png" style="height: 245px" alt=""></a></figure>
                        <!-- </div> -->
                        <div class="info-box">
                            <h4 class="name">Ms. Amina J. Mohammed</h4>
                            <span class="designation">UN Deputy Secretary-General</span>
                        </div>
                    </div>
                </div>

                <br>
                <!-- Speaker Block -->
                <div class="speaker-block-one col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <!-- <div class="image-box"> -->
                        <figure class="image"><a><img src="images/resource/amina.png" style="height: 245px" alt=""></a></figure>
                        <!-- </div> -->
                        <div class="info-box">
                            <h4 class="name">Dr.Maxime Houinato</h4>
                            <span class="designation">Regional Director, UN Women East and <br> Southern Africa Regional Office</span>
                        </div>
                    </div>
                </div>

          
            </div>
        </div>
    </section>
    <!-- End Speakers Section -->

    <!-- schedule Section -->
    {{-- <section class="schedule-section style-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">About Conference</span>
                <h2>Our Agenda</h2>
            </div>

            <div class="schedule-tabs tabs-box">
                <div class="btns-box">

                    <ul class="tab-buttons clearfix">

                        <li class="tab-btn active-btn" data-tab="#tab-1">

                            <span class="day">Day 01</span>

                            <span class="date">23</span>

                            <span class="month">Oct</span> 2023

                        </li>


                        <li class="tab-btn" data-tab="#tab-2">

                            <span class="day">Day 02</span>

                            <span class="date">24</span>

                            <span class="month">Oct</span> 2023

                        </li>

                    </ul>

                </div>


                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="schedule-timeline row">
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM - 10.00 AM</div>

                                        <h4><a>Opening remarks and keynote speeches.</a></h4>
                                        <div class="text">Immerse yourself in insightful sessions where we will discuss
                                            entrepreneurship, strategic sector investment, and showcase initiatives that
                                            have the potential to scale up and promote mentorship across Africa.
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM - 11.00 AM</div>
                                        <h4><a>Successful Women in Agri-business value chains.</a></h4>
                                        <div class="text">Learn from renowned leaders, visionaries, and trailblazers who
                                            have made a significant impact in their respective fields. Gain invaluable
                                            insights and practical knowledge from their experiences.
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM - 12.00 AM</div>

                                        <h4><a>High-level panel discussion on un-tapped financing opportunities.</a>
                                        </h4>
                                        <div class="text">Explore the vibrant exhibition area featuring women-led
                                            businesses and organizations that are driving economic growth and social
                                            impact in Africa. Participate in sideline events that delve deeper into
                                            specific thematic solutions.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <h4><a>Launch of Expo Booths (for both women in agri-business & service
                                                providers).</a></h4>
                                        <div class="text">Explore the vibrant exhibition area featuring women-led
                                            businesses and organizations that are driving economic growth and social
                                            impact in Africa. Participate in sideline events that delve deeper into
                                            specific thematic solutions.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>

                                        <h4><a>Fireside business chats.</a></h4>
                                        <div class="text">Explore the vibrant exhibition area featuring women-led
                                            businesses and organizations that are driving economic growth and social
                                            impact in Africa. Participate in sideline events that delve deeper into
                                            specific thematic solutions.
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>

                                        <h4><a>Roundtable on a gender-inclusive transition to
                                                agro-industrialization.</a></h4>
                                        <div class="text">Explore the vibrant exhibition area featuring women-led
                                            businesses and organizations that are driving economic growth and social
                                            impact in Africa. Participate in sideline events that delve deeper into
                                            specific thematic solutions.
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="tab" id="tab-2">
                        <div class="schedule-timeline row">
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM - 10.00 AM</div>

                                        <h4><a>Roundtable on a gender-inclusive transition to
                                                agro-industrialization.</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmtempor incididunt labore et
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM - 11.00 AM</div>
                                        <h4><a>Roundtable on women’s access to regional and global markets.</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmtempor incididunt labore et
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM - 12.00 AM</div>
                                        <h4><a>Roundtable on transformative climate solutions for agri-business
                                                women.</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmtempor incididunt labore et
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <h4><a>Roundtable on agri-tech and inclusive digital economies.</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmtempor incididunt labore et
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <h4><a>Pitching and Deal Rooms..</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmtempor incididunt labore et
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <h4><a>Roundtable on agri-tech and inclusive digital economies.</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmtempor incididunt labore et
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section> --}}
    <!--End schedule Section -->


    <section class="fun-fact-section style-two" style="background-image: url(images/background/9.jpg);">

        <div class="auto-container">

            <div class="fact-counter">

                <div class="row clearfix">


                    <!--Column-->

                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">

                        <div class="count-box">

                            <span class="icon icon_headphones"></span>

                            <span class="count-text" data-speed="3000" data-stop="100">0</span>

                            <h4 class="counter-title">Women Entrepreneurs</h4>

                        </div>

                    </div>


                    <!--Column-->

                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">

                        <div class="count-box">

                            <span class="icon icon_ribbon_alt"></span>

                            <span class="count-text" data-speed="3000" data-stop="100">0</span>

                            <h4 class="counter-title">Investors & Partners</h4>

                        </div>

                    </div>


                    <!--Column-->

                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">

                        <div class="count-box">

                            <span class="icon icon_like"></span>

                            <span class="count-text" data-speed="3000" data-stop="50">0</span>

                            <h4 class="counter-title">Experts</h4>

                        </div>

                    </div>


                    <!--Column-->

                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">

                        <div class="count-box">

                            <span class="icon icon_book_alt"></span>

                            <span class="count-text" data-speed="3000" data-stop="20">0</span>

                            <h4 class="counter-title">Sponsors</h4>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Video Section -->
    <section class="video-section" style="background-image: url(images/gallery/women.png);">

        <div class="auto-container">

            <div class="content-box">

                <div class="text">THE SOURCE OF THE NILE</div>

                <h2>Women in Agri-Business Summit & Expo !!</h2>
                <br><br>
                <div class="btn-box">
                   <a class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button-3" aria-hidden="true"></i><span class="ripple"></span></a>
                    {{-- <a href="contact.html" class="theme-btn btn-style-one"><span class="btn-title">Contact Us</span></a> --}}
                </div>

                <!-- <a class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button-3" aria-hidden="true"></i><span class="ripple"></span></a> -->

            </div>

        </div>

    </section>
    <!--End Video Section -->


    <!-- Why Choose Us -->
    {{-- <section class="why-choose-us">

        <div class="auto-container">

            <div class="row">

                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">

                    <div class="inner-column">

                        <div class="sec-title">

                            <span class="title">JOIN THE EVENT</span>
                            <div class="text">
                                Join us for an extraordinary event dedicated to fostering inclusive transformation in
                                Africa. This summit serves as a crucial platform to showcase the remarkable women who
                                lead impactful businesses and aims to facilitate partnerships with government
                                decision-makers, industry leaders, and representatives of the international community.
                                Together, we will pave the way for new pathways towards inclusive development across the
                                continent.
                            </div>
                        </div>

                        <ul class="list-style-one">

                            <li>Networking and Engaging Sessions</li>

                            <li>Inspiring Speakers</li>

                            <li>Exhibitions and Sideline Events</li>

                        </ul>

                        <div class="btn-box">

                            <a href="register.html" class="theme-btn btn-style-two"><span
                                    class="btn-title">Register</span></a>

                        </div>

                    </div>

                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">

                    <div class="image-box">

                        <figure class="image"><img src="images/resource/expo2.png" alt=""></figure>

                    </div>

                </div>

            </div>

        </div>

    </section> --}}
    <!-- End Why Choose Us -->

    <!-- Event Info Section -->
    <section class="event-info-section">

        <div class="auto-container">

            <div class="row">

                <!-- Info Column -->

                <div class="info-column col-lg-6 col-md-12 col-sm-12">

                    <div class="inner-column">

                        <div class="sec-title style-two">

                            <span class="title">Event Details</span>

                            {{-- <h2>Direction for the <br>Venue</h2> --}}

                        </div>


                        <div class="event-info-tabs tabs-box">

                            <!--Tabs Box-->

                            <ul class="tab-buttons clearfix">

                                <li class="tab-btn active-btn" data-tab="#tab1">Venue</li>

                                {{-- <li class="tab-btn" data-tab="#tab2">Venue</li> --}}

                                <!-- <li class="tab-btn" data-tab="#tab3">How to</li> -->

                            </ul>


                            <div class="tabs-content">

                                <!--Tab-->

                                <div class="tab active-tab" id="tab1">

                                    <h4><span class="icon fa fa-map-marker-alt"></span> Gulu City - 21st and 22nd Nov 2023 </h4><br>

                                    <h4><span class="icon fa fa-map-marker-alt"></span> Jinja City - 7th and 8th Dec 2023</h4><br>

                                    <h4><span class="icon fa fa-map-marker-alt"></span>Serena Kigo Hotel in Kampala - 14th January 2024</h4><br>

                                    {{-- <div class="text">
                                        Speke Resort and Conference Centre
                                        Wavamunno Road,
                                        <br>
                                        P. O. Box 446, Kampala
                                        Uganda
                                        <br>
                                        Call:
                                        <br>+256 (0) 752 711 714
                                        <br>+256 (0) 414 227 111
                                        <br>+256 (0) 417 716 000
                                    </div> --}}

                                </div>


                                <!--Tab-->

                                {{-- <div class="tab" id="tab2">

                                    <h4><span class="icon fa fa-map-marker-alt"></span>Commonwealth Resort Hotel
                                        Munyonyo, Kampala</h4>

                                    <div class="text">
                                        Speke Resort and Conference Centre
                                        Wavamunno Road,
                                        <br>
                                        P. O. Box 446, Kampala
                                        Uganda
                                        <br>
                                        Call:
                                        <br>+256 (0) 752 711 714
                                        <br>+256 (0) 414 227 111
                                        <br>+256 (0) 417 716 000
                                    </div>
                                </div> --}}


                                <!--Tab-->

                                <!-- <div class="tab" id="tab3">

                                    <h4><span class="icon fa fa-directions"></span> How to get there</h4>

                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>

                                </div> -->

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Image Column -->

                <div class="image-column col-lg-6 col-md-12 col-sm-12">

                    <figure class="image"><img src="images/icons/map-4.png" alt=""></figure>

                </div>

            </div>

        </div>

    </section>

    <!-- Schedule Section Style two -->
    <section class="schedule-section style-three">

        <div class="auto-container">

            <div class="sec-title text-center">

                <span class="title">The Source of the Nile</span>

                <h2>Women in Agri-Business Summit <br>& Expo Highlights</h2>

            </div>


            <div class="schedule-tabs style-three tabs-box">

                <div class="btns-box">

                    <!--Tabs Box-->

                    <ul class="tab-buttons clearfix">

                        <li class="tab-btn active-btn" data-tab="#tab-1">

                            <span class="day">THE CHALLENGES & BARRIERS WOMEN FACE</span>

                        </li>

                        <li class="tab-btn" data-tab="#tab-3">
                            <span class="day">OPPORTUNITIES FOR ADVANCING WOMEN FARMERS </span>
                        </li>


                        <li class="tab-btn" data-tab="#tab-4">
                            <span class="day">WOMEN HOLD THE POTENTIAL OF TRANSITIONING TO AGRO-INDUSTRIALISATION</span>

                        </li>

                    </ul>

                </div>


                <div class="tabs-content">


                    <!--Tab-->

                    <div class="tab active-tab" id="tab-1">
                        <section class="news-section">

                            <div class="anim-icons">

                                <span class="icon icon-circle-blue wow fadeIn"></span>

                                <span class="icon twist-line-1 wow zoomIn"></span>

                                <span class="icon twist-line-2 wow zoomIn"></span>

                                <span class="icon twist-line-3 wow zoomIn"></span>

                            </div>


                            <div class="auto-container">

                                <div class="sec-title text-center">

                                    <h3>THE CHALLENGES AND BARRIERS THAT WOMEN IN AGRIBUSINESS FACE </h3>

                                </div>

                                

                                <div class="row">

                                    <div class="news-block">

                                        <div class="inner-box">

                                            <div class="image-box">

                                                <figure class="image"><a><img
                                                            src="images/gallery/newpic.jpg" alt=""></a>
                                                </figure>

                                            </div>

                                            <div class="lower-content">
                                                <div class="sec-title text-center">
                                                    
                                                   
                                                </div>

                                                <h4><a>Access to finance</a></h4>

                                                <ul class="list-style-one">
                                                    
                                                    <li>Limited financial literacy and knowledge of basic financial
                                                        tools.
                                                    </li>

                                                    <li>Limited availability of tailored products.</li>

                                                    <li>Exploitative non-formal financial service providers.</li>

                                                    <li>Limited trust in the banking system.</li>

                                                    <li>Lower confidence in navigating financial procedures.</li>

                                                </ul>




                                                <h4><a>Access to markets</a></h4>

                                                <ul class="list-style-one">

                                                    <li>Less access to high-value markets and value chains
                                                        (concentration in services and retail sectors).
                                                    </li>

                                                    <li>Less access to digital platforms & marketing know-how.</li>

                                                    <li> Less access to appropriate local, national, and international
                                                        business networks.
                                                    </li>

                                                </ul>

                                                <h4><a>Digital empowerment</a></h4>

                                                <ul class="list-style-one">

                                                    <li>Limited autonomy over the information stored on mobile phones
                                                        often being a shared asset amongst family members
                                                    </li>

                                                    <li>Poor digital infrastructure and high internet-related costs.
                                                    </li>

                                                    <li>Lower skills to digitize value chain activities such as
                                                        inventory, sales, wage bills, Online business registration and
                                                        taxation services.
                                                    </li>

                                                    <li>Limited access to experts and mentors.</li>




                                                    <h4><a>Discriminatory norms
                                                    </a></h4>

                                                    <ul class="list-style-one">
    
                                                        <li>Women operating in food markets, must deal with unwanted advances, and transactional sex, without resources to seek justice.
                                                        </li>
    
                                                        <li>
                                                            Customary norms that vest property management decisions in men, perpetuate violence against women in business, when using property as collateral, and where spouses and parents have suddenly passed on without making a will.

                                                        </li>
    
                                                    

                                                </ul>
                                                <br><br>
                                                <h5 >UN Women and Goverment of Uganda recognize the barriers that women in agribusiness face and The summit aims to address these issues and support women in their agribusiness endeavors.
                                                </h5>
                                            </div>
                                            

                                        </div>
                                    </div>

                                   

                                </div>

                            </div>

                        </section>


                    </div>


                    <!--Tab-->

                    <div class="tab" id="tab-3">

                        <section class="news-section">

                            <div class="anim-icons">

                                <span class="icon icon-circle-blue wow fadeIn"></span>

                                <span class="icon twist-line-1 wow zoomIn"></span>

                                <span class="icon twist-line-2 wow zoomIn"></span>

                                <span class="icon twist-line-3 wow zoomIn"></span>

                            </div>


                            <div class="auto-container">

                                <div class="sec-title text-center">

                                    <h3>OPPORTUNITIES FOR ADVANCING WOMEN FARMERS </h3>

                                </div>

                                <div class="row">

                                    <div class="news-block">

                                        <div class="inner-box">

                                            <div class="image-box">

                                               <figure class="image"><a><img src="images/gallery/newpic.jpg" alt=""></a></figure> 

                                            </div>

                                            <div class="lower-content">
                                                <h4><a>Opportunities
                                                </a></h4>
                                                <ul class="list-style-one">

                                                    <li>
                                                        The rising global demand for healthier diets offers women farmers the chance to produce organic fruits and vegetables, poultry, and other products. Women play a significant role in the production of staple foods like cassava, maize, and yams, and they can tap into regional trading networks, providing value-added products and reducing vulnerability to global market fluctuations.

                                                    </li>

                                                    <li> 
                                                        Infrastructure investments in transport, ICTs, and energy are making agribusiness more accessible for women. The growth in mobile financial services enables digitization and access to financial services, while scholarships and gender-focused bonds provide funding for women in business.

                                                    </li>

                                                </ul>


                                            </div>

                                        </div>

                                    </div>

                                    {{--  --}}

                                </div>

                            </div>

                        </section>

                    </div>


                    <!--Tab-->

                    <div class="tab" id="tab-4">

                        <section class="news-section">

                            <div class="anim-icons">

                                <span class="icon icon-circle-blue wow fadeIn"></span>

                                <span class="icon twist-line-1 wow zoomIn"></span>

                                <span class="icon twist-line-2 wow zoomIn"></span>

                                <span class="icon twist-line-3 wow zoomIn"></span>

                            </div>


                          


                            <div class="auto-container">

                                <div class="sec-title text-center">

                                    <h3>WOMEN HOLD THE POTENTIAL OF TRANSITIONING TO AGRO-INDUSTRIALISATION THROUGH THE FOLLOWING</h3>

                                </div>


                                <div class="row">

                                    <div class="news-block">

                                        <div class="inner-box">

                                            <div class="image-box">

                                                <figure class="image"><a><img src="images/gallery/newpic.jpg"
                                                                              alt=""></a></figure>

                                            </div>

                                            <div class="lower-content">

                                                <h4><a>SUBSISTENCE</a></h4>

                                                <ul class="list-style-one">

                                                    <li>Production for home-consumption,including on-farm processing
                                                    </li>

                                                    <li> Local/informal processing of traditional foods for home use or
                                                        sale in local markets
                                                    </li>

                                                </ul>

                                                <h4><a>COMMERCIALISATION</a></h4>


                                                <ul class="list-style-one">

                                                    <li>On-farm or local processing with some value addition
                                                        activities.
                                                    </li>

                                                    <li> Formal processing,branding and packaging.</li>

                                                </ul>


                                                <h4><a>INDUSTRIALISATION</a></h4>


                                                <ul class="list-style-one">

                                                    <li>Formal and large-scale processing.</li>

                                                    <li> End-use of products in industrial processing (beverages,
                                                        brewing, pharmaceuticals)
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--End schedule Section -->

    <section class="faq-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h2>Summit & Expo Sponsorship</h2>
                <span class="title">Sponsorship benefits</span>
            </div>

            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--Accordion Box-->
                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block wow fadeInUp">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span></div>
                                    Media Recognition Pre summit and Summit
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block active-block wow fadeInUp">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span></div>
                                    Visibility materials at Exhibition space
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block wow fadeInUp">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span></div>
                                    Logo placement on all branding materials
                                </div>
                            </li>

                            <li class="accordion block wow fadeInUp">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span></div>
                                    Panel Discussion Participation
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--Accordian Box-->
                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block active-block wow fadeInUp">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span></div>
                                    Complimentary Summit Passes
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block wow fadeInUp">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span></div>
                                    Access to a Booth
                                </div>
                            </li>


                            <!--Block-->
                            <li class="accordion block wow fadeInUp">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span></div>
                                    Recognition in Post-Event Publications
                                </div>
                            </li>

                            <li class="accordion block wow fadeInUp">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span></div>
                                    VIP Access to Deal Rooms
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Clients Section-->
    <section class="clients-section">

        <div class="anim-icons">

            <span class="icon icon-dots-3 wow zoomIn"></span>

            <span class="icon icon-circle-blue wow zoomIn"></span>

        </div>

        <div class="auto-container">

            <div class="sec-title">

                <!-- <span class="title">Clients</span> -->

                <h2>Official Organizing Partners</h2>

            </div>


            <div class="sponsors-outer">

                <div class="row">

                    <!-- Client Block -->

                    <div class="client-block col-lg-2 col-md-6 col-sm-12">
                        <figure><a href="#"><img src="images/gallery/new1.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-2 col-md-6 col-sm-12">
                        <figure><a href="#"><img src="images/gallery/new2.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-2 col-md-6 col-sm-12">
                        <figure><a href="#"><img src="images/gallery/new4.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-2 col-md-6 col-sm-12">
                        <figure><a href="#"><img src="images/gallery/new5.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-2 col-md-6 col-sm-12">
                        <figure><a href="#"><img src="images/gallery/new3.png" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block col-lg-2 col-md-6 col-sm-12">
                        <figure><a href="#"><img src="images/gallery/new4.png" alt=""></a></figure>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!--End Clients Section-->
@endsection
