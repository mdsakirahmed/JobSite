@extends('staff.layout.app')
@push('title')
    App setting
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
                    <h4 class="page-title">App setting</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javaScript:void();">{{ $setting->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">App setting</li>
                    </ol>
                </div>
            </div>
            <!--End Breadcrumb-->
            <!-- App setting form -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <h4 class="form-header text-uppercase">
                                    <i class="fa fa-apple"></i>
                                    Application information
                                </h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input-27">Company Name</label>
                                        <input type="text" value="{{ $setting->name }}" class="form-control form-control-rounded" id="name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input-27">Company motto</label>
                                        <input type="text" value="{{ $setting->motto }}" class="form-control form-control-rounded" id="motto">
                                    </div>
                                </div>
                                <!--logo_nav-->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <br>
                                        <img height="50px" class="form-control form-control-rounded" src="{{ asset('uploads/images/logos/'.$setting->logo_nav) }}" alt="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input-28">Nav Logo</label>
                                        <input type="file" value="{{ $setting->logo_nav }}" accept="image/*" class="form-control form-control-rounded" id="logo_nav">
                                    </div>
                                </div>

                                <!--logo_sticky-->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <br>
                                        <img height="50px" class="form-control form-control-rounded" src="{{ asset('uploads/images/logos/'.$setting->logo_sticky) }}" alt="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input-28">Sticky Logo</label>
                                        <input type="file" value="{{ $setting->logo_sticky }}" accept="image/*" class="form-control form-control-rounded" id="logo_sticky">
                                    </div>
                                </div>

                                <!--logo_mobile-->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <br>
                                        <img height="50px" class="form-control form-control-rounded" src="{{ asset('uploads/images/logos/'.$setting->logo_mobile) }}" alt="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input-28">Mobile Logo</label>
                                        <input type="file" value="{{ $setting->logo_mobile }}" accept="image/*" class="form-control form-control-rounded" id="logo_mobile">
                                    </div>
                                </div>

                                <!--logo_dashboard_small-->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <br>
                                        <img height="50px" class="form-control form-control-rounded" src="{{ asset('uploads/images/logos/'.$setting->logo_dashboard_small) }}" alt="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input-28">Dashboard Small Logo</label>
                                        <input type="file" value="{{ $setting->logo_dashboard_small }}" accept="image/*" class="form-control form-control-rounded" id="logo_dashboard_small">
                                    </div>
                                </div>

                                <!--fav-->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <br>
                                        <img height="50px" class="form-control form-control-rounded" src="{{ asset('uploads/images/logos/'.$setting->fav) }}" alt="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input-28">Fav Icon</label>
                                        <input type="file" value="{{ $setting->fav }}" accept="image/*" class="form-control form-control-rounded" id="fav">
                                    </div>
                                </div>

                                <!--phone & email-->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="phone">Company Phone</label>
                                        <input type="text" value="{{ $setting->phone }}" class="form-control form-control-rounded" id="phone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Company Email</label>
                                        <input type="email"  value="{{ $setting->email }}" class="form-control form-control-rounded" id="email">
                                    </div>
                                </div>

                                <!--address-->
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="address">Company Address</label>
                                        <input type="text" value="{{ $setting->address }}" class="form-control form-control-rounded" id="address">
                                    </div>
                                </div>

                                <!--sms_username & sms_key-->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="sms_username">SMS Username</label>
                                        <input type="text" value="{{ $setting->sms_username }}" class="form-control form-control-rounded" id="sms_username">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sms_key">SMS Key</label>
                                        <input type="text"  value="{{ $setting->sms_key }}" class="form-control form-control-rounded" id="sms_key">
                                    </div>
                                </div>

                                <!--reset_sms_count-->
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="reset_sms_count">Maximum reset password/day</label>
                                        <input type="text" value="{{ $setting->reset_sms_count }}" class="form-control form-control-rounded" id="reset_sms_count">
                                    </div>
                                </div>

                                <!--reset_sms_template-->
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="reset_sms_template">Reset sms template</label>
                                        <textarea class="form-control form-control-rounded" rows="4" id="reset_sms_template">{{ $setting->reset_sms_template }}</textarea>
                                    </div>
                                </div>

                                <!--welcome_sms_template-->
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="reset_sms_template">Welcome sms template</label>
                                        <textarea class="form-control form-control-rounded" rows="4" id="welcome_sms_template">{{ $setting->welcome_sms_template }}</textarea>
                                    </div>
                                </div>

                                <!--short_company_description-->
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="reset_sms_template">Company description</label>
                                        <textarea class="form-control form-control-rounded" rows="4" id="short_company_description">{{ $setting->short_company_description }}</textarea>
                                    </div>
                                </div>

                                <!--short_subscribe_description-->
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="reset_sms_template">Subscribe description</label>
                                        <textarea class="form-control form-control-rounded" rows="4" id="short_subscribe_description">{{ $setting->short_subscribe_description }}</textarea>
                                    </div>
                                </div>

                                <!--Banner & current_status-->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Banner</label>
                                            </div>
                                            <select class="custom-select" id="banner">
                                                <option selected="" disabled>Choose...</option>
                                                <option value="1" @if($setting->banner == 1) selected @endif>Banner style one</option>
                                                <option value="2" @if($setting->banner == 2) selected @endif>Banner style two</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--current_status-->
                                    <div class="form-group col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Current status</label>
                                            </div>
                                            <select class="custom-select" id="current_status">
                                                <option selected="" disabled>Choose...</option>
                                                <option value="1" @if($setting->current_status == 1) selected @endif>Status style one</option>
                                                <option value="2" @if($setting->current_status == 2) selected @endif>Status style two</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!--team & footer-->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Team</label>
                                            </div>
                                            <select class="custom-select" id="team">
                                                <option selected="" disabled>Choose...</option>
                                                <option value="1" @if($setting->team == 1) selected @endif>Team style one</option>
                                                <option value="2" @if($setting->team == 2) selected @endif>Team style two</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--footer-->
                                    <div class="form-group col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Footer</label>
                                            </div>
                                            <select class="custom-select" id="footer">
                                                <option selected="" disabled>Choose...</option>
                                                <option value="1" @if($setting->footer == 1) selected @endif>Footer style one</option>
                                                <option value="2" @if($setting->footer == 2) selected @endif>Footer style two</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <button type="button" class="btn btn-dark shadow-dark m-1"><i class="fa fa-times"></i> Cancel</button>
                                    <button type="button" id="setting-submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <h4 class="form-header text-uppercase">
                                    <i class="fa fa-headphones"></i>
                                    Frontend Sections
                                </h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->whoweare_section_name }}" class="form-control form-control-rounded" id="whoweare_section_name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->whoweare_section_title }}" class="form-control form-control-rounded" id="whoweare_section_title">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control form-control-rounded" rows="4" id="whoweare_section_description">{{ $section->whoweare_section_description }}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->whoweare_section_point1 }}" class="form-control form-control-rounded" id="whoweare_section_point1">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->whoweare_section_point2 }}" class="form-control form-control-rounded" id="whoweare_section_point2">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->whoweare_section_point3 }}" class="form-control form-control-rounded" id="whoweare_section_point3">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <br>
                                        <img height="80px" class="form-control form-control-rounded" src="{{ asset('uploads/images/home/'.$section->whoweare_section_image) }}" alt="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <br><br>
                                        <input type="file" value="{{ $section->whoweare_section_image }}" accept="image/*" class="form-control form-control-rounded" id="whoweare_section_image">
                                    </div>
                                </div>
                                <h4 class="form-header text-uppercase">URL</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->url }}" class="form-control form-control-rounded" id="url">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->url_name }}" class="form-control form-control-rounded" id="url_name">
                                    </div>
                                </div>
                                <h4 class="form-header text-uppercase">Service</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->service_section_name }}" class="form-control form-control-rounded" id="service_section_name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->service_section_title }}" class="form-control form-control-rounded" id="service_section_title">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control form-control-rounded" rows="4" id="service_section_description">{{ $section->service_section_description }}</textarea>
                                    </div>
                                </div>
                                <h4 class="form-header text-uppercase">Recent Project</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->recent_project_section_name }}" class="form-control form-control-rounded" id="recent_project_section_name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->recent_project_section_title }}" class="form-control form-control-rounded" id="recent_project_section_title">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control form-control-rounded" rows="4" id="recent_project_section_description">{{ $section->recent_project_section_description }}</textarea>
                                    </div>
                                </div>
                                <h4 class="form-header text-uppercase">Current</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->current_section_name }}" class="form-control form-control-rounded" id="current_section_name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->current_section_title }}" class="form-control form-control-rounded" id="current_section_title">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control form-control-rounded" rows="4" id="current_section_description">{{ $section->current_section_description }}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->current_section_option1 }}" class="form-control form-control-rounded" id="current_section_option1">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->current_section_option2 }}" class="form-control form-control-rounded" id="current_section_option2">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->current_section_option3 }}" class="form-control form-control-rounded" id="current_section_option3">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->current_section_option4 }}" class="form-control form-control-rounded" id="current_section_option4">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <br>
                                        <img height="80px" class="form-control form-control-rounded" src="{{ asset('uploads/images/home/'.$section->current_section_image) }}" alt="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <br><br>
                                        <input type="file" value="{{ $section->current_section_image }}" accept="image/*" class="form-control form-control-rounded" id="current_section_image">
                                    </div>
                                </div>
                                <h4 class="form-header text-uppercase">Team</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->team_section_name }}" class="form-control form-control-rounded" id="team_section_name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->team_section_title }}" class="form-control form-control-rounded" id="team_section_title">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control form-control-rounded" rows="4" id="team_section_description">{{ $section->team_section_description }}</textarea>
                                    </div>
                                </div>
                                <h4 class="form-header text-uppercase">How we do</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->how_we_do_section_name }}" class="form-control form-control-rounded" id="how_we_do_section_name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->how_we_do_section_title }}" class="form-control form-control-rounded" id="how_we_do_section_title">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->how_we_do_section_option1 }}" class="form-control form-control-rounded" id="how_we_do_section_option1">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->how_we_do_section_option2 }}" class="form-control form-control-rounded" id="how_we_do_section_option2">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->how_we_do_section_option3 }}" class="form-control form-control-rounded" id="how_we_do_section_option3">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->how_we_do_section_option4 }}" class="form-control form-control-rounded" id="how_we_do_section_option4">
                                    </div>

                                </div>
                                <h4 class="form-header text-uppercase">Testimonial</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->testimonial_section_name }}" class="form-control form-control-rounded" id="testimonial_section_name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->testimonial_section_title }}" class="form-control form-control-rounded" id="testimonial_section_title">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control form-control-rounded" rows="4" id="testimonial_section_description">{{ $section->testimonial_section_description }}</textarea>
                                    </div>
                                </div>
                                <h4 class="form-header text-uppercase">FAQ</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->faq_section_name }}" class="form-control form-control-rounded" id="faq_section_name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->faq_section_title }}" class="form-control form-control-rounded" id="faq_section_title">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control form-control-rounded" rows="4" id="faq_section_description">{{ $section->faq_section_description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <br>
                                        <img height="80px" class="form-control form-control-rounded" src="{{ asset('uploads/images/home/'.$section->faq_section_image) }}" alt="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <br><br>
                                        <input type="file" value="{{ $section->faq_section_image }}" accept="image/*" class="form-control form-control-rounded" id="faq_section_image">
                                    </div>
                                </div>
                                <h4 class="form-header text-uppercase">BLOG</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->blog_section_name }}" class="form-control form-control-rounded" id="blog_section_name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->blog_section_title }}" class="form-control form-control-rounded" id="blog_section_title">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control form-control-rounded" rows="4" id="blog_section_description">{{ $section->blog_section_description }}</textarea>
                                    </div>
                                </div>
                                <h4 class="form-header text-uppercase">HIRE</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" value="{{ $section->hire_section_name }}" class="form-control form-control-rounded" id="hire_section_name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" value="{{ $section->hire_section_title }}" class="form-control form-control-rounded" id="hire_section_title">
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <button type="button" class="btn btn-dark shadow-dark m-1"><i class="fa fa-times"></i> Cancel</button>
                                    <button type="button" id="section-submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End App setting form -->
        </div>
        <!-- End container-fluid-->
    </div>
    <!-- Button trigger modal -->
    <script>
        $(document).ready(function() {
            //Submit setting
            $('#setting-submit').click(function(){
               // alert($('#logo_nav')[0].files[0]) ;
                var formData = new FormData();

                formData.append('name', $('#name').val())

                formData.append('logo_nav', $('#logo_nav')[0].files[0])
                formData.append('logo_sticky', $('#logo_sticky')[0].files[0])
                formData.append('logo_mobile', $('#logo_mobile')[0].files[0])
                formData.append('logo_dashboard_small', $('#logo_dashboard_small')[0].files[0])
                formData.append('fav', $('#fav')[0].files[0])

                formData.append('motto', $('#motto').val())
                formData.append('phone', $('#phone').val())
                formData.append('email', $('#email').val())
                formData.append('address', $('#address').val())
                formData.append('sms_username', $('#sms_username').val())
                formData.append('sms_key', $('#sms_key').val())
                formData.append('reset_sms_count', $('#reset_sms_count').val())
                formData.append('reset_sms_template', $('#reset_sms_template').val())
                formData.append('welcome_sms_template', $('#welcome_sms_template').val())
                formData.append('footer', $('#footer').val())
                formData.append('banner', $('#banner').val())
                formData.append('current_status', $('#current_status').val())
                formData.append('team', $('#team').val())
                formData.append('short_company_description', $('#short_company_description').val())
                formData.append('short_subscribe_description', $('#short_subscribe_description').val())
                $.ajax({
                    method: 'POST',
                    url: "{{ route('updateSetting') }}",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        console.log(data)
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Successfully setting updated ',
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
                            footer: errorMessage
                        })
                    },
                })
            });

            //Submit section
            $('#section-submit').click(function(){
               // alert($('#logo_nav')[0].files[0]) ;
                var formData = new FormData();
                formData.append('name', $('#name').val())

                formData.append('whoweare_section_image', $('#whoweare_section_image')[0].files[0])
                formData.append('current_section_image', $('#current_section_image')[0].files[0])
                formData.append('faq_section_image', $('#faq_section_image')[0].files[0])

                formData.append('whoweare_section_name', $('#whoweare_section_name').val())
                formData.append('whoweare_section_title', $('#whoweare_section_title').val())
                formData.append('whoweare_section_description', $('#whoweare_section_description').val())
                formData.append('whoweare_section_point1', $('#whoweare_section_point1').val())
                formData.append('whoweare_section_point2', $('#whoweare_section_point2').val())
                formData.append('whoweare_section_point3', $('#whoweare_section_point3').val())

                formData.append('url_name', $('#url_name').val())
                formData.append('url', $('#url').val())

                formData.append('service_section_name', $('#service_section_name').val())
                formData.append('service_section_title', $('#service_section_title').val())
                formData.append('service_section_description', $('#service_section_description').val())

                formData.append('recent_project_section_name', $('#recent_project_section_name').val())
                formData.append('recent_project_section_title', $('#recent_project_section_title').val())
                formData.append('recent_project_section_description', $('#recent_project_section_description').val())

                formData.append('current_section_name', $('#current_section_name').val())
                formData.append('current_section_title', $('#current_section_title').val())
                formData.append('current_section_description', $('#current_section_description').val())
                formData.append('current_section_option1', $('#current_section_option1').val())
                formData.append('current_section_option2', $('#current_section_option2').val())
                formData.append('current_section_option3', $('#current_section_option3').val())
                formData.append('current_section_option4', $('#current_section_option4').val())

                formData.append('team_section_name', $('#team_section_name').val())
                formData.append('team_section_title', $('#team_section_title').val())
                formData.append('team_section_description', $('#team_section_description').val())

                formData.append('how_we_do_section_name', $('#how_we_do_section_name').val())
                formData.append('how_we_do_section_title', $('#how_we_do_section_title').val())
                formData.append('how_we_do_section_option1', $('#how_we_do_section_option1').val())
                formData.append('how_we_do_section_option2', $('#how_we_do_section_option2').val())
                formData.append('how_we_do_section_option3', $('#how_we_do_section_option3').val())
                formData.append('how_we_do_section_option4', $('#how_we_do_section_option4').val())

                formData.append('faq_section_name', $('#faq_section_name').val())
                formData.append('faq_section_title', $('#faq_section_title').val())
                formData.append('faq_section_description', $('#faq_section_description').val())


                formData.append('testimonial_section_name', $('#testimonial_section_name').val())
                formData.append('testimonial_section_title', $('#testimonial_section_title').val())
                formData.append('testimonial_section_description', $('#testimonial_section_description').val())

                formData.append('blog_section_name', $('#blog_section_name').val())
                formData.append('blog_section_title', $('#blog_section_title').val())
                formData.append('blog_section_description', $('#blog_section_description').val())

                formData.append('hire_section_name', $('#hire_section_name').val())
                formData.append('hire_section_title', $('#hire_section_title').val())

                $.ajax({
                    method: 'POST',
                    url: "{{ route('updateSection') }}",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        console.log(data)
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Successfully section data updated',
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

