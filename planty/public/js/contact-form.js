document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const modal = document.getElementById("thankYouModal");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        // Show the loading screen
        loadingIndicator.classList.add('show');

        fetch(form.action, {
            method: "POST",
            body: new FormData(form),
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => response.json())
            .then((data) => {
                // Hide the loading screen
                loadingIndicator.classList.remove('show');

                if (data.success) {
                    document.querySelector('.modal-btn').click();
                    form.reset();
                } else {
                    alert(
                        "Failed to send email: " +
                        (data.message || "Unknown error")
                    );
                }
            })
            .catch((error) => {
                console.error("Error:", error);
                alert("An error occurred. Please try again.");
            });
    });
});
