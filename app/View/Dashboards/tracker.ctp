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
        <?php echo $this->Html->css('css/jquery.signaturepad.css') ?>
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
        </style>
    </head>
    <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar'); ?>

    <div class="main-panel">


        <?php echo $this->Element('dashboard/header') ?>

        <div class="clearfix"></div>   

        <div class="row">
            <ul class='margin_set'>                                       
                <li>
                    <p class="tracker_div">Verified References</p>
                </li>
                <li <?php if($token_val != '') { ?> style="padding: 0em 0em 0em 3em;" <?php } ?>>
                    <div class='div_common'>
                        <div class="progress programs_d newtest2"></div>
                        <div class='clearfix'></div>
                        <h2><a href="new_value.html"><?php echo $new_count ?> New</a></h2>
                    </div>  
                </li>
                <li <?php if($token_val != '') { ?> style="padding: 0em 0em 0em 3em;" <?php } ?>>
                    <div class='div_common'>
                        <div class="progress passenger_b newtest4"></div>
                        <div class='clearfix'></div>
                        <h2><a href="complete.html"><?php echo $complete_count ?> Completed</a></h2>
                    </div>
                </li>

            </ul>
        </div>	
        <div class="clearfix"></div>

    </div>

    <!-- script modal  -->
    <!--   Core JS Files   -->

    <?php echo $this->Html->script('js/jquery-1.10.min.js') ?>
    <?php echo $this->Html->script('js/numeric-1.2.6.min.js') ?>
    <?php echo $this->Html->script('js/bezier.js') ?>
    <?php echo $this->Html->script('js/jquery.signaturepad.js') ?>
    <script>
        $(document).ready(function () {
            $('#linear').signaturePad({drawOnly: true, lineTop: 200});
            $('#smoothed').signaturePad({drawOnly: true, drawBezierCurves: true, lineTop: 200});
            $('#smoothed-variableStrokeWidth').signaturePad({drawOnly: true, drawBezierCurves: true, variableStrokeWidth: true, lineTop: 200});
        });
    </script>

    <script>
        function getData(ref_name) {
            var prgm_type = '<?php echo $progam_pay ?>';
            var total_exist_data = '<?php echo $reference_count ?>';
            if (prgm_type == 'starter') {
                var total_ref = 3 - parseInt(total_exist_data);
                if (total_ref < 0) {
                    alert("Only 3 References can be added. You can not add more Reference.");
                } else {
                    window.location = "work_references.html?forms=" + ref_name + "";
                }
            }

            if (prgm_type == 'advanced') {
                var total_ref = 10 - parseInt(total_exist_data);
                if (total_ref < 0) {
                    alert("Only 3 References can be added. You can not add more Reference.");
                } else {
                    window.location = "work_references.html?forms=" + ref_name + "";
                }
            }

            if (prgm_type == 'trail' || prgm_type == 'access360') {
                window.location = "work_references.html?forms=" + ref_name + "";
            }
        }
    </script>


    <?php echo $this->Html->script('js/app.js') ?>  

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

    <script>
        $("#instruction_user").click(function () {
            $(".div_class_instruc").toggle();
        });
    </script>

    <?php echo $this->Html->script('js/bootstrap.min.js') ?>
    <?php echo $this->Html->script('js/circularprogress.jquery.js') ?>

</body>

</html>