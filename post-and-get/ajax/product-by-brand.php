<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

//All Product Filter
if ($_POST['action'] == 'GETFILTERPRODUCT') {

    $minimum_price = '';
    $maximum_price = '';
    $sub_category = '';
    $brand = '';
    $brand_id = '';

    if (isset($_POST["brand_id"])) {
        $brand_id = $_POST["brand_id"];
    }
    if (isset($_POST["minimum_price"])) {
        $minimum_price = $_POST["minimum_price"];
    }
    if (isset($_POST["maximum_price"])) {
        $maximum_price = $_POST["maximum_price"];
    }

    if (isset($_POST["brand"])) {
        $brand = $_POST["brand"];
    }
     
    $PRODUCT = new Product(NULL);
    $result = $PRODUCT->getProductsByBrands($brand_id, $brand, $minimum_price, $maximum_price);
    echo $result;
}

//Get Max Price in Product
if ($_POST['action'] == 'GETMAXPRICE') {

    $brand = '';
    if (isset($_POST["minimum_price"])) {
        $minimum_price = $_POST["minimum_price"];
    }
    if (isset($_POST["maximum_price"])) {
        $maximum_price = $_POST["maximum_price"];
    }

    if (isset($_POST["brand"])) {
        $brand = $_POST["brand"];
    }


    $PRODUCT = new Product(NULL);

    $results = $PRODUCT->getMaxPriceInProduct($category, $brand);
    $result_data = $results[0];
    echo $result_data;
}

//Get Min pRice in Product
if ($_POST['action'] == 'GETMINPRICE') {
    
    $sub_category = '';
    $brand = '';
    if (isset($_POST["minimum_price"])) {
        $minimum_price = $_POST["minimum_price"];
    }
    if (isset($_POST["maximum_price"])) {
        $maximum_price = $_POST["maximum_price"];
    }
    if (isset($_POST["sub_category"])) {
        $sub_category = $_POST["sub_category"];
    }
    if (isset($_POST["brand"])) {
        $brand = $_POST["brand"];
    }

    
    $PRODUCT = new Product(NULL);

    $results = $PRODUCT->getMinPriceInProduct($category, $sub_category, $brand);
    $result_data = $results[0];
    echo $result_data;
}
 

//Get Brands
//if ($_POST['action'] == 'GETBRAND') {
//
//    $category = '';
//    $sub_category = '';
//
//    if (isset($_POST["category"])) {
//        $category = $_POST["category"];
//    }
//   
//
//    $PRODUCT = new Product(NULL);
//    $result = $PRODUCT->getBrandByCategory($category);
//    
//    //Print the element out.
//    echo $result;
//}