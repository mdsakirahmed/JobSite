@extends('company.layout.app')
@push('title')
    Job List
@endpush
@push('head')

@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Start container-fluid-->
        <div class="container-fluid">
            <!--Start Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">All posted job</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javaScript:void();">jobSite</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Posted jobs</li>
                    </ol>
                </div>
                <div class="col-sm-3">
                    <div class="btn-group float-sm-right">
                            <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus-circle mr-1"></i> Post a new job</button>
                    </div>
                </div>
            </div>
            <!--End Breadcrumb-->
            <!--Start Staff Content-->
            <div class="col-lg-12">
                @foreach(auth()->user()->jobs as $job)
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header text-uppercase">Blockquotes with left alighned</div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                                    <footer class="blockquote-footer">From WWF's website</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--End Staff Content-->
        </div>
        <!-- End container-fluid-->
    </div>
@endsection
@push('foot')



@endpush
