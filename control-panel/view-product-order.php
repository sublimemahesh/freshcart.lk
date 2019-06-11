<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
$id = '';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Manage Order Product </title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-red">
        <?php
        include './navigation-and-header.php';
        ?>

        <section class="content">
            <div class="container-fluid"> 
                <!-- Manage Districts -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Manage Order Product
                                </h2>
                                <ul class="header-dropdown">
                                    <li>
                                        <a href="create-product-review.php">
                                            <i class="material-icons">add</i> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">

                                    <div>
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>ID</th> 
                                                    <th>Product</th>                                                      
                                                    <th>Quantity</th>                                                      
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th> 
                                                    <th>Customer</th>                                                      
                                                    <th>Status</th>                                                      
                                                    <th>Options</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                $price_array = array();
                                                $ADDTOCART = new AddToCart(NULL);
                                                foreach ($ADDTOCART->getProductById($id) as $key => $add_to_cart) {
                                                    $PRODUCT = (json_decode($add_to_cart['product']));
                                                    foreach ($PRODUCT as $key => $product) {
                                                        $key++;
                                                        ?>
                                                        <tr id="div<?php echo $add_to_cart['id']; ?>">
                                                            <td><?php echo $key; ?></td> 

                                                            <td> 
                                                                <?php
                                                                $PRODUCTS = new Product($product->product_id);
                                                                echo $PRODUCTS->name;
                                                                ?> 
                                                            </td>

                                                            <td>
                                                                <?php
                                                                echo $product->product_quantity;
                                                                ?>
                                                            </td> 
                                                            <td>  
                                                                <?php
                                                                echo 'Rs: ' . number_format($product->product_price, 2);
                                                                ?>
                                                            </td>
                                                        </tr>


                                                        <?php
                                                        array_push($price_array, $product->product_price);
                                                    }
                                                }
                                                ?> 
                                                <tr>
                                                    <td colspan="3" align="right">
                                                        Total
                                                    </td>  
                                                    <td  align="right">
                                                        <?php echo 'Rs: ' . number_format(json_encode(array_sum($price_array)), 2); ?>
                                                    </td>  
                                                </tr>
                                            </tbody>
                                        </table>
                                        <form method="POST" id="form-data">
                                            <div class="row">
                                                <div class="col-md-10 ">

                                                </div>
                                                <div class="col-md-2 pull-right"  >
                                                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>"/>
                                                    <input type="submit" class="btn btn-warning" value="Confirm Order" id="confirm_order"/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </section>

        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.js"></script>
        <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="plugins/node-waves/waves.js"></script>


        <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


        <script src="plugins/sweetalert/sweetalert.min.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/pages/tables/jquery-datatable.js"></script>
        <script src="js/demo.js"></script> 
        <script src="js/admin-js/product.js" type="text/javascript"></script>


</html> 