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
$subcat = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $PRODUCT = new Product(NULL);
    $PRODUCT_CATEGORIES = new ProductCategories($id);
}
if(isset($_GET['subcategory'])) {
    $subcat = $_GET['subcategory'];
}
?>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Super Shop is new Wordpress theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Wordpress theme, with multiple versions for homepage and multiple templates for sub pages as well" />
        <meta name="keywords" content="Super Shop,7uptheme" />
        <meta name="robots" content="noodp,index,follow" />
        <meta name='revisit-after' content='1 days' />
        <title>FRESHCART.LK || All Products || <?php echo $PRODUCT_CATEGORIES->name; ?></title>
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
        <link href="control-panel/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="css/modle-login.css" rel="stylesheet" type="text/css"/>
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
                                                $SUB_CATEGORIES = new SubCategory(NULL);
                                                foreach ($SUB_CATEGORIES->getProductsByCategory($PRODUCT_CATEGORIES->id) as $sub_category) {

                                                    $COUNT_PRODUCT = count($PRODUCT->getProductsBySubProduct($sub_category['id']));
                                                    $checked = '';
                                                    if($subcat == $sub_category['id']) {
                                                        $checked = 'checked';
                                                    }
                                                    ?>
                                                    <li> 
                                                        <input type="checkbox"class="common_selector sub_category" <?php echo $checked; ?> value="<?php echo $sub_category['id'] ?>">
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
                                                    $FILTER_BRAND = $PRODUCT->getBrandByCategory($id);
                                                    foreach ($FILTER_BRAND as $filter_brand) {
                                                        $BRAND = new Brand($filter_brand['brand']);
                                                        ?>
                                                        <li> 
                                                            <input type="checkbox"   class="common_selector brand" value="<?php echo $BRAND->id ?>">
                                                            <?php echo $BRAND->name ?> 
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
                                    </div>
                                    <!-- End Filter -->
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
        <script src="control-panel/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/ajax/products-by-category.js" type="text/javascript"></script>
        <script src="js/ajax/add_to_cart.js" type="text/javascript"></script>
        <script src="js/ajax/login.js" type="text/javascript"></script>
    </body>
</html>