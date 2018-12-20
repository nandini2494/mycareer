<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Dashboard</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <?php echo $this->Html->css('industry/bootstrap/css/bootstrap.min.css') ?>
        <?php echo $this->Html->css('industry/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
        <?php echo $this->Html->css('industry/dist/css/AdminLTE.min.css') ?>
        <?php echo $this->Html->css('industry/dist/css/skins/_all-skins.min.css') ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="w3ls_header_top">
            <div class="container">
                <div class="w3l_header_left">
                    <ul class="w3layouts_header">

                        <li class="w3layouts_header_list">
                            <a><i class="fa fa-envelope" aria-hidden="true"></i>   &nbsp;     info@mycareerdashboard.com</a>
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

            <?php echo $this->Element('industry/header') ?>

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!--logo-->

                    <div class="clearfix"></div>

                    <!--logo-->

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
                        <!-- <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="reference_check.html">
                                <i class="fa fa-files-o" aria-hidden="true"></i> <span>New Reference</span>
                            </a>
                        </li>    -->
                        <li>
                            <a href="new_reference.html">
                                <i class="fa fa-hourglass-start" aria-hidden="true"></i> <span>New Reference</span>
                            </a>
                        </li>  
                        <li  class="active" id="active">
                            <a href="archived.html">
                                <i class="fa fa-archive"></i> <span>Archived</span>
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
                    <!--table-->

                    <div class="clearfix"></div>
                    <h3 class="title_">Archived Reference</h3>

                    <div class="clearfix"></div>

                    <div class="container" style="width:100%;">

                        <table class="table table-striped table-bordered table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>MCD</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                    <th>Program</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(count($results) > 0) { 
                                    foreach ($results as $data) {
                                ?>
                                <tr>              
                                    <td class="name"><?php echo $data['register']['first_name'] ?> <?php echo $data['register']['last_name'] ?></td>
                                    <td><?php echo $data['register']['email'] ?></td>
                                    <td><?php echo $data['register']['crv_code'] ?></td>
                                    <td><?php echo $data['register']['country'] ?></td>
                                    <td><?php echo $data['register']['status'] ?></td>
                                    <td>
                                        <?php if($data['register']['program'] == 'trail'){  ?>
                                        14 days Trail
                                        <?php } else if($data['register']['program'] == 'starter'){  ?>
                                        Career Starter
                                        <?php } else if($data['register']['program'] == 'advanced'){  ?>  
                                        Career Advanced
                                        <?php } else if($data['register']['program'] == 'access360'){  ?> 
                                        All Access 360
                                        <?php } ?> 
                                    </td>
                                </tr>  
                                <?php } } else { ?>
                                <tr>
                                    <td colspan="12"><center><b>No Records Found</b></center></td>
                            </tr>
                                <?php } ?>
                            </tbody>
                        </table> 

                    </div>

                    <div class="clearfix"></div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <?php echo $this->Element('industry/footer') ?>

        </div>

        <!-- ./wrapper -->

        <?php echo $this->Html->script('industry/plugins/jQuery/jquery-2.2.3.min.js') ?>
        <?php echo $this->Html->script('industry/bootstrap/js/bootstrap.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/fastclick/fastclick.js') ?>
        <?php echo $this->Html->script('industry/dist/js/app.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/sparkline/jquery.sparkline.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>
        <?php echo $this->Html->script('industry/plugins/slimScroll/jquery.slimscroll.min.js') ?>

        <script>
            $(document).ready(function () {
                $(".active").children("a").children("span").next().html('<i class="fa fa-arrow-right" aria-hidden="true"></i>');
                $(".treeview").children("a").children(".fa-user-plus").addClass("red_color");
                $(".treeview").children("a").children(".fa-user-plus").next().addClass("red_color");
            });
        </script>
    </body>
</html>
