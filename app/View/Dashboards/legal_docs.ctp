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
        <?php echo $this->Html->css('css/custom_css.css') ?>
        <?php echo $this->Html->css('css/style.css') ?>
        <?php echo $this->Html->css('css/demo/style.css') ?>   
        <?php echo $this->Html->css('css/circularprogress.css') ?>
        <?php echo $this->Html->css('css/responsive_use.css') ?>

        <!--  Fonts and icons     -->
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <style>
            .tools{margin-top: 10px;margin-bottom: 10px;}
            .tools a
            {
                text-decoration: none;
                font-size: 14px;
            }
            #colors_sketch
            {
                border: 1px solid #ccc;
                background-color: #fff;
            }
            .extra_div_capture{margin: 0 auto; width: 80%;}
            .form-control {width: 100% !important;}
        </style>
    </head>
    <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>

    <div class="main-panel">



        <?php echo $this->Element('dashboard/header') ?>

        <div class="clearfix"></div>

        <!-- navigation start -->
        <div class="new_view" style="margin:2% 1% 2% 1%;">	
            <div class="col-lg-12 col-md-12">
                <?php $user = $this->Session->read('udata1'); ?>

                <div class="main_div_use col-lg-12 col-md-12 content_view_data">                    
                    <div class="image_logo_use">
                        <img src="<?php echo DOMAIN_NAME ?>img/co-logo.png" alt='img' class='line_check_new'>
                    </div>
                    <div class="content_use_data">
                        <h5>Reference Verification 
                        </h5><br/><br/>
                        <p>Dear _________________________ ,</p><br/>
                        <p>I _________________________ have listed you as the previous employer.This signed form authorizes the release of information regarding my employment with you. Any other information you can provide that would help in the consideration of employment would also be appreciated.I would be very pleased if you could take the time to fill out a brief questionnaire that would help me securely store your information. I will provide a user name and password that allows you access to my career dashboard.</p><br/>
                        <p> Below is a list of question that will be on the questionnaire</p><br/>
                        <p> Attendance/Punctuality:</p><br>
                        <p> Quality of work:</p><br>
                        <p> Ability to work well with others:</p><br>
                        <p> Reason for leaving:</p><br>
                        <p> Would you re-hire this applicant?</p><br>
                        <p> Salary:</p><br>
                        <p> Team Player:</p><br>
                        <p> Unique Skills:</p><br>
                        <p> Strengths:</p><br>
                        <p> Weaknesses:</p><br>
                        <p> Attendance Record:</p><br>
                        <p> If I was reprimanded:</p><br>
                        <p> Additional Comments: </p><br><br/>
                        <p> Title: </p><br><br/>
                        <p> Date: </p><br>
                    </div>
                </div>	
                <div class="clearfix"></div>

                <div class="clearfix"></div>

                <div class="print_div_data">
                    <button class="print_btn_class">Print</button>
                    <button class="send_btn_class">Send</button>
                </div>

                <?php echo $this->Element('dashboard/left_side') ?>

                <!-- navigation start end-->

            </div>		
            <div class="clearfix"></div>

            <br/><br/> <br/> <br/>

        </div>

    </div>


    <div class="modal fade bs-example-modal-lg"  id="sign_capture" data-backdrop="static" data-keyboard="false">

        <div class="modal-dialog">

            <!-- Modal content-->
            <form id="verify_modal_sign" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i> Sign the Document </h4>
                    </div>
                    <div class="modal-body">


                        <div class='extra_div_capture'>                           

                            <div class="form-group">
                                <input type="text" name="employer_name" id="employer_id" class="form-control" placeholder="Enter Employer Name" required="">
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="employer_email" id="employer_email_id" class="form-control" placeholder="Enter Employer Email" required="">
                                <div class="clearfix"></div>
                            </div>
                            <input type="hidden" name="button_type" id="button_type_id">
                            <input type="hidden" name="mcd" id="mcd_id" value="<?php echo $user['mcd']; ?>">

                            <h6>Draw Your Signature</h6>
                            <!-- canvas use sign -->
                            <div class="tools">
                                <a href="#colors_sketch" data-tool="marker">Marker</a> 
                                <a class="right_side" href="#colors_sketch" data-tool="eraser" style="float: right;">Eraser</a>
                            </div>
                            <canvas id="colors_sketch" width="455" height="200"></canvas>                 

                            <!-- canvas use sign end -->

                        </div>

                    </div><div class='clearfix'></div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" id='true_button'>save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
            <div class='clearfix'></div>

        </div>

    </div>



    <!--   Core JS Files   -->
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

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <?php echo $this->Html->script('js/rumca.min.js') ?>
    <?php echo $this->Html->script('js/example.js') ?>
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
    <?php echo $this->Html->script('js/bootstrap.min.js') ?>
    <?php echo $this->Html->script('js/circularprogress.jquery.js') ?>
    <?php echo $this->Html->script('js/bootstrap.min.js') ?>

    <script>
        $(document).ready(function () {
            $(".new_img").change(function () {
                $("#myModal").modal('show');
            });
            $("#ne_co").click(function () {
                $(".new_sec_form").toggle('show');
            });
        });
    </script>

    <script src="https://cdn.rawgit.com/mobomo/sketch.js/master/lib/sketch.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $("#colors_sketch").on("click", function () {
            $('#colors_sketch').sketch();
            $(".tools a").eq(0).attr("style", "color:#000; font-size: 14px;");
            $(".tools a").click(function () {
                $(".tools a").removeAttr("style");
                $(this).attr("style", "color:#000; font-size: 14px;");
                $(".right_side").attr("style", "color:#000; float:right;");
            });
        });
    </script>

    <script>
        $(".print_btn_class").click(function () {
            $("#button_type_id").val("print");
            $("#sign_capture").modal("show");
        });
    </script>

    <script>
        $(".send_btn_class").click(function () {
            $("#sign_capture").modal("show");
        });
    </script>

    <script>
        $("#verify_modal_sign").submit(function (e) {
            e.preventDefault();
            var name = $("#employer_id").val();
            var email = $("#employer_email_id").val();
            var button = $("#button_type_id").val();
            var mcd = $("#mcd_id").val();
            var canvas = document.getElementById('colors_sketch');
            var dataURL = canvas.toDataURL('image/png');
            $.ajax({
                url: "<?php echo Router::url(['controller' => 'dashboards/legal_docs_send']) ?>",
                type: "POST",
                data: {'employer_name': name, 'employer_email': email, 'dataurl': dataURL, 'mcd_data': mcd},
                success: function (data) {
                    var response = JSON.parse(data);
                    if (button == 'print') {
                        var print_window = window.open("<?php echo DOMAIN_NAME ?>" + "legal_docs_print.html?name=" + name + "&img=" + response.img + "&p_name=" + response.p_name);
                        //if (print_window.addEventListener) {
                        print_window.addEventListener('load', function () {
                            print_window.focus();
                            print_window.print();
                            print_window.close();
                        }, true);
                        //}
                        /*if (print_window.attachEvent) {
                         print_window.attachEvent('load', function () {
                         print_window.focus();
                         print_window.print();
                         print_window.close();
                         });
                         }*/
                        window.location = "legal_docs.html";
                    } else {
                        alert("Document Sent to given Email Id");
                        window.location = "legal_docs.html";
                    }

                }
            });
        });
    </script>

</body>
</html>
