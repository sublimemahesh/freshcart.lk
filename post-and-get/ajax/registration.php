<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

$CUSTOMER = new Customer(NULL);


$CUSTOMER->name = $_POST['name'];
$CUSTOMER->email = $_POST['email'];
$CUSTOMER->password = md5($_POST['password']);
$CUSTOMER->phone_number = $_POST['phone_number'];
$CUSTOMER->district = $_POST['district'];
$CUSTOMER->city = $_POST['city'];
$CUSTOMER->address = $_POST['address'];


$CUSTOMER->create();

$result = ["status" => 'success'];
echo json_encode($result);
exit();

// put your code here
?>
 
