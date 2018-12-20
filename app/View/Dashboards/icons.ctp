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

        <!-- navigation start -->
        <div class="new_view" style="margin:2% 3% 2% 3%;">	
            <div class="col-lg-12 col-md-12  ">


                <input type="hidden" id='myUrl' value="<?php echo DOMAIN_NAME; ?>">
                <ul class="nav nav-tabs new_proper">
                    <?php if($progam_pay == 'starter') { ?>
                    <li class="active" id="view_career"><a data-toggle="tab" href="#dashboard">Career Dashboard </a></li>
                    <li class="hide_class" id="career_plan"><a data-toggle="tab" href="#career_p">Career Planning </a></li>
                    <li class="hide_class" id="view_resume"><a data-toggle="tab" href="#home">Resume </a></li>
                    <li class="hide_class click_parmanent"  id="view_job"><a data-toggle="tab" href="#menu1">Job/School Application</a></li>
                    <li class="hide_class" id="references"><a data-toggle="tab" href="#menu11">References </a></li>                    
                    <li class="hide_class" id="accomplishment"><a data-toggle="tab" href="#menu3">Accomplishments </a></li>
                    <li class="hide_class" id="key_skill"><a data-toggle="tab" href="#menu4">Key Skills</a></li>
                    <li class="hide_class" id="mission_statement"><a data-toggle="tab" href="#menu16">View Mission Statements</a></li>
                    <li class="hide_class" id="activity"><a data-toggle="tab" href="#menu5">CAREER Related Activities</a></li>
                    <li class="hide_class" id="education_val"><a data-toggle="tab" href="#education">Education</a></li>
                    <?php } else if($progam_pay == 'advanced') { ?>
                    <li class="active" id="view_career"><a data-toggle="tab" href="#dashboard">Career Dashboard </a></li>
                    <li class="hide_class" id="career_plan"><a data-toggle="tab" href="#career_p">Career Planning </a></li>
                    <li class="hide_class" id="view_resume"><a data-toggle="tab" href="#home">Resume </a></li>
                    <li class="hide_class click_parmanent"  id="view_job"><a data-toggle="tab" href="#menu1">Job/School Application</a></li>
                    <li class="hide_class" id="references"><a data-toggle="tab" href="#menu11">References </a></li>
                    <li class="hide_class" id="accomplishment"><a data-toggle="tab" href="#menu3">Accomplishments </a></li>
                    <li class="hide_class" id="key_skill"><a data-toggle="tab" href="#menu4">Key Skills</a></li>
                    <li class="hide_class" id="essen_skill"><a data-toggle="tab" href="#essential_skill">Essential Skills</a></li>
                    <li class="hide_class" id="activity"><a data-toggle="tab" href="#menu5">CAREER Related Activities</a></li>
                    <li class="hide_class" id="education_val"><a data-toggle="tab" href="#education">Education</a></li>
                    <li class="hide_class" id="note"><a data-toggle="tab" href="#menu6">Interview Notes </a></li>
                    <li class="hide_class" id="job_search"><a data-toggle="tab" href="#menu9">Job Search Sites</a></li>
                    <!-- <li class="hide_class" id="carrer_contact"><a data-toggle="tab" href="#menu10">Career Contacts</a></li> -->
                    <li class="hide_class" id="com_skill"><a data-toggle="tab" href="#computer_skill">Computer Skills</a></li>
                    <li class="hide_class" id="eved_skill"><a data-toggle="tab" href="#evidence_skill">Evidence of Skills</a></li>
                    <?php } else if($progam_pay == 'access360') { ?>
                    <li class="active" id="view_career"><a data-toggle="tab" href="#dashboard">Career Dashboard </a></li>
                    <li class="hide_class" id="career_plan"><a data-toggle="tab" href="#career_p">Career Planning </a></li>
                    <li class="hide_class" id="view_resume"><a data-toggle="tab" href="#home">Resume </a></li>
                    <li class="hide_class click_parmanent"  id="view_job"><a data-toggle="tab" href="#menu1">Job/School Application</a></li>
                    <li class="hide_class" id="accomplishment"><a data-toggle="tab" href="#menu3">Accomplishments </a></li>
                    <li class="hide_class" id="key_skill"><a data-toggle="tab" href="#menu4">Key Skills</a></li>
                    <li class="hide_class" id="essen_skill"><a data-toggle="tab" href="#essential_skill">Essential Skills</a></li>
                    <li class="hide_class" id="activity"><a data-toggle="tab" href="#menu5">CAREER Related Activities</a></li>
                    <li class="hide_class" id="education_val"><a data-toggle="tab" href="#education">Education</a></li>
                    <li class="hide_class" id="note"><a data-toggle="tab" href="#menu6">Interview Notes </a></li>
                    <!-- <li class="hide_class" id="calendar"><a data-toggle="tab" href="#menu7">Calendar  </a></li>-->
                    <li class="hide_class" id="sp_note"><a data-toggle="tab" href="#menu8">Task List</a></li> 
                    <li class="hide_class" id="job_search"><a data-toggle="tab" href="#menu9">Job Search Sites</a></li>
                    <!-- <li class="hide_class" id="carrer_contact"><a data-toggle="tab" href="#menu10">Career Contacts</a></li> -->
                    <li class="hide_class" id="references"><a data-toggle="tab" href="#menu11">References </a></li>
                    <li class="hide_class" id="goal"><a data-toggle="tab" href="#menu12">Career Goals </a></li>
                    <li class="hide_class" id="Create_Event"><a data-toggle="tab" href="#menu13">Event/Workshop</a></li>
                    <li class="hide_class" id="Advance_payers"><a data-toggle="tab" href="#menu15">S.W.O.T</a></li>
                    <li class="hide_class" id="mission_statement"><a data-toggle="tab" href="#menu16">View Mission Statements</a></li>
                    <li class="hide_class" id="com_skill"><a data-toggle="tab" href="#computer_skill">Computer Skills</a></li>
                    <li class="hide_class" id="eved_skill"><a data-toggle="tab" href="#evidence_skill">Evidence of Skills</a></li>
                    <?php } else if($progam_pay == 'trail') { ?>
                    <li class="active" id="view_career"><a data-toggle="tab" href="#dashboard">Career Dashboard </a></li>
                    <li class="hide_class" id="career_plan"><a data-toggle="tab" href="#career_p">Career Planning </a></li>
                    <li class="hide_class" id="view_resume"><a data-toggle="tab" href="#home">Resume </a></li>
                    <li class="hide_class click_parmanent"  id="view_job"><a data-toggle="tab" href="#menu1">Job/School Application</a></li>
                    <li class="hide_class" id="accomplishment"><a data-toggle="tab" href="#menu3">Accomplishments </a></li>
                    <li class="hide_class" id="key_skill"><a data-toggle="tab" href="#menu4">Key Skills</a></li>
                    <li class="hide_class" id="activity"><a data-toggle="tab" href="#menu5">CAREER Related Activities</a></li>
                    <li class="hide_class" id="education_val"><a data-toggle="tab" href="#education">Education</a></li>
                    <li class="hide_class" id="note"><a data-toggle="tab" href="#menu6">Interview Notes </a></li>
                    <!-- <li class="hide_class" id="calendar"><a data-toggle="tab" href="#menu7">Calendar  </a></li>-->
                    <li class="hide_class" id="sp_note"><a data-toggle="tab" href="#menu8">Task List</a></li> 
                    <li class="hide_class" id="job_search"><a data-toggle="tab" href="#menu9">Job Search Sites</a></li>
                    <!-- <li class="hide_class" id="carrer_contact"><a data-toggle="tab" href="#menu10">Career Contacts</a></li> -->
                    <li class="hide_class" id="references"><a data-toggle="tab" href="#menu11">References </a></li>
                    <li class="hide_class" id="goal"><a data-toggle="tab" href="#menu12">Career Goals </a></li>
                    <li class="hide_class" id="Create_Event"><a data-toggle="tab" href="#menu13">Event/Workshop</a></li>
                    <li class="hide_class" id="essen_skill"><a data-toggle="tab" href="#essential_skill">Essential Skills</a></li>
                    <li class="hide_class" id="Advance_payers"><a data-toggle="tab" href="#menu15">S.W.O.T</a></li>
                    <li class="hide_class" id="mission_statement"><a data-toggle="tab" href="#menu16">View Mission Statements</a></li>
                    <li class="hide_class" id="com_skill"><a data-toggle="tab" href="#computer_skill">Computer Skills</a></li>
                    <li class="hide_class" id="eved_skill"><a data-toggle="tab" href="#evidence_skill">Evidence of Skills</a></li>
                    <?php } ?>
                </ul>

                <div class="tab-content tabs_use">
                    <div id="dashboard" class="tab-pane active">
                        <div class="row new_row_use">
                            <div class="container-fluid">
                                <div class='row_use_what_career_dashbored'>
                                    <h1>What is Career Dashboard</h1>
                                    <p><strong>It refers to the process of tracking and documenting the skills, knowledge and experience that you gain both formally and informally as you work, beyond any initial training. It's a record of what you experience, learn and then apply. The term is generally used to mean a physical folder or portfolio documenting your development as a professional.or student. Career Dashboard is a process of recording and reflecting on learning and development.</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container-fluid">
                                <div class='row_use_what_career_dashbored'>
                                    <h1>What is it for?</h1>
                                    <p><strong>The CD process helps you manage your own development on an ongoing basis. It's function is to help you record, review and reflect on what you learn. It's not a tick-box document recording the training you have completed. It's broader than that.</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container-fluid">
                                <div class='row_use_what_career_dashbored'>
                                    <h1>The key features of the CD process</h1>
                                    <p><strong>To justify the name, a CD needs to:</strong>

                                    </p>
                                    <ul>
                                        <li> Be a documented process</li>
                                        <li>Be self-directed: driven by you, not your employer or school</li>
                                        <li>Focus on learning from experience, reflective learning and review</li>
                                        <li>Help you set development goals and objectives</li>
                                        <li>Include both formal and informal learning.</li>
                                    </ul>
                                </div>
                                <div class='clearfix'></div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <div class='row_use_what_career_dashbored'>
                                            <h1>What will it do for you?</h1>
                                            <p><strong>It can help you to reflect, review and document your learning and to develop and update your professional and academic knowledge and skills. It is also very useful to:</strong>

                                            </p>
                                            <ul>
                                                <li>Provides an overview of your professional and academic development to date</li>
                                                <li>Reminds you of your achievements and how far you've progressed</li>
                                                <li>Directs your career and helps you keep your eye on your goals</li>
                                                <li>Uncovers gaps in your skills and capabilities</li>
                                                <li>Opens up further development needs</li>
                                                <li>Provides examples and scenarios for a CV or interview</li>
                                                <li>Demonstrates your professional standing to clients and employers</li>
                                                <li>Helps you with your career development or a possible career change</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- div class__upon -->
                                <div class="row">
                                    <div class="container-fluid">
                                        <div class="row_use_what_career_dashbored">
                                            <h1>How do I start?</h1>
                                            <p><strong>Keep a learning log and record your thoughts in whatever way suits you best. You may find it helpful to write things down in detail, for example, or to make notes on insights and learning points. The process of writing makes you think about your experiences at the time, and makes planning and reflection much easier. You can't review your experiences without recording them, however good your memory is.
                                                    <br/><br/>
                                                    <span>Answering the following questions may help you to get started:</span>
                                                </strong>
                                                <br/>

                                                <strong>Where am I now?</strong>
                                                <br/>
                                                <span>Review and reflect on any learning experiences over the previous year or over the past three months. Write your thoughts down about what you learned, what insights it gave you and what you might have done differently. Include both formal training events and informal learning, such as:</span>
                                            <div class='clearfix'></div>
                                            <ul>
                                                <li>Learning from colleagues or shared learning from networking</li>
                                                <li>Reading about new technologies, new methods of working, legislative changes</li>
                                                <li>Shadowing or assisting an experienced colleague</li>
                                                <li>Insights and learning points from coaching and mentoring</li>
                                                <li>Lessons learned from critical incidents or events</li>
                                                <li>Organizational or role change</li>
                                                <li>Temporary job  within the department/organisation</li>
                                                <li>Deputising or covering for colleagues</li>
                                                <li>Insights and lessons learned from mistakes</li>
                                            </ul>
                                            <P class='new_para_make_note_content'>
                                                <strong>
                                                    Make a note of any outcomes of each learning experience and what difference it has made to you, your colleagues, your students (if relevant) or your employer.
                                                </strong>
                                            </P>

                                            <div class='clearfix'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="career_p" class="tab-pane">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#add_career_p" >Add New Career Plan</a></li>
                            <li><a data-toggle="tab" href="#view_career_p">View Career Plan</a></li>
                            <li><a data-toggle="tab" href="#add_career_action_p">Add Career Action Plan</a></li>                            
                            <li><a data-toggle="tab" href="#view_career_action_p">View Career Action Plan</a></li>
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="add_career_p" class="tab-pane fade in active">
                                <div class="form-group form_edit">
                                    <form method="post">                           
                                        <input type="hidden" name="form_name" value="add_career_plan">
                                        <input type="hidden" name="career_plan_name" value="" id="career_plan_id">
                                        <div class="form_color_use">
                                            <h3>TURN YOUR DREAMS into goals by taking logical steps to pursue them.</h3>
                                            <h3>When it comes to figuring out what you’re good at, the best source of information is you and/or those close to you. After all, who knows you better?</h3>
                                            <h4>Career Plan</h4><br/>
                                            <strong>1) What motivates and you the most? What gives you the greatest satisfaction?</strong><br>
                                            <textarea name="career_motivate" id="career_motivate_id"></textarea><br>
                                            <strong>2) If you could do work that inspired and satisfied you, what would you do?</strong><br>
                                            <textarea name="career_inspire" id="career_inspire_id"></textarea><br>
                                            <strong>3) What tasks have you enjoyed doing? For example, building something, writing a story, taking care of someone, teaching someone, working with a computer, or organizing.</strong><br>
                                            <textarea name="career_task" id="career_task_id"></textarea><br>
                                            <strong>4) What are your special gifts or personal attributes and skills? For example, patient, organized, independent and creative.</strong><br>
                                            <textarea name="career_special" id="career_special_id"></textarea><br>    
                                            <strong>5) What tasks (that you’ve never tried) do you think you would be good at? </strong><br> 
                                            <textarea name="career_good_task" id="career_good_task_id"></textarea><br>
                                            <strong>6) Your employment goals – where you would like to go</strong><br>
                                            <textarea name="career_goals" id="career_goals_id"></textarea><br>
                                            <h3>To work in the career you desire, you need to know the necessary experience, skills, knowledge, training, and/or certification needed for the job. Identify these things and list them in the space below: </h3>
                                            <strong>1) To work in this field: I need to be able to (skills):</strong>
                                            <textarea name="career_work" id="career_work_id"></textarea><br>
                                            <strong>2) I need to know (knowledge):</strong>
                                            <textarea name="career_knowledge" id="career_knowledge_id"></textarea><br>
                                            <strong>3) I need training or certification in:</strong>
                                            <textarea name="career_training" id="career_training_id"></textarea><br>
                                            <strong>4) I need experience in:</strong>
                                            <textarea name="career_experience" id="career_experience_id"></textarea><br>                                          
                                            <button type="submit">Save</button><br><br>
                                            <div class="clearfix"></div>                                                
                                        </div>
                                    </form>    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div id="view_career_p" class="tab-pane fade">
                                <div class="form-group">
                                    <div class="form_color_use">

                                        <table class="table_use_div word_div">
                                        <?php $i =1;  if(count($view_career_plan) > 0) {
                                           foreach ($view_career_plan as $view_plan) { 
                                        ?>
                                            <tr>
                                                <td colspan="2" style="padding: 0px 0px 2em 0px; border-top: 5px solid #000;"></td>
                                            </tr>
                                            <tr>
                                                <td><h5><center><?php echo $i ?>. Career Plan</center></h5></td>
                                                <td><span class="recent_job_button"><input type="button" value="Update" onclick='update_career_plan("<?php echo $view_plan['career_plan']['id'] ?>")'>
                                                        <input type="button" value="Delete" onclick='delete_career_plan("<?php echo $view_plan['career_plan']['id'] ?>")'></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">1. What motivates and you the most? What gives you the greatest satisfaction?</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo $view_plan['career_plan']['career_motivate'] ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">2. If you could do work that inspired and satisfied you, what would you do?</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo $view_plan['career_plan']['career_inspire'] ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">3. What tasks have you enjoyed doing? For example, building something, writing a story, taking care of someone, teaching someone, working with a computer, or organizing.</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo $view_plan['career_plan']['task_enjoy'] ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">4. What are your special gifts or personal attributes and skills? For example, patient, organized, independent and creative.</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo $view_plan['career_plan']['caree_skill'] ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">5. What tasks (that you’ve never tried) do you think you would be good at? </th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo $view_plan['career_plan']['career_task'] ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">6. Your employment goals – where you would like to go:</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo $view_plan['career_plan']['career_goal'] ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">To work in the career you desire, you need to know the necessary experience, skills, knowledge, training, and/or certification needed for the job. Identify these things and list them in the space below: </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">1. To work in this field: I need to be able to (skills):</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo $view_plan['career_plan']['career_work'] ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">2. I need to know (knowledge):</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo $view_plan['career_plan']['career_knowledge'] ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">3. I need training or certification in:</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo $view_plan['career_plan']['training'] ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">4. I need experience in:</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo $view_plan['career_plan']['experience'] ?></td>
                                            </tr>
                                            <?php  $i++; }  } else { ?>
                                            <tr>
                                                <th colspan="2"><center><b>No Record Found</b></center></th>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="add_career_action_p" class="tab-pane fade">
                                <div class="group_div">
                                    <h4 class="heading_h_use">Action Plan Career or Education</h4> 
                                    <p>Now that you identified your experiences, knowledge and skills, you will need to create a plan of action. A plan of action is simply a road map to get to where you want to go: </p>
                                    <p>REVIEW YOUR ASSETS YOUR KNOWLEDGE AND SKILLS  MATCH YOUR ASSETS TO WHAT A JOB REQUIRES ,SET GOALS AND CREATE ACTION STEPS TO LEARN ADDITIONAL KNOWLEDGE AND SKILLS FOR A NEW JOB</p>
                                </div>
                                <div class="group_div">
                                    <form method="post">
                                        <input type="hidden" name="form_name" value="career_action_plan">
                                        <input type="hidden" name="action_plan_name" id="action_plan_id" value="">
                                        <strong>Goal:</strong>
                                        <textarea name="action_plan_goal" id="action_plan_goal_id"></textarea>
                                        <h4>Career Path</h4>

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>Action steps</b></p>
                                            <ol class="action_class">
                                                <li><input type="text" name="action_step[]"></li>
                                                <li><input type="text" name="action_step[]"></li>
                                                <li><input type="text" name="action_step[]"></li> 
                                                <li><input type="text" name="action_step[]"></li>
                                                <li><input type="text" name="action_step[]"></li>
                                            </ol>                                            
                                        </div>

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>Who Can Help Me?</b></p>
                                            <ol class="help_me_class">
                                                <li><input type="text" name="help[]" placeholder="Contact Information"></li>
                                                <li><input type="text" name="help[]" placeholder="Contact Information"></li>
                                                <li><input type="text" name="help[]" placeholder="Contact Information"></li>  
                                                <li><input type="text" name="help[]" placeholder="Contact Information"></li> 
                                            </ol>
                                        </div>
                                        <strong>When do I start CP:</strong>
                                        <input type="text" name="start_cp" id="start_cp_id" readonly=""><br/><br/>
                                        <strong>Date to Complete CP</strong>
                                        <input type="text" name="end_cp" id="end_cp_id" readonly="">
                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>What do I need to do to successfully Accomplish this task?</b></p>
                                            <ol class="success_accomp_class">
                                                <li><input type="text" name="success_accomp[]"></li>
                                                <li><input type="text" name="success_accomp[]"></li>
                                                <li><input type="text" name="success_accomp[]"></li>
                                                <li><input type="text" name="success_accomp[]"></li>
                                                <li><input type="text" name="success_accomp[]"></li>
                                                <li><input type="text" name="success_accomp[]"></li>
                                            </ol>
                                        </div>

                                        <div class='form_none'>
                                            <br><br>
                                            <button type="submit" class="button_save_data">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="view_career_action_p" class="tab-pane fade">
                                <?php $i = 1; if(count($view_career_action_plan) > 0) {
                                    foreach ($view_career_action_plan as $action_plan) {
                                ?>
                                <div class="repeat_border_div_action">
                                    <div>
                                        <h5><?php echo $i++ .". "; ?>Career Action Plan
                                            <span class="swot_data_val">
                                                <button class="essen_skill_div_update" onclick='update_action_plan("<?php echo $action_plan['career_action_plan']['id'] ?>")'>Update</button>
                                                <button class="essen_skill_div_delete" onclick='delete_action_plan("<?php echo $action_plan['career_action_plan']['id'] ?>")'>Delete</button>
                                            </span>
                                        </h5>
                                    </div>
                                    <div>
                                        <h1>Goal : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $action_plan['career_action_plan']['goal'] ?></h1>
                                    </div>
                                    <div class='div_margin'>
                                        <h5>Career Path</h5>
                                        <h1>Action steps</h1>
                                        <ol>
                                        <?php $step = explode('*',$action_plan['career_action_plan']['action_step']);
                                        for($b = 0; $b < count($step); $b++) {
                                            if(!empty($step[$b])) {
                                        ?>
                                            <li><p><?php echo $step[$b] ?></p></li>
                                        <?php } } ?>
                                        </ol>
                                    </div>

                                    <div class='div_margin'>
                                        <h1>Who Can Help Me?</h1>
                                        <ol>
                                        <?php $help = explode('*',$action_plan['career_action_plan']['help_me']);
                                        for($c = 0; $c < count($help); $c++) {
                                            if(!empty($help[$c])) {
                                        ?>
                                            <li><p><?php echo $help[$c] ?></p></li>
                                        <?php } } ?>
                                        </ol>
                                    </div>
                                    <h1>When do I start CP : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $action_plan['career_action_plan']['start_cp'] ?></h1>
                                    <h1>Date to Complete CP : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $action_plan['career_action_plan']['end_cp'] ?></h1>
                                    <div class='div_margin'>
                                        <h1>What do I need to do to successfully Accomplish this task?</h1>
                                        <ol>
                                        <?php $action_accomp = explode('*',$action_plan['career_action_plan']['accomp_task']);
                                        for($d = 0; $d < count($action_accomp); $d++) {
                                            if(!empty($action_accomp[$d])) {
                                        ?>
                                            <li><p><?php echo $action_accomp[$d] ?></p></li>
                                        <?php } } ?>
                                        </ol>
                                    </div>

                                    <div style="border-bottom: 5px solid #000; padding: 0px 0px 1em 0px;"></div>
                                </div>    

                                <?php } } else { ?>
                                <div>
                                    <p><center><b>No Records Found</b></center></p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>  

                    <div id="home" class="tab-pane">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#menu_sub2" >Types of Resume </a></li>
                            <li><a data-toggle="tab" href="#menu_sub0">Upload Resume  </a></li>
                            <li><a data-toggle="tab" href="#menu_sub1">Upload Cover Letters</a></li>                            
                            <li><a data-toggle="tab" href="#menu_sub3">View Cover Letters </a></li>
                            <li><a data-toggle="tab" href="#menu_sub4">Resume Checklist</a></li>
                        </ul>

                        <div class='tab-content tabs_use'>
                            <div id="menu_sub0" class="tab-pane fade">
                                <div class='form-group widt_form_under_tab row_use_what_career_dashbored'>
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="form_name" value="upload_resume1">
                                        <input type="hidden" name="resume_id_name" id="resume_id_val" value="">
                                        <input type="hidden" name="resume_data_name" id="resume_id_data">
                                        <h1>Fill Your Resume Detail's</h1>
                                        <div class='form-group form_edit'>
                                            <p>
                                                <strong>Name of Resume</strong><br/>
                                                <input type='text' name="resume_name" id="resume_name_id"/><br/>
                                                <strong>Number of Resume</strong><br/>
                                                <input type='text' name="resume_number" id="resume_number_id" value="1"/><br/>
                                            </p>    
                                            <div id="resume_no_count">
                                                <strong>Upload your Resume</strong><br/>
                                                <input type='file' name="upload_resume_data[]" required=""/><br/>
                                            </div>

                                            <p>
                                                <strong>Type of Resume</strong><br/>
                                                <select id="resume_type_id" name="resume_type">
                                                    <option value="Chronological">Chronological</option>
                                                    <option value="Functional">Functional</option>
                                                    <option value="Combination">Combination </option>
                                                </select>
                                                <br/>
                                                <button type="submit">Save</button>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="menu_sub1" class="tab-pane fade">
                                <div class='form-group widt_form_under_tab row_use_what_career_dashbored'>
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="form_name" value="upload_cover_letter">
                                        <input type="hidden" name="cover_id_name" id="cover_id_val" value="">
                                        <input type="hidden" name="cover_data_name" id="cover_id_data">
                                        <h1>Fill Your Cover Detail's</h1>
                                        <div class='form-group form_edit'>
                                            <p><strong>Completed Date</strong><br/>
                                                <input type='text' name='date' id="cover_date_id"/><br/>
                                                <strong>Number of this Letter for your reference</strong><br/>
                                                <input type='text' name="letter_name" id="cover_name_id"/><br/>
                                                <strong>Upload your Cover Letter</strong><br/>
                                                <input type='file' name="upload_letter"/><br/>
                                                <strong>Type of Resume</strong><br/>
                                                <select name="resume_type1" id="cover_type_id">
                                                    <option value="Chronological">Chronological</option>
                                                    <option value="Functional">Functional</option>
                                                    <option value="Combination">Combination </option>
                                                </select>
                                                <br/>
                                                <button type="submit">Save</button>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="menu_sub2" class="tab-pane fade in active">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse'>Chronological</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Resume</center></th>                                       
                                                <th><center>Date Created</center></th>               
                                                <th><center>Number of Resumes</center></th>
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($resume_chron_data) > 0) { 
                                               foreach ($resume_chron_data as $chron_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $chron_data['upload_resume']['resume_name'] ?></center></td>
                                                <td><center><?php if($chron_data['upload_resume']['complete_date']) { echo date('d-M-Y', strtotime($chron_data['upload_resume']['complete_date'])); } else { echo ""; } ?></center></td>
                                                <td><center><?php echo $chron_data['upload_resume']['resume_number'] ?></center></td>
                                                <td>
                                            <?php if(!empty($chron_data['upload_resume']['upload'])) {
                                            $chron_upload_data = explode(',', $chron_data['upload_resume']['upload']); 
                                            for($i = 0; $i < count($chron_upload_data); $i++) {
                                            ?>
                                                <center><a class="button_use" href="dashboards/download?filename=<?php echo $chron_upload_data[$i] ?>">View</a></center><br/>
                                            <?php } } ?>
                                                </td>
                                                <td><center><button onclick='delete_resume("<?php echo $chron_data['upload_resume']['resume_id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>	
                                    </div>
                                    <div class='second_div'>
                                        <h2 class='headeing_uwse'>Functional</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding new_use">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Resume</center></th>                                       
                                                <th><center>Date Created</center></th>               
                                                <th><center>Number of Resumes</center></th>
                                                <th><center>Upload</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>

                                            <?php if(count($resume_fun_data) > 0) { 
                                                foreach ($resume_fun_data as $fun_data) {
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $fun_data['upload_resume']['resume_name'] ?></center></td>
                                                <td><center><?php if($fun_data['upload_resume']['complete_date']) { echo date('d-M-Y', strtotime($fun_data['upload_resume']['complete_date'])); } else { echo ""; } ?></center></td>
                                                <td><center><?php echo $fun_data['upload_resume']['resume_number'] ?></center></td>
                                                <td>
                                            <?php if(!empty($fun_data['upload_resume']['upload'])) {
                                            $fun_upload_data = explode(',', $fun_data['upload_resume']['upload']); 
                                            for($i = 0; $i < count($fun_upload_data); $i++) {
                                            ?>
                                                <center><a class="button_use" href="dashboards/download?filename=<?php echo $fun_upload_data[$i] ?>">View</a></center><br/>
                                            <?php } } ?>
                                                </td>
                                                <td><center><button onclick='delete_resume("<?php echo $fun_data['upload_resume']['resume_id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <div class='third'>
                                        <h2 class='headeing_uwse'>Combined</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding new_use">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Resume</center></th>                                       
                                                <th><center>Date Created</center></th>               
                                                <th><center>Number of Resumes</center></th>
                                                <th><center>Upload</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>

                                            <?php if(count($resume_comb_data) > 0) { 
                                                foreach ($resume_comb_data as $comb_data) {
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $comb_data['upload_resume']['resume_name'] ?></center></td>
                                                <td><center><?php if($comb_data['upload_resume']['complete_date']) { echo date('d-M-Y', strtotime($comb_data['upload_resume']['complete_date'])); } else { echo ""; } ?></center></td>
                                                <td><center><?php echo $comb_data['upload_resume']['resume_number'] ?></center></td>
                                                <td>
                                            <?php if(!empty($comb_data['upload_resume']['upload'])) {
                                            $comb_upload_data = explode(',', $comb_data['upload_resume']['upload']); 
                                            for($i = 0; $i < count($comb_upload_data); $i++) {
                                            ?>
                                                <center><a class="button_use" href="dashboards/download?filename=<?php echo $comb_upload_data[$i] ?>">View</a></center><br/>
                                            <?php } } ?>
                                                </td>
                                                <td><center><button onclick='delete_resume("<?php echo $comb_data['upload_resume']['resume_id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>	
                                    </div>

                                    <div class='content_use_div'>
                                        <h3>3 Types Of Resumes</h3>
                                        <p>There are several basic types of resumes you can use to apply for job openings. You can choose to
                                            write a <b>chronological, functional, combination,</b> or <b>targeted</b> resume.
                                            <br/>
                                            Each resume type is useful for different purposes. Therefore, when deciding which type of resume to
                                            use, you have to think about your personal circumstances.
                                            <br/>
                                            Read below for more information on each type of resume, including what each looks like, and when to
                                            use each.
                                            <br/>
                                            Also see sample of resume tab
                                        </p>
                                    </div>  

                                    <div class='content_use_div'>
                                        <h3>Chronological Resume</h3>
                                        <p>A chronological resume starts by listing your work history, with the most recent position listed first.
                                            Below your most recent job, you list your other jobs in reverse chronological order.
                                            <br/>
                                            Employers typically prefer this type of resume because it&#39;s easy to see what jobs you have held and
                                            when you have worked at them. This is the most common resume type.
                                            <br/>
                                            This type of resume works well for job seekers with a strong, solid work history. If you are just
                                            starting your career, or if you are changing career fields, you might consider a different resume type.
                                        </p>
                                    </div>  

                                    <div class='content_use_div'>
                                        <h3>Functional Resume</h3>
                                        <p>A functional resume focuses on your skills and experience, rather than on your chronological work
                                            history. Instead of having a “work history” section at the top of your resume, you might have a
                                            “professional experience” or “accomplishments” section that lists various skills that you have
                                            developed over the years.
                                            <br/>
                                            A functional resume also sometimes includes a resume summary or headline at the top, which details a
                                            person’s skills and achievements.
                                            <br/>
                                            A functional resume might not include one’s employment history at all, or might have a concise list of
                                            work history at the bottom of the resume.
                                            <br/>
                                            Functional resumes are used most often by people who are changing careers or who have gaps in their
                                            employment history.
                                            <br/>
                                            It is also useful for people who are new to the workforce, have limited work experience, or who have
                                            a gap in their employment. By highlighting skills rather than work history, one can emphasize that he
                                            or she is qualified for the job.
                                        </p>
                                    </div>  

                                    <div class='content_use_div'>
                                        <h3>Combination Resume</h3>
                                        <p>A combination resume is a mix between a chronological resume and a functional resume.
                                            At the top of the resume is a list of one’s skills and qualifications. Below this is one’s
                                            chronological work history. However, the work history is not the focus of the resume, and
                                            typically does not take up much space on the resume.
                                            <br/>
                                            With this type of resume, you can highlight the skills you have that are relevant to the job
                                            you are applying for, and also provide your chronological work history. After all, most
                                            employers want to see your chronological work history, even if that history is not very
                                            extensive.
                                            <br/>
                                            This kind of resume helps you highlight what makes you the best fit for the job, while
                                            still giving the employer all the information he or she wants.
                                        </p>
                                    </div>  

                                </div>
                            </div>
                            <div id="menu_sub3" class="tab-pane fade">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup" style="margin-top:2em;">
                                    <div class="table">
                                        <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding new_use">
                                            <tbody>
                                                <tr class="chron_div">
                                                    <th><p></p><center>Completed Date</center><p></p></th>
                                            <th><center>Number of this Letter for your reference</center></th>
                                            <th><center>Type of Resume</center></th>
                                            <th><center>View</center></th>
                                            <th><center>Update</center></th>
                                            <th><center>Delete</center></th>
                                            </tr>
                                       <?php if(count($cover_data) > 0) {
                                        foreach($cover_data as $cover) { ?>
                                            <tr class="chron_div_bottom"><td><p><?php echo $cover['upload_coverletter']['complete_date'] ?></p></td>
                                                <td><p><?php echo $cover['upload_coverletter']['letter_name'] ?></p></td>
                                                <td><p><?php echo $cover['upload_coverletter']['resume_type'] ?></p></td>
                                                <td>
                                                <?php if(!empty($cover['upload_coverletter']['upload'])) { ?>
                                                    <a class="button_use" href="dashboards/download?filename=<?php echo $cover['upload_coverletter']['upload'] ?>">View</a>
                                                <?php } ?>
                                                </td>
                                                <td><button onclick='update_letter("<?php echo $cover['upload_coverletter']['letter_id'] ?>")'>Update</button></td>
                                                <td><i class="fa fa-trash-o del_trsh" aria-hidden="true" onclick='delete_letter("<?php echo $cover['upload_coverletter']['letter_id'] ?>")'></i></td>
                                            </tr>
					<?php } } else { ?>
                                            <tr class="chron_div_bottom"><td colspan=9><center>No Record Found</center></td></tr>
					<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>	
                                </div>
                            </div>

                            <div id="menu_sub4" class="tab-pane fade">
                                <div>
                                    <div class="row_use_what_career_dashbored">
                                        <form method="post">
                                            <?php foreach ($checklist as $checked) {
                                            $id = $checked['checklist']['id'];
                                            $check1 = $checked['checklist']['check1'];
                                            $check2 = $checked['checklist']['check2'];
                                            $check3 = $checked['checklist']['check3'];
                                            $check4 = $checked['checklist']['check4'];
                                            $check5 = $checked['checklist']['check5'];
                                            $check6 = $checked['checklist']['check6'];
                                            $check7 = $checked['checklist']['check7'];
                                            $check8 = $checked['checklist']['check8'];
                                            $check9 = $checked['checklist']['check9'];
                                            $check10 = $checked['checklist']['check10'];
                                            $check11 = $checked['checklist']['check11'];
                                            $check12 = $checked['checklist']['check12'];
                                            } ?>
                                            <input type="hidden" name="form_name" value="checklist">
                                            <input type="hidden" name="check_id" value="1">
                                            <input type="hidden" name="check_id" value="<?php echo $id; ?>">

                                            <h1>Checklist</h1>
                                            <p><strong>Once you’ve sorted all of your items, it’s time to assemble your portfolio. To help you get started, here’s a sample Table of Contents:
                                                </strong></p>
                                            <ul>
                                                <li>Title page (Introduces you to the reader) <input type='radio' class='space_padding' name='check1' value="Done" <?php echo ($check1 == 'Done' ? 'checked' : '') ?>/>  Done    <input type='radio' class='space_padding' name='check1' value="working on it" <?php echo ($check1 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check1' value="N/A" <?php echo ($check1 == 'N/A' ? 'checked' : '') ?>/>  N/A </li>
                                                <li>Table of contents (directs the reader to the appropriate sections) <input type='radio' class='space_padding' name='check2' value="Done" <?php echo ($check2 == 'Done' ? 'checked' : '') ?>/>  Done <input type='radio' class='space_padding' name='check2' value="working on it" <?php echo ($check2 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check2' value="N/A" <?php echo ($check2 == 'N/A' ? 'checked' : '') ?>/>  N/A  </li>

                                                <li>Introduction (summarizes the goal of your portfolio) <input type='radio' class='space_padding' name='check3' value="Done" <?php echo ($check3 == 'Done' ? 'checked' : '') ?>/>  Done  <input type='radio' class='space_padding' name='check3' value="working on it" <?php echo ($check3 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check3' value="N/A" <?php echo ($check3 == 'N/A' ? 'checked' : '') ?>/>  N/A </li>

                                                <li>Occupational (job) goal <input type='radio' class='space_padding' name='check4' value="Done" <?php echo ($check4 == 'Done' ? 'checked' : '') ?>/>  Done <input type='radio' class='space_padding' name='check4' value="working on it" <?php echo ($check4 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check4' value="N/A" <?php echo ($check4 == 'N/A' ? 'checked' : '') ?>/>  N/A </li>

                                                <li>Personal mission statement ( describes the person you are, personal characteristics and work ethic) <input type='radio' class='space_padding' name='check5' value="Done" <?php echo ($check5 == 'Done' ? 'checked' : '') ?>/>  Done <input type='radio' class='space_padding' value="working on it" name='check5' <?php echo ($check5 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check5' value="N/A" <?php echo ($check5 == 'N/A' ? 'checked' : '') ?>/>  N/A </li>                                              

                                                <li>Resume (describes paid and unpaid work history, skills and abilities) <input type='radio' class='space_padding' name='check6' value="Done" <?php echo ($check6 == 'Done' ? 'checked' : '') ?>/>  Done  <input type='radio' class='space_padding' name='check6' value="working on it" <?php echo ($check6 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check6' value="N/A" <?php echo ($check6 == 'N/A' ? 'checked' : '') ?>/>  N/A  </li>                                                

                                                <li>My Skills Profile (working with others, organizational skills, critical thinking) <input type='radio' class='space_padding' name='check7' value="Done" <?php echo ($check7 == 'Done' ? 'checked' : '') ?>/>  Done  <input type='radio' class='space_padding' name='check7' value="working on it" <?php echo ($check7 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check7' value="N/A" <?php echo ($check7 == 'N/A' ? 'checked' : '') ?>/>  N/A </li>                                               

                                                <li>Letters of recommendation (Letters from employer, volunteer organization) <input type='radio' class='space_padding' name='check8' value="Done" <?php echo ($check8 == 'Done' ? 'checked' : '') ?>/>  Done  <input type='radio' class='space_padding' name='check8' value="working on it" <?php echo ($check8 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check8' value="N/A" <?php echo ($check8 == 'N/A' ? 'checked' : '') ?>/>  N/A  </li>                                                

                                                <li>Documentation (provides evidence of knowledge, skill, and experiences) <input type='radio' class='space_padding' name='check9' value="Done" <?php echo ($check9 == 'Done' ? 'checked' : '') ?>/>  Done <input type='radio' class='space_padding' name='check9' value="working on it" <?php echo ($check9 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check9' value="N/A" <?php echo ($check9 == 'N/A' ? 'checked' : '') ?>/>  N/A </li>                                                

                                                <li>Professional development (Certificates, transcripts, class assignments) <input type='radio' class='space_padding' name='check10' value="Done" <?php echo ($check10 == 'Done' ? 'checked' : '') ?>/>  Done <input type='radio' class='space_padding' name='check10' value="working on it" <?php echo ($check10 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check10' value="N/A" <?php echo ($check10 == 'N/A' ? 'checked' : '') ?>/>  N/A </li>         

                                                <li>Community/Volunteer participation (newspaper clippings, samples of work) <input type='radio' class='space_padding' name='check11' value="Done" <?php echo ($check11 == 'Done' ? 'checked' : '') ?>/>  Done  <input type='radio' class='space_padding' name='check11' value="working on it" <?php echo ($check11 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check11' value="N/A" <?php echo ($check11 == 'N/A' ? 'checked' : '') ?>/>  N/A</li>                                                

                                                <li>Evidence Sample work (presentation outline, charts, graphs, writing samples) <input type='radio' class='space_padding' name='check12' value="Done" <?php echo ($check12 == 'Done' ? 'checked' : '') ?>/>  Done <input type='radio' class='space_padding' name='check12' value="working on it" <?php echo ($check12 == 'working on it' ? 'checked' : '') ?>/>  working on it  <input type='radio' class='space_padding' name='check12' value="N/A" <?php echo ($check12 == 'N/A' ? 'checked' : '') ?>/>  N/A </li>   
                                            </ul>
                                            <button type="submit" name="resume_button" value="submit_resume" class="data_resume_button">Submit Resume</button>
                                            <button type="submit" name="resume_button" value="complete_resume" class="data_resume_button_right">Resume Completed</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper ul_use_logo">                           
                            <li><a data-toggle="tab" href="#menu_sub88888" id="job_app" aria-expanded="true">Jobs</a></li>
                            <li class='active'><a href="#menu_sub17777" id="school_app" data-toggle="tab" aria-expanded="true">Schools</a></li>
                            <img src='<?php echo $this->webroot ?>img/co-logo.png' alt='use_img' class='img_use_webroot'/>
                        </ul>
                        <div class="tab-content tabs_use">
                            <div id="menu_sub88888" class="tab-pane fade">

                                <ul class="nav nav-tabs new_proper">
                                    <li class="active" style="display:none;"><a data-toggle="tab" href="#view_upcoming_job" id="upcoming_job_val" aria-expanded="true">Upcoming Job</a></li>
                                    <li><a data-toggle="tab" href="#add_applicaion" aria-expanded="true">Add Application</a></li>                                    
                                    <li><a data-toggle="tab" href="#view_applocaion" id='displY_none_view_job' aria-expanded="true">View Application</a></li>
                                </ul>
                                <div class='tab-content tabs_use'>    
                                    <div id="add_applicaion" class="tab-pane fade">
                                        <div class="form-group  form_edit">
                                            <form method="post">                           
                                                <input type="hidden" name="form_name" value="add_job">
                                                <input type="hidden" name="form_id_data" id="job_form_id">
                                                <div class="form_color_use">
                                                    <strong>Application Title </strong><br>
                                                    <input type="text" name="app_info" id="app_info1"><br>
                                                    <strong>Application Source</strong><br>
                                                    <select name="app_source" id="source_data">
                                                        <option value="">Select Source</option>
                                                        <option value="On Line">On Line</option>
                                                        <option value="Mailed In">Mailed In</option>
                                                        <option value="In Person">In Person</option>
                                                    </select><br>
                                                    <strong>Application Position</strong><br>
                                                    <input type="text" name="app_name" id="app_name1"><br>
                                                    <strong>Status </strong><br>
                                                    <select name="status" id="status1">
                                                        <option value="">Select Status</option>
                                                        <option value="Submitted">Submitted</option>
                                                        <option value="Accepted">Accepted</option>
                                                        <option value="Complete">Complete</option>
                                                    </select><br>
                                                    <strong>Date Submitted</strong><br>
                                                    <input type='text' name="date_sub" id="date_sub1"/>
                                                    <br>
                                                    <strong>Closing Date</strong><br>
                                                    <input type='text' name="due_date" id="due_date1"/><br/>
                                                    <strong>Reminder</strong><br/>                                                                                                                                                                            
                                                    <input type='radio' class='display_use_check' name="remindar"  id="yes_remindar" value="Yes"/> Yes
                                                    <input type='radio' class='display_use_check' name="remindar" id="no_remindar" value="No"/> No<br/>

                                                    <div id="div_reminder1" style="display:none;">
                                                        <strong>Reminder Date</strong><br>
                                                        <input type="text" name="date_value1" id="date_value2"><br> 
                                                    </div>

                                                    <strong>Type of Resume Submitted </strong><br>                                                                                                               

                                                    <select id='selectbox' name="resume_type">
                                                        <option value="">Select Resume Type</option>
                                                        <option value='Chronological'>Chronological </option>
                                                        <option value='Functional'>Functional</option>
                                                        <option value='Combination'>Combination</option>
                                                    </select>
                                                    <br>
                                                    <strong>Website Address</strong><br>
                                                    <input type="text" name="web_address" id="web_address1"><br>
                                                    <br>
                                                    <strong>Website Password</strong>
                                                    <br/>
                                                    <input type='text' name="web_password" id="web_pass1"/>
                                                    <br/>
                                                    <strong>User Name</strong>
                                                    <input type='text' name="username" id="user_name">
                                                    <br/>
                                                    <strong>Company Name </strong>
                                                    <br/>
                                                    <input type='text' name="company_name" id="company_name1"/>
                                                    <br/>
                                                    <strong>
                                                        City
                                                    </strong>
                                                    <input type='text' name="city_job" id='city2'/><br/>
                                                    <strong>
                                                        Position Applied For
                                                    </strong><br/>
                                                    <input type='checkbox' class='display_use_check' name="position[]" value="Full Time"/> Full Time
                                                    <input type='checkbox' class='display_use_check' name="position[]" value="Part Time"/> Part Time<br/>

                                                    <h5><strong><center>Company Contact Information</center></strong></h5>
                                                    <strong>Name</strong>
                                                    <br/>
                                                    <input type='text' name="contact_name" id='contact_name1'/><br/>
                                                    <strong>Email</strong>
                                                    <br/>
                                                    <input type='text' name='email' id="email1"/><br/>
                                                    <strong>Telephone</strong><br/>
                                                    <input type='number' min="0" name="telephone" id="telephone1"/><br/>
                                                    <strong>Follow Up Reminder</strong>
                                                    <br/>
                                                    <input type='radio' class='display_use_check' name="follow_reminder" value="Yes" id="follow_remider_yes"/> Yes
                                                    <input type='radio' class='display_use_check' name="follow_reminder" value="No" id="follow_remider_no"/> No <br/>
                                                    <div id="date_follow" style="display:none">
                                                        <strong>Reminder date</strong>
                                                        <input type="text" name="date_follow_name" id="date_follow_id">
                                                    </div><br/>
                                                    <strong>Notes </strong><br/>
                                                    <textarea rows='5' class='width_use_div' name="notes" id="note1"></textarea>
                                                    <button type="submit">Save</button><br><br>
                                                    <div class="clearfix"></div>
                                                    </storng>                                                        
                                                </div>
                                            </form>    
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>  
                                    </div>

                                    <div id="view_upcoming_job" class="tab-pane fade active in">
                                        <div class='clearfix'></div>
                                        <div class="table">
                                            <table class='width_use_div div_padding table-responsive'>
                                                <tbody>
                                                    <tr class='tr_body__formate'>
                                                        <td colspan='12'><p class='upcoming_job_use' style="color: #254094 !important;">Up Coming Jobs</p></td>
                                                    </tr>
                                                    <tr class='ro_bg_use'>
                                                        <td><p>Company Name</p></td>
                                                        <td><p>Date Submitted</p></td>
                                                        <td><p>Closing Date</p></td>
                                                        <td><p>Reminder Date</p></td>
                                                        <td><p>Set Reminder</p></td>
                                                        <td><p>Update</p></td>
                                                        <td><p>Delete</p></td>
                                                    </tr>
                                                        <?php if(count($job_upcoming) > 0) {
                                                        foreach ($job_upcoming as $job1) { ?>
                                                    <tr class='bg_use_div_abc'>

                                                        <td><p><?php echo $job1['job_application']['company_name'] ?></p></td>
                                                        <td><p><?php if(!empty($job1['job_application']['submit_date'])) { echo date('d-m-y',strtotime($job1['job_application']['submit_date'])); } else { echo ""; } ?></p></td>
                                                        <td><?php if(date('Y-m-d',strtotime($job1['job_application']['due_date'])) >= date('Y-m-d')) { ?>
                                                            <p style="color:green;"><?php echo date('d-m-y',strtotime($job1['job_application']['due_date'])) ?></p>
                                                        <?php } else { ?>
                                                            <p style="color:red;"><?php echo date('d-m-y',strtotime($job1['job_application']['due_date'])) ?></p>
                                                        <?php } ?>    
                                                        </td>
                                                        <td><p><?php if(!empty($job1['job_application']['remindar_date'])) { echo date('d-m-y',strtotime($job1['job_application']['remindar_date'])); } else { echo ""; } ?></p></td>
                                                        <td><button onclick='job_reminder_popup("<?php echo $job1['job_application']['id'] ?>", "<?php echo $job1['job_application']['user_id'] ?>", "job")'>Reminder</button></td>                                                                                                                         
                                                        <td><button onclick='update_job("<?php echo $job1['job_application']['id'] ?>")'>Update</button></td>
                                                        <td><button onclick='delete_job("<?php echo $job1['job_application']['id'] ?>")'>Delete</button></td>
                                                    </tr>
                                                <?php } } else { ?>
                                                    <tr>
                                                        <td colspan="12" style="padding:15px;"><center><b>No Record Found</b></center></td>
                                                </tr>
                                            <?php } ?>
                                                </tbody>

                                                <tbody>
                                                    <tr class="tr_body__formate">
                                                        <td colspan="12"><p class="upcoming_job_use" style="color: #b90a0a !important;">Application Tracker</p></td>
                                                    </tr>
                                                    <tr class="tr_body__formate">
                                                        <td colspan="3">Applications Submitted</td>
                                                        <td>Accepted</td>
                                                        <td>Complete</td>
                                                        <td colspan="3">Interview</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><?php echo $job_submit; ?></td>
                                                        <td><?php echo $job_accept; ?></td>
                                                        <td><?php echo $job_complete; ?></td>
                                                        <td colspan="3"><?php echo $job_interview; ?></td>
                                                    </tr>
                                                </tbody>
                                                <div class='clearfix'></div>
                                            </table>
                                        </div>
                                        <div class='clearfix'></div>
                                    </div>

                                    <div id="view_applocaion" class="tab-pane fade">
                                        <ul class="nav nav-tabs new_proper">
                                            <li class='active' style='display:none;'>
                                                <a data-toggle="tab" href="#100_tab_view"  id='view_show_job' aria-expanded="true" style='display:none;'>Home</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#20_tab_view" aria-expanded="true">Upload Documents</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#30_tab_view" aria-expanded="true">View Uploaded Documents</a>
                                            </li>
                                        </ul>

                                        <div class='tab-content tabs_use'> 
                                            <div id="100_tab_view" class="tab-pane fade active in">
                                                <div class='clearfix'></div>
                                                <div class="table">
                                                    <table class='width_use_div table-responsive'>
                                                        <tbody>
                                                            <tr class='tr_body__formate'>
                                                                <td colspan='12'><p class='upcoming_job_use'>Up Coming Jobs</p></td>
                                                            </tr>
                                                            <tr class='ro_bg_use'>
                                                                <td><p>Company Name</p></td>
                                                                <td><p>Date Submitted</p></td>
                                                                <td><p>Closing Date</p></td>
                                                                <td><p>Reminder Date</p></td>
                                                                <td><p>Set Reminder</p></td>
                                                                <td><p>Update</p></td>
                                                                <td><p>Delete</p></td>
                                                            </tr>
                                                        <?php if(count($job_data) > 0) {
                                                        foreach ($job_data as $job) { ?>
                                                            <tr class='bg_use_div_abc'>
                                                                <td><p><?php echo $job['job_application']['company_name'] ?></p></td>                                                            
                                                                <td><p><?php if(!empty($job['job_application']['submit_date'])) { echo date('d-m-y',strtotime($job['job_application']['submit_date'])); } else { echo ""; } ?></p></td>
                                                                <td><?php if(date('Y-m-d',strtotime($job['job_application']['due_date'])) >= date('Y-m-d')) { ?><p style="color:green;"><?php echo date('d-m-y',strtotime($job['job_application']['due_date'])) ?></p>
                                                            <?php } else { ?>
                                                                    <p style="color:red;"><?php echo date('d-m-y',strtotime($job['job_application']['due_date'])) ?></p>
                                                            <?php } ?>    
                                                                </td>
                                                                <td><p><?php if(!empty($job['job_application']['remindar_date'])) { echo date('d-m-y',strtotime($job['job_application']['remindar_date'])); } else { echo ""; } ?></p></td>
                                                                <td><button onclick='job_reminder_popup("<?php echo $job['job_application']['id'] ?>", "<?php echo $job['job_application']['user_id'] ?>", "job")'>Reminder</button></td>                                                                                                                         
                                                                <td><button onclick='update_job("<?php echo $job['job_application']['id'] ?>")'>Update</button></td>
                                                                <td><button onclick='delete_job("<?php echo $job['job_application']['id'] ?>")'>Delete</button></td>
                                                            </tr>
                                                        <?php } } else { ?>
                                                            <tr>
                                                                <td colspan="12" style="padding:15px;"><center><b>No Record Found</b></center></td>
                                                        </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                        <div class='clearfix'></div>
                                                    </table>
                                                </div>
                                                <div class='clearfix'></div>
                                            </div>
                                            <div id="20_tab_view" class="tab-pane fade">

                                                <div class="form-group  form_edit">
                                                    <form method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="form_name" value="job_upload_doc"> 
                                                        <input type="hidden" name="school_doc_id_name" id="job_doc_id_val" value=""> 
                                                        <input type="hidden" name="school_doc_value" id="job_upload_id"> 
                                                        <div class="form_color_use">
                                                            <strong>Name Of Document </strong><br>
                                                            <input type="text" name="doc_name" id="job_doc_id"><br>
                                                            <strong>Date</strong><br>
                                                            <input type="text" name="date" id="job_doc_date"><br>
                                                            <strong>Upload Document</strong><br>
                                                            <input type="file" class="width_use_div" name="job_doc">
                                                            <strong>Description Of Document</strong><br>
                                                            <textarea rows="5" class="width_use_div" name="doc_desc" id="job_doc_desc"></textarea>
                                                            <button type="submit">Save</button><br><br>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </form>    
                                                </div>

                                            </div>
                                            <div id="30_tab_view" class="tab-pane fade">
                                                <div class="form_div_new">
                                                    <div class="table">
                                                        <table class="table_data table-responsive"> 
                                                            <tbody>
                                                                <tr>
                                                                    <th>Document Name</th>
                                                                    <th>Date</th>
                                                                    <th>Document Description</th>
                                                                    <th>View</th>
                                                                    <th>Update</th>
                                                                    <th>Delete</th>
                                                                </tr>   
                                                        <?php if(count($job_doc_data) > 0) {
                                                        foreach ($job_doc_data as $docs1) { ?>
                                                                <tr>
                                                                    <td><p class="Pull-left"><?php echo $docs1['upload_document']['doc_name'] ?></p></td>
                                                                    <td><p><?php echo date('d/M/Y',strtotime($docs1['upload_document']['date'])) ?></p></td>
                                                                    <td><p><?php echo $docs1['upload_document']['doc_description'] ?></p></td>
                                                                    <td>
                                                                    <?php if(!empty($docs1['upload_document']['upload_doc'])) { ?>
                                                                        <a href='dashboards/download?filename=<?php echo $docs1['upload_document']['upload_doc'] ?>'>View</a>
                                                                    <?php } ?>
                                                                    </td>
                                                                    <td><button onclick='update_job_doc("<?php echo $docs1['upload_document']['id'] ?>")'>Update</button></td>
                                                                    <td><i class="fa fa-trash-o del_trsh" aria-hidden="true" onclick='delete_job_doc("<?php echo $docs1['upload_document']['id'] ?>")'></i></td>
                                                                </tr>
                                                            <?php } } else { ?>
                                                                <tr>
                                                                    <td colspan="6"><p><center>No Record Found</center></p></td>              
                                                            </tr>
                                                        <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='clearfix'></div>

                                        <div class='clearfix'></div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu_sub17777" class="tab-pane fade active in">

                                <ul class="nav nav-tabs new_proper">
                                    <li class="active" style="display:none;"><a data-toggle="tab" href="#1_upcoming_tab_view" id='view_school_app' aria-expanded="true">Jobs12</a></li>
                                    <li><a data-toggle="tab" href="#add_applicaion_new" aria-expanded="true">Add Application</a>
                                    </li>                                    
                                    <li id="displY_none_view_app_p_li">
                                        <a data-toggle="tab" href="#view_applocaion_new" id='displY_none_view_app' aria-expanded="true">View Application</a>
                                    </li>
                                </ul>

                                <div class='tab-content tabs_use'>    
                                    <div id="add_applicaion_new" class="tab-pane fade">

                                        <div class="form-group  form_edit">
                                            <form method="post">
                                                <div class="form_color_use">
                                                    <input type="hidden" name="form_name" value="school_form">
                                                    <input type="hidden" name="form_id" id="form_student_id">
                                                    <strong>Name</strong><br>
                                                    <input type="text" name="name" id="name1"><br>
                                                    <strong>Status</strong><br>
                                                    <select name="status" id="status_school">
                                                        <option value="">Select Status</option>
                                                        <option value="Not Submitted">Not Submitted</option>
                                                        <option value="Applied">Applied</option>
                                                        <option value="Received">Received</option>
                                                        <option value="Accepted">Accepted</option>
                                                    </select><br>
                                                    <strong>Due Date of Application </strong><br>
                                                    <input type="text" name="due_date" id="due_date2"><br>                                              
                                                    <strong>Due Date Reminder </strong><br>
                                                    <input type="radio" class="display_use_check" value="Yes" name="reminder_date" id="school_yes"> Yes
                                                    <input type="radio" class="display_use_check" value="No" name="reminder_date" id="school_no"> No
                                                    <br>

                                                    <div id="div_reminder" style="display:none;">
                                                        <strong>Reminder Date</strong><br>
                                                        <input type="text" name="due_reminder1" id="due_reminder2"><br> 
                                                    </div>

                                                    <input type="hidden" id="box1" name="due_reminder"><br/>                                                    

                                                    <h5><strong><center>School Information</center></strong></h5> <strong>Name Of School</strong>
                                                    <br>
                                                    <input type="text" name="school_info" id="school_info1"><br>
                                                    <strong>City</strong>
                                                    <br>
                                                    <input type="text" name="city" id="city1"><br>
                                                    <strong>Province </strong><br>
                                                    <input type="text" name="province" id="province1"><br>
                                                    <strong>Location</strong><br/>
                                                    <input type='text' name="location" id="location1"/>
                                                    <br>
                                                    <div class='pull-right'><strong>Fees Paid</strong>
                                                        <input type="radio" class="display_use_check" value="Yes" name="fees"> Yes
                                                        <input type="radio" class="display_use_check" value="No" name="fees"> No 
                                                    </div>
                                                    <strong>Transcriptions Submitted</strong>
                                                    <input type="radio" class="display_use_check" value="Yes" name="transcription"> Yes
                                                    <input type="radio" class="display_use_check" value="No" name="transcription"> No <br/>

                                                    <strong>High School Records</strong>
                                                    <input type="radio" class="display_use_check" value="Yes" name="school_record"> Yes
                                                    <input type="radio" class="display_use_check" value="No" name="school_record"> No <div class='pull-right'>
                                                        <strong>University Records</strong>
                                                        <input type="radio" class="display_use_check" value="Yes" name="university_record"> Yes
                                                        <input type="radio" class="display_use_check" value="No" name="university_record"> No 
                                                    </div><br/><br/><br/>
                                                    <strong>Other Supporting Documentation</strong>
                                                    <ul class='new_view_new'>
                                                        <li>Name changes/differences on documentation must be supported with official evidence.</li>
                                                        <li>Other supporting documentation may include: a copy of your CV; a statement of interest; sample of writing, etc. Please check your program to see if you need to provide any additional documents.</li>
                                                        <li>A copy of birth certificate or passport (once admitted)</li>
                                                    </ul>
                                                    <strong> Letter Of Reference &nbsp; &nbsp; <input type="radio" class="display_use_check" value="Yes" name="ref_letter"/>&nbsp; Yes  <input type="radio" class="display_use_check" value="No" name="ref_letter"/>&nbsp;  No &nbsp; ( Did you upload to your Dashboard ) </strong><br/>
                                                    <storng>Test Scores <input type="radio" class="display_use_check" value="Yes" name="test_score"/>  Yes   <input type="radio" class="display_use_check" value="No" name="test_score"/> No </storng>
                                                    <div class='pull-right'>
                                                        <storng>Submit Personal Statement   <input type="radio" class="display_use_check" value="Yes" name="submit_personal"/>  Yes   <input type="radio" class="display_use_check" value="No" name="submit_personal"/> No </storng>
                                                    </div><br/>
                                                    <strong>Notes </strong><br>
                                                    <textarea rows="5" class="width_use_div" name="note" id='note2'></textarea>
                                                    <button type="submit">Save</button><br><br>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>    
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>  
                                    </div>

                                    <div id="1_upcoming_tab_view"  class="tab-pane fade active in">
                                        <div class="table">
                                            <table class='width_use_div div_padding table-responsive'>
                                                <tbody>
                                                    <tr class='tr_body__formate'>
                                                        <td colspan='12'><p class='upcoming_job_use' style="color: #254094 !important;">Upcoming School Application</p></td>
                                                    </tr>
                                                    <tr class='ro_bg_use'>
                                                        <td><p>School Name</p></td>
                                                        <td><p>Date Submitted</p></td>
                                                        <td><p>Closing Date</p></td>
                                                        <td><p>Reminder Date</p></td>
                                                        <td><p>Set Reminder</p></td>
                                                        <td><p>Update</p></td>
                                                        <td><p>Delete</p></td>
                                                    </tr>
                                                        <?php if(count($school_upcoming) > 0) {
                                                        foreach ($school_upcoming as $school1) { ?>
                                                    <tr class='bg_use_div_abc'>

                                                        <td><p><?php echo $school1['school_application']['school_name'] ?></p></td>
                                                        <td><p><?php if(!empty($school1['school_application']['submit_date'])) { echo date('d-m-y',strtotime($school1['school_application']['submit_date'])); } else { echo ''; } ?></p></td>
                                                        <td><?php if(date('Y-m-d',strtotime($school1['school_application']['due_date'])) >= date('Y-m-d')) { ?>
                                                            <p style="color:green;"><?php echo date('d-m-y',strtotime($school1['school_application']['due_date'])) ?></p>
                                                        <?php } else { ?>
                                                            <p style="color:red;"><?php echo date('d-m-y',strtotime($school1['school_application']['due_date'])) ?></p>
                                                        <?php } ?>    
                                                        </td>
                                                        <td><p><?php if(!empty($school1['school_application']['due_reminder'])) { echo date('d-m-y',strtotime($school1['school_application']['due_reminder'])); } else { echo ''; } ?></p></td>
                                                        <td><button onclick='reminder_popup("<?php echo $school1['school_application']['id'] ?>", "<?php echo $school1['school_application']['user_id'] ?>", "school")'>Reminder</button></td>                                                                                                                           
                                                        <td><button onclick='update_school("<?php echo $school1['school_application']['id'] ?>")'>Update</button></td>
                                                        <td><button onclick='delete_school("<?php echo $school1['school_application']['id'] ?>")'>Delete</button></td>

                                                    </tr>
                                                <?php } } else { ?>
                                                    <tr class="tr_body__formate">
                                                        <td colspan="12" style="padding:15px;"><center><b>No Record Found</b></center></td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>

                                                <tbody>
                                                    <tr class="tr_body__formate">
                                                        <td colspan="12"><p class="upcoming_job_use" style="color: #b90a0a !important;">Application Tracker</p></td>
                                                    </tr>
                                                    <tr class="tr_body__formate">
                                                        <td colspan="3">Applications Not Submitted</td>
                                                        <td>Applied</td>
                                                        <td>Recieved</td>
                                                        <td colspan="3">Accepted</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><?php echo $school_submit; ?></td>
                                                        <td><?php echo $school_accept; ?></td>
                                                        <td><?php echo $school_complete; ?></td>
                                                        <td colspan="3"><?php echo $school_interview; ?></td>
                                                    </tr>
                                                </tbody>

                                                <div class='clearfix'></div>
                                            </table>
                                        </div>	
                                    </div>

                                    <div id="view_applocaion_new" class="tab-pane fade">
                                        <ul class="nav nav-tabs new_proper">

                                            <li class='active' style='display:none;'>
                                                <a data-toggle="tab" href="#1_tab_view"  id='view_show_app' aria-expanded="true" style='display:none;'>Home</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#2_tab_view" aria-expanded="true">Upload Documents</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#3_tab_view" aria-expanded="true">View Uploaded Documents</a>
                                            </li>

                                        </ul>
                                        <div class='tab-content tabs_use'> 
                                            <div id="1_tab_view"  class="tab-pane fade active in">
                                                <div class="table">
                                                    <table class='width_use_div table-responsive'>
                                                        <tbody>
                                                            <tr class='tr_body__formate'>
                                                                <td colspan='12'><p class='upcoming_job_use'>Upcoming School Application</p></td>
                                                            </tr>
                                                            <tr class='ro_bg_use'>
                                                                <td><p>School Name</p></td>
                                                                <td><p>Date Submitted</p></td>
                                                                <td><p>Closing Date</p></td>
                                                                <td><p>Reminder Date</p></td>
                                                                <td><p>Set Reminder</p></td>
                                                                <td><p>Update</p></td>
                                                                <td><p>Delete</p></td>
                                                            </tr>
                                                        <?php if(count($school_data) > 0) {
                                                        foreach ($school_data as $school) { ?>
                                                            <tr class='bg_use_div_abc'>
                                                                <td><p><?php echo $school['school_application']['school_name'] ?></p></td>
                                                                <td><p><?php if(!empty($school['school_application']['submit_date'])) { echo date('d-m-y',strtotime($school['school_application']['submit_date'])); } else { echo ""; } ?></p></td>
                                                                <td><?php if(date('Y-m-d',strtotime($school['school_application']['due_date'])) >= date('Y-m-d')) { ?><p style="color:green;"><?php echo date('d-m-y',strtotime($job['job_application']['due_date'])) ?></p>
                                                            <?php } else { ?>
                                                                    <p style="color:red;"><?php echo date('d-m-y',strtotime($school['school_application']['due_date'])) ?></p>
                                                            <?php } ?>    
                                                                </td>
                                                                <td><p><?php if(!empty($school['school_application']['due_reminder'])) { echo date('d-m-y',strtotime($school['school_application']['due_reminder'])); } else { echo ""; } ?></p></td>
                                                                <td><button onclick='reminder_popup("<?php echo $school['school_application']['id'] ?>", "<?php echo $school['school_application']['user_id'] ?>", "school")'>Reminder</button></td>                                                                                                                           
                                                                <td><button onclick='update_school("<?php echo $school['school_application']['id'] ?>")'>Update</button></td>
                                                                <td><button onclick='delete_school("<?php echo $school['school_application']['id'] ?>")'>Delete</button></td>

                                                            </tr>
                                                        <?php } } else { ?>
                                                            <tr>
                                                                <td colspan="12" style="padding:15px;"><center><b>No Record Found</b></center></td>
                                                        </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                        <div class='clearfix'></div>
                                                    </table>
                                                </div>
                                            </div>

                                            <div id="2_tab_view" class="tab-pane fade">

                                                <div class="form-group  form_edit">
                                                    <form method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="form_name" value="school_upload_doc">
                                                        <input type="hidden" name="school_doc_id_name" id="school_doc_id_val">
                                                        <input type="hidden" name="school_doc_value" id="school_doc_value_id">
                                                        <div class="form_color_use">
                                                            <strong>Name Of Document </strong><br>
                                                            <input type="text" name="doc_name" id="school_doc_name"><br>
                                                            <strong>Date</strong><br>
                                                            <input type="text" name="date" id="school_doc_date"><br>
                                                            <strong>Upload Document</strong><br>
                                                            <input type="file" class="width_use_div" name="job_doc">
                                                            <strong>Description Of Document</strong><br>
                                                            <textarea rows="5" class="width_use_div" name="doc_desc" id="school_doc_desc"></textarea>
                                                            <button type="submit">Save</button><br><br>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </form>    
                                                </div>

                                            </div>
                                            <div id="3_tab_view" class="tab-pane fade">
                                                <div class="form_div_new">
                                                    <div class="table">
                                                        <table class="table_data table-responsive"> 
                                                            <tbody>
                                                                <tr>
                                                                    <th>Document Name</th>
                                                                    <th>Date</th>
                                                                    <th>Document Description</th>
                                                                    <th>View</th>
                                                                    <th>Update</th>
                                                                    <th>Delete</th>
                                                                </tr>   
                                                            <?php if(count($school_doc_data) > 0) {
                                                                foreach ($school_doc_data as $docs) { ?>
                                                                <tr>
                                                                    <td><p class="Pull-left"><?php echo $docs['upload_document']['doc_name'] ?></p></td>
                                                                    <td><p class="pull-left"><?php echo date('d/M/Y',strtotime($docs['upload_document']['date'])) ?></p></td>
                                                                    <td><p><?php echo $docs['upload_document']['doc_description'] ?></p></td>
                                                                    <td>
                                                                    <?php if(!empty($docs['upload_document']['upload_doc'])) { ?>
                                                                        <a href='dashboards/download?filename=<?php echo $docs['upload_document']['upload_doc'] ?>'>View</a>
                                                                    <?php } ?>
                                                                    </td>
                                                                    <td><button onclick='update_school_doc("<?php echo $docs['upload_document']['id'] ?>")'>Update</button></td>
                                                                    <td><i class="fa fa-trash-o del_trsh" aria-hidden="true" onclick='delete_school_doc("<?php echo $docs['upload_document']['id'] ?>")'></i></td>
                                                                </tr>
                                                            <?php } } else { ?>
                                                                <tr>
                                                                    <td colspan="6"><p><center>No Record Found</center></p></td>              
                                                            </tr>
                                                        <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='clearfix'></div>

                                        <div class='clearfix'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="menu3" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper ul_use_logo">
                            <li class="active"><a class="menu_anchor" data-toggle="tab" href="#open_new_app" aria-expanded="true">Add Accomplishments</a></li>
                            <li><a class="menu_anchor" data-toggle="tab" href="#veiw_accoplis" aria-expanded="true">View Accomplishments</a></li>
                            <li><a class="menu_anchor" data-toggle="tab" href="#minimal_exp" aria-expanded="true">Minimal Experience</a></li>
                            <li><a class="menu_anchor" data-toggle="tab" href="#veiw_minimal" aria-expanded="true">View Minimal Experiences</a></li>
                        </ul>
                        <div class="tab-content tabs_use">
                            <div id="open_new_app" class="tab-pane fade active in">
                                <div class="form-group  form_edit">
                                    <div class="form_color_use">
                                        <form method="post">
                                            <input type="hidden" name="form_name" value="accomplish">
                                            <input type="hidden" name="accomp_id_data" value="" id="accomp_id">
                                            <div class="form_group" id="count_accmp">
                                                <strong>Please enter the number of Accomplishments you wish to enter</strong> 
                                                <input type="number" min="1" class="width_use_div" id="no_job">
                                                <input type="hidden" name="count_data" id="count_job">
                                                <button type="button" class="button_div_data" onclick="countjob()" style="width: 15%;font-size: 16px;">submit</button>
                                            </div>                                        

                                            <div id="recenet_job"></div>

                                            <div class="clearfix"></div>

                                        </form>        
                                    </div>     
                                </div>
                            </div> 
                            <div id="veiw_accoplis" class="tab-pane fade">
                                <div class="form-group">
                                    <div class="form_color_use">
                                        <div class="table">
                                            <table class="table_use_div word_div table-responsive">
                                        <?php $i =1;  if(count($acomplish_data) > 0) {
                                           foreach ($acomplish_data as $acomplish) { 
                                        ?>    
                                                <tr>
                                                    <td colspan="2" style="border-top: 5px solid #000;"></td>   
                                                </tr>
                                                <tr>
                                                    <td><h5><center><?php echo $i ?>. Recent Job</center></h5></td>
                                                    <td><span class="recent_job_button"><input type="button" value="Update" onclick='update_accomp("<?php echo $acomplish['acomplishment']['id'] ?>")'>
                                                            <input type="button" value="Delete" onclick='delete_accomp("<?php echo $acomplish['acomplishment']['id'] ?>")'></span>
                                                    </td>
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

                                            <?php  $i++; }  } else { ?>
                                                <tr>
                                                    <th colspan="2"><center><b>No Record Found</b></center></th>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="minimal_exp" class="tab-pane fade">
                                <div class="form-group  form_edit">
                                    <div class="form_color_use">
                                        <form method="post">     
                                            <input type="hidden" name="form_name" value="minimal_exp">
                                            <input type="hidden" name="minimal_id_name" id="minimal_id_val" value="">
                                            <h1><center>MINIMAL EXPERIENCE</center></h1>
                                            <div class="form_group">
                                                <strong>Relevant accomplishments from</strong><br>
                                                <select name="relevant" id="relevant_id">
                                                    <option value="">Select List</option>
                                                    <option value='Internships'>Internships</option>
                                                    <option value='Summer jobs'>Summer jobs</option>
                                                    <option value='Campus jobs (work-study)'>Campus jobs (work-study)</option>
                                                    <option value='Entrepreneurial/Self-Employed jobs'>Entrepreneurial/Self-Employed jobs</option>
                                                    <option value='Temporary work'>Temporary work</option>
                                                    <option value='Volunteer Work'>Volunteer Work</option>
                                                    <option value='Certification courses'>Certification courses</option>
                                                    <option value='Campus activity positions'>Campus activity positions</option>
                                                    <option value='Fraternity/sorority/social club positions'>Fraternity/sorority/social club positions</option>
                                                    <option value='Extracurricular or sports leadership positions'>Extracurricular or sports leadership positions</option>
                                                </select>
                                            </div>
                                            <div class="form_group">
                                                <strong>1. What technical accomplishments have you had? For example, did you write a software program, design a Web page?<br></strong><br>
                                                <textarea rows="5" class="width_use_div" name="technical" id="technical_id"></textarea>
                                            </div>
                                            <div class="form_group">
                                                <strong>2. What competitions did you excel in?<br></strong><br>
                                                <textarea rows="5" class="width_use_div" name="competitions" id="competitions_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>3. What superlatives can you list, such as the highest grade, the best test score, the strongest essay?
                                                    <br></strong><br>
                                                <textarea rows="5" class="width_use_div" name="superlatives" id="superlatives_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>4. What creative accomplishments have you had? Were any of your poetry, plays, stories, music, art published, performed, or exhibited?
                                                    <br></strong><br>
                                                <textarea rows="5" class="width_use_div" name="creative" id="creative_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>5. What leadership positions have you held that demonstrate important skills that relate to the type of position you seek?
                                                    <br></strong><br>
                                                <textarea rows="5" class="width_use_div" name="leadership" id="leadership_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>6. Did members of your group choose or elect you to a certain position based on special skills you possess? Did a supervisor or professor hand-pick you for additional responsibilities or special project(s)? Also list situations in which you chose to take on additional responsibilities.
                                                    <br></strong><br>
                                                <textarea rows="5" class="width_use_div" name="members" id="members_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>7. What kinds of things have your friends and classmates always asked you for help and advice about? What are your areas of expertise?
                                                    <br></strong><br>
                                                <textarea rows="5" class="width_use_div" name="friends" id="friends_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>8. What community service projects did you undertake and what were the results of your efforts? Hint: For group efforts, phrase your accomplishments like this: “Participated in team effort that raised funds for charity that broke a school record.”
                                                    <br></strong><br>
                                                <textarea rows="5" class="width_use_div" name="community" id="community_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>9. How have you used organizational or managerial skills?
                                                    <br></strong><br>
                                                <textarea rows="5" class="width_use_div" name="organizational" id="organizational_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>10. What ideas have you come up with to improve the organizations with which you’ve been involved? </strong><br><br>
                                                <textarea rows="5" class="width_use_div" name="ideas" id="ideas_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>11. List situations in which you’ve handled money or budgets. How have you raised, collected, or managed funds?</strong><br><br>
                                                <textarea rows="5" class="width_use_div" name="situations" id="situations_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>12. Give one or more examples of ways you have exhibited interpersonal skills?</strong><br><br>
                                                <textarea rows="5" class="width_use_div" name="examples" id="examples_id"></textarea>
                                            </div>   <br>
                                            <div class="form_group">
                                                <strong>13. List situations in which you have trained, taught, or oriented organization members. Have you spoken in public or written for an audience?</strong><br><br>
                                                <textarea rows="5" class="width_use_div" name="trained" id='trained_id'></textarea>
                                            </div> <br>
                                            <div class="form_group">
                                                <strong>14. Have you recruited new members to any organizations?</strong><br><br>
                                                <textarea rows="5" class="width_use_div" name="recruited" id="recruited_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>15. In what situations have you employed problem-solving, conflict-resolution, or mediation skills?</strong><br><br>
                                                <textarea rows="5" class="width_use_div" name="problem_solve" id="problem_solve_id"></textarea>
                                            </div>  <br>
                                            <div class="form_group">
                                                <strong>16. List situations in which you were required to deal with the public. Describe any situations in which you responded to complaints or smoothed ruffled feathers.</strong><br><br>
                                                <textarea rows="5" class="width_use_div" name="deal" id="deal_id"></textarea>
                                            </div>
                                            <br>
                                            <div class="form_group">
                                                <strong>17. How have you demonstrated teamwork (for example, as an athlete)?</strong><br><br>
                                                <textarea rows="5" class="width_use_div" name="demonstrated" id="demonstrated_id"></textarea>
                                            </div>
                                            <br>
                                            <div class="form_group">
                                                <strong>18. How have you demonstrated individual drive and determination (for example, as an athlete)?</strong><br><br>
                                                <textarea rows="5" class="width_use_div" name="drive" id="drive_id"></textarea>
                                            </div>
                                            <br>               
                                            <div class="form_group">
                                                <strong>19. Did you work with the general public?</strong><br><br>
                                                <textarea rows="5" class="width_use_div" name="general" id="general_id"></textarea>
                                            </div> 
                                            <div class="form_group">
                                                <strong>20. List situations in which you required to juggle many projects simultaneously under deadline pressure.</strong><br><br>
                                                <textarea rows="5" class="width_use_div" name="juggle" id="juggle_id"></textarea>
                                            </div> 

                                            <br>          
                                            <button type="submit">Save</button><br><br>       

                                            <div class="clearfix"></div>

                                        </form>        
                                    </div>     
                                </div>
                            </div> 

                            <div id="veiw_minimal" class="tab-pane fade">
                                <div class="form-group">
                                    <div class="form_color_use">
                                        <div class="table-responsive">
                                            <table class="table_use_div word_div table-responsive">
                                        <?php $i = 1;
                                        if(count($view_minimal) > 0) {
                                           foreach ($view_minimal as $minimal) { 
                                        ?>
                                                <tr><td style="border-top: 5px solid #000;"></td></tr>
                                                <tr>
                                                    <td><h5>Minimal Experience <?php echo $i++; ?>
                                                            <span class="recent_job_button1 pull-right">
                                                                <button onclick='update_minimal("<?php echo $minimal['minimal_experience']['id'] ?>")'>Update</button>
                                                                <button onclick='delete_minimal("<?php echo $minimal['minimal_experience']['id'] ?>")'>Delete</button>
                                                            </span>
                                                        </h5>    
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Relevant accomplishments from</th>                                               
                                                </tr>    
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['relevant'] ?></td>                                               
                                                </tr>
                                                <tr>
                                                    <th>1. What technical accomplishments have you had? For example, did you write a software program, design a Web page?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['technical'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>2. What competitions did you excel in?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['competition'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>3. What superlatives can you list, such as the highest grade, the best test score, the strongest essay? </th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['superlatives'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>4. What creative accomplishments have you had? Were any of your poetry, plays, stories, music, art published, performed, or exhibited?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['creative'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>5. What leadership positions have you held that demonstrate important skills that relate to the type of position you seek?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['leadership'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>6. Did members of your group choose or elect you to a certain position based on special skills you possess? Did a supervisor or professor hand-pick you for additional responsibilities or special project(s)? Also list situations in which you chose to take on additional responsibilities.</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['members'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>7. What kinds of things have your friends and classmates always asked you for help and advice about? What are your areas of expertise?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['friends'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>8. What community service projects did you undertake and what were the results of your efforts? Hint: For group efforts, phrase your accomplishments like this: “Participated in team effort that raised funds for charity that broke a school record.”</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['projects'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>9. How have you used organizational or managerial skills?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['organizational'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>10. What ideas have you come up with to improve the organizations with which you’ve been involved? </th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['ideas'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>11. List situations in which you’ve handled money or budgets. How have you raised, collected, or managed funds?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['money'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>12. Give one or more examples of ways you have exhibited interpersonal skills?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['examples'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>13. List situations in which you have trained, taught, or oriented organization members. Have you spoken in public or written for an audience?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['trained'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>14. Have you recruited new members to any organizations?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['recruited'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>15. In what situations have you employed problem-solving, conflict-resolution, or mediation skills?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['problem_solve'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>16. List situations in which you were required to deal with the public. Describe any situations in which you responded to complaints or smoothed ruffled feathers.</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['deal'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>17. How have you demonstrated teamwork (for example, as an athlete)?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['teamwork'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>18. How have you demonstrated individual drive and determination (for example, as an athlete)?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['individual'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>19. Did you work with the general public?</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['general'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>20. List situations in which you required to juggle many projects simultaneously under deadline pressure.</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $minimal['minimal_experience']['general'] ?></td>
                                                </tr>

                                            <?php }  } else { ?>
                                                <tr>
                                                    <th><center><b>No Record Found</b></center></th>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div id="essential_skill" class="tab-pane fade">

                        <ul class="nav nav-tabs new_proper">
                            <li style="display:none;"><a data-toggle="tab" href="#NewEssential_skill">Add New Essential skill</a></li>
                            <li><a data-toggle="tab" href="#Add_NewEssential_skill">Add New Essential skill</a></li>
                            <li><a data-toggle="tab" href="#Essential_Skills">Essential Skills</a></li>                        
                        </ul>

                        <div class='tab-content tabs_use'>
                            <div id="NewEssential_skill" class="tab-pane fade in active">
                                <div class="row_use_what_career_dashbored idv">
                                    <h1>Essential Skill</h1>
                                    <strong>
                                        <p>
                                            Employers often refer to these skills as foundation skills, attitudes and/or Essential Skills.
                                            <br><br>There are nine Essentials Skills. They are:
                                        </p>
                                        <ol class="div_width_wi">
                                            <li>NUMERACY</li>
                                            <li>WRITING</li>
                                            <li>READING</li>
                                            <li>DOCUMENT USE</li>
                                            <li>THINKING SKILLS</li>
                                            <li>CONTINUOUS LEARNING</li>
                                            <li>WORKING WITH OTHERS</li>
                                            <li>COMPUTER USE</li>
                                            <li>ORAL COMMUNICATION</li>
                                            <li>SELF ESTEEM AND CONFIDENCE</li>
                                            <li>INITIATIVE</li>
                                            <li>RESPECTING DIVERSITY</li>
                                        </ol>

                                        <p> You may have developed Essential Skills through school, jobs, internships, volunteerism
                                            and other life experiences. It is important to understand that most new jobs or educational
                                            experiences demand us to increase our Essential Skills

                                        </p>

                                    </strong>
                                </div>
                            </div>
                            <div id="Add_NewEssential_skill" class="tab-pane fade">
                                <div class="row_use_what_career_dashbored div_clas_shad">
                                    <div class='form_div_use update_essen_skill'>
                                        <h1>Add Essential skill</h1>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull_layout_setup">
                                            <select id='select_dic_si' style="width: 100%">
                                                <option>--- Select ---</option>
                                                <option value='NUMERACY'>NUMERACY</option>
                                                <option value='WRITING'>WRITING</option>
                                                <option value='READING_AND_DOCUMENT_USE'>READING & DOCUMENT USE</option>                                                        
                                                <option value='THINKING_SKILLS'>THINKING SKILLS</option>
                                                <option value='CONTINUOUS_LEARNING'>CONTINUOUS LEARNING</option>
                                                <option value='WORKING_WITH_OTHERS'>WORKING WITH OTHERS</option>
                                                <option value='COMPUTER_USE'>COMPUTER USE</option>
                                                <option value='ORAL_COMMUNICATION'>ORAL COMMUNICATION</option>
                                                <option value='Self_Esteem_and_confidance'>SELF ESTEEM AND CONFIDENCE</option>
                                                <option value='Initiative'>INITIATIVE</option>
                                                <option value='Respecting_Diversity'>RESPECTING DIVERSITY</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull_layout_setup">
                                            <button id="select_dic_si_button">Update</button>
                                        </div>                                                
                                    </div>
                                </div>
                                <div class="row_use_what_career_dashbored">
                                    <div class='Numberic_firsrt'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                            <h1>Numeracy</h1>
                                            <div class='box_div_class'>
                                                <h1>Perform simple calculations for adding, subtracting, multiply and dividing numbers</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>
                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>   
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Perform calculations for adding, subtracting, multiplying and dividing fractions and decimals and for converting between fractions and decimals</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>   
                                                        </tbody>
                                                    </table>
                                                </div>	
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Use mathematical equations and perform more complex calculations such as calculating percent and rate and ratio</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>   
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Convert from one unit of measurement to another Calculate area, perimeter and volume of common shapes</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>   
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Perform complex or multi-step calculations and operations that require using advanced mathematical strategies</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>   
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Measure using tools or equipment to determine length, angle, volume or weight</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>   
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Perform financial transactions such as preparing bills and receiving cash payment and making change</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr> 
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Plan or monitor schedules and/or budgets Analyze or compare numerical data to identify trends or compare statistics</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Make accurate estimations such as estimating quantities, weight, measurement or time to complete a task</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>                                                                                                        
                                            <div class="clearfix"></div>    
                                        </div>        
                                    </div>

                                    <div class='Numberic_secd'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                            <h1>Writing</h1>
                                            <div class='box_div_class'>
                                                <h1>Write clearly and concisely using correct grammar, punctuation and spelling</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Communicate in writing using style and content appropriate to purpose and audience</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr> 
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Write short notes that accurately document information</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>	
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Write longer pieces, letters and reports, that are logically structured and contain all the relevant information</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Create written pieces that are original in content and style</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='clearfix'></div>    
                                        </div>
                                    </div>
                                    <div class='Numberic_third'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                            <h1>Reading and Document Use</h1>
                                            <div class='box_div_class'>
                                                <h1>Read and follow directions on labels</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Read and interpret written instructions correctly</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Read and understand workplace documents such as health and safety information, manuals, and policies and procedures</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Read and evaluate longer pieces of text such as reports in order to provide an opinion or give recommendations</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Recognize common symbols, icons and signs</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Enter information into forms, charts or tables</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Locate required information from lists, schedules, tables, graphs, maps and diagrams</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Interpret information found in maps, graphs, diagrams, charts and symbols</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Create documents such as lists, tables, charts, graphs or diagrams</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Enter multiple pieces of information into complex forms, charts, or tables</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='clearfix'></div>  
                                        </div>        

                                    </div>
                                    <div class='Numberic_fourth'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                            <h1>Thinking Skills</h1>
                                            <div class='box_div_class'>
                                                <h1>Use a problem solving strategy to constructively resolve problems, issues and concerns</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Think logically through situations in order to provide an suitable response</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Remember how different tasks are done</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Find information needed from sources such as manuals and online resources</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Use a decision making process to make appropriate and timely decisions</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Plan and organize tasks in order to use time efficiently and effectively</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='clearfix'></div>  
                                        </div>        

                                    </div>
                                    <div class='Numberic_sixth'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                            <h1>Continuous Learning</h1>
                                            <div class='box_div_class'>
                                                <h1>Learn new tasks by listening to and watching demonstrations</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Use new equipment</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Show a positive attitude toward learning new things</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Take a course related to your job</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr> 
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Understand that learning takes place in all parts of life, not only in classrooms</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Identify own learning style and what works best for myself in various situations</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responisve new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Ask questions to promote learning, make connections to increase understanding</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Apply learning from one situation to another Teaching, coaching or mentoring others</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='clearfix'></div>
                                        </div>        

                                    </div>
                                    <div class='Numberic_seven'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                            <h1>Working with Others</h1>
                                            <div class='box_div_class'>
                                                <h1>Demonstrate respect and caring, be open to and supportive of the thoughts, opinions and contributions of others</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Work within the dynamics of a group to achieve common goals and objectives</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Deal with differences and conflict within the group with respect and tact</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Recognize and respect for people’s diversity and individual differences</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Accept authority and working under supervision Cooperate with others to accomplish shared goals</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Support and help others Contribute key information and ideas while respecting and being open to others’ opinions and contributions</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Lead and support as needed such as motivating others, taking initiative, keeping everyone involved, and dealing with change</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Accept and provide constructive feedback</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='clearfix'></div> 
                                        </div>        

                                    </div>
                                    <div class='Numberic_eight'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                            <h1>Computer Use</h1>
                                            <div class='box_div_class'>
                                                <h1>Use electronic devices such as calculators, photocopiers and cell phones</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Perform basic computer tasks such as creating documents, saving files and sending email</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Carry out tasks which require the use of a wide range of software features</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Navigate through multiple computer screens</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>

                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Demonstrate expert knowledge of computer software and information technology systems</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='clearfix'></div> 
                                        </div>        

                                    </div>
                                    <div class='Numberic_nine'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                            <h1>Oral Communication</h1>
                                            <div class='box_div_class'>
                                                <h1>Communicate with others to share information, answer questions, seek clarification and provide direction</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Participate in formal and informal meetings</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr> 
                                                        </tbody>
                                                    </table>
                                                </div>	
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Provide clear explanations that are appropriate to the situation and the audience</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Interact with others to provide good customer service</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Communicate with others to instruct, educate, coach and provide feedback</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Communicate with others using a variety of communication strategies to negotiate, mediate, resolve difficult issues and sell ideas</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='clearfix'></div>
                                        </div>        

                                    </div>
                                    <div class='Numberic_ten'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                            <h1>Self Esteem and Confidence</h1>
                                            <div class='box_div_class'>
                                                <h1>State own strengths and determine how to apply them on the job</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Recognize limitations Show a willingness to try new things</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Learn from mistakes Apply feedback and/or criticism and be open to self improvement</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Accept credit for things well done</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Express feelings, thoughts and beliefs calmly, respectfully and clearly when others have a different view point</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Form and maintain positive relationships</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Develop personal and professional networks</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='clearfix'></div>
                                        </div>        

                                    </div>
                                    <div class='Numberic_eleven'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                            <h1>Initiative</h1>
                                            <div class='box_div_class'>
                                                <h1>Identify things to be done and begin task without being given direction</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Complete tasks to desired quality without constant supervision</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">

                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Show a commitment to completing work</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Help team members when appropriate without being asked</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='clearfix'></div>
                                        </div>        

                                    </div>
                                    <div class='Numberic_twelve'>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                            <h1>Respecting Diversity</h1>
                                            <div class='box_div_class'>
                                                <h1>Respect other people’s opinion even when it differs from my own</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="table-responsive new_use_padding">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Understand and respect cultural differences</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table-responsive">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Work with people even if they have a very different background from my own</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='box_div_class div_add'>
                                                <div class=''></div>
                                                <h1>Respect people who look, dress and act differently from me</h1>
                                                <p class="ers_per">Self Assessment Of Knowledge</p>
                                                <div class="table">
                                                    <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                                        <tbody>

                                                            <tr class="bg_color_use">
                                                                <th><p></p><center>1</center><p></p></th>
                                                        <th>
                                                            <p></p><center>2</center><p></p>
                                                        </th>
                                                        <th><p></p><center>3</center><p></p></th>
                                                        <th><center>4</center></th>
                                                        <th><center>5</center></th>
                                                        <th><center>x</center></th>
                                                        </tr>
                                                        <tr class="row_div">
                                                            <td title="1">Greatly below
                                                                expectations</td>
                                                            <td title="2">Below
                                                                expectations</td>
                                                            <td title="3">Met
                                                                expectations</td>
                                                            <td title="4">Exceeded
                                                                expectations</td>
                                                            <td title="5">Greatly exceeded
                                                                expectations</td>
                                                            <td title="X">Unable to
                                                                observe</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class='clearfix'></div>   
                                        </div>        
                                    </div>

                                    <form method="post">
                                        <input type="hidden" name="form_name" value="essential_skill_form"/>
                                        <input type="hidden" name="essen_val_name" id="essen_val_id" value=""/>
                                        <input type="hidden" name="essential_skills_update_skill_type" />
                                        <textarea name="essential_skills_update_questions" style="display: none"/></textarea>
                                        <input type="hidden" name="essential_skills_update_answers" />                                        
                                        <button id="essentials_skill_submit_button" type="submit" class='space_sace' style="display: none">Save</button>
                                    </form>
                                </div>
                            </div>
                            <div id="Essential_Skills" class="tab-pane fade">

                                        <?php if(count($essentials_skills) != 0) {?>
                                <div class="table">
                                    <table class="key_skill_use table-responsive">
                                        <tbody>
                                            <tr>
                                                <th>Name of Skill</th>
                                                <th>Average</th>
                                                <th>Update</th>  
                                                <th>Delete</th>  
                                            </tr>
                                                <?php foreach ($essentials_skills as $row){?>
                                            <tr>
                                                <td><?php echo strtoupper(str_replace('_', ' ', $row['essential_skills']['skill_type']))?></td>
                                                <td>
                                                            <?php 
                                                                $data = json_decode($row['essential_skills']['skill_data'], TRUE);
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
                                                            <span class="sr-only show_num">
                                                        <?php echo $perc.'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>                                                            
                                                    <button class="essen_skill_div_update" onclick="updateEssentialSkill('<?php echo $row['essential_skills']['id']?>')">Update</button>
                                                </td>
                                                <td>                                                            
                                                    <button class="essen_skill_div_delete" onclick="deleteEssentialSkill('<?php echo $row['essential_skills']['id']?>')">Delete</button>
                                                </td>
                                            </tr>
                                                <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                        <?php } else {?>
                                <h1>No Skill Found</h1>
                                        <?php }?>
                            </div>
                        </div>

                    </div>

                    <div id="menu5" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#add_career_activity">Add Career Related Activities</a></li>

                            <li><a data-toggle="tab" href="#view_career_activity">View Career Related Activities</a></li>
                            <li><a data-toggle="tab" href="#Add_Volunteer_Work">Add Volunteer Work</a></li>   
                            <li><a data-toggle="tab" href="#View_Volunteer_Work">View Volunteer Work</a></li>   
                            <li><a data-toggle="tab" href="#Add_a_Course">Add a Course</a></li>   
                            <li><a data-toggle="tab" href="#View_a_Courses">View Courses</a></li>   
                        </ul>
                        <div class='tab-content tabs_use'>

                            <div id="add_career_activity" class="tab-pane fade active in">
                                <div class="row_use_what_career_dashbored duo">
                                    <form method="post">
                                        <input type="hidden" name="form_name" value="career_related_act">
                                        <input type="hidden" name="career_id_name" id="career_id_val" value="">
                                        <h1>Career Related Activities</h1>
                                        <p><strong>It refers to the process of tracking and documenting the skills, knowledge and experience that you gain both formally and informally as you work, beyond any initial training. It's a record of what you experience, learn and then apply. The term is generally used to mean a physical folder or portfolio documenting your development as a professional.or student. Career Dashboard is a process of recording and reflecting on learning and development.This category captures time spent working, doing activities as part of one's job, engaging in income-generating activities (not as part of one's job), and looking for jobs and interviewing.
                                                <br/>"Work-related activities" include activities that are not obviously work but are done as part of one's job, such as having a business lunch or playing golf with clients. 
                                            </strong><br/> <textarea rows='5' name="related_activity" class='text_width' id="related_act_id"></textarea>
                                            <button type="submit">Save</button></p>
                                    </form>
                                </div>
                            </div>
                            <div id="view_career_activity" class="tab-pane fade">
                                <div class="row_use_what_career">
                                    <div class="table">
                                        <table class="key_skill_use table-responsive">
                                            <thead>
                                                <tr class="chron_div">
                                                    <th>Career Related Activity</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(count($career_related) > 0) { 
                                                foreach ($career_related as $career) {
                                            ?>
                                                <tr>                                               
                                                    <td><?php echo $career['career_activity']['related_act'] ?></td>
                                                    <td><button class="essen_skill_div_update" onclick='update_career_activity("<?php echo $career['career_activity']['id'] ?>")'>Update</button></td>
                                                    <td><button class="essen_skill_div_delete" onclick='delete_career_activity("<?php echo $career['career_activity']['id'] ?>")'>Delete</button></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr>
                                                    <td colspan="3"><center><b>No Records Found</b></center></td>
                                            </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="Add_Volunteer_Work" class="tab-pane fade">
                                <div>
                                    <h1>Agency/Organization Served</h1>
                                    <div class="form-group form_edit form_edit_new">
                                        <form method="post">
                                            <input type="hidden" name="form_name" value="volunteer_form">
                                            <input type="hidden" name="vol_name_id" id="vol_id_val" value="">
                                            <strong>Name</strong><br>
                                            <input type="text" name="name" id="name_id"><br>
                                            <strong>Address</strong><br>
                                            <input type="text" name="address" id="address_id"><br>
                                            <strong>Telephone</strong><br>
                                            <input type="text" class="phone" name="telephone" id="vol_telephone_id"><br>
                                            <strong>Volunteer Job Title</strong><br>
                                            <input type="text" name="vol_title_name" id="vol_title_id"/>
                                            <br>
                                            <strong>Description of skills, knowledge and abilities to perform duties, responsibilities of the job (include
                                                equipment used), and accomplishments.</strong><br>
                                            <textarea rows="5" name="vol_desc_name" id="vol_desc_id"></textarea><br>                                            

                                            <strong>Number and Type of Workers Supervised</strong>
                                            <br/>
                                            <input type="text" name="work_type_vol" id="work_type_vol_id">
                                            <br/>
                                            <div class='form-group'>
                                                <strong>Dates of Service in this Job:</strong>    From <div class="relative_from"><input type='text' onchange="calMonths()" name='from_date_vol' id="from_date_id_vol" class='div_use_inlie_date' readonly=""/> <i class="fa fa-calendar" aria-hidden="true"></i></div>&nbsp;
                                                To: &nbsp;<div class="relative_to"><input type='text' name='to_date_vol' onchange="calMonths()" id="to_date_id_vol" class='div_use_inlie_date' readonly=""/> <i class="fa fa-calendar" aria-hidden="true"></i></div>
                                            </div>

                                            <div class='form-group hours_data_repeat'>
                                                <!-- Actual Hours in this Job: &nbsp;&nbsp;<input type='number' name='from_hour_vol' id="from_hour_id" class='div_use_inlie_date_a'/> &nbsp; 
                                                per day: &nbsp;&nbsp;<input type='number' name='per_day_vol' id="per_day_vol_id" class='div_use_inlie_date_a'/> 
                                                &nbsp; per week &nbsp;&nbsp; <input type='number' name='per_week_vol' id="per_week_vol_id" class='div_use_inlie_date_a'/>&nbsp;
                                                per month&nbsp;&nbsp;<input type='number' name='per_month_vol' id="per_month_vol_id" class='div_use_inlie_date_a'/>&nbsp;
                                                total hours  -->
                                            </div>

                                            <div class='clearfix'></div>

                                            <strong>Name of Supervisor</strong>
                                            <br/>
                                            <input type="text" name="super_vol" id="super_vol_id">
                                            <br/>

                                            <strong>Title:</strong><br/>
                                            <input type="text" name="tile_vol" id="title_vol_id"> <br/>
                                            <div class='form-group'>
                                                <strong>Telephone:</strong> <input type='text' name='super_telephone_vol' id="super_telephone_id" class='phone div_use_inlie_date'/> &nbsp; 
                                                <strong>Date:</strong> &nbsp;<input type='text' name='date_vol' id="date_vol_id" class='div_use_inlie_date'/>
                                            </div>     
                                            <div class='clearfix'></div>
                                            <strong>Additional Comments: </strong><br/>

                                            <textarea rows="5" name="add_comment_vol" id="add_comment_id"></textarea> <br/>
                                            <button type="submit">Save</button>

                                    </div>
                                    </form>
                                </div>
                            </div>

                            <div id="View_Volunteer_Work" class="tab-pane fade">
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
                                                <th><center>View</center></th>
                                                <th><center>Update</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_volunteer) > 0) { 
                                               foreach ($view_volunteer as $view_volunteer_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $view_volunteer_data['volunteer_work']['name'] ?></center></td>
                                                <td><center><?php echo $view_volunteer_data['volunteer_work']['address'] ?></center></td>
                                                <td><center><?php echo $view_volunteer_data['volunteer_work']['telephone'] ?></center></td>
                                                <td><center><?php echo $view_volunteer_data['volunteer_work']['job_title'] ?></center></td> 
                                                <td><center><?php if(!empty($view_volunteer_data['volunteer_work']['date'])) { echo date('d-M-Y',strtotime($view_volunteer_data['volunteer_work']['date'])); } else { echo ""; } ?></center></td> 
                                                <td><center><button onclick='view_monthly_record("<?php echo $view_volunteer_data['volunteer_work']['id'] ?>")'>View</button></center></td> 
                                                <td><center><button onclick='update_volunteer_work("<?php echo $view_volunteer_data['volunteer_work']['id'] ?>")'>Update</button></center></td>    
                                                <td><center><button onclick='delete_volunteer_work("<?php echo $view_volunteer_data['volunteer_work']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Add_a_Course" class="tab-pane fade">
                                <div>
                                    <h2 class="div_use_content">Add A Course</h2>
                                    <div>
                                        <div class="form-group form_edit form_edit_new">
                                            <form method="post">
                                                <input type="hidden" name="form_name" value="add_course">
                                                <input type="hidden" name="course_id_name" id="course_id_val" value="">
                                                <strong>Workshop, Conference, Training Title:</strong><br>
                                                <input type="text" name="workshop" id="workshop_id"><br>
                                                <strong>Sponsored By:</strong><br>
                                                <input type="text" name="sponsor" id="sponsor_id"><br>
                                                <strong>Date:</strong><br>
                                                <input type="text" name="date" id="date_course_id"><br>
                                                <strong>Total hours:</strong><br>
                                                <input type="number" min="0" name="total_hrs" id="total_course_hrs_id">
                                                <br>
                                                <strong>Instructor:</strong><br>
                                                <input type="text" name="instructor" id="instructor_id"><br>
                                                <div class="form-group">
                                                    <strong>Title:</strong> <input type="text" name="title" id="title_course_id"> 
                                                </div>

                                                <div class="clearfix"></div>
                                                <strong>Course Description: </strong><br>

                                                <textarea rows="5" name="course_desc" id="course_desc_id"></textarea>          <br>

                                                <strong>
                                                    Credit Acquired: <input type="radio" name="credit" class="check_vox" value="Yes"> Yes <input type="radio" class="check_vox" name="credit" id="credit_couse_id" value="No"> No
                                                </strong><br/>
                                                <strong>
                                                    Skills and Knowledge acquired: <input type="radio" name="skill" class="check_vox" value="Yes"> Yes <input type="radio" name="skill" id="skill_course_id" class="check_vox" value="No"> No
                                                </strong>


                                                <div class="clearfix"></div>
                                                <strong>Notes: </strong><br>

                                                <textarea rows="5" name="notes" id="note_course_id"></textarea>          <br>

                                                <button type="submit">Save</button>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div id="View_a_Courses" class="tab-pane fade">
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
                                                <th><center>Title</center></th>
                                                <th><center>Total Hours</center></th>
                                                <th><center>Instructor</center></th>
                                                <th><center>Update</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_course) > 0) { 
                                               foreach ($view_course as $view_course_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $view_course_data['course']['workshop'] ?></center></td>
                                                <td><center><?php echo $view_course_data['course']['sponsor'] ?></center></td>
                                                <td><center><?php if(!empty($view_course_data['course']['date'])) { echo date('d-M-Y',strtotime($view_course_data['course']['date'])); } else { echo ""; } ?></center></td> 
                                                <td><center><?php echo $view_course_data['course']['title'] ?></center></td>
                                                <td><center><?php echo $view_course_data['course']['total_hrs'] ?></center></td> 
                                                <td><center><?php echo $view_course_data['course']['instructor'] ?></center></td> 
                                                <td><center><button onclick='update_course("<?php echo $view_course_data['course']['id'] ?>")'>Update</button></center></td>    
                                                <td><center><button onclick='delete_course("<?php echo $view_course_data['course']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
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

                    <div id="education" class="tab-pane">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#add_education">Add Education</a></li>
                            <li><a data-toggle="tab" href="#view_education">View Education</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="add_education" class="tab-pane fade active in">
                                <div class="form-group none_form">
                                    <form method="post" enctype="multipart/form-data">                           
                                        <input type="hidden" name="form_name" value="add_education">
                                        <input type="hidden" name="education_name" value="" id="education_name_id">
                                        <input type="hidden" name="school_trans_name" id="school_trans_name_id">
                                        <input type="hidden" name="award_upload_name" id="award_upload_name_id">
                                        <input type="hidden" name="degree_upload_name" id="degree_upload_name_id">
                                        <input type="hidden" name="refernce_upload_name" id="refernce_upload_name_id">
                                        <div class="form_color_use education_form"><br/>
                                            <h5>Highest Grade level completed</h5><br/>
                                            <strong>Grade</strong><br>
                                            <input type="text" name="education_grade" id="education_grade_id"><br>
                                            <strong>Year Completed</strong><br>
                                            <input type="text" name="complete_year" id="complete_year_id"><br>
                                            <h5>Secondary School</h5><br/>
                                            <strong>Name</strong><br>
                                            <input type="text" name="secodary_school_name" id="school_name_id"><br>
                                            <strong>Grades Attended :</strong>&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="school_grade" value="9">&nbsp; 9&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="school_grade" value="10">&nbsp; 10&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="school_grade" value="11">&nbsp; 11&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="school_grade" value="12">&nbsp; 12<br>    
                                            <strong>Did You Graduate ? </strong> &nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="is_graduate" id="is_graduate_id_yes" value="Yes">&nbsp; Yes&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="is_graduate" id="is_graduate_id_no" value="No">&nbsp; No<br>
                                            <div id="graduate_id" style="display: none;"><br/>
                                                <strong>Graduation Date</strong> 
                                                <input type="text" name="graduate_date" id="graduate_date_id">
                                            </div><br/>
                                            <strong>Final Marks</strong><br>
                                            <input type="text" name="final_marks" id="final_marks_id"><br>
                                            <strong>Credits</strong><br>
                                            <input type="text" name="credit_name" id="credit_id"><br>
                                            <button type="button" class="add_school_details">Add Another School</button>
                                            <div id="add_school_id"></div><br/>
                                            <h5>I attended university, trade school or community college and achieved the following:</h5>
                                            <strong>Institutions Name</strong>
                                            <input type="text" name="institute_name" id="institute_id"><br>
                                            <strong>Start Date</strong>
                                            <input type="text" name="institute_sdate" id="institute_sdate_id"><br>
                                            <strong>End Date</strong>
                                            <input type="text" name="institute_edate" id="institute_edate_id"><br> 
                                            <strong>Degree</strong>
                                            <input type="text" name="institute_degree" id="institute_degree_id"><br>
                                            <strong>Certificate</strong>
                                            <input type="text" name="institute_certificate" id="institute_certificate_degree_id"><br>
                                            <strong>Diploma</strong>
                                            <input type="text" name="deploma_name" id="deploma_id"><br>
                                            <strong>Credits</strong>
                                            <input type="text" name="institute_credit" id="institute_credit_id"><br>
                                            <strong>What language(s) are you fluent in? Please specify how fluent.</strong><br/><br/>
                                            <strong>Language</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong>Speak</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong>Read</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong>Write</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                            <strong>English</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="english_lang[]" value="Speak" id="speak_id">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="english_lang[]" value="Read" id="read_id">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" name="english_lang[]" value="Write" id="write_id"><br/>
                                            <strong>School Transcripts</strong>
                                            <input type="file" name="school_transcript"><br>
                                            <strong>Computer Skills</strong>
                                            <div class="none_form"> 
                                                <div class="clearfix"></div>
                                                <ol class="computer_skill_class">
                                                    <li><input type="text" name="computer_skill[]"></li>
                                                    <li><input type="text" name="computer_skill[]"></li>
                                                    <li><input type="text" name="computer_skill[]"></li> 
                                                </ol>
                                                <button type="button" class="add_computer_skill">Add</button>
                                                <button type="button" class="remove_computer_skill">Remove</button>
                                            </div><br/><br/>
                                            <div class="none_form">
                                                <strong>Awards or Scholarship :</strong><br/>
                                                <strong>Type:</strong>
                                                <input type="text" name="award_type" id="award_type_id">
                                                <strong>Date</strong>
                                                <input type="text" name="award_date" id="award_date_id">
                                                <strong>Upload</strong>
                                                <input type="file" name="award_upload">
                                            </div><br/>
                                            <div class="none_form">
                                                <strong>Awards/ Degrees/Certificates :</strong><br/>
                                                <strong>Type:</strong>
                                                <input type="text" name="degree_type" id="degree_type_id">
                                                <strong>Date</strong>
                                                <input type="text" name="degree_date" id="degree_date_id">
                                                <strong>Upload</strong>
                                                <input type="file" name="degree_upload">
                                            </div><br/>
                                            <div class="none_form">
                                                <strong>Leadership/Teamwork/involvement in sports</strong><br/>
                                                <strong>Type:</strong>
                                                <input type="text" name="leader_type" id="leader_type_id">
                                                <strong>Date</strong>
                                                <input type="text" name="leader_date" id="leader_date_id">
                                            </div><br/>
                                            <div class="none_form">
                                                <strong>Clubs/Associations</strong><br/>
                                                <strong>Type:</strong>
                                                <input type="text" name="club_type" id="club_type_id">
                                                <strong>Date</strong>
                                                <input type="text" name="club_date" id="club_date_id">
                                            </div><br/>
                                            <div class="none_form">
                                                <strong>Education Reference Letter : </strong><br/><br/>
                                                <strong>Reference Letter Name </strong>
                                                <input type="text" name="refernce_letter_name" id="refernce_letter_name_id">
                                                <strong>Upload Reference Letter</strong>
                                                <input type="file" name="refernce_upload">
                                            </div><br/>
                                            <button type="submit" class="button_save_data">Save</button><br><br>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>    
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div id="view_education" class="tab-pane fade">
                                <?php $i = 1; if(count($view_education) > 0) {
                                    foreach ($view_education as $education_data) {
                                ?>
                                <div class="repeat_border_div_action">
                                    <div>
                                        <h5><?php echo $i++ .". "; ?>Education 
                                            <span class="swot_data_val">
                                                <button onclick='update_education("<?php echo $education_data['education']['id'] ?>")'>Update</button>
                                                <button onclick='delete_education("<?php echo $education_data['education']['id'] ?>")'>Delete</button>
                                            </span>
                                        </h5>
                                    </div>
                                    <div>
                                        <h1>Highest Grade level completed</h1>
                                        <h1>Grade : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['grade'] ?></h1>
                                        <h1>Year Completed : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['complete_year'] ?></h1>
                                        <h1>Secondary School</h1>
                                        <h1>Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['secondary_school'] ?></h1>
                                        <h1>Grades Attended : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['grade_attend'] ?></h1>
                                        <h1>Did You Graduate : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['is_graduate'] ?></h1>
                                        <h1>Graduation Date : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['graduation_date'] ?></h1>
                                        <h1>Final Marks : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['final_mark'] ?></h1>
                                        <h1>Credits : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['credit'] ?></h1>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>Other School</h1>

                                        <h1>School Name</h1>
                                        <ol>
                                        <?php $other_school = explode('*',$education_data['education']['other_school']);
                                        for($b = 0; $b < count($other_school); $b++) {
                                            if(!empty($other_school[$b])) {
                                        ?>
                                            <li><p><?php echo $other_school[$b] ?></p></li>
                                        <?php } } ?>
                                        </ol>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>Institutions Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['institute_name'] ?></h1>
                                        <h1>Start Date : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['start_date'] ?></h1>
                                        <h1>End date : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['end_date'] ?></h1>
                                        <h1>Degree : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['degree'] ?></h1>
                                        <h1>Certificate : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['certificate'] ?></h1>
                                        <h1>Diploma : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['diploma'] ?></h1>
                                        <h1>Credit : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['institute_credit'] ?></h1>
                                        <h1>English Language : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <?php $language = explode('*',$education_data['education']['language_english']);
                                            for($a = 0; $a < count($language); $a++) {
                                                echo $language[$a] .' ';
                                            }
                                            ?>
                                        </h1>
                                        <h1>School Transcript : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button"><a href='dashboards/download?filename=<?php echo $education_data['education']['school_transcript']?>'>Download</a></button></h1>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>Computer Skills</h1>
                                        <ol>
                                        <?php $computer_skill = explode('*',$education_data['education']['computer_skill']);
                                        for($d = 0; $d < count($computer_skill); $d++) {
                                            if(!empty($computer_skill[$d])) {
                                        ?>
                                            <li><p><?php echo $computer_skill[$d] ?></p></li>
                                        <?php } } ?>
                                        </ol>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>Awards or Scholarship :</h1>
                                        <h1>Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['award_type'] ?></h1>
                                        <h1>Date : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['award_date'] ?></h1>
                                        <h1>Award Uploaded : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button"><a href='dashboards/download?filename=<?php echo $education_data['education']['award_upload']?>'>Download</a></button></h1>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>Awards/ Degrees/Certificates :</h1>
                                        <h1>Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['degree_type'] ?></h1>
                                        <h1>Date : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['degree_date'] ?></h1>
                                        <h1>Award/ Degree Uploaded : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button"><a href='dashboards/download?filename=<?php echo $education_data['education']['degree_upload']?>'>Download</a></button></h1>
                                    </div>
                                    <div class='div_margin'>
                                        <h1>Leadership/Teamwork/involvement in sports</h1>
                                        <h1>Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['leader_type'] ?></h1>
                                        <h1>Date : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['leader_date'] ?></h1>                                       
                                    </div>
                                    <div class='div_margin'>
                                        <h1>Clubs/Associations</h1>
                                        <h1>Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['club_type'] ?></h1>
                                        <h1>Date : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['club_date'] ?></h1>                                       
                                    </div>
                                    <div class='div_margin'>
                                        <h1>Education Reference Letter : </h1>
                                        <h1>Reference Letter Name  : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $education_data['education']['letter_name'] ?></h1>
                                        <h1>Upload Reference Letter : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button"><a href='dashboards/download?filename=<?php echo $education_data['education']['letter_upload']?>'>Download</a></button></h1>                                       
                                    </div>

                                    <div style="border-bottom: 2px #000 solid;"></div>
                                </div>    

                                <?php } } else { ?>
                                <div>
                                    <p><center><b>No Records Found</b></center></p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>    
                    </div>

                    <div id="menu6" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#interview_note_add">Add Interview Notes</a></li>
                            <li><a data-toggle="tab" href="#interview_note_view">View Interview Notes</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="interview_note_add" class="tab-pane fade active in">
                                <h1>Interview Notes</h1>
                                <div class="form-group form_edit form_edit_new">
                                    <form method="post">
                                        <input type="hidden" name="form_name" value="interview_notes">
                                        <input type="hidden" name="intervie_id_name" id="interview_id_val" value="">
                                        <p><strong>Date</strong><br>
                                            <input type="text" name="interview_date" id="interview_date_id"><br>
                                            <strong>Company</strong><br>
                                            <input type="text" name="company_name" id="company_name_id"><br>
                                            <strong>Interviewer</strong><br>
                                            <input type="text" name="interviewer" id="interviewer_id"><br/>
                                            <strong>Positive Results</strong><br>
                                            <textarea rows="5" name="positive_result" id="positive_result_id"></textarea><br/>
                                            <strong>Negative Results</strong><br>
                                            <textarea rows="5" name="negative_result" id="negative_result_id"></textarea><br/>
                                            <button type="submit">Save</button>
                                        </p>
                                    </form>
                                </div>
                            </div>

                            <div id="interview_note_view" class="tab-pane fade">
                                <div class="row_use_what_career">
                                    <h1>Interview Notes</h1>
                                    <div class="table">
                                        <table class="key_skill_use table-responsive">
                                            <tbody>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Company</th>
                                                    <th>Interviewer</th>
                                                    <th>Positive Result</th>
                                                    <th>Negative Result</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                </tr>
                                            <?php if(count($view_interview_notes) > 0) {
                                              foreach ($view_interview_notes as $interview_notes) {  
                                            ?>
                                                <tr>
                                                    <td><?php echo date("d-M-Y",strtotime($interview_notes['interview_notes']['date'])) ?></td>
                                                    <td><?php echo $interview_notes['interview_notes']['company'] ?></td>
                                                    <td><?php echo $interview_notes['interview_notes']['interviewer'] ?></td>
                                                    <td><?php echo $interview_notes['interview_notes']['positive_result'] ?></td>
                                                    <td><?php echo $interview_notes['interview_notes']['negative_result'] ?></td>
                                                    <td><button onclick='update_interview("<?php echo $interview_notes['interview_notes']['id'] ?>")'>Update</button></td>
                                                    <td><button onclick='delete_interview("<?php echo $interview_notes['interview_notes']['id'] ?>")'>Delete</button></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr>
                                                    <th colspan="9"><center><b>No Record Found</b></center></th>
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

                    <div id="menu7" class="tab-pane fade">
                        <div class='bg_calender container-fluid'>
                            <h1 class="title text-center"> July 2014 </h1>
                            <div class="calendar" data-toggle="calendar">
                                <div class="row">
                                    <div class="col-xs-12 calendar-day calendar-no-current-month">
                                        <time datetime="2014-06-29">29</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day calendar-no-current-month">
                                        <time datetime="2014-06-30">30</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-01">01</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-02">02</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-03">03</time>
                                        <div class="events">
                                            <div class="event">
                                                <h4>Mid Day Dance Break - SELF CARE</h4>
                                                <div class="desc">
                                                    <p>Take a Break and enjoy Live dance and Art from Eries own local Talent</p>
                                                    <p>Support for this program is provided in part from an Erie Arts & Culture Project Grant, made possible by community contributions to the Combined Arts & Cultural Campaign and the Erie Arts Endowment.</p>
                                                </div>
                                                <div class="location"> <span class="glyphicon glyphicon-map-marker"></span> State St and Rt 5, Erie, Pa.</div>
                                                <div class="datetime"> <span class="glyphicon glyphicon-time"></span> 12:00am - 1:00pm</div>
                                                <div class="attending">
                                                    <img src="https://api.randomuser.me/portraits/women/54.jpg" />
                                                    <img src="https://api.randomuser.me/portraits/men/27.jpg" />
                                                    <img src="https://api.randomuser.me/portraits/men/61.jpg" />
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="134" style="width: 4.477%;">
                                                        <span class="sr-only">4.477% Filled</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-04">04</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-05">05</time>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-06">06</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-07">07</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-08">08</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-09">09</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-10">10</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-11">11</time>
                                        <div class="events">
                                            <div class="event">
                                                <h4>Local artist showing, meet and greet and feature film</h4>
                                                <div class="desc">
                                                    <p>We will be showing local artists films on our new 16 foot movie screen with feature film last "Carnival Of Souls", come see the new BT, hang out and socialize while enjoying some local talent. FREE event, suggested $2 or $3 donation. Concessions, popcorn, soda etc available so come hungry!!</p>
                                                    <p>*This event is all ages welcomed and also handicapped accessible (side entrance ramp)</p>
                                                    <p>Featuring :</p>
                                                    <ul>
                                                        <li><a href="https://www.youtube.com/user/walrys11/videos">Jack Rys</a></li>
                                                        <li><a href="https://society6.com/wombglow">Alex Wilson</a></li>
                                                        <li><a href="https://www.erieartcompany.com/">Brad Ford</a></li>
                                                        <li><a href="https://www.youtube.com/watch?v=dkTz0EvfEiY">Carnival of Souls</a> (Trailer)</li>
                                                    </ul>
                                                </div>
                                                <div class="location"> <span class="glyphicon glyphicon-map-marker"></span> 145 West 11th Street, Erie, Pa.</div>
                                                <div class="datetime"> <span class="glyphicon glyphicon-time"></span> 7:00pm - ?</div>
                                                <div class="attending">
                                                    <img src="https://api.randomuser.me/portraits/women/31.jpg" />
                                                    <img src="https://api.randomuser.me/portraits/women/47.jpg" />
                                                    <img src="https://api.randomuser.me/portraits/women/93.jpg" />
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="368" style="width: 11.68%;">
                                                        <span class="sr-only">11.68% Filled</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-12">12</time>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-13">13</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-14">14</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-15">15</time>
                                        <div class="events">
                                            <div class="event">
                                                <h4>Erie Art Museum 91st Annual Spring Show</h4>
                                                <div class="desc">
                                                    <p>This juried, regional multi-media exhibition, open to all artists living within a 250-mile radius of Erie represents all media and showcases the most current and finest artwork created in the area.</p>
                                                </div>
                                                <div class="location"> <span class="glyphicon glyphicon-map-marker"></span> Presque Isle State Park </div>
                                                <div class="datetime"> <span class="glyphicon glyphicon-time"></span> ALL DAY</div>
                                                <div class="attending">
                                                    <img src="https://api.randomuser.me/portraits/men/10.jpg" />
                                                    <img src="https://api.randomuser.me/portraits/men/23.jpg" />
                                                    <img src="https://api.randomuser.me/portraits/men/66.jpg" />
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="320" style="width: 21.56%;">
                                                        <span class="sr-only">21.56% Filled</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-16">16</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-17">17</time>>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-18">18</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-19">19</time>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-20">20</time>
                                        <div class="events">
                                            <div class="event">
                                                <h4>Mouse0270's 24th Birthday</h4>
                                                <div class="desc">
                                                    <p style="text-align:center;">Friendships are one of the few things that improve with age<br/>
                                                        The family and friends of <br/>
                                                        Mouse0270 <br/>
                                                        invite you to celebrate his <br/>
                                                        24th Birthday and a lifetime of good friendship</p>
                                                </div>
                                                <div class="location"> <span class="glyphicon glyphicon-map-marker"></span> Erie, Pa </div>
                                                <div class="datetime"> <span class="glyphicon glyphicon-time"></span> 10:00pm - 2:00am </div>
                                                <div class="attending">
                                                    <img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xfa1/t1.0-9/417157_4897339837183_626079670_n.jpg" />
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="336" style="width: 0.29%;">
                                                        <span class="sr-only">0.29% Filled</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-21">21</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-22">22</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-23">23</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-24">24</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-25">25</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-26">26</time>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-27">27</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-28">28</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-29">29</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-30">30</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day">
                                        <time datetime="2014-07-31">31</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day calendar-no-current-month">
                                        <time datetime="2014-08-01">01</time>
                                    </div>
                                    <div class="col-xs-12 calendar-day calendar-no-current-month">
                                        <time datetime="2014-08-02">02</time>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center"></p>
                        </div>
                    </div>

                    <div id="menu8" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#Task_List" aria-expanded="true">Task List</a></li>
                            <li><a data-toggle="tab" href="#add_task" aria-expanded="true">Add Task</a></li>
                            <li><a data-toggle="tab" href="#View_Tasks" aria-expanded="true">View Tasks</a></li>
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="Task_List" class="tab-pane fade in active">
                                <h3 class='task_list_ha'>TASK LIST</h3>
                                <?php if(count($view_task_list) > 0) { 
                                    foreach ($view_task_list as $task_list) {
                                ?>
                                <div class="table">
                                    <table class='task_list table-responsive'>                                   
                                        <tr>
                                            <td><b>Name of Task</b></td>
                                            <td><b>Status</b></td>
                                            <td><b>Due Date</b></td>
                                            <td><b>Date Completed</b></td>
                                            <td><b>Set Reminder</b></td>
                                            <td><b>Update</b></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $task_list['task_list']['task_name'] ?></td>

                                            <td>
                                                <select id="select_type_data">
                                                    <option value="Working on it" <?php echo ($task_list['task_list']['task_status'] == 'Working on it' ? 'selected = "selected"' : '') ?>>Working on it</option>
                                                    <option value="Trouble" <?php echo ($task_list['task_list']['task_status'] == 'Trouble' ? 'selected = "selected"' : '') ?>>Trouble</option>
                                                    <option value="Complete" <?php echo ($task_list['task_list']['task_status'] == 'Complete' ? 'selected = "selected"' : '') ?>>Complete</option>
                                                </select>
                                            </td>
                                            <td>
                                            <?php echo date('d-M-Y',strtotime($task_list['task_list']['due_date'])) ?>
                                            </td>
                                            <td><?php echo date('d-M-Y',strtotime($task_list['task_list']['complete_date'])) ?></td>                                            
                                            <td><input type="text" name="date_value" id='date_pick_val'></td>                                        
                                            <td><button class="essen_skill_div_update" onclick='task_save_val("<?php echo $task_list['task_list']['id'] ?>")'>Update</button></td>
                                        </tr>                                     
                                    </table>
                                </div>
                                <?php } } else { ?>
                                <div class="table">
                                    <table class='task_list table-responsive'>
                                        <tr>
                                            <td colspan="12"><center><b>No Records Found</b></center></td>
                                        </tr>
                                    </table>
                                </div>
                                <?php } ?>

                            </div>
                            <div id="add_task" class="tab-pane fade">
                                <div class="form-group  form_edit">
                                    <form method="post">
                                        <input type="hidden" name="form_name" value="task_list">
                                        <div class="form_color_use">
                                            <h1>Add Job Sites</h1>
                                            <strong>Name of Task</strong><br>
                                            <input type="text" name="site_name">
                                            <strong>Status</strong><br>
                                            <select name="status">
                                                <option value="Working on it">Working on it</option>
                                                <option value="Trouble">Trouble</option>
                                                <option value="Complete">Complete</option>
                                            </select>
                                            <strong>Due Date</strong><br>
                                            <input type="text" name="due_date" id="job_add_task_due">
                                            <strong>Date Completed</strong><br>
                                            <input type="text" name="complete_date" id="job_add_task_complete">
                                            <button type="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="View_Tasks" class="tab-pane fade">
                                <div class="table">
                                    <table class="key_skill_use table-responsive">
                                        <tbody>
                                            <tr>
                                                <th>Name of Task</th>
                                                <th>Status</th>
                                                <th>Due Date</th>
                                                <th>Date Completed</th> 
                                                <th>Reminder Date</th>
                                                <th>Delete</th>
                                            </tr>
                                        <?php if(count($view_task_list) > 0) { 
                                            foreach ($view_task_list as $task_data) {
                                        ?>
                                            <tr>
                                                <td><?php echo $task_data['task_list']['task_name'] ?></td>
                                                <td><?php echo $task_data['task_list']['task_status'] ?></td>
                                                <td><?php echo date('d-M-Y',strtotime($task_data['task_list']['due_date'])) ?></td>
                                                <td><?php echo date('d-M-Y',strtotime($task_data['task_list']['complete_date'])) ?></td>
                                                <td><?php if($task_data['task_list']['reminder_date'] != '') { echo date('d-M-Y',strtotime($task_data['task_list']['reminder_date'])); } else { echo ""; }  ?></td>
                                                <td><button class="essen_skill_div_delete" onclick = 'delete_task("<?php echo $task_data['task_list']['id'] ?>")'>Delete</button></td>
                                            </tr>
                                        <?php } } else { ?>
                                            <tr>
                                                <th colspan="9"><center><b>No Record Found</b></center></th>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="menu9" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#add_job_site">Add New Job Sites</a></li>
                            <li><a data-toggle="tab" href="#view_job_site">View Job Sites</a></li>                           
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="add_job_site" class="tab-pane fade in active">
                                <div class="form-group  form_edit">
                                    <form method="post">
                                        <input type="hidden" name="form_name" value="job_site">
                                        <input type="hidden" name="job_site_id_name" id="job_site_id_val" value="">

                                        <div class="form_color_use">
                                            <h1>Add Job Sites</h1>                                        
                                            <strong>Name Of Job Sites</strong><br>
                                            <input type="text" name="site_name" id="site_name_id">
                                            <strong>Web Address of Sites</strong><br>
                                            <input type="text" name="web_address" id="wed_job_id">
                                            <strong>Type</strong><br>
                                            <select name="job_search_type" id="job_serach_type_id">
                                                <option value="">--Select Type--</option>
                                                <option value="Career Fair">Career Fair</option>
                                                <option value="Networking">Networking</option>
                                                <option value="On Campus interviews">On Campus interviews</option>
                                                <option value="Applied direct to employer">Applied direct to employer</option>
                                                <option value="Job Boards">Job Boards</option>
                                                <option value="Social Media">Social Media</option>
                                            </select>
                                            <strong>Source</strong><br>
                                            <select name="job_search_source" id="job_serach_source_id">
                                                <option value="">--Select Source--</option>
                                                <option value="On Line">On Line</option>
                                                <option value="In Person">In Person</option>
                                                <option value="Mailed In">Mailed In</option>
                                            </select>
                                            <strong>UserName</strong><br>
                                            <input type="text" name="username" id="user_job_id">
                                            <strong>Password</strong><br>
                                            <input type="text" name="password" id="password_job_id">
                                            <strong>Average Number Of Jobs Applied From Site</strong><br>
                                            <input type="number" min="0" name="average_num" id="avg_job_id">
                                            <strong>Notes</strong><br>
                                            <textarea name="notes" rows="5" class="width_use_div" id="job_note_id"></textarea>
                                            <button type="submit">Save</button>
                                        </div>

                                    </form> 
                                </div>    
                            </div>

                            <div id="view_job_site" class="tab-pane fade">
                                <div class="row_use_what_career">
                                    <h1>Job Sites</h1>
                                    <div class="table">
                                        <table class="key_skill_use table-responsive">
                                            <tbody>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Source</th>
                                                    <th>Job Site Name</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Notes</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                </tr>
                                            <?php if(count($view_jobSite) > 0) {
                                              foreach ($view_jobSite as $job_site) {  
                                            ?>
                                                <tr>
                                                    <td><?php echo $job_site['job_sites']['type'] ?></td>
                                                    <td><?php echo $job_site['job_sites']['source'] ?></td>
                                                    <td><?php echo $job_site['job_sites']['site_name'] ?></td>
                                                    <td><?php echo $job_site['job_sites']['username'] ?></td>
                                                    <td><?php echo $job_site['job_sites']['password'] ?></td>
                                                    <td><?php echo $job_site['job_sites']['notes'] ?></td>
                                                    <td><button class="essen_skill_div_update" onclick='update_job_site("<?php echo $job_site['job_sites']['id'] ?>")'>Update</button></td>
                                                    <td><button class="essen_skill_div_delete" onclick='delete_job_site("<?php echo $job_site['job_sites']['id'] ?>")'>Delete</button></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr>
                                                    <th colspan="9"><center><b>No Record Found</b></center></th>
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

                    <div id="menu10" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li style='display:none;'><a data-toggle="tab" href="#Update_Network_b" aria-expanded="false">Add Contact</a></li>                      
                            <li><a data-toggle="tab" href="#Update_Network" aria-expanded="false">Add Contact</a></li>

                            <li><a data-toggle="tab" href="#View_My_NetWork" aria-expanded="false">Update Network</a></li> 
                            <li><a data-toggle="tab" href="#View_my_net" aria-expanded="false">View My NetWork</a></li> 
                            <li><a data-toggle="tab" href="#Elevator_Pitch" aria-expanded="false">Elevator Pitch</a></li>
                            <li><a data-toggle="tab" href="#interview_ques" aria-expanded="false">Interview Questions</a></li>
                        </ul>

                        <div class="tab-content tab-pane fade in active">
                            <div id="Update_Network_b" class="tab-pane fade in active">
                                <div class='row'>
                                    <div class="custom_bg col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                        <div class="group_div">
                                            <h4 class="heading_h_use">1. Keep a record of your network
                                            </h4>
                                            <p>Keeping an organized address book is essential. Store any business cards or contact details
                                                in an orderly fashion with any other useful information that may come in handy. Compile
                                                records of your last point of contact as well as any other personal information (in a non-
                                                stalking manner) such as family facts and likes and dislikes. Inquiring after little Jims cello
                                                practice or Riley the dog’s operation will show that you’ve paid attention and actually care.
                                                Even remembering that they like two sugars in their morning chai latte will prove that you are
                                                not simply using them for their influence, position and power. Be careful, it’s a fine line
                                                between caring and creepy.</p>
                                        </div>


                                        <div class="group_div">
                                            <h4 class="heading_h_use">2. Use social media to stay in touch
                                            </h4>
                                            <p>It can be a little awkward getting in touch with a contact after years and years of silence.
                                                However, modern technology is helping to ease the gap with social media. Touching base
                                                every now and then through email, Facebook or LinkedIn can help you segue into asking
                                                them for a reference or a leg-up into the industry. This is where you can pull out your wealth
                                                of knowledge and impress them that you’ve remembered they have two sons, five
                                                grandchildren, a red Volvo and like singing in the shower. Only kidding.</p>
                                        </div>
                                        <div class="group_div">
                                            <h4 class="heading_h_use">3. Contacts are not your friends
                                            </h4>
                                            <p>When it comes to networking, there's are definitely rules of engagement.Treat your more
                                                distant, professional contacts professionally, which can be difficult when dealing with social
                                                media. Refrain from sending them inane Facebook quizzes or invitations to your Twilight fan
                                                club. If you’re prone to enjoying a Big Night Out or two, make sure that you change your
                                                privacy settings to block them from seeing any photos documenting just how much fun you
                                                had..</p>
                                        </div>   
                                        <div class="group_div">
                                            <h4 class="heading_h_use">4. Catch up with the closer ones
                                            </h4>
                                            <p>If you’ve had a relationship with a contact in the past, like going to school together or sharing
                                                a corner in your first job, it doesn’t hurt to arrange a catch-up every now and then. Even if
                                                you only have coffee with them once or twice a year, your relationship will be much stronger
                                                for it.</p>
                                        </div>   
                                        <div class="group_div">
                                            <h4 class="heading_h_use">5. Help them out
                                            </h4>
                                            <p>If someone in your network cries out for help with their career, offer what you can. Do you
                                                know anyone who could help them out? Do you know of a job vacancy that they would be
                                                suited to? Even if all you can offer is to keep an eye out for possibilities and proof their
                                                resume, they will appreciate it. Remember that relationships are a two-way street and it may
                                                be you asking for career help one day.</p>
                                        </div> 
                                        <div class="group_div">
                                            <h4 class="heading_h_use">6. Surprises should be left for birthday parties
                                            </h4>
                                            <p>If you’re planning on applying for a new job, get in contact with your referees before you start
                                                your job hunt to make sure they are still fine with recommending you for employment. They
                                                won’t enjoy having a phone call sprung on them without notice. And the last thing you want is
                                                your old boss getting confused between John ‘the slacker’ and you, John – the ‘model
                                                employee’.</p>
                                        </div>   
                                        <div class="group_div">
                                            <h4 class="heading_h_use">7. Remember your ‘pleases’ and ‘thank yous’
                                            </h4>
                                            <p>As your mother taught you, good manners will never go out of style. Thanking your contacts
                                                for any help they may have given is extremely important to continue the relationship. Never
                                                take your network for granted. There’s no need to send a singing telegram, simply saying
                                                ‘thank you’ and informing them of the outcome of your job interview will suffice.<br><br> <br><br></p>
                                        </div>
                                    </div>  
                                </div>
                            </div>

                            <div id="Update_Network" class="tab-pane fade">
                                <div class="carrier_goal">
                                    <h3 class="group_div">Add Contact</h3>
                                </div>
                                <form method="post">
                                    <input type="hidden" name="form_name" value="add_career_contact">
                                    <input type="hidden" name="career_contact_id" id='career_contact_id_val' value="">
                                    <div class="div_form_use">  
                                        <div class="none_form">
                                            <input type="text" name="name" id="career_contact_name" placeholder="Name">
                                        </div>
                                        <div class="none_form">
                                            <input type="text" name="company" id="career_contact_title" placeholder="Title/Company">
                                        </div>
                                        <div class="none_form">
                                            <label>How did you meet?</label>
                                        </div>
                                        <div class="none_form">
                                            <input type="text" name="how_meet" id="how_meet_id">
                                        </div>
                                        <div class="none_form">
                                            <input type="text" name="contact_email" id="career_contact_email" placeholder="Contact Info Email">
                                        </div>
                                        <div class="none_form">
                                            <input type="text" name="cell" id="career_contact_cell" placeholder="Cell">
                                        </div>
                                        <div class="none_form">
                                            <input type="text" name="other" id="career_contact_other" placeholder="Other">
                                        </div>
                                        <div class="none_form">
                                            <lable><b>Were you referred by anyone ?</b></lable>
                                            <input type="text" name="refer_name" id="career_contact_refer_name" placeholder="Name">
                                        </div>
                                        <div class="none_form">
                                            <input class="phone" type="text" name="refer_contact" id="career_contact_refer_con" placeholder="Contact Info">
                                        </div>
                                        <div class="none_form">
                                            <ul class="display_inline_form">
                                                <li>
                                                    <label for="cehck">
                                                        <input type="checkbox" name="checklist[]" id="cehck_int" value="Interests"> Interests?
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="cehck">
                                                        <input type="checkbox" name="checklist[]" id="cehck_kid" value="Kids">  Kids?
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="cehck">
                                                        <input type="checkbox" name="checklist[]" id="cehck_act" value="Activities">  Activities?
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="cehck">
                                                        <input type="checkbox" name="checklist[]" id="cehck_hob" value="Hobbies">  Hobbies?
                                                    </label>
                                                </li>
                                            </ul>        
                                        </div>

                                        <div class="none_form">
                                            <input type="text" name="interest" id="int_val" placeholder="Interest">
                                        </div>

                                        <div class="none_form">
                                            <input type="text" name="kid" id="kid_val" placeholder="Kids">
                                        </div>

                                        <div class="none_form">
                                            <input type="text" name="activity" id="act_val" placeholder="Activity">
                                        </div>

                                        <div class="none_form">
                                            <input type="text" name="hobby" id="hobby_val" placeholder="Hobby">
                                        </div>

                                        <div class="none_form">
                                            <button class="button_save_data" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="View_My_NetWork" class="tab-pane fade">
                                <div class="update_network update_data_career">
                                    <div class="table">
                                        <table class="key_skill_use table-responsive">
                                            <tbody>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Title/ Company</th>
                                                    <th>Contact Email</th>
                                                    <th>Date</th>
                                                    <th></th>
                                                </tr>
                                            <?php if(count($view_career_contact) > 0) {
                                              foreach ($view_career_contact as $view_career) {  
                                            ?>
                                                <tr>
                                                    <td><?php echo $view_career['career_contacts']['name'] ?></td>
                                                    <td><?php echo $view_career['career_contacts']['company'] ?></td>
                                                    <td><?php echo $view_career['career_contacts']['contact_email'] ?></td>
                                                    <td><?php echo date('d-M-Y',strtotime($view_career['career_contacts']['date'])) ?></td>
                                                    <td><button class="essen_skill_div_update" onclick='update_career_contact("<?php echo $view_career['career_contacts']['id'] ?>")'>Update</button></td>                                               
                                                </tr>
                                            <?php } } else { ?>
                                                <tr>
                                                    <th colspan="9"><center><b>No Record Found</b></center></th>
                                            </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                
                            </div>

                            <div id="View_my_net" class="tab-pane fade">
                                <div class="carrier_goal">
                                    <div class="table">
                                        <table class="key_skill_use table-responsive">
                                            <tbody>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Title/ Company</th>
                                                    <th>Contact Email</th>
                                                    <th>Reference Name</th>
                                                    <th>Reference Contact</th>
                                                    <th>Check Type</th>
                                                    <th>Date</th>
                                                    <th></th>
                                                </tr>
                                            <?php if(count($view_career_contact) > 0) {
                                              foreach ($view_career_contact as $view_career) {  
                                            ?>
                                                <tr>
                                                    <td><?php echo $view_career['career_contacts']['name'] ?></td>
                                                    <td><?php echo $view_career['career_contacts']['company'] ?></td>
                                                    <td><?php echo $view_career['career_contacts']['contact_email'] ?></td>
                                                    <td><?php echo $view_career['career_contacts']['refer_name'] ?></td>
                                                    <td><?php echo $view_career['career_contacts']['refer_contact'] ?></td>
                                                    <td><?php echo $view_career['career_contacts']['check_type'] ?></td>
                                                    <td><?php echo date('d-M-Y',strtotime($view_career['career_contacts']['date'])) ?></td>
                                                    <td><button class="essen_skill_div_delete" onclick='delete_career_contact("<?php echo $view_career['career_contacts']['id'] ?>")'>Delete</button></td>                                               
                                                </tr>
                                            <?php } } else { ?>
                                                <tr>
                                                    <th colspan="9"><center><b>No Record Found</b></center></th>
                                            </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                   
                            </div>

                            <div id="Elevator_Pitch" class="tab-pane fade">
                                <ul class="nav nav-tabs new_proper">
                                    <li class="active">
                                        <a data-toggle="tab" href="#add_elevator_pitch" aria-expanded="true">Add Elevator Pitch</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#view_elevator_pitch" aria-expanded="true">View Elevator Pitch</a>
                                    </li>
                                </ul>
                                <div class='tab-content tabs_use'> 
                                    <div id="add_elevator_pitch"  class="tab-pane fade active in">
                                        <form method="post">
                                            <input type="hidden" name="form_name" value="elevator_pitch">
                                            <input type="hidden" name="elevator_name_id" id="elevator_pitch_id" value="">
                                            <div class="row_use_what_career_dashbored">
                                                <h1>Elevator Pitch</h1>

                                                <strong>
                                                    <ol>
                                                        <br/>
                                                        <li>
                                                            Identify the goal of the Pitch
                                                        </li> <br/>
                                                        <p>
                                                            <strong>1) Self Introduction</strong><br/>
                                                            <input type="text" class='text_width_data' name="self_intro" id="self_intro_id">
                                                            <strong>2) Advertisement </strong><br/>
                                                            <input type="text" class='text_width_data' name="advertise" id="advertise_id">
                                                            <strong>3) Building A Connection </strong><br/>
                                                            <input type="text" class='text_width_data' name="connection" id="connection_id">
                                                        </p><br/>


                                                        <li>Clearly Describe what you do</li><br>
                                                        <p>
                                                            <strong>1) What you do/study/research/build/make</strong><br/>
                                                            <input type="text" class='text_width_data' name="study" id="study_id">
                                                            <strong>2) Past experience</strong><br/>
                                                            <input type="text" class='text_width_data' name="past_exp" id="past_exp_id">
                                                        </p><br/>

                                                        <li>Focus on Strengths</li><br/>
                                                        <p>
                                                            <strong>1) Unique ideas. Recent activities</strong><br/>
                                                            <input type="text" class='text_width_data' name="unique_idea" id="unique_idea_id">
                                                            <strong>2) Latest accomplishments</strong><br/>
                                                            <input type="text" class='text_width_data' name="latest_accomp" id="latest_accomp_id">
                                                        </p><br/>

                                                        <li>Credit or Compliment </li><br/>
                                                        <p>
                                                            <strong>1) Team Members, supervisor, mentors</strong><br/>
                                                            <input type="text" class='text_width_data' name="team_member" id="team_member_id">
                                                        </p> 
                                                        <br/>

                                                        <li>Engage listener with a question  </li><br/>
                                                        <p>
                                                            <textarea row="3" class='text_width_data' name="engage_listen" id="engage_listen_id"></textarea>
                                                        </p><br/> 
                                                    </ol>

                                                </strong>
                                                <button type="submit">Save</button>
                                            </div>

                                        </form>  
                                    </div>

                                    <div id="view_elevator_pitch" class="tab-pane fade">
                                        <?php $i=1; if(count($view_elevator) > 0) {
                                        foreach ($view_elevator as $elevator_pitch) {
                                    ?>
                                        <div class="repeat_border_div">
                                            <div>
                                                <h1>Elevator Pitch <?php echo $i++; ?>
                                                    <span class="swot_data_val">
                                                        <button onclick='update_elevator("<?php echo $elevator_pitch['elevator_pitch']['id'] ?>")'>Update</button>
                                                        <button onclick='delete_elevator("<?php echo $elevator_pitch['elevator_pitch']['id'] ?>")'>Delete</button>
                                                    </span>
                                                </h1>
                                            </div>
                                            <div class='div_margin'>
                                                <h3>Identify the goal of the Pitch</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>1) Self Introduction </h1>
                                                <p><?php echo $elevator_pitch['elevator_pitch']['self_intro'] ?></p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>2) Advertisement </h1>
                                                <p><?php echo $elevator_pitch['elevator_pitch']['advertise'] ?></p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>3) Building A Connection </h1>
                                                <p><?php echo $elevator_pitch['elevator_pitch']['connection'] ?></p>
                                            </div>    


                                            <div class='div_margin'>
                                                <h3>Clearly Describe what you do</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>1) What you do/study/research/build/make</h1>
                                                <p><?php echo $elevator_pitch['elevator_pitch']['study'] ?></p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>2)  Past experience</h1>
                                                <p><?php echo $elevator_pitch['elevator_pitch']['past_exp'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Focus on Strengths</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>1) Unique ideas. Recent activities</h1>
                                                <p><?php echo $elevator_pitch['elevator_pitch']['unique_idea'] ?></p>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>2) Latest accomplishments </h1>
                                                <p><?php echo $elevator_pitch['elevator_pitch']['latest_accomp'] ?></p>
                                            </div>

                                            <div class='div_margin'>
                                                <h3>Credit or Compliment</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <h1>1) Team Members, supervisor, mentors</h1>
                                                <p><?php echo $elevator_pitch['elevator_pitch']['team_member'] ?></p>
                                            </div>                                           

                                            <div class='div_margin'>
                                                <h3>Engage listener with a question</h3>
                                            </div>
                                            <div class='div_margin'>
                                                <p><?php echo $elevator_pitch['elevator_pitch']['engage_listner'] ?></p>
                                            </div>                                                                                                                 

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

                            <div id="interview_ques" class="tab-pane fade">
                                <ul class="nav nav-tabs new_proper">
                                    <li class="active">
                                        <a data-toggle="tab" href="#add_interview_ques" aria-expanded="true">Add Interview Question</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#view_interview_ques" aria-expanded="true">View Interview Question</a>
                                    </li>
                                </ul>

                                <div class='tab-content tabs_use'> 
                                    <div id="add_interview_ques" class="tab-pane fade active in">
                                        <div class="form-group">
                                            <div class="form_color_use">
                                                <form method="post">     
                                                    <input type="hidden" name="form_name" value="interview_question">
                                                    <input type="hidden" name="interview_id_name" id="interview_id_val_data">
                                                    <h1><center>INTERVIEW QUESTION</center></h1>
                                                    <h4>What to Say and Ask First things first:</h4>
                                                    <p class="para_used">"Thank you for taking time out of your day to meet with me."</p>
                                                    <p class="para_used">Second, restate your purpose: "As I indicated on the phone (in my letter), I am in the process of gathering information and advice about the field of (targeted field). (Name) suggested that I should contact you." It is also important to state plainly and simply, "I am not here to ask you for a job; I am here to ask you for information." Your questions will yield more information if they are open-ended enough to engage the person in conversation.</p>
                                                    <br/>

                                                    <ol>
                                                        <div class="form_group">
                                                            <li class="li_data_div1"><strong>Could you tell me about your background and how you came to hold your current position?</strong><small> The conversation should lend itself to inquiries about educational background as well as the steps in this person's career path. You will be learning how at least one person got to where you think you may want to go.</small></li>
                                                            <textarea rows="3" class="width_use_div" name="about_background" id="about_background_id"></textarea>
                                                        </div>
                                                        <div class="form_group">
                                                            <li class="li_data_div1"><strong>What general skills are required in this line of work?</strong><small> This should yield particular contexts in which general transferable skills (which can be products of your liberal arts education) are employed. It also invites the follow-up</small></li>
                                                            <textarea rows="3" class="width_use_div" name="general_skill" id="general_skill_id"></textarea>
                                                        </div>
                                                        <div class="form_group">
                                                            <li class="li_data_div1"><strong>What specific or technical skills have you acquired in your work? 
                                                                </strong><small>Besides yielding what you need to have in the skills department, this question might be followed by an inquiry into the types of training the employer provides.</small></li>
                                                            <textarea rows="3" class="width_use_div" name="tech_skill" id="tech_skill_id"></textarea>
                                                        </div>
                                                        <div class="form_group">
                                                            <li class="li_data_div1"><strong>What do you like most about your work (or the field)?
                                                                </strong><small> This question might get at how the person articulates the intrinsic rewards of the work. These are the intangibles, the things that make the person tick and bring joy in his or her work.</small></li>
                                                            <textarea rows="3" class="width_use_div" name="about_work" id="about_work_id"></textarea>
                                                        </div> 
                                                        <div class="form_group">
                                                            <li class="li_data_div1"><strong>Are there any responsibilities you would rather give away?
                                                                </strong><small> This is a diplomatic attempt at uncovering aspects of the work that the person does not appreciate</small></li>
                                                            <textarea rows="3" class="width_use_div" name="responsibility" id="inter_responsibility_id"></textarea>
                                                        </div> 
                                                        <div class="form_group">
                                                            <li class="li_data_div1"><strong>What are some of the challenges of your job?....that the organization faces?...that impact the field?
                                                                </strong><small> These questions are designed to give you clear information regarding the stresses, demands, and probably the opportunities in this line of work. Much work is created to address problems, and these questions will help you begin to articulate how you might be part of the solution to those problems.</small></li>
                                                            <textarea rows="3" class="width_use_div" name="job_challenge" id="job_challenge_id"></textarea>
                                                        </div> 
                                                        <div class="form_group">
                                                            <li class="li_data_div1"><strong>What is the outlook for entry-level professionals in the field?
                                                                </strong><small> Part of this line of inquiry includes "what is a typical entry-level position in the field (or in this organization)?" and should unveil how someone can get a chance to start</small></li>
                                                            <textarea rows="3" class="width_use_div" name="professional_field" id="professional_field_id"></textarea>
                                                        </div> 
                                                        <div class="form_group">
                                                            <li class="li_data_div1"><strong>What are the short and long-term goals of your organization or department?
                                                                </strong><small> Here, you are attempting to get a clearer and current picture of the organization. You should have done enough research ahead of time to know some basics about the products or services and even the general philosophy of the organization. This will take your knowledge a step further</small></li>
                                                            <textarea rows="3" class="width_use_div" name="term_goal" id="term_goal_id"></textarea>
                                                        </div>
                                                        <div class="form_group">
                                                            <li class="li_data_div1"><strong>Are there others in this field with whom you would suggest I talk?
                                                                </strong><small> Follow this with, "may I say you referred me?" Make sure you get the correct spelling of the name.</small></li>
                                                            <textarea rows="3" class="width_use_div" name="any_other" id="any_other_id"></textarea>
                                                        </div>
                                                        <div class="question_add_div"></div>
                                                        <div class="form_group">
                                                            <button type="button" id="add_more_interview_id">Add More</button><br><br/>
                                                        </div>
                                                        <div class="form_group">
                                                            <strong>Name of Interviewer</strong>
                                                            <input type="text" class="text_data_interview" name="interviwer_name" id='interviwer_id'>
                                                        </div>
                                                        <div class="form_group">
                                                            <strong>Date</strong>
                                                            <input type="date" class="text_data_interview" name="interview_date" id='interview_date_id_val'>
                                                        </div>
                                                        <div class="form_group">
                                                            <button type="submit" class="button_save_data">Save</button>
                                                        </div>

                                                    </ol>    

                                                    <div class="clearfix"></div>

                                                </form>        
                                            </div>     
                                        </div>
                                    </div> 

                                    <div id="view_interview_ques" class="tab-pane fade">
                                <?php $p=1; if(count($view_interview) > 0) {
                                    foreach ($view_interview as $interview) {
                                ?>
                                        <div class="repeat_border_div">
                                            <div>
                                                <h1 class="swot_div_head">Interview Question <?php echo $p++; ?>
                                                    <span class="swot_data_val">
                                                        <button onclick='update_interview_ques("<?php echo $interview['interview_question']['id'] ?>")'>Update</button>
                                                        <button onclick='delete_interview_ques("<?php echo $interview['interview_question']['id'] ?>")'>Delete</button>
                                                    </span>
                                                </h1>
                                            </div>
                                            <ol style="margin-top: 2em;">
                                                <div class="div_margin">
                                                    <div class="table">
                                                        <table class="table_use_div table-responsive">
                                                            <tr>
                                                                <th>Interviewer Name: </th>
                                                                <td><?php echo $interview['interview_question']['interviwer_name'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Interview Date: </th>
                                                                <td><?php echo $interview['interview_question']['date'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="div_margin">
                                                    <li class="li_data_div">Could you tell me about your background and how you came to hold your current position?</li>
                                                    <p><?php echo $interview['interview_question']['about_background'] ?></p>
                                                </div>

                                                <div class="div_margin">
                                                    <li class="li_data_div">What general skills are required in this line of work?</li>
                                                    <p><?php echo $interview['interview_question']['general_skill'] ?></p>
                                                </div>

                                                <div class="div_margin">
                                                    <li class="li_data_div">What specific or technical skills have you acquired in your work?</li>
                                                    <p><?php echo $interview['interview_question']['tech_skill'] ?></p>
                                                </div>

                                                <div class="div_margin">
                                                    <li class="li_data_div">What do you like most about your work (or the field)?</li>
                                                    <p><?php echo $interview['interview_question']['about_work'] ?></p>
                                                </div>

                                                <div class="div_margin">
                                                    <li class="li_data_div">Are there any responsibilities you would rather give away?</li>
                                                    <p><?php echo $interview['interview_question']['responsibility'] ?></p>
                                                </div>

                                                <div class="div_margin">
                                                    <li class="li_data_div">What are some of the challenges of your job?....that the organization faces?...that impact the field?</li>
                                                    <p><?php echo $interview['interview_question']['job_challenge'] ?></p>
                                                </div>

                                                <div class="div_margin">
                                                    <li class="li_data_div">What is the outlook for entry-level professionals in the field?</li>
                                                    <p><?php echo $interview['interview_question']['professional_field'] ?></p>
                                                </div>

                                                <div class="div_margin">
                                                    <li class="li_data_div">What are the short- and long-term goals of your organization or department?</li>
                                                    <p><?php echo $interview['interview_question']['term_goal'] ?></p>
                                                </div>

                                                <div class="div_margin">
                                                    <li class="li_data_div">Are there others in this field with whom you would suggest I talk?</li>
                                                    <p><?php echo $interview['interview_question']['any_other'] ?></p>
                                                </div>

                                                <?php $more_ques = explode('|',$interview['interview_question']['more_question']);
                                                $more_ans = explode('|',$interview['interview_question']['more_answer']);
                                                if(count($more_ques) > 0) {
                                                    for($i = 0; $i < count($more_ques); $i++) {
                                                ?>
                                                <div class="div_margin">
                                                    <li class="li_data_div"><?php echo $more_ques[$i]; ?></li>
                                                    <p><?php echo $more_ans[$i]; ?></p>
                                                </div>                                               
                                                <?php } } ?>                                               
                                            </ol> 
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
                    </div>

                    <div id="menu11" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#add_job_reference">Add Job References</a></li>
                            <li><a data-toggle="tab" href="#view_job_reference">View Job References</a></li>
                            <li><a data-toggle="tab" href="#upload_document">Upload Documents</a></li>
                            <li><a data-toggle="tab" href="#view_reference_document">View Documents</a></li>
                            <li><a data-toggle="tab" href="#add_school_reference">Add School References</a></li>
                            <li><a data-toggle="tab" href="#view_school_reference">View School References</a></li>
                            <li><a data-toggle="tab" href="#add_volunteer_reference">Add Volunteer References</a></li>
                            <li><a data-toggle="tab" href="#view_volunteer_reference">View Volunteer References</a></li>
                            <li><a data-toggle="tab" href="#add_character_reference">Add Character Reference</a></li>
                            <li><a data-toggle="tab" href="#view_character_reference">View Character Reference</a></li>
                        </ul>
                        <div class='tab-content tabs_use'>
                            <div id="add_job_reference" class="tab-pane fade in active">
                                <div class="form-group form_edit">
                                    <form method="post">                           
                                        <input type="hidden" name="form_name" value="add_job_ref">
                                        <input type="hidden" name="job_ref_name" value="" id="job_ref_id">
                                        <div class="form_color_use">
                                            <h3>First, list each work experience in your history. Identify your responsibilities (tasks you
                                                had to do), the skills you learned and the knowledge you needed to do these things. When
                                                you list the skill(s), check off how you learned them.
                                            </h3>    
                                            <div class="num_jobs">
                                                <strong>Number of Jobs</strong><br>
                                                <input type="number" min="1" name="job_num" id="job_num_id"><br><br>
                                                <input type="hidden" name="job_ref_count" id="job_ref_count_id">
                                                <button type="button" onclick="count_job_ref()" style="width: 15%;font-size: 16px;">Submit</button>  
                                            </div>
                                            <div id="add_job_ref_id_dis"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>    
                                    <div class="clearfix"></div>
                                </div>  
                            </div>

                            <div id="view_job_reference" class="tab-pane fade">
                                <div class="table">
                                    <table class="key_skill_use table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Company Name</th>
                                                <th>Job Type</th>
                                                <th>Position</th>
                                                <th>Job Title</th> 
                                                <th>Length of Employment</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>  

                                        <tbody>
                                        <?php if(count($view_job_ref) > 0) {
                                        foreach ($view_job_ref as $job_ref) { ?>
                                            <tr>
                                                <td><?php echo $job_ref['job_reference']['company_name'] ?></td>
                                                <td><?php echo $job_ref['job_reference']['job_type'] ?></td>
                                                <td><?php echo $job_ref['job_reference']['position'] ?></td>
                                                <td><?php echo $job_ref['job_reference']['job_title'] ?></td>
                                                <td><?php echo $job_ref['job_reference']['employee_length'] ?></td>
                                                <td><button class="essen_skill_div_update" onclick='update_job_ref("<?php echo $job_ref['job_reference']['id'] ?>")'>Update</button></td>
                                                <td><button class="essen_skill_div_delete" onclick='delete_job_ref("<?php echo $job_ref['job_reference']['id'] ?>")'>Delete</button></td>
                                            </tr>
                                        <?php } } else { ?>
                                            <tr>
                                                <td colspan="12"><center><b>No Records Found</b></center></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="upload_document" class="tab-pane fade">
                                <div class="form-group widt_form_under_tab row_use_what_career_dashbored">
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="form_name" value="upload_reference"> 
                                        <input type="hidden" name="upload_doc_id_name" id="upload_doc_id_name_id">  
                                        <input type="hidden" name="upload_doc" id="upload_doc_id">  
                                        <h1>Upload Reference Detail's</h1>
                                        <div class="form-group form_edit">
                                            <p><strong>Name of Uploaded Document</strong><br>
                                                <input type="text" name="doc" id="upload_doc_name_id"><br>
                                                <strong>Date</strong><br>
                                                <input type="text" class="" name="date" id="upload_doc_date_id"><br>
                                                <strong>Subject</strong><br>
                                                <input type="text" name="subject" id="upload_doc_sub_id"><br>
                                                <strong>Upload Document</strong><br>
                                                <input type="file" name="upload_doc"><br>                                                
                                                <br>
                                                <button type="submit">Save</button>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div id="view_reference_document" class="tab-pane fade">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">
                                    <div class="table">
                                        <table border="2" width="100%" cellpadding="25" class="new_use_padding table-responsive">
                                            <tbody>
                                                <tr class="chron_div">
                                                    <th><p></p><center>Name of Document</center><p></p></th>
                                            <th>
                                                <p></p><center>Date</center><p></p>
                                            </th>
                                            <th><p></p><center>Subject</center><p></p></th>
                                            <th><center>View</center></th>
                                            <th><center>Update</center></th>
                                            <th><center>Delete</center></th>
                                            </tr>
                                        <?php if(count($view_reference) > 0) {
                                        foreach ($view_reference as $ref_data) { ?>
                                            <tr class="chron_div_bottom">
                                                <td><p><?php echo $ref_data['upload_reference']['name'] ?></p></td>
                                                <td><p><?php echo $ref_data['upload_reference']['date'] ?></p></td>
                                                <td><p><?php echo $ref_data['upload_reference']['subject'] ?></p></td>
                                            <?php if(!empty($ref_data['upload_reference']['upload_doc'])) { ?>
                                                <td><a class="button_use_data" href="dashboards/download?filename=<?php echo $ref_data['upload_reference']['upload_doc'] ?>">View</a></td>
                                            <?php } else { ?>
                                                <td></td>
                                            <?php } ?>
                                                <td><button onclick='update_reference("<?php echo $ref_data['upload_reference']['id'] ?>")'>Update</button></td>
                                                <td><i class="fa fa-trash-o del_trsh" aria-hidden="true" onclick='delete_reference("<?php echo $ref_data['upload_reference']['id'] ?>")'></i></td>
                                            </tr>   
                                        <?php } } else { ?>
                                            <tr class="chron_div_bottom">
                                                <td colspan="12"><center><b>No Records Found</b></center></td>
                                            </tr>
                                        <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="add_school_reference" class="tab-pane fade">
                                <div class="form-group form_edit">
                                    <form method="post" enctype="multipart/form-data">                           
                                        <input type="hidden" name="form_name" value="add_school_ref">
                                        <input type="hidden" name="school_ref_name" value="" id="school_ref_id">
                                        <input type="hidden" name="school_ref_upload" id="school_ref_upload_id">
                                        <div class="form_color_use"> 
                                            <br><strong>Name of School</strong><br>
                                            <input type="text" name="school_name" id="school_name_ref_id"><br>
                                            <strong>Name of Reference</strong><br>
                                            <input type="text" name="ref_name" id="school_ref_name_id"><br>
                                            <strong>Upload Reference</strong><br>
                                            <input type="file" name="upload_ref"><br><br>
                                            <button type="submit">Submit</button>  
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>    
                                    <div class="clearfix"></div>
                                </div>  
                            </div>

                            <div id="view_school_reference" class="tab-pane fade">
                                <div class="table">
                                    <table class="key_skill_use table-responsive">
                                        <thead>
                                            <tr>
                                                <th>School Name</th>
                                                <th>Reference Name</th> 
                                                <th>View</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>  

                                        <tbody>
                                        <?php if(count($view_school_ref) > 0) {
                                        foreach ($view_school_ref as $school_ref) { ?>
                                            <tr>
                                                <td><?php echo $school_ref['school_reference']['school_name'] ?></td>
                                                <td><?php echo $school_ref['school_reference']['reference_name'] ?></td>
                                                <td>
                                                <?php if(!empty($school_ref['school_reference']['upload_ref'])) { ?>
                                                    <a href="dashboards/download?filename=<?php echo $school_ref['school_reference']['upload_ref'] ?>"><button class="div_button_view">View</button></a>
                                                <?php } ?>
                                                </td>
                                                <td><button class="essen_skill_div_update" onclick='update_school_ref("<?php echo $school_ref['school_reference']['id'] ?>")'>Update</button></td>
                                                <td><button class="essen_skill_div_delete" onclick='delete_school_ref("<?php echo $school_ref['school_reference']['id'] ?>")'>Delete</button></td>
                                            </tr>
                                        <?php } } else { ?>
                                            <tr>
                                                <td colspan="12"><center><b>No Records Found</b></center></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="add_volunteer_reference" class="tab-pane fade">
                                <div class="form-group form_edit">
                                    <form method="post" enctype="multipart/form-data">                           
                                        <input type="hidden" name="form_name" value="add_org_ref">
                                        <input type="hidden" name="org_ref_name" value="" id="org_ref_id">
                                        <input type="hidden" name="org_ref_upload" id="org_ref_upload_id">
                                        <div class="form_color_use"> 
                                            <br><strong>Name of Organization</strong><br>
                                            <input type="text" name="org_name" id="org_name_ref_id"><br>
                                            <strong>Date Start</strong><br>
                                            <input type="text" name="date_start_org_name" id="date_start_org_id"><br>
                                            <strong>Date Finished</strong><br>
                                            <input type="text" name="date_finish_org_name" id="date_finish_org_id"><br>
                                            <strong>Total Hours</strong><br>
                                            <input type="number" min='0' name="total_hr_org_name" id="total_hr_org_id"><br>
                                            <strong>Upload Reference</strong><br>
                                            <input type="file" name="upload_org_ref"><br><br>
                                            <button type="submit">Submit</button>  
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>    
                                    <div class="clearfix"></div>
                                </div>  
                            </div>

                            <div id="view_volunteer_reference" class="tab-pane fade">
                                <div class="table">
                                    <table class="key_skill_use table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Organization Name</th>
                                                <th>Date Start</th> 
                                                <th>Date Finished</th> 
                                                <th>Total Hours</th> 
                                                <th>View</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>  

                                        <tbody>
                                        <?php if(count($view_vol_ref) > 0) {
                                        foreach ($view_vol_ref as $vol_ref) { ?>
                                            <tr>
                                                <td><?php echo $vol_ref['volunteer_reference']['org_name'] ?></td>
                                                <td><?php echo $vol_ref['volunteer_reference']['date_start'] ?></td>
                                                <td><?php echo $vol_ref['volunteer_reference']['date_finish'] ?></td>
                                                <td><?php echo $vol_ref['volunteer_reference']['total_hours'] ?></td>
                                                <td>
                                                <?php if(!empty($vol_ref['volunteer_reference']['upload_ref'])) { ?>
                                                    <a href="dashboards/download?filename=<?php echo $vol_ref['volunteer_reference']['upload_ref'] ?>"><button class="div_button_view">View</button></a>
                                                <?php } ?>
                                                </td>
                                                <td><button class="essen_skill_div_update" onclick='update_org_ref("<?php echo $vol_ref['volunteer_reference']['id'] ?>")'>Update</button></td>
                                                <td><button class="essen_skill_div_delete" onclick='delete_org_ref("<?php echo $vol_ref['volunteer_reference']['id'] ?>")'>Delete</button></td>
                                            </tr>
                                        <?php } } else { ?>
                                            <tr>
                                                <td colspan="12"><center><b>No Records Found</b></center></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="add_character_reference" class="tab-pane fade">
                                <div class="form-group form_edit">
                                    <form method="post">                           
                                        <input type="hidden" name="form_name" value="add_char_ref">
                                        <input type="hidden" name="ref_char_name" value="" id="ref_char_name_id">
                                        <div class="form_color_use"> 
                                            <br><strong>Name of References</strong><br>
                                            <input type="text" name="ref_name" id="ref_name_id"><br>
                                            <strong>Address</strong><br>
                                            <input type="text" name="address_char" id="address_char_id"><br>
                                            <strong>City</strong><br>
                                            <input type="text" name="city_char" id="city_char_id"><br>
                                            <strong>Province</strong><br>
                                            <input type="text" name="province_char" id="province_char_id"><br>
                                            <strong>Email</strong><br>
                                            <input type="email" name="email_char" id="email_char_id" style="padding: 2%;"><br>
                                            <strong>Telephone Number</strong><br>
                                            <input type="text" class="phone" name="telephone_char" id="telephone_char_id"><br><br>
                                            <button type="submit">Submit</button>  
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>    
                                    <div class="clearfix"></div>
                                </div> 
                            </div>

                            <div id="view_character_reference" class="tab-pane fade">
                                <div class="table">
                                    <table class="key_skill_use table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Reference Name</th>
                                                <th>Address</th> 
                                                <th>City</th> 
                                                <th>Province</th> 
                                                <th>Email</th>
                                                <th>Telephone</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>  

                                        <tbody>
                                        <?php if(count($view_char_ref) > 0) {
                                        foreach ($view_char_ref as $char_ref) { ?>
                                            <tr>
                                                <td><?php echo $char_ref['character_reference']['name'] ?></td>
                                                <td><?php echo $char_ref['character_reference']['address'] ?></td>
                                                <td><?php echo $char_ref['character_reference']['city'] ?></td>
                                                <td><?php echo $char_ref['character_reference']['province'] ?></td>
                                                <td><?php echo $char_ref['character_reference']['email'] ?></td>
                                                <td><?php echo $char_ref['character_reference']['telephone'] ?></td>
                                                <td><button class="essen_skill_div_update" onclick='update_char_ref("<?php echo $char_ref['character_reference']['id'] ?>")'>Update</button></td>
                                                <td><button class="essen_skill_div_delete" onclick='delete_char_ref("<?php echo $char_ref['character_reference']['id'] ?>")'>Delete</button></td>
                                            </tr>
                                        <?php } } else { ?>
                                            <tr>
                                                <td colspan="12"><center><b>No Records Found</b></center></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div id="menu12" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#Career_Academic_Goals" aria-expanded="true">Career/Academic Goals</a></li>
                            <li class=""><a data-toggle="tab" href="#menu_view_skill1" aria-expanded="false">Add New Career Goal</a></li> 
                            <li class=""><a data-toggle="tab" href="#View_Career_Goals" aria-expanded="false">View Career Goals</a></li> 
                            <li class=""><a data-toggle="tab" href="#Weekly_Goal" aria-expanded="false">Weekly Goals</a></li> 
                            <li class=""><a data-toggle="tab" href="#Monthly_Goals" aria-expanded="false">Monthly Goals</a></li> 							
                        </ul>

                        <div class="tab-content tab-pane fade in active">
                            <div id="Career_Academic_Goals" class="tab-pane fade in active">
                                <div class="group_div">
                                    <h4 class="heading_h_use">Goals must be specific, measurable,attainable,realistic,relevant,time bond
                                    </h4>
                                    <p>Your career development plan must be specific, measurable, attainable,
                                        realistic and time bound.</p>
                                </div>

                                <div class="group_div">
                                    <h4 class="heading_h_use">Specific
                                    </h4>
                                    <p>Your goal needs to be well defined. To be specific you need to ask the what,
                                        where, who questions about your goal.&nbsp;
                                        Explain very precisely what it is you want to accomplish.</p>
                                </div>
                                <div class="group_div">
                                    <h4 class="heading_h_use">Measurable
                                    </h4>
                                    <p>To be measurable, you must know without any doubt when you have
                                        actually reached your goal.&nbsp;
                                        If the end result is not precisely measurable, you need to redefine your career
                                        development plan so that it is.</p>
                                </div> 
                                <div class="group_div">
                                    <h4 class="heading_h_use">Attainable
                                    </h4>
                                    <p>Your goal must be attainable.&nbsp;
                                        Is it actually possible to achieve this?&nbsp;<br>
                                        There is a balance between shooting for the stars and pursuing something
                                        that is not really attainable. If it's probably not attainable, start with a smaller
                                        goal but one that is heading in the same direction but more likely to be
                                        attained.<br><br><u>Aim big but start small!</u><br>
                                        <br>
                                        A career goal that is attainable by one person may not be attainable by
                                        another depending on their motivation, and experience etc. Assess these
                                        characteristics in yourself first.
                                        <br>
                                        Have a close look at your goal.&nbsp;
                                        Can you honestly say that you think it is attainable with the right amount of
                                        effort? If so, go for it.
                                    </p>
                                </div>
                                <div class="group_div">
                                    <h4 class="heading_h_use">Realistic
                                    </h4>
                                    <p>A goal&nbsp;could&nbsp;be attainable but not realistic.&nbsp;
                                        For example, it might be possible to become president of your Zimbabwe
                                        based subsidiary, but is it realistic considering that you have four young
                                        children in school and a wife that doesn't want to live there.&nbsp;
                                        That might be an unrealistic goal even though it is attainable.
                                    </p>
                                </div>
                                <div class="group_div">
                                    <h4 class="heading_h_use">Time Bound
                                    </h4>
                                    <p>Does your goal have time boundaries?<br>If it doesn't have a certain date by which it must be achieved, it probably
                                        won't be achieved.
                                        <br>
                                        Make sure you fill in the target finish date on your sample career
                                        development plan worksheet, otherwise you open yourself up to never
                                        ending procrastination
                                    </p>
                                </div>
                            </div>
                            <div id="menu_view_skill1" class="tab-pane fade">
                                <div class="carrier_goal">
                                    <h3 class="group_div"> New Career/ACADEMIC Goals</h3>
                                    <h5 class="h5_carrier_goal">Career Goal 1</h5>
                                </div>
                                <div class="div_form_use">  
                                    <form method="post">
                                        <input type="hidden" name="form_name" value="career_goal">
                                        <input type="hidden" name="career_goal_id_name" id="career_goal_id" value="">
                                        <div class="none_form">
                                            <input type="text" name="goal_title" id="goal_title_id" placeholder="Goal Title">
                                        </div>
                                        <div class="none_form">
                                            <lable><b>Today's Date</b></lable>
                                            <input type="text" id="date_ne" name="today_date">

                                        </div>
                                        <div class="none_form">
                                            <lable><b>Target Date</b></lable>
                                            <input type="text" id="target_date_id" name="target_date">
                                        </div>
                                        <div class="none_form">
                                            <lable><b>Date Archived</b></lable>
                                            <input type="text" id="date_archive_id" name="date_archive">
                                        </div>
                                        <div class='clearfix'></div>
                                        <div class="none_form">
                                            <br>
                                            <label><b>Personal Benefits from Achieving This Goal.&nbsp;
                                                    Why do I really want to achieve this career goal? Be very specific.       </b><br>
                                                <b>Possible Obstacles and Solutions to the Goal</b><br>
                                                <br>
                                                <b>Obstacles 1:</b> 
                                            </label>
                                        </div>
                                        <div class='clearfix'></div>
                                        <div class="none_form">
                                            <ol class="list_styl_order">
                                                <li><input type="text" name="goal_obstacle1[]"></li>
                                                <li><input type="text" name="goal_obstacle1[]"></li>
                                                <li><input type="text" name="goal_obstacle1[]"></li> 
                                            </ol>
                                            <button type="button" class="add_career_obstacle1">Add</button>
                                            <button type="button" class="remove_career_obstacle1">Remove</button>
                                        </div>

                                        <div class="none_form margin_form"><br>
                                            <b>Steps Required for Achieving Career Goal</b>
                                            <ol class="list_styl_order_sec">
                                                <li><input type="text" name="achive_career_goal[]"></li>
                                                <li><input type="text" name="achive_career_goal[]"></li>
                                                <li><input type="text" name="achive_career_goal[]"></li>   
                                            </ol>
                                            <button type="button" class="add_career_archieve">Add</button>
                                            <button type="button" class="remove_career_archieve">Remove</button>
                                        </div>

                                        <div class="none_form margin_form">
                                            <lable>
                                                <b>Obstacle 2</b>
                                                <p><b>Steps Required for Achieving Career Goal</b></p>
                                            </lable>
                                            <br>

                                            <button type="submit" class="button_save_data">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="View_Career_Goals" class="tab-pane fade">
                                <div>
                                    <div class="carrier_goal">
                                        <h3 class="group_div"> View Career/Academic Goals</h3>
                                    </div>
                                    <div class="div_form_use width_relative_form"> 
                                        <div class="table">
                                            <table class="table_use_div word_div table-responsive">
                                            <?php if(count($view_career_goal) > 0) {
                                            foreach($view_career_goal as $career_goal) { ?>
                                                <tbody>
                                                    <tr>
                                                        <td><h5>Goals</h5></td>
                                                        <td>
                                                            <input type="button" class="essen_skill_div_update" value="Update" onclick='update_career_goal("<?php echo $career_goal['career_goal']['id'] ?>")' style="margin-right:1em;">
                                                            <input type="button" class="essen_skill_div_delete" value="Delete" onclick='delete_career_goal("<?php echo $career_goal['career_goal']['id'] ?>")'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Goal Title</th>
                                                        <td><?php echo $career_goal['career_goal']['goal_title'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Today Date</th>
                                                        <td><?php echo $career_goal['career_goal']['today_date'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Target Date</th>
                                                        <td><?php echo $career_goal['career_goal']['target_date'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date Archived</th>
                                                        <td><?php echo $career_goal['career_goal']['date_archieve'] ?></td>
                                                    </tr>                                              

                                                    <tr><th colspan="2">Obstacles</th></tr>
                                                <?php $obstacle = explode('*', $career_goal['career_goal']['career_obstacle1']);                                                
                                                for($i = 0; $i < count($obstacle); $i++) {
                                                    if(!empty($obstacle[$i])) {
                                                ?>
                                                    <tr><td colspan="2"><?php echo $obstacle[$i]; ?></td></tr>
                                                <?php } } ?>
                                                    <tr><th colspan="3">Achieving Career Goal</th></tr>
                                                <?php $archive = explode('*', $career_goal['career_goal']['career_archieve']);                                                
                                                for($j = 0; $j < count($archive); $j++) {
                                                    if(!empty($archive[$j])) {
                                                ?>
                                                    <tr><td colspan="2"><?php echo $archive[$j]; ?></td></tr>
                                                <?php } } ?>
                                                </tbody>
                                            <?php } } else { ?>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="6">No Records Found</td>
                                                    </tr>
                                                </tbody>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Weekly_Goal" class="tab-pane fade">
                                <h4 class="heading_h_use" style="padding: 20px;"><center>Coming Soon</center></h4>
                            </div>
                            <div id="Monthly_Goals" class="tab-pane fade">
                                <h4 class="heading_h_use" style="padding: 20px;"><center>Coming Soon</center></h4>
                            </div>

                        </div>
                    </div>

                    <div id="menu13" class="tab-pane fade">

                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#menu_subCre" aria-expanded="true">Create Event/Workshop Reminder</a></li>
                            <li><a data-toggle="tab" href="#menu_subview" aria-expanded="true">View Reminders</a></li>

                        </ul>

                        <div class='tab-content tabs_use'>

                            <div id="menu_subCre" class="tab-pane fade in active">
                                <div>
                                    <form method="post">
                                        <input type="hidden" name="form_name" value="event_reminder">
                                        <input type="hidden" name="event_id_name" id="event_id">
                                        <div class="carrier_goal">
                                            <h3 class="group_div">Create Event/Workshop Reminder</h3>
                                        </div>
                                        <div class="div_form_use">  
                                            <div class="none_form">
                                                <label>Name of Event</label>
                                                <input type="text" name="event_name" placeholder="Name" id="name_id_val">
                                            </div>
                                            <div class="none_form">
                                                <label>Date of Event</label>
                                                <input type="text" name="event_date" id="date_id">
                                            </div>

                                            <div class="none_form">
                                                <label>Time Of Event</label>
                                                <input type="time" name="event_time" id="time_id">
                                            </div>
                                            <div class="none_form">
                                                <label>Location</label>
                                                <input type="text" name="location" placeholder="Location" id="location_id">
                                            </div>
                                            <div class="none_form">
                                                <div class='form-group spacing_use_font'>  <div class='col-lg-4'>Set Reminder</div>
                                                    <div class='col-lg-8'>
                                                        <span><input type='radio' name='set_reminder' value="Yes" id="reminder_id_yes"/> &nbsp; Yes</span> &nbsp;&nbsp;&nbsp;
                                                        <span><input type='radio' name='set_reminder' value="No" id="reminder_id_no"/> &nbsp; No</span> 
                                                    </div><br/>
                                                    <div class="event_reminder" style="display: none; padding-top: 1em;">
                                                        <strong>Reminder Date</strong>
                                                        <input type="text" name="reminder_date_workshop" id="reminder_workshop_id">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="clearfix"></div>
                                            <div class="none_form">
                                                <button type="submit" class="button_save_data">Save</button>
                                            </div>
                                        </div>
                                    </form>    
                                </div>
                            </div>
                            <div id="menu_subview" class="tab-pane fade">
                                <div class="carrier_goal g_para_">
                                    <?php if(count($view_reminder) > 0) {
                                        foreach ($view_reminder as $reminder) {
                                    ?> 
                                    <div class="update_network" style="min-height: 500px;">
                                        <div class="col-xs-12 col-sm-2">
                                            <p>
                                                Name Of Event <br><br>
                                                <?php echo $reminder['event_reminder']['event_name'] ?></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-2">
                                            <p>Date Of Event  
                                                <br><br> <?php if(!empty($reminder['event_reminder']['date'])) { echo date('d-M-Y',strtotime($reminder['event_reminder']['date'])); } else { echo ""; } ?>
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-sm-2">
                                            <p>Time Of Event 
                                                <br><br>  

                                                    <?php if(!empty($reminder['event_reminder']['time'])) { 
                                                        echo date('h : i A',strtotime($reminder['event_reminder']['time'])); 
                                                        
                                                    } else { 
                                                        echo "";                                                        
                                                        
                                                        } 
                                                   ?>
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-sm-1">
                                            <p>Location<br><br>
                                               <?php echo $reminder['event_reminder']['location'] ?></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-1">
                                            <p>Set Reminder<br><br>
                                                <?php echo $reminder['event_reminder']['set_reminder'] ?></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-1">
                                            <p>Reminder Date<br><br>
                                                <?php if(!empty($reminder['event_reminder']['reminder_date'])) { echo $reminder['event_reminder']['reminder_date']; } else { echo ""; } ?></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-1">
                                            <p>Update<br><br>
                                                <button class="essen_skill_div_update" onclick='update_reminder("<?php echo $reminder['event_reminder']['id'] ?>")'>Update</button></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-1">
                                            <p>Delete<br><br>
                                                <button class="essen_skill_div_delete" onclick='delete_reminder("<?php echo $reminder['event_reminder']['id'] ?>")'>Delete</button></p>
                                        </div>
                                    </div> 
                                    <?php } } else { ?>
                                    <div class="update_network">
                                        <div class="col-xs-12 col-sm-12"><center><b>No Records Found</b></center></div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div> 


                    </div>

                    <div id="menu15" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#interview_note_add_f" aria-expanded="true">Add S.W.O.T</a></li>
                            <li><a data-toggle="tab" href="#interview_note_add_g" aria-expanded="true">VIEW S.W.O.T</a></li>                           
                        </ul>
                        <div class="tab-content tabs_use">
                            <div id="interview_note_add_f" class="tab-pane fade active in">

                                <?php if(count($view_swot) > 0) {
                                foreach ($view_swot as $swot_data) { ?>
                                <form method="post">
                                    <div class="group_div">
                                        <h4 class="heading_h_use">SWOT </h4>

                                        <h3>( Strengths, Weaknesses,Opportunities , Threats) </h3>
                                        <p>SWOT analysis exercise ignites an enhanced awareness of what one brings to the table in a balanced light of both advantages and challenges. Organizations roll out elaborate schemes to remain competitive as well as innovative. Why wouldn't individuals want to achieve the same level of excellence for themselves?"</p>
                                    </div>
                                    <div class="group_div">
                                        <h4 class="heading_h_use">How to do it </h4>

                                        <p>To conduct a personal SWOT analysis, ask yourself questions about each of the four areas being examined. Answer honestly. Honesty is crucial, or the analysis will not generate meaningful results. With that in mind, try to see yourself from the standpoint of a colleague or a bystander, and view criticism with objectivity.<br/><br/> List all of your strengths, even the ones that have been dormant for a while. And pay particular attention to the things that you have that your peers don't — how are you different, unique and special?" 
                                            <br/>
                                            Begin by identifying your <b>strengths.</b> These are the traits
                                            or skills that set you apart from others. Questions to ask include:
                                            Begin by identifying your <b>strengths.</b> These are the traits or skills that set you apart from others. Questions to ask include:
                                        </p>
                                        <br/>

                                        <input type="hidden" name="form_name" value="swot">
                                        <input type="hidden" name="swot_name_id" id="swot_id" value="<?php echo $swot_data['swot']['id'] ?>">
                                        <h4>Strengths</h4>

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>What are you good at naturally?</b></p>
                                            <ol class="list_styl_good">
                                                <?php $swot_good = explode('*',$swot_data['swot']['good']); 
                                                for($i = 0; $i < count($swot_good); $i++) {
                                                    if($swot_good[$i] != '') {
                                                ?>
                                                <li><input type="text" name="swot_good[]" value="<?php echo $swot_good[$i]; ?>"></li>
                                                    <?php } } ?>
                                            </ol>
                                            <button type="button" class="add_swot_good">Add</button>
                                            <button type='button' class="remove_swot_good">Remove</button>
                                        </div>

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>What skills have you worked to develop?</b></p>
                                            <ol class="list_styl_skill">
                                                <?php $skill = explode('*',$swot_data['swot']['skill']); 
                                                for($i = 0; $i < count($skill); $i++) {
                                                    if($skill[$i] != '') {
                                                ?>
                                                <li><input type="text" name="swot_skill[]" value="<?php echo $skill[$i]; ?>"></li>
                                                    <?php } } ?>
                                            </ol>
                                            <button type="button" class="add_swot_skill">Add</button>
                                            <button type="button" class="remove_swot_skill">Remove</button>
                                        </div>
                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>What are your talents, or natural-born gifts?</b></p>
                                            <ol class="list_styl_talent">
                                                <?php $talent = explode('*',$swot_data['swot']['talent']); 
                                                for($i = 0; $i < count($talent); $i++) {
                                                    if($talent[$i] != '') {
                                                ?>
                                                <li><input type="text" name="swot_talent[]" value="<?php echo $talent[$i] ?>"></li>
                                                    <?php } } ?>
                                            </ol>
                                            <button type="button" class="add_swot_talent">Add</button>
                                            <button type="button" class="remove_swot_talent">Remove</button>
                                        </div>
                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>How strong is your network of connections?</b></p>
                                            <ol class="check_type">
                                                <li><input type='radio' name='network_con' value="Strong" <?php echo ($swot_data['swot']['network'] == 'Strong' ? 'checked' : '') ?>/> Strong</li>
                                                <li><input type='radio' name='network_con' value="Weak" <?php echo ($swot_data['swot']['network'] == 'Weak' ? 'checked' : '') ?>> Weak</li>
                                                <li><input type='radio' name='network_con' value="Needs Improvement" <?php echo ($swot_data['swot']['network'] == 'Needs Improvement' ? 'checked' : '') ?>/> Needs Improvement</li>
                                            </ol>

                                        </div>

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>What do other people see as your strengths?</b></p>
                                            <ol class="list_styl_str">
                                                <?php $strength = explode('*',$swot_data['swot']['strength']); 
                                                for($i = 0; $i < count($strength); $i++) {
                                                    if($strength[$i] != '') {
                                                ?>
                                                <li><input type="text" name="swot_strength[]" value="<?php echo $strength[$i] ?>"></li>
                                                    <?php } } ?>
                                            </ol>
                                            <button type="button" class="add_swot_strength">Add</button>
                                            <button type="button" class="remove_swot_strength">Remove</button>
                                        </div>
                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>What values and ethics set you apart from your peers?</b></p>
                                            <ol class="list_styl_ethics">
                                                <?php $ethics = explode('*',$swot_data['swot']['ethics']); 
                                                for($i = 0; $i < count($ethics); $i++) {
                                                    if($ethics[$i] != '') {
                                                ?>
                                                <li><input type="text" name="swoth_ethics[]" value="<?php echo $ethics[$i]; ?>"></li>
                                                    <?php } } ?>
                                            </ol>
                                            <button type="button" class="add_swot_values">Add</button>
                                            <button type="button" class="remove_swot_values">Remove</button>
                                        </div>
                                        <div class='spacing_doiv_new'>

                                        </div>
                                        <h4>Weaknesses</h4>
                                        <div class='none_form'>
                                            <p><b>The next step is weaknesses.This part examines the areas in which you need to improve and the things that will set you back in your career. Questions to consider include:</b></p>
                                            <p><b>What are your negative work habits and traits?</b></p>
                                            <ol class="list_styl_negative">
                                                <?php $negative_work = explode('*',$swot_data['swot']['negative_work']); 
                                                for($i = 0; $i < count($negative_work); $i++) {
                                                    if($negative_work[$i] != '') {
                                                ?>
                                                <li><input type="text" name="swot_negative[]" value="<?php echo $negative_work[$i]; ?>"></li>
                                                    <?php } } ?>
                                            </ol>
                                            <button type="button" class="add_swot_negative">Add</button>
                                            <button type="button" class="remove_swot_negative">Remove</button>

                                        </div>
                                        <div class='none_form'>
                                            <p><b>Does any part of your education or training need improving?</b></p>

                                            <ol class="list_styl_train">
                                                <?php $training = explode('*',$swot_data['swot']['training']); 
                                                for($i = 0; $i < count($training); $i++) {
                                                    if($training[$i] != '') {
                                                ?>
                                                <li><input type="text" name="swot_training[]" value="<?php echo $training[$i] ?>"></li>
                                                    <?php } } ?>
                                            </ol>
                                            <button type="button" class="add_swot_edu">Add</button>
                                            <button type="button" class="remove_swot_edu">Remove</button>

                                        </div>
                                        <div class='none_form'>
                                            <p><b>What would other people see as your weaknesses?</b></p>

                                            <ol class="list_styl_week">
                                                <?php $weakness = explode('*',$swot_data['swot']['weakness']); 
                                                for($i = 0; $i < count($weakness); $i++) {
                                                    if($weakness[$i] != '') {
                                                ?>
                                                <li><input type="text" name="swot_week[]" value="<?php echo $weakness[$i] ?>"></li>
                                                <?php } } ?>
                                            </ol>
                                            <button type="button" class="add_swot_week">Add</button>
                                            <button type="button" class="remove_swot_week">Remove</button>

                                        </div>
                                        <div class='none_form'>
                                            <p><b>Where can you improve?</b></p>

                                            <ol class="list_styl_improve">
                                                <?php $improve = explode('*',$swot_data['swot']['improve']); 
                                                for($i = 0; $i < count($improve); $i++) {
                                                    if($improve[$i] != '') {
                                                ?>
                                                <li><input type="text" name="swot_improve[]" value="<?php echo $improve[$i] ?>"></li>
                                                <?php } } ?>
                                            </ol>
                                            <button type="button" class="add_swot_improve">Add</button>
                                            <button type="button" class="remove_swot_improve">Remove</button>

                                        </div>
                                        <div class='none_form'>
                                            <p><b>What are you afraid to do or most likely to avoid?</b></p>

                                            <ol class="list_styl_avoid">
                                                <?php $avoid = explode('*',$swot_data['swot']['avoid']); 
                                                for($i = 0; $i < count($avoid); $i++) {
                                                    if($avoid[$i] != '') {
                                                ?>
                                                <li><input type="text" name="swot_avoid[]" value="<?php echo $avoid[$i] ?>"></li>
                                                <?php } } ?>
                                            </ol>
                                            <button type="button" class="add_swot_avoid">Add</button>
                                            <button type="button" class="remove_swot_avoid">Remove</button>

                                        </div>


                                        <div class='form_none'>
                                            <br/>
                                            <br/>
                                            <h4>Opportunities</h4>
                                            <p>For the opportunities section, look at the external factors you can take advantage of to pursue a promotion, find a new job or determine a career direction. Questions to examine include:</p><br>
                                            <div class='form_none'>
                                                <strong>What is the state of the economy?</strong><br>
                                                <input type="text" class="form_type_div" name="economy_state" id="economy_state_id" value="<?php echo $swot_data['swot']['economy_state'] ?>"><br><br>
                                                <strong>Is your industry growing?</strong>
                                                <input type="text" class="form_type_div" name="industry_grow" id="industry_grow_id" value="<?php echo $swot_data['swot']['industry_grow'] ?>"><br><br>
                                                <strong>Is there new technology in your industry?</strong>
                                                <input type="text" class="form_type_div" name="industry_tech" id="industry_tech_id" value="<?php echo $swot_data['swot']['industry_tech'] ?>"><br><br>
                                                <strong>What are the biggest changes occurring in the current business environment?</strong>
                                                <input type="text" class="form_type_div" name="bussiness_env" id="bussiness_env_id" value="<?php echo $swot_data['swot']['business_environment'] ?>"><br><br>
                                                <strong>Have customers or co-workers given you feedback about new services you could provide, or ways to improve your manner?</strong>
                                                <input type="text" class="form_type_div" name="cutom_service" id="cutom_service_id" value="<?php echo $swot_data['swot']['cutomer_service'] ?>"><br><br>
                                            </div>
                                        </div>
                                        <div class='form_none'>
                                            <br/>
                                            <br/>
                                            <h4>Threats</h4>
                                            <p>Finally, look at any threats to your career growth. This part takes into account the external factors that could hurt your chances to attain your goals. The factors to take into account include:</p><br>
                                            <div class='form_none'>
                                                <strong>Is your industry contracting or changing directions?</strong><br>
                                                <input type="text" class="form_type_div" name="industry_contract" id="industry_contract_id" value="<?php echo $swot_data['swot']['industry_contract'] ?>"><br><br>
                                                <strong>Is there strong competition for the types of jobs for which you are best suited?</strong><br>
                                                <input type="text" class="form_type_div" name="strong_compt" id="strong_compt_id" value="<?php echo $swot_data['swot']['strong_comp'] ?>"><br><br>
                                                <strong>Do your weaknesses inhibit your ability to rise in your company or change jobs?</strong><br>
                                                <input type="text" class="form_type_div" name="week_inhibit" id="week_inhibit_id" value="<?php echo $swot_data['swot']['week_inhibit'] ?>"><br><br>
                                                <strong>What is the biggest external danger to your goals?</strong><br>
                                                <input type="text" class="form_type_div" name="ext_danger" id="ext_danger_id" value="<?php echo $swot_data['swot']['extern_danger'] ?>"><br><br>
                                                <strong>Are there any new professional standards you cannot meet?</strong><br>
                                                <input type="text" class="form_type_div" name="prof_standard" id="prof_standard_id" value="<?php echo $swot_data['swot']['prof_standard'] ?>"><br><br>
                                                <strong>Are there any new technology, education or certification requirements that will impede your progress?</strong><br>
                                                <input type="text" class="form_type_div" name="new_edu" id="new_edu_id" value="<?php echo $swot_data['swot']['new_tech'] ?>"><br><br>
                                            </div>
                                            <div class='form_none'>
                                                <button type="submit" class="button_save_data">Save</button>
                                            </div><br>
                                            <p>Finding the necessary objectivity to conduct a personal SWOT analysis can be a challenge. For this reason, we advised inviting others who know you well to review your ideas for accuracy.<br/><br/>
                                                "We often cannot see how we come across in our interactions with others, so their feedback is valuable," </p>

                                            <h3>Next steps: match or convert<br/></h3>
                                            <p>Once you have filled out the matrix, there are two ways to analyze the information and build a strategy: matching or converting.<br/>

                                                Matching means connecting two of the categories to determine a course of action. For example, matching strengths to opportunities shows you where to be aggressive and take action. On the other hand, matching weaknesses to threats exposes those areas you should work on or situations to avoid, and lets you know where to be more defensive of your position.<br/>
                                                To convert is to turn negatives into positives — in other words, converting your weaknesses into strengths, or threats into opportunities. This can mean growing a skill set through education, or finding a creative way to feature a weakness as a strength. For instance, if you are very outgoing, working in an introspective and isolated environment may not suit you very well. But if you can work toward a position, such as sales, in which you interact with many people, that weakness turns into a strength and could allow you to excel.
                                            </p><br/><br/>
                                            <h3>Outcomes</h3>
                                            <p>
                                                Once your personal SWOT analysis is complete, it is crucial to follow through on the insights you uncovered.<br/>
                                                "SWOT analysis can fail to be effective if it is simply treated as a 'laundry list,' without any tie-in to how the elements identified in the analysis can be put into play for the individual carrying out the assessment,For example, how can the identified strengths move the needle in the endeavor to achieve a key goal? Or how can one navigate a potential threat once it is identified, so as to ensure no ground is lost?"<br/>
                                                "The best outcome is to take action and succeed in the opportunities you have identified,This can benefit you on a personal and professional level, and set you apart from your peers and colleagues."
                                            </p>
                                        </div>

                                    </div>

                                </form>
                                <?php } } else { ?>
                                <form method="post">
                                    <div class="group_div">
                                        <h4 class="heading_h_use">SWOT </h4>

                                        <h3>( Strengths, Weaknesses,Opportunities , Threats) </h3>
                                        <p>SWOT analysis exercise ignites an enhanced awareness of what one brings to the table in a balanced light of both advantages and challenges. Organizations roll out elaborate schemes to remain competitive as well as innovative. Why wouldn't individuals want to achieve the same level of excellence for themselves?"</p>
                                    </div>
                                    <div class="group_div">
                                        <h4 class="heading_h_use">How to do it </h4>

                                        <p>To conduct a personal SWOT analysis, ask yourself questions about each of the four areas being examined. Answer honestly. Honesty is crucial, or the analysis will not generate meaningful results. With that in mind, try to see yourself from the standpoint of a colleague or a bystander, and view criticism with objectivity.<br/><br/> List all of your strengths, even the ones that have been dormant for a while. And pay particular attention to the things that you have that your peers don't — how are you different, unique and special?" 
                                            <br/>
                                            Begin by identifying your <b>strengths.</b> These are the traits
                                            or skills that set you apart from others. Questions to ask include:
                                            Begin by identifying your <b>strengths.</b> These are the traits or skills that set you apart from others. Questions to ask include:
                                        </p>
                                        <br/>

                                        <input type="hidden" name="form_name" value="swot">
                                        <input type="hidden" name="swot_name_id" id="swot_id" value="">
                                        <h4>Strengths</h4>

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>What are you good at naturally?</b></p>
                                            <ol class="list_styl_good">
                                                <li><input type="text" name="swot_good[]"></li>
                                                <li><input type="text" name="swot_good[]"></li>
                                                <li><input type="text" name="swot_good[]"></li> 
                                            </ol>
                                            <button type="button" class="add_swot_good">Add</button>
                                            <button type='button' class="remove_swot_good">Remove</button>
                                        </div>

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>What skills have you worked to develop?</b></p>
                                            <ol class="list_styl_skill">
                                                <li><input type="text" name="swot_skill[]"></li>
                                                <li><input type="text" name="swot_skill[]"></li>
                                                <li><input type="text" name="swot_skill[]"></li>   
                                            </ol>
                                            <button type="button" class="add_swot_skill">Add</button>
                                            <button type="button" class="remove_swot_skill">Remove</button>
                                        </div>
                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>What are your talents, or natural-born gifts?</b></p>
                                            <ol class="list_styl_talent">
                                                <li><input type="text" name="swot_talent[]"></li>
                                                <li><input type="text" name="swot_talent[]"></li>
                                                <li><input type="text" name="swot_talent[]"></li> 
                                            </ol>
                                            <button type="button" class="add_swot_talent">Add</button>
                                            <button type="button" class="remove_swot_talent">Remove</button>
                                        </div>
                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>How strong is your network of connections?</b></p>
                                            <ol class="check_type">
                                                <li><input type='radio' name='network_con' value="Strong"/> Strong</li>
                                                <li><input type='radio' name='network_con' value="Weak"> Weak</li>
                                                <li><input type='radio' name='network_con' value="Needs Improvement"/> Needs Improvement</li>
                                            </ol>

                                        </div>

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>What do other people see as your strengths?</b></p>
                                            <ol class="list_styl_str">
                                                <li><input type="text" name="swot_strength[]"></li>
                                                <li><input type="text" name="swot_strength[]"></li>
                                                <li><input type="text" name="swot_strength[]"></li>  
                                            </ol>
                                            <button type="button" class="add_swot_strength">Add</button>
                                            <button type="button" class="remove_swot_strength">Remove</button>
                                        </div>
                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <p class='what_aru'><b>What values and ethics set you apart from your peers?</b></p>
                                            <ol class="list_styl_ethics">
                                                <li><input type="text" name="swoth_ethics[]"></li>
                                                <li><input type="text" name="swoth_ethics[]"></li>
                                                <li><input type="text" name="swoth_ethics[]"></li>  
                                            </ol>
                                            <button type="button" class="add_swot_values">Add</button>
                                            <button type="button" class="remove_swot_values">Remove</button>
                                        </div>
                                        <div class='spacing_doiv_new'>

                                        </div>
                                        <h4>Weaknesses</h4>
                                        <div class='none_form'>
                                            <p><b>The next step is weaknesses.This part examines the areas in which you need to improve and the things that will set you back in your career. Questions to consider include:</b></p>
                                            <p><b>What are your negative work habits and traits?</b></p>
                                            <ol class="list_styl_negative">
                                                <li><input type="text" name="swot_negative[]"></li>
                                                <li><input type="text" name="swot_negative[]"></li>
                                                <li><input type="text" name="swot_negative[]"></li> 
                                            </ol>
                                            <button type="button" class="add_swot_negative">Add</button>
                                            <button type="button" class="remove_swot_negative">Remove</button>

                                        </div>
                                        <div class='none_form'>
                                            <p><b>Does any part of your education or training need improving?</b></p>

                                            <ol class="list_styl_train">
                                                <li><input type="text" name="swot_training[]"></li>
                                                <li><input type="text" name="swot_training[]"></li>
                                                <li><input type="text" name="swot_training[]"></li>   
                                            </ol>
                                            <button type="button" class="add_swot_edu">Add</button>
                                            <button type="button" class="remove_swot_edu">Remove</button>

                                        </div>
                                        <div class='none_form'>
                                            <p><b>What would other people see as your weaknesses?</b></p>

                                            <ol class="list_styl_week">
                                                <li><input type="text" name="swot_week[]"></li>
                                                <li><input type="text" name="swot_week[]"></li>
                                                <li><input type="text" name="swot_week[]"></li>  
                                            </ol>
                                            <button type="button" class="add_swot_week">Add</button>
                                            <button type="button" class="remove_swot_week">Remove</button>

                                        </div>
                                        <div class='none_form'>
                                            <p><b>Where can you improve?</b></p>

                                            <ol class="list_styl_improve">
                                                <li><input type="text" name="swot_improve[]"></li>
                                                <li><input type="text" name="swot_improve[]"></li>
                                                <li><input type="text" name="swot_improve[]"></li> 
                                            </ol>
                                            <button type="button" class="add_swot_improve">Add</button>
                                            <button type="button" class="remove_swot_improve">Remove</button>

                                        </div>
                                        <div class='none_form'>
                                            <p><b>What are you afraid to do or most likely to avoid?</b></p>

                                            <ol class="list_styl_avoid">
                                                <li><input type="text" name="swot_avoid[]"></li>
                                                <li><input type="text" name="swot_avoid[]"></li>
                                                <li><input type="text" name="swot_avoid[]"></li> 
                                            </ol>
                                            <button type="button" class="add_swot_avoid">Add</button>
                                            <button type="button" class="remove_swot_avoid">Remove</button>

                                        </div>



                                        <div class='form_none'>
                                            <br/>
                                            <br/>
                                            <h4>Opportunities</h4>
                                            <p>For the opportunities section, look at the external factors you can take advantage of to pursue a promotion, find a new job or determine a career direction. Questions to examine include:</p><br>
                                            <div class='form_none'>
                                                <strong>What is the state of the economy?</strong><br>
                                                <input type="text" class="form_type_div" name="economy_state" id="economy_state_id"><br><br>
                                                <strong>Is your industry growing?</strong>
                                                <input type="text" class="form_type_div" name="industry_grow" id="industry_grow_id"><br><br>
                                                <strong>Is there new technology in your industry?</strong>
                                                <input type="text" class="form_type_div" name="industry_tech" id="industry_tech_id"><br><br>
                                                <strong>What are the biggest changes occurring in the current business environment?</strong>
                                                <input type="text" class="form_type_div" name="bussiness_env" id="bussiness_env_id"><br><br>
                                                <strong>Have customers or co-workers given you feedback about new services you could provide, or ways to improve your manner?</strong>
                                                <input type="text" class="form_type_div" name="cutom_service" id="cutom_service_id"><br><br>
                                            </div>
                                        </div>
                                        <div class='form_none'>
                                            <br/>
                                            <br/>
                                            <h4>Threats</h4>
                                            <p>Finally, look at any threats to your career growth. This part takes into account the external factors that could hurt your chances to attain your goals. The factors to take into account include:</p><br>
                                            <div class='form_none'>
                                                <strong>Is your industry contracting or changing directions?</strong><br>
                                                <input type="text" class="form_type_div" name="industry_contract" id="industry_contract_id"><br><br>
                                                <strong>Is there strong competition for the types of jobs for which you are best suited?</strong><br>
                                                <input type="text" class="form_type_div" name="strong_compt" id="strong_compt_id"><br><br>
                                                <strong>Do your weaknesses inhibit your ability to rise in your company or change jobs?</strong><br>
                                                <input type="text" class="form_type_div" name="week_inhibit" id="week_inhibit_id"><br><br>
                                                <strong>What is the biggest external danger to your goals?</strong><br>
                                                <input type="text" class="form_type_div" name="ext_danger" id="ext_danger_id"><br><br>
                                                <strong>Are there any new professional standards you cannot meet?</strong><br>
                                                <input type="text" class="form_type_div" name="prof_standard" id="prof_standard_id"><br><br>
                                                <strong>Are there any new technology, education or certification requirements that will impede your progress?</strong><br>
                                                <input type="text" class="form_type_div" name="new_edu" id="new_edu_id"><br><br>
                                            </div>
                                            <div class='form_none'>
                                                <button type="submit" class="button_save_data">Save</button>
                                            </div><br>
                                            <p>Finding the necessary objectivity to conduct a personal SWOT analysis can be a challenge. For this reason, we advised inviting others who know you well to review your ideas for accuracy.<br/><br/>
                                                "We often cannot see how we come across in our interactions with others, so their feedback is valuable," </p>

                                            <h3>Next steps: match or convert<br/></h3>
                                            <p>Once you have filled out the matrix, there are two ways to analyze the information and build a strategy: matching or converting.<br/>

                                                Matching means connecting two of the categories to determine a course of action. For example, matching strengths to opportunities shows you where to be aggressive and take action. On the other hand, matching weaknesses to threats exposes those areas you should work on or situations to avoid, and lets you know where to be more defensive of your position.<br/>
                                                To convert is to turn negatives into positives — in other words, converting your weaknesses into strengths, or threats into opportunities. This can mean growing a skill set through education, or finding a creative way to feature a weakness as a strength. For instance, if you are very outgoing, working in an introspective and isolated environment may not suit you very well. But if you can work toward a position, such as sales, in which you interact with many people, that weakness turns into a strength and could allow you to excel.
                                            </p><br/><br/>
                                            <h3>Outcomes</h3>
                                            <p>
                                                Once your personal SWOT analysis is complete, it is crucial to follow through on the insights you uncovered.<br/>
                                                "SWOT analysis can fail to be effective if it is simply treated as a 'laundry list,' without any tie-in to how the elements identified in the analysis can be put into play for the individual carrying out the assessment,For example, how can the identified strengths move the needle in the endeavor to achieve a key goal? Or how can one navigate a potential threat once it is identified, so as to ensure no ground is lost?"<br/>
                                                "The best outcome is to take action and succeed in the opportunities you have identified,This can benefit you on a personal and professional level, and set you apart from your peers and colleagues."

                                            </p>
                                        </div>

                                    </div>

                                </form>
                                <?php } ?>
                            </div>

                            <div id="interview_note_add_g" class="tab-pane fade">
                                <?php if(count($view_swot) > 0) {
                                    foreach ($view_swot as $swot) {
                                ?>
                                <div class="repeat_border_div">
                                    <div>
                                        <h1 class="swot_div_head">SWOT
                                            <span class="swot_data_val">
                                                <!-- <button onclick='update_swot("<?php echo $swot['swot']['id'] ?>")'>Update</button> -->
                                                <button onclick='delete_swot("<?php echo $swot['swot']['id'] ?>")'>Delete</button>
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

                    <div id="menu16" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#interview_note_add_a" aria-expanded="true">Add Mission Statements</a></li>
                            <li><a data-toggle="tab" href="#interview_note_view_d" aria-expanded="true">Mission Statements</a></li>                           
                        </ul>
                        <div class="tab-content tabs_use">
                            <div id="interview_note_add_a" class="tab-pane fade active in">
                                <form method="post">
                                    <input type="hidden" name="form_name" value="mission_statement">
                                    <input type="hidden" name="mission_id_name" id="mission_id_data" value="">
                                    <div class="group_div">
                                        <h4 class="heading_h_use">What is an Accomplishment Statement?
                                        </h4>

                                        <p>The accomplishment statements are the statements you include under your experiences. They can be included in any of your resume sections, including the Education section.
                                            <br/>
                                            The accomplishments/action statements you include on your resume is by far the most critical part of your resume. This is your chance to highlight the strongest accomplishments that are most relevant to the position. Done well, you WILL stand out from the rest of the applicants.

                                        </p>

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <br/>
                                            <h5>Accomplishment Statement:</h5>
                                            <textarea rows='5' id='disabled_use' name="accomp_statement"></textarea>
                                        </div>      
                                    </div>
                                    <div class="group_div">
                                        <h4 class="heading_h_use"> Occupational Goal Statements 
                                        </h4>

                                        <p>A portfolio is also a great place to keep your Occupational goal statements. These are statements that describe your long-term or short-term goals. They are similar to job objectives but provide more detail and are not aimed at a specific employer. Occupational goal statements can help keep you on track
                                        </p>


                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <br/>
                                            <h5>Occupational Goal Statement:</h5>

                                            <textarea rows='5' id='disabled_use_a' name="goal_statement"></textarea>
                                        </div>      
                                    </div>
                                    <div class="group_div">
                                        <h4 class="heading_h_use">Personal Mission Statement
                                        </h4>

                                        <p>You may choose to include a personal mission statement in your portfolio. This statement should reflect who you are and let the reader know your goals in work and life. Your personal mission statement should help you stay focused on the things most important to you.</p>                                   

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <br/>
                                            <h5>Personal Mission Statement:</h5>

                                            <textarea rows='5' id='disabled_use_b' name = "mission_statement"></textarea>
                                        </div>
                                        <div class="none_form"> 
                                            <button type="submit" class="button_save_data">Save</button>
                                        </div>
                                    </div>
                                </form>    
                            </div>
                            <div id="interview_note_view_d" class="tab-pane fade">
                                <div class="row_use_what_career dashbaord_use">
                                    <h1>View Mission Statements</h1>
                                    <div class="clearfix"></div>
                                    <?php if(count($view_mission) > 0) {
                                       $i = 1; 
                                    foreach ($view_mission as $mission) { ?>
                                    <div class="top_mission_div">
                                        <h5>Statement <?php echo $i++; ?>
                                            <span>
                                                <button class="essen_skill_div_update" onclick='update_mission("<?php echo $mission['mission_statement']['id'] ?>")'>Update</button>
                                                <button class="essen_skill_div_delete" onclick='delete_mission("<?php echo $mission['mission_statement']['id'] ?>")'>Delete</button>
                                            </span>
                                        </h5>
                                        <div class="row main_con">
                                            <div class="col-lg-3 col-md-3">
                                                <h3 class="head_none">Accomplishment Statement:</h3>
                                            </div>
                                            <div class="col-lg-9 col-md-9">
                                                <p><?php echo $mission['mission_statement']['accomp_statement'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row main_con">
                                            <div class="col-lg-3 col-md-3">
                                                <h3 class="head_none">Occupational Goal Statement:</h3>
                                            </div>
                                            <div class="col-lg-9 col-md-9">
                                                <p><?php echo $mission['mission_statement']['goal_statement'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row main_con">
                                            <div class="col-lg-3 col-md-3">
                                                <h3 class="head_none">Personal Mission Statement:</h3>
                                            </div>
                                            <div class="col-lg-9 col-md-9">
                                                <p><?php echo $mission['mission_statement']['mission'] ?></p>
                                            </div>

                                        </div>
                                    </div>
                                    <?php } } else { ?>
                                    <div class="top_mission_div_data">
                                        <center><b>No Records Found</b></center>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="computer_skill" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#add_comp" aria-expanded="true">Add Computer Skill</a></li>
                            <li><a data-toggle="tab" href="#view_comp" aria-expanded="true">View Computer Skill</a></li>                           
                        </ul>

                        <div class="tab-content tabs_use">
                            <div id="add_comp" class="tab-pane fade active in">
                                <form method="post">
                                    <input type="hidden" name="form_name" value="computer_skill">
                                    <input type="hidden" name="comp_skill_id" id="comp_skill_id_val" value="">                                   
                                    <div class="group_div">
                                        <h5 class="heading_h_use">Computer Skill
                                        </h5>                                      

                                        <div class="none_form"> 
                                            <div class='clearfix'></div><br/>
                                            <strong style="font-size:18px; font-weight: 800;">List of Computer Skill</strong>
                                            <select name="skill_list" id="skill_list_id">
                                                <option value="">--Select List--</option>
                                                <option value="Adobe Illustrator">Adobe Illustrator</option>
                                                <option value="Adobe InDesign">Adobe InDesign</option>
                                                <option value="Adobe Photoshop">Adobe Photoshop</option>
                                                <option value="Analytics">Analytics</option>
                                                <option value="Android">Android</option>
                                                <option value="APIs">APIs</option>
                                                <option value="Art Design">Art Design</option>
                                                <option value="AutoCAD">AutoCAD</option>
                                                <option value="Backup Management">Backup Management</option>
                                                <option value="C">C</option>
                                                <option value="C++">C++</option>
                                                <option value="Certifications">Certifications</option>
                                                <option value="Client Server">Client Server</option>
                                                <option value="Client Support">Client Support</option>
                                                <option value="Configuration">Configuration</option>
                                                <option value="Content Management Systems (CMS)">Content Management Systems (CMS)</option>
                                                <option value="Corel Draw">Corel Draw</option>
                                                <option value="Corel Word Perfect">Corel Word Perfect</option>
                                                <option value="CSS">CSS</option>
                                                <option value="Desktop Publishing">Desktop Publishing</option>
                                                <option value="Design">Design</option>
                                                <option value="Diagnostics">Diagnostics</option>
                                                <option value="Documentation">Documentation</option>
                                                <option value="End User Support">End User Support</option>
                                                <option value="Email">Email</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="FileMaker Pro">FileMaker Pro</option>
                                                <option value="Fortran">Fortran</option>
                                                <option value="Graphic Design">Graphic Design</option>
                                                <option value="Hardware">Hardware</option>
                                                <option value="Help Desk">Help Desk</option>
                                                <option value="HTML">HTML</option>
                                                <option value="Implementation">Implementation</option>
                                                <option value="Installation">Installation</option>
                                                <option value="Internet">Internet</option>
                                                <option value="iOS">iOS</option>
                                                <option value="iPhone">iPhone</option>
                                                <option value="Linux">Linux</option>
                                                <option value="Java">Java</option>
                                                <option value="Javascript">Javascript</option>
                                                <option value="Mac">Mac</option>
                                                <option value="Matlab">Matlab</option>
                                                <option value="Maya">Maya</option>
                                                <option value="Microsoft Excel">Microsoft Excel</option>
                                                <option value="Microsoft Outlook">Microsoft Outlook</option>
                                                <option value="Microsoft Publisher">Microsoft Publisher</option>
                                                <option value="Microsoft Word">Microsoft Word</option>
                                                <option value="Microsoft Visual">Microsoft Visual</option>
                                                <option value="Mobile">Mobile</option>
                                                <option value="MySQL">MySQL</option>
                                                <option value="Networks">Networks</option>
                                                <option value="Open Source Software">Open Source Software</option>
                                                <option value="Oracle">Oracle</option>
                                                <option value="Perl">Perl</option>
                                                <option value="PHP">PHP</option>
                                                <option value="Presentations">Presentations</option>
                                                <option value="Processing">Processing</option>
                                                <option value="Programming">Programming</option>
                                                <option value="PT Modeler">PT Modeler</option>
                                                <option value="Python">Python</option>
                                                <option value="QuickBooks">QuickBooks</option>
                                                <option value="Ruby">Ruby</option>
                                                <option value="Shade">Shade</option>
                                                <option value="Software">Software</option>
                                                <option value="Spreadsheet">Spreadsheet</option>
                                                <option value="SQL">SQL</option>
                                                <option value="Support">Support</option>
                                                <option value="Systems Administration">Systems Administration</option>
                                                <option value="Tech Support">Tech Support</option>
                                                <option value="Troubleshooting">Troubleshooting</option>
                                                <option value="Unix">Unix</option>
                                                <option value="Web Page Design">Web Page Design</option>
                                                <option value="Word Processing">Word Processing</option>
                                                <option value="XML">XML</option>
                                                <option value="XHTML">XHTML</option>												
                                            </select>
                                        </div>

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <br/><br/>
                                            <strong style="font-size:18px; font-weight: 800;">Skill Level</strong>
                                            <select name="skill_level" id="skill_level_id">
                                                <option value="">--Select Level--</option>
                                                <option value="Basic (1 to 3 years)">Basic (1 to 3 years)</option>
                                                <option value="Intermediate (3 to 6 years)">Intermediate (3 to 6 years)</option>
                                                <option value="Advanced (6 to 10 years)">Advanced (6 to 10 years)</option>
                                                <option value="Professional (10 PLUS years)">Professional (10 PLUS years)</option>
                                            </select>
                                        </div>                                       
                                        <div class="none_form"> 
                                            <button type="submit" class="button_save_data">Save</button>
                                        </div>
                                    </div>
                                </form>    
                            </div>
                            <div id="view_comp" class="tab-pane fade">
                                <div class="row_use_what_career dashbaord_use">
                                    <h1>View Computer Skill</h1>
                                    <div class="table">
                                        <table class="key_skill_use table-responsive">
                                            <tbody>
                                                <tr>
                                                    <th>List of Computer Skill</th>
                                                    <th colspan="2">Level of Computer Skill</th>    
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                </tr>
                                            <?php if(count($view_comp_skill) > 0) {
                                              foreach ($view_comp_skill as $comp_skil_view) {  
                                            ?>
                                                <tr>
                                                    <td><?php echo $comp_skil_view['computer_skill']['skill'] ?></td>
                                                    <td><?php echo $comp_skil_view['computer_skill']['skill_level'] ?></td>
                                                    <td style="width: 18%;">    
                                                        <div class="progress progress-striped"> 
                                                        <?php if($comp_skil_view['computer_skill']['skill_level'] == 'Basic (1 to 3 years)') { ?>
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                <span class="sr-only">25&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                            </div>
                                                        <?php } if($comp_skil_view['computer_skill']['skill_level'] == 'Intermediate (3 to 6 years)') { ?>
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                                <span class="sr-only">50&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                            </div>
                                                        <?php } if($comp_skil_view['computer_skill']['skill_level'] == 'Advanced (6 to 10 years)') { ?>
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                                <span class="sr-only">75&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                            </div>
                                                        <?php } if($comp_skil_view['computer_skill']['skill_level'] == 'Professional (10 PLUS years)') { ?>
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                <span class="sr-only">100&nbsp;&nbsp;%</span>                                                                                                                                                                                                                                            
                                                            </div>
                                                        <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td><button class="essen_skill_div_update" onclick='update_comp_skill("<?php echo $comp_skil_view['computer_skill']['id'] ?>")'>Update</button></td>
                                                    <td><button class="essen_skill_div_delete" onclick='delete_comp_skill("<?php echo $comp_skil_view['computer_skill']['id'] ?>")'>Delete</button></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr>
                                                    <th colspan="9"><center><b>No Record Found</b></center></th>
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

                    <div id="evidence_skill" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#add_evidence_skill" aria-expanded="true">Add Evidence Skill</a></li>
                            <li><a data-toggle="tab" href="#view_evidence_skill" aria-expanded="true">View Evidence Skill</a></li>                           
                        </ul>

                        <div class="tab-content tabs_use">
                            <div id="add_evidence_skill" class="tab-pane fade active in">
                                <div class='form-group widt_form_under_tab row_use_what_career_dashbored'>
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="form_name" value="evidence_skill">
                                        <input type="hidden" name="evidence_skill_id" id="evidence_skill_id_val" value="">
                                        <h1>Evidence of Skill</h1>
                                        <div class='form-group form_edit'>
                                            <p>
                                                <select name="evi_type" id="evi_type_id">
                                                    <option value="">--Select Evidence Type--</option>
                                                    <option value="Diplomas">Diplomas</option>
                                                    <option value="Certificates">Certificates</option>
                                                    <option value="License">License</option>
                                                    <option value="Awards">Awards</option>
                                                    <option value="Scholarships">Scholarships</option>
                                                    <option value="Job Evaluations">Job Evaluations</option>
                                                    <option value="Promotions">Promotions</option>
                                                    <option value="Letter of Appreciation">Letter of Appreciation</option>
                                                    <option value="Performance Letters">Performance Letters</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </p>
                                            <p>
                                                <strong>Name of Document</strong><br/>
                                                <input type="text" name="doc_name" id="doc_evi_id"/><br/>                                                
                                            </p>    
                                            <div id="resume_no_count">
                                                <strong>Upload Document</strong><br/>
                                                <input type='file' name="upload_doc"/><br/>
                                            </div>

                                            <p>
                                                <button type="submit">Save</button>
                                            </p>
                                        </div>
                                    </form>
                                </div>   
                            </div>
                            <div id="view_evidence_skill" class="tab-pane fade">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup">         
                                    <div class='first_div'>
                                        <h2 class='headeing_uwse_data'>Diplomas</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Document</center></th>                                       
                                                <th><center>Created On</center></th>               
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_diploma_evid_skill) > 0) { 
                                               foreach ($view_diploma_evid_skill as $diploma_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $diploma_data['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php if($diploma_data['evidence_skill']['date']) { echo date('d-M-Y', strtotime($diploma_data['evidence_skill']['date'])); } else { echo ""; } ?></center></td>                                           
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $diploma_data['evidence_skill']['upload_doc'] ?>">View</a></center></td>
                                                <td><center><button onclick='delete_diploma_evidence("<?php echo $diploma_data['evidence_skill']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>

                                    <div class='second_div'>
                                        <h2 class='headeing_uwse_data'>Certificates</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Document</center></th>                                       
                                                <th><center>Created On</center></th>               
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_certificate_evid_skill) > 0) { 
                                               foreach ($view_certificate_evid_skill as $certificate_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $certificate_data['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php if($certificate_data['evidence_skill']['date']) { echo date('d-M-Y', strtotime($certificate_data['evidence_skill']['date'])); } else { echo ""; } ?></center></td>                                           
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $certificate_data['evidence_skill']['upload_doc'] ?>">View</a></center></td>
                                                <td><center><button onclick='delete_diploma_evidence("<?php echo $certificate_data['evidence_skill']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>

                                    <div class='third'>
                                        <h2 class='headeing_uwse_data'>License</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Document</center></th>                                       
                                                <th><center>Created On</center></th>               
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_license_evid_skill) > 0) { 
                                               foreach ($view_license_evid_skill as $license_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $license_data['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php if($license_data['evidence_skill']['date']) { echo date('d-M-Y', strtotime($license_data['evidence_skill']['date'])); } else { echo ""; } ?></center></td>                                           
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $license_data['evidence_skill']['upload_doc'] ?>">View</a></center></td>
                                                <td><center><button onclick='delete_diploma_evidence("<?php echo $license_data['evidence_skill']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>

                                    <div class='third'>
                                        <h2 class='headeing_uwse_data'>Awards</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Document</center></th>                                       
                                                <th><center>Created On</center></th>               
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_award_evid_skill) > 0) { 
                                               foreach ($view_award_evid_skill as $award_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $award_data['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php if($award_data['evidence_skill']['date']) { echo date('d-M-Y', strtotime($award_data['evidence_skill']['date'])); } else { echo ""; } ?></center></td>                                           
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $award_data['evidence_skill']['upload_doc'] ?>">View</a></center></td>
                                                <td><center><button onclick='delete_diploma_evidence("<?php echo $award_data['evidence_skill']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>

                                    <div class='third'>
                                        <h2 class='headeing_uwse_data'>Scholarships</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Document</center></th>                                       
                                                <th><center>Created On</center></th>               
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_scholar_evid_skill) > 0) { 
                                               foreach ($view_scholar_evid_skill as $scholar_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $scholar_data['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php if($scholar_data['evidence_skill']['date']) { echo date('d-M-Y', strtotime($scholar_data['evidence_skill']['date'])); } else { echo ""; } ?></center></td>                                           
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $scholar_data['evidence_skill']['upload_doc'] ?>">View</a></center></td>
                                                <td><center><button onclick='delete_diploma_evidence("<?php echo $scholar_data['evidence_skill']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>

                                    <div class='third'>
                                        <h2 class='headeing_uwse_data'>Job Evaluations</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Document</center></th>                                       
                                                <th><center>Created On</center></th>               
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_evaluate_evid_skill) > 0) { 
                                               foreach ($view_evaluate_evid_skill as $evaluate_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $evaluate_data['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php if($evaluate_data['evidence_skill']['date']) { echo date('d-M-Y', strtotime($evaluate_data['evidence_skill']['date'])); } else { echo ""; } ?></center></td>                                           
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $evaluate_data['evidence_skill']['upload_doc'] ?>">View</a></center></td>
                                                <td><center><button onclick='delete_diploma_evidence("<?php echo $evaluate_data['evidence_skill']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>

                                    <div class='third'>
                                        <h2 class='headeing_uwse_data'>Promotions</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Document</center></th>                                       
                                                <th><center>Created On</center></th>               
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_promotion_evid_skill) > 0) { 
                                               foreach ($view_promotion_evid_skill as $promotion_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $promotion_data['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php if($promotion_data['evidence_skill']['date']) { echo date('d-M-Y', strtotime($promotion_data['evidence_skill']['date'])); } else { echo ""; } ?></center></td>                                           
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $promotion_data['evidence_skill']['upload_doc'] ?>">View</a></center></td>
                                                <td><center><button onclick='delete_diploma_evidence("<?php echo $promotion_data['evidence_skill']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>

                                    <div class='third'>
                                        <h2 class='headeing_uwse_data'>Letter of Appreciation</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Document</center></th>                                       
                                                <th><center>Created On</center></th>               
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_appriciate_evid_skill) > 0) { 
                                               foreach ($view_appriciate_evid_skill as $appriciate_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $appriciate_data['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php if($appriciate_data['evidence_skill']['date']) { echo date('d-M-Y', strtotime($appriciate_data['evidence_skill']['date'])); } else { echo ""; } ?></center></td>                                           
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $appriciate_data['evidence_skill']['upload_doc'] ?>">View</a></center></td>
                                                <td><center><button onclick='delete_diploma_evidence("<?php echo $appriciate_data['evidence_skill']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>

                                    <div class='third'>
                                        <h2 class='headeing_uwse_data'>Performance Letters</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Document</center></th>                                       
                                                <th><center>Created On</center></th>               
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_perform_evid_skill) > 0) { 
                                               foreach ($view_perform_evid_skill as $perform_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $perform_data['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php if($perform_data['evidence_skill']['date']) { echo date('d-M-Y', strtotime($perform_data['evidence_skill']['date'])); } else { echo ""; } ?></center></td>                                           
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $perform_data['evidence_skill']['upload_doc'] ?>">View</a></center></td>
                                                <td><center><button onclick='delete_diploma_evidence("<?php echo $perform_data['evidence_skill']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
                                                <tr class="chron_div_bottom">
                                                    <td colspan="10"><b><center>No Record Found</center></b></td>
                                                </tr>
                                            <?php } ?>
                                            </table>
                                        </div>
                                    </div>

                                    <div class='third'>
                                        <h2 class='headeing_uwse_data'>Others</h2>
                                        <div class="table">
                                            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use table-responsive">
                                                <tbody>
                                                    <tr class="chron_div">
                                                        <th><center>Name Of Document</center></th>                                       
                                                <th><center>Created On</center></th>               
                                                <th><center>View</center></th>
                                                <th><center>Delete</center></th>
                                                </tr>
                                            <?php if(count($view_other_evid_skill) > 0) { 
                                               foreach ($view_other_evid_skill as $other_data) { 
                                            ?>
                                                <tr class="chron_div_bottom">
                                                    <td><center><?php echo $other_data['evidence_skill']['document_name'] ?></center></td>
                                                <td><center><?php if($other_data['evidence_skill']['date']) { echo date('d-M-Y', strtotime($other_data['evidence_skill']['date'])); } else { echo ""; } ?></center></td>                                           
                                                <td><center><a class="button_use" href="dashboards/download?filename=<?php echo $other_data['evidence_skill']['upload_doc'] ?>">View</a></center></td>
                                                <td><center><button onclick='delete_diploma_evidence("<?php echo $other_data['evidence_skill']['id'] ?>")'>Delete</button></center></td>
                                                </tr>
                                            <?php } } else { ?>
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


                    <div id="menu4" class="tab-pane fade">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active"><a data-toggle="tab" href="#menu_add_skill" aria-expanded="true">Add Key Skills</a></li>
                            <li><a data-toggle="tab" href="#menu_view_skill" aria-expanded="true">View Key Skills</a></li>                                                     
                        </ul>
                        <div class="tab-content tabs_use">
                            <div id="menu_add_skill" class="tab-pane fade active in">
                                <form method="post">
                                    <input type="hidden" name="form_name" value="key_skill">
                                    <input type="hidden" name="key_skill_id" id="key_skill_id_val" value="">                                   
                                    <div class="group_div">
                                        <h5 class="heading_h_use">Soft Skills
                                        </h5>                                      

                                        <div class="none_form"> 
                                            <div class='clearfix'></div><br/>
                                            <strong style="font-size:18px; font-weight: 800;">List of Soft Skills</strong>
                                            <select name="soft_skill_list" id="key_skill_list_id" onchange="changeSoftSkill(this.value)">
                                                <option value="">--Select List--</option>
                                                <option value="Adaptability and Flexibility">Adaptability and Flexibility</option>
                                                <option value="Attention To Detail">Attention To Detail</option>
                                                <option value="Collaboration and Teamwork">Collaboration & Teamwork</option>
                                                <option value="Communication">Communication</option>
                                                <option value="Creativity and Innovation">Creativity & Innovation</option>
                                                <option value="Independence">Independence</option>
                                                <option value="Interpersonal Skills">Interpersonal Skills</option>
                                                <option value="Leadership and Management">Leadership & Management</option>
                                                <option value="Problem Solving and Analytical Thinking">Problem Solving & Analytical Thinking</option>
                                                <option value="Professionalism">Professionalism</option>
                                                <option value="Time Management">Time Management</option>
                                                <option value="Work Ethic">Work Ethic</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="softskills" style="display:none" id="Adaptability_and_Flexibility">
                                                <input type="checkbox" name="key_skills[]" value="Analysis" id="analysis_id"> Analysis
                                                <input type="checkbox" name="key_skills[]" id="calmness_id" value="Calmness"> Calmness
                                                <input type="checkbox" name="key_skills[]" id="descision_making_id" value="Decision-making"> Decision-making
                                                <input type="checkbox" name="key_skills[]" id="open_mind_id" value="Open-Mindedness"> Open-Mindedness
                                                <input type="checkbox" id="Optimism_id" name="key_skills[]" value="Optimism"> Optimism
                                                <input type="checkbox" name="key_skills[]" id="Organization_id" value="Organization"> Organization
                                                <input type="checkbox" name="key_skills[]" id="Quick_Thinking_id" value="Quick Thinking"> Quick Thinking
                                                <input type="checkbox" name="key_skills[]" id="Self_Confidence_id" value="Self-Confidence"> Self-Confidence
                                                <input type="checkbox" name="key_skills[]" id="Self_Management_id" value="Self-Management"> Self-Management
                                                <input type="checkbox" name="key_skills[]" id="Self_Motivation_id" value="Self-Motivation"> Self-Motivation
                                                <input type="checkbox" name="key_skills[]" id="Stress_Management_id" value="Stress Management"> Stress Management
                                            </div>

                                            <div class="softskills" style="display:none" id="Attention_To_Detail">
                                                <input type="checkbox" name="key_skills[]" id="Acuity_id" value="Acuity"> Acuity
                                                <input type="checkbox" name="key_skills[]" id="Active_Listening_id" value="Active Listening">Active Listening 
                                                <input type="checkbox" name="key_skills[]" id="Critical_Observation_id" value="Critical Observation"> Critical Observation
                                                <input type="checkbox" name="key_skills[]" id="Introspection_id" value="Introspection"> Introspection
                                                <input type="checkbox" name="key_skills[]" id="Listening_id" value="Listening"> Listening
                                                <input type="checkbox" name="key_skills[]" id="Memory_id" value="Memory"> Memory
                                                <input type="checkbox" name="key_skills[]" id="Organization_id" value="Organization"> Organization
                                                <input type="checkbox" name="key_skills[]" id="Perception_id" value="Perception"> Perception
                                                <input type="checkbox" name="key_skills[]" id="Questioning_id" value="Questioning"> Questioning
                                                <input type="checkbox" name="key_skills[]" id="" value="Recall">Recall
                                                <input type="checkbox" name="key_skills[]" id="Scheduling_id" value="Scheduling"> Scheduling
                                            </div>
                                            <div class="softskills" style="display:none" id="Collaboration_and_Teamwork">
                                                <input type="checkbox" name="key_skills[]" value="Active Listening"> Active Listening
                                                <input type="checkbox" name="key_skills[]" value="Coordination"> Coordination
                                                <input type="checkbox" name="key_skills[]" value="Idea Exchange"> Idea Exchange
                                                <input type="checkbox" name="key_skills[]" value="Open to Feedback"> Open to Feedback
                                                <input type="checkbox" name="key_skills[]" value="Conflict Management"> Conflict Management
                                                <input type="checkbox" name="key_skills[]" value="Delegation"> Delegation
                                                <input type="checkbox" name="key_skills[]" value="Mediation"> Mediation
                                                <input type="checkbox" name="key_skills[]" value="Persuasion"> Persuasion
                                                <input type="checkbox" name="key_skills[]" value="Cooperation"> Cooperation
                                                <input type="checkbox" name="key_skills[]" value="Facilitation"> Facilitation
                                                <input type="checkbox" name="key_skills[]" value="Negotiation"> Negotiation
                                            </div>
                                            <div class="softskills" style="display:none" id="Communication">
                                                <input type="checkbox" name="key_skills[]" value="Clarity"> Clarity
                                                <input type="checkbox" name="key_skills[]" value="Empathy"> Empathy
                                                <input type="checkbox" name="key_skills[]" value="Non-Verbal Communication"> Non-Verbal Communication
                                                <input type="checkbox" name="key_skills[]" value="Summarizing"> Summarizing
                                                <input type="checkbox" name="key_skills[]" value="Confidence"> Confidence
                                                <input type="checkbox" name="key_skills[]" value="Friendliness"> Friendliness
                                                <input type="checkbox" name="key_skills[]" value="Providing Feedback"> Providing Feedback
                                                <input type="checkbox" name="key_skills[]" value="Verbal Communication"> Verbal Communication
                                                <input type="checkbox" name="key_skills[]" value="Constructive Feedback"> Constructive Feedback
                                                <input type="checkbox" name="key_skills[]" value="Listening"> Listening
                                                <input type="checkbox" name="key_skills[]" value="Respect"> Respect
                                                <input type="checkbox" name="key_skills[]" value="Written Communication"> Written Communication
                                            </div>
                                            <div class="softskills" style="display:none" id="Creativity_and_Innovation">
                                                <input type="checkbox" name="key_skills[]" value="Brainstorming"> Brainstorming
                                                <input type="checkbox" name="key_skills[]" value="Divergent Thinking"> Divergent Thinking
                                                <input type="checkbox" name="key_skills[]" value="Insight"> Insight
                                                <input type="checkbox" name="key_skills[]" value="Questioning"> Questioning
                                                <input type="checkbox" name="key_skills[]" value="Creative Writing"> Creative Writing
                                                <input type="checkbox" name="key_skills[]" value="Experimentation"> Experimentation
                                                <input type="checkbox" name="key_skills[]" value="Inspiration"> Inspiration
                                                <input type="checkbox" name="key_skills[]" value="Reframing"> Reframing
                                                <input type="checkbox" name="key_skills[]" value="Design"> Design
                                                <input type="checkbox" name="key_skills[]" value="Imagination"> Imagination
                                                <input type="checkbox" name="key_skills[]" value="Mind Mapping"> Mind Mapping
                                                <input type="checkbox" name="key_skills[]" value="Storytelling"> Storytelling
                                            </div>
                                            <div class="softskills" style="display:none" id="Independence">
                                                <input type="checkbox" name="key_skills[]" value="Confidence"> Confidence
                                                <input type="checkbox" name="key_skills[]" value="Initiative"> Initiative
                                                <input type="checkbox" name="key_skills[]" value="Self-Discipline"> Self-Discipline
                                                <input type="checkbox" name="key_skills[]" value="Trustworthiness"> Trustworthiness
                                                <input type="checkbox" name="key_skills[]" value="Dependability"> Dependability
                                                <input type="checkbox" name="key_skills[]" value="Self-Motivation"> Self-Motivation
                                                <input type="checkbox" name="key_skills[]" value="Self-Management"> Self-Management
                                                <input type="checkbox" name="key_skills[]" value="Time Management"> Time Management
                                            </div>
                                            <div class="softskills" style="display:none" id="Interpersonal_Skills">
                                                <input type="checkbox" name="key_skills[]" value="Diplomacy"> Diplomacy
                                                <input type="checkbox" name="key_skills[]" value="Humor"> Humor
                                                <input type="checkbox" name="key_skills[]" value="Networking"> Networking
                                                <input type="checkbox" name="key_skills[]" value="Public Speaking"> Public Speaking
                                                <input type="checkbox" name="key_skills[]" value="Emotional Intelligence"> Emotional Intelligence
                                                <input type="checkbox" name="key_skills[]" value="Interpersonal Communication"> Interpersonal Communication
                                                <input type="checkbox" name="key_skills[]" value="Patience"> Patience
                                                <input type="checkbox" name="key_skills[]" value="Sensitivity"> Sensitivity
                                                <input type="checkbox" name="key_skills[]" value="Empathy"> Empathy
                                                <input type="checkbox" name="key_skills[]" value="Mentoring"> Mentoring
                                                <input type="checkbox" name="key_skills[]" value="Positive Reinforcement"> Positive Reinforcement
                                                <input type="checkbox" name="key_skills[]" value="Tolerance"> Tolerance
                                            </div>
                                            <div class="softskills" style="display:none" id="Leadership_and_Management">
                                                <input type="checkbox" name="key_skills[]" value="Agility"> Agility
                                                <input type="checkbox" name="key_skills[]" value="Delegation"> Delegation
                                                <input type="checkbox" name="key_skills[]" value="Giving Feedback"> Giving Feedback
                                                <input type="checkbox" name="key_skills[]" value="Selflessness"> Selflessness
                                                <input type="checkbox" name="key_skills[]" value="Authenticity"> Authenticity
                                                <input type="checkbox" name="key_skills[]" value="Empathy"> Empathy
                                                <input type="checkbox" name="key_skills[]" value="Humility"> Humility
                                                <input type="checkbox" name="key_skills[]" value="Trust"> Trust
                                                <input type="checkbox" name="key_skills[]" value="Cultural Intelligence"> Cultural Intelligence
                                                <input type="checkbox" name="key_skills[]" value="Generosity"> Generosity
                                                <input type="checkbox" name="key_skills[]" value="Listening"> Listening
                                                <input type="checkbox" name="key_skills[]" value="Versatility"> Versatility
                                            </div>
                                            <div class="softskills" style="display:none" id="Problem_Solving_and_Analytical_Thinking">
                                                <input type="checkbox" name="key_skills[]" value="Analysis"> Analysis
                                                <input type="checkbox" name="key_skills[]" value="Initiative"> Initiative
                                                <input type="checkbox" name="key_skills[]" value="Observation"> Observation
                                                <input type="checkbox" name="key_skills[]" value="Research"> Research
                                                <input type="checkbox" name="key_skills[]" value="Brainstorming"> Brainstorming
                                                <input type="checkbox" name="key_skills[]" value="Lateral Thinking"> Lateral Thinking
                                                <input type="checkbox" name="key_skills[]" value="Optimization"> Optimization
                                                <input type="checkbox" name="key_skills[]" value="Streamlining Processes"> Streamlining Processes
                                                <input type="checkbox" name="key_skills[]" value="Decision Making"> Decision Making
                                                <input type="checkbox" name="key_skills[]" value="Logical Reasoning"> Logical Reasoning
                                                <input type="checkbox" name="key_skills[]" value="Persistence"> Persistence
                                                <input type="checkbox" name="key_skills[]" value="Troubleshooting"> Troubleshooting
                                            </div>
                                            <div class="softskills" style="display:none" id="Professionalism">
                                                <input type="checkbox" name="key_skills[]" value="Accountability"> Accountability
                                                <input type="checkbox" name="key_skills[]" value="Dedication"> Dedication
                                                <input type="checkbox" name="key_skills[]" value="Patience"> Patience
                                                <input type="checkbox" name="key_skills[]" value="Responsibility"> Responsibility
                                                <input type="checkbox" name="key_skills[]" value="Business Etiquette"> Business Etiquette
                                                <input type="checkbox" name="key_skills[]" value="Focus"> Focus
                                                <input type="checkbox" name="key_skills[]" value="Positive Attitude"> Positive Attitude
                                                <input type="checkbox" name="key_skills[]" value="Strong Ethics"> Strong Ethics
                                                <input type="checkbox" name="key_skills[]" value="Conflict Resolution"> Conflict Resolution
                                                <input type="checkbox" name="key_skills[]" value="Integrity"> Integrity
                                                <input type="checkbox" name="key_skills[]" value="Reliability"> Reliability
                                                <input type="checkbox" name="key_skills[]" value="Tact"> Tact
                                            </div>
                                            <div class="softskills" style="display:none" id="Time_Management">
                                                <input type="checkbox" name="key_skills[]" value="Coping"> Coping
                                                <input type="checkbox" name="key_skills[]" value="Focus"> Focus
                                                <input type="checkbox" name="key_skills[]" value="Organization"> Organization
                                                <input type="checkbox" name="key_skills[]" value="Self-starter"> Self-starter
                                                <input type="checkbox" name="key_skills[]" value="Decision Making"> Decision Making
                                                <input type="checkbox" name="key_skills[]" value="Goal Setting"> Goal Setting
                                                <input type="checkbox" name="key_skills[]" value="Planning"> Planning
                                                <input type="checkbox" name="key_skills[]" value="Stress Management"> Stress Management
                                                <input type="checkbox" name="key_skills[]" value="Delegating"> Delegating
                                                <input type="checkbox" name="key_skills[]" value="Multi-tasking"> Multi-tasking
                                                <input type="checkbox" name="key_skills[]" value="Prioritizing"> Prioritizing
                                            </div>
                                            <div class="softskills" style="display:none" id="Work_Ethenic">
                                                <input type="checkbox" name="key_skills[]" value="Commitment"> Commitment
                                                <input type="checkbox" name="key_skills[]" value="Initiative"> Initiative
                                                <input type="checkbox" name="key_skills[]" value="Professionalism"> Professionalism
                                                <input type="checkbox" name="key_skills[]" value="Team-minded"> Team-minded
                                                <input type="checkbox" name="key_skills[]" value="Dependability"> Dependability
                                                <input type="checkbox" name="key_skills[]" value="Integrity"> Integrity
                                                <input type="checkbox" name="key_skills[]" value="Responsibility"> Responsibility
                                                <input type="checkbox" name="key_skills[]" value="Time Management"> Time Management
                                                <input type="checkbox" name="key_skills[]" value="Discipline"> Discipline
                                                <input type="checkbox" name="key_skills[]" value="Organization"> Organization
                                                <input type="checkbox" name="key_skills[]" value="Self-motivation"> Self-motivation
                                            </div>
                                        </div>

                                        <div class='clearfix'></div>
                                        <div class="par_type">

                                        </div>
                                        <div class='clearfix'></div>

                                        <div class="none_form"> 
                                            <div class='clearfix'></div>
                                            <br/><br/>
                                            <strong style="font-size:18px; font-weight: 800;">Hard Skills</strong>
                                            <select name="Hard_skills" id="Hard_Skills_id">
                                                <option value="">--Select Level--</option>
                                                <option value="Accounting & Finance">Accounting & Finance</option>
                                                <option value="Business & Data Analysis">Business & Data Analysis</option>
                                                <option value="Cloud Computing">Cloud Computing</option>
                                                <option value="Computer Technology">Computer Technology</option>
                                                <option value="Design">Design</option>
                                                <option value="Hard Communication Skills">Hard Communication Skills</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Mobile & Web Development">Mobile & Web Development</option>
                                                <option value="Network Structure & Security">Network Structure & Security</option>
                                                <option value="Nursing">Nursing</option>
                                                <option value="Project Management">Project Management</option>
                                                <option value="Social Media">Social Media</option>
                                                <option value="Teaching">Teaching</option>
                                            </select>
                                        </div>   
                                        <div class="par_hard_type" style="display: none;">
                                            <div class='form-group'>
                                                Problem
                                                <textarea rows='3' class='form-control new_txt' name='hard_skill[problem]'></textarea>
                                                <div class='clearfix'></div>
                                            </div>
                                            <div class='form-group'>
                                                Action
                                                <textarea rows='3' class='form-control new_txt' name='hard_skill[action]'></textarea>
                                                <div class='clearfix'></div>
                                            </div>
                                            <div class='form-group'>
                                                Result
                                                <textarea rows='3' class='form-control new_txt' name='hard_skill[result]'></textarea>
                                                <div class='clearfix'></div>
                                            </div>
                                            <div class='clearfix'></div>
                                        </div>
                                        <div class="none_form"> 
                                            <button type="submit" class="button_save_data">Save</button>
                                        </div>
                                    </div>
                                </form>    
                            </div>

                            <div id="menu_view_skill" class="tab-pane fade">
                                <div class="form-group">
                                    <div class="form_color_use">
                                        <div class="table-responsive">
                                            
                                            <?php $i=1; if(count($skill_data) > 0) {
                                            foreach ($skill_data as $key_skill) {
                                            ?>
                                            <div style="margin-bottom: 2em;border: 2px solid #000;">
                                            <table class="table_use_div word_div table-responsive">
                                            <tbody>    
                                               <!-- <tr><td colspan="2" style="border-top: 5px solid #000;"></td></tr> -->
                                                <tr style="background-color: #3e3e3e;">
                                                    <td colspan="2"><h5 style="color: #fff;">Key Skills
                                                            <span class="recent_job_button1 pull-right">
                                                                <!-- <button onclick='update_skill("<?php echo $key_skill['key_skill']['id'] ?>")'>Update</button> -->
                                                                <button onclick='delete_skill("<?php echo $key_skill['key_skill']['id'] ?>")'>Delete</button>
                                                            </span>
                                                        </h5>    
                                                    </td>
                                                </tr> 

                                                <?php if($key_skill['key_skill']['soft_skill_list'] != '') { ?>
                                                <tr style="background:red">
                                                    <th style="color: #fff;">Soft Skills</th>
                                                    <td style="color: #fff" colspan="3"><?php echo $key_skill['key_skill']['soft_skill_list'] ?></td>
                                                </tr>

                                                <?php $soft_key_skill = unserialize($key_skill['key_skill']['soft_key_skill']);
                                                while ($fruit_name = current($soft_key_skill)) {
                                                ?>
                                                <tr>
                                                    <th style="color: red">Skill description</th>
                                                    <td style="color: red"><?= key($soft_key_skill) ?></td>                                                                                                                                                       
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
                                                } }
                                                ?>
                                                <?php if($key_skill['key_skill']['hard_skill'] != '') { ?>
                                                <tr style="background: #254094;">
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
                                            </tbody>
                                            </table>
                                            </div>
                                                <?php }  } else { ?>
                                            <table class="table_use_div word_div table-responsive" style="margin-bottom: 1em;border: 2px solid #000;">
                                            <tbody>
                                                <tr>
                                                    <th><center><b>No Record Found</b></center></th>
                                                </tr>
                                                </tbody>
                                                </table>
                                            <?php } ?>
                                            
                                        </div>
                                    </div>
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

    <div class="modal fade" id="calendarModal" role="dialog">
        <div class="modal-dialog">
            <form method="post" id="form_sub">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <input type="hidden" id="modal_id" name="modal_name">
                        <input type="hidden" id="user_id" name="user">
                        <input type="hidden" id="user_type" name="type">
                        <h4 class="modal-title"><center>Calendar</center></h4>                
                    </div>
                    <div class="modal-body">
                        <div class="calendar_data"></div>
                        <input type="hidden" id="remin_date" name="reminder_set"><br/> 
                        <br>
                        <div>
                            <label>Reminder For</label>
                            <select name="reminder_reason">
                                <option value="">Set Reminder For</option>
                                <option>Interview</option>
                                <option>Call Back</option>
                                <option>Received</option>
                                <option>Not Accepted</option>
                            </select>
                        </div>
                    </div>     
                    <div class="modal-footer ">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>        
            </form>
        </div>
    </div>


    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <form method="post">
            <div class="modal-dialog index_pop_up">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                    </div>
                    <div class="modal-body">

                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
                    </div>
                    <div class="modal-footer ">
                        <button id ="yes_btn" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                    </div>
                </div>
                <!-- /.modal-content --> 
            </div>
            <!-- /.modal-dialog -->
        </form>
    </div>

    <!--   Core JS Files   -->

    <?php echo $this->Html->script('js/icons.js') ?>
    <?php echo $this->Html->script('js/demo/moment.latest.min.js') ?>
    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?> 
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
    <?php echo $this->Html->script('js/dist/pignose.calendar.js') ?>

    <script type="text/javascript">
        //<![CDATA[
        $(function () {
            $('#wrapper .version strong').text('v' + $.fn.pignoseCalendar.ComponentVersion);
            function onClickHandler(date, obj) {
                var $calendar = obj.calendar;
                //var $box = $calendar.parent().siblings('.box').show();
                var text = '';
                if (date[0] !== null) {
                    text += date[0].format('YYYY-MM-DD');
                }

                if (date[0] !== null && date[1] !== null) {
                    text += ' ~ ';
                } else if (date[0] === null && date[1] == null) {
                    text += 'nothing';
                }

                if (date[1] !== null) {
                    text += date[1].format('YYYY-MM-DD');
                }
                $("#remin_date").val(text);
            }

            // Default Calendar
            $('.calendar_data').pignoseCalendar({
                select: onClickHandler
            });
            // This use for DEMO page tab component.
            $('.menu .item').tab();
        });
        //]]>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#from_date_id_vol").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#to_date_id_vol").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#start_cp_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#end_cp_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#date_value2").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#date_follow_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#job_doc_date").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#due_date2").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#due_reminder2").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#school_doc_date").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#date_course_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#complete_year_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#graduate_date_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#institute_sdate_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#institute_edate_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#award_date_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#degree_date_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#leader_date_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#club_date_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#interview_date_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#date_pick_val").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#job_add_task_due").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#job_add_task_complete").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#date_ne").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#target_date_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#date_archive_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#date_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#reminder_workshop_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#cover_date_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#date_sub1").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#due_date1").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#date_vol_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#refernce_date_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#date_start_org_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#date_finish_org_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
        $(document).ready(function () {
            $("#upload_doc_date_id").datepicker({
                yearRange: "-100:+100",
                changeMonth: true,
                changeYear: true,
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            if ($('[type="date"]').prop('type') != 'date') {
                $('[type="date"]').datepicker();
            }
        });
    </script>

    <?php echo $this->Html->script('js/bootstrap.min.js') ?>

</body>
</html>