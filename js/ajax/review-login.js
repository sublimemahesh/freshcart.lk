
//loging validation
$(document).ready(function () {
    $('#login-submit').click(function (event) {
        var product = $('#product').val();

        event.preventDefault();
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if (!$('#user_email').val() || $('#user_email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the email..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!emailReg.test($('#user_email').val())) {
            swal({
                title: "Error!",
                text: "please enter a valid email",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#user_password').val() || $('#user_password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the password..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {

            var formData = new FormData($("form#login-form")[0]);

            $.ajax({
                url: "post-and-get/ajax/loging.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {

                    if (result.status === 'error') {
                        swal({
                            title: "Error!",
                            text: "Invalid username or password!...",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        swal({
                            title: "Success.!",
                            text: "You have successfully login!...",
                            type: 'success',
                            timer: 1500,
                            showConfirmButton: false
                        });
                        var html = '<img  class="img-circle" src=upload/customer/profile/thumb/' + result.image_name + '>  ' + result.name;
                        $("#img_url").append(html);
                        $("#img-t").hide();
                       $('#myModal').modal('hide'); 
                    }
                }
            });
        }
        return false;
    }
    );
}); 