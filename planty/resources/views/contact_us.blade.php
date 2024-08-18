<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Contact Us - Plant Care</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet">
    <link href="{{ asset('/css/utils.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/contact_us_style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <x-navbar></x-navbar>
    <div class='row container-fluid contact-container p-0 m-0'>
        <div class='col-5 contact-img-container position-relative'>
            <img src="{{ asset('/assets/contactus/contactus.png') }}" alt="Plants and hand">
        </div>
        <div class="col-7 form-container contact">
            <h1 class="planty-heading-1 text-center mb-2">Contact Us</h1>
            <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="form-textfield">
                    <div class="planty-heading-4 contact-item">
                        <label for='email'>Email</label>
                        <input id='email' name='email' required type='email'>
                    </div>
                    <div class="planty-heading-4 contact-item">
                        <label for='type'>Type</label>
                        <select id='type' name='type' required>
                            <option value="" selected disabled>Select an issue type</option>
                            <option value="complain">Complain</option>
                            <option value="technical issue">Technical Issue</option>
                            <option value="delivery">Delivery</option>
                            <option value="redeem code issue">Redeem Code Issue</option>
                            <option value="account problem">Account Problem</option>
                            <option value="other issue">Other Issue</option>
                        </select>
                    </div>
                    <div class="planty-heading-4 contact-item">
                        <label for='message'>Message</label>
                        <textarea id='message' name='message' required></textarea>
                    </div>
                </div>
                <button class="mt-5 contact-btn planty-heading-4" type='submit'>Send</button>
            </form>
        </div>
    </div>

    <!-- Keep the existing modal and script tags -->
</body>

</html>

        <!-- Popup Modal -->
        <div class="modal fade justify-content-center align-items-center m-0" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center planty-heading-4">
                        <h4 class="modal-title" id="thankYouModalLabel">Thankyou for contacting us!!!</h4>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/contact-form.js') }}"></script>
</body>

</html>
