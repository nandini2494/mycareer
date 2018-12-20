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

        <?php echo $this->Html->css('school/bootstrap.min.css') ?>
        <?php echo $this->Html->css('school/custom.css') ?>
        <?php echo $this->Html->css('school/responsive_use.css') ?>
        <?php echo $this->Html->css('school/animate.min.css') ?>
        <?php echo $this->Html->css('school/paper-dashboard.css') ?>
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
    </head>

    <body>
        <?php echo $this->Element('school/header') ?>

        <div class="clearfix"></div>      
        <div class="wrapper">
            <?php echo $this->Element('school/sidebar') ?>         

            <div class="main-panel">


                <!-- navigation start -->
                <div class="new_view" style="margin:2% 3% 2% 3%;">	
                    <div class="col-lg-12 col-md-12">
                        <div class="upload_form">
                            <div class="responsive_school_div">
                                <?php foreach ($logo as $image) {
                                if(!empty($image['school_registration']['logo'])) { ?>
                                <img class="responsive_school" src="<?php echo DOMAIN_NAME ?><?php echo $image['school_registration']['logo'] ?>" alt="co-logo">
                                <?php } else { ?>
                                <img class="responsive_school" src="<?php echo DOMAIN_NAME ?>img/school-1.png" alt="co-logo">
                                <?php } } ?>
                            </div>
                            <form method="post" enctype="multipart/form-data">
                                <input type="file" name="logo_img" class="form_group_file" required="">
                                <button type="submit" class="btn_upload">Upload</button>
                            </form>
                        </div>
                    </div>        

                    <!-- navigation start end-->


                    <div class="clearfix"></div>

                </div>
            </div>

            <!--   Core JS Files   -->
            <?php echo $this->Html->script('school/demo/moment.latest.min.js') ?>
            <?php echo $this->Html->script('school/jquery-3.2.1.min.js') ?>
            <?php echo $this->Html->script('school/circularprogress.jquery.js') ?> 

            <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
            <script>
                $('.phone').inputmask("1-(999) 999-9999");
            </script>

            <script>
                $(document).ready(function () {
                    $('.progress .progress-bar').css("width",
                            function () {
                                return $(this).attr("aria-valuenow") + "%";
                            }
                    )
                });
            </script>

            <script>
                window.onscroll = function () {
                    var el = document.getElementById('sticky'),
                            s = window.pageYOffset || document.documentElement.scrollTop, // how much page is scrolled
                            t = document.getElementById('main').getBoundingClientRect().top; // top of main div
                    if (s > t) {
                        el.style.position = 'fixed'; //make position fixed instead of absolute
                    } else {
                        el.style.position = ''; //clear styles if back to original position
                    }
                }
            </script>

        <?php echo $this->Html->script('school/bootstrap.min.js') ?>

    </body>

</html>