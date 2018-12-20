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

                                    My Profile :&nbsp;&nbsp;             
                                    <?php 
                                    foreach($results as $result) {
                                        echo $result['register']['first_name'];
                                        echo " ";
                                        echo $result['register']['last_name'] ;
                                    }   
                                    ?>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class=" col-md-12 col-lg-12 "> 
                                        <div class="table">
                                            <table class="table table-user-information table-responsive">
                                                <tbody>
                                                    <tr>
                                                        <td>First Name </td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            echo $result['register']['first_name'];
                                                        }  
                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Last Name </td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            echo $result['register']['last_name'];
                                                        }  
                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Telephone </td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            if($result['register']['phone']){
                                                            echo $result['register']['phone'];
                                                            } else {
                                                                echo "-";
                                                            }
                                                        }  
                                                    ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                    <tr>
                                                        <td>Email Address</td>
                                                        <td>
                                                        <?php 
                                                        foreach ($results as $result) {
                                                            echo $result['register']['email'];
                                                        }  
                                                        ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date of Birth </td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            if($result['register']['dob']) {
                                                                echo date('d-M-Y',strtotime($result['register']['dob']));
                                                            } else {
                                                                echo "-";
                                                            }
                                                        }  
                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>User Type</td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            if($result['register']['study_type']) {
                                                                echo $result['register']['study_type'];
                                                            } else {
                                                                echo "-";
                                                            }
                                                        }  
                                                    ?>
                                                        </td>
                                                    </tr>

                                                    <?php if($result['register']['school'] != '') { ?>
                                                    <tr>
                                                        <td>Name of University/College/School</td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            echo $result['register']['school'];
                                                        }  
                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>

                                                    <tr>
                                                        <td>MCD Number</td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            if($result['register']['crv_code']) {
                                                                echo $result['register']['crv_code'];
                                                            } else {
                                                                 echo "-";
                                                            }                                                             
                                                        }  
                                                    ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Profile Pic</td>
                                                        <td>
                                                    <?php 
                                                        foreach ($results as $result) {
                                                            if($result['register']['profile_pic']) { ?>
                                                            <img src='<?php echo DOMAIN_NAME.$result['register']['profile_pic'] ?>' class="user_img_data">
                                                            <?php } else { ?>
                                                            <img src='<?php echo DOMAIN_NAME ?>img/avatar.png' class="user_img_data">   
                                                        <?php  } }  ?>                                                           
                                                        </td>
                                                    </tr>

                                                    <?php if(count($media_data) > 0) { ?>
                                                    <tr>
                                                        <td>My Social Network</td>
                                                        <td>
                                                            <ul class="social_media_list">
                                                            <?php foreach ($media_data as $media) { 
                                                                if($media['social_network']['network_name'] == 'facebook') {
                                                            ?>
                                                                <li><a href="<?php echo $media['social_network']['network_url'] ?>" target="_blank"><i class="fa fa-facebook-f social_media"></i></a>
                                                                    <i class="fa fa-times cross_icon" onclick='delete_media("<?php echo $media['social_network']['id'] ?>")'></i>
                                                                </li>
                                                            <?php } if($media['social_network']['network_name'] == 'instagram') { ?>
                                                                <li><a href="<?php echo $media['social_network']['network_url'] ?>" target="_blank"><i class="fa fa-instagram social_media"></i></a>
                                                                    <i class="fa fa-times cross_icon" onclick='delete_media("<?php echo $media['social_network']['id'] ?>")'></i>
                                                                </li>
                                                            <?php } if($media['social_network']['network_name'] == 'linkedin') { ?>
                                                                <li><a href="<?php echo $media['social_network']['network_url'] ?>" target="_blank"><i class="fa fa-linkedin social_media"></i></a>
                                                                    <i class="fa fa-times cross_icon" onclick='delete_media("<?php echo $media['social_network']['id'] ?>")'></i>
                                                                </li>
                                                            <?php } if($media['social_network']['network_name'] == 'google-plus') { ?>
                                                                <li><a href="<?php echo $media['social_network']['network_url'] ?>" target="_blank"><i class="fa fa-google-plus social_media"></i></a>
                                                                    <i class="fa fa-times cross_icon" onclick='delete_media("<?php echo $media['social_network']['id'] ?>")'></i>
                                                                </li>
                                                            <?php } if($media['social_network']['network_name'] == 'twitter') { ?>
                                                                <li><a href="<?php echo $media['social_network']['network_url'] ?>" target="_blank"><i class="fa fa-twitter social_media"></i></a>
                                                                    <i class="fa fa-times cross_icon" onclick='delete_media("<?php echo $media['social_network']['id'] ?>")'></i>
                                                                </li>
                                                            <?php } if($media['social_network']['network_name'] == 'skype') { ?>
                                                                <li><a href="<?php echo $media['social_network']['network_url'] ?>" target="_blank"><i class="fa fa-skype social_media"></i></a>
                                                                    <i class="fa fa-times cross_icon" onclick='delete_media("<?php echo $media['social_network']['id'] ?>")'></i>
                                                                </li>
                                                            <?php } if($media['social_network']['network_name'] == 'pinterest') { ?>
                                                                <li><a href="<?php echo $media['social_network']['network_url'] ?>" target="_blank"><i class="fa fa-pinterest social_media"></i></a>
                                                                    <i class="fa fa-times cross_icon" onclick='delete_media("<?php echo $media['social_network']['id'] ?>")'></i>
                                                                </li>
                                                            <?php } if($media['social_network']['network_name'] == 'youtube') { ?>
                                                                <li><a href="<?php echo $media['social_network']['network_url'] ?>" target="_blank"><i class="fa fa-youtube social_media"></i></a>
                                                                    <i class="fa fa-times cross_icon" onclick='delete_media("<?php echo $media['social_network']['id'] ?>")'></i>
                                                                </li>
                                                            <?php } } ?>
                                                            </ul>                                                     
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class='col-lg-12 col-sm-12 col-md-12 col-xs-12 space_div'>
                                            <div class='pull-right'>
                                            <?php foreach ($results as $result) { ?>                                                                                                                                       
                                                <button onclick='show("<?php echo $result['register']['id'] ?>", "<?php echo $result['register']['first_name'] ?>", "<?php echo $result['register']['last_name'] ?>", "<?php echo $result['register']['provence'] ?>", "<?php echo $result['register']['program_signup'] ?>", "<?php echo $result['register']['email'] ?>", "<?php echo $result['register']['phone'] ?>", "<?php echo $result['register']['city'] ?>", "<?php echo date('d-m-Y',strtotime($result['register']['dob'])) ?>", "<?php echo $result['register']['profile_pic'] ?>", "<?php echo $result['register']['study_type'] ?>", "<?php echo $result['register']['school'] ?>")' class="btn btn-primary">Edit Profile Detail's</button>
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
        <div class="example-box">
            <div class="example__headline">
                <h2 class='margin_carrier'>Career Dashboard </h2>
            </div>
            <div id="chart-2"></div>
            <input type="hidden" class="prgrm_type" value="<?php echo $progam_pay ?>">
            <input type="hidden" class="career_plan" value="<?php echo $career_plan ?>">
            <input type="hidden" class="resume" value="<?php echo $resume ?>">
            <input type="hidden" class="job_school" value="<?php echo $count_job ?>">
            <input type="hidden" class="accomp" value="<?php echo $accomp ?>">
            <input type="hidden" class="keySkill" value="<?php echo $key_skill ?>">
            <input type="hidden" class="essen_skill" value="<?php echo $essential_skill ?>">
            <input type="hidden" class="career_related" value="<?php echo $career_related_act ?>">
            <input type="hidden" class="education" value="<?php echo $education ?>">
            <input type="hidden" class="interview_note" value="<?php echo $interview_note ?>">
            <input type="hidden" class="task_list" value="<?php echo $task_list ?>">
            <input type="hidden" class="job_search" value="<?php echo $job_search_site ?>">
            <input type="hidden" class="career_contact" value="<?php echo $career_contact ?>">
            <input type="hidden" class="reference" value="<?php echo $reference ?>">
            <input type="hidden" class="goal" value="<?php echo $career_goal ?>">
            <input type="hidden" class="event" value="<?php echo $event ?>">
            <input type="hidden" class="swot" value="<?php echo $swot ?>">
            <input type="hidden" class="mission_state" value="<?php echo $mission_statement ?>">
        </div>
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

                            <form id="update_info">
                                <input type='hidden' id="user_id" name="user_id"/>
                                <input type="hidden" id="id_pic" name="user_pic">
                                <div class="row">
                                    <div class="col-md-6">                                        
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" id="id_firstname" maxlength="100" name="first_name" type="text" placeholder="FirstName"/>
                                            <div class="clearfix"></div>
                                        </div>                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" id="id_lastname" name="last_name" type="text" placeholder="LastName"/>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">  
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" id="id_phone" name="phone" type="text" placeholder="Phone"/>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">  
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" id="id_email" maxlength="100" name="email" type="email" placeholder="Email"/>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">  
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input class="form-control last_div_data" id="id_dob" maxlength="100" name="dob" type="text" placeholder="Date of Birth"/>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">  
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Profile Pic</label>
                                                <input class="form-control last_div_data" maxlength="100" name="profile_pic" type="file"/>
                                                <div class="clearfix"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">  
                                        <label>Study Type</label>
                                        <input class="form-control last_div_data" id="id_user_type" maxlength="100" name="study_type" type="text" placeholder="User Type"/>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6">  
                                        <div class="form-group" id="school_val">
                                            <label>University/College/School</label>
                                            <?php foreach ($results as $result) {
                                            $s_type = $result['register']['study_type'];                                                            
                                            if($s_type == 'University' || $s_type == 'College') { ?>
                                            <select class="form-control last_div_data" id="id_school" name="school">
                                                <option value="">--Select Name--</option>
                                                <?php foreach ($study_list as $s_list) { ?>
                                                <option value="<?php echo $s_list['university']['university_name'] ?>"><?php echo $s_list['university']['university_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <?php } else { ?>
                                            <input class="form-control last_div_data" id="id_school" maxlength="100" name="school" type="text" placeholder="University/College/School Name"/>
                                            <?php } } ?>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Select Media</label>
                                            <select class="form-control last_div_data" name="media_data">
                                                <option value="">--Select Social Media--</option>
                                                <option value="facebook">Facebook</option>
                                                <option value="instagram">Instagram</option>
                                                <option value="linkedin">Linkedin</option>
                                                <option value="google-plus">Google Plus</option>
                                                <option value="twitter">Twitter</option>
                                                <option value="skype">Skype</option>
                                                <option value="pinterest">Pinterest</option>
                                                <option value="youtube">Youtube</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Social Media Url</label>
                                            <input class="form-control last_div_data" maxlength="100" name="media_url" type="text" placeholder="Enter Social Media Url"/>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default">Save</button>
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
        function show(id, firstname, lastname, provence, program_signup, email, phone, city, dob, profile_pic, study_type, school) {
            $('#user_id').val(id);
            $('#id_firstname').val(firstname);
            $('#id_lastname').val(lastname);
            $('#id_phone').val(phone);
            $('#id_email').val(email);
            $('#id_dob').val(dob);
            $('#id_city').val(city);
            $('#id_provence').val(provence);
            $('#id_pic').val(profile_pic);
            $('#program_signup').val(program_signup);
            $('#id_user_type').val(study_type);
            if (study_type == 'University' || study_type == 'College' || study_type == 'Trade School') {
                $('#school_val').show();
                $('#id_school').val(school);
            } else {
                $('#school_val').hide();
            }
            $('#myModal_details').modal('show');
        }
    </script>

    <script>
        $("#update_info").submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo Router:: url(['controller' => 'dashboards/updateUser']) ?>",
                type: "POST",
                data: new FormData(this),
                cache: false,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data == 1) {
                        location.reload();
                    } else {
                        alert("Email Id already Exist. Please Try Again!");
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
