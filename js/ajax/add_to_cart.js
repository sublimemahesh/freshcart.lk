$(document).ready(function () {

    load_cart_data();
    function load_cart_data() {
        $.ajax({
            url: "post-and-get/ajax/fetch_cart.php",
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                $('#add-cart').html(data.cart_details);
                $('.badge').text(data.total_item);
            }
        });
    }



    $(document).on('click', '.add_to_cart', function () {

        var product_id = $(this).attr("id");
        var product_name = $('#name' + product_id + '').val();
        var product_price = $('#price' + product_id + '').val();
        var product_quantity = $('#quantity' + product_id + '').val();

        if (product_quantity > 0) {
            $.ajax({
                url: "post-and-get/ajax/action.php",
                type: "POST",
                data: {
                    product_quantity: product_quantity,
                    product_id: product_id,
                    product_name: product_name,
                    product_price: product_price,
                    action: "ADD"
                },
                success: function (data) {
                    load_cart_data();
                    $('#modalLoginForm').modal('hide');
                    swal({
                        title: "SUCCESS.!",
                        text: "Iteam has bean Checked!...",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            });
        } else {
            swal({
                title: "INFO.!",
                text: "Please Enter the quantity!...",
                type: 'success',
                timer: 1500,
                showConfirmButton: false
            });
        }
    });
    $(document).on('click', '.delete', function () {

        var product_id = $(this).attr("id");
        swal({
            title: "REMOVE!",
            text: "Do you really want to remove this cart?...",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#2b982b",
            confirmButtonText: "  Yes, Remove It!",
            closeOnConfirm: false
        }, function () {

            //Send Form data
            $.ajax({
                url: "post-and-get/ajax/action.php",
                type: "POST",
                data: {
                    product_id: product_id,
                    action: 'REMOVE'
                },
                success: function (result) {
                    if (result.status === 'error') {
                        swal({
                            title: "Error!",
                            text: "Error!...",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        load_cart_data();
                        $('#cart_item').hide();
                        swal({
                            title: "SUCCESS.!",
                            text: "Iteam has removed!...",
                            type: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    }
                }
            });
        });
        return false;
    });

    $(document).on('click', '#clear_cart', function () {
        swal({
            title: "CLEAR!",
            text: "Do you really want to clear cart?...",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#2b982b",
            confirmButtonText: "  Yes, Clear It!",
            closeOnConfirm: false
        }, function () {

            //Send Form data
            $.ajax({
                url: "post-and-get/ajax/action.php",
                type: "POST",
                data: {
                    action: 'EMPTY'
                },
                success: function () {
                    load_cart_data();
                    $('#cart-popover').popover('hide');
                    swal({
                        title: "SUCCESS.!",
                        text: "Your Cart has Bean Empty !...",
                        type: 'success',
                        timer: 1500,
                        showConfirmButton: false
                    });
                }

            });
        });
    });

    $('#up').click(function () {

        var num = parseInt($('.input-number').val()) + 1;
        var max = parseInt($('#max').val());
        var price = parseFloat($('#price').val());
        var discount = parseFloat($('#discount').val());

        if (discount >= 0) {
            if (price >= 0) {
                if (num >= max) {

                    var discount_amount = (price * discount) / 100;
                    var discount_price = (price - discount_amount) * max;

                    $('.input-number').val(max);
                    $('.total_price_amount').val(discount_price);

                } else {
                    var discount_amount = (price * discount) / 100;
                    var discount_price = (price - discount_amount) * num;
                    $('.input-number').val(num);
                    $('.total_price_amount').val(discount_price);
                }
            }
        } else {
            if (price >= 0) {
                if (num >= max) {
                    var total_price = price * max;
                    $('.total_price_amount').val(total_price);
                    $('.input-number').val(max);
                } else {
                    var total_price = price * num;
                    $('.total_price_amount').val(total_price);
                    $('.input-number').val(num);
                }
            }
        }

    });

    $('#down').click(function () {

        var num = parseInt($('.input-number').val()) - 1;
        var price = parseFloat($('#price').val());
        var discount = parseFloat($('#discount').val());
        var min = 1;

        if (discount >= 0) {
            if (price >= 0) {
                if (num <= min) {
                    var discount_amount = (price * discount) / 100;
                    var discount_price = (price - discount_amount) * min;

                    $('.input-number').val(min);
                    $('.total_price_amount').val(discount_price);

                } else {
                    var discount_amount = (price * discount) / 100;
                    var discount_price = (price - discount_amount) * num;

                    $('.input-number').val(num);
                    $('.total_price_amount').val(discount_price);
                }
            }
        } else {
            if (price >= 0) {

                if (num <= min) {
                    $('.input-number').val(min);
                    var total_price = price * min;
                    $('.total_price_amount').val(total_price);
                } else {
                    $('.input-number').val(num);
                    var total_price = price * num;
                    $('.total_price_amount').val(total_price);
                }
            }
        }

    });

    $('.up').click(function () {
         
        alert();
         
        
        
//        var num = parseInt($('.input-number').val()) + 1;
//        var max = parseInt($('#max').val());
//        var price = parseFloat($('#price').val());
//        var discount = parseFloat($('#discount').val());
//
//        if (discount >= 0) {
//            if (price >= 0) {
//                if (num >= max) {
//
//                    var discount_amount = (price * discount) / 100;
//                    var discount_price = (price - discount_amount) * max;
//
//                    $('.input-number').val(max);
//                    $('.total_price_amount').val(discount_price);
//
//                } else {
//                    var discount_amount = (price * discount) / 100;
//                    var discount_price = (price - discount_amount) * num;
//                    $('.input-number').val(num);
//                    $('.total_price_amount').val(discount_price);
//                }
//            }
//        } else {
//            if (price >= 0) {
//                if (num >= max) {
//                    var total_price = price * max;
//                    $('.total_price_amount').val(total_price);
//                    $('.input-number').val(max);
//                } else {
//                    var total_price = price * num;
//                    $('.total_price_amount').val(total_price);
//                    $('.input-number').val(num);
//                }
//            }
//        }

    });

    $('#down').click(function () {

        var num = parseInt($('.input-number').val()) - 1;
        var price = parseFloat($('#price').val());
        var discount = parseFloat($('#discount').val());
        var min = 1;

        if (discount >= 0) {
            if (price >= 0) {
                if (num <= min) {
                    var discount_amount = (price * discount) / 100;
                    var discount_price = (price - discount_amount) * min;

                    $('.input-number').val(min);
                    $('.total_price_amount').val(discount_price);

                } else {
                    var discount_amount = (price * discount) / 100;
                    var discount_price = (price - discount_amount) * num;

                    $('.input-number').val(num);
                    $('.total_price_amount').val(discount_price);
                }
            }
        } else {
            if (price >= 0) {

                if (num <= min) {
                    $('.input-number').val(min);
                    var total_price = price * min;
                    $('.total_price_amount').val(total_price);
                } else {
                    $('.input-number').val(num);
                    var total_price = price * num;
                    $('.total_price_amount').val(total_price);
                }
            }
        }

    });
});

