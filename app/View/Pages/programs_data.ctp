<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <?php foreach ($meta_data as $meta) { ?>           
        <meta name="description" content="<?php echo $meta['seo_data']['description'] ?>">
        <meta name="keywords" content="<?php echo $meta['seo_data']['keyword'] ?>">      
        <title><?php echo $meta['seo_data']['title'] ?></title>
        <?php } ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap include file -->
        <?php echo $this->Html->css('bootstrap.min.css') ?>
        <?php echo $this->Html->css('custom.css') ?>
        <?php echo $this->Html->css('responsive_use.css') ?>
        <?php echo $this->Html->css('font-awesome.min.css') ?>
        <?php echo $this->Html->css('font/stylesheet.css') ?>
        <?php echo $this->Html->css('jquery.fancybox.css') ?>
    </head>

    <body>

        <!--  header start -->
        <?php echo $this->Element('top'); ?>    
        <!-- header end -->   

        <div class='row bg_use_row'>

            <div class='container'>
                <div class='col-md-12'> <h1 style="color: red; font-size: 20px;">Managing Your Career is NOT a one time decision!, But a series of decisions made over your Lifetime</h1></div>                                  
            </div>
        </div>

        <div class='row row_padding_program new_page_color'>

            <div class='div_di'>
                <div class='col-lg-4 col-md-4 col-xs-12 col-sm-12 div_first'>
                    <div class='inner_div_use_lass'>
                        <h1>Student Career Starter</h1>
                        <h3 class="display_para">Free If Your School Is Registered</h3>
                        <p class="display_para">( School Registration Is FREE)</p>
                        <h4>UPGRADE ANYTIME</h4>
                        <div class='inner_div_annual'>       
                            <ul>
                                <li><i class="fa fa-briefcase" aria-hidden="true"></i> Self Marketing Website</li>
                                <li><i class="fa fa-upload" aria-hidden="true"></i> Resume Uploads</li>
                                <li><i class="fa fa-mobile" aria-hidden="true"></i> 3 Application Tracking </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> 3 DIY Reference</li>
                                <li><i class="fa fa-bookmark" aria-hidden="true"></i> 2 Workplace Experiences</li>
                                <li><i class="fa fa-paper-plane" aria-hidden="true"></i> Career Planning</li>
                                <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</li>
                                <li><i class="fa fa-file" aria-hidden="true"></i> Reference Documenting</li>
                                <li><i class="fa fa-trophy" aria-hidden="true"></i> Accomplishments Documenting</li>
                                <li><i class="fa fa-key" aria-hidden="true"></i> Key Skills</li>
                                <li><i class="fa fa-cloud" aria-hidden="true"></i> Career Related Activities </li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> MYCD </li>
                                <li><i class="fa fa-arrows-alt" aria-hidden="true"></i> Job Alerts </li>
                                <li><i class="fa fa-list" aria-hidden="true"></i> Job Fairs </li>
                                <li><i class="fa fa-bell" aria-hidden="true"></i> Application Notifications </li>
                            </ul>
                            <button onclick='window.location.href = "sign_up.html?program=starter&duration=year"'>Free Sign Up</button>
                            <div class="gal">
                                <a class="fancybox" rel="group" href="starter/starter_icon.png"> <button><i class="fa fa-search" style="margin-right: 5px;"></i>Know more about dashboard feature</button></a>
                                <a class="fancybox" rel="group" href="starter/starter_value.png"></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class='col-lg-4 col-md-4 col-xs-12 col-sm-12 div_second'>
                    <div class='inner_div_use_lass'>
                        <h1>Career Advanced</h1>
                        <h3>1 Year $ 28.50</h3>
                        <h4>UPGRADE ANYTIME</h4>

                        <div class='inner_div_annual'>        
                            <ul>
                                <li><i class="fa fa-briefcase" aria-hidden="true"></i> Self Marketing Website</li>
                                <li><i class="fa fa-upload" aria-hidden="true"></i> Resume Uploads</li>
                                <li><i class="fa fa-mobile" aria-hidden="true"></i> 10 Application Tracking </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> 10 DIY References </li>
                                <li><i class="fa fa-bookmark" aria-hidden="true"></i> 5 Workplace Experiences</li>
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
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> MYCD </li>
                                <li><i class="fa fa-arrows-alt" aria-hidden="true"></i> Job Alerts </li>
                                <li><i class="fa fa-list" aria-hidden="true"></i> Job Fairs </li>
                                <li><i class="fa fa-laptop" aria-hidden="true"></i> Online Interview Rooms </li>
                                <li><i class="fa fa-desktop" aria-hidden="true"></i> Help desk support </li>
                            </ul>
                            <!-- <button onclick='window.location.href = "sign_up.html?program=advanced&duration=6month"'>Sign Up For 6 Months</button> -->
                            <button onclick='window.location.href = "sign_up.html?program=advanced&duration=year"'>Sign Up</button>

                            <div class="gal">
                                <a class="fancybox1" rel="group" href="advance/advanced_icon.png"> <button><i class="fa fa-search" style="margin-right: 5px;"></i>Know more about dashboard feature</button></a>
                                <a class="fancybox1" rel="group" href="advance/advance_value.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4 col-md-4 col-xs-12 col-sm-12 div_third'>
                    <div class='inner_div_use_lass'>
                        <h1>All Access 360</h1>
                        <h3>1 Year $ 49.50</h3>

                        <div class='inner_div_annual'>    
                            <ul> 
                                <li><i class="fa fa-briefcase" aria-hidden="true"></i> Self Marketing Website</li>
                                <li><i class="fa fa-upload" aria-hidden="true"></i> Resume Uploads</li>
                                <li><i class="fa fa-mobile" aria-hidden="true"></i> Unlimited Application tracking</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Unlimited DIY References  ( 2 free verifications )</li>
                                <li><i class="fa fa-bookmark" aria-hidden="true"></i> 10 Workplace Experiences</li>
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
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> MYCD </li>
                                <li><i class="fa fa-arrows-alt" aria-hidden="true"></i> Job Alerts </li>
                                <li><i class="fa fa-list" aria-hidden="true"></i> Job Fairs </li>
                                <li><i class="fa fa-laptop" aria-hidden="true"></i> Online Interview Rooms </li>
                                <li><i class="fa fa-globe" aria-hidden="true"></i> Webinars </li>
                                <li><i class="fa fa-desktop" aria-hidden="true"></i> Help Desk support</li>
                            </ul>
                            <!-- <button onclick='window.location.href = "sign_up.html?program=access360&duration=6month"'>Sign Up For 6 Months</button> -->
                            <button onclick='window.location.href = "sign_up.html?program=access360&duration=year"'>Sign Up</button>
                            <div class="gal">
                                <a class="fancybox2" rel="group" href="access/access_icon.png"> <button><i class="fa fa-search" style="margin-right: 5px;"></i>Know more about dashboard feature</button></a>                              
                                <a class="fancybox2" rel="group" href="access/access_value.png"></a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>

        <?php echo $this->Element('footer'); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
        <?php echo $this->Html->script('jquery.fancybox.js') ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".fancybox").fancybox();
            });

            $(document).ready(function () {
                $(".fancybox1").fancybox();
            });

            $(document).ready(function () {
                $(".fancybox2").fancybox();
            });
        </script>
    </body>
</html> 