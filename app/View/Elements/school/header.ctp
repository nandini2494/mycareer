<?php

echo " "; ?>
<nav class="navbar navbar-inverse navbar-fixed-top normal" role="navigation">
    <div class='row bg_min_logo'>
        <div class='container container1'>
            <div class='col-lg-12 col-sm-12 col-xs-12 col-md-12'>
                <p class='pull-left'>
                    <i class="fa fa-envelope" aria-hidden="true"></i>  &nbsp; &nbsp;info@mycareerdashboard.com
                </p>               

                <p class='pull-right'>Application Tracking & Career Management </p>
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
                <ul  class='display_style_use'>
                    <li><a class="navbar-brand" href="school_dashboard.html"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/co-logo.png" alt="co-logo"></a></li>
                    <li><a class="navbar-brand" href="school_dashboard.html"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/Capture.png" alt="co-logo"></a></li>
                    <?php foreach ($logo as $image) {
                    if(!empty($image['school_registration']['logo'])) { ?>
                    <li><a class="navbar-brand" href="school_dashboard.html"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?><?php echo $image['school_registration']['logo'] ?>" alt="co-logo"></a></li>
                    <?php } else { ?>
                    <li><a class="navbar-brand" href="school_dashboard.html"><img class="img-responsive" src="<?php echo DOMAIN_NAME ?>img/school-1.png" alt="co-logo"></a></li>
                    <?php } } ?>
                </ul>
            </div>
            <div id="navbar" class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right nav_use_custom">

                    <li class="log_out">
                        <a href="<?php echo Router::url(['controller'=>'schools/logout']) ?>">
                            <p><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</p>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav> 