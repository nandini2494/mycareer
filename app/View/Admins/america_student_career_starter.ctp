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
        <?php echo $this->Html->css('admin/bootstrap/css/bootstrap.min.css') ?>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <?php echo $this->Html->css('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
        <?php echo $this->Html->css('admin/dist/css/AdminLTE.min.css') ?>
        <?php echo $this->Html->css('admin/dist/css/skins/_all-skins.min.css') ?>
        <?php echo $this->Html->css('admin/dist/css/responsive_use.css') ?>
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
                <div class="w3l_header_right">

                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="wrapper">
            <?php echo $this->Element('admin/header') ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php echo $this->Element('admin/sidebar') ?>

            <div class="clearfix"></div>
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
                    <!--table-->

                    <h3 class="title_">America Student Career Starter</h3>

                    <div class="container" style="width:100%;">

                        <div class="pull-right icons" id="icons">
                            <button class=" btn btn-danger" type="button" onclick='delete_invited_data()'><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="table">
                            <table class="table-striped table-bordered table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="check_all_invite"></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>MCD</th>
                                        <th>Country</th>
                                        <th>State/Province</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        <th>Program</th>
                                        <th>Invite Date</th>
                                        <th>Signed In</th>
                                        <th>Days Left</th>
                                        <th>Reminder</th>

                                    </tr>
                                </thead>
                                <tbody>                                
                                    <?php
                                        if (count($invite_data) > 0) {
                                        foreach ($invite_data as $invite) {								
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox_invite" name="selected_invite_id[]" value="<?php echo $invite['register']['email'] ?>" id="check_all_invite"></td>
                                        <td class="name"><?php echo $invite['register']['first_name'] ?>&nbsp;&nbsp;<?php echo $invite['register']['last_name'] ?></td>
                                        <td><?php echo $invite['register']['email'] ?></td>
                                        <td><?php echo $invite['register']['crv_code'] ?></td>
                                        <td><?php echo $invite['country']['name'] ?></td>
                                        <td><?php echo $invite['state']['state_name'] ?></td>
                                        <td><?php echo $invite['city']['city_name'] ?></td>
                                        <td><?php echo $invite['register']['status'] ?></td>
                                        <td><?php if($invite['register']['program'] == 'trail'){  ?>
                                            14 days Trial
                                                <?php } else if($invite['register']['program'] == 'starter'){  ?>
                                            Career Starter
                                                <?php } else if($invite['register']['program'] == 'advanced'){  ?>  
                                            Career Advanced
                                                <?php } else if($invite['register']['program'] == 'access360'){  ?> 
                                            All Access 360
                                                <?php } ?>    
                                        </td>
                                        <td><?php if(!empty($invite['register']['invite_date'])) { echo date('d-M-Y',strtotime($invite['register']['invite_date'])); } else { echo ""; } ?></td>
                                        <td>
                                            <?php if($invite['register']['user_signin'] == '0') { ?>
                                            Registered
                                            <?php } else if($invite['register']['user_signin'] == '1') { ?>
                                            <?php if(!empty($invite['register']['signin_date'])) { echo date('d-M-Y',strtotime($invite['register']['signin_date'])); } else { echo ""; } ?>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php 
                                            if($invite['register']['program'] == 'trail'){
                                                $current_date = date_create(date('Y-m-d')); 
                                                $reg_date = date_create(date('Y-m-d',strtotime($invite['register']['date'])));
                                                $diff = date_diff($reg_date, $current_date);
                                                $days = $diff->format("%a");
                                                $day_left = (14 - $days);
                                                echo $day_left ." Days";
                                            }
                                            if($invite['register']['program'] == 'starter' || $invite['register']['program'] == 'advanced' || $invite['register']['program'] == 'access360') {
                                                if($invite['register']['duration_date'] == '') {
                                                    $current_date = date_create(date('Y-m-d')); 
                                                    $reg_date = date_create(date('Y-m-d',strtotime($invite['register']['payment_date'])));
                                                    $diff = date_diff($reg_date, $current_date);
                                                    $days = $diff->format("%a");
                                                    $day_val = (365 - $days);     
                                                    echo $day_val ." Days";
                                                } else {
                                                    $current_date = date_create(date('Y-m-d')); 
                                                    $reg_date = date_create(date('Y-m-d',strtotime($invite['register']['duration_date'])));
                                                    $diff = date_diff($reg_date, $current_date);
                                                    $day_val = $diff->format("%a");
                                                    echo $day_val ." Days";
                                                }
                                            }
                                            ?>
                                        </td>                                            
                                        <td><button class="btn btn-default" type="button" onclick="reminder_data(<?php echo $invite['register']['id'] ?>)">Reminder</button></td>
                                    </tr>
                                        <?php } } else { ?>

                                    <tr><td colspan="16"><center><b> No Record Found </b></center></td></tr>

                                        <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!--script--->
                    <script>
                        $(document).ready(function () {
                            $(".fee-pay").click(function () {
                                $(".after_yes").toggle();
                            });
                        });
                    </script>
                    <!--script--->	
                    <div class="clearfix"></div>

            </div>
            <!-- /.container -->

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

            <div class="modal fade" id="delete1" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
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
                                <button type="button" class="btn btn-success" id="delete_confirm1"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                            </div>
                        </div>
                        <!-- /.modal-content --> 
                    </div>
                    <!-- /.modal-dialog --> 
                </form>
            </div>
            <!--end tables-->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php echo $this->Element('admin/footer') ?>
    <!--<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>-->
    <?php echo $this->Html->script('admin/plugins/jQuery/new_lib.js') ?>

    <script>
        $(document).ready(function () {

            $(".fee-pay").click(function () {
                $("#Toggle_use_only").slideToggle();

            });
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
        $(document).ready(function () {
            $('#check_all_invite').on('click', function () {
                if (this.checked) {
                    $('.checkbox_invite').each(function () {
                        this.checked = true;
                    });
                } else {
                    $('.checkbox_invite').each(function () {
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
        function delete_invited_data() {
            var id1 = [];
            $('.checkbox_invite:checked').each(function (i) {
                id1[i] = $(this).val();
            });
            if (id1.length != 0) {
                $("#delete1").modal("show");
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
        $("#delete_confirm1").click(function () {
            var id = [];
            $('.checkbox_invite:checked').each(function (i) {
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

    <?php echo $this->Html->script('admin/bootstrap/js/bootstrap.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/fastclick/fastclick.js') ?>
    <?php echo $this->Html->script('admin/dist/js/app.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/sparkline/jquery.sparkline.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>
    <?php echo $this->Html->script('admin/plugins/slimScroll/jquery.slimscroll.min.js') ?>

    <!-- ChartJS 1.0.1 -->
    <script>
        $(document).ready(function () {
            $(".active").children("a").children("span").next().html('<i class="fa fa-arrow-right" aria-hidden="true"></i>');
            $(".treeview").children("a").children(".fa-user-plus").addClass("red_color");
            $(".treeview").children("a").children(".fa-user-plus").next().addClass("red_color");
            $(".active").children("a").children(".fa-user-plus").removeClass("red_color");
            $(".active").children("a").children(".fa-user-plus").next().removeClass("red_color");
        });
    </script>

    <script>
        function reminder_data(id) {
            $.ajax({
                url: "<?php echo Router::url(['controller'=>'admins/send_reminder']) ?>",
                type: "POST",
                data: {'user_id': id},
                success: function (data) {
                    alert("Reminder send");
                }
            });
        }
    </script>

</body>
</html>