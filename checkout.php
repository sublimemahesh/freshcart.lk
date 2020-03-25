<!DOCTYPE HTML>
<?php
include './class/include.php';
session_start();
$disabled = '';
if (!isset($_SESSION["shopping_cart"])) {
    $disabled = 'disabled';
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
        <title>FRESHCART.LK | Checkout</title>
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
        <div class="wrap">
            <?php include './header.php'; ?>
            <!-- End Content -->
            <div id="content">
                <div class="content-page woocommerce">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                                <h2 class="title-shop-page">checkout</h2>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-ms-12">
                                        <div class="check-billing">
                                            <form class="form-my-account">
                                                <h2 class="title">Billing Details</h2>
                                                <p><input type="text" name="txtCountry" id="txtCountry" placeholder="Country *" /></p>
                                                <p><input type="text" name="txtAddress" id="txtAddress" placeholder="Address *" /></p>
                                                <p class="clearfix box-col2">
                                                    <input type="text" name="txtPostcode" id="txtPostcode" placeholder="Postcode" />
                                                    <input type="text" name=txtCity" id="txtCity" placeholder="City *" />
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-ms-12">
                                        <div class="check-address">
                                            <form class="form-my-account">
                                                <p>
                                                    <textarea cols="30" rows="9" id="txtOrderNote" name="txtOrderNote">Order Notes</textarea>
                                                </p>
                                            </form>
                                        </div>		
                                    </div>
                                </div>
                                <h3 class="order_review_heading">Your order</h3>
                                <div class="woocommerce-checkout-review-order" id="order_review">
                                    <div class="table-responsive">
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $tot = 0;
                                                if (isset($_SESSION["shopping_cart"])) {
                                                    foreach ($_SESSION["shopping_cart"] as $product) {

                                                        $PRODUCT = new Product($product['product_id']);
                                                        $price = $product['product_quantity'] * $product['product_price'];
                                                        $tot += $price;
                                                        ?>
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                <?php echo $PRODUCT->name; ?>&nbsp; <span class="product-quantity">× <?php echo $product['product_quantity']; ?></span>
                                                            </td>
                                                            <td class="product-total text-right">
                                                                <span class="amount">Rs. <?php echo number_format($price, 2); ?></span>						
                                                            </td>
                                                        </tr>

                                                        <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <tr class="cart_item">
                                                        <td colspan="2">Your cart is empty.</td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td class="text-right"><strong><span class="amount">Rs. <?php echo number_format($tot, 2); ?></span></strong> </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 agree-check-box">
                                            <label class="checkbox-container">Click here to indicate that you have read and agree to the booking 
                                                <a href="/terms-and-conditions" target="_blank" class="text-green">terms and conditions</a>.
                                                <input type="checkbox" name="agree" id="agree"><span class="checkmark">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="place-order-btn">
                                        <input type="hidden" id="member" value="<?php echo $_SESSION['id']; ?>">
                                        <input type="hidden" id="total_amount" value="<?php echo $tot; ?>">
                                        <button data-value="Place order" id="place_order" name="woocommerce_checkout_place_order" class="button alt <?php echo $disabled; ?>" <?php echo $disabled; ?>>Place order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <!-- End Content Page -->

        <?php include './footer.php'; ?>
        <!-- End Footer -->
    </div>
    <script type="text/javascript" src="js/libs/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/libs/bootstrap.min.js"></script>
    <script src="control-panel/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/libs/jquery.fancybox.js"></script>
    <script type="text/javascript" src="js/libs/jquery-ui.js"></script>
    <script type="text/javascript" src="js/libs/owl.carousel.js"></script>
    <script type="text/javascript" src="js/libs/slideshow/jquery.themepunch.revolution.html"></script>
    <script type="text/javascript" src="js/libs/slideshow/jquery.themepunch.plugins.min.html"></script>
    <script type="text/javascript" src="js/libs/jquery.jcarousellite.min.js"></script>
    <script type="text/javascript" src="js/libs/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="js/theme.js"></script>
    <script src="js/ajax/order.js" type="text/javascript"></script>
    <script src="js/ajax/cart-form.js" type="text/javascript"></script>
    <script src="js/ajax/add_to_cart.js" type="text/javascript"></script> 
    <script src="js/ajax/login.js" type="text/javascript"></script>


</body>
</html>