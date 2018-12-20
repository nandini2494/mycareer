<?php

echo ""; ?>
<nav class="navbar navbar-inverse navbar-fixed-top normal new_page_color" role="navigation">
    <div class='row bg_min_logo'>
        <div class='container container1'>
            <div class='col-lg-12 col-sm-12 col-xs-12 col-md-12'>
                <p class='pull-left'>
                    <i class="fa fa-envelope" aria-hidden="true"></i>  &nbsp; &nbsp;info@mycareerdashboard.com
                </p>
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

                <?php 
                if($progam_pay == 'trail') {
                    $current_date = date_create(date('Y-m-d')); 
                    $reg_date = date_create(date('Y-m-d',strtotime($register_date)));
                    $diff = date_diff($reg_date, $current_date);
                    $days = $diff->format("%a");
                    $day_val = (14 - $days); 
                } 
                if($progam_pay == 'starter' || $progam_pay == 'advanced' || $progam_pay == 'access360') {
                    if($duration_date == '') {
                        if($prgrm_duration == '6month') {
                            $current_date = date_create(date('Y-m-d')); 
                            $reg_date = date_create(date('Y-m-d',strtotime($register_date)));
                            $diff = date_diff($reg_date, $current_date);
                            $days = $diff->format("%a");
                            $day_val = (183 - $days);      
                        } 
                        if($prgrm_duration == 'year'){
                            $current_date = date_create(date('Y-m-d')); 
                            $reg_date = date_create(date('Y-m-d',strtotime($register_date)));
                            $diff = date_diff($reg_date, $current_date);
                            $days = $diff->format("%a");
                            $day_val = (365 - $days);
                        }
                    } else {
                        $current_date = date_create(date('Y-m-d')); 
                        $reg_date = date_create(date('Y-m-d',strtotime($duration_date)));
                        $diff = date_diff($reg_date, $current_date);
                        $day_val = $diff->format("%a");
                    }
                    if($prgrm_duration == '6month') {
                        $day_percent = ($days*100)/183;
                    } 
                    if($prgrm_duration == 'year') {
                        $day_percent = ($days*100)/365;
                    }
                }
                ?>

                <!-- Calculate Month Duration of Blank Duration Date -->
                <?php
                $value1 = ($access_month - $adv_month);
                $value1a = ($day_percent * $adv_month) / 100;
                $advance_6month_blank = $value1 + $value1a;
                if($type == 'percentage') {
                    $advance_6month_blank_off = $advance_6month_blank - (($advance_6month_blank * $amount) / 100);
                } 
                if($type == 'fixed') {
                    $advance_6month_blank_off = $advance_6month_blank - ($amount);
                }
                
                $value2 = ($acess_year - $adv_year);
                $value2a = ($day_percent * $adv_year) / 100;
                $advance_year_blank = $value2 + $value2a;
                if($type == 'percentage') {
                    $advance_year_blank_off = $advance_year_blank - (($advance_year_blank * $amount) / 100);
                }
                if($type == 'fixed') {
                    $advance_year_blank_off = $advance_year_blank - $advance_year_blank;
                }
                ?>
                <!-- Calculate Month Duration of Blank Duration Date/ -->               

                <?php if($duration_date != '') { 
                    $current_date = date_create(date('Y-m-d')); 
                    $reg_date = date_create(date('Y-m-d',strtotime($duration_date)));
                    $diff = date_diff($reg_date, $current_date);                                                                                  
                    $days = $diff->format("%a");  
                    }
                ?>

                <!-- Calculate Month Duration of Duration Date -->
                <?php
                $value3 = ($access_month - $adv_month);
                $value3a = ($adv_month * $days) / $access_month;
                $data_day_total_month = 183 + round($value3a);
                if($type == 'percentage') {
                    $access_6month_notblank_off = $value3 - (($value3 * $amount) / 100);
                }
                if($type == 'fixed') {
                    $access_6month_notblank_off = $value3 - $amount;
                }
                
                $value4 = ($acess_year - $adv_year);
                $value4a = ($adv_year * $days) / 100;
                $data_day_total_year = 365 + round($value4a);
                if($type == 'percentage') {
                    $access_year_notblank_off = $value4 - (($value4 * $amount) / 100);
                }
                if($type == 'fixed') {
                    $access_year_notblank_off = $value4 - $amount;
                }
                ?>
                <!-- Calculate Month Duration of Duration Date/ -->

                <?php if(count($ambas_program) > 0) {
                    foreach ($ambas_program as $program) {
                        $approve = $program['register']['approve_ambassador'];
                    }
                } ?>

                <?php if($token_val == '') { ?>                
                <?php if($progam_pay == 'starter') { ?>
                <p class='pull-left' style="padding-left: 12em;">
                    <?php if(($user_status == 'Student') AND ($approve == 'approval' || $approve == '')) { ?>
                    <!-- <button type="button" class="upgrade_program" id="ambas_program_btn_id">Apply For Ambassador Program</button> -->
                    <?php } ?>
                </p>
                <p class='pull-left' style="padding-left: 8em;">Application Tracking & Career Management </p>
                <?php } elseif($progam_pay == 'advanced') { ?>
                <p class='pull-left day_left' style="padding-left: 2.5em;"><?php echo $day_val; ?> Days Left</p>

                <p class='pull-left' style="padding-left: 1em;">
                    <?php if(($user_status == 'Student') AND ($approve == 'approval' || $approve == '')) { ?>
                    <!-- <button type="button" class="upgrade_program" id="ambas_program_btn_id" style="font-size: 11px;">Apply For Ambassador Program</button> -->
                    <?php } ?>
                </p>                
                <p class='pull-left' style="padding-left: 2em;">
                    <button type="button" class='back_animation_div' style="color: #000;" id="renew_prgrm">Renew your Program</button>
                </p>
                <p class='pull-left' style="padding-left: 2em;">Application Tracking & Career Management </p>
                <?php } elseif($progam_pay == 'access360' && $ambassador_prgrm != 'approved') { ?>
                <p class='pull-left day_left' style="padding-left: 2em;"><?php echo $day_val; ?> Days Left</p>

                <?php if($user_status == 'Student') { ?>
                <p class='pull-left' style="padding-left: 1.3em;">
                    <button type="button" class="upgrade_program" id="ambas_program_btn_id" style="font-size: 12px;">Apply For Ambassador Program</button>
                </p>
                <?php } ?>

                <p class='pull-left' style="padding-left: 1.5em;">
                    <button type="button" class='back_animation_div' style="color: #000;" id="renew_prgrm">Renew your Program</button>
                </p>       

                <p class='pull-left' style="padding-left: 1em;">Application Tracking & Career Management </p>

                <?php } elseif($progam_pay == 'access360' && $ambassador_prgrm == 'approved') { ?>
                <p class='pull-left' style="padding-left: 30em;">Application Tracking & Career Management </p>
                <?php } elseif($progam_pay == 'trail') { ?>
                <p class='pull-left day_left'><?php echo $day_val; ?> Days Left</p>

                <p class='pull-left' style="padding-left: 6em;">
                    <button type="button" class="upgrade_program" onclick="premium_program()">Upgrade Your Program</button>
                </p>                
                <p class='pull-left' style="padding-left: 5em;">Application Tracking & Career Management </p>
                <?php } ?>

                <?php } else { ?>
                <p class='pull-left' style="padding-left: 17em;">Application Tracking & Career Management </p>
                <?php } ?>
                <div class='pull-right' id="google_translate_element"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class='div_padding_use'>
            <div class="navbar-header">
                <ul  class='display_style_use'>
                    <li><a class="navbar-brand" href="individual_dashboard.html"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/co-logo.png" alt="co-logo"></a></li>
                <?php if($token_val != '') { ?>
                    <li><a class="navbar-brand" href="school_dashboard.html"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/Capture.png" alt="co-logo"></a></li>
                <?php foreach ($logo as $logo_val) { 
                    if(!empty($logo_val['school_registration']['logo'])) {
                ?>
                    <li><a class="navbar-brand" href="school_dashboard.html"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?><?php echo $logo_val['school_registration']['logo']; ?>" alt="co-logo"></a></li>
                <?php } else { ?>
                    <li><a class="navbar-brand" href="school_dashboard.html"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/school-1.png" alt="co-logo"></a></li>
                <?php } } ?>
                <?php } ?>
                </ul>
            </div>
            <div id="navbar" class="collapse navbar-collapse">

                <ul class='margin_set'>                   
                    <?php if(($token_val == '') AND ($progam_pay == 'starter' || $progam_pay == 'advanced')) { ?>
                    <li style="padding: 0em 0em 0em 5em; width: 75%;">
                        <button class="ambas_program_btn" onclick="premium_program()">NEED ADDITIONAL FEATURES TO SHOWCASE ALL YOUR SKILLS AND KNOWLEDGE ? UPGRADE NOW!!</button>                       
                    </li>
                    <?php } ?>
                </ul>

                <ul class="nav navbar-nav navbar-right nav_use_custom">

                    <li class="log_out">
                        <a href="<?php echo Router::url(['controller'=>'dashboards/logout']) ?>">
                            <p><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</p>
                        </a>
                    </li>
                </ul>

                <?php  
                    $paypal_link = 'https://www.paypal.com/cgi-bin/webscr'; 
                    $paypal_username = 'jrea@mycareerdashboard.com'; //Business Email
                ?>
                <form method="post" id="payment_form_program" action="<?php echo $paypal_link ?>">                
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="SignUp">
                    <input type='hidden' name='business' value='<?php echo $paypal_username; ?>'> 
                    <input type='hidden' name='username' value='jrea_api1.mycareerdashboard.com'>
                    <input type='hidden' name='password' value='VT3JUV7WBWQ2W8ZG'>
                    <input type='hidden' name='signature' value='Aml20njl9DXrAMgHcc7m0EmUUiqwAfbgwWUnN-.38ex0hYDWneWYq6vG'>
                    <input type="hidden" name="item_number" value="12">
                    <input type="hidden" name="currency_code" id="currency_code_id"> 
                    <input type="hidden" name="amount" id="amount_val">
                    <input type='hidden' name='cancel_return' value='<?php echo DOMAIN_NAME ?>paypal_cancel_val.html'>
                    <input type='hidden' name='return' value="<?php echo DOMAIN_NAME ?>paypal_sucess_val.html">
                    <input type="hidden" name="notify_url" value="<?php echo DOMAIN_NAME ?>dashboards/ipn">
                    <input type="hidden" id="custom_value" name="custom">
                </form>

                <?php 
                    $paypal_link1 = 'https://www.paypal.com/cgi-bin/webscr'; 
                    $paypal_username1 = 'jrea@mycareerdashboard.com'; //Business Email                    
                ?>
                <form method="post" id="payment_form_data" action="<?php echo $paypal_link1 ?>">                
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="SignUp">
                    <input type='hidden' name='business' value='<?php echo $paypal_username1; ?>'>  
                    <input type='hidden' name='username' value='jrea_api1.mycareerdashboard.com'>
                    <input type='hidden' name='password' value='VT3JUV7WBWQ2W8ZG'>
                    <input type='hidden' name='signature' value='Aml20njl9DXrAMgHcc7m0EmUUiqwAfbgwWUnN-.38ex0hYDWneWYq6vG'>
                    <input type="hidden" name="item_number" value="12">
                    <input type="hidden" name="currency_code" id="currency_code_id_val"> 
                    <input type="hidden" name="amount" id="amount_val_id">
                    <input type='hidden' name='cancel_return' value='<?php echo DOMAIN_NAME ?>paypal_cancel_val.html'>
                    <input type='hidden' name='return' value="<?php echo DOMAIN_NAME ?>paypal_sucess_val.html">
                    <input type="hidden" name="notify_url" value="<?php echo DOMAIN_NAME ?>dashboards/ipn_val">
                    <input type="hidden" id="custom_value_data" name="custom">
                </form>

            </div>
        </div>
    </div>
