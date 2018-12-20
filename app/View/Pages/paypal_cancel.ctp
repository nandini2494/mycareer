<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>MCD  | SignUp</title>

        <!-- Bootstrap include file -->
        <?php echo $this->Html->css('bootstrap.min.css') ?>
        <?php echo $this->Html->css('custom.css') ?>
        <?php echo $this->Html->css('responsive_use.css') ?>
        <?php echo $this->Html->css('font-awesome.min.css') ?>
        <?php echo $this->Html->css('font/stylesheet.css') ?>       
    </head>
    <body>


        <!--  header start -->
        <?php echo $this->Element('top'); ?>    
        <!-- header end -->  

        <div class='row row_eee_sign'>
            <div class='container'>

                <div class="bg_first_nav_new bg_province" style="padding-bottom: 15em;">
                    <h1 style="padding-top: 5em;">Your PayPal transaction has been canceled.</h1>                    
                </div>

            </div>

        </div>

        <?php echo $this->Element('footer') ?>

    </body>
</html> 