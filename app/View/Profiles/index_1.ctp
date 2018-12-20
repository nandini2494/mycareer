<?php

$user_mcd2 = $this->params['pass']; ?>
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

        <?php echo $this->Html->css('profile/custom.css') ?>     
        <?php echo $this->Html->css('css/bootstrap.min.css') ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <nav class="navbar navbar-inverse normal new_page_color" role="navigation">
            <div class='bg_min_logo'>
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
                            <?php if(sizeof($this->Session->read('guest'))>0) { ?>
                            <li class="log_out">
                                <a href="<?php echo Router::url(['controller'=>'profiles/logout']) ?>">
                                    <p><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</p>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>
            </div>
        </nav> 

        <div class="clearfix"></div>      
        <div class="wrapper">

            <?php if(sizeof($this->Session->read('guest'))>0) { ?>

            <?php 
            foreach ($view_summary as $summary) {
                $name = ucwords($summary['register']['first_name']).' '.ucwords($summary['register']['last_name']);
                $email = $summary['register']['email'];
                $phone = $summary['register']['phone'];
                $profile = $summary['register']['profile_pic'];
                $country = $summary['country']['name'];
                $resume_summary = $summary['resume_summary']['resume_summary'];
                $about_me = $summary['create_profile']['about'];
                $job_type = $summary['create_profile']['work_type'];
                $study_type = $summary['create_profile']['study_type'];
                $university_program = $summary['create_profile']['university_program'];
                $course = $summary['create_profile']['course'];
                $course_start = $summary['create_profile']['course_start'];                
                $course_complete = $summary['create_profile']['course_complete'];
                $school = $summary['create_profile']['school'];
                $accomp_statement = $summary['mission_statement']['accomp_statement'];
                $goal_statement = $summary['mission_statement']['goal_statement'];
                $mission = $summary['mission_statement']['mission'];
            }
            ?>

            <section class="head_bg">
                <div class="container-fluid">
                    <div class="row d-flex">
                        <div class="col-md-8 col-sm-8">
                            <h1 class="p_name"> <?php echo $name; ?> </h1>
                            <h4 class="sm-hfour_n"><?php echo ucwords($country); ?></h4>
                            <ul class="profile_head">
                                <li><?php echo $phone ?></li>
                                <li><a href="#"><?php echo $email ?></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="profile_resume_pic">
                                <img src="<?php echo $this->webroot ?><?php echo $profile ?>" alt="profile_img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- seciton aside goes here -->

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 no_padding">
                            <aside class="aside_bg">
                                <div class="expertise">
                                    <h3 class="sm-hfour">Expertise</h3>
                                    <ul>
                                        <li>Leadership</li>
                                        <li>Vendor Management</li>
                                        <li>Operations</li>
                                        <li>Project Management</li>
                                        <li>IT Management</li>
                                        <li>System Support</li>
                                        <li>Customor Experience</li>
                                        <li>Governace and Compliance</li>
                                        <li>Process Design & Optimization</li>
                                        <li>Cyber Security</li>
                                        <li>Training</li>
                                        <li>Telecommunication</li>
                                        <li>Wireless</li>
                                    </ul>
                                </div>

                                <!-- second seciton for the operational skills -->
                                <div class="expertise">
                                    <h3 class="sm-hfour">Operations Skills</h3>
                                    <ul>
                                        <li>Finance</li>
                                        <li>Sales Operations</li>
                                        <li>Business to Business</li>
                                        <li>Retail</li>
                                        <li>Fraud Prevention</li>
                                        <li>Indirect</li>
                                        <li>Training</li>
                                        <li>Information Technologies</li>
                                    </ul>
                                </div>


                                <!-- third  seciton for the reference skills -->
                                <div class="expertise">
                                    <h3 class="sm-hfour">Referance</h3>
                                    <h4>Krish Fannin</h4>
                                    <ul>
                                        <li>CEO Founder Intervate</li>
                                        <li>mail@kencordova.com</li>
                                        <li><strong>Twitter: </strong> @Kencordova</li>
                                        <li><a href="#"> www.kencordova.com </a></li>
                                    </ul>
                                </div>

                                <div class="expertise">
                                    <h4>Krish Fannin</h4>
                                    <ul>
                                        <li>CEO Founder Intervate</li>
                                        <li>mail@kencordova.com</li>
                                        <li><strong>Twitter: </strong> @Kencordova</li>
                                        <li><a href="#"> www.kencordova.com </a></li>
                                    </ul>
                                </div>


                                <div class="expertise">
                                    <h4>Krish Fannin</h4>
                                    <ul>
                                        <li>CEO Founder Intervate</li>
                                        <li>mail@kencordova.com</li>
                                        <li><strong>Twitter: </strong> @Kencordova</li>
                                        <li><a href="#"> www.kencordova.com </a></li>
                                    </ul>
                                </div>


                            </aside>
                        </div>
                        <div class="col-md-9">
                            <div class="profile">
                                <h3>Resume Summary</h3>
                                <p><?php echo $resume_summary; ?></p>
                                <div class="under_line_prof"></div>
                            </div>


                            <!-- expericence section goes here -->
                            <div class="profile">
                                <div class="ex-con">
                                    <h3>Mission Statement</h3>
                                    <h4>Accomplishment Statement: <?php echo $accomp_statement; ?></h4>
                                    <h4>Occupational Goal Statement: <?php echo $goal_statement; ?></h4>
                                    <h4>Personal Mission Statement: <?php echo $mission; ?></h4>
                                </div>
                                <div class="under_line_prof"></div>
                            </div>
                            <div class="profile">
                                <div class="ex-con">
                                    <h3>A Bit About me</h3>
                                    <p><?php echo $about_me; ?></p>

                                </div>
                                <div class="under_line_prof"></div>
                            </div>

                            <!-- third section goes here -->
                            <div class="profile">
                                <h3>Education </h3>
                                <div class="education">
                                    <h4><?php echo $study_type ?></h4>
                                    <h4><?php echo $school ?></h4>
                                    <p><?php echo $university_program ?></p>
                                    <p><?php echo $course ?></p>
                                    <p><?php if($course_start != '') { echo date('d-M-Y',strtotime($course_start)).'-'.date('d-M-Y',strtotime($course_complete)); } ?></p>
                                </div>                                
                            </div>

                            <!-- forth section goes here -->
                            <div class="profile">
                                <h3>Looking For</h3>
                                <div class="education">
                                    <h4><?php echo $job_type; ?></h4>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>       

            <?php } else { ?>

            <?php if(isset($msg)) { ?>
            <div class="alert alert-danger alert-dismissible fade in data_alert_div">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $msg; ?>
            </div>
                    <?php } ?>

            <div class="col-lg-12 col-md-12">
                <ul class="nav nav-tabs new_proper">   
                    <li class="active"><a data-toggle="tab" href="#sign_up">SignUp / Login</a></li>
                </ul>
                <div class="tab-content tabs_use" style="background-color: #fff;">
                    <div id="sign_up" class="tab-pane fade active in" style="padding-left: 3em; padding-right: 3em;">
                        <form method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" name="mcd" value="<?php echo $user_mcd ?>" readonly="" style="background-color: #fff;">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="company_name" placeholder="Company Name" required="">
                            </div>
                            <div class="form-group">
                                <button type="submit" style="margin-top: 1em;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>

            <?php } ?>

        </div>


        <div class="modal fade" id="added" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <form method="post" id="add_modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Added to My CD</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="option_id" id="option_id1">                       
                            <div class="alert alert-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> What Permission do you want?</div>
                            <input type="radio" name="select_data" value="View" required="">&nbsp;View
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="select_data" value="View/Print" required="">&nbsp;View/Print
                        </div>
                        <div class="modal-footer ">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i> Yes</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i> No</button>
                        </div>
                    </div>
                    <!-- /.modal-content --> 
                </div>
                <!-- /.modal-dialog --> 
            </form>
        </div>

        <div class="modal fade" id="myModal_11" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><center>Monthly Volunteer Report</center></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <h6>Month</h6>                          
                                <span id="date_val"></span>
                            </div> 
                            <div class="col-lg-9">
                                <div class="col-lg-4">
                                    <h6>Per Day(Hours)</h6>
                                    <span id="per_day_val"></span>
                                </div>
                                <div class="col-lg-4">
                                    <h6>Per Week(Hours)</h6>
                                    <span id="per_week_val"></span>
                                </div>
                                <div class="col-lg-4">
                                    <h6>Total(Hours)</h6>
                                    <span id="per_month_val"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h6>Total Hours: <span id="total_hrs_val"></span></h6>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <form method="post" id="message_data">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Contact Me</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="user_id" value="<?php echo $user_mcd; ?>">
                            <div class='form-group'>
                                <label for="name_id">Name</label>
                                <input type="text" id="name_id" name="user_name" class="form-control" required="">
                                <div class="clearfix"></div>
                            </div>                               
                            <div class='form-group'>
                                <label for="company_id">Company</label>
                                <input type="text" id="company_id" name="company_name" class="form-control" required="">
                                <div class="clearfix"></div>
                            </div>
                            <div class='form-group'>
                                <label for="phone_id">Telephone</label>
                                <input type="text" id="phone_id" name="telephone" class="form-control phone">
                                <div class="clearfix"></div>
                            </div>
                            <div class='form-group'>
                                <label for="email_id">Email</label>
                                <input type="email" id="email_id" name="email" class="form-control" required="">
                                <div class="clearfix"></div>
                            </div>
                            <div class='form-group'>
                                <label for="message_id">Message</label>
                                <textarea row="5" id="message_id" name="message" class="form-control" required=""></textarea>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="submit" class="btn btn-info"> Send</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                    <!-- /.modal-content --> 
                </div>
                <!-- /.modal-dialog --> 
            </form>
        </div>

        <!--   Core JS Files   -->
            <?php echo $this->Html->script('js/demo/moment.latest.min.js') ?>
            <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
            <?php echo $this->Html->script('js/circularprogress.jquery.js') ?> 

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

        <script>
            function print_data(id, table_name) {
                var print_window = window.open("<?php echo DOMAIN_NAME ?>" + "my_cd_data.html?id=" + id + "&table_name=" + table_name);
                print_window.addEventListener('load', function () {
                    print_window.print();
                    print_window.close();
                }, true);
            }
        </script>

        <script>
            function update_view(tab_name) {
                var id = <?php echo $indus_id ?>;
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'dashboards/view_selected_data']) ?>",
                    type: "POST",
                    data: {"select_tab": tab_name, "indus_id": id},
                    success: function (data) {
                    }
                });
            }
        </script>

        <script>
            function view_monthly_record(id) {
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'dashboards/view_monthly_volunteer']) ?>",
                    type: "POST",
                    data: {'vol_id': id},
                    success: function (data) {
                        var response = JSON.parse(data);
                        var per_day = response[0].volunteer_work.per_day.split('*');
                        var per_week = response[0].volunteer_work.per_week.split('*');
                        var per_month = response[0].volunteer_work.per_month.split('*');
                        var total_hrs = '0';
                        var months = [
                            'Jan',
                            'Feb',
                            'Mar',
                            'Apr',
                            'May',
                            'Jun',
                            'Jul',
                            'Aug',
                            'Sep',
                            'Oct',
                            'Nov',
                            'Dec'
                        ];
                        var date_first = new Date(response[0].volunteer_work.from_service_date);
                        var date_second = new Date(response[0].volunteer_work.to_service_date);
                        var month_val = (date_second.getFullYear() - date_first.getFullYear()) * 12;
                        month_val -= date_first.getMonth() + 1;
                        month_val += date_second.getMonth() + 2;
                        var html1 = "<span id='date_val'>";
                        for (var i = 0; i < month_val; i++) {
                            html1 += "<p>" + months[date_first.getMonth()] + " - " + date_first.getFullYear() + "</p>";
                            var newDate = date_first.setMonth(date_first.getMonth() + 1);
                            date_first = new Date(newDate);
                        }
                        html1 += "</span>";
                        var html2 = "<span id='per_day_val'>";
                        for (var j = 0; j < (per_day.length); j++) {
                            html2 += "<p>" + per_day[j] + "</p>";
                        }
                        html2 += "</span>";
                        var html3 = "<span id='per_week_val'>";
                        for (var k = 0; k < (per_week.length); k++) {
                            html3 += "<p>" + per_week[k] + "</p>";
                        }
                        html3 += "</span>";
                        var html4 = "<span id='per_month_val'>";
                        for (var l = 0; l < (per_month.length); l++) {
                            html4 += "<p>" + per_month[l] + "</p>";
                            total_hrs = parseInt(per_month[l]) + parseInt(total_hrs);
                        }
                        html4 += "</span>";
                        $("#date_val").replaceWith(html1);
                        $("#per_day_val").replaceWith(html2);
                        $("#per_week_val").replaceWith(html3);
                        $("#per_month_val").replaceWith(html4);
                        $("#total_hrs_val").text(total_hrs);
                        $("#myModal_11").modal("show");
                    }
                });
            }
        </script>

        <script>
            $("#contact_me").click(function () {
                $("#message").modal('show');
            });
        </script>

        <script>
            $("#message_data").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'dashboards/industryMessage']) ?>",
                    type: "post",
                    data: new FormData(this),
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        alert("Message Sent");
                        location.reload();
                    }
                });
            });
        </script>

        <script>
            $("#like_button").click(function () {
                var industry_id = '<?php echo $industry_id ?>';
                var user_mcd = '<?php echo $user_mcd2[0]; ?>';
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'dashboards/industryLiked']) ?>",
                    type: "post",
                    data: {'indus_id': industry_id, 'mcd': user_mcd},
                    success: function (data) {
                        location.reload();
                    }
                });
            });
        </script>

        <script>
            $("#unlike_button").click(function () {
                var industry_id = '<?php echo $industry_id ?>';
                var user_mcd = '<?php echo $user_mcd2[0]; ?>';
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'dashboards/industryUnLiked']) ?>",
                    type: "post",
                    data: {'indus_id': industry_id, 'mcd': user_mcd},
                    success: function (data) {
                        location.reload();
                    }
                });
            });
        </script>

        <?php echo $this->Html->script('js/bootstrap.min.js') ?>

    </body>

</html>