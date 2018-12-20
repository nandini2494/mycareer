<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <?php echo $this->Html->css('industry/bootstrap/css/bootstrap.min.css') ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
      <?php echo $this->Html->css('industry/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
      <?php echo $this->Html->css('industry/dist/css/AdminLTE.min.css') ?>
      <?php echo $this->Html->css('industry/dist/css/skins/_all-skins.min.css') ?>

    </head>
    <body>
        <div class="w3ls_header_top">
            <div class="container">
                <div class="w3l_header_left">
                    <ul class="w3layouts_header">
                        <li class="w3layouts_header_list">
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; info@mycareerdashboard.com</a>
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

                <a href="reference_check.html" class="logo">
                    <span class="logo-lg">
                        <img src="<?php echo DOMAIN_NAME ?>img/co-logo.png" class="img-responsive images_use_res">
                    </span>
                </a>


            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 well">

                  <?php foreach ($results as $result) { ?>
                    <div class="row">
                        <div class="col-md-6 well <?php echo ($result['verify_reference']['verify_section_1'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post">
                                <input type="hidden" name="form_name" value="Form_1">    
                                <fieldset class="form-group">
                                    <label for="recipetitle">Company Name:</label>
                                    <input type="text" class="form-control" value="<?php echo $result['verify_reference']['business_name'] ?>" required></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Company Address:</label>
                                    <input type="text" class="form-control" value="<?php echo $result['verify_reference']['business_address'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Company Telephone:</label>
                                    <input type="tel" class="form-control" value="<?php echo $result['verify_reference']['bussiness_phone'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Email Address:</label>
                                    <input type="text" class="form-control" value="<?php echo $result['verify_reference']['website'] ?>" required></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Name Of Contact:</label>
                                    <input type="text" class="form-control" value="<?php echo $result['verify_reference']['person_name'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Telephone:</label>
                                    <input type="tel" class="form-control" value="<?php echo $result['verify_reference']['contact_number'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">EXT:</label>
                                    <input type="number" name="ext" class="form-control">                           
                                </fieldset>
                                <p align="right">
                           <?php if($result['verify_reference']['verify_section_1'] == 'verify') { ?> 
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_1'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe1"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                           <?php } else { ?>
                                    <button type="submit" class="btn btn-default" name="save_recipe1" value="verify">VERIFIED</button>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_1'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe1" value="not verify">COULD NOT VERIFY</button>
                           <?php } ?> 
                                </p>
                            </form>
                        </div>
                        <div class="col-md-6 well <?php echo ($result['verify_reference']['verify_section_2'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post"> 
                                <input type="hidden" name="form_name" value="Form_2">
                                <fieldset class="form-group">
                                    <label for="recipetitle">Name:</label>
                                    <input type="text" name="call_date" class="form-control"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Date of Birth:</label>
                                    <input type="text" name="call_start" class="form-control"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Employee Number:</label>
                                    <input type="text" name="call_end" class="form-control"></input>
                                </fieldset>
                                <p align="right">
                           <?php if($result['verify_reference']['verify_section_2'] == 'verify') { ?> 
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_2'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe2"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                           <?php } else { ?> 
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_2'] == 'verify' ? 'active' : '') ?>" name="save_recipe2" value="verify">VERIFIED</button>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_2'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe2" value="not verify">COULD NOT VERIFY</button>
                           <?php } ?>
                                </p>
                            </form>
                        </div>
                    </div>

                <?php if($ref_name == 'workplace_verification') { ?>
                    <div>
                        <div class="well <?php echo ($result['verify_reference']['verify_section_3'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post"> 
                                <input type="hidden" name="form_name" value="Form_3">
                                <fieldset>
                                    <label>In what capacity were you associated with the applicant </label>
                                    <select name="list" id="capacity_ass" class="form-controls">
                                        <option value="owner" <?php echo ($result['verify_reference']['associated_with_employee'] == 'owner' ? 'selected="selected"' : '') ?>>Owner Of Business</option>
                                        <option value="supervisor" <?php echo ($result['verify_reference']['associated_with_employee'] == 'supervisor') ? 'selected="selected"' : '' ?>>Supervisor</option>
                                        <option value="other" <?php echo ($result['verify_reference']['associated_with_employee'] == 'other') ? 'selected="selected"' : '' ?>>Other</option>
                                    </select>
                                    <textarea type="text" class="form-control" name="other" id="cmnt" placeholder="other.."><?php echo $result['verify_reference']['employee_comment_other'] ?></textarea>
                                </fieldset>
                                <fieldset>
                                    <textarea type="text" class="form-control" name="comment" placeholder="comment.."><?php echo $result['verify_reference']['associated_with_employee_comment'] ?></textarea>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Since what date</label>
                                            <input type="date" class="form-control" value="<?php echo $result['verify_reference']['join_date'] ?>"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label>&nbsp;</label><br/>
                                            <input type="date" class="form-control" value="<?php echo $result['verify_reference']['release_date'] ?>"></input>
                                        </div>
                                    </div>
                                    </br>
                                    <p align="right">
                            <?php if($result['verify_reference']['verify_section_3'] == 'verify') { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_3'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe3"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                            <?php } else { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_3'] == 'verify' ? 'active' : '') ?>" name="save_recipe3" value="verify">VERIFIED</button>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_3'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe3" value="not verify">COULD NOT VERIFY</button>
                            <?php } ?>
                                    </p>
                                </fieldset>
                            </form>     
                        </div>
                        <div class="well <?php echo ($result['verify_reference']['verify_section_4'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post">
                                <input type="hidden" name="form_name" value="Form_4">
                                <fieldset>
                                    <label>In what capacity was the applicant employed? </label></br>
                                    <input type="checkbox" <?php echo ($result['verify_reference']['job_type'] == 'Full Time' ? 'checked' : '') ?>> Full Time</br>
                                    <input type="checkbox" <?php echo ($result['verify_reference']['job_type'] == 'Part Time' ? 'checked' : '') ?>> Part Time</br>
                                    <input type="checkbox" <?php echo ($result['verify_reference']['job_type'] == 'Seasonal' ? 'checked' : '') ?>> Seasonal </br>
                                    <input type="checkbox" <?php echo ($result['verify_reference']['job_type'] == 'Temp' ? 'checked' : '') ?>> Temp </br>
                                    <input type="checkbox" <?php echo ($result['verify_reference']['job_type'] == 'Other' ? 'checked' : '') ?>> Other</br>
                                </fieldset>
                                <fieldset>
                                    <label>Comments:</label>
                                    <textarea class="form-control" name="comment" placeholder="Comments:"><?php echo $result['verify_reference']['employed_comment'] ?></textarea>
                                </fieldset>
                                </br>
                                <p align="right">
                                <?php if($result['verify_reference']['verify_section_4'] == 'verify') { ?>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_4'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe4"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                                <?php } else { ?>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_4'] == 'verify' ? 'active' : '') ?>" name="save_recipe4" value="verify">VERIFIED</button>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_4'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe4" value="not verify">COULD NOT VERIFY</button>
                                <?php } ?>
                                </p>
                            </form>
                        </div>
                        <div class="well <?php echo ($result['verify_reference']['verify_section_5'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post"> 
                                <input type="hidden" name="form_name" value="Form_5">

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
                                </br>
                                <p align="right">
                                <?php if($result['verify_reference']['verify_section_5'] == 'verify') { ?>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_5'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe5"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                                <?php } else { ?>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_5'] == 'verify' ? 'active' : '') ?>" name="save_recipe5" value="verify">VERIFIED</button>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_5'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe5" value="not verify">COULD NOT VERIFY</button>
                                <?php } ?>
                                </p>
                            </form>
                        </div>
                        <div class="well <?php echo ($result['verify_reference']['verify_section_6'] == 'verify' ? 'verify_class' : '') ?>">                    
                            <form method="post"> 
                                <input type="hidden" name="form_name" value="Form_6">
                                <fieldset>
                                    <label>REASON COULD NOT VERIFY?</label>
                                    <textarea class="form-control" name="reason" placeholder="Comments:"><?php echo $result['verify_reference']['not_verify_reason'] ?></textarea>
                                </fieldset>
                                <fieldset>
                                    <br>
                                    <label> Was the applicant successful in fulfilling his or her duties?</label><br>
                                    <input type="checkbox" name="duty" value="Yes"> Yes<br>
                                    <input type="checkbox" name="duty" value="No"> No
                                </fieldset>
                                <fieldset>
                                    <textarea class="form-control" name="comment" placeholder="Comments:"><?php echo $result['verify_reference']['duties_successful_comment'] ?></textarea>
                                </fieldset>
                                </br>
                                <p align="right">
                                <?php if($result['verify_reference']['verify_section_6'] == 'verify') { ?>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_6'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe6"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                                <?php } else { ?>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_6'] == 'verify' ? 'active' : '') ?>" name="save_recipe6" value="verify">VERIFIED</button>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_6'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe6" value="not verify">COULD NOT VERIFY</button>
                                <?php } ?>
                                </p>
                            </form>
                        </div>


                        <div class="well <?php echo ($result['verify_reference']['verify_section_7'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post">
                                <input type="hidden" name="form_name" value="Form_7">    
                                <fieldset>
                                    <label>What was it like to supervise the applicant?</label></br>
                                    <select class="form-control" name="comment">
                                        <option value="">Select</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Difficult' ? 'selected="selected"' : '') ?>>Difficult</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Good' ? 'selected="selected"' : '') ?>>Good</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Very Good' ? 'selected="selected"' : '') ?>>Very Good</option>
                                        <option <?php echo ($result['verify_reference']['supervise_applicant'] == 'Excellent' ? 'selected="selected"' : '') ?>>Excellent</option>
                                    </select>
                                </fieldset>

                                </br>
                                <p align="right">
                                <?php if($result['verify_reference']['verify_section_7'] == 'verify') { ?>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_7'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe7"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                                <?php } else { ?>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_7'] == 'verify' ? 'active' : '') ?>" name="save_recipe7" value="verify">VERIFIED</button>
                                    <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_7'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe7" value="not verify">COULD NOT VERIFY</button>
                                <?php } ?>
                                </p>    `
                            </form>
                        </div>

                        <form method="post">
                            <input type="hidden" name="form_name" value="Form_8">
                            <div class="well <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'verify_class' : '') ?>">

                                <fieldset>
                                    <br>
                                    <label for="no">Was the applicant a valuable member of the team?<br>
                                        <input type="checkbox" name="team_member" value="Yes"> yes<br>
                                        <input type="checkbox" id="no" name="team_member" value="No" <?php echo ($result['verify_reference']['valuable_member'] == 'No' ? 'checked' : '') ?>> No
                                    </label>
                                </fieldset>
                                <fieldset>
                                    <textarea class="form-control" name="explain" placeholder=" Please explain ?" id="please_exp"><?php echo $result['verify_reference']['valuable_member_not_reason'] ?></textarea>
                                </fieldset>

                            </div>

                            <div class="well <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'verify_class' : '') ?>">

                                <fieldset>
                                    <br>
                                    <label>What unique skill did the candidate bring to your organization?</label></br>

                                </fieldset>
                                <fieldset>
                                    <textarea class="form-control" name="skill_comment" placeholder="Comments:"><?php echo $result['verify_reference']['unique_skill'] ?></textarea>
                                </fieldset>

                            </div>
                            <div class="well <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'verify_class' : '') ?>">

                                <fieldset>
                                    <br>
                                    <label>What were their strengths?</label></br>

                                </fieldset>
                                <fieldset>
                                    <textarea class="form-control" name="strenght_comment" placeholder="Comments:"><?php echo $result['verify_reference']['strength'] ?></textarea>
                                </fieldset>

                            </div>

                            <div class="well <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'verify_class' : '') ?>">
                                <fieldset>
                                    <label>What were their weaknesses or areas that needed improvement?</label><br>
                                </fieldset><br>
                                <div class="row">
                                    <div class="col-md-6">

                                        <label>Weaknesses :</label>

                                        <button type="button" class="btn btn-default" name="weakness" value="no comment">No Comment </button>
                                        <button type="button" class="btn btn-default"  name="weakness" value="dna">DNA</button>

                                    </div>
                                    <div class="col-md-6">

                                        <label>Improvements:</label>

                                        <button type="button" class="btn btn-default" name="improvement" value="no comment">No Comment </button>
                                        <button type="button" class="btn btn-default"  name="improvement" value="dna">DNA</button>

                                    </div>
                                </div>

                            </div>

                            <div class="well <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'verify_class' : '') ?>">

                                <fieldset>
                                    <br>
                                    <label for="no">How would they describe this applicant's absenteeism record in relation to other employees?</br>
                                        <input type="checkbox" name="absenteeism" value="Very Good" <?php echo ($result['verify_reference']['absent_record'] == 'Very Good' ? 'checked' : '') ?>> Very Good<br>
                                        <input type="checkbox" name="absenteeism" value="Good" <?php echo ($result['verify_reference']['absent_record'] == 'Good' ? 'checked' : '') ?>> Good<br>
                                        <input type="checkbox" name="absenteeism" value="Ok" <?php echo ($result['verify_reference']['absent_record'] == 'Ok' ? 'checked' : '') ?>> Ok<br>
                                        <input type="checkbox" name="absenteeism" value="Needs Improvment" <?php echo ($result['verify_reference']['absent_record'] == 'Needs Improvment' ? 'checked' : '') ?>> Needs Improvment<br>
                                        <button type="button" name="absenteeism" class="btn btn-default" value="no comment"> No Comment</button>						
                                    </label>
                                </fieldset>

                            </div>
                            <div class="well <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'verify_class' : '') ?>">

                                <fieldset>
                                    <br>
                                    <label for="no">Did you ever find it necessary to reprimand or discipline this person<br>
                                        <input type="checkbox" id="discipline_person" name="descipline" value="Yes" <?php echo ($result['verify_reference']['descipline'] == 'Yes' ? 'checked' : '') ?>> Yes<br>
                                        <input type="checkbox" name="descipline" value="No" <?php echo ($result['verify_reference']['descipline'] == 'No' ? 'checked' : '') ?>> No<br>

                                    </label>

                                </fieldset>

                                <fieldset id="circumstances">
                                    <br>
                                    <label for="no">If so, what were the circumstances? </label>  <br>
                                    <textarea class="form-control" name="circumstance" placeholder=" comments.."><?php echo $result['verify_reference']['circumstances'] ?></textarea><br>

                                    <button type="button" name="circumstance" class="btn btn-default" value="no comment"> No Comment</button>									

                                </fieldset>

                            </div>

                            <div class="well <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'verify_class' : '') ?>">

                                <fieldset>
                                    <br>
                                    <label for="no">Considering the job being applied for, do you think the applicant is suitable?</br>
                                        <input type="checkbox" name="applicable" value="Yes" <?php echo ($result['verify_reference']['applicant_suitable'] == 'Yes' ? 'checked' : '') ?>> Yes<br>
                                        <input type="checkbox" name="applicable" value="No" <?php echo ($result['verify_reference']['applicant_suitable'] == 'No' ? 'checked' : '') ?>> No<br>						  
                                        <button type="button" name="applicable" class="btn btn-default" value="not applicable"> Not Applicable</button>

                                    </label>
                                </fieldset>

                            </div>
                            <div class="well <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'verify_class' : '') ?>">

                                <fieldset>
                                    </br>
                                    <label for="no">Why did they leave your employment?<br>
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

                            <div class="well <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'verify_class' : '') ?>">				  
                                <fieldset>
                                    <br>
                                    <label for="rehire_candidate">Would you rehire the candidate?<br>
                                        <input type="checkbox" id="rehire_candidate_yes" name="rehire" value="Yes" <?php echo ($result['verify_reference']['rehire'] == 'Yes' ? 'checked' : '') ?>> Yes<br>
                                        <input type="checkbox" id="rehire_candidate_no" name="rehire" value="No" <?php echo ($result['verify_reference']['rehire'] == 'No' ? 'checked' : '') ?>> No<br>
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
                            <p align="right">
                        <?php if($result['verify_reference']['verify_section_8'] == 'verify') { ?>
                                <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe8"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                        <?php } else { ?>
                                <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'active' : '') ?>" name="save_recipe8" value="verify">VERIFIED</button>
                                <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_8'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe8" value="not verify">COULD NOT VERIFY</button>
                        <?php } ?> 
                            </p>
                        </form>
                    </div>  
                <?php } elseif ($ref_name == 'volunteer_verification') { ?>               

                    <div>
                        <div class="well <?php echo ($result['verify_reference']['verify_section_3'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post">
                                <input type="hidden" name="form_name" value="Form_3v">
                                <fieldset>
                                    <label>How long have you known this individual</label>                                    
                                    <textarea type="text" class="form-control" name="known_person" placeholder="Comment"><?php echo $result['verify_reference']['how_long_known'] ?></textarea>
                                </fieldset>
                                <fieldset>                                   
                                    </br>
                                    <p align="right">
                                    <?php if($result['verify_reference']['verify_section_3'] == 'verify') { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_3'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe3"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_3'] == 'verify' ? 'active' : '') ?>" name="save_recipe3" value="verify">VERIFIED</button>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_3'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe3" value="not verify">COULD NOT VERIFY</button>
                                    <?php } ?>
                                    </p>
                                </fieldset>
                            </form>    
                        </div>

                        <div class="well <?php echo ($result['verify_reference']['verify_section_4'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post">
                                <input type="hidden" name="form_name" value="Form_4v">
                                <fieldset>
                                    <label>In what capacity</label>
                                    <textarea type="text" name="capacity" class="form-control" placeholder="Comment"><?php echo $result['verify_reference']['what_capacity'] ?></textarea>                                    
                                </fieldset>
                                <fieldset>                                   
                                    </br>
                                    <p align="right">
                                    <?php if($result['verify_reference']['verify_section_4'] == 'verify') { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_4'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe4"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_4'] == 'verify' ? 'active' : '') ?>" name="save_recipe4" value="verify">VERIFIED</button>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_4'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe4" value="not verify">COULD NOT VERIFY</button>
                                    <?php } ?>
                                    </p>
                                </fieldset>
                            </form>    
                        </div>

                        <div class="well <?php echo ($result['verify_reference']['verify_section_5'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post">
                                <input type="hidden" name="form_name" value="Form_5v">
                                <fieldset>
                                    <label>How would you describe the applicant’s ability to work with and relate to their volunteer work </label>                                    
                                    <textarea type="text" name="work_ability" class="form-control" placeholder="Comment"><?php echo $result['verify_reference']['applicant_ability'] ?></textarea>
                                </fieldset>
                                <fieldset>                                   
                                    </br>
                                    <p align="right">
                                    <?php if($result['verify_reference']['verify_section_5'] == 'verify') { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_5'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe5"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_5'] == 'verify' ? 'active' : '') ?>" name="save_recipe5" value="verify">VERIFIED</button>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_5'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe5" value="not verify">COULD NOT VERIFY</button>
                                    <?php } ?>
                                    </p>
                                </fieldset>
                            </form>    
                        </div>

                        <div class="well <?php echo ($result['verify_reference']['verify_section_6'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post">
                                <input type="hidden" name="form_name" value="Form_6v">
                                <fieldset>
                                    <label>To the extent you know, please tell me about the applicant's roles with their role</label>                                    
                                    <textarea type="text" class="form-control" name="applicant_role" placeholder="school volunteer, youth coach, day care volunteer, youth group leader, etc"><?php echo $result['verify_reference']['applicant_role'] ?></textarea>
                                </fieldset>
                                <fieldset>                                   
                                    </br>
                                    <p align="right">
                                    <?php if($result['verify_reference']['verify_section_6'] == 'verify') { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_6'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe6"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_6'] == 'verify' ? 'active' : '') ?>" name="save_recipe6" value="verify">VERIFIED</button>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_6'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe6" value="not verify">COULD NOT VERIFY</button>
                                    <?php } ?>
                                    </p>
                                </fieldset>
                            </form>    
                        </div>

                        <div class="well <?php echo ($result['verify_reference']['verify_section_7'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post">
                                <input type="hidden" name="form_name" value="Form_7v">
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
                                    </br>
                                    <p align="right">
                                    <?php if($result['verify_reference']['verify_section_7'] == 'verify') { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_7'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe3"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_7'] == 'verify' ? 'active' : '') ?>" name="save_recipe7" value="verify">VERIFIED</button>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_7'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe7" value="not verify">COULD NOT VERIFY</button>
                                    <?php } ?>
                                    </p>
                                </fieldset>
                            </form>    
                        </div>

                        <div class="well <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'verify_class' : '') ?>">
                            <form method="post">
                                <input type="hidden" name="form_name" value="Form_8v">
                                <fieldset>
                                    <label>Would you have any reservations about recommending this person to serve as a program volunteer</label> 
                                    <textarea type="text" name="reservation" class="form-control" placeholder="Comment"><?php echo $result['verify_reference']['reservation'] ?></textarea>                                     
                                </fieldset>

                                <fieldset>                                   
                                    </br>
                                    <p align="right">
                                    <?php if($result['verify_reference']['verify_section_8'] == 'verify') { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'active' : '') ?>" value="verify" name="save_recipe8"> <i class="fa fa-check-circle check_sign" aria-hidden="true"></i> VERIFIED</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_8'] == 'verify' ? 'active' : '') ?>" name="save_recipe8" value="verify">VERIFIED</button>
                                        <button type="submit" class="btn btn-default <?php echo ($result['verify_reference']['verify_section_8'] == 'not verify' ? 'active' : '') ?>"  name="save_recipe8" value="not verify">COULD NOT VERIFY</button>
                                    <?php } ?>
                                    </p>
                                </fieldset>
                            </form>    
                        </div>

                    </div>
                <?php } ?>

                    <form>
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="action_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='action_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='action_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='action_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='action_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='action_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['key_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['key_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['key_rating1'] == '40' || $result['verify_reference']['key_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['key_rating1'] == '80' || $result['verify_reference']['key_rating1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['key_rating1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="action_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='action_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='action_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='action_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='action_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='action_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['key_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['key_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['key_rating2'] == '40' || $result['verify_reference']['key_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['key_rating2'] == '80' || $result['verify_reference']['key_rating2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['key_rating2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="action_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='action_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='action_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='action_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='action_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='action_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['key_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['key_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['key_rating3'] == '40' || $result['verify_reference']['key_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['key_rating3'] == '80' || $result['verify_reference']['key_rating3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['key_rating3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="team_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='team_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='team_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='team_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='team_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='team_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['teamwork_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['teamwork_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['teamwork_rating1'] == '40' || $result['verify_reference']['teamwork_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['teamwork_rating1'] == '80' || $result['verify_reference']['teamwork_rating1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['teamwork_rating1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="team_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='team_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='team_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='team_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='team_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='team_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['teamwork_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['teamwork_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['teamwork_rating2'] == '40' || $result['verify_reference']['teamwork_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['teamwork_rating2'] == '80' || $result['verify_reference']['teamwork_rating2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['teamwork_rating2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="team_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='team_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='team_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='team_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='team_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='team_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['teamwork_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['teamwork_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['teamwork_rating3'] == '40' || $result['verify_reference']['teamwork_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['teamwork_rating3'] == '80' || $result['verify_reference']['teamwork_rating3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['teamwork_rating3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="work_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='work_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='work_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='work_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='work_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='work_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['work_standard1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['work_standard1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['work_standard1'] == '40' || $result['verify_reference']['work_standard1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['work_standard1'] == '80' || $result['verify_reference']['work_standard1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['work_standard1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="work_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='work_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='work_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='work_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='work_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='work_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['work_standard2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['work_standard2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['work_standard2'] == '40' || $result['verify_reference']['work_standard2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['work_standard2'] == '80' || $result['verify_reference']['work_standard2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['work_standard2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="work_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='work_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='work_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='work_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='work_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='work_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['work_standard3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['work_standard3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['work_standard3'] == '40' || $result['verify_reference']['work_standard3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['work_standard3'] == '80' || $result['verify_reference']['work_standard3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['work_standard3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="motivation_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='motivation_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='motivation_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='motivation_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='motivation_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='motivation_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['motivatin_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['motivatin_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['motivatin_rating1'] == '40' || $result['verify_reference']['motivatin_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['motivatin_rating1'] == '80' || $result['verify_reference']['motivatin_rating1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['motivatin_rating1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="motivation_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='motivation_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='motivation_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='motivation_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='motivation_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='motivation_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['motivatin_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['motivatin_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['motivatin_rating2'] == '40' || $result['verify_reference']['motivatin_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['motivatin_rating2'] == '80' || $result['verify_reference']['motivatin_rating2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['motivatin_rating2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="motivation_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='motivation_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='motivation_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='motivation_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='motivation_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='motivation_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['motivatin_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['motivatin_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['motivatin_rating3'] == '40' || $result['verify_reference']['motivatin_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['motivatin_rating3'] == '80' || $result['verify_reference']['motivatin_rating3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['motivatin_rating3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="reliable_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='reliable_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='reliable_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='reliable_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='reliable_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='reliable_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['reliabilty_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['reliabilty_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['reliabilty_rating1'] == '40' || $result['verify_reference']['reliabilty_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['reliabilty_rating1'] == '80' || $result['verify_reference']['reliabilty_rating1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['reliabilty_rating1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="reliable_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='reliable_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='reliable_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='reliable_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='reliable_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='reliable_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['reliabilty_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['reliabilty_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['reliabilty_rating2'] == '40' || $result['verify_reference']['reliabilty_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['reliabilty_rating2'] == '80' || $result['verify_reference']['reliabilty_rating2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['reliabilty_rating2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="reliable_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='reliable_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='reliable_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='reliable_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='reliable_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='reliable_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['reliabilty_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['reliabilty_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['reliabilty_rating3'] == '40' || $result['verify_reference']['reliabilty_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['reliabilty_rating3'] == '80' || $result['verify_reference']['reliabilty_rating3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['reliabilty_rating3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="problem_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='problem_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='problem_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='problem_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='problem_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='problem_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['problem_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['problem_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['problem_rating1'] == '40' || $result['verify_reference']['problem_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['problem_rating1'] == '80' || $result['verify_reference']['problem_rating1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['problem_rating1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="problem_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='problem_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='problem_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='problem_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='problem_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='problem_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['problem_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['problem_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['problem_rating2'] == '40' || $result['verify_reference']['problem_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['problem_rating2'] == '80' || $result['verify_reference']['problem_rating2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['problem_rating2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="problem_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='problem_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='problem_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='problem_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='problem_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='problem_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['problem_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['problem_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['problem_rating3'] == '40' || $result['verify_reference']['problem_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['problem_rating3'] == '80' || $result['verify_reference']['problem_rating3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['problem_rating3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="adapt_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='adapt_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='adapt_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='adapt_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='adapt_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='adapt_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['adaptibility_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['adaptibility_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['adaptibility_rating1'] == '40' || $result['verify_reference']['adaptibility_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['adaptibility_rating1'] == '80' || $result['verify_reference']['adaptibility_rating1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['adaptibility_rating1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="adapt_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='adapt_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='adapt_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='adapt_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='adapt_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='adapt_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['adaptibility_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['adaptibility_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['adaptibility_rating2'] == '40' || $result['verify_reference']['adaptibility_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['adaptibility_rating2'] == '80' || $result['verify_reference']['adaptibility_rating2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['adaptibility_rating2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="adapt_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='adapt_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='adapt_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='adapt_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='adapt_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='adapt_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['adaptibility_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['adaptibility_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['adaptibility_rating3'] == '40' || $result['verify_reference']['adaptibility_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['adaptibility_rating3'] == '80' || $result['verify_reference']['adaptibility_rating3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['adaptibility_rating3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="plan_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='plan_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='plan_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='plan_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='plan_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='plan_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['plan_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['plan_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['plan_rating1'] == '40' || $result['verify_reference']['plan_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['plan_rating1'] == '80' || $result['verify_reference']['plan_rating1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['plan_rating1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="plan_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='plan_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='plan_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='plan_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='plan_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='plan_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['plan_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['plan_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['plan_rating2'] == '40' || $result['verify_reference']['plan_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['plan_rating2'] == '80' || $result['verify_reference']['plan_rating2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['plan_rating2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="plan_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='plan_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='plan_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='plan_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='plan_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='plan_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['plan_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['plan_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['plan_rating3'] == '40' || $result['verify_reference']['plan_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['plan_rating3'] == '80' || $result['verify_reference']['plan_rating3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['plan_rating3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="comm_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='comm_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='comm_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='comm_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='comm_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='comm_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['communication_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['communication_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['communication_rating1'] == '40' || $result['verify_reference']['communication_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['communication_rating1'] == '80' || $result['verify_reference']['communication_rating1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['communication_rating1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="comm_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='comm_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='comm_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='comm_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='comm_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='comm_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['communication_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['communication_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['communication_rating2'] == '40' || $result['verify_reference']['communication_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['communication_rating2'] == '80' || $result['verify_reference']['communication_rating2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['communication_rating2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="comm_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='comm_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='comm_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='comm_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='comm_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='comm_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['communication_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['communication_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['communication_rating3'] == '40' || $result['verify_reference']['communication_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['communication_rating3'] == '80' || $result['verify_reference']['communication_rating3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['communication_rating3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="integrity_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='integrity_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='integrity_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='integrity_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='integrity_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='integrity_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['integrity_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['integrity_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['integrity_rating1'] == '40' || $result['verify_reference']['integrity_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['integrity_rating1'] == '80' || $result['verify_reference']['integrity_rating1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['integrity_rating1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="integrity_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='integrity_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='integrity_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='integrity_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='integrity_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='integrity_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['integrity_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['integrity_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['integrity_rating2'] == '40' || $result['verify_reference']['integrity_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['integrity_rating2'] == '80' || $result['verify_reference']['integrity_rating2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['integrity_rating2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="integrity_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='integrity_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='integrity_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='integrity_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='integrity_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='integrity_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['integrity_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['integrity_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['integrity_rating3'] == '40' || $result['verify_reference']['integrity_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['integrity_rating3'] == '80' || $result['verify_reference']['integrity_rating3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['integrity_rating3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="initiate_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='initiate_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='initiate_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='initiate_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='initiate_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='initiate_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['initiative_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['initiative_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['initiative_rating1'] == '40' || $result['verify_reference']['initiative_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['initiative_rating1'] == '80' || $result['verify_reference']['initiative_rating1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['initiative_rating1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="initiate_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='initiate_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='initiate_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='initiate_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='initiate_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='initiate_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['initiative_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['initiative_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['initiative_rating2'] == '40' || $result['verify_reference']['initiative_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['initiative_rating2'] == '80' || $result['verify_reference']['initiative_rating2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['initiative_rating2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="initiate_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='initiate_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='initiate_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='initiate_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='initiate_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='initiate_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['initiative_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['initiative_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['initiative_rating3'] == '40' || $result['verify_reference']['initiative_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['initiative_rating3'] == '80' || $result['verify_reference']['initiative_rating3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['initiative_rating3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="stress_01"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='stress_02'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='stress_03'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='stress_04'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='stress_05'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='stress_06'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['stress_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['stress_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['stress_rating1'] == '40' || $result['verify_reference']['stress_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['stress_rating1'] == '80' || $result['verify_reference']['stress_rating1'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['stress_rating1'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="stress_11"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='stress_12'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='stress_13'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='stress_14'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='stress_15'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='stress_16'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['stress_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['stress_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['stress_rating2'] == '40' || $result['verify_reference']['stress_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['stress_rating2'] == '80' || $result['verify_reference']['stress_rating2'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['stress_rating2'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                <tbody>
                                                    <tr>
                                                        <th><input type="button" class="btn button_value_stripe" value="1" id="stress_21"></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="2" id='stress_22'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="3" id='stress_23'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="4" id='stress_24'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="5" id='stress_25'></th>
                                                        <th><input type="button" class="btn button_value_stripe" value="X" id='stress_26'></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Greatly below expectations</td>
                                                        <td>Below expectations</td>
                                                        <td>Met expectations</td>
                                                        <td>Exceeded expectations</td>
                                                        <td>Greatly exceeded expectations</td>
                                                        <td>Unable to observe</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="progress progress-striped"> 
                                                <div class="progress-bar" id="action1_progress" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['stress_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['stress_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['stress_rating3'] == '40' || $result['verify_reference']['stress_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['stress_rating3'] == '80' || $result['verify_reference']['stress_rating3'] == '100') {echo '#00a65a';} ?>">
                                                    <span class="sr-only">
                                                        <?php  echo $result['verify_reference']['stress_rating3'].'%' ;  ?>                                                                                                                                                                                  
                                                    </span>
                                                </div> 
                                            </div>                                                                                   
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
                                                    Internet Browsing
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
                                                    Microsoft Excel
                                                    <span class="glyphicon glyphicon-star"></span>3
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
                                                    Team Player
                                                    <span class="glyphicon glyphicon-star"></span>2
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
                                                    Problem Solving
                                                    <span class="glyphicon glyphicon-star"></span>1
                                                </div>
                                                <div class="col-xs-8 col-md-9">
                                                    <div id="range7" class="range"> <span id="currentVal"><?php echo $result['verify_reference']['rating7'] ?></span> </div>
                                                    <!-- <div class="progress">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">15%</span>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <!-- end 1 -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <form method="post">
            <input type="hidden" name="form_name" value="Form_9">
            <input type="submit" class="button button_1" value="Complete">

            <a href="reference_check.html" class="button button_2">Back</a>
        </form>	
    </div>				   

    <footer class="main-footer left_padding">
        <div class="pull-right hidden-xs">
            <b>Design By </b><a href="http://www.acumaxtechnologies.com/"> &nbsp; www.acumaxtechnologies.com</a>
        </div>
        <strong>Copyright &copy;2017 <a href="https://www.mycareerdashboard.com/">www.mycareerdashboard.com</a>.</strong> All rights
        reserved.
    </footer>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <?php echo $this->Html->script('industry/plugins/jQuery/jquery-2.2.3.min.js') ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script> 
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
        // Starrr plugin (https://github.com/dobtco/starrr)
        var __slice = [].slice;

        (function ($, window) {
            var Starrr;

            Starrr = (function () {
                Starrr.prototype.defaults = {
                    rating: void 0,
                    numStars: 5,
                    change: function (e, value) {}
                };

                function Starrr($el, options) {
                    var i, _, _ref,
                            _this = this;

                    this.options = $.extend({}, this.defaults, options);
                    this.$el = $el;
                    _ref = this.defaults;
                    for (i in _ref) {
                        _ = _ref[i];
                        if (this.$el.data(i) != null) {
                            this.options[i] = this.$el.data(i);
                        }
                    }
                    this.createStars();
                    this.syncRating();
                    this.$el.on('mouseover.starrr', 'span', function (e) {
                        return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
                    });
                    this.$el.on('mouseout.starrr', function () {
                        return _this.syncRating();
                    });
                    this.$el.on('click.starrr', 'span', function (e) {
                        return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
                    });
                    this.$el.on('starrr:change', this.options.change);
                }

                Starrr.prototype.createStars = function () {
                    var _i, _ref, _results;

                    _results = [];
                    for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                        _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
                    }
                    return _results;
                };

                Starrr.prototype.setRating = function (rating) {
                    if (this.options.rating === rating) {
                        rating = void 0;
                    }
                    this.options.rating = rating;
                    this.syncRating();
                    return this.$el.trigger('starrr:change', rating);
                };

                Starrr.prototype.syncRating = function (rating) {
                    var i, _i, _j, _ref;

                    rating || (rating = this.options.rating);
                    if (rating) {
                        for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                            this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
                        }
                    }
                    if (rating && rating < 5) {
                        for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                            this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                        }
                    }
                    if (!rating) {
                        return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
                    }
                };

                return Starrr;

            })();
            return $.fn.extend({
                starrr: function () {
                    var args, option;

                    option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
                    return this.each(function () {
                        var data;

                        data = $(this).data('star-rating');
                        if (!data) {
                            $(this).data('star-rating', (data = new Starrr($(this), option)));
                        }
                        if (typeof option === 'string') {
                            return data[option].apply(data, args);
                        }
                    });
                }
            });
        })(window.jQuery, window);

        $(function () {
            return $(".starrr").starrr();
        });

        $(document).ready(function () {

            $('#action_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyed']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyed']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        $('#action1_progress').addClass('yellow');
                        location.reload();
                    }
                });
            });

            $('#action_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyed']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyed']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyed']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyed']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });


            $('#action_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyedData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyedData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyedData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyedData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyedData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyedData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#action_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/certifyData']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#team_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/teamHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#work_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/workHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#motivation_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/motivationHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#reliable_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/reliableHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#problem_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/problemHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#adapt_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/adaptHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#plan_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/planHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#comm_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/comHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#integrity_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/integrityHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#initiate_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/iniHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_01').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_02').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_03').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_04').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_05').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_06').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart1']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_11').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_12').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_13').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_14').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_15').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_16').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart2']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_21').click(function () {
                var referId = $('#refer_id').val();
                var value = 20;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_22').click(function () {
                var referId = $('#refer_id').val();
                var value = 40;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_23').click(function () {
                var referId = $('#refer_id').val();
                var value = 60;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_24').click(function () {
                var referId = $('#refer_id').val();
                var value = 80;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_25').click(function () {
                var referId = $('#refer_id').val();
                var value = 100;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#stress_26').click(function () {
                var referId = $('#refer_id').val();
                var value = 0;
                $.ajax({
                    url: "<?php echo Router:: url(['controller' => 'industrys/stressHeart3']) ?>",
                    type: "POST",
                    data: {"val": value, "id": referId},
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('#hearts-existing').on('starrr:change', function (e, value) {
                $('#count-existing').html(value);
            });
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

</body>
</html>