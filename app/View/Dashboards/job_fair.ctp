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
            <div style="position:relative;width:60%; min-height:400px;">
                <h1 style="    display: block;
                    width: 100%;
                    position: absolute;
                    top: 50%;
                    left: 50%;font-size: 60px;color:#ff0000;font-weight: bold;">
                    Comming Soon........</h1>
                <div class="clearfix"></div>

                <br/><br/> <br/> <br/>
            </div>

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
