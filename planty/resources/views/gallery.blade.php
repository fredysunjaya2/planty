<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Gallery</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet">
    <link href="{{ asset('/css/utils.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/gallery_style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <x-navbar>

    </x-navbar>
    @if ($categorizedData != null)
        <div class='container-fluid gallery-container'>
            @foreach ($categorizedData as $item_key => $item)
                <x-gallery-item :list="$item" :year="$item_key">
                </x-gallery-item>
            @endforeach
        </div>
    @else
        <div class="no-data-container d-flex flex-column align-items-center justify-content-center">
            <img src="{{ asset('/assets/gallery/no-data.png') }}" class="h-50 w-100 object-fit-contain">
            <h1 class="planty-heading-1 text-center">There is No Data</h1>
        </div>
    @endif
    <x-footer>

    </x-footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
