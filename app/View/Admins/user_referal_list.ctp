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
            .clickable { cursor: pointer; }
            .panel-default>.panel-heading {
                color: #fff;
                background-color: #0000a0;
                border-color: #fff;
                cursor: pointer;
            }
            .panel-heading {
                padding: 15px 30px;
            }
            .panel-group .panel+.panel {
                margin-top: 15px;
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
                    <h3 class="title_">Referal List</h3>

                    <div class="well">
                        <div class="row">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php $i = 1; if(count($ambassador_appied) >  0) { 
                                foreach ($ambassador_appied as $invite) { ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne"  data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <h4 class="panel-title">
                                            <span><?php echo ucfirst($invite['register']['first_name']); ?> <?php echo ucfirst($invite['register']['last_name']); ?></span>
                                            <span class="pull-right">MCD # <?php echo $invite['register']['crv_code'] ?></span>
                                        </h4>
                                    </div>
                                    <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="table">
                                            <?php if(count($referal_list) > 0) { $count = 0; ?>
                                                <table class="table_school_use table-responsive">
                                                    <thead>
                                                        <tr class="thead_school_use">
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>MCD</th>
                                                            <th>Country</th>
                                                            <th>Program</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                <?php foreach ($referal_list as $list) {
                                                if($list['register']['referal_code'] == $invite['register']['crv_code']) { $count++; ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo ucfirst($list['register']['first_name']); ?> <?php echo ucfirst($list['register']['last_name']) ?></td>
                                                            <td><?php echo $list['register']['email'] ?></td>
                                                            <td><?php echo $list['register']['crv_code'] ?></td>
                                                            <td><?php echo $list['register']['country'] ?></td>
                                                            <td>
                                                            <?php if($list['register']['program'] == 'starter') {    ?>
                                                                Career Starter
                                                            <?php } else if($list['register']['program'] == 'advanced') {  ?>
                                                                Career Advanced
                                                            <?php } else if($list['register']['program'] == 'access360') {      ?>
                                                                All Access360
                                                            <?php } ?>
                                                            </td>
                                                            <td><?php echo $list['register']['status'] ?></td>                     
                                                        </tr>
                                                    </tbody>              
                                                <?php } } ?>

                                                </table>

                                                <table class="table_school_use_data table-responsive">
                                                    <tbody>
                                                        <tr style="background-color: #eee;">
                                                            <th>Total Referrals</th>
                                                            <th><?php echo $count; ?></th>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table_school_use_data table-responsive">
                                                    <tbody>
                                                        <tr style="background-color: #eee;">
                                                            <th>Amount</th>
                                                            <th>
                                                                <div>
                                                                    <form method="post">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <input type="hidden" name="user_id" value="<?php echo $invite['register']['id'] ?>">
                                                                                <input type="text" name="amount" class="form-control" placeholder="Enter Amount" value="<?php echo "$ ".$invite['register']['referal_amount'] ?>">
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <button type="submit" class="btn btn-primary">Paid</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            <?php } else { ?>
                                                <table class="table_school_use table-responsive">
                                                    <tr>
                                                        <td><b><center>No Students Available</center></b></td>
                                                    </tr>
                                                </table>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; } } else { ?>
                                <p class="error_school">No School Registered</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>                    
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- /.container -->


    <div class="clearfix"></div>

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