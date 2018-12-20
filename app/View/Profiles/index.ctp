<?php

$user_mcd2 = $this->params['pass']; ?>
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

        <?php echo $this->Html->css('profile/custom.css') ?>     
        <?php echo $this->Html->css('css/bootstrap.min.css') ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <nav class="navbar navbar-inverse normal new_page_color" role="navigation">
            <div class='bg_min_logo'>
                <div class='container container1'>
                    <div class='col-lg-12 col-sm-12 col-xs-12 col-md-12'>
                        <p class='pull-left'>
                            <i class="fa fa-envelope" aria-hidden="true"></i>  &nbsp; &nbsp;info@mycareerdashboard.com
                        </p>               

                        <p class='pull-right'>Application Tracking & Career Management </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class='div_padding_use'>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href=""><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/co-logo.png" alt="co-logo"></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">

                        <ul class="nav navbar-nav navbar-right nav_use_custom">
                            <li class="welcome_data">WELCOME TO MY CAREER DASHBOARD</li>
                            <?php if(sizeof($this->Session->read('guest'))>0) { ?>
                            <li class="log_out">
                                <a href="<?php echo Router::url(['controller'=>'profiles/logout']) ?>">
                                    <p><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</p>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>
            </div>
        </nav> 

        <div class="clearfix"></div>      
        <div class="wrapper">

            <?php if(sizeof($this->Session->read('guest'))>0) { ?>

            <?php 
            foreach ($view_summary as $summary) {
                $name = ucwords($summary['register']['first_name']).' '.ucwords($summary['register']['last_name']);
                $email = $summary['register']['email'];
                $phone = $summary['register']['phone'];
                $profile = $summary['register']['profile_pic'];
                $country = $summary['country']['name'];
                $resume_summary = $summary['create_profile']['resume_summary'];
                $about_me = $summary['create_profile']['about'];
                $job_type = $summary['create_profile']['work_type'];
                $study_type = $summary['create_profile']['education'];
                $university_program = $summary['create_profile']['education_type'];
                $course = $summary['create_profile']['course'];
                $course_start = $summary['create_profile']['start_date'];                
                $course_complete = $summary['create_profile']['end_date'];
                $school = $summary['create_profile']['school'];                
                $mission1 = $summary['create_profile']['mission_statement'];
            }
            ?>

            <section class="head_bg">
                <div class="container-fluid">
                    <div class="row d-flex">
                        <div class="col-md-8 col-sm-8 ">
                            <h1 class="p_name"> <?php echo $name; ?> </h1>
                            <h4 class="sm-hfour_n"><?php echo ucwords($country); ?></h4>
                            <ul class="profile_head">
                                <li><?php echo $phone ?></li>
                                <li><a href="#"><?php echo $email ?></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="profile_resume_pic">
                                <img src="<?php echo $this->webroot ?><?php echo $profile ?>" alt="profile_img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- seciton aside goes here -->

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="flx_container">
                            <div class="col-md-3 col-sm-3 col-xs-12 no_padding flexitem1">
                                <aside class="aside_bg">
                                    <div class="expertise">
                                        <ul class="nav nav-tabs li_blck new_proper">
                                            <li class="active" id="view_mycareer"><a data-toggle="tab"  class="lst" href="#my_cd">Profile</a></li>
                                        <?php if(count($mission_data) > 0) { ?>
                                            <!-- <li onclick='update_view("Mission Statement")'><a  class="lst" data-toggle="tab" href="#mission">Mission Statement</a></li>-->
                                        <?php } ?>
                                        <?php if(count($resume_data) > 0) { ?>
                                            <li onclick='update_view("Resume")'><a  class="lst" data-toggle="tab" href="#resume">Resume </a></li>
                                        <?php } ?>
                                        <?php if(count($accomp_data) > 0) { ?>
                                            <li onclick='update_view("Accomplishments")'><a  class="lst" data-toggle="tab" href="#accomp">Accomplishments</a></li>
                                        <?php } ?>
                                        <?php if(count($key_skill_data) > 0) { ?>
                                            <li onclick='update_view("Key Skills")'><a  class="lst" data-toggle="tab" href="#key">Key Skills </a></li>
                                        <?php } ?>
                                        <?php if(count($essen_data) > 0) { ?>
                                            <li onclick='update_view("Essential Skill")'><a  class="lst" data-toggle="tab" href="#essential_skill">Essential Skill</a></li>
                                        <?php } ?>
                                        <?php if(count($comp_data) > 0) { ?>
                                            <li onclick='update_view("Computer Skills")'><a  class="lst" data-toggle="tab" href="#comp_skill">Computer Skills</a></li>
                                        <?php } ?>
                                        <?php if(count($edu_data) > 0) { ?>
                                            <li onclick='update_view("Education")'><a  class="lst" data-toggle="tab" href="#education">Education</a></li>
                                        <?php } ?>
                                        <?php if((count($career_data) > 0) || (count($volunteer_data) > 0) || (count($course_data) > 0)) { ?>
                                            <li><a  class="lst" data-toggle="tab" href="#career_act">Career Related Activity</a></li>
                                        <?php } ?>
                                        <?php if(count($ref_data_indus) > 0) { ?>
                                            <li  onclick='update_view("DIY Reference")'><a class="lst" data-toggle="tab" href="#reference">DIY Reference </a></li>
                                        <?php } ?>
                                        <?php if(count($swot_data) > 0) {  ?>
                                            <li onclick='update_view("S.W.O.T Analysis")'><a  class="lst" data-toggle="tab" href="#swot">S.W.O.T Analysis</a></li>
                                        <?php } ?>
                                        <?php if(count($evidence_data) > 0) { ?>
                                            <li onclick='update_view("Evidence of Skill")'><a  class="lst" data-toggle="tab" href="#evidence_skill">Evidence of Skill</a></li>
                                        <?php } ?>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12 flexitem2">
                                <div class="tab-content tabs_use tab_wdth">
                                    <div id="my_cd" class="tab-pane fade active in ">
                                        <div class="profile">
                                            <h3>Resume Summary</h3>
                                            <p><?php echo $resume_summary; ?></p>
                                            <div class="under_line_prof"></div>
                                        </div>


                                        <!-- expericence section goes here -->
                                        <div class="profile">
                                            <div class="ex-con">
                                                <h3>Mission Statement</h3>
                                                <p><?php echo $mission1; ?></p>
                                            </div>
                                            <div class="under_line_prof"></div>
                                        </div>
                                        <div class="profile">
                                            <div class="ex-con">
                                                <h3>A Bit About me</h3>
                                                <p><?php echo $about_me; ?></p>

                                            </div>
                                            <div class="under_line_prof"></div>
                                        </div>

                                        <!-- third section goes here -->
                                        <div class="profile">
                                            <h3>Education </h3>
                                            <div class="education">
                                                <h3><?php echo $school ?></h3>
                                                <h4 class="course"><?php echo $university_program ?> <?php if($course != '') { ?>(<?php echo $course ?>)<?php } ?></h4>
                                                <h5>Session: <?php if($course_start != '') { echo date('d/M/Y',strtotime($course_start)); } ?> - <?php if($course_complete != '') { echo date('d/M/Y',strtotime($course_complete)); } ?></h5>
                                            </div>
                                        </div>                                     

                                        <!-- forth section goes here -->
                                        <div class="profile look_data">
                                            <h3>Looking For</h3>
                                            <div class="education">
                                                <h4><?php echo $job_type; ?></h4>                                   
                                            </div>
                                        </div>
                                    </div>

                                <?php if(count($resume_data) > 0) { ?>
                                    <div id="resume" class="tab-pane fade">                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                            <div class='first_div'>
                                                <h2 class='headeing_uwse'></h2>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                        <tbody>
                                                            <tr class="chron_div">
                                                                <th><center>Name Of Resume</center></th>                                       
                                                        <th><center>Date Created</center></th> 
                                                        <th><center>Resume Type</center></th>
                                                        <th colspan="2"><center>View</center></th>
                                                        </tr>
                                            <?php 
                                               foreach ($resume_data as $chron_data) { 
                                            ?>
                                                        <tr class="chron_div_bottom">
                                                            <td><center><?php echo $chron_data['upload_resume']['resume_name'] ?></center></td>
                                                        <td><center><?php if($chron_data['upload_resume']['complete_date']) { echo date('d-M-Y', strtotime($chron_data['upload_resume']['complete_date'])); } else { echo ""; } ?></center></td>
                                                        <td><center><?php echo $chron_data['upload_resume']['resume_type'] ?></center></td>
                                                        <td>
                                            <?php if(!empty($chron_data['upload_resume']['upload'])) {
                                            $chron_upload_data = explode(',', $chron_data['upload_resume']['upload']); 
                                            for($i = 0; $i < count($chron_upload_data); $i++) {
                                            ?>                                                                               
                                                        <center><a class="button_use" href="<?php echo $this->webroot ?>profiles/download?filename=<?php echo $chron_upload_data[$i] ?>">View</a></center>
                                            <?php } } ?>
                                                        </td>  
                                            <?php if($chron_data['upload_resume']['view_data'] == 'View/Print') { ?>
                                                        <td><center><button class="print_btn" onclick='print_data("<?php echo $chron_data['upload_resume']['resume_id'] ?>", "upload_resume")'>Print</button></center></td>
                                            <?php } ?>
                                                        </tr>                                 

                                            <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php } ?>

                            <?php if(count($ref_data_indus) > 0) { ?>
                                    <div id="reference" class="tab-pane fade">
                                <?php
                                    foreach ($ref_data_indus as $ref_data) {
                                        $ref_name = explode('_',$ref_data['verify_reference']['reference_name'])
                                ?>
                                        <div class="repeat_border_div div_referebce border_table">
                                            <div>
                                                <h3 class="head_wrk"><?php echo ucfirst($ref_name[0]). " Verification"; ?>
                                            <?php if($ref_data['verify_reference']['view_data'] == 'View/Print') { ?>
                                                    <button class="print_btn pull-right" style="margin-right: 2em;margin-top:-0.5em;" class="essen_skill_div_delete1 pull-right" onclick='print_data("<?php echo $ref_data['verify_reference']['id'] ?>", "verify_reference")'>Print</button>
                                            <?php } ?>
                                                </h3>
                                            </div>

                                            <?php if($ref_data['verify_reference']['reference_name'] == 'coop_verification') { ?>
                                            <div class='div_margin'>
                                                <h1>Session Name</h1>
                                                <p>
            <?php echo $ref_data['verify_reference']['student_session'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Year</h1>
                                                <p>
            <?php echo $ref_data['verify_reference']['session_year'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Student Name</h1>
                                                <p>
            <?php echo $ref_data['verify_reference']['student_name'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>ID NO</h1>
                                                <p>
            <?php echo $ref_data['verify_reference']['employee_id'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Company Email Id</h1>
                                                <p>
            <?php echo $ref_data['verify_reference']['company_email'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Organization</h1>
                                                <p>
            <?php echo $ref_data['verify_reference']['business_name'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Job Title</h1>
                                                <p>
            <?php echo $ref_data['verify_reference']['title'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Interest In Work</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The degree to which the student pursues goals with commitment and takes pride in accomplishments.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['key_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['key_rating1'] == '10' || $result['verify_reference']['key_rating1'] == '20' || $ref_data['verify_reference']['key_rating1'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['key_rating1'] == '40' || $result['verify_reference']['key_rating1'] == '50' || $ref_data['verify_reference']['key_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['key_rating1'] == '70' || $ref_data['verify_reference']['key_rating1'] == '80' || $ref_data['verify_reference']['key_rating1'] == '90' || $ref_data['verify_reference']['key_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['key_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Ability to Learn</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The extent to which the student becomes proficient with job duties and work processes.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['key_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['key_rating2'] == '10' || $result['verify_reference']['key_rating2'] == '20' || $ref_data['verify_reference']['key_rating2'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['key_rating2'] == '40' || $ref_data['verify_reference']['key_rating2'] == '50' || $ref_data['verify_reference']['key_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['key_rating2'] == '70' || $ref_data['verify_reference']['key_rating2'] == '80' || $ref_data['verify_reference']['key_rating2'] == '90' || $ref_data['verify_reference']['key_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['key_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Quality of Work</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The ability of the student to set high standards for own personal performance; strive for quality work; put forth extra effort to ensure quality work.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['key_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['key_rating3'] == '10' || $ref_data['verify_reference']['key_rating3'] == '20' || $ref_data['verify_reference']['key_rating3'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['key_rating3'] == '40' || $ref_data['verify_reference']['key_rating3'] == '50' || $ref_data['verify_reference']['key_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['key_rating3'] == '70' || $ref_data['verify_reference']['key_rating3'] == '80' || $ref_data['verify_reference']['key_rating3'] == '90' || $ref_data['verify_reference']['key_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['key_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Quantity of Work</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The volume of work produced by the student, along with his or her speed and consistency with output.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['teamwork_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['teamwork_rating1'] == '10' || $ref_data['verify_reference']['teamwork_rating1'] == '20' || $ref_data['verify_reference']['teamwork_rating1'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['teamwork_rating1'] == '40' || $ref_data['verify_reference']['teamwork_rating1'] == '50' || $ref_data['verify_reference']['teamwork_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['teamwork_rating1'] == '70' || $ref_data['verify_reference']['teamwork_rating1'] == '80' || $ref_data['verify_reference']['teamwork_rating1'] == '90' || $ref_data['verify_reference']['teamwork_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['teamwork_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Problem Solving</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The student's demonstrated ability to analyze problems or procedures, evaluate alternatives, and select the best course of action.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['problem_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['problem_rating1'] == '10' || $ref_data['verify_reference']['problem_rating1'] == '20' || $ref_data['verify_reference']['problem_rating1'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['problem_rating1'] == '40' || $ref_data['verify_reference']['problem_rating1'] == '50' || $ref_data['verify_reference']['problem_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['problem_rating1'] == '70' || $ref_data['verify_reference']['problem_rating1'] == '80' || $ref_data['verify_reference']['problem_rating1'] == '90' || $ref_data['verify_reference']['problem_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['problem_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Teamwork</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The degree to which the student works will in a team setting.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['teamwork_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['teamwork_rating2'] == '10' || $ref_data['verify_reference']['teamwork_rating2'] == '20' || $ref_data['verify_reference']['teamwork_rating2'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['teamwork_rating2'] == '40' || $ref_data['verify_reference']['teamwork_rating2'] == '50' || $ref_data['verify_reference']['teamwork_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['teamwork_rating2'] == '70' || $ref_data['verify_reference']['teamwork_rating2'] == '80' || $ref_data['verify_reference']['teamwork_rating2'] == '90' || $ref_data['verify_reference']['teamwork_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['teamwork_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Dependability</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The manner in which the students conducts his or herself in the working environment.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['reliabilty_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['reliabilty_rating1'] == '10' || $ref_data['verify_reference']['reliabilty_rating1'] == '20' || $ref_data['verify_reference']['reliabilty_rating1'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['reliabilty_rating1'] == '40' || $ref_data['verify_reference']['reliabilty_rating1'] == '50' || $ref_data['verify_reference']['reliabilty_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['reliabilty_rating1'] == '70' || $ref_data['verify_reference']['reliabilty_rating1'] == '80' || $ref_data['verify_reference']['reliabilty_rating1'] == '90' || $ref_data['verify_reference']['reliabilty_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['reliabilty_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Response to Supervision</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The manner in which the student responds to direction and constructive criticism.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['reliabilty_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['reliabilty_rating2'] == '10' || $ref_data['verify_reference']['reliabilty_rating2'] == '20' || $ref_data['verify_reference']['reliabilty_rating2'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['reliabilty_rating2'] == '40' || $ref_data['verify_reference']['reliabilty_rating2'] == '50' || $ref_data['verify_reference']['reliabilty_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['reliabilty_rating2'] == '70' || $ref_data['verify_reference']['reliabilty_rating2'] == '80' || $ref_data['verify_reference']['reliabilty_rating2'] == '90' || $ref_data['verify_reference']['reliabilty_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['reliabilty_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Reflection</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The student's demonstrated ability to learn and adapt from previous experience.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['reliabilty_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['reliabilty_rating3'] == '10' || $ref_data['verify_reference']['reliabilty_rating3'] == '20' || $ref_data['verify_reference']['reliabilty_rating3'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['reliabilty_rating3'] == '40' || $ref_data['verify_reference']['reliabilty_rating3'] == '50' || $ref_data['verify_reference']['reliabilty_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['reliabilty_rating3'] == '70' || $ref_data['verify_reference']['reliabilty_rating3'] == '80' || $ref_data['verify_reference']['reliabilty_rating3'] == '90' || $ref_data['verify_reference']['reliabilty_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['reliabilty_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Resourcefulness</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The student's demonstrated ability to develop innovative solutions and display flexibility in unique or demanding circumstances.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['adaptibility_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['adaptibility_rating3'] == '10' || $ref_data['verify_reference']['adaptibility_rating3'] == '20' || $ref_data['verify_reference']['adaptibility_rating3'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['adaptibility_rating3'] == '40' || $ref_data['verify_reference']['adaptibility_rating3'] == '50' || $ref_data['verify_reference']['adaptibility_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['adaptibility_rating3'] == '70' || $ref_data['verify_reference']['adaptibility_rating3'] == '80' || $ref_data['verify_reference']['adaptibility_rating3'] == '90' || $ref_data['verify_reference']['adaptibility_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['adaptibility_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Ethical Behaviour</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The extent to which the student's behaviour demonstrates integrity and ethics in work and relationships.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['problem_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['problem_rating2'] == '10' || $ref_data['verify_reference']['problem_rating2'] == '20' || $ref_data['verify_reference']['problem_rating2'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['problem_rating2'] == '40' || $ref_data['verify_reference']['problem_rating2'] == '50' || $ref_data['verify_reference']['problem_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['problem_rating2'] == '70' || $ref_data['verify_reference']['problem_rating2'] == '80' || $ref_data['verify_reference']['problem_rating2'] == '90' || $ref_data['verify_reference']['problem_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['problem_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Appreciation of Diversity</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The degree to which the student shows understanding and sensitivity to needs and differences of others (i.e. ethnicity, religion, language, etc).</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['problem_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['problem_rating3'] == '10' || $ref_data['verify_reference']['problem_rating3'] == '20' || $ref_data['verify_reference']['problem_rating3'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['problem_rating3'] == '40' || $ref_data['verify_reference']['problem_rating3'] == '50' || $ref_data['verify_reference']['problem_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['problem_rating3'] == '70' || $ref_data['verify_reference']['problem_rating3'] == '80' || $ref_data['verify_reference']['problem_rating3'] == '90' || $ref_data['verify_reference']['problem_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['problem_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Entrepreneurial Orientation</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The student's demonstrated ability to take informed risks that demonstrate creativity and add value to that company.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['adaptibility_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['adaptibility_rating1'] == '10' || $ref_data['verify_reference']['adaptibility_rating1'] == '20' || $ref_data['verify_reference']['adaptibility_rating1'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['adaptibility_rating1'] == '40' || $ref_data['verify_reference']['adaptibility_rating1'] == '50' || $ref_data['verify_reference']['adaptibility_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['adaptibility_rating1'] == '70' || $ref_data['verify_reference']['adaptibility_rating1'] == '80' || $ref_data['verify_reference']['adaptibility_rating1'] == '90' || $ref_data['verify_reference']['adaptibility_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['adaptibility_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Written Communication</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The extent to which the student demonstrates effective written communication.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['adaptibility_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['adaptibility_rating2'] == '10' || $ref_data['verify_reference']['adaptibility_rating2'] == '20' || $ref_data['verify_reference']['adaptibility_rating2'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['adaptibility_rating2'] == '40' || $ref_data['verify_reference']['adaptibility_rating2'] == '50' || $ref_data['verify_reference']['adaptibility_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['adaptibility_rating2'] == '70' || $ref_data['verify_reference']['adaptibility_rating2'] == '80' || $ref_data['verify_reference']['adaptibility_rating2'] == '90' || $ref_data['verify_reference']['adaptibility_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['adaptibility_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Oral Communication</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The extent to which the student demonstrates effective oral communication.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['communication_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['communication_rating1'] == '10' || $ref_data['verify_reference']['communication_rating1'] == '20' || $ref_data['verify_reference']['communication_rating1'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['communication_rating1'] == '40' || $ref_data['verify_reference']['communication_rating1'] == '50' || $ref_data['verify_reference']['communication_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['communication_rating1'] == '70' || $ref_data['verify_reference']['communication_rating1'] == '80' || $ref_data['verify_reference']['communication_rating1'] == '90' || $ref_data['verify_reference']['communication_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['communication_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Interpersonal Communication</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>The extent to which the student effectively listens, conveys, and receives ideas, information, and direction.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['communication_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['communication_rating2'] == '10' || $ref_data['verify_reference']['communication_rating2'] == '20' || $ref_data['verify_reference']['communication_rating2'] == '30') { echo '#ec3935';} elseif ($ref_data['verify_reference']['communication_rating2'] == '40' || $ref_data['verify_reference']['communication_rating2'] == '50' || $ref_data['verify_reference']['communication_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['communication_rating2'] == '70' || $ref_data['verify_reference']['communication_rating2'] == '80' || $ref_data['verify_reference']['communication_rating2'] == '90' || $ref_data['verify_reference']['communication_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['communication_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Overall Performance Rating</h1>
                                                <p>
                <?php echo $ref_data['verify_reference']['performance_rating'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Performance Comment</h1>
                                                <p>
                <?php echo $ref_data['verify_reference']['performance_comment'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Supervisor's Comments</h1>
                                                <p>
                <?php echo $ref_data['verify_reference']['student_comments'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Student's Comments</h1>
                                                <p>
                <?php echo $ref_data['verify_reference']['student_comments'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Student's Comments</h1>
                                                <p>
                <?php echo $ref_data['verify_reference']['student_comments'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Supervisor's Recommendations</h1>
                                                <p>
                <?php echo $ref_data['verify_reference']['supervisor_recommendation'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Did you review the completed evaluation form with the student?</h1>
                                                <p>
                <?php echo $ref_data['verify_reference']['st_evaluation'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Do you wish to have the student return for the next work term?</h1>
                                                <p>
                <?php echo $ref_data['verify_reference']['next_work_term'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>If yes, have you offered to re-employ the student for the next work term?</h1>
                                                <p>
                <?php echo $ref_data['verify_reference']['re_employ'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>If yes, was your offer</h1>
                                                <p>
                <?php echo $ref_data['verify_reference']['st_offer'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Work term Dates</h1>
                                                <p>From Date:
                <?php echo $ref_data['verify_reference']['work_date_from'] ?>
                                                </p>
                                                <p>To Date:
                <?php echo $ref_data['verify_reference']['work_date_to'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Supervisor</h1>
                                                <p>Name:
                <?php echo $ref_data['verify_reference']['super_name'] ?>
                                                </p>
                                                <p>Signature:
                <?php echo $ref_data['verify_reference']['super_title'] ?>
                                                </p>
                                                <p>Title:
                <?php echo $ref_data['verify_reference']['super_sign'] ?>
                                                </p>
                                                <p>Date:
                <?php echo $ref_data['verify_reference']['super_date'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Student</h1>
                                                <p>Sign:
                                            <?php echo $ref_data['verify_reference']['st_sign'] ?>
                                                </p>
                                                <p>Date:
                                            <?php echo $ref_data['verify_reference']['st_date'] ?>
                                                </p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Management/Human Resources</h1>
                                                <p>Sign:
                                            <?php echo $ref_data['verify_reference']['hr_sign'] ?>
                                                </p>
                                                <p>Title:
                                                <?php echo $ref_data['verify_reference']['hr_title'] ?>
                                                </p>
                                                <p>Date:
                                            <?php echo $ref_data['verify_reference']['hr_date'] ?>
                                                </p>
                                            </div>
                                            <?php } ?>

                                            <?php if($ref_data['verify_reference']['reference_name'] != 'coop_verification') { ?>
                                            <div class='div_margin'>
                                                <h1>Company Name</h1>
                                                <p><?php echo $ref_data['verify_reference']['business_name'] ?></p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Company Address:</h1>
                                                <p><?php echo $ref_data['verify_reference']['business_address'] ?></p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Company Telephone:</h1>
                                                <p><?php echo $ref_data['verify_reference']['bussiness_phone'] ?></p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Name Of Contact:</h1>
                                                <p><?php echo $ref_data['verify_reference']['person_name'] ?></p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Telephone:</h1>
                                                <p><?php echo $ref_data['verify_reference']['contact_number'] ?></p>
                                            </div>
                                            <div class="div_margin">
                                                <h1>EXT</h1>
                                                <p><?php echo $ref_data['verify_reference']['ext'] ?></p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Name</h1>
                                                <p><?php echo $ref_data['register']['first_name'] ?> <?php echo $ref_data['register']['last_name'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Date of Birth</h1>
                                                <p><?php echo $ref_data['register']['dob'] ?></p>
                                            </div>
                                            <?php } ?>
                                        <?php if($ref_data['verify_reference']['reference_name'] == 'workplace_verification') { ?>
                                            <div class='div_margin'>
                                                <h1>Employee Number</h1>
                                                <p><?php echo $ref_data['verify_reference']['employee_id'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>In what capacity were you associated with the applicant</h1>
                                                <p><?php echo $ref_data['verify_reference']['associated_with_employee'] ?><br>
                                               <?php echo $ref_data['verify_reference']['associated_with_employee_comment'] ?> <br>
                                                <?php echo $ref_data['verify_reference']['employee_comment_other'] ?> 
                                                </p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Since what date</h1>
                                                <p><?php echo date('d-F-Y',strtotime($ref_data['verify_reference']['join_date'])); ?> &nbsp;&nbsp; to&nbsp;&nbsp; <?php echo date('d-F-Y',strtotime($ref_data['verify_reference']['release_date'])); ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>In what capacity was the applicant employed?</h1>
                                                <p><?php echo $ref_data['verify_reference']['job_type'] ?>
                                                    <br/>
                                            <?php echo $ref_data['verify_reference']['employed_comment'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Salary</h1>
                                                <p><?php echo $ref_data['verify_reference']['employee_salary'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Was the applicant successful in fulfilling his or her duties?</h1>
                                                <p><?php echo $ref_data['verify_reference']['duties_successful'] ?><br>
                                                <?php echo $ref_data['verify_reference']['duties_successful_comment'] ?>
                                                </p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>What was it like to supervise the applicant?</h1>
                                                <p><?php echo $ref_data['verify_reference']['supervise_applicant'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Was the applicant a valuable member of the team?</h1>
                                                <p><?php echo $ref_data['verify_reference']['valuable_member'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>What unique skill did the candidate bring to your organization?</h1>
                                                <p><?php echo $ref_data['verify_reference']['unique_skill'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>What were their strengths?</h1>
                                                <p><?php echo $ref_data['verify_reference']['strength'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>What were their weaknesses or areas that needed improvement?</h1>
                                                <p>Weaknesses : <?php echo $ref_data['verify_reference']['weakness'] ?><br><br>Improvements : <?php echo $ref_data['verify_reference']['improvement'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>How would they describe this applicant's absenteeism record in relation to other employees?</h1>
                                                <p><?php echo $ref_data['verify_reference']['absent_record'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Did you ever find it necessary to reprimand or discipline this person</h1>
                                                <p><?php echo $ref_data['verify_reference']['descipline'] ?><br>
                                                <?php echo $ref_data['verify_reference']['circumstances'] ?>
                                                </p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Considering the job being applied for, do you think the applicant is suitable?</h1>
                                                <p><?php echo $ref_data['verify_reference']['applicant_suitable'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Why did they leave your employment?</h1>
                                                <p><?php echo $ref_data['verify_reference']['leave_employment'] ?>
                                                    <br><?php echo $ref_data['verify_reference']['leave_employment_comment'] ?>
                                                </p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Would you rehire the candidate?</h1>
                                                <p><?php echo $ref_data['verify_reference']['rehire'] ?>
                                                    <br><?php echo $ref_data['verify_reference']['rehire_reason'] ?>
                                                </p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Anything Else?</h1>
                                                <p><?php echo $ref_data['verify_reference']['anything_else'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>If you have any questions , please feel free to contact me</h1>
                                                <p>
                                                    Name : <?php echo $ref_data['register']['first_name'] ?> <?php echo $ref_data['register']['last_name'] ?><br/><br/>
                                                    Contact No. : <?php echo $ref_data['register']['phone'] ?>
                                                </p>
                                            </div>
                                        <?php } ?>   

                                        <?php if($ref_data['verify_reference']['reference_name'] == 'volunteer_verification') { ?>
                                            <div class='div_margin'>
                                                <h1>How long have you known this individual</h1>
                                                <p><?php echo $ref_data['verify_reference']['how_long_known'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>How long have you known this individual</h1>
                                                <p><?php echo $ref_data['verify_reference']['how_long_known'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>In what capacity</h1>
                                                <p><?php echo $ref_data['verify_reference']['what_capacity'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>How would you describe the applicant’s ability to work with and relate to their volunteer work</h1>
                                                <p><?php echo $ref_data['verify_reference']['applicant_ability'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>To the extent you know, please tell me about the applicant's roles with their role</h1>
                                                <p><?php echo $ref_data['verify_reference']['applicant_role'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Have you observed the applicant working</h1>
                                                <p><?php echo $ref_data['verify_reference']['observe_working'] ?><br>
                                            <?php echo $ref_data['verify_reference']['example_applicant_role'] ?><br>
                                            <?php echo $ref_data['verify_reference']['example_applicant_role_comment'] ?>
                                                </p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Would you have any reservations about recommending this person to serve as a program volunteer</h1>
                                                <p><?php echo $ref_data['verify_reference']['reservation'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>If you have any questions , please feel free to contact me</h1>
                                                <p>Name : <?php echo $ref_data['register']['first_name'] ?> <?php echo $ref_data['register']['last_name'] ?><br/><br/>
                                                    Contact No. : <?php echo $ref_data['register']['phone'] ?></p>
                                            </div>
                                        <?php } ?>

                                        <?php if($ref_data['verify_reference']['reference_name'] == 'personnel_verification') { ?>
                                            <div class='div_margin'>
                                                <h1>When was the last time you had contact with the applicant</h1>
                                                <p><?php echo $ref_data['verify_reference']['last_time_contact'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>How does the applicant get along with people</h1>
                                                <p><?php echo $ref_data['verify_reference']['applicant_get_along'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>How would you describe the applicant’s friends and associates</h1>
                                                <p><?php echo $ref_data['verify_reference']['applicant_friend'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>How does the applicant react in stressful situations</h1>
                                                <p><?php echo $ref_data['verify_reference']['stressful_situation'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Is there any reason why you wouldn’t trust the applicant with confidential information</h1>
                                                <p><?php echo $ref_data['verify_reference']['not_trust'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Do you have any reason to question the applicant’s reliability</h1>
                                                <p><?php echo $ref_data['verify_reference']['applicant_reliability'] ?><br/>
                                                <?php echo $ref_data['verify_reference']['applicant_reliability_comment'] ?>
                                                </p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Do you have any reason to question the applicant’s honesty or character</h1>
                                                <p><?php echo $ref_data['verify_reference']['applicant_character'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Do you know of anything about the applicant that should be investigated </h1>
                                                <p><?php echo $ref_data['verify_reference']['investigated'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Do you recommend the applicant for a position</h1>
                                                <p><?php echo $ref_data['verify_reference']['applicant_position'] ?><br/>
                                                <?php echo $ref_data['verify_reference']['applicant_position_comment'] ?>
                                                </p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Is there anything else you would like to add</h1>
                                                <p><?php echo $ref_data['verify_reference']['anything_else'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>If you have any questions , please feel free to contact me</h1>
                                                <p>Name : <?php echo $ref_data['register']['first_name'] ?> <?php echo $ref_data['register']['last_name'] ?><br/><br/>
                                                    Contact No. : <?php echo $ref_data['register']['phone'] ?></p>
                                            </div>
                                        <?php } ?>

                                        <?php if($ref_data['verify_reference']['reference_type'] == 'Advance') { ?>
                                            <div class='div_margin'>
                                                <h3>Key Actions</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>Considers all pertinent facts and alternatives before deciding on the most appropriate action.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['key_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['key_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['key_rating1'] == '40' || $ref_data['verify_reference']['key_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['key_rating1'] == '80' || $ref_data['verify_reference']['key_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['key_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Teamwork</h3>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Interacts with people effectively. Able and willing to share and receive information.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['teamwork_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['teamwork_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['teamwork_rating1'] == '40' || $ref_data['verify_reference']['teamwork_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['teamwork_rating1'] == '80' || $ref_data['verify_reference']['teamwork_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['teamwork_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Co-operates within the group and across groups.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['teamwork_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['teamwork_rating2'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['teamwork_rating2'] == '40' || $ref_data['verify_reference']['teamwork_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['teamwork_rating2'] == '80' || $ref_data['verify_reference']['teamwork_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['teamwork_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Considers all pertinent facts and alternatives before deciding on the most appropriate action.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['teamwork_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['key_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['teamwork_rating3'] == '40' || $ref_data['verify_reference']['teamwork_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['teamwork_rating3'] == '80' || $ref_data['verify_reference']['teamwork_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['teamwork_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  

                                            <div class='div_margin'>
                                                <h3>Work Standards</h3>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Sets and maintains high performance standards.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['work_standard1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['work_standard1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['work_standard1'] == '40' || $ref_data['verify_reference']['work_standard1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['work_standard1'] == '80' || $ref_data['verify_reference']['work_standard1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['work_standard1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Pays close attention to detail, accuracy and completeness.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['work_standard2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['work_standard2'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['work_standard2'] == '40' || $ref_data['verify_reference']['work_standard2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['work_standard2'] == '80' || $ref_data['verify_reference']['work_standard2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['work_standard2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Shows concern for all aspects of the job and follows up on work outputs.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['work_standard3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['work_standard3'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['work_standard3'] == '40' || $ref_data['verify_reference']['work_standard3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['work_standard3'] == '80' || $ref_data['verify_reference']['work_standard3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['work_standard3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Motivation</h3>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Displays energy and enthusiasm in approaching the job.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['motivatin_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['motivatin_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['motivatin_rating1'] == '40' || $ref_data['verify_reference']['motivatin_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['motivatin_rating1'] == '80' || $ref_data['verify_reference']['motivatin_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                            <?php echo $ref_data['verify_reference']['motivatin_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Commits to putting in additional effort.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['motivatin_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['motivatin_rating2'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['motivatin_rating2'] == '40' || $ref_data['verify_reference']['motivatin_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['motivatin_rating2'] == '80' || $ref_data['verify_reference']['motivatin_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                            <?php echo $ref_data['verify_reference']['motivatin_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Maintains high level of productivity and self-direction.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['motivatin_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['motivatin_rating3'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['motivatin_rating3'] == '40' || $ref_data['verify_reference']['motivatin_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['motivatin_rating3'] == '80' || $ref_data['verify_reference']['motivatin_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['motivatin_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Reliability</h3>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Takes personal responsibility for job performance.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['reliabilty_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['reliabilty_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['reliabilty_rating1'] == '40' || $ref_data['verify_reference']['reliabilty_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['reliabilty_rating1'] == '80' || $ref_data['verify_reference']['reliabilty_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['reliabilty_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Completes work in a timely and consistent manner.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['reliabilty_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['reliabilty_rating2'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['reliabilty_rating2'] == '40' || $ref_data['verify_reference']['reliabilty_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['reliabilty_rating2'] == '80' || $ref_data['verify_reference']['reliabilty_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['reliabilty_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Sticks to commitments.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['reliabilty_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['reliabilty_rating3'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['reliabilty_rating3'] == '40' || $ref_data['verify_reference']['reliabilty_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['reliabilty_rating3'] == '80' || $ref_data['verify_reference']['reliabilty_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['reliabilty_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Problem Solving</h3>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Analyzes problem by gathering and organizing all relevant information.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['problem_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['problem_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['problem_rating1'] == '40' || $ref_data['verify_reference']['problem_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['problem_rating1'] == '80' || $ref_data['verify_reference']['problem_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['problem_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Identifies cause and effect relationships.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['problem_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['problem_rating2'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['problem_rating2'] == '40' || $ref_data['verify_reference']['problem_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['problem_rating2'] == '80' || $ref_data['verify_reference']['problem_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['problem_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Comes up with appropriate solutions.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['problem_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['problem_rating3'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['problem_rating3'] == '40' || $ref_data['verify_reference']['problem_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['problem_rating3'] == '80' || $ref_data['verify_reference']['problem_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['problem_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Adaptability</h3>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Adapts to changing work environments, work priorities and organizational needs.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['adaptibility_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['adaptibility_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['adaptibility_rating1'] == '40' || $ref_data['verify_reference']['adaptibility_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['adaptibility_rating1'] == '80' || $ref_data['verify_reference']['adaptibility_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['adaptibility_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Able to effectively deal with change and diverse people.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['adaptibility_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['adaptibility_rating2'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['adaptibility_rating2'] == '40' || $ref_data['verify_reference']['adaptibility_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['adaptibility_rating2'] == '80' || $ref_data['verify_reference']['adaptibility_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['adaptibility_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Able to effectively deal with change and diverse people.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['adaptibility_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['adaptibility_rating3'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['adaptibility_rating3'] == '40' || $ref_data['verify_reference']['adaptibility_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['adaptibility_rating3'] == '80' || $ref_data['verify_reference']['adaptibility_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['adaptibility_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Planning and Organizing</h3>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Plans and organizes tasks and work responsibilities to achieve objectives.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['plan_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['plan_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['plan_rating1'] == '40' || $ref_data['verify_reference']['plan_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['plan_rating1'] == '80' || $ref_data['verify_reference']['plan_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['plan_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Sets priorities. Schedules activities.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['plan_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['plan_rating2'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['plan_rating2'] == '40' || $ref_data['verify_reference']['plan_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['plan_rating2'] == '80' || $ref_data['verify_reference']['plan_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['plan_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Allocates and uses resources properly.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['plan_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['plan_rating3'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['plan_rating3'] == '40' || $ref_data['verify_reference']['plan_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['plan_rating3'] == '80' || $ref_data['verify_reference']['plan_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['plan_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Communication</h3>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Expresses ideas effectively.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['communication_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['communication_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['communication_rating1'] == '40' || $ref_data['verify_reference']['communication_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['communication_rating1'] == '80' || $ref_data['verify_reference']['communication_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['communication_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Organizes and delivers information appropriately.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['communication_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['communication_rating2'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['communication_rating2'] == '40' || $ref_data['verify_reference']['communication_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['communication_rating2'] == '80' || $ref_data['verify_reference']['communication_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['communication_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Listens actively.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['communication_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['communication_rating3'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['communication_rating3'] == '40' || $ref_data['verify_reference']['communication_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['communication_rating3'] == '80' || $ref_data['verify_reference']['communication_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['communication_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Integrity</h3>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Shares complete and accurate information.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['integrity_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['integrity_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['integrity_rating1'] == '40' || $ref_data['verify_reference']['integrity_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['integrity_rating1'] == '80' || $ref_data['verify_reference']['integrity_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['integrity_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Maintains confidentiality and  meets own commitments.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['integrity_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['integrity_rating2'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['integrity_rating2'] == '40' || $ref_data['verify_reference']['integrity_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['integrity_rating2'] == '80' || $ref_data['verify_reference']['integrity_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['integrity_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Adheres to organizational policies and procedures.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['integrity_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['integrity_rating3'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['integrity_rating3'] == '40' || $ref_data['verify_reference']['integrity_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['integrity_rating3'] == '80' || $ref_data['verify_reference']['integrity_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['integrity_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Initiative</h3>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Takes action to influence events.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['initiative_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['initiative_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['initiative_rating1'] == '40' || $ref_data['verify_reference']['initiative_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['initiative_rating1'] == '80' || $ref_data['verify_reference']['initiative_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['initiative_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Generates ideas for improvement, takes advantage of opportunities, suggests innovations.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['initiative_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['initiative_rating2'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['initiative_rating2'] == '40' || $ref_data['verify_reference']['initiative_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['initiative_rating2'] == '80' || $ref_data['verify_reference']['initiative_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['initiative_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Does more than required.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['initiative_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['initiative_rating3'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['initiative_rating3'] == '40' || $ref_data['verify_reference']['initiative_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['initiative_rating3'] == '80' || $ref_data['verify_reference']['initiative_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['initiative_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Stress Tolerance</h3>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Displays emotional resilience and the ability to withstand pressure on an on-going basis.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['stress_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['stress_rating1'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['stress_rating1'] == '40' || $ref_data['verify_reference']['stress_rating1'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['stress_rating1'] == '80' || $ref_data['verify_reference']['stress_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['stress_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Deals with difficult situations while maintaining performance.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['stress_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['stress_rating2'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['stress_rating2'] == '40' || $ref_data['verify_reference']['stress_rating2'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['stress_rating2'] == '80' || $ref_data['verify_reference']['stress_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['stress_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Seeks support from others when necessary and uses appropriate coping techniques.</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['stress_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($ref_data['verify_reference']['stress_rating3'] == '20') { echo '#ec3939';} elseif ($ref_data['verify_reference']['stress_rating3'] == '40' || $ref_data['verify_reference']['stress_rating3'] == '60') {echo '#acac34';} elseif ($ref_data['verify_reference']['stress_rating3'] == '80' || $ref_data['verify_reference']['stress_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $ref_data['verify_reference']['stress_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Typing Speed</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-active" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['rating1'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($ref_data['verify_reference']['rating1']) { 
                                                            echo $ref_data['verify_reference']['rating1'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Microsoft Word</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-active" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['rating2'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($ref_data['verify_reference']['rating2']) { 
                                                            echo $ref_data['verify_reference']['rating2'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Microsoft Powerpoint</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-active" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['rating3'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($ref_data['verify_reference']['rating3']) { 
                                                            echo $ref_data['verify_reference']['rating3'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Web Browsing</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-active" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['rating4'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($ref_data['verify_reference']['rating4']) { 
                                                            echo $ref_data['verify_reference']['rating4'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Excel Spreadsheet</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-active" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['rating5'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($ref_data['verify_reference']['rating5']) { 
                                                            echo $ref_data['verify_reference']['rating5'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Email</h1>

                                                <div class="strip_class_add">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-active" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['rating6'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($ref_data['verify_reference']['rating6']) { 
                                                            echo $ref_data['verify_reference']['rating6'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='div_margin'>
                                                <h1>Fax</h1>

                                                <div class="strip_class_add" style="margin-bottom: 2em;">
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-active" role="progressbar" aria-valuenow="<?php echo $ref_data['verify_reference']['rating7'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($ref_data['verify_reference']['rating7']) { 
                                                            echo $ref_data['verify_reference']['rating7'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="border-bottom: 5px solid #000;"></div>
                                        <?php } ?>

                                        </div>    

                                <?php } ?>
                                    </div>
                            <?php } ?>

                            <?php if(count($accomp_data) > 0) { ?>
                                    <div id="accomp" class="tab-pane fade">
                                        <div class="form-group">
                                            <div class="form_color_use">
                                                <div class="table">
                                                    <table class="table_use_div word_div table-responsive border_table">

                                            <?php $i =1;  if(count($accomp_data) > 0) {
                                                foreach ($accomp_data as $acomplish) { 
                                            ?>
                                                        <thead class="bg_thead">
                                                            <tr>
                                                                <td><h5 class="strn_hding"><?php echo $i++ ?>. Recent Job</h5></td>
                                                                <td>
                                                <?php if($acomplish['acomplishment']['view_data'] == 'View/Print') { ?>
                                                                    <button class="print_btn" onclick='print_data("<?php echo $acomplish['acomplishment']['id'] ?>", "acomplishment")'>Print</button>
                                                <?php } ?>
                                                                </td>
                                                            </tr>
                                                        </thead>	
                                                        <tr>
                                                            <th style="font-size:22px">Company Name</th>
                                                            <td style="font-size:22px"><?php echo $acomplish['acomplishment']['company_name'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th style="font-size:22px">Date</th>
                                                            <td style="font-size:22px"><?php echo $acomplish['acomplishment']['sub_date'] ?></td>
                                                        </tr>

                                                        <tbody class="bder_bot">
                                                            <tr>
                                                                <th colspan="2">1. In this job, what special things did you do to set yourself apart? How did you do the job better than anyone else did or than anyone else could have done?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['special_thing'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">2. What did you do to make this job your own? How did you take the initiative? How did you go above and beyond what was asked of you in your job description?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['take_initiative'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">3. What special things did you do to impress your boss so that you might be promoted?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['impress'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">4. And were you promoted? Rapid and/or frequent promotions can be especially noteworthy.</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['promoted'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">5. How has the organization benefited from your performance? How did you/will you leave this employer better off than before you worked there?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['organization_bebefit'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">6. List any awards you won, such as Employee of the Month, President’s Club?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['award_list'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">7. What are you most proud of in this job?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['most_proud'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">8. Check your annual performance reviews for this job. Provide below any glowing or even complimentary quotes from your reviews. Did you consistently receive high ratings?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['anual_performance'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">9. Have you received any complimentary memos or letters from employers or customers? Provide below quotes from these letters that support your accomplishments.</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['complimentary_memo'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">10. What tangible evidence do you have of accomplishments — publications you’ve produced, products you’ve developed, software applications you’ve written?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['evidence'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">11. How did you contribute to this employer’s profitability, such as through sales increase percentages? How have you helped your employer to make money? How did you contribute to the firm’s Return on Investment (ROI)?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['profitabilty'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">12. How did you contribute to operational efficiency in this job, such as through cost reduction percentages? How did you help this employer or a part of the organization to save money, save time, or make work easier?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['operational_efficiency'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">13. How did you contribute to productivity, such as through successfully motivating your team?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['productivity'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">14. How did you make your company more competitive?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['competitive'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">15. How did you build relationships or image with internal and/or external constituencies? How did you attract new customers or retain existing ones?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['relationship'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">16. How did you expand the business?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['expand'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">17. How did you help the organization fulfill its mission statement?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['organization_fulfill'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">18. If you had to ghost-write a letter of recommendation about you from your boss, what would be in it?</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['letter_write'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">19. How did you solve one or more specific problems in this job? </th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['solve_problem'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">20. What were the problems or challenges that you or the organization faced? </th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['challenge'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">21. What did you do to overcome the problems? </th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['overcome_problem'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">22. What were the results of your efforts? </th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><?php echo $acomplish['acomplishment']['effort'] ?></td>
                                                            </tr>
                                            <?php   }  } else { ?>
                                                            <tr>
                                                                <th colspan="2"><center><b>No Record Found</b></center></th>
                                                        </tr>
                                            <?php } ?>

                                                        </tbody>
                                                </div>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if(count($key_skill_data) > 0) { ?>
                                <div id="key" class="tab-pane fade">
                                <?php $i = 1; 
                                    foreach ($key_skill_data as $key_skill) { 
                                ?>
                                    <div class="repeat_border_div border_table" style="margin: 1em; border: 2px solid #000; padding: 0px;">
                                        <div class="bg_thead_sec" style="background-color: #1d1d1d; color: #fff;">
                                            <h1 class="strn_hding">Key Skill
                                            <?php if($key_skill['key_skill']['view_data'] == 'View/Print') { ?>
                                                <button class="print_btn pull-right" style="margin-right: 3em; margin-top: -0.8em;" onclick='print_data("<?php echo $key_skill['key_skill']['id'] ?>", "key_skill")'>Print</button>
                                            <?php } ?>
                                            </h1>
                                        </div>
                                        <table class="table_use_div word_div table-responsive" style="border:none;">                                            
                                            
                                            <?php if($key_skill['key_skill']['soft_skill_list'] != '') { ?>
                                            <tr style="background:red;">
                                                <th style="font-size:22px; color: #fff;">Soft Skills</th>
                                                <td colspan="3" style="font-size:22px; color: #fff;"><?php echo $key_skill['key_skill']['soft_skill_list'] ?></td>
                                            </tr>

                                                <?php $soft_key_skill = unserialize($key_skill['key_skill']['soft_key_skill']);
                                                while ($fruit_name = current($soft_key_skill)) {
                                                ?>
                                            <tr>
                                                <th style="color: red;">Skill description</th>
                                                <td style="color: red;"><?= key($soft_key_skill) ?></td>                                                                                                                                                       
                                            </tr>
                                            <tr class="prblm_div">
                                                <th>Problem</th>
                                                <td><?= $soft_key_skill[key($soft_key_skill)]['problem'] ?></td>
                                            </tr>
                                            <tr class="prblm_div">
                                                <th>Action</th>
                                                <td><?= $soft_key_skill[key($soft_key_skill)]['action'] ?></td>
                                            </tr>
                                            <tr class="prblm_div">
                                                <th>Result</th>
                                                <td><?= $soft_key_skill[key($soft_key_skill)]['result'] ?></td> 
                                            </tr>

                                                <?php
                                                next($soft_key_skill);
                                            } }
                                                ?>  
                                             <?php if($key_skill['key_skill']['hard_skill'] != '') { ?>
                                            <tr style="background:#254094;">
                                                <th style="color: #fff;">Hard Skills</th>
                                                <td style="color: #fff" colspan="3"><?php echo $key_skill['key_skill']['hard_skill'] ?></td>
                                            </tr>
                                                <?php $hard_key_skill = unserialize($key_skill['key_skill']['hard_key_skill']);
                                                ?>                                              
                                            <tr>
                                                <th>Problem</th>
                                                <td><?= $hard_key_skill['problem'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Action</th>
                                                <td><?= $hard_key_skill['action'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Result</th>
                                                <td><?= $hard_key_skill['result'] ?></td> 
                                            </tr>
                                             <?php } ?>
                                        </table>
                                    </div>                                   
                                <?php } ?>
                                </div>
                            <?php } ?>                           

                            <?php if(count($mission_data) > 0) { ?>
                                <div id="mission" class="tab-pane fade">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                        <div class="form-group">
                                            <div class="form_color_use">
                                            <?php $i = 1; 
                                                foreach ($mission_data as $mission) { 
                                            ?>
                                                <table class="table_use_div word_div">
                                                    <tbody>

                                                        <tr class="bg_tr">
                                                            <th colspan="2"><h4> Mission Statement<?php echo $i++; ?></h4></td>
                                                        <?php if($mission['mission_statement']['view_data'] == 'View/Print') { ?>
                                                            <td><button class="print_btn" onclick='print_data("<?php echo $mission['mission_statement']['id'] ?>", "mission_statement")'>Print</button></td>
                                                        <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <th>Accomplishment Statement</th>
                                                            <td colspan="2"><?php echo $mission['mission_statement']['accomp_statement'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Occupational Goal Statement</th>
                                                            <td colspan="2"><?php echo $mission['mission_statement']['goal_statement'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Personal Mission Statement</th>
                                                            <td colspan="2"><?php echo $mission['mission_statement']['mission'] ?></td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if(count($swot_data) > 0) {  ?>
                                <div id="swot" class="tab-pane fade">
                                <?php $p=1;
                                    foreach ($swot_data as $swot) {
                                ?>
                                    <div class="repeat_border_div div_referebce border_table">
                                        <div class="bg_thead_frst">
                                            <h1 style="color:#fff;">SWOT <?php echo $p++; ?>
                                            <?php if($swot['swot']['view_data'] == 'View/Print') { ?>
                                                <button class="pull-right print_btn" style="margin-right: 2em;margin-top:-0.7em;" onclick='print_data("<?php echo $swot['swot']['id'] ?>", "swot")'>Print</button>
                                            <?php } ?>
                                            </h1>
                                        </div>
                                        <div class="div_margin">
                                            <h3>Strengths</h3>
                                        </div>
                                        <div>
                                            <h1>What are you good at naturally?</h1>
                                            <ol style="margin-left:2em;">
                                        <?php $good = explode('*',$swot['swot']['good']);
                                        for($a = 0; $a < count($good); $a++) {
                                            if(!empty($good[$a])) {
                                        ?>
                                                <li><p><?php echo $good[$a] ?></p></li>
                                        <?php } } ?>
                                            </ol>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>What skills have you worked to develop?</h1>
                                            <ol>
                                        <?php $skill = explode('*',$swot['swot']['skill']);
                                        for($b = 0; $b < count($skill); $b++) {
                                            if(!empty($skill[$b])) {
                                        ?>
                                                <li><p><?php echo $skill[$b] ?></p></li>
                                        <?php } } ?>
                                            </ol>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>What are your talents, or natural-born gifts?</h1>
                                            <ol>
                                        <?php $talent = explode('*',$swot['swot']['talent']);
                                        for($c = 0; $c < count($talent); $c++) {
                                            if(!empty($talent[$c])) {
                                        ?>
                                                <li><p><?php echo $talent[$c] ?></p></li>
                                        <?php } } ?>
                                            </ol>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>How strong is your network of connections?</h1>
                                            <ol>   
                                            <?php if(!empty($swot['swot']['network'])) { ?>
                                                <li><p><?php echo $swot['swot']['network'] ?></p></li>
                                            <?php } ?>
                                            </ol>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>What do other people see as your strengths?</h1>
                                            <ol>
                                        <?php $strength = explode('*',$swot['swot']['strength']);
                                        for($e = 0; $e < count($strength); $e++) {
                                            if(!empty($strength[$e])) {
                                        ?>
                                                <li><p><?php echo $strength[$e] ?></p></li>
                                        <?php } } ?>
                                            </ol>

                                        </div>
                                        <div class='div_margin'>
                                            <h1>What values and ethics set you apart from your peers?</h1>
                                            <ol>
                                        <?php $ethics = explode('*',$swot['swot']['ethics']);
                                        for($f = 0; $f < count($ethics); $f++) {
                                            if(!empty($ethics[$f])) {
                                        ?>
                                                <li><p><?php echo $ethics[$f] ?></p></li>
                                        <?php } } ?>
                                            </ol>

                                        </div>
                                        <div class="div_margin">
                                            <h3>Weeknesses</h3>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>What are your negative work habits and traits?</h1>
                                            <ol>
                                        <?php $negative_work = explode('*',$swot['swot']['negative_work']);
                                        for($g = 0; $g < count($negative_work); $g++) {
                                            if(!empty($negative_work[$g])) {
                                        ?>
                                                <li><p><?php echo $negative_work[$g] ?></p></li>
                                        <?php } } ?>
                                            </ol>

                                        </div>

                                        <div class='div_margin'>
                                            <h1>Does any part of your education or training need improving?</h1>
                                            <ol>
                                        <?php $training = explode('*',$swot['swot']['training']);
                                        for($h = 0; $h < count($training); $h++) {
                                            if(!empty($training[$h])) {
                                        ?>
                                                <li><p><?php echo $training[$h] ?></p></li>
                                        <?php } } ?>
                                            </ol>

                                        </div>
                                        <div class='div_margin'>
                                            <h1>What would other people see as your weaknesses?</h1>
                                            <ol>
                                        <?php $weakness = explode('*',$swot['swot']['weakness']);
                                        for($i = 0; $i < count($weakness); $i++) {
                                            if(!empty($weakness[$i])) {
                                        ?>
                                                <li><p><?php echo $weakness[$i] ?></p></li>
                                        <?php } } ?>
                                            </ol>

                                        </div>
                                        <div class='div_margin'>
                                            <h1>Where can you improve?</h1>
                                            <ol>
                                        <?php $improve = explode('*',$swot['swot']['improve']);
                                        for($j = 0; $j < count($improve); $j++) {
                                            if(!empty($improve[$j])) {
                                        ?>
                                                <li><p><?php echo $improve[$j] ?></p></li>
                                        <?php } } ?>
                                            </ol>

                                        </div>
                                        <div class='div_margin'>
                                            <h1>What are you afraid to do or most likely to avoid?</h1>
                                            <ol>
                                        <?php $avoid = explode('*',$swot['swot']['avoid']);
                                        for($k = 0; $k < count($avoid); $k++) {
                                            if(!empty($avoid[$k])) {
                                        ?>
                                                <li><p><?php echo $avoid[$k] ?></p></li>
                                        <?php } } ?>
                                            </ol>

                                        </div>
                                        <div class='div_margin'>
                                            <div class="div_margin">
                                                <h3>Opportunities</h3>
                                            </div>
                                            <h1>What is the state of the economy?</h1>
                                            <p class="oppert_class_div"><?php echo $swot['swot']['economy_state']; ?></p>
                                            <h1>Is your industry growing?</h1>
                                            <p class="oppert_class_div"><?php echo $swot['swot']['industry_grow']; ?></p>
                                            <h1>Is there new technology in your industry?</h1>
                                            <p class="oppert_class_div"><?php echo $swot['swot']['industry_tech']; ?></p>
                                            <h1>What are the biggest changes occurring in the current business environment?</h1>
                                            <p class="oppert_class_div"><?php echo $swot['swot']['business_environment']; ?></p>
                                            <h1>Have customers or co-workers given you feedback about new services you could provide, or ways to improve your manner?</h1>
                                            <p class="oppert_class_div"><?php echo $swot['swot']['cutomer_service']; ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <div class="div_margin">
                                                <h3>Threats</h3>
                                            </div>
                                            <h1>Is your industry contracting or changing directions?</h1>
                                            <p class="oppert_class_div"><?php echo $swot['swot']['industry_contract']; ?></p>
                                            <h1>Is there strong competition for the types of jobs for which you are best suited?</h1>
                                            <p class="oppert_class_div"><?php echo $swot['swot']['strong_comp']; ?></p>
                                            <h1>Do your weaknesses inhibit your ability to rise in your company or change jobs?</h1>
                                            <p class="oppert_class_div"><?php echo $swot['swot']['week_inhibit']; ?></p>
                                            <h1>What is the biggest external danger to your goals?</h1>
                                            <p class="oppert_class_div"><?php echo $swot['swot']['extern_danger']; ?></p>
                                            <h1>Are there any new professional standards you cannot meet?</h1>
                                            <p class="oppert_class_div"><?php echo $swot['swot']['prof_standard']; ?></p>
                                            <h1>Are there any new technology, education or certification requirements that will impede your progress?</h1>
                                            <p class="oppert_class_div"><?php echo $swot['swot']['new_tech']; ?></p>
                                        </div>
                                        <div style="border-bottom: 5px solid #000;"></div>
                                    </div>    
                                <?php } ?>
                                </div>
                            <?php } ?>

                            <?php if(count($edu_data) > 0) { ?>
                                <div id="education" class="tab-pane">
                                <?php $i = 1;
                                    foreach ($edu_data as $education_data) {
                                ?>
                                    <div class="table border_table">
                                        <table class="table_use_div word_div education_data table-responsive">
                                            <thead class="bg_thead">
                                                <tr>
                                                    <th>Education </th>
                                                    <td colspan="2">
                                        <?php if($education_data['education']['view_data'] == 'View/Print') { ?>
                                                        <button class="print_btn" onclick='print_data("<?php echo $education_data['education']['id'] ?>", "education")' style="float:right;margin-right:2em;">Print</button>
                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <th colspan="2">Highest Grade level completed</th>
                                            </tr>
                                            <tr>
                                                <th>Grade </th>
                                                <td><?php echo $education_data['education']['grade'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Year Completed </th>
                                                <td><?php echo $education_data['education']['complete_year'] ?></td>
                                            </tr>    
                                            <tr>
                                                <th colspan="2">Secondary School</th>
                                            </tr>
                                            <tr>
                                                <th>Name </th> 
                                                <td><?php echo $education_data['education']['secondary_school'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Grades Attended </th> 
                                                <td><?php echo $education_data['education']['grade_attend'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Did You Graduate </th> 
                                                <td><?php echo $education_data['education']['is_graduate'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Graduation Date </th>
                                                <td><?php echo $education_data['education']['graduation_date'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Final Marks </th> 
                                                <td><?php echo $education_data['education']['final_mark'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Credits :</th> 
                                                <td><?php echo $education_data['education']['credit'] ?></td>
                                            </tr>
                                            <tr><th colspan="2">Other School</th></tr>

                                            <tr><th colspan="2">School Name</th></tr>
                                            <tr>
                                                <td colspan="2">
                                                    <ol>
                                            <?php $other_school = explode('*',$education_data['education']['other_school']);
                                            for($b = 0; $b < count($other_school); $b++) {
                                                if(!empty($other_school[$b])) {
                                            ?>
                                                        <li><p><?php echo $other_school[$b] ?></p></li>
                                            <?php } } ?>
                                                    </ol>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Institutions Name </th> 
                                                <td><?php echo $education_data['education']['institute_name'] ?></td>
                                            </tr>    
                                            <tr>
                                                <th>Start Date </th>
                                                <td><?php echo $education_data['education']['start_date'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>End date </th> 
                                                <td><?php echo $education_data['education']['end_date'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Degree </th>
                                                <td><?php echo $education_data['education']['degree'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Certificate </th>
                                                <td><?php echo $education_data['education']['certificate'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Diploma </th>
                                                <td><?php echo $education_data['education']['diploma'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Credit </th>
                                                <td><?php echo $education_data['education']['institute_credit'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>English Language </th>
                                                <td>
                                        <?php $language = explode('*',$education_data['education']['language_english']);
                                            for($a = 0; $a < count($language); $a++) {
                                                echo $language[$a] .' ';
                                            }
                                        ?>
                                                </td>    
                                            </tr>
                                            <tr>
                                                <th>School Transcript </th>
                                                <td><?php if($education_data['education']['school_transcript'] != '') { ?><button type="button" class="download_btn"><a style="color: #fff;" href='<?php echo $this->webroot ?>profiles/download?filename=<?php echo $education_data['education']['school_transcript']?>'>Download</a></button><?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th>Computer Skills</th>
                                                <td>
                                                    <ol>
                                            <?php $computer_skill = explode('*',$education_data['education']['computer_skill']);
                                            for($d = 0; $d < count($computer_skill); $d++) {
                                                if(!empty($computer_skill[$d])) {
                                            ?>
                                                        <li><p><?php echo $computer_skill[$d] ?></p></li>
                                            <?php } } ?>
                                                    </ol>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Awards or Scholarship </th>
                                            </tr>
                                            <tr>
                                                <th>Type </th>
                                                <td><?php echo $education_data['education']['award_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Date </th>
                                                <td><?php echo $education_data['education']['award_date'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Award Uploaded </th>
                                                <td><?php if($education_data['education']['award_upload'] != '') { ?><button type="button" class="download_btn"><a style="color: #fff;" href='<?php echo $this->webroot ?>profiles/download?filename=<?php echo $education_data['education']['award_upload']?>'>Download</a></button><?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Awards/ Degrees/Certificates </th>
                                            </tr>
                                            <tr>
                                                <th>Type </th>
                                                <td><?php echo $education_data['education']['degree_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Date </th>
                                                <td><?php echo $education_data['education']['degree_date'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Award/ Degree Uploaded </th>
                                                <td><?php if($education_data['education']['degree_upload'] != '') { ?><button type="button" class="download_btn"><a style="color: #fff;" href='<?php echo $this->webroot ?>profiles/download?filename=<?php echo $education_data['education']['degree_upload']?>'>Download</a></button><?php } ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Leadership/Teamwork/involvement in sports</th>
                                            </tr>
                                            <tr>
                                                <th>Type </th>
                                                <td><?php echo $education_data['education']['leader_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Date </th>
                                                <td><?php echo $education_data['education']['leader_date'] ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Clubs/Associations</th>
                                            </tr>
                                            <tr>
                                                <th>Type </th>
                                                <td><?php echo $education_data['education']['club_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Date </th>
                                                <td><?php echo $education_data['education']['club_date'] ?></td> 
                                            </tr>
                                            <tr>
                                                <th>Education Reference Letter : </th>
                                            </tr>
                                            <tr>
                                                <th>Reference Letter Name  </th>
                                                <td><?php echo $education_data['education']['letter_name'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Upload Reference Letter </th>
                                                <td><?php if($education_data['education']['letter_upload'] != '') { ?><button type="button" class="download_btn"><a style="color: #fff;" href='<?php echo $this->webroot ?>profiles/download?filename=<?php echo $education_data['education']['letter_upload']?>'>Download</a></button><?php } ?></td>
                                                <td><?php if($education_data['education']['letter_upload'] != '') { ?><button type="button" class="download_btn"><a style="color: #fff;" href='<?php echo $this->webroot ?>profiles/download?filename=<?php echo $education_data['education']['letter_upload']?>'>Download</a></button><?php } ?></td>
                                            </tr>
                                        </table>
                                    </div>									

                                <?php } ?>
                                </div>
                            <?php } ?>

                            <?php if(count($evidence_data) > 0) { ?>
                                <div id="evidence_skill" class="tab-pane">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                        <div class='first_div'>
                                            <h2 class='headeing_uwse'></h2>
                                            <div class="table">
                                                <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                    <tbody>
                                                        <tr class="chron_div">                  
                                                            <th><center>Name of Document</center></th>                                       
                                                    <th><center>Created On</center></th>
                                                    <th><center>Document Type</center></th>
                                                    <th colspan="2"><center>View Document</center></th>
                                                    </tr>
                                            <?php
                                               foreach ($evidence_data as $view_evidence) { 
                                            ?>
                                                    <tr class="chron_div_bottom">
                                                        <td><center><?php echo $view_evidence['evidence_skill']['document_name'] ?></center></td>
                                                    <td><center><?php echo $view_evidence['evidence_skill']['date'] ?></center></td>  
                                                    <td><center><?php echo $view_evidence['evidence_skill']['evidence_type'] ?></center></td>  
                                                    <td><center><a class="button_use" href="<?php echo $this->webroot ?>profiles/download?filename=<?php echo $view_evidence['evidence_skill']['upload_doc'] ?>">View</a></center></td>  
                                            <?php if($view_evidence['evidence_skill']['view_data'] == 'View/Print') { ?>
                                                    <td><center><button class="print_btn" onclick='print_data("<?php echo $view_evidence['evidence_skill']['id'] ?>", "evidence_skill")'>Print</button></center></td>  
                                            <?php } ?>
                                                    </tr>                                 
                                            <?php } ?> 
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if(count($comp_data) > 0) { ?>
                                <div id="comp_skill" class="tab-pane">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                        <div class='first_div'>
                                            <h2 class='headeing_uwse'></h2>
                                            <div class="table">
                                                <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                    <tbody>
                                                        <tr class="chron_div">
                                                            <th><center>List of Computer Skill</center></th>                                       
                                                    <th colspan="3"><center>Level of Computer Skill</center></th>
                                                    </tr>
                                            <?php
                                               foreach ($comp_data as $view_computer) { 
                                            ?>
                                                    <tr class="chron_div_bottom">
                                                        <td><center><?php echo $view_computer['computer_skill']['skill'] ?></center></td>
                                                    <td><center><?php echo $view_computer['computer_skill']['skill_level'] ?></center></td>                                      
                                                    <td style="width: 18%;">
                                                        <div class="progress progress-striped"> 
                                                    <?php if($view_computer['computer_skill']['skill_level'] == 'Basic (1 to 3 years)') { ?>
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="background-color: background;">
                                                                <span class="sr-only">25&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                            </div>
                                                    <?php } if($view_computer['computer_skill']['skill_level'] == 'Intermediate (3 to 6 years)') { ?>
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="background-color: #c33838;">
                                                                <span class="sr-only">50&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                            </div>
                                                    <?php } if($view_computer['computer_skill']['skill_level'] == 'Advanced (6 to 10 years)') { ?>
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="background-color: #868600;">
                                                                <span class="sr-only">75&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                            </div>
                                                    <?php } if($view_computer['computer_skill']['skill_level'] == 'Professional (10 PLUS years)') { ?>
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="background-color: darkgreen;">
                                                                <span class="sr-only">100&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                            </div>
                                                    <?php } ?>
                                                        </div>
                                                    </td>
                                            <?php if($view_computer['computer_skill']['view_data'] == 'View/Print') { ?>
                                                    <td><center><button class="print_btn" onclick='print_data("<?php echo $view_computer['computer_skill']['id'] ?>", "computer_skill")'>Print</button></center></td>  
                                            <?php } ?>
                                                    </tr>                                 
                                            <?php } ?>                                         
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if(count($essen_data) > 0) { ?>
                                <div id="essential_skill" class="tab-pane fade">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                        <div class='first_div'>
                                            <h2 class='headeing_uwse'></h2>
                                            <div class="table">
                                                <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                    <tbody>
                                                        <tr class="chron_div">
                                                            <th><center>Name of Skill</center></th>                                       
                                                    <th colspan="2"><center>Average</center></th> 
                                                    </tr>
                                            <?php
                                               foreach ($essen_data as $essential_skill) { 
                                            ?>
                                                    <tr class="chron_div_bottom">                                                
                                                        <td><?php echo strtoupper(str_replace('_', ' ', $essential_skill['essential_skills']['skill_type'])) ?></td>
                                                        <td>
                                            <?php 
                                            $data = json_decode($essential_skill['essential_skills']['skill_data'], TRUE);
                                            $ans = $data['answers'];                                                                
                                            $total_sum = 0;
                                            for($i = 0; $i < count($ans); $i++){
                                                if($ans[$i] != 'X'){
                                                    $total_sum += $ans[$i];
                                                }
                                            }
                                            $total_avg = $total_sum / count($ans);
                                            $perc = number_format($total_avg*20);
                                            ?>
                                                            <div class="progress progress-striped"> 
                                                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $perc ?>" aria-valuemin="0" aria-valuemax="100">
                                                                    <span class="sr-only">
                                                                <?php echo $perc.'%' ; ?>                                                                                                                                                                                  
                                                                    </span> 
                                                                </div>
                                                            </div>
                                                        </td> 
                                            <?php if($essential_skill['essential_skills']['view_data'] == 'View/Print') { ?>
                                                        <td><center><button class="print_btn" onclick='print_data("<?php echo $essential_skill['essential_skills']['id'] ?>", "essential_skills")'>Print</button></center></td>  
                                            <?php } ?>
                                                    </tr>                                 
                                            <?php } ?>                                            
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if((count($career_data) > 0) || (count($volunteer_data) > 0) || (count($course_data) > 0)) { ?>
                                <div id="career_act" class="tab-pane fade">
                                    <ul class="nav nav-tabs new_proper1">
                                    <?php if(count($career_data) > 0) { ?>
                                        <li onclick='update_view("Career Related Activity")'><a data-toggle="tab" href="#sub_career" id="career_app" aria-expanded="true">Career Activities</a></li>
                                    <?php } if(count($volunteer_data) > 0) { ?>
                                        <li onclick='update_view("Volunteer Work")'><a href="#vol_work" id="vol_app" data-toggle="tab" aria-expanded="true">Volunteer Work</a></li>
                                    <?php } if(count($course_data) > 0) { ?>
                                        <li onclick='update_view("Course")'><a href="#sub_course" id="course_app" data-toggle="tab" aria-expanded="true">Courses</a></li>
                                    <?php } ?>
                                    </ul>

                                    <div class="tab-content tabs_use">
                                    <?php if(count($career_data) > 0) { ?>
                                        <div id="sub_career" class="tab-pane fade">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                                <div class='first_div'>
                                                    <h2 class='headeing_uwse'></h2>
                                                    <div class="table">
                                                        <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                            <tbody>
                                                                <tr class="chron_div">                                                            
                                                                    <th colspan="2"><center>Career Related Activity</center></th>                                        
                                                            </tr>
                                                    <?php foreach ($career_data as $career_act) { ?>
                                                            <tr class="chron_div_bottom">                                                      
                                                                <td><?php echo $career_act['career_activity']['related_act'] ?></td> 
                                                        <?php if($career_act['career_activity']['view_data'] == 'View/Print') { ?>
                                                                <td><center><button class="print_btn" onclick='print_data("<?php echo $career_act['career_activity']['id'] ?>", "career_activity")'>Print</button></center></td>  
                                                        <?php } ?>
                                                            </tr>                                 
                                                    <?php } ?> 
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } if(count($volunteer_data) > 0) { ?>
                                        <div id="vol_work" class="tab-pane fade">
                                            <div class="form-group">
                                                <div class="form_color_use">

                                                    <div class="table border_table">
                                                        <table class="table_use_div word_div">

                                                    <?php $i =1;  if(count($volunteer_data) > 0) {
                                                        foreach ($volunteer_data as $volunteer) { 
                                                    ?>

                                                            <thead class="bg_thead_sec">
                                                                <tr>
                                                                    <td colspan="2"><h5 class="strn_hding">Volunteer Work <?php echo $i++; ?></h5></td>
                                                                    <td colspan="2">
                                                        <?php if($volunteer['volunteer_work']['view_data'] == 'View/Print') { ?>
                                                                        <button class="print_btn" onclick='print_data("<?php echo $volunteer['volunteer_work']['id'] ?>", "volunteer_work")'>Print</button>
                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <tr>
                                                                <th colspan="2">Name</th>
                                                                <td colspan="2"><?php echo $volunteer['volunteer_work']['name'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">Address</th>
                                                                <td colspan="2"><?php echo $volunteer['volunteer_work']['address'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">Telephone</th>
                                                                <td colspan="2"><?php echo $volunteer['volunteer_work']['telephone'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">Volunteer Job Title</th>
                                                                <td colspan="2"><?php echo $volunteer['volunteer_work']['job_title'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">Description of skills, knowledge</th>
                                                                <td colspan="2"><?php echo $volunteer['volunteer_work']['desc_skill'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">Number and Type of Workers Supervised</th>
                                                                <td colspan="2"><?php echo $volunteer['volunteer_work']['type_worker'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="4">Dates of Service in this Job:</th>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">From:</th>
                                                                <th style="padding-left: 4%;" colspan="2">To:</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" style="padding-left: 2%;"><?php echo $volunteer['volunteer_work']['from_service_date'] ?></td>
                                                                <td colspan="2" style="padding-left: 4%;"><?php echo $volunteer['volunteer_work']['to_service_date'] ?></td>
                                                            </tr>
                                                    <?php 
                                                    $start_date = strtotime($volunteer['volunteer_work']['from_service_date']);
                                                    $end_date = strtotime($volunteer['volunteer_work']['to_service_date']);
                                                    $i = 0;
                                                    $per_day = explode('*',$volunteer['volunteer_work']['per_day']);
                                                    $per_week = explode('*',$volunteer['volunteer_work']['per_week']);
                                                    $per_month = explode('*',$volunteer['volunteer_work']['per_month']);
                                                    while($start_date < $end_date) {
                                                    ?>
                                                            <tr>
                                                                <td style="padding-left: 2%;"><?php echo date('M', $start_date); ?> - <?php echo date('Y', $start_date); ?></td>
                                                                <td><?php echo $per_day[$i]; ?> Per Day</td>
                                                                <td><?php echo $per_week[$i]; ?> Per Week</td>
                                                                <td><?php echo $per_month[$i]; ?> Per Month</td>
                                                            </tr>  
                                                    <?php $start_date = strtotime("+1 month", $start_date); $i++; } ?>
                                                            <tr>
                                                                <th colspan="2">Name of Supervisor</th>
                                                                <td colspan="2"><?php echo $volunteer['volunteer_work']['supervisor_name'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">Title</th>
                                                                <td colspan="2"><?php echo $volunteer['volunteer_work']['title'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">Telephone</th>
                                                                <td colspan="2"><?php echo $volunteer['volunteer_work']['super_telephone'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">Date</th>
                                                                <td colspan="2"><?php echo $volunteer['volunteer_work']['date'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="2">Additional Comments</th>
                                                                <td colspan="2"><?php echo $volunteer['volunteer_work']['comments'] ?></td>
                                                            </tr>
                                                    <?php   }  } else { ?>
                                                            <tr>
                                                                <th colspan="4"><center><b>No Record Found</b></center></th>
                                                            </tr>
                                                    <?php } ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } if(count($course_data) > 0) { ?>
                                        <div id="sub_course" class="tab-pane fade">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                                <div class='first_div'>
                                                    <h2 class='headeing_uwse'></h2>
                                                    <div class="table">
                                                        <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                            <tbody>
                                                                <tr class="chron_div">

                                                                    <th><center>Workshop</center></th>
                                                            <th><center>Sponsored By</center></th>
                                                            <th><center>Date</center></th>
                                                            <th><center>Total Hours</center></th>
                                                            <th><center>Instructor</center></th>
                                                            <th><center>Title</center></th>
                                                            <th><center>Course Description</center></th>
                                                            <th><center>Credit Acquired</center></th>
                                                            <th><center>Skills and Knowledge acquired</center></th>
                                                            <th colspan="2"><center>Notes</center></th>
                                                            </tr>
                                                    <?php  foreach ($course_data as $course_added) {  ?>
                                                            <tr class="chron_div_bottom">                                                        
                                                                <td><center><?php echo $course_added['course']['workshop'] ?></center></td>
                                                            <td><center><?php echo $course_added['course']['sponsor'] ?></center></td>
                                                            <td><center><?php echo date('d-M-Y',strtotime($course_added['course']['date'])) ?></center></td>
                                                            <td><center><?php echo $course_added['course']['total_hrs'] ?></center></td>
                                                            <td><center><?php echo $course_added['course']['instructor'] ?></center></td>
                                                            <td><center><?php echo $course_added['course']['title'] ?></center></td>
                                                            <td><center><?php echo $course_added['course']['course_desc'] ?></center></td>
                                                            <td><center><?php echo $course_added['course']['credit'] ?></center></td>
                                                            <td><center><?php echo $course_added['course']['skill'] ?></center></td>
                                                            <td><center><?php echo $course_added['course']['notes'] ?></center></td>
                                                    <?php if($course_added['course']['view_data'] == 'View/Print') { ?>
                                                            <td><center><button class="print_btn" onclick='print_data("<?php echo $course_added['course']['id'] ?>", "course")'>Print</button></center></td>  
                                                    <?php } ?>
                                                            </tr>                                 
                                                    <?php } ?>                                                     
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>       

    <?php } else { ?>

    <?php if(isset($msg)) { ?>
    <div class="alert alert-danger alert-dismissible fade in data_alert_div">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $msg; ?>
    </div>
                    <?php } ?>

    <div class="col-lg-12 col-md-12">
        <ul class="nav nav-tabs new_proper">   
            <li class="active"><a data-toggle="tab" href="#sign_up">SignUp / Login</a></li>
        </ul>
        <div class="tab-content tabs_use" style="background-color: #fff;">
            <div id="sign_up" class="tab-pane fade active in" style="padding-left: 3em; padding-right: 3em;">
                <form method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="mcd" value="<?php echo $user_mcd ?>" readonly="" style="background-color: #fff;">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="company_name" placeholder="Company Name" required="">
                    </div>
                    <div class="form-group">
                        <button type="submit" style="margin-top: 1em;">Submit</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>

<?php } ?>

</div>


<div class="modal fade" id="added" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <form method="post" id="add_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Added to My CD</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="option_id" id="option_id1">                       
                    <div class="alert alert-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> What Permission do you want?</div>
                    <input type="radio" name="select_data" value="View" required="">&nbsp;View
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="select_data" value="View/Print" required="">&nbsp;View/Print
                </div>
                <div class="modal-footer ">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i> No</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
    </form>
</div>

<div class="modal fade" id="myModal_11" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center>Monthly Volunteer Report</center></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3">
                        <h6>Month</h6>                          
                        <span id="date_val"></span>
                    </div> 
                    <div class="col-lg-9">
                        <div class="col-lg-4">
                            <h6>Per Day(Hours)</h6>
                            <span id="per_day_val"></span>
                        </div>
                        <div class="col-lg-4">
                            <h6>Per Week(Hours)</h6>
                            <span id="per_week_val"></span>
                        </div>
                        <div class="col-lg-4">
                            <h6>Total(Hours)</h6>
                            <span id="per_month_val"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h6>Total Hours: <span id="total_hrs_val"></span></h6>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <form method="post" id="message_data">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Contact Me</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="user_id" value="<?php echo $user_mcd; ?>">
                    <div class='form-group'>
                        <label for="name_id">Name</label>
                        <input type="text" id="name_id" name="user_name" class="form-control" required="">
                        <div class="clearfix"></div>
                    </div>                               
                    <div class='form-group'>
                        <label for="company_id">Company</label>
                        <input type="text" id="company_id" name="company_name" class="form-control" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class='form-group'>
                        <label for="phone_id">Telephone</label>
                        <input type="text" id="phone_id" name="telephone" class="form-control phone">
                        <div class="clearfix"></div>
                    </div>
                    <div class='form-group'>
                        <label for="email_id">Email</label>
                        <input type="email" id="email_id" name="email" class="form-control" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class='form-group'>
                        <label for="message_id">Message</label>
                        <textarea row="5" id="message_id" name="message" class="form-control" required=""></textarea>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="submit" class="btn btn-info"> Send</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
    </form>
</div>

<!--   Core JS Files   -->
            <?php echo $this->Html->script('js/demo/moment.latest.min.js') ?>
            <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
            <?php echo $this->Html->script('js/circularprogress.jquery.js') ?> 

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

<script>
    function print_data(id, table_name) {
        var print_window = window.open("<?php echo DOMAIN_NAME ?>" + "my_cd_data.html?id=" + id + "&table_name=" + table_name);
        print_window.addEventListener('load', function () {
            print_window.print();
            print_window.close();
        }, true);
    }
</script>

<script>
    function update_view(tab_name) {
        var id = <?php echo $indus_id ?>;
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'dashboards/view_selected_data']) ?>",
            type: "POST",
            data: {"select_tab": tab_name, "indus_id": id},
            success: function (data) {
            }
        });
    }
</script>

<script>
    function view_monthly_record(id) {
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'dashboards/view_monthly_volunteer']) ?>",
            type: "POST",
            data: {'vol_id': id},
            success: function (data) {
                var response = JSON.parse(data);
                var per_day = response[0].volunteer_work.per_day.split('*');
                var per_week = response[0].volunteer_work.per_week.split('*');
                var per_month = response[0].volunteer_work.per_month.split('*');
                var total_hrs = '0';
                var months = [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ];
                var date_first = new Date(response[0].volunteer_work.from_service_date);
                var date_second = new Date(response[0].volunteer_work.to_service_date);
                var month_val = (date_second.getFullYear() - date_first.getFullYear()) * 12;
                month_val -= date_first.getMonth() + 1;
                month_val += date_second.getMonth() + 2;
                var html1 = "<span id='date_val'>";
                for (var i = 0; i < month_val; i++) {
                    html1 += "<p>" + months[date_first.getMonth()] + " - " + date_first.getFullYear() + "</p>";
                    var newDate = date_first.setMonth(date_first.getMonth() + 1);
                    date_first = new Date(newDate);
                }
                html1 += "</span>";
                var html2 = "<span id='per_day_val'>";
                for (var j = 0; j < (per_day.length); j++) {
                    html2 += "<p>" + per_day[j] + "</p>";
                }
                html2 += "</span>";
                var html3 = "<span id='per_week_val'>";
                for (var k = 0; k < (per_week.length); k++) {
                    html3 += "<p>" + per_week[k] + "</p>";
                }
                html3 += "</span>";
                var html4 = "<span id='per_month_val'>";
                for (var l = 0; l < (per_month.length); l++) {
                    html4 += "<p>" + per_month[l] + "</p>";
                    total_hrs = parseInt(per_month[l]) + parseInt(total_hrs);
                }
                html4 += "</span>";
                $("#date_val").replaceWith(html1);
                $("#per_day_val").replaceWith(html2);
                $("#per_week_val").replaceWith(html3);
                $("#per_month_val").replaceWith(html4);
                $("#total_hrs_val").text(total_hrs);
                $("#myModal_11").modal("show");
            }
        });
    }
</script>

<script>
    $("#contact_me").click(function () {
        $("#message").modal('show');
    });
</script>

<script>
    $("#message_data").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'dashboards/industryMessage']) ?>",
            type: "post",
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
            success: function (data) {
                alert("Message Sent");
                location.reload();
            }
        });
    });
</script>

<script>
    $("#like_button").click(function () {
        var industry_id = '<?php echo $industry_id ?>';
        var user_mcd = '<?php echo $user_mcd2[0]; ?>';
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'dashboards/industryLiked']) ?>",
            type: "post",
            data: {'indus_id': industry_id, 'mcd': user_mcd},
            success: function (data) {
                location.reload();
            }
        });
    });
</script>

<script>
    $("#unlike_button").click(function () {
        var industry_id = '<?php echo $industry_id ?>';
        var user_mcd = '<?php echo $user_mcd2[0]; ?>';
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'dashboards/industryUnLiked']) ?>",
            type: "post",
            data: {'indus_id': industry_id, 'mcd': user_mcd},
            success: function (data) {
                location.reload();
            }
        });
    });
</script>

<?php echo $this->Html->script('js/bootstrap.min.js') ?>

</body>

</html>