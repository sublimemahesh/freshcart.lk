<!DOCTYPE HTML>
<?php
include_once(dirname(__FILE__) . './class/include.php');
?>
<html lang="en-US"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Super Shop is new Wordpress theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Wordpress theme, with multiple versions for homepage and multiple templates for sub pages as well" />
        <meta name="keywords" content="Super Shop,7uptheme" />
        <meta name="robots" content="noodp,index,follow" />
        <meta name='revisit-after' content='1 days' />
        <title>Super Shop | My Account</title>
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
                                <h2 class="title-shop-page">My Account</h2>

                                <div class="col-md-6 col-md-offset-3">
                                    <div class="panel panel-login">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <a href="#" class="active" id="login-form-link">LOGIN</a>
                                                </div>
                                                <div class="col-xs-6">
                                                    <a href="#" id="register-form-link">REGISTER</a>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form id="login-form" action=" " method="post" role="form" style="display: block;" autocomplete="off">
                                                        <div class="form-group">
                                                            <input type="email" name="user_email" id="user_email" tabindex="1" class="form-control" placeholder="Email " value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="user_password" id="user_password" tabindex="2" class="form-control" placeholder="Password">
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                            <label for="remember"> Remember Me</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row text-center">
                                                                <div class="col-sm-6 col-sm-offset-3">
                                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="text-center">
                                                                        <a href=" " tabindex="5" class="forgot-password">Forgot Password?</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <form id="register-form" action=" " method="post" role="form" style="display: none;" autocomplete="off">
                                                        <div class="form-group">
                                                            <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                                        </div> 
                                                        <div class="form-group">
                                                            <input type="text" name="phone_number" id="phone_number" tabindex="1" class="form-control" placeholder="Contact Number (07x xxx xxxx)" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" type="text" id="district" autocomplete="off" name="district">
                                                                <option class="active light-c"> -- Please  Select Country State -- </option>
                                                                <?php
                                                                $DISTRICT = new District(NULL);
                                                                foreach ($DISTRICT->all() as $key => $district) {
                                                                    ?>
                                                                    <option value="<?php echo $district['id']; ?>"><?php echo $district['name']; ?></option>

                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" autocomplete="off" type="text" id="city-bar" autocomplete="off" name="city"  >
                                                                <option value=""> -- Please Select a Country State First -- </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="address" id="address" tabindex="2" class="form-control" placeholder="Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password" id="password" tabindex="2"  class="form-control" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-sm-offset-3">
                                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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
    <script src="js/ajax/city.js" type="text/javascript"></script>
    <script src="js/ajax/registration.js" type="text/javascript"></script>

    <script src="control-panel/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/ajax/login.js" type="text/javascript"></script>
    <script>

        $(function () {

            $('#login-form-link').click(function (e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function (e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });
    </script>

</body>
</html>