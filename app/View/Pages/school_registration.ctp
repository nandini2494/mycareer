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

            </div>
        </div>
        <section class='div_sec new_page_color'>
            <div class='container div_scholl_data'>
                <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>
                    <div class="div_form_use div_contact"> 
                        <?php if(isset($response1)) { 
                            ?>
                        <div style="color: #a94442;background-color: #f2dede;padding: 15px;border: 1px solid #ebccd1; border-radius: 4px;font-size: 0.85em;margin-bottom: 2em;"><?php echo $response1; ?></div>
                            <?php } ?>
                        <div id="login_form_data">
                            <form method="post">  
                                <input type="hidden" name="form_name" value="already_user">
                                <h4 class="heading_data_school">Already a User</h4>

                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username" required="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                                </div>
                                <button type="submit" class="btn btn-success">Login</button>
                                <p class="forget_school_pass" id="forget_pass_id">Forgot Password ?</p>
                            </form>
                        </div>

                        <div id="forget_pass">
                            <form method="post">  
                                <input type="hidden" name="form_name" value="forgot_pass">
                                <h4 class="heading_data_school">Forgot Password</h4>
                                <div class="form-group">
                                    <label>Enter Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email">
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                                <p class="forget_school_pass" id="login_pass_id">Login Again!</p>
                            </form>
                        </div>
                    </div>  
                </div>
                <div class='col-lg-8 col-md-8 col-sm-12 col-xs-12'>
                    <div class="div_form_use div_contact"> 
                        <form method="post" class="for_input">
                            <input type="hidden" name="form_name" value="new_user">
                            <h4 class="heading_data_school">New User</h4>
                            <?php if(isset($response)) { 
                                if($response == '1') {
                            ?>
                            <div style="color: #a94442;background-color: #f2dede;padding: 15px;border: 1px solid #ebccd1; border-radius: 4px;font-size: 0.85em;margin-bottom: 2em;">Register Successful</div>
                            <?php } else { ?>
                            <div style="color: #a94442;background-color: #f2dede;padding: 15px;border: 1px solid #ebccd1; border-radius: 4px;font-size: 0.85em;margin-bottom: 2em;">Email Id already exist. Please Try Again.</div>
                            <?php } } ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>School Name</label>
                                    <select class="form-control" name="school_name" required="">
                                        <option value="">--Select School--</option>
                                        <?php foreach ($university as $u_detail) { ?>
                                        <option value=""><?php echo $u_detail['university']['university_name'] ?></option>
                                        <?php } ?>
                                        <?php foreach ($college as $c_detail) { ?>
                                        <option value=""><?php echo $c_detail['college']['college_name'] ?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="form-group">
                                    <label>Registration No.</label>
                                    <input type="text" class="form-control" name="regstration_no" placeholder="Registrartion">
                                </div>
                            </div>-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Contact Person Name</label>
                                    <input type="text" class="form-control from_div_text" name="contact_name" placeholder="Person Name" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" class="form-control from_div_text" name="website" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control from_div_text" name="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Address" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control from_div_text" name="city" placeholder="City" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>State/Province</label>
                                    <input type="text" class="form-control from_div_text" name="state" placeholder="State/Province" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control from_div_text" name="country" placeholder="Country" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Postal / Zip Code</label>
                                    <input type="text" class="form-control" name="zip_code" placeholder="Zip Code" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>&nbsp;</label></br>
                                    <button type="submit" id="filter_btn" class="btn btn-primary"> Submit </button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form> 
                    </div>
                    <div class="clearfix"></div>

                    <div class="well div_contact_data">
                        <p>Curious about how My Career Dashboard program will work for you and your students?  Or are you ready to enroll but just have a few questions for an account manager? Contact an account manager to discuss how to enroll your school,discuss its functionality, and features. Keep your options open by filling out the application, there is no cost,no commitment,and no obligation, it just gives you a choice when the time comes to making your final decision. </p><br>
                        <p>Contact:</p>
                        <p>James Rea</p>
                        <p><a href="mailto:jrea@mycareerdashboard.com">jrea@mycareerdashboard.com</a></p>
                    </div>
                </div>
            </div>

        </section>

        <?php echo $this->Element('footer'); ?>

        <script>
            $("#forget_pass_id").click(function () {
                $("#forget_pass").show();
                $("#login_form_data").hide();
            });

            $("#login_pass_id").click(function () {
                $("#forget_pass").hide();
                $("#login_form_data").show();
            });
        </script>
    </body>
</html> 