</nav> 

<div id="pemium_program" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" id="program_details">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title div_working_new">Program Details</h4>
                </div>
                <div class="">
                    <div class='form-group'>
                        <div class="well text-center">
                            <div class="form-group">
                                <?php if($progam_pay == 'trail') { ?>
                                <input name="program_type" value="starter" type="radio" class="program_type_trail_id"/>&nbsp;Career Starter
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="program_type" value="advanced" type="radio" class="program_type_trail_id"/>&nbsp;Career Advanced
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="program_type" value="access360" type="radio" class="program_type_trail_id"/>&nbsp;All Access 360
                                <?php } elseif ($progam_pay == 'starter') { ?>                               
                                <input name="program_type" value="advanced" type="radio" class="program_type_id"/>&nbsp;Career Advanced
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="program_type" value="access360" type="radio" class="program_type_id"/>&nbsp;All Access 360
                                <?php } elseif ($progam_pay == 'advanced') {  ?>
                                <input name="program_type" value="access360" type="checkbox" class="program_advance_type_id"/>&nbsp;&nbsp;All Access 360
                                <?php } ?>
                            </div>
                            <div class="form-group" id="progrm_duration"></div>
                            <div class="form-group">
                                <a href="UpgradeProgram.pdf" target="blank" style="float: left; padding-left: 30px;">See the features of programs</a>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Next</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>


    </div>
