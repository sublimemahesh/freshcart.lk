$(document).ready(function () {

    $('#place_order').click(function () {
        if ($('#txtCountry').val().length === 0 || !$('#txtCountry').val()) {
            swal({
                title: "Error!",
                text: "Please enter the country..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if ($('#txtAddress').val().length === 0 || !$('#txtAddress').val()) {
            swal({
                title: "Error!",
                text: "Please enter the address..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if ($('#txtCity').val().length === 0 || !$('#txtCity').val()) {
            swal({
                title: "Error!",
                text: "Please enter the city..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#agree').is(':checked')) {
            swal({
                title: "Error!",
                text: "Please accept the company's terms & conditions by clicking the checkbox!.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
            return false;
        } else {
            alert(111);
            var member = $('#member').val();
            var country = $('#txtCountry').val();
            var address = $('#txtAddress').val();
            var postalCode = $('#txtPostcode').val();
            var city = $('#txtCity').val();
            var orderNote = $('#txtOrderNote').val();
            var amount = $('#total_amount').val();

            $.ajax({
                url: "post-and-get/ajax/order.php",
                type: "POST",
                data: {
                    member: member,
                    country: country,
                    address: address,
                    postalCode: postalCode,
                    city: city,
                    orderNote: orderNote,
                    amount: amount,
                    action: "ADDORDER"
                },
                success: function (data) {
                    if (data === 'error') {
                        swal({
                            title: "Error.!",
                            text: "There was an error!...",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        swal({
                            title: "Success.!",
                            text: "Order has been saved successfully!...",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        location.reload();
                    }

                }
            });
        }
    });
});
