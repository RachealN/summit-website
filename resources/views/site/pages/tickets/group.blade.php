@extends('site.layout.app')

@section('title', 'Group Ticket Page')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url('images/background/5.jpg');">
        <div class="auto-container">
            <h1>Group Ticket</h1>
        </div>
    </section>

    <section class="buy-ticket">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn animated" style="visibility: visible; animation-name: fa-spin;"></span>
            <span class="icon icon-circle-1 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <h2>Price: <span>$99</span></h2>
                        <p>
                            Join us for an extraordinary event dedicated to fostering inclusive transformation in Africa. This summit serves as a crucial platform to showcase the remarkable women who lead impactful businesses and aims to facilitate partnerships with government decision-makers, industry leaders, and representatives of the international community. Together, we will pave the way for new pathways towards inclusive development across the continent.
                        </p>

                        <h3>Benefits of Group Package</h3>

                        {{-- <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.</p> --}}

                        <ul class="list-style-one">

                            <li>Multiple Announcements during the event.</li>

                            <li>Logo &amp; company details on the WordCamp.</li>

                            <li>Dedicated blog post thanking each Gold.</li>

                            <li>Acknowledgment and opening and closing.</li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->

                <div class="form-column col-lg-4 col-md-12 col-sm-12">

                    <div class="inner-column">
                        <div class="ticket-form">
                            <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Full Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="phone" name="email" placeholder="Phone" required="">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="terms" id="term" required="">
                                    <label for="term">I accept the <span>Terms &amp; Conditions</span></label>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-three" type="submit" name="Submit"><span class="btn-title">Purchase</span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Follow Us -->

                        <div class="follow-us">
                            <h3>Follow Us</h3>
                            <ul class="social-icon-two social-icon-colored">
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="support-box">
                            <h3>Call for Support</h3>
                            <p>For any inquiries or further information, please reach out to</p>
                            <div class="number"><span class="fa fa-phone-volume"></span> <a href="tel:+256777526678">+256777526678</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Page Title-->
@endsection
