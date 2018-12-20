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
        <?php echo $this->Html->css('css/animate.min.css') ?>
        <?php echo $this->Html->css('css/paper-dashboard.css') ?>
        <?php echo $this->Html->css('css/demo.css') ?>
        <?php echo $this->Html->css('css/custom_css.css') ?>
        <?php echo $this->Html->css('css/font/stylesheet.css') ?>
        <?php echo $this->Html->css('css/style.css') ?>
        <?php echo $this->Html->css('css/demo/style.css') ?>
        <?php echo $this->Html->css('css/rumca.min.css') ?>
        <?php echo $this->Html->css('css/example.css') ?>
        <?php echo $this->Html->css('css/circularprogress.css') ?>
        <?php echo $this->Html->css('css/responsive_use.css') ?>

        <!--  Fonts and icons     -->
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>       
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <style>
            /* animation div use start */
            #shiva
            {
                width: 100px;
                height: 100px;
                background: red;
                -moz-border-radius: 50px;
                -webkit-border-radius: 50px;
                border-radius: 50px;
                float:left;
                margin:5px;
            }
            .count
            {
                line-height: 100px;
                color:white;
                margin-left:30px;
                font-size:25px;
            }
            #talkbubble {
                width: 120px;
                height: 80px;
                background: red;
                position: relative;
                -moz-border-radius:    10px;
                -webkit-border-radius: 10px;
                border-radius:         10px;
                float:left;
                margin:20px;
            }
            #talkbubble:before {
                content:"";
                position: absolute;
                right: 100%;
                top: 26px;
                width: 0;
                height: 0;
                border-top: 13px solid transparent;
                border-right: 26px solid red;
                border-bottom: 13px solid transparent;
            }

            .linker
            {
                font-size : 20px;
                font-color: black;
            }

            /* end animation */

            .modal-dialog{margin-top:0px !important;}
            .well {
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .well {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #ecf0f1;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
                box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
            }
            .last_div_data {margin-bottom: 1em;}
            .btn {
                border-width: 2px;
            }
            .btn-default {
                color: #ffffff;
                background-color: #95a5a6;
                border-color: #95a5a6;
            }

            .form-control{color: #5d5d5d;font-weight:500;}
            .form-control::placeholder{color:#5d5d5d;font-weight:500;}
            .form-group input[type=text]{width: 100%;} 
            .table > tbody > tr > td {
                font-size: 1em;
                color: #5c5656;
            }
        </style>
    </head>
	  <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>
    <div class="main-panel">
        <?php echo $this->Element('dashboard/header') ?>
        <div class="clearfix"></div>

        <div class="col-lg-12 col-md-12">


            <div class="">
                <div class="">

                    <div class="toppad" >


                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title class_profile_use">
                                    Payment History :&nbsp;&nbsp;                                                 
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class=" col-md-12 col-lg-12 "> 
                                        <?php if(count($payment_history) > 0) {
                                            foreach($payment_history as $payment) {  
                                            ?>
                                        <div class="well">
                                            <div class="table">
                                                <table class="table table-user-information table-responsive">

                                                    <tbody>
                                                        <tr>
                                                            <td>Txn Id</td>
                                                            <td>
                                                    <?php 
                                                        echo $payment['payment']['txn_id'];
                                                    ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Amount </td>
                                                            <td>
                                                    <?php 
                                                        echo $payment['payment']['amount']; 
                                                    ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Payment Date </td>
                                                            <td>
                                                    <?php 
                                                        if(!empty ($payment['payment']['payment_date'])) {
                                                            echo date('M d,Y', strtotime($payment['payment']['payment_date'])); 
                                                        } else {
                                                            echo '';
                                                        }
                                                    ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                            </div>
                                        <?php } } else { ?>
                                            <table class="table table-user-information table-responsive">
                                                <tr>
                                                    <td colspan="12"><center><b>No History Available</b></center></td>
                                                </tr>
                                            </table>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class='clearfix'></div>
    </div>		
    <div class="clearfix"></div>

    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

</body>
</html>
