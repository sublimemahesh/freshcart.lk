$(document).ready(function () {

    $('#submit').click(function (event) {
        event.preventDefault(); 

        swal({
            title: "Info!",
            text: "Do you really want to Checkout?...",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#10d1ca",
            confirmButtonText: "  Yes, Checkout It!",
            closeOnConfirm: false
        }, function () {
            var formData = new FormData($("form#form-data")[0]);
            //Send Form data
            $.ajax({
                url: "post-and-get/ajax/cart-form.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
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
                        
                        
                    }
                }
            });
        });

    });
}); 