<!DOCTYPE HTML>
<?php
include './class/include.php';
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
                                                        <img src="upload/product-categories/product/photos/<?php echo $PRODUCT->image_name ?>" alt=""/>
                                                        <p><i class="fa fa-search"></i> Mouse over to zoom in</p>
                                                    </div>
                                                    <div class="carousel">
                                                        <ul>
                                                            <?php
                                                            $PRODUCT_PHOTO = new ProductPhoto(NULL);
                                                            foreach ($PRODUCT_PHOTO->getProductPhotosById($id) as $key => $product_photo) {
                                                                if ($key === 1) {
                                                                    ?>
                                                                    <li><a href="#" class="active"><img src="upload/product-categories/product/photos/gallery/<?php echo $product_photo['image_name'] ?>" alt=""/></a></li>
                                                                    <?php
                                                                } else {
                                                                    ?> 
                                                                    <li><a href="#"><img src="upload/product-categories/product/photos/gallery/<?php echo $product_photo['image_name'] ?>" alt=""/></a></li>
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
                                                        <label>Price:</label> <span>$59.52</span><del>$17.96</del>
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
                                                <li><a href="#feedback" data-toggle="tab">Feedback</a></li>
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
                                                        <h2>Review</h2>
                                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget. Sed quia consequuntur magni dolores. Id eges tas massa sem et elit. Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget. Sed quia consequuntur magni dolores. Id eges tas massa sem et elit.</p>
                                                        <p>Qenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla onsequat mas quis enim. Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget. Sed quia consequuntur magni dolores. Id eges tas massa sem et elit. Viva mus semper cursus libero</p>
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
    </body>
</html>