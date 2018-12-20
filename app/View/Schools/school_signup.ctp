<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>MCD</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <?php echo $this->Html->css('school/bootstrap.min.css') ?>
        <?php echo $this->Html->css('school/custom.css') ?>
        <?php echo $this->Html->css('school/responsive_use.css') ?>
        <?php echo $this->Html->css('school/animate.min.css') ?>
        <?php echo $this->Html->css('school/demo.css') ?>
        <?php echo $this->Html->css('school/custom_css.css') ?>
        <?php echo $this->Html->css('school/themify-icons.css') ?>    
        <?php echo $this->Html->css('school/demo/calendar-style.css') ?>   
        <?php echo $this->Html->css('school/demo/style.css') ?>
        <?php echo $this->Html->css('school/dist/pignose.calendar.css') ?>
        <?php echo $this->Html->css('school/style.css') ?>
        <?php echo $this->Html->css('school/circularprogress.css') ?>
        <?php echo $this->Html->css('school/icons.css') ?>
        <?php echo $this->Html->css('style.css') ?>
        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .panel-primary
            {
                border-color: #254094 !important;
            }
            .panel-primary>.panel-heading
            {
                background:#254094;
            }
            .panel-primary>.panel-body
            {
                background-color: #EDEDED;
            }
        </style>
    </head>

    <body>

        <?php echo $this->Element('school/school_header') ?> 

        <div class="clearfix"></div>      
        <div class='row row_eee_sign'>
            <div class='container'>

                <div class="bg_first_nav_new bg_province">
                    <h1></h1>
                    <div class="div_form_use"> 
                        <?php if(isset($response)) { ?>
                        <div class="alert alert-danger alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <?php if($response == '0') { ?>
                            Email Id already registered. Please Try Again!
                            <?php } else { ?>
                            Registered Successful.
                            <?php } ?>
                        </div>
                        <?php } ?>

                        <form method="post" id="student_signup_form">  
                            <?php if(isset($this->params['url']['token'])) { ?>
                            <input type="hidden" name="token" value="<?php echo htmlspecialchars($this->params['url']['token'])?>">
                            <?php } ?>
                            <?php if(isset($this->params['url']['program'])) { ?>
                            <input type="hidden" name="url_data" value="<?php echo htmlspecialchars($this->params['url']['program'])?>">
                            <?php } ?>
                            <div class="none_form">
                                <input type="text" name="first_name" placeholder="First Name" id="first_name_id" required>
                            </div>
                            <div class="none_form">
                                <input type="text" name="last_name" placeholder="Last Name" id="last_name_id" required>
                            </div>
                            <div class="none_form">
                                <input type="email" name="email" placeholder="Email Address" id="email_add_id" required>
                            </div>

                            <div class='none_form'>

                                <lable class='col-lg-12 col-md-12'> 
                                    <select name="country" class='change_div' id="country_id" required>
                                        <option value="">--Select Country--</option>
                                        <option value='Canada'>Canada</option>
                                        <option value='United States'>United States</option>
                                    </select>
                                </lable> 
                                <div>
                                    <lable class='display_div_show'>
                                        <select class='col-lg-12 col-md-12' name="province" id="provience_id">
                                            <option value="">--Select Province--</option>                                                                                           
                                            <option value="Alberta AB">Alberta AB </option>                                   
                                            <option value="British Columbia BC">British Columbia BC </option>                                   
                                            <option value="Manitoba MB">Manitoba MB </option>                                    
                                            <option value="New Brunswick NB">New Brunswick NB </option>                                    
                                            <option value="Newfoundland and Labrador NL">Newfoundland and Labrador NL </option>                                   
                                            <option value="Northwest Territories NT">Northwest Territories NT </option>                                    
                                            <option value="Nova Scotia NS">Nova Scotia NS </option>                                   
                                            <option value="Nunavut NU">Nunavut NU </option>                                    
                                            <option value="Ontario ON">Ontario ON </option>
                                            <option value="Prince Edward Island PE">Prince Edward Island PE </option>
                                            <option value="Quebec QC">Quebec QC </option>
                                            <option value="Saskatchewan SK">Saskatchewan SK </option>
                                            <option value="Yukon YT">Yukon YT </option>                                          
                                        </select>
                                    </lable> 
                                    <label class='display_div_show_a col-lg-12 col-md-12'>
                                        <select name = "state" id="state_id">
                                            <option value="">--Select State--</option>
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="Arizona">Arizona</option>
                                            <option value="Arkansas">Arkansas</option>
                                            <option value="California">California</option>
                                            <option value="Colorado">Colorado</option>
                                            <option value="Connecticut">Connecticut</option>
                                            <option value="Delaware">Delaware</option>
                                            <option value="District of Columbia">District of Columbia</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Idaho">Idaho</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Indiana">Indiana</option>
                                            <option value="Iowa">Iowa</option>
                                            <option value="Kansas">Kansas</option>
                                            <option value="Kentucky">Kentucky</option>
                                            <option value="Louisiana">Louisiana</option>
                                            <option value="Maine">Maine</option>
                                            <option value="Maryland">Maryland</option>
                                            <option value="Massachusetts">Massachusetts</option>
                                            <option value="Michigan">Michigan</option>
                                            <option value="Minnesota">Minnesota</option>
                                            <option value="Mississippi">Mississippi</option>
                                            <option value="Missouri">Missouri</option>
                                            <option value="Montana">Montana</option>
                                            <option value="Nebraska">Nebraska</option>
                                            <option value="Nevada">Nevada</option>
                                            <option value="New Hampshire">New Hampshire</option>
                                            <option value="New Jersey">New Jersey</option>
                                            <option value="New Mexico">New Mexico</option>
                                            <option value="New York">New York</option>
                                            <option value="North Carolina">North Carolina</option>
                                            <option value="North Dakota">North Dakota</option>
                                            <option value="Northern Marianas Islands">Northern Marianas Islands</option>
                                            <option value="Ohio">Ohio</option>
                                            <option value="Oklahoma">Oklahoma</option>
                                            <option value="Oregon">Oregon</option>
                                            <option value="Pennsylvania">Pennsylvania</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Rhode Island">Rhode Island</option>
                                            <option value="South Carolina">South Carolina</option>
                                            <option value="South Dakota">South Dakota</option>
                                            <option value="Tennessee">Tennessee</option>
                                            <option value="Texas">Texas</option>
                                            <option value="Utah">Utah</option>
                                            <option value="Vermont">Vermont</option>
                                            <option value="Virginia">Virginia</option>
                                            <option value="Virgin Islands">Virgin Islands</option>
                                            <option value="Washington">Washington</option>
                                            <option value="West Virginia">West Virginia</option>
                                            <option value="Wisconsin">Wisconsin</option>
                                            <option value="Wyoming">Wyoming</option>
                                        </select>
                                    </label>
                                </div>
                                <?php if(!isset($this->params['url']['program'])) { ?>

                                <lable class='col-lg-12 col-md-12'>                                     
                                    <input type="radio" name="url_data" value="starter" class="program_data" id="prgrm_data_id" required> Career Starter&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="url_data" value="advanced" class="program_data" id="prgrm_data_id" required> Career Advanced&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="url_data" value="access360" class="program_data" id="prgrm_data_id" required> All Access360
                                </lable>

                                <lable class='col-lg-12 col-md-12'>                                     
                                    <select name="duration" required="" id="duration_id">
                                        <option value="">--Select Duration--</option>
                                        <option value="6month">6 Months</option>
                                        <option value="year">Year</option>
                                    </select>
                                </lable>

                                <?php } else { ?>
                                <input type="hidden" name="url_data" id="prgrm_data_id" value="<?php echo $this->params['url']['program'] ?>">
                                <input type="hidden" name="duration" id="duration_id" value="<?php echo $this->params['url']['duration'] ?>">
                                <?php } ?>

                            </div>
                            <div class='clearfix'></div>
                            <input type="checkbox" name="terms_cond" required="">&nbsp;&nbsp;<span style="font-size: 15px; font-weight: 600;">I have read and agree to the <a href="Service agreement.pdf" target="blank">Terms and Conditions</a></span>                           
                            <br><br>
                            <button type="submit" id="sub_data">Submit</button>
                        </form>

                        <?php 
                            $paypal_link = 'https://www.paypal.com/cgi-bin/webscr'; 
                            $paypal_username = 'jrea@mycareerdashboard.com'; //Business Email
                        ?>
                        <form method="post" id="payment_form" action="<?php echo $paypal_link ?>">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="item_name" value="SignUp">
                            <input type='hidden' name='business' value='<?php echo $paypal_username; ?>'>
                            <input type='hidden' name='username' value='jrea_api1.mycareerdashboard.com'>
                            <input type='hidden' name='password' value='VT3JUV7WBWQ2W8ZG'>
                            <input type='hidden' name='signature' value='Aml20njl9DXrAMgHcc7m0EmUUiqwAfbgwWUnN-.38ex0hYDWneWYq6vG'>
                            <input type="hidden" name="item_number" value="12">
                            <input type="hidden" name="currency_code" id="currency_code_id"> 
                            <input type="hidden" name="amount" id="amount_val_id">
                            <input type='hidden' name='cancel_return' value='<?php echo DOMAIN_NAME ?>school_paypal_cancel.html'>
                            <input type='hidden' name='return' value="<?php echo DOMAIN_NAME ?>school_paypal_success.html">
                            <input type="hidden" name="notify_url" value="<?php echo DOMAIN_NAME ?>schools/ipn">
                            <input type="hidden" id="custom_value" name="custom">
                        </form>

                    </div>  
                    <div class="button_div">

                    </div>

                </div>

            </div>

        </div>

        <?php echo $this->Element('school/school_footer') ?>

        <script>
            $(document).ready(function () {
                $('.change_div').change(function () {
                    if ($(this).val() == 'Canada') {
                        $('.display_div_show_a').hide();
                        $('.display_div_show').show();
                    }

                    if ($(this).val() == 'United States') {
                        $('.display_div_show_a').show();
                        $('.display_div_show').hide();
                    }
                });
            });
        </script>

        <script>
            $("#student_signup_form").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'schools/school_signup_ajax']) ?>",
                    type: "POST",
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data == 0) {
                            alert('Email Id already registered. Please try again.');
                        } else {
                            alert('Registered Sucessful');
                            location.reload();
                        }
                    }
                });

                /* if (prgrm_type == 'alliance') {
                 var all_data1 = $("#first_name_id").val();
                 var all_data2 = $("#last_name_id").val();
                 var all_data3 = $("#email_add_id").val();
                 var all_data4 = $("#country_id").val();
                 var all_data5 = $("#provience_id").val();
                 var all_data6 = $("#state_id").val();
                 var all_data7 = $("#prgrm_data_id").val();
                 var all_data8 = $("#duration_id").val();
                 $.ajax({
                 url: "<?php echo Router::url(['controller'=>'schools/school_signup_alliance']) ?>",
                 type: "POST",
                 data: {'email_id': all_data3, 'country_id': all_data4, 'province_id': all_data5, 'state_id': all_data6},
                 success: function (data) {
                 var response = JSON.parse(data);
                 if (response.tax != '') {
                 var tax_amount = response.tax[0].tax_calculation.tax_amount;
                 }
                 var amount;
                 var final_amount;
                 if (response.email > 0) {
                 alert('Email Id already registered. Please try again.');
                 } else {
                 var all_data_value = all_data1 + ',' + all_data2 + ',' + all_data3 + ',' + all_data4 + ',' + all_data5 + ',' + all_data6 + ',' + all_data7 + ',' + all_data8 + ',' + token;
                 $("#custom_value").val(all_data_value);
                 if (all_data4 == 'United States') {
                 $("#currency_code_id").val("USD");
                 }
                 if (all_data4 == 'Canada') {
                 $("#currency_code_id").val("CAD");
                 }
                 if (all_data7 == 'starter') {
                 if (all_data8 == '6month') {
                 if (tax_amount) {
                 amount = parseFloat('38.50') + parseFloat(tax_amount);
                 final_amount = amount.toFixed(2);
                 } else {
                 final_amount = 38.50;
                 }
                 $("#amount_val_id").val(final_amount);
                 $("#payment_form").submit();
                 }
                 if (all_data8 == 'year') {
                 if (tax_amount) {
                 amount = parseFloat('70.50') + parseFloat(tax_amount);
                 final_amount = amount.toFixed(2);
                 } else {
                 final_amount = 70.50;
                 }
                 $("#amount_val_id").val(final_amount);
                 $("#payment_form").submit();
                 }
                 }
                 if (all_data7 == 'advanced') {
                 if (all_data8 == '6month') {
                 if (tax_amount) {
                 amount = parseFloat('60.00') + parseFloat(tax_amount);
                 final_amount = amount.toFixed(2);
                 } else {
                 final_amount = 60.00;
                 }
                 $("#amount_val_id").val('60.00');
                 $("#payment_form").submit();
                 }
                 if (all_data8 == 'year') {
                 if (tax_amount) {
                 amount = parseFloat('100.00') + parseFloat(tax_amount);
                 final_amount = amount.toFixed(2);
                 } else {
                 final_amount = 100.00;
                 }
                 $("#amount_val_id").val('100.00');
                 $("#payment_form").submit();
                 }
                 }
                 if (all_data7 == 'access360') {
                 if (all_data8 == '6month') {
                 if (tax_amount) {
                 amount = parseFloat('85.00') + parseFloat(tax_amount);
                 final_amount = amount.toFixed(2);
                 } else {
                 final_amount = 85.00;
                 }
                 $("#amount_val_id").val('85.00');
                 $("#payment_form").submit();
                 }
                 if (all_data8 == 'year') {
                 if (tax_amount) {
                 amount = parseFloat('158.00') + parseFloat(tax_amount);
                 final_amount = amount.toFixed(2);
                 } else {
                 final_amount = 158.00;
                 }
                 $("#amount_val_id").val('158.00');
                 $("#payment_form").submit();
                 }
                 }
                 }
                 }
                 });
                 } */
            });
        </script>

    </body>
</html>