</div>


<div id="renew_program" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title div_working_new">Renew Program</h4>
            </div>
            <div class="">
                <div class='form-group'>
                    <div class="well text-center">

                        <?php 
                        if($duration_date == '') {
                            $current_date = date_create(date('Y-m-d')); 
                            $reg_date = date_create(date('Y-m-d',strtotime($register_date)));
                            $diff = date_diff($reg_date, $current_date);
                            $days = $diff->format("%a");                             
                            if($progam_pay == 'starter' || $progam_pay == 'advanced' || $progam_pay == 'access360') {
                                if($prgrm_duration == '6month') {
                                    $day_val = (183 - $days); 
                                    $total_day = 183;
                                }
                                if($prgrm_duration == 'year') {
                                    $day_val = (365 - $days); 
                                    $total_day = 365;
                                }
                            }
                        } else {
                            $current_date = date_create(date('Y-m-d')); 
                            $reg_date = date_create(date('Y-m-d',strtotime($register_date)));
                            $diff = date_diff($reg_date, $current_date);                                                      
                            if($progam_pay == 'starter' || $progam_pay == 'advanced' || $progam_pay == 'access360') {
                                $days = $diff->format("%a");   
                            }
                            if($prgrm_duration == '6month') {
                                $total_day = 183;
                            }
                            if($prgrm_duration == 'year') {
                                $total_day = 365;
                            }
                        }
                        ?>
                        <div class="form-group renew_data_div">
                            <p>You have <b><?php echo $day_val ?> days</b> left . </p>
                            <p>Renewing your program will add <b><?php echo $total_day ?> days</b> on it .</p>
                            <p>Total days after renewal will be <b><?php echo ($day_val + $total_day) ?> days</b> .</p>
                        </div>  

                        <!-- <div class="form-group">
                            <lable class='col-lg-12 col-md-12' id='label_hide'>
                                <div class='col-lg-6 col-md-6'>
                                    <input type='text' class="form-control" name = 'promo_code' placeholder='Enter promo Code' id='promo_code_id'>
                                </div>
                                <div class='col-lg-6 col-md-6 promo_div'>
                                    <div class='col-lg-4 col-md-4'><button type='button' style='margin-top: 0.8em;' id='promo_id' onclick='validate_promo()'>Validate</button></div>
                                    <div class='col-lg-8 col-md-8'><p class='invalid_promo'></p></div>
                                </div>
                            </lable>
                        </div> -->
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" id="continue_data">Continue</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<script>
    function premium_program() {
        $("#pemium_program").modal("show");
    }
