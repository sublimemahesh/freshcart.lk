<?php

include_once(dirname(__FILE__) . '/../../class/include.php');
session_start();

if ($_POST['create'] == 'create') {

    $product_array = array();
    $customer_id = 0;

    $CART_FORM = new AddToCart(NULL);
    if (!empty($_POST['customer_id_session'])) {
        $customer_id = $_POST['customer_id_session'];
    } else if (!empty($_POST['customer_id'])) {
        $customer_id = $_POST['customer_id'];
    }

    //customer Obj
    $CUSTOMER = new Customer($customer_id);

    foreach ($_SESSION["shopping_cart"] as $product) {
        $product_data['product_id'] = $product['product_id'];
        $product_data['product_quantity'] = $product['product_quantity'];
        $product_data['product_price'] = $product['product_price'];

        array_push($product_array, $product_data);
    }

    $CART_FORM->product = json_encode($product_array);
    $CART_FORM->customer = $customer_id;
    $CART_FORM->status = 'new';
    $CART_FORM->create();


    $comany_name = "Supirimarket.lk";
    $website_name = "www.supirimarket.lk";
    $comConNumber = "+94 7575 111 49 /  +94 9122 487 94 ";
    $comEmail = "info@islandwide.website";
    $from = 'info@islandwide.website';

    $product_details = json_encode($product_array);

    $visitor_email = $CUSTOMER->email;
    $visitor_name = $CUSTOMER->name;

    $find_us = 'test';

    $subject = 'Contact Message - Supirimarket.lk';
    $subject2 = 'Your have new Product order  - Supirimarket.lk';

    $message = 'Message';


    $headers = "From: " . $from . "\r\n";

    $headers .= "Reply-To: " . $visitor_email . "\r\n";

    $headers .= "MIME-Version: 1.0\r\n";

    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    $headers1 = "From: " . $from . "\r\n";

    $headers1 .= "Reply-To: " . $comEmail . "\r\n";

    $headers1 .= "MIME-Version: 1.0\r\n";

    $headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


//Unset remove cart
 //   unset($_SESSION["shopping_cart"]);

    $company_message = 'Message';
// Sending mail
    $visitor_message = 'Message';

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

        $response['msg'] = "Could not be sent your message";

        echo json_encode($response);

        exit();
    }


    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
?>
 
