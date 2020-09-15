@extends('staff.layout.app')
    @push('title')
        Staff
    @endpush
    @push('head')
        <!--Data Tables -->
        <link href="{{ asset('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    @endpush
@section('content')
<div class="content-wrapper">
    <!-- Start container-fluid-->
    <div class="container-fluid">
        <!--Start Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">All staff</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">{{ $setting->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Staff</li>
                </ol>
            </div>
            <div class="col-sm-3">
                <div class="btn-group float-sm-right">
                    @can('store staff')
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus-circle mr-1"></i> Add new staff</button>
                    @endcan
                </div>
            </div>
        </div>
        <!--End Breadcrumb-->
        <!--Start Staff Content-->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Staff List</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-secondary shadow-secondary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>

                                @canany(['edit staff', 'delete staff'])
                                    <th scope="col">Action</th>
                                @endcanany

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($staffs as $staff)
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="{{ asset('uploads/images/profiles/'.$staff->image) }}" alt="" height="50px" width="50px" style="border-radius: 15px;"></td>
                                <td>
                                    {{ $staff->name }} &nbsp;
                                    @if($staff->isOnline())
                                        <span class="badge badge-pill badge-success shadow-success m-1">Online</span>
                                    @else
                                        <span class="badge badge-pill badge-danger shadow-success m-1">Offline</span>
                                    @endif

                                </td>
                                <td>{{ $staff->phone }}</td>
                                <th scope="col">
                                    @can('edit staff')
                                        <button type="button" class="btn btn-outline-warning waves-effect waves-light m-1"> <i class="fa fa-edit"></i> </button>
                                    @endcan
                                    @can('delete staff')
                                        <button type="button" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="fa fa-trash-o"></i> </button>
                                    @endcan
                                </th>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End Staff Content-->
    </div>
    <!-- End container-fluid-->
</div>
@endsection
@push('foot')



@endpush
