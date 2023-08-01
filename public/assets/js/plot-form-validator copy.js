$(document).ready(function () {
    $('#plotForm').validate({
        rules: {
            name: {
                required: true,
            },
            size: {
                required: true,

            },
            address: {
                required: true,
            },
            price: {
                required: true,
            },
            site_id: {
                required: true,
            },
            plottype_id: {
                required: true,
            },
        },
        messages: {

            name: {
                required: "Please enter name",
            },
            size: {
                required: "Please enter size",
            },
            address: {
                required: "Please enter  address",
            },
            price: {
                required: "Please enter  price",
            },
            site_id: {
                required: "Please select site",
            },
            plottype_id: {
                required: "Please select plot type",
            }
        },
        submitHandler: function (form) {

            form.submit();
        }
    });
});
