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
        <div class="col-xs-12 well" style="padding: 11.35em 0em;">
            <h3 style="text-align: center; color: #bd0000;">Thank You For Verifying the Document. <br/><br/>Form is submitted successfully.</h3>
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
    </body>
</html>