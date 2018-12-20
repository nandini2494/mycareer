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
        <style>
            @media print {
                .img_src_use{
                    width: 110px;
                    padding-left: 10px;
                }
                ol {
                    margin-bottom: 0px;
                }
                #key p {
                    padding: 2% 0% 1% 3% !important;
                    font-size: 17px !important;
                }
                #key h1 {
                    font-size: 18px !important;
                }
                #key h3 {
                    padding: 2% 0% 2% 3%;
                    background: #3c4e8a;
                    color: #fff;
                    border: solid 2px #3c4e8a;
                    margin: 2% 0%;
                }
                #swot h1 {
                    font-size: 18px !important;
                }
                #swot h3 {
                    padding: 2% 0% 2% 3%;
                    background: #3c4e8a;
                    color: #fff;
                    border: solid 2px #3c4e8a;
                    margin: 2% 0%;
                    text-transform: uppercase;
                }
                #swot p {
                    padding: 2% 0% 1% 3% !important;
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
            </style>
        </head>

        <body>
            <img src='<?php echo DOMAIN_NAME ?>img/co-logo.png' class="img_src_use"><br/><br/>

            <!-- Print Resume -->
<?php if(htmlspecialchars($this->params['url']['table_name'] == 'upload_resume')) { ?>
            <table border="2" width="100%" cellpadding="25" class="new_use_padding new_use">
                <tbody>
                    <tr>
                        <th><center>Name Of Resume</center></th>                                       
            <th><center>Date Created</center></th> 
        <th><center>Resume Type</center></th>
</tr>
<?php 
    foreach ($value as $chron_data) { 
?>
<tr>
    <td><center><?php echo $chron_data['upload_resume']['resume_name'] ?></center></td>
<td><center><?php if($chron_data['upload_resume']['complete_date']) { echo date('d-M-Y', strtotime($chron_data['upload_resume']['complete_date'])); } else { echo ""; } ?></center></td>
<td><center><?php echo $chron_data['upload_resume']['resume_type'] ?></center></td>  
</tr>                                 
<?php }  ?>

</table>
<?php } ?>
<!-- End Print Resume -->


<!-- Print DIY Reference -->
        <?php if(htmlspecialchars($this->params['url']['table_name'] == 'verify_reference')) { ?>

<?php
foreach ($value as $ref_data) {
    $ref_name = explode('_',$ref_data['verify_reference']['reference_name'])
?>
<div class="repeat_border_div">
    <div>
        <h3><?php echo ucfirst($ref_name[0]). " Verification"; ?>
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
                    } ?>
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
                    } ?>
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
                    } ?>
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
                    } ?>
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
                    } ?>
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
                    } ?>
                    </span> 
                </div> 
            </div>
        </div>
    </div>
    <?php } ?>

</div>    

<?php } ?>
        <?php } ?>        
<!-- End Print DIY Reference -->


<!-- Print Accomplishment -->
        <?php if(htmlspecialchars($this->params['url']['table_name'] == 'acomplishment')) { ?>

<?php 
    foreach ($value as $acomplish) { 
?>
<table class="table_use_div">
    <tr>
        <td><h5><center> Recent Job</center></h5></td>       
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
</table>
<?php   }  ?>
        <?php } ?>
<!-- End Print Accomplishment -->


