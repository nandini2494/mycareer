<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Dashboard</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <?php echo $this->Html->css('admin/bootstrap/css/bootstrap.min.css') ?>

        <style>
            body {background: url(img/cloud.jpg) repeat 0 0; }

            .form-signin input[type="text"] {
                margin-bottom: 10px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }
            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            .form-signin .form-control {
                position: relative;
                font-size: 16px;
                font-family: 'Open Sans', Arial, Helvetica, sans-serif;
                height: auto;
                padding: 10px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .vertical-offset-100 {
                padding-top: 100px;
            }
            .img-responsive {
                display: block;
                max-width: 100%;
                height: auto;
                margin: auto;
            }
            .img_locgo_mycareer{
                width: 29%;
                margin: 0 auto;
                text-align: center;
                display: block;
                padding: 0.6em 0em;
            }
            .panel {
                margin-bottom: 20px;
                background-color: rgba(255, 255, 255, 0.75);
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
                box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            }
        </style>
    </head>

    <body>

        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <div class="row-fluid user-row">
                                <img class="img_locgo_mycareer" src="<?php echo DOMAIN_NAME ?>img/co-logo.png" class="img-responsive">
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-signin" id="admin_signIn" method="post">                              
                                <?php if(isset($message)) { ?>
                                <p style="background-color: white; color: red; border: 1px solid grey;padding-left:10px;"><?php echo $message; ?></p>
                                <?php } ?>
                                <fieldset>
                                    <label class="panel-login">
                                        <div class="login_result"></div>
                                    </label>
                                    <input class="form-control" placeholder="Username" name="username" type="text" required="">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required="">
                                    <input class="form-control" placeholder="Enter Email" name="website" type="text" required="">
                                    <input class="form-control" placeholder="Reference Id" name="ref_id" type="text" required="">
                                    <br></br>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Login »">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://mymaplist.com/js/vendor/TweenLite.min.js"></script>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    </body>

</html>

