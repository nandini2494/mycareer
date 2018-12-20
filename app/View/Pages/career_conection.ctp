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
                <div class=''> <h1>Career Connection</h1>
                </div>        
            </div>
        </div>


        <section class='width_form sect_width new_page_color'>
            <div class='container'>
                <h1 style="color: #254094; font-weight: 700; font-size: 28px; text-align: center;">Networking can be very helpful to your career !  And networking works! </h1>
                <h1 style="color: #bb2121; text-align: center; padding-bottom: 28px;">65 to 80% of all jobs are found through networking.</h1>

                <p>The idea is to develop a network of friendly/career people who share information to help each other. It is best known as a strategy for opening the hidden job market, for getting a job or a placement. Because many jobs (some would say most) are not advertised, it is essential that you develop friendly relationships with people who can tip you off to job openings -- perhaps even introduce you to the person who is doing the hiring. There is some truth in, "It's not what you know, but who you know."
                </p>
                <div class='col-lg-12 col-sm-12 col-md-12 col-xs-12 none_space'>
                    <p>Networking has other benefits. You are creating a community of people who support each other, who provide emotional support and information that will help each other. You will learn of new developments in your field: new tools, processes, leaders, training programs, products and services. You may discover the solution to a problem you face at school . And, you may have the satisfaction of providing the key piece of information that makes a real difference in the life of one of those in your network.</p>                   
                </div>
                <div class="clearfix"></div>
                <h1 style="text-align: center; padding-top: 28px;"><a style="color: #bb2121; font-size: 20px;font-weight: 600;" href="<?php echo $this->webroot ?>programs_data.html">Join Now For Free</a></h1>
            </div>

        </section>

        <?php echo $this->Element('footer'); ?>
    </body>
</html> 