<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php echo $this->Html->css('industry/bootstrap/css/bootstrap.min.css') ?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <?php echo $this->Html->css('industry/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>
        <?php echo $this->Html->css('industry/dist/css/AdminLTE.min.css') ?>
        <?php echo $this->Html->css('industry/dist/css/skins/_all-skins.min.css') ?>
        <style>
            .log_out_data {float: right;}
            .log_out_data li{list-style: none; border: 1px solid gray; background-color: #bd0000; padding: 10px 30px; margin: 2em;}
            .log_out_data li a{font-size: 15px; color: #fff;}
        </style>
    </head>
    <body>
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

        <header class="main-header">
            <!-- Logo -->

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">

                <a href="new_reference.html" class="logo">
                    <span class="logo-lg">
                        <img src="<?php echo DOMAIN_NAME ?>img/co-logo.png" class="img-responsive images_use_res">
                    </span>
                </a>   
                <ul class="log_out_data">
                    <li>
                        <a href="<?php echo Router::url(['controller' => 'industrys/logout']) ?>">Logout</a>
                    </li>
                </ul>

            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 well">

                    <?php foreach ($results as $result) { ?>   
                    <form method="post" id="form_id">
                        <div class="row" style="display: flex; flex-wrap: wrap;">

                            <div class="col-md-6 well">  
                                <fieldset class="form-group">
                                    <label for="recipetitle">Organization:</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $result['verify_reference']['business_name'] ?>"></input>
                                </fieldset>

                                <fieldset class="form-group">
                                    <label for="recipetitle">Student Name:</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $result['verify_reference']['student_name'] ?>"></input>
                                </fieldset>

                                <fieldset class="form-group">
                                    <label for="recipetitle">Student Session:</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $result['verify_reference']['student_session'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Year:</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $result['verify_reference']['session_year'] ?>"></input>
                                </fieldset>
                            </div>

                            <div class="col-md-6 well">  
                                <fieldset class="form-group">
                                    <label for="recipetitle">ID NO:</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $result['verify_reference']['employee_id'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Company Email Id:</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $result['verify_reference']['company_email'] ?>"></input>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="recipetitle">Job Title:</label>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $result['verify_reference']['title'] ?>"></input>
                                </fieldset>
                            </div>
                        </div>

                        <div class="row" style="display: flex; flex-wrap: wrap;">

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Interest In Work *(required) </h2>
                                    <label>The degree to which the student pursues goals with commitment and takes pride in accomplishments.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Shows little enthusiasm for assigned work, infrequently requests additional tasks)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="interest" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="work_01">
                                                            <label for="work_01" name="interest" class="white1 <?php if($result['verify_reference']['key_rating1'] == '10') { echo 'gray1'; } ?>">1</label>

                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interest" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id='work_02'>
                                                            <label for="work_02" name="interest" class="white1 <?php if($result['verify_reference']['key_rating1'] == '20') { echo 'gray1'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interest" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id='work_03'>
                                                            <label for="work_03" name="interest" class="white1 <?php if($result['verify_reference']['key_rating1'] == '30') { echo 'gray1'; } ?>">3</label>
                                                        </th>                                                        
                                                    </tr>

                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Enthusiastic about their assignments/work, agreeable to new responsibilities, asks for new tasks)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="interest" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="work_04">
                                                            <label for="work_04" name="interest" class="white1 <?php if($result['verify_reference']['key_rating1'] == '40') { echo 'gray1'; } ?>">4</label>

                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interest" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id='work_05'>
                                                            <label for="work_05" name="interest" class="white1 <?php if($result['verify_reference']['key_rating1'] == '50') { echo 'gray1'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interest" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id='work_06'>
                                                            <label for="work_06" name="interest" class="white1 <?php if($result['verify_reference']['key_rating1'] == '60') { echo 'gray1'; } ?>">6</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Displays enthusiasm for work that is beyond their job requirements; proactively seeks new tasks and responsibilities)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="interest" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="work_07">
                                                            <label for="work_07" name="interest" class="white1 <?php if($result['verify_reference']['key_rating1'] == '70') { echo 'gray1'; } ?>">7</label>

                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interest" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id='work_08'>
                                                            <label for="work_08" name="interest" class="white1 <?php if($result['verify_reference']['key_rating1'] == '80') { echo 'gray1'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interest" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id='work_09'>
                                                            <label for="work_09" name="interest" class="white1 <?php if($result['verify_reference']['key_rating1'] == '90') { echo 'gray1'; } ?>">9</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interest" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id='work_10'>
                                                            <label for="work_10" name="interest" class="white1 <?php if($result['verify_reference']['key_rating1'] == '100') { echo 'gray1'; } ?>">10</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="interest" style="visibility:hidden;" class="btn button_value_stripe" value="0" id='work_11'>
                                                            <label for="work_11" name="interest" class="white1 <?php if($result['verify_reference']['key_rating1'] == '0') { echo 'gray1'; } ?>">X</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Ability to Learn *(required) </h2>
                                    <label>The extent to which the student becomes proficient with job duties and work processes.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Sometimes slow to become proficient at new tasks or work processes)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>                                                        
                                                        <th>
                                                            <input type="radio" name="ability" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="ability_01">
                                                            <label for="ability_01" class="white2 <?php if($result['verify_reference']['key_rating2'] == '10') { echo 'gray2'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ability" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="ability_02">
                                                            <label for="ability_02" class="white2 <?php if($result['verify_reference']['key_rating2'] == '20') { echo 'gray2'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ability" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="ability_03">
                                                            <label for="ability_03" class="white2 <?php if($result['verify_reference']['key_rating2'] == '30') { echo 'gray2'; } ?>">3</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Quick to become proficient at new tasks)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>                                                        
                                                        <th>
                                                            <input type="radio" name="ability" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="ability_04">
                                                            <label for="ability_04" class="white2 <?php if($result['verify_reference']['key_rating2'] == '40') { echo 'gray2'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ability" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="ability_05">
                                                            <label for="ability_05" class="white2 <?php if($result['verify_reference']['key_rating2'] == '50') { echo 'gray2'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ability" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="ability_06">
                                                            <label for="ability_06" class="white2 <?php if($result['verify_reference']['key_rating2'] == '60') { echo 'gray2'; } ?>">6</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Exceeds expectations in the complexity and difficulty of work they are able to successfully complete)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>                                                        
                                                        <th>
                                                            <input type="radio" name="ability" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="ability_07">
                                                            <label for="ability_07" class="white2 <?php if($result['verify_reference']['key_rating2'] == '70') { echo 'gray2'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ability" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="ability_08">
                                                            <label for="ability_08" class="white2 <?php if($result['verify_reference']['key_rating2'] == '80') { echo 'gray2'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ability" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="ability_09">
                                                            <label for="ability_09" class="white2 <?php if($result['verify_reference']['key_rating2'] == '90') { echo 'gray2'; } ?>">9</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ability" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="ability_10">
                                                            <label for="ability_10" class="white2 <?php if($result['verify_reference']['key_rating2'] == '100') { echo 'gray2'; } ?>">10</label>
                                                        </th>
                                                    </tr>                                                   
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="ability" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="ability_11">
                                                            <label for="ability_11" class="white2 <?php if($result['verify_reference']['key_rating2'] == '0') { echo 'gray2'; } ?>">X</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Quality of Work *(required) </h2>
                                    <label>The ability of the student to set high standards for own personal performance; strive for quality work; put forth extra effort to ensure quality work.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Work does not meet expectations, has more than the expected number of errors)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="q_work" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="qwork_01">
                                                            <label for="qwork_01" class="white3 <?php if($result['verify_reference']['key_rating3'] == '10') { echo 'gray3'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="q_work" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="qwork_02">
                                                            <label for="qwork_02" class="white3 <?php if($result['verify_reference']['key_rating3'] == '20') { echo 'gray3'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="q_work" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="qwork_03">
                                                            <label for="qwork_03" class="white3 <?php if($result['verify_reference']['key_rating3'] == '30') { echo 'gray3'; } ?>">3</label>
                                                        </th>
                                                    </tr>

                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Work is usually very thorough and well done, with few errors)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="q_work" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="qwork_04">
                                                            <label for="qwork_04" class="white3 <?php if($result['verify_reference']['key_rating3'] == '40') { echo 'gray3'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="q_work" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="qwork_05">
                                                            <label for="qwork_05" class="white3 <?php if($result['verify_reference']['key_rating3'] == '50') { echo 'gray3'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="q_work" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="qwork_06">
                                                            <label for="qwork_06" class="white3 <?php if($result['verify_reference']['key_rating3'] == '60') { echo 'gray3'; } ?>">6</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Work is always very thorough and excellent quality, few if any errors)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="q_work" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="qwork_07">
                                                            <label for="qwork_07" class="white3 <?php if($result['verify_reference']['key_rating3'] == '70') { echo 'gray3'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="q_work" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="qwork_08">
                                                            <label for="qwork_08" class="white3 <?php if($result['verify_reference']['key_rating3'] == '80') { echo 'gray3'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="q_work" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="qwork_09">
                                                            <label for="qwork_09" class="white3 <?php if($result['verify_reference']['key_rating3'] == '90') { echo 'gray3'; } ?>">9</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="q_work" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="qwork_10">
                                                            <label for="qwork_10" class="white3 <?php if($result['verify_reference']['key_rating3'] == '100') { echo 'gray3'; } ?>">10</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="q_work" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="qwork_11">
                                                            <label for="qwork_11" class="white3 <?php if($result['verify_reference']['key_rating3'] == '0') { echo 'gray3'; } ?>">X</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Quantity of Work *(required) </h2>
                                    <label>The volume of work produced by the student, along with his or her speed and consistency with output.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Does not always complete work within time limits)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="quantity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="quantity_01">
                                                            <label for="quantity_01" class="white4 <?php if($result['verify_reference']['teamwork_rating1'] == '10') { echo 'gray4'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="quantity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="quantity_02">
                                                            <label for="quantity_02" class="white4 <?php if($result['verify_reference']['teamwork_rating1'] == '20') { echo 'gray4'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="quantity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="quantity_03">
                                                            <label for="quantity_03" class="white4 <?php if($result['verify_reference']['teamwork_rating1'] == '30') { echo 'gray4'; } ?>">3</label>
                                                        </th>                                                        
                                                    </tr>

                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Completes the majority of work within specified deadlines)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="quantity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="quantity_04">
                                                            <label for="quantity_04" class="white4 <?php if($result['verify_reference']['teamwork_rating1'] == '40') { echo 'gray4'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="quantity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="quantity_05">
                                                            <label for="quantity_05" class="white4 <?php if($result['verify_reference']['teamwork_rating1'] == '50') { echo 'gray4'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="quantity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="quantity_06">
                                                            <label for="quantity_06" class="white4 <?php if($result['verify_reference']['teamwork_rating1'] == '60') { echo 'gray4'; } ?>">6</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Consistently completes work ahead of schedule; seeks additional tasks)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="quantity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="quantity_07">
                                                            <label for="quantity_07" class="white4 <?php if($result['verify_reference']['teamwork_rating1'] == '70') { echo 'gray4'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="quantity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="quantity_08">
                                                            <label for="quantity_08" class="white4 <?php if($result['verify_reference']['teamwork_rating1'] == '80') { echo 'gray4'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="quantity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="quantity_09">
                                                            <label for="quantity_09" class="white4 <?php if($result['verify_reference']['teamwork_rating1'] == '90') { echo 'gray4'; } ?>">9</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="quantity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="quantity_10">
                                                            <label for="quantity_10" class="white4 <?php if($result['verify_reference']['teamwork_rating1'] == '100') { echo 'gray4'; } ?>">10</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="quantity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="quantity_11">
                                                            <label for="quantity_11" class="white4 <?php if($result['verify_reference']['teamwork_rating1'] == '0') { echo 'gray4'; } ?>">X</label>
                                                        </th>                                                     
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Problem Solving *(required) </h2>
                                    <label>The student's demonstrated ability to analyze problems or procedures, evaluate alternatives, and select the best course of action.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Can make routine decisions but needs guidance and checking)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="problem" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="problem_01">
                                                            <label for="problem_01" class="white5 <?php if($result['verify_reference']['problem_rating1'] == '10') { echo 'gray5'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="problem" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="problem_02">
                                                            <label for="problem_02" class="white5 <?php if($result['verify_reference']['problem_rating1'] == '20') { echo 'gray5'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="problem" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="problem_03">
                                                            <label for="problem_03" class="white5 <?php if($result['verify_reference']['problem_rating1'] == '30') { echo 'gray5'; } ?>">3</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Can be relied upon to make good decisions, requires limited guidance)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="problem" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="problem_04">
                                                            <label for="problem_04" class="white5 <?php if($result['verify_reference']['problem_rating1'] == '40') { echo 'gray5'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="problem" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="problem_05">
                                                            <label for="problem_05" class="white5 <?php if($result['verify_reference']['problem_rating1'] == '50') { echo 'gray5'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="problem" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="problem_06">
                                                            <label for="problem_06" class="white5 <?php if($result['verify_reference']['problem_rating1'] == '60') { echo 'gray5'; } ?>">6</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Independently manages complex tasks and makes good)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="problem" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="problem_07">
                                                            <label for="problem_07" class="white5 <?php if($result['verify_reference']['problem_rating1'] == '70') { echo 'gray5'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="problem" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="problem_08">
                                                            <label for="problem_08" class="white5 <?php if($result['verify_reference']['problem_rating1'] == '80') { echo 'gray5'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="problem" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="problem_09">
                                                            <label for="problem_09" class="white5 <?php if($result['verify_reference']['problem_rating1'] == '90') { echo 'gray5'; } ?>">9</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="problem" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="problem_10">
                                                            <label for="problem_10" class="white5 <?php if($result['verify_reference']['problem_rating1'] == '100') { echo 'gray5'; } ?>">10</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="problem" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="problem_11">
                                                            <label for="problem_11" class="white5 <?php if($result['verify_reference']['problem_rating1'] == '0') { echo 'gray5'; } ?>">X</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Teamwork *(required) </h2>
                                    <label>The degree to which the student works will in a team setting.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Sometimes uncooperative; or experiences difficulty relating to others)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="team" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="team_01">
                                                            <label for="team_01" class="white6 <?php if($result['verify_reference']['teamwork_rating2'] == '10') { echo 'gray6'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="team" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="team_02">
                                                            <label for="team_02" class="white6 <?php if($result['verify_reference']['teamwork_rating2'] == '20') { echo 'gray6'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="team" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="team_03">
                                                            <label for="team_03" class="white6 <?php if($result['verify_reference']['teamwork_rating2'] == '30') { echo 'gray6'; } ?>">3</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Can be relied upon to make good decisions, requires limited guidance)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="team" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="team_04">
                                                            <label for="team_04" class="white6 <?php if($result['verify_reference']['teamwork_rating2'] == '40') { echo 'gray6'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="team" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="team_05">
                                                            <label for="team_05" class="white6 <?php if($result['verify_reference']['teamwork_rating2'] == '50') { echo 'gray6'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="team" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="team_06">
                                                            <label for="team_06" class="white6 <?php if($result['verify_reference']['teamwork_rating2'] == '60') { echo 'gray6'; } ?>">6</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Independently manages complex tasks and makes good)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="team" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="team_07">
                                                            <label for="team_07" class="white6 <?php if($result['verify_reference']['teamwork_rating2'] == '70') { echo 'gray6'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="team" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="team_08">
                                                            <label for="team_08" class="white6 <?php if($result['verify_reference']['teamwork_rating2'] == '80') { echo 'gray6'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="team" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="team_09">
                                                            <label for="team_09" class="white6 <?php if($result['verify_reference']['teamwork_rating2'] == '90') { echo 'gray6'; } ?>">9</label>
                                                        </th> 
                                                        <th>
                                                            <input type="radio" name="team" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="team_10">
                                                            <label for="team_10" class="white6 <?php if($result['verify_reference']['teamwork_rating2'] == '100') { echo 'gray6'; } ?>">10</label>
                                                        </th> 
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="team" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="team_11">
                                                            <label for="team_11" class="white6 <?php if($result['verify_reference']['teamwork_rating2'] == '0') { echo 'gray6'; } ?>">X</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Dependability *(required) </h2>
                                    <label>The manner in which the students conducts his or herself in the working environment.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Displays an inconsistent work ethic and does not always report to work on time or has attendance issues.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="depend" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="depend_01">
                                                            <label for="depend_01" class="white7 <?php if($result['verify_reference']['reliabilty_rating1'] == '10') { echo 'gray7'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="depend" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="depend_02">
                                                            <label for="depend_02" class="white7 <?php if($result['verify_reference']['reliabilty_rating1'] == '20') { echo 'gray7'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="depend" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="depend_03">
                                                            <label for="depend_03" class="white7 <?php if($result['verify_reference']['reliabilty_rating1'] == '30') { echo 'gray7'; } ?>">3</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Displays a strong work ethic and is present at work and meetings in a reliable and timely manner.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="depend" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="depend_04">
                                                            <label for="depend_04" class="white7 <?php if($result['verify_reference']['reliabilty_rating1'] == '40') { echo 'gray7'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="depend" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="depend_05">
                                                            <label for="depend_05" class="white7 <?php if($result['verify_reference']['reliabilty_rating1'] == '50') { echo 'gray7'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="depend" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="depend_06">
                                                            <label for="depend_06" class="white7 <?php if($result['verify_reference']['reliabilty_rating1'] == '60') { echo 'gray7'; } ?>">6</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Displays an excellent work ethic and volunteers to adapt personal schedule to meet work demands.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="depend" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="depend_07">
                                                            <label for="depend_07" class="white7 <?php if($result['verify_reference']['reliabilty_rating1'] == '70') { echo 'gray7'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="depend" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="depend_08">
                                                            <label for="depend_08" class="white7 <?php if($result['verify_reference']['reliabilty_rating1'] == '80') { echo 'gray7'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="depend" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="depend_09">
                                                            <label for="depend_09" class="white7 <?php if($result['verify_reference']['reliabilty_rating1'] == '90') { echo 'gray7'; } ?>">9</label>
                                                        </th> 
                                                        <th>
                                                            <input type="radio" name="depend" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="depend_10">
                                                            <label for="depend_10" class="white7 <?php if($result['verify_reference']['reliabilty_rating1'] == '100') { echo 'gray7'; } ?>">10</label>
                                                        </th> 
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="depend" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="depend_11">
                                                            <label for="depend_11" class="white7 <?php if($result['verify_reference']['reliabilty_rating1'] == '0') { echo 'gray7'; } ?>">X</label>
                                                        </th>                                                      
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Response to Supervision *(required) </h2>
                                    <label>The manner in which the student responds to direction and constructive criticism.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Displays an inconsistent work ethic and does not always report to work on time or has attendance issues.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="supervision" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="supervision_01">
                                                            <label for="supervision_01" class="white8 <?php if($result['verify_reference']['reliabilty_rating2'] == '10') { echo 'gray8'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="supervision" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="supervision_02">
                                                            <label for="supervision_02" class="white8 <?php if($result['verify_reference']['reliabilty_rating2'] == '20') { echo 'gray8'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="supervision" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="supervision_03">
                                                            <label for="supervision_03" class="white8 <?php if($result['verify_reference']['reliabilty_rating2'] == '30') { echo 'gray8'; } ?>">3</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Displays a strong work ethic and is present at work and meetings in a reliable and timely manner.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="supervision" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="supervision_04">
                                                            <label for="supervision_04" class="white8 <?php if($result['verify_reference']['reliabilty_rating2'] == '40') { echo 'gray8'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="supervision" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="supervision_05">
                                                            <label for="supervision_05" class="white8 <?php if($result['verify_reference']['reliabilty_rating2'] == '50') { echo 'gray8'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="supervision" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="supervision_06">
                                                            <label for="supervision_06" class="white8 <?php if($result['verify_reference']['reliabilty_rating2'] == '60') { echo 'gray8'; } ?>">6</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Displays an excellent work ethic and volunteers to adapt personal schedule to meet work demands.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="supervision" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="supervision_07">
                                                            <label for="supervision_07" class="white8 <?php if($result['verify_reference']['reliabilty_rating2'] == '70') { echo 'gray8'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="supervision" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="supervision_08">
                                                            <label for="supervision_08" class="white8 <?php if($result['verify_reference']['reliabilty_rating2'] == '80') { echo 'gray8'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="supervision" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="supervision_09">
                                                            <label for="supervision_09" class="white8 <?php if($result['verify_reference']['reliabilty_rating2'] == '90') { echo 'gray8'; } ?>">9</label>
                                                        </th>  
                                                        <th>
                                                            <input type="radio" name="supervision" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="supervision_10">
                                                            <label for="supervision_10" class="white8 <?php if($result['verify_reference']['reliabilty_rating2'] == '100') { echo 'gray8'; } ?>">10</label>
                                                        </th>  
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="supervision" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="supervision_11">
                                                            <label for="supervision_11" class="white8 <?php if($result['verify_reference']['reliabilty_rating2'] == '0') { echo 'gray8'; } ?>">X</label>
                                                        </th>                                                       
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Reflection *(required) </h2>
                                    <label>The student's demonstrated ability to learn and adapt from previous experience.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Has to be told many times before they modify their behavior or approach to new work based on errors in previous performance.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="reflection" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="reflection_01">
                                                            <label for="reflection_01" class="white9 <?php if($result['verify_reference']['reliabilty_rating3'] == '10') { echo 'gray9'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="reflection" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="reflection_02">
                                                            <label for="reflection_02" class="white9 <?php if($result['verify_reference']['reliabilty_rating3'] == '20') { echo 'gray9'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="reflection" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="reflection_03">
                                                            <label for="reflection_03" class="white9 <?php if($result['verify_reference']['reliabilty_rating3'] == '30') { echo 'gray9'; } ?>">3</label>
                                                        </th>    
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Occasionally needs reminder to modify their behavior or approach to new work based on errors in previous performance.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="reflection" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="reflection_04">
                                                            <label for="reflection_04" class="white9 <?php if($result['verify_reference']['reliabilty_rating3'] == '40') { echo 'gray9'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="reflection" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="reflection_05">
                                                            <label for="reflection_05" class="white9 <?php if($result['verify_reference']['reliabilty_rating3'] == '50') { echo 'gray9'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="reflection" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="reflection_06">
                                                            <label for="reflection_06" class="white9 <?php if($result['verify_reference']['reliabilty_rating3'] == '60') { echo 'gray9'; } ?>">6</label>
                                                        </th>    
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Independently recognizes the errors in previous performance and proactively modifies their behaviour and approach to new work.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="reflection" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="reflection_07">
                                                            <label for="reflection_07" class="white9 <?php if($result['verify_reference']['reliabilty_rating3'] == '70') { echo 'gray9'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="reflection" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="reflection_08">
                                                            <label for="reflection_08" class="white9 <?php if($result['verify_reference']['reliabilty_rating3'] == '80') { echo 'gray9'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="reflection" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="reflection_09">
                                                            <label for="reflection_09" class="white9 <?php if($result['verify_reference']['reliabilty_rating3'] == '90') { echo 'gray9'; } ?>">9</label>
                                                        </th> 
                                                        <th>
                                                            <input type="radio" name="reflection" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="reflection_10">
                                                            <label for="reflection_10" class="white9 <?php if($result['verify_reference']['reliabilty_rating3'] == '100') { echo 'gray9'; } ?>">10</label>
                                                        </th> 
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="reflection" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="reflection_11">
                                                            <label for="reflection_11" class="white9 <?php if($result['verify_reference']['reliabilty_rating3'] == '0') { echo 'gray9'; } ?>">X</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Resourcefulness *(required) </h2>
                                    <label>The student's demonstrated ability to develop innovative solutions and display flexibility in unique or demanding circumstances.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Unsure of how to approach new or stressful situations; has difficulty adjusting to changing priorities and circumstances.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="resource" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="resource_01">
                                                            <label for="resource_01" class="white10 <?php if($result['verify_reference']['adaptibility_rating3'] == '10') { echo 'gray10'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="resource" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="resource_02">
                                                            <label for="resource_02" class="white10 <?php if($result['verify_reference']['adaptibility_rating3'] == '20') { echo 'gray10'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="resource" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="resource_03">
                                                            <label for="resource_03" class="white10 <?php if($result['verify_reference']['adaptibility_rating3'] == '30') { echo 'gray10'; } ?>">3</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Responds appropriately to new or stressful situations; can adjust to changing priorities and circumstances with guidance.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="resource" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="resource_04">
                                                            <label for="resource_04" class="white10 <?php if($result['verify_reference']['adaptibility_rating3'] == '40') { echo 'gray10'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="resource" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="resource_05">
                                                            <label for="resource_05" class="white10 <?php if($result['verify_reference']['adaptibility_rating3'] == '50') { echo 'gray10'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="resource" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="resource_06">
                                                            <label for="resource_06" class="white10 <?php if($result['verify_reference']['adaptibility_rating3'] == '60') { echo 'gray10'; } ?>">6</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Generates effective solutions to new or stressful situations; readily adjusts to changing priorities and circumstances.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="resource" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="resource_07">
                                                            <label for="resource_07" class="white10 <?php if($result['verify_reference']['adaptibility_rating3'] == '70') { echo 'gray10'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="resource" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="resource_08">
                                                            <label for="resource_08" class="white10 <?php if($result['verify_reference']['adaptibility_rating3'] == '80') { echo 'gray10'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="resource" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="resource_09">
                                                            <label for="resource_09" class="white10 <?php if($result['verify_reference']['adaptibility_rating3'] == '90') { echo 'gray10'; } ?>">9</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="resource" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="resource_10">
                                                            <label for="resource_10" class="white10 <?php if($result['verify_reference']['adaptibility_rating3'] == '100') { echo 'gray10'; } ?>">10</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="resource" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="resource_11">
                                                            <label for="resource_11" class="white10 <?php if($result['verify_reference']['adaptibility_rating3'] == '0') { echo 'gray10'; } ?>">X</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Ethical Behaviour *(required) </h2>
                                    <label>The extent to which the student's behaviour demonstrates integrity and ethics in work and relationships.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Needs guidance in making appropriate choices to avoid questionable conduct and/or a conflict of personal and professional interest.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="ethical" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="ethical_01">
                                                            <label for="ethical_01" class="white11 <?php if($result['verify_reference']['problem_rating2'] == '10') { echo 'gray11'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ethical" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="ethical_02">
                                                            <label for="ethical_02" class="white11 <?php if($result['verify_reference']['problem_rating2'] == '20') { echo 'gray11'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ethical" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="ethical_03">
                                                            <label for="ethical_03" class="white11 <?php if($result['verify_reference']['problem_rating2'] == '30') { echo 'gray11'; } ?>">3</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Is able to make the appropriate choices to avoid questionable conduct and/or a conflict of personal and professional interests.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="ethical" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="ethical_04">
                                                            <label for="ethical_04" class="white11 <?php if($result['verify_reference']['problem_rating2'] == '40') { echo 'gray11'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ethical" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="ethical_05">
                                                            <label for="ethical_05" class="white11 <?php if($result['verify_reference']['problem_rating2'] == '50') { echo 'gray11'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ethical" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="ethical_06">
                                                            <label for="ethical_06" class="white11 <?php if($result['verify_reference']['problem_rating2'] == '60') { echo 'gray11'; } ?>">6</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Proactively identifies potential conflicts of interest or questionable conduct and acts to avoid or mitigate these issues.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="ethical" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="ethical_07">
                                                            <label for="ethical_07" class="white11 <?php if($result['verify_reference']['problem_rating2'] == '70') { echo 'gray11'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ethical" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="ethical_08">
                                                            <label for="ethical_08" class="white11 <?php if($result['verify_reference']['problem_rating2'] == '80') { echo 'gray11'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ethical" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="ethical_09">
                                                            <label for="ethical_09" class="white11 <?php if($result['verify_reference']['problem_rating2'] == '90') { echo 'gray11'; } ?>">9</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="ethical" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="ethical_10">
                                                            <label for="ethical_10" class="white11 <?php if($result['verify_reference']['problem_rating2'] == '100') { echo 'gray11'; } ?>">10</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="ethical" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="ethical_11">
                                                            <label for="ethical_11" class="white11 <?php if($result['verify_reference']['problem_rating2'] == '0') { echo 'gray11'; } ?>">X</label>
                                                        </th> 
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Appreciation of Diversity *(required) </h2>
                                    <label>The degree to which the student shows understanding and sensitivity to needs and differences of others (i.e. ethnicity, religion, language, etc).</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Has difficulty interacting with others due to individual differences.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="diversity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="diversity_01">
                                                            <label for="diversity_01" class="white12 <?php if($result['verify_reference']['problem_rating3'] == '10') { echo 'gray12'; } ?>">1</label>
                                                        </th> 
                                                        <th>
                                                            <input type="radio" name="diversity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="diversity_02">
                                                            <label for="diversity_02" class="white12 <?php if($result['verify_reference']['problem_rating3'] == '20') { echo 'gray12'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="diversity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="diversity_03">
                                                            <label for="diversity_03" class="white12 <?php if($result['verify_reference']['problem_rating3'] == '30') { echo 'gray12'; } ?>">3</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Has positive interactions with others and is respectful to individual differences.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="diversity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="diversity_04">
                                                            <label for="diversity_04" class="white12 <?php if($result['verify_reference']['problem_rating3'] == '40') { echo 'gray12'; } ?>">4</label>
                                                        </th> 
                                                        <th>
                                                            <input type="radio" name="diversity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="diversity_05">
                                                            <label for="diversity_05" class="white12 <?php if($result['verify_reference']['problem_rating3'] == '50') { echo 'gray12'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="diversity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="diversity_06">
                                                            <label for="diversity_06" class="white12 <?php if($result['verify_reference']['problem_rating3'] == '60') { echo 'gray12'; } ?>">6</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Demonstrates leadership in promoting positive interactions and encouraging others to work together despite individual differences.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="diversity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="diversity_07">
                                                            <label for="diversity_07" class="white12 <?php if($result['verify_reference']['problem_rating3'] == '70') { echo 'gray12'; } ?>">7</label>
                                                        </th> 
                                                        <th>
                                                            <input type="radio" name="diversity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="diversity_08">
                                                            <label for="diversity_08" class="white12 <?php if($result['verify_reference']['problem_rating3'] == '80') { echo 'gray12'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="diversity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="diversity_09">
                                                            <label for="diversity_09" class="white12 <?php if($result['verify_reference']['problem_rating3'] == '90') { echo 'gray12'; } ?>">9</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="diversity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="diversity_10">
                                                            <label for="diversity_10" class="white12 <?php if($result['verify_reference']['problem_rating3'] == '100') { echo 'gray12'; } ?>">10</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="diversity" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="diversity_11">
                                                            <label for="diversity_11" class="white12 <?php if($result['verify_reference']['problem_rating3'] == '0') { echo 'gray12'; } ?>">X</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Entrepreneurial Orientation *(required) </h2>
                                    <label>The student's demonstrated ability to take informed risks that demonstrate creativity and add value to that company.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Has difficulty evaluating alternative ideas and making choices that enhance the department or organization.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="orientation" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="orientation_01">
                                                            <label for="orientation_01" class="white13 <?php if($result['verify_reference']['adaptibility_rating1'] == '10') { echo 'gray13'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="orientation" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="orientation_02">
                                                            <label for="orientation_02" class="white13 <?php if($result['verify_reference']['adaptibility_rating1'] == '20') { echo 'gray13'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="orientation" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="orientation_03">
                                                            <label for="orientation_03" class="white13 <?php if($result['verify_reference']['adaptibility_rating1'] == '30') { echo 'gray13'; } ?>">3</label>
                                                        </th>
                                                    </tr>

                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Able to evaluate alternative ideas and will sometimes make choices that enhance the department or organization.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="orientation" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="orientation_04">
                                                            <label for="orientation_04" class="white13 <?php if($result['verify_reference']['adaptibility_rating1'] == '40') { echo 'gray13'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="orientation" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="orientation_05">
                                                            <label for="orientation_05" class="white13 <?php if($result['verify_reference']['adaptibility_rating1'] == '50') { echo 'gray13'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="orientation" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="orientation_06">
                                                            <label for="orientation_06" class="white13 <?php if($result['verify_reference']['adaptibility_rating1'] == '60') { echo 'gray13'; } ?>">6</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Able to effectively evaluate alternative ideas and independently makes choices that enhance the department or organization.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="orientation" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="orientation_07">
                                                            <label for="orientation_07" class="white13 <?php if($result['verify_reference']['adaptibility_rating1'] == '70') { echo 'gray13'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="orientation" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="orientation_08">
                                                            <label for="orientation_08" class="white13 <?php if($result['verify_reference']['adaptibility_rating1'] == '80') { echo 'gray13'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="orientation" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="orientation_09">
                                                            <label for="orientation_09" class="white13 <?php if($result['verify_reference']['adaptibility_rating1'] == '90') { echo 'gray13'; } ?>">9</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="orientation" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="orientation_10">
                                                            <label for="orientation_10" class="white13 <?php if($result['verify_reference']['adaptibility_rating1'] == '100') { echo 'gray13'; } ?>">10</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="orientation" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="orientation_11">
                                                            <label for="orientation_11" class="white13 <?php if($result['verify_reference']['adaptibility_rating1'] == '0') { echo 'gray13'; } ?>">X</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Written Communication *(required) </h2>
                                    <label>The extent to which the student demonstrates effective written communication.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Not consistently clear and concise or requires frequent checking and editing.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="written" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="written_01">
                                                            <label for="written_01" class="white14 <?php if($result['verify_reference']['adaptibility_rating2'] == '10') { echo 'gray14'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="written" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="written_02">
                                                            <label for="written_02" class="white14 <?php if($result['verify_reference']['adaptibility_rating2'] == '20') { echo 'gray14'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="written" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="written_03">
                                                            <label for="written_03" class="white14 <?php if($result['verify_reference']['adaptibility_rating2'] == '30') { echo 'gray14'; } ?>">3</label>
                                                        </th>                                                        
                                                    </tr>

                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Normally clear, well organized and understandable and needs only moderate checking and editing.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="written" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="written_04">
                                                            <label for="written_04" class="white14 <?php if($result['verify_reference']['adaptibility_rating2'] == '40') { echo 'gray14'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="written" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="written_05">
                                                            <label for="written_05" class="white14 <?php if($result['verify_reference']['adaptibility_rating2'] == '50') { echo 'gray14'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="written" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="written_06">
                                                            <label for="written_06" class="white14 <?php if($result['verify_reference']['adaptibility_rating2'] == '60') { echo 'gray14'; } ?>">6</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Always clear, well organized, and easily understandable; rarely requires checking and editing.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="written" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="written_07">
                                                            <label for="written_07" class="white14 <?php if($result['verify_reference']['adaptibility_rating2'] == '70') { echo 'gray14'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="written" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="written_08">
                                                            <label for="written_08" class="white14 <?php if($result['verify_reference']['adaptibility_rating2'] == '80') { echo 'gray14'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="written" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="written_09">
                                                            <label for="written_09" class="white14 <?php if($result['verify_reference']['adaptibility_rating2'] == '90') { echo 'gray14'; } ?>">9</label>
                                                        </th> 
                                                        <th>
                                                            <input type="radio" name="written" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="written_10">
                                                            <label for="written_10" class="white14 <?php if($result['verify_reference']['adaptibility_rating2'] == '100') { echo 'gray14'; } ?>">10</label>
                                                        </th> 
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="written" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="written_11">
                                                            <label for="written_11" class="white14 <?php if($result['verify_reference']['adaptibility_rating2'] == '0') { echo 'gray14'; } ?>">X</label>
                                                        </th> 
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Oral Communication *(required) </h2>
                                    <label>The extent to which the student demonstrates effective oral communication.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Occasionally encounters difficulty with expressing ideas clearly and persuasively; demonstrates discomfort with public speaking.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="oral" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="oral_01">
                                                            <label for="oral_01" class="white15 <?php if($result['verify_reference']['communication_rating1'] == '10') { echo 'gray15'; } ?>">1</label>
                                                        </th> 
                                                        <th>
                                                            <input type="radio" name="oral" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="oral_02">
                                                            <label for="oral_02" class="white15 <?php if($result['verify_reference']['communication_rating1'] == '20') { echo 'gray15'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="oral" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="oral_03">
                                                            <label for="oral_03" class="white15 <?php if($result['verify_reference']['communication_rating1'] == '30') { echo 'gray15'; } ?>">3</label>
                                                        </th>                                                        
                                                    </tr>

                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Normally clear, well organized, understandable, and persuasive, good public speaker.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="oral" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="oral_04">
                                                            <label for="oral_04" class="white15 <?php if($result['verify_reference']['communication_rating1'] == '40') { echo 'gray15'; } ?>">4</label>
                                                        </th> 
                                                        <th>
                                                            <input type="radio" name="oral" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="oral_05">
                                                            <label for="oral_05" class="white15 <?php if($result['verify_reference']['communication_rating1'] == '50') { echo 'gray15'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="oral" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="oral_06">
                                                            <label for="oral_06" class="white15 <?php if($result['verify_reference']['communication_rating1'] == '60') { echo 'gray15'; } ?>">6</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Always clear, well organized, easily understandable, and exceptionally persuasive, excellent public speaker.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="oral" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="oral_07">
                                                            <label for="oral_07" class="white15 <?php if($result['verify_reference']['communication_rating1'] == '70') { echo 'gray15'; } ?>">7</label>
                                                        </th> 
                                                        <th>
                                                            <input type="radio" name="oral" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="oral_08">
                                                            <label for="oral_08" class="white15 <?php if($result['verify_reference']['communication_rating1'] == '80') { echo 'gray15'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="oral" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="oral_09">
                                                            <label for="oral_09" class="white15 <?php if($result['verify_reference']['communication_rating1'] == '90') { echo 'gray15'; } ?>">9</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="oral" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="oral_10">
                                                            <label for="oral_10" class="white15 <?php if($result['verify_reference']['communication_rating1'] == '100') { echo 'gray15'; } ?>">10</label>
                                                        </th>                                                        
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="oral" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="oral_11">
                                                            <label for="oral_11" class="white15 <?php if($result['verify_reference']['communication_rating1'] == '0') { echo 'gray15'; } ?>">X</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>

                            <div class="col-md-6 well">
                                <div class="well">
                                    <h2>Interpersonal Communication *(required) </h2>
                                    <label>The extent to which the student effectively listens, conveys, and receives ideas, information, and direction.</label><br>
                                </div>
                                <div>

                                    <fieldset>
                                        <label>Developing Performance (Displays inconsistent listening skills and is reluctant to seek input from others.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="interpersonal" style="visibility:hidden;" required="" class="btn button_value_stripe" value="10" id="interpersonal_01">
                                                            <label for="interpersonal_01" class="white16 <?php if($result['verify_reference']['communication_rating2'] == '10') { echo 'gray16'; } ?>">1</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interpersonal" style="visibility:hidden;" required="" class="btn button_value_stripe" value="20" id="interpersonal_02">
                                                            <label for="interpersonal_02" class="white16 <?php if($result['verify_reference']['communication_rating2'] == '20') { echo 'gray16'; } ?>">2</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interpersonal" style="visibility:hidden;" required="" class="btn button_value_stripe" value="30" id="interpersonal_03">
                                                            <label for="interpersonal_03" class="white16 <?php if($result['verify_reference']['communication_rating2'] == '30') { echo 'gray16'; } ?>">3</label>
                                                        </th>
                                                    </tr>

                                                </tbody>
                                            </table>                                                                                   
                                        </div>  

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Good Performance (Interactions with others demonstrate acceptable listening skills and ability to sometimes seek the opinions, ideas, and expertise of others.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="interpersonal" style="visibility:hidden;" required="" class="btn button_value_stripe" value="40" id="interpersonal_04">
                                                            <label for="interpersonal_04" class="white16 <?php if($result['verify_reference']['communication_rating2'] == '40') { echo 'gray16'; } ?>">4</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interpersonal" style="visibility:hidden;" required="" class="btn button_value_stripe" value="50" id="interpersonal_05">
                                                            <label for="interpersonal_05" class="white16 <?php if($result['verify_reference']['communication_rating2'] == '50') { echo 'gray16'; } ?>">5</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interpersonal" style="visibility:hidden;" required="" class="btn button_value_stripe" value="60" id="interpersonal_06">
                                                            <label for="interpersonal_06" class="white16 <?php if($result['verify_reference']['communication_rating2'] == '60') { echo 'gray16'; } ?>">6</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>	

                                <div>

                                    <fieldset>
                                        <label>Superior Performance (Interactions with others demonstrate exceptional active listening skills and the ability to proactively seek the opinions, ideas, and expertise of others.)</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="interpersonal" style="visibility:hidden;" required="" class="btn button_value_stripe" value="70" id="interpersonal_07">
                                                            <label for="interpersonal_07" class="white16 <?php if($result['verify_reference']['communication_rating2'] == '70') { echo 'gray16'; } ?>">7</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interpersonal" style="visibility:hidden;" required="" class="btn button_value_stripe" value="80" id="interpersonal_08">
                                                            <label for="interpersonal_08" class="white16 <?php if($result['verify_reference']['communication_rating2'] == '80') { echo 'gray16'; } ?>">8</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interpersonal" style="visibility:hidden;" required="" class="btn button_value_stripe" value="90" id="interpersonal_09">
                                                            <label for="interpersonal_09" class="white16 <?php if($result['verify_reference']['communication_rating2'] == '90') { echo 'gray16'; } ?>">9</label>
                                                        </th>
                                                        <th>
                                                            <input type="radio" name="interpersonal" style="visibility:hidden;" required="" class="btn button_value_stripe" value="100" id="interpersonal_10">
                                                            <label for="interpersonal_10" class="white16 <?php if($result['verify_reference']['communication_rating2'] == '100') { echo 'gray16'; } ?>">10</label>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                                <div>

                                    <fieldset>
                                        <label>Not Observed</label><br>
                                    </fieldset>
                                    <fieldset class="rating_color">

                                        <div class="lead">
                                            <table class="table_use" border='1'>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <input type="radio" name="interpersonal" style="visibility:hidden;" required="" class="btn button_value_stripe" value="0" id="interpersonal_11">
                                                            <label for="interpersonal_11" class="white16 <?php if($result['verify_reference']['communication_rating2'] == '0') { echo 'gray16'; } ?>">X</label>
                                                        </th>                                                       
                                                    </tr>
                                                </tbody>
                                            </table>                                                                                                                             
                                        </div> 

                                    </fieldset>
                                </div>

                            </div>                           
                        </div>

                        <div class="row">
                            <div class="well">
                                <h2>Overall Performance Rating </h2>                                   
                            </div>
                            <div>

                                <fieldset>
                                    <label><input type="radio" name="student_performance" value="Outstanding Performance" <?php if($result['verify_reference']['performance_rating'] == 'Outstanding Performance') { echo 'checked'; } ?>>&nbsp;&nbsp;Outstanding Performance</label><br>
                                    <ul>
                                        <li>The student has significantly exceeded all behavioural and developmental performance expectations in respect to output, quality standards, delivery of goals and assignments.</li>
                                        <li>This rating is reserved for only those few students who have distinguished themselves by their unique contribution or exceptional performance</li>
                                    </ul>
                                    <div class="form-group">
                                        <label>Comments</label>
                                        <textarea name="comment" name="student_performance" class="form-control" rows="3"><?php echo $result['verify_reference']['performance_comment'] ?></textarea>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <label><input type="radio" name="student_performance" value="Excellent Performance" <?php if($result['verify_reference']['performance_rating'] == 'Excellent Performance') { echo 'checked'; } ?>>&nbsp;&nbsp;Excellent Performance</label><br>
                                    <ul>
                                        <li>The student has exceeded all performance expectations in respect to output, quality standards, delivery of goals and assignments.</li>
                                        <li>Receiving this rating means the manager is delighted with this student's performance.</li>
                                    </ul>
                                </fieldset>

                                <fieldset>
                                    <label><input type="radio" name="student_performance" value="Very Good Performance" <?php if($result['verify_reference']['performance_rating'] == 'Very Good Performance') { echo 'checked'; } ?>>&nbsp;&nbsp;Very Good Performance</label><br>
                                    <ul>
                                        <li>The student has met all and exceeded some performance expectations in respect to output, quality standards, delivery of goals and assignments.</li>
                                        <li>Receiving this rating means the manager is very pleased with this student's performance.</li>
                                    </ul>
                                </fieldset>

                                <fieldset>
                                    <label><input type="radio" name="student_performance" value="Good Performance" <?php if($result['verify_reference']['performance_rating'] == 'Good Performance') { echo 'checked'; } ?>>&nbsp;&nbsp;Good Performance</label><br>
                                    <ul>
                                        <li>The student meets performance expectations in respect to output, quality standards, delivery of goals and assignments.</li>
                                        <li>Receiving this rating means the manager is mostly satisfied with the student's performance.</li>
                                    </ul>
                                </fieldset>

                                <fieldset>
                                    <label><input type="radio" name="student_performance" value="Satisfactory Performance" <?php if($result['verify_reference']['performance_rating'] == 'Satisfactory Performance') { echo 'checked'; } ?>>&nbsp;&nbsp;Satisfactory Performance</label><br>
                                    <ul>
                                        <li>The student has not fully met the performance expectations in respect to output, quality standards, delivery of goals and assignments.</li>
                                        <li>Receiving this rating means the manager is mostly satisfied with the student's performance.</li>
                                    </ul>
                                </fieldset>

                                <fieldset>
                                    <label><input type="radio" name="student_performance" value="Marginal Performance" <?php if($result['verify_reference']['performance_rating'] == 'Marginal Performance') { echo 'checked'; } ?>>&nbsp;&nbsp;Marginal Performance</label><br>
                                    <ul>
                                        <li>Overall performance requires improvement and/or certain key aspects of performance require improvement while other aspects may be satisfactory.</li>
                                        <li>Receiving this rating means the manager is displeased with this student's performance.</li>
                                    </ul>
                                </fieldset>

                                <fieldset>
                                    <label><input type="radio" name="student_performance" value="Unsatisfactory Performance" <?php if($result['verify_reference']['performance_rating'] == 'Unsatisfactory Performance') { echo 'checked'; } ?>>&nbsp;&nbsp;Unsatisfactory Performance</label><br>
                                    <ul>
                                        <li>The student did not meet performance requirements.</li>
                                    </ul>
                                </fieldset>

                            </div>

                        </div>

                        <div class="row">
                            <div class="well">
                                <fieldset class="form-group">
                                    <label>Supervisor's Comments (Please comment on your overall performance including your ability to achieve learning objectives and your future employment expectations)</label>
                                    <textarea name="super_comment" class="form-control"><?php echo $result['verify_reference']['super_comment'] ?></textarea>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Student's Comments (Please comment on your overall performance including your ability to achieve learning objectives and your future employment expectations)</label>
                                    <textarea name="st_comment" class="form-control"><?php echo $result['verify_reference']['student_comments'] ?></textarea>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Supervisor's Recommendations (Please provide your recommendations for the student's personal and/or professional development (optional))</label>
                                    <textarea name="st_recomend" class="form-control"><?php echo $result['verify_reference']['supervisor_recommendation'] ?></textarea>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Did you review the completed evaluation form with the student? (Please ensure the student has a copy)*</label><br/>
                                    <input type="radio" name="st_review" value="Yes" <?php if($result['verify_reference']['st_evaluation'] == 'Yes') { echo 'checked'; } ?>> Yes &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="st_review" value="No" <?php if($result['verify_reference']['st_evaluation'] == 'No') { echo 'checked'; } ?>> No
                                </fieldset>
                                <fieldset class="form-group">
                                    <h4>Next Work Term</h4>
                                    <label>Do you wish to have the student return for the next work term? *</label><br/>
                                    <input type="radio" name="st_next_work" value="Yes" id="st_review_id_yes" class='st_review_id' <?php if($result['verify_reference']['next_work_term'] == 'Yes') { echo 'checked'; } ?>> Yes &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="st_next_work" value="No" class='st_review_id' <?php if($result['verify_reference']['next_work_term'] == 'No') { echo 'checked'; } ?>> No&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="st_next_work" value="Not applicable" class='st_review_id' <?php if($result['verify_reference']['next_work_term'] == 'Not applicable') { echo 'checked'; } ?>> Not applicable
                                </fieldset>
                                <fieldset class="form-group" id="re_emply">
                                    <label>If yes, have you offered to re-employ the student for the next work term?</label><br/>
                                    <input type="radio" name="st_re_emply" value="Yes" id="re_emply_id_yes" class="re_emply_id" <?php if($result['verify_reference']['re_employ'] == 'Yes') { echo 'checked'; } ?>> Yes &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="st_re_emply" value="No" class="re_emply_id" <?php if($result['verify_reference']['re_employ'] == 'No') { echo 'checked'; } ?>> No&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="st_re_emply" value="To be determined" class="re_emply_id" <?php if($result['verify_reference']['re_employ'] == 'To be determined') { echo 'checked'; } ?>> To be determined
                                </fieldset>
                                <fieldset class="form-group" id="accept">
                                    <label>If yes, was your offer</label><br/>
                                    <input type="radio" name="st_offer" class="your_offer" id="your_offer_accept" value="Accepted" <?php if($result['verify_reference']['st_offer'] == 'Accepted') { echo 'checked'; } ?>> Accepted &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="st_offer" class="your_offer" value="Declined" <?php if($result['verify_reference']['st_offer'] == 'Declined') { echo 'checked'; } ?>> Declined
                                </fieldset>
                                <div id="work_date">
                                    <fieldset class="form-group">
                                        <label>Work term Dates</label><br/>
                                        From <input type="date" class="form-control" name="st_from_date" value="<?php echo $result['verify_reference']['work_date_from'] ?>">
                                        To <input type="date" class="form-control" name="st_to_date" value="<?php echo $result['verify_reference']['work_date_to'] ?>">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <h4>Supervisor</h4>
                                        <div class="col-md-6">
                                            <label>Name</label><br/>
                                            <input type="text" class="form-control" name="super_name" value="<?php echo $result['verify_reference']['super_name'] ?>">
                                            <label>Signature </label><br/>
                                            <input type="text" class="form-control" name="super_sign" value="<?php echo $result['verify_reference']['super_sign'] ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Title </label><br/>
                                            <input type="text" class="form-control" name="super_title" value="<?php echo $result['verify_reference']['super_title'] ?>">
                                            <label>Date </label><br/>
                                            <input type="date" class="form-control" name="super_date" value="<?php echo $result['verify_reference']['super_date'] ?>">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <h4>Student</h4>
                                        <label>Signature </label><br/>
                                        <input type="text" class="form-control" name="st_sign" value="<?php echo $result['verify_reference']['st_sign'] ?>">
                                        <label>Date </label><br/>
                                        <input type="date" class="form-control" name="st_date" value="<?php echo $result['verify_reference']['st_date'] ?>">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <h4>Management/Human Resources </h4>
                                        <label>Signature </label><br/>
                                        <input type="text" class="form-control" name="hr_sign" value="<?php echo $result['verify_reference']['hr_sign'] ?>">
                                        <label>Title </label><br/>
                                        <input type="text" class="form-control" name="hr_title" value="<?php echo $result['verify_reference']['hr_title'] ?>">
                                        <label>Date </label><br/>
                                        <input type="date" class="form-control" name="hr_date" value="<?php echo $result['verify_reference']['hr_date'] ?>">
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info">Save</button>
                        </div>

                    </form>
                </div>
                <?php } ?>

            </div>
        </div>

        <footer class="main-footer left_padding">
            <div class="pull-right hidden-xs">
                <b>Design By </b><a href="https://www.acumaxtechnologies.com/"> &nbsp; www.acumaxtechnologies.com</a>
            </div>
            <strong>Copyright &copy;2017 <a href="https://www.mycareerdashboard.com/">www.mycareerdashboard.com</a>.</strong> All rights
            reserved.
        </footer>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <?php echo $this->Html->script('industry/plugins/jQuery/jquery-2.2.3.min.js') ?>

        <script>
            $('.st_review_id').click(function () {
                if ($(this).val() == 'Yes') {
                    $('#re_emply').show();
                }
                if ($(this).val() == 'No' || $(this).val() == 'Not applicable') {
                    $('#re_emply').hide();
                }
            });

            $('.re_emply_id').click(function () {
                if ($(this).val() == 'Yes') {
                    $('#accept').show();
                }
                if ($(this).val() == 'No' || $(this).val() == 'To be determined') {
                    $('#accept').hide();
                }
            });

            $('.your_offer').click(function () {
                if ($(this).val() == 'Accepted') {
                    $('#work_date').show();
                }
                if ($(this).val() == 'Declined') {
                    $('#work_date').hide();
                }
            });
        </script>

        <?php echo $this->Html->script('industry/bootstrap/js/bootstrap.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/fastclick/fastclick.js') ?>
        <?php echo $this->Html->script('industry/dist/js/app.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/sparkline/jquery.sparkline.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>
        <?php echo $this->Html->script('industry/plugins/slimScroll/jquery.slimscroll.min.js') ?>
        <?php echo $this->Html->script('industry/plugins/chartjs/Chart.min.js') ?>
        <?php echo $this->Html->script('industry/dist/js/demo.js') ?>

        <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
        <script>
            $('.phone').inputmask("1-(999) 999-9999");
        </script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(document).ready(function () {
                if ($('[type="date"]').prop('type') != 'date') {
                    $('[type="date"]').datepicker();
                }
            });
            if ($('#st_review_id_yes').prop('checked')) {
                $('#re_emply').show();
            }

            if ($('#re_emply_id_yes').prop('checked')) {
                $('#accept').show();
            }

            if ($('#your_offer_accept').prop('checked')) {
                $('#work_date').show();
            }

            $('.white1').click(function () {
                $('.white1').removeClass('gray1');
                $(this).addClass('gray1');
            });

            $('.white2').click(function () {
                $('.white2').removeClass('gray2');
                $(this).addClass('gray2');
            });

            $('.white3').click(function () {
                $('.white3').removeClass('gray3');
                $(this).addClass('gray3');
            });

            $('.white4').click(function () {
                $('.white4').removeClass('gray4');
                $(this).addClass('gray4');
            });

            $('.white5').click(function () {
                $('.white5').removeClass('gray5');
                $(this).addClass('gray5');
            });

            $('.white6').click(function () {
                $('.white6').removeClass('gray6');
                $(this).addClass('gray6');
            });

            $('.white7').click(function () {
                $('.white7').removeClass('gray7');
                $(this).addClass('gray7');
            });

            $('.white8').click(function () {
                $('.white8').removeClass('gray8');
                $(this).addClass('gray8');
            });

            $('.white9').click(function () {
                $('.white9').removeClass('gray9');
                $(this).addClass('gray9');
            });

            $('.white10').click(function () {
                $('.white10').removeClass('gray10');
                $(this).addClass('gray10');
            });

            $('.white11').click(function () {
                $('.white11').removeClass('gray11');
                $(this).addClass('gray11');
            });

            $('.white12').click(function () {
                $('.white12').removeClass('gray12');
                $(this).addClass('gray12');
            });

            $('.white13').click(function () {
                $('.white13').removeClass('gray13');
                $(this).addClass('gray13');
            });

            $('.white14').click(function () {
                $('.white14').removeClass('gray14');
                $(this).addClass('gray14');
            });

            $('.white15').click(function () {
                $('.white15').removeClass('gray15');
                $(this).addClass('gray15');
            });

            $('.white16').click(function () {
                $('.white16').removeClass('gray16');
                $(this).addClass('gray16');
            });
        </script>

        <script>
            /*$('#form_id').submit(function (e) {
             if ($(this).find('.required').filter(function () {
             return this.value === ''
             }).length > 0) {
             e.preventDefault();
             alert("One or more fields cannot be blank");
             return false;
             }
             });*/
        </script>

    </body>
</html>