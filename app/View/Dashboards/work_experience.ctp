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

        <!-- Bootstrap core CSS     -->

        <?php echo $this->Html->css('css/bootstrap.min.css') ?>
        <?php echo $this->Html->css('css/animate.min.css') ?>
        <?php echo $this->Html->css('css/paper-dashboard.css') ?>
        <?php echo $this->Html->css('css/demo.css') ?>
        <?php echo $this->Html->css('css/custom_css.css') ?>
        <?php echo $this->Html->css('css/font/stylesheet.css') ?>
        <?php echo $this->Html->css('css/style.css') ?>
        <?php echo $this->Html->css('css/demo/style.css') ?>
        <?php echo $this->Html->css('css/circularprogress.css') ?>
        <?php echo $this->Html->css('css/responsive_use.css') ?>

        <!--  Fonts and icons     -->
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <style>
            .no-padding{padding:0px !important;}
            .bg_work_ex h3{background:red;color:#fff;font-size: 18px;font-weight: 700;padding:1em;  border:none;}
            .brdr{border:2px solid #000;}
            .padd_use{background:#fff;padding-bottom:4%;padding-top:4%}
            .max_use_only{padding-bottom:40px;}
            .margin_ref {margin:2% 0%;}   
            .err{
                background: #000;
                padding: 5px !important;
                color: #ff1212;
                text-align: center;
            }
            .nav-tabs > li.active > a{background: #bd0000 !important;}
            .reference_type {text-transform: capitalize; font-weight: 600;}
            h5{font-size: 16px;}
            .bg_tbal{background:#254094;padding:1em;}
            .tabs_anchor{color: #fff !important; padding: 0.6em !important;border-radius: 0px !important;border: 2px solid #fff !important;font-size: 15px !important;margin-right: 1em !important;}

            .tabs_anchor:hover,.tabs_anchor:active{}
            .new_repeating p{padding: 1em !important; font-size: 16px;background:#eee;}
            .repeat_border_div p {padding:0.5em 0em !important;}
            .repeat_border_div h1{font-weight: 700;font-size: 16px !important;}	
            .arund{margin:0.5em;}

        </style>
    </head>
    <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>

    <div class="main-panel">


        <?php echo $this->Element('dashboard/header') ?>

        <!-- navigation start -->
        <div class="main_div" style="margin:2% 3% 2% 3%;">

            <div class="col-lg-12 col-md-12 padd_use">
                <div class="no-padding brdr">
                    <div class="bg_tbal brdr">
                        <ul class="nav nav-tabs new_proper" style="border:none;">   
                            <li class="active "><a data-toggle="tab" href="#view_work" class="tabs_anchor">View WorkPlace Experience</a></li>
                            <li id="view_mycareer"><a data-toggle="tab" href="#add_work" class="tabs_anchor" >Add WorkPlace Experience</a></li>
                        </ul>
                    </div>
                    <div class="tab-content tabs_use" style="border: none;">

                        <div id="view_work" class="tab-pane fade active in" style="margin:1em;">

                            <?php if(count($work_place) > 0) {
                            foreach ($work_place as $w_place) { ?>
                            <div class="repeat_border_div">
                                <div class="brdr" style="margin-bottom:1em;">
                                    <div class="bg_work_ex">
                                        <h3>Workplace Experiences</h3>
                                    </div>
                                    <div class="arund">
                                        <div class='div_margin'>
                                            <h1>Company Name</h1>
                                            <p><?php echo $w_place['workplace_experience']['business_name'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Company Address:</h1>
                                            <p><?php echo $w_place['workplace_experience']['address'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>City:</h1>
                                            <p><?php echo $w_place['workplace_experience']['city'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Province:</h1>
                                            <p><?php echo $w_place['workplace_experience']['province'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Postal Code:</h1>
                                            <p><?php echo $w_place['workplace_experience']['postal_code'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Website of Business:</h1>
                                            <p><?php echo $w_place['workplace_experience']['website'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Email:</h1>
                                            <p><?php echo $w_place['workplace_experience']['email'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Telephone Number:</h1>
                                            <p><?php echo $w_place['workplace_experience']['phone'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Extension:</h1>
                                            <p><?php echo $w_place['workplace_experience']['ext'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Contact Person:</h1>
                                            <p><?php echo $w_place['workplace_experience']['contact_person'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Contact Person Name:</h1>
                                            <p><?php echo $w_place['workplace_experience']['person_name'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Title:</h1>
                                            <p><?php echo $w_place['workplace_experience']['title'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Telephone Number:</h1>
                                            <p><?php echo $w_place['workplace_experience']['person_phone'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Extension:</h1>
                                            <p><?php echo $w_place['workplace_experience']['person_ext'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Employee Id:</h1>
                                            <p><?php echo $w_place['workplace_experience']['employ_id'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>How Long have you known this person:</h1>
                                            <p><?php echo $w_place['workplace_experience']['person_know'].' Year' ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Did you send them Release of Information:</h1>
                                            <p><?php echo $w_place['workplace_experience']['release_info'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Your Starting Position:</h1>
                                            <p><?php echo $w_place['workplace_experience']['start_position'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Your Last Position:</h1>
                                            <p><?php echo $w_place['workplace_experience']['last_position'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Job Type:</h1>
                                            <p><?php echo $w_place['workplace_experience']['job_type'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Date Started:</h1>
                                            <p><?php echo $w_place['workplace_experience']['start_date'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Date Finished:</h1>
                                            <p><?php echo $w_place['workplace_experience']['end_date'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Still Working:</h1>
                                            <p><?php echo $w_place['workplace_experience']['still_working'] ?></p>
                                        </div>
                                        <div class='div_margin'>
                                            <h1>Duties Include:</h1>
                                            <p><?php echo $w_place['workplace_experience']['duty'] ?></p>
                                        </div>

                                    </div>
                                </div>	
                            </div>   
                            <?php } } else { ?>
                            <div class="repeat_border_div new_repeating">
                                <p><b>No Workplace Experiences Found</b></p>
                            </div>
                            <?php } ?>
                        </div>

                        <div id="add_work" class="tab-pane fade">
                            <form method="post" enctype="multipart/form-data">
                                <div>                    
                                    <div class="modal-content max_use_only">

                                        <div class="modal-header">
                                            <h4 class="modal-title reference_type">Workplace Experiences</h4>
                                        </div>

                                        <!--- sec use -->
                                        <div class="modal-body">
                                            <div class="new_div" id="new_div">                                    
                                                <label><h4>Name of Business</h4></label>
                                                <label><input type="text" name="business_name" required=""></label>
                                                <label><h4>Address Of Business</h4></label>
                                                <label><input type="text" name="bussiness_address" required=""></label>
                                                <label><h4>City</h4></label>
                                                <label><input type="text" name="city" required=""></label>
                                                <label><h4>Province</h4></label>
                                                <label><input type="text" name="province" required=""></label>
                                                <label><h4>Postal Code</h4></label>
                                                <label><input type="text" name="postal_code"></label>
                                                <label><h4>Website of Business</h4></label>
                                                <label><input type="text" name="website"></label>
                                                <label><h4>Email</h4></label>
                                                <label><input type="email" name="company_email"></label>
                                                <label><h4>Telephone Number</h4></label>
                                                <label><input type="text" name="business_no" class="phone"></label>
                                                <label><h4>Ext</h4></label>
                                                <label><input type="number" min="0" name="business_ext"></label>                                  
                                                <div class="new_div" id="new_next_2">

                                                    <label>
                                                        <select class="selectpicker new_img" name="contact_person" data-live-search="true" style="width: 100%;padding: 2% 3%;font-size: 16px;color: #000;margin-top:2%;" required="">
                                                            <option data-tokens="ketchup mustard" value="">Contact Person</option>
                                                            <option data-tokens="mustard">Human Resources</option>
                                                            <option data-tokens="frosting">Supervisor</option>
                                                            <option data-tokens="frosting">Team leader</option>
                                                            <option data-tokens="frosting">Owner</option>
                                                            <option data-tokens="frosting">Other</option>
                                                        </select>
                                                    </label>
                                                    <label><h4>Contact Person Name</h4></label>
                                                    <label><input type="text" name="person_name" required=""></label>
                                                    <label><h4>Title</h4></label>
                                                    <label><input type="text" name="title" required=""></label>
                                                    <label><h4>Telephone Number </h4></label>
                                                    <label><input type="text" name="person_contact" class="phone"></label>
                                                    <label><h4>Extension</h4></label>
                                                    <label><input type="number" min="0" name="extension"></label>
                                                    <label><h4>Employee Id</h4></label>
                                                    <label><input type="text" name="employee_id"></label>
                                                    <label><h4>How Long have you known this person</h4></label>
                                                    <ul class='class_new'>
                                                        <!--<li>
                                                            <input type="text" name="month[]" placeholder="Month" required>
                                                        </li>-->
                                                        <li>
                                                            <select name="year">
                                                                <option value="1">1 year</option>
                                                                <option value="2">2 years</option>
                                                                <option value="3">3 years</option>
                                                                <option value="4">4 years</option>
                                                                <option value="5">5 years</option>
                                                                <option value="6">6 years</option>
                                                                <option value="7">7 years</option>
                                                                <option value="8">8 years</option>
                                                                <option value="9">9 years</option>
                                                                <option value="10">10 years</option>
                                                                <option value="11">11 years</option>
                                                                <option value="12">12 years</option>
                                                                <option value="13">13 years</option>
                                                                <option value="14">14 years</option>
                                                                <option value="15">15 years</option>
                                                                <option value="16">16 years</option>
                                                                <option value="17">17 years</option>
                                                                <option value="18">18 years</option>
                                                                <option value="19">19 years</option>
                                                                <option value="20">20 years</option>
                                                            </select>
                                                            <!--<input type="text" name="year[]" placeholder="Year" required>-->
                                                        </li>
                                                    </ul>
                                                    <label><b>Did you send them Release of Information</b></label>
                                                    <label>
                                                        <select name="send_info" class="selectpicker new_img" required="" >
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </label>	

                                                    <div class="new_div" id="new_next_3">
                                                        <label><h4>Your Starting Position</h4></label>
                                                        <label><input type="text" name="start_position" required=""></label>

                                                        <label><h4>Your Last Position</h4></label>
                                                        <label><input type="text" name="last_position" required=""></label>

                                                        <label>
                                                            <select name="job_type" class="selectpicker new_img" style="width: 100%;padding: 2% 3%;font-size: 16px;color: #000;margin-top:2%;">
                                                                <option value="">Select Job Type</option>
                                                                <option>Full Time</option>
                                                                <option>Part Time</option>
                                                                <option>Seasonal</option>
                                                                <option>Temp</option>
                                                                <option>Other</option>
                                                            </select>    
                                                        </label>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin:0%;padding:0%;">
                                                            <label style="width:50%;float:left;"><h4>Date Started</h4></label>
                                                            <label><input type="text" name="join_date" style="width:98%;padding:1% 1%;" required="" class="join_date_id"></label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin:0%;padding:0%;">
                                                            <label style="width:50%;float:left;"><h4>Date Finished</h4></label>
                                                            <label><input type="text" name="release_date" style="width:98%;padding:1% 1%;" class="join_date_id"></label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin:0%;padding:0%;">
                                                            <label style="width:50%;float:left;"><h4>Still Working</h4></label>

                                                            <select name="still_working" style="width:98%;padding:1% 1%; margin:0px !important;     height: 33px; border:1px solid #cecece !important" >
                                                                <option value="">Select</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>

                                                        </div>

                                                        <label style="width:40%;float:left;"><h4>Duties Include</h4></label>
                                                        <label><input type="text" name="duties"></label>

                                                    </div>                               

                                                </div>

                                            </div>                           

                                        </div>

                                        <div class='clearfix'></div>
                                    </div>
                                    <div class='clearfix'></div>
                                    <div class="margin_ref"></div>
                                    <div class='clearfix'></div>                        
                                </div>
                                <div><button type="submit" id="next_3" class="btn btn-default work_type_submit" name="submit" value="workplace" style="margin:0.5em 1em;padding:0.8em 1.5em; font-size:16px;">Submit</button>  <div class='clearfix'></div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>          

        </div>

        <?php echo $this->Element('dashboard/left_side') ?>

    </div>
    <!-- navigation start end-->

    <div class="clearfix"></div> 

    <!--   Core JS Files   -->
    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
    <script>
        $(document).ready(function () {
            $("#cerficate_val").change(function () {
                if (this.value == 'Yes') {
                    $("#upload").show();
                } else {
                    $("#upload").hide();
                }
            });
        });
    </script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script>
        $('.phone').inputmask("1-(999) 999-9999");
    </script>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <script>
        $(".join_date_id").datepicker({
            yearRange: "-100:+100",
            changeMonth: true,
            changeYear: true,
        });
    </script>

    <?php echo $this->Html->script('js/bootstrap.min.js') ?>
    <?php echo $this->Html->script('js/circularprogress.jquery.js') ?>
</body>
</html>
