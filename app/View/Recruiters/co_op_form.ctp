<?php

echo $this->Element('recruiters/header') ?> 

<div class="clearfix"></div>      
<div class="wrapper">       

            <?php echo $this->Element('recruiters/sidebar') ?>
    <div class="main-panel">

        <!-- navigation start -->
        <div class="new_view" style="margin:2% 3% 2% 3%;">	

            <form id="regForm" method="post" enctype="multipart/form-data">
                <input type="hidden" name="form_type" value="coopPost">
                <!-- <h1>Enter the text for your job title and job description.</h1> -->
                <h1>Co-Op Form</h1>

                <!-- One "tab" for each step in the form: -->
                <div class="">
                    <h3>Job Post</h3>
                    <div class="col-sm-6 col-xs-12 col-md-6 new_margin">
                        <p><label>Job Title *</label></p>
                        <p><input placeholder="Job Title" name="job_title" required=""></p>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-6 new_margin">
                        <p><label>Company Logo</label></p>
                        <p> <input type="file" name="company_logo"></p>
                    </div>
                    <h3>Company Information *</h3>
                    <div class="col-sm-12 col-xs-12 col-md-12 new_margin">
                        <p><input placeholder="Name Of Company" name="compny_name" required=""></p>
                    </div>


                    <div class="col-sm-6 col-xs-12 col-md-6 new_margin">
                        <p><input placeholder="Provence/State" name="Provence" required=""></p>
                    </div>

                    <div class="col-sm-6 col-xs-12 col-md-6 new_margin">
                        <p><input placeholder="City" name="City" required=""></p>
                    </div>
                    <div class="col-sm-12 col-xs-12 new_margin">

                        <p>
                            <select class="new_select" name="job_type" required="">
                                <option value="">Select Position.....</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Temp">Temp</option>
                                <option value="Seasonal">Seasonal</option>
                                <option value="Contract">Contract</option>
                            </select>
                        </p>
                    </div>
                    <div class="col-sm-6 col-xs-12 new_margin">
                        <p><label>Wage $</label></p>
                        <p><input type="number" min="0" name="Wage"></p>
                    </div>
                    <div class="col-sm-6 col-xs-12 new_margin">
                        <p><label>As per</label></p>
                        <p>
                            <select class="new_select" name="salary_type">
                                <option value="">Select Type</option>
                                <option value="Per Hour">Per Hour</option>
                                <option value="Per Week">Per Week</option>
                            </select>
                        </p>
                    </div>

                    <div class="col-sm-6 col-xs-12 new_margin">
                        <p><label>Application Closing Date *</label></p>
                        <p><input type="date" name="application_date" required=""></p>
                    </div>
                    <div class="col-sm-6 col-xs-12 new_margin">
                        <p><label>Contact Through  Email *</label></p>
                        <p><input type="email" name="contact_email" required=""></p>
                    </div>


                    <div class="col-sm-12 col-xs-12 new_margin">
                        <p>History Of the Company </p>
                        <p><textarea class="txtarea" name="company_history"></textarea></p>
                    </div>

                    <div class="col-sm-12 col-xs-12 new_margin">
                        <p><label>Job Description *</label></p>
                        <p>Describe the responsibilities of the job, Required work experience,Skills </p>
                        <p>
                            <textarea name="job_desc" class="ckeditor" required=""></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('job_desc');
                                CKEDITOR.add
                            </script>
                        </p>
                    </div>

                    <div class="col-sm-12 col-xs-12 new_margin">
                        <p>Requirements *</p>
                        <p>
                            <textarea name="job_req" class="ckeditor" required=""></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace('job_req');
                                CKEDITOR.add
                            </script>
                        </p>
                    </div>

                    <div class="col-sm-12 col-xs-12 rdi new_margin old_margin">
                        <p style="margin-bottom: 10px;">Please select the level of experience appropriate for the job: *</p>
                        <label><strong>Beginner </strong><input type="radio" class="radio_btn" name="exp_level" value="Beginner" required=""></label>
                        <label><strong>Intermediate </strong><input type="radio" class="radio_btn" name="exp_level" value="Intermediate" required=""></label>
                        <label><strong>Advanced</strong><input type="radio" class="radio_btn" name="exp_level" value="Advanced" required=""></label>
                    </div>
                    <div class="col-sm-12 col-xs-12 new_margin">
                        <p><label>Length Of CO-op *</label></p>
                        <p>
                            <select class="new_select" name="intern_type" required="" onchange="smpt(this.value);">
                                <option value="">Select Length..</option>
                                <option value="12 weeks">12 weeks</option>
                                <option value="16 weeks">16 weeks </option>
                                <option value="Other">Other</option>
                            </select>
                        </p>

                        <p id="sowit" style="display:none;"><input type="text"  name="length" placeholder="Enter Length..." ></p>
                    </div>

                    <div class="col-sm-6 col-xs-12 rdi new_margin old_margin">
                        <p style="margin-bottom: 10px;">Is this a Paid Co-Op *</p>
                        <label><strong>Yes </strong><input type="radio" class="radio_btn" name="co_op_paid" value="Yes" required=""></label>
                        <label><strong>No </strong><input type="radio" class="radio_btn" name="co_op_paid" value="No" required=""></label>
                    </div>
                    <div class="col-sm-6 col-xs-12 rdi new_margin old_margin">
                        <p style="margin-bottom: 10px;">Is your company an authorized Co-Op company *</p>
                        <label><strong>Yes </strong><input type="radio" class="radio_btn" name="auth_comp" value="Yes" required=""></label>
                        <label><strong>No </strong><input type="radio" class="radio_btn" name="auth_comp" value="Yes" required=""></label>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-6 new_margin">
                        <p><label>Provence/State *</label></p>
                        <p>
                            <select class="new_select" name="job_state" onchange="select_sate(this.value)" required="">
                                <option value="">Provence/State</option>
                                <?php foreach ($state as $s_detail) { ?>
                                <option value="<?php echo $s_detail['state']['id'] ?>"><?php echo $s_detail['state']['state_name'] ?></option>
                                <?php } ?>
                            </select>
                        </p>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-6 new_margin">
                        <p><label>City *</label></p>
                        <p>
                            <select class="new_select" name="job_city" id="city_id" required="">
                                <option value="">Select Provence/State First</option>                                
                            </select>
                        </p>
                    </div>

                    <div class="col-sm-6 col-xs-12 col-md-6 new_margin">
                        <p><label>University</label></p>
                        <p>
                            <select class="new_select" name="university" id="university_id">
                                <option value="">Select Provence/State First</option>                                
                            </select>
                        </p>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-6 new_margin">
                        <p><label>College</label></p>
                        <p>
                            <select class="new_select" name="college" id="college_id">
                                <option value="">Select Provence/State First</option>
                            </select>
                        </p>
                    </div>

                    <div class="col-sm-6 col-xs-12 col-md-6 new_margin">
                        <p><label>School</label></p>
                        <p>
                            <input type="text" name="school">
                        </p>
                    </div>

                    <div class="col-sm-6 col-xs-12 col-md-6 new_margin">
                        <p><label>Apprentice</label></p>
                        <p>
                            <input type="text" name="apprentice">
                        </p>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-6 new_margin">
                        <p><label>Year</label></p>
                        <p>
                            <select class="new_select" name="Course">
                                <option value="">Select Year...</option>
                                <option value="First Year">First Year</option>
                                <option value="Second Year">Second Year</option>
                                <option value="Third Year">Third Year</option>
                                <option value="Alumni">Alumni</option>
                            </select>
                        </p>
                    </div>

                    <div class="col-sm-12 col-xs-12 rdi new_margin old_margin">
                        <p style="margin-bottom: 10px;">GPA Required *</p>
                        <label><strong> Yes </strong><input type="radio" class="radio_btn gpa_id" name="gpa" value="Yes" required=""></label>
                        <label><strong> No </strong><input type="radio" class="radio_btn gpa_id" name="gpa" value="No" required=""></label>
                    </div>

                    <div class="col-sm-12 col-xs-12 rdi new_margin old_margin gpa_val_class" style="display: none;">                        
                        <label><strong> Car Required </strong><input type="radio" class="radio_btn" name="gpa_val" value="Car Required"></label>
                        <label><strong> Public Transportation Available </strong><input type="radio" class="radio_btn" name="gpa_val" value="Public Transportation Available"></label>
                    </div>

                    <div class="col-sm-12 col-xs-12 rdi new_margin old_margin">
                        <p style="margin-bottom: 10px;">Does this position expose the student to hazardous and/or bio hazardous materials?</p>
                        <label><strong>Yes </strong><input type="radio" class="radio_btn" name="postion_expose" value="Yes"></label>
                        <label><strong>No </strong><input type="radio" class="radio_btn" name="postion_expose" value="No"></label>

                    </div>


                    <div class="col-sm-12 col-xs-12 rdi new_margin old_margin">
                        <p style="margin-bottom: 10px;">Does this position require travel?</p>
                        <label><strong>Yes </strong><input type="radio" class="radio_btn" name="travel" value="Yes"></label>
                        <label><strong>No </strong><input type="radio" class="radio_btn" name="travel" value="No"></label>

                    </div>

                    <div class="col-sm-12 col-xs-12 rdi new_margin old_margin">
                        <p style="margin-bottom: 10px;">Please indicate any pre-employment screenings your organization requires. Select all that apply.</p>
                        <label><strong>Background Checks </strong><input type="radio" class="radio_btn" name="pre_employment" value="Background Checks"></label>
                        <label><strong>Skills Or Aptitude Test </strong><input type="radio" class="radio_btn" name="pre_employment" value="Skills Or Aptitude Test"></label>

                    </div>

                    <div class="col-sm-12 col-xs-12 rdi new_margin old_margin">
                        <p style="margin-bottom: 10px;">Application Process *</p>
                        <label><strong> Apply Through My Career Dashboard </strong><input type="radio" class="radio_btn" name="app_process" value="Apply Through My Career Dashboard" required=""></label>
                        <label><strong> Apply Through E-Mail </strong><input type="radio" class="radio_btn" name="app_process" value="Apply Through E-Mail" required=""></label>
                    </div>
                    <div class="clearfix"></div>

                </div>
                <br/><br/>
                <div class="col-xs-6 new_margin" style="float:right">
                    <button type="submit" name="view" value="view">View</button>
                    <button type="submit" name="post" value="post">Post</button>
                </div>
            </form>
        </div>

        <div class="clearfix"></div>

    </div>
