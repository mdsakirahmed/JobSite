@extends('company.layout.app')
@push('title')
    Create new job
@endpush
@push('head')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
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
            <!--Start Job form-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @include('includes.message')
                        <form action="{{ route('company.job.store') }}" method="post">
                            @csrf
                            <h4 class="form-header text-uppercase">
                                <i class="fa fa-laptop"></i>
                                Write your job details
                            </h4>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="job_title">Job title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="salary">Salary</label>
                                    <input type="text" class="form-control" name="salary" id="salary" value="{{ old('salary') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" name="location" id="location" value="{{ old('location') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country" id="country" value="{{ old('country') }}">
                                </div>
                            </div>
                            <h4 class="form-header text-uppercase">
                                <i class="fa fa-envelope-o"></i>
                                Job description
                            </h4>
                            <div class="form-group">
                                <textarea id="description" name="description"> {{ old('description') }} </textarea>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-dark shadow-dark m-1"><i class="fa fa-times"></i> Cancel</button>
                                <button type="submit" id="" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--End Job form-->
        </div>
        <!-- End container-fluid-->
    </div>
@endsection
@push('foot')


@endpush
