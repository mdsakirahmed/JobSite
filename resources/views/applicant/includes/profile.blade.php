<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    <div class="user-title">
                        <img style="border-radius: 35px; border:white solid 2px" width="30px" class="user-image" src="{{ asset('uploads/images/'. auth()->user()->image) }}" alt="">
                        {{ auth()->user()->first_name }}
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

                        <div class="form-group skills">

                        </div>

                        <div class="form-group add-skill-area">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="" id="skill" name="skill" value="" placeholder="Skill" required="">
                                </div>
                                <div class="col">
                                    <button type="button" class="theme-btn btn-style-five" id="add-skill"><span class="txt">Add skill</span></button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group editable-area text-center">
                            <label for="image"><h3>Profile Image</h3></label>
                             <input type="file" class="" id="image" name="image" value="" required="">
                            <br>
                            <br>
                            <button type="button" class="theme-btn lg btn-style-five" id="add-image"><span class="txt">Upload image</span></button>
                            <hr>
                            <label for="resume"><h3>Resume</h3></label>
                             <input type="file" class="" id="resume" name="resume" value="" required="">
                            <br>
                            <br>
                            <button type="button" class="theme-btn lg btn-style-five" id="add-resume"><span class="txt">Upload resume</span></button>
                        </div>

                        <div class="form-group text-center">
                            <button type="button" class="theme-btn btn-style-four" id="edit-profile-btn"><span class="txt">Edit Profile</span></button>
                        </div>

                            <div class="form-group text-center">
                                <a target="_blank" href="{{ asset('uploads/resumes/').'/'.auth()->user()->resume }}" class="theme-btn btn-style-three resume-link" id=""><span class="txt">Download resume</span></a>
                            </div>

                    </form>
                    <form method="" action="#" class="job-detail" novalidate="">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        getData();
        //Show applicant register modal
        $('.profile-btn').click(function (){
            //alert('Working')
            $('.job-title').hide();
            $('.job-detail').hide();
            $('.add-skill-area').hide();
            $('.editable-area').hide();
            $('.modal').modal('show');
            $('.user-title').show();
            $('.user-detail').show();
            $('.user-detail').prop('disabled', true);
            $('.user-detail').css( "border", "3px solid red" );
            $('#edit-profile-btn').show();
            getSkill();
            getData();
            //$('.user-detail :input').prop('disabled', true);
        });
        //Editable modal
        $('#edit-profile-btn').click(function (){
            $(this).hide();
            $('.job-title').hide();
            $('.job-detail').hide();
            $('.modal').modal('show');
            $('.user-title').show();
            $('.user-detail').hide();
            $('.add-skill-area').show();
            $('.editable-area').show();
            getData();
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

        //Add resume
        $('#add-resume').click(function (){
            var formData = new FormData();
            formData.append('resume', $('#resume')[0].files[0])
            $.ajax({
                method: 'POST',
                url: "{{ route('applicant.profile.store') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.type == 'warning'){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message,
                            footer: ''
                        })
                    }else{
                        $('#resume').val('')
                        getData();
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Successfully uploaded resume',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
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
        //Add Image
        $('#add-image').click(function (){
            var formData = new FormData();
            formData.append('image', $('#image')[0].files[0])
            $.ajax({
                method: 'POST',
                url: "{{ route('applicant.profile.store') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.type == 'warning'){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message,
                            footer: ''
                        })
                    }else{
                        $('#resume').val('')
                        getData();
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Successfully uploaded image',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
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
                    var skills='';
                    data.forEach(function(skill){
                        skills += '<span class="badge badge-pill badge-primary">'+ skill.name +'</span> &nbsp;';
                    })
                    $(".skills").html(skills)
                },
            })
        }

        //get latest Applicant data
        function getData(){
            $.ajax({
                method: 'get',
                url: "{{ route('applicant.profile.index') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                processData: false,
                contentType: false,
                success: function (data) {
                    $('.user-image').attr("src", "uploads/images/"+data.image);
                    $('.resume-link').attr("href", "uploads/resumes/"+data.resume);
                    if (data.resume){
                        $('.resume-link').show();
                    }else {
                        $('.resume-link').hide();
                    }

                },
            })
        }


    });
</script>
