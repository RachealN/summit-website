@extends('site.layout.app')

@section('title', 'Register Ticket Page')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url('images/background/5.jpg');">
        <div class="auto-container">
            <h1>Choose a Ticket</h1>
        </div>
    </section>

    <section class="pricing-section-three">
        <div class="anim-icons">
            <span class="icon icon-line-1 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;"></span>
            <span class="icon icon-circle-1 wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;"></span>
            <span class="icon icon-dots wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Get Ticket</span>
            </div>
            <div class="outer-box">
                <div class="row">
                    <!-- Pricing Block -->
                    <div class="pricing-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="title">Personal</div>
                            <h4 class="price">$19</h4>
                            <ul class="features">
                                <li>01 Conference Tickets</li>
                                <li>Free Lunch And Coffee</li>
                                <li>Certificate</li>
                            </ul>
                            <div class="btn-box">
                                <a href="{{ route('ticket.personal') }}" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="pricing-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="title">Family</div>
                            <h4 class="price">$100</h4>
                            <ul class="features">
                                <li>05 Conference Tickets</li>
                                <li>Free Lunch And Coffee</li>
                                <li>Certificate</li>
                            </ul>
                            <div class="btn-box">
                                <a href="{{ route('ticket.family') }}" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="pricing-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="1200ms" style="visibility: visible; animation-delay: 1200ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="title">GROUP</div>
                            <h4 class="price">$150</h4>
                            <ul class="features">
                                <li>10 Conference Tickets</li>
                                <li>Free Lunch And Coffee</li>
                                <li>Certificate</li>
                            </ul>
                            <div class="btn-box">
                                <a href="{{ route('ticket.group') }}" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Page Title-->
@endsection
