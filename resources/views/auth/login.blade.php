<!DOCTYPE html>
<html lang="en">
<!-- This system developed by DataTech BD ltd. Phone: 01304734623-25 | info@datatechbd.com | 08-09-2020-->

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Custom Style-->
    <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>
    <!--SweetAlert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!--====== AJAX ======-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
<!-- Start wrapper-->
<div id="wrapper">
    <div class="card-authentication2 mx-auto my-5" >
        <div class="card-group shadow-lg">


            <div class="card mb-0">
                <div class="card-body">
                    <div class="card-content p-3">
                        <div class="card-title text-uppercase text-center pb-3"><b>Sign In</b></div>
                        @include('includes.message')
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div class="position-relative has-icon-left">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="tel" id="userEmail" name="email" class="form-control" placeholder="Email address">
                                    <div class="form-control-position">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="position-relative has-icon-left">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" id="userPassword" name="password" class="form-control" placeholder="Password">
                                    <div class="form-control-position">
                                        <i class="icon-lock"></i>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" id="" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Sign In</button>
                            <div class="text-center pt-3">
                                <hr>
                                <div class="form-row mr-0 ml-0">
                                    <div class="form-group col-6 text-left">
                                        <a href="#" class="applicant-register-btn">Register as applicant</a>
                                    </div>
                                    <div class="form-group col-6 text-right">
                                        <a href="#" class="company-register-btn">Register as company</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
</div><!--wrapper-->


<!-- Modal -->
<div class="modal fade" id="modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-content p-3">
                    <div class="card-title text-uppercase text-center pb-3"><b>Create Account</b></div>
                    <form method="" action="#">
                        <input type="hidden" id="type">
                        <div class="form-group">
                            <div class="position-relative has-icon-left">
                                <input type="text" id="business_name" name="business-name" class="form-control" placeholder="Business name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-left">
                                <input type="text" id="first_name" name="first-name" class="form-control" placeholder="First name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-left">
                                <input type="text" id="last_name" name="last-name" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-left">
                                <input type="email" id="email_address" name="email" class="form-control" placeholder="Email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-left">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <button type="button" id="register" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Sign Up</button>

                        <div class="text-center pt-3">
                            <hr>
                            <div class="form-row mr-0 ml-0">
                                <div class="form-group col-6 text-left">
                                    <a href="#" class="applicant-register-btn">Register as applicant</a>
                                </div>
                                <div class="form-group col-6 text-right">
                                    <a href="#" class="company-register-btn">Register as company</a>
                                </div>
                            </div>
                            <p class="text-muted">Already have an account? <a href="#" data-dismiss="modal"> Sign In</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>>
<script>
    $(document).ready(function() {
        //Show applicant register modal
        $('.applicant-register-btn').click(function (){
            //alert('Working')
            $('#modal').modal('show');
            $('#business_name').hide();
            $('#type').val('0');
            $('.modal-title').html('Register as applicant');
        });
        //Show company register modal
        $('.company-register-btn').click(function (){
            //alert('Working')
            $('#modal').modal('show');
            $('#business_name').show();
            $('#type').val('1');
            $('.modal-title').html('Register as company');
        });

        //Submit new category
        $('#register').click(function(){
            var formData = new FormData();
            formData.append('type', $('#type').val())
            formData.append('business_name', $('#business_name').val())
            formData.append('first_name', $('#first_name').val())
            formData.append('last_name', $('#last_name').val())
            formData.append('email_address', $('#email_address').val())
            formData.append('password', $('#password').val())

            $.ajax({
                method: 'POST',
                url: "{{ route('registration') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Successfully login',
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
</body>

<!-- This system developed by DataTech BD ltd. Phone: 01304734623-25 | info@datatechbd.com | 08-09-2020-->
</html>
