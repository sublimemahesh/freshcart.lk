<!DOCTYPE HTML>
<?php
include './class/include.php';
?>
<html lang="en-US">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Super Shop is new Wordpress theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Wordpress theme, with multiple versions for homepage and multiple templates for sub pages as well" />
        <meta name="keywords" content="Super Shop,7uptheme" />
        <meta name="robots" content="noodp,index,follow" />
        <meta name='revisit-after' content='1 days' />
        <title>FRESHCART.LK | Product List</title>
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
            <div id="content">
                <div class="content-shop">
                    <div class="container">
                        <div class="row">
<!--                            <div class="hidden-sm hidden-xs">
                                <div class="wrap-category-hover4">
                                    <div class="inner-category-hover4">
                                        <a href="all-categories.php"><h2 class="title-category-hover"><span>Categories</span></h2></a>
                                    </div>
                                </div>
                            </div>-->
                            <div class="list-product-new list-category">
                                <div class="row">
                                    <?php
                                    foreach (ProductCategories::all() as $category) {
                                        $COUNT = count(Product::getProductsByCategory($category['id']));
                                        ?>
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="item-product">
                                                <div class="product-thumb">
                                                    <a class="product-thumb-link" href="view-sub-categories.php?id=<?php echo $category['id']; ?>">
                                                        <img src="upload/product-categories/icon/<?php echo $category['icon']; ?>" alt="" class="first-thumb">
                                                        <img src="upload/product-categories/icon/<?php echo $category['icon']; ?>" alt="" class="second-thumb">
                                                    </a>
<!--                                                    <div class="product-info-cart">
                                                        <a class="addcart-link" href="all-products-by-category.php?id=<?php echo $category['id']; ?>">View Products</a>
                                                    </div>-->
                                                </div>
                                                <div class="product-info1">
                                                    <h3 class="title-product">
                                                        <a href="view-sub-categories.php?id=<?php echo $category['id']; ?>"><?php echo $category['name'] . ' ('. $COUNT .')'; ?> </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include './footer.php'; ?>
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
        <script src="js/ajax/product.js" type="text/javascript"></script>
        <script src="js/ajax/add_to_cart.js" type="text/javascript"></script>
        <script src="js/ajax/login.js" type="text/javascript"></script>
    </body>
</html>