/**
 * Created by Joaquim on 04/06/2015.
 */
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

$('#current-password, #new-password, #new-password_confirmation').on('blur', function(event) {
    if ($(this).val() != "") {
        $(this).removeClass('alert-danger');
    }
});
