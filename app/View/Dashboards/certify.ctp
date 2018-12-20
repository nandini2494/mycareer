<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>MCD</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <?php echo $this->Html->css('css/bootstrap.min.css') ?>
        <?php echo $this->Html->css('css/paper-dashboard.css') ?>
        <?php echo $this->Html->css('css/demo.css') ?>
        <?php echo $this->Html->css('css/custom_css.css') ?>
        <?php echo $this->Html->css('css/themify-icons.css') ?>
        <?php echo $this->Html->css('css/font/stylesheet.css') ?>
        <?php echo $this->Html->css('css/style.css') ?>
        <?php echo $this->Html->css('css/demo/style.css') ?>
        <?php echo $this->Html->css('css/circularprogress.css') ?>
        <?php echo $this->Html->css('css/responsive_use.css') ?>

        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

        <style>
            .modal-dialog{margin-top:0px !important;}
            .well {
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .name {text-transform: capitalize}

        </style>
    </head>
   <?php echo $this->Element('dashboard/top') ?>

    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>

    <div class="main-panel">

        <?php echo $this->Element('dashboard/header') ?>

        <div class="col-lg-8 col-md-8">
            <div class="toppad">


                <?php
                if (count($data) > 0) {
                foreach ($data as $value) {
                    if($value['verify_reference']['submit_date']!='') {
                        $date1 = strtotime($value['verify_reference']['submit_date']);
                        $sub_date = date('d-F-Y',$date1);
                        $sub_time = date('h:i A',$date1);
                    }
                    else {
                        $sub_date = "";
                        $sub_time = "";
                    }
                    if($value['verify_reference']['first_call_date']) {
                        $first_date = date('d-F-Y',strtotime($value['verify_reference']['first_call_date']));
                        $first_time = date('h:i A',strtotime($value['verify_reference']['first_call_start_time']));
                    } else {
                        $first_date = "";
                        $first_time = "";
                    }
                    if($value['verify_reference']['second_call_date']) {
                       $second_date = date('d-F-Y',strtotime($value['verify_reference']['second_call_date']));
                       $second_time = date('h:i A',strtotime($value['verify_reference']['second_call_start_time'])); 
                    } else {
                        $second_date = "";
                        $second_time = "";
                    }
                    if($value['verify_reference']['third_call_date']) {
                        $third_date = date('d-F-Y',strtotime($value['verify_reference']['third_call_date']));
                        $third_time = date('h:i A',strtotime($value['verify_reference']['third_call_start_time']));
                    } else {
                        $third_date = "";
                        $third_time = "";
                    }
                    if($value['verify_reference']['verify_section_1']=='verify' && $value['verify_reference']['verify_section_2']=='verify' && $value['verify_reference']['verify_section_3']=='verify' && $value['verify_reference']['verify_section_4']=='verify' && $value['verify_reference']['verify_section_5']=='verify' && $value['verify_reference']['verify_section_6']=='verify' && $value['verify_reference']['verify_section_7']=='verify' && $value['verify_reference']['verify_section_8']=='verify') {
                        $status = "Complete";
                    } else {
                        $status = "Pending";
                    }
                ?>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                                    <?php foreach ($results as $result) { 
                                    echo $result['register']['first_name'];
                                    echo " ";
                                    echo $result['register']['last_name']; }
                                    ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-12 col-lg-12 "> 
                                <div class="table">
                                    <table class="table table-user-information table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>Reference Type</td>
                                                <td class="name"><?php echo $value['verify_reference']['reference_type'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Submited Date</td>
                                                <td><?php echo date('d-F-Y',$date1) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Last Update</td>
                                                <td>
                                                <?php
                                                if($value['verify_reference']['third_call_response'] || $value['verify_reference']['third_call_text']) {
                                                    echo date('d-F-Y',strtotime($value['verify_reference']['third_call_date']));
                                                } elseif ($value['verify_reference']['second_call_response'] || $value['verify_reference']['second_call_text']) {
                                                    echo date('d-F-Y',strtotime($value['verify_reference']['second_call_date']));
                                                } elseif ($value['verify_reference']['first_call_response'] || $value['verify_reference']['first_call_text']) {
                                                    echo date('d-F-Y',strtotime($value['verify_reference']['first_call_date']));
                                                }
                                                ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Recent Information</td>
                                                <!-- <td>Called 8750967417 found voice mail</td> -->
                                                <td class="name">
                                                <?php
                                                if($value['verify_reference']['third_call_response'] || $value['verify_reference']['third_call_text']) {
                                                    echo $value['verify_reference']['third_call_response'];
                                                } elseif ($value['verify_reference']['second_call_response'] || $value['verify_reference']['second_call_text']) {
                                                    echo $value['verify_reference']['second_call_response'];
                                                } elseif ($value['verify_reference']['first_call_response'] || $value['verify_reference']['first_call_text']) {
                                                    echo $value['verify_reference']['first_call_response'];
                                                }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>
                                                <?php echo $status ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Complete Information</td>
                                                <td><button class="veiw_information" id="view_btn" onclick='viewData("<?php echo $sub_date ?>", "<?php echo $sub_time ?>", "<?php echo $first_date ?>", "<?php echo $first_time ?>", "<?php echo $second_date ?>", "<?php echo $second_time ?>", "<?php echo $third_date ?>", "<?php echo $third_time ?>", "<?php echo $status ?>", "<?php echo $value['verify_reference']['reference_type'] ?>")'>View</button></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Post on dashboard</a>
                                        <a href="#" class="btn btn-primary">Do not Post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php } } else { ?>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                                    <?php foreach ($results as $result) { 
                                    echo $result['register']['first_name'];
                                    echo " ";
                                    echo $result['register']['last_name']; }
                                    ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-12 col-lg-12 "> 

                                <center><p style="font-weight: bold; font-size: 17px">No Records Available</p></center>
                            </div>
                        </div>
                    </div>

                </div>

                <?php } ?>
            </div>
            <div  class='clearfix'></div>
        </div><!-- /.row -->
        <!-- /.container --> 

        <?php echo $this->Element('dashboard/left_side') ?>

        <!-- navigation start end-->

    </div>		
    <div class="clearfix"></div>


</div>
</div>
<!-- popup use -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Information</h4>
            </div>
            <div class="modal-body">
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 pull_layout_setup'>
                    <div class='Pull_left_border'>
                        <p class='pull-left'>
                            Submitted Reference
                        </p>
                        <p class='pull-right'>
                        <spam id='sub_date'></spam> &nbsp; <spam id='sub_time'></spam>
                        </p>
                        <div class='clearfix'></div>
                    </div>
                    <div class='clearfix'></div>
                    <div class='Pull_left_border'>
                        <p class='pull-left'>
                            First Call
                        </p>
                        <p class='pull-right'>
                        <spam id='first_date'></spam> &nbsp; <spam id='first_time'></spam>
                        </p>
                        <div class='clearfix'></div>
                    </div>
                    <div class='Pull_left_border'>
                        <p class='pull-left'>
                            Second Call
                        </p>
                        <p class='pull-right'>
                        <spam id='second_date'></spam> &nbsp; <spam id='second_time'></spam>
                        </p>
                        <div class='clearfix'></div>
                    </div>
                    <div class='Pull_left_border'>
                        <p class='pull-left'>
                            Third Call
                        </p>
                        <p class='pull-right'>
                        <spam id='third_date'></spam> &nbsp; <spam id='third_time'></spam>
                        </p>
                        <div class='clearfix'></div>
                    </div>
                    <div class='clearfix'></div>
                    <div class='Pull_left_border'>
                        <p class='pull-left'>
                            <span class="name" id="type"></span>
                        </p>
                        <p class='pull-right'>
                            <span id="status"></span>
                        </p>
                        <div class='clearfix'></div>
                    </div>
                </div>
                <div  class='clearfix'></div>

            </div>
            <div class='clearfix'></div>


            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<div id="myModal_details" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Details</h4>
            </div>
            <div class="">
                <div class='form-group'>
                    <div class="well text-center">

                        <form action="" method="post">
                            <input type='hidden' name='csrfmiddlewaretoken' value='jirY00s8p1JmoEVdHSHBrH4rXryWR0jU' />
                            <div class="form-group">
                                <input class="form-control" id="id_nome" maxlength="100" name="nome" placeholder="Kuldeep" type="text" />

                            </div>

                            <div class="form-group">
                                <input class="form-control" id="id_email" name="email" placeholder="Dhami" type="email" />

                            </div>

                            <div class="form-group">
                                <input class="form-control" id="id_site" name="site" placeholder="8750967417" type="url" />

                            </div>

                            <div class="form-group">
                                <input class="form-control" id="id_assunto" maxlength="100" name="assunto" placeholder="kdhami85@gmail.com" type="text" />

                            </div>
                            <div class="form-group">
                                <input class="form-control" id="id_assunto" maxlength="100" name="assunto" placeholder="Delhi" type="text" />
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="id_assunto" maxlength="100" name="assunto" placeholder="Delhi" type="text" />
                            </div>
                            <div class="form-group">
                                <select class='new_school'>
                                    <option>Student</option>
                                    <option>Temp</option>
                                    <option>Job Seeker</option>
                                    <option>Career Management</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-default">Save</button>
                        </form>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>

    <!-- popup use end -->

    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/circularprogress.jquery.js"></script>
    <script>
                                                    var total_count = "<?php echo ($new_count + $complete_count + $process_count) ?>";
                                                    var new_count = "<?php echo $new_count ?>";
                                                    var complete_count = "<?php echo $complete_count ?>";
                                                    var process_count = "<?php echo $process_count ?>";
                                                    var new_count_per = (new_count / total_count) * 100;
                                                    if (isNaN(new_count_per)) {
                                                        new_count_per = 0;
                                                    }
                                                    var complete_count_per = (complete_count / total_count) * 100;
                                                    if (isNaN(complete_count_per)) {
                                                        complete_count_per = 0;
                                                    }
                                                    var process_count_per = (process_count / total_count) * 100;
                                                    if (isNaN(process_count_per)) {
                                                        process_count_per = 0;
                                                    }
                                                    var new_count_chart = (360 / 100) * new_count_per;
                                                    var process_count_chart = (360 / 100) * process_count_per;
                                                    var complete_count_chart = (360 / 100) * complete_count_per;

                                                    $(document).ready(function () {
                                                        $('.newtest2').circles({
                                                            'targetPos': new_count_chart,
                                                            speed: 2,
                                                            onFinishMoving: function (pos) {
                                                                console.log('done ', pos);
                                                            }
                                                        });
                                                        $('.newtest3').circles({
                                                            'targetPos': process_count_chart,
                                                            speed: 2,
                                                            onFinishMoving: function (pos) {
                                                                console.log('done ', pos);
                                                            }
                                                        });
                                                        $('.newtest4').circles({
                                                            'targetPos': complete_count_chart,
                                                            speed: 2,
                                                            onFinishMoving: function (pos) {
                                                                console.log('done ', pos);
                                                            }
                                                        });
                                                    });
    </script>




    <script src="httpa://code.jquery.com/jquery-1.12.0.min.js"></script>
    <?php echo $this->Html->script('js/rumca.min') ?>
    <?php echo $this->Html->script('js/example') ?>
    <script>
                                                    $('.count').each(function () {
                                                        $(this).prop('Counter', 0).animate({
                                                            Counter: $(this).text()
                                                        }, {
                                                            duration: 4000,
                                                            easing: 'swing',
                                                            step: function (now) {
                                                                $(this).text(Math.ceil(now));
                                                            }
                                                        });
                                                    });
    </script>
    <?php echo $this->Html->script('js/bootstrap.min') ?>
    <?php echo $this->Html->script('js/circularprogress.jquery') ?>

    <script>
        function viewData(sub_date, sub_time, first_date, first_time, second_date, second_time, third_date, third_time, status, type) {
            $("#sub_date").text(sub_date);
            $("#sub_time").text(sub_time);
            $("#first_date").text(first_date);
            $("#first_time").text(first_time);
            $("#second_date").text(second_date);
            $("#second_time").text(second_time);
            $("#third_date").text(third_date);
            $("#third_time").text(third_time);
            $("#type").text(type);
            $("#status").text(status);
            $("#myModal").modal('show');
        }
    </script>    

</body>
</html>
