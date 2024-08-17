<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Planty</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet">
    <link href="{{ asset('/css/utils.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/profile_style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <x-navbar>
    </x-navbar>

    <div class="container-fluid profile-container">
        <h1 class="planty-heading-1 text-center">My Profile</h1>
        <div
            class="d-flex flex-row align-items-center justify-content-center profile-box profile-header column-gap-5 mb-5 mt-5">
            <img class="rounded-circle profile-pic" src="{{ asset('/assets/user.png') }}">
            <p class="planty-heading-2 username m-0">{{ auth()->user()->username }}</p>
            <form method="POST" class="ms-auto d-flex flex-row" id="redeem-code-form">
                @csrf
                <div class="d-flex flex-column">
                    <label for="redeem-code" class="form-label planty-heading-4 m-0">Redeem Code</label>
                    <div class="d-flex flex-row column-gap-4 redeem-code-btn-container">
                        <input type="text" name="redeem_code" class="form-control" id="redeem-code"
                            placeholder="Redeem Code">
                        <x-primary-btn type="button" id="redeem-button">Redeem</x-primary-btn>
                    </div>
                </div>
            </form>
        </div>
        <form class="d-flex flex-column profile-box profile-personal-info mb-5" method="POST"
            action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="header d-flex flex-row justify-content-between">
                <p class="planty-heading-3">Personal Information</p>
                <button type="button" class="d-flex flex-row align-items-center column-gap-3 edit-btn">
                    <p class="m-0 planty-heading-4">Edit</p>
                    <img src="{{ asset('/assets/edit.svg') }}">
                </button>
                <button type="submit" class="d-flex flex-row align-items-center column-gap-3 submit-btn">
                    <p class="m-0 planty-heading-4">OK</p>
                </button>
            </div>
            <div class="d-flex flex-row mb-3 column-gap-3">
                <div class="profile-item">
                    <label for="first_name" class="d-block planty-text m-0 w-100">First Name</label>
                    <input name="first_name" type="text" value="{{ auth()->user()->first_name }}"
                        class="planty-text-sentence m-0 w-100" disabled>
                </div>
                <div class="profile-item">
                    <label for="last_name" class="d-block planty-text m-0 w-100">Last Name</label>
                    <input name="last_name" type="text" value="{{ auth()->user()->last_name }}"
                        class="planty-text-sentence m-0 w-100" disabled>
                </div>
            </div>
            <div class="d-flex flex-row column-gap-3">
                <div class="profile-item">
                    <label for="email" class="d-block planty-text m-0 w-100">Email Address</label>
                    <input name="email" type="email" value="{{ auth()->user()->email }}"
                        class="planty-text-sentence m-0 w-100" disabled>
                </div>
                <div class="profile-item">
                    <label for="phone_number" class="d-block planty-text m-0 w-100">Phone Number</label>
                    <input name="phone_number" type="tel"
                        pattern="^\+?(\d{1,4}[-.\s]?)?(\(?\d{1,4}\)?[-.\s]?)?(\d{1,4}[-.\s]?){1,4}$"
                        value="{{ auth()->user()->phone_number }}" class="planty-text-sentence m-0 w-100" disabled>
                </div>
            </div>
        </form>
        <div class="d-flex flex-column profile-box profile-subscription mb-5">
            <div class="header d-flex flex-row justify-content-between">
                <p class="planty-heading-3">Subscription</p>
            </div>
            <div class="d-flex flex-row mb-3 column-gap-3">
                <div class="profile-item">
                    <p class="planty-text m-0 w-100">Username</p>
                    <p class="planty-text-sentence m-0 w-100">{{ auth()->user()->username }}</p>
                </div>
                <div class="profile-item">
                    <p class="planty-text m-0 w-100">Bill</p>
                    <p class="planty-text-sentence m-0 w-100">
                        @if ($date == '-')
                            {{ $date }}
                        @else
                            {{ $date->format('Y-m-d') }}
                        @endif
                    </p>
                </div>
            </div>
            <div class="d-flex flex-row column-gap-3">
                <div class="profile-item">
                    <p class="planty-text m-0 w-100">Status</p>
                    <p class="planty-text-sentence m-0 w-100">{{ $status }}</p>
                </div>
            </div>
        </div>
        <form class="d-flex flex-column profile-box profile-address mb-5" method="POST"
            action="{{ route('address.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="header d-flex flex-row justify-content-between">
                <p class="planty-heading-3">Address</p>
                <button type="button" class="d-flex flex-row align-items-center column-gap-3 edit-btn">
                    <p class="m-0 planty-heading-4">Edit</p>
                    <img src="{{ asset('/assets/edit.svg') }}">
                </button>
                <button type="submit" class="d-flex flex-row align-items-center column-gap-3 submit-btn">
                    <p class="m-0 planty-heading-4">OK</p>
                </button>
            </div>
            <div class="d-flex flex-row mb-3 column-gap-3">
                <div class="profile-item">
                    <label for="street_number" class="d-block planty-text m-0 w-100">Street, Number</label>
                    <input name="street_number" type="text" value="{{ auth()->user()->address->street_number }}"
                        class="planty-text-sentence m-0 w-100" disabled>
                </div>
                <div class="profile-item">
                    <label for="city" class="d-block planty-text m-0 w-100">City</label>
                    <input name="city" type="text" value="{{ auth()->user()->address->city }}"
                        class="planty-text-sentence m-0 w-100" disabled>
                </div>
            </div>
            <div class="d-flex flex-row mb-3 column-gap-3">
                <div class="profile-item">
                    <label for="country" class="d-block planty-text m-0 w-100">Country</label>
                    <input name="country" type="text" value="{{ auth()->user()->address->country }}"
                        class="planty-text-sentence m-0 w-100" disabled>
                </div>
                <div class="profile-item">
                    <label for="village" class="d-block planty-text m-0 w-100">Village</label>
                    <input name="village" type="text" value="{{ auth()->user()->address->village }}"
                        class="planty-text-sentence m-0 w-100" disabled>
                </div>
            </div>
            <div class="d-flex flex-row column-gap-3">
                <div class="profile-item">
                    <label for="district" class="d-block planty-text m-0 w-100">District</label>
                    <input name="district" type="text" value="{{ auth()->user()->address->district }}"
                        class="planty-text-sentence m-0 w-100" disabled>
                </div>
                <div class="profile-item">
                    <label for="postal_code" class="d-block planty-text m-0 w-100">Postal Code</label>
                    <input name="postal_code" type="text" value="{{ auth()->user()->address->postal_code }}"
                        class="planty-text-sentence m-0 w-100" disabled>
                </div>
            </div>
        </form>
        <form action="{{ route('logout') }}" enctype="multipart/form-data" class="d-flex justify-content-center pb-5" method="POST">
            @csrf
            <x-primary-btn type="submit" id="log-out">Log Out</x-primary-btn>
        </form>
    </div>
    <x-footer>
    </x-footer>
    <button type="button" class="btn btn-primary d-none modal-btn" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button>
    <!-- Modal -->
    <x-modal-general header="Error" btn="OK">The redeem code that is inputted is not correct</x-modal-general>


    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="{{ asset('/js/profile.js') }}"></script>
</body>

</html>
