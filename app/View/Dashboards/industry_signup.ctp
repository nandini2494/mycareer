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
        <?php echo $this->Html->css('css/font/stylesheet.css') ?>
        <?php echo $this->Html->css('css/style.css') ?>
        <?php echo $this->Html->css('css/demo/style.css') ?>
        <?php echo $this->Html->css('css/circularprogress.css') ?>
        <?php echo $this->Html->css('css/responsive_use.css') ?>

        <!--  Fonts and icons     -->
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <style>
            #full_name_1{display:none;}
            .modal-dialog{margin-top:0px !important;}
            #smoothed{margin:0 auto;width:404px;}
            .img_use{max-height: 50px; max-width: 90px;}
            input[type='text'], input[type='password'] {
                width: 100%;
                color: #000;
                padding: 1% 2%;
            }
            .form-data {padding-top: 1em;}
            .form-data {padding-bottom: 3em;}
            .button1{
                margin-bottom: 1em;
                margin-left: 2em;
                padding: 8px 20px;
                background-color: #449d44;
                border: 1px solid #398439;
                color: #fff;
                border-radius: 4px;
            }
            .button2{
                margin-bottom: 1em;
                margin-left: 5em;
                padding: 8px 20px;
                background-color: #337ab7;
                border: 1px solid #2e6da4;
                color: #fff;
                border-radius: 4px;
            }
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
        </style>
    </head>
    <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar'); ?>

    <div class="main-panel">

        <?php echo $this->Element('dashboard/header') ?>

        <div class="clearfix"></div>

        <!-- navigation start -->
        <div class="main_div" style="margin:2% 1% 2% 1%;">	           
            <div class="col-lg-12 col-md-12" style="background: #f5f5f5; padding-top: 2%; padding-bottom: 1%; border: 1px solid #bce8f1;">

                <form method="post" id="form_data">
                    <!-- Specify a Buy Now button. -->                   
                    <div class="row">
                        <div class="text-center">
                            <h2>D.I.Y Reference Check SignUp</h2>
                        </div><br/>
                        <div>
                            <label class="form-group">Enter Username</label>
                            <input type="text" name="username" placeholder="Username" id="user_id" value="<?php echo $mcd_number; ?>" readonly="">
                        </div><br/>
                        <div>
                            <label class="form-group">Reference Id</label>
                            <input type="text" name="ref_id" id="reference_id" readonly="" value="<?php echo $random_no; ?>">
                        </div>
                        <div class="form-data">
                            <label class="form-group">Enter Password</label>
                            <input type="password" name="password" placeholder="Password" id="pass_id" required="">
                        </div>
                        <button type="submit" class="button1">Submit</button>  
                        <button type="submit" class="button2">Submit and Print</button>                           
                    </div>
                    <div class="clearfix"></div>

                </form> 
                <div class='clearfix'></div>

            </div>              
            <?php echo $this->Element('dashboard/left_side') ?>



        </div>		
        <div class="clearfix"></div>



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
                            <input type="hidden" name="url" id="url_data" value="<?php echo $this->params['url']['val_id']; ?>">
                            <input type="hidden" name="button_type" id="button_type_id">

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

    <!-- script modal  -->
    <!--   Core JS Files   -->

    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>

    <?php echo $this->Html->script('js/jquery-1.10.min.js') ?>

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

    <script>
        /*$("#form_data").submit(function (e) {
         e.preventDefault();
         $("#sign_capture").modal("show");
         });*/
        $(".button1").click(function (e) {
            e.preventDefault();
            var pass = $("#pass_id").val();
            if (pass != '') {
                $("#sign_capture").modal("show");
            } else {
                alert("Password is required");
            }
        });

        $(".button2").click(function (e) {
            e.preventDefault();
            var pass = $("#pass_id").val();
            $("#button_type_id").val("print");
            if (pass != '') {
                $("#sign_capture").modal("show");
            } else {
                alert("Password is required");
            }
        });
    </script>

    <script>
        $("#verify_modal_sign").submit(function (e) {
            e.preventDefault();
            var user = $("#user_id").val();
            var pass = $("#pass_id").val();
            var ref = $("#reference_id").val();
            var url = $("#url_data").val();
            var button = $("#button_type_id").val();
            var canvas = document.getElementById('colors_sketch');
            var dataURL = canvas.toDataURL('image/png');
            $.ajax({
                url: "<?php echo Router::url(['controller' => 'dashboards/industry_data']) ?>",
                type: "POST",
                data: {'user_name': user, 'password': pass, 'dataurl': dataURL, 'url_data': url, 'ref_id': ref},
                success: function (data) {
                    if (button == 'print') {
                        var print_window = window.open("<?php echo DOMAIN_NAME ?>" + "terms_conditions.html?id=" + url);
                        print_window.addEventListener('load', function () {
                            print_window.focus();
                            print_window.print();
                            print_window.close();
                        }, true);
                        window.location = "individual_dashboard.html";
                    } else {
                        window.location = "individual_dashboard.html";
                    }
                }
            });
        });
    </script>

    <?php echo $this->Html->script('js/bootstrap.min.js') ?>
    <?php echo $this->Html->script('js/circularprogress.jquery.js') ?>
    <?php echo $this->Html->script('js/numeric-1.2.6.min.js') ?>
    <?php echo $this->Html->script('js/bezier.js') ?>

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

</body>
</html>