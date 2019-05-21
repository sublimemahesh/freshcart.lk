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

$dir_dest = '../../upload/customer/profile/';

$handle = new Upload($_FILES['image_name']);

$imgName = null;

if ($handle->uploaded) {
    $handle->image_resize = true;
    $handle->file_new_name_ext = 'jpg';
    $handle->image_ratio_crop = 'C';
    $handle->file_new_name_body = Helper::randamId();
    $handle->image_x = 30;
    $handle->image_y = 30;

    $handle->Process($dir_dest);

    if ($handle->processed) {
        $info = getimagesize($handle->file_dst_pathname);
        $imgName = $handle->file_dst_name;
    }
}

$CUSTOMER->image_name = $imgName;
$CUSTOMER->create();

$result = ["status" => 'success'];
echo json_encode($result);
exit();

// put your code here
?>
 
