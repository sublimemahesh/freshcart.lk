<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['action'] == 'GETPRODUCTBYCATEGORY') {

    $PRODUCT = new Product(NULL);

    $result = $PRODUCT->getProductsByCategory($_POST["proCategoryID"]);

    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}

if ($_POST['action'] == 'GETSUBPRODUCTBYCATEGORY') {

    $SUB_CATEGORY = new SubCategory(NULL);

    $result = $SUB_CATEGORY->getProductsByCategory($_POST["proCategoryID"]);

    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}