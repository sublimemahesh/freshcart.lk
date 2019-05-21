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
                            <p><i class="fa fa-envelope"></i>: info@supirimarket.lk</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="top-info">
                        <ul class="top-info-right top-info  "> 
                            <li class="top-account has-child">
                                
                                    <div id="img_url" ></div>
                                    <?php
                                    if (isset($CUSTOMER->image_name)) {
                                        ?>
                                  
                                        <img src="upload/customer/profile/thumb/<?php echo $CUSTOMER->image_name ?>" alt="" class="img-circle"/> <?php echo   $_SESSION['name']; ?>
                                        <ul class="sub-menu-top">
                                           <!--                                    <li><a href="my-account.html"><i class="fa fa-user"></i> Account Info</a></li>
                                                                               <li><a href="#"><i class="fa fa-heart-o"></i> Wish List</a></li>
                                                                               <li><a href="#"><i class="fa fa-toggle-on"></i> Compare</a></li>
                                                                               <li><a href="#"><i class="fa fa-unlock-alt"></i> Sign in</a></li>-->
                                            <li><a href="customer/logout.php"><i class="fa fa-sign-in"></i> Log Out</a></li>
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
                        <a href="index.php"><img src="images/logo.png" alt="" /></a>
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
                        <div class="mini-cart mini-cart-2">
                            <a href="cart.html" class="header-mini-cart2">
                                <span class="total-mini-cart-icon"><i class="fa fa-shopping-basket"></i></span>
                                <span class="total-mini-cart-item">0</span>
                            </a>
                            <div class="content-mini-cart">
                                <h2>(2) ITEMS IN MY CART</h2>
                                <ul class="list-mini-cart-item">
                                    <li>
                                        <div class="mini-cart-edit">
                                            <a class="delete-mini-cart-item" href="#"><i class="fa fa-trash-o"></i></a>
                                            <a class="edit-mini-cart-item" href="#"><i class="fa fa-pencil"></i></a>
                                        </div>
                                        <div class="mini-cart-thumb">
                                            <a href="#"><img alt="" src="images/home1/mini-cart-thumb.png"></a>
                                        </div>
                                        <div class="mini-cart-info">
                                            <h3><a href="#">Burberry Pink &amp; black</a></h3>
                                            <div class="info-price">
                                                <span>$59.52</span>
                                                <del>$17.96</del>
                                            </div>
                                            <div class="qty-product">
                                                <span class="qty-down">-</span>
                                                <span class="qty-num">1</span>
                                                <span class="qty-up">+</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="mini-cart-edit">
                                            <a class="delete-mini-cart-item" href="#"><i class="fa fa-trash-o"></i></a>
                                            <a class="edit-mini-cart-item" href="#"><i class="fa fa-pencil"></i></a>
                                        </div>
                                        <div class="mini-cart-thumb">
                                            <a href="#"><img alt="" src="images/home1/mini-cart-thumb.png"></a>
                                        </div>
                                        <div class="mini-cart-info">
                                            <h3><a href="#">Burberry Pink &amp; black</a></h3>
                                            <div class="info-price">
                                                <span>$59.52</span>
                                                <del>$17.96</del>
                                            </div>
                                            <div class="qty-product">
                                                <span class="qty-down">-</span>
                                                <span class="qty-num">1</span>
                                                <span class="qty-up">+</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mini-cart-total">
                                    <label>TOTAL</label>
                                    <span>$24.28</span>
                                </div>
                                <div class="mini-cart-button">
                                    <a class="mini-cart-view" href="#">view my cart </a>
                                    <a class="mini-cart-checkout" href="#">Checkout</a>
                                </div>
                            </div>
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
                            <li class="menu-item-has-children">
                                <a href="#">home</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">home 1-5</a>
                                        <ul class="sub-menu">
                                            <li><a href="home-01.html">Home style 01</a></li>
                                            <li><a href="home-02.html">Home style 02</a></li>
                                            <li><a href="home-03.html">Home style 03</a></li>
                                            <li><a href="home-04.html">Home style 04</a></li>
                                            <li><a href="home-05.html">Home style 05</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">home 6-10</a>
                                        <ul class="sub-menu">
                                            <li><a href="home-06.html">Home style 06</a></li>
                                            <li><a href="home-07.html">Home style 07</a></li>
                                            <li><a href="home-08.html">Home style 08</a></li>
                                            <li><a href="home-09.html">Home style 09</a></li>
                                            <li><a href="home-10.html">Home style 10</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">home 11-15</a>
                                        <ul class="sub-menu">
                                            <li><a href="home-11.html">Home style 11</a></li>
                                            <li><a href="home-12.html">Home style 12</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-mega-menu">
                                <a href="grid.html">Fashion</a>
                                <div class="mega-menu mega-menu-style1">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="mega-hot-deal">
                                                <h2 class="mega-menu-title">Hot deals</h2>
                                                <div class="mega-hot-deal-slider">
                                                    <div class="wrap-item" data-navigation="true" data-pagination="false" data-itemscustom="[[0,1]]">
                                                        <div class="item-deal-product">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link">
                                                                    <img src="images/photos/furniture/6.jpg" alt="" class="first-thumb">
                                                                    <img src="images/photos/furniture/5.jpg" alt="" class="second-thumb">
                                                                </a>
                                                                <div class="product-info-cart">
                                                                    <div class="product-extra-link">
                                                                        <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                        <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="title-product"><a href="#">Pok Chair Classicle</a></h3>
                                                                <p class="desc">Lorem Khaled Ipsum is a major key to suc cess. Another one. </p>
                                                                <div class="info-price-deal">
                                                                    <span>$59.52</span> <label>-30%</label>
                                                                </div>
                                                                <div class="deal-shop-social">
                                                                    <a class="deal-shop-link" href="#">shop now</a>
                                                                    <div class="social-deal social-network">
                                                                        <ul>
                                                                            <li><a href="#"><img src="images/home1/s1.png" alt=""></a></li>
                                                                            <li><a href="#"><img src="images/home1/s2.png" alt=""></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="item-deal-product">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link">
                                                                    <img src="images/photos/extras/17.jpg" alt="" class="first-thumb">
                                                                    <img src="images/photos/extras/16.jpg" alt="" class="second-thumb">
                                                                </a>
                                                                <div class="product-info-cart">
                                                                    <div class="product-extra-link">
                                                                        <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                        <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="title-product"><a href="#">Fashion Mangto</a></h3>
                                                                <p class="desc">Lorem Khaled Ipsum is a major key to suc cess. Another one. </p>
                                                                <div class="info-price-deal">
                                                                    <span>$59.52</span> <label>-30%</label>
                                                                </div>
                                                                <div class="deal-shop-social">
                                                                    <a class="deal-shop-link" href="#">shop now</a>
                                                                    <div class="social-deal social-network">
                                                                        <ul>
                                                                            <li><a href="#"><img src="images/home1/s1.png" alt=""></a></li>
                                                                            <li><a href="#"><img src="images/home1/s2.png" alt=""></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="item-deal-product">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link">
                                                                    <img src="images/photos/sport/7.jpg" alt="" class="first-thumb">
                                                                    <img src="images/photos/sport/6.jpg" alt="" class="second-thumb">
                                                                </a>
                                                                <div class="product-info-cart">
                                                                    <div class="product-extra-link">
                                                                        <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                        <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="title-product"><a href="#">T-Shirt Sport</a></h3>
                                                                <p class="desc">Lorem Khaled Ipsum is a major key to suc cess. Another one. </p>
                                                                <div class="info-price-deal">
                                                                    <span>$59.52</span> <label>-30%</label>
                                                                </div>
                                                                <div class="deal-shop-social">
                                                                    <a class="deal-shop-link" href="#">shop now</a>
                                                                    <div class="social-deal social-network">
                                                                        <ul>
                                                                            <li><a href="#"><img src="images/home1/s1.png" alt=""></a></li>
                                                                            <li><a href="#"><img src="images/home1/s2.png" alt=""></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="item-deal-product">
                                                            <div class="product-thumb">
                                                                <a href="#" class="product-thumb-link">
                                                                    <img src="images/photos/extras/14.jpg" alt="" class="first-thumb">
                                                                    <img src="images/photos/extras/13.jpg" alt="" class="second-thumb">
                                                                </a>
                                                                <div class="product-info-cart">
                                                                    <div class="product-extra-link">
                                                                        <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                        <a href="#" class="quickview-link"><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="title-product"><a href="#">Bag Goodscol model</a></h3>
                                                                <p class="desc">Lorem Khaled Ipsum is a major key to suc cess. Another one. </p>
                                                                <div class="info-price-deal">
                                                                    <span>$59.52</span> <label>-30%</label>
                                                                </div>
                                                                <div class="deal-shop-social">
                                                                    <a class="deal-shop-link" href="#">shop now</a>
                                                                    <div class="social-deal social-network">
                                                                        <ul>
                                                                            <li><a href="#"><img src="images/home1/s1.png" alt=""></a></li>
                                                                            <li><a href="#"><img src="images/home1/s2.png" alt=""></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="mega-new-arrival">
                                                <h2 class="mega-menu-title">New Arrivals</h2>
                                                <div class="mega-new-arrival-slider">
                                                    <div class="wrap-item" data-navigation="true" data-pagination="false" data-itemscustom="[[0,1],[480,2]]">
                                                        <div class="item">
                                                            <div class="item-product">
                                                                <div class="product-thumb">
                                                                    <a href="detail.html" class="product-thumb-link">
                                                                        <img src="images/photos/extras/18.jpg" alt="" class="first-thumb">
                                                                        <img src="images/photos/extras/17.jpg" alt="" class="second-thumb">
                                                                    </a>
                                                                    <div class="product-info-cart">
                                                                        <div class="product-extra-link">
                                                                            <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                            <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                                                        </div>
                                                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                                                    <div class="info-price">
                                                                        <span>$59.52</span><del>$17.96</del>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <div style="width:100%" class="inner-rating"></div>
                                                                        <span>(6s)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="item">
                                                            <div class="item-product">
                                                                <div class="product-thumb">
                                                                    <a href="detail.html" class="product-thumb-link">
                                                                        <img src="images/photos/extras/21.jpg" alt="" class="first-thumb">
                                                                        <img src="images/photos/extras/20.jpg" alt="" class="second-thumb">
                                                                    </a>
                                                                    <div class="product-info-cart">
                                                                        <div class="product-extra-link">
                                                                            <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                            <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                                                        </div>
                                                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                                                    <div class="info-price">
                                                                        <span>$59.52</span><del>$17.96</del>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <div style="width:100%" class="inner-rating"></div>
                                                                        <span>(6s)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="item">
                                                            <div class="item-product">
                                                                <div class="product-thumb">
                                                                    <a href="detail.html" class="product-thumb-link">
                                                                        <img src="images/photos/extras/19.jpg" alt="" class="first-thumb">
                                                                        <img src="images/photos/extras/15.jpg" alt="" class="second-thumb">
                                                                    </a>
                                                                    <div class="product-info-cart">
                                                                        <div class="product-extra-link">
                                                                            <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                            <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                                                        </div>
                                                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                                                    <div class="info-price">
                                                                        <span>$59.52</span><del>$17.96</del>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <div style="width:100%" class="inner-rating"></div>
                                                                        <span>(6s)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="item">
                                                            <div class="item-product">
                                                                <div class="product-thumb">
                                                                    <a href="detail.html" class="product-thumb-link">
                                                                        <img src="images/photos/extras/3.jpg" alt="" class="first-thumb">
                                                                        <img src="images/photos/extras/4.jpg" alt="" class="second-thumb">
                                                                    </a>
                                                                    <div class="product-info-cart">
                                                                        <div class="product-extra-link">
                                                                            <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                            <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                                                        </div>
                                                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                                                    <div class="info-price">
                                                                        <span>$59.52</span><del>$17.96</del>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <div style="width:100%" class="inner-rating"></div>
                                                                        <span>(6s)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="has-mega-menu">
                                <a href="list.html">Furniture</a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <div class="mega-adv">
                                                <div class="mega-adv-thumb zoom-image-thumb">
                                                    <a href="#"><img src="images/photos/newintoday/bag-shoes.jpg" alt="" /></a>
                                                </div>
                                                <div class="mega-adv-info">
                                                    <h3><a href="#">Examplui coloniu tencaug</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <a class="more-detail" href="#">More Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <div class="mega-new-arrival">
                                                <h2 class="mega-menu-title">Featured Product</h2>
                                                <div class="mega-new-arrival-slider">
                                                    <div class="wrap-item" data-navigation="true" data-pagination="false" data-itemscustom="[[0,1],[480,2]]">
                                                        <div class="item">
                                                            <div class="item-product">
                                                                <div class="product-thumb">
                                                                    <a href="detail.html" class="product-thumb-link">
                                                                        <img src="images/photos/extras/17.jpg" alt="" class="first-thumb">
                                                                        <img src="images/photos/extras/18.jpg" alt="" class="second-thumb">
                                                                    </a>
                                                                    <div class="product-info-cart">
                                                                        <div class="product-extra-link">
                                                                            <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                            <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                                                        </div>
                                                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                                                    <div class="info-price">
                                                                        <span>$59.52</span><del>$17.96</del>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <div style="width:100%" class="inner-rating"></div>
                                                                        <span>(6s)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="item">
                                                            <div class="item-product">
                                                                <div class="product-thumb">
                                                                    <a href="detail.html" class="product-thumb-link">
                                                                        <img src="images/photos/extras/20.jpg" alt="" class="first-thumb">
                                                                        <img src="images/photos/extras/21.jpg" alt="" class="second-thumb">
                                                                    </a>
                                                                    <div class="product-info-cart">
                                                                        <div class="product-extra-link">
                                                                            <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                            <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                                                        </div>
                                                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                                                    <div class="info-price">
                                                                        <span>$59.52</span><del>$17.96</del>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <div style="width:100%" class="inner-rating"></div>
                                                                        <span>(6s)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="item">
                                                            <div class="item-product">
                                                                <div class="product-thumb">
                                                                    <a href="detail.html" class="product-thumb-link">
                                                                        <img src="images/photos/extras/15.jpg" alt="" class="first-thumb">
                                                                        <img src="images/photos/extras/19.jpg" alt="" class="second-thumb">
                                                                    </a>
                                                                    <div class="product-info-cart">
                                                                        <div class="product-extra-link">
                                                                            <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                            <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                                                        </div>
                                                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                                                    <div class="info-price">
                                                                        <span>$59.52</span><del>$17.96</del>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <div style="width:100%" class="inner-rating"></div>
                                                                        <span>(6s)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                        <div class="item">
                                                            <div class="item-product">
                                                                <div class="product-thumb">
                                                                    <a href="detail.html" class="product-thumb-link">
                                                                        <img src="images/photos/extras/4.jpg" alt="" class="first-thumb">
                                                                        <img src="images/photos/extras/3.jpg" alt="" class="second-thumb">
                                                                    </a>
                                                                    <div class="product-info-cart">
                                                                        <div class="product-extra-link">
                                                                            <a href="#" class="wishlist-link"><i class="fa fa-heart-o"></i></a>
                                                                            <a href="#" class="compare-link"><i class="fa fa-toggle-on"></i></a>
                                                                            <a href="quick-view.html" class="quickview-link fancybox.ajax"><i class="fa fa-search"></i></a>
                                                                        </div>
                                                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="title-product"><a href="#">Burberry Pink &amp; black</a></h3>
                                                                    <div class="info-price">
                                                                        <span>$59.52</span><del>$17.96</del>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <div style="width:100%" class="inner-rating"></div>
                                                                        <span>(6s)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="grid.html">Food</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Pizza</a></li>
                                    <li><a href="#">Noodle</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Cake</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">lemon cake</a></li>
                                            <li><a href="#">mousse cake</a></li>
                                            <li><a href="#">carrot cake</a></li>
                                            <li><a href="#">chocolate cake</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Drink</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="grid.html">Electronis</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Mobile</a></li>
                                    <li><a href="#">Laptop</a></li>
                                    <li><a href="#">Camera</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul>
                            </li>
                            <li><a href="list.html">Sports</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="accordions.html">Accordions</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="chart-processbar.html">Charts & Progress Bars</a></li>
                                    <li><a href="feature-boxes.html">Feature Boxes</a></li>
                                    <li><a href="message-boxes.html">Message Boxes</a></li>
                                    <li><a href="teams.html">Teams</a></li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="blog-v1.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-v1.html">Blog V1</a></li>
                                    <li><a href="blog-v2.html">Blog V2</a></li>
                                    <li><a href="blog-v3.html">Blog V3</a></li>
                                    <li><a href="blog-full.html">Blog Fullwidth</a></li>
                                    <li><a href="single.html">Single Post</a></li>
                                </ul>
                            </li>
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


<!-- Modal HTML -->
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
                        <button type="submit" name="login-submit" id="login-submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
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



