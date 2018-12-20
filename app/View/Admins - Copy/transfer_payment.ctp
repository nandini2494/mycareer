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
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!--logo-->
                    <div class="clearfix"></div>

                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo DOMAIN_NAME ?>img/user.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>John Doe</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <hr/>
                    <ul class="sidebar-menu">
                        <!-- <li class="header">MAIN NAVIGATION</li>-->
                        <li class="treeview" id="active">
                            <a href="admin_dashboard.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                <span class="pull-right-container">

                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="invited.html">
                                <i class="fa fa-paper-plane"></i> <span>Applicant Invite </span>
                                <span class="pull-right-container">
                                   <!--  <small class="label pull-right bg-green">2</small> -->
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="indivisuals.html">
                                <?php $total_canada = ($canada_student_trail + $canada_student_starter + $canada_student_advance + $canada_student_acess360 + $canada_unemployed_trail + $canada_unemployed_starter + $canada_unemployed_advance + $canada_unemployed_acess360 + $canada_advance_trail + $canada_advance_starter + $canada_advance_advance + $canada_advance_acess360); ?>
                                <i class="fa fa-map-signs" aria-hidden="true"></i><span>Canada</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg1-red"><?php if($total_canada > 0) { echo $total_canada; } ?></small>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open">
                                <li class='treeview'><a href="#"><i class="fa fa-user"></i>Students<span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <small class="label pull-right bg1-red"><?php if(($canada_student_trail + $canada_student_starter + $canada_student_advance + $canada_student_acess360) > 0) { echo ($canada_student_trail + $canada_student_starter + $canada_student_advance + $canada_student_acess360); } ?></small>
                                            </span>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="canada_student_trail.html">14Days trial<small class="label pull-right bg1-red"><?php if($canada_student_trail > 0) { echo $canada_student_trail; } ?></small></a></li>                                        
                                        <li><a href='canada_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($canada_student_starter > 0) { echo $canada_student_starter; } ?></small></a></li>
                                        <li><a href='canada_career_advanced.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($canada_student_advance > 0) { echo $canada_student_advance; } ?></small></a></li>
                                        <li><a href='canada_access360.html'>All access 360<small class="label pull-right bg1-red"><?php if($canada_student_acess360 > 0) { echo $canada_student_acess360; } ?></small></a></li>
                                    </ul>
                                </li>

                                <li><a href="#"><i class="fa fa-male" aria-hidden="true"></i>Unemployed <span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <small class="label pull-right bg1-red"><?php if(($canada_unemployed_trail + $canada_unemployed_starter + $canada_unemployed_advance + $canada_unemployed_acess360) > 0) { echo ($canada_unemployed_trail + $canada_unemployed_starter + $canada_unemployed_advance + $canada_unemployed_acess360); } ?></small>
                                            </span>
                                        </span></a>
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="canada_unemployed_trail.html">14Days trial<small class="label pull-right bg1-red"><?php if($canada_unemployed_trail > 0) { echo $canada_unemployed_trail; } ?></small></a></li>                                      
                                        <li><a href='canada_unemployed_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($canada_unemployed_starter > 0) { echo $canada_unemployed_starter; } ?></small></a></li>
                                        <li><a href='canada_unemployed_career_advanced.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($canada_unemployed_advance > 0) { echo $canada_unemployed_advance; } ?></small></a></li>
                                        <li><a href='canada_unemployed_career_access360.html'>All access 360<small class="label pull-right bg1-red"><?php if($canada_unemployed_acess360 > 0) { echo $canada_unemployed_acess360; } ?></small></a></li>
                                    </ul>
                                </li>

                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i>Career Advance
                                        <span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <small class="label pull-right bg1-red"><?php if(($canada_advance_trail + $canada_advance_starter + $canada_advance_advance + $canada_advance_acess360) > 0) { echo ($canada_advance_trail + $canada_advance_starter + $canada_advance_advance + $canada_advance_acess360); } ?></small>
                                            </span>
                                        </span></a> 
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="canada_careeradvance_trail.html">14Days trial<small class="label pull-right bg1-red"><?php if($canada_advance_trail > 0) { echo $canada_advance_trail; } ?></small></a></li>                                       
                                        <li><a href='canada_careeradvance_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($canada_advance_starter > 0) { echo $canada_advance_starter; } ?></small></a></li>
                                        <li><a href='canada_careeradvance_career_advance.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($canada_advance_advance > 0) { echo $canada_advance_advance; } ?></small></a></li>
                                        <li><a href='canada_careeradvance_acess360.html'>All access 360<small class="label pull-right bg1-red"><?php if($canada_advance_acess360 > 0) { echo $canada_advance_acess360; } ?></small></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <?php $total_america = ($america_student_trail + $america_student_starter + $america_student_advance + $america_student_acess360 + $america_unemployed_trail + $america_unemployed_starter + $america_unemployed_advance + $america_unemployed_acess360 + $america_advance_trail + $america_advance_starter + $america_advance_advance + $america_advance_acess360); ?>
                            <a href="#">
                                <i class="fa fa-map-signs" aria-hidden="true"></i><span>America</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg1-red"><?php if($total_america > 0) { echo $total_america; } ?></small>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open">
                                <li class='treeview'><a href=""><i class="fa fa-user"></i>Students<span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <small class="label pull-right bg1-red"><?php if(($america_student_trail + $america_student_starter + $america_student_advance + $america_student_acess360) > 0) { echo ($america_student_trail + $america_student_starter + $america_student_advance + $america_student_acess360); } ?></small>
                                            </span>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="america_student_trail.html">14Days trial<small class="label pull-right bg1-red"><?php if($america_student_trail > 0) { echo $america_student_trail; } ?></small></a></li>                                      
                                        <li><a href='america_student_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($america_student_starter > 0) { echo $america_student_starter; } ?></small></a></li>
                                        <li><a href='america_student_career_advanced.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($america_student_advance > 0) { echo $america_student_advance; } ?></small></a></li>
                                        <li><a href='america_student_access360.html'>All access 360<small class="label pull-right bg1-red"><?php if($america_student_acess360 > 0) { echo $america_student_acess360; } ?></small></a></li>
                                    </ul>

                                </li>

                                <li><a href="#"><i class="fa fa-male" aria-hidden="true"></i>Unemployed <span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <small class="label pull-right bg1-red"><?php if(($america_unemployed_trail + $america_unemployed_starter + $america_unemployed_advance + $america_unemployed_acess360) > 0) { echo ($america_unemployed_trail + $america_unemployed_starter + $america_unemployed_advance + $america_unemployed_acess360); } ?></small>
                                            </span>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="america_unemployed_trail.html">14Days trial<small class="label pull-right bg1-red"><?php if($america_unemployed_trail > 0) { echo $america_unemployed_trail; } ?></small></a></li>                                       
                                        <li><a href='america_unemployed_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($america_unemployed_starter > 0) { echo $america_unemployed_starter; } ?></small></a></li>
                                        <li><a href='america_unemployed_career_advance.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($america_unemployed_advance > 0) { echo $america_unemployed_advance; } ?></small></a></li>
                                        <li><a href='america_unemployed_access360.html'>All access 360<small class="label pull-right bg1-red"><?php if($america_unemployed_acess360 > 0) { echo $america_unemployed_acess360; } ?></small></a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i>Career Advance
                                        <span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <small class="label pull-right bg1-red"><?php if(($america_advance_trail + $america_advance_starter + $america_advance_advance + $america_advance_acess360) > 0) { echo ($america_advance_trail + $america_advance_starter + $america_advance_advance + $america_advance_acess360); } ?></small>
                                            </span>
                                        </span></a> 
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="america_career_advance_trail.html">14Days trial<small class="label pull-right bg1-red"><?php if($america_advance_trail > 0) { echo $america_advance_trail; } ?></small></a></li>                                       
                                        <li><a href='america_career_advance_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($america_advance_starter > 0) { echo $america_advance_starter; } ?></small></a></li>
                                        <li><a href='america_career_advance_career_advance.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($america_advance_advance > 0) { echo $america_advance_advance; } ?></small></a></li>
                                        <li><a href='america_career_advance_access360.html'>All access 360<small class="label pull-right bg1-red"><?php if($america_advance_acess360 > 0) { echo $america_advance_acess360; } ?></small></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user-plus"></i>
                                <span>New</span>
                                <span class="pull-right-container">
                                   
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="new_page.html"><i class="fa fa-user"></i>New User<span class="pull-right-container">
                                            <small class="label pull-right bg-red"></small>
                                        </span>
                                    </a>
                                </li>
                                <li><a href="new_profile.html"><i class="fa fa-picture-o"></i>Updated Profile<span class="pull-right-container">
                                            <small class="label pull-right bg-red"></small>
                                        </span></a>
                                </li>                                
                            </ul>
                        </li> -->

                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-credit-card user_data"></i>
                                <span class="user_data">Payment</span>
                                <span class="pull-right-container">
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="payment.html"><i class="fa fa-paypal"></i>Paypal Payment<span class="pull-right-container">
                                        </span>
                                    </a>
                                </li>
                                <li class="active_sub"><a href="transfer_payment.html"><i class="fa fa-money"></i>E - transfer Payment<span class="pull-right-container">                                           
                                        </span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="corporate.html">
                                <i class="fa fa-users"></i>
                                <span> Corporate </span>
                                <span class="pull-right-container">

                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="lookup.html">
                                <i class="fa fa-search"></i> <span>Look up </span>
                                <span class="pull-right-container">

                                </span>
                            </a>

                        </li>

                        <li class="treeview">
                            <a href="seo_data.html">
                                <i class="fa fa-bar-chart-o"></i> <span>SEO Data</span>
                                <span class="pull-right-container">

                                </span>
                            </a>

                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

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

                    <h3 class="title_">E-Transfer Payment</h3>
                    <!-- <div class="pull-right icons" id="icons">
                        <button class=" btn btn-danger" type="button" onclick='delete_data()'><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </div> -->
                    <div class="clearfix"></div>


                    <div class="container" style="width:100%;">
                        <table class="table table-striped table-bordered table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>CRV</th>
                                    <th>Service</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($payment_data) > 0) {
                                foreach ($payment_data as $payment_val) {
                                ?>
                                <tr>                                    
                                    <td><?php echo $payments['register']['crv_code']; ?></td>
                                    <td><?php echo "Program SignUp"; ?></td>
                                    <td>$<?php echo number_format($payments['register']['amount'],2) ?></td>
                                    <td><?php echo date('d-M-Y',strtotime($payment_val['register']['date'])) ?></td>
                                </tr>
                                    <?php } } else { ?>
                                <tr><td colspan="9"><center><b> No Record Found </b></center></td></tr>
                                <?php } ?>  
                            </tbody>
                        </table>
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
    function viewData(txn_id) {
        $.ajax({
            url: "<?php echo Router::url(['controller' => 'admins/verify_data']) ?>",
            type: "post",
            data: {'id': txn_id},
            success: function (data) {
                window.location = "<?php echo DOMAIN_NAME ?>new_reference.html";
            }
        });
    }
</script>

</body>
</html>