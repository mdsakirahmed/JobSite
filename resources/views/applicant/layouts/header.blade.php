<header class="main-header header-style-two">



    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
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
                <a href="index.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">

                    <!-- Cart Box -->
                    <div class="cart-box">
                        <div class="dropdown">
                            <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-bag-1"></span><span class="total-cart">2</span></button>
                            <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">

                                <div class="cart-product">
                                    <div class="inner">
                                        <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                        <div class="image"><img src="images/resource/post-thumb-1.jpg" alt="" /></div>
                                        <h3><a href="shop-single.html">Flying Ninja</a></h3>
                                        <div class="quantity-text">Quantity 1</div>
                                        <div class="price">$99.00</div>
                                    </div>
                                </div>
                                <div class="cart-product">
                                    <div class="inner">
                                        <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                        <div class="image"><img src="images/resource/post-thumb-2.jpg" alt="" /></div>
                                        <h3><a href="shop-single.html">Patient Ninja</a></h3>
                                        <div class="quantity-text">Quantity 1</div>
                                        <div class="price">$99.00</div>
                                    </div>
                                </div>
                                <div class="cart-total">Sub Total: <span>$198</span></div>
                                <ul class="btns-boxed">
                                    <li><a href="shoping-cart.html">View Cart</a></li>
                                    <li><a href="checkout.html">CheckOut</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <!-- Search Btn -->
                    <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>


                </div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>



