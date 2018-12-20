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

        <?php echo $this->Html->css('css/bootstrap.min.css') ?>
        <?php echo $this->Html->css('css/custom.css') ?>
        <?php echo $this->Html->css('css/responsive_use.css') ?>
        <?php echo $this->Html->css('css/animate.min.css') ?>
        <?php echo $this->Html->css('css/paper-dashboard.css') ?>
        <?php echo $this->Html->css('css/demo.css') ?>
        <?php echo $this->Html->css('css/custom_css.css') ?>
        <?php echo $this->Html->css('css/themify-icons.css') ?>    
        <?php echo $this->Html->css('css/demo/calendar-style.css') ?>   
        <?php echo $this->Html->css('css/demo/style.css') ?>
        <?php echo $this->Html->css('css/dist/pignose.calendar.css') ?>
        <?php echo $this->Html->css('css/style.css') ?>
        <?php echo $this->Html->css('css/circularprogress.css') ?>
        <?php echo $this->Html->css('css/icons.css') ?>
        <?php echo $this->Html->css('style.css') ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            ol {
                margin-bottom: 0px;
            }
            button{
                background-color: #254094;
                color: #fff;
                padding: 7px;
                border: 1px solid #254094;
                font-size: 14px;
            }
            .strip_class_add {
                margin: 0 auto;
                width: 95%;
                height: 24px;
            }
            .progress-striped {
                background-color: #e2e0e0 !important;
            }
            input[type='password']{color: #000; border: 1px solid #ccc; padding: 1% 2%; font-size: 14px; font-weight: inherit;}
            .table_data_use th{padding:1em;}
            .form-control{width: 100% !important; margin-top: 1%;}
            .data_alert_div{
                color: #a94442;
                background-color: #f2dede !important;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #ebccd1 !important;
                border-radius: 4px;
            }
            .data_alert_div .close{right: -4px !important;}
            .education_data td{font-weight: bold;}
        </style>
        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top normal new_page_color" role="navigation">
            <div class='row bg_min_logo'>
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
            <section id='main'>
                <div class="sidebar" data-background-color="white" data-active-color="danger" id="sticky">

                    <!--
                                Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
                                Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
                    -->

                    <div class="sidebar-wrapper">

                        <ul class="nav padding_in_sidebar">

                            <li>
                                <a href="">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <p>My CD </p>
                                </a>
                            </li><br/>
                            <li class='left_use'>
                                <table width=125 border=0 cellspacing=0 cellpadding=0 title="CLICK TO VERIFY: This site uses a GlobalSign SSL Certificate to secure your personal information." ><tr><td><span id="ss_img_wrapper_gmogs_image_125-50_en_dblue"><a href="https://www.globalsign.com/" target=_blank title="GlobalSign Site Seal" rel="nofollow"><img alt="SSL" border=0 id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_125-50_en.gif"></a></span><script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gmogs_image_125-50_en_dblue.js"></script></td></tr></table>
                            </li><br/>
                            <li class='left_use'>
                                <a href="https://www.acumaxtechnologies.com/">Design and Devloped<br/>Acumax Technologies</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </section>           

            <div class="main-panel new_page_color">

                <?php if(sizeof($this->Session->read('guest'))>0) { ?>

                <!-- navigation start -->
                <div class="new_view" style="margin:2% 3% 2% 3%;">	
                    <div class="col-lg-12 col-md-12">
                        <input type="hidden" id="myUrl" value="<?php echo DOMAIN_NAME ?>">
                        <ul class="nav nav-tabs new_proper">   

                            <li class="active" id="view_mycareer"><a data-toggle="tab" href="#my_cd">Profile</a></li>
                            <?php if(count($mission_data) > 0) { ?>
                            <li onclick='update_view("Mission Statement")'><a data-toggle="tab" href="#mission">Mission Statement</a></li>
                            <?php } ?>
                            <?php if(count($resume_data) > 0) { ?>
                            <li onclick='update_view("Resume")'><a data-toggle="tab" href="#resume">Resume </a></li>
                            <?php } ?>
                            <?php if(count($accomp_data) > 0) { ?>
                            <li onclick='update_view("Accomplishments")'><a data-toggle="tab" href="#accomp">Accomplishments</a></li>
                            <?php } ?>
                            <?php if(count($key_skill_data) > 0) { ?>
                            <li onclick='update_view("Key Skills")'><a data-toggle="tab" href="#key">Key Skills </a></li>
                            <?php } ?>
                            <?php if(count($essen_data) > 0) { ?>
                            <li onclick='update_view("Essential Skill")'><a data-toggle="tab" href="#essential_skill">Essential Skill</a></li>
                            <?php } ?>
                            <?php if(count($comp_data) > 0) { ?>
                            <li onclick='update_view("Computer Skills")'><a data-toggle="tab" href="#comp_skill">Computer Skills</a></li>
                            <?php } ?>
                            <?php if(count($edu_data) > 0) { ?>
                            <li onclick='update_view("Education")'><a data-toggle="tab" href="#education">Education</a></li>
                            <?php } ?>
                            <?php if((count($career_data) > 0) || (count($volunteer_data) > 0) || (count($course_data) > 0)) { ?>
                            <li><a data-toggle="tab" href="#career_act">Career Related Activity</a></li>
                            <?php } ?>
                            <?php if(count($ref_data_indus) > 0) { ?>
                            <li onclick='update_view("DIY Reference")'><a data-toggle="tab" href="#reference">DIY Reference </a></li>
                            <?php } ?>
                            <?php if(count($swot_data) > 0) {  ?>
                            <li onclick='update_view("S.W.O.T Analysis")'><a data-toggle="tab" href="#swot">S.W.O.T Analysis</a></li>
                            <?php } ?>
                            <?php if(count($evidence_data) > 0) { ?>
                            <li onclick='update_view("Evidence of Skill")'><a data-toggle="tab" href="#evidence_skill">Evidence of Skill</a></li>
                            <?php } ?>
                            <!-- <li class="pull-right" style="margin-right: 10px;"><i class="fa fa-thumbs-down liked_icon"></i><span class="number_div"><?php echo $total_dislike[0][0]['count(like_career)']; ?></span></li> -->
                            <li class="pull-right" style="margin-right: 10px;"><i class="fa fa-thumbs-up liked_icon"></i><span class="number_div"><?php echo $total_like[0][0]['count(like_career)']; ?></span></li>                           
                        </ul>

                        <div class="tab-content tabs_use">
                            <div id="my_cd" class="tab-pane fade active in">
                                <div class="new_page_color_red">
                                    <!-- <div class="row new_row_use" style="padding-top: 5%;">
                                        <div class="container-fluid">
                                            <div class="row_use_what_career_dashbored" style="padding-top: 0px;">
                                                <h1>Tailoring what you show</h1>
                                                <p><strong>
                                                        When you’re building your Career Dashboard, you gather all the information that highlights each of your skills and experiences. Your CD includes the complete collection. But any job or educational program you apply for will focus on some of your skills and experiences, not all of them.
                                                        <br/><br/>
                                                        For each program or job interview you do, you should customize or tailor your MYCD to showcase the specific skills that are required. Anticipate what skills are needed and select related items.
                                                    </strong></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="container-fluid">
                                            <div class="row_use_what_career_dashbored" style="padding-top: 0px;">
                                                <h1>Showtime</h1>
                                                <p><strong>If you're planning to use MY CD in an interview, let your employer (and interviewer) know.</strong></p>
                                                <ul>
                                                    <li>Mention that you have an online career dashboard in your <b>cover letter and include username and password so they may review your Career</b>.</li>
                                                    <li>Within the first few minutes of your interview, tell your interviewer that you have a career dashboard.</li>
                                                    <li>During your interview, you can use MY CD Document in a number of ways.</li>
                                                    <li>When you're <b>answering questions</b> about your accomplishments, strengths, and goals, use MY CD to show and explain your achievements and abilities.</li>
                                                    <li>Use MY CD Link to help you answer <b>open-ended questions</b> like "Tell me about yourself" and "Why should I hire you?"</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-7">
                                    <?php if(count($view_summary) > 0) {
                                    
                                    foreach ($view_summary as $summary) {
                                    ?>
                                        <table class="table_data_use" style="width: 100%;">
                                            <tr>
                                                <th>Name</th>
                                                <th><?php echo ucfirst($summary['register']['first_name']) ?> <?php echo ucfirst($summary['register']['last_name']) ?></th>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <th><?php echo $summary['register']['email'] ?></th>
                                            </tr>                                    
                                            <?php if($summary['register']['country'] == 'United States') { ?>
                                            <tr>
                                                <th>State</th>
                                                <th><?php echo $summary['register']['state'] ?></th>
                                            </tr>
                                            <?php } ?>
                                            <?php if($summary['register']['country'] == 'Canada') { ?>
                                            <tr>
                                                <th>Province</th>
                                                <th><?php echo $summary['register']['provence'] ?></th>
                                            </tr>
                                            <?php } ?>
                                            <tr>
                                                <th>Country</th>
                                                <th><?php echo $summary['register']['country'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Type of Work</th>
                                                <th><?php echo $summary['create_profile']['work_type'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Employment Group</th>
                                                <th><?php echo $summary['create_profile']['employment'] ?></th>
                                            </tr>
                                            <!-- <tr>
                                                <th>Hobbies</th>
                                                <th><?php echo $summary['create_profile']['hobby'] ?></th>
                                            </tr> -->
                                            <tr>
                                                <th>Job Category</th>
                                                <th><?php echo $summary['create_profile']['job_category'] ?></th>
                                            </tr> 
                                            <tr>
                                                <th>Kind of Job</th>
                                                <th><?php echo $summary['create_profile']['kind_job'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Experience</th>
                                                <th><?php echo $summary['create_profile']['experience'] ?></th>
                                            </tr>
                                            <?php if($summary['create_profile']['experience'] == 'Yes') { ?>
                                            <tr>
                                                <th>Number of Years</th>
                                                <th><?php echo $summary['create_profile']['exp_number'] ?></th>
                                            </tr>
                                            <?php } ?>

                                        </table>
                                    <?php } } else {  
                                    foreach ($user as $data) { ?>
                                        <table class="table_data_use">
                                            <tr>
                                                <th>Name</th>
                                                <th><?php echo ucfirst($data['register']['first_name']) ?> <?php echo ucfirst($data['register']['last_name']) ?></th>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <th><?php echo $data['register']['email'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Country</th>
                                                <th><?php echo $data['register']['country'] ?></th>
                                            </tr>
                                            <?php if($data['register']['country'] == 'United States') { ?>
                                            <tr>
                                                <th>State</th>
                                                <th><?php echo $data['register']['state'] ?></th>
                                            </tr>
                                            <?php } ?>
                                            <?php if($data['register']['country'] == 'Canada') { ?>
                                            <tr>
                                                <th>Province</th>
                                                <th><?php echo $data['register']['provence'] ?></th>
                                            </tr>
                                        <?php } ?>
                                        </table>

                                    <?php } } ?>
                                    </div>

                                    <div class="col-sm-5" style="padding-top: 20px; padding-left: 10px;">
                                    <?php foreach ($user as $data) {
                                        if($data['register']['profile_pic'] != '') {
                                    ?>
                                        <img src='<?php echo DOMAIN_NAME ?><?php echo $data['register']['profile_pic'] ?>' class="user_img_data">
                                        <?php } else { ?>
                                        <img src='<?php echo DOMAIN_NAME ?>img/avatar.png' class="user_img_data">
                                        <?php } } ?>

                                        <ul class="media_data new_page_color_red">
                                            <h3 class="social_data">SOCIAL NETWORK</h3>
                                        <?php foreach ($media as $row) { 
                                            if($row['social_network']['network_name'] == 'facebook') {
                                        ?>
                                            <li><a href="<?php echo $row['social_network']['network_url'] ?>" target="_blank"><i class="fa fa-facebook-f social_media"></i></a></li>
                                            <?php } if($row['social_network']['network_name'] == 'instagram') { ?>
                                            <li><a href="<?php echo $row['social_network']['network_url'] ?>" target="_blank"><i class="fa fa-instagram social_media"></i></a></li>
                                            <?php } if($row['social_network']['network_name'] == 'linkedin') { ?>
                                            <li><a href="" target="_blank"><i class="fa fa-linkedin social_media"></i></a></li>
                                            <?php } if($row['social_network']['network_name'] == 'google-plus') { ?>
                                            <li><a href="" target="_blank"><i class="fa fa-google-plus social_media"></i></a></li>
                                            <?php } if($row['social_network']['network_name'] == 'twitter') { ?>
                                            <li><a href="" target="_blank"><i class="fa fa-twitter social_media"></i></a></li>
                                            <?php } if($row['social_network']['network_name'] == 'skype') { ?>
                                            <li><a href="" target="_blank"><i class="fa fa-skype social_media"></i></a></li>
                                            <?php } if($row['social_network']['network_name'] == 'pinterest') { ?>
                                            <li><a href="" target="_blank"><i class="fa fa-pinterest social_media"></i></a></li>
                                            <?php } if($row['social_network']['network_name'] == 'youtube') { ?>
                                            <li><a href="" target="_blank"><i class="fa fa-youtube social_media"></i></a></li>
                                        <?php } } ?>
                                        </ul>

                                        <?php if(count($view_summary_mcd) > 0) { ?>
                                        <div class="div_resume_val">
                                            <h3>Resume Summary</h3>
                                        <?php foreach ($view_summary_mcd as $view_sum) { ?>
                                            <p><?php echo $view_sum['resume_summary']['resume_summary'] ?></p>
                                        <?php } ?>
                                        </div>
                                    <?php } ?>

                                        <div class="row new_message_data">
                                            <ul class="new_page_color_red">
                                                <li style="border: #bd0000 solid 1px; margin-left: 0px;"><button id="contact_me">Contact Me</button></li>
                                                <?php if(count($career_like) > 0) { ?>
                                                <li style="margin-left: 1em; border: #bd0000 solid 1px;" disabled><button>Liked</button></li>                       
                                                <?php } else { ?>
                                                <li style="margin-left: 1em; border: #bd0000 solid 1px;" id="like_button"><button>Liked Your Career</button></li> 
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" style="padding-top: 20px;">

                                    </div>
                                    <div class="clearfix"></div>
                                </div>


                                <div class="clearfix"></div>
                            </div>

                            <?php if(count($resume_data) > 0) { ?>
                            <div id="resume" class="tab-pane fade">                        
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'></h2>
                                        <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use">
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
                                            <center><a class="button_use" href="dashboards/download?filename=<?php echo $chron_upload_data[$i] ?>">View</a></center>
                                            <?php } } ?>
                                            </td>  
                                            <?php if($chron_data['upload_resume']['view_data'] == 'View/Print') { ?>
                                            <td><center><button onclick='print_data("<?php echo $chron_data['upload_resume']['resume_id'] ?>", "upload_resume")'>Print</button></center></td>
                                            <?php } ?>
                                            </tr>                                 

                                            <?php } ?>
                                        </table>
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
                                <div class="repeat_border_div">
                                    <div>
                                        <h3><?php echo ucfirst($ref_name[0]). " Verification"; ?>
                                            <?php if($ref_data['verify_reference']['view_data'] == 'View/Print') { ?>
                                            <button style="margin-right: 2em;" class="essen_skill_div_delete1 pull-right" onclick='print_data("<?php echo $ref_data['verify_reference']['id'] ?>", "verify_reference")'>Print</button>
                                            <?php } ?>
                                        </h3>
                                    </div>
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

                                        <table class="table_use_div word_div">

                                            <?php $i =1;  if(count($accomp_data) > 0) {
                                                foreach ($accomp_data as $acomplish) { 
                                            ?>
                                            <tr>
                                                <td style="padding: 0px 0px 2em 0px; border-top: 5px solid #000;" colspan="2"></td>
                                            </tr>
                                            <tr>
                                                <td><h5><center><?php echo $i++ ?>. Recent Job</center></h5></td>
                                                <?php if($acomplish['acomplishment']['view_data'] == 'View/Print') { ?>
                                                <td><button onclick='print_data("<?php echo $acomplish['acomplishment']['id'] ?>", "acomplishment")'>Print</button></td>
                                                <?php } ?>
                                            </tr>
                                            <tr>
                                                <th>Company Name</th>
                                                <td><?php echo $acomplish['acomplishment']['company_name'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Date</th>
                                                <td><?php echo $acomplish['acomplishment']['sub_date'] ?></td>
                                            </tr>
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
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if(count($key_skill_data) > 0) { ?>
                            <div id="key" class="tab-pane fade">
                                <?php $i = 1; 
                                    foreach ($key_skill_data as $key_skill) { 
                                ?>
                                <div class="repeat_border_div">
                                    <div>
                                        <h1>Key Skill <?php echo $i++; ?>
                                            <?php if($key_skill['key_skill']['view_data'] == 'View/Print') { ?>
                                            <button class="pull-right" style="margin-right: 3em;" onclick='print_data("<?php echo $key_skill['key_skill']['id'] ?>", "key_skill")'>Print</button>
                                            <?php } ?>
                                        </h1>
                                    </div>
                                    <div class='div_margin'>
                                        <h3>Communication</h3>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>1) Describe the Situation you were in ? </h1>
                                        <p><?php echo $key_skill['key_skill']['comm_situation'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>2) Describe the Task you needed to accomplish ?</h1>
                                        <p><?php echo $key_skill['key_skill']['comm_accomp'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>3) Describe the Action you took ?</h1>
                                        <p><?php echo $key_skill['key_skill']['comm_describe'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>4) Describe the Result </h1>
                                        <p><?php echo $key_skill['key_skill']['comm_result'] ?></p>
                                    </div>


                                    <div class='div_margin'>
                                        <h3>Teamwork</h3>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>1) Describe the Situation you were in ? </h1>
                                        <p><?php echo $key_skill['key_skill']['team_situation'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>2) Describe the Task you needed to accomplish ?</h1>
                                        <p><?php echo $key_skill['key_skill']['team_accomp'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>3) Describe the Action you took ?</h1>
                                        <p><?php echo $key_skill['key_skill']['team_describe'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>4) Describe the Result </h1>
                                        <p><?php echo $key_skill['key_skill']['team_result'] ?></p>
                                    </div>

                                    <div class='div_margin'>
                                        <h3>Problem solving</h3>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>1) Describe the Situation you were in ? </h1>
                                        <p><?php echo $key_skill['key_skill']['problem_situation'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>2) Describe the Task you needed to accomplish ?</h1>
                                        <p><?php echo $key_skill['key_skill']['problem_accomp'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>3) Describe the Action you took ?</h1>
                                        <p><?php echo $key_skill['key_skill']['problem_describe'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>4) Describe the Result </h1>
                                        <p><?php echo $key_skill['key_skill']['problem_result'] ?></p>
                                    </div>

                                    <div class='div_margin'>
                                        <h3>Initiative and enterprise</h3>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>1) Describe the Situation you were in ? </h1>
                                        <p><?php echo $key_skill['key_skill']['ini_situation'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>2) Describe the Task you needed to accomplish ?</h1>
                                        <p><?php echo $key_skill['key_skill']['ini_accomp'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>3) Describe the Action you took ?</h1>
                                        <p><?php echo $key_skill['key_skill']['ini_describe'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>4) Describe the Result </h1>
                                        <p><?php echo $key_skill['key_skill']['ini_result'] ?></p>
                                    </div>

                                    <div class='div_margin'>
                                        <h3>Planning and organising</h3>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>1) Describe the Situation you were in ? </h1>
                                        <p><?php echo $key_skill['key_skill']['plan_situation'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>2) Describe the Task you needed to accomplish ?</h1>
                                        <p><?php echo $key_skill['key_skill']['plan_accomp'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>3) Describe the Action you took ?</h1>
                                        <p><?php echo $key_skill['key_skill']['plan_describe'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>4) Describe the Result </h1>
                                        <p><?php echo $key_skill['key_skill']['plan_result'] ?></p>
                                    </div>


                                    <div class='div_margin'>
                                        <h3>Self-management</h3>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>1) Describe the Situation you were in ? </h1>
                                        <p><?php echo $key_skill['key_skill']['self_situation'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>2) Describe the Task you needed to accomplish ?</h1>
                                        <p><?php echo $key_skill['key_skill']['self_accomp'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>3) Describe the Action you took ?</h1>
                                        <p><?php echo $key_skill['key_skill']['self_describe'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>4) Describe the Result </h1>
                                        <p><?php echo $key_skill['key_skill']['self_result'] ?></p>
                                    </div>

                                    <div class='div_margin'>
                                        <h3>Learning</h3>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>1) Describe the Situation you were in ? </h1>
                                        <p><?php echo $key_skill['key_skill']['learn_situation'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>2) Describe the Task you needed to accomplish ?</h1>
                                        <p><?php echo $key_skill['key_skill']['learn_accomp'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>3) Describe the Action you took ?</h1>
                                        <p><?php echo $key_skill['key_skill']['learn_describe'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>4) Describe the Result </h1>
                                        <p><?php echo $key_skill['key_skill']['learn_result'] ?></p>
                                    </div>

                                    <div class='div_margin'>
                                        <h3>Technology</h3>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>1) Describe the Situation you were in ? </h1>
                                        <p><?php echo $key_skill['key_skill']['tech_situation'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>2) Describe the Task you needed to accomplish ?</h1>
                                        <p><?php echo $key_skill['key_skill']['tech_accomp'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>3) Describe the Action you took ?</h1>
                                        <p><?php echo $key_skill['key_skill']['tech_describe'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>4) Describe the Result </h1>
                                        <p><?php echo $key_skill['key_skill']['tech_result'] ?></p>
                                    </div>


                                    <div class='div_margin'>
                                        <h3>Using your employability skills</h3>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>1) Describe the Situation you were in ? </h1>
                                        <p><?php echo $key_skill['key_skill']['skill_situation'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>2) Describe the Task you needed to accomplish ?</h1>
                                        <p><?php echo $key_skill['key_skill']['skill_accomp'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>3) Describe the Action you took ?</h1>
                                        <p><?php echo $key_skill['key_skill']['skill_describe'] ?></p>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>4) Describe the Result </h1>
                                        <p><?php echo $key_skill['key_skill']['skill_result'] ?></p>
                                    </div>                             

                                    <div style="border-bottom: 5px solid #000;"></div>

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
                                                    <tr>
                                                        <td colspan="2" style="padding: 0px 0px 2em 0px; border-top: 5px solid #000;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h5><center> Mission Statement<?php echo $i++; ?></center></h5></td>
                                                        <?php if($mission['mission_statement']['view_data'] == 'View/Print') { ?>
                                                        <td><button onclick='print_data("<?php echo $mission['mission_statement']['id'] ?>", "mission_statement")'>Print</button></td>
                                                        <?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <th>Accomplishment Statement</th>
                                                        <td><?php echo $mission['mission_statement']['accomp_statement'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Occupational Goal Statement</th>
                                                        <td><?php echo $mission['mission_statement']['goal_statement'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Personal Mission Statement</th>
                                                        <td><?php echo $mission['mission_statement']['mission'] ?></td>
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
                                <div class="repeat_border_div">
                                    <div>
                                        <h1>SWOT <?php echo $p++; ?>
                                            <?php if($swot['swot']['view_data'] == 'View/Print') { ?>
                                            <button class="pull-right" style="margin-right: 2em;" onclick='print_data("<?php echo $swot['swot']['id'] ?>", "swot")'>Print</button>
                                            <?php } ?>
                                        </h1>
                                    </div>
                                    <div class="div_margin">
                                        <h3>Strengths</h3>
                                    </div>
                                    <div>
                                        <h1>What are you good at naturally?</h1>
                                        <ol>
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
                                <table class="table_use_div word_div education_data">
                                    <tr>
                                        <th>Education </th>
                                        <?php if($education_data['education']['view_data'] == 'View/Print') { ?>
                                        <td><button onclick='print_data("<?php echo $education_data['education']['id'] ?>", "education")'>Print</button></td>
                                        <?php } ?>
                                    </tr>
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
                                        <td><button type="button"><a style="color: #fff;" href='dashboards/download?filename=<?php echo $education_data['education']['school_transcript']?>'>Download</a></button></td>
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
                                        <td><button type="button"><a style="color: #fff;" href='dashboards/download?filename=<?php echo $education_data['education']['award_upload']?>'>Download</a></button></td>
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
                                        <td><button type="button"><a style="color: #fff;" href='dashboards/download?filename=<?php echo $education_data['education']['degree_upload']?>'>Download</a></button></td>
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
                                        <td><button type="button"><a style="color: #fff;" href='dashboards/download?filename=<?php echo $education_data['education']['letter_upload']?>'>Download</a></button></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding: 0px 0px 2em 0px; border-bottom: 5px solid #000;"></td>
                                    </tr>
                                </table>    

                                <?php } ?>
                            </div>
                            <?php } ?>

                            <?php if(count($evidence_data) > 0) { ?>
                            <div id="evidence_skill" class="tab-pane">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'></h2>
                                        <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use">
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
                                            <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $view_evidence['evidence_skill']['upload_doc'] ?>">View</a></center></td>  
                                            <?php if($view_evidence['evidence_skill']['view_data'] == 'View/Print') { ?>
                                            <td><center><button onclick='print_data("<?php echo $view_evidence['evidence_skill']['id'] ?>", "evidence_skill")'>Print</button></center></td>  
                                            <?php } ?>
                                            </tr>                                 
                                            <?php } ?> 
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if(count($comp_data) > 0) { ?>
                            <div id="comp_skill" class="tab-pane">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'></h2>
                                        <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use">
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
                                            <td><center><button onclick='print_data("<?php echo $view_computer['computer_skill']['id'] ?>", "computer_skill")'>Print</button></center></td>  
                                            <?php } ?>
                                            </tr>                                 
                                            <?php } ?>                                         
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if(count($essen_data) > 0) { ?>
                            <div id="essential_skill" class="tab-pane fade">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'></h2>
                                        <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use">
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
                                                <td><center><button onclick='print_data("<?php echo $essential_skill['essential_skills']['id'] ?>", "essential_skills")'>Print</button></center></td>  
                                            <?php } ?>
                                            </tr>                                 
                                            <?php } ?>                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if((count($career_data) > 0) || (count($volunteer_data) > 0) || (count($course_data) > 0)) { ?>
                            <div id="career_act" class="tab-pane fade">
                                <ul class="nav nav-tabs new_proper">
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
                                                <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use">
                                                    <tbody>
                                                        <tr class="chron_div">                                                            
                                                            <th colspan="2"><center>Career Related Activity</center></th>                                        
                                                    </tr>
                                                    <?php foreach ($career_data as $career_act) { ?>
                                                    <tr class="chron_div_bottom">                                                      
                                                        <td><?php echo $career_act['career_activity']['related_act'] ?></td> 
                                                        <?php if($career_act['career_activity']['view_data'] == 'View/Print') { ?>
                                                        <td><center><button onclick='print_data("<?php echo $career_act['career_activity']['id'] ?>", "career_activity")'>Print</button></center></td>  
                                                        <?php } ?>
                                                    </tr>                                 
                                                    <?php } ?> 
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } if(count($volunteer_data) > 0) { ?>
                                    <div id="vol_work" class="tab-pane fade">
                                        <div class="form-group">
                                            <div class="form_color_use">

                                                <table class="table_use_div word_div">

                                                    <?php $i =1;  if(count($volunteer_data) > 0) {
                                                        foreach ($volunteer_data as $volunteer) { 
                                                    ?>
                                                    <tr>
                                                        <td style="padding: 0px 0px 2em 0px; border-top: 5px solid #000;" colspan="4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><h5><center>Volunteer Work <?php echo $i++; ?></center></h5></td>
                                                        <?php if($volunteer['volunteer_work']['view_data'] == 'View/Print') { ?>
                                                        <td colspan="2"><button onclick='print_data("<?php echo $volunteer['volunteer_work']['id'] ?>", "volunteer_work")'>Print</button></td>
                                                        <?php } ?>
                                                    </tr>
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
                                    <?php } if(count($course_data) > 0) { ?>
                                    <div id="sub_course" class="tab-pane fade">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                            <div class='first_div'>
                                                <h2 class='headeing_uwse'></h2>
                                                <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use">
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
                                                    <td><center><button onclick='print_data("<?php echo $course_added['course']['id'] ?>", "course")'>Print</button></center></td>  
                                                    <?php } ?>
                                                    </tr>                                 
                                                    <?php } ?>                                                     
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>                     
                    <?php echo $this->Element('dashboard/left_side') ?>

                    <!-- navigation start end-->


                    <div class="clearfix"></div>

                </div>
                <?php } else { ?>
                <div class="new_view" style="margin:2% 3% 2% 3%;">
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