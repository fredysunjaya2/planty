<nav class="navbar fixed-top navbar-expand-lg">
    <div class="container-fluid position-relative pt-lg-0 pb-lg-0 pt-2 pb-2">
        <a class="navbar-brand p-0 m-0"></a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="position-absolute top-0 bottom-0 start-0 end-0 m-auto" id="img-logo" href="{{ route('index') }}">
            <img alt="Bootstrap" src="/assets/planty.png" class="w-100 h-100">
        </a>
        <div class="container-fluid collapse navbar-collapse pt-lg-0 pt-3" id="navbarSupportedContent">
            <ul class="ps-lg-4 me-auto align-items-center navbar-nav column-gap-4">
                <li class="nav-item">
                    <a aria-current="page" class="nav-link {{ Route::is('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('plant-care') ? 'active' : '' }}" href="{{ route('plant-care') }}">Plant Care</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('subscription') ? 'active' : '' }}" href="{{ route('subscription') }}">Subscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
                </li>
            </ul>
            <ul class="pe-lg-4 me-lg-5 navbar-nav align-items-center column-gap-4 justify-content-end">
                <li class="nav-item">
                    <a aria-current="page" class="nav-link {{ Route::is('about-us') ? 'active' : '' }}" href="{{ route('about-us') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('contact-us') ? 'active' : '' }}" href="{{ route('contact-us') }}">Contact</a>
                </li>
                @if (auth()->user() == null)
                    <li class="nav-item">
                        <a href="{{ route('login') }}">
                            <button class="register-btn planty-heading-1" name='register' type='button'>Login</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}">
                            <button class="register-btn planty-heading-1" name='register' type='button'>Register</button>
                        </a>
                    </li>
                @else
                    <li class="nav-item profile-pic">
                        <a class="nav-link" href="{{ route('profile') }}">
                            <img class="rounded-circle" src="/assets/user.png" style="height: 40px">
                        </a>
                    </li>
                    <li class="nav-item profile">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
