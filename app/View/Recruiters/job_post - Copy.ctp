<?php

echo $this->Element('recruiters/header') ?> 

<div class="clearfix"></div>      
<div class="wrapper">       

            <?php echo $this->Element('recruiters/sidebar') ?>
    <div class="main-panel">

        <!-- navigation start -->
        <div class="new_view" style="margin:2% 3% 2% 3%;">	

            <form id="regForm" method="post">
                <h1>Enter the text for your job title and job description.</h1>

                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <h3>Post A Job</h3>
                    <div class="col-sm-6 col-xs-12 new_margin">
                        <p><input placeholder="Company" oninput="this.className = ''" name="comp_name" required=""></p>
                    </div>
                    <div class="col-sm-6 col-xs-12 new_margin">
                        <p><input placeholder="Job Title" oninput="this.className = ''" name="job_title" required=""></p>
                    </div>
                    <div class="col-sm-12 col-xs-12 new_margin">
                        <p><label>Job Description</label></p>
                        <p>Describe the responsibilities of this job,required work experience,skills or education</p>
                        <p><textarea class="txtarea" name="job_desc" required=""></textarea></p>
                    </div>
                    <div class="col-sm-6 col-xs-12 new_margin">
                        <p><label>City,State or Postcode</label></p>
                        <p><input oninput="this.className = ''" name="city" required=""></p>
                    </div>
                    <div class="col-sm-6 col-xs-12 new_margin">
                        <p><label>Job Type</label></p>
                        <p>
                            <select class="new_select" name="job_type" required="">
                                <option value="">Job Type</option>
                                <option value="FullTime">Full Time</option>
                                <option value="PartTime">Part Time</option>
                                <option value="Temporary">Temporary</option>
                                <option value="Contract">Contract</option>
                                <option value="Internship">Internship</option>
                                <option value="Commission">Commission</option>
                                <option value="Volunteer">Volunteer</option>
                                <option value="Fresher">Fresher</option>
                                <option value="WalkIn">Walk-In</option>
                            </select>
                        </p>
                    </div>
                    <div class="col-sm-12 col-xs-12 rdi new_margin">
                        <h4 style="margin-bottom: 10px;">Resume Requirement</h4>
                        <label><strong>Resume</strong><input type="radio" class="radio_btn" name="resume" value="Yes"></label>
                        <label><strong>No Resume</strong><input type="radio" class="radio_btn" name="resume" value="No"></label>
                    </div>
                    <div class="col-sm-6 col-xs-12 new_margin">
                        <p><label>Salary option</label></p>
                        <p><input type="number" min="0" oninput="this.className = ''" name="salary"></p>
                    </div>
                    <div class="col-sm-6 col-xs-12 new_margin">
                        <p><label>As per</label></p>
                        <p>
                            <select class="new_select" name="salary_type">
                                <option value="">Select Type</option>
                                <option value="Per year">Per year</option>
                                <option value="Month">Month</option>
                            </select>
                        </p>
                    </div>
                    <div class="col-sm-12 col-xs-12 new_margin">
                        <p>Apply Method: Email</p><input type="text" oninput="this.className = ''" name="email"/>                        
                    </div>
                    <div class="new_div">
                        <h2>Question Application</h2>
                        <h4 style="margin-bottom: 10px;">Candidate will be Asked if they will meet the following requirment</h4>

                        <div class="col-sm-12 col-xs-12 new_margin">
                            <label>Education Level (optional)</label>
                            <p><input type="text" name="education_level"></p>
                        </div>

                        <div class="col-sm-12 col-xs-12 new_margin">
                            <label>Expericence</label>
                            <p><input type="text" oninput="this.className = ''" name="exp"></p>
                        </div>

                        <div class="col-sm-12 col-xs-12 new_margin">
                            <label>Additional language Required for perfomance of duties</label>
                            <p><input type="text" name="add_lang"></p>
                        </div>

                        <div class="col-sm-12 col-xs-12 new_margin">
                            <label>Licence (optional)</label>
                            <p><input type="text" name="licence"></p>
                        </div>
                        <div class="col-sm-12 col-xs-12 new_margin">
                            <label>Status</label>
                            <p>
                                <select class="new_select" name="status">
                                    <option value="Open">Open</option>
                                    <option value="Closed">Closed</option>
                                </select>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 new_margin" style="float:right">
                        <button type="submit">Submit</button>
                    </div>
                </div>


                <!-- <div class="tab new_div">
                    <h3>Post A Job</h3>
                    <h2>Question Application</h2>
                    <h4>Candidate will be Asked if they will meet the following requirment</h4>

                    <div class="col-sm-12 col-xs-12 new_margin">
                        <label>Education Level (optional)</label>
                        <p><input type="text" name="education_level"></p>
                    </div>

                    <div class="col-sm-12 col-xs-12 new_margin">
                        <label>Expericence</label>
                        <p><input type="text" oninput="this.className = ''" name="exp"></p>
                    </div>

                    <div class="col-sm-12 col-xs-12 new_margin">
                        <label>Additional language Required for perfomance of duties</label>
                        <p><input type="text" name="add_lang"></p>
                    </div>

                    <div class="col-sm-12 col-xs-12 new_margin">
                        <label>Licence (optional)</label>
                        <p><input type="text" name="licence"></p>
                    </div>
                    <div class="col-sm-12 col-xs-12 new_margin">
                        <label>Status</label>
                        <p>
                            <select name="status">
                                <option value="Open">Open</option>
                                <option value="Closed">Closed</option>
                            </select>
                        </p>
                    </div>

                </div>-->
                <!-- <div class="tab new_div">

                    <table>
                        <h2>Preview the job.</h2>
                        <tbody>
                            <tr>
                                <th>Company Name</th>
                                <td id="com_name">dfgdfg</td>
                            </tr>
                            <tr>
                                <th>Job Title</th>
                                <td id="job_title"></td>
                            </tr>
                            <tr>
                                <th>Job Description</th>
                                <td id="job_desc"></td>
                            </tr>
                            <tr>
                                <th>City/State/PostCode</th>
                                <td id="city_state"></td>
                            </tr>
                            <tr>
                                <th>Job Type</th>
                                <td id="job_type"></td>
                            </tr>
                            <tr>
                                <th>Resume Requirement</th>
                                <td id="resume_req"></td>
                            </tr>
                            <tr>
                                <th>Salary</th>
                                <td id="sal"></td>
                            </tr>
                            <tr>
                                <th>Apply Method(Email)</th>
                                <td id="app_method"></td>
                            </tr>
                            <tr>
                                <th>Experience Level (Optional)</th>
                                <td id="exp_level"></td>
                            </tr>
                            <tr>
                                <th>Experience</th>
                                <td id="exp"></td>
                            </tr>
                            <tr>
                                <th>Additional language Required for perfomance of duties</th>
                                <td id="add_lang"></td>
                            </tr>
                            <tr>
                                <th>Licence (optional)</th>
                                <td id="lecence_id"></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>You'll get to see what your job advertisement looks like so far, and make any changes.</p>                    
                </div> -->

                <!-- <div>
                    <div class="col-xs-12 new_margin" style="display:block; text-align:center; margin:1em auto;">
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>

                    <div class="col-xs-12 new_margin" style="float:right">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div> -->
            </form>
            <div class="clearfix"></div>

        </div>
    </div>

    <!--   Core JS Files   -->
    <?php echo $this->Element('recruiters/footer') ?>    

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the crurrent tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                //console.log($('#com_name').val());
                /*if ($("input[name=fname]").val() != '') {
                 $('#com_name').val($("input[name=fname]").val());
                 } else {
                 $('#com_name').val('--');
                 }
                 if ($("input[name=lname]").val() != '') {
                 $('#job_title').val($("input[name=lname]").val());
                 } else {
                 $('#job_title').val('--');
                 }
                 if ($("input[name=job_desc]").val() != '') {
                 $('#job_desc').val($("input[name=job_desc]").val());
                 } else {
                 $('#job_desc').val('--');
                 }
                 if ($("input[name=city]").val() != '') {
                 $('#city_state').val($("input[name=city]").val());
                 } else {
                 $('#city_state').val('--');
                 }
                 if ($("select[name=job_type]").val() != '') {
                 $('#job_type').val($("select[name=job_type]").val());
                 } else {
                 $('#job_type').val('--');
                 }
                 if ($("input[name=resume]").val() != '') {
                 $('#resume_req').val($("input[name=resume]").val());
                 } else {
                 $('#resume_req').val('--');
                 }
                 if ($("input[name=salary]").val() != '') {
                 $('#sal').val($("input[name=salary]").val());
                 } else {
                 $('#sal').val('--');
                 }
                 if ($("select[name=salary_type]").val() != '') {
                 $('#sal').val($("select[name=salary_type]").val());
                 } else {
                 $('#sal').val('--');
                 }
                 if ($("input[name=email]").val() != '') {
                 $('#app_method').val($("input[name=email]").val());
                 } else {
                 $('#app_method').val('--');
                 }
                 if ($("input[name=education_level]").val() != '') {
                 $('#exp_level').val($("input[name=education_level]").val());
                 } else {
                 $('#exp_level').val('--');
                 }
                 if ($("input[name=exp]").val() != '') {
                 $('#exp').val($("input[name=exp]").val());
                 } else {
                 $('#exp').val('--');
                 }
                 if ($("input[name=add_lang]").val() != '') {
                 $('#add_lang').val($("input[name=add_lang]").val());
                 } else {
                 $('#add_lang').val('--');
                 }
                 if ($("input[name=licence]").val() != '') {
                 $('#lecence_id').val($("input[name=licence]").val());
                 } else {
                 $('#lecence_id').val('--');
                 }*/
                document.getElementById("nextBtn").innerHTML = "Submit";
                $("#nextBtn").prop("type", "submit");
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm())
                return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

</body>

</html>