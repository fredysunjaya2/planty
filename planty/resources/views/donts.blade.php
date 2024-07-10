<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/donts.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/utils.css') }}" />
</head>
<body>
    {{-- navbar-start --}}
    <x-navbar></x-navbar>
    {{-- navbar-ending --}}
    <div class="page-container container-fluid p-0">

        {{-- jumbotron-start --}}
        <div class="jumbotron jumbotron-fluid" style="height: 48.9375rem;">
            <div class="jumbotron-container container text-center text-white justify-content-between d-flex flex-column" style="height: 60%">
              <h1 class="display-4" style="font-weight: 800; font-size: 3rem; font-family: Poppins, sans-serif; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Don'ts</h1>
              <div class="mistakes">
                  <p class="m-5" style="font-family: Poppins, sans-serif; font-weight: 600; font-size: 2rem; ">Avoid these common mistakes</p>'
                  {{-- START CARD COMPONENT! --}}
                    <div class="col d-flex justify-content-evenly align-items-center p-0 m-0">
                        <x-mistake-card>Neglecting ingredients</x-mistake-card>
                        <x-mistake-card>Neglecting ingredients</x-mistake-card>
                        <x-mistake-card>Neglecting ingredients</x-mistake-card>
                    </div>
                  {{-- END START COMPONENT --}}
              </div>
            </div>
        </div>
        {{-- jumbotron-ending --}}

        {{-- don'ts-content-start --}}
        <div class="content-container mx-12">
            {{-- START CONTENT COMPONENT --}}
            <div class="row d-flex flex-row justify-content-center align-items-center" style="height: 31.5rem;">
                <x-mistake-detail mistakeTitle="Neglecting Ingredients">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                </x-mistake-detail>
            </div>
            <div class="row d-flex flex-row-reverse justify-content-center align-items-center" style="height: 31.5rem;">
                <x-mistake-detail mistakeTitle="Neglecting Ingredients">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                </x-mistake-detail>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="height: 31.5rem;">
                <x-mistake-detail mistakeTitle="Neglecting Ingredients">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                </x-mistake-detail>
            </div>
            {{-- END CONTENT COMPONENT --}}
            <div class="blank" style="height: 10rem"></div>
        </div>
        {{-- don'ts-content-ending --}}

    </div>
    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</body>
</html>
