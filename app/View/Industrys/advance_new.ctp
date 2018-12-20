<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php echo $this->Html->css('industry/bootstrap/css/bootstrap.min.css') ?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
        <?php echo $this->Html->css('industry/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
        <?php echo $this->Html->css('industry/dist/css/AdminLTE.min.css') ?>
        <?php echo $this->Html->css('industry/dist/css/skins/_all-skins.min.css') ?>
        <style>
            .log_out_data {float: right;}
            .log_out_data li{list-style: none; border: 1px solid gray; background-color: #bd0000; padding: 10px 30px; margin: 2em;}
            .log_out_data li a{font-size: 15px; color: #fff;}
        </style>
    </head>
    <body>
        <div class="w3ls_header_top">
            <div class="container">
                <div class="w3l_header_left">
                    <ul class="w3layouts_header">
                        <li class="w3layouts_header_list">
                            <a><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; info@mycareerdashboard.com</a>
                            <div class="pull-right" id="google_translate_element"></div>
                        </li>
                    </ul>
                </div>
                <div class="w3l_header_right"></div>

                <div class="clearfix"></div>
            </div>
        </div>

        <header class="main-header">

            <!-- Logo -->

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">

                <a href="new_reference.html" class="logo">
                    <span class="logo-lg">
                        <img src="<?php echo DOMAIN_NAME ?>img/co-logo.png" class="img-responsive images_use_res">
                    </span>
                </a>

                <ul class="log_out_data">
                    <li>
                        <a href="<?php echo Router::url(['controller' => 'industrys/logout']) ?>">Logout</a>
                    </li>
                </ul>

            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 well">

                    <form method="post">
                        <?php foreach ($results as $result) { ?>
                        <div class="row">
                            <div class="col-md-6 well"> 
                                <fieldset class="form-group">
                                    <label for="recipetitle">Company Name:</label>
                                    <input type="text" name="company_name" class="form-control" value="<?php echo $result['verify_reference']['business_name'] ?>" required></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Company Address:</label>
                                    <input type="text" name="company_address" class="form-control" value="<?php echo $result['verify_reference']['business_address'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Company Telephone:</label>
                                    <input type="tel" name="company_telephone" class="form-control phone" value="<?php echo $result['verify_reference']['bussiness_phone'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Website:</label>
                                    <input type="text" name="company_web" class="form-control" value="<?php echo $result['verify_reference']['website'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Name Of Contact:</label>
                                    <input type="text" name="contact_name" class="form-control" value="<?php echo $result['verify_reference']['person_name'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Telephone:</label>
                                    <input type="tel" name="contact_num" class="form-control phone" value="<?php echo $result['verify_reference']['contact_number'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">EXT:</label>
                                    <input type="number" min="0" name="ext" class="form-control" value="<?php echo $result['verify_reference']['ext'] ?>">                           
                                </fieldset>
                            </div>
                            <div class="col-md-6 well">
                                <fieldset class="form-group">
                                    <label for="recipetitle">Name:</label>
                                    <input type="text" class="form-control" value="<?php echo $result['register']['first_name'] ." ". $result['register']['last_name'] ?>"/>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Date of Birth:</label>
                                    <input type="text" name="dob" class="form-control" value="<?php echo $result['register']['dob'] ?>"/>
                                </fieldset>
                                <?php if($ref_name == 'workplace_verification') { ?>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Employee Number:</label>
                                    <input type="text" name="call_end" class="form-control" value="<?php echo $result['verify_reference']['employee_id'] ?>"/>
                                </fieldset>
                                <?php } elseif($ref_name == 'education_verification') { ?>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Student Id:</label>
                                    <input type="text" name="call_end" class="form-control" value="<?php echo $result['verify_reference']['student_id'] ?>"/>
                                </fieldset>
                                <?php } ?>
                            </div>
                        </div>

                        <?php if($ref_name == 'workplace_verification') { ?>
                        <div>
                            <div class="well">
                                <fieldset>
                                    <label>In what capacity were you associated with the applicant </label>
                                    <select name="list" id="capacity_ass" class="form-controls">
                                        <option value="owner" <?php echo ($result['verify_reference']['associated_with_employee'] == 'owner' ? 'selected="selected"' : '') ?>>Owner Of Business</option>
                                        <option value="supervisor" <?php echo ($result['verify_reference']['associated_with_employee'] == 'supervisor') ? 'selected="selected"' : '' ?>>Supervisor</option>
                                        <option value="other" <?php echo ($result['verify_reference']['associated_with_employee'] == 'other') ? 'selected="selected"' : '' ?>>Other</option>
                                    </select>
                                    <textarea type="text" class="form-control" name="capacity_other" id="cmnt" placeholder="other.."><?php echo $result['verify_reference']['employee_comment_other'] ?></textarea>
                                </fieldset>
                                <fieldset>
                                    <textarea type="text" class="form-control" name="capacity_comment" placeholder="comment.."><?php echo $result['verify_reference']['associated_with_employee_comment'] ?></textarea>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Since what date</label>
                                            <input type="date" name="from_date" class="form-control" value="<?php echo $result['verify_reference']['join_date'] ?>"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label>&nbsp;</label><br/>
                                            <input type="date" name="to_date" class="form-control" value="<?php echo $result['verify_reference']['release_date'] ?>"></input>
                                        </div>
                                    </div>
                                    <br/>
                                </fieldset>    
                            </div>
                            <div class="well">
                                <fieldset>
                                    <label>In what capacity was the applicant employed? </label></br>
                                    <input type="checkbox" name="applicat_employed[]" value="Full Time" <?php echo ($result['verify_reference']['job_type'] == 'Full Time' ? 'checked' : '') ?>> Full Time</br>
                                    <input type="checkbox" name="applicat_employed[]" value="Part Time" <?php echo ($result['verify_reference']['job_type'] == 'Part Time' ? 'checked' : '') ?>> Part Time</br>
                                    <input type="checkbox" name="applicat_employed[]" value="Seasonal" <?php echo ($result['verify_reference']['job_type'] == 'Seasonal' ? 'checked' : '') ?>> Seasonal </br>
                                    <input type="checkbox" name="applicat_employed[]" value="Temp" <?php echo ($result['verify_reference']['job_type'] == 'Temp' ? 'checked' : '') ?>> Temp </br>
                                    <input type="checkbox" name="applicat_employed[]" value="Other" <?php echo ($result['verify_reference']['job_type'] == 'Other' ? 'checked' : '') ?>> Other</br>
                                </fieldset>
                                <fieldset>
                                    <label>Comments:</label>
                                    <textarea class="form-control" name="applicant_comment" placeholder="Comments:"><?php echo $result['verify_reference']['employed_comment'] ?></textarea>
                                </fieldset>
                                <br>
                            </div>
                            <div class="well">

                                <fieldset>
                                    <label>Salary:</label>
                                    <select name="salary" class="form-control">
                                        <option value="">Select Salary</option>
                                        <option <?php echo ($result['verify_reference']['employee_salary'] == '0 to 15,000' ? 'selected="selected"' : '') ?>>0 to 15,000</option>
                                        <option <?php echo ($result['verify_reference']['employee_salary'] == '15,000 to 25,000' ? 'selected="selected"' : '') ?>>15,000 to 25,000</option>
                                        <option <?php echo ($result['verify_reference']['employee_salary'] == '25,000 to 35,000' ? 'selected="selected"' : '') ?>>25,000 to 35,000</option>
                                        <option <?php echo ($result['verify_reference']['employee_salary'] == '35,000 to 45,000' ? 'selected="selected"' : '') ?>>35,000 to 45,000</option>
                                        <option <?php echo ($result['verify_reference']['employee_salary'] == '45,000 to 65,000' ? 'selected="selected"' : '') ?>>45,000 to 65,000</option>
                                        <option <?php echo ($result['verify_reference']['employee_salary'] == 'Other' ? 'selected="selected"' : '') ?>>Other</option>
                                    </select>
                                </fieldset>
                                <br>
                            </div>
                            <div class="well">                                                    
                                <fieldset>
                                    <br>
                                    <label> Was the applicant successful in fulfilling his or her duties?</label><br>
                                    <input type="radio" name="duty" value="Yes"> Yes<br>
                                    <input type="radio" name="duty" value="No"> No
                                </fieldset>
                                <fieldset>
                                    <textarea class="form-control" name="duties_comment" placeholder="Comments:"><?php echo $result['verify_reference']['duties_successful_comment'] ?></textarea>
                                </fieldset>
                                <br>
                            </div>


                            <div class="well">    
                                <fieldset>
                                    <label>What was it like to supervise the applicant?</label></br>
                                    <select class="form-control" name="supervise">
                                        <option value="">Select</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Difficult' ? 'selected="selected"' : '') ?>>Difficult</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Good' ? 'selected="selected"' : '') ?>>Good</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Very Good' ? 'selected="selected"' : '') ?>>Very Good</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Excellent' ? 'selected="selected"' : '') ?>>Excellent</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="well">

                                <fieldset>
                                    <br>
                                    <label>Was the applicant a valuable member of the team?<br>
                                        <input type="radio" name="team_member" value="Yes"> yes<br>
                                        <input type="radio" id="no" name="team_member" value="No" <?php echo ($result['verify_reference']['valuable_member'] == 'No' ? 'checked' : '') ?>> No
                                    </label>
                                </fieldset>
                                <fieldset>
                                    <textarea class="form-control" name="explain" placeholder=" Please explain ?" id="please_exp"><?php echo $result['verify_reference']['valuable_member_not_reason'] ?></textarea>
                                </fieldset>

                            </div>

                            <div class="well">

                                <fieldset>
                                    <br>
                                    <label>What unique skill did the candidate bring to your organization?</label></br>

                                </fieldset>
                                <fieldset>
                                    <textarea class="form-control" name="skill_comment" placeholder="Comments:"><?php echo $result['verify_reference']['unique_skill'] ?></textarea>
                                </fieldset>

                            </div>
                            <div class="well">

                                <fieldset>
                                    <br>
                                    <label>What were their strengths?</label></br>

                                </fieldset>
                                <fieldset>
                                    <textarea class="form-control" name="strenght_comment" placeholder="Comments:"><?php echo $result['verify_reference']['strength'] ?></textarea>
                                </fieldset>

                            </div>

                            <div class="well">
                                <fieldset>
                                    <label>What were their weaknesses or areas that needed improvement?</label><br>
                                </fieldset><br>
                                <div class="row">
                                    <div class="col-md-6">

                                        <label>Weaknesses :</label>

                                        <label class="btn btn-default" for="weakness_id">No Comment </label>
                                        <input type="radio" id="weakness_id" name="weakness" style="display:none;" value="No Comment">
                                        <label class="btn btn-default" for="dna_id">NA</label>
                                        <input type="radio" id="dna_id" name="weakness" value="NA" style="display:none;">

                                    </div>
                                    <div class="col-md-6">

                                        <label>Improvements:</label>

                                        <label class="btn btn-default" for="improve_id">No Comment </label>
                                        <input type="radio" id="improve_id" name="improve" style="display:none;" value="No Comment">
                                        <label class="btn btn-default" for="improve_dna_id">NA</label>
                                        <input type="radio" id="improve_dna_id" name="improve" value="NA" style="display:none;">

                                    </div>
                                </div>

                            </div>

                            <div class="well">

                                <fieldset>
                                    <br>
                                    <label>How would they describe this applicant's absenteeism record in relation to other employees?<br>
                                        <input type="radio" name="absenteeism" value="Very Good" <?php echo ($result['verify_reference']['absent_record'] == 'Very Good' ? 'checked' : '') ?>> Very Good<br>
                                        <input type="radio" name="absenteeism" value="Good" <?php echo ($result['verify_reference']['absent_record'] == 'Good' ? 'checked' : '') ?>> Good<br>
                                        <input type="radio" name="absenteeism" value="Ok" <?php echo ($result['verify_reference']['absent_record'] == 'Ok' ? 'checked' : '') ?>> Ok<br>
                                        <input type="radio" name="absenteeism" value="Needs Improvment" <?php echo ($result['verify_reference']['absent_record'] == 'Needs Improvment' ? 'checked' : '') ?>> Needs Improvment<br>
                                        <label for="absent_id" class="btn btn-default" value="No Comment"> No Comment</label>
                                        <input type="radio" name="absenteeism" id="absent_id" style="display:none;">
                                    </label>
                                </fieldset>

                            </div>
                            <div class="well">

                                <fieldset>
                                    <br>
                                    <label>Did you ever find it necessary to reprimand or discipline this person<br>
                                        <input type="radio" id="discipline_person" name="descipline" value="Yes" <?php echo ($result['verify_reference']['descipline'] == 'Yes' ? 'checked' : '') ?>> Yes<br>
                                        <input type="radio" name="descipline" value="No" <?php echo ($result['verify_reference']['descipline'] == 'No' ? 'checked' : '') ?>> No<br>
                                    </label>

                                </fieldset>

                                <fieldset id="circumstances">
                                    <br>
                                    <label>If so, what were the circumstances? </label>  <br>
                                    <textarea class="form-control" name="circumstance" placeholder=" comments.."><?php echo $result['verify_reference']['circumstances'] ?></textarea><br>									
                                </fieldset>

                            </div>

                            <div class="well">

                                <fieldset>
                                    <br>
                                    <label>Considering the job being applied for, do you think the applicant is suitable?<br>
                                        <input type="radio" name="applicable" value="Yes" <?php echo ($result['verify_reference']['applicant_suitable'] == 'Yes' ? 'checked' : '') ?>> Yes<br>
                                        <input type="radio" name="applicable" value="No" <?php echo ($result['verify_reference']['applicant_suitable'] == 'No' ? 'checked' : '') ?>> No<br>						  
                                        <label for="suitable_id" class="btn btn-default" value="not applicable"> Not Applicable</label>
                                        <input type="radio" name="applicable" id="suitable_id" style="display: none;">
                                    </label>
                                </fieldset>

                            </div>
                            <div class="well">

                                <fieldset>
                                    </br>
                                    <label>Why did they leave your employment?<br>
                                        <input type="checkbox" name="leave_reason" value="New Job" <?php echo ($result['verify_reference']['leave_employment'] == 'New Job' ? 'checked' : '') ?>> New Job<br>
                                        <input type="checkbox" name="leave_reason" value="Temp" <?php echo ($result['verify_reference']['leave_employment'] == 'Temp' ? 'checked' : '') ?>> Temp<br>
                                        <input type="checkbox" name="leave_reason" value="Seasonal" <?php echo ($result['verify_reference']['leave_employment'] == 'Seasonal' ? 'checked' : '') ?>> Seasonal<br>
                                        <input type="checkbox" name="leave_reason" value="Layoff" <?php echo ($result['verify_reference']['leave_employment'] == 'Layoff' ? 'checked' : '') ?>> Layoff<br>
                                        <input type="checkbox" name="leave_reason" value="Dismissed" <?php echo ($result['verify_reference']['leave_employment'] == 'Dismissed' ? 'checked' : '') ?>> Dismissed <br>					
                                    </label>
                                </fieldset>

                                <fieldset>
                                    <textarea class="form-control" name="leave_comment" placeholder="Comments:"><?php echo $result['verify_reference']['leave_employment_comment'] ?></textarea>
                                </fieldset>

                            </div>

                            <div class="well">				  
                                <fieldset>
                                    <br>
                                    <label>Would you rehire the candidate?<br>
                                        <input type="radio" id="rehire_candidate_yes" name="rehire" value="Yes" <?php echo ($result['verify_reference']['rehire'] == 'Yes' ? 'checked' : '') ?>> Yes<br>
                                        <input type="radio" id="rehire_candidate_no" name="rehire" value="No" <?php echo ($result['verify_reference']['rehire'] == 'No' ? 'checked' : '') ?>> No<br>
                                    </label>
                                </fieldset>

                                <fieldset id="candidate_yes">
                                    <label>why? </label>
                                    <textarea class="form-control" name="rehire_reason" placeholder="Comments:"><?php echo $result['verify_reference']['rehire_reason'] ?></textarea>
                                </fieldset>

                                <fieldset id="candidate_no">
                                    <label>why not?</label>
                                    <textarea class="form-control" name="not_rehire" placeholder="Comments:"><?php echo $result['verify_reference']['not_rehire'] ?></textarea>
                                </fieldset>
                                <br>
                                <fieldset>

                                    <label for="rehire_candidate">Is there anything else you would like to add? </label></br>

                                    <textarea class="form-control" name="anything" placeholder="Comments.."><?php echo $result['verify_reference']['anything_else'] ?></textarea>

                                </fieldset>

                            </div>

                            <div class="well">				  
                                <fieldset>
                                    <br>
                                    <label>If you have any questions , please feel free to contact me</label>                                                                      
                                </fieldset>

                                <fieldset>
                                    <br>
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="" value="<?php echo $result['register']['first_name'] ." ". $result['register']['last_name'] ?>"><br/>

                                </fieldset>

                                <fieldset>
                                    <label>Contact No.</label>
                                    <input type="text" class="form-control phone" name="" value="<?php echo $result['register']['phone'] ?>">
                                </fieldset><br/>

                            </div>

                        </div>  
                        <?php } elseif ($ref_name == 'volunteer_verification') { ?>               

                        <div>
                            <div class="well">
                                <fieldset>
                                    <label>How long have you known this individual</label>                                    
                                    <textarea type="text" class="form-control" name="known_person" placeholder="Comment"><?php echo $result['verify_reference']['how_long_known'] ?></textarea>
                                </fieldset>
                                <fieldset>                                   
                                    <br>
                                </fieldset>   
                            </div>

                            <div class="well">
                                <fieldset>
                                    <label>In what capacity</label>
                                    <textarea type="text" name="capacity" class="form-control" placeholder="Comment"><?php echo $result['verify_reference']['what_capacity'] ?></textarea>                                    
                                </fieldset>
                                <fieldset>                                   
                                    <br>
                                </fieldset>   
                            </div>

                            <div class="well">
                                <fieldset>
                                    <label>How would you describe the applicant’s ability to work with and relate to their volunteer work </label>                                    
                                    <textarea type="text" name="work_ability" class="form-control" placeholder="Comment"><?php echo $result['verify_reference']['applicant_ability'] ?></textarea>
                                </fieldset>
                                <fieldset>                                   
                                    <br>
                                </fieldset>    
                            </div>

                            <div class="well">
                                <fieldset>
                                    <label>To the extent you know, please tell me about the applicant's roles with their role</label>                                    
                                    <textarea type="text" class="form-control" name="applicant_role" placeholder="school volunteer, youth coach, day care volunteer, youth group leader, etc"><?php echo $result['verify_reference']['applicant_role'] ?></textarea>
                                </fieldset>
                                <fieldset>                                   
                                    <br>
                                </fieldset>    
                            </div>

                            <div class="well">
                                <fieldset>
                                    <label>Have you observed the applicant working</label> 
                                    <select name="applicant_working" class="form-control" id="observation">
                                        <option value="">Select</option>
                                        <option <?php echo ($result['verify_reference']['observe_working'] == 'Yes' ? 'selected="selected"' : '') ?>>Yes</option>
                                        <option <?php echo ($result['verify_reference']['observe_working'] == 'No' ? 'selected="selected"' : '') ?>>No</option>                                        
                                    </select>                                     
                                </fieldset><br/>
                                <fieldset class="related_role">
                                    <label>can you give me an example of how the applicant relates to this role</label> 
                                    <textarea type="text" name="related_role" class="form-control" placeholder="Comment"><?php echo $result['verify_reference']['example_applicant_role'] ?></textarea>                                     
                                </fieldset><br/>
                                <fieldset>                                    
                                    <textarea type="text" name="related_role_comment" class="form-control" placeholder="Comment"><?php echo $result['verify_reference']['example_applicant_role_comment'] ?></textarea>
                                </fieldset>
                                <fieldset>                                   
                                    <br>
                                </fieldset>   
                            </div>

                            <div class="well">
                                <fieldset>
                                    <label>Would you have any reservations about recommending this person to serve as a program volunteer</label> 
                                    <textarea type="text" name="reservation" class="form-control" placeholder="Comment"><?php echo $result['verify_reference']['reservation'] ?></textarea>                                     
                                </fieldset>

                                <fieldset>                                   
                                    <br>
                                </fieldset>   
                            </div>

                            <div class="well">				  
                                <fieldset>
                                    <br>
                                    <label>If you have any questions , please feel free to contact me</label>                                                                      
                                </fieldset>

                                <fieldset>
                                    <br>
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="" value="<?php echo $result['register']['first_name'] ." ". $result['register']['last_name'] ?>"><br/>

                                </fieldset>

                                <fieldset>
                                    <label>Contact No.</label>
                                    <input type="text" class="form-control phone" name="" value="<?php echo $result['register']['phone'] ?>">
                                </fieldset><br/>

                            </div>

                        </div>
                        <?php } ?>


                        <input type="hidden" name="refer_id" id="refer_id" value="<?php echo $result['verify_reference']['id'] ?>">                    
                        <div class="row">

                            <div class="col-md-6 well">
                                <div class="well"><h2>Key Actions</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Considers all pertinent facts and alternatives before deciding on the most appropriate action.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="row_div">
                                                    <?php $key = ($result['verify_reference']['key_rating1']/20); ?>
                                                <input type="hidden" name="key_action1" id="key_action1_id" value="<?php echo $result['verify_reference']['key_rating1'] ?>">
                                                <td title="1" <?php if($key == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($key == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($key == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($key == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($key == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($key == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                                                            
                                        </div>


                                    </fieldset>
                                </div>


<!-- <div class="well"><h4><b>Total_points</b><span><i> :<?php echo ($result['verify_reference']['key_rating1'] + $result['verify_reference']['key_rating2'] + $result['verify_reference']['key_rating3'])*2 ?>/30</i><span></h4></div> -->

                            </div>

                            <div class="col-md-6 well">
                                <div class="well"><h2>Teamwork</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Interacts with people effectively. Able and willing to share and receive information.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">		

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="team_work1_div">
                                                    <?php $team1 = ($result['verify_reference']['teamwork_rating1']/20); ?>
                                                <input type="hidden" name="team_work1" id="team_work1_id" value="<?php echo $result['verify_reference']['teamwork_rating1'] ?>">
                                                <td title="1" <?php if($team1 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($team1 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($team1 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($team1 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($team1 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($team1 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>     


                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Co-operates within the group and across groups.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="team_work2_div">
                                                <input type="hidden" name="team_work2" id="team_work2_id" value="<?php echo $result['verify_reference']['teamwork_rating2'] ?>">
                                                <?php $team2 = ($result['verify_reference']['teamwork_rating2']/20); ?>
                                                <td title="1" <?php if($team2 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($team2 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($team2 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($team2 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($team2 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($team2 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                  
                                        </div>       


                                    </fieldset>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Considers all pertinent facts and alternatives before deciding on the most appropriate action.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="team_work3_div">
                                                <input type="hidden" name="team_work3" id="team_work3_id" value="<?php echo $result['verify_reference']['teamwork_rating3'] ?>">
                                                <?php $team3 = ($result['verify_reference']['teamwork_rating3']/20); ?>
                                                <td title="1" <?php if($team3 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($team3 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($team3 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($team3 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($team3 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($team3 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                              
                                        </div>  

                                    </fieldset>
                                </div>					                      

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6 well">
                                <div class="well"><h2>Work Standards</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Sets and maintains high performance standards.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="work_standard1_div">
                                                <input type="hidden" name="work_standard1" id="work_standard1_id" value="<?php echo $result['verify_reference']['work_standard1'] ?>">
                                                <?php $work1 = ($result['verify_reference']['work_standard1']/20); ?>
                                                <td title="1" <?php if($work1 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($work1 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($work1 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($work1 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($work1 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($work1 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                  
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Pays close attention to detail, accuracy and completeness.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="work_standard2_div">
                                                <input type="hidden" name="work_standard2" id="work_standard2_id" value="<?php echo $result['verify_reference']['work_standard2'] ?>">
                                                <?php $work2 = ($result['verify_reference']['work_standard2']/20); ?>
                                                <td title="1" <?php if($work2 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($work2 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($work2 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($work2 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($work2 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($work2 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                  
                                        </div> 

                                    </fieldset>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Shows concern for all aspects of the job and follows up on work outputs.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="work_standard3_div">
                                                <input type="hidden" name="work_standard3" id="work_standard3_id" value="<?php echo $result['verify_reference']['work_standard3'] ?>">
                                                <?php $work3 = ($result['verify_reference']['work_standard3']/20); ?>
                                                <td title="1" <?php if($work3 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($work3 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($work3 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($work3 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($work3 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($work3 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                  
                                        </div>

                                    </fieldset>
                                </div>					                      

                            </div>

                            <div class="col-md-6 well">
                                <div class="well"><h2>Motivation</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Displays energy and enthusiasm in approaching the job.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="motivation1_div">
                                                <input type="hidden" name="motivation1" id="motivation1_id" value="<?php echo $result['verify_reference']['motivation1'] ?>">
                                                <?php $motive1 = ($result['verify_reference']['motivatin_rating1']/20); ?>
                                                <td title="1" <?php if($motive1 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($motive1 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($motive1 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($motive1 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($motive1 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($motive1 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                 
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Commits to putting in additional effort.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="motivation2_div">
                                                <input type="hidden" name="motivation2" id="motivation2_id" value="<?php echo $result['verify_reference']['motivation2'] ?>">
                                                <?php $motive2 = ($result['verify_reference']['motivatin_rating2']/20); ?>
                                                <td title="1" <?php if($motive2 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($motive2 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($motive2 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($motive2 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($motive2 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($motive2 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                
                                        </div> 

                                    </fieldset>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Maintains high level of productivity and self-direction.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="motivation3_div">
                                                <input type="hidden" name="motivation3" id="motivation3_id" value="<?php echo $result['verify_reference']['motivation3'] ?>">
                                                <?php $motive3 = ($result['verify_reference']['motivatin_rating3']/20); ?>
                                                <td title="1" <?php if($motive3 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($motive3 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($motive3 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($motive3 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($motive3 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($motive3 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                 
                                        </div>  

                                    </fieldset>
                                </div>					                      

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6 well">
                                <div class="well"><h2>Reliability</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Takes personal responsibility for job performance.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="reliable1_div">
                                                <input type="hidden" name="reliable1" id="reliable1_id" value="<?php echo $result['verify_reference']['reliabilty_rating1'] ?>">
                                                <?php $reliable1 = ($result['verify_reference']['reliabilty_rating1']/20); ?>
                                                <td title="1" <?php if($reliable1 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($reliable1 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($reliable1 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($reliable1 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($reliable1 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($reliable1 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Completes work in a timely and consistent manner.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="reliable2_div">
                                                <input type="hidden" name="reliable2" id="reliable2_id" value="<?php echo $result['verify_reference']['reliabilty_rating2'] ?>">
                                                <?php $reliable2 = ($result['verify_reference']['reliabilty_rating2']/20); ?>
                                                <td title="1" <?php if($reliable2 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($reliable2 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($reliable2 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($reliable2 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($reliable2 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($reliable2 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                    
                                        </div> 

                                    </fieldset>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Sticks to commitments.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="reliable3_div">
                                                <input type="hidden" name="reliable3" id="reliable3_id" value="<?php echo $result['verify_reference']['reliabilty_rating3'] ?>">
                                                <?php $reliable3 = ($result['verify_reference']['reliabilty_rating3']/20); ?>
                                                <td title="1" <?php if($reliable3 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($reliable3 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($reliable3 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($reliable3 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($reliable3 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($reliable3 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                    
                                        </div> 

                                    </fieldset>
                                </div>					                      

                            </div>

                            <div class="col-md-6 well">
                                <div class="well"><h2>Problem Solving</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Analyzes problem by gathering and organizing all relevant information.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="problem1_div">
                                                <input type="hidden" name="problem1" id="problem1_id" value="<?php echo $result['verify_reference']['problem_rating1'] ?>">
                                                <?php $problem1 = ($result['verify_reference']['problem_rating1']/20); ?>
                                                <td title="1" <?php if($problem1 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($problem1 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($problem1 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($problem1 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($problem1 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($problem1 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                 
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Identifies cause and effect relationships.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="problem2_div">
                                                <input type="hidden" name="problem2" id="problem2_id" value="<?php echo $result['verify_reference']['problem_rating2'] ?>">
                                                <?php $problem2 = ($result['verify_reference']['problem_rating2']/20); ?>
                                                <td title="1" <?php if($problem2 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($problem2 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($problem2 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($problem2 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($problem2 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($problem2 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                    
                                        </div> 

                                    </fieldset>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Comes up with appropriate solutions.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="problem3_div">
                                                <input type="hidden" name="problem3" id="problem3_id" value="<?php echo $result['verify_reference']['problem_rating3'] ?>">
                                                <?php $problem3 = ($result['verify_reference']['problem_rating3']/20); ?>
                                                <td title="1" <?php if($problem3 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($problem3 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($problem3 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($problem3 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($problem3 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($problem3 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                 
                                        </div> 

                                    </fieldset>
                                </div>



                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6 well">
                                <div class="well"><h2>Adaptability</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Adapts to changing work environments, work priorities and organizational needs.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="adapt1_div">
                                                <input type="hidden" name="adapt1" id="adapt1_id" value="<?php echo $result['verify_reference']['adaptibility_rating1'] ?>">
                                                <?php $adapt1 = ($result['verify_reference']['adaptibility_rating1']/20); ?>
                                                <td title="1" <?php if($adapt1 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($adapt1 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($adapt1 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($adapt1 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($adapt1 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($adapt1 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Able to effectively deal with change and diverse people.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="adapt2_div">
                                                <input type="hidden" name="adapt2" id="adapt2_id" value="<?php echo $result['verify_reference']['adaptibility_rating2'] ?>">
                                                <?php $adapt2 = ($result['verify_reference']['adaptibility_rating2']/20); ?>
                                                <td title="1" <?php if($adapt2 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($adapt2 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($adapt2 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($adapt2 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($adapt2 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($adapt2 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                  
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Able to effectively deal with change and diverse people.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="adapt3_div">
                                                <input type="hidden" name="adapt3" id="adapt3_id" value="<?php echo $result['verify_reference']['adaptibility_rating3'] ?>">
                                                <?php $adapt3 = ($result['verify_reference']['adaptibility_rating3']/20); ?>
                                                <td title="1" <?php if($adapt3 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($adapt3 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($adapt3 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($adapt3 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($adapt3 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($adapt3 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>                    

                            </div>

                            <div class="col-md-6 well">
                                <div class="well"><h2>Planning and Organizing</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Plans and organizes tasks and work responsibilities to achieve objectives.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="plan1_div">
                                                <input type="hidden" name="plan1" id="plan1_id" value="<?php echo $result['verify_reference']['plan_rating1'] ?>">
                                                <?php $plan1 = ($result['verify_reference']['plan_rating1']/20); ?>
                                                <td title="1" <?php if($plan1 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($plan1 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($plan1 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($plan1 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($plan1 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($plan1 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                                                               
                                        </div>

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Sets priorities. Schedules activities.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="plan2_div">
                                                <input type="hidden" name="plan2" id="plan2_id" value="<?php echo $result['verify_reference']['plan_rating2'] ?>">
                                                <?php $plan2 = ($result['verify_reference']['plan_rating2']/20); ?>
                                                <td title="1" <?php if($plan2 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($plan2 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($plan2 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($plan2 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($plan2 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($plan2 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>

                                    </fieldset>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Allocates and uses resources properly.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="plan3_div">
                                                <input type="hidden" name="plan3" id="plan3_id" value="<?php echo $result['verify_reference']['plan_rating3'] ?>">
                                                <?php $plan3 = ($result['verify_reference']['plan_rating3']/20); ?>
                                                <td title="1" <?php if($plan3 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($plan3 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($plan3 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($plan3 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($plan3 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($plan3 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                 
                                        </div>

                                    </fieldset>
                                </div>                  

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6 well">
                                <div class="well"><h2>Communication</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Expresses ideas effectively.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="comm1_div">
                                                <input type="hidden" name="comm1" id="comm1_id" value="<?php echo $result['verify_reference']['communication_rating1'] ?>">
                                                <?php $comm1 = ($result['verify_reference']['communication_rating1']/20); ?>
                                                <td title="1" <?php if($comm1 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($comm1 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($comm1 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($comm1 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($comm1 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($comm1 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div>

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Organizes and delivers information appropriately.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="comm2_div">
                                                <input type="hidden" name="comm2" id="comm2_id" value="<?php echo $result['verify_reference']['communication_rating2'] ?>">
                                                <?php $comm2 = ($result['verify_reference']['communication_rating2']/20); ?>
                                                <td title="1" <?php if($comm2 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($comm2 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($comm2 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($comm2 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($comm2 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($comm2 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                  
                                        </div>

                                    </fieldset>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Listens actively.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="comm3_div">
                                                <input type="hidden" name="comm3" id="comm3_id" value="<?php echo $result['verify_reference']['communication_rating3'] ?>">
                                                <?php $comm3 = ($result['verify_reference']['communication_rating3']/20); ?>
                                                <td title="1" <?php if($comm3 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($comm3 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($comm3 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($comm3 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($comm3 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($comm3 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                  
                                        </div>

                                    </fieldset>
                                </div>					                    

                            </div>

                            <div class="col-md-6 well">
                                <div class="well"><h2>Integrity</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Shares complete and accurate information.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="ineger1_div">
                                                <input type="hidden" name="ineger1" id="ineger1_id" value="<?php echo $result['verify_reference']['integrity_rating1'] ?>">
                                                <?php $integer1 = ($result['verify_reference']['integrity_rating1']/20); ?>
                                                <td title="1" <?php if($integer1 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($integer1 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($integer1 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($integer1 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($integer1 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($integer1 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                  
                                        </div>

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Maintains confidentiality and  meets own commitments.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="ineger2_div">
                                                <input type="hidden" name="ineger2" id="ineger2_id" value="<?php echo $result['verify_reference']['integrity_rating2'] ?>">
                                                <?php $integer2 = ($result['verify_reference']['integrity_rating2']/20); ?>
                                                <td title="1" <?php if($integer2 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($integer2 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($integer2 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($integer2 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($integer2 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($integer2 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                 
                                        </div>

                                    </fieldset>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Adheres to organizational policies and procedures. </label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="ineger3_div">
                                                <input type="hidden" name="ineger3" id="ineger3_id" value="<?php echo $result['verify_reference']['integrity_rating3'] ?>">
                                                <?php $integer3 = ($result['verify_reference']['integrity_rating3']/20); ?>
                                                <td title="1" <?php if($integer3 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($integer3 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($integer3 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($integer3 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($integer3 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($integer3 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                  
                                        </div>

                                    </fieldset>
                                </div>					                      

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6 well">
                                <div class="well"><h2>Initiative</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Takes action to influence events.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="initiate1_div">
                                                <input type="hidden" name="initiate1" id="initiate1_id" value="<?php echo $result['verify_reference']['initiative_rating1'] ?>">
                                                <?php $initiate1 = ($result['verify_reference']['initiative_rating1']/20); ?>
                                                <td title="1" <?php if($initiate1 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($initiate1 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($initiate1 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($initiate1 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($initiate1 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($initiate1 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Generates ideas for improvement, takes advantage of opportunities, suggests innovations.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="initiate2_div">
                                                <input type="hidden" name="initiate2" id="initiate2_id" value="<?php echo $result['verify_reference']['initiative_rating2'] ?>">
                                                <?php $initiate2 = ($result['verify_reference']['initiative_rating2']/20); ?>
                                                <td title="1" <?php if($initiate2 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($initiate2 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($initiate2 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($initiate2 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($initiate2 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($initiate2 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                    
                                        </div>

                                    </fieldset>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Does more than required.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="initiate3_div">
                                                <input type="hidden" name="initiate3" id="initiate3_id" value="<?php echo $result['verify_reference']['initiative_rating3'] ?>">
                                                <?php $initiate3 = ($result['verify_reference']['initiative_rating3']/20); ?>
                                                <td title="1" <?php if($initiate3 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($initiate3 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($initiate3 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($initiate3 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($initiate3 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($initiate3 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>

                                    </fieldset>
                                </div>


                            </div>

                            <div class="col-md-6 well">
                                <div class="well"><h2>Stress Tolerance</h2></div>
                                <div>

                                    <fieldset>
                                        <label>Displays emotional resilience and the ability to withstand pressure on an on-going basis.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="stress1_div">
                                                <input type="hidden" name="stress1" id="stress1_id" value="<?php echo $result['verify_reference']['stress_rating1'] ?>">
                                                <?php $stress1 = ($result['verify_reference']['stress_rating1']/20); ?>
                                                <td title="1" <?php if($stress1 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($stress1 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($stress1 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($stress1 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($stress1 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($stress1 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Deals with difficult situations while maintaining performance.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="stress2_div">
                                                <input type="hidden" name="stress2" id="stress2_id" value="<?php echo $result['verify_reference']['stress_rating2'] ?>">
                                                <?php $stress2 = ($result['verify_reference']['stress_rating2']/20); ?>
                                                <td title="1" <?php if($stress2 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($stress2 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($stress2 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($stress2 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($stress2 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($stress2 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                    
                                        </div>
                                    </fieldset>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Seeks support from others when necessary and uses appropriate coping techniques.</label><br>
                                        <label> Rating: </label>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody class="table_div_data">
                                                    <tr class="bg_color_use">
                                                        <th><p></p><center>1</center><p></p></th>
                                                <th><p></p><center>2</center><p></p></th>
                                                <th><p></p><center>3</center><p></p></th>
                                                <th><p></p><center>4</center><p></p></th>
                                                <th><p></p><center>5</center><p></p></th>
                                                <th><p></p><center>X</center><p></p></th>
                                                </tr>
                                                <tr class="stress3_div">
                                                <input type="hidden" name="stress3" id="stress3_id" value="<?php echo $result['verify_reference']['stress_rating3'] ?>">
                                                <?php $stress3 = ($result['verify_reference']['stress_rating3']/20); ?>
                                                <td title="1" <?php if($stress3 == '1') { echo "style='background-color: red; color: #fff;'"; } ?>>Greatly below expectations</td>
                                                <td title="2" <?php if($stress3 == '2') { echo "style='background-color: #f3b014; color: #fff;'"; } ?>>Below expectations</td>
                                                <td title="3" <?php if($stress3 == '3') { echo "style='background-color: yellow; color: #000;'"; } ?>>Met expectations</td>
                                                <td title="4" <?php if($stress3 == '4') { echo "style='background-color: yellowgreen; color: #000;'"; } ?>>Exceeded expectations</td>
                                                <td title="5" <?php if($stress3 == '5') { echo "style='background-color: green; color: #fff;'"; } ?>>Greatly exceeded expectations</td>
                                                <td title="0" <?php if($stress3 == '0') { echo "style='background-color: #545151; color: #fff;'"; } ?>>Unable to observe</td>
                                                </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>

                                    </fieldset>
                                </div>					                     
                            </div>				   
                        </div>

                        <div class="row">
                            <div class="col-md-12 well">

                                <div class=" well-sm">
                                    <h2 align="center">General Computer Skills</h2></br>
                                    <div class="row">

                                        <div class="col-xs-12 col-md-12">
                                            <div class="row rating-desc">

                                                <div class="col-xs-3 col-md-3 text-right">
                                                    Typing Speed

                                                    <span class="glyphicon glyphicon-star"></span>5
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div id="range1" class="range"> <span id="currentVal"><?php echo $result['verify_reference']['rating1'] ?></span> </div>
                                                    <!-- <div class="progress progress-striped"> 
                                                        
                                                          
                                                         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">80%</span> 
                                                        </div> 
                                                    </div> -->
                                                </div>
                                                <!-- end 5 -->
                                                <div class="col-xs-3 col-md-3 text-right">
                                                    Microsoft Word
                                                    <span class="glyphicon glyphicon-star"></span>4
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div id="range2" class="range"> <span id="currentVal"><?php echo $result['verify_reference']['rating2'] ?></span> </div>
                                                    <!-- <div class="progress">
                                                         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                             <span class="sr-only">60%</span>
                                                         </div>
                                                     </div> -->
                                                </div>
                                                <!-- end 4 -->
                                                <!-- end 5 -->
                                                <div class="col-xs-3 col-md-3 text-right">
                                                    Microsoft Powerpoint
                                                    <span class="glyphicon glyphicon-star"></span>4
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div id="range3" class="range"> <span id="currentVal"><?php echo $result['verify_reference']['rating3'] ?></span> </div>
                                                    <!-- <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">60%</span>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <!-- end 4 -->
                                                <div class="col-xs-3 col-md-3 text-right">
                                                    web Browsing
                                                    <span class="glyphicon glyphicon-star"></span>3
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div id="range4" class="range"> <span id="currentVal"><?php echo $result['verify_reference']['rating4'] ?></span> </div>
                                                    <!-- <div class="progress">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40%</span>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <!-- end 3 -->
                                                <!-- end 4 -->
                                                <div class="col-xs-3 col-md-3 text-right">
                                                    Excel Spreadsheet
                                                    <span class="glyphicon glyphicon-star"></span>4
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div id="range5" class="range"> <span id="currentVal"><?php echo $result['verify_reference']['rating5'] ?></span> </div>
                                                    <!-- <div class="progress">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40%</span>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <!-- end 3 -->
                                                <div class="col-xs-3 col-md-3 text-right">
                                                    Email
                                                    <span class="glyphicon glyphicon-star"></span>1
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div id="range6" class="range"> <span id="currentVal"><?php echo $result['verify_reference']['rating6'] ?></span> </div>
                                                    <!-- <div class="progress">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20%</span>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <!-- end 2 -->

                                                <div class="col-xs-3 col-md-3 text-right">
                                                    Fax
                                                    <span class="glyphicon glyphicon-star"></span>2
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div id="range7" class="range"> <span id="currentVal"><?php echo $result['verify_reference']['rating7'] ?></span> </div>
                                                </div>
                                                <!-- end 1 -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="well">				  

                            <p align="right">
                                <button type="submit" class="btn btn-info">Save and post</button>
                            </p>

                        </div>

                    <?php } ?>
                    </form>
                </div>
            </div>
        </div>				   

        <footer class="main-footer left_padding">
            <div class="pull-right hidden-xs">
                <b>Design By </b><a href="https://www.acumaxtechnologies.com/"> &nbsp; www.acumaxtechnologies.com</a>
            </div>
            <strong>Copyright &copy;2017 <a href="https://www.mycareerdashboard.com/">www.mycareerdashboard.com</a>.</strong> All rights
            reserved.
        </footer>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <?php echo $this->Html->script('industry/plugins/jQuery/jquery-2.2.3.min.js') ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script> 
        <?php echo $this->Html->script('industry/bootstrap/js/bootstrap.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/fastclick/fastclick.js') ?>
        <?php echo $this->Html->script('industry/dist/js/app.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/sparkline/jquery.sparkline.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>
        <?php echo $this->Html->script('industry/plugins/slimScroll/jquery.slimscroll.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/chartjs/Chart.min.js') ?>
        <?php echo $this->Html->script('industry/dist/js/demo.js') ?>

        <script>
            (function () {
                $("#range1").slider({

                    range: "min",
                    max: 100,
                    value: "<?php echo $result['verify_reference']['rating1'] ?>",
                    slide: function (e, ui) {

                        var max_value = ui.value;
                        var referId = $('#refer_id').val();
                        $.ajax({
                            url: "<?php echo Router:: url(['controller' => 'industrys/range1']) ?>",
                            type: "POST",
                            data: {"val": max_value, "id": referId},
                            success: function (data) {

                            }
                        });
                    }
                });

            }).call(this);
        </script>

        <script>
            (function () {
                $("#range2").slider({

                    range: "min",
                    max: 100,
                    value: "<?php echo $result['verify_reference']['rating2'] ?>",
                    slide: function (e, ui) {

                        var max_value = ui.value;
                        var referId = $('#refer_id').val();
                        $.ajax({
                            url: "<?php echo Router:: url(['controller' => 'industrys/range2']) ?>",
                            type: "POST",
                            data: {"val": max_value, "id": referId},
                            success: function (data) {

                            }
                        });
                    }
                });

            }).call(this);
        </script>

        <script>
            (function () {
                $("#range3").slider({

                    range: "min",
                    max: 100,
                    value: "<?php echo $result['verify_reference']['rating3'] ?>",
                    slide: function (e, ui) {

                        var max_value = ui.value;
                        var referId = $('#refer_id').val();
                        $.ajax({
                            url: "<?php echo Router:: url(['controller' => 'industrys/range3']) ?>",
                            type: "POST",
                            data: {"val": max_value, "id": referId},
                            success: function (data) {

                            }
                        });
                    }
                });

            }).call(this);
        </script>

        <script>
            (function () {
                $("#range4").slider({

                    range: "min",
                    max: 100,
                    value: "<?php echo $result['verify_reference']['rating4'] ?>",
                    slide: function (e, ui) {

                        var max_value = ui.value;
                        var referId = $('#refer_id').val();
                        $.ajax({
                            url: "<?php echo Router:: url(['controller' => 'industrys/range4']) ?>",
                            type: "POST",
                            data: {"val": max_value, "id": referId},
                            success: function (data) {

                            }
                        });
                    }
                });

            }).call(this);
        </script>

        <script>
            (function () {
                $("#range5").slider({

                    range: "min",
                    max: 100,
                    value: "<?php echo $result['verify_reference']['rating5'] ?>",
                    slide: function (e, ui) {

                        var max_value = ui.value;
                        var referId = $('#refer_id').val();
                        $.ajax({
                            url: "<?php echo Router:: url(['controller' => 'industrys/range5']) ?>",
                            type: "POST",
                            data: {"val": max_value, "id": referId},
                            success: function (data) {

                            }
                        });
                    }
                });

            }).call(this);
        </script>

        <script>
            (function () {
                $("#range6").slider({

                    range: "min",
                    max: 100,
                    value: "<?php echo $result['verify_reference']['rating6'] ?>",
                    slide: function (e, ui) {

                        var max_value = ui.value;
                        var referId = $('#refer_id').val();
                        $.ajax({
                            url: "<?php echo Router:: url(['controller' => 'industrys/range6']) ?>",
                            type: "POST",
                            data: {"val": max_value, "id": referId},
                            success: function (data) {

                            }
                        });
                    }
                });

            }).call(this);
        </script>

        <script>
            (function () {
                $("#range7").slider({

                    range: "min",
                    max: 100,
                    value: "<?php echo $result['verify_reference']['rating7'] ?>",
                    slide: function (e, ui) {

                        var max_value = ui.value;
                        var referId = $('#refer_id').val();
                        $.ajax({
                            url: "<?php echo Router:: url(['controller' => 'industrys/range7']) ?>",
                            type: "POST",
                            data: {"val": max_value, "id": referId},
                            success: function (data) {

                            }
                        });
                    }
                });

            }).call(this);
        </script>

        <script>
            $("#cmnt").hide();

            $("#capacity_ass").change(function () {
                var val = $("#capacity_ass").val();

                if (val == "other") {
                    $("#cmnt").show();
                } else {
                    $("#cmnt").hide();
                }
            });

        </script>


        <script type="text/javascript">
            $("#please_exp").hide();
            $(document).ready(function () {
                $("#no").click(function () {
                    if ($(this).is(":checked")) {
                        $("#please_exp").show();
                    } else {
                        $("#please_exp").hide();
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $("#circumstances").hide();
            $(document).ready(function () {
                $("#discipline_person").click(function () {
                    if ($(this).is(":checked")) {
                        $("#circumstances").show();
                    } else {
                        $("#circumstances").hide();
                    }
                });
            });
        </script>

        <script>
            $("#candidate_yes").hide();
            $("#candidate_no").hide();
            $(document).ready(function () {
                $("#rehire_candidate_yes").click(function () {
                    if ($(this).is(":checked")) {
                        $("#candidate_yes").show();
                    } else {
                        $("#candidate_yes").hide();
                    }
                });
                $("#rehire_candidate_no").click(function () {
                    if ($(this).is(":checked")) {
                        $("#candidate_no").show();
                    } else {
                        $("#candidate_no").hide();
                    }
                });
            });

        </script>

        <script>
            $("#observation").change(function () {
                if (this.value == 'Yes') {
                    $(".related_role").show();
                } else {
                    $(".related_role").hide();
                }
            });
        </script>

        <script>
            $('.row_div td').click(function () {
                $(this).parent('.row_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.row_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#key_action1_id").val(data);
            });
        </script>

        <script>
            $('.team_work1_div td').click(function () {
                $(this).parent('.team_work1_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.team_work1_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#team_work1_id").val(data);
            });
        </script>

        <script>
            $('.team_work2_div td').click(function () {
                $(this).parent('.team_work2_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.team_work2_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#team_work2_id").val(data);
            });
        </script>

        <script>
            $('.team_work3_div td').click(function () {
                $(this).parent('.team_work3_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.team_work3_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#team_work3_id").val(data);
            });
        </script>

        <script>
            $('.work_standard1_div td').click(function () {
                $(this).parent('.work_standard1_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.work_standard1_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#work_standard1_id").val(data);
            });
        </script>

        <script>
            $('.work_standard2_div td').click(function () {
                $(this).parent('.work_standard2_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.work_standard2_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#work_standard2_id").val(data);
            });
        </script>

        <script>
            $('.work_standard3_div td').click(function () {
                $(this).parent('.work_standard3_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.work_standard3_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#work_standard3_id").val(data);
            });
        </script>

        <script>
            $('.motivation1_div td').click(function () {
                $(this).parent('.motivation1_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.motivation1_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#motivation1_id").val(data);
            });
        </script>

        <script>
            $('.motivation2_div td').click(function () {
                $(this).parent('.motivation2_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.motivation2_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#motivation2_id").val(data);
            });
        </script>

        <script>
            $('.motivation3_div td').click(function () {
                $(this).parent('.motivation3_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.motivation3_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#motivation3_id").val(data);
            });
        </script>

        <script>
            $('.reliable1_div td').click(function () {
                $(this).parent('.reliable1_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.reliable1_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#reliable1_id").val(data);
            });
        </script>

        <script>
            $('.reliable2_div td').click(function () {
                $(this).parent('.reliable2_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.reliable2_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#reliable2_id").val(data);
            });
        </script>

        <script>
            $('.reliable3_div td').click(function () {
                $(this).parent('.reliable3_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.reliable3_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#reliable3_id").val(data);
            });
        </script>

        <script>
            $('.problem1_div td').click(function () {
                $(this).parent('.problem1_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.problem1_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#problem1_id").val(data);
            });
        </script>

        <script>
            $('.problem2_div td').click(function () {
                $(this).parent('.problem2_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.problem2_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#problem2_id").val(data);
            });
        </script>

        <script>
            $('.problem3_div td').click(function () {
                $(this).parent('.problem3_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.problem3_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#problem3_id").val(data);
            });
        </script>

        <script>
            $('.adapt1_div td').click(function () {
                $(this).parent('.adapt1_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.adapt1_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#adapt1_id").val(data);
            });
        </script>

        <script>
            $('.adapt2_div td').click(function () {
                $(this).parent('.adapt2_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.adapt2_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#adapt2_id").val(data);
            });
        </script>

        <script>
            $('.adapt3_div td').click(function () {
                $(this).parent('.adapt3_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.adapt3_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#adapt3_id").val(data);
            });
        </script>

        <script>
            $('.plan1_div td').click(function () {
                $(this).parent('.plan1_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.plan1_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#plan1_id").val(data);
            });
        </script>

        <script>
            $('.plan2_div td').click(function () {
                $(this).parent('.plan2_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.plan2_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#plan2_id").val(data);
            });
        </script>

        <script>
            $('.plan3_div td').click(function () {
                $(this).parent('.plan3_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.plan3_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#plan3_id").val(data);
            });
        </script>

        <script>
            $('.comm1_div td').click(function () {
                $(this).parent('.comm1_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.comm1_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#comm1_id").val(data);
            });
        </script>

        <script>
            $('.comm2_div td').click(function () {
                $(this).parent('.comm2_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.comm2_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#comm2_id").val(data);
            });
        </script>

        <script>
            $('.comm3_div td').click(function () {
                $(this).parent('.comm3_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.comm3_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#comm3_id").val(data);
            });
        </script>

        <script>
            $('.ineger1_div td').click(function () {
                $(this).parent('.ineger1_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.ineger1_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#ineger1_id").val(data);
            });
        </script>

        <script>
            $('.ineger2_div td').click(function () {
                $(this).parent('.ineger2_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.ineger2_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#ineger2_id").val(data);
            });
        </script>

        <script>
            $('.ineger3_div td').click(function () {
                $(this).parent('.ineger3_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.ineger3_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#ineger3_id").val(data);
            });
        </script>

        <script>
            $('.initiate1_div td').click(function () {
                $(this).parent('.initiate1_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.initiate1_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#initiate1_id").val(data);
            });
        </script>

        <script>
            $('.initiate2_div td').click(function () {
                $(this).parent('.initiate2_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.initiate2_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#initiate2_id").val(data);
            });
        </script>

        <script>
            $('.initiate3_div td').click(function () {
                $(this).parent('.initiate3_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.initiate3_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#initiate3_id").val(data);
            });
        </script>

        <script>
            $('.stress1_div td').click(function () {
                $(this).parent('.stress1_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.stress1_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#stress1_id").val(data);
            });
        </script>

        <script>
            $('.stress2_div td').click(function () {
                $(this).parent('.stress2_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.stress2_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#stress2_id").val(data);
            });
        </script>

        <script>
            $('.stress3_div td').click(function () {
                $(this).parent('.stress3_div').children('td').css('background', '#f5f5f5');
                $(this).parent('.stress3_div').children('td').css('color', '#6b6967');
                var title = $(this).attr('title');
                if (title == '1') {
                    $(this).css('background', 'red');
                    $(this).css('color', '#fff');
                }
                if (title == '2') {
                    $(this).css('background', '#f3b014');
                    $(this).css('color', '#fff');
                }
                if (title == '3') {
                    $(this).css('background', 'yellow');
                    $(this).css('color', '#000');
                }
                if (title == '4') {
                    $(this).css('background', 'yellowgreen');
                    $(this).css('color', '#000');
                }
                if (title == '5') {
                    $(this).css('background', 'green');
                    $(this).css('color', '#fff');
                }
                if (title == '0') {
                    $(this).css('background', '#545151');
                    $(this).css('color', '#fff');
                }
                var data = (title * 20);
                $("#stress3_id").val(data);
            });
        </script>

        <script>
            $(document).ready(function () {
                $('.progress .progress-bar').css("width",
                        function () {
                            return $(this).attr("aria-valuenow") + "%";
                        }
                );
            });
        </script>   
        <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
        <script>
            $('.phone').inputmask("1-(999) 999-9999");
        </script>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(document).ready(function () {
                if ($('[type="date"]').prop('type') != 'date') {
                    $('[type="date"]').datepicker();
                }
            });
        </script>

    </body>
</html>