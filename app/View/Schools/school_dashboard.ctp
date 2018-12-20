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
        <style>
            #email_id {width: 60% !important;}
        </style>
    </head>

    <body>
        <?php echo $this->Element('school/header') ?>

        <div class="clearfix"></div>      
        <div class="wrapper">
            <?php echo $this->Element('school/sidebar') ?>         

            <div class="main-panel">

                <?php 
                $school_data = $this->Session->read('school_data');
                $prgrm_type = $school_data['program_type']; 
                ?>

                <!-- navigation start -->
                <div class="new_view" style="margin:2% 3% 2% 3%;">
                    <div class="pull-right icons" id="icons">
                        <button class="btn btn-danger btn_data_use" type="button" onclick="delete_data()"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </div>                   
                    <table class="col-lg-12 col-md-12 table_use_data">
                        <thead>
                            <tr class="table_head_data">
                                <th><input type="checkbox" id="check_all"></th>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>MCD</th>
                                <th>Country</th>
                                <th>Program</th>
                                <th>Program duration</th>
                                <th>Status</th>
                                <th>Invite Date</th>
                                <th>Signed In Date</th>
                                <th>Invite</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <?php if(count($student) > 0) {
                        foreach ($student as $result) { ?>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" class="checkbox_invite" value="<?php echo $result['register']['id'] ?>"></td>
                                <td><?php echo $result['register']['first_name'] ?> <?php echo $result['register']['last_name'] ?></td>
                                <td><?php echo $result['register']['email'] ?></td>
                                <td><?php echo $result['register']['crv_code'] ?></td>
                                <td><?php echo $result['register']['country'] ?></td>
                                <td>
                                    <?php if($result['register']['program'] == 'starter'){  ?>
                                    Career Starter
                                    <?php } else if($result['register']['program'] == 'advanced'){  ?>  
                                    Career Advanced
                                    <?php } else if($result['register']['program'] == 'access360'){  ?> 
                                    All Access 360
                                    <?php } ?> 
                                </td>
                                <td>
                                    <?php if($result['register']['program_duration'] == '6month'){  ?>
                                    6 Month
                                    <?php } else if($result['register']['program_duration'] == 'year'){  ?> 
                                    Year
                                    <?php } ?>
                                </td>
                                <td>Student</td>
                                <td><?php if(!empty($result['register']['invite_date'])) { echo date('d-M-Y',strtotime($result['register']['invite_date'])); } ?></td>
                                <td><?php if(!empty($result['register']['signin_date'])) { echo date('d-M-Y',strtotime($result['register']['signin_date'])); } ?></td>
                                <?php if($result['register']['invite'] == '0') { ?>
                                <td><button class="btn btn-danger btn_data_use" onclick='openModal("<?php echo $result['register']['id'] ?>", "<?php echo $result['register']['email'] ?>")'>Invite</button></td>
                                <?php } else { ?>
                                <td>Invited</td>
                                <?php } ?>
                                <?php if($result['manual_payment']['student_id'] == '' AND $result['payment']['user_email'] == '') { ?>
                                <td><button class="btn btn-info btn_data_use_data" onclick='pay_modal("<?php echo $result['register']['id'] ?>", "<?php echo $result['register']['token'] ?>")'>Add Payment</button></td>
                                <?php } ?>
                                <?php if($result['manual_payment']['student_id'] != '' AND $result['payment']['user_email'] == '') { ?>
                                <td><button class="btn btn-info btn_data_use_data" onclick='pay_modal1("<?php echo $result['manual_payment']['id'] ?>", "<?php echo $result['manual_payment']['payment_type'] ?>", "<?php echo $result['manual_payment']['amount'] ?>")'>Edit Payment</button></td>
                                <?php } ?>
                            </tr>
                        </tbody>
                        <?php } } else { ?>
                        <tbody>
                            <tr>
                                <td colspan="12"><center><b>No Student Available</b></center></td>
                        </tr>
                        </tbody>
                        <?php } ?>
                    </table>                   

                    <!-- navigation start end-->

                    <div class="clearfix"></div>

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

                                                </form>
                                            </div>
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

        <!-- Modal -->
        <div class="modal fade invite" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Manual Payment Details</h4>
                    </div>
                    <div class="modal-body">
                        <div id="login-overlay" >
                            <div class="modal-content">

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="err" style="display:none;"></div>
                                            <div class="well">

                                                <form id="myPayForm" method="post">

                                                    <input type="hidden" name="length" value="10">
                                                    <input type="hidden" name="student_id" id="student_id_val">
                                                    <input type="hidden" name="token" id="token_id">
                                                    <div class="form-group">
                                                        <label for="pay_type_id">Payment Type: &nbsp; </label>
                                                        <input name="pay_type" type="text" value="" size="50%" id="pay_type_id">                                                      
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="amount_id">Amount: &nbsp; </label>
                                                        <input name="pay_amount" type="text" value="" size="50%" id="amount_id"> ($)
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success">Submit</button>                                                        
                                                    </div>

                                                </form>
                                            </div>
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

        <!-- Modal -->
        <div class="modal fade invite" id="myeditModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Manual Payment Details</h4>
                    </div>
                    <div class="modal-body">
                        <div id="login-overlay" >
                            <div class="modal-content">

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="err" style="display:none;"></div>
                                            <div class="well">

                                                <form id="myPayFormEdit" method="post">

                                                    <input type="hidden" name="length" value="10">
                                                    <input type="hidden" name="student_id" id="student_id1_val">
                                                    <div class="form-group">
                                                        <label for="pay_type_id1">Payment Type: &nbsp; </label>
                                                        <input name="pay_type" type="text" value="" size="50%" id="pay_type_id1">                                                      
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="amount_id1">Amount: &nbsp; </label>
                                                        <input name="pay_amount" type="text" value="" size="50%" id="amount_id1"> ($)
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success">Submit</button>                                                        
                                                    </div>

                                                </form>
                                            </div>
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
                $('.checkbox_invite:checked').each(function (i) {
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

        <script>
            function pay_modal(id, token) {
                $("#student_id_val").val(id);
                $("#token_id").val(token);
                $("#myModal").modal('show');
            }
        </script>

        <script>
            function pay_modal1(id, type, amount) {
                $("#student_id1_val").val(id);
                $("#pay_type_id1").val(type);
                $("#amount_id1").val(amount);
                $("#myeditModal").modal('show');
            }
        </script>

        <script>
            $("#myPayForm").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "<?php echo Router::url(['controller' => 'schools/addPayment']) ?>",
                    type: "POST",
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

        <script>
            $("#myPayFormEdit").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "<?php echo Router::url(['controller' => 'schools/editPayment']) ?>",
                    type: "POST",
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

        <?php echo $this->Html->script('school/bootstrap.min.js') ?>

    </body>

</html>