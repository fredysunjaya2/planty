<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Payment Detail</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/paymentDetails.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/utils.css') }}" />
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
</head>

<body>
    <div class="container-fluid m-0 p-0">
        <form class="row col-12 p-0 m-0 d-flex justify-content-center" method="POST">
            @csrf
            <div class="paymentDetails col-6 mt-5 mb-5 p-3">
                <div class="title m-4">
                    <h3 class="planty-heading-3">Payment Details</h3>
                </div>
                <div class="content-tab">
                    <div>
                        <nav>
                            <div class="nav nav-underline m-0 p-0 gap-0 d-flex justify-content-center" id="nav-tab"
                                role="tablist">
                                <button class="nav-link active col-6 planty-heading-4" id="nav-customerDetails-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-customerDetails" type="button"
                                    role="tab" aria-controls="nav-customerDetails" aria-selected="true"
                                    style="color: rgba(0,0,0,0.4);">Customer Details</button>
                                <button class="nav-link col-6 planty-heading-4" id="nav-shippingInfo-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-shippingInfo" type="button"
                                    role="tab" aria-controls="nav-shippingInfo" aria-selected="false"
                                    style="color: rgba(0,0,0,0.4);">Shipping Info</button>
                            </div>
                        </nav>
                    </div>


                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active ms-5 me-5 mt-4" id="nav-customerDetails" role="tabpanel"
                            aria-labelledby="nav-customerDetails-tab" tabindex="0">
                            <div class="row g-4">
                                <div class="">
                                    <label for="inputEmail4" class="form-label planty-heading-4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4"
                                        value="{{ auth()->user()->email }}">
                                </div>
                                <div class="">
                                    <label for="formGroupExampleInput2" class="form-label planty-heading-4">First
                                        Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                        value="{{ auth()->user()->first_name }}">
                                </div>
                                <div class="">
                                    <label for="formGroupExampleInput" class="form-label planty-heading-4">Last
                                        Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        value="{{ auth()->user()->last_name }}">
                                </div>
                                <div class="">
                                    <label for="formGroupExampleInput3" class="form-label planty-heading-4">Phone
                                        Number</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput3"
                                        value="{{ auth()->user()->phone_number }}">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade ms-5 me-5 mt-4" id="nav-shippingInfo" role="tabpanel"
                            aria-labelledby="nav-shippingInfo-tab" tabindex="0">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="street" class="form-label planty-heading-4">Street</label>
                                    <input type="text" class="form-control" id="street"
                                        value="{{ auth()->user()->address->street_number ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="district" class="form-label planty-heading-4">District</label>
                                    <input type="text" class="form-control" id="district"
                                        value="{{ auth()->user()->address->country ?? '' }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="city" class="form-label planty-heading-4">City</label>
                                    <input type="text" class="form-control" id="city"
                                        value="{{ auth()->user()->address->city ?? '' }}">
                                </div>
                                <div class="col-md-7">
                                    <label for="province" class="form-label planty-heading-4">Province</label>
                                    <input type="text" class="form-control" id="province"
                                        value="{{ auth()->user()->address->village ?? '' }}">
                                </div>
                                <div class="col-md-5">
                                    <label for="postalCode" class="form-label planty-heading-4">Postal Code</label>
                                    <input type="text" class="form-control" id="postalCode"
                                        value="{{ auth()->user()->address->postal_code ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex col-4 mt-5 mb-5 pt-3 p-0 justify-content-end">
                <div class="col-10">
                    <div class="titleOrder">
                        <h1 class="planty-heading-1">Order Summary</h1>
                    </div>
                    <div
                        class="descriptionOrder d-flex justify-items-center align-items-center my-5 planty-text-sentence">
                        <img src="../assets/product-payment.png" alt="">
                        start your plant journey with easy-to-care-for plants and comprehensive guidance.
                    </div>
                    <div class="calculation">
                        <div class="row-3 d-flex justify-content-between my-2">
                            <div class="planty-text-sentence">
                                Subtotal
                            </div>
                            <div class="planty-text-sentence" id="subtotalValue">
                                {{-- {{ $oldPrice }} --}}
                                {{ 'Rp ' . number_format($product->price, 2, ',', '.') }}
                            </div>
                        </div>
                        <div class="row-3 d-flex justify-content-between my-2">
                            <div class="planty-text-sentence">
                                Discount
                            </div>
                            <div class="planty-text-sentence" id="discountValue">
                                {{-- {{ $discount }} --}}
                                {{ 'Rp ' . number_format($product->price * $product->discount, 2, ',', '.') }}
                            </div>
                        </div>
                        <div class="row-3 d-flex justify-content-between my-2">
                            <div class="planty-text-sentence">
                                Tax
                            </div>
                            <div class="planty-text-sentence">
                                {{-- utk test doang, harusnya subsId disimpan saja, tidak ditampilkan --}}
                                {{-- {{ $product->subsCategory->id }} --}}
                                Rp 0,00
                            </div>
                        </div>
                        <hr class="border-1 border-black opacity-100">
                        <div class="row-3 d-flex justify-content-between my-2">
                            <div class="planty-heading-4">
                                Total
                            </div>
                            <div class="planty-heading-4" id="totalValue">
                                {{-- {{ $discountedPrice }} --}}
                                {{ 'Rp ' . number_format($product->price - $product->price * $product->discount, 2, ',', '.') }}
                            </div>
                        </div>
                    </div>
                    <div class="payment-btn d-flex justify-content-center mt-5">
                        <button id="pay-button" type="button" class="btn btn-success planty-heading-4 text-white"
                            style="width: 7.0625rem; height: 3.125rem; border-radius: 0.625rem; background: #618264;">Pay</button>
                    </div>
                </div>
            </div>
            <div class="col-1 p-0"></div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        var gift = {
            "isGift": {{ $gift }},
            "subs_id": {{ $product->id }},
            "discounted_price": {{ $product->price - $product->price * $product->discount }},
        };
    </script>
    <script src="{{ asset('/js/payment_detail.js') }}"></script>
</body>

</html>
