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
                <div class=''> <h1>My Career</h1> </div>        
            </div>
        </div>
        <section class='div_sec new_page_color' style="padding-bottom: 3.4em;">
            <div class='container new_page_color'>
                <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 bg_first_nav_new new_page_color'>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <img src="<?php echo DOMAIN_NAME ?>img/co-logo1.png" style="padding-top: 4em; width: 90%;">
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <p style="padding-top: 4em; font-size: 17px;padding-right: 2em; padding-left: 1em;text-align: justify; color: #000;">                                
                                <span style="color: #c10e0e;">My Career</span> online platform provides employers with authorized exclusive access to participants career dashboard which will allow participants the ability to showcase their talents at no cost to the employer.
                            </p>
                        </div>

                    </div>
                </div>
                <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>                   
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 bg_first_nav_new new_page_color'>                        

                        <form method="post">
                            <div class="div_form_use div_my_career">
                                <?php if(isset($message)) { ?>                  
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <?php if($message == 0) { ?>
                                    Wrong Details. Try Again !
                                    <?php } ?>
                                </div>
                                <?php } ?>
                                <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="padding-right: 1em;">
                                    <div class="none_form">
                                        <input type="text" name="mcd" placeholder="MCD">
                                    </div>
                                    <div class="none_form">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>  
                                <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>
                                    <div class="none_form">
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                    <div class="none_form">
                                        <input type="text" name="company_name" placeholder="Company Name">
                                    </div>
                                </div>
                            </div>  
                            <div class="button_div">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>

        </section>

    <?php echo $this->Element('footer'); ?>
    </body>
</html> 