</script>

<?php echo $this->Html->script('js/jquery-3.2.1.min') ?>
<script>
    $(document).ready(function () {
        $("#program_details").submit(function (e) {
            e.preventDefault();
            var promo_code = $("#promo_code_id").val();
            var promo_val = '<?php echo $code ?>';
            var email_data = '<?php echo $user_email ?>';
            var all_data;
            var dur_date = '<?php echo $duration_date ?>';
            var progam_pay = '<?php echo $progam_pay ?>';
            var program_type = $("input[type='radio']:checked").val();
            var program_type_check = $("input[type='checkbox']:checked").val();
            var country = '<?php echo $country_data ?>';
            var prgrm_dur = 'year';
            var advance_6month_off = '<?php echo $advance_6month ?>';
            var advance_year_off = '<?php echo $advance_year ?>';
            var access_6month_off = '<?php echo $access_6month ?>';
            var access_year_off = '<?php echo $access_year ?>';

            var adv_month = '<?php echo $adv_month ?>';
            var adv_year = '<?php echo $adv_year ?>';
            var access_month = '<?php echo $access_month ?>';
            var acess_year = '<?php echo $acess_year ?>';

            var advance_6month_blank_off = '<?php echo $advance_6month_blank_off ?>';
            var advance_year_blank_off = '<?php echo $advance_year_blank_off ?>';
            var advance_6month_blank = '<?php echo $advance_6month_blank ?>';
            var advance_year_blank = '<?php echo $advance_year_blank ?>';

            var access_month_notblank = '<?php echo $value3 ?>';
            var access_year_notblank = '<?php echo $value4 ?>';
            var advance_6month_blank = '<?php echo $advance_6month_blank ?>';
            var advance_year_blank = '<?php echo $advance_year_blank ?>';
            var access_6month_notblank_off = '<?php echo $access_6month_notblank_off ?>';
            var access_year_notblank_off = '<?php echo $access_year_notblank_off ?>';
            var access_6month_day = '<?php echo $data_day_total_month ?>';
            var access_year_day = '<?php echo $data_day_total_year ?>';

            if (dur_date == '') {
                if (progam_pay == 'trail') {
                    if (program_type == 'advanced') {
                        if (promo_code == promo_val) {
                            if (prgrm_dur == '6month') {
                                $("#amount_val").val(advance_6month_off);
                            }
                            if (prgrm_dur == 'year') {
                                $("#amount_val").val(advance_year_off);
                            }
                        } else {
                            if (prgrm_dur == '6month') {
                                $("#amount_val").val(adv_month);
                            }
                            if (prgrm_dur == 'year') {
                                $("#amount_val").val(adv_year);
                            }
                        }
                    }

                    if (program_type == 'access360') {
                        if (promo_code == promo_val) {
                            if (prgrm_dur == '6month') {
                                $("#amount_val").val(access_6month_off);
                            }
                            if (prgrm_dur == 'year') {
                                $("#amount_val").val(access_year_off);
                            }
                        } else {
                            if (prgrm_dur == '6month') {
                                $("#amount_val").val(access_month);
                            }
                            if (prgrm_dur == 'year') {
                                $("#amount_val").val(acess_year);
                            }
                        }
                    }
                    all_data = email_data + ',' + program_type + ',' + prgrm_dur;
                } else if (progam_pay == 'starter') {
                    if (promo_code == promo_val) {
                        if (program_type == 'advanced' && prgrm_dur == '6month') {
                            $("#amount_val").val(advance_6month_off);
                        }
                        if (program_type == 'advanced' && prgrm_dur == 'year') {
                            $("#amount_val").val(advance_year_off);
                        }
                        if (program_type == 'access360' && prgrm_dur == '6month') {
                            $("#amount_val").val(access_6month_off);
                        }
                        if (program_type == 'access360' && prgrm_dur == 'year') {
                            $("#amount_val").val(access_year_off);
                        }
                    } else {
                        if (program_type == 'advanced' && prgrm_dur == '6month') {
                            $("#amount_val").val(adv_month);
                        }
                        if (program_type == 'advanced' && prgrm_dur == 'year') {
                            $("#amount_val").val(adv_year);
                        }
                        if (program_type == 'access360' && prgrm_dur == '6month') {
                            $("#amount_val").val(access_month);
                        }
                        if (program_type == 'access360' && prgrm_dur == 'year') {
                            $("#amount_val").val(acess_year);
                        }
                    }
                    all_data = email_data + ',' + program_type + ',' + prgrm_dur;
                } else if (progam_pay == 'advanced') {
                    if (promo_code == promo_val) {
                        if (program_type_check == 'access360' && prgrm_dur == '6month') {
                            $("#amount_val").val(advance_6month_blank_off);
                        }
                        if (program_type_check == 'access360' && prgrm_dur == 'year') {
                            $("#amount_val").val(advance_year_blank_off);
                        }
                    } else {
                        if (program_type_check == 'access360' && prgrm_dur == '6month') {
                            $("#amount_val").val(advance_6month_blank);
                        }
                        if (program_type_check == 'access360' && prgrm_dur == 'year') {
                            $("#amount_val").val(advance_year_blank);
                        }
                    }
                    all_data = email_data + ',' + program_type_check + ',' + prgrm_dur;
                }
                $("#custom_value").val(all_data);
                if (country == 'United States') {
                    $("#currency_code_id").val("USD");
                }
                if (country == 'Canada') {
                    $("#currency_code_id").val("CAD");
                }
                $("#payment_form_program").submit();
            } else {
                var day;
                if (progam_pay == 'advanced') {
                    if (promo_code == promo_val) {
                        if (program_type_check == 'access360' && prgrm_dur == '6month') {
                            day = access_6month_day;
                            $("#amount_val").val(access_6month_notblank_off);
                        }
                        if (program_type_check == 'access360' && prgrm_dur == 'year') {
                            day = access_year_day;
                            $("#amount_val").val(access_year_notblank_off);
                        }
                    } else {
                        if (program_type_check == 'access360' && prgrm_dur == '6month') {
                            day = access_6month_day;
                            $("#amount_val").val(access_month_notblank);
                        }
                        if (program_type_check == 'access360' && prgrm_dur == 'year') {
                            day = access_year_day;
                            $("#amount_val").val(access_year_notblank);
                        }
                    }
                    all_data = email_data + ',' + program_type_check + ',' + prgrm_dur + ',' + day;
                }
                $("#custom_value").val(all_data);
                if (country == 'United States') {
                    $("#currency_code_id").val("USD");
                }
                if (country == 'Canada') {
                    $("#currency_code_id").val("CAD");
                }
                $("#payment_form_program").submit();
            }
            if (program_type == 'starter') {
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'dashboards/starterRenew']) ?>",
                    type: "POST",
                    data: {'email': email_data, 'pgrm_type': program_type},
                    success: function (data) {
                        alert('Sucessful Upgrade Your Program');
                        location.reload();
                    }
                });
            }
        });
    });
