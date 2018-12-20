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
        <?php echo $this->Html->css('admin/dist/css/responsive_use.css') ?>

        <style>
            .name {text-transform: capitalize}
            .clickable {cursor: pointer;}
            .alert_data{
                color: #a94442 !important;
                background-color: #f2dede !important;
                border-color: #ebccd1 !important;
            }
            .alert_data .close{text-decoration: none;}
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
            <?php echo $this->Element('admin/sidebar') ?>
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
                    <h3 class="title_">SEO DATA</h3>

                    <div class="well">

                        <div class="container" style="width:100%;">
                            <?php if(isset($response)) { ?>
                            <div class="alert alert-danger alert-dismissable alert_data">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <?php echo $response ?>
                            </div>
                            <?php } ?>
                            <form method="post">
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="page_name">Page Name</label>
                                    <div class="col-md-12">
                                        <select id="page_name" name="page_name" class="form-control" required="">
                                            <option value="">--Select Page--</option>
                                            <option value="index">index.html</option>
                                            <option value="programs_data">programs_data.html</option>
                                            <option value="sign_up">sign_up.html</option>
                                            <option value="about">about.html</option>
                                            <option value="my_career">my_career.html</option>
                                            <option value="contact">contact.html</option>
                                            <option value="school_registration">school_registration.html</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="title">Title</label>
                                    <div class="col-md-12">
                                        <input id="title" name="title" type="text" placeholder="Title" class="form-control" required="">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="keyword">Keywords</label>
                                    <div class="col-md-12">
                                        <textarea id="keyword" name="keyword" placeholder="Keywords" class="form-control" id="" rows="3" required=""></textarea>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="description">Description</label>
                                    <div class="col-md-12">
                                        <textarea id="description" name="description" placeholder="Description" class="form-control" rows="5"></textarea>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                                

                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>                 
                    <div class="clearfix"></div>                    
            </div>
            <!-- /.content -->
        </div>

        <!--end tables-->

        <div class="clearfix"></div>

        <?php echo $this->Element('admin/footer') ?>

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
            $("#page_name").change(function () {
                var value = $(this).val();
                $.ajax({
                    url: '<?php echo Router::url(['controller' => 'admins/changeSEOData']) ?>',
                    type: 'POST',
                    data: {'page_name': value},
                    success: function (data) {
                        var response = JSON.parse(data);
                        if (response.length > 0) {
                            $("#title").val(response[0].seo_data.title);
                            $("#keyword").val(response[0].seo_data.keyword);
                            $("#description").val(response[0].seo_data.description);
                        } else {
                            $("#title").val('');
                            $("#keyword").val('');
                            $("#description").val('');
                        }
                    }
                });
            });
        </script>

    </body>
</html>