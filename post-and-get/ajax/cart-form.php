<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

$CART_FORM = new AddToCart(NULL);

//Products
if (isset($_POST['id'])) {
    $product = $_POST['id'];
    $product_arr = implode(",", $product);
}

//Quantity
if (isset($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
    $quantity_arr = implode(",", $quantity);
}

//Price 
if (isset($_POST['price'])) {
    $price = $_POST['price'];
    $price_arr = implode(",", $price);
}

//Total Price
if (isset($_POST['total_price'])) {
    $total_price = $_POST['total_price'];
}

$CART_FORM->product = $product_arr . '/' . $quantity_arr . '/' . $price_arr . '/' . $total_price . '//';

$CART_FORM->create();
 
$result = ["status" => 'success'];
echo json_encode($result);
exit();
 
?>
 
