var transaction;
var breakpoint = window.matchMedia("(max-width: 992px)");

function handleMediaQuery(e) {
    var container = document.querySelector('.order-summary-container');
    var newContainer = document.querySelector('.paymentDetails');

    if(e.matches) {
        var btn = document.querySelector('.payment-btn');
        var temp = container.removeChild(btn);
        newContainer.appendChild(temp);
    } else {
        if(newContainer.querySelector('.payment-btn') != null) {
            var btn = document.querySelector('.payment-btn');
            var temp = newContainer.removeChild(btn);
            container.appendChild(temp);
        }
    }
}

breakpoint.addEventListener("change", handleMediaQuery);

document.addEventListener('DOMContentLoaded', function () {
    handleMediaQuery(breakpoint);
});

document.getElementById('pay-button').addEventListener('click', function (e) {
    e.preventDefault();

    if (transaction != null) {
        windowPayment();
    } else {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/process-payment',
            data: JSON.stringify(gift),
            type: 'POST',
            success: function (response) {
                transaction = JSON.parse(response);

                if (gift["isRedeemed"] == "false") {
                    windowPayment();
                } else {
                    window.location.href = '/process-payment/success/' + transaction.token + "/" + gift["isGift"] + "/" + gift["isRedeemed"];
                }
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    }

});


document.addEventListener("DOMContentLoaded", function () {
    var shippingTab = document.getElementById('nav-shippingInfo-tab');

    if (gift["isGift"]) {
        shippingTab.disabled = true;
        shippingTab.style.pointerEvents = 'none';
        shippingTab.style.opacity = '0.5';
    } else {
        shippingTab.disabled = false;
        shippingTab.style.pointerEvents = 'auto';
        shippingTab.style.opacity = '1';
    }
});

function windowPayment() {
    // SnapToken acquired from previous step
    window.snap.pay(transaction.snap_token, {
        onSuccess: function (result) {
            if(gift["isGift"]) {
                document.querySelector('.modal-btn').click();
                document.querySelector('.modal-footer button').addEventListener('click', function() {
                    window.location.href = '/process-payment/success/' + transaction.token + "/" + gift["isGift"] + "/" + gift["isRedeemed"];
                });
            } else {
                window.location.href = '/process-payment/success/' + transaction.token + "/" + gift["isGift"] + "/" + gift["isRedeemed"];
            }
        },
        onPending: function (result) {
            /* You may add your own js here, this is just example */
            // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        // Optional
        onError: function (result) {
            window.location.href = '/process-payment/failed/' + transaction.token;
        },
        onClose: function (result) {
            window.snap.hide();
        }
    });
}
