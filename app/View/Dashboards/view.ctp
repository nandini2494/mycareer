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
        <?php echo $this->Html->css('css/style.css') ?>  
        <?php echo $this->Html->css('css/demo/style.css') ?>  
        <?php echo $this->Html->css('css/circularprogress.css') ?>
        <?php echo $this->Html->css('css/responsive_use.css') ?>

        <!--  Fonts and icons     -->
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <style>
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
        </style>
    </head>
    <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>

    <div class="main-panel">

        <?php echo $this->Element('dashboard/header') ?>

        <div class="clearfix"></div>

        <!-- navigation start -->
        <div class="new_view" style="margin:2% 3% 2% 3%;">	
            <div class="col-lg-12 col-md-12 new_view_div">
                <div class="col-lg-9 col-md-9 data_div_view">
                    Number of Views 
                </div>
                <div class="col-lg-3 col-md-3 data_div_view">
                   <?php echo count($view_data) ?> 
                </div>
                <div class="table">
                    <table class="table-responsive" style="width:100%; border: 1px solid #6f6b6b;">
                        <tr class='div_data_manage'>
                            <th>Company Name</th>
                            <th>Date Viewed</th>
                            <th>Contact Information</th>
                            <th>Tab Viewed</th>
                            <th>Time Duration</th>
                            <th>Delete</th>
                        </tr>

                        <?php if(count($view_data) > 0) {
                        foreach ($view_data as $data) { ?>
                        <tr style="border-bottom: 1px solid #6f6b6b;">
                            <td><?php echo ucwords($data['view_me']['company_name']) ?></td>
                            <td><?php if(!empty($data['view_me']['date_view'])) { echo date('d M, Y',strtotime($data['view_me']['date_view'])); } ?></td>
                            <td><?php echo $data['view_me']['email'] ?></td>
                            <td>
                            <?php if($data['view_me']['select_data'] != '') { ?>
                                <ol>
                            <?php $value = explode(',',$data['view_me']['select_data']); 
                            for($i = 0; $i < count($value); $i++) { ?>
                                    <li><?php echo $value[$i]; ?></li>
                            <?php } ?>

                                </ol> 
                            <?php } ?>
                            </td>
                            <td>
                            <?php if((!empty($data['view_me']['login_time'])) AND (!empty($data['view_me']['logout_time']))) { 
                                $login_time = strtotime($data['view_me']['login_time']);
                                $logout_time = strtotime($data['view_me']['logout_time']);
                                $diff = ($logout_time - $login_time)/60;
                                echo number_format($diff, 2). " Min";
                            }
                            ?>
                            </td>
                            <td><button type="button" onclick='delete_view("<?php echo $data['view_me']['id'] ?>")'>Delete</button></td>
                        </tr>
                        <?php } } else { ?>
                        <tr>
                            <td colspan="6"><center><b>No View Available</b></center></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>

            <?php echo $this->Element('dashboard/left_side') ?>
            <!-- navigation start end-->
        </div>		
        <div class="clearfix"></div>

        <br/><br/> <br/> <br/>

    </div>

    <!--   Core JS Files   -->
    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>

    <!-- Delete View -->
    <script>
        function delete_view(id) {
            if (confirm("Are you sure")) {
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'dashboards/delete_view']) ?>",
                    type: "POST",
                    data: {'delete_view_id': id},
                    success: function (data) {
                        location.reload();
                    }
                });
            }
        }
    </script>

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
    <?php echo $this->Html->script('js/bootstrap.min.js') ?>
</body>
</html>
