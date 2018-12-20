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
		<?php echo $this->Html->css('css/responsive_use.css') ?>

        <style>
            .err {
                padding: 15px 15px;
                margin-bottom: 10px;
                color: #a94442;
                background-color: #f2dede;
                border-radius: 4px;
                border: 1px solid #ebccd1;
            }
            .table-striped tbody > tr:nth-of-type(2n) {
                background-color: #6586ef1f;
            }
            .strip_class_add {
                margin: 0 auto;
                width: 95%;
                height: 24px;
            }
            .progress-striped {
                background-color: #e2e0e0 !important;
            }
            .headeing_uwse{font-size: 16px; float: left; text-transform: none;}
            .essen_skill_div_update {font-size: 15px !important; padding: 12px !important;}
            .key_skill_button_div button{padding: 10px 15px 10px 15px !important; font-size: 15px !important;}
            .new_use_data1{margin-bottom: 2em; border: 2px solid #243e90;} 
            .new_use_data1 th{color: #c02430;}
            .new_use_data1 td{font-weight: bold;}
            table.new_use_padding.new_use_data1.data_profile tbody tr:first-child th:first-child {padding-top: 2em !important;}
            table.new_use_padding.new_use_data1.data_profile tbody tr:first-child td:nth-child(2) {padding-top: 2em !important;}
            table.new_use_padding.new_use_data1.data_profile tbody tr:last-child th:first-child {margin-bottom: 2em !important;}
            table.new_use_padding.new_use_data1.data_profile tbody tr:last-child td:nth-child(2) {margin-bottom: 2em !important;}
            .new_use_data1 td{padding: 2% 1% 2% 1% !important;}
            .new_use_data1 td:first-child{padding-top: 5% !important;}
            .new_use_data1 th{padding: 2% 1% 2% 4% !important;}      
            .delete_btn{float: right; margin-right: 1em;}
            .delete_btn_use{
                padding: 8px 11px;
                color: #fff;
                width: auto;
                background-color: #337ab7;
                border: 1px solid #2e6da4;
                border-radius: 4px;
                cursor: pointer;
            }
        </style>
        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    </head>
    <?php echo $this->Element('dashboard/top') ?>

    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>
    <div class="main-panel">


        <?php echo $this->Element('dashboard/header') ?>

        <button class="instruction_btn_use" id="instruction_user">Instructions</button>
        <div class="div_class_instruc">
            <p>Step 1: You can first add the information that you have added to career dashboard. Companies can view or print (you can authorize them to view or print as per your convenience) that.</p>
            <p>Step 2: By clicking on each button (Like resume, accomplishments etc.) you will see two buttons "Add to MyCD" and "Added to MyCD". You can add information for each section by clicking on "Add to MyCD" then select all the options that you want to add and click on "Add to MyCD" that is a blue color button for submitting the information.</p>
            <p>Step 3: You can also add verified & accepted references by clicking on DIY Reference button and follow the same procedure.</p>
            <p>Step 4: Now you have a complete database for company's to access and to know more about you. </p>
            <p>Step 5: You can create an access of MyCD for companies by clicking on "Create Access" button (Red color button on the right-hand side). That way you will invite them to view/print your information that you have added on MyCD.</p>
            <p>Step 6: You can also remove the access by clicking on "Invitation Sent" button (Red color button adjacent to create access).</p>
            <p>Step 7: Once companies will view any section of your MyCD, you will get that information in "Viewed me" menu.</p>
        </div>
        <!-- navigation start -->
        <div class="new_view" style="margin:2% 3% 2% 3%;">	
            <div class="col-lg-12 col-md-12  ">


                <input type="hidden" id="myUrl" value="<?php echo DOMAIN_NAME ?>">
                <?php foreach($view_msg as $msg_data) {
                    if($msg_data['industry_message']['status'] == '0') {
                        $status_data = TRUE;
                    }
                } ?>
                <ul class="nav nav-tabs new_proper">   
                    <?php if($progam_pay == 'starter') { ?>
                    <li class="active" id="view_mycareer"><a data-toggle="tab" href="#my_cd">Why My CD </a></li>
                    <li class="hide_class" id="resume_summary_data"><a data-toggle="tab" href="#summary_data">Resume Summary</a></li>
                    <li class="hide_class" id="resume_data"><a data-toggle="tab" href="#resume">Resume </a></li>
                    <li class="hide_class" id="referece_val"><a data-toggle="tab" href="#reference">DIY Reference </a></li>
                    <li class="hide_class" id="accom_data"><a data-toggle="tab" href="#accomp">Accomplishments</a></li>
                    <li class="hide_class" id="key_data"><a data-toggle="tab" href="#key">Key Skills </a></li>
                    <li class="hide_class" id="mission_data"><a data-toggle="tab" href="#mission">Mission Statement</a></li>
                    <li class="hide_class" id="education_data"><a data-toggle="tab" href="#education">Education</a></li>
                    <li class="hide_class" id="career_activity"><a data-toggle="tab" href="#career_related">Career Related Activity</a></li>
                    <li class="hide_class" id="summary_statement"><a data-toggle="tab" href="#resume_summary">Career Profile</a></li>
                    <!-- <li class="pull-right" style="margin-right: 10px;"><i class="fa fa-thumbs-down liked_icon"></i><span class="number_div"><?php echo $total_dislike[0][0]['count(like_career)']; ?></span></li> -->
                    <li class="pull-right" style="margin-right: 10px;"><i class="fa fa-thumbs-up liked_icon"></i><span class="number_div"><?php echo $total_like[0][0]['count(like_career)']; ?></span></li>
                    <li class="invite_data pull-right"><button class="invite_btn_use" id="invite_id">Create Access</button></li>
                    <li class="invite_data pull-right" onclick="readMsg(<?php echo $user_id; ?>)"><a data-toggle="tab" href="#message_send" class="invite_btn_use">Message<?php if($status_data == TRUE) { ?><span class="label label-default label_new_div" style="font-weight: bold !important;">New</span><?php } ?></a></li>
                    <?php } else if($progam_pay == 'advanced') { ?>
                    <li class="active" id="view_mycareer"><a data-toggle="tab" href="#my_cd">Why My CD </a></li>
                    <li class="hide_class" id="resume_summary_data"><a data-toggle="tab" href="#summary_data">Resume Summary</a></li>
                    <li class="hide_class" id="resume_data"><a data-toggle="tab" href="#resume">Resume </a></li>
                    <li class="hide_class" id="referece_val"><a data-toggle="tab" href="#reference">DIY Reference </a></li>
                    <li class="hide_class" id="accom_data"><a data-toggle="tab" href="#accomp">Accomplishments</a></li>
                    <li class="hide_class" id="key_data"><a data-toggle="tab" href="#key">Key Skills </a></li>
                    <li class="hide_class" id="education_data"><a data-toggle="tab" href="#education">Education</a></li>
                    <li class="hide_class" id="career_activity"><a data-toggle="tab" href="#career_related">Career Related Activity</a></li>
                    <li class="hide_class" id="essential_data"><a data-toggle="tab" href="#essential_skill">Essential Skill</a></li>
                    <li class="hide_class" id="summary_statement"><a data-toggle="tab" href="#resume_summary">Career Profile</a></li>
                    <!-- <li class="pull-right" style="margin-right: 10px;"><i class="fa fa-thumbs-down liked_icon"></i><span class="number_div"><?php echo $total_dislike[0][0]['count(like_career)']; ?></span></li> -->
                    <li class="pull-right" style="margin-right: 10px;"><i class="fa fa-thumbs-up liked_icon"></i><span class="number_div"><?php echo $total_like[0][0]['count(like_career)']; ?></span></li>
                    <li class="invite_data pull-right"><button class="invite_btn_use" id="invite_id">Create Access</button></li>
                    <li class="invite_data pull-right" onclick="readMsg(<?php echo $user_id; ?>)"><a data-toggle="tab" href="#message_send" class="invite_btn_use">Message<?php if($status_data == TRUE) { ?><span class="label label-default label_new_div" style="font-weight: bold !important;">New</span><?php } ?></a></li>
                    <?php } else if($progam_pay == 'access360' || $progam_pay == 'trail') { ?>
                    <li class="active" id="view_mycareer"><a data-toggle="tab" href="#my_cd">Why My CD </a></li>
                    <li class="hide_class" id="resume_summary_data"><a data-toggle="tab" href="#summary_data">Resume Summary</a></li>
                    <li class="hide_class" id="resume_data"><a data-toggle="tab" href="#resume">Resume </a></li>
                    <li class="hide_class" id="referece_val"><a data-toggle="tab" href="#reference">DIY Reference </a></li>
                    <li class="hide_class" id="accom_data"><a data-toggle="tab" href="#accomp">Accomplishments</a></li>
                    <li class="hide_class" id="key_data"><a data-toggle="tab" href="#key">Key Skills </a></li>
                    <li class="hide_class" id="mission_data"><a data-toggle="tab" href="#mission">Mission Statement</a></li>
                    <li class="hide_class" id="swot_data"><a data-toggle="tab" href="#swot">S.W.O.T Analysis</a></li>
                    <li class="hide_class" id="education_data"><a data-toggle="tab" href="#education">Education</a></li>
                    <li class="hide_class" id="career_activity"><a data-toggle="tab" href="#career_related">Career Related Activity</a></li>
                    <li class="hide_class" id="evidence_data"><a data-toggle="tab" href="#evidence_skill">Evidence of Skill</a></li>
                    <li class="hide_class" id="comp_data"><a data-toggle="tab" href="#comp_skill">Computer Skills</a></li>
                    <li class="hide_class" id="essential_data"><a data-toggle="tab" href="#essential_skill">Essential Skill</a></li>
                    <li class="hide_class" id="summary_statement"><a data-toggle="tab" href="#resume_summary">Career Profile</a></li>
                    <!-- <li class="pull-right" style="margin-right: 10px;"><i class="fa fa-thumbs-down liked_icon"></i><span class="number_div"><?php echo $total_dislike[0][0]['count(like_career)']; ?></span></li> -->
                    <li class="pull-right" style="margin-right: 10px;"><i class="fa fa-thumbs-up liked_icon"></i><span class="number_div"><?php echo $total_like[0][0]['count(like_career)']; ?></span></li>
                    <li class="invite_data pull-right"><button class="invite_btn_use" id="invite_id">Create Access</button></li>
                    <li class="invite_data pull-right"><a data-toggle="tab" href="#invitation_send" class="invite_btn_use">Invitation Sent</a></li>
                    <li class="invite_data pull-right" onclick="readMsg(<?php echo $user_id; ?>)"><a data-toggle="tab" href="#message_send" class="invite_btn_use">Message<?php if($status_data == TRUE) { ?><span class="label label-default label_new_div" style="font-weight: bold !important;">New</span><?php } ?></a></li>                   
                    <?php } ?>
                </ul>

                <div class="tab-content tabs_use">
                    <div id="my_cd" class="tab-pane fade active in">
                        <div id="dashboard" class="tab-pane active">
                            <div class="row new_row_use" style="padding-top: 5%;">
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
                            </div>
                        </div>
                    </div>

                    <div id="summary_data" class="tab-pane fade"> 
                        <ul class="nav nav-tabs new_proper">
                            <li style="display: none;"><a data-toggle="tab" href="#add_summary" id="add_data_sum">Add Resume Summary</a></li>
                            <li><a data-toggle="tab" href="#add_summary_data">Add Resume Summary</a></li>
                            <li><a data-toggle="tab" href="#view_summary_data">View Resume Summary</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="add_summary" class="tab-pane fade active in">
                                <div class="row new_row_use" style="padding-top: 5%;">
                                    <div class="container-fluid">
                                        <div class="row_use_what_career_dashbored" style="padding-top: 0px;">
                                            <p><span style="font-size: 19px;">What to Include in a Resume Summary Statement</span><br/><br/>
                                                This is often the first item read on a resume, so you want to get to the point: why should a company hire you? In about one to four sentences, highlight your most relevant strengths, skillset, and core competencies that are unique to you as a candidate. In particular, demonstrate how you will add value to the company. Have you saved money for a company in the past? Did you streamline an administrative process?<br><br/>
                                                Include skills and experiences that will impress the employer.<br/><br/>
                                                Be sure to tailor your resume summary to the specific job listing. Look at the listing, and try to incorporate keywords from the listing in your resume summary. This will help the employer see how you are a good fit for the job.<br/><br/>
                                                In a resume summary statement, avoid skills that are commonplace (for example, avoid mentioning Microsoft Office), or overused words (such as "multitasker" or “team player”). Try to use action words to demonstrate your achievements.<br/><br/>
                                                The summary statement should be approximately four to six lines and speak to your professional background only. Do not address any outstanding circumstances (employment gaps, change of career, personal experiences, etc.). A cover letter is an expanded version of the statement that will allow your personality to shine through.<br/><br/>
                                                In summary, you want to include the following elements in your statement:<br/>
                                            </p>
                                            <ul>
                                                <li>Core strengths and skill sets most relevant to the role</li>
                                                <li>Past relevant experience with key functions</li>
                                                <li>Notable accomplishments that you intend to repeat in the next role</li>
                                            </ul>
                                            <p><span style="font-size: 19px;">What Types of Skill Sets Are There?</span><br/><br/>
                                                There are several types of skill sets.<br><br/>
                                                For example, skill sets can be considered soft /hard.and transferable<br/><br/>
                                                Soft skills are interpersonal, or people, skills. They are difficult to quantify, and relate to a person’s personality and ability to work with others. Soft skills include communication, critical thinking, and conflict resolution, among others. <br/><br/>
                                                Hard skills are quantifiable and teachable; they include specific knowledge and abilities required for a job. Examples of hard skills include computer programming, accounting, mathematics, and data analysis. <br/><br/>
                                                Transferable skills can apply to many different career fields. These include soft skills like critical thinking and problem solving.<br/><br/>
                                                Study the list below to help you discover which skills you have.<br/><br/>
                                                You may have acquired them through jobs, school, apprenticeships, internships, formal and informal training, hobbies, and volunteer experiences. There are six broad categories: Basic, People, Management, Clerical, Research and Planning, and Computer and Technical Skills. This list does not include the hard skills that allow you to perform your particular job, although you may be able to transfer them between occupations too.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="add_summary_data" class="tab-pane fade">
                                <div class='form-group widt_form_under_tab row_use_what_career_dashbored'>
                                    <form method="post" enctype="multipart/form-data">
                                        <?php foreach ($view_resume_data as $resume_data) {
                                            $id = $resume_data['resume_summary']['id'];
                                            $summary = $resume_data['resume_summary']['resume_summary'];
                                        } ?>
                                        <input type="hidden" name="form_name" value="resume_summary_val">
                                        <input type="hidden" name="form_id" value="<?php echo $id; ?>">
                                        <h1>Resume Summary</h1>
                                        <div class='form-group form_edit'>
                                            <p>
                                                <strong>Summary</strong><br/>
                                                <textarea name="summary_name" rows="5"><?php echo $summary; ?></textarea><br/>
                                                <button type="submit">Save</button>
                                            </p>    
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div id="view_summary_data" class="tab-pane fade">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'></h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Resume Summary</center></th>                                       
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_resume_data) > 0) { 
                                               foreach ($view_resume_data as $summary_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $summary_data['resume_summary']['resume_summary'] ?></center></td>                                          
                                                <td><center><button class="essen_skill_div_delete" onclick='delete_resume_summary("<?php echo $summary_data['resume_summary']['id'] ?>")'>Delete</button></center></td>
                                                </tr>                                 
                                            <?php } ?> 
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="resume" class="tab-pane fade"> 
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#resume_add">Add To MyCD</a></li>
                            <li><a data-toggle="tab" href="#resume_added">Added To MyCD</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="resume_add" class="tab-pane fade active in">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h4 class='headeing_uwse'>Check the items you want to add then click on the blue button "Add to My CD button"</h4>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center><input type="checkbox" id="check_all_resume"></center></th> 
                                                <th><center>Name Of Resume</center></th>                                       
                                                <th><center>Date Created</center></th> 
                                                <th><center>Resume Type</center></th>
                                                <th><center>View</center></th>
                                                </tr>
                                            <?php if(count($resume_chron_data) > 0) { 
                                               foreach ($resume_chron_data as $chron_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><input type="checkbox" id="check_all_resume" name="resume_id[]" class="checkbox_resume" value="<?php echo $chron_data['upload_resume']['resume_id'] ?>"></center></td>
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
                                                </tr>                                 
                                            <?php } ?> 
                                                <tr class="chron_div_bottom">
                                                    <td colspan="6"><button class="pull-right essen_skill_div_update" type="button" id="add_resume">Add to My CD</button></td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr>
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="resume_added" class="tab-pane fade">
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
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($resume_chron_added_data) > 0) { 
                                               foreach ($resume_chron_added_data as $chron_data) { 
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
                                                <td><center><button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $chron_data['upload_resume']['resume_id'] ?>", "upload_resume")'>Delete</button></center></td>
                                                </tr>                                 
                                            <?php } ?> 
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="reference" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#ref_add">Add To MyCD</a></li>
                            <li><a data-toggle="tab" href="#ref_added">Added To MyCD</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="ref_add" class="tab-pane fade active in">
                                <?php if(count($view_ref) > 0) { ?>
                                <div class="key_skill_button_div">
                                    <h2 style="font-size: 15px; padding-top: 15px; padding-left: 15px;">Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                    <button id="add_reference">Add to My CD</button>                                           
                                </div>
                                <?php } ?>
                                <div class='work_div_para_scroll'>
                                <?php if(count($view_ref) > 0) {
                                    foreach ($view_ref as $ref_data) {
                                        $ref_name = explode('_',$ref_data['verify_reference']['reference_name'])
                                ?>
                                    <div class="repeat_border_div">
                                        <div>
                                            <h1><input type='checkbox' class="checkbox_reference" value="<?php echo $ref_data['verify_reference']['id'] ?>">&nbsp;&nbsp;&nbsp;<?php echo ucfirst($ref_name[0]). " Verification"; ?>
                                            </h1>
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

                                <?php } } else { ?>
                                    <div>
                                        <p><center><b>No Records Found</b></center></p>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>

                            <div id="ref_added" class="tab-pane fade">
                                <?php if(count($view_ref_added) > 0) {
                                    foreach ($view_ref_added as $ref_data) {
                                        $ref_name = explode('_',$ref_data['verify_reference']['reference_name'])
                                ?>
                                <div class="repeat_border_div">
                                    <div>
                                        <h3><?php echo ucfirst($ref_name[0]). " Verification"; ?>
                                            <button style="margin-right: 2em;" class="essen_skill_div_delete1 pull-right" onclick='delete_mycd("<?php echo $ref_data['verify_reference']['id'] ?>", "verify_reference")'>Delete</button>
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

                                <?php } } else { ?>
                                <div>
                                    <p><center><b>No Records Found</b></center></p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div id="accomp" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#accomp_add">Add To MyCD</a></li>
                            <li><a data-toggle="tab" href="#accomp_added">Added To MyCD</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="accomp_add" class="tab-pane fade active in">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'>Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center><input type="checkbox" id="check_all_accomp"></center></th> 
                                                <th><center>Company Name</center></th>                                       
                                                <th><center>Date</center></th> 
                                                </tr>
                                            <?php if(count($accomp_data) > 0) { 
                                               foreach ($accomp_data as $accomp) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><input type="checkbox" id="check_all_accomp" name="accomp_id[]" class="checkbox_accomp" value="<?php echo $accomp['acomplishment']['id'] ?>"></center></td>
                                                <td><center><?php echo $accomp['acomplishment']['company_name'] ?></center></td>
                                                <td><center><?php if($accomp['acomplishment']['sub_date']) { echo date('d-M-Y', strtotime($accomp['acomplishment']['sub_date'])); } else { echo ""; } ?></center></td>                                                               
                                                </tr>                                 
                                            <?php } ?> 
                                                <tr>
                                                    <td colspan="6"><button class="pull-right essen_skill_div_update" type="button" id="add_accomp">Add to My CD</button></td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="accomp_added" class="tab-pane fade">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'></h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Company Name</center></th>                                       
                                                <th><center>Date</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($accomp_added_data) > 0) { 
                                               foreach ($accomp_added_data as $accomp) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $accomp['acomplishment']['company_name'] ?></center></td>
                                                <td><center><?php if($accomp['acomplishment']['sub_date']) { echo date('d-M-Y', strtotime($accomp['acomplishment']['sub_date'])); } else { echo ""; } ?></center></td>                                                               
                                                <td><center><button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $accomp['acomplishment']['id'] ?>", "acomplishment")'>Delete</button></center></td>
                                                </tr>                                 
                                            <?php } ?> 
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="key" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#key_add">Add To MyCD</a></li>
                            <li><a data-toggle="tab" href="#key_added">Added To MyCD</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="key_add" class="tab-pane fade active in">
                                <?php if(count($key_skill_data) > 0) { ?>
                                <div class="key_skill_button_div">
                                    <h2 style="font-size: 15px; padding-top: 15px; padding-left: 15px;">Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                    <button id="add_key">Add to My CD</button>
                                </div>
                                <?php } ?>
                                <div class='work_div_para_scroll'>
                                <?php $i=1; if(count($key_skill_data) > 0) {
                                    foreach ($key_skill_data as $key_skill) {
                                ?>

                                    <div class="repeat_border_div">
                                        <div>
                                            <h1><input type='checkbox' class="checkbox_key" value="<?php echo $key_skill['key_skill']['id'] ?>">&nbsp;&nbsp;&nbsp;Key Skill <?php echo $i++; ?>

                                            </h1>
                                        </div>
                                        <table class="table_use_div word_div table-responsive">
                                            <tr><td colspan="2" style="border-top: 5px solid #000;"></td></tr>                                               
                                            <tr>
                                                <th>Soft Skills</th>
                                                <td colspan="3"><?php echo $key_skill['key_skill']['soft_skill_list'] ?></td>
                                            </tr>

                                                <?php $soft_key_skill = unserialize($key_skill['key_skill']['soft_key_skill']);
                                                while ($fruit_name = current($soft_key_skill)) {
                                                ?>
                                            <tr>
                                                <th>Skill description</th>
                                                <td><?= key($soft_key_skill) ?></td>                                                                                                                                                       
                                            </tr>
                                            <tr>
                                                <th>Problem</th>
                                                <td><?= $soft_key_skill[key($soft_key_skill)]['problem'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Action</th>
                                                <td><?= $soft_key_skill[key($soft_key_skill)]['action'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Result</th>
                                                <td><?= $soft_key_skill[key($soft_key_skill)]['result'] ?></td> 
                                            </tr>
                                                <?php
                                                next($soft_key_skill);
                                                }
                                                ?>
                                        </table>                         

                                        <div style="border-bottom: 5px solid #000;"></div>

                                    </div>
                                    <?php } } else { ?>
                                    <div>
                                        <p><center><b>No Records Found</b></center></p>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>

                            <div id="key_added" class="tab-pane fade">
                                <div class='work_div_para_scroll'>
                                <?php $i=1; if(count($key_skill_added_data) > 0) {
                                    foreach ($key_skill_added_data as $key_skill) {
                                ?>

                                    <div class="repeat_border_div">
                                        <div>
                                            <h1>Key Skill <?php echo $i++; ?>
                                                <span class="swot_data_val">
                                                    <button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $key_skill['key_skill']['id'] ?>", "key_skill")'>Delete</button>
                                                </span>
                                            </h1>
                                        </div>
                                        <table class="table_use_div word_div table-responsive">
                                            <tr><td colspan="2" style="border-top: 5px solid #000;"></td></tr>                                               
                                            <tr>
                                                <th>Soft Skills</th>
                                                <td colspan="3"><?php echo $key_skill['key_skill']['soft_skill_list'] ?></td>
                                            </tr>

                                                <?php $soft_key_skill = unserialize($key_skill['key_skill']['soft_key_skill']);
                                                while ($fruit_name = current($soft_key_skill)) {
                                                ?>
                                            <tr>
                                                <th>Skill description</th>
                                                <td><?= key($soft_key_skill) ?></td>                                                                                                                                                       
                                            </tr>
                                            <tr>
                                                <th>Problem</th>
                                                <td><?= $soft_key_skill[key($soft_key_skill)]['problem'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Action</th>
                                                <td><?= $soft_key_skill[key($soft_key_skill)]['action'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Result</th>
                                                <td><?= $soft_key_skill[key($soft_key_skill)]['result'] ?></td> 
                                            </tr>
                                                <?php
                                                next($soft_key_skill);
                                                }
                                                ?>
                                        </table>                            

                                        <div style="border-bottom: 5px solid #000;"></div>

                                    </div>
                                    <?php } } else { ?>
                                    <div>
                                        <p><center><b>No Records Found</b></center></p>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="essential_skill" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#essential_add">Add To MyCD</a></li>
                            <li><a data-toggle="tab" href="#essential_added">Added To MyCD</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="essential_add" class="tab-pane fade active in">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'>Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center><input type="checkbox" id="check_all_essential"></center></th> 
                                                <th><center>Name of Skill</center></th>                                       
                                                <th><center>Average</center></th> 
                                                </tr>
                                            <?php if(count($essentail_skill_data) > 0) { 
                                               foreach ($essentail_skill_data as $essential_skill) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><input type="checkbox" id="check_all_essential" name="essential_id[]" class="checkbox_essential" value="<?php echo $essential_skill['essential_skills']['id'] ?>"></center></td>
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
                                                </tr>                                 
                                            <?php } ?> 
                                                <tr>
                                                    <td colspan="6"><button class="pull-right essen_skill_div_update" type="button" id="add_essentail">Add to My CD</button></td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="essential_added" class="tab-pane fade">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                <div class='first_div'>
                                    <h2 class='headeing_uwse'></h2>
                                    <div class="table">
                                        <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                            <tbody>
                                                <tr class="chron_div">
                                                    <th><center>Name of Skill</center></th>                                       
                                            <th><center>Average</center></th>
                                            <th><center>Delete</center></th>
                                            </tr>
                                            <?php if(count($essentail_skill_added_data) > 0) { 
                                               foreach ($essentail_skill_added_data as $essential_skill) { 
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
                                                <td><button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $essential_skill['essential_skills']['id'] ?>", "essential_skills")'>Delete</button></td>
                                            </tr>                                 
                                            <?php } ?> 
                                            <?php } else { ?>
                                            <tr class="chron_div_bottom">
                                                <td colspan="10"><b><center>No Record Found</center></b></td>
                                            </tr>
                                            <?php } ?>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="mission" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#mission_add">Add To MyCD</a></li>
                            <li><a data-toggle="tab" href="#mission_added">Added To MyCD</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="mission_add" class="tab-pane fade active in">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'>Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center><input type="checkbox" id="check_all_mission"></center></th> 
                                                <th><center>Accomplishment</center></th>                                       
                                                <th><center>Occupational</center></th>
                                                <th><center>Personal Mission</center></th>  
                                                </tr>
                                            <?php if(count($mission_data) > 0) { 
                                               foreach ($mission_data as $mission) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><input type="checkbox" id="check_all_mission" name="mission_id[]" class="checkbox_mission" value="<?php echo $mission['mission_statement']['id'] ?>"></center></td>
                                                <td><?php echo $mission['mission_statement']['accomp_statement'] ?></td>
                                                <td><?php echo $mission['mission_statement']['goal_statement'] ?></td>  
                                                <td><?php echo $mission['mission_statement']['mission'] ?></td>  
                                                </tr>                                 
                                            <?php } ?> 
                                                <tr>
                                                    <td colspan="6"><button class="pull-right essen_skill_div_update" type="button" id="add_mission">Add to My CD</button></td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="mission_added" class="tab-pane fade">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'></h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Accomplishment</center></th>                                       
                                                <th><center>Occupational</center></th>
                                                <th><center>Personal Mission</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($mission_added_data) > 0) { 
                                               foreach ($mission_added_data as $mission) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><?php echo $mission['mission_statement']['accomp_statement'] ?></td>
                                                    <td><?php echo $mission['mission_statement']['goal_statement'] ?></td>  
                                                    <td><?php echo $mission['mission_statement']['mission'] ?></td>  
                                                    <td><button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $mission['mission_statement']['id'] ?>", "mission_statement")'>Delete</button></td>
                                                </tr>                                 
                                            <?php } ?> 
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="swot" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#swot_add">Add To MyCD</a></li>
                            <li><a data-toggle="tab" href="#swot_added">Added To MyCD</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>

                            <div id="swot_add" class="tab-pane fade active in">
                                <?php if(count($view_swot_data) > 0) { ?>
                                <div class="key_skill_button_div">
                                    <h2 style="font-size: 15px; padding-top: 15px; padding-left: 15px;">Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                    <button id="add_swot">Add to My CD</button>
                                </div>
                                <?php } ?>
                                <div class='work_div_para_scroll'>
                                <?php if(count($view_swot_data) > 0) {
                                    foreach ($view_swot_data as $swot) {
                                ?>
                                    <div class="repeat_border_div">
                                        <div>
                                            <h1><input type='checkbox' class="checkbox_swot" value="<?php echo $swot['swot']['id'] ?>">&nbsp;&nbsp;&nbsp;SWOT 
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
                                    </div>    

                                <?php } } else { ?>
                                    <div>
                                        <p><center><b>No Records Found</b></center></p>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>

                            <div id="swot_added" class="tab-pane fade">
                                <?php if(count($view_swot_added_data) > 0) {
                                    foreach ($view_swot_added_data as $swot) {
                                ?>
                                <div class="repeat_border_div">
                                    <div>
                                        <h1>SWOT
                                            <span class="swot_data_val">
                                                <button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $swot['swot']['id'] ?>", "swot")'>Delete</button>
                                            </span>
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
                                </div>    

                                <?php } } else { ?>
                                <div>
                                    <p><center><b>No Records Found</b></center></p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div id="education" class="tab-pane">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#education_add">Add To MyCD</a></li>
                            <li><a data-toggle="tab" href="#education_added">Added To MyCD</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="education_add" class="tab-pane fade active in">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'>Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive ">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center><input type="checkbox" id="check_all_education"></center></th> 
                                                <th><center>Highest Grade</center></th>                                       
                                                <th><center>Year Completed</center></th>
                                                <th><center>School Name</center></th>
                                                <th><center>Grades Attended</center></th>
                                                </tr>
                                            <?php if(count($view_education_data) > 0) { 
                                               foreach ($view_education_data as $view_education) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><input type="checkbox" id="check_all_education" name="education_id[]" class="checkbox_education" value="<?php echo $view_education['education']['id'] ?>"></center></td>
                                                <td><?php echo $view_education['education']['grade'] ?></td>
                                                <td><?php echo $view_education['education']['complete_year'] ?></td>  
                                                <td><?php echo $view_education['education']['secondary_school'] ?></td>  
                                                <td><?php echo $view_education['education']['grade_attend'] ?></td>  
                                                </tr>                                 
                                            <?php } ?> 
                                                <tr>
                                                    <td colspan="6"><button class="pull-right essen_skill_div_update" type="button" id="add_education">Add to My CD</button></td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="education_added" class="tab-pane fade">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'></h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Highest Grade</center></th>                                       
                                                <th><center>Year Completed</center></th>
                                                <th><center>School Name</center></th>
                                                <th><center>Grades Attended</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_education_added_data) > 0) { 
                                               foreach ($view_education_added_data as $view_education) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><?php echo $view_education['education']['grade'] ?></td>
                                                    <td><?php echo $view_education['education']['complete_year'] ?></td>  
                                                    <td><?php echo $view_education['education']['secondary_school'] ?></td>  
                                                    <td><?php echo $view_education['education']['grade_attend'] ?></td> 
                                                    <td><button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $view_education['education']['id'] ?>", "education")'>Delete</button></td>
                                                </tr>                                 
                                            <?php } ?> 
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="career_related" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">                           
                            <li class='active'><a data-toggle="tab" href="#sub_career" id="career_app" aria-expanded="true">Career Related Activities</a></li>
                            <li><a href="#vol_work" id="vol_app" data-toggle="tab" aria-expanded="true">Volunteer Work</a></li>
                            <li><a href="#sub_course" id="course_app" data-toggle="tab" aria-expanded="true">Courses</a></li>                                                        
                        </ul>
                        <div class="tab-content tabs_use">
                            <div id="sub_career" class="tab-pane fade active in">
                                <ul class="nav nav-tabs new_proper">
                                    <li class="active"><a data-toggle="tab" href="#career_act_add">Add To MyCD</a></li>
                                    <li><a data-toggle="tab" href="#career_act_added">Added To MyCD</a></li>                           
                                </ul>
                                <div class='tab-content tabs_use'>
                                    <div id="career_act_add" class="tab-pane fade active in">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                            <div class='first_div'>
                                                <h2 class='headeing_uwse'>Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                        <tbody>
                                                            <tr class="chron_div">
                                                                <th><center><input type="checkbox" id="check_all_career_act"></center></th> 
                                                        <th><center>Career Related Activity</center></th>                                        
                                                        </tr>
                                                    <?php if(count($view_career_activity) > 0) { 
                                                        foreach ($view_career_activity as $career_act) { 
                                                    ?>
                                                        <tr class="chron_div_bottom">
                                                            <td><center><input type="checkbox" id="check_all_career_act" name="accomp_id[]" class="checkbox_career_act" value="<?php echo $career_act['career_activity']['id'] ?>"></center></td>
                                                        <td><?php echo $career_act['career_activity']['related_act'] ?></td>                                                   
                                                        </tr>                                 
                                                    <?php } ?> 
                                                        <tr>
                                                            <td colspan="6"><button class="pull-right essen_skill_div_update" type="button" id="add_career_act">Add to My CD</button></td>
                                                        </tr>
                                                    <?php } else { ?>
                                                        <tr class="chron_div_bottom">
                                                            <td colspan="10"><b><center>No Record Found</center></b></td>
                                                        </tr>
                                                    <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="career_act_added" class="tab-pane fade">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                            <div class='first_div'>
                                                <h2 class='headeing_uwse'></h2>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                        <tbody>
                                                            <tr class="chron_div">

                                                                <th><center>Career Related Activity</center></th> 
                                                        <th><center>Delete</center></th>
                                                        </tr>
                                                    <?php if(count($view_career_activity_added) > 0) { 
                                                        foreach ($view_career_activity_added as $career_act_added) { 
                                                    ?>
                                                        <tr class="chron_div_bottom">                                                        
                                                            <td><?php echo $career_act_added['career_activity']['related_act'] ?></td>                                                   
                                                            <td><button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $career_act_added['career_activity']['id'] ?>", "career_activity")'>Delete</button></td>
                                                        </tr>                                 
                                                    <?php } ?> 
                                                    <?php } else { ?>
                                                        <tr class="chron_div_bottom">
                                                            <td colspan="10"><b><center>No Record Found</center></b></td>
                                                        </tr>
                                                    <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="vol_work" class="tab-pane fade">
                                <ul class="nav nav-tabs new_proper">
                                    <li class="active"><a data-toggle="tab" href="#volunteer_add">Add To MyCD</a></li>
                                    <li><a data-toggle="tab" href="#volunteer_added">Added To MyCD</a></li>                           
                                </ul>
                                <div class='tab-content tabs_use'>
                                    <div id="volunteer_add" class="tab-pane fade active in">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                            <div class='first_div'>
                                                <h2 class='headeing_uwse'>Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                        <tbody>
                                                            <tr class="chron_div">
                                                                <th><center><input type="checkbox" id="check_all_volunteer"></center></th> 
                                                        <th><center>Name</center></th>
                                                        <th><center>Address</center></th>
                                                        <th><center>Telephone</center></th>
                                                        <th><center>Volunteer Job Title</center></th>
                                                        <th><center>Date</center></th>
                                                        <th><center>Skills and Knowledge</center></th>
                                                        <th><center>View</center></th>
                                                        </tr>
                                                    <?php if(count($view_vol_work) > 0) { 
                                                        foreach ($view_vol_work as $vol_work) { 
                                                    ?>
                                                        <tr class="chron_div_bottom">
                                                            <td><center><input type="checkbox" id="check_all_volunteer" name="accomp_id[]" class="checkbox_volunteer" value="<?php echo $vol_work['volunteer_work']['id'] ?>"></center></td>
                                                        <td><center><?php echo $vol_work['volunteer_work']['name'] ?></center></td>  
                                                        <td><center><?php echo $vol_work['volunteer_work']['address'] ?></center></td>
                                                        <td><center><?php echo $vol_work['volunteer_work']['telephone'] ?></center></td>
                                                        <td><center><?php echo $vol_work['volunteer_work']['job_title'] ?></center></td>
                                                        <td><center><?php echo $vol_work['volunteer_work']['date'] ?></center></td>
                                                        <td><center><?php echo $vol_work['volunteer_work']['desc_skill'] ?></center></td>
                                                        <td><center><button onclick='view_monthly_record("<?php echo $vol_work['volunteer_work']['id'] ?>")'>View</button></center></td>
                                                        </tr>                                 
                                                    <?php } ?> 
                                                        <tr>
                                                            <td colspan="8"><button class="pull-right essen_skill_div_update" type="button" id="add_vol_work">Add to My CD</button></td>
                                                        </tr>
                                                    <?php } else { ?>
                                                        <tr class="chron_div_bottom">
                                                            <td colspan="10"><b><center>No Record Found</center></b></td>
                                                        </tr>
                                                    <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="volunteer_added" class="tab-pane fade">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                            <div class='first_div'>
                                                <h2 class='headeing_uwse'></h2>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                        <tbody>
                                                            <tr class="chron_div">

                                                                <th><center>Name</center></th>
                                                        <th><center>Address</center></th>
                                                        <th><center>Telephone</center></th>
                                                        <th><center>Volunteer Job Title</center></th>
                                                        <th><center>Date</center></th>
                                                        <th><center>Skills and Knowledge</center></th>
                                                        <th><center>View</center></th>
                                                        <th><center>Delete</center></th>
                                                        </tr>
                                                    <?php if(count($view_vol_work_added) > 0) { 
                                                        foreach ($view_vol_work_added as $vol_work_added) { 
                                                    ?>
                                                        <tr class="chron_div_bottom">                                                        
                                                            <td><?php echo $vol_work_added['volunteer_work']['name'] ?></td>  
                                                            <td><?php echo $vol_work_added['volunteer_work']['address'] ?></td>  
                                                            <td><?php echo $vol_work_added['volunteer_work']['telephone'] ?></td>  
                                                            <td><?php echo $vol_work_added['volunteer_work']['job_title'] ?></td>
                                                            <td><?php echo $vol_work_added['volunteer_work']['date'] ?></td>  
                                                            <td><?php echo $vol_work_added['volunteer_work']['desc_skill'] ?></td>  
                                                            <td><center><button onclick='view_monthly_record("<?php echo $vol_work_added['volunteer_work']['id'] ?>")'>View</button></center></td>
                                                        <td><button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $vol_work_added['volunteer_work']['id'] ?>", "volunteer_work")'>Delete</button></td>
                                                        </tr>                                 
                                                    <?php } ?> 
                                                    <?php } else { ?>
                                                        <tr class="chron_div_bottom">
                                                            <td colspan="10"><b><center>No Record Found</center></b></td>
                                                        </tr>
                                                    <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="sub_course" class="tab-pane fade">
                                <ul class="nav nav-tabs new_proper">
                                    <li class="active"><a data-toggle="tab" href="#course_add">Add To MyCD</a></li>
                                    <li><a data-toggle="tab" href="#course_added">Added To MyCD</a></li>                           
                                </ul>
                                <div class='tab-content tabs_use'>
                                    <div id="course_add" class="tab-pane fade active in">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                            <div class='first_div'>
                                                <h2 class='headeing_uwse'>Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                        <tbody>
                                                            <tr class="chron_div">
                                                                <th><center><input type="checkbox" id="check_all_course"></center></th> 
                                                        <th><center>Workshop</center></th>
                                                        <th><center>Sponsored By</center></th>
                                                        <th><center>Date</center></th>
                                                        <th><center>Total Hours</center></th>
                                                        <th><center>Instructor</center></th>
                                                        <th><center>Title</center></th>
                                                        <th><center>Course Description</center></th>
                                                        </tr>
                                                    <?php if(count($view_course) > 0) { 
                                                        foreach ($view_course as $course) { 
                                                    ?>
                                                        <tr class="chron_div_bottom">
                                                            <td><center><input type="checkbox" id="check_all_course" name="accomp_id[]" class="checkbox_course" value="<?php echo $course['course']['id'] ?>"></center></td> 
                                                        <td><center><?php echo $course['course']['workshop'] ?></center></td>
                                                        <td><center><?php echo $course['course']['sponsor'] ?></center></td>
                                                        <td><center><?php echo $course['course']['date'] ?></center></td>
                                                        <td><center><?php echo $course['course']['total_hrs'] ?></center></td>
                                                        <td><center><?php echo $course['course']['instructor'] ?></center></td>
                                                        <td><center><?php echo $course['course']['title'] ?></center></td>
                                                        <td><center><?php echo $course['course']['course_desc'] ?></center></td>
                                                        </tr>                                 
                                                    <?php } ?> 
                                                        <tr>
                                                            <td colspan="8"><button class="pull-right essen_skill_div_update" type="button" id="add_course">Add to My CD</button></td>
                                                        </tr>
                                                    <?php } else { ?>
                                                        <tr class="chron_div_bottom">
                                                            <td colspan="10"><b><center>No Record Found</center></b></td>
                                                        </tr>
                                                    <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="course_added" class="tab-pane fade">
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
                                                        <th><center>Delete</center></th>
                                                        </tr>
                                                    <?php if(count($view_course_added) > 0) { 
                                                        foreach ($view_course_added as $course_added) { 
                                                    ?>
                                                        <tr class="chron_div_bottom">                                                        
                                                            <td><center><?php echo $course_added['course']['workshop'] ?></center></td>
                                                        <td><center><?php echo $course_added['course']['sponsor'] ?></center></td>
                                                        <td><center><?php echo $course_added['course']['date'] ?></center></td>
                                                        <td><center><?php echo $course_added['course']['total_hrs'] ?></center></td>
                                                        <td><center><?php echo $course_added['course']['instructor'] ?></center></td>
                                                        <td><center><?php echo $course_added['course']['title'] ?></center></td>
                                                        <td><center><?php echo $course_added['course']['course_desc'] ?></center></td>                                                      
                                                        <td><button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $course_added['course']['id'] ?>", "course")'>Delete</button></td>
                                                        </tr>                                 
                                                    <?php } ?> 
                                                    <?php } else { ?>
                                                        <tr class="chron_div_bottom">
                                                            <td colspan="10"><b><center>No Record Found</center></b></td>
                                                        </tr>
                                                    <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="evidence_skill" class="tab-pane">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#evidence_add">Add To MyCD</a></li>
                            <li><a data-toggle="tab" href="#evidence_added">Added To MyCD</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="evidence_add" class="tab-pane fade active in">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'>Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center><input type="checkbox" id="check_all_evidence"></center></th> 
                                                <th><center>Name of Document</center></th>                                       
                                                <th><center>Created On</center></th>
                                                <th><center>Document Type</center></th>
                                                <th><center>View Document</center></th>
                                                </tr>
                                            <?php if(count($view_evidence_data) > 0) { 
                                               foreach ($view_evidence_data as $view_evidence) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><input type="checkbox" id="check_all_evidence" name="evidence_id[]" class="checkbox_evidence" value="<?php echo $view_evidence['evidence_skill']['id'] ?>"></center></td>
                                                <td><center><?php echo $view_evidence['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php echo $view_evidence['evidence_skill']['date'] ?></center></td>  
                                                <td><center><?php echo $view_evidence['evidence_skill']['evidence_type'] ?></center></td>  
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $view_evidence['evidence_skill']['upload_doc'] ?>">View</a></center></td>  
                                                </tr>                                 
                                            <?php } ?> 
                                                <tr>
                                                    <td colspan="6"><button class="pull-right essen_skill_div_update" type="button" id="add_evidence">Add to My CD</button></td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="evidence_added" class="tab-pane fade">
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
                                                <th><center>View Document</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_evidence_added_data) > 0) { 
                                               foreach ($view_evidence_added_data as $view_evidence) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $view_evidence['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php echo $view_evidence['evidence_skill']['date'] ?></center></td>  
                                                <td><center><?php echo $view_evidence['evidence_skill']['evidence_type'] ?></center></td>  
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $view_evidence['evidence_skill']['upload_doc'] ?>">View</a></center></td>  
                                                <td><center><button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $view_evidence['evidence_skill']['id'] ?>", "evidence_skill")'>Delete</button></center></td>
                                                </tr>                                 
                                            <?php } ?> 
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="comp_skill" class="tab-pane">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#comp_add">Add To MyCD</a></li>
                            <li><a data-toggle="tab" href="#comp_added">Added To MyCD</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="comp_add" class="tab-pane fade active in">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'>Check the items you want to add then click on the blue button "Add to My CD button"</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center><input type="checkbox" id="check_all_computer"></center></th> 
                                                <th><center>List of Computer Skill</center></th>                                       
                                                <th><center>Level of Computer Skill</center></th>
                                                <th><center>Level of Computer Skill Chart</center></th>
                                                </tr>
                                            <?php if(count($view_computer_data) > 0) { 
                                               foreach ($view_computer_data as $view_computer) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><input type="checkbox" id="check_all_computer" name="computer_id[]" class="checkbox_computer" value="<?php echo $view_computer['computer_skill']['id'] ?>"></center></td>
                                                <td><center><?php echo $view_computer['computer_skill']['skill'] ?></center></td>
                                                <td><center><?php echo $view_computer['computer_skill']['skill_level'] ?></center></td>                                      
                                                <td>
                                                    <div class="progress progress-striped"> 
                                                        <?php if($view_computer['computer_skill']['skill_level'] == 'Basic (1 to 3 years)') { ?>
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">25&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                        </div>
                                                        <?php } if($view_computer['computer_skill']['skill_level'] == 'Intermediate (3 to 6 years)') { ?>
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">50&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                        </div>
                                                        <?php } if($view_computer['computer_skill']['skill_level'] == 'Advanced (6 to 10 years)') { ?>
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">75&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                        </div>
                                                        <?php } if($view_computer['computer_skill']['skill_level'] == 'Professional (10 PLUS years)') { ?>
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">100&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </td>
                                                </tr>                                 
                                            <?php } ?> 
                                                <tr>
                                                    <td colspan="6"><button class="pull-right essen_skill_div_update" type="button" id="add_computer">Add to My CD</button></td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="comp_added" class="tab-pane fade">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'></h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">                                                   
                                                        <th><center>List of Computer Skill</center></th>                                       
                                                <th><center>Level of Computer Skill</center></th>
                                                <th><center>Level of Computer Skill Chart</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_computer_added_data) > 0) { 
                                               foreach ($view_computer_added_data as $view_computer) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $view_computer['computer_skill']['skill'] ?></center></td>
                                                <td><center><?php echo $view_computer['computer_skill']['skill_level'] ?></center></td>                                      
                                                <td>
                                                    <div class="progress progress-striped"> 
                                                        <?php if($view_computer['computer_skill']['skill_level'] == 'Basic (1 to 3 years)') { ?>
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">25&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                        </div>
                                                        <?php } if($view_computer['computer_skill']['skill_level'] == 'Intermediate (3 to 6 years)') { ?>
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">50&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                        </div>
                                                        <?php } if($view_computer['computer_skill']['skill_level'] == 'Advanced (6 to 10 years)') { ?>
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">75&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                        </div>
                                                        <?php } if($view_computer['computer_skill']['skill_level'] == 'Professional (10 PLUS years)') { ?>
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">100&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </td>
                                                <td><center><button class="essen_skill_div_delete" onclick='delete_mycd("<?php echo $view_computer['computer_skill']['id'] ?>", "computer_skill")'>Delete</button></center></td>
                                                </tr>                                 
                                            <?php } ?> 
                                            <?php } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="invitation_send" class="tab-pane fade">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                            <div class='first_div'>
                                <h2 class='headeing_uwse'></h2>
                                <div class="table">
                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                        <tbody>
                                            <tr class="chron_div">
                                                <th><center><input type="checkbox" id="check_all_invitation"></center></th> 
                                        <th><center>MCD Number</center></th>                                       
                                        <th><center>Email</center></th> 
                                        <th><center>Password</center></th> 
                                        <th><center>Company Name</center></th> 
                                        </tr>
                                    <?php if(count($sent_invitation) > 0) { 
                                        foreach ($sent_invitation as $invite) { 
                                    ?>
                                        <tr class="chron_div_bottom">
                                            <td><center><input type="checkbox" id="check_all_invitation" name="invite_id[]" class="checkbox_invite_data" value="<?php echo $invite['view_me']['id'] ?>"></center></td>
                                        <td><?php echo $invite['view_me']['mcd'] ?></td>
                                        <td><?php echo $invite['view_me']['email'] ?></td>
                                        <td><?php echo $invite['view_me']['password'] ?></td>
                                        <td><?php echo $invite['view_me']['company_name'] ?></td>
                                        </tr>                                 
                                    <?php } ?> 
                                        <tr>
                                            <td colspan="6"><button class="pull-right essen_skill_div_delete" type="button" id="delete_invite">Delete</button></td>
                                        </tr>
                                    <?php } else { ?>
                                        <tr class="chron_div_bottom">
                                            <td colspan="10"><b><center>No Record Found</center></b></td>
                                        </tr>
                                    <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="message_send" class="tab-pane fade">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                            <div class='first_div'>
                                <h2 class='headeing_uwse'></h2>
                                <div class="table">
                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                        <tbody>
                                            <tr class="chron_div">                                           
                                                <th><center>Name</center></th>                                       
                                        <th><center>Company</center></th> 
                                        <th><center>Telephone</center></th> 
                                        <th><center>Email</center></th> 
                                        <th><center>Message</center></th> 
                                        <th><center>Date</center></th> 
                                        </tr>
                                    <?php if(count($view_msg) > 0) { 
                                        foreach ($view_msg as $msg) { 
                                    ?>
                                        <tr class="chron_div_bottom">                                       
                                            <td><?php echo $msg['industry_message']['name'] ?></td>
                                            <td><?php echo $msg['industry_message']['company'] ?></td>
                                            <td><?php echo $msg['industry_message']['phone'] ?></td>
                                            <td><?php echo $msg['industry_message']['email'] ?></td>
                                            <td><?php echo $msg['industry_message']['message'] ?></td>
                                            <td><?php echo date('d-M-Y',strtotime($msg['industry_message']['date'])) ?> <?php echo date('h:i A',strtotime($msg['industry_message']['date'])) ?></td>
                                        </tr>                                 
                                    <?php } ?> 
                                    <?php } else { ?>
                                        <tr class="chron_div_bottom">
                                            <td colspan="10"><b><center>No Record Found</center></b></td>
                                        </tr>
                                    <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="resume_summary" class="tab-pane fade"> 
                        <ul class="nav nav-tabs new_proper">
                            <li style="display: none;"><a data-toggle="tab" href="#view_data" id="carrer_profile_data">View Career Data</a></li>
                            <li><a data-toggle="tab" href="#view_summary">View Career Profile</a></li>
                            <li><a data-toggle="tab" href="#create_summary">Create Career Profile</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="view_data" class="tab-pane fade active in">
                                <div class="row new_row_use" style="padding-top: 5%;">
                                    <div class="container-fluid">
                                        <div class="row_use_what_career_dashbored" style="padding-top: 0px;">
                                            <p><strong>First off you need to do you research. Just like everything else you’ve done up to this point in your job search quest, you need to make sure that you’re maximizing your potential.</strong><br/><br/>
                                                <strong>The first thing you want to do is go back and look at the job you’re applying for and determine your target audience. Re-read the job posting, keeping your eyes open for key phrases and words.</strong></p>
                                            <ul>
                                                <li>Who are they looking for?</li>
                                                <li>What do they want that person to bring to the table? What <b>value</b> can they provide?</li>
                                                <li>What would <b>I look for in a hire</b> if I were the one posting this job?</li>
                                                <li>Once you identify those things, it’s time to figure out how you fit into them.</li>
                                                <li>What are your <b>top selling points</b>? Find three or four things that define you as a professional and are unique to you.</li>
                                                <li>What critical problems did you identify in the job posting and how are you positioned to solve them? How does your summary align with the company job requirements?</li>
                                                <li>What are your career highlights and key strengths? How much experience do you have in doing what you’re doing? Do you have additional certifications or achievements that set you apart?</li>
                                                <li>Where does what you want and bring intersect with what the company wants and needs? Now, keep in mind that the above things are things you <b>WANT</b> to put in your statement…and also remember there are things <b>NOT</b> to put in your statement. Things like:</li>
                                                <li>Microsoft Office. We get it. Everyone should be proficient with this suite of programs and if you’re not, then hurry up and get proficient. Even if you’re a technological wizard your hardware and software skills should go in their own separate section…not your summary statement.</li>
                                                <li>Things you’re good at but that you hate doing. We touched on this briefly above but it’s something that bears repeating. If you don’t like doing it in your job now, don’t list it in your summary statement or you’ll have to keep doing it.</li>
                                                <li>Tired, old adjectives. These are words like ‘results-oriented,’ and ‘hardworking,’ ‘innovative’ and ‘motivated.’ Use action verbs instead </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="view_summary" class="tab-pane fade">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <div class="table">
                                            <table width="70%" cellpadding="25" class="new_use_padding new_use_data1 table-striped data_profile table-responsive">
                                            <?php if(count($view_resume_summary) > 0) {
                                            foreach ($view_resume_summary as $view_summary) { ?>
                                                <tr>
                                                    <th></th>
                                                    <td class="delete_btn"><i class="fa fa-trash delete_btn_use" onclick="delete_summary('<?php echo $view_summary['create_profile']['id'] ?>')"></i></td>
                                                </tr>
                                                <tr>
                                                    <th>Name</th>
                                                    <td><?php echo ucfirst($view_summary['register']['first_name']) ?> <?php echo ucfirst($view_summary['register']['last_name']) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Country</th>
                                                    <td><?php echo $view_summary['country']['name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>State/Province</th>
                                                    <td><?php echo $view_summary['state']['state_name'] ?></td>
                                                </tr>                                               
                                                <tr>
                                                    <th>Mission Statement</th>
                                                    <td><?php echo $view_summary['create_profile']['mission_statement']; ?></td>
                                                </tr> 
                                                <tr>
                                                    <th>About</th>
                                                    <td><?php echo $view_summary['create_profile']['about'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Looking For</th>
                                                    <td><?php echo $view_summary['create_profile']['work_type'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Education</th>
                                                    <td><?php echo $view_summary['create_profile']['education'] ?></td>
                                                </tr> 
                                                <tr>
                                                    <th>Education Type</th>
                                                    <td><?php echo $view_summary['create_profile']['education_type'] ?></td>
                                                </tr> 
                                                <tr>
                                                    <th>Course</th>
                                                    <td><?php echo $view_summary['create_profile']['course'] ?></td>
                                                </tr> 
                                                <tr>
                                                    <th>Start Date</th>
                                                    <td><?php echo $view_summary['create_profile']['start_date'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>End Date</th>
                                                    <td><?php echo $view_summary['create_profile']['end_date'] ?></td>
                                                </tr>
                                                <?php } } else { ?>
                                                <tr><td colspan="2"><center><b>No Summary Available</b></center></td></tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="create_summary" class="tab-pane fade">
                                <div class='form-group widt_form_under_tab'>
                                    <form method="post">

                                        <?php foreach ($view_resume_summary as $view_summary) { 
                                            $id = $view_summary['create_profile']['id'];
                                            $resume_summary = $view_summary['create_profile']['resume_summary'];
                                            $mission_statement = $view_summary['create_profile']['mission_statement'];
                                            $about = $view_summary['create_profile']['about'];
                                            $work_type = $view_summary['create_profile']['work_type'];
                                            $education = $view_summary['create_profile']['education'];
                                            $education_type = $view_summary['create_profile']['education_type'];
                                            $course = $view_summary['create_profile']['course'];
                                            $start_date = $view_summary['create_profile']['start_date'];
                                            $end_date = $view_summary['create_profile']['end_date'];
                                        } ?>
                                        <input type="hidden" name="form_name" value="create_profile">
                                        <input type="hidden" name="form_id" value="<?php echo $id; ?>">
                                        <h1>Career Profile</h1>
                                        <div class='form-group form_edit' style="background: #eee;padding: 4% !important;line-height: 22px;font-size: 15px;">                                            
                                            <?php foreach ($view_user_data as $data) { ?>
                                            <strong>Name</strong><br/>
                                            <input type='text' name="name" readonly="" value="<?php echo ucfirst($data['register']['first_name']). ' '.ucfirst($data['register']['last_name']) ?>"/><br/>
                                            <strong>Country</strong><br/>
                                            <input type='text' name="country" readonly="" value="<?php echo $data['country']['name'] ?>"/><br/>
                                            <strong>State/Province</strong><br/>
                                            <input type='text' name="state" readonly="" value="<?php echo $data['state']['state_name'] ?>"/><br/>
                                            <?php } ?>
                                            <strong>Resume Summary</strong><br/>
                                            <textarea name="resume_summary" rows="5"><?php echo $resume_summary; ?></textarea><br/>
                                            <strong>Mission Statement</strong><br/>
                                            <textarea name="mission_state" rows="5"><?php echo $mission_statement; ?></textarea><br/>                                           
                                            <strong>About Yourself</strong><br/>
                                            <textarea name="about" rows="5"><?php echo $about; ?></textarea><br/>
                                            <strong>Looking For</strong><br/>
                                            <select name="work_type">
                                                <option value="">--Select Type--</option>
                                                <option value="Part Time Work" <?php echo ($work_type == 'Part Time Work' ? 'selected="selected"' : '') ?>>Part Time Work</option>
                                                <option value="Placement" <?php echo ($work_type == 'Placement' ? 'selected="selected"' : '') ?>>Placement</option>
                                                <option value="Co-Op" <?php echo ($work_type == 'Co-Op' ? 'selected="selected"' : '') ?>>Co-Op</option>
                                                <option value="Internship" <?php echo ($work_type == 'Internship' ? 'selected="selected"' : '') ?>>Internship</option>
                                            </select> 
                                            <strong>Education</strong><br/>
                                            <select name="education" id="edu_id">
                                                <option value="">--Select Education--</option>
                                                <option value="University" <?php echo ($education == 'University' ? 'selected="selected"' : '') ?>>University</option>
                                                <option value="College" <?php echo ($education == 'College' ? 'selected="selected"' : '') ?>>College</option>                                               
                                            </select>
                                            <select name="univ" id='uni_id' style="display: <?php if($education == 'University'){ echo "block"; } ?>">
                                                <option value="">--Select Program--</option>
                                                <option value="Undergraduate/Certificate/Diploma" <?php echo ($education_type == 'Undergraduate/Certificate/Diploma' ? 'selected="selected"' : '') ?>>Undergraduate/Certificate/Diploma</option>
                                                <option value="Bachelors Degree" <?php echo ($education_type == 'Bachelors Degree' ? 'selected="selected"' : '') ?>>Bachelors Degree</option> 
                                                <option value="Graduate" <?php echo ($education_type == 'Graduate' ? 'selected="selected"' : '') ?>>Graduate</option> 
                                                <option value="Masters" <?php echo ($education_type == 'Masters' ? 'selected="selected"' : '') ?>>Masters</option> 
                                                <option value="Doctorate" <?php echo ($education_type == 'Doctorate' ? 'selected="selected"' : '') ?>>Doctorate</option> 
                                            </select>
                                            <select name="college" id='col_id' style="display: <?php if($education == 'College'){ echo 'block'; } ?>">
                                                <option value="">--Select Program--</option>
                                                <option value="Certificate Program" <?php echo ($education_type == 'Certificate Program' ? 'selected="selected"' : '') ?>>Certificate Program</option>
                                                <option value="Diploma Program" <?php echo ($education_type == 'Diploma Program' ? 'selected="selected"' : '') ?>>Diploma Program</option> 
                                                <option value="Degree Program" <?php echo ($education_type == 'Degree Program' ? 'selected="selected"' : '') ?>>Degree Program</option> 
                                                <option value="Graduate Program" <?php echo ($education_type == 'Graduate Program' ? 'selected="selected"' : '') ?>>Graduate Program</option> 
                                                <option value="Advanced Diploma" <?php echo ($education_type == 'Advanced Diploma' ? 'selected="selected"' : '') ?>>Advanced Diploma</option> 
                                            </select>
                                            <select name="course" id="course_id" style="display: <?php if($education == 'University'){ echo "block"; } ?>">
                                                <option value="">--Select Year--</option>
                                                <option value="First Year" <?php echo ($course == 'First Year' ? 'selected="selected"' : '') ?>>First Year</option>
                                                <option value="Second Year" <?php echo ($course == 'Second Year' ? 'selected="selected"' : '') ?>>Second Year</option> 
                                                <option value="Third Year" <?php echo ($course == 'Third Year' ? 'selected="selected"' : '') ?>>Third Year</option> 
                                            </select>
                                            <div id='date_id' style="display: <?php if($education == 'University'){ echo "block"; } ?>">
                                                <strong>Start Date</strong><br/>
                                                <input type='date' name="start_date" value="<?php echo $start_date ?>"/><br/>
                                                <strong>Complete Date</strong><br/>
                                                <input type='date' name="complete_date" value="<?php echo $end_date ?>"/><br/>    
                                            </div>
                                            <button type="submit">Save</button>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>        
            <?php echo $this->Element('dashboard/left_side') ?>

            <!-- navigation start end-->

            <div class="clearfix"></div>

        </div>
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
                        <input type="hidden" name="table_name" id="table_id"> 
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

    <!--   Core JS Files   -->

    <?php echo $this->Html->script('js/demo/moment.latest.min.js') ?>
    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
    <?php echo $this->Html->script('js/cd_player.js') ?>
    <?php echo $this->Html->script('js/circularprogress.jquery.js') ?> 

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
        $("#invite_id").click(function () {
            $("#myModal1").modal("show");
        });
    </script>

    <script>
        $("#myFormInvite").submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo Router::url(['controller' => 'dashboards/send_invite']) ?>",
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
    </script>

    <script>
        $("#instruction_user").click(function () {
            $(".div_class_instruc").toggle();
        });
    </script>

    <script>
        function delete_summary(id) {
            if (confirm("Are you sure")) {
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'dashboards/deleteCareerProfile']) ?>",
                    type: 'POST',
                    data: {'delete_id': id},
                    success: function (data) {
                        location.reload();
                    }
                });
            }
        }
    </script>

    <?php echo $this->Html->script('js/bootstrap.min.js') ?>

</body>
</html>