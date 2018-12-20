<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>MCD</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <?php echo $this->Html->css('school/bootstrap.min.css') ?>
        <?php echo $this->Html->css('school/custom.css') ?>
        <?php echo $this->Html->css('school/responsive_use.css') ?>
        <?php echo $this->Html->css('school/animate.min.css') ?>
        <?php echo $this->Html->css('school/paper-dashboard.css') ?>
        <?php echo $this->Html->css('school/demo.css') ?>
        <?php echo $this->Html->css('school/custom_css.css') ?>
        <?php echo $this->Html->css('school/themify-icons.css') ?>    
        <?php echo $this->Html->css('school/demo/calendar-style.css') ?>   
        <?php echo $this->Html->css('school/demo/style.css') ?>
        <?php echo $this->Html->css('school/style.css') ?>
        <!--  Fonts and icons     -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php $school_data = $this->Session->read('school_data'); ?>
        <?php echo $this->Element('school/header') ?>

        <div class="clearfix"></div>      
        <div class="wrapper">
            <?php echo $this->Element('school/sidebar') ?>         

            <div class="main-panel">
                <!-- navigation start -->
                <div class="new_view" style="margin:2% 5% 2% 5%;">    
                    <div class="col-lg-12 col-md-12 padd_use">
                        <form method="post" enctype="multipart/form-data">

                            <?php if(isset($response)) { ?>
                            <div class="alert alert-danger alert-dismissable alert_div_data fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php if($response == 1) { ?>
                                Registered Successful
                                <?php } else { ?>
                                Email Id already registered
                                <?php } ?>
                            </div>
                            <?php } ?>

                            <div class="modal-content max_use_only">
                                <div class="modal-header">
                                    <h4 class="modal-title reference_type">Billing Information</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="new_div" id="new_div">

                                        <?php if(count($bill_detail) > 0) { 
                                            foreach ($bill_detail as $detail) {
                                        ?>                
                                        <label><h4>Name of School</h4></label>
                                        <label><input type="text" name="school_name" required="" value="<?php echo $detail['school_bill_info']['school_name'] ?>"></label>
                                        <label><h4>Address of School</h4></label>
                                        <label><input type="text" name="school_address" required="" value="<?php echo $detail['school_bill_info']['school_address'] ?>"></label>                                       
                                        <label><h4>Postal Code</h4></label>
                                        <label><input type="text" name="postal_code" required="" value="<?php echo $detail['school_bill_info']['postal_code'] ?>"></label>                           
                                        <label><h4>Province</h4></label>
                                        <label><input type="text" name="province" value="<?php echo $detail['school_bill_info']['province'] ?>"></label>
                                        <label><h5 style="color: #040452;">Contact Information</h5></label>
                                        <label><h4>Name of Account Manager</h4></label>
                                        <label><input type="text" name="account_manager" required="" value="<?php echo $detail['school_bill_info']['account_manager'] ?>"></label>
                                        <label><h4>Telephone</h4></label>
                                        <label><input type="text" name="phone" class="phone" value="<?php echo $detail['school_bill_info']['phone'] ?>"></label>
                                        <label><h4>Email</h4></label>
                                        <label><input type="email" style="border-color: #b7b6b6; margin: 0px;" name="email" value="<?php echo $detail['school_bill_info']['email'] ?>" required=""></label>
                                        <label><h4>Position</h4></label>
                                        <label><input type="text" name="position" value="<?php echo $detail['school_bill_info']['position'] ?>"></label>                                        
                                        <label><h4>Are you authorized to Pay Invoice&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="authorize_invoice" value="Yes" required="" <?php echo ($detail['school_bill_info']['authorize_invoice'] == 'Yes' ? 'checked' : '') ?>>&nbsp;&nbsp;Yes &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="authorize_invoice" value="No" required="" <?php echo ($detail['school_bill_info']['authorize_invoice'] == 'No' ? 'checked' : '') ?>>&nbsp;&nbsp;No </h4>
                                        </label>
                                        <label><h4>How will you be paying Invoice </h4></label>
                                        <label>
                                            <select name="pay_invoice" style="padding: 1% 2%; width: 100%; border-color: #b7b6b6; margin: 0%;" required="">
                                                <option value="">--Select--</option>
                                                <option value="Cheque" <?php echo ($detail['school_bill_info']['pay_invoice'] == 'Cheque' ? 'selected="selected"' : '') ?>>Cheque</option>
                                                <option value="E-transfer" <?php echo ($detail['school_bill_info']['pay_invoice'] == 'E-transfer' ? 'selected="selected"' : '') ?>>E-transfer</option>
                                            </select>
                                        </label>
                                        <button type="submit" id="next_3" class="btn btn-default">Submit</button>
                                        <div class="clearfix"></div>
                                        <?php } } else { ?>  
                                        <label><h4>Name of School</h4></label>
                                        <label><input type="text" name="school_name" required=""></label>
                                        <label><h4>Address of School</h4></label>
                                        <label><input type="text" name="school_address" required=""></label>                                       
                                        <label><h4>Postal Code</h4></label>
                                        <label><input type="text" name="postal_code" required=""></label>
                                        <label><h4>Province</h4></label>
                                        <label><input type="text" name="province"></label>
                                        <label><h5 style="color: #040452;">Contact Information</h5></label>
                                        <label><h4>Name of Account Manager</h4></label>
                                        <label><input type="text" name="account_manager" required=""></label>
                                        <label><h4>Telephone</h4></label>
                                        <label><input type="text" name="phone" class="phone"></label>
                                        <label><h4>Email</h4></label>
                                        <label><input type="email" style="border-color: #b7b6b6; margin: 0px;" name="email" required=""></label>
                                        <label><h4>Position</h4></label>
                                        <label><input type="text" name="position"></label>                                        
                                        <label><h4>Are you authorized to Pay Invoice&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="authorize_invoice" value="Yes" required="">&nbsp;&nbsp;Yes &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="authorize_invoice" value="No" required="">&nbsp;&nbsp;No </h4>
                                        </label>
                                        <label><h4>How will you be paying Invoice </h4></label>
                                        <label>
                                            <select name="pay_invoice" style="padding: 1% 2%; width: 100%; border-color: #b7b6b6; margin: 0%;" required="">
                                                <option value="">--Select--</option>
                                                <option value="Cheque">Cheque</option>
                                                <option value="E-transfer">E-transfer</option>
                                            </select>
                                        </label>
                                        <button type="submit" id="next_3" class="btn btn-default">Submit</button>
                                        <div class="clearfix"></div>
                                        <?php } ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>  
                    <div class="clearfix"></div>
                </div>                
            </div>
        </div>

        <!--   Core JS Files   -->
            <?php echo $this->Html->script('school/demo/moment.latest.min.js') ?>
            <?php echo $this->Html->script('school/jquery-3.2.1.min.js') ?>
            <?php echo $this->Html->script('school/circularprogress.jquery.js') ?> 
            <?php echo $this->Html->script('school/icons.js') ?> 

        <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
        <script>
            $('.phone').inputmask("1-(999) 999-9999");
        </script>

        <script>
            window.onscroll = function () {
                var el = document.getElementById('sticky'),
                        s = window.pageYOffset || document.documentElement.scrollTop, // how much page is scrolled
                        t = document.getElementById('main').getBoundingClientRect().top; // top of main div
                if (s > t) {
                    el.style.position = 'fixed'; //make position fixed instead of absolute
                } else {
                    el.style.position = ''; //clear styles if back to original position
                }
            }
        </script>

        <?php echo $this->Html->script('school/bootstrap.min.js') ?>      

    </body>

</html>