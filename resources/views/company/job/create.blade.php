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
            <!--Start Job form-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <h4 class="form-header text-uppercase">
                                <i class="fa fa-address-book-o"></i>
                                User Profile
                            </h4>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="input-10">First Name</label>
                                    <input type="text" class="form-control" id="input-10">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input-11">Last Name</label>
                                    <input type="text" class="form-control" id="input-11">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="input-12">Username</label>
                                    <input type="text" class="form-control" id="input-12">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input-13">Petname</label>
                                    <input type="text" class="form-control" id="input-13">
                                </div>
                            </div>
                            <h4 class="form-header text-uppercase">
                                <i class="fa fa-envelope-o"></i>
                                Contact Info &amp; Bio
                            </h4>
                            <div class="form-group">
                                <div id="summernoteEditor">
                                    <h4>The standard Lorem Ipsum passage, used since the 1500s</h4>
                                    <img src="assets/images/gallery/modal-img.jpg" class="ml-2 mb-2 w-25" alt="image" align="right">
                                    <p class="text-justify">
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    </p>
                                    <p class="text-justify">
                                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                                    </p>
                                </div>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-dark shadow-dark m-1"><i class="fa fa-times"></i> Cancel</button>
                                <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i> Save</button>
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
    <script src="{{ asset('assets/plugins/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script>
        $('#summernoteEditor').summernote({
            height: 400,
            tabsize: 2
        });
    </script>

@endpush
