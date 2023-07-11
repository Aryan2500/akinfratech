$(document).ready(function () {
    $('#siteForm').validate({
        rules: {
            address: {
                required: true,
            },
            total_size: {
                required: true,

            },
            name: {
                required: true,
            },

            sitehead_id: {
                required: true,
            },
        },
        messages: {

            name: {
                required: "Please enter name",
            },
            sitehead_id: {
                required: "Please select site head",
            },
            address: {
                required: "Please enter   address",
            },
            total_size: {
                required: "Please enter total size",

            }
        },
        submitHandler: function (form) {

            form.submit();
        }
    });
});
