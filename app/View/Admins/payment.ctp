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

                    <h3 class="title_">Paypal Payment</h3>
                    <!-- <div class="pull-right icons" id="icons">
                        <button class=" btn btn-danger" type="button" onclick='delete_data()'><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </div> -->

                    <div class="well">
                        <div class="row">
                            <form method="post">    
                                <input type="hidden" name="form_name" value="filter">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Country:</label>
                                        <select class="form-control" name="country">
                                            <option value="">--Select Country--</option>
                                            <option value="Canada">Canada</option>
                                            <option value="United States">United States</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Program:</label>
                                        <select class="form-control" name="program">
                                            <option value="">--Select Program--</option>
                                            <option value="starter">Career Starter</option>
                                            <option value="advanced">Career Advanced</option>
                                            <option value="access360">All Access 360</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Status:</label>
                                        <select class="form-control" name="status">
                                            <option value="">--Select Status--</option>
                                            <option value="Student">Student</option>
                                            <option value="Unemployed">Unemployed</option>
                                            <option value="Career Advancement">Career Advancement</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>&nbsp;</label><br/>
                                        <button type="submit" class=" btn btn-primary"> <i class="fa fa-filter"></i> Filter</button>
                                        <button type="button" id="reset_btn" class=" btn btn-success" style="margin-left:1em;"> <i class="fa fa-refresh"></i> Reset</button>
                                    </div>
                                </div>
                            </form> 

                        </div>


                    </div>

                    <div class="well">
                        <div class="row">
                            <form method="post">    
                                <input type="hidden" name="form_name" value="search">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>MCD:</label>
                                        <input type="text" class="form-control" name="crv_code" placeholder="Enter MCD number">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>&nbsp;</label></br>
                                        <button type="submit" id="filter_btn" class=" btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                                    </div>
                                </div>
                            </form> 

                        </div>


                    </div>

                    <div class="clearfix"></div>


                    <div class="container" style="width:100%;">
                        <div class="table">
                            <table class="table-striped table-bordered table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th>Payment Id</th>
                                        <th>MCD</th>
                                        <th>Program</th>
                                        <th>Status</th>
                                        <th>Country</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (count($payment) > 0) {
                                foreach ($payment as $payments) {
                                ?>
                                    <tr>                                    
                                        <td><?php echo $payments['payment']['txn_id'] ?></td>
                                        <td><?php echo $payments['register']['crv_code']; ?></td>
                                        <td><?php if($payments['register']['program'] == 'starter'){  ?>
                                            Career Starter
                                    <?php } else if($payments['register']['program'] == 'advanced'){  ?>  
                                            Career Advanced
                                    <?php } else if($payments['register']['program'] == 'access360'){  ?> 
                                            All Access 360
                                    <?php } ?>    
                                        </td>
                                        <td><?php echo $payments['register']['status']; ?></td>
                                        <td><?php echo $payments['register']['country']; ?></td>
                                        <td><?php if(!empty($payments['payment']['amount'])) { echo "$ ".number_format($payments['payment']['amount'],2); } ?></td>
                                        <td><?php if(!empty($payments['payment']['payment_date'])) { echo date('M d, Y', strtotime($payments['payment']['payment_date'])); } ?></td> 
                                    </tr>
                                    <?php } } else { ?>
                                    <tr><td colspan="9"><center><b> No Record Found </b></center></td></tr>
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

            <!--end tables-->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
            <?php echo $this->Element('admin/footer') ?>
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<!--<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>-->
        <?php echo $this->Html->script('admin/plugins/jQuery/new_lib.js') ?>

<script>
    $(document).ready(function () {
        $(".fee-pay").click(function () {
            $("#Toggle_use_only").slideToggle();
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
    $("#reset_btn").click(function () {
        window.location.href = "<?php echo DOMAIN_NAME ?>" + 'payment.html';
    });
</script>

</body>
</html>