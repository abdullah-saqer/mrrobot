$(document).ready(function (event) {
    $("#input-password").on("keyup", function () {
        if ($(this).val())
            $(".glyphicon-eye-open").show();
        else
            $(".glyphicon-eye-open").hide();
    });
    $(".glyphicon-eye-open").bind('mousedown touchstart', function () {
        $("#input-password").attr('type', 'text');
    }).bind('mouseup touchend', function () {
        $("#input-password").attr('type', 'password');
    }).mouseout(function () {
        $("#input-password").attr('type', 'password');
    });


    $("#login_btn").click(function () {
        $(this).attr('disabled', true);
        var email = $("#input-username").val();
        var password = $("#input-password").val();
        if (email.length && password.length) {
            $.ajax({
                url: 'functions/responder.php',
                type: 'POST',
                data: 'userLogin=1&email=' + email + '&password=' + password,
                success: function (result) {
                    if (result == -1) {
                        $('#login_btn').attr('disabled', false);
                        $("#error-message").html("Incorrect email or password");
                    }
                    else {
                        window.location.href = '/mrrobot/index.php';

                    }

                }
            });

        }
        else {

            $("#error-message").html("Please fill all required informations");

        }

    });

});


