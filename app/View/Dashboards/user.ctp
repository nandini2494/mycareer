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

        <button class="instruction_btn_use" id="instruction_user">Instructions</button>
        <div class="div_class_instruc">
            <p>STEP 1: Select a verification type by clicking on any verification type and select the number of references. Once selected, click on submit.</p>
            <p>STEP 2: Fill all the information that you need to send to your past employer/school/any other.</p>
            <p>STEP 3: Select the verification type (Standard or Advance) wherein advance will have the rating for your skills from the employer side.</p>
            <p>STEP 4: After submitting you need to fill employer details. The employer will receive your information and will verify your reference.</p>
            <p>STEP 5: You can track your reference status from the top of your dashboard page (D.I.Y. Reference Tracker) There are 3 options for new, ongoing, and completed reference. You can Click on any of them. Once clicked, you will see the list of references.</p>
            <p>STEP 6: You can view the new references and download completed references. Now, once the reference will get completed, you can accept or decline it. Accepted references will be available on MyCD for your further use. You can also download it.​</p>
        </div>

        <!-- navigation start -->
        <div class="main_div" style="margin:2% 3% 2% 3%;">

            <div class="col-lg-12 col-md-12" style="background: transparent;border: solid 0.3em #1d1d1d;padding-top: 2%;padding-bottom: 1%;">
                <div class="new_bg" style="background: #dcdcdc;padding: 3% 2% 18% 2%;border-radius: 0px;border: solid #1d1d1d 1px;">
                    <div class="col-lg-12 col-md-12">
                        <button class="selectpicker new_img1" style="width: 100%;padding: 2% 3%;margin-top:0%;background: #254094; margin-bottom: 2%;" onclick="getData('coop_verification')">Student Co-Op Evaluation</button>                       
                    </div>
                    <div class="col-lg-12 col-md-12">
			<?php foreach ($result as $results) { ?>
                        <input type="hidden" name="sign1" id="sign" value="<?php echo $results['register']['sign'] ?>">
			<?php } ?>
                        <button class="selectpicker new_img1" style="width: 100%;padding: 2% 3%;margin-top:0%;background: #2d88a6; margin-bottom: 2%;" onclick="getData('workplace_verification')">Workplace Verification</button>                           
                    </div>	
                    <div class="col-lg-12 col-md-12">
                        <button class="selectpicker new_img1" style="width: 100%;padding: 2% 3%;margin-top:0%;background: #d10818; margin-bottom: 2%;" onclick="getData('personnel_verification')">Personnel/Character Verification</button>  
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button class="selectpicker new_img1" style="width: 100%;padding: 2% 3%;margin-top:0%;background: #254094; margin-bottom: 2%;" onclick="getData('education_verification')">Education Verification</button>  
                    </div>	
                    <div class="col-lg-12 col-md-12">
                        <button class="selectpicker new_img1" style="width: 100%;padding: 2% 3%;margin-top:0%;background: #2d88a6; margin-bottom: 2%;" onclick="getData('volunteer_verification')">Volunteer Verification</button>  
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <input type="text" class="selectpicker new_img1" style="width: 100%;padding: 2% 3%;margin-top:0%;background: #d10818; margin-bottom: 2%;" value="Certifications/Special Training (Comming Soon)" readonly="">
                    </div>	
                    <div class="col-lg-12 col-md-12">
                        <input type="text" class="selectpicker new_img1" value="Internship Verification (Comming Soon)" readonly="" style="width: 100%;padding: 2% 3%;margin-top:0%;background: #254094; margin-bottom: 2%;">                       
                    </div>
                    <!-- <div class="col-lg-12 col-md-12">
                        <input type="text" class="selectpicker new_img1" value="Self Employed (Comming Soon)" readonly="" style="width: 100%;padding: 2% 3%;margin-top:0%;background: #254094; margin-bottom: 2%;">                       
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <input type="text" class="selectpicker new_img1" value="Military (Comming Soon)" readonly="" style="width: 100%;padding: 2% 3%;margin-top:0%;background: #b57500;">                       
                    </div> -->

                    <div class='clearfix'></div>

                    <div class="col-lg-6 col-md-6" style="padding-top:2%;padding-right:2%;">                       
                        <!-- <button type="button" onclick="getValue()" class='button_use button_data_value'>
                            Submit
                        </button> -->
                    </div>

                    <div class="col-lg-12 col-md-12" style="padding-top:2%;padding-right:2%;">
                        <div class="hover_use"><p style=""><a href="defination_of_refrence.pdf" target="blank" class='anker_padding_use'>Definition of a Job Reference</a></p>
                        </div>
                    </div>

                </div>
            </div>
            <?php echo $this->Element('dashboard/left_side') ?>
        </div>		
        <div class="clearfix"></div>

    </div>

    <div class="modal fade bs-example-modal-lg"  id="onload" data-backdrop="static" data-keyboard="false">

        <div class="modal-dialog">

            <!-- Modal content-->
            <form id="verify_modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i> Permission to Contact Reference </h4>
                    </div>
                    <div class="modal-body">
                        <div class='extra_div_capture'>
                            <input type="hidden" id="ref_name" name="ref_name">
                            <label>Permission to Contact Reference   &nbsp;&nbsp;<input type="radio" name="theName" value="1" id="option-1"> &nbsp;Yes &nbsp;&nbsp;<input type="radio" name="theName" value="0" checked />&nbsp;No</label>

                            <h1 style="text-align: justify; font-size: 10px; line-height: 10px;">
                                As part of the process you will need to electronically sign a DISCLOSURE AND AUTHORIZATION form consenting to these checks. This authorization form will allow our company ( Canadian Reference Verification Services) to verify the information you provide and share with CRV Services
                                <br><br>
                            </h1>	

                            <p>Consent to signing this form</p>
                            <!-- canvas use sign -->
                            <div class="sigPad" id="smoothed">

                                <ul class="sigNav">
                                    <li class="drawIt"><a href="#draw-it" >Draw Signature</a></li>
                                    <li class="clearButton"><a href="#clear">Clear</a></li>
                                </ul>
                                <div class="sig sigWrapper" style="height:auto;">
                                    <div class="typed"></div>
                                    <canvas class="pad" width="400" height="250" id="myCanvas" name="mycanvas"></canvas>
                                    <input type="hidden" name="output-2" class="output">
                                </div>
                            </div>                        

                            <!-- canvas use sign end -->

                            <div class='clearfix'></div>
                            <p style="padding-top:1%;font-size:13px;">Do not wish to electronically sign this form , I prefer to print it out and send by mail, I understand that this delay and agree </p>
                            <input type="text" id='full_name' name="fullname" disabled placeholder="Type in Full Name" style="width:100%;padding:2% 2%;" />                         
                            <p style="padding-top:1%;font-size:13px;">
                                I hereby authorize Canadian Reference and Verification to contact my References to Verify/Certify my references 
                            </p>
                            <div class='clearfix'></div>
                            <div id="ref_options" style="display:none"></div>
                            <div class='clearfix'></div>
                        </div>

                    </div><div class='clearfix'></div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" disabled id='true_button'>Agree</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
            <div class='clearfix'></div>

        </div>

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