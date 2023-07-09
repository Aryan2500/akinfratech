$(document).ready(function () {
    $('#login_form').validate({
        rules: {
            password: {
                required: true,
            },
            email: {
                required: true,
                email: true
            }
    },
        messages: {
            password: {
                required: "Please enter your password",
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            }
        },
        submitHandler: function (form) {

            form.submit();
        }
    });
});
