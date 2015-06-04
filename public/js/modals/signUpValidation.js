/**
 * Created by Joaquim on 04/06/2015.
 */
$('.sign-up-form-modal').on('submit', function(event) {
    var emailInput = $('#email', $(this)),
        passwordInput = $('#password', $(this)),
        confirmationInput = $('#password_confirmation', $(this)),
        emailIsEmpty = emailInput.val() == "",
        passwordIsEmpty = passwordInput.val() == "",
        confirmationIsEmpty = confirmationInput.val() == "";

    if (emailIsEmpty || passwordIsEmpty || confirmationIsEmpty) {
        event.preventDefault();

        if(emailIsEmpty)
            emailInput.addClass('alert-danger');

        if(passwordIsEmpty)
            passwordInput.addClass('alert-danger');

        if(confirmationIsEmpty)
            confirmationInput.addClass('alert-danger');
    }
});

$('#email, #password, #password_confirmation').on('blur', function(event) {
    if ($(this).val() != "") {
        $(this).removeClass('alert-danger');
    }
});
