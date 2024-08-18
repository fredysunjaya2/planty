<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Plant Care</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet">
    <link href="{{ asset('/css/utils.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/register_style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <x-navbar></x-navbar>
    <!-- Session Status -->

    <div class='row container-fluid register-container p-0 m-0'>
        <div class='col-5 register-img-container position-relative'>
            <video autoplay loop muted preload>
                <source src="{{ asset('/assets/login/login_background.mp4') }}" type="video/mp4">
            </video>
            <a class="position-absolute logo-img-container" href="{{ route('index') }}">
                <img alt="Bootstrap" src="{{ asset('/assets/planty.png') }}" class="object-fit-contain w-100 h-100">
            </a>
        </div>
        <form action="{{ route('login') }}" class="col-7 form-container login" enctype="multipart/form-data"
            method="POST">
            @csrf
            <h1 class="planty-heading-1 text-center mb-2">Login</h1>
            <div class="form-textfield">
                <div class="planty-heading-4 register-item">
                    <label class='p-0' for='email'>Email</label>
                    <input autocomplete="email" id='email' name='email' required type='text'
                        value="{{ old('email') }}">
                    <x-input-error :messages="$errors->get('email')" class="m-0 text-danger fs-6 planty-text-paragraph" />
                </div>
                <div class="planty-heading-4 register-item">
                    <label class='p-0' for='password'>Password</label>
                    <div class="d-flex pass-show-hide justify-content-between gap-2 position-relative">
                        <input autocomplete="new-password" id='password' name='password' style="width: 100%" required
                            type='password' value="{{ old('password') }}">
                        <span id="togglePassword" class="position-absolute end-0 me-3 my-auto" style="cursor: pointer;">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </span>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="m-0 text-danger fs-6 planty-text-paragraph" />
                </div>
            </div>
            <div class='register-agreement-container mb-5'>
                <div class='register-agreement'>
                    <input id='remember_me' name='remember' type='checkbox' value='False'
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class='planty-text-paragraph'>{{ __('Remember me') }}</label>
                </div>
            </div>
            <x-primary-btn type="submit">Login</x-primary-btn>
            <p class="text-center mt-2 planty-text-paragraph">Don't have an account?<a class="text-black"
                    href="{{ route('register') }}"> Register</a></p>
        </form>
    </div>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function(e) {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.innerHTML = type === 'password' ? '<i class="fa fa-eye" aria-hidden="true"></i>' :
                '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
