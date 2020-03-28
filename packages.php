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
        <title>FRESHCART.LK | Packages</title>
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
                            <!--Append All Filter data in product filter _data class-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="filter_data ">
                                    <ul class=" product-grid">
<?php

foreach (Product::getProductsByCategory(1) as $product) {
    $price = $product['price'] - ($product['price'] * $product['discount'] / 100);
    ?>
                                            <li class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <a class="product-thumb-link" href="view-product.php?id=<?php echo $product['id']; ?>">
                                                            <img class="first-thumb" alt="" src="upload/product-categories/sub-category/product/photos/<?php echo $product['image_name']; ?>"> 
                                                        </a>
                                                        <div class="product-info-cart">
                                                            <a class="addcart-link" href="#" data-toggle="modal" data-target="#modalLoginForm2"><i class="fa fa-shopping-basket"></i> Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="title-product"><a href="view-product.php?id=<?php echo $product['id']; ?>" title="<?php echo $product['name']; ?>">
    <?php
    if (strlen($product['name']) > 30) {
        echo substr($product['name'], 0, 26) . '...';
    } else {
        echo $product['name'];
    }
    ?>
                                                            </a></h3>
                                                        <div class="info-price"> <span id="price-format-design">Rs: <?php echo number_format($price, 2); ?></span><del>Rs: <?php echo number_format($product['price'], 2); ?></del></div><div class="percent-saleoff">
                                                            <span><label><?php echo $product['discount']; ?>%</label> OFF</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
    <?php
}
?>
                                    </ul>
                                </div>
                                <div class="modal fade" id="modalLoginForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document"> 
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title w-100 font-weight-bold"><b>HP Spectre 13</b>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </h4>
                                            </div>

                                            <div class="modal-body mx-3">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="thumbnail">
                                                            <img class="first-thumb" alt="" src="upload/product-categories/sub-category/product/photos/-161288569198_29914571708_1558090173_n.jpg"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8"> 
                                                        <p class="text-justify">Elevate your senses with eight-million pixels. Edge to edge display promises to deliver content in jaw-dropping quality</p>                                     
                                                        <span pull-left=""> <i class="fa fa-circle"></i> Brand : Dell </span> <br>
                                                        <span pull-right=""> <i class="fa fa-circle"></i> Unites : 6 </span><br>
                                                        <div class="col-md-6  " id="price-padd">                                         
                                                            <label>Rs :</label> <span id="price-format-design"> 96,040.00 </span>

                                                            <input type="hidden" id="price2" class="price-format total_price_amount" value="96040">
                                                        </div>                                        
                                                        <div class="col-md-6 " id="price-padd">                                               
                                                            <div class="attr-product">                                            
                                                                <div class="input-group">                                             
                                                                    <input type="number" name="quantity" min="1" value="1" id="quantity2" class=" form-control form-input-design">
                                                                </div>
                                                            </div>                                            
                                                        </div>
                                                    </div>  
                                                </div>  
                                            </div>

                                            <div class="modal-footer d-flex justify-content-center">  
                                                <input type="hidden" class="form-control  " id="product_id" value="2">
                                                <input type="hidden" name="name" id="name2" value="HP Spectre 13">
                                                <input type="button" class="btn btn-info add_to_cart" name="add_to_cart" id="2" value="   Add to Cart">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Show Pagination Filter data-->
                                

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
        <!--<script src="js/ajax/product.js" type="text/javascript"></script>-->
        <script src="js/ajax/add_to_cart.js" type="text/javascript"></script>
    </body>
</html>