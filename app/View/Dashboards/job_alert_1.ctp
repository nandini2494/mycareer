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
        <?php echo $this->Html->css('css/circularprogress.css') ?>
        <?php echo $this->Html->css('css/responsive_use.css') ?>

        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

        <style>

            .progress-bar {
                float: initial !important;                
            }
            .sr-only {
                margin-left: 5px;
                overflow: visible;
                clip: auto;
            }
            .row_color{background:#fff;}
            .name {text-transform: capitalize}
            /*.table-user-information tr>td:nth-of-type(2n+1){width:35%;}
            .table-user-information tr>td:nth-of-type(2n+0){width:65%;}*/
            .new_progress_use button {float: left;}
            .text_center_use{text-align:center;font-size:20px;}
            .modal-dialog{margin-top:0px !important;}
            .well {
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .para_justify{text-align:justify}
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

            .rating_color{
                color: #f39c12 !important;
                padding-left: 5px;
                font-size:15px;
            }
            .name {text-transform: capitalize;}
        </style>
    </head>
     <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>
    <div class="main-panel">
        <?php echo $this->Element('dashboard/header') ?>
        <div class="clearfix"></div>

        <div class="col-lg-12 col-md-12">


            <div class="toppad">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class='text_center_use'>Job Alerts</h4>
                    </div> 

                    <div class='panel-body'>
                        <div class='row bg_use_div'>
                            <div class="table">
                                <table class="table table-user-information new_progress_use new_table table-responsive">
                                    <thead>                                    
                                        <tr>
                                            <th><h2>Company Name</h2></th>
                                            <th><h2>Job Title</h2></th>
                                            <th><h2>State/Province</h2></th>
                                            <th><h2>City</h2></th>
                                            <th><h2>Salary</h2></th>
                                            <th><h2>View Job</h2></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($results) > 0) {
                                    foreach ($results as $data) { ?>

                                        <tr>
                                            <td><?php echo $data['job_post']['company_name'] ?></td>
                                            <td><?php echo $data['job_post']['job_title'] ?></td>
                                            <td><?php echo $data['job_post']['province'] ?></td>
                                            <td><?php echo $data['job_post']['city'] ?></td>
                                            <td><?php echo $data['job_post']['salary'] ?> /<?php echo $data['job_post']['as_per'] ?></td>
                                            <td><a href="job_detail.html?id=<?php echo $data['job_post']['id'] ?>"><button class="worked_data_used" onclick="view_count('<?php echo $data['job_post']['id'] ?>', '<?php echo $user_id; ?>')">View</button></a></td>
                                        </tr>

                                    <?php } } else { ?>
                                        <tr>
                                            <td colspan="14"><b><center>No Jobs Available</center></b></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>

                                </table>
                            </div>
                            <div class='clearfix'></div>
                        </div>
                    </div>   


                </div>
            </div>
        <?php echo $this->Element('dashboard/left_side') ?>

            <!-- navigation start end-->

        </div>		
        <div class="clearfix"></div>

    <?php echo $this->Html->script('js/jquery-3.2.1.min') ?>
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
    <?php echo $this->Html->script('js/rumca.min') ?>
    <?php echo $this->Html->script('js/example') ?>
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

        <script>
            function view_count(job_id, user_id) {
                $.ajax({
                    url: '<?php echo Router::url(['controller' => 'dashboards/job_view']) ?>',
                    type: 'POST',
                    data: {'job_id': job_id, 'user_id': user_id},
                    success: function (data) {

                    }
                });
            }
        </script>
    <?php echo $this->Html->script('js/bootstrap.min') ?>
    <?php echo $this->Html->script('js/circularprogress.jquery') ?>
    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>

    </body> 
</html>