</div>

<!--   Core JS Files   -->
    <?php echo $this->Element('recruiters/footer') ?>    

<script>
    function select_sate(state_id) {
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'recruiters/viewCity']) ?>",
            type: "POST",
            data: {"state_id": state_id},
            success: function (data) {
                var response = JSON.parse(data);
                var html = "<select class='new_select' name='City' id='city_id'>";
                html += "<option value=''>Select City</option>";
                for (var i = 0; i < response.city.length; i++) {
                    html += "<option value='" + response.city[i].city.id + "'>" + response.city[i].city.city_name + "</option>";
                }
                html += "</select>";
                $('#city_id').html(html);

                var html1 = "<select class='new_select' name='college' id='college_id'>";
                html1 += "<option value=''>Select College</option>";
                for (var i = 0; i < response.college.length; i++) {
                    html1 += "<option value='" + response.college[i].college.college_name + "'>" + response.college[i].college.college_name + "</option>";
                }
                html1 += "</select>";
                $('#college_id').html(html1);

                var html2 = "<select class='new_select' name='university' id='university_id'>";
                html2 += "<option value=''>Select University</option>";
                for (var i = 0; i < response.university.length; i++) {
                    html2 += "<option value='" + response.university[i].university.university_name + "'>" + response.university[i].university.university_name + "</option>";
                }
                html2 += "</select>";
                $('#university_id').html(html2);
            }
        });
    }
</script>

<script>
    $('.gpa_id').click(function () {
        if ($(this).val() == 'Yes') {
            $('.gpa_val_class').show();
        } else {
            $('.gpa_val_class').hide();
        }
    });

    function smpt(value) {
        if (value == 'Other') {
            $('#sowit').show();
        } else {
            $('#sowit').hide();
        }
    }
</script>
</body>

</html>