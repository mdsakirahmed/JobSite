@extends('company.layout.app')
@push('title')
    Applicants list
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
                    <h4 class="page-title">All applicants</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javaScript:void();">jobSite</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Applicants</li>
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

                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark shadow-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Skill</th>
                                <th scope="col">Resume</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($job->applications as $application)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $application->applicant->first_name .' '. $application->applicant->last_name }}</td>
                                <td>
                                    @foreach($application->applicant->skills as $skill)
                                        <span class="badge badge-success shadow-success m-1">{{ $skill->name }}</span> &nbsp;
                                    @endforeach
                                </td>
                                <td>
                                    <a target="_blank" href="{{ asset('uploads/resumes/').'/'.$application->applicant->resume }}" class="theme-btn btn-style-three resume-link" id=""><span class="txt">Download resume</span></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

            </div>
            <!--End Staff Content-->
        </div>
        <!-- End container-fluid-->
    </div>
@endsection
@push('foot')



@endpush
