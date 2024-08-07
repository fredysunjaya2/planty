<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/productDetail.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/utils.css') }}" />
</head>

<body>
    <x-navbar></x-navbar>
    <div class="d-flex flex-row m-0 p-0 w-100 product-detail-container">
        <div class="col-5 h-100 product-detail-img">
            <img src="{{ asset('/assets/beginner_kit.png') }}" alt="" class="w-100 h-100" style="object-fit: cover;">
        </div>
        <div class="container-content col d-flex align-items-start">
            <div class="content d-flex flex-column justify-content-center">
                <a href="{{ route('subscription') }}" style="color: #122218" class="back-btn">
                    <div class="back-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40px" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg>
                    </div>
                </a>
                <form method="POST" enctype="multipart/form-data" id="formProduct" class="box-content mt-3"
                    style="padding-left: 5%">
                    @csrf
                    <div class="title d-flex w-100 justify-content-between align-items-center flex-wrap">
                        <div class="tier">
                            <h1 class="planty-heading-1">{{ $pricings[0]->subsTier->tier_name }}</h1>
                            <p class="planty-text-sentence">subscription plan</p>
                        </div>
                        <div class="price ms-auto planty-text-sentence d-flex column align-items-center">
                            <h2 class="planty-heading-2"><span
                                    id="pricePerMonth">{{ number_format(($pricings[2]->price - $pricings[2]->price * $pricings[2]->discount) / $pricings[2]->months, 2, ',', '.') }}</span>
                            </h2>
                            /Month
                        </div>
                    </div>
                    <div class="description d-flex flex-column justify-center row-gap-4 mt-4">
                        <div class="plan row-8">
                            <h3 class="planty-heading-4">Delivered Monthly</h3>
                            <p class="planty-text-sentence">Receive 1 kit of Beginner each month directly to your
                                door shipped within 12-48 hours of processed payment. Plan doesn’t auto renews.</p>
                            <h3 class="planty-heading-4">Recurring Plan</h3>
                            <select id="planSelect" class="form-select package-option" aria-label="Default select example"
                                name="subs-category">
                                @foreach ($pricings as $item)
                                    <option
                                        value="{{ route('payment-detail', $item->slug . '-' . $item->months . '-months') }}">
                                        @if ($item->months == 1)
                                            <p class="planty-text-sentence">{{ $item->months . ' month prepaid' }}</p>
                                        @else
                                            <p class="planty-text-sentence">{{ $item->months . ' months prepaid' }}</p>
                                            <p class="planty-heading-4">{{ '(save ' . $item->discount * 100 . '%)' }}
                                            </p>
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="pricing row-4 d-flex justify-content-center align-items-center">
                            <h3 class="me-1 planty-heading-4 opacity-50 strikethrough-price"><del><span
                                        id="oldPrice">{{ number_format($pricings[2]->price, 0, ',', '.') }}</span></del>
                            </h3>
                            <h3 class="ms-1 planty-heading-4"><span
                                    id="discountedPrice">{{ number_format($pricings[2]->price - $pricings[2]->price * $pricings[2]->discount, 2, ',', '.') }}</span>
                            </h3>
                        </div>
                    </div>
                    <div class="as-gift d-flex align-items-center">
                        <input class="form-check-input rounded-0" style="width: 20px; height:20px;"
                            type="checkbox" id="flexCheckDefault" name="gift">
                        <label class="form-check-label planty-heading-4 ms-2" for="flexCheckDefault">
                            Give as a gift
                        </label>
                    </div>
                    <hr class="border-2 m-0" style="border-color: #618264; ">
                    <div class="payment-btn d-flex justify-content-center mt-3">
                        {{-- <button type="submit" class="btn btn-success planty-heading-4 text-white"
                            style="border-radius: 0.625rem;">Payment</button> --}}
                        <x-primary-btn type="submit">Payment</x-primary-btn>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
    <script>
        var pricings = @json($pricings); // Pass the pricing data to JavaScript
    </script>
    <script src="{{ asset('/js/product_detail.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer>
    </script>
</body>

</html>