</script>

<script>
    $("#renew_prgrm").click(function () {
        $("#renew_program").modal("show");
    });
</script>

<script>
    $(".program_advance_type_id").click(function () {
        /*var access_month = '<?php echo $access_month ?>';
         var acess_year = '<?php echo $acess_year ?>';
         var html = "<div id='progrm_duration col-md-12'>";
         html += "<div class='form-group' style='padding-left: 30px; padding-right: 30px;'>";
         html += "<select class='form-control' id='progrm_duration_id' required>";
         html += "<option value=''>--Select Program Duration--</option>";
         html += "<option value='6month'>6 Months ($ " + access_month + ")</option>";
         html += "<option value='year'>1 Year ($ " + acess_year + ")</option>";
         html += "</select>";
         html += "<div class='clearfix'></div>";
         html += "</div>";
         html += "<div class='form-group'>";
         html += "<div class='col-md-12'>";
         html += "<div class='col-md-6'>";
         html += "<input type='text' class='form-control' name = 'promo_code' placeholder='Enter promo Code' id='promo_code_id'>";
         html += "</div>";
         html += "<div class='col-md-6'>";
         html += "<div class='col-md-4'>";
         html += "<button type='button' style='margin-top: 0.8em;' id='promo_id' onclick='validate_promo()'>Validate</button>";
         html += "</div>";
         html += "<div class='col-md-8'>";
         html += "<p class='invalid_promo'></p>";
         html += "</div>";
         html += "</div>";
         html += "</div>";
         html += "<div class='clearfix'></div>";
         html += "</div>";
         html += "</div>";
         $("#progrm_duration").replaceWith(html);*/
    });
