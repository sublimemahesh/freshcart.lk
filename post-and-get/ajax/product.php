<?php

include_once(dirname(__FILE__) . '/../../class/include.php');


if ($_POST['action'] == 'GETPRODUCTFILTER') {

    $PRODUCT = new Product(NULL);
    $result = $PRODUCT->getProductsBySubCategories($_POST["sub_categorys"]);

    
    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}


