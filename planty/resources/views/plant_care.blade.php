<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Plant Care</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet">
    <link href="{{ asset('/css/utils.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/plant_care_style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <x-navbar></x-navbar>
    <div class="d-flex flex-row plant-care-container">
        <div class="col-6 plant-care-img">
            <img class="w-100 h-100 object-fit-cover"
                src= "{{ asset('assets/plant-care/plant-care-background.jpeg') }}">
        </div>
        <div class="col-6 plant-care-list">

            @foreach ($content as $item)
                <x-plant-care-item plant_care_title="{{ $item['name'] }}" plant_care_desc="{{ $item['desc'] }}" plant_care_route="{{ $item['route'] }}" />
            @endforeach
        </div>
    </div>
    <x-footer></x-footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
