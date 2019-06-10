$(document).ready(function () {

    $('#submit').click(function (event) {
        event.preventDefault();

        //Arrays
        var id = [];
        var quantity = [];
        var price = [];

        var total_price = $('#total_price').val();

        //Products
        $('input[name="id[]"]').each(function () {
            id.push(this.value);
        });

        //Product Quantity
        $('input[name="quantity[]"]').each(function () {
            quantity.push(this.value);
        });

        //Product Price
        $('input[name="price[]"]').each(function () {
            price.push(this.value);
        });

        swal({
            title: "Info!",
            text: "Do you really want to Checkout?...",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#2b982b",
            confirmButtonText: "  Yes, Verify It!",
            closeOnConfirm: false
        }, function () {

            //Send Form data
            $.ajax({
                url: "post-and-get/ajax/cart-form.php",
                type: 'POST',
                data: {
                    id: id,
                    quantity: quantity,
                    price: price,
                    total_price: total_price
                },
                dataType: "JSON",
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
                        swal({
                            title: "Success.!",
                            text: "Data Send Successfully!...",
                            type: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.replace("add-to-cart.php");
                            }, 2000);
                        });
                    }
                }
            });
        });

    });
}); 