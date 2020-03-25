<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["id"])) {
    $CUSTOMER = new Customer($_SESSION["id"]);
}
?> 
<div id="header">
    <div class="container">
        <div class="sub-header4">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="top-info top-info-left">
                        <li class="top-contact">
                            <p><i class="fa fa-phone"></i>: +94 071 666 7557</p>
                        </li>
                        <li class="top-contact">
                            <p><i class="fa fa-envelope"></i>: info@freshcart.lk</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="top-info">
                        <ul class="top-info-right top-info  "> 
                            <li class="top-account has-child">
                                <div id="img_url" ></div>
                                <?php
                                if (isset($CUSTOMER->id)) {
                                    if (empty($CUSTOMER->image_name)) {
                                        ?>

                                        <img src="images/user.png" alt="" class="img-circle" /> <?php echo $_SESSION['name']; ?>
                                    <?php } else { ?>
                                        <img src="upload/customer/profile/thumb/<?php echo $CUSTOMER->image_name ?>" alt="" class="img-circle"/> <?php echo $_SESSION['name']; ?>

                                    <?php } ?>
                                    <ul class="sub-menu-top">
                                       <!--                                    <li><a href="my-account.html"><i class="fa fa-user"></i> Account Info</a></li>
                                                                           <li><a href="#"><i class="fa fa-heart-o"></i> Wish List</a></li>
                                                                           <li><a href="#"><i class="fa fa-toggle-on"></i> Compare</a></li>
                                                                           <li><a href="#"><i class="fa fa-unlock-alt"></i> Sign in</a></li>-->
                                        <li><a href="post-and-get/logout.php"><span> <i class="fa fa-sign-in " ></i>Log Out</span></a></li>
                                    </ul>
                                    <?php
                                } else {
                                    ?> 
                                    <div id="img-t">
                                        <img src="images/user.png" alt="" class="img-circle" /> My Account 
                                    </div>

                                <?php } ?>



                            </li>

                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="#"><i class="fa fa-arrow-circle-o-right"></i>Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sub Header 2 -->
        <div class="header4">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="logo4">
                        <h1 class="hidden">Super Shop</h1>
                        <a href="./"><img src="images/logo.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="smart-search search-form4">
                        <div class="select-category">
                            <a href="#" class="category-toggle-link">All</a>
                            <ul class="list-category-toggle sub-menu-top">
                                <li><a href="#">Computer &amp; Office</a></li>
                                <li><a href="#">Elextronics</a></li>
                                <li><a href="#">Jewelry &amp; Watches</a></li>
                                <li><a href="#">Home &amp; Garden</a></li>
                                <li><a href="#">Bags &amp; Shoes</a></li>
                                <li><a href="#">Kids &amp; Baby</a></li>
                            </ul>
                        </div>
                        <form class="smart-search-form">
                            <input type="text"  name="search" value="Find product, categories..." onfocus="if (this.value == this.defaultValue)
                                        this.value = ''" onblur="if (this.value == '')
                                                    this.value = this.defaultValue" />
                            <input type="submit" value="search" />
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="wrap-register-cart">
                        <div class="register-box">
                            <ul>
                                <li><a  href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-lock"></i> Login </a></li>
                                <li><a href="registration.php"><i class="fa fa-list-alt"></i> Sign up </a></li>
                            </ul>
                            <p>My Account & Oder</p>
                        </div>
                        <div class="mini-cart mini-cart-2" >
                            <a href="add-to-cart.php" class="header-mini-cart2"  >
                                <span class="total-mini-cart-icon"><i class="fa fa-shopping-basket"></i></span>
                                <span class="total-mini-cart-item badge" style="height: 22px;">0</span>
                            </a>


                        </div>

                    </div>
                </div>
            </div>
        </div> 
        <!-- End Header2 -->
    </div>
    <div class="header-nav2 header-nav4">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 col-md-offset-3">
                    <nav class="main-nav main-nav4">
                        <ul>
                            <li>
                                <a href="./">home</a>                             
                            </li>
                            <li>
                                <a href="#">Products</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Brands</a>
                                <ul class="sub-menu">
                                    <?php
                                    $BRANDS = new Brand(NULL);
                                    foreach ($BRANDS->all() as $brands) {
                                        ?>
                                        <li><a href="view-products-by-brand.php?id=<?php echo $brands['id'] ?>"><?php echo $brands['name'] ?></a></li>   
                                    <?php } ?>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Offer</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <a href="#" class="toggle-mobile-menu"><span>Menu</span></a>
                    </nav>
                    <!-- End Main Nav -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Nav2 -->
</div>


<!-- login dashboard -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="images/default-man.png" alt="Member" class="img-circle">
                </div>				
                <h4 class="modal-title">Member Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form   method="post" id="login-form">
                    <div class="form-group">
                        <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email" >		
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Password" >	
                    </div>        
                    <div class="form-group">
                        <button type="submit" name="login-submit" id="login" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
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

<!--Any Page Access -->
<!--<div id="myModalAny" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="images/default-man.png" alt="Member" class="img-circle">
                </div>				
                <h4 class="modal-title">Member Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form   method="post" id="login-form">
                    <div class="form-group">
                        <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email" >		
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Password" >	
                    </div>        
                    <div class="form-group">
                        <button type="submit" name="login-submit" id="login-page" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
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
</div>-->



