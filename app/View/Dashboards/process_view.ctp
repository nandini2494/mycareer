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
        <?php echo $this->Html->css('css/circularprogress.css') ?>
        <?php echo $this->Html->css('css/responsive_use.css') ?>

        <!--  Fonts and icons     -->
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

        <style>

            .progress-bar {
                float: initial !important;                
            }
            .progress-striped{height: 24px; background-color: #f1eeee !important;}
            .sr-only {
                margin-left: 5px;
                overflow: visible;
                clip: auto;
            }
            .row_color{background:#fff;}
            .name {text-transform: capitalize}
            .table-user-information tr>td:nth-of-type(2n+1){width:35%;color: #4c4949;font-weight: 600;font-size: 15px;}
            .table-user-information tr>td:nth-of-type(2n+0){width:65%;}
            .text_center_use{text-align:center;font-size:20px;}
            .modal-dialog{margin-top:0px !important;}
            .well {
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            .para_justify{text-align:justify}
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

            .rating_color{
                color: #f39c12 !important;
                padding-left: 5px;
                font-size:15px;
            }
            .panel-info>.panel-heading {
                background-color: #254094;
                border-color: #254094;
                outline: none;
            }
            .panel-heading h4{color: #fff;}
        </style>
    </head>
    <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>
    <div class="main-panel">
        <?php echo $this->Element('dashboard/header') ?>
        <div class="clearfix"></div>

        <div class="col-lg-12 col-md-12">


            <div class="toppad">

                <?php 
                if (count($results['verify']) > 0) {
                foreach ($results['verify'] as $result) {                     
                    if($result['verify_reference']['join_date'] != '') {
                        $date5 = date('d-F-Y',strtotime($result['verify_reference']['join_date']));
                    } else {
                        $date5 = "";
                    }
                    if($result['verify_reference']['release_date'] != '') {
                        $date6 = date('d-F-Y',strtotime($result['verify_reference']['release_date']));
                    } else {
                        $date6 = "";
                    }                                      
                ?>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class='text_center_use'>IN PROCESS&nbsp;&nbsp;</h4>
                    </div>

                    <div class="panel-body">
                        <div class="row">

                            <div class=" col-md-12 col-lg-12 "> 

                                <div class="table">
                                    <table class="table table-user-information table-responsive">
                                        <tbody>

                                            <tr>
                                                <td>Company Name:</td>
                                                <td class="name"><?php echo $result['verify_reference']['business_name'] ?> </td>                                       
                                            </tr>
                                            <tr>
                                                <td>Company Address:</td>
                                                <td class="name">
                                            <?php echo $result['verify_reference']['business_address'] ?>                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Company Telephone:</td>
                                                <td>
                                            <?php echo $result['verify_reference']['bussiness_phone'] ?>   
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Name Of Contact:</td>
                                                <td class="name">
                                            <?php echo $result['verify_reference']['person_name'] ?> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Telephone: </td>
                                                <td>
                                            <?php echo $result['verify_reference']['contact_number'] ?>                                                  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>EXT:</td>
                                                <td>
                                            <?php echo $result['verify_reference']['ext'] ?>                                                    
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td>Name</td>
                                                <td class="name">
                                                    <p>
                                                <?php echo $result['register']['first_name'] ?> <?php echo $result['register']['last_name'] ?>
                                                    </p>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Date of Birth
                                                </td>
                                                <td class="name">
                                            <?php echo $result['register']['dob'] ?>
                                                </td>
                                            </tr>                                       

                                        <?php if($result['verify_reference']['reference_name'] == 'workplace_verification') { ?>
                                            <tr>
                                                <td>
                                                    Employee Number
                                                </td>
                                                <td class="name">
                                            <?php echo $result['verify_reference']['employee_id'] ?>                                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>In what capacity were you associated with the applicant</td>
                                                <td>
                                            <?php echo $result['verify_reference']['associated_with_employee'] ?>
                                                    <br>
                                                    <p class="para_justify"><?php echo $result['verify_reference']['associated_with_employee_comment'] ?>
                                                        <br><?php echo $result['verify_reference']['employee_comment_other'] ?>
                                                        <br><?php echo $result['verify_reference']['associated_with_employee_comment'] ?>
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Since what date</td>
                                                <td>
                                            <?php echo $date5 ?>&nbsp;&nbsp; to&nbsp;&nbsp; <?php echo $date6 ?>
                                                </td>
                                            </tr>                                  
                                            <tr>
                                                <td> In what capacity was the applicant employed?</td>
                                                <td>
                                            <?php echo $result['verify_reference']['job_type'] ?>
                                                    <br/>
                                            <?php echo $result['verify_reference']['employed_comment'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Salary </td>
                                                <td>                                           
                                            <?php echo $result['verify_reference']['employee_salary'] ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Was the applicant successful in fulfilling his or her duties?</td>
                                                <td><?php echo $result['verify_reference']['duties_successful'] ?>
                                                    <br><?php echo $result['verify_reference']['duties_successful_comment'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>What was it like to supervise the applicant?</td>
                                                <td><?php echo $result['verify_reference']['supervise_applicant'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Was the applicant a valuable member of the team?</td>
                                                <td><?php echo $result['verify_reference']['valuable_member'] ?> </td>                                                                                  
                                            </tr>

                                            <tr>
                                                <td>What unique skill did the candidate bring to your organization?</td>
                                                <td><?php echo $result['verify_reference']['unique_skill'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>What were their strengths?</td>
                                                <td><?php echo $result['verify_reference']['strength'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>What were their weaknesses or areas that needed improvement?<br><br>Weaknesses :<br>Improvements:</td>
                                                <td><?php echo $result['verify_reference']['weakness'] ?> <br/> <?php echo $result['verify_reference']['improvement'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>How would they describe this applicant's absenteeism record in relation to other employees?

                                                </td>
                                                <td> <?php echo $result['verify_reference']['absent_record'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Did you ever find it necessary to reprimand or discipline this person

                                                </td>
                                                <td> <?php echo $result['verify_reference']['descipline'] ?>       
                                                    <br> <?php echo $result['verify_reference']['circumstances'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Considering the job being applied for, do you think the applicant is suitable?
                                                </td>
                                                <td><?php echo $result['verify_reference']['applicant_suitable'] ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Why did they leave your employment?

                                                </td>
                                                <td><?php echo $result['verify_reference']['leave_employment'] ?><br/>
                                            <?php echo $result['verify_reference']['leave_employment_comment'] ?> 
                                                </td>
                                            </tr> 

                                            <tr>
                                                <td>
                                                    Would you rehire the candidate?

                                                </td>
                                                <td><?php echo $result['verify_reference']['rehire'] ?><br/>
                                            <?php echo $result['verify_reference']['rehire_reason'] ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Anything Else?
                                                </td>
                                                <td><?php echo $result['verify_reference']['anything_else'] ?></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    If you have any questions , please feel free to contact me
                                                </td>
                                                <td>Name : <?php echo $result['register']['first_name'] ?> <?php echo $result['register']['last_name'] ?><br/><br/>
                                                    Contact No. : <?php echo $result['register']['phone'] ?>
                                                </td>
                                            </tr>
                                    <?php } if($result['verify_reference']['reference_name'] == 'volunteer_verification') { ?>
                                            <tr>
                                                <td>
                                                    How long have you known this individual
                                                </td>
                                                <td><?php echo $result['verify_reference']['how_long_known'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    In what capacity
                                                </td>
                                                <td><?php echo $result['verify_reference']['what_capacity'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    How would you describe the applicant’s ability to work with and relate to their volunteer work
                                                </td>
                                                <td><?php echo $result['verify_reference']['applicant_ability'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    To the extent you know, please tell me about the applicant's roles with their role
                                                </td>
                                                <td><?php echo $result['verify_reference']['applicant_role'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Have you observed the applicant working
                                                </td>
                                                <td><?php echo $result['verify_reference']['observe_working'] ?><br>
                                            <?php echo $result['verify_reference']['example_applicant_role'] ?><br>
                                            <?php echo $result['verify_reference']['example_applicant_role_comment'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Would you have any reservations about recommending this person to serve as a program volunteer
                                                </td>
                                                <td><?php echo $result['verify_reference']['reservation'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    If you have any questions , please feel free to contact me
                                                </td>
                                                <td>Name : <?php echo $result['register']['first_name'] ?> <?php echo $result['register']['last_name'] ?><br/><br/>
                                                    Contact No. : <?php echo $result['register']['phone'] ?>
                                                </td>
                                            </tr>
                                    <?php } if($result['verify_reference']['reference_name'] == 'personnel_verification') { ?>
                                            <tr>
                                                <td>
                                                    When was the last time you had contact with the applicant
                                                </td>
                                                <td><?php echo $result['verify_reference']['last_time_contact'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    How does the applicant get along with people
                                                </td>
                                                <td><?php echo $result['verify_reference']['applicant_get_along'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    How would you describe the applicant’s friends and associates
                                                </td>
                                                <td><?php echo $result['verify_reference']['applicant_friend'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    How does the applicant react in stressful situations
                                                </td>
                                                <td><?php echo $result['verify_reference']['stressful_situation'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Is there any reason why you wouldn’t trust the applicant with confidential information
                                                </td>
                                                <td><?php echo $result['verify_reference']['not_trust'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Do you have any reason to question the applicant’s reliability  
                                                </td>
                                                <td><?php echo $result['verify_reference']['applicant_reliability'] ?><br>
                                            <?php echo $result['verify_reference']['applicant_reliability_comment'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Do you have any reason to question the applicant’s honesty or character 
                                                </td>
                                                <td><?php echo $result['verify_reference']['applicant_character'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Do you know of anything about the applicant that should be investigated 
                                                </td>
                                                <td><?php echo $result['verify_reference']['investigated'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Do you recommend the applicant for a position 
                                                </td>
                                                <td><?php echo $result['verify_reference']['applicant_position'] ?><br/>
                                            <?php echo $result['verify_reference']['applicant_position_comment'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Is there anything else you would like to add
                                                </td>
                                                <td><?php echo $result['verify_reference']['anything_else'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    If you have any questions , please feel free to contact me
                                                </td>
                                                <td>Name : <?php echo $result['register']['first_name'] ?> <?php echo $result['register']['last_name'] ?><br/><br/>
                                                    Contact No. : <?php echo $result['register']['phone'] ?>
                                                </td>
                                            </tr>
                                    <?php } ?>

                                    <?php if($result['verify_reference']['reference_type'] == 'Advance') { ?>
                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Key Actions
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    Considers all pertinent facts and alternatives before deciding on the most appropriate action.
                                                </td>
                                                <td><!-- <div class="starrr rating_color" data-rating='<?php echo $result['verify_reference']['key_rating1'] ?>'></div> -->
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['key_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['key_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['key_rating1'] == '40' || $result['verify_reference']['key_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['key_rating1'] == '80' || $result['verify_reference']['key_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['key_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Teamwork
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Interacts with people effectively. Able and willing to share and receive information.
                                                </td>   
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['teamwork_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['teamwork_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['teamwork_rating1'] == '40' || $result['verify_reference']['teamwork_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['teamwork_rating1'] == '80' || $result['verify_reference']['teamwork_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['teamwork_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Co-operates within the group and across groups.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['teamwork_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['teamwork_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['teamwork_rating2'] == '40' || $result['verify_reference']['teamwork_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['teamwork_rating2'] == '80' || $result['verify_reference']['teamwork_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['teamwork_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Considers all pertinent facts and alternatives before deciding on the most appropriate action.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['teamwork_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['key_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['teamwork_rating3'] == '40' || $result['verify_reference']['teamwork_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['teamwork_rating3'] == '80' || $result['verify_reference']['teamwork_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['teamwork_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Work Standards
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Sets and maintains high performance standards.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['work_standard1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['work_standard1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['work_standard1'] == '40' || $result['verify_reference']['work_standard1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['work_standard1'] == '80' || $result['verify_reference']['work_standard1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['work_standard1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                 
                                            </tr>

                                            <tr>
                                                <td>
                                                    Pays close attention to detail, accuracy and completeness.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['work_standard2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['work_standard2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['work_standard2'] == '40' || $result['verify_reference']['work_standard2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['work_standard2'] == '80' || $result['verify_reference']['work_standard2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['work_standard2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                 
                                            </tr>

                                            <tr>
                                                <td>
                                                    Shows concern for all aspects of the job and follows up on work outputs.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['work_standard3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['work_standard3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['work_standard3'] == '40' || $result['verify_reference']['work_standard3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['work_standard3'] == '80' || $result['verify_reference']['work_standard3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['work_standard3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                  
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Motivation
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Displays energy and enthusiasm in approaching the job.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['motivatin_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['motivatin_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['motivatin_rating1'] == '40' || $result['verify_reference']['motivatin_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['motivatin_rating1'] == '80' || $result['verify_reference']['motivatin_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['motivatin_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                  
                                            </tr>

                                            <tr>
                                                <td>
                                                    Commits to putting in additional effort.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['motivatin_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['motivatin_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['motivatin_rating2'] == '40' || $result['verify_reference']['motivatin_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['motivatin_rating2'] == '80' || $result['verify_reference']['motivatin_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['motivatin_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Maintains high level of productivity and self-direction.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['motivatin_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['motivatin_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['motivatin_rating3'] == '40' || $result['verify_reference']['motivatin_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['motivatin_rating3'] == '80' || $result['verify_reference']['motivatin_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['motivatin_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                  
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Reliability
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Takes personal responsibility for job performance.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['reliabilty_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['reliabilty_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['reliabilty_rating1'] == '40' || $result['verify_reference']['reliabilty_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['reliabilty_rating1'] == '80' || $result['verify_reference']['reliabilty_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['reliabilty_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Completes work in a timely and consistent manner.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['reliabilty_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['reliabilty_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['reliabilty_rating2'] == '40' || $result['verify_reference']['reliabilty_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['reliabilty_rating2'] == '80' || $result['verify_reference']['reliabilty_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['reliabilty_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                  
                                            </tr>

                                            <tr>
                                                <td>
                                                    Sticks to commitments.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['reliabilty_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['reliabilty_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['reliabilty_rating3'] == '40' || $result['verify_reference']['reliabilty_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['reliabilty_rating3'] == '80' || $result['verify_reference']['reliabilty_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['reliabilty_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                  
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Problem Solving
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Analyzes problem by gathering and organizing all relevant information.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['problem_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['problem_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['problem_rating1'] == '40' || $result['verify_reference']['problem_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['problem_rating1'] == '80' || $result['verify_reference']['problem_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['problem_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                  
                                            </tr>

                                            <tr>
                                                <td>
                                                    Identifies cause and effect relationships.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['problem_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['problem_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['problem_rating2'] == '40' || $result['verify_reference']['problem_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['problem_rating2'] == '80' || $result['verify_reference']['problem_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['problem_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                  
                                            </tr>

                                            <tr>
                                                <td>
                                                    Comes up with appropriate solutions.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['problem_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['problem_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['problem_rating3'] == '40' || $result['verify_reference']['problem_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['problem_rating3'] == '80' || $result['verify_reference']['problem_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['problem_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                 
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Adaptability
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Adapts to changing work environments, work priorities and organizational needs.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['adaptibility_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['adaptibility_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['adaptibility_rating1'] == '40' || $result['verify_reference']['adaptibility_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['adaptibility_rating1'] == '80' || $result['verify_reference']['adaptibility_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['adaptibility_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Able to effectively deal with change and diverse people.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['adaptibility_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['adaptibility_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['adaptibility_rating2'] == '40' || $result['verify_reference']['adaptibility_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['adaptibility_rating2'] == '80' || $result['verify_reference']['adaptibility_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['adaptibility_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Able to effectively deal with change and diverse people.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['adaptibility_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['adaptibility_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['adaptibility_rating3'] == '40' || $result['verify_reference']['adaptibility_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['adaptibility_rating3'] == '80' || $result['verify_reference']['adaptibility_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['adaptibility_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Planning and Organizing
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Plans and organizes tasks and work responsibilities to achieve objectives.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['plan_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['plan_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['plan_rating1'] == '40' || $result['verify_reference']['plan_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['plan_rating1'] == '80' || $result['verify_reference']['plan_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['plan_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Sets priorities. Schedules activities.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['plan_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['plan_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['plan_rating2'] == '40' || $result['verify_reference']['plan_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['plan_rating2'] == '80' || $result['verify_reference']['plan_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['plan_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Allocates and uses resources properly.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['plan_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['plan_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['plan_rating3'] == '40' || $result['verify_reference']['plan_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['plan_rating3'] == '80' || $result['verify_reference']['plan_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['plan_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Communication
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Expresses ideas effectively.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['communication_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['communication_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['communication_rating1'] == '40' || $result['verify_reference']['communication_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['communication_rating1'] == '80' || $result['verify_reference']['communication_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['communication_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Organizes and delivers information appropriately.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['communication_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['communication_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['communication_rating2'] == '40' || $result['verify_reference']['communication_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['communication_rating2'] == '80' || $result['verify_reference']['communication_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['communication_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Listens actively.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['communication_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['communication_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['communication_rating3'] == '40' || $result['verify_reference']['communication_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['communication_rating3'] == '80' || $result['verify_reference']['communication_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['communication_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                  
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Integrity
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Shares complete and accurate information.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['integrity_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['integrity_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['integrity_rating1'] == '40' || $result['verify_reference']['integrity_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['integrity_rating1'] == '80' || $result['verify_reference']['integrity_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['integrity_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                  
                                            </tr>

                                            <tr>
                                                <td>
                                                    Maintains confidentiality and  meets own commitments.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['integrity_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['integrity_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['integrity_rating2'] == '40' || $result['verify_reference']['integrity_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['integrity_rating2'] == '80' || $result['verify_reference']['integrity_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['integrity_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Adheres to organizational policies and procedures.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['integrity_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['integrity_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['integrity_rating3'] == '40' || $result['verify_reference']['integrity_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['integrity_rating3'] == '80' || $result['verify_reference']['integrity_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['integrity_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Initiative
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Takes action to influence events.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['initiative_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['initiative_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['initiative_rating1'] == '40' || $result['verify_reference']['initiative_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['initiative_rating1'] == '80' || $result['verify_reference']['initiative_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['initiative_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Generates ideas for improvement, takes advantage of opportunities, suggests innovations.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['initiative_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['initiative_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['initiative_rating2'] == '40' || $result['verify_reference']['initiative_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['initiative_rating2'] == '80' || $result['verify_reference']['initiative_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['initiative_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Does more than required.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['initiative_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['initiative_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['initiative_rating3'] == '40' || $result['verify_reference']['initiative_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['initiative_rating3'] == '80' || $result['verify_reference']['initiative_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['initiative_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="heading_data_view well">
                                                    Stress Tolerance
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Displays emotional resilience and the ability to withstand pressure on an on-going basis.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['stress_rating1'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['stress_rating1'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['stress_rating1'] == '40' || $result['verify_reference']['stress_rating1'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['stress_rating1'] == '80' || $result['verify_reference']['stress_rating1'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['stress_rating1'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                  
                                            </tr>

                                            <tr>
                                                <td>
                                                    Deals with difficult situations while maintaining performance.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['stress_rating2'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['stress_rating2'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['stress_rating2'] == '40' || $result['verify_reference']['stress_rating2'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['stress_rating2'] == '80' || $result['verify_reference']['stress_rating2'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['stress_rating2'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Seeks support from others when necessary and uses appropriate coping techniques.
                                                </td>
                                                <td>                                                                                      
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['stress_rating3'] ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: <?php if($result['verify_reference']['stress_rating3'] == '20') { echo '#ec3939';} elseif ($result['verify_reference']['stress_rating3'] == '40' || $result['verify_reference']['stress_rating3'] == '60') {echo '#acac34';} elseif ($result['verify_reference']['stress_rating3'] == '80' || $result['verify_reference']['stress_rating3'] == '100') {echo '#00a65a';} ?>">
                                                            <span class="sr-only">
                                                        <?php echo $result['verify_reference']['stress_rating3'].'%' ; ?>                                                                                                                                                                                  
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                 
                                            </tr>

                                            <tr>
                                                <td>
                                                    Typing Speed
                                                </td>
                                                <td>
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-active" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['rating1'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($result['verify_reference']['rating1']) { 
                                                            echo $result['verify_reference']['rating1'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Microsoft Word
                                                </td>
                                                <td>
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['rating2'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($result['verify_reference']['rating2']) { 
                                                            echo $result['verify_reference']['rating2'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Microsoft Powerpoint
                                                </td>
                                                <td>
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['rating3'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($result['verify_reference']['rating3']) { 
                                                            echo $result['verify_reference']['rating3'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Web Browsing
                                                </td>
                                                <td>
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['rating4'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($result['verify_reference']['rating4']) { 
                                                            echo $result['verify_reference']['rating4'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Excel Spreadsheet
                                                </td>
                                                <td>
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-active" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['rating5'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($result['verify_reference']['rating5']) { 
                                                            echo $result['verify_reference']['rating5'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </td>                                                                                   
                                            </tr>

                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td>
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['rating6'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($result['verify_reference']['rating6']) { 
                                                            echo $result['verify_reference']['rating6'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                               
                                            </tr>

                                            <tr>
                                                <td>
                                                    Fax
                                                </td>
                                                <td>
                                                    <div class="progress progress-striped"> 
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $result['verify_reference']['rating7'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">
                                                            <?php if($result['verify_reference']['rating7']) { 
                                                            echo $result['verify_reference']['rating7'].'%' ; }
                                                            else { 
                                                                echo "0"."%";
                                                            }
                                                            ?>
                                                            </span> 
                                                        </div>
                                                    </div>
                                                </td>                                                                                   
                                            </tr>                                                                                

                                        <?php } ?>                                      

                                        </tbody>
                                    </table>   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php } } else { ?>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class='text_center_use'>IN PROCESS&nbsp;&nbsp;</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-12 col-lg-12 "> 

                                <center><p style="font-weight: bold; font-size: 17px">No Records Available</p></center>
                            </div>
                        </div>
                    </div>

                </div>

                <?php } ?>
            </div>
        </div>

        <!-- navigation start end-->

    </div>		
    <div class="clearfix"></div>

    <script>
        $(document).ready(function () {
            $('.progress .progress-bar').css("width",
                    function () {
                        return $(this).attr("aria-valuenow") + "%";
                    }
            )
        });
    </script>    

    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/circularprogress.jquery.js"></script>
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

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <?php echo $this->Html->script('js/rumca.min.js') ?>
    <?php echo $this->Html->script('js/example.js') ?>
    <script>
        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
    <?php echo $this->Html->script('js/bootstrap.min.js') ?>
    <?php echo $this->Html->script('js/circularprogress.jquery.js') ?>
</body>
</html>
