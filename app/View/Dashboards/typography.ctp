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
    <?php echo $this->Html->css('css/paper-dashboard.css') ?>
    <?php echo $this->Html->css('css/custom_css.css') ?>
    <?php echo $this->Html->css('css/style.css') ?>
    <?php echo $this->Html->css('css/demo/style.css') ?> 
        <?php echo $this->Html->css('css/responsive_use.css') ?>

        <!--  Fonts and icons     -->
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <style>
            .bg_use{background:#eee !important;padding-right:0%; padding-left:0%;}
            .new_view label {padding: 0% 2%;}
            .new_view ul {background: #0000a0 !important;}
        </style>

    </head>
	<?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>

    <div class="main-panel">


        <?php echo $this->Element('dashboard/header') ?>


        <!-- navigation start -->
        <div class="new_view" style="margin:2% 1% 2% 1%;">	
            <div class="col-lg-12 col-md-12  bg_use">

                <ul class="nav nav-tabs  new_proper">
                    <li class="active"><a data-toggle="tab" href="#home">Post a Job</a></li>
                    <li><a data-toggle="tab" href="#menu1">View Jobs</a></li>
                </ul>

                <div class="tab-content tabs_use">
                    <div id="home" class="tab-pane fade in active">

                        <p style="font-size:16px;color:#000;font-weight:bold;padding-top:4%;padding-left:2%;">Tell Us about the possible job</p>
                        <div class="inner_div">
                            <form name="form">

                                <label><h2>Company Name</h2></label>
                                <label><h2>Contact Person</h2></label>
                                <label><input type="text"/></label>
                                <label><input type="text"/></label>
                                <label><h2>Job Title</h2></label>
                                <label><h2>Wage</h2></label>
                                <label><input type="text"/></label>
                                <label><input type="text"/></label>
                                <label>
                                    <select style="padding: 8px 0px;">
                                        <option>Provence</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                    </select></label>

                                <label>
                                    <select style="width:100%;padding: 8px 0px;">
                                        <option>City</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                        <option>Provence</option>
                                    </select></label>


                                <input type="submit" value="Post" class="btn_use_1"/>


                            </form>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="col_i-4"></div>
                        <div class="main_div_use col-lg-12 col-md-12">

                            <h1 class="h_1_use">Urgent Opening for <b style="font-size:14px;padding-top:-1%;">Web Developer</b></h1>
                            <p style="padding-left:3%;padding-top:2%;padding-bottom:1%;">Akansha Telecome Service Center</p>
                            <span><p style="display:inline;padding-left:3%;color:#aba8a8;font-size: 14px;"><i class="fa fa-briefcase" aria-hidden="true"></i> 0-1 Yrs</p>
                                <p style="display:inline;color:#aba8a8; font-size: 14px;
                                   "><i class="fa fa-map-marker" aria-hidden="true"></i> Canada</p></span>
                            <div class="clearfix"></div>
                            <div class="form_main">
                                <div class="col-lg-4 col-md-4">

                                    <p style="color:#6d6d6d;font-size:12px;">Key Skills</p><br/>
                                    <p style="color:#6d6d6d;font-size:12px;">Company Description:</p>
                                </div>
                                <div class="col-lg-8 col-md-8 para_use">
                                    <p style="font-size:12px;">website administrator, webdeveloper</p><br>
                                    <p align="jstify">We have urgent openings for WebDeveloper  position having experience into Html,Php, &amp; Wordpress ...</p>
                                </div><div class="clearfix"></div>
                                <div class="col-lg-12 col-md-12 new_para_use" style="border-top:solid 1px #66615B;margin:2% 0%;">
                                    <p style="padding-top:2%;">$ &nbsp; &nbsp; &nbsp;1,00,000-3,00,000 PA</p><p style="text-align:right;padding-top:2%;">Posted By John, Today</p>

                                </div><div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="main_div_use col-lg-12 col-md-12">
                            <h1 class="h_1_use">Urgent Opening for <b style="font-size:14px;padding-top:-1%;">Web Developer</b></h1>
                            <p style="padding-left:3%;padding-top:2%;padding-bottom:1%;">Akansha Telecome Service Center</p>
                            <span><p style="display:inline;padding-left:3%;color:#aba8a8;font-size: 14px;"><i class="fa fa-briefcase" aria-hidden="true"></i> 0-1 Yrs</p>
                                <p style="display:inline;color:#aba8a8; font-size: 14px;
                                   "><i class="fa fa-map-marker" aria-hidden="true"></i> Canada</p></span>
                            <div class="clearfix"></div>
                            <div class="form_main">
                                <div class="col-lg-4 col-md-4">

                                    <p style="color:#6d6d6d;font-size:12px;">Key Skills</p><br/>
                                    <p style="color:#6d6d6d;font-size:12px;">Company Description:</p>
                                </div>
                                <div class="col-lg-8 col-md-8 para_use">
                                    <p style="font-size:12px;">website administrator, webdeveloper</p><br>
                                    <p align="jstify">We have urgent openings for WebDeveloper  position having experience into Html,Php, &amp; Wordpress ...</p>
                                </div><div class="clearfix"></div>
                                <div class="col-lg-12 col-md-12 new_para_use" style="border-top:solid 1px #66615B;margin:2% 0%;">
                                    <p style="padding-top:2%;">$ &nbsp; &nbsp; &nbsp;1,00,000-3,00,000 PA</p><p style="text-align:right;padding-top:2%;">Posted By John, Today</p>

                                </div><div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="main_div_use col-lg-12 col-md-12">
                            <h1 class="h_1_use">Urgent Opening for <b style="font-size:14px;padding-top:-1%;">Web Developer</b></h1>
                            <p style="padding-left:3%;padding-top:2%;padding-bottom:1%;">Akansha Telecome Service Center</p>
                            <span><p style="display:inline;padding-left:3%;color:#aba8a8;font-size: 14px;"><i class="fa fa-briefcase" aria-hidden="true"></i> 0-1 Yrs</p>
                                <p style="display:inline;color:#aba8a8; font-size: 14px;
                                   "><i class="fa fa-map-marker" aria-hidden="true"></i> Canada</p></span>
                            <div class="clearfix"></div>
                            <div class="form_main">
                                <div class="col-lg-4 col-md-4">

                                    <p style="color:#6d6d6d;font-size:12px;">Key Skills</p><br/>
                                    <p style="color:#6d6d6d;font-size:12px;">Company Description:</p>
                                </div>
                                <div class="col-lg-8 col-md-8 para_use">
                                    <p style="font-size:12px;">website administrator, webdeveloper</p><br>
                                    <p align="jstify">We have urgent openings for WebDeveloper  position having experience into Html,Php, &amp; Wordpress ...</p>
                                </div><div class="clearfix"></div>
                                <div class="col-lg-12 col-md-12 new_para_use" style="border-top:solid 1px #66615B;margin:2% 0%;">
                                    <p style="padding-top:2%;">$ &nbsp; &nbsp; &nbsp;1,00,000-3,00,000 PA</p><p style="text-align:right;padding-top:2%;">Posted By John, Today</p>

                                </div><div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="main_div_use col-lg-12 col-md-12">
                            <h1 class="h_1_use">Urgent Opening for <b style="font-size:14px;padding-top:-1%;">Web Developer</b></h1>
                            <p style="padding-left:3%;padding-top:2%;padding-bottom:1%;">Akansha Telecome Service Center</p>
                            <span><p style="display:inline;padding-left:3%;color:#aba8a8;font-size: 14px;"><i class="fa fa-briefcase" aria-hidden="true"></i> 0-1 Yrs</p>
                                <p style="display:inline;color:#aba8a8; font-size: 14px;
                                   "><i class="fa fa-map-marker" aria-hidden="true"></i> Canada</p></span>
                            <div class="clearfix"></div>
                            <div class="form_main">
                                <div class="col-lg-4 col-md-4">

                                    <p style="color:#6d6d6d;font-size:12px;">Key Skills</p><br/>
                                    <p style="color:#6d6d6d;font-size:12px;">Company Description:</p>
                                </div>
                                <div class="col-lg-8 col-md-8 para_use">
                                    <p style="font-size:12px;">website administrator, webdeveloper</p><br>
                                    <p align="jstify">We have urgent openings for WebDeveloper  position having experience into Html,Php, &amp; Wordpress ...</p>
                                </div><div class="clearfix"></div>
                                <div class="col-lg-12 col-md-12 new_para_use" style="border-top:solid 1px #66615B;margin:2% 0%;">
                                    <p style="padding-top:2%;">$ &nbsp; &nbsp; &nbsp;1,00,000-3,00,000 PA</p><p style="text-align:right;padding-top:2%;">Posted By John, Today</p>

                                </div><div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>

                </div>

            </div>
            <?php echo $this->Element('dashboard/left_side') ?>

            <!-- navigation start end-->

        </div>		
        <div class="clearfix"></div>
        <br/><br/><br/><br/>


    </div>

    <!--   Core JS Files   -->

    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
    <?php echo $this->Html->script('js/bootstrap.min.js') ?>

    <script>
        $(document).ready(function () {
            $(".new_img").change(function () {
                $("#myModal").modal('show');
            });
            $("#ne_co").click(function () {
                $(".new_sec_form").toggle('show');
            });
        });
    </script>

</body>
</html>
