<?php
 
//featch_cart
session_start();
 

$total_item = 0;
$total_price = 0;
$output = '';

$output .= '<div class="table-responsive" id="order_table">'
        . '<table class="table table-bordered table-striped">'
        . '<tr>'
        . '<th width="40%">Product Name </th>'
        . '<th width="40%">Quantity</th>'
        . '<th width="40%">Price</th>'
        . '<th width="40%">Total</th>'
        . '<th width="40%">Action</th>'
        . '</tr>';

if (!empty($_SESSION["shopping_cart"])) {

    foreach ($_SESSION["shopping_cart"] as $key => $value) {
       
        $output .= '<tr>'
                . '<td>' . $value["product_name"] . '</td>'
                . '<td>' . $value["product_quantity"] . '</td>'
                . '<td>' . $value["product_price"] . '</td>'
                . '<td align="right">$' . number_format($value["product_quantity"] * $value["product_price"], 2) . '</td>'
                . '<td> <button name="delete" class="btn btn-danger btn-xs delete" id="' . $value["product_id"] . '">Remove</button></td>'
                . '</tr>';

        $total_price = $total_price + ($value["product_quantity"] * $value["product_price"]);
        $total_item = $total_item + 1;
    }
    $output .= '<tr>'
            . '<td colspan="3" align="right"> Total </td>'
            . '<td  align="right">$' . number_format($total_price, 2) . '</td>'
            . '<td></td>'
            . '</tr>';
} else {
    $output .= '<tr>'
            . '<td colspan="5" align="center">'
            . 'Your Cart is Empty!.'
            . '</td>'
            . '</tr>';
}
$output .= '</table></div>';

$data = array(
    'cart_details' => $output,
    'total_price' => '$' . number_format($total_item, 2),
    'total_item' => $total_item
);
 
echo json_encode($data);
?>