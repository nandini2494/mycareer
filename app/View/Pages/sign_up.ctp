<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png"/>
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php foreach ($meta_data as $meta) { ?>           
        <meta name="description" content="<?php echo $meta['seo_data']['description'] ?>">
        <meta name="keywords" content="<?php echo $meta['seo_data']['keyword'] ?>">      
        <title><?php echo $meta['seo_data']['title'] ?></title>
        <?php } ?>

        <!-- Bootstrap include file -->
        <?php echo $this->Html->css('bootstrap.min.css') ?>
        <?php echo $this->Html->css('custom.css') ?>
        <?php echo $this->Html->css('responsive_use.css') ?>
        <?php echo $this->Html->css('font-awesome.min.css') ?>
        <?php echo $this->Html->css('font/stylesheet.css') ?>

        <style>
            .hint_message p {margin: 0.5em 0 1em 0; color: red;}
        </style>
    </head>

    <body>

        <!--  header start -->
        <?php echo $this->Element('top'); ?>    
        <!-- header end -->   

        <div class='row row_eee_sign new_page_color'>
            <div class='container'>

                <div class="row">
                    <div class="col-md-7 div_data_padd">
                        <div class="bg_first_nav_new bg_province">
                            <h1>Start Your Journey to Career Success</h1>
                            <div class="div_form_use"> 
                                <div class="error_msg" style="display:none;"></div>
                                <?php 
                                foreach ($coupon_data as $coupon) {
                                    $code = $coupon['coupon']['coupon_code'];
                                    $type = $coupon['coupon']['type'];
                                    $amount = $coupon['coupon']['amount'];
                                }
                                foreach ($price_advmonth_data as $price_advmonth) {
                                    $adv_month = $price_advmonth['price']['total_price'];
                                }
                                foreach ($price_advyear_data as $price_advyear) {
                                    $adv_year = $price_advyear['price']['total_price'];
                                }
                                foreach ($price_accessmonth_data as $price_accessmonth) {
                                    $access_month = $price_accessmonth['price']['total_price'];
                                }
                                foreach ($price_accessyear_data as $price_accessyear) {
                                    $acess_year = $price_accessyear['price']['total_price'];
                                }
                                if($type == 'percentage') {
                                    $advance_6month = $adv_month - (($adv_month * $amount)/100);
                                    $advance_year = $adv_year - (($adv_year * $amount)/100);
                                    $access_6month = $access_month - (($access_month * $amount)/100);
                                    $access_year = $acess_year - (($acess_year * $amount)/100);
                                }
                                
                                if($type == 'fixed') {
                                    $advance_6month = ($adv_month - $amount);
                                    $advance_year = ($adv_year - $amount);
                                    $access_6month = ($access_month - $amount);
                                    $access_year = ($access_year - $amount);
                                }
                                ?>

                                <?php if(isset($this->params['url']['program'])) { ?>

                                <form method="post" id="form_signup_program_val">  
                                    <input type="hidden" name="url_data" id="url_id" value="<?php if(isset($this->params['url']['program'])) { echo $this->params['url']['program']; } else { echo "trail"; } ?>">
                                    <input type="hidden" name="url_duration" id="url_duration_id" value="<?php if(isset($this->params['url']['duration'])) { echo $this->params['url']['duration']; } ?>">
                                    <div class="none_form">
                                        <input type="text" name="first_name" placeholder="First Name" id="first_name_id" required>
                                    </div>
                                    <div class="none_form">
                                        <input type="text" name="last_name" placeholder="Last Name" id="last_name_id" required>
                                    </div>
                                    <div class="none_form">
                                        <input type="email" name="email" placeholder="Email Address" id="email_add_id" required>
                                    </div>
                                    <div class='none_form row'>
                                        <div class="none_form col-md-6">
                                            <input type="text" name="username" placeholder="Username" id="user_name_id" required>
                                        </div>

                                        <div class="none_form col-md-6">
                                            <input type="password" name="password" placeholder="Password" id="pass_word_id" required>
                                        </div>
                                    </div> 

                                    <div class='none_form'>

                                        <lable class='col-lg-6 col-md-6'> 
                                            <select name="country" class='change_div' id="country_id" required>
                                                <option value="">--Select Country--</option>
                                                <?php foreach ($country as $c_details) { ?>
                                                <option value='<?php echo $c_details['country']['id'] ?>'><?php echo $c_details['country']['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </lable> 

                                        <div>
                                            <lable class='display_div_show'>
                                                <select class='col-lg-6 col-md-6' name="province" id="provience_id">
                                                    <option value="">--Select Province--</option>
                                                    <?php foreach ($province as $province_detail) { ?>
                                                    <option value="<?php echo $province_detail['state']['id'] ?>"><?php echo $province_detail['state']['state_name'] ?></option>
                                                    <?php } ?>                                                                                                
                                                </select>
                                            </lable> 
                                            <label class='display_div_show_a col-lg-6 col-md-6'>
                                                <select name = "state" id="state_id">
                                                    <option value="">--Select State--</option>
                                                    <?php foreach ($state as $state_detail) { ?>
                                                    <option value="<?php echo $state_detail['state']['id'] ?>"><?php echo $state_detail['state']['state_name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </label>
                                        </div>
                                        <lable class='col-lg-12 col-md-12 city_details'></lable>
                                        <lable class='col-lg-12 col-md-12'> 
                                            <select class = "select_status" name="status" id="status_id" required>
                                                <option value = "">--Select Status--</option>
                                                <option value = "Student">Student</option>
                                                <option value = "Alumni">Alumni</option>
                                            </select>
                                        </lable>

                                        <lable class='col-lg-12 col-md-12'> 
                                            <select class = "select_type" name="study_type" id="type_id">
                                                <option value = "">--Select Type--</option>
                                                <option value = "University">University</option>
                                                <option value = "College">College</option>                                                
                                                <option value = "Trade School">Trade School</option>                                              
                                            </select>
                                        </lable>

                                        <lable class='col-lg-12 col-md-12 usa_dont_show1'> 
                                            <input type='text' name = "school_info[]" class = "school_text_box school_info_id" placeholder="University Name">                                        
                                        </lable>

                                        <lable class='col-lg-12 col-md-12 usa_dont_show2'> 
                                            <input type='text' name = "school_info[]" class = "school_text_box school_info_id" placeholder="College Name">                                        
                                        </lable>

                                        <lable class='col-lg-12 col-md-12 dont_show2'> 
                                            <select name = "school_info[]" class = "school_text_box school_info_id">
                                                <option value = "">--Select University--</option>
                                                <?php foreach ($university as $u_detail) { ?>
                                                <option value = "<?php echo $u_detail['university']['university_name'] ?>"><?php echo $u_detail['university']['university_name'] ?></option>
                                                <?php } ?>
                                            </select>                                          
                                        </lable>

                                        <lable class='col-lg-12 col-md-12 dont_show1'> 
                                            <select name = "school_info[]" class = "school_text_box school_info_id">
                                                <option value = "">--Select College--</option>
                                                <?php foreach ($college as $college_detail) { ?>
                                                <option value = "<?php echo $college_detail['college']['college_name'] ?>"><?php echo $college_detail['college']['college_name'] ?></option>
                                                <?php } ?>
                                            </select>                                            
                                        </lable>     

                                        <lable class='col-lg-12 col-md-12 dont_show3'> 
                                            <input type='text' name = "school_info[]" class = "school_text_box school_info_id" placeholder="Trade Name">
                                        </lable>

                                        <lable class='col-lg-12 col-md-12 dont_show4'> 
                                            <input type='text' name = "school_mcd" class = "school_text_box school_mcd" readonly="">
                                        </lable>
                                        <lable class='col-lg-12 col-md-12 dont_show5'> 
                                            <div class="hint_message">
                                                <p><b>You don't have School MCD:- </b>Please Contact Your Student Career Centre OR contact us at info@mycareerdashboard.com</p>
                                            </div>
                                        </lable>

                                        <?php if($this->params['url']['program'] != 'starter') { ?>
                                        <!-- <lable class='col-lg-12 col-md-12'> 
                                            <div class="col-lg-6 col-md-6">
                                                <input type='text' name = "promo_code" placeholder="Enter promo Code" id="promo_code_id">
                                            </div>
                                            <div class="col-lg-6 col-md-6 promo_div">
                                                <div class="col-lg-4 col-md-4"><button type="button" class="btn btn-info" id="promo_id" onclick="validate_promo()">Validate</button></div>
                                                <div class="col-lg-8 col-md-8"><p class="invalid_promo"></p></div>                                      
                                            </div>
                                        </lable> -->

                                        <?php } ?>

                                    </div>
                                    <div class='clearfix'></div>
                                    <br>
                                    <input type="checkbox" name="terms_cond" required="">&nbsp;&nbsp;<span style="font-size: 15px; font-weight: 600;">I have read and agree to the <a href="Service agreement.pdf" target="blank">Terms and Conditions</a></span>
                                    <br><br>
                                    <button type="submit" id="sub_data">Submit</button>
                                </form>

                            <?php } else { ?>

                                <form method="post" id="form_signup_program">  
                                    <!-- <input type="hidden" name="url_data" value=""> -->
                                    <div class="none_form">
                                        <input type="text" name="first_name" placeholder="First Name" id="first_name_id" required>
                                    </div>
                                    <div class="none_form">
                                        <input type="text" name="last_name" placeholder="Last Name" id="last_name_id" required>
                                    </div>
                                    <div class="none_form">
                                        <input type="email" name="email" placeholder="Email Address" id="email_add_id" required>
                                    </div>

                                    <div class='none_form row'>
                                        <div class="none_form col-md-6">
                                            <input type="text" name="username" placeholder="Username" id="user_name_id" required>
                                        </div>

                                        <div class="none_form col-md-6">
                                            <input type="password" name="password" placeholder="Password" id="pass_word_id" required>
                                        </div>
                                    </div> 

                                    <div class='none_form'>

                                        <lable class='col-lg-6 col-md-6'> 
                                            <select name="country" class='change_div' id="country_id" required>
                                                <option value="">--Select Country--</option>
                                                <?php foreach ($country as $c_details) { ?>
                                                <option value='<?php echo $c_details['country']['id'] ?>'><?php echo $c_details['country']['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </lable> 
                                        <div>
                                            <lable class='display_div_show'>
                                                <select class='col-lg-6 col-md-6' name="province" id="provience_id">
                                                    <option value="">--Select Province--</option>                                                                                           
                                                    <?php foreach ($province as $province_detail) { ?>
                                                    <option value="<?php echo $province_detail['state']['id'] ?>"><?php echo $province_detail['state']['state_name'] ?></option>
                                                    <?php } ?>                                        
                                                </select>
                                            </lable> 
                                            <label class='display_div_show_a col-lg-6 col-md-6'>
                                                <select name = "state" id="state_id">
                                                    <option value="">--Select State--</option>
                                                    <?php foreach ($state as $state_detail) { ?>
                                                    <option value="<?php echo $state_detail['state']['id'] ?>"><?php echo $state_detail['state']['state_name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </label>
                                        </div>
                                        <lable class='col-lg-12 col-md-12 city_details'></lable>
                                        <lable class='col-lg-12 col-md-12'> 
                                            <select class = "select_status" name="status" id="status_id" required>
                                                <option value = "">--Select Status--</option>
                                                <option value = "Student">Student</option> 
                                                <option value = "Alumni">Alumni</option>
                                            </select>
                                        </lable>

                                        <lable class='col-lg-12 col-md-12'> 
                                            <select class = "select_type" name="study_type" id="type_id">
                                                <option value = "">--Select Type--</option>
                                                <option value = "University">University</option>
                                                <option value = "College">College</option>                                                
                                                <option value = "Trade School">Trade School</option>                                              
                                            </select>
                                        </lable>

                                        <lable class='col-lg-12 col-md-12 usa_dont_show1'> 
                                            <input type='text' name = "school_info[]" class = "school_text_box school_info_id" placeholder="University Name">                                        
                                        </lable>

                                        <lable class='col-lg-12 col-md-12 usa_dont_show2'> 
                                            <input type='text' name = "school_info[]" class = "school_text_box school_info_id" placeholder="College Name">                                        
                                        </lable>

                                        <lable class='col-lg-12 col-md-12 dont_show2'> 
                                            <select name = "school_info[]" class = "school_text_box school_info_id">
                                                <option value = "">--Select University--</option>
                                                <?php foreach ($university as $u_detail) { ?>
                                                <option value = "<?php echo $u_detail['university']['university_name'] ?>"><?php echo $u_detail['university']['university_name'] ?></option>
                                                <?php } ?>
                                            </select>                                          
                                        </lable>

                                        <lable class='col-lg-12 col-md-12 dont_show1'> 
                                            <select name = "school_info[]" class = "school_text_box school_info_id">
                                                <option value = "">--Select College--</option>
                                                <?php foreach ($college as $college_detail) { ?>
                                                <option value = "<?php echo $college_detail['college']['college_name'] ?>"><?php echo $college_detail['college']['college_name'] ?></option>
                                                <?php } ?>
                                            </select>                                            
                                        </lable>                                        

                                        <lable class='col-lg-12 col-md-12 dont_show3'> 
                                            <input type='text' name = "school_info[]" class = "school_text_box school_info_id" placeholder="Trade Name">
                                        </lable>

                                        <lable class='col-lg-12 col-md-12 dont_show4'> 
                                            <input type='text' name = "school_mcd" class = "school_text_box school_mcd" readonly="">
                                        </lable>
                                        <lable class='col-lg-12 col-md-12 dont_show5'> 
                                            <div class="hint_message">
                                                <p><b>You don't have School MCD:- </b>Please Contact Your Student Career Centre OR contact us at info@mycareerdashboard.com</p>
                                            </div>
                                        </lable>

                                        <lable class='col-lg-12 col-md-12' style="margin-bottom: 1.3em;"> 
                                            <!-- <input type="radio" name="url_data" value="trail" class="program_data" required> Free Trial&nbsp;&nbsp;&nbsp;-->
                                            <input type="radio" name="url_data" value="starter" class="program_data" required> Career Starter&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="url_data" value="advanced" class="program_data" required> Career Advanced&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="url_data" value="access360" class="program_data" required> All Access360
                                        </lable>

                                        <div class='none_form' id='replace_data'></div>

                                    </div>
                                    <div class='clearfix'></div>
                                    <input type="checkbox" name="terms_cond" required="">&nbsp;&nbsp;<span style="font-size: 15px; font-weight: 600;">I have read and agree to the <a href="Service agreement.pdf" target="blank">Terms and Conditions</a></span>                           
                                    <br><br>
                                    <button type="submit" id="sub_data">Submit</button>
                                </form>
                            <?php } ?>

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
                                    <input type='hidden' name='cancel_return' value='<?php echo DOMAIN_NAME ?>paypal_cancel.html'>
                                    <input type='hidden' name='return' value="<?php echo DOMAIN_NAME ?>paypal_sucess.html">
                                    <input type="hidden" name="notify_url" value="<?php echo DOMAIN_NAME ?>pages/ipn">
                                    <input type="hidden" id="custom_value" name="custom">
                                </form>
                            </div>  
                            <div class="button_div">

                            </div>

                        </div>
                    </div>

                    <!-- <div class="col-md-5 div_data_padd">
                        <img src="<?php echo DOMAIN_NAME ?>img/signup_add.png" class="img-responsive">
                    </div> -->
                </div> 

            </div>

        </div>


        <?php echo $this->Element('footer') ?>

        <script>
            function validate_promo() {
                var promo = $("#promo_code_id").val();
                var promo_val = '<?php echo $code ?>';
                if (promo == promo_val) {
                    $('.invalid_promo').text('Promo Code Applied');
                } else {
                    $('.invalid_promo').text('Invalid Promo Code');
                }
            }
        </script>   

        <script>
            function validate_referal() {
                var data = '<?php echo $mcd_num ?>';
                var mcd = JSON.parse(data);
                var referal = $("#referal_code_id").val();
                var counter = 0;
                for (var i = 0; i < mcd.length; i++) {
                    if (mcd[i].register.crv_code == referal) {
                        counter++;
                    }
                }
                if (counter > 0) {
                    $('.invalid_referal').text('Referal Code Valid');
                } else {
                    $('.invalid_referal').text('Invalid Referal Code');
                }
            }
        </script>

        <script>
            $(".program_data").click(function () {
                /*var pgrm_val = $('input[name=url_data]:checked').val();
                 if (pgrm_val == 'advanced' || pgrm_val == 'access360') {
                 var html_data = "<div class='none_form replace_data'>";
                 html_data += "<lable class='col-lg-12 col-md-12'>";
                 html_data += "<select class = 'select_status' name='url_duration' id='prgrm_dur_id' required>";
                 html_data += "<option value = ''>--Select Duration--</option>";
                 html_data += "<option value = '6month'>6 Months</option>";
                 html_data += "<option value = 'year'>Year</option>";
                 html_data += "</select>";
                 html_data += "</lable>";
                 html_data += "<lable class='col-lg-12 col-md-12' id='label_hide'>";
                 html_data += "<div class='col-lg-6 col-md-6'>";
                 html_data += "<input type='text' name = 'promo_code' placeholder='Enter promo Code' id='promo_code_id'>";
                 html_data += "</div>";
                 html_data += "<div class='col-lg-6 col-md-6 promo_div'>";
                 html_data += "<div class='col-lg-4 col-md-4'><button type='button' class='btn btn-info' id='promo_id' onclick='validate_promo()'>Validate</button></div>";
                 html_data += "<div class='col-lg-8 col-md-8'><p class='invalid_promo'></p></div>";
                 html_data += "</div>";
                 html_data += "</lable>";
                 html_data += "</div>";
                 $("#replace_data").replaceWith(html_data);
                 $("#program_id").show();
                 $("#label_hide").show();
                 $("#prgrm_dur_id").show();
                 }
                 if (pgrm_val == 'trail' || pgrm_val == 'starter') {
                 $("#program_id").hide();
                 $("#label_hide").hide();
                 $("#prgrm_dur_id").hide();
                 }*/
            });
        </script>

        <script>
            $(document).ready(function () {
                $("#form_signup_program").submit(function (e) {
                    e.preventDefault();
                    var prmo_data = $("#promo_code_id").val();
                    var pgrm_val = $('input[name=url_data]:checked').val();
                    var promo_val = '<?php echo $code ?>';
                    var adv_month = '<?php echo $adv_month ?>';
                    var adv_year = '<?php echo $adv_year ?>';
                    var access_month = '<?php echo $access_month ?>';
                    var access_year = '<?php echo $acess_year ?>';
                    var advance_6month_off = '<?php echo $advance_6month ?>';
                    var advance_year_off = '<?php echo $advance_year ?>';
                    var access_6month_off = '<?php echo $access_6month ?>';
                    var access_year_off = '<?php echo $access_year ?>';

                    if (pgrm_val == 'trail' || pgrm_val == 'starter') {
                        $.ajax({
                            url: "<?php echo Router::url(['controller'=>'pages/signUp']) ?>",
                            type: "POST",
                            data: new FormData(this),
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                if (data == 0) {
                                    alert('Email Id already registered. Please try again.');
                                }
                                if (data == 2) {
                                    alert('Username already registered. Please try again.');
                                }
                                if (data == 3) {
                                    alert('School MCD is wrong. Please Contact Your Student Career Centre OR contact us at info@mycareerdashboard.com');
                                } else {
                                    alert('PLEASE CHECK YOUR INBOX OR SPAM FOR USERNAME AND PASSCODE. If you do not receive within 30 minutes contact info@mycareerdashboard.com');
                                    location.reload();
                                }
                            }
                        });
                    } else {
                        var all_data1 = $("#first_name_id").val();
                        var all_data2 = $("#last_name_id").val();
                        var all_data3 = $("#email_add_id").val();
                        var all_data4 = $("#country_id").val();
                        var all_data5 = $("#provience_id").val();
                        var all_data6 = $("#status_id").val();
                        var all_data7 = $(".school_info_id").val();
                        var all_data8 = $("#state_id").val();
                        //var all_data9 = $("#prgrm_dur_id").val();
                        var all_data9 = 'year';
                        var all_data10 = $("#referal_code_id").val();
                        var all_data11 = $('#user_name_id').val();
                        var all_data12 = $('#pass_word_id').val();
                        var all_data13 = $('#type_id').val();
                        var all_data14 = $('#city_id').val();
                        var all_data15 = $('.school_mcd').val();
                        $.ajax({
                            url: "<?php echo Router::url(['controller'=>'pages/register_user']) ?>",
                            type: "POST",
                            data: {'email_id': all_data3, 'school_mcd': all_data15},
                            success: function (data) {
                                data = JSON.parse(data);
                                if (data.email > 0) {
                                    alert("Email Id already Registered");
                                }
                                if (data.school == 0) {
                                    alert("School MCD is wrong. Please Contact Your Student Career Centre OR contact us at info@mycareerdashboard.com");
                                } else {
                                    var all_data_value = all_data1 + ',' + all_data2 + ',' + all_data3 + ',' + all_data4 + ',' + all_data5 + ',' + all_data6 + ',' + all_data7 + ',' + all_data8 + ',' + pgrm_val + ',' + all_data9 + ',' + all_data10 + ',' + all_data11 + ',' + all_data12 + ',' + all_data13 + ',' + all_data14 + ',' + all_data15;
                                    $("#custom_value").val(all_data_value);
                                    if (all_data4 == 'United States') {
                                        $("#currency_code_id").val("USD");
                                    }
                                    if (all_data4 == 'Canada') {
                                        $("#currency_code_id").val("CAD");
                                    }
                                    if (pgrm_val == 'advanced') {
                                        if (prmo_data == promo_val) {
                                            if (all_data9 == '6month') {
                                                $("#amount_val_id").val(advance_6month_off);
                                                $("#payment_form").submit();
                                            }
                                            if (all_data9 == 'year') {
                                                $("#amount_val_id").val(advance_year_off);
                                                $("#payment_form").submit();
                                            }
                                        } else {
                                            if (all_data9 == '6month') {
                                                $("#amount_val_id").val(adv_month);
                                                $("#payment_form").submit();
                                            }
                                            if (all_data9 == 'year') {
                                                $("#amount_val_id").val(adv_year);
                                                $("#payment_form").submit();
                                            }
                                        }
                                    }
                                    if (pgrm_val == 'access360') {
                                        if (prmo_data == promo_val) {
                                            if (all_data9 == '6month') {
                                                $("#amount_val_id").val(access_6month_off);
                                                $("#payment_form").submit();
                                            }
                                            if (all_data9 == 'year') {
                                                $("#amount_val_id").val(access_year_off);
                                                $("#payment_form").submit();
                                            }
                                        } else {
                                            if (all_data9 == '6month') {
                                                $("#amount_val_id").val(access_month);
                                                $("#payment_form").submit();
                                            }
                                            if (all_data9 == 'year') {
                                                $("#amount_val_id").val(access_year);
                                                $("#payment_form").submit();
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                $("#form_signup_program_val").submit(function (e) {
                    e.preventDefault();
                    var prmo_data = $("#promo_code_id").val();
                    var pgrm_val = $('#url_id').val();
                    var pgrm_duration = $('#url_duration_id').val();
                    var promo_val = '<?php echo $code ?>';
                    var adv_month = '<?php echo $adv_month ?>';
                    var adv_year = '<?php echo $adv_year ?>';
                    var access_month = '<?php echo $access_month ?>';
                    var access_year = '<?php echo $acess_year ?>';
                    var advance_6month_off = '<?php echo $advance_6month ?>';
                    var advance_year_off = '<?php echo $advance_year ?>';
                    var access_6month_off = '<?php echo $access_6month ?>';
                    var access_year_off = '<?php echo $access_year ?>';

                    if (pgrm_val == 'starter') {
                        $.ajax({
                            url: "<?php echo Router::url(['controller'=>'pages/signUp']) ?>",
                            type: "POST",
                            data: new FormData(this),
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                if (data == 0) {
                                    alert('Email Id already registered. Please try again.');
                                } else if (data == 2) {
                                    alert('Username already registered. Please try again.');
                                } else if (data == 3) {
                                    alert('School MCD is wrong. Please Contact Your Student Career Centre OR contact us at info@mycareerdashboard.com');
                                } else {
                                    alert('PLEASE CHECK YOUR INBOX OR SPAM FOR USERNAME AND PASSCODE. If you do not receive within 30 minutes contact info@mycareerdashboard.com');
                                    location.reload();
                                }
                            }
                        });
                    } else {
                        var all_data1 = $("#first_name_id").val();
                        var all_data2 = $("#last_name_id").val();
                        var all_data3 = $("#email_add_id").val();
                        var all_data4 = $("#country_id").val();
                        var all_data5 = $("#provience_id").val();
                        var all_data6 = $("#status_id").val();
                        var all_data7 = $(".school_info_id").val();
                        var all_data8 = $("#state_id").val();
                        var all_data9 = $("#referal_code_id").val();
                        var all_data11 = $('#user_name_id').val();
                        var all_data12 = $('#pass_word_id').val();
                        var all_data13 = $('#type_id').val();
                        var all_data14 = $('#city_id').val();
                        var all_data15 = $('.school_mcd').val();
                        $.ajax({
                            url: "<?php echo Router::url(['controller'=>'pages/register_user']) ?>",
                            type: "POST",
                            data: {'email_id': all_data3, 'school_mcd': all_data15},
                            success: function (data) {
                                if (data > 0) {
                                    alert("Email Id already Registered");
                                } else {
                                    var all_data_value = all_data1 + ',' + all_data2 + ',' + all_data3 + ',' + all_data4 + ',' + all_data5 + ',' + all_data6 + ',' + all_data7 + ',' + all_data8 + ',' + pgrm_val + ',' + pgrm_duration + ',' + all_data9 + ',' + all_data11 + ',' + all_data12 + ',' + all_data13 + ',' + all_data14 + ',' + all_data15;
                                    $("#custom_value").val(all_data_value);
                                    if (all_data4 == 'United States') {
                                        $("#currency_code_id").val("USD");
                                    }
                                    if (all_data4 == 'Canada') {
                                        $("#currency_code_id").val("CAD");
                                    }
                                    if (pgrm_val == 'advanced') {
                                        if (prmo_data == promo_val) {
                                            if (pgrm_duration == '6month') {
                                                $("#amount_val_id").val(advance_6month_off);
                                                $("#payment_form").submit();
                                            }
                                            if (pgrm_duration == 'year') {
                                                $("#amount_val_id").val(advance_year_off);
                                                $("#payment_form").submit();
                                            }
                                        } else {
                                            if (pgrm_duration == '6month') {
                                                $("#amount_val_id").val(adv_month);
                                                $("#payment_form").submit();
                                            }
                                            if (pgrm_duration == 'year') {
                                                $("#amount_val_id").val(adv_year);
                                                $("#payment_form").submit();
                                            }
                                        }
                                    }
                                    if (pgrm_val == 'access360') {
                                        if (prmo_data == promo_val) {
                                            if (pgrm_duration == '6month') {
                                                $("#amount_val_id").val(access_6month_off);
                                                $("#payment_form").submit();
                                            }
                                            if (pgrm_duration == 'year') {
                                                $("#amount_val_id").val(access_year_off);
                                                $("#payment_form").submit();
                                            }
                                        } else {
                                            if (pgrm_duration == '6month') {
                                                $("#amount_val_id").val(access_month);
                                                $("#payment_form").submit();
                                            }
                                            if (pgrm_duration == 'year') {
                                                $("#amount_val_id").val(access_year);
                                                $("#payment_form").submit();
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    }
                });
            });
        </script>

        <script>
            $("#form_trial").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'pages/signUp']) ?>",
                    type: "POST",
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data == 0) {
                            alert('Email Id already registered. Please try again.');
                        } else {
                            alert('PLEASE CHECK YOUR INBOX OR SPAM FOR USERNAME AND PASSCODE. If you do not receive within 30 minutes contact info@mycareerdashboard.com');
                            location.reload();
                        }
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                $('#provience_id').change(function () {
                    var province_id = $(this).val();
                    $.ajax({
                        url: '<?php echo Router::url(['controller'=>'pages/selectCity']) ?>',
                        type: 'POST',
                        data: {'state_id': province_id},
                        success: function (data) {
                            var response = JSON.parse(data);
                            var html = "<select class = 'select_status' name='city' id='city_id'>";
                            html += "<option value=''>--Select city--</option>";
                            for (var i = 0; i < response.length; i++) {
                                html += "<option value=" + response[i].city.id + ">" + response[i].city.city_name + "</option>";
                            }
                            html += "</select>";
                            $('.city_details').html(html);
                        }
                    });
                });
            });
        </script>

        <script>
            $('.school_info_id').change(function () {
                var s_name = $(this).val();
                $.ajax({
                    url: '<?php echo Router::url(['controller' => 'pages/getSchoolMcd']); ?>',
                    type: 'POST',
                    data: {'s_name': s_name},
                    success: function (data) {
                        if (data == 0) {
                            $('.dont_show5').show();
                            $('.school_mcd').val('');
                            $('.dont_show4').hide();
                        } else {
                            $('.dont_show5').hide();
                            $('.school_mcd').val(data);
                            $('.dont_show4').show();
                        }
                    }
                });
            });
        </script>

    </body>
</html> 