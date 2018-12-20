<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>MCD | Home</title>

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
                <h1>My Career Dashboard Goals</h1>
            </div>
        </div>

        <div class='row bg_color_row'>
            <div class='container'>
                <div class='inner_container_of_new'>
                    <ul class="nav nav-pills pills_layout">
                        <li class="active"><a data-toggle="pill" href="#home">Career/Academic Goals</a></li>
                        <li><a data-toggle="pill" href="#menu1">Add New Career Goal</a></li>
                        <li><a data-toggle="pill" href="#menu2">View Career Goals</a></li>
                        <li><a data-toggle="pill" href="#menu3">Weekly Goals</a></li>
                        <li><a data-toggle="pill" href="#menu4">Monthly Goals</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class='group_div'>
                                <h4 class='heading_h_use'>Goals must be specific, measurable,attainable,realistic,relevant,time bond
                                </h4>
                                <p>Your career development plan must be specific, measurable, attainable,
                                    realistic and time bound.</p>
                            </div>

                            <div class='group_div'>
                                <h4 class='heading_h_use'>Specific
                                </h4>
                                <p>Your goal needs to be well defined. To be specific you need to ask the what,
                                    where, who questions about your goal. 
                                    Explain very precisely what it is you want to accomplish.</p>
                            </div>
                            <div class='group_div'>
                                <h4 class='heading_h_use'>Measurable
                                </h4>
                                <p>To be measurable, you must know without any doubt when you have
                                    actually reached your goal. 
                                    If the end result is not precisely measurable, you need to redefine your career
                                    development plan so that it is.</p>
                            </div> 
                            <div class='group_div'>
                                <h4 class='heading_h_use'>Attainable
                                </h4>
                                <p>Your goal must be attainable. 
                                    Is it actually possible to achieve this? <br/>
                                    There is a balance between shooting for the stars and pursuing something
                                    that is not really attainable. If it&#39;s probably not attainable, start with a smaller
                                    goal but one that is heading in the same direction but more likely to be
                                    attained.<br/><br/><u>Aim big but start small!</u><br/>
                                    <br/>
                                    A career goal that is attainable by one person may not be attainable by
                                    another depending on their motivation, and experience etc. Assess these
                                    characteristics in yourself first.
                                    <br/>
                                    Have a close look at your goal. 
                                    Can you honestly say that you think it is attainable with the right amount of
                                    effort? If so, go for it.
                                </p>
                            </div>
                            <div class='group_div'>
                                <h4 class='heading_h_use'>Realistic
                                </h4>
                                <p>A goal could be attainable but not realistic. 
                                    For example, it might be possible to become president of your Zimbabwe
                                    based subsidiary, but is it realistic considering that you have four young
                                    children in school and a wife that doesn't want to live there. 
                                    That might be an unrealistic goal even though it is attainable.
                                </p>
                            </div>
                            <div class='group_div'>
                                <h4 class='heading_h_use'>Time Bound
                                </h4>
                                <p>Does your goal have time boundaries?<br/>If it doesn't have a certain date by which it must be achieved, it probably
                                    won't be achieved.
                                    <br/>
                                    Make sure you fill in the target finish date on your sample career
                                    development plan worksheet, otherwise you open yourself up to never
                                    ending procrastination
                                </p>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class='carrier_goal'>
                                <h3 class='group_div'> New Career/ACADEMIC Goals</h3>
                                <h5 class='h5_carrier_goal'>Career Goal 1</h5>
                            </div>
                            <div class="div_form_use">  
                                <div class="none_form">

                                    <input type="text" name="text" placeholder=" Goal Title">
                                </div>
                                <div class="none_form">
                                    <lable><b>Today's Date</b></lable>
                                    <input type="date" id='date_ne' name="text" value="">

                                </div>
                                <div class="none_form">
                                    <lable><b>Target Date</b></lable>
                                    <input type="date" name="text" value="">
                                </div>
                                <div class="none_form">
                                    <lable><b>Date Archived</b></lable>
                                    <input type="date" name="text" value="">
                                </div>
                                <div class='none_form'>
                                    <br/>
                                    <label><b>Personal Benefits from Achieving This Goal. 
                                            Why do I really want to achieve this career goal? Be very specific.       </b><br/>
                                        <b>Possible Obstacles and Solutions to the Goal</b><br/>
                                        <br/>
                                        <b>Obstacles 1:</b> 
                                    </label>
                                </div>
                                <div class='none_form'>
                                    <ol class='list_styl_order'>
                                        <li><input type="text" name="text"></li>
                                        <li><input type="text" name="text"></li>
                                        <li><input type="text" name="text"></li>
                                        <li><input type="text" name="text"></li>
                                        <li><input type="text" name="text"></li>
                                        <li><input type="text" name="text"></li>   
                                    </ol>
                                    <button class='add_class'>Add</button>
                                    <button class='button_sec'>Remove</button>
                                </div>

                                <div class="none_form margin_form"><br/>
                                    <b>Steps Required for Achieving Career Goal</b>
                                    <ol class="list_styl_order_sec">
                                        <li><input type="text" name="text"></li>
                                        <li><input type="text" name="text"></li>
                                        <li><input type="text" name="text"></li>
                                        <li><input type="text" name="text"></li>
                                        <li><input type="text" name="text"></li>
                                        <li><input type="text" name="text"></li>   
                                    </ol>
                                    <button class="add_class_sec">Add</button>
                                    <button class="button_sec_sec">Remove</button>
                                </div>

                                <div class='none_form margin_form'>
                                    <lable>
                                        <b>Obstacle 2</b>
                                        <p><b>Steps Required for Achieving Career Goal</b></p>
                                    </lable>
                                    <br/>

                                    <button data-toggle="pill" href="#menu2">Save</button>
                                    <button>Edit</button>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade padd_ing">
                            <div class="carrier_goal">
                                <h3 class="group_div"> View Career/Academic Goals</h3>
                            </div>
                            <div class="div_form_use width_relative_form">  
                                <div class="none_form">
                                    <input type="text" name="text" placeholder=" Goal Name">
                                </div>

                                <br>
                                <button class='btn_show_modal'>Update</button>
                                <button>View</button>
                                <p class='updated_form'>Academic Goal has been updated Thank you !</p>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade ">
                            adsf
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            adsfdddfadsf
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <?php echo $this->Element('footer'); ?>
    </body>
</html> 