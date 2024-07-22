document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const modal = new bootstrap.Modal(document.getElementById("thankYouModal"));
    form.addEventListener("submit", function (e) {
        e.preventDefault();

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
                if (data.success) {
                    modal.show();
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
