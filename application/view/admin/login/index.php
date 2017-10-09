<?php $this->renderFeedbackMessages(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo Config::get('URL'); ?>admin/css/bootstrap.min.css" rel="stylesheet"> 

        <!-- MetisMenu CSS -->
        <link href="<?php echo Config::get('URL'); ?>admin/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo Config::get('URL'); ?>admin/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo Config::get('URL') ?>admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo Config::get('URL'); ?>login/login" method = "post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="user_name" type = "text"  autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                                    </div>
                                    <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />

                                    <label for="set_remember_me_cookie" class="remember-me-label">
                                        <input type="checkbox" name="set_remember_me_cookie" class="remember-me-checkbox" />
                                        Remember me for 2 weeks
                                    </label>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <?php if (!empty($this->redirect)) { ?>
                                        <input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" />
                                    <?php } ?>
                                    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo Config::get('URL') ?>admin/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo Config::get('URL') ?>admin/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo Config::get('URL') ?>admin/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo Config::get('URL') ?>admin/js/startmin.js"></script>

    </body>
</html>
