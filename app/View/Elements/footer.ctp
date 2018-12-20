<?php

echo " "; ?>
<div class="modal fade" id="myModal" role="dialog">
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


                    <div class="tab-content">
                        <div id="home" class="tab-pane fade active in" style="border:none; background-color: #eee; padding: 0px;">

                            <form id="user_signIn" method="post">
                                <div class="div_form_use">  
                                    <div id="signIn_msg" style="color: #a94442;background-color: #f2dede;padding: 15px;border: 1px solid #ebccd1; border-radius: 4px;font-size: 0.85em;margin-bottom: 2em; display: none"></div>
                                    <div class="none_form">
                                        <input type="text" name="username" placeholder="Enter User Name" id='username' required="">
                                    </div>
                                    <div class="none_form">
                                        <input type="password" name="password" placeholder="Enter Password" id='password' required="">
                                    </div>

                                    <div class="clearfix"></div>
                                    <button type="submit">Login</button>
                                </div>
                                <div class="" style="background-color: #f1f1f1">
                                    <span class="psw">Forgot <a data-toggle="pill" href="#menu1">password?</a></span>
                                </div>

                            </form>

                            <form id="accept_terms" method="post" style="display: none;">
                                <div class="div_form_use">  
                                    <div class="none_form">
                                        <input type="hidden" name="user_data" id="user_data_id">
                                        <input type="hidden" name="pass_data" id="pass_data_id">
                                        <input type="checkbox" name="terms" required="">&nbsp;&nbsp;<span style="font-size: 15px; font-weight: 600;">I have read and agree to the <a href="Service agreement.pdf" target="blank">Terms and Conditions</a></span>
                                    </div>

                                    <div class="clearfix"></div>
                                    <br><button type="submit">Submit</button>
                                </div>
                            </form>

                        </div>

                        <div id="menu1" class="tab-pane fade" style="border:none; background-color: #eee; padding: 0px;">

                            <form id="forgot_password" method="post">
                                <div class="div_form_use">  
                                    <div id="forgot_msg" style="color: #a94442;background-color: #f2dede;padding: 15px;border: 1px solid #ebccd1; border-radius: 4px;font-size: 0.85em;margin-bottom: 2em; display: none"></div>
                                    <div class="none_form">
                                        <label>Email: </label>
                                        <input type="text" name="email_id" placeholder="Enter Email" required="">
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="submit">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div> 
    </div>
</div>


<div class="modal fade" id="myModalReport" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->            
        <div class="modal-content width_form">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Report A Problem</h4>
            </div>

            <div class="modal-body">

                <form id="issue" action="<?php echo $this->base ?>/pages/issueReport" method="post" enctype="multipart/form-data">
                    <div class="div_form_use user_define">                  
                        <div class="form-group">
                            <label for="product1">
                                <input type="checkbox" name="product_val1" id="product1" value="Yes">Link is not working
                            </label>  

                            <div id="link_not" class="form-group1">
                                <input type="text" class="form-control" name="link_not_text" placeholder="Name of the link">
                                <label>Screenshot</label>
                                <input type="file" name="link_not_image" class="form-control">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="product2">
                                <input type="checkbox" name="product_val2" id="product2" value="Yes">The information is wrong
                            </label>

                            <div id="wrong_info" class="form-group2">
                                <textarea class="form-control" name="wrong_info_text" rows="3" placeholder="What information is wrong?"></textarea>
                                <label>Screenshot</label>
                                <input type="file" name="wrong_info_image" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product3">
                                <input type="checkbox" name="product_val3" id="product3" value="Yes">I can't find what I am looking for
                            </label>

                            <div id="look_info" class="form-group3">
                                <textarea class="form-control" name="look_info_text" rows="3" placeholder="What are you trying to find?"></textarea>
                                <label>Screenshot</label>
                                <input type="file" name="look_info_image" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product4">
                                <input type="checkbox" name="product_val4" id="product4" value="Yes">The website is not working on my device 
                            </label>

                            <div id="not_work" class="form-group4">
                                <input type="text" class="form-control" name="not_work_device" placeholder="Device Name">
                                <input type="text" class="form-control" name="not_work_browser" placeholder="Browser">
                                <label>Screenshot</label>
                                <input type="file" name="not_work_image" class="form-control">
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <button type="submit" class="submit_btn">Submit</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<a data-toggle="modal" data-target="#myModalReport" class="report_prblm">Report a problem</a>

<section id="fotter_copy_right">
    <div class="container">
        <p>Copyright © 2017 Career Innovations | All Rights Reserved | Design By <a class="footer_class" href="http://www.acumaxtechnologies.com/">www.acumaxtechnologies.com</a></p>
    </div>
</section>

<!-- fotter use div -->

<?php echo $this->Html->script('latest_jquery.js') ?>
<?php echo $this->Html->script('old_jauery.js') ?>
<?php echo $this->Html->script('custom.js') ?>
<?php echo $this->Html->script('bootstrap.min.js') ?>
<?php echo $this->Html->script('demo.js') ?>           
<?php echo $this->Html->script('jquery.DonutWidget.min.js') ?> 


<script>
    $(document).ready(function () {
        $("#product1").click(function () {
            if ($(this).is(':checked')) {
                $(".form-group1").show();
            } else {
                $(".form-group1").hide();
            }
        });

        $("#product2").click(function () {
            if ($(this).is(':checked')) {
                $(".form-group2").show();
            } else {
                $(".form-group2").hide();
            }
        });

        $("#product3").click(function () {
            if ($(this).is(':checked')) {
                $(".form-group3").show();
            } else {
                $(".form-group3").hide();
            }
        });

        $("#product4").click(function () {
            if ($(this).is(':checked')) {
                $(".form-group4").show();
            } else {
                $(".form-group4").hide();
            }
        });
    });
</script>

<script>
    $('#user_signIn').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'pages/signIn']) ?>",
            type: 'POST',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                data = JSON.parse(data);
                if (data.status == "1") {
                    window.location = '<?php echo $this->base ?>/individual_dashboard.html';
                }
                if (data.status == "4") {
                    $("#user_signIn").hide();
                    var user = $('#username').val();
                    var pass = $('#password').val();
                    $('#user_data_id').val(user);
                    $('#pass_data_id').val(pass);
                    $("#accept_terms").show();
                }
                if (data.status == "3") {
                    $("#signIn_msg").html(data.msg);
                    $("#signIn_msg").slideDown('slow');
                    setTimeout(function () {
                        $("#signIn_msg").slideUp('slow');
                    }, 8000);
                }
                if (data.status == "2") {
                    var id = data.msg;
                    window.location = "<?php echo Router::url(['controller'=>'renew.html?id=']) ?>" + id;
                }
            }
        });
    });
</script>

<script>
    $('#forgot_password').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'pages/forgotPassword']) ?>",
            type: 'POST',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#forgot_msg").html(data);
                $("#forgot_msg").slideDown('slow');
                setTimeout(function () {
                    $("#forgot_msg").slideUp('slow');
                }, 8000);
            }
        });
    });
</script>

<script>
    $("#accept_terms").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'pages/acceptTerms']) ?>",
            type: 'POST',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                window.location = '<?php echo DOMAIN_NAME ?>' + 'individual_dashboard.html';
            }
        });
    });
</script>

<script>
    $("#feedback_data").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'pages/feedback']) ?>",
            type: 'POST',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                alert("Your Information Submitted successfully");
                location.reload();
            }
        });
    });
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>      


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5a4ca834d7591465c7067b4d/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112398703-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-112398703-1');
</script>
