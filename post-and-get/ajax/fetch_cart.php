<?php

include_once(dirname(__FILE__) . '/../../class/include.php');
//featch_cart
session_start();

$product = 0;
$quantity = 0;
$total_item = 0;
$total_price = 0;
$output = '';

$output .= '<table cellspacing="0" class="shop_table cart table">'
        . '<thead>'
        . '<tr>'
        . '<th width="20%">Product Name </th>'
        . '<th width="20%">Image</th>'
        . '<th width="20%">Quantity</th>'
        . '<th width="20%">Price</th>'
        . '<th width="20%">Total</th>'
        . '<th width="10%" >Action</th>'
        . '</tr>'
        . '</thead>';

if (!empty($_SESSION["shopping_cart"])) {

    foreach ($_SESSION["shopping_cart"] as $key => $value) {
        $PRODUCT = new Product($value["product_id"]);

        $output .= '<tr class="cart_item">'
                . '<td class="product-remove">' . $value["product_name"] . '</td>'
                . '<td class="product-remove" >'
                . '<img src="upload/product-categories/sub-category/product/photos/' . $PRODUCT->image_name . '" width="30%"/>'
                . '</td>'
                . '<td class="product-remove">'
                . ' <div class="input-group" style="width: 70%"> '
                . ' <input type="number" name="quantity"   class="quty-size form-control  text-center quantity"  product_id=' . $value["product_id"] . ' value="' . $value["product_quantity"] . '" min="1" max="10"/>
                     </div> '
                . '</td>'
                . '<td class="product-remove">Rs: ' . number_format($value["product_price"], 2) . '</td>'
                . '<td class="product-remove">Rs: ' . number_format($value["product_quantity"] * $value["product_price"], 2) . '</td>'
                //  . '<td class="product-remove">Rs: ' . $value["product_quantity"] . '</td>'
                //hidden values in form 
                . ' <input type="hidden" class="form-control  "  product_id="' . $value["product_id"] . '" /> '
                . '<input type="hidden" class="form-control" id="price" name="price" value="' . $value["product_price"] . '"/>'
                . '<input type="hidden" class="form-control max"   value="' . $PRODUCT->unite . '"/>'
                . '<td class="product-remove"> <button name="delete" class="btn btn-danger btn-xs delete" id="' . $value["product_id"] . '">Remove</button></td>'
                . '</tr>';

        $total_price = $total_price + ($value["product_quantity"] * $value["product_price"]);
        $total_item = $total_item + 1;
    }
    $output .= '<tr>'
            . '<td class="product-remove" colspan="4" align="right"> Total </td>'
            . '<td class="product-remove"  align="right" >Rs: ' . number_format($total_price, 2) . '</td>'
            . '<td class="product-remove" > </td>'
            . '</tr>';
} else {
    $output .= '<tr>'
            . '<td colspan="6" align="center" class="product-remove">'
            . 'Your Cart is Empty!.'
            . '</td>'
            . '</tr>';
}
$output .= '<input type="hidden" class="form-control" id="total_price"   value="' . $total_price . '"/>';
$output .= '</table>';

$data = array(
    'cart_details' => $output,
    'total_price' => 'Rs' . number_format($total_item, 2),
    'total_item' => $total_item
);

echo json_encode($data);
?>