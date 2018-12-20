<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>MCD</title>
        <?php echo $this->Html->css('bootstrap.min.css') ?>
        <?php echo $this->Html->css('custom.css') ?>
        <?php echo $this->Html->css('responsive_use.css') ?>
        <?php echo $this->Html->css('font-awesome.min.css') ?>
        <?php echo $this->Html->css('font/stylesheet.css') ?>

        <style>
            body {background-color: #eeeeee;}
        </style>
    </head>
    <body>

        <!--  header start -->
        <?php echo $this->Element('top'); ?>    
        <!-- header end --> 

        <div class="container">
            <div id="loginbox" style="margin-top:90px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info" >
                    <?php foreach ($user_data as $user) { ?>
                    <div class="panel-heading">
                        <div class="panel-title">Renewal Payment</div>
                    </div>

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

                    <div style="padding-top:10px" class="panel-body" >
                        <div class="panel-body">
                            <div style="margin-bottom:10px;" align="center">
                                <?php if($user['register']['program'] == 'trail') { 
                                    $date = strtotime($user['register']['payment_date']);
                                    $exp_date = date('M d,Y',strtotime('+14 days', $date));
                                ?>
                                Your subscription has expired on <b><?php echo $exp_date ?></b>. Please renew your subscription to continue using our service.
                                <?php } else { 
                                    if($user['register']['program_duration'] == '6month') {
                                        $date = strtotime($user['register']['payment_date']);
                                        $exp_date = date('M d,Y',strtotime('+6 months', $date));
                                    }
                                    if($user['register']['program_duration'] == 'year') {
                                        $date = strtotime($user['register']['payment_date']);
                                        $exp_date = date('M d,Y',strtotime('+1 years', $date));
                                    }
                                ?>
                                Your subscription has expired on <b><?php echo $exp_date ?></b>. Please renew your subscription to continue using our service.
                                <?php } ?>
                            </div>
                            <table class="table">

                                <input type="hidden" value="<?php echo $user['register']['program'] ?>" id="program_id_type">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td><?php echo $user['register']['first_name'] ?> <?php echo $user['register']['last_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $user['register']['email'] ?></td>
                                    </tr>
                                    <?php if($user['register']['program'] == 'trail') { ?>
                                    <tr>
                                        <th>Programs</th>
                                        <td>
                                            <select class="form-control" name="program" id="program_id">
                                                <option value="">--Select Program--</option>
                                                <option value="starter">Career Starter</option>
                                                <option value="advanced">Career Advanced</option>
                                                <option value="access360">All Access 360</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr id="table_data">
                                        <th id="duration_name_id"></th>
                                        <td id="duration_div_id"></td>
                                    </tr>
                                    <tr id="data_coupon">
                                        <td><input type="text" id="promo_code" class="form-control" placeholder="Enter Coupon Code"></td>
                                        <td><button class="btn btn-info" onclick="apply_code()">Apply</button><p class="prmo_val"></p></td>
                                    </tr>
                                    <?php } else { ?>
                                    <tr>
                                        <th>Programs</th>
                                        <td>
                                            <?php if($user['register']['program'] == 'starter') {  ?>
                                            Career Starter
                                            <?php }  if($user['register']['program'] == 'advanced') { ?>
                                            Career Advanced
                                            <?php } if($user['register']['program'] == 'access360') { ?>
                                            All Access 360
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <th>Program Duration</th>
                                        <td>
                                            <select class="form-control" name="program_dur" id="program_dur_id">
                                                <option value="6month" <?php echo ($user['register']['program_duration'] == '6month' ? 'selected="selected"' : '') ?>>
                                                    6 Months 
                                                    <?php if($user['register']['program'] == 'advanced') { echo "(". "$ ".$adv_month.")"; ?>
                                                    <?php } if($user['register']['program'] == 'access360') { echo "(". "$ ".$access_month.")"; ?>
                                                    <?php } ?>
                                                </option>
                                                <option value="year" <?php echo ($user['register']['program_duration'] == 'year' ? 'selected="selected"' : '') ?>>
                                                    1 Year 
                                                    <?php if($user['register']['program'] == 'advanced') { echo "(". "$ ".$adv_year.")"; ?>
                                                    <?php } if($user['register']['program'] == 'access360') { echo "(". "$ ".$acess_year.")"; ?>
                                                    <?php } ?>
                                                </option>                                            
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" id="promo_code" class="form-control" placeholder="Enter Coupon Code"></td>
                                        <td><button class="btn btn-info" onclick="apply_code()">Apply</button><p class="prmo_val"></p></td>
                                    </tr> -->
                                    <?php } ?>
                                </tbody>
                            </table>


                            <?php if($user['register']['program'] == 'trail') { ?>
                            <div class="button text-center">
                                <button class="btn btn-success btn-lg" rel="nofollow" data-method="patch" id="pay_now">Pay Now</button>
                            </div>
                            <?php } else { ?>
                            <div class="button text-center">
                                <button class="btn btn-success btn-lg" rel="nofollow" data-method="patch" id="pay_now_user">Pay Now</button>
                            </div>
                            <?php } ?>
                        </div>

                    </div>

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
                        <input type="hidden" name="currency_code" id="currency_code_id" value="<?php if($user['register']['country'] == 'United States') { echo 'USD'; } else if($user['register']['country'] == 'Canada') { echo 'CAD'; } ?>"> 
                        <input type="hidden" name="amount" id="amount_val_id">
                        <input type='hidden' name='cancel_return' value='<?php echo DOMAIN_NAME ?>paypal_cancel.html'>
                        <input type='hidden' name='return' value="<?php echo DOMAIN_NAME ?>paypal_sucess.html">
                        <input type="hidden" name="notify_url" value="<?php echo DOMAIN_NAME ?>pages/ipn_val">
                        <input type="hidden" id="custom_value" name="custom">
                    </form>
                    <?php } ?>

                </div>
            </div>

        </div>

        <?php echo $this->Element('footer'); ?>

        <script>
            $(document).ready(function () {
                $("#program_id").change(function () {
                    var program = $(this).val();
                    var adv_month = '<?php echo $adv_month ?>';
                    var adv_year = '<?php echo $adv_year ?>';
                    var access_month = '<?php echo $access_month ?>';
                    var acess_year = '<?php echo $acess_year ?>';
                    if (program != 'starter') {
                        var html1 = "<th id='duration_name_id'>";
                        html1 += "Program Duration";
                        html1 += "</th>";
                        $("#duration_name_id").replaceWith(html1);

                        var html = "<td id='duration_div_id'>";
                        html += "<select class='form-control' name='program_trial_dur' id='program_dur_trial_id'>";
                        html += "<option value=''>--Select Program Duration--</option>";
                        html += "<option value='6month'>";
                        if (program == 'advanced') {
                            html += "6 Months ($ " + adv_month + ")";
                        }
                        if (program == 'access360') {
                            html += "6 Months ($ " + access_month + ")";
                        }
                        html += "</option>";
                        html += "<option value='year'>";
                        if (program == 'advanced') {
                            html += "1 Year ($ " + adv_year + ")";
                        }
                        if (program == 'access360') {
                            html += "1 Year ($ " + acess_year + ")";
                        }
                        html += "</option>";
                        html += "</select>";
                        html += "</td>";
                        $("#duration_div_id").replaceWith(html);
                        $("#table_data").show();
                        $("#data_coupon").show();
                    }

                    if (program == 'starter') {
                        $("#table_data").hide();
                        $("#data_coupon").hide();
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                $("#pay_now").click(function () {
                    var program = $('#program_id option:selected').val();
                    var prgrm_dur = $('#program_dur_trial_id option:selected').val();
                    var email = '<?php echo $user['register']['email'] ?>';
                    var promo_code = $("#promo_code").val();
                    var promo_val = '<?php echo $code ?>';
                    var all_data = email + ',' + program + ',' + prgrm_dur;
                    var adv_month = '<?php echo $adv_month ?>';
                    var adv_year = '<?php echo $adv_year ?>';
                    var access_month = '<?php echo $access_month ?>';
                    var acess_year = '<?php echo $acess_year ?>';

                    var advance_6month_off = '<?php echo $advance_6month ?>';
                    var advance_year_off = '<?php echo $advance_year ?>';
                    var access_6month_off = '<?php echo $access_6month ?>';
                    var access_year_off = '<?php echo $access_year ?>';
                    if (program == 'starter') {
                        $.ajax({
                            url: "<?php echo Router::url(['controller'=>'pages/renewStarter']) ?>",
                            type: "POST",
                            data: {'email_id': email},
                            success: function (data) {
                                alert('Successful Change Your Program');
                                window.location.href = "<?php echo DOMAIN_NAME ?>" + "index.html";
                            }
                        });
                    } else {
                        if (program == 'advanced') {
                            if (promo_code == promo_val) {
                                if (prgrm_dur == '6month') {
                                    $("#amount_val_id").val(advance_6month_off);
                                }
                                if (prgrm_dur == 'year') {
                                    $("#amount_val_id").val(advance_year_off);
                                }
                            } else {
                                if (prgrm_dur == '6month') {
                                    $("#amount_val_id").val(adv_month);
                                }
                                if (prgrm_dur == 'year') {
                                    $("#amount_val_id").val(adv_year);
                                }
                            }
                        }
                        if (program == 'access360') {
                            if (promo_code == promo_val) {
                                if (prgrm_dur == '6month') {
                                    $("#amount_val_id").val(access_6month_off);
                                }
                                if (prgrm_dur == 'year') {
                                    $("#amount_val_id").val(access_year_off);
                                }
                            } else {
                                if (prgrm_dur == '6month') {
                                    $("#amount_val_id").val(access_month);
                                }
                                if (prgrm_dur == 'year') {
                                    $("#amount_val_id").val(acess_year);
                                }
                            }
                        }
                        $("#custom_value").val(all_data);
                        if (program == '' || prgrm_dur == '') {
                            alert('Select all details');
                        } else {
                            $("#payment_form").submit();
                        }
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                $("#pay_now_user").click(function () {
                    var program = $("#program_id_type").val();
                    var promo_code = $("#promo_code").val();
                    var promo_val = '<?php echo $code ?>';
                    //var prgrm_dur = $('#program_dur_id option:selected').val();
                    var prgrm_dur = 'year';
                    var email = '<?php echo $user['register']['email'] ?>';
                    var all_data = email + ',' + program + ',' + prgrm_dur;
                    var adv_month = '<?php echo $adv_month ?>';
                    var adv_year = '<?php echo $adv_year ?>';
                    var access_month = '<?php echo $access_month ?>';
                    var acess_year = '<?php echo $acess_year ?>';

                    var advance_6month_off = '<?php echo $advance_6month ?>';
                    var advance_year_off = '<?php echo $advance_year ?>';
                    var access_6month_off = '<?php echo $access_6month ?>';
                    var access_year_off = '<?php echo $access_year ?>';
                    /*if (program == 'starter') {
                     if (prgrm_dur == '6month') {
                     $("#amount_val_id").val('38.50');
                     }
                     if (prgrm_dur == 'year') {
                     $("#amount_val_id").val('70.50');
                     }
                     }*/
                    if (program == 'advanced') {
                        if (promo_code == promo_val) {
                            if (prgrm_dur == '6month') {
                                $("#amount_val_id").val(advance_6month_off);
                            }
                            if (prgrm_dur == 'year') {
                                $("#amount_val_id").val(advance_year_off);
                            }
                        } else {
                            if (prgrm_dur == '6month') {
                                $("#amount_val_id").val(adv_month);
                            }
                            if (prgrm_dur == 'year') {
                                $("#amount_val_id").val(adv_year);
                            }
                        }
                    }
                    if (program == 'access360') {
                        if (promo_code == promo_val) {
                            if (prgrm_dur == '6month') {
                                $("#amount_val_id").val(access_6month_off);
                            }
                            if (prgrm_dur == 'year') {
                                $("#amount_val_id").val(access_year_off);
                            }
                        } else {
                            if (prgrm_dur == '6month') {
                                $("#amount_val_id").val(access_month);
                            }
                            if (prgrm_dur == 'year') {
                                $("#amount_val_id").val(acess_year);
                            }
                        }
                    }
                    $("#custom_value").val(all_data);
                    $("#payment_form").submit();
                });
            });
        </script>

        <script>
            function apply_code() {
                var code = $("#promo_code").val();
                var promo_val = '<?php echo $code ?>';
                if (code == promo_val) {
                    $(".prmo_val").text('Promo Code Applied');
                } else {
                    $(".prmo_val").text('Invalid Promo Code');
                }
            }
        </script>

    </body>
</html> 