<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php foreach ($meta_data as $meta) { ?>
        <meta name="description" content="<?php echo $meta['seo_data']['description'] ?>">
        <meta name="keywords" content="<?php echo $meta['seo_data']['keyword'] ?>">      
        <title><?php echo $meta['seo_data']['title'] ?></title>
        <?php } ?>

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

        <div class='row bg_use_row'>
            <div class='container'>
                <div class=''> <h1>About Us</h1>
                </div>        
            </div>
        </div>


        <section class='width_form sect_width new_page_color'>
            <div class='container'>
                <h1>WE ARE A TEAM OF DREAMERS AND CAREER CATCHERS</h1>

                <h3>You build your Career !!We help you get it !! </h3>

                <p>Our powerfull processes and methodologies make it easy to document and track your successes , No spread sheets, or paper!! Just complete freedom to express and document and manage your career 
                </p>
                <div class='col-lg-12 col-sm-12 col-md-12 col-xs-12 none_space'>
                    <h1>WHAT WE DO !!</h1>
                    <p>Our skills are specific and fine-tuned. We are specialists, not generalists. We help build careers and experiences to elevate and empower Individuals</p>
                </div>
                <div class='col-lg-12 col-sm-12 col-md-12 col-xs-12 none_space'>
                    <h1>We are Proud to offer </h1>
                    <p>Create your own career dashboard that reflects you or your brand and get online today. We keep complex techy processes behind the curtain and guarantee that your experience is simple, fun and easy</p> 
                </div>

                <div class='col-lg-12 col-sm-12 col-md-12 col-xs-12 none_space'>
                    <h1>Everyone Can Create their Own Career Dashboard </h1>
                    <p>
                        We built a platform that empowers anyone to create their own career with no coding or design skills needed. </p>
                    <br/>
                    <p>BRAND YOURSELF !!</p>
                </div>
            </div>

        </section>

        <?php echo $this->Element('footer'); ?>
    </body>
</html> 