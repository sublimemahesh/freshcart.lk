$(document).ready(function () {

    load_cart_data();

    function load_cart_data() {
        $.ajax({
            url: "post-and-get/ajax/fetch_cart.php",
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                $('#cart_details').html(data.cart_details);
                $('.badge').text(data.total_item);
            }
        });
    }

    $('#cart-popover').popover({
        html: true,
        container: 'body',
        content: function () {
            return $('#popover_content_wrapper').html();
        }
    });


    $(document).on('click', '.add_to_cart', function () {

        var product_id = $(this).attr("id");

        var product_name = $('#name' + product_id + '').val();
//        var product_price = $('#price' + product_id + '').val();
        var product_quantity = $('#quantity' + product_id + '').val();

 
        var product_price = 1200;
       
        var action = "ADD";

        if (product_quantity > 0) {
            $.ajax({
                url: "post-and-get/ajax/action.php",
                type: "POST",
                data: {
                    product_quantity: product_quantity,
                    product_id: product_id,
                    product_name: product_name,
                    product_price: product_price,
                    action: action
                },

                success: function (data) {
                    load_cart_data();
                    $('#modalLoginForm').modal('hide');
                    alert("Iteam has bean active");
                }
            });
        } else {
            alert("Please Enter hte NEw ");
        }
    });

    $(document).on('click', '.delete', function () {

        var product_id = $(this).attr("id");

        if (confirm("Are you sure want to remove this Product?")) {
            $.ajax({
                url: "post-and-get/ajax/action.php",
                type: "POST",
                data: {
                    product_id: product_id,
                    action: 'REMOVE'
                },
                success: function () {
                    load_cart_data();
                    $('#cart-popover').popover('hide');
                    alert('Iteam has Romoved');
                }
            });
        } else {
            return false;
        }
    });

    $(document).on('click', '#clear_cart', function () {
        $.ajax({
            url: "post-and-get/ajax/action.php",
            type: "POST",
            data: {
                action: 'EMPTY'
            },
            success: function () {
                load_cart_data();
                $('#cart-popover').popover('hide');
                alert('Your Cart has Bean Empty ');
            }
        });
    });

});

