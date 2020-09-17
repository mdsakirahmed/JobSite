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
                            <a href="{{ route('company.job.create') }}" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus-circle mr-1"></i> Post a new job</a>
                    </div>
                </div>
            </div>
            <!--End Breadcrumb-->
            <!--Start Staff Content-->
            <div class="row col-lg-12">
                @foreach(auth()->user()->jobs as $job)
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header text-uppercase">{{ $job->title }}</div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p>{!! $job->description !!}</p>
                                    <footer class="blockquote-footer">{{ $job->created_at->format('d/m/Y - h:i A') }}</footer>
                                    <footer class="blockquote-footer">{{ $job->location }} | {{ $job->country }}</footer>
                                    <footer class="blockquote-footer info-outer"><b>{{ $job->salary }}</b></footer>
                                    <hr>
                                    <div class="col-12">
                                        <a href="{{ route('company.job.show', $job->id) }}">
                                            <div class="card gradient-forest">
                                                <div class="card-body text-center p-5">
                                                    <span class="text-white">Total application: {{ $job->applications()->count() }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
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
