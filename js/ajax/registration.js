
//registration validation
$(document).ready(function () {
    $('#register-submit').click(function (event) {
        event.preventDefault();
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the name..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the email..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!emailReg.test($('#email').val())) {
            swal({
                title: "Error!",
                text: "please enter a valid email",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#phone_number').val() || $('#phone_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the contact number..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the address..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#password').val() || $('#password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the password..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#confirm-password').val() || $('#confirm-password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the confirm password..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#password').val() !== $('#confirm-password').val()) {
            swal({
                title: "Error!",
                text: "Please enter the Password does not match..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {

            var formData = new FormData($("form#register-form")[0]);

            $.ajax({
                url: "post-and-get/ajax/registration.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {
                    alert(result.image_name);
                    if (result.status === 'error') {
                        swal({
                            title: "Error!",
                            text: "Some Error",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        swal({
                            title: "Success.!",
                            text: " Your Account has been Active now.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {

                                var html = '<img  class="img-circle" src=../upload/customer/profile/thumb/' + result.image_name + '>  ' + result.name;
                                html += '<ul class="sub-menu-top">';
                                html += '<li><a href="post-and-get/logout.php"><i class="fa fa-sign-in"></i> Log Out</a></li>';
                                html += '</ul>';
                                $("#img_url").empty();
                                $("#img_url").append(html);
                                $("#img-t").hide();
                                $("#model-button").hide();
                                $("#create").show();
                                window.location.replace("customer-dashboard.php");
                            }, 2000);
                        });
                    }
                }
            });
        }
        return false;
    }
    );
});
//Registration validation



