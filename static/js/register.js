$(document).ready(function() {
    $('form[name="registerfrm"]').on('submit', function() {
        // $('form[name="frmRegister"] input[type="submit"]').prop('disabled', true)

        $.ajax({
            url: 'register',
            method: 'POST',
            data: $(this).serialize(),
            success: function(result) {
                const data = JSON.parse(result)
                if (data.success) {
                    $('form[name="registerfrm"] input[type="submit"]').prop('disabled', false)
                    window.location.href = "home";
                } else {
                    $('#register-message').html(data.message).show()
                }
            }
        })
    })

    // $('#register-cancel').on('click', function() {
    //     window.location.href = "/"
    // })
})