<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>MCD</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <?php echo $this->Html->css('school/bootstrap.min.css') ?>
        <?php echo $this->Html->css('school/custom.css') ?>
        <?php echo $this->Html->css('school/responsive_use.css') ?>
        <?php echo $this->Html->css('school/animate.min.css') ?>
        <?php echo $this->Html->css('school/demo.css') ?>
        <?php echo $this->Html->css('school/custom_css.css') ?>
        <?php echo $this->Html->css('school/themify-icons.css') ?>    
        <?php echo $this->Html->css('school/demo/calendar-style.css') ?>   
        <?php echo $this->Html->css('school/demo/style.css') ?>
        <?php echo $this->Html->css('school/dist/pignose.calendar.css') ?>
        <?php echo $this->Html->css('school/style.css') ?>
        <?php echo $this->Html->css('school/circularprogress.css') ?>
        <?php echo $this->Html->css('school/icons.css') ?>
        <?php echo $this->Html->css('style.css') ?>
        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <style>
            .panel-primary
            {
                border-color: #254094 !important;
            }
            .panel-primary>.panel-heading
            {
                background:#254094;
            }
            .panel-primary>.panel-body
            {
                background-color: #EDEDED;
            }
        </style>
    </head>

    <body>

        <?php echo $this->Element('school/school_header') ?> 

        <div class="clearfix"></div>      
        <div class='row  row_padding_program'>

            <div class='div_di'>
                <div class='col-lg-4 col-md-4 col-xs-12 col-sm-12 div_first'>
                    <div class='inner_div_use_lass'>
                        <h1>Career Starter</h1>
                        <h3>6 Months $ 38.50</h3>
                        <h3>1 Year $ 70.50</h3>
                        <h4>UPGRADE ANYTIME</h4>

                        <div class='inner_div_annual'>       
                            <ul>
                                <li><i class="fa fa-upload" aria-hidden="true"></i> Resume Uploads</li>
                                <li><i class="fa fa-mobile" aria-hidden="true"></i> 3 Application Tracking </li>
                                <li><i class="fa fa-paw" aria-hidden="true"></i> 3 DIY Reference</li>
                                <li><i class="fa fa-paper-plane" aria-hidden="true"></i> Career Planning</li>
                                <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</li>
                                <li><i class="fa fa-file" aria-hidden="true"></i> Reference Documenting</li>
                                <li><i class="fa fa-trophy" aria-hidden="true"></i> Accomplishments Documenting</li>
                                <li><i class="fa fa-key" aria-hidden="true"></i> Key Skills</li>
                                <li><i class="fa fa-cloud" aria-hidden="true"></i> Career Related Activities </li>
                                <li><i class="fa fa-bell" aria-hidden="true"></i> Application Notifications </li>
                            </ul>

                            <button onclick='window.location.href = "school_signup.html?token=<?php echo htmlspecialchars($this->params['url']['token']) ?>&program=starter&duration=6month"'>Sign Up For 6 Months</button>
                            <button onclick='window.location.href = "school_signup.html?token=<?php echo htmlspecialchars($this->params['url']['token']) ?>&program=starter&duration=year"'>Sign Up For Year</button>
                        </div> 
                    </div>
                </div>
                <div class='col-lg-4 col-md-4 col-xs-12 col-sm-12 div_second'>
                    <div class='inner_div_use_lass'>
                        <h1>Career Advanced</h1>
                        <h3>6 Months $ 60.00</h3>
                        <h3>1 Year $ 100.00</h3>
                        <h4>UPGRADE ANYTIME</h4>

                        <div class='inner_div_annual'>        
                            <ul>
                                <li><i class="fa fa-upload" aria-hidden="true"></i> Resume Uploads</li>
                                <li><i class="fa fa-mobile" aria-hidden="true"></i> 10 Application Tracking </li>
                                <li><i class="fa fa-paw" aria-hidden="true"></i> 10 DIY References </li>
                                <li><i class="fa fa-paper-plane" aria-hidden="true"></i> Career Planning</li>
                                <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</li>
                                <li><i class="fa fa-file" aria-hidden="true"></i> Reference Documenting</li>
                                <li><i class="fa fa-trophy" aria-hidden="true"></i> Accomplishments Documenting</li>
                                <li><i class="fa fa-key" aria-hidden="true"></i> Key Skills</li>
                                <li><i class="fa fa-cloud" aria-hidden="true"></i> Career Related Activities </li>
                                <li><i class="fa fa-sticky-note" aria-hidden="true"></i> Interview Notes </li>
                                <li><i class="fa fa-magic" aria-hidden="true"></i> New Job Notes</li>
                                <li><i class="fa fa-refresh" aria-hidden="true"></i> Essentials Skills</li>
                                <li><i class="fa fa-search-minus" aria-hidden="true"></i> Job Search Site Tracking</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Career Contacts</li>
                                <li><i class="fa fa-bell" aria-hidden="true"></i> Application Notifications</li>
                                <li><i class="fa fa-paper-plane" aria-hidden="true"></i> Computer Skills</li>
                                <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> Evidence of Skills</li>
                                <li><i class="fa fa-desktop" aria-hidden="true"></i> Help desk support </li>
                            </ul>

                            <button onclick='window.location.href = "school_signup.html?token=<?php echo htmlspecialchars($this->params['url']['token']) ?>&program=advanced&duration=6month"'>Sign Up For Year</button>
                            <button onclick='window.location.href = "school_signup.html?token=<?php echo htmlspecialchars($this->params['url']['token']) ?>&program=advanced&duration=year"'>Sign Up For Year</button>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4 col-md-4 col-xs-12 col-sm-12 div_third'>
                    <div class='inner_div_use_lass'>
                        <h1>All Access 360</h1>
                        <h3>6 Months $ 85.00</h3>
                        <h3>1 Year $ 158.00</h3>
                        <h4>UPGRADE ANYTIME</h4>

                        <div class='inner_div_annual'>    
                            <ul> 
                                <li><i class="fa fa-upload" aria-hidden="true"></i> Resume Uploads</li>
                                <li><i class="fa fa-mobile" aria-hidden="true"></i> Unlimited Application tracking</li>
                                <li><i class="fa fa-paw" aria-hidden="true"></i> Unlimited DIY References  ( 2 free verifications )</li>
                                <li><i class="fa fa-paper-plane" aria-hidden="true"></i> Career Planning</li>
                                <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</li>
                                <li><i class="fa fa-file" aria-hidden="true"></i> Reference Documenting</li>
                                <li><i class="fa fa-trophy" aria-hidden="true"></i> Accomplishments Documenting</li>
                                <li><i class="fa fa-key" aria-hidden="true"></i> Key Skills</li>
                                <li><i class="fa fa-cloud" aria-hidden="true"></i> Career Related Activities </li>
                                <li><i class="fa fa-sticky-note" aria-hidden="true"></i> Interview Notes </li>
                                <li><i class="fa fa-magic" aria-hidden="true"></i> New Job Notes</li>
                                <li><i class="fa fa-search-minus" aria-hidden="true"></i>Job Search Site Tracking</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Career Contacts</li>
                                <li><i class="fa fa-bullseye" aria-hidden="true"></i> Goal Documenting</li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> Task List</li>
                                <li><i class="fa fa-refresh" aria-hidden="true"></i> Essentials Skills</li>
                                <li><i class="fa fa-signal" aria-hidden="true"></i> S.W.O.T Analysis</li>
                                <li><i class="fa fa-bell" aria-hidden="true"></i> Application Notification </li>
                                <li><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Event/Workshop Notifications</li>
                                <li><i class="fa fa-paper-plane" aria-hidden="true"></i> Computer Skills</li>
                                <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> Evidence of Skills</li>
                                <li><i class="fa fa-desktop" aria-hidden="true"></i> Help Desk support</li>
                            </ul>
                            
                            <button onclick='window.location.href = "school_signup.html?token=<?php echo htmlspecialchars($this->params['url']['token']) ?>&program=access360&duration=6month"'>Sign Up For 6 Months</button>
                            <button onclick='window.location.href = "school_signup.html?token=<?php echo htmlspecialchars($this->params['url']['token']) ?>&program=access360&duration=year"'>Sign Up For Year</button>
                        </div>    
                    </div>
                </div>
            </div>
        </div>

        <?php echo $this->Element('school/school_footer') ?>
    </body>
</html>