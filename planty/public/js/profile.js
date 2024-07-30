var editProfileBtn = document.querySelector(".profile-personal-info .edit-btn");
var submitProfileBtn = document.querySelector(".profile-personal-info .submit-btn");
var redeemCode;

editProfileBtn.addEventListener('click', function () {
    var textFields = document.querySelectorAll(".profile-personal-info .profile-item input");
    textFields.forEach(function (textField) {
        textField.disabled = !textField.disabled;
        // if (textField.disabled) {
        //     textField.classList.remove('enabledField');
        // } else {
        //     textField.classList.add('enabledField');
        // }
    });

    textFields[0].disabled ? editProfileBtn.classList.remove('enabled') : editProfileBtn.classList.add('enabled');

    textFields[0].disabled ? submitProfileBtn.classList.remove('enabled') : submitProfileBtn.classList.add('enabled');
});

var editProfileBtn2 = document.querySelector(".profile-address .edit-btn");
var submitProfileBtn2 = document.querySelector(".profile-address .submit-btn");

editProfileBtn2.addEventListener('click', function () {
    var textFields = document.querySelectorAll(".profile-address .profile-item input");
    textFields.forEach(function (textField) {
        textField.disabled = !textField.disabled;
        // if (textField.disabled) {
        //     textField.classList.remove('enabledField');
        // } else {
        //     textField.classList.add('enabledField');
        // }
    });

    textFields[0].disabled ? editProfileBtn2.classList.remove('enabled') : editProfileBtn2.classList.add('enabled');

    textFields[0].disabled ? submitProfileBtn2.classList.remove('enabled') : submitProfileBtn2.classList.add('enabled');
});

document.getElementById('redeem-code').addEventListener('change', function (e) {
    redeemCode = this.value;
});

document.getElementById('redeem-button').addEventListener('click', function (e) {
    e.preventDefault();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/redeem-code',
        data: JSON.stringify({ "redeem_code": redeemCode }),
        type: 'POST',
        success: function (response) {
            result = JSON.parse(response);

            redeemForm = document.getElementById('redeem-code-form');
            redeemForm.action = document.location.origin + '/payment-detail/' + result["slug"];
            redeemForm.submit();
        },
        error: function (xhr, status, error) {
            console.log(error);
        }
    });
});
