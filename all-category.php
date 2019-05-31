<!DOCTYPE HTML>
<?php
include './class/include.php';

if (isset($_GET["page"])) {
    $page = (int) $_GET["page"];
} else {
    $page = 1;
}


$setLimit = 3;

$pageLimit = ($page * $setLimit) - $setLimit;

$id = '';
$id = $_GET['id'];
$PRODUCT = new Product(NULL);
$PRODUCT_CATEGORIES = new ProductCategories($id);
?>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Super Shop is new Wordpress theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Wordpress theme, with multiple versions for homepage and multiple templates for sub pages as well" />
        <meta name="keywords" content="Super Shop,7uptheme" />
        <meta name="robots" content="noodp,index,follow" />
        <meta name='revisit-after' content='1 days' />
        <title>Super Shop | Product List</title>
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
    </head>

    <body>
        <div class="wrap" >

            <?php include './header.php'; ?> 
            <!-- End Header -->
            <div id="content" >
                <div class="content-shop" >

                    <div class="row"  >
                        <div class="container" >
                            <div class="col-md-3 col-sm-4 col-xs-12" >
                                <div class="sidebar-shop sidebar-left">
                                    <div class="widget widget-filter">
                                        <div class="box-filter  ">
                                            <h2 class="widget-title"><?php echo $PRODUCT_CATEGORIES->name ?></h2>
                                            <ul>
                                                <?php
                                                $SUB_CATEGORIES = new SubCategory($PRODUCT_CATEGORIES->id);
                                                foreach ($SUB_CATEGORIES->all() as $sub_category) {

                                                    $COUNT_PRODUCT = count($PRODUCT->getProductsBySubProduct($sub_category['id']));
                                                    ?>
                                                    <li> 
                                                        <input type="checkbox" id="sub_categorys" class="click_button" value="<?php echo $sub_category['id'] ?>">
                                                        <?php echo $sub_category['name'] ?> (<?php echo $COUNT_PRODUCT ?>) 
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <!-- End Category -->
                                        <div class="box-filter price-filter">
                                            <h2 class="widget-title">Brand</h2>
                                            <div class="inner-price-filter">
                                                <ul>
                                                    <?php
                                                    $BRAND = new Brand(NULL);
                                                    foreach ($BRAND->all() as $brand) {
                                                        ?>
                                                        <li> 
                                                            <input type="checkbox" id="brand" class="click_button" value="<?php echo $brand['id'] ?>">
                                                            <?php echo $brand['name'] ?>   
                                                        </li>
                                                    <?php }
                                                    ?>
                                                </ul> 
                                            </div>
                                        </div>
                                        <!-- End Price -->
                                        <div class="box-filter color-filter">
                                            <h2 class="widget-title">Color</h2>
                                            <div class="list-color-filter">
                                                <a href="#" style="background-color:#ffffff"></a>
                                                <a href="#" style="background-color:#e66054"></a>
                                                <a href="#" style="background-color:#d0b7cc"></a>
                                                <a href="#" style="background-color:#107a8e"></a>
                                                <a href="#" style="background-color:#b9cad2"></a>
                                                <a href="#" style="background-color:#a7bc93"></a>
                                                <a href="#" style="background-color:#d3b627"></a>
                                                <a href="#" style="background-color:#b4b3ae"></a>
                                                <a href="#" style="background-color:#502006"></a>
                                                <a href="#" style="background-color:#311e21"></a>
                                                <a href="#" style="background-color:#e6b3af"></a>
                                                <a href="#" style="background-color:#f3d213"></a>
                                                <a href="#" style="background-color:#bd0316"></a>
                                                <a href="#" style="background-color:#cd0c20"></a>
                                            </div>
                                        </div>
                                        <!-- End Color -->
                                        <div class="box-filter manufacturer-filter">
                                            <h2 class="widget-title">Manufacturers</h2>
                                            <ul>
                                                <li><a href="#">D&D Fashion</a></li>
                                                <li><a href="#">London Fashion</a></li>
                                                <li><a href="#">Milanno Fashion</a></li>
                                                <li><a href="#">Gucci</a></li>
                                                <li><a href="#">CK Fashion</a></li>
                                            </ul>
                                        </div>
                                        <!-- End Manufacturers -->
                                    </div>
                                    <!-- End Filter -->
                                    <div class="widget widget-vote">
                                        <h2 class="widget-title">COMMUNITY POLL</h2>
                                        <p>What is your favorite color</p>
                                        <ul>
                                            <li><a href="#">Green</a></li>
                                            <li><a href="#" class="active">Red</a></li>
                                            <li><a href="#">Black</a></li>
                                            <li><a href="#">Magenta</a></li>
                                        </ul>
                                        <button>Vote</button>
                                    </div>
                                    <!-- End Vote -->
                                    <div class="widget widget-adv">
                                        <h2 class="title-widget-adv">
                                            <span>Week</span>
                                            <strong>big sale</strong>
                                        </h2>
                                        <div class="wrap-item" data-itemscustom="[[0,1]]" data-pagination="true" data-navigation="false">
                                            <div class="item">
                                                <div class="item-widget-adv">
                                                    <div class="adv-widget-thumb">
                                                        <a href="#"><img src="images/grid/sl1.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="adv-widget-info">
                                                        <h3>New Collection</h3>
                                                        <h2><span>from</span> 40% off</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item-widget-adv">
                                                    <div class="adv-widget-thumb">
                                                        <a href="#"><img src="images/grid/sl2.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="adv-widget-info">
                                                        <h3>Quality usinesswear </h3>
                                                        <h2><span>from</span> 30% off</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item-widget-adv">
                                                    <div class="adv-widget-thumb">
                                                        <a href="#"><img src="images/grid/sl3.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="adv-widget-info">
                                                        <h3>Hanbags Style 2016</h3>
                                                        <h2><span>from</span> 20% off</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Adv -->
                                </div>
                                <!-- End Sidebar Shop -->
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-12  " >
                                <div class="main-content-shop"> 
                                    <div class="shop-tab-product filter_data"> 
                                        <ul class="row product-grid " id="filter_data_hide">
                                            <?php
                                            foreach ($PRODUCT->getProductsByCategoryByAll($id, $pageLimit, $setLimit) as $product) {
                                                ?>
                                                <li class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="item-product">
                                                        <div class="product-thumb">
                                                            <a class="product-thumb-link" href="view-product.php?id=<?php echo $product['id'] ?>">
                                                                <img class="first-thumb" alt="" src="upload/product-categories/sub-product/product/photos/<?php echo $product['image_name'] ?>"> 
                                                            </a>
                                                            <div class="product-info-cart">
                                                                <div class="product-extra-link">
                                                                    <a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
                                                                    <a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
                                                                    <a class="quickview-link fancybox.ajax" href="quick-view.html"><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <a class="addcart-link" href="#"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title-product"><a href="#"><?php echo $product['name'] ?></a></h3>
                                                            <div class="info-price">
                                                                <?php
                                                                $price_amount = 0;
                                                                $discount = 0;

                                                                $discount = $product['discount'];
                                                                $price_amount = $product['price'];

                                                                $discount = ($price_amount * $discount) / 100;
                                                                $discount_price = $product['price'] - $discount;
                                                                if ($product['discount'] > 0) {
                                                                    ?>
                                                                    <span id="price-details">RS: <?php echo number_format($discount_price, 2) ?></span></br><del>Rs:<?php echo number_format($price_amount, 2) ?></del>
                                                                <?php } else {
                                                                    ?>
                                                                    <span id="price-details">Rs: <?php echo number_format($price_amount, 2) ?></span> 
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div>
                                                            <?php if (!empty($product['discount'])) { ?>
                                                                <div class="percent-saleoff">
                                                                    <span><label><?php echo $product['discount'] ?>%</label> OFF</span>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                </li>
                                            <?php }
                                            ?>
                                        </ul>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                <div class="sort-pagi-bar">
                                                    <?php
                                                    $PRODUCT->showPagination($setLimit, $page, $id);
                                                    ?>    

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Sort Pagibar -->



                                    </div>
                                    <!-- End Shop Tab -->
                                </div>
                                <!-- End Main Content Shop -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content Shop -->
            </div>
            <!-- End Content -->
            <div id="footer">
                <div class="footer">
                    <div class="container">
                        <div class="footer-top">
                            <div class="logo-footer">
                                <a href="#"><img src="images/home1/logo-footer.png" alt="" /></a>
                            </div>
                            <div class="menu-footer">
                                <ul>
                                    <li><a href="#">Online Shopping</a></li>
                                    <li><a href="#">Buy</a></li>
                                    <li><a href="#">Sell</a></li>
                                    <li><a href="#">All Promotions</a></li>
                                    <li><a href="#">My Orders </a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">About </a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="list-footer-box">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="footer-box">
                                        <h2>My Account</h2>
                                        <ul class="footer-menu-box">
                                            <li><a href="#">My orders</a></li>
                                            <li><a href="#">My credit slips</a></li>
                                            <li><a href="#">My addresses</a></li>
                                            <li><a href="#">My personal info</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="footer-box">
                                        <h2>Help</h2>
                                        <ul class="footer-menu-box">
                                            <li><a href="#">Where's my order?</a></li>
                                            <li><a href="#">Payments</a></li>
                                            <li><a href="#">Redeem a gift voucher</a></li>
                                            <li><a href="#">Delivery & returns</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="footer-box">
                                        <h2>Further information</h2>
                                        <ul class="footer-menu-box">
                                            <li><a href="#">Drop Everything</a></li>
                                            <li><a href="#">Affiliate programme</a></li>
                                            <li><a href="#">Privacy</a></li>
                                            <li><a href="#">Terms & conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="footer-box">
                                        <h2>Contact Us</h2>
                                        <ul class="footer-box-contact">
                                            <li><i class="fa fa-home"></i> Our business address is 1063 Free</li>
                                            <li><i class="fa fa-mobile"></i> + 020.566.8866</li>
                                            <li><i class="fa fa-envelope"></i> <a href="mailto:support@7-Up.com">support@7-Up.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End List Footer Box -->
                        <div class="social-footer-box">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="newsletter-footer">
                                        <label>newsletter</label>
                                        <form>
                                            <input type="text"  value="Enter Your Email..." onfocus="if (this.value == this.defaultValue)
                                                        this.value = ''" onblur="if (this.value == '')
                                                                    this.value = this.defaultValue" />
                                            <input type="submit" value="" />
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="social-footer social-network">
                                        <label>newsletter</label>
                                        <ul>
                                            <li><a href="#"><img src="images/home1/s1.png" alt="" /></a></li>
                                            <li><a href="#"><img src="images/home1/s2.png" alt="" /></a></li>
                                            <li><a href="#"><img src="images/home1/s3.png" alt="" /></a></li>
                                            <li><a href="#"><img src="images/home1/s4.png" alt="" /></a></li>
                                            <li><a href="#"><img src="images/home1/s5.png" alt="" /></a></li>
                                            <li><a href="#"><img src="images/home1/s6.png" alt="" /></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Social Footer Box -->
                        <div class="list-tags-category">
                            <div class="item-tags-category">
                                <h2><span style="background:#fa6165">Fashion</span></h2>
                                <ul>
                                    <li><a href="#">Shirts</a></li>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">T shirts</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Levis Jeans</a></li>
                                    <li><a href="#">Killer Jeans</a></li>
                                    <li><a href="#">Pepe Jeans</a></li>
                                    <li><a href="#">Arrow Shirts</a></li>
                                    <li><a href="#">Ethnic Wear</a></li>
                                    <li><a href="#">Formal Shirts</a></li>
                                    <li><a href="#">Peter England Shirts</a></li>
                                    <li><a href="#">View all</a></li>
                                </ul>
                            </div>
                            <div class="item-tags-category">
                                <h2><span style="background:#fdc33e">furniture</span></h2>
                                <ul>
                                    <li><a href="#">Living rooms</a></li>
                                    <li><a href="#">Sofa &amp; Couches</a></li>
                                    <li><a href="#">Beds</a></li>
                                    <li><a href="#">Chair</a></li>
                                    <li><a href="#">Coffee Tables</a></li>
                                    <li><a href="#">Kitchen &amp; Dining Room</a></li>
                                    <li><a href="#">Small Bench</a></li>
                                    <li><a href="#">library</a></li>
                                    <li><a href="#">Wayfarer</a></li>
                                    <li><a href="#">Shield-Oval</a></li>
                                    <li><a href="#">Round</a></li>
                                    <li><a href="#">View all</a></li>
                                </ul>
                            </div>
                            <div class="item-tags-category">
                                <h2><span style="background:#7da7d5">electronics</span></h2>
                                <ul>
                                    <li><a href="#">Mobile</a></li>
                                    <li><a href="#" class="active">Iphone</a></li>
                                    <li><a href="#">Glassxy</a></li>
                                    <li><a href="#">Lumia</a></li>
                                    <li><a href="#" class="active">Laptop</a></li>
                                    <li><a href="#">XPS Dell</a></li>
                                    <li><a href="#">Maxbook</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Sony</a></li>
                                    <li><a href="#">Acer</a></li>
                                    <li><a href="#" class="active">Tablets</a></li>
                                    <li><a href="#">Apple</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Sony</a></li>
                                    <li><a href="#">View all</a></li>
                                </ul>
                            </div>
                            <div class="item-tags-category">
                                <h2><span style="background:#c75347">food</span></h2>
                                <ul>
                                    <li><a href="#">Food Blogs</a></li>
                                    <li><a href="#">Foodies</a></li>
                                    <li><a href="#">Food Culture</a></li>
                                    <li><a href="#">Hashtags</a></li>
                                    <li><a href="#">Food Porn</a></li>
                                    <li><a href="#">Piza</a></li>
                                    <li><a href="#">BBQ</a></li>
                                    <li><a href="#">Salat</a></li>
                                    <li><a href="#">Socola</a></li>
                                    <li><a href="#">Pate</a></li>
                                    <li><a href="#">Doner</a></li>
                                    <li><a href="#">View all</a></li>
                                </ul>
                            </div>
                            <div class="item-tags-category">
                                <h2><span style="background:#59c6bb">sport</span></h2>
                                <ul>
                                    <li><a href="#">Football</a></li>
                                    <li><a href="#">Bikes</a></li>
                                    <li><a href="#">Golf</a></li>
                                    <li><a href="#">Tennis</a></li>
                                    <li><a href="#">Karatedor</a></li>
                                    <li><a href="#">Yoga</a></li>
                                    <li><a href="#">Pencatsilat</a></li>
                                    <li><a href="#">Wushu</a></li>
                                    <li><a href="#">Runmeters</a></li>
                                    <li><a href="#">Boxing</a></li>
                                    <li><a href="#">Bowling</a></li>
                                    <li><a href="#">Gymnastics</a></li>
                                    <li><a href="#">Olympics</a></li>
                                    <li><a href="#">View all</a></li>
                                </ul>
                            </div>
                            <div class="item-tags-category">
                                <h2><span style="background:#f59fba">jewelry</span></h2>
                                <ul>
                                    <li><a href="#">Australian Opal</a></li>
                                    <li><a href="#">Ammolite</a></li>
                                    <li><a href="#">Meteorite Campo Del Cielo</a></li>
                                    <li><a href="#">Sun Pyrite</a></li>
                                    <li><a href="#">Faceted Carnelian</a></li>
                                    <li><a href="#">Round</a></li>
                                    <li><a href="#">View all</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End List Tags Category -->
                        <div class="footer-bottom">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="copyright">
                                        <p>© 2016 7uptheme Demo Store. All Rights Reserved. Designed by <a href="7uptheme.html">7uptheme.com</a></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="payment-method">
                                        <a href="#"><img src="images/home1/p1.png" alt="" /></a>
                                        <a href="#"><img src="images/home1/p2.png" alt="" /></a>
                                        <a href="#"><img src="images/home1/p3.png" alt="" /></a>
                                        <a href="#"><img src="images/home1/p4.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Footer Bottom -->
                    </div>
                </div>
            </div>
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
        <script src="js/ajax/product.js" type="text/javascript"></script>
    </body>
</html>