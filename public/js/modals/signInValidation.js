/**
 * Created by Joaquim on 04/06/2015.
 */
$('.sign-in-form-modal').on('submit', function(event) {
    var emailInput = $('#email-sign-in', $(this)),
        passwordInput = $('#password-sign-in', $(this)),
        emailIsEmpty = emailInput.val() == "",
        passwordIsEmpty = passwordInput.val() == "";

    if (emailIsEmpty || passwordIsEmpty) {
        event.preventDefault();

        if (emailIsEmpty)
            emailInput.addClass('alert-danger');

        if (passwordIsEmpty)
            passwordInput.addClass('alert-danger');
    }
});

$('#email-sign-in, #password-sign-in').on('blur', function(event) {
    if ($(this).val() != "") {
        $(this).removeClass('alert-danger');
    }
});