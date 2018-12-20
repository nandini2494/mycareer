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
        <?php echo $this->Html->css('school/paper-dashboard.css') ?>
        <?php echo $this->Html->css('school/demo.css') ?>
        <?php echo $this->Html->css('school/custom_css.css') ?>
        <?php echo $this->Html->css('school/themify-icons.css') ?>    
        <?php echo $this->Html->css('school/demo/calendar-style.css') ?>   
        <?php echo $this->Html->css('school/demo/style.css') ?>
        <?php echo $this->Html->css('school/style.css') ?>
        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
        <style>
            #email_id {width: 60% !important;}
        </style>
    </head>

    <body>
        <?php echo $this->Element('school/header') ?>

        <div class="clearfix"></div>      
        <div class="wrapper">
            <?php echo $this->Element('school/sidebar') ?>         

            <div class="main-panel">


                <!-- navigation start -->
                <div class="new_view" style="margin:2% 3% 2% 3%;">

                    <div id="co_brand" class="tab-pane active">
                        <div class="container-fluid">
                            <h5 style="margin-top: 14px; margin-bottom: 14px; color: #bd0000;">Co-Branding D.I.Y </h5>
                            <table class="col-lg-12 col-md-12 table_use_data" style="margin-bottom: 1em;">
                                <thead>
                                    <tr class="table_head_data_view">
                                        <th>Payment Type</th>
                                        <th>MCD</th>
                                        <th>Program</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <?php if(count($manual_payment) > 0) {
                                foreach ($manual_payment as $payment_detail) { ?>
                                <tbody>
                                    <tr>                                
                                        <td><?php echo $payment_detail['manual_payment']['payment_type'] ?></td>
                                        <td><?php echo $payment_detail['register']['crv_code'] ?></td>
                                        <td>
                                            <?php if($payment_detail['register']['program'] == 'starter') { ?>
                                            Career Starter
                                            <?php } else if($payment_detail['register']['program'] == 'advanced') { ?>  
                                            Career Advanced
                                            <?php } else if($payment_detail['register']['program'] == 'access360') { ?> 
                                            All Access 360
                                            <?php } ?> 
                                        </td>
                                        <td>Student</td>
                                        <td><?php echo "$ ".$payment_detail['manual_payment']['amount'] ?></td>
                                        <td><?php echo date('d-M-Y',strtotime($payment_detail['manual_payment']['date'])) ?></td>
                                    </tr>
                                </tbody>
                                <?php } } else { ?>
                                <tbody>
                                    <tr>
                                        <td colspan="10"><center><b>No Payment Available</b></center></td>
                                </tr>
                                </tbody>
                                <?php } ?>
                            </table>    
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <!-- navigation start end-->

                    <div class="clearfix"></div>

                </div>                
            </div>
        </div>

        <!-- end Modal -->

        <!--   Core JS Files   -->
            <?php echo $this->Html->script('school/demo/moment.latest.min.js') ?>
            <?php echo $this->Html->script('school/jquery-3.2.1.min.js') ?>
            <?php echo $this->Html->script('school/circularprogress.jquery.js') ?> 
            <?php echo $this->Html->script('school/icons.js') ?> 

        <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
        <script>
            $('.phone').inputmask("1-(999) 999-9999");
        </script>

        <script>
            $(document).ready(function () {
                $('.progress .progress-bar').css("width",
                        function () {
                            return $(this).attr("aria-valuenow") + "%";
                        }
                )
            });
        </script>

        <script>
            window.onscroll = function () {
                var el = document.getElementById('sticky'),
                        s = window.pageYOffset || document.documentElement.scrollTop, // how much page is scrolled
                        t = document.getElementById('main').getBoundingClientRect().top; // top of main div
                if (s > t) {
                    el.style.position = 'fixed'; //make position fixed instead of absolute
                } else {
                    el.style.position = ''; //clear styles if back to original position
                }
            }
        </script>

        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#myTable').DataTable();
            });
        </script>

        <script>
            $(document).ready(function () {
                $('#myFirstTable').DataTable();
            });
        </script>

        <?php echo $this->Html->script('school/bootstrap.min.js') ?>

    </body>

</html>