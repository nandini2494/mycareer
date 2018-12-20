<?php

echo $this->Html->css('style.css') ?>

<?php if(count($ambas_program) > 0) {
foreach ($ambas_program as $prgrm) {
    $date_interview = $prgrm['register']['date_interview'];
    $time_interview = $prgrm['register']['time_interview'];
    $upload_resume = $prgrm['register']['upload_resume'];
    $good_leader = $prgrm['register']['good_leader'];
    $approve_ambassador = $prgrm['register']['approve_ambassador'];
}
}
?>

<style>
    .sidebar[data-active-color="danger"] .nav li.active > a, .off-canvas-sidebar[data-active-color="danger"] .nav li.active > a {
        background: #dcdcdc00;
    }
</style>
<body>

    <div class="wrapper">
        <section id='main'>
            <div class="sidebar" data-background-color="white" data-active-color="danger" id="sticky">

                <!--
                            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
                            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
                -->

                <div class="sidebar-wrapper">
                    <div class="logo Custom_logo">
                        <a href="individual_dashboard.html" class="simple-text">
                            <img src="<?php echo DOMAIN_NAME ?>img/1.jpg.png"/>
                        </a>
                    </div>

                    <ul class="nav padding_in_sidebar">
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'index')) ? 'active' : '' ?>">
                            <a href="individual_dashboard.html">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <p>Home</p>
                            </a>
                        </li>

                        <?php if(($user_data['study_type'] == 'University') || ($user_data['study_type'] == 'College')) { ?>
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'education')) ? 'active' : '' ?>">
                            <a href="education.html">
                                <i class="fa fa-university" aria-hidden="true"></i>
                                <p>Education</p>
                            </a>
                        </li>
                        <?php } ?>

                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'user')) ? 'active' : '' ?>">
                            <a href="user.html">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                                <p>D.I.Y Reference Checks</p>
                            </a>
                        </li>
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'complete')) ? 'active' : '' ?>">
                            <a href="complete.html">
                                <i class="fa fa-pie-chart" aria-hidden="true"></i>
                                <p>Verified References</p>
                            </a>
                        </li>
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'work_experience')) ? 'active' : '' ?>">
                            <a href="work_experience.html">
                                <i class="fa fa-bookmark" aria-hidden="true"></i>
                                <p>Workplace Experience</p>
                            </a>
                        </li>
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'view')) ? 'active' : '' ?>">
                            <a href="view.html">
                                <i class="fa fa-street-view" aria-hidden="true"></i>
                                <p>Viewed Me</p>
                            </a>
                        </li>
                        <!-- <li>
                            <a class="disabled" href="typography.html">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <p>Inside Information of Jobs</p>
                            </a>
                        </li>
                        <li>
                            <a href="certify.html">
                                <i class="fa fa-certificate" aria-hidden="true"></i>
                                <p>View Status</p>
                            </a>
                        </li> -->						
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'icons')) ? 'active' : '' ?>">
                            <a href="icons.html">
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <p>Career Dashboard </p>
                            </a>
                        </li>
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'cd_player')) ? 'active' : '' ?>">
                            <a href="cd_player.html">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <p>My CD </p>
                            </a>
                        </li>                        
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'legal_docs')) ? 'active' : '' ?>">
                            <a href="legal_docs.html">
                                <i class="fa fa-file-text-o " aria-hidden="true"></i>
                                <p>Legal Documents </p>
                            </a>
                        </li>
                        <?php if($token_val == '') { ?>
                        <!-- <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'payment_history')) ? 'active' : '' ?>">
                            <a href="payment_history.html">
                                <i class="fa fa-history" aria-hidden="true"></i>
                                <p>Payment History </p>
                            </a>
                        </li> -->
                        <?php } ?>
                        <?php if($ambassador_prgrm == 'approved') { ?>
                        <!-- <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'referal_list')) ? 'active' : '' ?>">
                            <a href="referal_list.html">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                <p>Referal List</p>
                            </a>
                        </li>-->
                        <?php } ?>                       
                        <li class="job_alert <?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'job_alert')) ? 'active' : '' ?>">
                            <a href="job_alert.html">
                                <i class="fa fa-bell" aria-hidden="true" style="color:#e7cc09 !important"></i>
                                <p>UC Job Alerts <?php if($job_alert_count > 0) { ?>(<?php echo $job_alert_count; ?>)<?php } ?></p>
                            </a>
                        </li>
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'my_job')) ? 'active' : '' ?>">
                            <a href="my_job.html">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                                <p>My Job </p>
                            </a>
                        </li>
                        <li class="">
                            <a href="job_fair.html">
                                <i class="fa fa-graduation-cap " aria-hidden="true"></i>
                                <p>Job Fairs</p>
                            </a>
                        </li>
                        <!-- <li class="">
                            <a href="#">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                <p>Placements</p>
                            </a>
                        </li> -->
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'coop_alert')) ? 'active' : '' ?>">
                            <a href="coop_alert.html">
                                <i class="fa fa-building-o" aria-hidden="true"></i>
                                <p>Co-Op <?php if($intern_alert_count > 0) { ?>(<?php echo $intern_alert_count; ?>)<?php } ?></p>
                            </a>
                        </li>
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'intern_alert')) ? 'active' : '' ?>">
                            <a href="intern_alert.html">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                <p>Internship <?php if($coop_alert_count > 0) { ?>(<?php echo $coop_alert_count; ?>)<?php } ?></p>
                            </a>
                        </li>
                        <li class="<?php echo (($this->params['controller'] == 'dashboards') && ($this->action == 'career_connection')) ? 'active' : '' ?>">
                            <a href="career_connection.html">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                <p>Career Connections</p>
                            </a>
                        </li>
                        <?php if($progam_pay == 'advanced') { ?>
                        <li class="">
                            <a href="online_interview.html">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                <p>Online Interview Rooms</p>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if($progam_pay == 'access360') { ?>
                        <li class="">
                            <a href="webinars.html">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <p>Webinars</p>
                            </a>
                        </li>
                        <li class="">
                            <a href="online_interview.html">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                <p>Online Interview Rooms</p>
                            </a>
                        </li>
                        <?php } ?>
                        <li class='left_use'>
                            <!-- <img class="side_ssl_div" src="<?php echo DOMAIN_NAME ?>img/ssl_logo.png"> -->
                            <table width=125 border=0 cellspacing=0 cellpadding=0 title="CLICK TO VERIFY: This site uses a GlobalSign SSL Certificate to secure your personal information." ><tr><td><span id="ss_img_wrapper_gmogs_image_125-50_en_dblue"><a href="https://www.globalsign.com/" target=_blank title="GlobalSign Site Seal" rel="nofollow"><img alt="SSL" border=0 id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_125-50_en.gif"></a></span><script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gmogs_image_125-50_en_dblue.js"></script></td></tr></table>
                        </li>
                        <li class='left_use'>
                            <a href="http://www.acumaxtechnologies.com/">Design and Devloped<br/>Acumax Technologies</a>
                        </li>
                    </ul>

                </div>
            </div>
        </section>

        <div class="modal fade" id="program_ambasdor" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content width_form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ambassador Program</h4>
                    </div>

                    <div class="modal-body">
                        <form id="ambas_program" method="post">
                            <div class="row">           
                                <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                                <input type="hidden" name="upload_resume" value="<?php echo $upload_resume ?>">
                                <div class="form-group">
                                    <label><b>A good time to have face to face interview</b></label>
                                    <div class="col-sm-6" style="padding-left: 0px;">
                                        <input type="date" class="form-control" name="date" required="" value="<?php echo $date_interview ?>">
                                    </div>        
                                    <div class="col-sm-6" style="padding-right: 0px;">
                                        <input type="time" class="form-control" name="time" required="" value="<?php echo $time_interview ?>">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group">
                                    <label><b>Upload Resume</b></label>
                                    <input type="file" class="form-control" name="resume_upload" style="margin-top: 2%;">
                                    <div class="clearfix"></div>
                                </div> 

                                <div class="form-group">
                                    <label><b>Why are you a good leader?</b></label>
                                    <textarea class="form-control" name="good_leader" style="margin-top: 2%;"><?php echo $good_leader ?></textarea>
                                    <div class="clearfix"></div>
                                </div> 
                                <button type="submit" class="btton_used">Save</button>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div> 
        </div>

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
            $("#ambas_program_btn_id").click(function () {
                $("#program_ambasdor").modal('show');
            });
        </script>

        <script>
            $("#ambas_program").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'dashboards/applyAmbassador']) ?>",
                    type: 'POST',
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        alert(data);
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