<?php

echo "" ?>

<style>
    .password_type{
        font-size: 15px;
        width: 100%;
        padding: 8px 7px;
        border-radius: 2px;
        border: solid 1.7px #545454;
    }
    .label_type{
        font-weight: 600;
        font-size: 17px;
    }
    #msg {
        border: 1px solid #000;
        color: red;
        padding-left:10px; 
        display:none;
    }
</style>	

<header class="main-header">

    <!-- Logo -->

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

        <a href="admin_dashboard.html" class="logo">
            <span class="logo-lg">
                <img src="<?php echo DOMAIN_NAME ?>img/co-logo.png" class="img-responsive imgr_use_logo" /></span>
        </a>
        <div class="agileits_logo">

        </div>


        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">


                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo DOMAIN_NAME ?>img/user.png" class="user-image" alt="User Image">
                        <span class="hidden-xs">John Doe    </span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="user-header">
                            <img src="<?php echo DOMAIN_NAME ?>img/user.png" class="img-circle" alt="User Image">

                            <p>
                                John Doe     - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>

                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>

                        </li>

                        <li class="user-footer">

                            <div class="pull-right">
                                <a href="<?php echo Router::url(['controller'=>'admins/logout']) ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <i class="fa fa-gears"></i>
                    </a>
                    <ul class="dropdown-menu">    



                        <li class="user-footer">




                            <a href="#" data-toggle="modal" data-target="#myModal"> <i class="fa fa-key" aria-hidden="true"></i> &nbsp; Change Password</a>

                            <div class="pull-right">
                                <a href="<?php echo Router::url(['controller'=>'admins/logout']) ?>" class="btn btn-success btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

    </nav>
</header>

<div id="myModal" class="modal fade" role="dialog">
    <form id="change_password" method="post">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Change Password</h4>
                </div>
                <div class="modal-body">
                    <div id="msg"></div>
                    <div class='form-group'>
                        <label class='order_id_use label_type'>Old Password</label><div class='clearfix'></div>
                        <input class="password_type" type='password' name='old_password' placeholder='Old Password'>                                                          
                    </div>
                    <div class='form-group'>
                        <label class='order_id_use label_type'>New Password</label><div class='clearfix'></div>
                        <input class="password_type" type='password' name='new_password' placeholder='New Password'>                                                          
                    </div>
                    <div class='form-group'>
                        <label class='order_id_use label_type'>Confirm New Password</label><div class='clearfix'></div>
                        <input class="password_type" type='password' name='confirm_password' placeholder='Confirm New Password'>                                                          
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $("#change_password").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo Router::url(['controller'=>'admins/change_password']) ?>",
            type: "post",
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#msg").html(data);
                $("#msg").slideDown('slow');
                setTimeout(function () {
                    $("#msg").slideUp('slow');
                }, 5000);
            }
        });
    });
</script>	


