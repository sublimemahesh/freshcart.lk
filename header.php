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
                <div class="col-md-5 col-sm-4 col-xs-12">
                    <div class="smart-search search-form4">
                        <form action="search.php" method="get">
                            <div class="select-category">
                                <select name="category" class="category-toggle-link">
                                    <option value="">Category</option>
                                    <?php
                                    foreach (ProductCategories::all() as $category) {
                                        ?>
                                        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="smart-search-form">
                                <input type="text"  name="keyword" placeholder="Find product, categories..."  />
                                <input type="submit" value="search" name="search"/>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
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
                <div class="col-md-3 col-sm-3 col-xs-6 hidden-sm">
                    <div class="category-dropdown hidden-category-dropdown">
                        <a href="all-categories.php"><h2 class="title-category-dropdown"><span>Categories</span></h2></a>
                    </div>
                    <!-- End Category Dropdown -->
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <nav class="main-nav main-nav4">
                        <ul>
                            <li>
                                <a href="./">home</a>                             
                            </li>
                            <li>
                                <a href="all-products.php">All Products</a>
                            </li>
                            <li>
                                <a href="packages.php">Packages</a>
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
                                <a href="#">About Us</a>
                            </li>
                            <li><a href="#">Contact Us</a></li>
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



