<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>MCD</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <?php echo $this->Html->css('school/bootstrap.min.css') ?>
        <?php echo $this->Html->css('school/custom.css') ?>
        <?php echo $this->Html->css('school/responsive_use.css') ?>
        <?php echo $this->Html->css('school/animate.min.css') ?>
        <?php echo $this->Html->css('school/paper-dashboard.css') ?>
        <?php echo $this->Html->css('school/demo.css') ?>
        <?php echo $this->Html->css('school/custom_css.css') ?>
        <?php echo $this->Html->css('school/themify-icons.css') ?>    
        <?php echo $this->Html->css('school/demo/calendar-style.css') ?>   
        <?php echo $this->Html->css('school/demo/style.css') ?>
        <?php echo $this->Html->css('school/style.css') ?>
        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            #email_id {width: 60% !important;}
            .embed_view {margin: 0 auto; width: 60%;}
            .embed_view h1{padding: 1em 0em 1em 0em;}
        </style>
    </head>

    <body>
        <?php $school_data = $this->Session->read('school_data'); ?>
        <?php echo $this->Element('school/header') ?>

        <div class="clearfix"></div>      
        <div class="wrapper">
            <?php echo $this->Element('school/sidebar') ?>         

            <div class="main-panel">


                <!-- navigation start -->
                <div class="new_view" style="margin:2% 3% 2% 3%;">  
                    <?php if(isset($response)) { ?>
                    <div class="alert alert-danger alert-dismissable alert_div_data fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                        <?php if($response == 1) { ?>
                        Updated successfully
                        <?php } ?>
                    </div>
                    <?php } ?>
                    
                    <?php $school_data = $this->Session->read('school_data');
                    $prgrm_type = $school_data['program_type'];
                    ?>
                    
                    <div class="col-lg-12 col-md-12">
                        <ul class="nav nav-tabs new_proper">
                            <li class="active" id="brand"><a data-toggle="tab" href="#co_brand">Co-Branding D.I.Y </a></li>
                            <!-- <li id="strategy" class="<?php if($prgrm_type == 'alliance') { ?> active <?php } ?>"><a data-toggle="tab" href="#strategic">Strategic Alliance </a></li> -->
                        </ul>

                        <div class="tab-content tabs_use">
                            <div id="co_brand" class="tab-pane <?php if(!empty($prgrm_type)) { if($prgrm_type == 'co-brand') { ?> active <?php } } else { ?>active<?php } ?>">
                                <div class="row new_row_use">
                                    <div class="container-fluid">
                                        <div class='row_use_what_career_dashbored'>
                                            <h1>Co Branding ( D.I.Y )</h1>
                                            <p><strong>Shared-services and outsourcing in your career service department have enormous upsides for everyone involved. By ramping up career services and offering them anytime, anywhere through “ My Career Dashboard , your career counselors will be able to spend more time coaching and working one on-one with students as the shared services entities take over career management tasks and introduce scalable innovation that provides anytime, anywhere career development.</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <div class='row_use_what_career_dashbored'>
                                            <h1>Benefits</h1>
                                            <ul>
                                                <li>Link From Your Home Page to Dashboard</li>
                                                <li>Your Logo on the page</li>
                                                <li>Make your Student Career Centre a Profit Centre</li>
                                                <li>Get Financial Compensation ( 20% of enrollment Costs) or Provide discount for students</li>
                                                <li>Dedicated Account Manager </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container-fluid">
                                        <div class='row_use_what_career_dashbored'>
                                            <h1>Process</h1>
                                            <ul>
                                                <li>Your career student services personal will work with the student to identify the program they want</li>
                                                <li>When they chose the program , the student will pay your school </li>
                                                <li>Your school will be billed accordingly minus the 20% </li>
                                            </ul>
                                        </div>
                                        <div class='clearfix'></div>
                                    </div>
                                </div>
                                <form method="post" class="form_benifit_data"> 
                                    <input type="hidden" name="form_name" value="co_brand">
                                    <!-- <button type="submit">Apply</button> -->
                                </form>
                            </div>

                            <div id="strategic" class="tab-pane <?php if($prgrm_type == 'alliance') { ?> active <?php } ?>">
                                <div class="row new_row_use">
                                    <div class="container-fluid">
                                        <div class='row_use_what_career_dashbored'>
                                            <h1>Strategic Alliance </h1>
                                            <ul>
                                                <li>Provide Your Student Career Centre with Brochure Handouts</li>
                                                <li>Work with your centre to assure Student success</li>
                                                <li>Provide a program discount for your students </li>
                                                <li>School Logo on student dashboard ( Optional )</li>
                                                <li>Student pays on line</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <form method="post" class="form_benifit_data"> 
                                    <input type="hidden" name="form_name" value="alliance">
                                    <button type="submit">Apply</button>
                                </form>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>                
            </div>
        </div>


        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <form method="post" id="delete_modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="option_id" id="option_id1">
                            <div class="alert alert-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Are you sure you want to delete selected Record?</div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-success" id="delete_confirm"><i class="fa fa-check-circle" aria-hidden="true"></i> Yes</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> No</button>
                        </div>
                    </div>
                    <!-- /.modal-content --> 
                </div>
                <!-- /.modal-dialog --> 
            </form>
        </div>

        <!-- Modal -->
        <div class="modal fade invite" id="myModal1" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <div id="login-overlay" >
                            <div class="modal-content">

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="err" style="display:none;"></div>
                                            <div class="well">

                                                <form id="myForm" name="myform" method="post">

                                                    <input type="hidden" name="length" value="10">
                                                    <div class="form-group">
                                                        <label for="crv">MCD: &nbsp; </label>
                                                        <input name="for_crv" type="text" value="" size="40%" id="crv" readonly> &nbsp;
                                                        <input type="button" value="Generate" onclick="generatecrv();" required="" tabindex="2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user">Username: &nbsp; </label>
                                                        <input name="update_username" type="text" value="" size="40%"> &nbsp;
                                                        <input type="button" value="Generate" onclick="generateuser();" required="" tabindex="2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">password: &nbsp; </label>
                                                        <input name="row_password" type="text" size="40%">&nbsp;
                                                        <input type="button" value="Generate" onclick="generate();" required="" tabindex="2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mail">Email: &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  </label>

                                                        <input type="email" name="email" id="email_id" size="40%" readonly="">
                                                        <button type="submit" class="btn btn-success">Invite</button>
                                                        <!--  <button type="submit" class="btn btn-success" style="float:right;">Invite</button>  -->
                                                    </div>

                                                </form></div>
                                        </div>



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- end Modal -->

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
            function randomPassword(length) {

                var chars = "abc@defghijklmnopq%rstuvwxyz!ABCDE^FGHIJ$KLMNOP&12345#67890";
                var pass = "";
                for (var x = 0; x < length; x++) {
                    var i = Math.floor(Math.random() * chars.length);
                    pass += chars.charAt(i);
                }
                return pass;
            }

            function generate() {
                myform.row_password.value = randomPassword(myform.length.value);

            }

            function randomuser(length) {
                var chars = "abcdefghijklmnopqrstuvwxyz";
                var name = "";
                for (var x = 0; x < length; x++) {
                    var i = Math.floor(Math.random() * chars.length);
                    name += chars.charAt(i);
                }
                return name;
            }

            function generateuser() {
                myform.update_username.value = randomuser(myform.length.value);
            }

            function randomcrv(length) {
                var provence = $("#provence").val();
                var prgm = $("#program").val();
                var length = "5";
                var chars = "1234567890";
                var name = "";
                for (var x = 0; x < length; x++) {
                    var i = Math.floor(Math.random() * chars.length);
                    name += chars.charAt(i);
                }
                return name;
            }

            function generatecrv() {
                myform.for_crv.value = randomcrv(myform.length.value);
            }
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
            $("#delete_confirm").click(function () {
                var id = [];
                $(':checkbox:checked').each(function (i) {
                    id[i] = $(this).val();
                });
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'schools/delete_student']) ?>",
                    type: "post",
                    data: {"delete_id": id},
                    success: function (data) {
                        location.reload();
                    }
                });
            });
        </script>

        <script>
            function openModal(id, email)
            {
                $("#user_id").val(id);
                $("#email_id").val(email);
                $("#myModal1").modal("show");
            }
        </script>

        <script>
            $("#myForm").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'schools/invite_student']) ?>",
                    type: "POST",
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data == 1)
                        {
                            location.reload();
                        } else
                        {
                            $(".err").html("Username already exist. Please try again!!!");
                            $(".err").slideDown('slow');
                            setTimeout(function () {
                                $(".err").slideUp('slow');
                            }, 8000);
                        }
                    }
                });
            });
        </script>

        <?php echo $this->Html->script('school/bootstrap.min.js') ?>      

    </body>

</html>