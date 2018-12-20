<?php

echo $this->Element('recruiters/header') ?> 

<div class="clearfix"></div>      
<div class="wrapper">       

    <?php echo $this->Element('recruiters/sidebar') ?>
    <div class="main-panel">

        <!-- navigation start -->
        <div class="new_view" style="margin:2% 3% 2% 3%;">	

            <form id="regForm" method="post">

                <!-- One "tab" for each step in the form: -->
                <?php 
                
                foreach ($bill_detail as $detail) { 
                $balance = $detail['company_billing_info']['balance'];
                $country = $detail['company_billing_info']['country'];
                $currency = $detail['company_billing_info']['currency'];
                $address = $detail['company_billing_info']['address'];
                $province = $detail['company_billing_info']['province'];
                $city = $detail['company_billing_info']['city'];
                $zip_code = $detail['company_billing_info']['zip_code'];
                $person_name = $detail['company_billing_info']['person_name'];
                $email = $detail['company_billing_info']['email'];
                $phone = $detail['company_billing_info']['phone'];
                } ?>
                <div class="tab">
                    <h3>Company Billing Information</h3>
                    <div class="col-sm-12 col-xs-12 col-md-12 new_margin">
                        <p><label>Account Balance</label></p>
                        <p><input placeholder="Account Balance" type="text" name="account_balance" value="<?php echo '$ '.number_format($balance, 2); ?>"></p>
                    </div>
                    <h3>Account Information</h3>
                    <div class="col-sm-12 col-xs-12 col-md-12 new_margin">
                        <p>
                            <select name="country">
                                <option value="">--Select Country--</option>
                                <option value="Canada" <?php echo ($country == 'Canada' ? 'selected="selected"' : '') ?>>Canada</option>
                                <option value="United States" <?php echo ($country == 'United States' ? 'selected="selected"' : '') ?>>United States</option>
                                <option value="United Kingdom" <?php echo ($country == 'United Kingdom' ? 'selected="selected"' : '') ?>>United Kingdom</option>
                            </select>
                        </p>

                        <p>
                            <select name="currency">
                                <option value="">--Select Currency--</option>
                                <option value="Canadian Dollars" <?php echo ($currency == 'Canadian Dollars' ? 'selected="selected"' : '') ?>>Canadian Dollars </option>
                                <option value="United States" <?php echo ($currency == 'United States' ? 'selected="selected"' : '') ?>>Us Dollars</option>
                                <option value="British Pound" <?php echo ($currency == 'British Pound' ? 'selected="selected"' : '') ?>>British Pound</option>
                            </select>
                        </p>
                    </div>

                    <h3>Billing Information</h3>
                    <div class="col-sm-12 col-xs-12 col-md-12 new_margin">
                        <p><textarea placeholder="Address" name="address" rows="3"><?php echo $address ?></textarea></p>
                        <p><input type="text" placeholder="Provence/State" name="provence" value="<?php echo $province ?>"></p>
                        <p><input type="text" placeholder="City" name="city" value="<?php echo $city ?>"></p>
                        <p><input type="number" min="0" placeholder="Postal Code/ Zip Code" name="zip_code" value="<?php echo $zip_code ?>"></p>
                        <p><input type="text" placeholder="Contact Person for Account" name="person_name" value="<?php echo $person_name ?>"></p>
                        <p><input type="email" placeholder="Email" name="email" value="<?php echo $email ?>"></p>
                        <p><input type="number" min="0" placeholder="Phone" type="text" name="phone" value="<?php echo $phone ?>"></p>
                    </div>

                    <div class="col-xs-12 new_margin" style="float:right ; margin-top: 10px;">
                        <button type="submit">Submit</button>
                    </div>
                </div>
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