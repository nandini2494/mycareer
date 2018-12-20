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
                <div class=''> <h1>Contact Us</h1>
                </div>        
            </div>
        </div>
        <section class='div_sec new_page_color'>
            <div class='container'>
                <div class='col-lg-7 col-md-7 col-sm-12 col-xs-12'>

                    <div class="col-lg-12 co-m col-md-12 col-sm-12 col-xs-12 bg_first_nav_new contact_data_use new_page_color">
                        <div class="div_form_use div_contact"> 
                            <form method="post">                                
                                <h1>Get In Touch</h1>

                                <div class="none_form">
                                <?php if(isset($msg)) { ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        Thank you for contacting us. We will be in touch with you very soon.
                                    </div>
                                <?php } ?>
                                </div>
                                <div class="none_form">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                                <div class="none_form">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div>
                                <div class="none_form">
                                    <textarea rows='5' placeholder='Comment' name="message"></textarea>
                                </div>
                                <button type="submit">Send</button>
                            </form>
                        </div>  
                        <div class="button_div">

                        </div>
                    </div>
                </div>
                <div class='col-lg-5 col-md-5 col-sm-12 col-xs-12'>
                    <div class='row_space'>

                        <div class='div_spacing_use'>
                            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                                <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <div class='clearfix'></div>
                                <p><a href = 'mailto:Info@mycareerdashboard.com'>Info@mycareerdashboard.com</a></p> 
                            </div> 
                        </div>

                    </div>

                </div>
            </div>

        </section>

    <?php echo $this->Element('footer'); ?>
    </body>
</html> 