/**
 * Created by Joaquim on 04/06/2015.
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

$('#email-profile, #password, #password_confirmation, #name').on('blur', function(event) {
    if ($(this).val() != "") {
        $(this).removeClass('alert-danger');
    }
});
