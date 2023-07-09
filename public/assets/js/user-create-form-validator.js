$(document).ready(function () {
    $('#userForm').validate({
        rules: {
            password: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            name: {
                required: true,
            },

            user_type: {
                required: true,
            },
        },
        messages: {

            name: {
                required: "Please enter name",
            },
            user_type: {
                required: "Please select user type",
            },
            password: {
                required: "Please enter   password",
            },
            email: {
                required: "Please enter  email",
                email: "Please enter a valid email address"
            }
        },
        submitHandler: function (form) {

            form.submit();
        }
    });
});
