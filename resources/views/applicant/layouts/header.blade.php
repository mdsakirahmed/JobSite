<header class="main-header header-style-two">



    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="#"><img width="100px" src="{{ asset('assets/frontend/images/logo.png') }}" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li>
                                    <a href="{{ route('applicant.home.index') }}">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('applicant.home.index') }}">
                                        My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('uploads/resumes/').'/'.auth()->user()->resume }}" target="_blank" class="resume-link">
                                        Download resume
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!-- Search Btn -->
                        <div class="search-box-btn search-box-outer " onclick="logout()">
                            <span class="icon fa fa-sign-out bg-danger"></span>
                        </div>
                        <!-- Quote Btn -->
                        <div class="btn-box">
                            <a href="#" class="quote-btn theme-btn profile-btn ">
                                <img style="border-radius: 35px; border:white solid 2px" width="30px" class="user-image" src="{{ asset('uploads/images/'. auth()->user()->image) }}" alt="">
                                {{ auth()->user()->first_name }}</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="#" title=""><img width="100px" src="{{ asset('assets/frontend/images/logo.png') }}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">




                </div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="#"><img width="100px" src="{{ asset('assets/frontend/images/logo.png') }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>



