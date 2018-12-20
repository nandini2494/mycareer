<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Dashboard</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <?php echo $this->Html->css('admin/bootstrap/css/bootstrap.min.css') ?>
        <?php echo $this->Html->css('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
        <?php echo $this->Html->css('admin/dist/css/AdminLTE.min.css') ?>
        <?php echo $this->Html->css('admin/dist/css/skins/_all-skins.min.css') ?>
        <?php echo $this->Html->css('admin/dist/css/responsive_use.css') ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <style>
            #area-chart{min-height: 200px;}
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
                                    <span class="info-box-number"><?php echo number_format($total_ref) ?></span>
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
                                    <span class="info-box-text">Total members</span>
                                    <span class="info-box-number"><?php echo number_format($member) ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Monthly recap for references</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="text-center">
                                                <?php foreach ($total_year as $date1) { ?>
                                                <strong>Payment: <?php echo date('Y',strtotime($date1[0]['min(date)'])) ?> - <?php echo date('Y',strtotime($date1[0]['max(date)'])) ?></strong>
                                                <?php } ?>
                                            </p>

                                            <?php foreach ($total_year as $date) { ?>
                                            <input type="hidden" name="min_date" id="min_date_id" value="<?php echo date('Y-m-d',strtotime($date[0]['min(date)'])) ?>">
                                            <input type="hidden" name="max_date" id="max_date_id" value="<?php echo date('Y-m-d',strtotime($date[0]['max(date)'])) ?>">
                                            <?php } ?>
                                            <div id="area-chart"></div>
                                            <div class="chart"  style='display: none;'>
                                                <!-- Sales Chart Canvas -->
                                                <canvas id="salesChart" style="height: 180px;"></canvas>
                                            </div>
                                            <!-- /.chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4">
                                            <p class="text-center">
                                                <strong>Reference type</strong>
                                            </p>
                                            <?php $total_count = $student + $unemployee + $career_advance; ?>

                                            <div class="progress-group">
                                                <span class="progress-text">Student</span>
                                                <span class="progress-number"><b><?php echo $student ?></b>/<?php echo $total_count ?></span>

                                                <?php $per_student = ($student/$total_count)*100; ?>
                                                <div class="progress sm">
                                                    <div class="progress-bar progress-bar-aqua" style="width: <?php echo $per_student ?>%"></div>
                                                </div>
                                            </div>
                                            <!-- /.progress-group -->
                                            <div class="progress-group">
                                                <span class="progress-text">Unemployed</span>
                                                <span class="progress-number"><b><?php echo $unemployee ?></b>/<?php echo $total_count ?></span>

                                                <?php $per_unemployee = ($unemployee/$total_count)*100; ?>
                                                <div class="progress sm">
                                                    <div class="progress-bar progress-bar-red" style="width: <?php echo $per_unemployee ?>%"></div>
                                                </div>
                                            </div>
                                            <!-- /.progress-group -->
                                            <div class="progress-group">
                                                <span class="progress-text">Career Advancement</span>
                                                <span class="progress-number"><b><?php echo $career_advance ?></b>/<?php echo $total_count ?></span>

                                                <?php $per_career_advance = ($career_advance/$total_count)*100; ?>
                                                <div class="progress sm">
                                                    <div class="progress-bar progress-bar-green" style="width: <?php echo $per_career_advance ?>%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./box-body -->
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-sm-3 col-xs-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i></span>
                                                <h5 class="description-header"><?php echo $advance_ref + $standard_ref; ?></h5>
                                                <span class="description-text">Total Reference</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <?php $ref_type_total = $advance_ref + $standard_ref; ?>
                                        <div class="col-sm-3 col-xs-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> <?php echo round(($advance_ref/$ref_type_total)*100, 2) ?>%</span>
                                                <h5 class="description-header"><?php echo $advance_ref ?></h5>
                                                <span class="description-text">Total Advance References</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 col-xs-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> <?php echo round(($standard_ref/$ref_type_total)*100, 2) ?>%</span>
                                                <h5 class="description-header"><?php echo $standard_ref ?></h5>
                                                <span class="description-text">Total Standard References</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-3 col-xs-6">
                                            <div class="description-block">
                                                <span class="description-percentage text-red"><i class="fa fa-caret-down"></i></span>
                                                <h5 class="description-header"><?php if($amount == '') { echo 0; } else { echo "$ ".$amount; } ?></h5>
                                                <span class="description-text">Amount received</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.box-footer -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-8">
                            <!-- MAP & BOX PANE -->
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Visitors Report</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-8">
                                            <div id="embed-api-auth-container"></div>
                                            <div id="chart-1-container"></div>
                                            <div id="view-selector-1-container" style='display: none;'></div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-3 col-sm-4">
                                            <div class="pad box-pane-right bg-green" style="min-height: 280px">
                                                <div class="description-block margin-bottom">
                                                    <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                                                    <h5 class="description-header">8390</h5>
                                                    <span class="description-text">Visits</span>
                                                </div>
                                                <!-- /.description-block -->
                                                <div class="description-block margin-bottom">
                                                    <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                                    <h5 class="description-header">30%</h5>
                                                    <span class="description-text">Referrals</span>
                                                </div>
                                                <!-- /.description-block -->
                                                <div class="description-block">
                                                    <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                                    <h5 class="description-header">70%</h5>
                                                    <span class="description-text">Organic</span>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-4">
                            <!-- Info Boxes Style 2 -->
                            <div class="info-box bg-yellow">
                                <span class="info-box-icon"><i class="fa fa-user-plus"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Members</span>
                                    <span class="info-box-number"><?php echo number_format($member) ?></span>

                                    <div class="progress">
                                        <?php
                                        $total_mem = $total_current_member + $total_before_member;
                                        $diff_mem = $total_current_member - $total_before_member;
                                        $total_per = ($diff_mem/$total_mem)*100;
                                        ?>
                                        <div class="progress-bar" style="width: <?php echo abs($total_per) ?>%"></div>
                                    </div>
                                    <span class="progress-description">                                        
                                        <?php echo abs(number_format($total_per, 2)) ?>% <?php if($diff_mem >= 0) { ?>Increase <?php } else { ?> Decrease <?php } ?> in Last 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="fa fa-globe"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Paid Users</span>
                                    <span class="info-box-number">
                                        <?php echo $total_paid_user; ?>
                                    </span>

                                    <div class="progress">
                                        <?php 
                                        $total_paid = $total_current_paid_user + $total_before_paid_user;
                                        $diff_paid = $total_current_paid_user - $total_before_paid_user;
                                        $total_paid_per = ($diff_paid/$total_paid)*100;
                                        ?>
                                        <div class="progress-bar" style="width: <?php echo abs($total_paid_per) ?>%"></div>
                                    </div>
                                    <span class="progress-description">
                                        <?php echo abs(number_format($total_paid_per, 2)); ?>% <?php if($diff_paid >= 0) { ?> Increase <?php } else { ?> Decrease <?php } ?> in Last 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box bg-red">
                                <span class="info-box-icon"><i class="fa fa-share" aria-hidden="true"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Trial Users</span>
                                    <span class="info-box-number">
                                        <?php echo $total_trial_user ?>
                                    </span>

                                    <div class="progress">
                                        <?php 
                                        $total_trial = $total_current_trial_user + $total_before_trial_user;
                                        $diff_trial = $total_current_trial_user - $total_before_trial_user;
                                        $total_trial_per = ($diff_trial/$total_trial)*100;
                                        ?>
                                        <div class="progress-bar" style="width: <?php echo abs($total_trial_per) ?>%"></div>
                                    </div>
                                    <span class="progress-description">
                                        <?php echo abs(number_format($total_trial_per, 2)) ?>% <?php if($total_trial_per >= 0) { ?>Increase <?php } else { ?> Decrease <?php } ?> in Last 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box bg-aqua">
                                <span class="info-box-icon"><i class="fa fa-check"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Verified References</span>
                                    <span class="info-box-number"><?php echo number_format($verify_ref) ?></span>

                                    <div class="progress">
                                        <?php 
                                        $total_ref = $total_current_verify_ref + $total_before_verify_ref;
                                        $diff_ref = $total_current_verify_ref - $total_before_verify_ref;
                                        $ref_per = ($diff_ref/$total_ref)*100;
                                        ?>
                                        <div class="progress-bar" style="width: <?php echo abs($ref_per) ?>%"></div>
                                    </div>
                                    <span class="progress-description">
                                        <?php echo abs(number_format($ref_per, 2)) ?>% <?php if($diff_ref >= 0) { ?> Increase <?php } else { ?> Decrease <?php } ?> in Last 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->

                            <div class="box box-default hide">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Browser Usage</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="chart-responsive">
                                                <canvas id="pieChart" height="150"></canvas>
                                            </div>
                                            <!-- ./chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.footer -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <?php echo $this->Element('admin/footer') ?>

        </div>

        <!-- ./wrapper -->

        <?php echo $this->Html->script('admin/plugins/jQuery/jquery-2.2.3.min.js') ?>                  
        <?php echo $this->Html->script('admin/bootstrap/js/bootstrap.min.js') ?>
        <?php echo $this->Html->script('admin/plugins/fastclick/fastclick.js') ?>
        <?php echo $this->Html->script('admin/dist/js/app.min.js') ?>
        <?php echo $this->Html->script('admin/plugins/sparkline/jquery.sparkline.min.js') ?>
        <?php echo $this->Html->script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>
        <?php echo $this->Html->script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>
        <?php echo $this->Html->script('admin/plugins/slimScroll/jquery.slimscroll.min.js') ?>
        <?php echo $this->Html->script('admin/plugins/chartjs/Chart.min.js') ?>
        <?php echo $this->Html->script('admin/dist/js/pages/dashboard2.js') ?>
        <?php echo $this->Html->script('admin/dist/js/demo.js') ?>

        <script>
            var min_date = new Date($("#min_date_id").val());
            var max_date = new Date($("#max_date_id").val());
            var month_val = (max_date.getFullYear() - min_date.getFullYear()) * 12;
            var min_year = min_date.getFullYear();
            var max_year = max_date.getFullYear();
            var months = [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ];
            month_val -= min_date.getMonth() + 1;
            month_val += max_date.getMonth() + 2;
            var data1 = [];
            $.ajax({
                url: "<?php echo Router::url(['controller'=>'admins/findChartData']) ?>",
                type: "POST",
                data: {'max': max_year, 'min': min_year, 'month_data': month_val, 'min_date1': min_date},
                success: function (data) {

                    var response = JSON.parse(data);
                    var j = 0;
                    for (var i = min_year; i <= max_year; i++) {
                        data1.push({y: '' + min_date.getFullYear() + '', a: '' + response.amount[j][0]['SUM(amount)'] + '', b: '' + response.user[j][0]['count(id)'] + ''});
                        var newDate = min_date.setFullYear(min_date.getFullYear() + 1);
                        min_date = new Date(newDate);
                        j++;
                    }
                    config = {
                        data: data1,
                        xkey: 'y',
                        ykeys: ['a', 'b'],
                        labels: ['Total Payment', 'Total User'],
                        fillOpacity: 0.6,
                        hideHover: 'auto',
                        behaveLikeLine: true,
                        resize: true,
                        pointFillColors: ['#ffffff'],
                        pointStrokeColors: ['black'],
                        lineColors: ['gray', '#2074ad']
                    };
                    config.element = 'area-chart';
                    Morris.Area(config);
                }
            });
        </script>

        <script>
            $(document).ready(function () {
                $(".active").children("a").children("span").next().html('<i class="fa fa-arrow-right" aria-hidden="true"></i>');
                $(".treeview").children("a").children(".fa-user-plus").addClass("red_color");
                $(".treeview").children("a").children(".fa-user-plus").next().addClass("red_color");
            });
        </script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script>
            (function (w, d, s, g, js, fs) {
                g = w.gapi || (w.gapi = {});
                g.analytics = {q: [], ready: function (f) {
                        this.q.push(f);
                    }};
                js = d.createElement(s);
                fs = d.getElementsByTagName(s)[0];
                js.src = 'https://apis.google.com/js/platform.js';
                fs.parentNode.insertBefore(js, fs);
                js.onload = function () {
                    g.load('analytics');
                };
            }(window, document, 'script'));
        </script>

        <script>

            gapi.analytics.ready(function () {

                /**
                 * Authorize the user immediately if the user has already granted access.
                 * If no access has been created, render an authorize button inside the
                 * element with the ID "embed-api-auth-container".
                 */
                gapi.analytics.auth.authorize({
                    container: 'embed-api-auth-container',
                    clientid: '444888494337-3vef77f821utjhvhqaot6o3b7bmhd0m1.apps.googleusercontent.com'
                });


                /**
                 * Create a ViewSelector for the first view to be rendered inside of an
                 * element with the id "view-selector-1-container".
                 */
                var viewSelector1 = new gapi.analytics.ViewSelector({
                    container: 'view-selector-1-container'
                });

                // Render both view selectors to the page.
                viewSelector1.execute();


                /**
                 * Create the first DataChart for top countries over the past 30 days.
                 * It will be rendered inside an element with the id "chart-1-container".
                 */
                var dataChart1 = new gapi.analytics.googleCharts.DataChart({
                    query: {
                        metrics: 'ga:sessions',
                        dimensions: 'ga:country',
                        'start-date': '30daysAgo',
                        'end-date': 'yesterday',
                        'max-results': 6,
                        sort: '-ga:sessions'
                    },
                    chart: {
                        container: 'chart-1-container',
                        type: 'PIE',
                        options: {
                            width: '100%',
                            pieHole: 4 / 9
                        }
                    }
                });



                /**
                 * Update the first dataChart when the first view selecter is changed.
                 */
                viewSelector1.on('change', function (ids) {
                    dataChart1.set({query: {ids: ids}}).execute();
                });


            });
        </script>

    </body>
</html>
