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
                <div class=''>
                    <h1>Recruit & Hire</h1>
                </div>
            </div>
        </div>
        <section class='width_form sect_width new_page_color' style="padding: 0em 0em;">
            <div class='container'>

                <div class="for_padding_top">
                    <h1 style="color: #bb2121; font-weight: 700; font-size: 22px;font-size: 27px;text-align: center;">POST YOUR JOBS FOR " FREE "</h1>
                    <h1 style="color: #254094; font-weight: 700; font-size: 28px;">Reach University & College Students Across Canada.</h1>
                    <!--<h1 style="color: #bb2121; text-align: center; padding-bottom: 28px;">65 to 80% of all jobs are found through networking.</h1>-->
                    <p>Regardless of whether your company is looking to hire students or recent graduates, there are significant benefits associated with campus recruiting and hiring. Campus recruiting and Hiring allows organizations to tap into a large pool of diverse and highly educated candidates for current hiring needs and to create pipelines for future opportunities.The most important advantage of campus recruitment and hiring is that new grads are likely to dive right into a new role, eager to learn and contribute with positive energy and fresh knowledge.</p>
                </div>  
            </div>



            <div class="container-fluid" style="padding:0 !important;">
                <div class="bg_section_hire">
                    <h2>Benefits Of Posting Jobs With My Career Dashboard</h2>
                    <div class="container mg-tp">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="hire_1">
                                    <h4>Multi- School<span> Job Posting</span></h4>
                                    <div class="s-tm">
                                        <i class="fa fa-university fa-5x" aria-hidden="true"></i>
                                    </div>
                                    <p>With just a few clicks, post your jobs across dozens of schools - for free.</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="hire_1">
                                    <h4>Powerful Applicant<span>Filtering</span></h4>
                                    <div class="s-tm">	
                                        <img src="img/verified-protection.png" alt="verfied">
                                    </div>
                                    <p>Narrow down potential hires to the best fits through our advanced filtering options.</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="hire_1">
                                    <h4>Direct Student<span> Messaging</span></h4>
                                    <div class="s-tm">
                                        <img src="img/message-group.png" alt="verfied">
                                    </div>
                                    <p>See a candidate you like? Contact them directly through My Career Dashboard</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">

                <h2 class="h-tag">Why My Career Dashboard Recruiting and Hiring?</h2>
                <div class="line-draw"></div> 

                <div class="row">
                    <div class="col-md-4">
                        <div class="sec_counter">
                            <i class="fa fa-building-o fa-5x" aria-hidden="true"></i>
                            <h3>Universities</h3>
                            <h2><span class="counter" data-count="96">0</span></h2>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="sec_counter">
                            <img src="img/graduate-student.png">
                            <h3>University Students</h3>
                            <span class="counter" data-count="1.8">0</span> <span class="million">million</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="sec_counter">
                            <i class="fa fa-briefcase fa-5x"></i>
                            <h3>Trade School</h3>
                            <h2><span class="counter" data-count="358555">0</span></h2>
                            <h4>(Students)</h4>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="sec_counter">
                            <img src="img/university-campus.png">
                            <h3> Colleges</h3>
                            <h2><span class="counter" data-count="150">0</span></h2>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="sec_counter">
                            <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
                            <h3>Full-Time Students</h3>
                            <h2><span class="counter" data-count="900000">0</span></h2>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="sec_counter">
                            <img src="img/part_time.png">
                            <h3>Part-Time Students</h3>
                            <span class="counter" data-count="1.5">0</span> <span class="million">million</span>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <h4 class="clr_mahroom">The Choice Is Simple</h4>
                    <div class="col-md-12 list_data_div">
                        <div class="col-md-6">
                            <h5>Tells A Professional Narrative In A Compelling Way !</h5>
                            <h5>Generates Credibility</h5>
                            <h5>Helps Potential employers Visualize Working With Them</h5>
                            <h5>Sets them Apart, Especially An Online Version</h5>
                        </div>
                        <div class="col-md-6">
                            <h5>Gives A Chance To Show Your Creativity</h5>
                            <h5>Provides A Strong Supplement To Their Verbal Skills</h5>
                            <h5>Demonstrates Consistency</h5>
                            <h5>Reduces Hiring Time By 80%</h5>
                        </div>
                    </div>
                </div>
                <div class="for_padding_top" style="padding-bottom: 1em;">
                    <button class="btn btn-danger" id="create_account">Create Your Account </button>
                    <button class="btn btn-danger" id="have_account">Already have an account </button>
                    <button class="btn btn-danger" id="look_up">Look Student Up</button>
                </div>
            </div>

        </div>
    </section>

    <div class="modal fade" id="lookup_login" role="dialog">
        <div class="main_div nav nav-pills">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content width_form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <span class="active">
                            <h2 class="modal-title login_deialts" data-toggle="pill" href="#home">Login Form</h2>
                        </span>
                    </div>
                    <div class="modal-body">
                        <div class='images_pop_up'>
                            <img src='<?php echo DOMAIN_NAME ?>img/co-logo.png' alt='img_form'/>
                        </div>
                        <div id="home" class="tab-pane fade active in" style="border:none; background-color: #eee; padding: 0px;">
                            <form id="lookup_signIn" method="post">
                                <div class="div_form_use">
                                    <div id="signIn_msg" style="color: #a94442;background-color: #f2dede;padding: 15px;border: 1px solid #ebccd1; border-radius: 4px;font-size: 0.85em;margin-bottom: 2em; display: none"></div>
                                    <div class="none_form">
                                        <input type="text" name="mcd" placeholder="MCD" required="">
                                    </div>
                                    <div class="none_form">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="none_form">
                                        <input type="password" name="password" placeholder="Password" required="">
                                    </div>
                                    <div class="none_form">
                                        <input type="text" name="company_name" placeholder="Company Name" required="">
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="recruiter_signup" role="dialog">
        <div class="main_div nav nav-pills">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content width_form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <span class="active">
                            <h2 class="modal-title login_deialts" data-toggle="pill" href="#home">Signup Form</h2>
                        </span>
                    </div>
                    <div class="modal-body">
                        <!--<div class='images_pop_up'>
                            <img src='<?php echo DOMAIN_NAME ?>img/co-logo.png' alt='img_form'/>
                        </div>-->
                        <div id="home" class="tab-pane fade active in" style="border:none; background-color: #eee; padding: 0px;">
                            <form id="carrer_signUp" method="post">
                                <div class="div_form_use">
                                    <div id="signIn_msg" style="color: #a94442;background-color: #f2dede;padding: 15px;border: 1px solid #ebccd1; border-radius: 4px;font-size: 0.85em;margin-bottom: 2em; display: none"></div>
                                    <div class="none_form">
                                        <input type="text" name="title" placeholder="Title" required="">
                                    </div>
                                    <div class="row">
                                        <div class='none_form col-md-6'>
                                            <input type="text" name="company_name" placeholder="Company Name" required="">
                                        </div>
                                        <div class="none_form col-md-6">
                                            <input type="email" name="email" placeholder="Contact Email" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class='none_form col-md-6'>
                                            <input type="text" name="username" placeholder="Username" required="">
                                        </div>
                                        <div class="none_form col-md-6">
                                            <input type="password" name="password" placeholder="Password" required="">
                                        </div>
                                    </div>
                                    <div class="none_form">
                                        <textarea name="address" placeholder="Address" required=""></textarea>
                                    </div>
                                    <div class="row">
                                        <div class='none_form col-md-4'>
                                            <input type="text" name="country" placeholder="Country" required="">
                                        </div>
                                        <div class="none_form col-md-4">
                                            <input type="text" name="state" placeholder="State/Province" required="">
                                        </div>
                                        <div class="none_form col-md-4">
                                            <input type="text" name="city" placeholder="City">
                                        </div>
                                    </div>

                                    <div class="none_form">
                                        <label for="checked1" style="cursor: pointer;">
                                            <input type="checkbox" id="checked1" name="term_condition" required="" style="margin-bottom: 20px; margin-right: 10px;">Terms and Conditions
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="career_login" role="dialog">
        <div class="main_div nav nav-pills">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content width_form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <span class="active">
                            <h2 class="modal-title login_deialts" data-toggle="pill" href="#home">Login Form</h2>
                        </span>
                    </div>
                    <div class="modal-body">
                        <div class='images_pop_up'>
                            <img src='<?php echo DOMAIN_NAME ?>img/co-logo.png' alt='img_form'/>
                        </div>
                        <div id="home" class="tab-pane fade active in" style="border:none; background-color: #eee; padding: 0px;">
                            <form id="carrer_signIn" method="post">
                                <div class="div_form_use">
                                    <div id="signIn_msg" style="color: #a94442;background-color: #f2dede;padding: 15px;border: 1px solid #ebccd1; border-radius: 4px;font-size: 0.85em;margin-bottom: 2em; display: none"></div>
                                    <div class="none_form">
                                        <input type="text" name="username" placeholder="Username" required="">
                                    </div>
                                    <div class="none_form">
                                        <input type="password" name="password" placeholder="Password" required="">
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php echo $this->Element('footer'); ?>
    <script>
        $("#look_up").click(function () {
            $('#lookup_login').modal('show');
        });
    </script>

    <script>
        $('#create_account').click(function () {
            $('#recruiter_signup').modal('show');
        });
    </script>

    <script>
        $('#have_account').click(function () {
            $('#career_login').modal('show');
        });
    </script>

    <script>
        $('#lookup_signIn').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: '<?php echo Router::url(['controller' => 'pages/career_login']) ?>',
                type: 'POST',
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    var response = JSON.parse(data);
                    if (response.mcd > 0) {
                        window.location = '<?php echo $this->base ?>/my_cd.html?mcd_data=' + response.mcd;
                    } else {
                        alert('Wrong Details. Try Again !');
                    }
                }
            });
        });
    </script>

    <script>
        $('#carrer_signUp').submit(function (e) {
            e.preventDefault();
            $.ajax({
                'url': '<?php echo Router::url(['controller'=>'pages/recruiter_signup']) ?>',
                'type': 'POST',
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data == 0) {
                        alert("Username already Exist");
                    } else if (data == 2) {
                        alert("Email Id already Exist");
                    } else {
                        alert("Your Information Submitted successfully");
                        location.reload();
                    }
                }
            });
        });
    </script>

    <script>
        $('#carrer_signIn').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: '<?php echo Router::url(['controller' => 'pages/carrer_signIn']) ?>',
                type: 'POST',
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    var response = JSON.parse(data);
                    if (response.status == 1) {
                        window.location = '<?php echo $this->base ?>/job_tracking.html';
                    } else {
                        alert('Wrong Details. Try Again !');
                    }
                }
            });
        });
    </script>

    <!-- counter .js -->	
    <script>
        $('.counter').each(function () {
            var $this = $(this),
                    countTo = $this.attr('data-count');

            $({countNum: $this.text()}).animate({
                countNum: countTo
            },
                    {

                        duration: 8000,
                        easing: 'linear',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });



        });
    </script>

</body>
</html>