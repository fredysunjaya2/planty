<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/productDetail.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/utils.css') }}" />
</head>
<body>
    <div class="container-fluid d-flex m-0 p-0" style="width: 100%; height: 100vh">
        <div class="row col-12">
            <div class="col-5">
                <img src="../assets/beginner_kit.png" alt="" style="object-fit: cover; width: 100%; height: 100%">
            </div>
            <div class="container-content col-7 d-flex">
                <div class="content" style="margin: 6.5625rem 3.375rem 6.5625rem 3.375rem">
                    <div class="back-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.9375rem" height="1.9375rem" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                        </svg>
                    </div>
                    <div class="box-content" style="margin-left: 2.5rem">
                        <div class="title d-flex col-12">
                            <div class="tier row col-6">
                                <h1 class="planty-heading-1">Beginner</h1>
                                <p class="planty-text-sentence">subscription plan</p>
                            </div>
                            <div class="price d-flex col-6 justify-content-end align-items-center planty-text-sentence">
                                <h2 class="planty-heading-2">Rp 39.299,00</h2>
                                /Month
                            </div>
                        </div>
                        <div class="description d-flex row justify-center mt-3" style="width: 40.25rem; height: 22.75rem; padding: 2.3125rem 2.875rem 2.3125rem 2.875rem">
                            <div class="plan row-8">
                                <h3 class="planty-heading-4">Delivered Monthly</h3>
                                <p class="planty-text-sentence">Receive 1 kit of Beginner each month directly to your door shipped within 12-48 hours of processed payment. Plan doesn’t auto renews.</p>
                                <h3 class="planty-heading-4">Recurring Plan</h3>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected value="1">
                                        <p class="planty-text-sentence">6 months prepaid</p>
                                        <p class="planty-heading-4">(save 16%)</p>
                                    </option>
                                    <option value="2">
                                        <p class="planty-text-sentence">3 months prepaid</p>
                                        <p class="planty-heading-4">(save 9%)</p>
                                    </option>
                                    <option value="3">
                                        <p class="planty-text-sentence">1 month prepaid</p>
                                    </option>
                                </select>
                            </div>
                            <div class="pricing row-4 d-flex justify-content-center align-items-center">
                                <h3 class="me-1 planty-heading-4 opacity-50"><del>Rp.235.794,00</del></h3>
                                <h3 class="ms-1 planty-heading-4">Rp.198.066,96</h3>
                            </div>
                        </div>
                        <div class="as-gift d-flex align-items-center" style="height: 7.0625rem;">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input rounded-0" style="width: 1.625rem; height: 1.4375rem;" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label planty-heading-4 ms-2" for="flexCheckDefault">
                                  Give Beginner as a gift
                                </label>
                            </div>
                        </div>
                        <hr class="border-2" style="border-color: #618264; ">
                        <div class="payment-btn d-flex justify-content-center mt-5">
                            <button type="button" class="btn btn-success planty-heading-4 text-white" style="border-radius: 0.625rem;">Payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</body>
</html>