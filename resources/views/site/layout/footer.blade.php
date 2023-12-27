
<footer class="main-footer">

    <!--Widgets Section-->

    <div class="widgets-section">

        <div class="auto-container">

            <div class="row">

                <!--Big Column-->

                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12 ">

                    <div class="row">

                        <!--Footer Column-->

                        <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <h2 class="widget-title">SDG Summit 2023</h2>
                                {{-- <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="" /></a>
                                </div> --}}
                                <div class="text">
                                    <p>
                                        Join us in shaping a brighter future for African women and girls. Together, let's create lasting change and build a more inclusive and prosperous Africa.
                                    </p>           
                                </div>
                                <ul class="social-icon-one social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                    <li><a href="https://twitter.com/AfriSDGsSummit"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li> 
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li> 
                                </ul>
                            </div>
                        </div>



                        <!--Footer Column-->

                        <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget useful-links">

                                <h2 class="widget-title">Useful Links</h2>

                                <ul class="user-links">
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('speakers') }}">Speakers</a></li>
                                    <li><a href="{{ route('events') }}">Events</a></li>
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>



                <!--Big Column-->

                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Contact Us</h2>
                                <div class="widget-content">
                                    <ul class="contact-list">
                                        <li>
                                            <span class="icon flaticon-clock"></span>
                                            <div class="text">09:00 - 17:00</div>
                                        </li>
                                        <li>
                                            <span class="icon flaticon-phone"></span>
                                            <div class="text"><a href="tel:+1-345-5678-77">+256-777-52-66-78</a></div>
                                        </li>
                                        <li>
                                            <span class="icon flaticon-paper-plane"></span>
                                            <div class="text"><a href="mailto:Secretariat@afriwgsdgsummit.org">Secretariat@afriwgsdgsummit.org</a></div>
                                        </li>
                                        <li>
                                            <span class="icon flaticon-worldwide"></span>
                                            <div class="text">Munyonyo Kampala, Uganda</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget instagram-widget">
                                <h2 class="widget-title">Instagram Gallery</h2>
                                <div class="widget-content">
                                    <div class="outer clearfix">
                                        <figure class="image">
                                            <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-1.jpg" alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-2.jpg" alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-3.jpg" alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="images/gallery/4.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-4.jpg" alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="images/gallery/5.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-5.jpg" alt=""></a>
                                        </figure>
                                        <figure class="image">
                                            <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-6.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Footer Bottom-->

    <div class="footer-bottom">                    

        <div class="auto-container">

            <div class="inner-container clearfix">

                <div class="copyright-text">
                    <p>&copy; Copyright {{ now()->format('Y') }} All Rights Reserved by African Women and Girls SDGs Summit</p>
                </div>

            </div>

        </div>

    </div>

</footer>
