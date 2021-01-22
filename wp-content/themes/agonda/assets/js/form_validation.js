$(document).ready(function () {
    $("#myform1").validate({
        ignore: ":hidden",
        rules: {
            email: {
                required: true,
                email: true
            },
            firstName: {
                required: true
            },
            phone: {
                required:true,
                pattern: "[0-9]+",
                minlength:10,
                maxlength:10
            }
        },
        submitHandler: function (form) {
            $.ajax({
                type: "POST",
                url: "ajax_submit.php",
                data: $(form).serialize(),
                success: function () {
                    window.location.href='thank-you.html';
                    /*
                    $('.msg1').html("<h2>Thank you for contacting us! We will contact you soon</h2>");
                    $("#myform1")[0].reset();
                    */
                }
            });
            return false; // required to block normal submit since you used ajax
        }
    });

    $("#myform").validate({
        ignore: ":hidden",
        rules: {
            email: {
                required: true,
                email: true
            },
            firstName: {
                required: true
            },
            phone: {
                required:true,
                pattern: "[0-9]+",
                minlength:10,
                maxlength:10
            }
        },
        submitHandler: function (form) {
            $.ajax({
                type: "POST",
                url: "ajax_submit.php",
                data: $(form).serialize(),
                success: function () {
                    window.location.href='thank-you.html';
                    /*
                    $('.msg').html("<h2>Thank you for contacting us! We will contact you soon</h2>");
                    $("#myform")[0].reset();
                    setTimeout(function(){
                        $('#myModal').modal('hide');
                    }, 10000);
                    */
                }
            });
            return false; // required to block normal submit since you used ajax
        }
    });
});