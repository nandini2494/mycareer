<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>MCD</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <?php echo $this->Html->css('css/bootstrap.min.css') ?>
        <?php echo $this->Html->css('css/paper-dashboard.css') ?>
        <?php echo $this->Html->css('css/custom_css.css') ?>
        <?php echo $this->Html->css('css/jquery.signaturepad.css') ?>
        <?php echo $this->Html->css('css/font/stylesheet.css') ?>
        <?php echo $this->Html->css('css/style.css') ?>
        <?php echo $this->Html->css('css/demo/style.css') ?>
        <?php echo $this->Html->css('css/circularprogress.css') ?>
        <?php echo $this->Html->css('css/responsive_use.css') ?>

        <!--  Fonts and icons     -->
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <style>
            #full_name_1{display:none;}
            .modal-dialog{margin-top:0px !important;}
            #smoothed{margin:0 auto;width:404px;}
            .img_use{max-height: 50px; max-width: 90px;}
            input[type='text'] {
                width: 100%;
                color: #000;
                padding: 1% 2%;
            }
            .button1{width: 41%; margin: auto 26%;}
        </style>
    </head>
    <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar'); ?>

    <div class="main-panel">

        <?php echo $this->Element('dashboard/header') ?>

        <div class="clearfix"></div>
        <?php    
        $paypal_link = 'https://www.paypal.com/cgi-bin/webscr'; 
        $paypal_username = 'payment@mycareerdashboard.com'; //Business Email
        ?>

        <!-- navigation start -->
        <div class="main_div" style="margin:2% 1% 2% 1%;">	           
            <div class="col-lg-12 col-md-12" style="background: #f5f5f5; padding-top: 2%; padding-bottom: 1%; border: 1px solid #bce8f1;">

                <form action="<?php echo $paypal_link ?>" method="post" id="form_id" name="form1">
                    <input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
                    <!-- Specify a Buy Now button. -->                   
                    <div class="row">
                        <div class="text-center">
                            <h2>Order Summary</h2>
                        </div><br/>
                        <div class="text-center">
                            <img src="<?php echo DOMAIN_NAME ?>img/co-logo.png" class="img_use">
                        </div>
                        </span>
                        <div class="table">
                            <table class="table table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th>Verification Name</th>
                                        <th class="text-center">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php $plus = 0; $id = array();                          
                            for($i = 0; $i < count($data); $i++) {
                            foreach ($data as $value) {
                                array_push($id, $value[$i]['verify_reference']['id']);
                            ?>
                                <?php if(($value[$i]['verify_reference']['reference_name'] == 'workplace_verification') && ($value[$i]['verify_reference']['reference_type'] == 'verify')) { ?>
                                    <tr>
                                        <td class="col-md-9"><em>1 Workplace Verification</em></h4></td>
                                        <td class="col-md-3 text-center">$18.95</td>
                                <?php $plus += 18.95 ?>
                                    </tr> 
                                <?php } elseif (($value[$i]['verify_reference']['reference_name'] == 'workplace_verification') && ($value[$i]['verify_reference']['reference_type'] == 'certify')) { ?>
                                    <tr>
                                        <td class="col-md-9"><em>1 Workplace Certification</em></h4></td>
                                        <td class="col-md-3 text-center">$28.50</td>
                                <?php $plus += 28.50 ?>
                                    </tr> 
                                <?php } elseif ($value[$i]['verify_reference']['reference_name'] == 'personnel_verification') { ?>
                                    <tr>
                                        <td class="col-md-9"><em>1 Personnel/Charactor Verification</em></h4></td>
                                        <td class="col-md-3 text-center">$15.50</td>
                                <?php $plus += 15.50 ?>
                                    </tr>  
                                <?php } elseif ($value[$i]['verify_reference']['reference_name'] == 'education_verification') { ?>
                                    <tr>
                                        <td class="col-md-9"><em>1 Education Verifications</em></h4></td>
                                        <td class="col-md-3 text-center">$30.00</td>
                                <?php $plus += 30.00 ?>
                                    </tr> 
                                <?php }  elseif ($value[$i]['verify_reference']['reference_name'] == 'volunteer_verification') {  ?>
                                    <tr>
                                        <td class="col-md-9"><em>1 Volunteer Verifications</em></h4></td>
                                        <td class="col-md-3 text-center">$15.50</td>
                                <?php $plus += 15.50 ?>
                                    </tr> 
                                <?php } elseif ($value[$i]['verify_reference']['reference_name'] == 'certificate') { ?>
                                    <tr>
                                        <td class="col-md-9"><em>1 Certifications/Special Training</em></h4></td>
                                        <td class="col-md-3 text-center">$15.50</td>
                                <?php $plus += 15.50 ?>
                                    </tr> 
                                <?php } elseif ($value[$i]['verify_reference']['reference_name'] == 'addition_courses') { ?>
                                    <tr>
                                        <td class="col-md-9"><em>1 Internship Verification</em></h4></td>
                                        <td class="col-md-3 text-center">$18.50</td>
                                <?php $plus += 18.50 ?>
                                    </tr> 
                                <?php } elseif ($value[$i]['verify_reference']['reference_name'] == 'social_network') { ?>
                                    <tr>
                                        <td class="col-md-9"><em>1 Social Network Assessment</em></h4></td>
                                        <td class="col-md-3 text-center">$10.50</td>
                                <?php $plus += 10.50 ?>
                                    </tr> 
                                <?php } } } ?>
                                    <tr>
                                        <td class="text-right">
                                            <p>
                                                <strong>Subtotal: </strong>
                                            </p><br/>
                                            <p>
                                                <strong>13% HST: </strong>
                                            </p></td>
                                        <td class="text-center">
                                            <p>
                                                <strong>$<?php echo $add = number_format($plus,2) ?></strong>
                                            </p><br/>
                                            <p>
                                                <strong>$<?php echo $tax = number_format((($plus*13)/100),2) ?></strong>
                                            </p></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><h5><strong>Total: </strong></h5></td>
                                        <td class="text-center text-danger"><h5><strong>$<span id="total_value"><?php echo number_format(($add + $tax),2) ?></span></strong></h5></td>
                                    </tr>
                                    <tr style="text-align: right;"><td colspan="4"><span style="color: red" id="view_code"></span></td></tr>
                                    <tr>
                                        <td class="col-md-9">Enter Promo code</td>
                                        <td class="col-md-3"><input type="text" name="code" id="promo_code"></td>
                                        <td><a class="btn" onclick="validate_form()">Validate</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><h4><strong>Total Cost: </strong></h4></td>
                                        <td class="text-center text-danger"><h4><strong>$<span id="amount_data"><?php echo number_format(($add + $tax),2) ?></span></strong></h4></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-3">Payment Method</td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><input type="radio" name="payment" value="e_transfer" required="">E-Transfer &nbsp;&nbsp;
                                            <input type="radio" name="payment" value="paypal" required="">Paypal
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="item_name" value="Verification">
                        <input type="hidden" name="item_number" value="12">
                        <input type="hidden" id="amount_data1" name="amount" value="<?php echo number_format(($add + $tax),2) ?>">
                        <input type="hidden" name="base_amount" value="<?php echo number_format($plus,2) ?>">
                        <input type="hidden" name="tax" value="13">
                        <input type='hidden' name='cancel_return' value='<?php echo DOMAIN_NAME ?>paypal_cancel.html'>
                        <input type='hidden' name='return' value="<?php echo DOMAIN_NAME ?>paypal_success.html">
                        <input type="hidden" name="notify_url" value="<?php echo DOMAIN_NAME ?>dashboards/ipn">
                        <input type="hidden" name="custom" value="<?php echo htmlspecialchars($this->params['url']['val']); ?>">
                        <div id="pay_button">
                            <button type="submit" class="btn btn-success btn-lg button1">Pay Now</button> 
                        </div>                          
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                </form> 

            </div>              
            <?php echo $this->Element('dashboard/left_side') ?>
        </div>		
        <div class="clearfix"></div>

    </div>

    <!-- script modal  -->
    <!--   Core JS Files   -->

    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
    <script>
        function validate_form() {
            var promo = $("#promo_code").val();
            var total = $("#total_value").text();
            if (!(promo == 'CRV2017' || promo == 'CRV3017' || promo == 'CRV5017' || promo == 'CRVFREE17')) {
                $("#view_code").text("Invalid Code");
                $("#view_code").slideDown('slow');
                setTimeout(function () {
                    $("#view_code").slideUp('slow');
                }, 2000);
                $("#amount_data").text(total);
                $("#amount_data1").val(total);
            }
            if (promo == 'CRVFREE17') {
                $("#amount_data").text(0);
                $("#amount_data1").val(0);
                var html = "<div id='pay_button'>";
                html += "<button type='button' onclick='promo_free(<?php echo htmlspecialchars($this->params['url']['val']); ?>)' class='btn btn-success btn-lg button1'>Click Here</button>";
                html += "</div>"; 
                $("#pay_button").replaceWith(html);
            }
            if (promo == 'CRV2017') {
                var total_amount = total - (total * 20) / 100;
                $("#amount_data").text(total_amount);
                $("#amount_data1").val(total_amount);
            }
            if (promo == 'CRV3017') {
                var total_amount = total - (total * 30) / 100;
                $("#amount_data").text(total_amount);
                $("#amount_data1").val(total_amount);
            }
            if (promo == 'CRV5017') {
                var total_amount = total - (total * 50) / 100;
                $("#amount_data").text(total_amount);
                $("#amount_data1").val(total_amount);
            }
        }
    </script>  

    <script>
        function promo_free(id) {
            $.ajax({
                url: "<?php echo Router::url(['controller' => 'dashboards/pormo_free_user']) ?>",
                type: "post",
                data: {"promo_id": id},
                success: function (data) {
                    window.location = "paypal_success.html";
                }
            });
        }
    </script>

    <?php echo $this->Html->script('js/jquery-1.10.min.js') ?>

    <script>
        $("#form_id").submit(function () {
            var choice = $("input[name='payment']:checked").val();
            if (choice == 'paypal') {
                $('#form_id').attr('action', 'https://www.paypal.com/cgi-bin/webscr');
            } else if (choice == 'e_transfer') {
                $('#form_id').attr('action', '<?php echo DOMAIN_NAME ?>transfer.html');
            }
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/circularprogress.jquery.js"></script>
    <script>
        var total_count = "<?php echo ($new_count + $complete_count + $process_count) ?>";
        var new_count = "<?php echo $new_count ?>";
        var complete_count = "<?php echo $complete_count ?>";
        var process_count = "<?php echo $process_count ?>";
        var new_count_per = (new_count / total_count) * 100;
        if (isNaN(new_count_per)) {
            new_count_per = 0;
        }
        var complete_count_per = (complete_count / total_count) * 100;
        if (isNaN(complete_count_per)) {
            complete_count_per = 0;
        }
        var process_count_per = (process_count / total_count) * 100;
        if (isNaN(process_count_per)) {
            process_count_per = 0;
        }
        var new_count_chart = (360 / 100) * new_count_per;
        var process_count_chart = (360 / 100) * process_count_per;
        var complete_count_chart = (360 / 100) * complete_count_per;

        $(document).ready(function () {
            $('.newtest2').circles({
                'targetPos': new_count_chart,
                speed: 2,
                onFinishMoving: function (pos) {
                    console.log('done ', pos);
                }
            });
            $('.newtest3').circles({
                'targetPos': process_count_chart,
                speed: 2,
                onFinishMoving: function (pos) {
                    console.log('done ', pos);
                }
            });
            $('.newtest4').circles({
                'targetPos': complete_count_chart,
                speed: 2,
                onFinishMoving: function (pos) {
                    console.log('done ', pos);
                }
            });
        });
    </script>


    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <?php echo $this->Html->script('js/rumca.min.js') ?>
    <?php echo $this->Html->script('js/example.js') ?>
    <script>
        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>

    <?php echo $this->Html->script('js/bootstrap.min.js') ?>
    <?php echo $this->Html->script('js/circularprogress.jquery.js') ?>
    <?php echo $this->Html->script('js/numeric-1.2.6.min.js') ?>
    <?php echo $this->Html->script('js/bezier.js') ?>
    <?php echo $this->Html->script('js/jquery.signaturepad.js') ?>
    <?php echo $this->Html->script('js/app.js') ?>  
</body>
</html>