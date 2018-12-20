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
        </style>
    </head>
    <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>
    <div class="main-panel">
        <?php echo $this->Element('dashboard/header') ?>
        <div class="clearfix"></div>

        <div class="col-lg-12 col-md-12">


            <div class="col-lg-8 col-md-8">
                <div class="">

                    <div class="toppad">


                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title class_profile_use">
                                    Education Details
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class=" col-md-12 col-lg-12 "> 
                                        <div class="table">
                                            <table class="table table-user-information table-responsive">
                                                <tbody>
                                                    <tr>
                                                        <td>Education</td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            if($result['register']['study_type']){
                                                            echo $result['register']['study_type'];
                                                            } else {
                                                                echo "-";
                                                            }
                                                        }  
                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Program</td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            if($result['register']['university_program']){
                                                            echo $result['register']['university_program'];
                                                            } else {
                                                                echo "-";
                                                            }
                                                        } 
                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Course </td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            if($result['register']['course']){
                                                            echo $result['register']['course'];
                                                            } else {
                                                                echo "-";
                                                            }
                                                        }  
                                                    ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                    <tr>
                                                        <td>Start Date</td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            if($result['register']['course_start']) {
                                                                echo date('d-M-Y',strtotime($result['register']['course_start']));
                                                            } else {
                                                                echo "-";
                                                            }
                                                        }  
                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>End Date</td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            if($result['register']['course_complete']) {
                                                                echo date('d-M-Y',strtotime($result['register']['course_complete']));
                                                            } else {
                                                                echo "-";
                                                            }
                                                        }  
                                                    ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class='col-lg-12 col-sm-12 col-md-12 col-xs-12 space_div'>
                                            <div class='pull-right'>
                                            <?php foreach ($results as $result) { ?>                                                                                                                                       
                                                <button id="show_education" class="btn btn-primary">Edit Education's Detail</button>
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

            <!-- <div class="col-lg-4 col-md-4">
                <img src="<?php echo DOMAIN_NAME ?>img/dashboard_add.png" class="img-responsive">
            </div> -->
        </div>


        <div class='clearfix'></div>
    </div>		
    <div class="clearfix"></div>

    <div id="myModal_details" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title div_working_new">Edit Details</h4>
                </div>
                <div class="">
                    <div class='form-group'>
                        <div class="well">

                            <form method="post" id="update_info">
                                <div class="form-group">
                                    <?php 
                                    foreach ($results as $result) {
                                    $id = $result['register']['id'];
                                    $prgrm = $result['register']['university_program'];
                                    $course = $result['register']['course'];
                                    $course_start = $result['register']['course_start'];
                                    $course_complete = $result['register']['course_complete'];
                                    ?>
                                    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                                    <?php } ?>
                                    <label>Program</label>
                                    <?php 
                                    foreach ($results as $result) {
                                    if($result['register']['study_type'] == 'University'){ ?>
                                    
                                    <select class="form-control" name="university_program">
                                        <option value="">--Select Program--</option>
                                        <option value="Undergraduate/Certificate/Diploma" <?php echo ($prgrm == 'Undergraduate/Certificate/Diploma' ? 'selected="selected"' : '') ?>>Undergraduate/Certificate/Diploma</option>
                                        <option value="Bachelors Degree" <?php echo ($prgrm == 'Bachelors Degree' ? 'selected="selected"' : '') ?>>Bachelors Degree</option>
                                        <option value="Graduate" <?php echo ($prgrm == 'Graduate' ? 'selected="selected"' : '') ?>>Graduate</option>
                                        <option value="Masters" <?php echo ($prgrm == 'Masters' ? 'selected="selected"' : '') ?>>Masters</option>
                                        <option value="Doctorate" <?php echo ($prgrm == 'Doctorate' ? 'selected="selected"' : '') ?>>Doctorate</option>
                                    </select>
                                    <?php } elseif ($result['register']['study_type'] == 'College') { ?>
                                    <select class="form-control" name="university_program">
                                        <option value="">--Select Program--</option>
                                        <option value="Certificate Program" <?php echo ($prgrm == 'Certificate Program' ? 'selected="selected"' : '') ?>>Certificate Program</option>
                                        <option value="Diploma Program" <?php echo ($prgrm == 'Diploma Program' ? 'selected="selected"' : '') ?>>Diploma Program</option>
                                        <option value="Degree Program" <?php echo ($prgrm == 'Degree Program' ? 'selected="selected"' : '') ?>>Degree Program</option>
                                        <option value="Graduate Certificate" <?php echo ($prgrm == 'Graduate Certificate' ? 'selected="selected"' : '') ?>>Graduate Certificate</option>
                                        <option value="Advanced Diploma" <?php echo ($prgrm == 'Advanced Diploma' ? 'selected="selected"' : '') ?>>Advanced Diploma</option>
                                    </select>
                                    <?php } } ?>
                                    <div class="clearfix"></div>
                                </div>

                                <?php 
                                    foreach ($results as $result) {
                                    if($result['register']['study_type'] == 'University'){ ?>
                                <div class="form-group">
                                    <label>Course</label>
                                    <select class="form-control" name="course">
                                        <option value="">--Select Course--</option>
                                        <option value="First Year" <?php echo ($course == 'First Year' ? 'selected="selected"' : '') ?>>First Year</option>
                                        <option value="Second Year" <?php echo ($course == 'Second Year' ? 'selected="selected"' : '') ?>>Second Year</option>
                                        <option value="Third Year" <?php echo ($course == 'Third Year' ? 'selected="selected"' : '') ?>>Third Year</option>
                                    </select>
                                    <div class="clearfix"></div>
                                </div>
                                <?php } elseif($result['register']['study_type'] == 'College') { ?>
                                <input type="hidden" name="course" value="">
                                <?php } } ?>

                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input class="form-control" name="s_date" type="date" value="<?php echo $course_start ?>"/>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group">
                                    <label>End Date</label>
                                    <input class="form-control" name="e_date" type="date" value="<?php echo $course_complete ?>"/>
                                    <div class="clearfix"></div>
                                </div>                               
                                <button type="submit" style="margin-top: 1em;" class="btn btn-default">Save</button>
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

    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>

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

    <?php echo $this->Html->script('js/rumca.min.js') ?>
    <?php echo $this->Html->script('js/example.js') ?>
    <?php echo $this->Html->script('js/bootstrap.min.js') ?>
    <?php echo $this->Html->script('js/circularprogress.jquery.js') ?>


    <script>
        $('#show_education').click(function(){
            $('#myModal_details').modal('show');
        });           
    </script>

    <script>
        $("#update_info").submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo Router:: url(['controller' => 'dashboards/updateUserEducation']) ?>",
                type: "POST",
                data: new FormData(this),
                cache: false,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data == 1) {
                        location.reload();
                    } 
                }
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <script>
        $("#id_dob").datepicker({
            dateFormat: 'dd-mm-yy',
            yearRange: "-100:+100",
            changeMonth: true,
            changeYear: true,
        });
    </script>

    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script>
        $('#id_phone').inputmask("1-(999) 999-9999");
    </script>

    <script>
        function delete_media(id) {
            if (confirm("Are you sure")) {
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'dashboards/deleteMedia']) ?>",
                    type: "POST",
                    data: {"delete_id": id},
                    success: function (data) {
                        location.reload();
                    }
                });
            }
        }
    </script>

</body>
</html>
