<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
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
        <h1 class="planty-heading-1">My Profile</h1>
        <div class="row">
            <img class="rounded-circle" src="{{ asset('user.png') }}" style="height: 50px">
            <p>{{ auth()->user()->username }}</p>
            <form action="" method="post" enctype="multipart/form-data" class="">
                <div class="d-flex flex-col">
                    <label for="redeem-code" class="form-label">Redeem Code</label>
                    <input type="text" name="redeem-code" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Redeem</button>
            </form>
        </div>
    </div>

    <x-footer>
    </x-footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
