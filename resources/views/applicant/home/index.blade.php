@extends('applicant.layouts.app')

@push('title') {{ 'Home' }} @endpush

@section('content')
    <!--Page Title-->
    <section class="page-title">
        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/frontend/images/background/pattern-14.png') }})"></div>
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/frontend/images/background/pattern-15.png') }})"></div>
        <div class="auto-container">
            <h2>#jObSite</h2>
            <ul class="page-breadcrumb">
                <li><a href="#">home</a></li>
                <li>Latest News</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Blog Page Section -->
    <section class="blog-page-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- News Block -->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <br>
                            <br>
                        </div>
                        <div class="lower-content">
                            <div class="category">Apply Now</div>
                            <h4><a href="blog-single.html">Job Title</a></h4>
                            <div class="text">Description The basic premise of search engine reputation management in to use the greate work</div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <!-- Author Box -->
                                        <div class="author-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <img src="images/resource/news-author-1.jpg" alt="" >
                                                </div>
                                                Villal Pando, <span>November 21, 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="blog-single.html" class="share"><span class="fa fa-share-alt"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->

@endsection
