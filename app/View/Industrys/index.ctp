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

        <style>
            .name {text-transform: capitalize}
            .table>tbody>tr>td{
                color: #333 !important;
                font-weight: bold;
                border: none;
            }
            .clickable { cursor: pointer; }
            .table > thead > tr > td {
                border-bottom: 2px solid #f4f4f4;
            }
        </style>
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
                        <li class="active" id="active">
                            <a href="new_reference.html">
                                <i class="fa fa-hourglass-start" aria-hidden="true"></i> <span>New Reference</span>
                            </a>
                        </li>  
                        <li>
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
                    <h3 class="title_">Pending Reference</h3>
                    <div class="well">
                        <div class="row">
                            <form id="filter" method="post">                            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>MCD:</label>
                                        <input type="text" class="form-control" name="crv_code" placeholder="Enter MCD number">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>&nbsp;</label></br>
                                        <button type="submit" id="filter_btn" class=" btn btn-primary"> <i class="fa fa-filter"></i>Filter</button>
                                    </div>
                                </div>
                            </form> 

                        </div>


                    </div>
                    <div class="clearfix"></div>

                    <div class="container" style="width:100%;">

                        <table class="table table-striped table-bordered table-hover table-responsive">
                            <thead>
                                <tr class="">
                                    <th>Name</th>
                                    <th>Program</th>
                                    <th>MCD Code</th>
                                    <th>References</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($results) > 0) {    
                                ?>
                                <?php if(count($results['after_1_day']) > 0) {
                                   foreach ($results['after_1_day'] as $result) {                                     
                                ?>
                                <tr style="background-color: #5fc55f; border-bottom: solid 1px #fff;">
                                    <td class="name"><?php echo $result['register']['first_name'] ?>&nbsp;&nbsp;<?php echo $result['register']['last_name'] ?></td>									                                    
                                    <td>D.I.Y  Verification</td>
                                    <td><?php echo $result['register']['crv_code'] ?></td>
                                    <td class="clickable" onclick='view1day("<?php echo $result['register']['id'] ?>", "<?php echo $result['register']['first_name'] ?>", "<?php echo $result['register']['last_name'] ?>", "<?php echo $result['verify_reference']['company_email'] ?>")'><button class="btn btn-default">view</button></td>
                                </tr>  
                                <?php } } ?>

                                <?php if(count($results['after_2_day']) > 0) {
                                   foreach ($results['after_2_day'] as $result) {                                     
                                ?>
                                <tr style="background-color: #c3c322; border-bottom: solid 1px #fff;">
                                    <td class="name"><?php echo $result['register']['first_name'] ?>&nbsp;&nbsp;<?php echo $result['register']['last_name'] ?></td>									                                    
                                    <td>D.I.Y  Verification</td>
                                    <td><?php echo $result['register']['crv_code'] ?></td>
                                    <td class="clickable" onclick='view2day("<?php echo $result['register']['id'] ?>", "<?php echo $result['register']['first_name'] ?>", "<?php echo $result['register']['last_name'] ?>", "<?php echo $result['verify_reference']['company_email'] ?>")'><button class="btn btn-default">view</button></td>
                                </tr>  
                                <?php } } ?>

                                <?php if(count($results['after_3_day']) > 0) {
                                   foreach ($results['after_3_day'] as $result) {       
                                ?>
                                <tr style="background-color: #da5656; border-bottom: solid 1px #fff;">
                                    <td class="name"><?php echo $result['register']['first_name'] ?>&nbsp;&nbsp;<?php echo $result['register']['last_name'] ?></td>									                                    
                                    <td>D.I.Y  Verification</td>
                                    <td><?php echo $result['register']['crv_code'] ?></td>
                                    <td class="clickable" onclick='view3day("<?php echo $result['register']['id'] ?>", "<?php echo $result['register']['first_name'] ?>", "<?php echo $result['register']['last_name'] ?>", "<?php echo $result['verify_reference']['company_email'] ?>")'><button class="btn btn-default">view</button></td>
                                </tr>  
                                <?php } } ?>

                                <?php } else { ?>
                                <tr class="red-color"><td colspan="9"><center><b>No Record Found</b></center></td></tr>
                                <?php } ?>
                            </tbody>
                        </table> 

                    </div>

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
                                        <button type="button" class="btn btn-success" id="delete_confirm"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Yes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;No</button>
                                    </div>
                                </div>
                                <!-- /.modal-content --> 
                            </div>
                            <!-- /.modal-dialog --> 
                        </form>
                    </div>
                    <!-- End Delete -->

                    <div class="clearfix"></div>

                    <!-- Modal -->
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
                                                        <td><a>D.I.Y Verification</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Number of references </th>
                                                        <td data-toggle="collapse" data-target="#accordion" class="clickable" style="cursor:pointer;">
                                                            <b><a><u><span id="ref"></span> references</u></a></b>
                                                        </td>
                                                    </tr>

                                                    <tr  id="accordion" class="collapse"> 
                                                        <td colspan="3"><div>
                                                                <table class="table">
                                                                    <thead id="verify_ref">

                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>                                                    


                                                </thead>

                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal End --> 

                </section>
                <!-- /.content -->                              
            </div>
            <!-- /.content-wrapper -->

            <?php echo $this->Element('industry/footer') ?>

        </div>

        <!-- ./wrapper -->

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

        <script>
            function view1day(user_id, firstname, lastname, comp_email) {
                $('#username').text(firstname + " " + lastname);
                $.ajax({
                    url: "<?php echo Router::url(['controller' => 'industrys/pending1_ref']) ?>",
                    type: "POST",
                    data: {"user_id": user_id, "email": comp_email},
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
                            html_data += '<td><a href="' + response[i].verify_reference.reference_type + '.html?id=' + response[i].verify_reference.id + '&user_id=' + response[i].verify_reference.user_id + '&ref_name=' + response[i].verify_reference.reference_name + '">Update</a></td>';
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
            function view2day(user_id, firstname, lastname, comp_email) {
                $('#username').text(firstname + " " + lastname);
                $.ajax({
                    url: "<?php echo Router::url(['controller' => 'industrys/pending2_ref']) ?>",
                    type: "POST",
                    data: {"user_id": user_id, "email": comp_email},
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
                            html_data += '<td><a href="' + response[i].verify_reference.reference_type + '.html?id=' + response[i].verify_reference.id + '&user_id=' + response[i].verify_reference.user_id + '&ref_name=' + response[i].verify_reference.reference_name + '">Update</a></td>';
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
            function view3day(user_id, firstname, lastname, comp_email) {
                $('#username').text(firstname + " " + lastname);
                $.ajax({
                    url: "<?php echo Router::url(['controller' => 'industrys/pending3_ref']) ?>",
                    type: "POST",
                    data: {"user_id": user_id, "email": comp_email},
                    success: function (data) {
                        var response = JSON.parse(data);
                        $('#ref').text(response.length);

                        var html_data = '<thead id="verify_ref">';
                        html_data += '<tr>';
                        html_data += '<th>Sr. no. </th>';
                        html_data += '<th>Company Name</th>';
                        html_data += '<th>Verification</th>';
                        html_data += '<th>Type</th>';
                        html_data += '<th>Standard/Advance information</th>';
                        html_data += '</tr>';
                        for (var i = 0; i < response.length; i++) {
                            html_data += '<tr>';
                            html_data += '<td>' + (i + 1) + ')  </td>';
                            html_data += '<td>' + response[i].verify_reference.business_name + '</td>';
                            html_data += '<td>' + response[i].verify_reference.reference_name + '</td>';
                            html_data += '<td>' + response[i].verify_reference.reference_type + '</td>';
                            html_data += '<td><a href="' + response[i].verify_reference.reference_type + '.html?id=' + response[i].verify_reference.id + '&user_id=' + response[i].verify_reference.user_id + '&ref_name=' + response[i].verify_reference.reference_name + '">Update</a></td>';
                            html_data += '</tr>';
                        }

                        html_data += '</thead>';
                        $('#verify_ref').replaceWith(html_data);
                        $('#myModal1').modal('show');
                    }
                });
            }
        </script>

    </body>
</html>
