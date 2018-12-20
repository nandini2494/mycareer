<?php

echo " "; ?>

<div class="modal fade" id="myModallogin" role="dialog">
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
                        <ul class='display_style_use' style="text-align: center;">
                            <li><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/co-logo.png" alt="co-logo"></li>
                            <li style="padding-left: 2em; text-align: center;"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/Capture.png" alt="co-logo"></li>
                            <?php foreach ($logo as $logo_data) {
                                if(!empty($logo_data['school_registration']['logo'])) {
                            ?>
                            <li style="padding-left: 2em; text-align: center;"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?><?php echo $logo_data['school_registration']['logo'] ?>" alt="co-logo"></li>
                            <?php } else { ?>
                            <li style="padding-left: 2em; text-align: center;"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/school-1.png" alt="co-logo"></li>
                            <?php } } ?>
                        </ul>
                    </div>


                    <div class="tab-content">
                        <div id="home" class="tab-pane fade active in" style="border:none; background-color: #eee; padding: 0px;">

                            <form id="student_signIn" method="post">
                                <div class="div_form_use">  
                                    <div id="signIn_msg" style="color: #a94442;background-color: #f2dede;padding: 15px;border: 1px solid #ebccd1; border-radius: 4px;font-size: 0.85em;margin-bottom: 2em; display: none"></div>
                                    <div class="none_form">
                                        <input type="hidden" name="token" value="<?php echo htmlspecialchars($this->params['url']['token']) ?>">
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



<section id="fotter_copy_right">
    <div class="container">
        <p>Copyright © 2017 Career Innovations | All Rights Reserved | Design By <a class="footer_class" href="http://www.acumaxtechnologies.com/">www.acumaxtechnologies.com</a></p>
    </div>
</section>

<!--   Core JS Files   -->
        <?php echo $this->Html->script('school/demo/moment.latest.min.js') ?>
        <?php echo $this->Html->script('school/jquery-3.2.1.min.js') ?>
        <?php echo $this->Html->script('school/circularprogress.jquery.js') ?> 
        <?php echo $this->Html->script('school/icons.js') ?> 

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
    $("#student_signIn").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'schools/signIn']) ?>",
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
                if (data.status == "3") {
                    $("#signIn_msg").html(data.msg);
                    $("#signIn_msg").slideDown('slow');
                    setTimeout(function () {
                        $("#signIn_msg").slideUp('slow');
                    }, 8000);
                }
            }
        });
    });
</script>

<script>
    $('#forgot_password').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'schools/forgotPassword']) ?>",
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


<?php echo $this->Html->script('school/bootstrap.min.js') ?>