<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <?php echo $this->Html->css('admin/bootstrap/css/bootstrap.min.css') ?>
        <?php echo $this->Html->css('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
        <?php echo $this->Html->css('admin/dist/css/AdminLTE.min.css') ?>
        <?php echo $this->Html->css('admin/dist/css/skins/_all-skins.min.css') ?>
        <?php echo $this->Html->css('admin/dist/css/responsive_use.css') ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <style>
            .name {
                text-transform: capitalize;
            }
        </style>    
    </head>
    <body class="hold-transition skin-blue sidebar-mini">

        <div class="w3ls_header_top">
            <div class="container">
                <div class="w3l_header_left">
                    <ul class="w3layouts_header">

                        <li class="w3layouts_header_list">
                            <a><i class="fa fa-envelope" aria-hidden="true"></i>   &nbsp; info@mycareerdashboard.com</a>
                            <div class="pull-right" id="google_translate_element"></div>
                        </li>

                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        <div class="wrapper">

            <?php echo $this->Element('admin/header') ?>
            <?php echo $this->Element('admin/sidebar') ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Main content -->
                <section class="content">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-check" aria-hidden="true"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Verified Users</span>
                                    <span class="info-box-number">90<small>%</small></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-red"><i class="fa fa-envelope" aria-hidden="true"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Reference Received</span>
                                    <span class="info-box-number">41,410</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix visible-sm-block"></div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-globe" aria-hidden="true"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Weekly Visitors </span>
                                    <span class="info-box-number">760</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-yellow"><i class="fa fa-user-plus"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">New members</span>
                                    <span class="info-box-number">2,000</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <!-- /form-->
                    <h3 class="title_">Ambassador Program</h3>

                    <div class="container" style="width:100%;">
                        <div class="pull-right icons" id="icons">
                            <!-- <button class=" btn btn-danger" type="button" onclick='delete_data()'><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
                        </div>

                        <div class="table">
                            <table class="table-striped table-bordered table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <!-- <th><input type="checkbox" id="check_all"></th> -->
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>MCD</th>
                                        <th>Phone Number</th>
                                        <th colspan="2">A good time to have face to face interview</th>
                                        <th>Attached Resume</th>
                                        <th>Why are you a good leader?</th>
                                        <th>Apply date</th>
                                        <th>Approve</th>
                                        <th>Reject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                if (count($ambassador_apply) > 0) {
                                foreach ($ambassador_apply as $ambassador_apply_val) {
                                    $date = strtotime($ambassador_apply_val['register']['apply_date']);
                                ?>
                                    <tr>
                                        <!-- <td><input type="checkbox" class="checkbox" name="selected_id[]" id="check_all" value="<?php echo $ambassador_apply_val['register']['email'] ?>"></td> -->
                                        <td class="name"><?php echo $ambassador_apply_val['register']['first_name'] ?>&nbsp;&nbsp;<?php echo $ambassador_apply_val['register']['last_name'] ?></td>
                                        <td><?php echo $ambassador_apply_val['register']['email'] ?></td>
                                        <td><?php echo $ambassador_apply_val['register']['crv_code'] ?></td>
                                        <td><?php echo $ambassador_apply_val['register']['phone'] ?></td>                                   
                                        <td><?php echo date('d-M-Y', strtotime($ambassador_apply_val['register']['date_interview'])) ?></td>
                                        <td><?php echo date('h:i A', strtotime($ambassador_apply_val['register']['time_interview'])) ?></td>
                                        <td><?php if($ambassador_apply_val['register']['upload_resume'] != '') { ?><a style="color: #fff !important;" class="btn btn-info" href="admins/download?filename=<?php echo $ambassador_apply_val['register']['upload_resume'] ?>">Download</a><?php } ?></td>
                                        <td><?php echo $ambassador_apply_val['register']['good_leader'] ?></td>
                                        <td><?php echo date('d-M-Y', strtotime($ambassador_apply_val['register']['apply_date'])) ?></td>
                                    <?php if($ambassador_apply_val['register']['approve_ambassador'] == 'approval') { ?>
                                        <td><button class="btn btn-default" type="button" onclick="approve_data(<?php echo $ambassador_apply_val['register']['id'] ?>)">Approve</button></td>
                                        <td><button class="btn btn-danger" type="button" onclick="reject_data(<?php echo $ambassador_apply_val['register']['id'] ?>)">Reject</button></td>
                                    <?php } if($ambassador_apply_val['register']['approve_ambassador'] == 'approved') { ?>
                                        <td>Approved</td>
                                        <td></td>
                                    <?php } if($ambassador_apply_val['register']['approve_ambassador'] == 'reject') { ?>
                                        <td></td>
                                        <td>Reject</td>
                                    <?php } ?>
                                    </tr>
                                <?php } } else { ?>
                                    <tr><td colspan="12"><center><b>No Record Found</b></center></td></tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

            </div>
        </div>
        <!--   <div class="col-xs-6">
               <p class="lead">Register now for <span class="text-success">FREE</span></p>
               <ul class="list-unstyled" style="line-height: 2">
                   <li><span class="fa fa-check text-success"></span>Its helps the employer make well informed decisions</li>
                   <li><span class="fa fa-check text-success"></span>Makes you immediately employable</li>
                   <li><span class="fa fa-check text-success"></span> Demonstrates confidence in your abilities</li>
                   <li><span class="fa fa-check text-success"></span> Provides valuable insight to your abilities</li>
                   <li><span class="fa fa-check text-success"></span>Saves companies time and money</li>
                  
               </ul>
               <p><a href="./Register.jsp" class="btn btn-info btn-block">Yes please, register now!</a></p>
           </div>-->
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
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete selected Record?</div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-success" id="delete_confirm"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                    </div>
                </div>
                <!-- /.modal-content --> 
            </div>
            <!-- /.modal-dialog --> 
        </form>
    </div>

    <?php echo $this->Element('admin/footer') ?>

    <!-- Control Sidebar -->


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
                                                <input type="hidden" name="user_id" id="user_id">
                                                <div class="form-group">
                                                    <label for="crv">MCD: &nbsp; </label>
                                                    <input name="for_crv" type="text" value="" size="40%" id="crv_id" readonly> &nbsp;
                                                    <!-- <input type="button" class="button_use" value="Generate" onclick="generatecrv();" required="" tabindex="2"> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="user">Username: &nbsp; </label>
                                                    <input name="update_username" type="text" value="" size="40%" id="username_id" readonly> &nbsp;
                                                    <!-- <input type="button" class="button_use" value="Generate" onclick="generateuser();" required="" tabindex="2"> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">password: &nbsp; </label>
                                                    <input name="row_password" type="text" size="40%" id="password_id" readonly>&nbsp;
                                                    <!-- <input type="button" class="button_use" value="Generate" onclick="generate();" required="" tabindex="2"> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="mail">Email: &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  </label>

                                                    <input type="email" name="email" id="email" size="40%" readonly="">
                                                    <input type="submit" class="btn btn-success" value="Invite">
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


    <!-- jQuery 2.2.3 -->
    <?php echo $this->Html->script('admin/plugins/jQuery/jquery-2.2.3.min.js') ?>
    <?php echo $this->Html->script('admin/bootstrap/js/bootstrap.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/fastclick/fastclick.js') ?>
    <?php echo $this->Html->script('admin/dist/js/app.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/sparkline/jquery.sparkline.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>
    <?php echo $this->Html->script('admin/plugins/slimScroll/jquery.slimscroll.min.js') ?>

    <script>
        $(document).ready(function () {
            $(".active").children("a").children("span").next().html('<i class="fa fa-arrow-right" aria-hidden="true"></i>');
            $(".treeview").children("a").children(".fa-user-plus").addClass("red_color");
            $(".treeview").children("a").children(".fa-user-plus").next().addClass("red_color");
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#check_all').on('click', function () {
                if (this.checked) {
                    $('.checkbox').each(function () {
                        this.checked = true;
                    });
                } else {
                    $('.checkbox').each(function () {
                        this.checked = false;
                    });
                }
            });
        });
    </script>

    <script>
        function delete_data() {
            var id = [];
            $('.checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });
            if (id.length != 0) {
                $("#delete").modal("show");
            }

        }
    </script>	

    <script>
        $("#delete_confirm").click(function () {
            var id = [];
            $('.checkbox:checked').each(function (i) {
                id[i] = $(this).val();
            });
            $.ajax({
                url: "<?php echo Router::url(['controller'=>'admins/delete_data']) ?>",
                type: "post",
                data: {"delete_id": id},
                success: function (data) {
                    location.reload();
                }
            });
        });
    </script> 

    <script>
        function openModal(id, email, mcd, username, password)
        {
            $("#user_id").val(id);
            $("#email").val(email);
            $("#crv_id").val(mcd);
            $("#username_id").val(username);
            $("#password_id").val(password);
            $("#myModal1").modal("show");
        }
    </script>

    <script>
        $("#myForm").submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo Router::url(['controller'=>'admins/send_info1']) ?>",
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
        function approve_data(id) {
            $.ajax({
                url: "<?php echo Router::url(['controller'=>'admins/approve_data']) ?>",
                type: "POST",
                data: {'user_id': id},
                success: function (data) {
                    alert("Approved");
                    location.reload();
                }
            });
        }
    </script>

    <script>
        function reject_data(id) {
            $.ajax({
                url: "<?php echo Router::url(['controller'=>'admins/reject_data']) ?>",
                type: "POST",
                data: {'user_id': id},
                success: function (data) {
                    alert("Rejected");
                    location.reload();
                }
            });
        }
    </script>

    <script>
        $("#reset_btn").click(function () {
            window.location.href = "<?php echo DOMAIN_NAME ?>" + 'invited.html';
        });
    </script>

</body>
</html>
