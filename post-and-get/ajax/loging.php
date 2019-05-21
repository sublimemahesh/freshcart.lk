<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

$CUSTOMER = new Customer(NULL);

$username = filter_var($_POST['user_email'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['user_password'], FILTER_SANITIZE_STRING);

if ($CUSTOMER->login($username, $password)) {
    $data = $CUSTOMER->login($username, $password);
    
    $result = ["status" => 'success', 'image_name' =>$data->image_name,'name'=>$data->name];
    echo json_encode($result);
    exit();
} else {
    $result = ["status" => 'error'];
    echo json_encode($result);
    exit();
}
?>
 
