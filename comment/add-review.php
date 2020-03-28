<?php

include '../class/include.php';
header('Content-Type: application/json; charset=UTF8');
session_start();

if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {

    $result = ["status" => 'error'];
    echo json_encode($result);
    exit();
} else {

    date_default_timezone_set("Asia/Calcutta");
    $today = date('Y-m-d H:i:s');

    $PRODUCT_REVIEW = new ProductReview(NULL);

    $PRODUCT_REVIEW->customer = $_POST['customer'];
    $PRODUCT_REVIEW->date_time = $today;
    $PRODUCT_REVIEW->description = $_POST['comment'];
    $PRODUCT_REVIEW->product = $_POST['product'];
    $PRODUCT_REVIEW->stars = $_POST['stars'];
    $PRODUCT_REVIEW->title = $_POST['title'];


    $ss = $PRODUCT_REVIEW->create();


    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
?>
