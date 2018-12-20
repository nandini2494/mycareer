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
                        <li class="active">
                            <a href="invited.html">
                                <i class="fa fa-paper-plane"></i> <span>Applicant Invite </span>
                                <span class="pull-right-container">

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
                    <h3 class="title_">Invited</h3>


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
                        <div class="pull-right icons" id="icons">
                            <button class=" btn btn-danger" type="button" onclick='delete_data()'><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                        <table class="table table-striped table-bordered table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="check_all"></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>MCD</th>
                                    <th>Country</th>
                                    <th>Program</th>
                                    <th>Status</th>
                                    <th>Invite Date</th>
                                    <th>Signed In</th>
                                    <th>Days Left</th>
                                    <th>Reminder</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (count($results) > 0) {
                                foreach ($results as $result) {
                                    $date = strtotime($result['register']['date']);
                                ?>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" name="selected_id[]" id="check_all" value="<?php echo $result['register']['email'] ?>"></td>
                                    <td class="name"><?php echo $result['register']['first_name'] ?>&nbsp;&nbsp;<?php echo $result['register']['last_name'] ?></td>
                                    <td><?php echo $result['register']['email'] ?></td>
                                    <td><?php echo $result['register']['crv_code'] ?></td>
                                    <td><?php echo $result['register']['country'] ?></td>                                   
                                    <td><?php if($result['register']['program'] == 'trail'){  ?>
                                        14 days Trail
                                    <?php } else if($result['register']['program'] == 'starter'){  ?>
                                        Career Starter
                                    <?php } else if($result['register']['program'] == 'advanced'){  ?>  
                                        Career Advanced
                                    <?php } else if($result['register']['program'] == 'access360'){  ?> 
                                        All Access 360
                                    <?php } ?>    
                                    </td>
                                    <td><?php echo $result['register']['status'] ?></td>
                                    <td><?php if(!empty($result['register']['invite_date'])) { echo date('d-M-Y',strtotime($result['register']['invite_date'])); } else { echo ""; } ?></td>
                                    <td>
                                        <?php if($result['register']['user_signin'] == '0') { ?>
                                        <button class="btn btn-default" type="button" onclick='openModal("<?php echo $result['register']['id'] ?>", "<?php echo $result['register']['email'] ?>", "<?php echo $result['register']['crv_code'] ?>", "<?php echo $result['register']['username'] ?>", "<?php echo $result['register']['password'] ?>")'>Invite</button>
                                        <?php } else if($result['register']['user_signin'] == '1') { ?>
                                        <?php if(!empty($result['register']['signin_date'])) { echo date('d-M-Y',strtotime($result['register']['signin_date'])); } else { echo ""; } ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php 
                                        if($result['register']['program'] == 'trail'){
                                        $current_date = date_create(date('Y-m-d')); 
                                        $reg_date = date_create(date('Y-m-d',strtotime($result['register']['payment_date'])));
                                        $diff = date_diff($reg_date, $current_date);
                                        $days = $diff->format("%a");
                                        $day_left = (14 - $days);                                  
                                        if($day_left < 0) {
                                            echo "Expire";
                                        } else {
                                            echo $day_left ." Days";
                                        }
                                        }
                                        if($result['register']['program'] == 'starter' || $result['register']['program'] == 'advanced' || $result['register']['program'] == 'access360') {
                                            if($result['register']['duration_date'] == '') {
                                                $current_date = date_create(date('Y-m-d')); 
                                                $reg_date = date_create(date('Y-m-d',strtotime($result['register']['payment_date'])));
                                                $diff = date_diff($reg_date, $current_date);
                                                $days = $diff->format("%a");
                                                $day_val = (365 - $days); 
                                                if($day_val < 0) {
                                                    echo "Expire";
                                                } else {
                                                echo $day_val ." Days";
                                                }
                                            } else {
                                                $current_date = date_create(date('Y-m-d')); 
                                                $reg_date = date_create(date('Y-m-d',strtotime($result['register']['duration_date'])));
                                                $diff = date_diff($reg_date, $current_date);
                                                $day_val = $diff->format("%a");
                                                if($day_val < 0) {
                                                    echo "Expire";
                                                } else {
                                                echo $day_val ." Days";
                                                }
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td><button class="btn btn-default" type="button" onclick="reminder_data(<?php echo $result['register']['id'] ?>)">Reminder</button></td>
                                </tr>
                                <?php } } else { ?>
                                <tr><td colspan="12"><center><b>No Record Found</b></center></td></tr>
                                <?php } ?>
                            </tbody>
                        </table>
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

    <script>
        $("#reset_btn").click(function () {
            window.location.href = "<?php echo DOMAIN_NAME ?>" + 'invited.html';
        });
    </script>



</body>
</html>
