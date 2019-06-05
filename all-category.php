<!DOCTYPE HTML>
<?php
include './class/include.php';

if (isset($_GET["page"])) {
    $page = (int) $_GET["page"];
} else {
    $page = 1;
}


$setlimit = 2;
$pagelimit = ($page * $setlimit);

$setlimit = 3;

$pagelimit = ($page * $setlimit) - $setlimit;
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
                                                        <input type="checkbox"class="common_selector sub_category" value="<?php echo $sub_category['id'] ?>">
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
                                                        $COUNT_PRODUCT = count($PRODUCT->getProductsByBrand($brand['id']));
                                                        ?>
                                                        <li> 
                                                            <input type="checkbox"   class="common_selector brand" value="<?php echo $brand['id'] ?>">
                                                            <?php echo $brand['name'] ?> (<?php echo $COUNT_PRODUCT ?> )  
                                                        </li>
                                                    <?php }
                                                    ?>
                                                </ul> 
                                            </div>
                                        </div> 
                                        <!-- End Price -->
                                        <div class="box-filter color-filter">
                                            <h2 class="widget-title">Price Filter</h2>
                                            <input type="hidden" id="hidden_minimum_price" value="0">
                                            <input type="hidden" id="hidden_maximum_price"id="max-price">

                                            <input type="hidden" id="category" value="<?php echo $PRODUCT_CATEGORIES->id ?>">
                                            <input type="hidden" id="pagelimit" value="<?php echo $pagelimit ?>">
                                            <input type="hidden" id="setlimit" value="<?php echo $setlimit ?>"> 
                                            <p id="price_show"><span id="min-price" > </span>- <span id="max-price"></span></p>
                                            <div id="price_range"></div>

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
                                </div>
                            </div>

                            <!--Append All Filter data in product filter _data class-->
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="filter_data ">
                                </div>
                                
                                <!--Show Pagination Filter data-->
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div id="show_pagination">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Content Shop -->
                </div>
                <!-- End Content -->
                <?php include './footer.php'; ?>
                <!-- End Footer -->
            </div>
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