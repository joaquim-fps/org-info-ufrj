/**
 * Created by Joaquim on 07/06/2015.
 */
$('.profile-form-modal').on('submit', function(event) {
    var emailInput = $('#email-profile', $(this)),
        nameInput = $('#name', $(this)),
        passwordInput = $('#password', $(this)),
        confirmationInput = $('#password_confirmation', $(this)),
        emailIsEmpty = emailInput.val() == "",
        nameIsEmpty = nameInput.val() == "",
        passwordIsEmpty = passwordInput.val() == "",
        confirmationIsEmpty = confirmationInput.val() == "";

    if (emailIsEmpty || nameIsEmpty || passwordIsEmpty || confirmationIsEmpty) {
        event.preventDefault();

        if(emailIsEmpty)
            emailInput.addClass('alert-danger');

        if(nameIsEmpty)
            nameInput.addClass('alert-danger');

        if(passwordIsEmpty)
            passwordInput.addClass('alert-danger');

        if(confirmationIsEmpty)
            confirmationInput.addClass('alert-danger');
    }
});

$('.password-recovery-form-modal').on('submit', function(event) {
    var currentPasswordInput = $('#current-password', $(this)),
        newPasswordInput = $('#new-password', $(this)),
        newConfirmationInput = $('#new-password_confirmation', $(this)),
        currentPasswordIsEmpty = currentPasswordInput.val() == "",
        newPasswordIsEmpty = newPasswordInput.val() == "",
        newConfirmationIsEmpty = newConfirmationInput.val() == "";

    if (currentPasswordIsEmpty || newPasswordIsEmpty || newConfirmationIsEmpty) {
        event.preventDefault();

        if(currentPasswordIsEmpty)
            currentPasswordInput.addClass('alert-danger');

        if(newPasswordIsEmpty)
            newPasswordInput.addClass('alert-danger');

        if(newConfirmationIsEmpty)
            newConfirmationInput.addClass('alert-danger');
    }
});

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

$('#email-profile, #password, #password_confirmation, #name, #current-password, #new-password, #new-password_confirmation, #email-sign-in, #password-sign-in, #email, #password, #password_confirmation').on('blur', function(event) {
    if ($(this).val() != "") {
        $(this).removeClass('alert-danger');
    }
});