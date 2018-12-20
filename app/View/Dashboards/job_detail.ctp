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
            .job-descrption ul{
                background: none;
            }
            .application_button{
                padding-top:2em;	
            }
            .application_button > .save_job{
                background: #e7a50c;
                color: #f5f5f5;
                border: 1px solid #d4d406;
            }
            .application_button > .save_job:hover{
                background: #f9c448;
            }
            .application_button button:hover{
                background: #4760b0;
                color: #fff;
            }
            .logo_part{
                width: 14%;
                padding: 15px;
                float: left;	
            }
            .job_section{
                padding-top: 16px;
                width: 75%;
                float: left;	
            }
            .job_section p{
                padding: .8% 0% 0% 0% !important;
            }
            .job-descrption h4 {
                padding: 2em 0 1em 0;
                color: #000;
                font-size: 19px;
                font-weight: bold;
            }
            .job-descrption h5{padding-top: 10px;}
            .job-descrption p, .job_section p {
                color: #1d1d1d !important;
                font-size: 16px;
            }
            .new_line{line-height: 36px;}
            .application_button button {
                background: #254094;
                color: #fff;
                padding: 11px 5em;
                border-radius: 20px;
                border: none;
            }
            .job-descrption ul li{
                margin-left: 27px;
                border: none;
                color: #000;
                font-weight: bold;
            }
        </style>
    </head>
    <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>
    <div class="main-panel">
        <?php echo $this->Element('dashboard/header') ?>
        <div class="clearfix"></div>

        <?php foreach ($result as $job_detail) { ?>
        <div class="new_view" style="margin:2% 3% 2% 3%;">	

            <div class="view_job">
                <div class="logo_part">
                    <img src="<?php echo $this->webroot ?><?php echo $job_detail['job_post']['company_logo'] ?>" class="img-responsive"/>
                </div>
                <div class="job_section">
                    <h4><?php echo $job_detail['job_post']['job_title'] ?></h4>
                    <p><?php echo $job_detail['job_post']['company_name'] ?></p>
                    <p><?php echo $job_detail['job_post']['province'] ?></p>
                    <p><?php echo $job_detail['job_post']['city'] ?></p>
                </div>

            </div>
            <div class="clearfix"></div>
            <div class="application_button">
                <?php if(sizeof($job_apply_detail) > 0) { ?>
                <p style="color: red;"><b>You already Applied to this Job</b></p>
                <?php } else { ?>
                <button onclick="job_apply(<?php echo $job_detail['job_post']['id'] ?>)">Apply For Job</button>
                <?php if(sizeof($save_job) == 0) { ?>
                <button class="save_job" id="save_job" onclick='save_job("<?php echo $job_detail['job_post']['id'] ?>", "<?php echo $user_id; ?>")'>Save to Dashboard</button>
                <?php } else { ?>
                <button class="save_job" id="saved_job">Saved</button>
                <?php } ?>
                <?php } ?>
            </div>

            <div class="job-descrption">
                <h4><?php echo $job_detail['job_post']['job_title'] ?></h4>
                <?php if($job_detail['job_post']['company_history'] != '') { ?>
                <h5>About Company</h5>
                <p><?php echo $job_detail['job_post']['company_history'] ?></p>
                <?php } ?>
                <h5>Job Description</h5>
                <?php echo $job_detail['job_post']['job_desc'] ?>   
                <h5>Requirements</h5>
                <?php echo $job_detail['job_post']['requirement'] ?>   
                <?php if($job_detail['job_post']['exp_level'] != '') { ?>
                <p class="new_line"><b>Experience Level - </b><?php echo $job_detail['job_post']['exp_level'] ?></p>
                <?php } ?>
                <p class="new_line"><b>Job Type - </b><?php echo $job_detail['job_post']['position_type'] ?></p>
                <?php if($job_detail['job_post']['salary'] != '') { ?>
                <p class="new_line"><b>Wages - </b><?php echo "$ ".$job_detail['job_post']['salary'] ?> <?php echo $job_detail['job_post']['as_per'] ?></p>
                <?php } ?>

                <?php if(isset($job_detail['job_post']['intern_length']) && $job_detail['job_post']['intern_length'] != '') { ?>   
                <p class="new_line"><b>Length Of <?php if($job_detail['job_post']['form_type'] == 'internPost') { ?>Internship<?php } else if($job_detail['job_post']['form_type'] == 'coopPost') { ?>CO-op - </b><?php echo $job_detail['job_post']['intern_length'] ?><?php } ?></p>
                    <?php if($job_detail['job_post']['intern_length'] == 'Other') { ?>
                <p class="new_line"><b>If Other - </b><?php echo $job_detail['job_post']['intern_length_val'] ?></p>
                    <?php } ?>
                <?php } ?>
                    <?php if(isset($job_detail['job_post']['paid_intern']) && $job_detail['job_post']['paid_intern'] != '') { ?>   
                <p class="new_line"><b>Is this a Paid <?php if($job_detail['job_post']['form_type'] == 'coopPost') { ?>Co-Op<?php } ?> <?php if($job_post_value['form_type'] == 'internPost') { ?>Internship<?php } ?> - </b><?php echo $job_detail['job_post']['paid_intern'] ?></p>
                <?php } ?>
                    <?php if(isset($job_detail['job_post']['auth_comp']) && $job_detail['job_post']['auth_comp'] != '') { ?>   
                <p class="new_line"><b>Is your company an authorized <?php if($job_detail['job_post']['form_type'] == 'coopPost') { ?>Co-Op<?php } ?> <?php if($job_detail['job_post']['form_type'] == 'internPost') { ?>Internship<?php } ?> company - </b><?php echo $job_detail['job_post']['auth_comp'] ?></p>
                <?php } ?>

                <p class="new_line"><b>Contact Email - </b><?php echo $job_detail['job_post']['contact_email'] ?></p>
                <?php if($job_detail['job_post']['gpa'] != '') { ?>
                <p class="new_line"><b>GPA - </b><?php echo $job_detail['job_post']['gpa'] ?></p>
                <?php } ?>
                <?php if($job_detail['job_post']['gpa'] == 'Yes') { ?>
                <p class="new_line"><b>GPA Value - </b><?php echo $job_detail['job_post']['gpa_value'] ?></p>
                <?php } ?>
                <?php if($job_detail['job_post']['position_expose'] != '') { ?>
                <p class="new_line">Does this position expose the student to hazardous and/or bio hazardous materials?</p>
                <li><?php echo $job_detail['job_post']['position_expose'] ?></li>
                <?php } ?>
                <?php if($job_detail['job_post']['travel'] != '') { ?>
                <p class="new_line">Does this position require travel?</p>
                <li><?php echo $job_detail['job_post']['travel'] ?></li>
                <?php } ?>
                <?php if($job_detail['job_post']['pre_employment'] != '') { ?>
                <p class="new_line">Please indicate any pre-employment screenings your organization requires. Select all that apply. </p>
                <li><?php echo $job_detail['job_post']['pre_employment'] ?></li>
                <?php } ?>               
            </div>
        </div>
        <?php } ?>
    </div>

    <!-- Modal -->
    <div class="modal fade invite" id="myModal1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="err" style="display:none;"></div>
                            <div class="well">

                                <form id="myFormInvite" method="post">

                                    <div class="form-group">
                                        <input type="hidden" name="job_id" id="job_id_id">
                                        <input type="hidden" name="user_id" value="<?php echo $user_data['id'] ?>">
                                        <label for="crv" class="div_use_label">MCD:</label>
                                        <input name="for_mcd" type="text" value="<?php echo $mcd_user_val ?>" class="div_input" size="40%" readonly>                                                    
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="div_use_label">Email:</label>
                                        <input name="email_val" class="div_input" type="text" size="40%" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="password"  class="div_use_label">Password:</label>
                                        <input name="row_password" class="div_input" type="text" size="40%" required="">                                                
                                    </div>
                                    <div class="form-group">
                                        <label class="div_use_label">Company Name:</label>
                                        <input name="company_name" class="div_input" type="text" size="40%" required="">                                                   
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="submit_btn_class">Invite</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- end Modal -->

    <div class="clearfix"></div>


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

    <script>
        var job_id = $('#job_id').val();
        var user_id = '<?php echo $user_id; ?>';

        $('#apply_id').click(function () {
            var resume_id = $('#resume_id').val();
            if (resume_id == 'Yes') {
                $("#job_detail").modal("show");
            } else {
                $.ajax({
                    url: '<?php echo Router::url(['controller' => 'dashboards/job_apply']) ?>',
                    type: 'POST',
                    data: {'job_id': job_id, 'user_id': user_id},
                    success: function (data) {
                        window.location = '<?php echo DOMAIN_NAME ?>' + 'job_alert.html';
                    }
                });
            }
        });
    </script>

    <script>
        function job_apply(job_id) {
            $('#job_id_id').val(job_id);
            $('#myModal1').modal('show');
        }

        $("#myFormInvite").submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo Router::url(['controller' => 'dashboards/job_apply_invite']) ?>",
                type: "POST",
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data == 1)
                    {
                        alert("Invitation Send");
                        location.reload();
                    } else if (data == 0)
                    {
                        $(".err").html("You already Invited");
                        $(".err").slideDown('slow');
                        setTimeout(function () {
                            $(".err").slideUp('slow');
                        }, 8000);
                    }
                }
            });
        });

        function save_job(job_id, user_id) {
            $.ajax({
                url: "<?php echo Router::url(['controller' => 'dashboards/save_job']) ?>",
                type: "POST",
                data: {'job_id': job_id, 'user_id1': user_id},
                success: function (data) {
                    if (data == 1) {
                        location.reload();
                    }
                }
            });
        }
    </script>

</body>
</html>
