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
        <?php echo $this->Html->css('index.css') ?>           
        <?php echo $this->Html->css('jquery.DonutWidget.min.css') ?>           

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
        <section>
            <div class="for_padding_area">
                <div class="career_heading">
                    <h2>WHAT IS A CAREER PORTFOLIO? </h2>
                </div>
                <div class="body_content">
                    <p>
                        A Career Portfolio is a collection of documents and other easily portable artifacts that people can use to validate claims they make about themselves. A Career Portfolio is not a resume, which simply lists your experiences and accomplishments; nor is it a cover letter in which you write about yourself and your qualifications for a particular job. 
                        Instead, it is a collection of actual documents that support and make tangible the things you want to say about yourself in a cover letter, a resume, or a face‐to‐face interview.    A Career Portfolio is about YOU.  It is… 
                    </p>
                </div>
                <div class="row padding_only">
                    <div class="col-md-4 blub_section">
                        <img src="img/blub.png" class="img-responsive"/>
                        <p>A life long tool to help you discover and express who you are;</p>
                    </div>
                    <div class="col-md-4 blub_section">
                        <img src="img/pancil.png" class="img-responsive"/>
                        <p>A dynamic collection of materials or artifacts which summarize, document, and highlight the  best of who you are </p>
                    </div>
                    <div class="col-md-4 blub_section">
                        <img src="img/maginfire.png" class="img-responsive"/>
                        <p>Evidence’ of your potential</p>
                    </div>
                </div>

                <div class="career_heading">
                    <h2>WHY DO I NEED A CAREER PORTFOLIO? </h2>
                </div>
                <div class="body_content">
                    <p>
                        Traditionally, portfolios have been used by artists, architects and designers to get hired and promoted, but more and more people are using them in other fields to assist them in getting jobs and developing as a professional.  It is becoming more common for business professionals, particularly students who are starting their careers to bring portfolios into interviews or display on line to illustrate their qualifications. 
                    </p>
                </div>
                <div class="row padding_only">
                    <div class="col-md-4">
                        <div class="donut-widget" data-chart-size="jumbo" data-chart-max="200" data-chart-value="86" data-chart-primary="#7eb6e8" data-chart-background="#335b7f" data-chart-text="86% " data-chart-caption="Employers view online portfolios"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="donut-widget" data-chart-size="jumbo" data-chart-max="200" data-chart-value="71" data-chart-primary="#fbbfa2 " data-chart-background="#fd905a" data-chart-text="71% " data-chart-caption="Portfolios will influence decisions on hiring candidates"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="donut-widget" data-chart-size="jumbo" data-chart-max="200" data-chart-value="7" data-chart-primary="#ffbdbd" data-chart-background="#fd6262" data-chart-text="7% " data-chart-caption="Job seekers use online portfolios"></div>
                    </div>
                </div>
                <div class="clear-fix"></div>
                <p class="recnt">According to recent studies</p>

            </div>

            <div class="for_padding_area">
                <div class="career_heading">
                    <h2>My Career Dashboard Features the following: </h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="body_content">
                            <div class="career_heading">
                                <h4>Career Building Modules</h4>
                            </div>
                            <p>
                                Over 75 Career Building Modules that provides templates and questions that give you an idea of how to document your skills, and experiences with instructional guidance that help students:</p>
                            <ul>
                                <li>Career Planning</li>
                                <li>Career Development</li>
                                <li>Documenting skills,accomplishments,career goals.</li>
                                <li>Document and Track Evidence of Skills</li>
                                <li>Documenting additional Courses, volunteer work</li>
                                <li>Document Computer Skills </li>
                                <li>Career Self Assessment </li>
                                <li>Much much more   </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="img/computer.png" class="img-responsive"/>
                    </div>
                </div>
            </div>

            <div class="for_padding_area">
                <div class="row">
                    <div class="col-md-6">
                        <div class="body_content">
                            <div class="career_heading">
                                <h4>Resume Repository </h4>
                            </div>

                            <ul>
                                <li>Upload Resumes </li>
                                <li>Provides examples of the 3 resume types </li>
                                <li>Resume Checklist</li>
                            </ul>
                        </div>
                        <div class="body_content">
                            <div class="career_heading">
                                <h4>D.I Y References </h4>
                            </div>

                            <ul>
                                <li>Provides students with a user friendly reference document to provide to </li>
                                <li>Securely store on their dashboard </li>
                                <li>Schools</li>
                                <li>Employers</li>
                                <li>Volunteer</li>
                                <li>Personal References</li>
                                <li>Legal Disclosure Document </li>
                            </ul>
                        </div>
                        <div class="body_content">
                            <div class="career_heading">
                                <h4>Application Tracking  </h4>
                            </div>

                            <ul>
                                <li>Track Job Applications </li>
                                <li>Track School Applications </li>
                                <li>Email/Dashboard Notifications of Duo Dates and appointments</li>
                                <li>Keeps track of Who,When,What applications were sent </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="img/pc.png" class="img-responsive"/>
                    </div>
                </div>
                <div class="body_content">
                    <div class="career_heading">
                        <h2>MY CAREER DASHBOARD FEATURES THE FOLLOWING:</h2>
                        <h4>Student Career Website Dashboard </h4>
                    </div>
                    <p>
                        Self-marketing helps students improve their image and reputation to advance their careers.. It gives students more opportunities to effectively communicate their values, skills, experiences, and vision to potential employers. Successful self marketing helps students separate themselves from the hundreds of other applicants who may be competing for the same job</p>
                    <div class="row">
                        <div class="col-md-7">
                            <ul>
                                <li>No Coding Necessary</li>
                                <li>Own URL to your website</li>
                                <li>Add link to Resume, e-mail file and other social media</li>
                                <li>Track who visited your site</li>
                                <li>Restrict access or allow public access</li>
                                <li>Easy to customize for particular jobs </li>
                                <li>Add Pics, images, text files, certificates ect</li>
                                <li>24/7 Access </li>
                                <li>Notification of Interviews</li>
                                <li>Mobile Friendly</li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <img src="img/chart.png"class="img-responsive"/>
                        </div>
                    </div>
                </div>


            </div>


        </section>

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