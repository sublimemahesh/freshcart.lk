<!DOCTYPE HTML>
<?php
include './class/include.php';
?>
<html lang="en-US"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Super Shop is new Wordpress theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Wordpress theme, with multiple versions for homepage and multiple templates for sub pages as well" />
        <meta name="keywords" content="Super Shop,7uptheme" />
        <meta name="robots" content="noodp,index,follow" />
        <meta name='revisit-after' content='1 days' />
        <title>Supiri market ||  Registration</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="css/libs/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/libs/font-linearicons.css"/>
        <link rel="stylesheet" type="text/css" href="css/libs/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/libs/bootstrap-theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/libs/jquery.fancybox.css"/>
        <link rel="stylesheet" type="text/css" href="css/libs/jquery-ui.css"/>
        <link rel="stylesheet" type="text/css" href="css/libs/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="css/libs/owl.transitions.css"/>
        <link rel="stylesheet" type="text/css" href="css/libs/owl.theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/libs/settings.css"/>
        <link rel="stylesheet" type="text/css" href="css/theme.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all"/>
        <link href="css/login-css.css" rel="stylesheet" type="text/css"/>
        <link href="control-panel/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="css/modle-login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="wrap">
            <?php include './header.php'; ?>
            <!-- End Header -->
            <div id="content">
                <div class="content-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1"> 

                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3"> 
                                        <div class="modal-dialog modal-login">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="avatar">
                                                        <img src="images/default-man.png" alt="Member" class="img-circle">
                                                    </div>				
                                                    <h4 class="modal-title">Member Login</h4>	
                                                </div>
                                                <div class="modal-body">
                                                    <form id="login-forms" action=" " method="post" role="form"   autocomplete="off">
                                                        <div class="form-group">
                                                            <input type="email" name="user_email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                                        </div> 
                                                        <div class="form-group">
                                                            <input type="password" name="user_password" id="password" tabindex="2"  class="form-control" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit"   id="login" tabindex="4" class="form-control btn btn-register" value="Login">
                                                        </div>
                                                    </form> 
                                                </div>
                                                <div class="modal-footer ">
                                                    <div class="pull-left">
                                                        <a href="forget-password.php">Forgot Password?</a>
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="registration.php">Not a member?  <span style="color: blue;">Sign Up</span></a>
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content Page -->
        </div>
        <!-- End Content -->
        <?php include './footer.php'; ?>
        <!-- End Footer -->
    </div>
    <script type="text/javascript" src="js/libs/jquery-3.1.1.min.js"></script> 
    <script type="text/javascript" src="js/libs/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/libs/jquery.fancybox.js"></script>
    <script type="text/javascript" src="js/libs/jquery-ui.js"></script>
    <script type="text/javascript" src="js/libs/owl.carousel.js"></script>
    <script type="text/javascript" src="js/libs/slideshow/jquery.themepunch.revolution.html"></script>
    <script type="text/javascript" src="js/libs/slideshow/jquery.themepunch.plugins.min.html"></script>
    <script type="text/javascript" src="js/libs/jquery.jcarousellite.min.js"></script>
    <script type="text/javascript" src="js/libs/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="js/theme.js"></script>

    <script src="control-panel/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/ajax/login.js" type="text/javascript"></script>


</body>
</html>

