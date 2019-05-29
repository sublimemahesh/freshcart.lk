<!DOCTYPE HTML>
<?php
include './class/include.php';
include './auth.php';

//
//if (!isset($_SESSION)) {
//    session_start();
//}
//
//if (isset($_SESSION["id"])) {
//    $CUSTOMER = new Customer($_SESSION["id"]);
//}

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$PRODUCT = new Product($id);
?>
<html lang="en-US">

    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Super Shop is new Wordpress theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Wordpress theme, with multiple versions for homepage and multiple templates for sub pages as well" />
        <meta name="keywords" content="Super Shop,7uptheme" />
        <meta name="robots" content="noodp,index,follow" />
        <meta name='revisit-after' content='1 days' />
        <title>Supiri market | <?php echo $PRODUCT->name ?> - Product Detail</title>
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
                <div class="content-shop">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="sidebar-shop sidebar-left">
                                    <div class="widget widget-related-product">
                                        <h2 class="widget-title">RELATED PRODUCTS</h2>
                                        <ul class="list-product-related">
                                            <li class="clearfix">
                                                <div class="product-related-thumb">
                                                    <a href="#"><img src="images/photos/extras/3.jpg" alt="" /></a>
                                                </div>
                                                <div class="product-related-info">
                                                    <h3 class="title-product"><a href="#">Burberry Pink</a></h3>
                                                    <div class="info-price">
                                                        <span>$59.52</span><del>$17.96</del>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="inner-rating" style="width:100%"></div>
                                                        <span>(6s)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="product-related-thumb">
                                                    <a href="#"><img src="images/photos/extras/14.jpg" alt="" /></a>
                                                </div>
                                                <div class="product-related-info">
                                                    <h3 class="title-product"><a href="#">Burberry Pink</a></h3>
                                                    <div class="info-price">
                                                        <span>$59.52</span><del>$17.96</del>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="inner-rating" style="width:100%"></div>
                                                        <span>(6s)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="product-related-thumb">
                                                    <a href="#"><img src="images/photos/extras/13.jpg" alt="" /></a>
                                                </div>
                                                <div class="product-related-info">
                                                    <h3 class="title-product"><a href="#">Burberry Pink</a></h3>
                                                    <div class="info-price">
                                                        <span>$59.52</span><del>$17.96</del>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="inner-rating" style="width:100%"></div>
                                                        <span>(6s)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="product-related-thumb">
                                                    <a href="#"><img src="images/photos/extras/21.jpg" alt="" /></a>
                                                </div>
                                                <div class="product-related-info">
                                                    <h3 class="title-product"><a href="#">Burberry Pink</a></h3>
                                                    <div class="info-price">
                                                        <span>$59.52</span><del>$17.96</del>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="inner-rating" style="width:100%"></div>
                                                        <span>(6s)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="product-related-thumb">
                                                    <a href="#"><img src="images/photos/extras/2.jpg" alt="" /></a>
                                                </div>
                                                <div class="product-related-info">
                                                    <h3 class="title-product"><a href="#">Burberry Pink</a></h3>
                                                    <div class="info-price">
                                                        <span>$59.52</span><del>$17.96</del>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="inner-rating" style="width:100%"></div>
                                                        <span>(6s)</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Related Product -->
                                    <div class="widget widget-adv">
                                        <h2 class="title-widget-adv">
                                            <span>Week</span>
                                            <strong>big sale</strong>
                                        </h2>
                                        <div class="wrap-item" data-navigation="false" data-pagination="true" data-itemscustom="[[0,1]]">
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
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="main-content-shop">
                                    <div class="main-detail">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="detail-gallery">
                                                    <div class="mid">
                                                        <img src="upload/product-categories/sub-product/product/photos/<?php echo $PRODUCT->image_name ?>" alt=""/>
                                                        <p><i class="fa fa-search"></i> Mouse over to zoom in</p>
                                                    </div>
                                                    <div class="carousel">
                                                        <ul>
                                                            <?php
                                                            $PRODUCT_PHOTO = new ProductPhoto(NULL);
                                                            foreach ($PRODUCT_PHOTO->getProductPhotosById($id) as $key => $product_photo) {
                                                                if ($key === 1) {
                                                                    ?>
                                                                    <li><a href="#" class="active"><img src="upload/product-categories/sub-product/product/photos/gallery/<?php echo $product_photo['image_name'] ?>" alt=""/></a></li>
                                                                    <?php
                                                                } else {
                                                                    ?> 
                                                                    <li><a href="#"><img src="upload/product-categories/sub-product/product/photos/gallery/<?php echo $product_photo['image_name'] ?>" alt=""/></a></li>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <div class="gallery-control">
                                                        <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
                                                        <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="col-md-7 col-sm-12 col-xs-12">
                                                <div class="detail-info">
                                                    <h2 class="title-detail"><?php echo $PRODUCT->name ?></h2>
                                                    <div class="product-rating">
                                                        <div class="inner-rating" style="width:100%"></div>
                                                    </div>
                                                    <div class="product-order">
                                                        <span>235 Orders</span>
                                                    </div>
                                                    <div class="product-code">
                                                        <label>Item Code: </label> <span>#12980496023</span>
                                                    </div>
                                                    <div class="product-stock">
                                                        <label>Availability: </label> <span>In stock</span>
                                                    </div>
                                                    <div class="info-price info-price-detail">
                                                        <?php
                                                        $price_amount = 0;
                                                        $discount = 0;

                                                        $discount = $PRODUCT->discount;
                                                        $price_amount = $PRODUCT->price;

                                                        $discount = ($price_amount * $discount) / 100;
                                                        $discount_price = $PRODUCT->price - $discount;
                                                        if ($PRODUCT->discount > 0) {
                                                            ?>
                                                            <label>Price:</label> <span>Rs: <?php echo number_format($discount_price, 2) ?> </span>
                                                            <?php ?>
                                                            <del>Rs:<?php echo number_format($PRODUCT->price, 2) ?></del>
                                                        <?php } else if ($PRODUCT->discount == 0) { ?>
                                                            <label>Price:</label> <span>Rs: <?php echo number_format($PRODUCT->price, 2) ?> </span>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="attr-info">
                                                        <div class="attr-product">
                                                            <label>Color</label>
                                                            <div class="attr-color">
                                                                <a href="#" class="toggle-color">Select Color</a>
                                                                <ul class="list-color">
                                                                    <li><a href="#">Black</a></li>
                                                                    <li><a href="#">Red</a></li>
                                                                    <li><a href="#">Green</a></li>
                                                                    <li><a href="#">White</a></li>
                                                                    <li><a href="#">Pink</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="attr-product">
                                                            <label>Size</label>
                                                            <div class="attr-size">
                                                                <a href="#" class="toggle-size">Select Size</a>
                                                                <ul class="list-size">
                                                                    <li><a href="#">S</a></li>
                                                                    <li><a href="#">M</a></li>
                                                                    <li><a href="#">L</a></li>
                                                                    <li><a href="#">XL</a></li>
                                                                    <li><a href="#">XXL</a></li>
                                                                </ul>
                                                            </div>
                                                            <span class="size-chart">Size Chart</span>
                                                        </div>
                                                        <div class="attr-product">
                                                            <label>Qty</label>
                                                            <div class="info-qty">
                                                                <a class="qty-down" href="#"><i class="fa fa-minus"></i></a>
                                                                <span class="qty-val">1</span>
                                                                <a class="qty-up" href="#"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                                        <div class="product-social-extra">
                                                            <a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
                                                            <a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
                                                            <a class="email-link" href="#"><i class="fa fa-envelope"></i></a>
                                                            <a class="print-link" href="#"><i class="fa fa-print"></i></a>
                                                            <a class="share-link" href="#"><i class="fa fa-share"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- End Attr Info -->
                                                </div>
                                                <!-- Detail Info -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Main Detail -->
                                    <div class="tab-detail">
                                        <div class="title-tab-detail">
                                            <ul role="tablist">
                                                <li class="active"><a href="#details" data-toggle="tab">Product Details </a></li>
                                                <li><a href="#feedback" data-toggle="tab">Reviews</a></li>
                                                <li><a href="#shipping" data-toggle="tab">Shipping & Payment</a></li>
                                                <li><a href="#seller" data-toggle="tab">Seller Guarantees</a></li>
                                            </ul>
                                        </div>
                                        <div class="content-tab-detail">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="details">
                                                    <div class="table-content-tab-detail">
                                                        <div class="title-table-detail"><span>Return Policy</span></div>
                                                        <div class="icon-table-detail"><img src="images/grid/rv1.png" alt="" /></div>
                                                        <div class="info-table-detail">
                                                            <p>If the product you receive is not as described or low quality, the seller promises that you may return it before order completion (when you click ‘Confirm Order Received’ or exceed confirmation timeframe) and receive a full refund. The return shipping fee will be paid by you. Or, you can choose to keep the product and agree the refund amount directly with the seller.</p>
                                                        </div>
                                                    </div>
                                                    <div class="table-content-tab-detail">
                                                        <div class="title-table-detail"><span>Seller Service</span></div>
                                                        <div class="icon-table-detail"><img src="images/grid/rv2.png" alt="" /></div>
                                                        <div class="info-table-detail">
                                                            <h3>On-time Delivery</h3>
                                                            <p>If you do not receive your purchase within 60 days, you can ask for a full refund before order completion (when you click ‘Confirm Order Received’ or exceed confirmation timeframe).</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="feedback">
                                                    <div class="inner-content-tab-detail">
                                                        <h2>Reviews</h2>

                                                        <?php
                                                        $PRODUCT_REVIEWS = new ProductReview(NULL);
                                                        foreach ($PRODUCT_REVIEWS->getReviwsByProduct($id) as $key => $review) {
                                                            if ($key % 2 == 0) {
                                                                ?>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="panel panel-login p-des row"  >
                                                                            <div class="col-md-2">
                                                                                <?php
                                                                                if (empty($review['image_name'])) {
                                                                                    ?>
                                                                                    <img src="images/man.png" alt=""/>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                    <img src="upload/customer/profile/<?php echo $review['image_name'] ?>" alt="" class="img-circle"/>
                                                                                <?php } ?>
                                                                            </div>

                                                                            <div class="col-md-10  text-justify">
                                                                                <h5><i class="fa fa-user" aria-hidden="true"></i>  Chalana dulaj                                                                
                                                                                    <div class="pull-right">
                                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>   <?php echo $review['date_time'] ?>

                                                                                        <div style="margin-top: 5px;">
                                                                                            <?php
                                                                                            for ($review_1 = 0; $review_1 <= 4; $review_1++) {

                                                                                                if ($review['stars'] > $review_1) {
                                                                                                    ?>
                                                                                                    <span class="fav-job" style="color:#FE9C00; ">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                    </span> 
                                                                                                    <?php
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <span class="fav-job">
                                                                                                        <i class="fa fa-star-o"></i>
                                                                                                    </span>
                                                                                                    <?php
                                                                                                }
                                                                                            }
                                                                                            ?>  
                                                                                        </div>
                                                                                    </div>
                                                                                </h5>
                                                                                <h5><b><?php echo $review['title'] ?></b></h5>
                                                                                <?php echo $review['description'] ?>...
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php } else { ?>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="panel panel-login p-des row">  
                                                                            <div class="col-md-10 text-justify">
                                                                                <h5><i class="fa fa-user" aria-hidden="true"></i>  Chalana dulaj                                                                
                                                                                    <div class="pull-right">
                                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>   <?php echo $review['date_time'] ?>
                                                                                        <div style="margin-top: 5px;">
                                                                                            <?php
                                                                                            for ($review_1 = 0; $review_1 <= 4; $review_1++) {

                                                                                                if ($review['stars'] > $review_1) {
                                                                                                    ?>
                                                                                                    <span class="fav-job" style="color:#FE9C00; ">
                                                                                                        <i class="fa fa-star"></i>
                                                                                                    </span> 
                                                                                                    <?php
                                                                                                } else {
                                                                                                    ?>
                                                                                                    <span class="fav-job">
                                                                                                        <i class="fa fa-star-o"></i>
                                                                                                    </span>
                                                                                                    <?php
                                                                                                }
                                                                                            }
                                                                                            ?>  
                                                                                        </div>
                                                                                    </div>
                                                                                </h5>
                                                                                <h5><b><?php echo $review['title'] ?></b></h5>
                                                                                <?php echo $review['description'] ?>...
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <?php
                                                                                if (empty($review['image_name'])) {
                                                                                    ?>
                                                                                    <img src="images/man.png" alt=""/>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                    <img src="upload/customer/profile/<?php echo $review['image_name'] ?>" alt="" class="img-circle"/>
                                                                                <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                            }
                                                        }
                                                        ?>

                                                        <div class="row">
                                                            <div class="col-md-12" style="padding: 0">
                                                                <div class="panel panel-login">
                                                                    <div class="panel-heading">
                                                                        <div class="row">
                                                                            <div class="col-xs-12">
                                                                                <a href="#" class="active text-center" >Add Your Review</a>
                                                                            </div> 
                                                                        </div>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <form id="form-data"   method="post" role="form"   autocomplete="off">
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="title" id="title" tabindex="1" class="form-control" placeholder="Enter Title " value="">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <select class="form-control" name="stars" id="stars">
                                                                                            <option value=""> -- Add the stars -- </option>
                                                                                            <option value="1">  1</option>
                                                                                            <option value="2">  2</option>
                                                                                            <option value="3">  3</option>
                                                                                            <option value="4">  4</option>
                                                                                            <option value="5">  5</option>
                                                                                        </select>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <textarea rows="5" class="form-control" cols="8" name="comment" id="comment"></textarea>
                                                                                    </div> 
                                                                                    <div class="form-group">
                                                                                        <div class="col-lg-5" style="padding-left: 0px;">
                                                                                            <label for="comment">Security Code:</label>
                                                                                            <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                                                                            <span id="capspan" ></span>
                                                                                        </div>
                                                                                        <div class="col-lg-3" style="margin-top: 20px;" >
                                                                                            <?php include("./comment/captchacode-widget.php"); ?>
                                                                                        </div>
                                                                                        <div class="col-md-4" style="margin-top: 20px;" >
                                                                                            <input type="hidden" id="product"   name="product" value="<?php echo $id ?>">
                                                                                            <input type="hidden"   name="customer" value="<?php echo $_SESSION['id'] ?>">
                                                                                            <input type="hidden"   name="image_name" value="<?php echo $_SESSION['image_name'] ?>">
                                                                                            <?php
                                                                                            if (empty($_SESSION['id'])) {
                                                                                                ?>
                                                                                                <a  href="#myModal" class="trigger-btn" data-toggle="modal" id="model-button"><input type="submit" name="submit" id="Btn-z"   class="Btn-z form-control btn btn-login" value="Add review"></a>
                                                                                                <input type="submit" name="submit" id="create" tabindex="4" class="form-control btn btn-login" value="Add review" style="display: none;">

                                                                                            <?php } else {
                                                                                                ?>
                                                                                                <input type="submit" name="submit" id="create" tabindex="4" class="form-control btn btn-login" value="Add review">

                                                                                                <?php
                                                                                            }
                                                                                            ?>
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
                                                <div role="tabpanel" class="tab-pane" id="shipping">
                                                    <div class="table-content-tab-detail">
                                                        <div class="title-table-detail"><span>Return Policy</span></div>
                                                        <div class="icon-table-detail"><img src="images/grid/rv1.png" alt="" /></div>
                                                        <div class="info-table-detail">
                                                            <p>If the product you receive is not as described or low quality, the seller promises that you may return it before order completion (when you click ‘Confirm Order Received’ or exceed confirmation timeframe) and receive a full refund. The return shipping fee will be paid by you. Or, you can choose to keep the product and agree the refund amount directly with the seller.</p>
                                                        </div>
                                                    </div>
                                                    <div class="table-content-tab-detail">
                                                        <div class="title-table-detail"><span>Seller Service</span></div>
                                                        <div class="icon-table-detail"><img src="images/grid/rv2.png" alt="" /></div>
                                                        <div class="info-table-detail">
                                                            <h3>On-time Delivery</h3>
                                                            <p>If you do not receive your purchase within 60 days, you can ask for a full refund before order completion (when you click ‘Confirm Order Received’ or exceed confirmation timeframe).</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="seller">
                                                    <div class="inner-content-tab-detail">
                                                        <h2>Custom service</h2>
                                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget. Sed quia consequuntur magni dolores. Id eges tas massa sem et elit. Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget. Sed quia consequuntur magni dolores. Id eges tas massa sem et elit.</p>
                                                        <p>Qenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla onsequat mas quis enim. Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget. Sed quia consequuntur magni dolores. Id eges tas massa sem et elit. Viva mus semper cursus libero</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab Detail -->
                                    <div class="upsell-detail">
                                        <h2 class="title-default">UPSELL PRODUCTS</h2>
                                        <div class="upsell-detail-slider">
                                            <div class="wrap-item" data-navigation="true" data-pagination="false" data-itemscustom="[[0,1],[600,2],[1024,3]]">
                                                <div class="item">
                                                    <div class="item-product">
                                                        <div class="product-thumb">
                                                            <a class="product-thumb-link" href="#">
                                                                <img class="first-thumb" alt="" src="images/photos/extras/3.jpg">
                                                                <img class="second-thumb" alt="" src="images/photos/extras/4.jpg">
                                                            </a>
                                                            <div class="product-info-cart">
                                                                <div class="product-extra-link">
                                                                    <a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
                                                                    <a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
                                                                    <a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
                                                            <div class="info-price">
                                                                <span>$59.52</span><del>$17.96</del>
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="inner-rating" style="width:100%"></div>
                                                                <span>(6s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->
                                                <div class="item">
                                                    <div class="item-product">
                                                        <div class="product-thumb">
                                                            <a class="product-thumb-link" href="#">
                                                                <img class="first-thumb" alt="" src="images/photos/extras/15.jpg">
                                                                <img class="second-thumb" alt="" src="images/photos/extras/16.jpg">
                                                            </a>
                                                            <div class="product-info-cart">
                                                                <div class="product-extra-link">
                                                                    <a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
                                                                    <a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
                                                                    <a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
                                                            <div class="info-price">
                                                                <span>$59.52</span><del>$17.96</del>
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="inner-rating" style="width:100%"></div>
                                                                <span>(6s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->
                                                <div class="item">
                                                    <div class="item-product">
                                                        <div class="product-thumb">
                                                            <a class="product-thumb-link" href="#">
                                                                <img class="first-thumb" alt="" src="images/photos/extras/18.jpg">
                                                                <img class="second-thumb" alt="" src="images/photos/extras/17.jpg">
                                                            </a>
                                                            <div class="product-info-cart">
                                                                <div class="product-extra-link">
                                                                    <a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
                                                                    <a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
                                                                    <a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
                                                            <div class="info-price">
                                                                <span>$59.52</span><del>$17.96</del>
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="inner-rating" style="width:100%"></div>
                                                                <span>(6s)</span>
                                                            </div>
                                                        </div>
                                                        <div class="percent-saleoff">
                                                            <span><label>55%</label> OFF</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->
                                                <div class="item">
                                                    <div class="item-product">
                                                        <div class="product-thumb">
                                                            <a class="product-thumb-link" href="#">
                                                                <img class="first-thumb" alt="" src="images/photos/extras/1.jpg">
                                                                <img class="second-thumb" alt="" src="images/photos/extras/2.jpg">
                                                            </a>
                                                            <div class="product-info-cart">
                                                                <div class="product-extra-link">
                                                                    <a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
                                                                    <a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
                                                                    <a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
                                                            <div class="info-price">
                                                                <span>$59.52</span><del>$17.96</del>
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="inner-rating" style="width:100%"></div>
                                                                <span>(6s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->
                                                <div class="item">
                                                    <div class="item-product">
                                                        <div class="product-thumb">
                                                            <a class="product-thumb-link" href="#">
                                                                <img class="first-thumb" alt="" src="images/photos/extras/11.jpg">
                                                                <img class="second-thumb" alt="" src="images/photos/extras/12.jpg">
                                                            </a>
                                                            <div class="product-info-cart">
                                                                <div class="product-extra-link">
                                                                    <a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
                                                                    <a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
                                                                    <a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
                                                            <div class="info-price">
                                                                <span>$59.52</span><del>$17.96</del>
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="inner-rating" style="width:100%"></div>
                                                                <span>(6s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->
                                                <div class="item">
                                                    <div class="item-product">
                                                        <div class="product-thumb">
                                                            <a class="product-thumb-link" href="#">
                                                                <img class="first-thumb" alt="" src="images/photos/extras/19.jpg">
                                                                <img class="second-thumb" alt="" src="images/photos/extras/20.jpg">
                                                            </a>
                                                            <div class="product-info-cart">
                                                                <div class="product-extra-link">
                                                                    <a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
                                                                    <a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
                                                                    <a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
                                                            <div class="info-price">
                                                                <span>$59.52</span><del>$17.96</del>
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="inner-rating" style="width:100%"></div>
                                                                <span>(6s)</span>
                                                            </div>
                                                        </div>
                                                        <div class="percent-saleoff">
                                                            <span><label>55%</label> OFF</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Upsell Detail -->
                                </div>
                                <!-- End Main Content Shop -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content Shop -->
            </div>


            <!--loging -form-->
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
                                    <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email" required="required">		
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Password" required="required">	
                                </div>        
                                <div class="form-group">
                                    <button type="submit" name="login-submit" id="login-submit" class="btn btn-primary btn-lg btn-block login-btn" style="width: 100%;">Login</button>
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
        <script src="comment/validation.js" type="text/javascript"></script>
    </body>
</html>