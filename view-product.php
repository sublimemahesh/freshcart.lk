<!DOCTYPE HTML>
<?php
include './class/include.php';
include './auth.php';

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
        <title>FRESHCART.LK | <?php echo $PRODUCT->name ?> - Product Detail</title>
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
                                        <ul class="list-product-related  scroll-bar"  >
                                            <?php
                                            foreach ($PRODUCT->getProductBySubCategories($PRODUCT->sub_category) as $products) {
                                                ?>
                                                <li class="clearfix">
                                                    <div class="product-related-thumb">
                                                        <a href="#"><img src="upload/product-categories/sub-category/product/photos/<?php echo $products['image_name'] ?>" alt="" /></a>
                                                    </div>
                                                    <div class="product-related-info">
                                                        <h3 class="title-product"><a href="#"><?php echo $products['name'] ?></a></h3>
                                                        <div class="info-price">
                                                            <div class="info-price info-price-detail">
                                                                <?php
                                                                $price_amount = 0;
                                                                $discount = 0;

                                                                $discount = $products['discount'];
                                                                $price_amount = $products['price'];

                                                                $discount = ($price_amount * $discount) / 100;
                                                                $discount_price =$products['price'] - $discount;
                                                                if ( $products['discount'] > 0) {
                                                                    ?>
                                                                    <span id="price-format-design" >Rs: <?php echo number_format($discount_price, 2) ?> </span>
                                                                     <?php ?>
                                                                    <del>Rs:<?php echo number_format($price_amount, 2) ?></del>
                                                                <?php } else if ($PRODUCT->discount == 0) { ?>
                                                                    <label>Price:</label> <span id="price-format-design" >Rs: <?php echo number_format($discount_price, 2) ?> </span>
                                                                 <?php } ?>
                                                            </div>
                                                           
                                                        </div>
<!--                                                        <div class="product-rating">
                                                            <div class="inner-rating" style="width:100%"></div>
                                                            <span>(6s)</span>   
                                                        </div>-->
                                                    </div>
                                                </li>
                                            <?php } ?>

                                        </ul>
                                    </div>
                                    <!-- End Related Product -->
<!--                                    <div class="widget widget-adv">
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
                                    </div>-->
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
                                                        <img src="upload/product-categories/sub-category/product/photos/<?php echo $PRODUCT->image_name ?>" alt=""/>
                                                        <p><i class="fa fa-search"></i> Mouse over to zoom in</p>
                                                    </div>
                                                    <div class="carousel">
                                                        <ul>
                                                            <?php
                                                            $PRODUCT_PHOTO = new ProductPhoto(NULL);
                                                            foreach ($PRODUCT_PHOTO->getProductPhotosById($id) as $key => $product_photo) {
                                                                if ($key === 1) {
                                                                    ?>
                                                                    <li><a href="#" class="active"><img src="upload/product-categories/sub-category/product/photos/gallery/<?php echo $product_photo['image_name'] ?>" alt=""/></a></li>
                                                                    <?php
                                                                } else {
                                                                    ?> 
                                                                    <li><a href="#"><img src="upload/product-categories/sub-category/product/photos/gallery/<?php echo $product_photo['image_name'] ?>" alt=""/></a></li>
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
                                                            <label>Price:</label> <span id="price-format-design" >Rs: <?php echo number_format($discount_price, 2) ?> </span>
                                                            <input type="hidden" id="price<?php echo $PRODUCT->id ?>" class="price-format total_price_amount" value="<?php echo $discount_price ?>"/>
                                                            <?php ?>
                                                            <del>Rs:<?php echo number_format($PRODUCT->price, 2) ?></del>
                                                        <?php } else if ($PRODUCT->discount == 0) { ?>
                                                            <label>Price:</label> <span id="price-format-design" >Rs: <?php echo number_format($PRODUCT->price, 2) ?> </span>
                                                            <input type="hidden" id="price<?php echo $PRODUCT->id ?>" class="price-format total_price_amount" value="<?php echo $PRODUCT->price ?>"/>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="attr-info">  
                                                        <div class="attr-product">
                                                            <label>Qty</label>
                                                            <div class="qty">
                                                                <input type="number" name="quantity" min="1"   id="quantity<?php echo $PRODUCT->id ?>"    class=" form-control form-input-design"  value="1"/>

                                                            </div>
                                                        </div> 

                                                        <input type="hidden" id="discount" value="<?php echo $PRODUCT->discount ?>"/>
                                                        <input type="hidden" id="price" value="<?php echo $PRODUCT->price ?>"/>
                                                        <input type="hidden" id="quantity<?php echo $PRODUCT->id ?>" value="1"/> 
                                                        <input   type="hidden" name="name"  id="name<?php echo $PRODUCT->id ?>" value="<?php echo $PRODUCT->name ?>" />
                                                        <button type="button" class="btn btn-default add_to_cart  btn-addcart "   name="add_to_cart"  id="<?php echo $PRODUCT->id ?>" > <i class="fa fa-shopping-cart"></i> Add to Cart</button>

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
                                            </ul>
                                        </div>
                                        <div class="content-tab-detail">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="details">
                                                    <div class="table-content-tab-detail">
                                                        <div class="info-table-detail text-justify">
                                                            <?php echo $PRODUCT->description ?>
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
                                                                                        <textarea rows="5" class="form-control" cols="8" name="comment" id="comment" placeholder="Comment "></textarea>
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
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab Detail -->
                                </div> 
                            </div>
                        </div>
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
<script src="js/ajax/add_to_cart.js" type="text/javascript"></script>
<script>

</script>
</body>
</html>