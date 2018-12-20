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
                $advance_6month = 60 - ((60 * 40)/100);
                $advance_year = 100 - ((100 * 40)/100);
                $access_6month = 85 - ((85 * 40)/100);
                $access_year = 158 - ((158 * 40)/100);
                ?>
                <input type="hidden" id="advance_6month" value="<?php echo $advance_6month ?>">
                <input type="hidden" id="advance_year" value="<?php echo $advance_year ?>">
                <input type="hidden" id="access_6month" value="<?php echo $access_6month ?>">
                <input type="hidden" id="access_year" value="<?php echo $access_year ?>">
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
                $value1 = (85.00 - 60.00);
                $value1a = ($day_percent * 60.00) / 100;
                $advance_6month_blank = $value1 + $value1a;
                $advance_6month_blank_off = $advance_6month_blank - (($advance_6month_blank *40) / 100);
                
                $value2 = (158.00 - 100.00);
                $value2a = ($day_percent * 100.00) / 100;
                $advance_year_blank = $value2 + $value2a;
                $advance_year_blank_off = $advance_year_blank - (($advance_year_blank *40) / 100);
                ?>
                <input type="hidden" id="advance_6month_blank" value="<?php echo $advance_6month_blank; ?>">
                <input type="hidden" id="advance_6month_blank_off" value="<?php echo $advance_6month_blank_off; ?>">
                <input type="hidden" id="advance_year_blank" value="<?php echo $advance_year_blank; ?>">
                <input type="hidden" id="advance_year_blank_off" value="<?php echo $advance_year_blank_off; ?>">
                <!-- Calculate Month Duration of Blank Duration Date/ -->               

                <input type="hidden" name="day_left" id="day_left_id" value="<?php echo $day_percent ?>">
                <?php if($duration_date != '') { 
                    $current_date = date_create(date('Y-m-d')); 
                    $reg_date = date_create(date('Y-m-d',strtotime($duration_date)));
                    $diff = date_diff($reg_date, $current_date);                                                                                  
                    $days = $diff->format("%a");         
                ?>
                <input type="hidden" name="day_left_data" id="day_left_id_data" value="<?php echo $days ?>">
                <?php } ?>

                <!-- Calculate Month Duration of Duration Date -->
                <?php
                $value3 = (85.00 - 60.00);
                $value3a = (60.00 * $days) / 85.00;
                $data_day_total_month = 183 + round($value3a);
                $access_6month_notblank_off = $value3 - (($value3 *40) / 100);
                
                $value4 = (158.00 - 100.00);
                $value4a = (100.00 * $days) / 100;
                $data_day_total_year = 365 + round($value4a);
                $access_year_notblank_off = $value4 - (($value4 *40) / 100);
                ?>
                <input type="hidden" id="access_month_notblank" value="<?php echo $value3; ?>">
                <input type="hidden" id="access_month_notblank_off" value="<?php echo $access_6month_notblank_off; ?>">
                <input type="hidden" id="access_year_notblank" value="<?php echo $value4; ?>">
                <input type="hidden" id="access_year_notblank_off" value="<?php echo $access_year_notblank_off; ?>">
                <input type="hidden" id="access_6month_day" value="<?php echo $data_day_total_month; ?>">
                <input type="hidden" id="access_year_day" value="<?php echo $data_day_total_year; ?>">
                <!-- Calculate Month Duration of Duration Date/ -->

                <?php if($token_val == '') { ?>
                <?php if($progam_pay != 'starter') { ?>
                <p class='pull-left day_left'><?php echo $day_val; ?> Days Left</p>
                <?php } ?>
                <p class='pull-left' style="padding-left: 1em;">
                    <?php if($progam_pay == 'trail') { ?>
                    <button type="button" style="color: #000;" onclick="premium_program()">Upgrade Program</button>                   
                    <?php } elseif($progam_pay == 'starter' || $progam_pay == 'advanced') { ?>
                    <button type="button" style="color: #000;" onclick="premium_program()">Advance the program</button>
                    <?php } ?>
                </p>
                <?php if($progam_pay == 'advanced' || $progam_pay == 'access360') { ?>
                <p class='pull-left' style="padding-left: 1em;">
                    <button type="button" class='back_animation_div' style="color: #000;" id="renew_prgrm">Renew your Program</button>
                </p>
                <?php } ?>

                <p class='pull-left' style="padding-left: 1em;">Application Tracking & Career Management </p>
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
                    <li>
                        <p class="tracker_div">D.I.Y Reference Tracker</p>
                    </li>
                    <li <?php if($token_val != '') { ?> style="padding: 0em 0em 0em 3em;" <?php } ?>>
                        <div class='div_common'>
                            <div class="progress programs_d newtest2"></div>
                            <div class='clearfix'></div>
                            <h2><a href="new_value.html"><?php echo $new_count ?> New</a></h2>
                        </div>  
                    </li>
                    <li <?php if($token_val != '') { ?> style="padding: 0em 0em 0em 3em;" <?php } ?>>
                        <div class='div_common'>
                            <div class="progress passenger_b newtest4"></div>
                            <div class='clearfix'></div>
                            <h2><a href="complete.html"><?php echo $complete_count ?> Completed</a></h2>
                        </div>

                    </li>

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
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title div_working_new">Program Details</h4>
            </div>
            <div class="">
                <div class='form-group'>
                    <div class="well text-center">

                        <form method="post" id="program_details">                           
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
                            <button type="submit" class="btn btn-info">Next</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
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

                        <div class="form-group">
                            <lable class='col-lg-12 col-md-12' id='label_hide'>
                                <div class='col-lg-6 col-md-6'>
                                    <input type='text' class="form-control" name = 'promo_code' placeholder='Enter promo Code' id='promo_code_id'>
                                </div>
                                <div class='col-lg-6 col-md-6 promo_div'>
                                    <div class='col-lg-4 col-md-4'><button type='button' style='margin-top: 0.8em;' id='promo_id' onclick='validate_promo()'>Validate</button></div>
                                    <div class='col-lg-8 col-md-8'><p class='invalid_promo'></p></div>
                                </div>
                            </lable>
                        </div>
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
            var email_data = '<?php echo $user_email ?>';
            var all_data;
            var dur_date = '<?php echo $duration_date ?>';
            var day_percent = $("#day_left_id").val();
            var progam_pay = '<?php echo $progam_pay ?>';
            var program_type = $("input[type='radio']:checked").val();
            var program_type_check = $("input[type='checkbox']:checked").val();
            var country = '<?php echo $country_data ?>';
            var day_left_val = $("#day_left_id_data").val();
            var prgrm_dur = $("#progrm_duration_id").val();
            if (dur_date == '') {
                if (progam_pay == 'trail') {
                    if (program_type == 'advanced') {
                        if (promo_code == 'Success2018') {
                            if (prgrm_dur == '6month') {
                                var price1 = $("#advance_6month").val();
                                $("#amount_val").val(price1);
                            }
                            if (prgrm_dur == 'year') {
                                var price2 = $("#advance_year").val();
                                $("#amount_val").val(price2);
                            }
                        } else {
                            if (prgrm_dur == '6month') {
                                $("#amount_val").val('60.00');
                            }
                            if (prgrm_dur == 'year') {
                                $("#amount_val").val('100.00');
                            }
                        }
                    }

                    if (program_type == 'access360') {
                        if (prgrm_dur == '6month') {
                            var price1a = $("#access_6month").val();
                            $("#amount_val").val(price1a);
                            //$("#prgram_type_data").val('access360');
                        }
                        if (prgrm_dur == 'year') {
                            var price1b = $("#access_year").val();
                            $("#amount_val").val(price1b);
                            //$("#prgram_type_data").val('access360');
                        }
                    }
                    all_data = email_data + ',' + program_type + ',' + prgrm_dur;
                } else if (progam_pay == 'starter') {
                    if (promo_code == 'Success2018') {
                        if (program_type == 'advanced' && prgrm_dur == '6month') {
                            var price1 = $("#advance_6month").val();
                            $("#amount_val").val(price1);
                        }
                        if (program_type == 'advanced' && prgrm_dur == 'year') {
                            var price2 = $("#advance_year").val();
                            $("#amount_val").val(price2);
                        }
                        if (program_type == 'access360' && prgrm_dur == '6month') {
                            var price3 = $("#access_6month").val();
                            $("#amount_val").val(price3);
                            //$("#prgram_type_data").val('access360');
                        }
                        if (program_type == 'access360' && prgrm_dur == 'year') {
                            var price4 = $("#access_year").val();
                            $("#amount_val").val(price4);
                        }
                    } else {
                        if (program_type == 'advanced' && prgrm_dur == '6month') {
                            $("#amount_val").val('60.00');
                        }
                        if (program_type == 'advanced' && prgrm_dur == 'year') {
                            $("#amount_val").val('100.00');
                        }
                        if (program_type == 'access360' && prgrm_dur == '6month') {
                            $("#amount_val").val('85.00');
                        }
                        if (program_type == 'access360' && prgrm_dur == 'year') {
                            $("#amount_val").val('158.00');
                        }
                    }
                    all_data = email_data + ',' + program_type + ',' + prgrm_dur;
                } else if (progam_pay == 'advanced') {
                    if (promo_code == 'Success2018') {
                        if (program_type_check == 'access360' && prgrm_dur == '6month') {
                            var p3 = $("#advance_6month_blank_off").val();
                            $("#amount_val").val(p3);
                        }
                        if (program_type_check == 'access360' && prgrm_dur == 'year') {
                            var p4 = $("#advance_year_blank_off").val();
                            $("#amount_val").val(p4);
                        }
                    } else {
                        if (program_type_check == 'access360' && prgrm_dur == '6month') {
                            var p1 = $("#advance_6month_blank").val();
                            $("#amount_val").val(p1);
                        }
                        if (program_type_check == 'access360' && prgrm_dur == 'year') {
                            var p2 = $("#advance_year_blank").val();
                            $("#amount_val").val(p2);
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
                    if (promo_code == 'Success2018') {
                        if (program_type_check == 'access360' && prgrm_dur == '6month') {
                            var p11 = $("#access_month_notblank_off").val();
                            day = $("#access_6month_day").val();
                            $("#amount_val").val(p11);
                        }
                        if (program_type_check == 'access360' && prgrm_dur == 'year') {
                            var p12 = $("#access_year_notblank_off").val();
                            day = $("#access_year_day").val();
                            $("#amount_val").val(p12);
                        }
                    } else {
                        if (program_type_check == 'access360' && prgrm_dur == '6month') {
                            var p11a = $("#access_month_notblank").val();
                            day = $("#access_6month_day").val();
                            $("#amount_val").val(p11a);
                        }
                        if (program_type_check == 'access360' && prgrm_dur == 'year') {
                            var p12a = $("#access_year_notblank").val();
                            day = $("#access_year_day").val();
                            $("#amount_val").val(p12a);
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
        var html = "<div id='progrm_duration col-md-12'>";
        html += "<div class='form-group' style='padding-left: 30px; padding-right: 30px;'>";
        html += "<select class='form-control' id='progrm_duration_id' required>";
        html += "<option value=''>--Select Program Duration--</option>";
        html += "<option value='6month'>6 Months ($ 85.00)</option>";
        html += "<option value='year'>1 Year ($ 100.00)</option>";
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
        $("#progrm_duration").replaceWith(html);
    });
</script>

<script>
    $(".program_type_id").click(function () {
        var prgm_type = $(this).val();
        var html = "<div id='progrm_duration col-md-12'>";
        html += "<div class='form-group' style='padding-left: 30px; padding-right: 30px;'>";
        html += "<select class='form-control' id='progrm_duration_id' required>";
        html += "<option value=''>--Select Program Duration--</option>";
        html += "<option value='6month'>";
        if (prgm_type == 'advanced') {
            html += "6 Months ($ 60.00)";
        }
        if (prgm_type == 'access360') {
            html += "6 Months ($ 85.00)";
        }
        html += "</option>";
        html += "<option value='year'>";
        if (prgm_type == 'advanced') {
            html += "1 Year ($ 100.00)";
        }
        if (prgm_type == 'access360') {
            html += "1 Year ($ 158.00)";
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
        $("#progrm_duration").replaceWith(html);
    });
</script>

<script>
    $(".program_type_trail_id").click(function () {
        var prgm_type = $(this).val();
        if (prgm_type != 'starter') {
            var html = "<div id='progrm_duration col-md-12'>";
            html += "<div class='form-group' style='padding-left: 30px; padding-right: 30px;'>";
            html += "<select class='form-control' id='progrm_duration_id' required>";
            html += "<option value=''>--Select Program Duration--</option>";
            html += "<option value='6month'>";
            if (prgm_type == 'advanced') {
                html += "6 Months ($ 60.00)";
            }
            if (prgm_type == 'access360') {
                html += "6 Months ($ 85.00)";
            }
            html += "</option>";
            html += "<option value='year'>";
            if (prgm_type == 'starter') {
                html += "1 Year ($ 70.50)";
            }
            if (prgm_type == 'advanced') {
                html += "1 Year ($ 100.00)";
            }
            if (prgm_type == 'access360') {
                html += "1 Year ($ 158.00)";
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
            $("#progrm_duration").replaceWith(html);
        }
    });
</script>

<script>
    $(document).ready(function () {
        $("#continue_data").click(function () {
            var promo_code = $('#promo_code_id').val();
            var progam_pay = '<?php echo $progam_pay ?>';
            var country = '<?php echo $country_data ?>';
            var prgm_dur = '<?php echo $prgrm_duration ?>';
            if (progam_pay == 'advanced') {
                if (promo_code == 'Success2018') {
                    if (prgm_dur == '6month') {
                        var pa1 = $("#advance_6month").val();
                        $("#amount_val_id").val(pa1);
                    }
                    if (prgm_dur == 'year') {
                        var pa2 = $("#advance_year").val();
                        $("#amount_val_id").val(pa2);
                    }
                } else {
                    if (prgm_dur == '6month') {
                        $("#amount_val_id").val('60.00');
                    }
                    if (prgm_dur == 'year') {
                        $("#amount_val_id").val('100.00');
                    }
                }
            }
            if (progam_pay == 'access360') {
                if (promo_code == 'Success2018') {
                    if (prgm_dur == '6month') {
                        var pa3 = $("#access_6month").val();
                        $("#amount_val_id").val(pa3);
                    }
                    if (prgm_dur == 'year') {
                        var pa4 = $("#access_year").val();
                        $("#amount_val_id").val(pa4);
                    }
                } else {
                    if (prgm_dur == '6month') {
                        $("#amount_val_id").val('85.00');
                    }
                    if (prgm_dur == 'year') {
                        $("#amount_val_id").val('158.00');
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
        if (promo == 'Success2018') {
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
