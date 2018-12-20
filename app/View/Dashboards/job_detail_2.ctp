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
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

        <style>			
            .progress-bar {
                float: initial !important;                
            }
            .progress-striped{height: 24px; background-color: #f1eeee !important;}           
            .sr-only {
                margin-left: 5px;
                overflow: visible;
                clip: auto;
            }
            .name {text-transform: capitalize}
            .table-user-information tr>td:nth-of-type(2n+1){width:35%;color: #4c4949;font-weight: 600;font-size: 15px;}
            .table-user-information tr>td:nth-of-type(2n+0){width:65%;}
            .text_center_use{text-align:center;font-size:20px;}
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
            .rating_color{
                color: #f39c12 !important;
                padding-left: 5px;
                font-size:15px;
            }
            .form-control{color: #5d5d5d;font-weight:500;}
            .form-control::placeholder{color:#5d5d5d;font-weight:500;}
            .button_pdf{
                position: fixed;
                bottom: 0%;
                left: 26%;
                right: 0%;
                width: 11%;
                display: block;
                margin: 0 auto;
                color: green;
                background: #fff;
            }
            .panel-info>.panel-heading {
                background-color: #254094;
                border-color: #254094;
                outline: none;
            }
            .panel-heading h4{color: #fff;}
        </style>
    </head>
    <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>
    <div class="main-panel">
        <?php echo $this->Element('dashboard/header') ?>
        <div class="clearfix"></div>

        <div class="col-lg-12 col-md-12">
            <?php if(count($result) > 0) {
            foreach ($result as $data) { ?>

            <div class="panel panel-info">
                <img class="img_div_logo" src="<?php echo DOMAIN_NAME ?>img/co-logo.png">
                <div class="panel-heading">
                    <h4 class="text_center_use">Job Details</h4>
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class=" col-md-12 col-lg-12 "> 

                            <div class="table">
                                <table class="table table-user-information table-responsive">
                                    <input type="hidden" name="resume_data" id="resume_id" value="<?php echo $data['job_post']['resume'] ?>">
                                    <input type="hidden" id="job_id" value="<?php echo $data['job_post']['id']; ?>">
                                    <tbody>
                                    <?php if(count($job_apply_detail) > 0) { ?>
                                        <tr>
                                            <td colspan="2" style="color: #bd0000;"><b>You Already Applied for this job</b></td>
                                        </tr>
                                    <?php } ?>
                                        <tr>
                                            <td>Company Name</td>
                                            <td class="name"><?php echo $data['job_post']['company_name'] ?></td>                                       
                                        </tr>
                                        <tr>
                                            <td>Job Title</td>
                                            <td class="name"><?php echo $data['job_post']['title'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Job Description</td>
                                            <td><?php echo $data['job_post']['job_desc'] ?></td>
                                        </tr>

                                        <tr>
                                            <td>Location</td>
                                            <td class="name"><?php echo $data['job_post']['city'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Job Type</td>
                                            <td><?php echo $data['job_post']['job_type'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Salary</td>
                                            <td><?php echo $data['job_post']['salary'] ?> /<?php echo $data['job_post']['as_per'] ?></td>
                                        </tr>
                                        <tr> 
                                            <td>Contact Email</td>
                                            <td><?php echo $data['job_post']['email'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Education</td>
                                            <td><?php if($data['job_post']['education_level'] != '') { echo $data['job_post']['education_level']; } else { echo "--"; } ?></td>
                                        </tr>
                                        <tr>
                                            <td>Experience</td>
                                            <td><?php echo $data['job_post']['experience'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Language</td>
                                            <td><?php echo $data['job_post']['language'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Licence</td>
                                            <td><?php if($data['job_post']['licence'] != '') { echo $data['job_post']['licence']; } else { echo "--"; } ?></td>
                                        </tr>
                                        <tr>
                                            <td>Job Posted</td>
                                            <td><?php echo date('d-M-Y',strtotime($data['job_post']['date'])); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>              
                <!-- navigation start end-->

            </div>

            <?php } } else { ?>           
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="text_center_use">Job Details</h4>
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-12 col-lg-12 "> 
                            <center><p style="font-weight: bold; font-size: 17px">No Jobs Available</p></center>
                        </div>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    </div>
    <div class="clearfix"></div>

    <div id="job_detail" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form method="post" id="jb_details" enctype="multipart/form-data" action="job_detail.html">
                    <input type="hidden" name="job_id" value="<?php echo $this->params['url']['id']; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title div_working_new">Job Details</h4>
                    </div>
                    <div class="">
                        <div class='form-group'>
                            <div class="well text-center">
                                <div class="form-group">
                                    <label>Upload Resume</label>
                                    <input type="file" name="upload_resume" id="up_resume">                                  
                                </div>                                
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>


        </div>
    </div>


    <script>
        $(document).ready(function () {
            $('.progress .progress-bar').css("width",
                    function () {
                        return $(this).attr("aria-valuenow") + "%";
                    }
            )
        });
    </script>

    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
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


    <?php echo $this->Html->script('js/jquery-1.10.min.js') ?>
    <?php echo $this->Html->script('js/rumca.min.js') ?>
    <?php echo $this->Html->script('js/example.js') ?>

    <?php echo $this->Html->script('js/bootstrap.min.js') ?>    
    <?php echo $this->Html->script('js/circularprogress.jquery.js') ?>

</body>
</html>
