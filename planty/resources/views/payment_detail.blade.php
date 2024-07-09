<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Detail</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/paymentDetails.css') }}" />
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <div class="row col-12">
            <div class="col-1"></div>
            <div class="paymentDetails col-6 mt-5 mb-5 p-3">
                <div class="title m-4">
                    <h3>Payment Details</h3>
                </div>
                <div class="content-tab">
                    <nav>
                        <div class="nav nav-underline m-0 p-0 gap-0 d-flex justify-content-center" id="nav-tab" role="tablist">
                          <button class="nav-link active col-4" id="nav-customerDetails-tab" data-bs-toggle="tab" data-bs-target="#nav-customerDetails" type="button" role="tab" aria-controls="nav-customerDetails" aria-selected="true" style="color: rgba(0,0,0,0.4)">Customer Details</button>
                          <button class="nav-link col-4" id="nav-shippingInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-shippingInfo" type="button" role="tab" aria-controls="nav-shippingInfo" aria-selected="false" style="color: rgba(0,0,0,0.4)">Shipping Info</button>
                          <button class="nav-link col-4" id="nav-paymentMethod-tab" data-bs-toggle="tab" data-bs-target="#nav-paymentMethod" type="button" role="tab" aria-controls="nav-paymentMethod" aria-selected="false" style="color: rgba(0,0,0,0.4)">Payment Method</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active ms-5 me-5 mt-4" id="nav-customerDetails" role="tabpanel" aria-labelledby="nav-customerDetails-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" style="height: 3.3125rem; border-radius: 0.625rem; border: 1px solid #618264;">
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" style="height: 3.3125rem; border-radius: 0.625rem; border: 1px solid #618264;">
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" style="height: 3.3125rem; border-radius: 0.625rem; border: 1px solid #618264;">
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput3" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="formGroupExampleInput3" style="height: 3.3125rem; border-radius: 0.625rem; border: 1px solid #618264;">
                              </div>
                        </div>
                        <div class="tab-pane fade ms-5 me-5 mt-4" id="nav-shippingInfo" role="tabpanel" aria-labelledby="nav-shippingInfo-tab" tabindex="0">
                            <form class="row g-3">
                                <div class="col-md-7">
                                  <label for="street" class="form-label">Street</label>
                                  <input type="text" class="form-control" id="street" style="height: 3.3125rem; border-radius: 0.625rem; border: 1px solid #618264;">
                                </div>
                                <div class="col-md-5">
                                  <label for="number" class="form-label">Number</label>
                                  <input type="text" class="form-control" id="number" style="height: 3.3125rem; border-radius: 0.625rem; border: 1px solid #618264;">
                                </div>
                                <div class="col-md-6">
                                    <label for="district" class="form-label">District</label>
                                    <input type="text" class="form-control" id="district" style="height: 3.3125rem; border-radius: 0.625rem; border: 1px solid #618264;">
                                  </div>
                                  <div class="col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" style="height: 3.3125rem; border-radius: 0.625rem; border: 1px solid #618264;">
                                  </div>
                                  <div class="col-md-7">
                                    <label for="province" class="form-label">Province</label>
                                    <input type="text" class="form-control" id="province" style="height: 3.3125rem; border-radius: 0.625rem; border: 1px solid #618264;">
                                  </div>
                                  <div class="col-md-5">
                                    <label for="postalCode" class="form-label">Postal Code</label>
                                    <input type="text" class="form-control" id="postalCode" style="height: 3.3125rem; border-radius: 0.625rem; border: 1px solid #618264;">
                                  </div>
                              </form>
                        </div>
                        <div class="tab-pane fade ms-5 me-5" id="nav-paymentMethod" role="tabpanel" aria-labelledby="nav-paymentMethod-tab" tabindex="0">
                            <div class="e-money mt-4">
                                <h6>E-Money</h6>
                            </div>
                            <div class="e-money-method mb-5">
                                <ul class="list-group gap-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-row-reverse rounded-3" style="border: 1px solid #618264;">
                                      <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="firstRadio" style="border-color: #618264;" checked>
                                      <label class="form-check-label" for="firstRadio">
                                        <img src="../assets/gopay.png" alt="">
                                        GoPay</label>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-row-reverse rounded-3" style="border: 1px solid #618264;">
                                      <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio" style="border-color: #618264;">
                                      <label class="form-check-label" for="secondRadio">
                                        <img src="../assets/ovo.png" alt="">
                                        OVO</label>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-row-reverse rounded-3" style="border: 1px solid #618264;">
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="thirdRadio" style="border-color: #618264;">
                                        <label class="form-check-label" for="thirdRadio">
                                            <img src="../assets/shopeePay.png" alt="">
                                            ShopeePay</label>
                                      </li>
                                  </ul>
                            </div>
                            <div class="credit">
                                <h6>Credit / Debit Card</h6>
                            </div>
                            <div class="credit-method">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-row-reverse rounded-3" style="border: 1px solid #618264;">
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="creditRadio" style="border-color: #618264;" checked>
                                        <label class="form-check-label" for="creditRadio">
                                            <img src="../assets/creditCard.png" alt="">
                                            Credit Card</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="payment-btn d-flex justify-content-center mt-5">
                                <button type="button" class="btn btn-success" style="width: 7.0625rem; height: 3.125rem; border-radius: 0.625rem; background: #618264;">Pay</button>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-3 mt-5 mb-5 p-3">
                <div class="titleOrder">
                    <h1>Order Summary</h1>
                </div>
                <div class="descriptionOrder d-flex justify-items-center align-items-center my-5">
                    <img src="../assets/product-payment.png" alt="">
                    start your plant journey with easy-to-care-for plants and comprehensive guidance.
                </div>
                <div class="calculation">
                    <div class="row-3 d-flex justify-content-between my-2">
                        <div>
                            Subtotal
                        </div>
                        <div>
                            Rp39.299,00
                        </div>
                    </div>
                    <div class="row-3 d-flex justify-content-between my-2">
                        <div>
                            Discount
                        </div>
                        <div>
                            Rp0,00
                        </div>
                    </div>
                    <div class="row-3 d-flex justify-content-between my-2">
                        <div>
                            Tax
                        </div>
                        <div>
                            Rp0,00
                        </div>
                    </div>
                    <hr class="border-1 border-black opacity-100">
                    <div class="row-3 d-flex justify-content-between my-2">
                        <div>
                            Total
                        </div>
                        <div>
                            Rp39.299,00
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</body>
</html>