<!-- Print Key Skill -->
        <?php if(htmlspecialchars($this->params['url']['table_name'] == 'key_skill')) { ?>
<div id="key">
<?php 
    foreach ($value as $key_skill) { 
?>
    <div class="repeat_border_div">
        <div>
            <h1>Key Skill
            </h1>
        </div>
        <table class="table_use_div word_div table-responsive">
            <tr><td colspan="2" style="border-top: 5px solid #000;"></td></tr>   
            <?php if($key_skill['key_skill']['soft_skill_list'] != '') { ?>
            <tr>
                <th style="color: #254094;">Soft Skills</th>
                <td style="color: #254094;" colspan="3"><?php echo $key_skill['key_skill']['soft_skill_list'] ?></td>
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
            <tr>
                <th style="color: #254094;">Hard Skills</th>
                <td style="color: #254094" colspan="3"><?php echo $key_skill['key_skill']['hard_skill'] ?></td>
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
<!-- End Print Key Skill -->


<!-- Print Mission Statement -->
<?php if(htmlspecialchars($this->params['url']['table_name'] == 'mission_statement')) { ?>

<?php
    foreach ($value as $mission) { 
?>
<table class="table_use_div">
    <tbody>
        <tr>
            <td><h5><center> Mission Statement</center></h5></td>
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

<?php } ?>
<!-- End Print Mission Statement -->


<!-- Print SWOT -->
<?php if(htmlspecialchars($this->params['url']['table_name'] == 'swot')) { ?>
<?php 
    foreach ($value as $swot) { 
?>
<div id="swot">
    <div class="repeat_border_div">
        <div>
            <h1>SWOT
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
    <?php } ?>
</div>
<?php } ?>

<!-- End Print SWOT -->


<!-- Print Education -->
<?php if(htmlspecialchars($this->params['url']['table_name'] == 'education')) { ?>
<?php 
    foreach ($value as $education_data) {
?>
<table class="table_use_div">
    <tr>
        <th colspan="2">Education </th>
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
</table>  

<?php } ?>

<?php } ?>
<!-- End Print Education -->


<!-- Print Evidence of Skill -->
<?php if(htmlspecialchars($this->params['url']['table_name'] == 'evidence_skill')) { ?>
<table border="2" width="100%" cellpadding="25" class="new_use_padding new_use">
    <tbody>
        <tr>                  
            <th><center>Name of Document</center></th>                                       
<th><center>Created On</center></th>
<th><center>Document Type</center></th>
</tr>
<?php
    foreach ($value as $view_evidence) { 
?>
<tr>
    <td><center><?php echo $view_evidence['evidence_skill']['document_name'] ?></center></td>
<td><center><?php echo $view_evidence['evidence_skill']['date'] ?></center></td>  
<td><center><?php echo $view_evidence['evidence_skill']['evidence_type'] ?></center></td>  
</tr>                                 
<?php } ?> 
</table>
<?php } ?>
<!-- End Print Evidence of Skill -->


<!-- Print Computer Skill -->
<?php if(htmlspecialchars($this->params['url']['table_name'] == 'computer_skill')) { ?>

<table border="2" width="100%" cellpadding="25" class="new_use_padding new_use">
    <tbody>
        <tr>
            <th><center>List of Computer Skill</center></th>                                       
<th><center>Level of Computer Skill</center></th>
</tr>
<?php
    foreach ($value as $view_computer) { 
?>
<tr>
    <td><center><?php echo $view_computer['computer_skill']['skill'] ?></center></td>
<td><center><?php echo $view_computer['computer_skill']['skill_level'] ?></center></td>                                      
</tr>                                 
<?php } ?>                                         
</table>

<?php } ?>
<!-- End Print Computer Skill -->


<!-- Print Essential Skill -->
<?php if(htmlspecialchars($this->params['url']['table_name'] == 'essential_skills')) { ?>
<table border="2" width="100%" cellpadding="25" class="new_use_padding new_use">
    <tbody>
        <tr>
            <th><center>Name of Skill</center></th>                                       
<th colspan="2"><center>Average</center></th> 
</tr>
<?php
    foreach ($value as $essential_skill) { 
?>
<tr>                                                
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
    echo number_format($total_avg, 2);
    ?>
    </td> 
</tr>                                 
<?php } ?>                                            
</table>
<?php } ?>
<!-- End Print Essential Skill -->


<!-- Print Career Related Activity -->
<?php if(htmlspecialchars($this->params['url']['table_name'] == 'career_activity')) { ?>
<table border="2" width="100%" cellpadding="25" class="new_use_padding new_use">
    <tbody>
        <tr class="chron_div">                                                            
            <th colspan="2"><center>Career Related Activity</center></th>                                        
</tr>
<?php foreach ($value as $career_act) { ?>
<tr class="chron_div_bottom">                                                      
    <td><?php echo $career_act['career_activity']['related_act'] ?></td> 
</tr>                                 
<?php } ?> 
</table>
<?php } ?>
<!-- End Print Career Related Activity -->

<!-- Print Course -->
<?php if(htmlspecialchars($this->params['url']['table_name'] == 'course')) { ?>
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
<th><center>Notes</center></th>
</tr>
<?php  foreach ($value as $course_added) {  ?>
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
</tr>                                 
<?php } ?>                                                     
</table>
<?php } ?>
<!-- End Print Course -->


<!-- Print Volunteer Work -->
<?php if(htmlspecialchars($this->params['url']['table_name'] == 'volunteer_work')) { ?>
<table class="table_use_div word_div">

    <?php 
        foreach ($value as $volunteer) { 
    ?>
    <tr>
        <td style="padding: 0px 0px 2em 0px; border-top: 5px solid #000;" colspan="4"></td>
    </tr>
    <tr>
        <td colspan="2"><h5><center>Volunteer Work</center></h5></td>
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
        <td colspan="2" style="padding-left: 2%;"><?php echo date('d-M-Y',strtotime($volunteer['volunteer_work']['from_service_date'])) ?></td>
        <td colspan="2" style="padding-left: 4%;"><?php echo date('d-M-Y',strtotime($volunteer['volunteer_work']['to_service_date'])) ?></td>
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
    <?php  }  ?>
</table>
<?php } ?>
<!-- End Print Volunteer Work -->

<!-- Print Workplace Experience -->
<?php if(htmlspecialchars($this->params['url']['table_name'] == 'workplace_experience')) { ?>
<?php
                                    foreach ($value as $w_place) {
                                   
                                ?>
<div class="repeat_border_div">
    <div>
        <h3 style="background: #c02430;color: #fff;margin: 2% 0%;padding-left: 2em;border: solid 2px #c02430;text-transform: uppercase;">Workplace Experiences 

        </h3>
    </div>
    <div class="arund">
        <div class='div_margin'>
            <h1>Company Name</h1>
            <p><?php echo $w_place['workplace_experience']['business_name'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Company Address:</h1>
            <p><?php echo $w_place['workplace_experience']['address'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>City:</h1>
            <p><?php echo $w_place['workplace_experience']['city'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Province:</h1>
            <p><?php echo $w_place['workplace_experience']['province'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Postal Code:</h1>
            <p><?php echo $w_place['workplace_experience']['postal_code'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Website of Business:</h1>
            <p><?php echo $w_place['workplace_experience']['website'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Email:</h1>
            <p><?php echo $w_place['workplace_experience']['email'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Telephone Number:</h1>
            <p><?php echo $w_place['workplace_experience']['phone'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Extension:</h1>
            <p><?php echo $w_place['workplace_experience']['ext'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Contact Person:</h1>
            <p><?php echo $w_place['workplace_experience']['contact_person'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Contact Person Name:</h1>
            <p><?php echo $w_place['workplace_experience']['person_name'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Title:</h1>
            <p><?php echo $w_place['workplace_experience']['title'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Telephone Number:</h1>
            <p><?php echo $w_place['workplace_experience']['person_phone'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Extension:</h1>
            <p><?php echo $w_place['workplace_experience']['person_ext'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Employee Id:</h1>
            <p><?php echo $w_place['workplace_experience']['employ_id'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>How Long have you known this person:</h1>
            <p><?php echo $w_place['workplace_experience']['person_know'].' Year' ?></p>
        </div>
        <div class='div_margin'>
            <h1>Did you send them Release of Information:</h1>
            <p><?php echo $w_place['workplace_experience']['release_info'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Your Starting Position:</h1>
            <p><?php echo $w_place['workplace_experience']['start_position'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Your Last Position:</h1>
            <p><?php echo $w_place['workplace_experience']['last_position'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Job Type:</h1>
            <p><?php echo $w_place['workplace_experience']['job_type'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Date Started:</h1>
            <p><?php echo $w_place['workplace_experience']['start_date'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Date Finished:</h1>
            <p><?php echo $w_place['workplace_experience']['end_date'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Still Working:</h1>
            <p><?php echo $w_place['workplace_experience']['still_working'] ?></p>
        </div>
        <div class='div_margin'>
            <h1>Duties Include:</h1>
            <p><?php echo $w_place['workplace_experience']['duty'] ?></p>
        </div>										
    </div>
</div>
<?php } ?>
<?php } ?>
<!-- End Print Workplace Experience -->

</body>
</html>

