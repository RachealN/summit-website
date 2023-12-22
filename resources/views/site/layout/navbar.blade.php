<!-- Main Header-->

<header class="main-header">

    <div class="main-box">

        <div class="auto-container clearfix">

            <div class="logo-box">
                {{-- <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div> --}}
            </div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu-button"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('speakers') }}">Speakers</a></li>
                            <li><a href="{{ route('events') }}">Events</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>

                </nav>
                <!-- Main Menu End-->

                <!-- Outer box -->
                <div class="outer-box">
                    <!-- Button Box -->
                    <div class="btn-box">
                        <a href="{{ route('register') }}" class="theme-btn btn-style-one"><span class="btn-title">Register Here</span></a>
                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- Mobile Menu  -->

    <div class="mobile-menu">

        <div class="menu-backdrop"></div>

        <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>



        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->

        <nav class="menu-box">

            <!-- <div class="nav-logo"><a href="index.html"><img src="images/logo6.png" alt="" title=""></a></div> -->



            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>

        </nav>

    </div><!-- End Mobile Menu -->



</header>

<!--End Main Header -->
