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
            .name {
                text-transform: capitalize;
            }            
            .err{
                background: #ece6e6;
                padding: 5px !important;
                color: #00a65a;
                text-align: center;
                margin-bottom: 2em;
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
                                <i class="fa fa-map-signs" aria-hidden="true"></i><span>Canada</span>
                                <span class="pull-right-container">
                                    <span class="pull-right-container"></span>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open">
                                <li class='treeview'><a href="#"><i class="fa fa-user"></i>Students<span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <span class="pull-right-container"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                            </span>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="canada_student_trail.html">14Days trial</a></li>                                        
                                        <li><a href='canada_career_starter.html'>Career Starter</a></li>
                                        <li><a href='canada_career_advanced.html'>Career Advanced</a></li>
                                        <li><a href='canada_access360.html'>All access 360</a></li>
                                    </ul>
                                </li>

                                <li><a href="#"><i class="fa fa-male" aria-hidden="true"></i>Unemployed <span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <span class="pull-right-container"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                            </span>
                                        </span></a>
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="canada_unemployed_trail.html">14Days trial</a></li>                                      
                                        <li><a href='canada_unemployed_career_starter.html'>Career Starter</a></li>
                                        <li><a href='canada_unemployed_career_advanced.html'>Career Advanced</a></li>
                                        <li><a href='canada_unemployed_career_access360.html'>All access 360</a></li>
                                    </ul>
                                </li>

                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i>Career Advance
                                        <span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <span class="pull-right-container"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                            </span>
                                        </span></a> 
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="canada_careeradvance_trail.html">14Days trial</a></li>                                       
                                        <li><a href='canada_careeradvance_career_starter.html'>Career Starter</a></li>
                                        <li><a href='canada_careeradvance_career_advance.html'>Career Advanced</a></li>
                                        <li><a href='canada_careeradvance_acess360.html'>All access 360</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-map-signs" aria-hidden="true"></i><span>America</span>
                                <span class="pull-right-container">

                                </span>
                            </a>
                            <ul class="treeview-menu menu-open">
                                <li class='treeview'><a href=""><i class="fa fa-user"></i>Students<span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <span class="pull-right-container"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                            </span>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="america_student_trail.html">14Days trial</a></li>                                      
                                        <li><a href='america_student_career_starter.html'>Career Starter</a></li>
                                        <li><a href='america_student_career_advanced.html'>Career Advanced</a></li>
                                        <li><a href='america_student_access360.html'>All access 360</a></li>
                                    </ul>

                                </li>

                                <li><a href="#"><i class="fa fa-male" aria-hidden="true"></i>Unemployed <span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <span class="pull-right-container"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                            </span>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="america_unemployed_trail.html">14Days trial</a></li>                                       
                                        <li><a href='america_unemployed_career_starter.html'>Career Starter</a></li>
                                        <li><a href='america_unemployed_career_advance.html'>Career Advanced</a></li>
                                        <li><a href='america_unemployed_access360.html'>All access 360</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i>Career Advance
                                        <span class="pull-right-container">
                                            <span class="pull-right-container">
                                                <span class="pull-right-container"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                            </span>
                                        </span></a> 
                                    <ul class="treeview-menu menu-open">
                                        <li><a href="america_career_advance_trail.html">14Days trial</a></li>                                       
                                        <li><a href='america_career_advance_career_starter.html'>Career Starter</a></li>
                                        <li><a href='america_career_advance_career_advance.html'>Career Advanced</a></li>
                                        <li><a href='america_career_advance_access360.html'>All access 360</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-user-plus"></i>
                                <span>New</span>
                                <span class="pull-right-container">

                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active_sub"><a href="new_page.html"><i class="fa fa-user"></i>New User<span class="pull-right-container">
                                            <small class="label pull-right bg-red"></small>
                                        </span>
                                    </a>
                                </li>
                                <li><a href="new_profile.html"><i class="fa fa-picture-o"></i>Updated Profile<span class="pull-right-container">
                                            <small class="label pull-right bg-red"></small>
                                        </span></a>
                                </li>                                
                            </ul>
                        </li>

                        <li class="treeview">
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
                                <li><a href="transfer_payment.html"><i class="fa fa-money"></i>E - transfer Payment<span class="pull-right-container">                                           
                                        </span>
                                    </a>
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

                    <div class="clearfix"></div>

                    <h3 class="title_">New Applicant</h3>
                    <div class="pull-right icons" id="icons">

                        <button class=" btn btn-danger" type="button" onclick='delete_data()'><i class="fa fa-trash-o" aria-hidden="true"></i></button>

                    </div>

                    <div class="clearfix"></div>

                    <div class="container" style="width:100%;">

                        <table class="table table-striped table-bordered table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="check_all"></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>Send Invitation</th>

                                </tr>
                            </thead>
                            <tbody>                                
                                <?php
                                if (count($results) > 0) {
                                foreach ($results as $result) {
								$program = substr($result['register']['program_signup'],0,1);
                                ?>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" name="selected_id[]" value="<?php echo $result['register']['id'] ?>" id="check_all"></td>
                                    <td class="name"><?php echo $result['register']['first_name'] ?>&nbsp;&nbsp;<?php echo $result['register']['last_name'] ?></td>
                                    <td><?php echo $result['register']['email'] ?></td>
                                    <td><?php echo $result['register']['country'] ?></td>
                                    <td><button class="btn btn-default" type="button" onclick='openModal("<?php echo $result['register']['id'] ?>", "<?php echo $result['register']['email'] ?>", "<?php echo $result['register']['provence'] ?>", "<?php echo $program ?>")'>Invite</button></td>
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
                    <div id="Toggle_use_only" style="display:none;">
                        <div class="container after_yes" style="width:100%;">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table">
                                        <thead>
                                            <tr class="info">
                                                <th>Name</th>
                                                <td>Jim Rea</td>
                                            </tr>
                                            <tr class="info">
                                                <th>Payment Received       </th>
                                                <td>Yes</td>
                                            </tr>
                                            <tr class="info">
                                                <th>Authorization Form Signed    </th>
                                                <td>Yes  </td>
                                            </tr>
                                            <tr class="info">
                                                <th>Program</th>
                                                <td>Reference Verification </td>
                                            </tr>
                                            <tr class="info">
                                                <th>Employment</th>
                                                <td>3 references</td>
                                            </tr>
                                            <tr class="info">
                                                <th>Co-op, </th>
                                                <td>1 reference</td>
                                            </tr>
                                            <tr class="info">
                                                <th>Personal </th>
                                                <td>1 reference </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <thead>
                                            <tr class="danger">
                                                <th>Service</th>
                                                <td>Student</td>
                                            </tr>
                                            <tr class="danger">
                                                <th>Status </th>
                                                <td>Pending 3 days</td>
                                            </tr>
                                            <tr class="danger">
                                                <th>CRV#</th>
                                                <td>on1234</td>
                                            </tr>
                                            <tr class="danger">
                                                <th>Open </th>
                                                <td>Yes  2 of 3 references completed </td>
                                            </tr>
                                            <tr class="danger">
                                                <th>New/Updated</th>
                                                <td>yes</td>
                                            </tr>
                                            <tr class="danger">
                                                <th>Upload to server </th>
                                                <td>yes</td>
                                            </tr>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!--popup-->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Some text in the modal.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--popup-->
                        <script>
                            $(document).ready(function () {
                                $(".open").click(function () {
                                    $(".modall").show();
                                });
                            });
                        </script>
                        <div class="container">
                            <form class="well form-horizontal" action=" " method="post"  id="contact_form">
                                <fieldset>
                                    <!-- Form Name -->
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Name Of Applicant</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  name="first_name" placeholder=" Name" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Address</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input name="address" placeholder="Address" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Provence </label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input name="address" placeholder="Provence " class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">E-Mail</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- radio checks -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Confirmed</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="hosting" value="yes" /> Yes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="hosting" value="no" /> No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">List of resources </label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                <select name="state" class="form-control selectpicker" >
                                                    <option value=" " >List of resources </option>
                                                    <option>Canada 411</option>
                                                    <option>Google</option>
                                                    <option >Called </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--text-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Comments</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                <textarea class="form-control" name="comment" placeholder="Comments"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Date Start</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                <input name="Date Start" placeholder="Date Start" class="form-control" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Time Date Finish</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                <input name="Time Date Finish" placeholder="Time Date Finish" class="form-control" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- radio checks -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Call</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="hosting" value="yes" />First Call      
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="hosting" value="no" /> Second Try
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="hosting" value="no" />Third Try  
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--text-->
                                    <h3 style="padding:3% 1% 3% 29%;">Employment Verification</h3>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Present Employer Business Name </label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  name="first_name" placeholder=" Present Employer Business Name " class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Address</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input name="address" placeholder="Address" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Present Address </label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input name="address" placeholder="number, street name, apt#, city, province/state, postal/zip code " class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">City</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input name="city" placeholder="city" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- radio checks -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Provence </label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input name="address" placeholder="Provence " class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Zip Code</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!--text-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Phone</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Ext.</label>  
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                <input name="city" placeholder="Ext." class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- radio checks -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Business Confirmed    </label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="hosting" value="yes" />Yes      
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="hosting" value="no" /> 
                                                    <select ng-model='discussionsSelect' class='form-control'>
                                                        <option value='total'>no</option>
                                                        <option value='created'>Called</option>
                                                        <option value='read'>Looked Up</option>
                                                        <option value='replied'>Website</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--radio-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Address Confirmed</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="hosting" value="yes" />Yes      
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="hosting" value="no" /> 
                                                    <div class="input-group">
                                                        <textarea class="form-control" name="comment" placeholder="address"></textarea>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--text-->
                                    <!-- Success message -->
                                    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-warning" >Verified <span class="glyphicon glyphicon-send"></span></button>
                                        </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!-- /.container -->

                    <!-- Delete -->
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
                    <!-- End Delete -->

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


                                                            <!--                   <form name="myform" method="post" action="">
                                                         <input type="hidden" name="length" value="10">
                                                         <table width="100%" border="0">
                                                             <tr>
                                                                 <td width="120">Username:</td>
                                                                 <td>
                                                                     <input  type="text" value="" size="40"> &nbsp;
                                                                        <input type="button" name="update_username"class="button" value="Generate" onClick="generateuser();" tabindex="2">
                                                                 </td>
                                                             </tr>
                                                             <tr></tr>
                                                             <tr>
                                                                 <td>Password:</td>
                                                                 <td>
                                                                     <input name="row_password" type="text" size="40">&nbsp;
                                                                     <input type="button" class="button" value="Generate" onClick="generate();" tabindex="2">
                                                                 </td>
                                                             </tr>
                                                        <tr></tr>
                                                             <tr>                    
                                                           <td>Email:</td>
                                                        
                                                            <td>  <input type="email" class="form-control" id="email" required>
                                                                </td>
                                                                 <td></td>
                                                                </tr>
                                                     
                                                             <tr>
                                                                 <td></td>
                                                                 <td><button type="submit" class="btn btn-success" style="float:right;">Invite</button> </td>
                                                             </tr>
                                                              </table> 
                                                                                  
                                                                                  
                                                           </div>
                                                         </div>
                                                     </form> -->


                                                            <form id="myForm" name="myform" method="post">                                                               
                                                                <input type="hidden" name="length" value="10">
                                                                <input type="hidden" name="user_id" id="user_id">
                                                                <input type="hidden" name="provence" id="provence">
                                                                <input type="hidden" name="program" id="program">

                                                                <div class="form-group">
                                                                    <label for="crv">MCD: &nbsp; </label>
                                                                    <input name="for_crv" type="text" value="" size="40%" id="crv" readonly> &nbsp;
                                                                    <input type="button" class="button_use" value="Generate" onclick="generatecrv();" required="" tabindex="2">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="user">Username: &nbsp; </label>
                                                                    <input name="update_username" type="text" value="" size="40%"> &nbsp;
                                                                    <input type="button" class="button_use" value="Generate" onclick="generateuser();" required="" tabindex="2">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="password">password: &nbsp; </label>
                                                                    <input name="row_password" type="text" size="40%">&nbsp;
                                                                    <input type="button" class="button_use" value="Generate" onclick="generate();" required="" tabindex="2">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="mail">Email: &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  </label>

                                                                    <input type="email" name="email" id="email" size="40%" readonly="">
                                                                    <input type="submit" class="btn btn-success" value="Invite">
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
                            var length = "4";
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
                        $(document).ready(function () {
                            $('#contact_form').bootstrapValidator({
                                // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                                feedbackIcons: {
                                    valid: 'glyphicon glyphicon-ok',
                                    invalid: 'glyphicon glyphicon-remove',
                                    validating: 'glyphicon glyphicon-refresh'
                                },
                                fields: {
                                    first_name: {
                                        validators: {
                                            stringLength: {
                                                min: 2,
                                            },
                                            notEmpty: {
                                                message: 'Please supply your first name'
                                            }
                                        }
                                    },
                                    last_name: {
                                        validators: {
                                            stringLength: {
                                                min: 2,
                                            },
                                            notEmpty: {
                                                message: 'Please supply your last name'
                                            }
                                        }
                                    },
                                    email: {
                                        validators: {
                                            notEmpty: {
                                                message: 'Please supply your email address'
                                            },
                                            emailAddress: {
                                                message: 'Please supply a valid email address'
                                            }
                                        }
                                    },
                                    phone: {
                                        validators: {
                                            notEmpty: {
                                                message: 'Please supply your phone number'
                                            },
                                            phone: {
                                                country: 'US',
                                                message: 'Please supply a vaild phone number with area code'
                                            }
                                        }
                                    },
                                    address: {
                                        validators: {
                                            stringLength: {
                                                min: 8,
                                            },
                                            notEmpty: {
                                                message: 'Please supply your street address'
                                            }
                                        }
                                    },
                                    city: {
                                        validators: {
                                            stringLength: {
                                                min: 4,
                                            },
                                            notEmpty: {
                                                message: 'Please supply your city'
                                            }
                                        }
                                    },
                                    state: {
                                        validators: {
                                            notEmpty: {
                                                message: 'Please select your state'
                                            }
                                        }
                                    },
                                    zip: {
                                        validators: {
                                            notEmpty: {
                                                message: 'Please supply your zip code'
                                            },
                                            zipCode: {
                                                country: 'US',
                                                message: 'Please supply a vaild zip code'
                                            }
                                        }
                                    },
                                    comment: {
                                        validators: {
                                            stringLength: {
                                                min: 10,
                                                max: 200,
                                                message: 'Please enter at least 10 characters and no more than 200'
                                            },
                                            notEmpty: {
                                                message: 'Please supply a description of your project'
                                            }
                                        }
                                    }
                                }
                            })
                                    .on('success.form.bv', function (e) {
                                        $('#success_message').slideDown({opacity: "show"}, "slow") // Do something ...
                                        $('#contact_form').data('bootstrapValidator').resetForm();

                                        // Prevent form submission
                                        e.preventDefault();

                                        // Get the form instance
                                        var $form = $(e.target);

                                        // Get the BootstrapValidator instance
                                        var bv = $form.data('bootstrapValidator');

                                        // Use Ajax to submit form data
                                        $.post($form.attr('action'), $form.serialize(), function (result) {
                                            console.log(result);
                                        }, 'json');
                                    });
                        });

                    </script>

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
        <!-- Bootstrap 3.3.6 -->
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
            function openModal(id, email, provence, prgm)
            {
                $("#user_id").val(id);
                $("#email").val(email);
                $("#provence").val(provence);
                $("#program").val(prgm);
                $("#myModal1").modal("show");
            }
        </script>

        <script>
            $("#myForm").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "<?php echo Router::url(['controller'=>'admins/send_info']) ?>",
                    type: "POST",
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data == 1)
                        {
                            location.reload();
                        } else if (data == 0)
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
                $(':checkbox:checked').each(function (i) {
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
                $(':checkbox:checked').each(function (i) {
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

    </body>
</html>