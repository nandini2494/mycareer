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
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- jvectormap -->
        <?php echo $this->Html->css('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
        <?php echo $this->Html->css('admin/dist/css/AdminLTE.min.css') ?>
        <?php echo $this->Html->css('admin/dist/css/skins/_all-skins.min.css') ?>

        <style>
            .name {text-transform: capitalize}
            .table>tbody>tr>td{
                color: #333 !important;
                font-weight: bold;
            }
            .clickable { cursor: pointer; }
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
                            <a href="#">
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

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-money"></i>
                                <span>Tax Details</span>
                                <span class="pull-right-container">

                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="view_tax.html"><i class="fa fa-search-plus"></i>View Tax<span class="pull-right-container">
                                            <small class="label pull-right bg-red"></small>
                                        </span>
                                    </a>
                                </li>
                                <li><a href="add_tax.html"><i class="fa fa-user-plus"></i>Add Tax<span class="pull-right-container">
                                            <small class="label pull-right bg-red"></small>
                                        </span></a>
                                </li>                                
                            </ul>
                        </li>

                        <li>
                            <a href="payment.html">
                                <i class="fa fa-paper-plane"></i> <span>Paypal Payment </span>
                                <span class="pull-right-container">
                                   <!--  <small class="label pull-right bg-green">2</small> -->
                                </span>
                            </a>
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
                            <a href="school_register.html">
                                <i class="fa fa-registered"></i>
                                <span> Invite School </span>
                                <span class="pull-right-container">

                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="registered_school.html">
                                <i class="fa fa-university"></i>
                                <span> Registered School </span>
                                <span class="pull-right-container">

                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="school_payment.html">
                                <i class="fa fa-credit-card"></i>
                                <span> School Payment </span>
                                <span class="pull-right-container">

                                </span>
                            </a>
                        </li>

                        <li class="active treeview">
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
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!--  <section class="content-header">
                   <h1>
                     Dashboard
                     <small>Version 2.0</small>
                   </h1>
                   <ol class="breadcrumb">
                     <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                     <li class="active">Dashboard</li>
                   </ol>
                   </section> -->
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
                    <h3 class="title_">Look Up</h3>
                    <div class="well">
                        <div class="row">
                            <form method="post">    
                                <input type="hidden" name="form_data" value="crv_data">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Enter MCD:</label>
                                        <input type="text" class="form-control" name="crv_code" placeholder="Enter MCD number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>&nbsp;</label></br>
                                        <button type="submit" id="filter_btn" class=" btn btn-primary"> <i class="fa fa-search"></i>&nbsp;Look Up</button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>

                    <div class="well">
                        <div class="row">
                            <form method="post">  
                                <input type="hidden" name="form_data" value="province_data">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Lastname">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Province</label>
                                        <input type="text" class="form-control" name="province" placeholder="Province">
                                    </div>
                                </div>    
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>&nbsp;</label></br>
                                        <button type="submit" id="filter_btn" class=" btn btn-primary"> <i class="fa fa-search"></i>&nbsp;Look Up</button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>

                    <?php if (count($results) > 0) { ?>
                    <div class="container" style="width:100%;">                       
                        <table class="table table-striped table-bordered table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>CRV</th>
                                    <th>Program</th>
                                    <th>View Reference</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php                                
                                foreach ($results as $result) {
                            ?>
                                <tr>              
                                    <td class="name"><?php echo $result['register']['first_name'] ?>&nbsp;&nbsp;<?php echo $result['register']['last_name'] ?></td>
                                    <td><?php echo $result['register']['email'] ?></td>
                                    <td><?php echo $result['register']['crv_code'] ?></td>
                                    <td><?php echo $result['register']['program_signup'] ?></td>
                                    <td><button class="btn btn-default view_button" onclick='view("<?php echo $result['register']['id'] ?>", "<?php echo $result['register']['first_name'] ?>", "<?php echo $result['register']['last_name'] ?>")'>View</button></td>
                                </tr>       
                               <?php } ?>
                            </tbody>
                        </table>                         
                    </div>
                    <?php } ?>                    
                    <div class="clearfix"></div>                    
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- /.container -->

    <div id="myModal1" class="modal fade myModal1" role="dialog">
        <div class="modal-dialog">
            <div>
                <div class="row">
                    <div class="modal-content catagry_body_use"">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="container" style="width:100%;">                                           
                            <table class="table">
                                <thead>
                                    <tr class="">
                                        <th>Name</th>
                                        <td class="name"><a id='username'></a></td>
                                    </tr>
                                    <tr>
                                        <th>Program</th>
                                        <td><a>Reference Verification</a></td>
                                    </tr>
                                    <tr>
                                        <th>Number of references </th>
                                        <td data-toggle="collapse" data-target="#accordion" class="clickable" style="cursor:pointer;">
                                            <b><a><u><span id="ref"></span> references</u></a></b>
                                        </td>
                                    </tr>

                                    <tr id="accordion" class="collapse"> 
                                        <td colspan="3"><div>
                                                <table class="table">
                                                    <thead id="verify_ref">

                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Authorization Form Signed</th>

                                        <td><a>Yes</a></td>
                                    </tr>
                                    <tr>
                                        <th>Payment Received</th>
                                        <td ><a >Yes</a></td>
                                    </tr>
                                </thead>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- /.container -->

    </div>

    <!--end model-->

</div>


<!--************************************
End Email Prefrence
*************************************-->


<div class="clearfix"></div>

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
    function view(user_id, firstname, lastname) {
        $('#username').text(firstname + " " + lastname);
        $.ajax({
            url: "<?php echo Router::url(['controller' => 'admins/lookup_ref']) ?>",
            type: "POST",
            data: {"user_id": user_id},
            success: function (data) {
                var response = JSON.parse(data);
                $('#ref').text(response.length);

                var html_data = '<thead id="verify_ref">';
                html_data += '<tr>';
                html_data += '<th>Sr. no. </th>';
                html_data += '<th>Company Name</th>';
                html_data += '<th>Verification</th>';
                html_data += '<th>Type</th>';
                html_data += '<th>Certify/Verify information</th>';
                html_data += '</tr>';
                for (var i = 0; i < response.length; i++) {
                    html_data += '<tr>';
                    html_data += '<td>' + (i + 1) + ')  </td>';
                    html_data += '<td>' + response[i].verify_reference.business_name + '</td>';
                    html_data += '<td>' + response[i].verify_reference.reference_name + '</td>';
                    html_data += '<td>' + response[i].verify_reference.reference_type + '</td>';
                    html_data += '<td><a href="' + response[i].verify_reference.reference_type + 'ed.html?id=' + response[i].verify_reference.id + '&user_id=' + response[i].verify_reference.user_id + '&ref_name=' + response[i].verify_reference.reference_name + '">Update</a></td>';
                    html_data += '</tr>';
                }

                html_data += '</thead>';
                $('#verify_ref').replaceWith(html_data);
                $('#myModal1').modal('show');
            }
        });
    }
</script>

<script>
    $(document).ready(function () {
        $(".active").children("a").children("span").next().html('<i class="fa fa-arrow-right" aria-hidden="true"></i>');
        $(".treeview").children("a").children(".fa-user-plus").addClass("red_color");
        $(".treeview").children("a").children(".fa-user-plus").next().addClass("red_color");
        $(".active").children("a").children(".fa-user-plus").removeClass("red_color");
        $(".active").children("a").children(".fa-user-plus").next().removeClass("red_color");
    });
</script>   

</body>
</html>