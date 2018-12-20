<?php

echo ""; ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!--logo-->
        <div class="clearfix"></div>

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo DOMAIN_NAME ?>img/user.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>John Doe</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <hr/>
        <ul class="sidebar-menu">
            <!-- <li class="header">MAIN NAVIGATION</li>-->
            <li class="treeview <?php echo (($this->params['controller'] == 'admins') && ($this->action == 'index')) ? 'active' : '' ?>" id="active">
                <a href="admin_dashboard.html">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>
            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'invited')) ? 'active' : '' ?>">
                <a href="invited.html">
                    <i class="fa fa-paper-plane"></i> <span>Applicant Invite </span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>
            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'ambasdor_prgrm')) ? 'active' : '' ?>">
                <a href="ambasdor_prgrm.html">
                    <i class="fa fa-file"></i> <span>Ambassador Apply</span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>
            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'user_referal_list')) ? 'active' : '' ?>">
                <a href="user_referal_list.html">
                    <i class="fa fa-list"></i> <span>Referal List</span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>
            <li class="treeview <?php echo (($this->params['controller'] == 'admins') && (($this->action == 'canada_student_trail') || ($this->action == 'canada_career_starter') || ($this->action == 'canada_career_advanced') || ($this->action == 'canada_access360') || ($this->action == 'canada_unemployed_trail') || ($this->action == 'canada_unemployed_career_starter') || ($this->action == 'canada_unemployed_career_advanced') || ($this->action == 'canada_unemployed_career_access360') || ($this->action == 'canada_careeradvance_trail') || ($this->action == 'canada_careeradvance_career_starter') || ($this->action == 'canada_careeradvance_career_advance') || ($this->action == 'canada_careeradvance_acess360'))) ? 'active' : '' ?>">
                <a href="#">
                                <?php $total_canada = ($canada_student_trail + $canada_student_starter + $canada_student_advance + $canada_student_acess360 + $canada_unemployed_trail + $canada_unemployed_starter + $canada_unemployed_advance + $canada_unemployed_acess360 + $canada_advance_trail + $canada_advance_starter + $canada_advance_advance + $canada_advance_acess360); ?>
                    <i class="fa fa-map-signs" aria-hidden="true"></i><span>Canada</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg1-red"><?php if($total_canada > 0) { echo $total_canada; } ?></small>
                    </span>
                </a>
                <ul class="treeview-menu menu-open">
                    <li class='treeview <?php echo (($this->params['controller'] == 'admins') && (($this->action == 'canada_student_trail') || ($this->action == 'canada_career_starter') || ($this->action == 'canada_career_advanced') || ($this->action == 'canada_access360'))) ? 'active' : '' ?>'><a href="#"><i class="fa fa-user"></i>Students<span class="pull-right-container">
                                <span class="pull-right-container">
                                    <small class="label pull-right bg1-red"><?php if(($canada_student_trail + $canada_student_starter + $canada_student_advance + $canada_student_acess360) > 0) { echo ($canada_student_trail + $canada_student_starter + $canada_student_advance + $canada_student_acess360); } ?></small>
                                </span>
                            </span>
                        </a>
                        <ul class="treeview-menu menu-open">                           
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'canada_career_starter')) ? 'active_sub_sub' : '' ?>"><a href='canada_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($canada_student_starter > 0) { echo $canada_student_starter; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'canada_career_advanced')) ? 'active_sub_sub' : '' ?>"><a href='canada_career_advanced.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($canada_student_advance > 0) { echo $canada_student_advance; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'canada_access360')) ? 'active_sub_sub' : '' ?>"><a href='canada_access360.html'>All access 360<small class="label pull-right bg1-red"><?php if($canada_student_acess360 > 0) { echo $canada_student_acess360; } ?></small></a></li>
                        </ul>
                    </li>

                    <li class='treeview <?php echo (($this->params['controller'] == 'admins') && (($this->action == 'canada_unemployed_trail') || ($this->action == 'canada_unemployed_career_starter') || ($this->action == 'canada_unemployed_career_advanced') || ($this->action == 'canada_unemployed_career_access360'))) ? 'active' : '' ?>'><a href="#"><i class="fa fa-male" aria-hidden="true"></i>Unemployed <span class="pull-right-container">
                                <span class="pull-right-container">
                                    <small class="label pull-right bg1-red"><?php if(($canada_unemployed_trail + $canada_unemployed_starter + $canada_unemployed_advance + $canada_unemployed_acess360) > 0) { echo ($canada_unemployed_trail + $canada_unemployed_starter + $canada_unemployed_advance + $canada_unemployed_acess360); } ?></small>
                                </span>
                            </span></a>
                        <ul class="treeview-menu menu-open">                            
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'canada_unemployed_career_starter')) ? 'active_sub_sub' : '' ?>"><a href='canada_unemployed_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($canada_unemployed_starter > 0) { echo $canada_unemployed_starter; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'canada_unemployed_career_advanced')) ? 'active_sub_sub' : '' ?>"><a href='canada_unemployed_career_advanced.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($canada_unemployed_advance > 0) { echo $canada_unemployed_advance; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'canada_unemployed_career_access360')) ? 'active_sub_sub' : '' ?>"><a href='canada_unemployed_career_access360.html'>All access 360<small class="label pull-right bg1-red"><?php if($canada_unemployed_acess360 > 0) { echo $canada_unemployed_acess360; } ?></small></a></li>
                        </ul>
                    </li>

                    <li class='treeview <?php echo (($this->params['controller'] == 'admins') && (($this->action == 'canada_careeradvance_trail') || ($this->action == 'canada_careeradvance_career_starter') || ($this->action == 'canada_careeradvance_career_advance') || ($this->action == 'canada_careeradvance_acess360'))) ? 'active' : '' ?>'><a href="#"><i class="fa fa-star" aria-hidden="true"></i>Career Advance
                            <span class="pull-right-container">
                                <span class="pull-right-container">
                                    <small class="label pull-right bg1-red"><?php if(($canada_advance_trail + $canada_advance_starter + $canada_advance_advance + $canada_advance_acess360) > 0) { echo ($canada_advance_trail + $canada_advance_starter + $canada_advance_advance + $canada_advance_acess360); } ?></small>
                                </span>
                            </span></a> 
                        <ul class="treeview-menu menu-open">                            
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'canada_careeradvance_career_starter')) ? 'active_sub_sub' : '' ?>"><a href='canada_careeradvance_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($canada_advance_starter > 0) { echo $canada_advance_starter; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'canada_careeradvance_career_advance')) ? 'active_sub_sub' : '' ?>"><a href='canada_careeradvance_career_advance.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($canada_advance_advance > 0) { echo $canada_advance_advance; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'canada_careeradvance_acess360')) ? 'active_sub_sub' : '' ?>"><a href='canada_careeradvance_acess360.html'>All access 360<small class="label pull-right bg1-red"><?php if($canada_advance_acess360 > 0) { echo $canada_advance_acess360; } ?></small></a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="treeview <?php echo (($this->params['controller'] == 'admins') && (($this->action == 'america_student_trail') || ($this->action == 'america_student_career_starter') || ($this->action == 'america_student_career_advanced') || ($this->action == 'america_student_access360') || ($this->action == 'america_unemployed_trail') || ($this->action == 'america_unemployed_career_starter') || ($this->action == 'america_unemployed_career_advance') || ($this->action == 'america_unemployed_access360') || ($this->action == 'america_career_advance_trail') || ($this->action == 'america_career_advance_career_starter') || ($this->action == 'america_career_advance_career_advance') || ($this->action == 'america_career_advance_access360'))) ? 'active' : '' ?>">
                            <?php $total_america = ($america_student_trail + $america_student_starter + $america_student_advance + $america_student_acess360 + $america_unemployed_trail + $america_unemployed_starter + $america_unemployed_advance + $america_unemployed_acess360 + $america_advance_trail + $america_advance_starter + $america_advance_advance + $america_advance_acess360); ?>
                <a href="#">
                    <i class="fa fa-map-signs" aria-hidden="true"></i><span>America</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg1-red"><?php if($total_america > 0) { echo $total_america; } ?></small>
                    </span>
                </a>
                <ul class="treeview-menu menu-open">
                    <li class='treeview <?php echo (($this->params['controller'] == 'admins') && (($this->action == 'america_student_trail') || ($this->action == 'america_student_career_starter') || ($this->action == 'america_student_career_advanced') || ($this->action == 'america_student_access360'))) ? 'active' : '' ?>'><a href=""><i class="fa fa-user"></i>Students<span class="pull-right-container">
                                <span class="pull-right-container">
                                    <small class="label pull-right bg1-red"><?php if(($america_student_trail + $america_student_starter + $america_student_advance + $america_student_acess360) > 0) { echo ($america_student_trail + $america_student_starter + $america_student_advance + $america_student_acess360); } ?></small>
                                </span>
                            </span>
                        </a>
                        <ul class="treeview-menu menu-open">                           
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'america_student_career_starter')) ? 'active_sub_sub' : '' ?>"><a href='america_student_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($america_student_starter > 0) { echo $america_student_starter; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'america_student_career_advanced')) ? 'active_sub_sub' : '' ?>"><a href='america_student_career_advanced.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($america_student_advance > 0) { echo $america_student_advance; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'america_student_access360')) ? 'active_sub_sub' : '' ?>"><a href='america_student_access360.html'>All access 360<small class="label pull-right bg1-red"><?php if($america_student_acess360 > 0) { echo $america_student_acess360; } ?></small></a></li>
                        </ul>

                    </li>

                    <li class='treeview <?php echo (($this->params['controller'] == 'admins') && (($this->action == 'america_unemployed_trail') || ($this->action == 'america_unemployed_career_starter') || ($this->action == 'america_unemployed_career_advance') || ($this->action == 'america_unemployed_access360'))) ? 'active' : '' ?>'><a href="#"><i class="fa fa-male" aria-hidden="true"></i>Unemployed <span class="pull-right-container">
                                <span class="pull-right-container">
                                    <small class="label pull-right bg1-red"><?php if(($america_unemployed_trail + $america_unemployed_starter + $america_unemployed_advance + $america_unemployed_acess360) > 0) { echo ($america_unemployed_trail + $america_unemployed_starter + $america_unemployed_advance + $america_unemployed_acess360); } ?></small>
                                </span>
                            </span>
                        </a>
                        <ul class="treeview-menu menu-open">                           
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'america_unemployed_career_starter')) ? 'active_sub_sub' : '' ?>"><a href='america_unemployed_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($america_unemployed_starter > 0) { echo $america_unemployed_starter; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'america_unemployed_career_advance')) ? 'active_sub_sub' : '' ?>"><a href='america_unemployed_career_advance.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($america_unemployed_advance > 0) { echo $america_unemployed_advance; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'america_unemployed_access360')) ? 'active_sub_sub' : '' ?>"><a href='america_unemployed_access360.html'>All access 360<small class="label pull-right bg1-red"><?php if($america_unemployed_acess360 > 0) { echo $america_unemployed_acess360; } ?></small></a></li>
                        </ul>
                    </li>
                    <li class='treeview <?php echo (($this->params['controller'] == 'admins') && (($this->action == 'america_career_advance_trail') || ($this->action == 'america_career_advance_career_starter') || ($this->action == 'america_career_advance_career_advance') || ($this->action == 'america_career_advance_access360'))) ? 'active' : '' ?>'><a href="#"><i class="fa fa-star" aria-hidden="true"></i>Career Advance
                            <span class="pull-right-container">
                                <span class="pull-right-container">
                                    <small class="label pull-right bg1-red"><?php if(($america_advance_trail + $america_advance_starter + $america_advance_advance + $america_advance_acess360) > 0) { echo ($america_advance_trail + $america_advance_starter + $america_advance_advance + $america_advance_acess360); } ?></small>
                                </span>
                            </span></a> 
                        <ul class="treeview-menu menu-open">                           
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'america_career_advance_career_starter')) ? 'active_sub_sub' : '' ?>"><a href='america_career_advance_career_starter.html'>Career Starter<small class="label pull-right bg1-red"><?php if($america_advance_starter > 0) { echo $america_advance_starter; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'america_career_advance_career_advance')) ? 'active_sub_sub' : '' ?>"><a href='america_career_advance_career_advance.html'>Career Advanced<small class="label pull-right bg1-red"><?php if($america_advance_advance > 0) { echo $america_advance_advance; } ?></small></a></li>
                            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'america_career_advance_access360')) ? 'active_sub_sub' : '' ?>"><a href='america_career_advance_access360.html'>All access 360<small class="label pull-right bg1-red"><?php if($america_advance_acess360 > 0) { echo $america_advance_acess360; } ?></small></a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="treeview <?php echo (($this->params['controller'] == 'admins') && (($this->action == 'view_tax') || ($this->action == 'add_tax'))) ? 'active' : '' ?>">
                <a href="#">
                    <i class="fa fa-money"></i>
                    <span>Tax Details</span>
                    <span class="pull-right-container">

                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'view_tax')) ? 'active_sub_sub' : '' ?>"><a href="view_tax.html"><i class="fa fa-search-plus"></i>View Tax<span class="pull-right-container">
                                <small class="label pull-right bg-red"></small>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'add_tax')) ? 'active_sub_sub' : '' ?>"><a href="add_tax.html"><i class="fa fa-user-plus"></i>Add Tax<span class="pull-right-container">
                                <small class="label pull-right bg-red"></small>
                            </span></a>
                    </li>                                
                </ul>
            </li>

            <li class="<?php echo (($this->params['controller'] == 'admins') && ($this->action == 'payment')) ? 'active' : '' ?>">
                <a href="payment.html">
                    <i class="fa fa-paper-plane"></i> <span>Paypal Payment </span>
                    <span class="pull-right-container">
                       <!--  <small class="label pull-right bg-green">2</small> -->
                    </span>
                </a>
            </li>

            <li class="treeview <?php echo (($this->params['controller'] == 'admins') && ($this->action == 'corporate')) ? 'active' : '' ?>">
                <a href="corporate.html">
                    <i class="fa fa-users"></i>
                    <span> Corporate </span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>

            <li class="treeview <?php echo (($this->params['controller'] == 'admins') && ($this->action == 'school_register')) ? 'active' : '' ?>">
                <a href="school_register.html">
                    <i class="fa fa-registered"></i>
                    <span> Invite School </span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>

            <li class="treeview <?php echo (($this->params['controller'] == 'admins') && ($this->action == 'registered_school')) ? 'active' : '' ?>">
                <a href="registered_school.html">
                    <i class="fa fa-university"></i>
                    <span> Registered School </span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>

            <li class="treeview <?php echo (($this->params['controller'] == 'admins') && ($this->action == 'school_payment')) ? 'active' : '' ?>">
                <a href="school_payment.html">
                    <i class="fa fa-credit-card"></i>
                    <span> School Payment </span>
                    <span class="pull-right-container">

                    </span>
                </a>
            </li>

            <li class="treeview <?php echo (($this->params['controller'] == 'admins') && ($this->action == 'lookup')) ? 'active' : '' ?>">
                <a href="lookup.html">
                    <i class="fa fa-search"></i> <span>Look up </span>
                    <span class="pull-right-container">

                    </span>
                </a>

            </li>

            <li class="treeview <?php echo (($this->params['controller'] == 'admins') && ($this->action == 'seo_data')) ? 'active' : '' ?>">
                <a href="seo_data.html">
                    <i class="fa fa-bar-chart-o"></i> <span>SEO Data</span>
                    <span class="pull-right-container">

                    </span>
                </a>

            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>