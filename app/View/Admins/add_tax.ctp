<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php echo $this->Html->css('admin/bootstrap/css/bootstrap.min.css') ?>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <?php echo $this->Html->css('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
        <?php echo $this->Html->css('admin/dist/css/AdminLTE.min.css') ?>
        <?php echo $this->Html->css('admin/dist/css/skins/_all-skins.min.css') ?>
        <?php echo $this->Html->css('admin/dist/css/responsive_use.css') ?>
        <style>
            .alert.alert-danger.alert-dismissable.alert_div_data.fade.in{
                background-color: #f2dede !important;
                border-color: #ebccd1 !important; 
                color: #a94442 !important;
            }
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

            <div class="clearfix"></div>
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

                    <?php if(isset($this->params['url']['id'])) {  ?>
                    <h3 class="title_">Edit Tax</h3>
                    <?php } else { ?>
                    <h3 class="title_">Add Tax</h3>
                    <?php } ?>
                    <div class="container" style="width:100%;">
                        <?php if(isset($response)) { ?>
                        <div class="alert alert-danger alert-dismissable alert_div_data fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?php echo $response; ?>    
                        </div>     
                        <?php } ?>
                        <div class="row">                          

                            <?php if(count($tax_detail) > 0) { 
                                foreach ($tax_detail as $detail) {
                            ?>
                            <form method="post">  
                                <input type="hidden" name="form_name" value="update">
                                <input type="hidden" name="tax_id" value="<?php echo $detail['tax_calculation']['id'] ?>">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Country:</label>
                                        <input type="text" class="form-control" name="country" readonly value="<?php echo $detail['tax_calculation']['country'] ?>" style="background-color: #fff;">
                                        <!-- <select class="form-control" name="country" required="" id="country_id">
                                            <option value="">--Select Country--</option>
                                            <option value="Canada" <?php echo ($detail['tax_calculation']['country'] == 'Canada' ? 'selected="selected"' : '') ?>>Canada</option>
                                            <option value="United States" <?php echo ($detail['tax_calculation']['country'] == 'United States' ? 'selected="selected"' : '') ?>>United States</option>
                                        </select> -->    
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: <?php if($detail['tax_calculation']['country'] == 'Canada') { ?>none;<?php } else { ?>block;<?php } ?>" id="state_id">
                                    <div class="form-group">
                                        <label>State:</label>
                                        <input type="text" class="form-control" name="state" readonly value="<?php echo $detail['tax_calculation']['state'] ?>" style="background-color: #fff;">
                                        <!-- <select class="form-control" name="state">
                                            <option value="">--Select State--</option>
                                            <option value="Alabama" <?php echo ($detail['tax_calculation']['state'] == 'Alabama' ? 'selected="selected"' : '') ?>>Alabama</option>
                                            <option value="Alaska" <?php echo ($detail['tax_calculation']['state'] == 'Alaska' ? 'selected="selected"' : '') ?>>Alaska</option>
                                            <option value="Arizona" <?php echo ($detail['tax_calculation']['state'] == 'Arizona' ? 'selected="selected"' : '') ?>>Arizona</option>
                                            <option value="Arkansas" <?php echo ($detail['tax_calculation']['state'] == 'Arkansas' ? 'selected="selected"' : '') ?>>Arkansas</option>
                                            <option value="California" <?php echo ($detail['tax_calculation']['state'] == 'California' ? 'selected="selected"' : '') ?>>California</option>
                                            <option value="Colorado" <?php echo ($detail['tax_calculation']['state'] == 'Colorado' ? 'selected="selected"' : '') ?>>Colorado</option>
                                            <option value="Connecticut" <?php echo ($detail['tax_calculation']['state'] == 'Connecticut' ? 'selected="selected"' : '') ?>>Connecticut</option>
                                            <option value="Delaware" <?php echo ($detail['tax_calculation']['state'] == 'Delaware' ? 'selected="selected"' : '') ?>>Delaware</option>
                                            <option value="District of Columbia" <?php echo ($detail['tax_calculation']['state'] == 'District of Columbia' ? 'selected="selected"' : '') ?>>District of Columbia</option>
                                            <option value="Florida" <?php echo ($detail['tax_calculation']['state'] == 'Florida' ? 'selected="selected"' : '') ?>>Florida</option>
                                            <option value="Georgia" <?php echo ($detail['tax_calculation']['state'] == 'Georgia' ? 'selected="selected"' : '') ?>>Georgia</option>
                                            <option value="Guam" <?php echo ($detail['tax_calculation']['state'] == 'Guam' ? 'selected="selected"' : '') ?>>Guam</option>
                                            <option value="Hawaii" <?php echo ($detail['tax_calculation']['state'] == 'Hawaii' ? 'selected="selected"' : '') ?>>Hawaii</option>
                                            <option value="Idaho" <?php echo ($detail['tax_calculation']['state'] == 'Idaho' ? 'selected="selected"' : '') ?>>Idaho</option>
                                            <option value="Illinois" <?php echo ($detail['tax_calculation']['state'] == 'Illinois' ? 'selected="selected"' : '') ?>>Illinois</option>
                                            <option value="Indiana" <?php echo ($detail['tax_calculation']['state'] == 'Indiana' ? 'selected="selected"' : '') ?>>Indiana</option>
                                            <option value="Iowa" <?php echo ($detail['tax_calculation']['state'] == 'Iowa' ? 'selected="selected"' : '') ?>>Iowa</option>
                                            <option value="Kansas" <?php echo ($detail['tax_calculation']['state'] == 'Kansas' ? 'selected="selected"' : '') ?>>Kansas</option>
                                            <option value="Kentucky" <?php echo ($detail['tax_calculation']['state'] == 'Kentucky' ? 'selected="selected"' : '') ?>>Kentucky</option>
                                            <option value="Louisiana" <?php echo ($detail['tax_calculation']['state'] == 'Louisiana' ? 'selected="selected"' : '') ?>>Louisiana</option>
                                            <option value="Maine" <?php echo ($detail['tax_calculation']['state'] == 'Maine' ? 'selected="selected"' : '') ?>>Maine</option>
                                            <option value="Maryland" <?php echo ($detail['tax_calculation']['state'] == 'Maryland' ? 'selected="selected"' : '') ?>>Maryland</option>
                                            <option value="Massachusetts" <?php echo ($detail['tax_calculation']['state'] == 'Massachusetts' ? 'selected="selected"' : '') ?>>Massachusetts</option>
                                            <option value="Michigan" <?php echo ($detail['tax_calculation']['state'] == 'Michigan' ? 'selected="selected"' : '') ?>>Michigan</option>
                                            <option value="Minnesota" <?php echo ($detail['tax_calculation']['state'] == 'Minnesota' ? 'selected="selected"' : '') ?>>Minnesota</option>
                                            <option value="Mississippi" <?php echo ($detail['tax_calculation']['state'] == 'Mississippi' ? 'selected="selected"' : '') ?>>Mississippi</option>
                                            <option value="Missouri" <?php echo ($detail['tax_calculation']['state'] == 'Missouri' ? 'selected="selected"' : '') ?>>Missouri</option>
                                            <option value="Montana" <?php echo ($detail['tax_calculation']['state'] == 'Montana' ? 'selected="selected"' : '') ?>>Montana</option>
                                            <option value="Nebraska" <?php echo ($detail['tax_calculation']['state'] == 'Nebraska' ? 'selected="selected"' : '') ?>>Nebraska</option>
                                            <option value="Nevada" <?php echo ($detail['tax_calculation']['state'] == 'Nevada' ? 'selected="selected"' : '') ?>>Nevada</option>
                                            <option value="New Hampshire" <?php echo ($detail['tax_calculation']['state'] == 'New Hampshire' ? 'selected="selected"' : '') ?>>New Hampshire</option>
                                            <option value="New Jersey" <?php echo ($detail['tax_calculation']['state'] == 'New Jersey' ? 'selected="selected"' : '') ?>>New Jersey</option>
                                            <option value="New Mexico" <?php echo ($detail['tax_calculation']['state'] == 'New Mexico' ? 'selected="selected"' : '') ?>>New Mexico</option>
                                            <option value="New York" <?php echo ($detail['tax_calculation']['state'] == 'New York' ? 'selected="selected"' : '') ?>>New York</option>
                                            <option value="North Carolina" <?php echo ($detail['tax_calculation']['state'] == 'North Carolina' ? 'selected="selected"' : '') ?>>North Carolina</option>
                                            <option value="North Dakota" <?php echo ($detail['tax_calculation']['state'] == 'North Dakota' ? 'selected="selected"' : '') ?>>North Dakota</option>
                                            <option value="Northern Marianas Islands" <?php echo ($detail['tax_calculation']['state'] == 'Northern Marianas Islands' ? 'selected="selected"' : '') ?>>Northern Marianas Islands</option>
                                            <option value="Ohio" <?php echo ($detail['tax_calculation']['state'] == 'Ohio' ? 'selected="selected"' : '') ?>>Ohio</option>
                                            <option value="Oklahoma" <?php echo ($detail['tax_calculation']['state'] == 'Oklahoma' ? 'selected="selected"' : '') ?>>Oklahoma</option>
                                            <option value="Oregon" <?php echo ($detail['tax_calculation']['state'] == 'Oregon' ? 'selected="selected"' : '') ?>>Oregon</option>
                                            <option value="Pennsylvania" <?php echo ($detail['tax_calculation']['state'] == 'Pennsylvania' ? 'selected="selected"' : '') ?>>Pennsylvania</option>
                                            <option value="Puerto Rico" <?php echo ($detail['tax_calculation']['state'] == 'Puerto Rico' ? 'selected="selected"' : '') ?>>Puerto Rico</option>
                                            <option value="Rhode Island" <?php echo ($detail['tax_calculation']['state'] == 'Rhode Island' ? 'selected="selected"' : '') ?>>Rhode Island</option>
                                            <option value="South Carolina" <?php echo ($detail['tax_calculation']['state'] == 'South Carolina' ? 'selected="selected"' : '') ?>>South Carolina</option>
                                            <option value="South Dakota" <?php echo ($detail['tax_calculation']['state'] == 'South Dakota' ? 'selected="selected"' : '') ?>>South Dakota</option>
                                            <option value="Tennessee" <?php echo ($detail['tax_calculation']['state'] == 'Tennessee' ? 'selected="selected"' : '') ?>>Tennessee</option>
                                            <option value="Texas" <?php echo ($detail['tax_calculation']['state'] == 'Texas' ? 'selected="selected"' : '') ?>>Texas</option>
                                            <option value="Utah" <?php echo ($detail['tax_calculation']['state'] == 'Utah' ? 'selected="selected"' : '') ?>>Utah</option>
                                            <option value="Vermont" <?php echo ($detail['tax_calculation']['state'] == 'Vermont' ? 'selected="selected"' : '') ?>>Vermont</option>
                                            <option value="Virginia" <?php echo ($detail['tax_calculation']['state'] == 'Virginia' ? 'selected="selected"' : '') ?>>Virginia</option>
                                            <option value="Virgin Islands" <?php echo ($detail['tax_calculation']['state'] == 'Virgin Islands' ? 'selected="selected"' : '') ?>>Virgin Islands</option>
                                            <option value="Washington" <?php echo ($detail['tax_calculation']['state'] == 'Washington' ? 'selected="selected"' : '') ?>>Washington</option>
                                            <option value="West Virginia" <?php echo ($detail['tax_calculation']['state'] == 'West Virginia' ? 'selected="selected"' : '') ?>>West Virginia</option>
                                            <option value="Wisconsin" <?php echo ($detail['tax_calculation']['state'] == 'Wisconsin' ? 'selected="selected"' : '') ?>>Wisconsin</option>
                                            <option value="Wyoming" <?php echo ($detail['tax_calculation']['state'] == 'Wyoming' ? 'selected="selected"' : '') ?>>Wyoming</option>
                                        </select> -->
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: <?php if($detail['tax_calculation']['country'] == 'United States') { ?>none;<?php } else { ?>block;<?php } ?>" id="province_id">
                                    <div class="form-group">
                                        <label>Province:</label>
                                        <input type="text" class="form-control" name="province" readonly value="<?php echo $detail['tax_calculation']['province'] ?>" style="background-color: #fff;">
                                        <!-- <select class="form-control" name="province" readonly>
                                            <option value="">--Select Province--</option>
                                            <option value="AB" <?php echo ($detail['tax_calculation']['province'] == 'AB' ? 'selected="selected"' : '') ?>>Alberta AB </option>                                            
                                            <option value="BC" <?php echo ($detail['tax_calculation']['province'] == 'BC' ? 'selected="selected"' : '') ?>>British Columbia BC </option>                                            
                                            <option value="MB" <?php echo ($detail['tax_calculation']['province'] == 'MB' ? 'selected="selected"' : '') ?>>Manitoba MB </option>                                            
                                            <option value="NB" <?php echo ($detail['tax_calculation']['province'] == 'NB' ? 'selected="selected"' : '') ?>>New Brunswick NB </option>                                            
                                            <option value="NL" <?php echo ($detail['tax_calculation']['province'] == 'NL' ? 'selected="selected"' : '') ?>>Newfoundland and Labrador NL </option>                                            
                                            <option value="NT" <?php echo ($detail['tax_calculation']['province'] == 'NT' ? 'selected="selected"' : '') ?>>Northwest Territories NT </option>                                            
                                            <option value="NS" <?php echo ($detail['tax_calculation']['province'] == 'NS' ? 'selected="selected"' : '') ?>>Nova Scotia NS </option>                                            
                                            <option value="NU" <?php echo ($detail['tax_calculation']['province'] == 'NU' ? 'selected="selected"' : '') ?>>Nunavut NU </option>                                            
                                            <option value="ON" <?php echo ($detail['tax_calculation']['province'] == 'ON' ? 'selected="selected"' : '') ?>>Ontario ON </option>                                            
                                            <option value="PE" <?php echo ($detail['tax_calculation']['province'] == 'PE' ? 'selected="selected"' : '') ?>>Prince Edward Island PE </option>                                            
                                            <option value="QC" <?php echo ($detail['tax_calculation']['province'] == 'QC' ? 'selected="selected"' : '') ?>>Quebec QC </option>                                            
                                            <option value="SK" <?php echo ($detail['tax_calculation']['province'] == 'SK' ? 'selected="selected"' : '') ?>>Saskatchewan SK </option>                                            
                                            <option value="YT" <?php echo ($detail['tax_calculation']['province'] == 'YT' ? 'selected="selected"' : '') ?>>Yukon YT </option>   
                                        </select> -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tax Amount</label></br>
                                        <input type="text" name="tax_amount" class="form-control" required="" placeholder="Tax Amount" value="<?php echo $detail['tax_calculation']['tax_amount'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>&nbsp;</label></br>
                                        <button type="submit" id="filter_btn" class=" btn btn-primary"> Submit</button>
                                    </div>
                                </div>
                            </form>
                            <?php } } else { ?>
                            <form method="post">
                                <input type="hidden" name="form_name" value="add">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Country:</label>
                                        <select class="form-control" name="country" required="" id="country_id">
                                            <option value="">--Select Country--</option>
                                            <option value="Canada">Canada</option>
                                            <option value="United States">United States</option>
                                        </select>    
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: none;" id="state_id">
                                    <div class="form-group">
                                        <label>State:</label>
                                        <select class="form-control" name="state">
                                            <option value="">--Select State--</option>
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="Arizona">Arizona</option>
                                            <option value="Arkansas">Arkansas</option>
                                            <option value="California">California</option>
                                            <option value="Colorado">Colorado</option>
                                            <option value="Connecticut">Connecticut</option>
                                            <option value="Delaware">Delaware</option>
                                            <option value="District of Columbia">District of Columbia</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Idaho">Idaho</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Indiana">Indiana</option>
                                            <option value="Iowa">Iowa</option>
                                            <option value="Kansas">Kansas</option>
                                            <option value="Kentucky">Kentucky</option>
                                            <option value="Louisiana">Louisiana</option>
                                            <option value="Maine">Maine</option>
                                            <option value="Maryland">Maryland</option>
                                            <option value="Massachusetts">Massachusetts</option>
                                            <option value="Michigan">Michigan</option>
                                            <option value="Minnesota">Minnesota</option>
                                            <option value="Mississippi">Mississippi</option>
                                            <option value="Missouri">Missouri</option>
                                            <option value="Montana">Montana</option>
                                            <option value="Nebraska">Nebraska</option>
                                            <option value="Nevada">Nevada</option>
                                            <option value="New Hampshire">New Hampshire</option>
                                            <option value="New Jersey">New Jersey</option>
                                            <option value="New Mexico">New Mexico</option>
                                            <option value="New York">New York</option>
                                            <option value="North Carolina">North Carolina</option>
                                            <option value="North Dakota">North Dakota</option>
                                            <option value="Northern Marianas Islands">Northern Marianas Islands</option>
                                            <option value="Ohio">Ohio</option>
                                            <option value="Oklahoma">Oklahoma</option>
                                            <option value="Oregon">Oregon</option>
                                            <option value="Pennsylvania">Pennsylvania</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Rhode Island">Rhode Island</option>
                                            <option value="South Carolina">South Carolina</option>
                                            <option value="South Dakota">South Dakota</option>
                                            <option value="Tennessee">Tennessee</option>
                                            <option value="Texas">Texas</option>
                                            <option value="Utah">Utah</option>
                                            <option value="Vermont">Vermont</option>
                                            <option value="Virginia">Virginia</option>
                                            <option value="Virgin Islands">Virgin Islands</option>
                                            <option value="Washington">Washington</option>
                                            <option value="West Virginia">West Virginia</option>
                                            <option value="Wisconsin">Wisconsin</option>
                                            <option value="Wyoming">Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: none;" id="province_id">
                                    <div class="form-group">
                                        <label>Province:</label>
                                        <select class="form-control" name="province">
                                            <option value="">--Select Province--</option>
                                            <option value="AB">Alberta AB </option>                                            
                                            <option value="BC">British Columbia BC </option>                                            
                                            <option value="MB">Manitoba MB </option>                                            
                                            <option value="NB">New Brunswick NB </option>                                            
                                            <option value="NL">Newfoundland and Labrador NL </option>                                            
                                            <option value="NT">Northwest Territories NT </option>                                            
                                            <option value="NS">Nova Scotia NS </option>                                            
                                            <option value="NU">Nunavut NU </option>                                            
                                            <option value="ON">Ontario ON </option>                                            
                                            <option value="PE">Prince Edward Island PE </option>                                            
                                            <option value="QC">Quebec QC </option>                                            
                                            <option value="SK">Saskatchewan SK </option>                                            
                                            <option value="YT">Yukon YT </option>   
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tax Amount</label></br>
                                        <input type="text" name="tax_amount" class="form-control" required="" placeholder="Tax Amount">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>&nbsp;</label></br>
                                        <button type="submit" id="filter_btn" class=" btn btn-primary"> Submit</button>
                                    </div>
                                </div>
                            </form> 
                            <?php } ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

            </div>
            <!-- /.container -->

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    <?php echo $this->Element('admin/footer') ?>

    <!--<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>-->
    <?php echo $this->Html->script('admin/plugins/jQuery/new_lib.js') ?>

    <?php echo $this->Html->script('admin/bootstrap/js/bootstrap.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/fastclick/fastclick.js') ?>
    <?php echo $this->Html->script('admin/dist/js/app.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/sparkline/jquery.sparkline.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>
    <?php echo $this->Html->script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>
    <?php echo $this->Html->script('admin/plugins/slimScroll/jquery.slimscroll.min.js') ?>

        <!-- ChartJS 1.0.1 -->
        <script>
            $(document).ready(function () {
                $(".active").children("a").children("span").next().html('<i class="fa fa-arrow-right" aria-hidden="true"></i>');
                $(".treeview").children("a").children(".fa-user-plus").addClass("red_color");
                $(".treeview").children("a").children(".fa-user-plus").next().addClass("red_color");
                $(".active").children("a").children(".fa-user-plus").removeClass("red_color");
                $(".active").children("a").children(".fa-user-plus").next().removeClass("red_color");
            });
        </script>

        <script>
            $("#country_id").change(function () {
                if ($(this).val() == 'Canada') {
                    $("#province_id").show();
                    $("#state_id").hide();
                }
                if ($(this).val() == 'United States') {
                    $("#state_id").show();
                    $("#province_id").hide();
                }
            });
        </script>

    </body>
</html>