</script>

<script>
    $(".program_type_id").click(function () {
        /*var adv_month = '<?php echo $adv_month ?>';
         var adv_year = '<?php echo $adv_year ?>';
         var access_month = '<?php echo $access_month ?>';
         var acess_year = '<?php echo $acess_year ?>';
         var prgm_type = $(this).val();
         
         var html = "<div id='progrm_duration col-md-12'>";
         html += "<div class='form-group' style='padding-left: 30px; padding-right: 30px;'>";
         html += "<select class='form-control' id='progrm_duration_id' required>";
         html += "<option value=''>--Select Program Duration--</option>";
         html += "<option value='6month'>";
         if (prgm_type == 'advanced') {
         html += "6 Months ($ " + adv_month + ")";
         }
         if (prgm_type == 'access360') {
         html += "6 Months ($ " + access_month + ")";
         }
         html += "</option>";
         html += "<option value='year'>";
         if (prgm_type == 'advanced') {
         html += "1 Year ($ " + adv_year + ")";
         }
         if (prgm_type == 'access360') {
         html += "1 Year ($ " + acess_year + ")";
         }
         html += "</option>";
         html += "</select>";
         html += "<div class='clearfix'></div>";
         html += "</div>";
         html += "<div class='form-group'>";
         html += "<div class='col-md-12'>";
         html += "<div class='col-md-6'>";
         html += "<input type='text' class='form-control' name = 'promo_code' placeholder='Enter promo Code' id='promo_code_id'>";
         html += "</div>";
         html += "<div class='col-md-6'>";
         html += "<div class='col-md-4'>";
         html += "<button type='button' style='margin-top: 0.8em;' id='promo_id' onclick='validate_promo()'>Validate</button>";
         html += "</div>";
         html += "<div class='col-md-8'>";
         html += "<p class='invalid_promo'></p>";
         html += "</div>";
         html += "</div>";
         html += "</div>";
         html += "<div class='clearfix'></div>";
         html += "</div>";
         html += "</div>";
         $("#progrm_duration").html(html);*/
    });
