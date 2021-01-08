$(document).ready(function() {
    $('#email').focus();

    $('form[name="inviteLoginfrm"]').on('submit', function(e) {
        let error = false;
        const email = $.trim($('#email').val())
        const password = $.trim($('#password').val())

        if (email == '' || password == '') {
            return false
        }

        $('input').on('focus', function() {
            $('#login-message').hide();
        })

        $('input[type="text"], input[type="password"]').on('focus', function() {
            $('#email').removeClass('input-error')
            $('#password').removeClass('input-error')
        })

        // $('form[name="frmLogin"] input[type="submit"]').prop('disabled', true)
        $.ajax({
            url: 'invite/auth',
            method: 'POST',
            data: $(this).serialize(),
            success: function(result) {
                const data = JSON.parse(result);
                if (data.success) {
                    // document.cookie = "loged_in=3";
                    $('form[name="inviteLoginfrm"] input[type="submit"]').prop('disabled', false);
                    window.location.href = "cv-show";
                } else {
                    $('#login-message').html('data.message').show();
                }
            }
        })
    })
});