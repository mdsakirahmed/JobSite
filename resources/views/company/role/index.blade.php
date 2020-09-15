@extends('staff.layout.app')
@push('title')
    Role
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
                    <h4 class="page-title">All role</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javaScript:void();">{{ $setting->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Role</li>
                    </ol>
                </div>
                <div class="col-sm-3">
                    <div class="btn-group float-sm-right">
                        @can('store role')
                        <button type="button" id="add-new" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus-circle mr-1"></i> Add new role</button>
                        @endcan
                    </div>
                </div>
            </div>
            <!--End Breadcrumb-->
            <!--Start Staff Content-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Role List</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-secondary shadow-secondary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Permissions</th>
                                    @canany(['edit role', 'delete role'])
                                        <th scope="col">Action</th>
                                    @endcanany
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @foreach($role->permissions as $permission)
                                                <span class="badge badge-pill badge-primary shadow-primary m-1">{{ $permission->name }}</span>
                                                <br>
                                            @endforeach
                                        </td>
                                        <th scope="col">
                                            @can('edit role')
                                                <button type="button" class="btn btn-outline-warning waves-effect waves-light m-1"
                                                        onclick="window.location.href='{{ route('editRole', \Illuminate\Support\Facades\Crypt::encryptString($role->id)) }}'"> <i class="fa fa-edit"></i> </button>
                                            @endcan
                                            @can('delete role')
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
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Name</span>
                        </div>
                        <input type="text" id="name" placeholder="Writer..." class="form-control">
                    </div>

                    <div class="demo-checkbox">
                        @foreach($permissions as $permission)
                            <input type="checkbox" id="permission-{{ $permission->id }}" value="{{ $permission->id }}" class="filled-in chk-col-info permissions">
                            <label for="permission-{{ $permission->id }}">{{ $permission->name }}</label>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer" id="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="add-submit-button">Add now</button>
                    <button type="button" class="btn btn-warning" id="edit-submit-button">Edit now</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            //Show modal for add
            $('#add-new').click(function(){
                $('#modal').modal('show');
                $('#edit-submit-button').hide();
                $('#add-submit-button').show();
                $('#modal-title').html('Add new role');
                $('#name').val('');
            });

            //Submit new category
            $('#add-submit-button').click(function(){
                var permissionId = [];
                var checkboxes = $('input[type=checkbox]:checked')
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].value != 'null'){
                        permissionId.push(checkboxes[i].value)
                    }
                }
                var formData = new FormData();
                formData.append('name', $('#name').val())
                formData.append('permissionId', permissionId)

                $.ajax({
                    method: 'POST',
                    url: '/role',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Successfully add '+data.name,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(function() {
                            location.reload();
                        }, 800);//

                    },
                    error: function (xhr) {
                        var errorMessage = '<div class="card bg-danger">\n' +
                            '                        <div class="card-body text-center p-5">\n' +
                            '                            <span class="text-white">';
                        $.each(xhr.responseJSON.errors, function(key,value) {
                            errorMessage +=(''+value+'<br>');
                        });
                        if (!xhr.responseJSON.errors){
                            errorMessage +='May you are not permitted or doing wrong';
                        }
                        errorMessage +='</span>\n' +
                            '                        </div>\n' +
                            '                    </div>';

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            footer: errorMessage,
                        })
                    },
                })
            });

            //Show modal for edit and set data
            $(".edit-button").click(function(){
                $('#modal').modal('show');
                $('#modal-title').html('Edit notice');
                $('#add-submit-button').hide();
                $('#edit-submit-button').show();
                $('#title').val($(this).parent().parent().find('td').eq(1).text());
                $('#detail').val($(this).parent().parent().find('td').eq(2).text());
                $('#notice-id').val($(this).parent().parent().find('.hidden-id').val());
            });

            //Submit edited category
            $('#edit-submit-button').click(function(){

                var formData = new FormData();
                formData.append('id', $('#notice-id').val())
                formData.append('title', $('#title').val())
                formData.append('detail', $('#detail').val())
                $.ajax({
                    method: 'POST',
                    url: '/admin/admin-notice/update',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        $('#modal').modal('hide');
                        $('#category-name').val('');
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Successfully edited '+data.title,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(function() {
                            location.reload();
                        }, 800);//

                    },
                    error: function (xhr) {
                        var errorMessage = '<div class="card bg-danger">\n' +
                            '                        <div class="card-body text-center p-5">\n' +
                            '                            <span class="text-white">';
                        $.each(xhr.responseJSON.errors, function(key,value) {
                            errorMessage +=(''+value+'<br>');
                        });
                        errorMessage +='</span>\n' +
                            '                        </div>\n' +
                            '                    </div>';
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            footer: errorMessage
                        })
                    },
                })
            });
        });
    </script>
@endsection
@push('foot')



@endpush
