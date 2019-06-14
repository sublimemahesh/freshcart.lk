<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

//Get Product by category
if ($_POST['action'] == 'GETPRODUCTBYCATEGORY') {

    $PRODUCT = new Product(NULL);

    $result = $PRODUCT->getProductsByCategory($_POST["proCategoryID"]);

    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}

//GEt subcategory product
if ($_POST['action'] == 'GETSUBPRODUCTBYCATEGORY') {

    $SUB_CATEGORY = new SubCategory(NULL);

    $result = $SUB_CATEGORY->getProductsByCategory($_POST["proCategoryID"]);

    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}

//Confirm order
if ($_POST['action'] == 'CONFIRM') {

    $ADD_TO_CART = new AddToCart($_POST['id']);
    $ADD_TO_CART->status = 'confirmed';
    $result = $ADD_TO_CART->update();

    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}
//Cancel order
if ($_POST['action'] == 'CANCEL') {

    $ADD_TO_CART = new AddToCart($_POST['id']);
    $ADD_TO_CART->status = 'canceled';
    $result = $ADD_TO_CART->update();

    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}
 
//Deliver order
if ($_POST['action'] == 'DELIVER') {
   
    $ADD_TO_CART = new AddToCart($_POST['id']);
    $ADD_TO_CART->status = $_POST['type'];
    $result = $ADD_TO_CART->update();

    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}
