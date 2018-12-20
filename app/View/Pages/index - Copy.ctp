<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php foreach ($meta_data as $meta) { ?>
        <meta name="description" content="<?php echo $meta['seo_data']['description'] ?>">
        <meta name="keywords" content="<?php echo $meta['seo_data']['keyword'] ?>">      
        <title><?php echo $meta['seo_data']['title'] ?></title>
        <?php } ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
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

        <!-- slider start -->
        <div class='row row_space_use' style="background-color: #eee;">
            <img src="<?php echo DOMAIN_NAME ?>img/banner_new_img.png">
            <div class="banner_div">
                <div class="banner_div_use">
                    <h3>Welcome To My Career Dashboard</h3>
                    <h1>Create Your <span style="color: #d2550e;">FREE</span> Online Career Portfolio!</h1>
                    <h4>Start Branding & Marketing Yourself Now</h4>
                    <button class="login_data" onclick='window.location.href = "programs_data.html"'>Get Started</button>
                </div>
            </div>
        </div>
        <!-- slider end -->

        <!-- nav part start -->

        <section id='section_nav'>
            <div class='container main_div_nav'>
                <h1>My Career Dashboard will help you plan, develop, and document a visually captivating presentation to showcase your credentials on your own dashboard website</h1> 
                <h3>Getting discovered and differentiating yourself uniquely is where personal branding and marketing comes in</h3>
            </div>
        </section>

        <div class='row display_table'>

            <div class='bg_first_nav co-m col-lg-6 col-md-6 col-sm-12 col-xs-12'>
                <p style="text-transform: uppercase; font-weight: bold; font-size: 15px;">Career Development</p><br/>
                <p>My Career Dashboard is an internationally recognized online career development platform that engages and empowers individuals to successfully fulfill their roles in their careers. Individuals will have access to the most advanced career development tools available that will establish clear strategies for their careers.
                </p>
            </div>

            <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12 bg_second_use'>
                <p> With so much competition for jobs, it is necessary for anyone looking for work to do all they can to stand out. A polished resume and an eye-catching cover letter are no longer enough to get a job. Today's workers/students must use the tools of My Career Dashboard to market themselves to separate themselves from the hundreds of other applicants who may be competing for the same job.</p>
            </div>
        </div>
        <section id="section_nav">
            <div class="container main_div_nav">
                <h1 class="heading_d"><span class="span_use"></span>Build a powerful personal brand that will differentiate you and allow you to compete in a competitive market </h1> 
                <h3>My Careers Dashboard can help you to:</h3>
            </div>
        </section>

        <div class='row display_table' id='use_div_div'>

            <div class='bg_first_nav div_expand_data co-m col-lg-6 col-md-6 col-sm-12 col-xs-12'>
                <p style="text-transform: uppercase; font-size: 15px; font-weight: bold;">Benefits Of My Career Dashboard</p><br/>
                <p class='images_track' style="color:#fb3535;"> A Resume Tells a Story about You!! My Career Dashboard Shows and Demonstrates Proof Of Your Career.</p>
                <ul>
                    <li>Demonstrate with Documented Proof of your Skills & Knowledge</li>
                    <li>Potential Employers Can View Your Career Dashboard Online 24/7</li>
                    <li>Never Lose a Reference again with D.I.Y Reference Verification</li>
                    <li>Identify Strengths and Weaknesses for Development</li>
                    <li>Prepare for interviews</li>
                    <li>Review and evaluate past experiences and learning </li>
                    <li>Present your knowledge and skills </li>
                    <li>Highlight your transferable skills </li>
                    <li>Increase your personal confidence </li>
                    <li>Be more competitive in today’s labour market </li>
                    <li>Illustrate how your qualifications have progressed </li>
                    <li>Set career and education goals </li>
                    <li>Keep an ongoing record of skills and achievements </li>
                    <li>Identify areas that require further study </li>
                    <li>Document and track references </li>
                    <li>Notifications of important events/dates</li>
                    <li>Document and track career goals </li>
                    <li>Create a career network </li>
                    <li>Accelerated hiring process </li>
                </ul>
                <br/>

                <p style='visibility:hidden;'><b>( Note)</b> If they click student they must enter the school name , change the word Managing my career to Career Advancement 
                    Also because we are now in the US , with that tab were Province is have Canada, USA, UK when the click
                </p>
            </div>

            <div class='col-lg-6 co-m col-md-6 col-sm-12 col-xs-12 bg_first_nav_new'>
                <p style="text-transform: uppercase; font-size: 17px; font-weight: bold;">Features </p>
                <ul>
                    <li><i class="fa fa-upload" aria-hidden="true"></i>Resume Uploads in secured area, available 24/7</li>
                    <li><i class="fa fa-mobile" aria-hidden="true"></i>  Unlimited Job & School Application tracking & Notification</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Unlimited DIY References</li>
                    <li><i class="fa fa-paper-plane" aria-hidden="true"></i>Career Planning & Action Plan</li>
                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>Education Background Documenting</li>
                    <li><i class="fa fa-file" aria-hidden="true"></i> Job and School Reference Documenting and Tracking</li>
                    <li><i class="fa fa-trophy" aria-hidden="true"></i> Accomplishments Documenting</li>
                    <li><i class="fa fa-key" aria-hidden="true"></i> Key Skills/Essential Skills Learning and Documenting</li>
                    <li><i class="fa fa-cloud" aria-hidden="true"></i> Career Related Activities/Volunteer Tracking </li>
                    <li><i class="fa fa-sticky-note" aria-hidden="true"></i> Interview Notes </li>
                    <li><i class="fa fa-magic" aria-hidden="true"></i> New Job Notes</li>
                    <li><i class="fa fa-search-minus" aria-hidden="true"></i> Job Search Site Tracking/Ranking</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> Career Contacts/Network Development</li>
                    <li><i class="fa fa-bullseye" aria-hidden="true"></i> Goal Documenting</li>
                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> Task List Documenting and Notifications </li>
                    <li><i class="fa fa-refresh" aria-hidden="true"></i> Essentials Skills</li>
                    <li><i class="fa fa-signal" aria-hidden="true"></i> S.W.O.T Analysis Documenting</li>
                    <li><i class="fa fa-bell" aria-hidden="true"></i> Application Notification </li>
                    <li><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Event/Workshop Notifications</li>
                    <li><i class="fa fa-paper-plane" aria-hidden="true"></i> Computer Skills Documenting and Ranking </li>
                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>Evidence of Skills</li>
                    <li><i class="fa fa-desktop" aria-hidden="true"></i> Help Desk support</li>
                </ul>
                <div class="clearfix"></div>

            </div>
        </div>

        <!-- nav part end -->

        <?php echo $this->Element('footer'); ?>

        <script>
            function validate_promo() {
                var promo = $("#promo_code_id").val();
                if (promo == 'McDfreepass2018') {
                    $('.invalid_promo').text('Promo Code Applied');
                } else {
                    $('.invalid_promo').text('Invalid Promo Code');
                }
            }
        </script>

        <script>
            $(".program_data").click(function () {
                var pgrm_val = $('input[name=url_data]:checked').val();
                if (pgrm_val != 'trail') {
                    var html_data = "<div class='none_form replace_data'>";
                    html_data += "<lable class='col-lg-12 col-md-12' id='label_hide'>";
                    html_data += "<div class='col-lg-6 col-md-6'>";
                    html_data += "<input type='text' name = 'promo_code' placeholder='Enter promo Code' id='promo_code_id'>";
                    html_data += "</div>";
                    html_data += "<div class='col-lg-6 col-md-6 promo_div'>";
                    html_data += "<div class='col-lg-4 col-md-4'><button type='button' class='btn btn-info' id='promo_id' onclick='validate_promo()'>Validate</button></div>";
                    html_data += "<div class='col-lg-8 col-md-8'><p class='invalid_promo'></p></div>";
                    html_data += "</div>";
                    html_data += "</lable>";
                    html_data += "</div>";
                    $("#replace_data").replaceWith(html_data);
                    $("#program_id").show();
                    $("#label_hide").show();
                }
                if (pgrm_val == 'trail') {
                    $("#program_id").hide();
                    $("#label_hide").hide();
                }
            });
        </script>

        <script>
            $(document).ready(function () {
                $("#payment").submit(function (e) {
                    e.preventDefault();
                    var prmo_data = $("#promo_code_id").val();
                    var pgrm_val = $('input[name=url_data]:checked').val();

                    if (prmo_data == 'McDfreepass2018' || pgrm_val == 'trail') {
                        $.ajax({
                            url: "<?php echo Router::url(['controller'=>'pages/signUp']) ?>",
                            type: "POST",
                            data: new FormData(this),
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                if (data == 0) {
                                    alert('Email Id already registered. Please try again.');
                                } else {
                                    alert('Registered Sucessful');
                                    location.reload();
                                }
                            }
                        });
                    } else {
                        var all_data1 = $("#first_name_id").val();
                        var all_data2 = $("#last_name_id").val();
                        var all_data3 = $("#email_add_id").val();
                        var all_data4 = $("#country_id").val();
                        var all_data5 = $("#provience_id").val();
                        var all_data6 = $("#status_id").val();
                        var all_data7 = $("#school_info_id").val();
                        var all_data8 = $("#state_id").val();
                        $.ajax({
                            url: "<?php echo Router::url(['controller'=>'pages/register_user']) ?>",
                            type: "POST",
                            data: {'email_id': all_data3},
                            success: function (data) {
                                if (data > 0) {
                                    alert("Email Id already Registered");
                                } else {
                                    var all_data_value = all_data1 + ',' + all_data2 + ',' + all_data3 + ',' + all_data4 + ',' + all_data5 + ',' + all_data6 + ',' + all_data7 + ',' + all_data8 + ',' + pgrm_val;
                                    $("#custom_value").val(all_data_value);
                                    if (all_data4 == 'United States') {
                                        $("#currency_code_id").val("USD");
                                    }
                                    if (all_data4 == 'Canada') {
                                        $("#currency_code_id").val("CAD");
                                    }
                                    if (pgrm_val == 'starter') {
                                        $("#amount_val_id").val('70.50');
                                        $("#payment_form").submit();
                                    }
                                    if (pgrm_val == 'advanced') {
                                        $("#amount_val_id").val('100.00');
                                        $("#payment_form").submit();
                                    }
                                    if (pgrm_val == 'access360') {
                                        $("#amount_val_id").val('158.00');
                                        $("#payment_form").submit();
                                    }
                                }
                            }
                        });
                    }
                });
            });
        </script>

    </body>
</html> 