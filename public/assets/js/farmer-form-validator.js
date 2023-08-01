$(document).ready(function () {
    $('#farmerForm').validate({
        rules: {
            country_id: {
                required: true,
            },
         
            state_id: {
                required: true,
            },

            city_id: {
                required: true,
            },

            name: {
                required: true
            },
            phone: {
                required: true
            },
            address: {
                required: true
            }

        },
        messages: {

            country_id: {
                required: "Please select country",
            },
          
            state_id: {
                required: "Please select state",
            },
            city_id: {
                required: "please select city",

            },
            phone: {
                required: "Please enter phone number",
            }
            ,
            name: {
                required: "enter farmer name"
            },
            address: {
                required: "enter farmer address"
            }
        },
        submitHandler: function (form) {

            form.submit();
        }
    });
});