</script>

<script>
    $(".program_type_trail_id").click(function () {
        /*var adv_month = '<?php echo $adv_month ?>';
         var adv_year = '<?php echo $adv_year ?>';
         var access_month = '<?php echo $access_month ?>';
         var acess_year = '<?php echo $acess_year ?>';
         var prgm_type = $(this).val();
         if (prgm_type != 'starter') {
         var html = "<div id='progrm_duration col-md-12'>";
         html += "<div class='form-group' style='padding-left: 30px; padding-right: 30px;'>";
         html += "<select class='form-control' id='progrm_duration_id' required>";
         html += "<option value=''>--Select Program Duration--</option>";
         html += "<option value='6month'>";
         if (prgm_type == 'advanced') {
         html += "6 Months ($ " + adv_month + ")";
         }
         if (prgm_type == 'access360') {
         html += "6 Months ($ " + access_month + ")";
         }
         html += "</option>";
         html += "<option value='year'>";
         if (prgm_type == 'advanced') {
         html += "1 Year ($ " + adv_year + ")";
         }
         if (prgm_type == 'access360') {
         html += "1 Year ($ " + acess_year + ")";
         }
         html += "</option>";
         html += "</select>";
         html += "<div class='clearfix'></div>";
         html += "</div>";
         html += "<div class='form-group'>";
         html += "<div class='col-md-12'>";
         html += "<div class='col-md-6'>";
         html += "<input type='text' class='form-control' name = 'promo_code' placeholder='Enter promo Code' id='promo_code_id'>";
         html += "</div>";
         html += "<div class='col-md-6'>";
         html += "<div class='col-md-4'>";
         html += "<button type='button' style='margin-top: 0.8em;' id='promo_id' onclick='validate_promo()'>Validate</button>";
         html += "</div>";
         html += "<div class='col-md-8'>";
         html += "<p class='invalid_promo'></p>";
         html += "</div>";
         html += "</div>";
         html += "</div>";
         html += "<div class='clearfix'></div>";
         html += "</div>";
         html += "</div>";
         $("#progrm_duration").html(html);
         }*/
    });
