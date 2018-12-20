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
                    <li style='display:none;'><a data-toggle="tab" href="#Update_Network_b" aria-expanded="false">Add Contact</a></li>                      
                    <li><a data-toggle="tab" href="#Update_Network" aria-expanded="false">Add Contact</a></li>

                    <li><a data-toggle="tab" href="#View_My_NetWork" aria-expanded="false">Update Network</a></li> 
                    <li><a data-toggle="tab" href="#View_my_net" aria-expanded="false">View My NetWork</a></li> 
                    <li><a data-toggle="tab" href="#Elevator_Pitch" aria-expanded="false">Elevator Pitch</a></li>
                    <li><a data-toggle="tab" href="#interview_ques" aria-expanded="false">Interview Questions</a></li>
                    <li><a data-toggle="tab" href="#career_help" aria-expanded="false">Career Help</a></li>
                    <!-- <li><a data-toggle="tab" href="#" aria-expanded="false">Career Blogs</a></li> -->
                    <li><a data-toggle="tab" href="#job_knowledge" aria-expanded="false">Insider Job knowledge</a></li>
                    <li><a data-toggle="tab" href="#chat" aria-expanded="false">Chat</a></li>
                    <li><a data-toggle="tab" href="#prof_contact" aria-expanded="false">Professional Contact</a></li>                    
                    <li><a data-toggle="tab" href="#club" aria-expanded="false">Clubs</a></li>
                    <li><a data-toggle="tab" href="#affiliation" aria-expanded="false">Affiliations</a></li>
                    <li><a data-toggle="tab" href="#other" aria-expanded="false">Other</a></li>
                </ul>

                <div class="tab-content tabs_use">                   
                    <div class="tab-content tab-pane fade in active">
                        <div id="Update_Network_b" class="tab-pane fade in active">
                            <div class='row'>
                                <div class="custom_bg col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <div class="group_div">
                                        <h1 style="color: #254094; font-weight: 700; font-size: 28px; text-align: center;">Networking can be very helpful to your career !  And networking works! </h1>
                                        <h1 style="color: #bb2121; text-align: center; padding-bottom: 28px;">65 to 80% of all jobs are found through networking.</h1>

                                        <p>The idea is to develop a network of friendly/career people who share information to help each other. It is best known as a strategy for opening the hidden job market, for getting a job or a placement. Because many jobs (some would say most) are not advertised, it is essential that you develop friendly relationships with people who can tip you off to job openings -- perhaps even introduce you to the person who is doing the hiring. There is some truth in, "It's not what you know, but who you know."
                                        </p>
                                        <div class='col-lg-12 col-sm-12 col-md-12 col-xs-12 none_space'>
                                            <p>Networking has other benefits. You are creating a community of people who support each other, who provide emotional support and information that will help each other. You will learn of new developments in your field: new tools, processes, leaders, training programs, products and services. You may discover the solution to a problem you face at school . And, you may have the satisfaction of providing the key piece of information that makes a real difference in the life of one of those in your network.</p>                   
                                        </div>
                                        <div class="clearfix"></div>
                                        <h1 style="text-align: center; padding-top: 28px;"><a style="color: #bb2121; font-size: 20px;font-weight: 600;">Join Now For Free</a></h1>
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
                                                <table class="table_use_div">
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

                        <div id="career_help" class="tab-pane fade">
                            <h1 style="display: block;width: 100%;font-size: 60px;color: #ff0000; padding: 6%; text-align: center;font-weight: bold;">Comming Soon....</h1>
                        </div>

                        <div id="job_knowledge" class="tab-pane fade">
                            <h1 style="display: block;width: 100%;font-size: 60px;color: #ff0000; padding: 6%; text-align: center;font-weight: bold;">Comming Soon....</h1>
                        </div>

                        <div id="chat" class="tab-pane fade">
                            <h1 style="display: block;width: 100%;font-size: 60px;color: #ff0000; padding: 6%; text-align: center;font-weight: bold;">Comming Soon....</h1>
                        </div>

                        <div id="prof_contact" class="tab-pane fade">
                            <h1 style="display: block;width: 100%;font-size: 60px;color: #ff0000; padding: 6%; text-align: center;font-weight: bold;">Comming Soon....</h1>
                        </div>

                        <div id="club" class="tab-pane fade">
                            <h1 style="display: block;width: 100%;font-size: 60px;color: #ff0000; padding: 6%; text-align: center;font-weight: bold;">Comming Soon....</h1>
                        </div>

                        <div id="affiliation" class="tab-pane fade">
                            <h1 style="display: block;width: 100%;font-size: 60px;color: #ff0000; padding: 6%; text-align: center;font-weight: bold;">Comming Soon....</h1>
                        </div>

                        <div id="other" class="tab-pane fade">
                            <h1 style="display: block;width: 100%;font-size: 60px;color: #ff0000; padding: 6%; text-align: center;font-weight: bold;">Comming Soon....</h1>
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