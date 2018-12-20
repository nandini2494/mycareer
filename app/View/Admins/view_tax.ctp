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

                    <h3 class="title_">View Tax</h3>
                    <div class="container" style="width:100%;">
                        <div class="pull-right icons" id="icons">
                            <button class=" btn btn-danger" type="button" onclick='delete_data()'><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                        <div class="table">
                            <table class="table-striped table-bordered table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="check_all"></th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>Province</th>
                                        <th>Tax Amount</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                if (count($view_tax) > 0) {
                                foreach ($view_tax as $result) {   
                                ?>
                                    <tr>
                                        <td><input type="checkbox" class="checkbox" name="selected_id[]" id="check_all" value="<?php echo $result['tax_calculation']['id'] ?>"></td>
                                        <td><?php echo $result['tax_calculation']['country'] ?></td>
                                        <td><?php echo $result['tax_calculation']['state'] ?></td>
                                        <td><?php echo $result['tax_calculation']['province'] ?></td>
                                        <td><?php echo '$ '.$result['tax_calculation']['tax_amount'] ?></td> 
                                        <td><a href="add_tax.html?id=<?php echo $result['tax_calculation']['id'] ?>"><i class="fa fa-pencil"></i></a></td>     
                                    </tr>
                                <?php } } else { ?>
                                    <tr><td colspan="7"><center><b>No Record Found</b></center></td></tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

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

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    <?php echo $this->Element('admin/footer') ?>

    <!--<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>-->
    <?php echo $this->Html->script('admin/plugins/jQuery/new_lib.js') ?>

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
                    url: "<?php echo Router::url(['controller'=>'admins/delete_tax_data']) ?>",
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

    </body>
</html>