@extends('site.layout.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/9.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="contact-column col-lg-4 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Contact Info</h2>
                        </div>
                        <ul class="contact-info">
                            <li>
                                <span class="icon fa fa-map-marker-alt"></span>
                                <p><strong>Office</strong></p>
                                <p>Kampala,Uganda</p>
                            </li>

                            <li>
                                <span class="icon fa fa-phone-volume"></span>
                                <p><strong>Call Us</strong></p>
                                <p>+256 (0)7777777777</p>
                            </li>

                            <li>
                                <span class="icon fa fa-envelope"></span>
                                <p><strong>Mail Us</strong></p>
                                <p><a href="mailto:Secretariat@afriwgsdgsummit.org">Secretariat@afriwgsdgsummit.org</a></p>
                            </li>

                            <li>
                                <span class="icon fa fa-clock"></span>
                                <p><strong>Opening Time</strong></p>
                                <p>Mon - Fri: 09:00 - 18:00</p>
                            </li>
                        </ul>

                        <ul class="social-icon-two social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-form">
                            <div class="sec-title">
                                <h2>Get in Touch</h2>
                            </div>
                            <div class="contact-form">
                                <body>
                                <div class="container border bg-light p-5">
                                    <div class="form-group mt-10">
                                        <h5 for="name">Name</h5>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="name"
                                            placeholder="Enter your full names"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <h5 for="email">Email</h5>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="email"
                                            placeholder="Enter email"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <h5 for="message">Message</h5>
                                        <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                                    </div>
                                    <button class="btn btn-primary" onclick="sendMail()">Submit</button>
                                </div>
                                </body>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->
@endsection
