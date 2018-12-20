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
                            <a><i class="fa fa-envelope" aria-hidden="true"></i>   &nbsp; info@mycareerdashboard.com</a>
                            <div class="pull-right" id="google_translate_element"></div>
                        </li>
                    </ul>
                </div>
                <div class="w3l_header_right">
                </div>
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

                    <?php foreach ($results as $result) { ?>   
                    <form method="post">
                        <div class="row">

                            <div class="col-md-6 well">  
                                <fieldset class="form-group">
                                    <label for="recipetitle">Company Name:</label>
                                    <input type="text" name="company_name" class="form-control" value="<?php echo $result['verify_reference']['business_name'] ?>"></input>
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
                                    <input type="text" name="contact_num" class="form-control phone" value="<?php echo $result['verify_reference']['contact_number'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">EXT:</label>
                                    <input type="number" min="0" class="form-control" name="ext">
                                </fieldset>
                            </div>

                            <div class="col-md-6 well">
                                <fieldset class="form-group">
                                    <label for="recipetitle">Name:</label>
                                    <input type="text" name="call_date" class="form-control" value="<?php echo $result['register']['first_name'] ." ". $result['register']['last_name'] ?>"/>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Date of Birth:</label>
                                    <input type="text" name="call_start" class="form-control" value="<?php echo $result['register']['dob'] ?>"/>
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
                                        <option value="owner" <?php echo ($result['verify_reference']['associated_with_employee'] == 'owner' ? 'selected="selected"' : '') ?>> Owner Of Business</option>
                                        <option value="supervisor" <?php echo ($result['verify_reference']['associated_with_employee'] == 'supervisor' ? 'selected="selected"' : '') ?>>Supervisor</option>
                                        <option value="other" <?php echo ($result['verify_reference']['associated_with_employee'] == 'other' ? 'selected="selected"' : '') ?>>Other</option>
                                    </select>
                                    <textarea type="text" name="commment" class="form-control" id="cmnt" placeholder="other.."><?php echo $result['verify_reference']['employee_comment_other'] ?></textarea>
                                </fieldset>
                                <fieldset>
                                    <textarea type="text" class="form-control" name="capacity_comment" placeholder="comment.."><?php echo $result['verify_reference']['associated_with_employee_comment'] ?></textarea>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Since what date</label>
                                            <input type="date" class="form-control" name="from_date" value="<?php echo $result['verify_reference']['join_date'] ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label>&nbsp;</label><br/>
                                            <input type="date" class="form-control" name="to_date" value="<?php echo $result['verify_reference']['release_date'] ?>">
                                        </div>
                                    </div>
                                    <br>
                                </fieldset>    
                            </div>
                            <div class="well">
                                <fieldset>
                                    <label>In what capacity was the applicant employed? </label><br>
                                    <input type="checkbox" name="applicat_employed[]" value="Full Time" <?php echo ($result['verify_reference']['job_type'] == 'Full Time' ? 'checked' : '') ?>> Full Time<br>
                                    <input type="checkbox" name="applicat_employed[]" value="Part Time" <?php echo ($result['verify_reference']['job_type'] == 'Part Time' ? 'checked' : '') ?>> Part Time<br>
                                    <input type="checkbox" name="applicat_employed[]" value="Seasonal" <?php echo ($result['verify_reference']['job_type'] == 'Seasonal' ? 'checked' : '') ?>> Seasonal <br>
                                    <input type="checkbox" name="applicat_employed[]" value="Temp" <?php echo ($result['verify_reference']['job_type'] == 'Temp' ? 'checked' : '') ?>> Temp <br>
                                    <input type="checkbox" name="applicat_employed[]" value="Other" <?php echo ($result['verify_reference']['job_type'] == 'Other' ? 'checked' : '') ?>> Other<br>
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
                                        <option value="">Select Salary Range</option>
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
                                    <input type="radio" name="duty" value="Yes" <?php echo ($result['verify_reference']['duties_successful'] == 'Yes' ? 'checked' : '') ?>> Yes<br>
                                    <input type="radio" name="duty" value="No" <?php echo ($result['verify_reference']['duties_successful'] == 'No' ? 'checked' : '') ?>> No
                                </fieldset>
                                <fieldset>
                                    <textarea class="form-control" name="duties_comment" placeholder="Comments:"><?php echo $result['verify_reference']['duties_successful_comment'] ?></textarea>
                                </fieldset>
                                <br>
                            </div>

                            <div class="well">
                                <fieldset>
                                    <label>What was it like to supervise the applicant?</label><br>
                                    <select class="form-control" name="supervise">
                                        <option value="">Select</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Difficult' ? 'selected="selected"' : '') ?>>Difficult</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Good' ? 'selected="selected"' : '') ?>>Good</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Very Good' ? 'selected="selected"' : '') ?>>Very Good</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Excellent' ? 'selected="selected"' : '') ?>>Excellent</option>
                                    </select>	
                                </fieldset>

                                <br>
                            </div>

                            <div class="well">

                                <fieldset>
                                    <br>
                                    <label>Was the applicant a valuable member of the team?<br/>
                                        <input type="radio" value="Yes" name="team_member" <?php echo ($result['verify_reference']['valuable_member'] == 'Yes' ? 'checked' : '') ?>> yes<br>
                                        <input type="radio" id="no" value="No" name="team_member"<?php echo ($result['verify_reference']['valuable_member'] == 'No' ? 'checked' : '') ?>> No
                                    </label>
                                </fieldset>
                                <fieldset>
                                    <textarea class="form-control" name="explain" placeholder="Please explain ?" id="please_exp"><?php echo $result['verify_reference']['valuable_member_not_reason'] ?></textarea>
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
                                    </br>
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
                                        <input type="radio" name="absenteeism" value="Ok" <?php echo ($result['verify_reference']['absent_record'] == 'Ok' ? 'checked' : '') ?>>  Ok<br>
                                        <input type="radio" name="absenteeism" value="Needs Improvment" <?php echo ($result['verify_reference']['absent_record'] == 'Needs Improvment' ? 'checked' : '') ?>> Needs Improvment<br><br>
                                        <label for="absent_id" class="btn btn-default" value="No Comment"> No Comment</label>
                                        <input type="radio" name="absenteeism" id="absent_id" style="display:none;">
                                    </label>
                                </fieldset>


                            </div>
                            <div class="well">

                                <fieldset>
                                    </br>
                                    <label>Did you ever find it necessary to reprimand or discipline this person<br>
                                        <input type="radio" id="discipline_person" value="Yes" name="descipline" id="discipline_person" <?php echo ($result['verify_reference']['descipline'] == 'Yes' ? 'checked' : '') ?>> Yes<br>
                                        <input type="radio" value="No" name="descipline" <?php echo ($result['verify_reference']['descipline'] == 'No' ? 'checked' : '') ?>> No<br>
                                    </label>

                                </fieldset>
                                <fieldset id="circumstances">
                                    <br>
                                    <label>If so, what were the circumstances? </label>  <br>
                                    <textarea class="form-control" name="circumstance" placeholder=" comments.."><?php echo $result['verify_reference']['circumstances'] ?></textarea><br/>
                                    <button type="button" class="btn btn-default"> No Comment</button>					
                                </fieldset>


                            </div>

                            <div class="well">

                                <fieldset>
                                    </br>
                                    <label>Considering the job being applied for, do you think the applicant is suitable?<br>
                                        <input type="radio" value="Yes" name="applicable" <?php echo ($result['verify_reference']['applicant_suitable'] == 'Yes' ? 'checked' : '') ?>> Yes<br>
                                        <input type="radio" value="No" name="applicable" <?php echo ($result['verify_reference']['applicant_suitable'] == 'No' ? 'checked' : '') ?>> No<br>

                                        <label for="suitable_id" class="btn btn-default" value="not applicable"> Not Applicable</label>
                                        <input type="radio" name="applicable" id="suitable_id" style="display: none;">

                                    </label>
                                </fieldset>


                            </div>
                            <div class="well">

                                <fieldset>
                                    </br>
                                    <label>Why did they leave your employment?</br>
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
                                        <input type="radio" id="rehire_candidate_yes" name="rehire" value="Yes" id="rehire_candidate_yes" <?php echo ($result['verify_reference']['rehire'] == 'Yes' ? 'checked' : '') ?>> Yes</br>
                                        <input type="radio" id="rehire_candidate_no" name="rehire" value="No" id="rehire_candidate_no" <?php echo ($result['verify_reference']['rehire'] == 'No' ? 'checked' : '') ?>> No</br>
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
                                </br>
                                <fieldset>

                                    <label for="rehire_candidate">Is there anything else you would like to add? </label><br>

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

                                <p align="right">
                                    <button type="submit" class="btn btn-info" name="" value="">Save and post</button>
                                </p>

                            </div>
                        </div>  
                    <?php } elseif ($ref_name == 'personnel_verification') { ?>

                        <div>
                            <div class="well">
                                <fieldset>
                                    <label>When was the last time you had contact with the applicant</label>                                    
                                    <input type="text" class="form-control" name="contact_applicant" placeholder="Comment" value="<?php echo $result['verify_reference']['last_time_contact'] ?>"/>
                                </fieldset><br/>

                                <fieldset>
                                    <label>How does the applicant get along with people</label>                                    
                                    <textarea type="text" class="form-control" name="get_people" placeholder="Comment"><?php echo $result['verify_reference']['applicant_get_along'] ?></textarea>
                                </fieldset><br/>                                
                                <fieldset>
                                    <label>How would you describe the applicant’s friends and associates </label>                                    
                                    <textarea type="text" class="form-control" name="applicant_friend" placeholder="Comment"><?php echo $result['verify_reference']['applicant_friend'] ?></textarea>
                                </fieldset><br/>
                                <fieldset>
                                    <label>How does the applicant react in stressful situations </label>                                    
                                    <textarea type="text" class="form-control" name="stressful" placeholder="Comment"><?php echo $result['verify_reference']['stressful_situation'] ?></textarea>
                                </fieldset>
                                <fieldset>                                   
                                    <br>
                                </fieldset>   
                            </div>                                                                      

                            <div class="well">
                                <fieldset>
                                    <label>Is there any reason why you wouldn’t trust the applicant with confidential information </label>                                    
                                    <textarea type="text" class="form-control" name="not_trust" placeholder="Comment"><?php echo $result['verify_reference']['not_trust'] ?></textarea>
                                </fieldset>
                                <fieldset><br/>
                                    <label>Do you have any reason to question the applicant’s reliability </label> <br>
                                    <select name="applicant_reliability" class="form-control">
                                        <option value="">Select</option>
                                        <option <?php echo ($result['verify_reference']['applicant_reliability'] == 'Yes' ? 'selected="selected"' : '') ?>>Yes</option>
                                        <option <?php echo ($result['verify_reference']['applicant_reliability'] == 'No' ? 'selected="selected"' : '') ?>>No</option>                                        
                                    </select>                                    
                                </fieldset><br/>
                                <fieldset>                                    
                                    <textarea type="text" name="relable_comment" class="form-control" placeholder="Comment"><?php echo $result['verify_reference']['applicant_reliability_comment'] ?></textarea>
                                </fieldset>   
                            </div>                       

                            <div class="well">
                                <fieldset>
                                    <label>Do you have any reason to question the applicant’s honesty or character </label> <br>
                                    <select name="applicant_character" class="form-control">
                                        <option value="">Select</option>
                                        <option <?php echo ($result['verify_reference']['applicant_character'] == 'Yes' ? 'selected="selected"' : '') ?>>Yes</option>
                                        <option <?php echo ($result['verify_reference']['applicant_character'] == 'No' ? 'selected="selected"' : '') ?>>No</option>                                        
                                    </select>                                    
                                </fieldset><br/>
                                <fieldset>                                    
                                    <textarea type="text" class="form-control" name="character_comment" placeholder="Comment"><?php echo $result['verify_reference']['applicant_character_comment'] ?></textarea>
                                </fieldset>
                                <fieldset>                                   
                                    <br>
                                </fieldset>    
                            </div>

                            <div class="well">
                                <fieldset>
                                    <label>Do you know of anything about the applicant that should be investigated</label> <br>
                                    <select name="investigated" class="form-control">
                                        <option value="">Select</option>
                                        <option <?php echo ($result['verify_reference']['investigated'] == 'Yes' ? 'selected="selected"' : '') ?>>Yes</option>
                                        <option <?php echo ($result['verify_reference']['investigated'] == 'No' ? 'selected="selected"' : '') ?>>No</option>                                        
                                    </select>                                     
                                </fieldset>                                
                                <fieldset>                                   
                                    <br>
                                </fieldset>    
                            </div>

                            <div class="well">
                                <fieldset>
                                    <label>Do you recommend the applicant for a position </label> <br>
                                    <select name="applicant_position" class="form-control">
                                        <option value="">Select</option>
                                        <option <?php echo ($result['verify_reference']['applicant_position'] == 'Yes' ? 'selected="selected"' : '') ?>>Yes</option>
                                        <option <?php echo ($result['verify_reference']['applicant_position'] == 'No' ? 'selected="selected"' : '') ?>>No</option>                                        
                                    </select>                                    
                                </fieldset><br/>
                                <fieldset>                                    
                                    <textarea type="text" name="position_comment" class="form-control" placeholder="Comment"><?php echo $result['verify_reference']['applicant_position_comment'] ?></textarea>
                                </fieldset>
                                <fieldset>                                   
                                    <br>
                                </fieldset>   
                            </div>

                            <div class="well">
                                <fieldset>
                                    <label>Is there anything else you would like to add </label>
                                    <textarea type="text" name="anything_else" class="form-control" placeholder="Comment"><?php echo $result['verify_reference']['anything_else'] ?></textarea>                                                                       
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

                                <p align="right">
                                    <button type="submit" class="btn btn-info" name="" value="">Save and post</button>
                                </p>

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

                                <p align="right">
                                    <button type="submit" class="btn btn-info" name="" value="">Save and post</button>
                                </p>

                            </div>

                        </div>
                    <?php } ?>
                </div>
                </form>
                <?php } ?>

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

        <?php echo $this->Html->script('industry/bootstrap/js/bootstrap.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/fastclick/fastclick.js') ?>
        <?php echo $this->Html->script('industry/dist/js/app.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/sparkline/jquery.sparkline.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>
        <?php echo $this->Html->script('industry/plugins/slimScroll/jquery.slimscroll.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/chartjs/Chart.min.js') ?>
        <?php echo $this->Html->script('industry/dist/js/demo.js') ?>

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