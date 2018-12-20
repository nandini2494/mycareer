<?php

echo " "; ?>
<nav class="navbar navbar-inverse navbar-fixed-top normal" role="navigation">
    <div class='row bg_min_logo'>
        <div class='container'>
            <div class='col-lg-12 col-sm-12 col-xs-12 col-md-12'>
                <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6">
                    <p class='pull-left'>
                        <i class="fa fa-envelope" aria-hidden="true"></i>  &nbsp; &nbsp;info@mycareerdashboard.com
                    </p>
                </div>
                <div class="col-lg-8 col-sm-6 col-xs-12 col-md-6 pull-right">
                    <div class="col-lg-8 col-sm-6 col-xs-12 col-md-6">
                        <p class="app_data_view">Application Tracking & Career Management </p>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-12 col-md-6">
                        <div id="google_translate_element" class="pull-right"></div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-xs-12 col-md-6">
                        <a href="https://www.facebook.com/mycareerdashboardpage/" class="pull-right"><i class="fa fa-facebook icons_used"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class='div_padding_use'>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/co-logo1.png" alt="co-logo"></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <div class='form-group'>
                    <ul class='pull-right div_content div_use_only_blind_desktop'>
                        <li><input type='text' placeholder="Search"/></li>

                        <li>
                            <input type='submit' value='Submit'/>
                        </li>                                

                        <li><p>A Service of Career Innovations Inc</p></li>   


                    </ul>
                    <!-- <ul class='div_button_data'>
                        <li>
                            <button data-toggle="modal" data-target="#myModalReport">Report</button>
                        </li>
                    </ul> -->
                    <ul class="nav navbar-nav navbar-right nav_use_custom div_use_only_content div_content">
                        <ul class='div_content content_div_word'>
                            <li>
                                <input type='text' placeholder="Search"/> <input type='submit' value='Submit'/>
                            </li>
                        </ul>
                        <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'index')) ? 'active' : '' ?>"><a href="index.html">Home</a></li>                        
                        <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'programs_data')) ? 'active' : '' ?>"><a href="programs_data.html">Programs</a></li>                        
                        <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'sign_up')) ? 'active' : '' ?>"><a href="sign_up.html">Sign-Up</a></li>                        
                        <!-- <li><a href="academic_goals.html">GOALS</a>
                        <li><a href="career.html">Career Contacts</a>
                        </li> -->
                        <li><a  data-toggle="modal" data-target="#myModal" class='po_inter'>MCD LogIn</a> </li>                        
                        <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'about')) ? 'active' : '' ?>"><a href="about.html">About Us</a> </li>                       
                        <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'my_career')) ? 'active' : '' ?>"><a href="my_career.html">RECRUIT & HIRE</a> </li>                       
                        <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'contact')) ? 'active' : '' ?>"><a href="contact.html">Contact Us</a></li> 
                        <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'school_registration')) ? 'active' : '' ?>"><a href="school_registration.html">School Registration</a></li> 
                        <!-- <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'career_conection')) ? 'active' : '' ?>"><a href="career_conection.html">Career Connections</a></li> -->
                        <!-- <li><a  data-toggle="modal" data-target="#myModalReport" class='po_inter'>Report a problem</a> </li> -->    
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class='row padding_row div_mobile_none'>
        <div class='container'>
            <ul class="nav navbar-nav navbar-right nav_use_custom">
                <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'index')) ? 'active' : '' ?>"><a href="index.html">Home</a></li>                        
                <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'programs_data')) ? 'active' : '' ?>"><a href="programs_data.html">Programs</a></li>                        
                <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'sign_up')) ? 'active' : '' ?>"><a href="sign_up.html">Sign-Up</a></li>                        
                <!-- <li><a href="academic_goals.html">GOALS</a>
                <li><a href="career.html">Career Contacts</a>
                </li> -->
                <li><a data-toggle="modal" data-target="#myModal" class='po_inter'>MCD LogIn</a> </li>                        
                <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'about')) ? 'active' : '' ?>"><a href="about.html">About Us</a> </li>                       
                <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'my_career')) ? 'active' : '' ?>"><a href="my_career.html">RECRUIT & HIRE</a> </li>                       
                <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'contact')) ? 'active' : '' ?>"><a href="contact.html">Contact Us</a></li>  
                <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'school_registration')) ? 'active' : '' ?>"><a href="school_registration.html">School Registration</a></li>                
                <!-- <li class="<?php echo (($this->params['controller'] == 'pages') && ($this->action == 'career_conection')) ? 'active' : '' ?>"><a href="career_conection.html">Career Connections</a></li>  -->
                <!-- <li><a  data-toggle="modal" data-target="#myModalReport" class='po_inter'>Report a problem</a> </li> -->
            </ul>
        </div>
    </div>
</nav>  