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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <div class='row row_eee_sign'>
            <div class='container'>

                <div class="bg_first_nav_new bg_province" style="padding: 13em 0em 13em 0em;">
                    <div class="div_form_use"> 
                        <h1>YOUR PAYPAL TRANSACTION HAS BEEN CANCELED.</h1>
                    </div>  
                    <div class="button_div">

                    </div>

                </div>

            </div>

        </div>

        <?php echo $this->Element('school/school_footer') ?>
        
    </body>
</html>