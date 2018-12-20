<?php ?>
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
        <?php echo $this->Html->css('css/paper-dashboard.css') ?>
        <?php echo $this->Html->css('css/custom_css.css') ?>    
        <?php echo $this->Html->css('css/demo/style.css') ?>
        <?php echo $this->Html->css('css/style.css') ?>  
        <?php echo $this->Html->css('css/recruit.css') ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo $this->webroot ?>ckeditor/ckeditor.js"></script>
        <script src="<?php echo $this->webroot ?>ckeditor/samples/js/sample.js"></script>
        <link rel="stylesheet" href="<?php echo $this->webroot ?>ckeditor/samples/css/samples.css">
        <link rel="stylesheet" href="<?php echo $this->webroot ?>ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top normal new_page_color" role="navigation">
            <div class='row bg_min_logo'>
                <div class='container container1'>
                    <div class='col-lg-12 col-sm-12 col-xs-12 col-md-12'>
                        <p class='pull-left'>
                            <i class="fa fa-envelope" aria-hidden="true"></i>  &nbsp; &nbsp;info@mycareerdashboard.com
                        </p>               

                        <p class='pull-right'>Application Tracking & Career Management </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class='div_padding_use'>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href=""><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/co-logo.png" alt="co-logo"></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">

                        <ul class="nav navbar-nav navbar-right nav_use_custom">
                            <li class="welcome_data">WELCOME TO MY CAREER DASHBOARD</li>
                            <li class="log_out">
                                <a href="<?php echo Router::url(['controller'=>'recruiters/logout']) ?>">
                                    <p><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>