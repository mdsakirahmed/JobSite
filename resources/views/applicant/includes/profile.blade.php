<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    <div class="user-title">
                        <img style="border-radius: 35px; border:white solid 2px" width="30px" src="{{ asset('uploads/images/default.png') }}" alt=""> {{ auth()->user()->first_name }}
                    </div>
                    <div class="job-title">
                        **Job titile
                    </div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="" class="default-form contact-form col-lg-12 col-md-12 col-sm-12">
                    <form method="" action="#" class="" novalidate="">
                        <div class="form-group">
                            <input type="text" class="user-detail" name="first_name" value="{{ auth()->user()->first_name }}" placeholder="First Name" required="">
                        </div>

                        <div class="form-group">
                            <input type="text" class="user-detail" name="last_name" value="{{ auth()->user()->last_name }}" placeholder="Last name" required="">
                        </div>

                        <div class="form-group">
                            <input type="email" class="user-detail" name="email" value="{{ auth()->user()->email }}" placeholder="Email" required="">
                        </div>

                        <div class="form-group add-skill-area">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="user-detail" id="skill" name="skill" value="" placeholder="Skill" required="">
                                </div>
                                <div class="col">
                                    <button type="button" class="theme-btn btn-style-five" id="add-skill"><span class="txt">Add skill</span></button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button type="button" class="theme-btn btn-style-four" id="edit-profile-btn"><span class="txt">Edit Profile</span></button>
                            <button type="button" class="theme-btn btn-style-three" id="update-profile-btn"><span class="txt">Update Now</span></button>
                        </div>

                    </form>
                    <form method="" action="#" class="job-detail" novalidate="">

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        //Show applicant register modal
        $('.profile-btn').click(function (){
            //alert('Working')
            $('.job-title').hide();
            $('.job-detail').hide();
            $('.add-skill-area').hide();
            $('#update-profile-btn').hide();
            $('.modal').modal('show');
            $('.user-title').show();
            $('.user-detail').prop('disabled', true);
            $('.user-detail').css( "border", "3px solid red" );
            $('#edit-profile-btn').show();
            //$('.user-detail :input').prop('disabled', true);
        });

        $('#edit-profile-btn').click(function (){
            $(this).hide();
            $('.job-title').hide();
            $('.job-detail').hide();
            $('.modal').modal('show');
            $('.user-title').show();
            $('.user-detail').prop('disabled', false);
            $('.user-detail').css( "border", "3px solid blue" );
            $('.add-skill-area').show();
            $('#update-profile-btn').show();
        });

        //Add skill
        $('#add-skill').click(function (){
            var formData = new FormData();
            formData.append('skill', $('#skill').val())
            $.ajax({
                method: 'POST',
                url: "{{ route('applicant.skill.store') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    $('#skill').val('')
                    getSkill();
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Successfully added '+data.name,
                        showConfirmButton: false,
                        timer: 1500
                    })
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

        //Get Skills
        function getSkill(){
            $.ajax({
                method: 'get',
                url: "{{ route('applicant.skill.index') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                processData: false,
                contentType: false,
                success: function (data) {
                    console.log(data)
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Successfully goted ',
                        showConfirmButton: false,
                        timer: 1500
                    })
                },
            })
        }


    });
</script>