</script>

<script>
    $(document).ready(function () {
        $("#continue_data").click(function () {
            var promo_code = $('#promo_code_id').val();
            var promo_val = '<?php echo $code ?>';
            var progam_pay = '<?php echo $progam_pay ?>';
            var country = '<?php echo $country_data ?>';
            //var prgm_dur = '<?php echo $prgrm_duration ?>';
            var prgm_dur = 'year';
            var adv_month = '<?php echo $adv_month ?>';
            var adv_year = '<?php echo $adv_year ?>';
            var access_month = '<?php echo $access_month ?>';
            var acess_year = '<?php echo $acess_year ?>';
            var advance_6month = '<?php echo $advance_6month ?>';
            var advance_year = '<?php echo $advance_year ?>';
            var access_6month = '<?php echo $access_6month ?>';
            var access_year = '<?php echo $access_year ?>';
            if (progam_pay == 'advanced') {
                if (promo_code == promo_val) {
                    if (prgm_dur == '6month') {
                        $("#amount_val_id").val(advance_6month);
                    }
                    if (prgm_dur == 'year') {
                        $("#amount_val_id").val(advance_year);
                    }
                } else {
                    if (prgm_dur == '6month') {
                        $("#amount_val_id").val(adv_month);
                    }
                    if (prgm_dur == 'year') {
                        $("#amount_val_id").val(adv_year);
                    }
                }
            }
            if (progam_pay == 'access360') {
                if (promo_code == promo_val) {
                    if (prgm_dur == '6month') {
                        $("#amount_val_id").val(access_6month);
                    }
                    if (prgm_dur == 'year') {
                        $("#amount_val_id").val(access_year);
                    }
                } else {
                    if (prgm_dur == '6month') {
                        $("#amount_val_id").val(access_month);
                    }
                    if (prgm_dur == 'year') {
                        $("#amount_val_id").val(acess_year);
                    }
                }
            }
            $("#custom_value").val('<?php echo $user_email ?>');
            if (country == 'United States') {
                $("#currency_code_id_val").val("USD");
            }
            if (country == 'Canada') {
                $("#currency_code_id_val").val("CAD");
            }
            $("#custom_value_data").val('<?php echo $user_email ?>');
            $("#payment_form_data").submit();
        });
    });
</script>

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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112398703-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-112398703-1');
</script>
