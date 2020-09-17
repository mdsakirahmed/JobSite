<!-- Modal -->
<div class="modal fade" id="job-modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="news-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <br>
                            <br>
                        </div>
                        <div class="lower-content">
                            <div class="category bg-success">
                                Job Details
                            </div>
                            <h4 class="job-title">
                                <!-- insert by ajax -->
                            </h4>
                            <div class="text job-description">
                                <!-- insert by ajax -->
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="text-info ">
                                        Country:  <span class="text-secondary text-right country">
                                         <!-- insert by ajax -->
                                        </span>
                                    </div>
                                    <div class="text-info">
                                        Location:  <span class="text-secondary text-right location">
                                             <!-- insert by ajax -->
                                        </span>
                                    </div>
                                    <div class="text-info">
                                        Salary:  <span class="text-secondary text-right salary">
                                        <!-- insert by ajax -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        //View job detail
        $('.show').click(function (){
            var formData = new FormData();
            formData.append('id', $(this).val())
            $('.job-title').show();
            $('.job-detail').show();
            $('#job-modal').modal('show');
            $('#user-modal').modal('hide');
            $.ajax({
                method: 'POST',
                url: "{{ route('applicant.getJobData') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    $('.job-title').html(data.title)
                    $('.job-description').html(data.description)
                    $('.country').html(data.country)
                    $('.location').html(data.location)
                    $('.salary').html(data.salary)
                },
            })
        });
    });
</script>
