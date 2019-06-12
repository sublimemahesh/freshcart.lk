<?php

include_once(dirname(__FILE__) . '/../../class/include.php');
session_start();
$product_array = array();

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




//$CART_FORM->product = $product_arr . '/' . $quantity_arr . '/' . $price_arr . '/' . $total_price;


foreach ($_SESSION["shopping_cart"] as $product) {
    $product_data['product_id'] = $product['product_id'];
    $product_data['product_quantity'] = $product['product_quantity'];
    $product_data['product_price'] = $product['product_price'];

    array_push($product_array, $product_data);
}


//$CART_FORM->product = $product_arr . '/' . $quantity_arr . '/' . $price_arr . '/' . $total_price;

$CART_FORM->product = json_encode($product_array);
 $CART_FORM->status ='new';
$CART_FORM->create();


$comany_name = "Dream Round Tour";
$website_name = "www.dreamroundtour.com";
$comConNumber = "+94 7575 111 49 /  +94 9122 487 94 ";
$comEmail = "info@islandwide.website";
$from = 'info@islandwide.website';



$product_details = $product_arr . '/' . $quantity_arr . '/' . $price_arr . '/' . $total_price;

$visitor_email = 'chalanadulaj99@gmail.com';

$find_us = 'test';

$subject = 'Contact Message - Dream Round Tour';
$subject2 = 'Thank you - Dream Round Tour';

$message = 'tetstsgs';


$headers = "From: " . $from . "\r\n";

$headers .= "Reply-To: " . $visitor_email . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



$headers1 = "From: " . $from . "\r\n";

$headers1 .= "Reply-To: " . $comEmail . "\r\n";

$headers1 .= "MIME-Version: 1.0\r\n";

$headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$company_message = 'test';
// Sending mail
$visitor_message = 'test';

include("mail-template.php");

if (
        mail($comEmail, $subject, $company_message, $headers) &&
        mail($visitor_email, $subject2, $visitor_message, $headers1)
) {

    $response['status'] = 'correct';

    $response['msg'] = "Your message has been sent successfully";

//"Your message has been sent successfully"

    echo json_encode($response);

    exit();
} else {

    $response['status'] = 'correct';

    $response['msg'] = "Could nod be sent your message";

    echo json_encode($response);

    exit();
}


$result = ["status" => 'success'];
echo json_encode($result);
exit();
?>
 
