<?php

//featch_cart
session_start();


$total_item = 0;
$total_price = 0;
$output = '';

$output .= '<table cellspacing="0" class="shop_table cart table">'
        . '<thead>'
        . '<tr>'
        . '<th width="20%">Product Name </th>'
        . '<th width="20%">Quantity</th>'
        . '<th width="20%">Price</th>'
        . '<th width="20%">Total</th>'
        . '<th width="10%" >Action</th>'
        . '</tr>'
        . '</thead>';

if (!empty($_SESSION["shopping_cart"])) {

    foreach ($_SESSION["shopping_cart"] as $key => $value) {

        $output .= '<tr class="cart_item">'
                . '<td class="product-remove">' . $value["product_name"] . '</td>'
                . '<td class="product-remove">'
                . '<div class="input-group" style="width: 50%">
                    <div class="input-group-btn">
                        <button   class="btn btn-default down" type="button">
                            <span class="glyphicon glyphicon-minus">                                                               
                            </span>
                        </button>
                    </div>                                               
                        <input  type="text" name="quantity"  id="quantity' . $value["product_id"] . '"     min="1"    class="form-control input-number text-center" value="1" />
                    <div class="input-group-btn">
                     
                    <div  class="btn btn-default up"   >
                            <span class="glyphicon glyphicon-plus"></span>
                        </div>
                     </div>
                   </div>'
                . '</td>'
                . '<td class="product-remove">Rs: ' . $value["product_price"] . '</td>'
                . '<td class="product-remove">Rs: ' . number_format($value["product_quantity"] * $value["product_price"], 2) . '</td>'

                //hidden values in form
                . '<input type="hidden" class="form-control" id="id" name="id[]" value="' . $value["product_id"] . '"/>'
                . '<input type="hidden" class="form-control" id="price" name="price[]" value="' . $value["product_price"] . '"/>'
                . '<td class="product-remove"> <button name="delete" class="btn btn-danger btn-xs delete" id="' . $value["product_id"] . '">Remove</button></td>'
                . '</tr>';

        $total_price = $total_price + ($value["product_quantity"] * $value["product_price"]);
        $total_item = $total_item + 1;
    }
    $output .= '<tr>'
            . '<td class="product-remove" colspan="3" align="right"> Total </td>'
            . '<td class="product-remove"  align="right" >Rs: ' . number_format($total_price, 2) . '</td>'
            . '<td class="product-remove" > </td>'
            . '</tr>';
} else {
    $output .= '<tr>'
            . '<td colspan="5" align="center" class="product-remove">'
            . 'Your Cart is Empty!.'
            . '</td>'
            . '</tr>';
}
$output .= '<input type="hidden" class="form-control" id="total_price"   value="' . $total_price . '"/>';
$output .= '</table>';

$data = array(
    'cart_details' => $output,
    'total_price' => '$' . number_format($total_item, 2),
    'total_item' => $total_item
);

echo json_encode($data);
?>