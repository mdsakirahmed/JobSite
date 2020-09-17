@extends('applicant.layouts.app')

@push('title') {{ 'Home' }} @endpush

@section('content')
    <!--Page Title-->
    <section class="page-title">
        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/frontend/images/background/pattern-14.png') }})"></div>
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/frontend/images/background/pattern-15.png') }})"></div>
        <div class="auto-container">
            <h2>#jObSite</h2>
            <ul class="page-breadcrumb">
                <li><a href="#">Welcome to job site </a></li>
                <li>{{ auth()->user()->first_name .' '. auth()->user()->last_name  }}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Blog Page Section -->
    <section class="blog-page-section">
        <div class="auto-container">
            <div class="row clearfix jobs">

                <!-- Jobs -->
                @foreach($jobs as $job)
                <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <br>
                            <br>
                        </div>
                        <div class="lower-content">
                            <button @if(auth()->user()->checkApplication($job->id)) class="category btn bg-danger" disabled @else class="category btn apply-btn" @endif id="{{ $job->id }}">
                                @if(auth()->user()->checkApplication($job->id))
                                Applied at &nbsp; {{auth()->user()->checkApplication($job->id)->created_at->format('d/m/Y - h:i A')}}
                                @else
                                    Apply Now
                                @endif
                            </button>
                            <h4><a href="#"> {{ Illuminate\Support\Str::limit($job->title, 20) }} </a></h4>
                            <div class="text"> {!! Illuminate\Support\Str::limit($job->description, 50) !!} </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="text-warning">
                                         Job posted at: {{ $job->created_at->format('d/m/Y - h:i A') }}
                                    </div>
                                    <hr>
                                    <div class="text-info">
                                        Company:  <span class="text-secondary text-right">{{ $job->company->business_name }}</span>
                                    </div>
                                    <div class="text-info">
                                        Country:  <span class="text-secondary text-right">{{ $job->country }}</span>
                                    </div>
                                    <div class="text-info">
                                        Location:  <span class="text-secondary text-right">{{ $job->location }}</span>
                                    </div>
                                    <div class="text-info">
                                        Salary:  <span class="text-secondary text-right">{{ $job->salary }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
    <script>
        //Add Image
        $('.apply-btn').click(function (){
            var ID = this.id;
            $.ajax({
                method: 'get',
                url: "{{ route('applicant.profile.index') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.resume){
                       //Resume found
                        var formData = new FormData();
                        formData.append('resume', ID)
                        $.ajax({
                            method: 'POST',
                            url: "{{ route('applicant.home.store') }}",
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function (data) {
                                $('#'+ID).removeClass('apply-btn')
                                $('#'+ID).addClass('bg-danger')
                                $('#'+ID).prop( "disabled", true );
                                $('#'+ID).html('Application send')
                                Swal.fire({
                                    position: 'top-end',
                                    icon: data.type,
                                    title: data.message,
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

                    }else {
                        //Resume not found
                        Swal.fire({
                            icon: 'error',
                            title: 'Resume...',
                            text: 'Please upload your resume!',
                            footer: ''
                        })
                        $('.job-title').hide();
                        $('.job-detail').hide();
                        $('.modal').modal('show');
                        $('.user-title').show();
                        $('.user-detail').hide();
                        $('.add-skill-area').show();
                        $('.editable-area').show();
                    }
                },
            })
        });
    </script>
@endsection
