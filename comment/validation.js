$(document).ready(function () {

    $("#create").click(function (event) {
        event.preventDefault();
        var product = $('#product').val();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your title",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#stars').val() || $('#stars').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your stars",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#comment').val() || $('#comment').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Comment",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#captchacode').val() || $('#captchacode').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the captcha code",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {

            var formData = new FormData($("form#form-data")[0]);

            $.ajax({
                url: "comment/add-review.php",
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
                            text: "Security code is invalid",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        swal({
                            title: "Success.!",
                            text: "Thank For You..! Your review has been Active in few minutes.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.replace("view-product.php?id=" + product);
                            }, 2000);
                        });
                    }
                }
            });
        }
        return false;
    });

});

